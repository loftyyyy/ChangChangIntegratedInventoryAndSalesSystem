<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Product;
use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReportsController extends Controller
{
    public function index()
    {
        // Get today's date
        $today = Carbon::today();
        
        // Get sales data for today
        $todaySales = DB::table('sales')
            ->whereDate('SaleDate', $today)
            ->select(DB::raw('ROUND(SUM(TotalAmount)) as total'))
            ->value('total') ?? 0;
            
        // Get items sold today
        $itemsSoldToday = DB::table('sales_items')
            ->join('sales', 'sales_items.SaleID', '=', 'sales.SaleID')
            ->whereDate('sales.SaleDate', $today)
            ->sum('sales_items.Quantity');
            
        // Get number of transactions today
        $transactionsToday = Sale::whereDate('SaleDate', $today)
            ->count();
            
        // Get void transactions today (since we don't have status, this will be 0)
        $voidTransactionsToday = 0;
            
        // Get inventory summary
        $inventorySummary = [
            'quantity_in_hand' => Inventory::sum('QuantityOnHand'),
            'quantity_to_receive' => 0, // This would come from purchase orders
            'low_stock_items' => DB::table('products')
                ->join('inventories', 'products.ProductID', '=', 'inventories.ProductID')
                ->whereRaw('inventories.QuantityOnHand <= (products.OpeningStock/2 - 1)')
                ->count(),
            'total_items' => Product::count(),
            'active_items' => Product::whereHas('inventory', function($query) {
                $query->where('QuantityOnHand', '>', 0);
            })->count()
        ];
        
        // Get top selling items this month
        $topSellingItems = DB::table('sales_items')
            ->join('products', 'sales_items.ProductID', '=', 'products.ProductID')
            ->join('sales', 'sales_items.SaleID', '=', 'sales.SaleID')
            ->join('categories', 'products.CategoryID', '=', 'categories.CategoryID')
            ->whereMonth('sales.SaleDate', Carbon::now()->month)
            ->select(
                'products.ProductName',
                'categories.CategoryName',
                DB::raw('CAST(SUM(sales_items.Quantity) AS DECIMAL(10,2)) as total_quantity'),
                DB::raw('CAST(SUM(sales_items.Quantity * sales_items.PriceAtSale) AS DECIMAL(10,2)) as total_sales')
            )
            ->groupBy('products.ProductID', 'products.ProductName', 'categories.CategoryName')
            ->orderBy('total_quantity', 'desc')
            ->limit(5)
            ->get();
            
        // Get sales history by status (since we don't have status, all will be 0)
        $salesHistory = [
            'draft' => 0,
            'confirmed' => 0,
            'packed' => 0,
            'shipped' => 0,
            'invoiced' => 0
        ];
        
        // Get monthly sales data for the chart
        $monthlySales = Sale::whereMonth('SaleDate', Carbon::now()->month)
            ->select(
                DB::raw('DATE(SaleDate) as date'),
                DB::raw('CAST(SUM(TotalAmount) AS DECIMAL(10,2)) as total')
            )
            ->groupBy('date')
            ->get();
            
        // Get total sales for the month
        $monthlyTotal = DB::table('sales')
            ->whereMonth('SaleDate', Carbon::now()->month)
            ->select(DB::raw('CAST(SUM(TotalAmount) AS DECIMAL(10,2)) as total'))
            ->value('total') ?? 0;

        return view('reports', compact(
            'todaySales',
            'itemsSoldToday',
            'transactionsToday',
            'voidTransactionsToday',
            'inventorySummary',
            'topSellingItems',
            'salesHistory',
            'monthlySales',
            'monthlyTotal'
        ));
    }
} 