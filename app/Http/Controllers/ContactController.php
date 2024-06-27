<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $allData = contact::all();

        return view('dashboard.setting', compact('allData'));


    }
    public function create()
    {


        return view('dashboard.setting');


    }
    public function store(Request $request)
    {

        $data = new contact;
        $data->name = $request->name;
        $data->gmail = $request->gmail;
        $data->message = $request->message;
       

        $data->save();
        return redirect()->back()->with('success', 'contact detail are store successfully');


    }
    public function destroy($id){
        $data = contact::find($id);


        if ($data) {
            $data->delete();
            return redirect()->route('setting.index')->with('success', 'Data Deleted Successfully');
        } else {

            return redirect()->route('setting.index')->with('error', 'Data not found');
        }
        }

}
