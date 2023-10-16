<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Food;
use App\Models\Foodchef;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{


    public function index()
    {

        $data = Food::all();

        $data2 = Foodchef::all();


        return view('home', compact('data', 'data2'));
    }


    public function redirects()
    {
        $data = Food::all();

        $data2 = Foodchef::all();

        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {

            return view('admin.adminhome');
        } else {

            $user_id = Auth::id(); //loggin user id 

            $count = Cart::where('user_id', $user_id)->count();

            return view('home', compact('data', 'data2', 'count'));
        }
    }


    // cart

    public function addcart(Request $request, $id)
    {

        if (Auth::id()) {

            $user_id = Auth::id(); //loggin user id 
            $food_id = $id;
            $quantity = $request->quantity;

            $cart = new Cart();
            $cart->user_id = $user_id;
            $cart->food_id = $food_id;
            $cart->quantity = $quantity;

            $cart->save();

            return redirect()->back();
        } else {

            return redirect('/login');
        }
    }


    public function showcart(Request $request, $id)
    {

        $count = Cart::where('user_id', $id)->count();

        $data2 = Cart::select('*')->where('user_id', '=', '$id'); // to  provide id of all join table

        // joins
        $data = Cart::where('user_id', $id)->join('food', 'carts.food_id', '=', 'food.id')->get();

        return view('showcart', compact('count', 'data', 'data2'));
    }




    public function remove($id)
    {

        $data = Cart::find($id);

        $data->delete();

        return redirect()->back();
    }


    // Order

    public function orderconfirm(Request $request)
    {

        foreach ($request->foodname as $key => $foodname) {
            $data = new Order();
            $data->foodname = $foodname;
            $data->price = $request->price[$key];
            $data->quantity = $request->quantity[$key];

            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->address = $request->address;

            $data->save();
        }
        return redirect()->back();
    }
}
