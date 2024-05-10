<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li class="submenu">
                    <a href="{{ route('admin.teachers.index') }}"><i class="fas fa-chalkboard-teacher"></i> <span> Dashboard</span> <span
                        class="menu-arrow"></span></a>
                <ul>
                    <li><a href="{{ route('admin-dashboard') }}">Dashboard</a></li>  
                </ul> 
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-graduation-cap"></i> <span> Students</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="#">Student List</a></li>
                        <li><a href="#">Student View</a></li>
                        <li><a href="#">Student Add</a></li>
                        <li><a href="#">Student Edit</a></li>
                    </ul>
                </li>
                <li class="submenu"> 
                    <a href="{{ route('admin.teachers.index') }}"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('admin.teachers.index') }}">Teacher List</a></li> 
                        <li><a href="{{ route('admin.teachers.create') }}">Teacher Add</a></li> 
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-building"></i> <span> Departments</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('admin.departments.index') }}">Department List</a></li>
                        <li><a href="{{ route('admin.departments.create') }}">Department Add</a></li> 
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i> <span>Courses</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="#">Course List</a></li>
                        <li><a href="#">Course Add</a></li>
                        <li><a href="#">Course Edit</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i> <span> Rooms</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('admin.rooms.index') }}">Room List</a></li>
                        <li><a href="{{ route('admin.rooms.create') }}">Room Add</a></li> 
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-clipboard"></i> <span> Invoices</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="#">Invoices List</a></li>
                        <li><a href="#">Invoices Grid</a></li>
                        <li><a href="#">Add Invoices</a></li>
                        <li><a href="#">Edit Invoices</a></li>
                        <li><a href="#">Invoices Details</a></li>
                        <li><a href="#">Invoices Settings</a></li>
                    </ul>
                </li> 
                 
            </ul>
        </div>
    </div>
</div>