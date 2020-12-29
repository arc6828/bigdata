<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Export_2hs_time;

class Export_2hs_timeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $year_at = $request->get('year_at');
        $exporter = $request->get('exporter');
        $importer = $request->get('importer');
        $hscode = $request->get('hscode');
        $value = $request->get('value');
        $unit = $request->get('unit');
        $trade_type = $request->get('trade_type');

        if (!empty($year_at) || !empty($exporter) || !empty($hscode)) {
            $export_2hs_time = Export_2hs_time::select('id','year_at','exporter','hscode','value')
                ->where('year_at', "LIKE" ,"%$year_at%")
                ->where('exporter', 'LIKE', "%$exporter%")
                // ->where('importer', 'LIKE', "%$importer%")
                ->where('hscode', 'LIKE', "%$hscode%")
                // ->where('value', 'LIKE', "%$value%")
                // ->where('unit', 'LIKE', "%$unit%")
                // ->where('trade_type', 'LIKE', "%$trade_type%")
                ->get();
        } else {
            // $export_2hs_time = Export_2hs_time::latest()->paginate($perPage);
            return redirect("api/export-2hs?year_at=2019&hscode=99&exporter=thailand");
            $export_2hs_time = Export_2hs_time::select('id','year_at','exporter','hscode','value')
                ->limit(1000)
                ->get();
        }
        return $export_2hs_time;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
