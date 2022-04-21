 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="#" class="brand-link">
         <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">AdminLTE 3</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">


         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                 <li class="nav-item">
                     <a href="{{ route('dashboard') }}"
                         class="nav-link {{ Route::is('dashboard') ? 'active' : '' }}">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Dashboard

                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('newpost') }}" class="nav-link {{ Route::is('newpost') ? 'active' : '' }}">
                         <i style="font-size:17px" class="fa">&#xf067;</i>

                         <p>
                             NEW POST

                         </p>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a href="{{ route('allpost') }}" class="nav-link {{ Route::is('allpost') ? 'active' : '' }}"
                         id="allpost">
                         <i style="font-size:17px" class="fa">&#xf044;</i>

                         <p>
                             All POST

                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Simple Link
                             <span class="right badge badge-danger">New</span>
                         </p>
                     </a>
                 </li>
                 {{-- test --}}
                 <li class="nav-item {{ Route::is('users*')?'active menu-is-opening menu-open': '' }} {{ Route::is('roles*')?'active menu-is-opening menu-open': '' }}  ">
                     <a href="#" class="nav-link ">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Create New Admin
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview {{ Route::is('users*')?'style="display: block;"':'style="display: none;"' }} "  >
                         <li class="nav-item">
                             <a href="{{  route('users.index') }}" class="nav-link myclass {{ Route::is('users.index')?'active':'' }} ">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Manage Admin</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('roles.index') }}" class="nav-link myroleclass {{ Route::is('roles.index')?'active':'' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Manage Role</p>
                             </a>
                         </li>

                     </ul>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
