<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        //$keyword = $request->get('search');
        $resource_name = $request->get('resource_name');
        //$perPage = 25;

        switch($resource_name){
            case "ข้าวนาปี" : 
            case "ข้าวนาปรัง" : 
            case "มันสำปะหลัง" : 
            case "ข้าวโพด" : 
            case "ยางพารา" : 
            case "ปาล์ม" :                 
                $product = Product::where('resource_name',$resource_name)->latest()->get();
                
                $product_thailands = Product::where('resource_name',$resource_name)
                    //->whereRaw("concat('',volume * 1) = volume", [])
                    ->groupBy('harvest_date')
                    ->select('harvest_date', DB::raw('SUM(volume) as total_volume'))
                    ->get();
                break;
            default :
                return redirect('product?resource_name=ข้าวโพด');

        }

        /*
        if (!empty($keyword)) {
            $product = Product::where('harvest_date', 'LIKE', "%$keyword%")
                ->orWhere('area', 'LIKE', "%$keyword%")
                ->orWhere('resource_name', 'LIKE', "%$keyword%")
                ->orWhere('label', 'LIKE', "%$keyword%")
                ->orWhere('volume', 'LIKE', "%$keyword%")
                ->orWhere('freq', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $product = Product::latest()->paginate($perPage);
        }
        */
        return view('product.index', compact('product','product_thailands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Product::create($requestData);

        return redirect('product')->with('flash_message', 'Product added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $product = Product::findOrFail($id);
        $product->update($requestData);

        return redirect('product')->with('flash_message', 'Product updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Product::destroy($id);

        return redirect('product')->with('flash_message', 'Product deleted!');
    }
}
