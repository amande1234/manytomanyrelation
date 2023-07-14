<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\store;
use App\Models\region;

class StoreController extends Controller
{
    public function view(Request $request)
    {
        return view('addstore');
    }
    public function submit(Request $request)
    {
        $request->validate([
            'store_name' => 'required',
        ]);
        $store = store::create($_REQUEST);
        if ($store->save()) {
            $request->session()->flash('success', 'data submitted successfully');
        } else {
            $request->session()->flash('error', 'data not submitted successfully');
        }

        return back();
    }
    public function relationship(Request $request){
        $region_list= region::all();
    //    print_r($region_list);die;s
        return view ('relation',['region_list'=>$region_list]);
    }
   
        public function relationship_submit(Request $request){
        // dd($_REQUEST);

            $store = new store();
            $store->store_name = $request->store_name;
            $store->save();
            $store->regions()->attach($request->region_name);
          
        }
    }

