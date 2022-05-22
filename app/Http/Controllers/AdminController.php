<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    //
    public function showLogin() 
    {
        return view('admin_login');
    }

    //
    public function showDashboard() 
    {
        return view('admin.dashboard');
    }

    //
    public function loginAdmin(Request $request)
    {
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        if($result)
        {
            Session::put('admin_id', $result->admin_id);
            Session::put('admin_name', $result->admin_name);
            return Redirect::to('/dashboard');
        }
        else 
        {
            Session::put('message', 'Tài khoản hoặc mật khẩu không chính xác! Hãy đăng nhập lại!');
            return Redirect::to('/admin');
        }
    }

    //
    public function logoutAdmin(Request $request)
    {
        Session::put('admin_id', null);
        Session::put('admin_name', null);
        return Redirect::to('/admin');
    }

    //
    public function showAddCategoryProduct() 
    {
        return view('admin.addcategory');
    }

    //
    public function showAllCategoryProduct() 
    {
        $all_category_product = DB::table('tbl_category_product')->get();
        $manager_category_product = view('admin.allcategory')->with('all_category_product', $all_category_product);
        return view('admin_layout')->with('admin.allcategory', $manager_category_product);
    }

    public function saveCategoryProduct(Request $request)
    {
        $data = array();
        $data['category_name'] = $request->val_namecategory;
        $data['category_decs'] = $request->val_descriptioncategory;
        $data['category_status'] = $request->val_status;

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        DB::table('tbl_category_product')->insert($data);
        Session::put('message', 'Thêm danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }
}
