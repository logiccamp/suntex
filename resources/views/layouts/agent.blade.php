<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="stylesheet" href="{{ asset('agents/assets/css/app.min.css') }}">
  <link rel="stylesheet" href="{{ asset('agents/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('agents/assets/css/components.css') }}">
  <link rel="stylesheet" href="{{ asset('agents/assets/css/custom.css') }}">
  <link rel="stylesheet" href="{{ asset('agents/assets/bundles/datatables/datatables.min.css') }}">

  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
  <style>
    @media (max-width: 900px){
      .hideSidebar {
        display: none !important;
      }
    }
  </style>
</head>

<body>
  <!-- <div class="loader"></div> -->
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg bg-white"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li>
              <a href="#" onclick="document.getElementById('mainsidebar').classList.toggle('hideSidebar')" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn">
                  <i style="color: #424242" data-feather="menu"></i>
              </a>
            </li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <!-- <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li> -->
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">

          <li class="dropdown dropdown-list-toggle">
            <a href="#" data-toggle="dropdown"
            class="nav-link nav-link-lg message-toggle">
            
              <i style="color: #424242"  data-feather="mail"></i>
              <message-component :id="{{strval(auth()->user()->id)}}"></message-component>
            </a>
          </li>
          <!-- <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread"> <span
                    class="dropdown-item-icon bg-primary text-white"> <i class="fas
												fa-code"></i>
                  </span> <span class="dropdown-item-desc"> Template update is
                    available now! <span class="time">2 Min
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="far
												fa-user"></i>
                  </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
                      Sugiharto</b> are now friends <span class="time">10 Hours
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-success text-white"> <i
                      class="fas
												fa-check"></i>
                  </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
                    moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
                      Hours
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-danger text-white"> <i
                      class="fas fa-exclamation-triangle"></i>
                  </span> <span class="dropdown-item-desc"> Low disk space. Let's
                    clean it! <span class="time">17 Hours Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="fas
												fa-bell"></i>
                  </span> <span class="dropdown-item-desc"> Welcome to Otika
                    template! <span class="time">Yesterday</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li> -->
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="/agents/assets/img/agent-user-avatar.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">HELLO {{auth()->user()->firstname}}</div>
             <a href="/agent/profile" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="/agent/logout" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        
      </nav>
      <div class="main-sidebar sidebar-style-2 hideSidebar" id="mainsidebar">
        <aside id="sidebar-wrapper" >
          <div class="sidebar-brand">
            <a href="/agent"> 
              <!-- <img alt="image" src="assets/img/logo.png" class="header-logo" />  -->
              <span
                class="logo-name">SUNTEX </span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="/agent" class="nav-link">
                <i data-feather="monitor"></i>
                <span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="{{ route('agentproperties') }}" class="nav-link"><i data-feather="target"></i><span>My Properties</span></a>
            </li>
            <li class="dropdown">
              <a href="{{ route('addproperty') }}" class="nav-link"><i data-feather="plus-square"></i><span>Add Property</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="mail"></i><span>Messages</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="/agent/notifications/">All</a></li>
                <li><a class="nav-link" href="/agent/notifications/create">Compose</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="/agent/deals" class="nav-link"><i data-feather="download-cloud"></i><span>Deals</span></a>
            </li>
            <li class="dropdown">
              <a href="/agent/profile" class="nav-link"><i data-feather="user"></i><span>My Profile</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="check-square"></i><span>Contacts</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="/agent/contacts">All</a></li>
                <li><a class="nav-link" href="/agent/contacts/add">Add</a></li>
              </ul>
            </li>
           
          </ul>
        </aside>
      </div>
        <div class="main-content" onclick="hideSidebar()">

            


      @yield('agentcontent')

      <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="">SUNTEX VENTURES</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="{{ asset('assets/js/featherIcons.js') }}"></script>
  <script src="{{ asset('agents/assets/bundles/datatables/datatables.min.js') }}"></script>
  
  
  <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    
  <script>
      $(document).ready( function () {
        $.noConflict()
          $('#dealsTable').DataTable();

          $(".menu-toggle").on("click", function(){
            const thisParent = $(this).parent()
            thisParent.children(".dropdown-menu")[0].classList.toggle("showTipatipa")
          })
      } );
    feather.replace();
    document.getElementById("pricetag").addEventListener("keyup", function(){
      
      const $dvalue = parseFloat(document.getElementById("pricetag").value)
      
      document.getElementById("priceSpan").textContent = $dvalue.toLocaleString("en-UK", {style: "currency",  currency: "NGN", decimal: 2})
      })
      function hideSidebar(){
        const sidebar = document.getElementById('mainsidebar')
        
        if (sidebar.classList.contains("hideSidebar")){
        }else{
          document.getElementById('mainsidebar').classList.toggle('hideSidebar')

        }
      }
  </script>




</body>


<!-- /management/admin  21 Nov 2019 03:47:04 GMT -->
</html>


