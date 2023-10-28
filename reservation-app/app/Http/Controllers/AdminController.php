<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Foodchef;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{



    public function user()
    {
        $data = User::all();

        return view('admin.user', compact('data'));
    }

    public function deleteuser($id)
    {
        $data = User::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'User is successfully deleted.');
    }


    public function foodmenu()
    {
        $data = Food::all();

        return view('admin.foodmenu', compact('data'));
    }



    public function upload(Request $request)
    {
        $data = new Food();

        // image
        $image = $request->image;
        // if ($image) {
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image = $imagename;
        // }

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;

        $data->save();

        return redirect()->back()->with('message', 'Food menu is successfully added.');
    }




    public function deletemenu($id)
    {
        $data = Food::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Food is successfully deleted.');
    }


    public function updateview($id)
    {
        $data = Food::find($id);

        return view('admin.updateview', compact('data'));
    }


    public function update(Request $request, $id)
    {

        $data = Food::find($id);

        // image
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image = $imagename;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;

        $data->save();

        return redirect()->back()->with('message', 'Food menu is successfully update.');
    }


    /*   resevation */

    public function reservation(Request $request)
    {
        $data = new Reservation();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;

        $data->save();

        return redirect()->back()->with('message', 'One Reservation is done');
    }


    public function viewreservation()
    {
        $data = Reservation::all();

        return view('admin.adminreservation', compact('data'));
    }


    /* Chef */

    public function viewchef()
    {
        $data = Foodchef::all();

        return view('admin.adminchef', compact('data'));
    }


    public function uploadchef(Request $request)
    {

        $data = new Foodchef();

        $data->name = $request->name;
        $data->speciality = $request->speciality;

        // image
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('chefimage', $imagename);
        $data->image = $imagename;

        $data->save();

        return redirect()->back()->with('message', 'Chef is created Successfully');
    }

    public function updatechef($id)
    {

        $data = Foodchef::find($id);

        return view('admin.updatechef', compact('data'));
    }


    public function updatefoodchef(Request $request, $id)
    {

        $data = Foodchef::find($id);

        $data->name = $request->name;
        $data->speciality = $request->speciality;

        // image
        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('chefimage', $imagename);
            $data->image = $imagename;
        }

        $data->save();


        return redirect()->back()->with('message', 'Chef is updated Successfully');
    }


    public function deletechef($id)
    {
        $data = Foodchef::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Chef is deleted');
    }







    public function book()
    {
        return view('admin.tablebook');
    }
}
