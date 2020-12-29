<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Export_2hs_time;
use Illuminate\Http\Request;

class Export_2hs_timeController extends Controller
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
            $export_2hs_time = Export_2hs_time::where('year_at', 'LIKE', "%$keyword%")
                ->orWhere('exporter', 'LIKE', "%$keyword%")
                ->orWhere('importer', 'LIKE', "%$keyword%")
                ->orWhere('hscode', 'LIKE', "%$keyword%")
                ->orWhere('value', 'LIKE', "%$keyword%")
                ->orWhere('unit', 'LIKE', "%$keyword%")
                ->orWhere('trade_type', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $export_2hs_time = Export_2hs_time::latest()->paginate($perPage);
        }

        return view('export_2hs_time.index', compact('export_2hs_time'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('export_2hs_time.create');
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
        
        Export_2hs_time::create($requestData);

        return redirect('export_2hs_time')->with('flash_message', 'Export_2hs_time added!');
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
        $export_2hs_time = Export_2hs_time::findOrFail($id);

        return view('export_2hs_time.show', compact('export_2hs_time'));
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
        $export_2hs_time = Export_2hs_time::findOrFail($id);

        return view('export_2hs_time.edit', compact('export_2hs_time'));
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
        
        $export_2hs_time = Export_2hs_time::findOrFail($id);
        $export_2hs_time->update($requestData);

        return redirect('export_2hs_time')->with('flash_message', 'Export_2hs_time updated!');
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
        Export_2hs_time::destroy($id);

        return redirect('export_2hs_time')->with('flash_message', 'Export_2hs_time deleted!');
    }
}
