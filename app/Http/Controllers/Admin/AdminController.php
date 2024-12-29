<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use DateTime;
use DateInterval;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->session()->has('ADMIN_LOGIN')){
            return redirect('admin/dashboard');
        }else{
            return view('admin.login');
        }
        return view('admin.login');
    }

    public function auth(Request $request)
    {
        $email=$request->post('email');
        $password=$request->post('password');

        // $result=Admin::where(['email'=>$email,'password'=>$password])->get();
        $result=Admin::where(['email'=>$email])->first();
        if($result){
            if(Hash::check($request->post('password'),$result->password)){
                $request->session()->put('ADMIN_LOGIN',true);
                $request->session()->put('ADMIN_ID',$result->id);
                return redirect('admin/dashboard');
            }else{
                $request->session()->flash('error','Please enter correct password');
                return redirect('admin');
            }
        }else{
            $request->session()->flash('error','Please enter valid login details');
            return redirect('admin');
        }
    }

    public function dashboard()
    {
        $allCustomers = DB::table('customers')->count();
        $allOrders = DB::table('orders')->count();
        $allProducts = DB::table('products')->count();

        $customers_created_labels = [];
        $customers_created_data = [];
        $date = new DateTime("-14 days");
        $interval = DateInterval::createFromDateString('1 day');
        for($i = 0; $i < 14; $i++) {
            $cur_mth = $date->add($interval);
            $customers_created = DB::table('customers')
                ->Where('created_at', 'like', $cur_mth->format("Y-m-d")."%")
                ->count();

            $customers_created_labels[] = "'".$cur_mth->format('d M')."'";
            $customers_created_data[] = $customers_created;
        }

        $orders_created_labels = [];
        $orders_created_data = [];
        $date = new DateTime("-14 days");
        $interval = DateInterval::createFromDateString('1 day');
        for($i = 0; $i < 14; $i++) {
            $cur_mth = $date->add($interval);
            $orders_created = DB::table('orders')
                ->Where('added_on', 'like', $cur_mth->format("Y-m-d")."%")
                ->count();

            $orders_created_labels[] = "'".$cur_mth->format('d M')."'";
            $orders_created_data[] = $orders_created;
        }

        return view('admin.dashboard', compact(
            'allCustomers',
            'allOrders',
            'allProducts',
            'customers_created_labels',
            'customers_created_data',
            'orders_created_labels',
            'orders_created_data',
        ));
    }

}
