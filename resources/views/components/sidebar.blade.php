<div class="sidebar">
    <!-- SidebarSearch Form -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           
                
                
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user.index') }}"  class="nav-link">
                            <i class="fa fa-user"></i>
                            <p>User</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('book.index') }}"  class="nav-link">
                           <i class="fas fa-book"></i>
                     <p>Mata Kuliah</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('student.index') }}"  class="nav-link">
                           <i class="fas fa-book"></i>
                     <p>Mahasiswa</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('teacher.index') }}"  class="nav-link">
                           <i class="fas fa-book"></i>
                     <p>Dosen</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('prodi.index') }}"  class="nav-link">
                           <i class="fas fa-book"></i>
                     <p>Prodi</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#"  class="nav-link">
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