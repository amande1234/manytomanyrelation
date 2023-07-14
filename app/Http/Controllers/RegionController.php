<?php

namespace App\Http\Controllers;
use App\Models\region;
use App\Models\store;

use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function view(Request $request)
    {
        return view('addregion');
    }
    public function submit(Request $request)
    {
        $request->validate([
            'region_name' => 'required',
        ]);
        $region = region::create($_REQUEST);
        if ($region->save()) {
            $request->session()->flash('success', 'data submitted successfully');
        } else {
            $request->session()->flash('error', 'data not submitted successfully');
        }

        return back();
    }
    public function relationship(Request $request){
        $store_list= store::all();
    //    print_r($region_list);die;s
        return view ('regionrelation',['store_list'=>$store_list]);
    }
   
        public function relationship_submit(Request $request){
        // dd($_REQUEST);

            $region = new region();
            $region->region_name = $request->region_name;
            $region->save();
            $region->stores()->attach($request->store_name);
          
        }
}
