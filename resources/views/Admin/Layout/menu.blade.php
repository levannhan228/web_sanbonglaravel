<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
            <img src="admin_assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
            <p>{!!Session::get('name')!!}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            @if(Session::get('permissions')==1){
            <li>
                <a href="admin">
                    <i class="fa fa-th"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                    </span>
                </a>
                </li>
            <li>
            <a href="admin/account/list">
                <i class="fa fa-user"></i> <span>List Account</span>
            </a>
            </li>
            <li class="treeview">
            <a href="#">
                <i class="fa fa-futbol-o"></i>
                <span>Stadium</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="admin/stadium/create"><i class="fa fa-circle-o"></i>Create Stadium</a></li>
                <li><a href="admin/stadium/list"><i class="fa fa-circle-o"></i>List Stadium</a></li>
                <li><a href="admin/stadium/introduce"><i class="fa fa-circle-o"></i> Detail Stadium</a></li>
            </ul>
            </li>
            <li>
                <a href="admin/bookyard/list">
                    <i class="fa fa-credit-card"></i><span>Bookyard</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>
            <li>
                <a href="admin/calendar">
                    <i class="fa fa-calendar"></i><span>Calendar</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>
            @elseif(Session::get('permissions')==2){
            <li>
                <a href="user_master">
                    <i class="fa fa-calendar"></i><span>Calendar</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>
                }
            }
            @endif
            <li>
                <a href="homepage">
                    <i class="fa fa-share"></i> <span>Trở về trang chủ</span>
                </a>
            </li>
        </section>
        <!-- /.sidebar -->
    </aside>