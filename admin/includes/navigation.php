<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Kabeli Vehicle Admin</a>
    </div>



    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li><a href="../index.php">User Index</a></li>


        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin Name <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>

                <li class="divider"></li>
                <li>
                    <a href="./includes/admin_logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>



    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>

            <li>
                <a href="#"><i class="fa fa-user"></i> Users </a>
            </li>

            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#package"><i class="fa fa-fw fa-arrows-v"></i> Packages <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="package" class="collapse">
                    <li>
                        <a href="package_manage.php">View Packages</a>
                    </li>
                    <li>
                        <a href="#">Add Vehicle Package</a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="booking_manage.php"><i class="fa fa-fw fa-wrench"></i> Bookings</a>
            </li>

            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Vehicles <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="vehicle_manage.php">Manage Vehicles</a>
                    </li>
                    <li>
                        <a href="#">View Reserved Vehicles</a>
                    </li>
                    <li>
                        <a href="#">View Idle Vehicles</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="company_info.php"><i class="fa fa-fw fa-desktop"></i>Company Info </a>
            </li>


            <!--    <li>
                    <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                </li>
                <li>
                    <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                </li>
                <li>
                    <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                </li> -->

        </ul>
    </div>
</nav>
<!-- /.navbar-collapse -->