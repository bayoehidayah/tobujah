 <!-- partial:partials/_navbar.html -->
 <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
     <div class="text-center navbar-brand-wrapper d-flex align-items-center">
         <a class="navbar-brand brand-logo" href="{{route("dashboard")}}"><img src="{{asset("images/TBJ White.png")}}"
                 alt="logo" /></a>
         <a class="navbar-brand brand-logo-mini" href="{{route("dashboard")}}"><img src="{{asset("images/TBJ White Mini.png")}}"
                 alt="logo" /></a>
     </div>
     <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
         <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
             <span class="mdi mdi-menu"></span>
         </button>
         <ul class="navbar-nav mr-lg-2">
             <li class="nav-item nav-search d-none d-lg-block">
                 <div class="input-group">
                     <div class="input-group-prepend">
                         <span class="input-group-text" id="search">
                             <i class="mdi mdi-magnify"></i>
                         </span>
                     </div>
                     <input type="text" class="form-control" placeholder="Search for anything..." aria-label="search"
                         aria-describedby="search">
                 </div>
             </li>
         </ul>
         <ul class="navbar-nav navbar-nav-right">
             <li class="nav-item nav-profile dropdown">
                 <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
                     <img src="{{asset("images/faces/face5.jpg")}}" alt="profile" />
                 </a>
                 <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                     <a class="dropdown-item">
                         <i class="mdi mdi-settings "></i>
                         Settings
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                     <a class="dropdown-item" href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                         <i class="mdi mdi-logout"></i>
                         Logout
                     </a>
                 </div>
             </li>
         </ul>
         <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
             data-toggle="offcanvas">
             <span class="mdi mdi-menu"></span>
         </button>
     </div>
 </nav>
 <!-- partial -->
