<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
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
            $country = Country::where('code', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('iso_code', 'LIKE', "%$keyword%")
                ->orWhere('iso_name', 'LIKE', "%$keyword%")
                ->orWhere('parentCode', 'LIKE', "%$keyword%")
                ->orWhere('parentName', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $country = Country::latest()->paginate($perPage);
        }

        return view('country.index', compact('country'));
    }

    public function import()
    {
        $path = url('json/countries.json');
        $countries = json_decode(file_get_contents($path), true);

        $path = url('json/final-countries.json');
        $final_countries = json_decode(file_get_contents($path), true);
        Country::truncate();

        foreach($final_countries as $item){
            $item['parentCode'] = "";
            $item['parentName'] = "";       
            foreach($countries as $c) {
                if ($c["code"] == $item["code"]) {                    
                    $item['parentCode'] = $c["parent"]["code"];
                    $item['parentName'] = $c["parent"]["name"];       
                    break;
                }
            }
   

            print_r($item);
            echo "<br>";
            // break;
            Country::create($item);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('country.create');
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
        
        Country::create($requestData);

        return redirect('country')->with('flash_message', 'Country added!');
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
        $country = Country::findOrFail($id);

        return view('country.show', compact('country'));
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
        $country = Country::findOrFail($id);

        return view('country.edit', compact('country'));
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
        
        $country = Country::findOrFail($id);
        $country->update($requestData);

        return redirect('country')->with('flash_message', 'Country updated!');
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
        Country::destroy($id);

        return redirect('country')->with('flash_message', 'Country deleted!');
    }
}
