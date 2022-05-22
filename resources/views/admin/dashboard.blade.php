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
                    <a href="dashboard" class="active"><i class="fa fa-fire"></i>Dashboard</a>
                </li>
                </li>
                <li>
                    <a href="{{URL::to('/all-category-product')}}"><i class="fa fa-th-list"></i>Danh mục sản phẩm</a>
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
        <li class="active"><a href="">Dashboard</a></li>
    </ul>
    <!-- END Navigation info -->
    
    <!-- Tiles -->
    <!-- Row 1 -->
    <div class="dash-tiles row">
        <!-- Column 1 of Row 1 -->
        <div class="col-sm-3">
            <!-- Total Users Tile -->
            <div class="dash-tile dash-tile-ocean clearfix animation-pullDown">
                <div class="dash-tile-header">
                    <div class="dash-tile-options">
                        <div class="btn-group">
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Manage Users"><i class="fa fa-cog"></i></a>
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Statistics"><i class="fa fa-bar-chart-o"></i></a>
                        </div>
                    </div>
                    Total Users
                </div>
                <div class="dash-tile-icon"><i class="fa fa-users"></i></div>
                <div class="dash-tile-text">265k</div>
            </div>
            <!-- END Total Users Tile -->

        </div>
        <!-- END Column 1 of Row 1 -->

        <!-- Column 2 of Row 1 -->
        <div class="col-sm-3">
            <!-- Total Sales Tile -->
            <div class="dash-tile dash-tile-flower clearfix animation-pullDown">
                <div class="dash-tile-header">
                    <div class="dash-tile-options">
                        <div class="btn-group">
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="View new orders"><i class="fa fa-shopping-cart"></i></a>
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Statistics"><i class="fa fa-bar-chart-o"></i></a>
                        </div>
                    </div>
                    Total Sales
                </div>
                <div class="dash-tile-icon"><i class="fa fa-tags"></i></div>
                <div class="dash-tile-text">300k</div>
            </div>
            <!-- END Total Sales Tile -->

        </div>
        <!-- END Column 2 of Row 1 -->

        <!-- Column 3 of Row 1 -->
        <div class="col-sm-3">
            <!-- Popularity Tile -->
            <div class="dash-tile dash-tile-oil clearfix animation-pullDown">
                <div class="dash-tile-header">
                    <div class="dash-tile-options">
                        <div class="btn-group">
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="What's changed?"><i class="fa fa-fire"></i></a>
                            <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Share"><i class="fa fa-share-square-o"></i></a>
                        </div>
                    </div>
                    Popularity
                </div>
                <div class="dash-tile-icon"><i class="fa fa-globe"></i></div>
                <div class="dash-tile-text">+90%</div>
            </div>
            <!-- END Popularity Tile -->

        </div>
        <!-- END Column 3 of Row 1 -->

        <!-- Column 4 of Row 1 -->
        <div class="col-sm-3">
            <!-- RSS Subscribers Tile -->
            <div class="dash-tile dash-tile-balloon clearfix animation-pullDown">
                <div class="dash-tile-header">
                    <div class="dash-tile-options">
                        <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Manage subscribers"><i class="fa fa-cog"></i></a>
                    </div>
                    RSS Subscribers
                </div>
                <div class="dash-tile-icon"><i class="fa fa-rss"></i></div>
                <div class="dash-tile-text">160k</div>
            </div>
            <!-- END RSS Subscribers Tile -->

    </div>
    <!-- END Row 1 -->

    <!-- Row 2 -->
    <div class="row">
        <!-- Column 1 of Row 2 -->
        <div class="col-sm-12">
            <!-- Statistics Tile -->
            <div class="dash-tile dash-tile-2x">
                <div class="dash-tile-header">
                    <div class="dash-tile-options">
                        <div id="example-advanced-daterangepicker" class="btn btn-default">
                            <i class="fa fa-calendar"></i>
                            <span></span>
                            <b class="caret"></b>
                        </div>
                    </div>
                    <i class="fa fa-bar-chart-o"></i>
                </div>
                <div class="dash-tile-content">
                    <div id="dash-example-stats" class="dash-tile-content-inner"></div>
                </div>
            </div>
            <!-- END Statistics Tile -->
        </div>
        <!-- END Column 1 of Row 2 -->

    <!-- END Tiles -->
</div>
<!-- END Page Content -->

@endsection