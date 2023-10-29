<?php

namespace App\Http\Controllers;

use App\Models\Floor;
use Illuminate\Http\Request;

class FloorController extends Controller
{




    /* floor or, book table */

    public function history()
    {
        return view('admin.history');
    }

    public function book()
    {
        $data = Floor::orderBy('id', 'asc')->get();


        return view('admin.tablebook', compact('data'));
    }

    public function book_show($id)
    {
        $data = Floor::find($id);

        return view('admin.tablebook', compact('data'));
    }

    /* create floor     and    view floor */
    public function viewFloor()
    {
        return view('admin.tableBookCreate');
    }

    public function createFloor(Request $request)
    {
        $data = new Floor();

        $data->spot = $request->spot;
        $data->isBooked = $request->isBooked;
        $data->capacity = $request->capacity;

        // image
        $image = $request->spotImg;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('floorImg', $imagename);
            $data->spotImg = $imagename;
        }

        $data->save();

        return redirect()->back()->with('message', 'Successfully created Spot');
    }

    public function floorcheckout()
    {
        return view('admin.adminfloorcheckout');
    }
}
