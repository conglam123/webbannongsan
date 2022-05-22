@extends('admin_layout')

@section('admin-content')

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
            <li class="active"><a href="add-category-product">Thêm danh mục sản phẩm</a></li>
        </ul>
        <!-- END Navigation info -->

        <!-- Form Validation, Validation Initialization happens at the bottom of the page -->
        <form id="form-validation" action="{{URL::to('/save-category-product')}}" method="post" class="form-horizontal form-box remove-margin">
            {{ csrf_field() }}
            <!-- Form Header -->
            <h4 class="form-box-header">Thêm danh mục sản phẩm </h4>

            <!-- Form Content -->
            <div class="form-box-content">
                <div class="form-group">
                    <label class="control-label col-md-2" for="val_namecategory">Tên danh mục *</label>
                    <div class="col-md-5">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
                            <input type="text" id="val_namecategory" name="val_namecategory" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="val_descriptioncategory">Mô tả danh mục *</label>
                    <div class="col-md-9">
                        <textarea id="val_descriptioncategory" name="val_descriptioncategory" class="form-control textarea-elastic" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="val_status">Hiển thị *</label>
                    <div class="col-md-5">
                        <select id="val_status" name="val_status" class="form-control">
                            <option value="">Please select</option>
                            <option value="1">Hiển thị</option>
                            <option value="0">Không hiển thị</option>
                        </select>
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-md-10 col-md-offset-2">
                        <button type="reset" class="btn btn-danger"><i class="fa fa-repeat"></i> Reset</button>
                        <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Submit</button>
                    </div>
                </div>
            </div>
            <!-- END Form Content -->
        </form>
        <!-- END Form Validation -->
    </div>
    <!-- END Page Content -->

@endsection