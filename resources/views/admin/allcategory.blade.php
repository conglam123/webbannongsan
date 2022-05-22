@extends('admin_layout')

@section('admin-content')

<?php
    $message = Session::get('message');
    if($message)
    {
        echo('<script>alert("'.$message.'")</script>');
        Session::put('message', null);
    }
?>
<!-- Inner Container -->
<div id="inner-container">
    <!-- Sidebar -->
    <aside id="page-sidebar" class="collapse navbar-collapse navbar-main-collapse">
        
        <!-- Primary Navigation -->
        <nav id="primary-nav">
            <ul>
                <li>
                    <a href="dashboard"><i class="fa fa-fire"></i>Dashboard</a>
                </li>
                </li>
                <li class="active">
                    <a href="{{URL::to('/all-category-product')}}" class="active"><i class="fa fa-th-list"></i>Danh mục sản phẩm</a>
                    <ul>
                        <li>
                            <a href="{{URL::to('/add-category-product')}}">Thêm danh mục</a>
                        </li>
                        <li>
                            <a href="{{URL::to('/all-category-product')}}">Liệt kê danh mục</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- END Primary Navigation -->

        <!-- Demo Theme Options -->
        <div id="theme-options" class="text-left visible-md visible-lg">
            <a href="javascript:void(0)" class="btn btn-theme-options"><i class="fa fa-cog"></i> Theme Options</a>
            <div id="theme-options-content">
                <h5>Header On Top</h5>
                <label id="topt-fixed-header-top" class="switch switch-success" data-toggle="tooltip" title="Top fixed header"><input type="checkbox"><span></span></label>
                <h5>Header On Bottom</h5>
                <label id="topt-fixed-header-bottom" class="switch switch-success" data-toggle="tooltip" title="Bottom fixed header"><input type="checkbox"><span></span></label>
                <h5>Size Page Small</h5>
                <label id="topt-fixed-layout" class="switch switch-success" data-toggle="tooltip" title="Fixed layout (for large resolutions)"><input type="checkbox"><span></span></label>
            </div>
        </div>
        <!-- END Demo Theme Options -->
    </aside>
    <!-- END Sidebar -->

    <!-- Page Content -->
    <div id="page-content">
        <!-- Navigation info -->
        <ul id="nav-info" class="clearfix">
            <li><a href="dashboard"><i class="fa fa-home"></i></a></li>
            <li><a href="all-category-product">Danh mục sản phẩm</a></li>
            <li class="active"><a href="all-category-product">Liệt kê danh mục sản phẩm</a></li>
        </ul>
        <!-- END Navigation info -->

        <!-- Editable Datatables -->
        <h3 class="page-header page-header-top">Liệt kê danh mục</h3>

        <!-- Table -->
        <table id="example-editable-datatables" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th class="cell-small"></th>
                    <th class="cell-small text-center">#</th>
                    <th> Tên danh mục</th>
                    <th class="hidden-xs hidden-sm"> Mô tả</th>
                    <th class="hidden-xs hidden-sm"> Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                <!-- Add ids to tr and td, so that you can use them to handle the data in your backend -->
                <!-- Make sure to add the .editable-td class to the inputs you would like to be editable! -->
                <!-- Also make sure to set up the cells you add here in the addHandle() function accordingly -->

                @foreach($all_category_product as $key => $cate_pro)

                <tr id="1">
                    <td class="text-center">
                        <a href="javascript:void(0)" id="delRow1" class="btn btn-xs btn-danger delRow"><i class="fa fa-times"></i></a>
                        <a href="javascript:void(0)" id="edtRow1" class="btn btn-xs btn-success "><i class="fa fa-pencil"></i></a>
                    </td>
                    <td id="id1" class="text-center">{{ $key + 1 }}</td>
                    <td id="categoryname1" class="editable-td">{{ $cate_pro->category_name }}</td>
                    <td id="categorydecs1" class="editable-td hidden-xs hidden-sm">{{ $cate_pro->category_decs }}</td>
                    <td id="categorystatus1" class="editable-td hidden-xs hidden-sm">{{ $cate_pro->category_status == 1 ? 'Hiển thị' : 'Không hiển thị' }}</td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
        <!-- END Table -->
        <!-- END Editable Datatables -->
    </div>
    <!-- END Page Content -->

@endsection