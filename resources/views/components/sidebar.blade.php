<div class="sidebar">
    <!-- SidebarSearch Form -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           
                
                
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.user.index') }}"  class="nav-link">
                            <i class="fa fa-user"></i>
                            <p>User</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.book.index') }}"  class="nav-link">
                           <i class="fas fa-book"></i>
                     <p>Repository</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('logout') }}"  class="nav-link">
                            <i class="fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </li>
         
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>