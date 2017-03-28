<section class="sidebar">
    <div class="user-panel">
        @if(Auth::check())
            <div class="pull-left image">
                <img src="{{asset("assets/img/user2-160x160.jpg")}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">

                <p>{{Auth::user()->name}}e</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>

            </div>@endif
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="header">NAVIGATION</li>
        <li class="active treeview">
            <a href="{{asset("/")}}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
        </li>
        <li class="treeview">
            <a href="{{asset("/admin")}}">
                <i class="glyphicon glyphicon-user"></i>
                <span>Admin</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Pre-Adminssion</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{asset("/preadmission/create")}}"><i class="fa fa-circle-o"></i> New</a>
                </li>
                <li><a href="{{asset("/preadmission/index")}}"><i class="fa fa-circle-o"></i> List</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Admission</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{asset("/admission/create")}}"><i class="fa fa-circle-o"></i> New</a>
                </li>
                <li><a href="{{asset("/admission/index")}}"><i class="fa fa-circle-o"></i> List</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="glyphicon glyphicon-list-alt"></i>
                <span>Front Office</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{asset("/frontoffice/")}}"><i class="fa fa-circle-o"></i> New</a>
                </li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="glyphicon glyphicon-euro"></i>
                <span>Fee Management</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="/feemanagement/"><i class="glyphicon glyphicon-qrcode"></i> Home</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="glyphicon glyphicon-th-list"></i>
                <span>Assigment</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> New Entry</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> List</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="glyphicon glyphicon-user"></i>
                <span>Student Management</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{asset("/students")}}"><i class="fa fa-circle-o"></i> Home</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-edit"></i> <span>Manage Notice</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> General Elements</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-table"></i> <span>Examination</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Data tables</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="glyphicon glyphicon-th"></i> <span>Time Tables</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Invoice</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Profile</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="glyphicon glyphicon-ok "></i> <span>Attendance</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="glyphicon glyphicon-gift"></i> <span>Birthdays</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="glyphicon glyphicon-book"></i> <span>Library</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="glyphicon glyphicon-bed"></i> <span>Transport</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="glyphicon glyphicon-piggy-bank"></i> <span>Payroll</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="glyphicon glyphicon-modal-window"></i> <span>Inventory</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="glyphicon glyphicon-folder-close"></i> <span>Study Material</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="glyphicon glyphicon-briefcase"></i> <span>Staff Management</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="glyphicon glyphicon-sunglasses"></i> <span>HRD</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            </ul>
        </li>

    </ul>
</section>

<!-- /.sidebar -->



