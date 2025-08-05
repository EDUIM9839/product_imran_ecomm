<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('subcategories.index', compact('categories'));
    }

    public function list(Request $request) {
        $subcategories = SubCategory::with('category')->select('sub_categories.*');
        return datatables()->of($subcategories)
            ->addColumn('checkbox', function($row){ /*...*/ })
            ->addColumn('image', function($row){ /*...*/ })
            ->addColumn('category_name', function($row){ return $row->category->name; })
            ->editColumn('status', function($row){ /*...*/ })
            ->addColumn('action', function($row){ /*...*/ })
            ->rawColumns(['checkbox','image','status','action'])
            ->make(true);
    }

    public function store(Request $request) {
        // Validate & Save SubCategory
    }

    public function update(Request $request) {
        // Validate & Update SubCategory
    }

    public function delete(Request $request) {
        // Delete Single SubCategory
    }

    public function bulkDelete(Request $request) {
        // Bulk Delete SubCategories
    }
}

