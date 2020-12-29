<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Export;
use Illuminate\Http\Request;

class ExportController extends Controller
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
            $export = Export::where('a', 'LIKE', "%$keyword%")
                ->orWhere('declaration_type', 'LIKE', "%$keyword%")
                ->orWhere('year_in_yy', 'LIKE', "%$keyword%")
                ->orWhere('month', 'LIKE', "%$keyword%")
                ->orWhere('running_no', 'LIKE', "%$keyword%")
                ->orWhere('item_no', 'LIKE', "%$keyword%")
                ->orWhere('origin_code', 'LIKE', "%$keyword%")
                ->orWhere('destination_code', 'LIKE', "%$keyword%")
                ->orWhere('transportation', 'LIKE', "%$keyword%")
                ->orWhere('tax_id', 'LIKE', "%$keyword%")
                ->orWhere('company_branch', 'LIKE', "%$keyword%")
                ->orWhere('customs_coordinates', 'LIKE', "%$keyword%")
                ->orWhere('product_code', 'LIKE', "%$keyword%")
                ->orWhere('product_code_unit', 'LIKE', "%$keyword%")
                ->orWhere('privilege_code', 'LIKE', "%$keyword%")
                ->orWhere('duty_rate_percent', 'LIKE', "%$keyword%")
                ->orWhere('duty_rate_condition', 'LIKE', "%$keyword%")
                ->orWhere('brought_back', 'LIKE', "%$keyword%")
                ->orWhere('promote_investment', 'LIKE', "%$keyword%")
                ->orWhere('bonded_warehouse', 'LIKE', "%$keyword%")
                ->orWhere('claim_duty', 'LIKE', "%$keyword%")
                ->orWhere('reimport_reexport', 'LIKE', "%$keyword%")
                ->orWhere('freezone', 'LIKE', "%$keyword%")
                ->orWhere('epz', 'LIKE', "%$keyword%")
                ->orWhere('multiple_boat_declaration', 'LIKE', "%$keyword%")
                ->orWhere('import_export_date', 'LIKE', "%$keyword%")
                ->orWhere('payment_place_code', 'LIKE', "%$keyword%")
                ->orWhere('payment_number', 'LIKE', "%$keyword%")
                ->orWhere('payment_date', 'LIKE', "%$keyword%")
                ->orWhere('release_location_code', 'LIKE', "%$keyword%")
                ->orWhere('release_date', 'LIKE', "%$keyword%")
                ->orWhere('pickup_location_code', 'LIKE', "%$keyword%")
                ->orWhere('pickup_date', 'LIKE', "%$keyword%")
                ->orWhere('making_year', 'LIKE', "%$keyword%")
                ->orWhere('making_month', 'LIKE', "%$keyword%")
                ->orWhere('weight', 'LIKE', "%$keyword%")
                ->orWhere('volume', 'LIKE', "%$keyword%")
                ->orWhere('value_in_baht', 'LIKE', "%$keyword%")
                ->orWhere('value_in_other', 'LIKE', "%$keyword%")
                ->orWhere('currency_code', 'LIKE', "%$keyword%")
                ->orWhere('duty', 'LIKE', "%$keyword%")
                ->orWhere('vat', 'LIKE', "%$keyword%")
                ->orWhere('excise_tax', 'LIKE', "%$keyword%")
                ->orWhere('fee', 'LIKE', "%$keyword%")
                ->orWhere('commerce_fee', 'LIKE', "%$keyword%")
                ->orWhere('interior_tax', 'LIKE', "%$keyword%")
                ->orWhere('other_tax', 'LIKE', "%$keyword%")
                ->orWhere('excise_coordinate', 'LIKE', "%$keyword%")
                ->orWhere('excise_tax_percent', 'LIKE', "%$keyword%")
                ->orWhere('excise_tax_condition', 'LIKE', "%$keyword%")
                ->orWhere('customs_set', 'LIKE', "%$keyword%")
                ->orWhere('hscode', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $export = Export::latest()->paginate($perPage);
        }

        return view('export.index', compact('export'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('export.create');
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
        
        Export::create($requestData);

        return redirect('export')->with('flash_message', 'Export added!');
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
        $export = Export::findOrFail($id);

        return view('export.show', compact('export'));
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
        $export = Export::findOrFail($id);

        return view('export.edit', compact('export'));
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
        
        $export = Export::findOrFail($id);
        $export->update($requestData);

        return redirect('export')->with('flash_message', 'Export updated!');
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
        Export::destroy($id);

        return redirect('export')->with('flash_message', 'Export deleted!');
    }
}
