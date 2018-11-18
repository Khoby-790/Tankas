<!DOCTYPE html>
<html lang="en" dir="ltr">
  <meta http-equiv="content-type" content="text/php; charset=utf-8" />

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tankas</title>
    <meta name="description" content="High performance admin theme for .net core with all features like bootstrap 4, entity framework and.net identity. This theme can be used for any kind of application Home" />
    <meta name="news_keywords" content="bootstrap 4, admin template, admin theme, .net core admin theme" />

    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{asset('/css/all.min.css')}}" />
    <link href="{{asset('/css/open-iconic-bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/css/toastr.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/site.min1d03.css?v=tmqmN6_0kJDe7fnylIZZqslslFLtARTV3Kc-huPRako')}}" />
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" />


  </head>
  <body>

    <header class="navbar navbar-collapse navbar-dark fixed-top flex-md-nowrap p-0 main-header">
        <div class="navbar-brand mr-0">
            <button class="btn btn-link d-xl-none" data-et-action="aside-open" data-et-target=".sidebar" p-0 ml-1" id="btnmenu">
                <i class="fas fa-align-justify"></i>
            </button>
            <a class="d-none d-md-block" href="{{asset('index')}}"><img alt="Tankas Homepage" class="brand-logo" src="{{asset('images/logo2.png')}}" style="height:50px; padding-left:50px; margin-top: -5px;" /></a>
        </div>
        <div class="container-nav-bar">
            <ul class="nav justify-content-end navbar-right">
                <li class="dropdown nav-item has-notified">
                    <a href="#" class="dropdown" data-toggle="dropdown">
                        <i class="far fa-comment-alt"></i>
                        <span class="d-none d-md-block d-lg-block d-xl-block">MESSAGES</span>
                    </a>
                    <div class="dropdown-arrow"></div>
                    <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                        <h6 class="dropdown-header stop-propagation">
                            <span>
                                Activities
                                <span class="badge badge-pill badge-danger">2</span>
                            </span>
                        </h6>
                        <div class="dropdown-scroll has-scrollable ps">
                            <a href="#" class="dropdown-item unread">
                                <div class="user-avatar">
                                    <img src="images/avatars/employee-1.png" alt="">
                                </div>
                                <div class="dropdown-item-body">
                                    <p class="text"> Jeffrey Wells created a schedule </p>
                                    <span class="date small">Just now</span>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item unread">
                                <div class="user-avatar">
                                    <img src="images/avatars/employee-2.png" alt="">
                                </div>
                                <div class="dropdown-item-body">
                                    <p class="text"> Fuller Andrew sent an email </p>
                                    <span class="date small">2 minutes ago</span>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item unread">
                                <div class="user-avatar">
                                    <img src="images/avatars/employee-3.png" alt="">
                                </div>
                                <div class="dropdown-item-body">
                                    <p class="text"> Peacock Margaret uploaded reports</p>
                                    <span class="date small">2 hours ago</span>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item unread">
                                <div class="user-avatar">
                                    <img src="images/avatars/employee-4.png" alt="">
                                </div>
                                <div class="dropdown-item-body">
                                    <p class="text"> Callahan Laura on Leave</p>
                                    <span class="date small">2 days ago</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="dropdown nav-item">
                    <a href="#" class="dropdown btn-user" data-toggle="dropdown">
                        <span class="user-avatar">
                            <img src="images/user-profile.png" alt="">
                        </span>
                        <span class="profile-summary pr-lg-2 d-none d-lg-block">
                            <span class="profile-name">John Heart</span>
                            <span class="profile-description">Customer Service</span>
                        </span>
                    </a>
                    <div class="dropdown-arrow"></div>
                    <div class="dropdown-menu dropdown-menu-right mr-2">
                        <a class="dropdown-item" href="{{url('profile')}}">
                            <i class="far fa-user"></i> Profile
                        </a>
                        <a class="dropdown-item" href="index.html">
                            <i class="fas fa-sign-in-alt"></i> Logout
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Help Center</a>
                        <a class="dropdown-item" href="#">Ask Forum</a>
                    </div>
                </li>
            </ul>
        </div>
    </header>

    <div class="container-fluid">
      <aside id="menu" class="bg-light sidebar">
          <div class="search-form">
              <input id="menuSearch" class="form-control form-control-sm w-100" type="text" placeholder="Search menu" aria-label="Search">
          </div>
          <nav id="slide-menu" class="slide-menu slide-menu-has-collapsible do-scroll">

  <ul class="menu"><li class="menu-item has-active"><a href="index.html" class="menu-link"><span class="menu-icon fa fa-tachometer-alt"></span><span class="menu-text">Dashboard</span></a></li><li class="menu-item has-child"><a href="#" class="menu-link"><span class="menu-icon fa fa-database"></span><span class="menu-text">Entity Framework</span><span class="badge badge-warning" id="badgeCrud">CRUD</span></a><ul class="menu"><li class="menu-item"><a href="Masters/Employees.html" class="menu-link">Employee Master</a></li><li class="menu-item"><a href="Masters/Designations.html" class="menu-link">Designation Master</a></li><li class="menu-item"><a href="Masters/Departments.html" class="menu-link">Department Master</a></li><li class="menu-item"><a href="Masters/Countries.html" class="menu-link">Country Master</a></li></ul><li class="menu-item has-child"><a href="#" class="menu-link"><span class="menu-icon fas fa-user-cog"></span><span class="menu-text">.Net Identity Custom</span><span class="badge badge-success" id="badgeNew">New</span></a><ul class="menu"><li class="menu-item"><a href="Identity/Account/Login6ee2.html" class="menu-link">Manage</a></li><li class="menu-item"><a href="Identity/Account/Login.html" class="menu-link">Login</a></li><li class="menu-item"><a href="Identity/Account/Register.html" class="menu-link">Registration</a></li><li class="menu-item"><a href="Identity/Account/ForgotPassword.html" class="menu-link">Forgot Password</a></li></ul><li class="menu-item has-child"><a href="#" class="menu-link"><span class="menu-icon fa fa-puzzle-piece"></span><span class="menu-text">HTML Components</span></a><ul class="menu"><li class="menu-item"><a href="Components/GeneralElements.html" class="menu-link">General Elements</a></li><li class="menu-item"><a href="Components/FontIconsOpenIconic.html" class="menu-link">Font Icons (Open Iconic)</a></li><li class="menu-item"><a href="Components/FontIconsFontAwsome.html" class="menu-link">Font Icons (Font Awsome)</a></li><li class="menu-item"><a href="Components/ListViews.html" class="menu-link">List Views</a></li><li class="menu-item"><a href="Components/TreeViews.html" class="menu-link">Tree Views</a></li><li class="menu-item"><a href="Components/SortableNestable.html" class="menu-link">Sortable & Nestable</a></li></ul><li class="menu-item has-child"><a href="#" class="menu-link"><span class="menu-icon fas fa-table"></span><span class="menu-text">Tables</span></a><ul class="menu"><li class="menu-item"><a href="Tables/HTMLTable.html" class="menu-link">HTML Tables</a></li><li class="menu-item"><a href="Tables/DataTable.html" class="menu-link">Data Tables</a></li><li class="menu-item"><a href="Masters/Employees.html" class="menu-link">Data Tables (Server Mode)</a></li></ul><li class="menu-item has-child"><a href="#" class="menu-link"><span class="menu-icon fab fa-wpforms"></span><span class="menu-text">Forms</span></a><ul class="menu"><li class="menu-item"><a href="Forms/BasicElements.html" class="menu-link">Basic Elements</a></li><li class="menu-item"><a href="Forms/InputGroup.html" class="menu-link">Input Group</a></li><li class="menu-item"><a href="Forms/FormValidations.html" class="menu-link">Form Validations</a></li><li class="menu-item"><a href="Forms/CustomForms.html" class="menu-link">Custom Forms</a></li><li class="menu-item"><a href="Forms/Select2.html" class="menu-link">Select2</a></li><li class="menu-item"><a href="Forms/Typehead.html" class="menu-link">Typehead</a></li><li class="menu-item"><a href="Forms/Pickers.html" class="menu-link">Pickers</a></li><li class="menu-item"><a href="Forms/HTMLEditors.html" class="menu-link">HTML Editors</a></li><li class="menu-item"><a href="Forms/Slider.html" class="menu-link">Slider</a></li><li class="menu-item"><a href="Forms/Spinner.html" class="menu-link">Spinner</a></li><li class="menu-item"><a href="Forms/Uploader.html" class="menu-link">Uploader</a></li><li class="menu-item"><a href="Forms/Steps.html" class="menu-link">Steps</a></li></ul><li class="menu-item has-child"><a href="#" class="menu-link"><span class="menu-icon fas fa-chart-pie"></span><span class="menu-text">Charts</span></a><ul class="menu"><li class="menu-item"><a href="Charts/ChartJs.html" class="menu-link">Chart Js</a></li><li class="menu-item"><a href="Charts/MorrisCharts.html" class="menu-link">Morris Charts</a></li><li class="menu-item"><a href="Charts/FlotCharts.html" class="menu-link">Flot Charts</a></li><li class="menu-item"><a href="Charts/HighchartTable.html" class="menu-link">Highchart Table</a></li></ul><li class="menu-item has-child"><a href="#" class="menu-link"><span class="menu-icon fas fa-user"></span><span class="menu-text">User</span></a><ul class="menu"><li class="menu-item"><a href="User/UserProfile.html" class="menu-link">User Profile</a></li><li class="menu-item"><a href="User/Tasks.html" class="menu-link">Tasks</a></li><li class="menu-item"><a href="User/Projects.html" class="menu-link">Projects</a></li><li class="menu-item"><a href="User/Activities.html" class="menu-link">Activities</a></li></ul><li class="menu-item has-child"><a href="#" class="menu-link"><span class="menu-icon fas fa-layer-group"></span><span class="menu-text">Pages</span></a><ul class="menu"><li class="menu-item"><a href="Pages/BlankPage.html" class="menu-link">Blank Page</a></li><li class="menu-item"><a href="Pages/Invoice.html" class="menu-link">Invoice</a></li><li class="menu-item"><a href="Pages/Pricing.html" class="menu-link">Pricing</a></li><li class="menu-item"><a href="Pages/NotFound.html" class="menu-link">404</a></li></ul><li class="menu-item"><a href="Components/Calendar.html" class="menu-link"><span class="menu-icon fas fa-calendar-alt"></span><span class="menu-text">Calendar</span></a></li></ul>

  <!-- .aside-menu -->
            </nav>
      </aside>
    </div>

  <main>
    @yield('content')
  </main>
  </body>
  <script>
  !function(a,b,c,d){var e,f=document,g=f.getElementsByTagName("SCRIPT"),h=g[g.length-1].previousElementSibling,i=f.defaultView&&f.defaultView.getComputedStyle?f.defaultView.getComputedStyle(h):h.currentStyle;if(i&&i[a]!==b)for(e=0;e<c.length;e++)f.write('<link href="'+c[e]+'" '+d+"/>")}("position","absolute",["\/lib\/font-awsome\/css\/fontawesome-all.min.css"], "rel=\u0022stylesheet\u0022 ");
  </script>
  <script type="text/javascript" src="{{asset('js/jquery-3.2.1.js')}}"></script>
  <script>(window.jQuery||document.write("\u003Cscript src=\u0022\/lib\/jquery\/dist\/jquery.min.js\u0022 crossorigin=\u0022anonymous\u0022 integrity=\u0022sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV\u002BrXbYlF2cqB8txI\/8aZajjp4Bqd\u002BV6D5IgvKT\u0022\u003E\u003C\/script\u003E"));</script>
  <script src="{{asset('/js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>
  <!--Remove demo.js from your development-->
  <script src="{{asset('js/demo.js')}}"></script>



<script src="{{asset('js/chart.min.js')}}"></script>
<script src="{{asset('js/pages/dashboard-demo.js')}}"></script>


<script>
  var menuList = [{id: "/", name: "Dashboard"}, {id: "/Masters/Employees", name: "Employee Master"}, {id: "/Masters/Designations", name: "Designation Master"}, {id: "/Masters/Departments", name: "Department Master"}, {id: "/Masters/Countries", name: "Country Master"}, {id: "/Identity/Account/Manage", name: "Manage"}, {id: "/Identity/Account/Login", name: "Login"}, {id: "/Identity/Account/Register", name: "Registration"}, {id: "/Identity/Account/ForgotPassword", name: "Forgot Password"}, {id: "/Components/GeneralElements", name: "General Elements"}, {id: "/Components/FontIconsOpenIconic", name: "Font Icons (Open Iconic)"}, {id: "/Components/FontIconsFontAwsome", name: "Font Icons (Font Awsome)"}, {id: "/Components/ListViews", name: "List Views"}, {id: "/Components/TreeViews", name: "Tree Views"}, {id: "/Components/SortableNestable", name: "Sortable & Nestable"}, {id: "/Tables/HTMLTable", name: "HTML Tables"}, {id: "/Tables/DataTable", name: "Data Tables"}, {id: "/Tables/DataTableServerMode", name: "Data Tables (Server Mode)"}, {id: "/Forms/BasicElements", name: "Basic Elements"}, {id: "/Forms/InputGroup", name: "Input Group"}, {id: "/Forms/FormValidations", name: "Form Validations"}, {id: "/Forms/CustomForms", name: "Custom Forms"}, {id: "/Forms/Select2", name: "Select2"}, {id: "/Forms/Typehead", name: "Typehead"}, {id: "/Forms/Pickers", name: "Pickers"}, {id: "/Forms/HTMLEditors", name: "HTML Editors"}, {id: "/Forms/Slider", name: "Slider"}, {id: "/Forms/Spinner", name: "Spinner"}, {id: "/Forms/Uploader", name: "Uploader"}, {id: "/Forms/Steps", name: "Steps"}, {id: "/Charts/ChartJs", name: "Chart Js"}, {id: "/Charts/MorrisCharts", name: "Morris Charts"}, {id: "/Charts/FlotCharts", name: "Flot Charts"}, {id: "/Charts/HighchartTable", name: "Highchart Table"}, {id: "/User/UserProfile", name: "User Profile"}, {id: "/User/Tasks", name: "Tasks"}, {id: "/User/Projects", name: "Projects"}, {id: "/User/Activities", name: "Activities"}, {id: "/Pages/BlankPage", name: "Blank Page"}, {id: "/Pages/Invoice", name: "Invoice"}, {id: "/Pages/Pricing", name: "Pricing"}, {id: "/Pages/NotFound", name: "404"}, {id: "/Components/Calendar", name: "Calendar"}];
</script>




  <script src="{{asset('js/site.minffd1.js')}}"></script>


<script>
  toastr.options.closeButton = true;
  toastr.options.progressBar = true;
</script>
<!-- Remove this if your are not using any analytics scripts -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124210170-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());

  gtag('config', 'UA-124210170-1');
</script>

</html>
