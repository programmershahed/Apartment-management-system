<?php

namespace App\Http\Controllers;
use App\Models\building;
use Illuminate\Http\Request;

class AddbuilingController extends Controller
{
    public function addbuilding(){
        return view(view:'components.addbuilding');
    }


    public function buildingdatastore(Request $request){
  

        $building_obj = new building;

        $building_obj->building_name = $request->building_name;
        $building_obj->building_number = $request->building_number;
        $building_obj->owner_name = $request->owner_name;
        $building_obj->owner_number = $request->owner_number;
        $building_obj->no_of_floors = $request->no_of_floors;
        $building_obj->no_of_units = $request->no_of_units;
        $building_obj->unit_details = $request->unit_details;
        $building_obj->address = $request->address;

        $building_obj->save();

        $request->validate([
            'buildingname' => 'required',
            'building_number' => 'required',
            'owner_name' => 'required',
            'owner_number' => 'required',
            'no_of_floors' => 'required',
            'no_of_units' => 'required',
            'unit_details' => 'required',
            'address' => 'required',
        ],[
            'building_name.required' => 'Please Input Building Name',
            'building_number.required' => 'Please Input Building Number',
            'owner_name.required' => 'Please Input Owner Name',
            'owner_number.required' => 'Please Input Owner Number',
            'no_of_floors.required' => 'Please Input Number of Floors',
            'no_of_units.required' => 'Please Input Numbers of units',
            'unit_details.required' => 'Please write unit details',
            'address.required' => 'Please write building address',
        ]);

          
           
      
           return redirect()->back()->with('success','successfully building added');
    }
}
