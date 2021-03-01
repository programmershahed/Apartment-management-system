<?php

namespace App\Http\Controllers;
use App\Models\unit;
use Illuminate\Http\Request;


class UnitController extends Controller
{
    public function addunit(){
        return view(view:'components.addunit');
    }


    public function unitstore(Request $request){
  

        $unit_obj = new unit;

        $unit_obj->build_section = $request->build_section;
        $unit_obj->floor_no = $request->floor_no;
        $unit_obj->unit = $request->unit;
        $unit_obj->unit_number = $request->unit_number;
        $unit_obj->unit_types = $request->unit_types;
        $unit_obj->no_bathroom = $request->no_bathroom;
        $unit_obj->no_badroom = $request->no_badroom;
        $unit_obj->yearly_market_rental = $request->yearly_market_rental;
        $unit_obj->deposit = $request->deposit;

        $unit_obj->save();

        $request->validate([
            'build_section' => 'required',
            'floor_no' => 'required',
            'unit' => 'required',
            'unit_number' => 'required',
            'no_of_floors' => 'required',
            'unit_types' => 'required',
            'no_bathroom' => 'required',
            'no_badroom' => 'required',
            'yearly_market_rental' => 'required',
            'deposit' => 'required',
        ],[
            'build_section.required' => 'Please select Building Name',
            'floor_no.required' => 'Please Input Floor No',
            'unit.required' => 'Please write unit',
            'unit_number.required' => 'Please Input unit number',
            'no_of_floors.required' => 'Please Input No of Floors',
            'unit_types.required' => 'Please input unit types',
            'no_bathroom.required' => 'Please input Number of bathroom',
            'no_badroom.required' => 'Please input Number of badroom',
            'yearly_market_rental.required' => 'Please input yearly rental ',
            'deposit.required' => 'Please input deposit',
        ]);
     
           return redirect()->back()->with('success','successfully building added');
    }
}
