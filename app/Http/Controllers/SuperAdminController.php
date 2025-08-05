<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  App\Models\Role;
use  App\Models\User;


class SuperAdminController extends Controller
{
    public function dashboard()
    {
        return view('superadmin.dashboard')->with('success', 'Super Admin Login Successfully');
    }

    public function pop_page(){
        return view('superadmin.pop_page');
    }
    public function email_page(){
        return view('superadmin.email_page');
    }
    public function general_settings(){
        return view('superadmin.general-settings');
    }
    public function admin_dashboard(){
        return view('superadmin.admin-dashboard');
    }
    
    public function add_product(){
        return view('superadmin.add-product');
    }
    public function online_orders(){
        return view('superadmin.online-orders');
    }
    public function expense_list(){
        return view('superadmin.expense-list');
    }
    public function quotation_list(){
        return view('superadmin.quotation-list');
    }
    public function sales_returns(){
        return view('superadmin.sales-returns');
    }
    public function users(){
        $users = User::where('id', '>', 1)->orderBy('id', 'asc')->get();

            $roles = Role::where('id', '>', 1)->orderBy('id', 'asc')->get();


        return view('superadmin.users', compact('users','roles'));
    }
    public function customers(){
        return view('superadmin.customers');
    }
    public function sales_report(){
        return view('superadmin.sales-report');
    }
    public function suppliers(){
        return view('superadmin.suppliers');
    }
    public function stock_transfer(){
        return view('superadmin.stock-transfer');
    }
    public function activities(){
        return view('superadmin.activities');
    }
    public function profile(){
        return view('superadmin.profile');
    }
    public function sales_dashboard(){
        return view('superadmin.sales-dashboard');
    }
    public function roles_permissions(){

        $roles = Role::all();
        return view('superadmin.roles-permissions',compact('roles'));
    }
}
