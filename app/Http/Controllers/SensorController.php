<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sensor;
use App\Models\Station;

class SensorController extends Controller
{

    public function index() {
        $sensors = Sensor::get();
        return view('sensors.index',compact('sensors'));
    }

    public function create() {
        return view('sensors.create');
    }

    public function store(Request $request) {

        $validated = $request->validate([
            'name' => 'required|unique:sensors',
        ]);

        $sensor             = new Sensor;
        $sensor->name       = $request->name;
        $sensor->code       = $request->code;
        $sensor->status     = $request->status;
        $sensor->save();
        return redirect()->route('sensors')->with('success','Sensor Create Successfully');

    }

    public function edit($id) {

        $sensor = Sensor::where('id',$id)->first();
        return view('sensors.edit',compact('sensor',$sensor));
    }

    public function update(Request $request,$id) {

        $sensor             = Sensor::where('id',$id)->first();
        $sensor->name       = $request->name;
        $sensor->code       = $request->code;
        $sensor->status     = $request->status;
        $sensor->save();

        return redirect()->route('sensors')->with('success','Sensor Update Successfully');
    }

    public function delete($id) {

        $sensor = Sensor::where('id',$id)->delete();
        return redirect()->back();
    }

    public function status(Request $request) {

        $sensor = Sensor::find($request->id);
        $sensor->status = $request->status;
        $sensor->save();

        return response()->json(['success'=>'Status change successfully.']);
    }


}
