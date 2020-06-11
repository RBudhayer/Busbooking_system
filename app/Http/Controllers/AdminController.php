<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Customer;
use App\User;

class AdminController extends Controller
{
	public function __construct()
	{
		$this->middleware('adminauth');
	}

    public function index()
    {
    	return view('admin.admin-dashboard');
    }

    public function profile()
    {
        $user_id = auth()->user()->id;
        $customer_info = Customer::where('user_id', $user_id)->get();
        $user_info = User::where('id',$user_id)->get();
        
    	return view('admin.admin-profile', ['customer_info' => $customer_info],['user_info'=>$user_info]);
    }

    public function busList()
    {
    	$bus_info = DB::table('buses')->get();
    	return view('admin.admin-bus-list', ['bus_info' => $bus_info]);
    }

    public function showAddBusForm()
    {
    	return view('admin.admin-add-bus');
    }

    public function addBus(Request $request)
    {
    	$this->bus_validation($request);
    	$bus_name 	= $request->get('bus_name');
    	$total_seat = $request->get('total_seat');
    	$insertionData = [
    		'bus_name' 		=> $bus_name,
    		'total_seat' 	=> $total_seat,
    		'created_at' 	=> \Carbon\Carbon::now(),
    		'updated_at' 	=> \Carbon\Carbon::now()
    	];
    	DB::table('buses')->insert($insertionData);
    	Session::flash('msg', 'A new bus inserted successfully');
    	return redirect('admin/add-bus');
    }

    public function bus_validation($request)
    {
    	$rules = [
    		'bus_name' 		=> 'required',
    		'total_seat' 	=> 'required'
    	];

    	$custom_message = [
    		'bus_name.required' 	=> 'Bus name cannot be empty',
    		'total_seat.required' 	=> 'Total seat cannot be empty'
    	];

    	return $this->validate($request, $rules, $custom_message);
    }

    public function deleteBus(Request $request, $id)
    {
    	$bus_busy_in_booking = DB::table('booking')->where('bus_id', $id)->count();
    	if ( $request->method() == "DELETE" && $bus_busy_in_booking == 0 ) {
    		DB::table('buses')->where('id', $id)->delete();
    		Session::flash('msg', 'Selected Bus has been deleted successfully');
    		return redirect('admin/bus-list');
    	}
    	Session::flash('msg', 'One of a customer booked one or more seat already so this bus cannot be deleted right now.');
    	return redirect('admin/bus-list');
	}

	public function showEditAdminForm()
    {
        $user_id = auth()->user()->id;
        $customer_info = Customer::where('user_id', $user_id)->get();
        return view('admin.admin-edit', ['customer_info' => $customer_info]);
    }

    public function updateAdminInfo(Request $request)
    {
        $user_id = auth()->user()->id;
        $customer_info = Customer::where('user_id', $user_id)->get();
        if ( count($customer_info) > 0 ) {
            $address = $request->get('address');
            $phone = $request->get('phone');
            if ( $request->hasFile('pp') ) {
                $fileName = $user_id . '-' . $request->file('pp')->getClientOriginalName();
                $destinationPath = public_path('/images');
                $request->file('pp')->move($destinationPath, $fileName);
                // Now update the database table only photo field
                $update_data = [
                    'photo' => $fileName
                ];
                Customer::where('user_id', $user_id)->update($update_data);
            }
            $update_data = [
                'address'   => $address,
                'phone'     => $phone
            ];
            Customer::where('user_id', $user_id)->update($update_data);
            session()->flash('msg', 'Customer information updated successfully');
            return redirect('admin-profile');
        }

    }

    public function showstatus()
    {
            $showAllUser = DB::table('users')
            ->join('booking', 'users.id', '=', 'booking.user_id')
            ->select('users.*', 'booking.*')
            ->get();

    
        return view('admin.admin-Status', ['showAllUser' => $showAllUser]);
    }
}