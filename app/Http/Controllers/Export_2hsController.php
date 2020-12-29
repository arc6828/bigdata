<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Export_2h;
use Illuminate\Http\Request;

class Export_2hsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $export_2hs = Export_2h::where('hscode', 'LIKE', "%$keyword%")
                ->orWhere('product', 'LIKE', "%$keyword%")
                ->orWhere('html_title', 'LIKE', "%$keyword%")
                ->orWhere('html_data', 'LIKE', "%$keyword%")
                ->orWhere('json', 'LIKE', "%$keyword%")
                ->orWhere('scraping_date', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $export_2hs = Export_2h::latest()->paginate($perPage);
        }

        return view('export_2hs.index', compact('export_2hs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('export_2hs.create');
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
        
        Export_2h::create($requestData);

        return redirect('export_2hs')->with('flash_message', 'Export_2h added!');
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
        $export_2h = Export_2h::findOrFail($id);

        return view('export_2hs.show', compact('export_2h'));
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
        $export_2h = Export_2h::findOrFail($id);

        return view('export_2hs.edit', compact('export_2h'));
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
        
        $export_2h = Export_2h::findOrFail($id);
        $export_2h->update($requestData);

        return redirect('export_2hs')->with('flash_message', 'Export_2h updated!');
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
        Export_2h::destroy($id);

        return redirect('export_2hs')->with('flash_message', 'Export_2h deleted!');
    }
}
