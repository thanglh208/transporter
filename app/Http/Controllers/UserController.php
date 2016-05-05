<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use Auth;
use App\Http\Requests;
use Validator;
use Illuminate\Support\Facades\Input;
use Session;
use Datatables;

class UserController extends Controller
{
	public function register() {
	    $rules = array(
	    	"email"=>"required|email",
			"password"=>"required|min:6",			
			"realName"=>"required",
			"phone"=>"required",
			"birthday"=>"required|date");
		if(!Validator::make(Input::all(), $rules)->fails()) {
			$user = new User();
			$user->email = Input::get("email");
			$user->password = bcrypt(Input::get("password"));
			$user->realName = Input::get("realName");
			$user->birthday = Input::get("birthday");
			$user->role = "2";
			$user->save();
			Session::flash('register_success', 'Chúc mừng '.Input::get('realName').' đã đăng ký thành công! Từ giờ bạn đã có thể đăng nhập với email và password bạn đăng ký.');
			return redirect("/auth/login");
		}
	}

	public function order() {
		$order = new Order();
		$order->user_id = Auth::user()->id;
		$order->type_id = Input::get("type");
		$order->level = Input::get("level");
		$order->sourceAddress = Input::get("txtSource");
		$order->destinationAddress = Input::get("txtDestination");
		$order->distance = Input::get("dist");
		$order->status = 0;
		$order->save();
		echo "Success";
	}

	public function getIndex() {		
		return view('history');
	}
	public function getOrders() {
		Datatables::of(Order::query())->make(true);
	}
}
