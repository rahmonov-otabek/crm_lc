<div class="header">

    <div class="header-left">
        <h5>Edu control</h5> 
    </div>
    <div class="menu-toggle">
        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-bars"></i>
        </a>
    </div>
 
    <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
    </a>

    <ul class="nav user-menu">  

        <li class="nav-item dropdown has-arrow new-user-menus">
            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <span class="user-img"> 
                    <div class="user-text">
                        <h6>
                        @php
                            if (auth()->check()) {
                                echo auth()->user()->name;
                            } else {
                                echo "Admin";
                            }
                        @endphp    
                        </h6>
                        <p class="text-muted mb-0">Administrator</p>
                    </div>
                </span>
            </a>
            <div class="dropdown-menu">  
                <a class="dropdown-item" href="#">Logout</a>
            </div>
        </li>

    </ul>

</div>