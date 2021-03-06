<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{('css/admin_css/colorpicker.css')}}" />
    <link rel="stylesheet" href="{{asset('css/admin_css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/admin_css/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/admin_css/fullcalendar.css')}}" />
    <link rel="stylesheet" href="{{asset('css/admin_css/matrix-style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/admin_css/uniform.css')}}" />
    <link rel="stylesheet" href="{{asset('css/admin_css/select2.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/admin_css/matrix-media.css')}}" />
    <link rel="stylesheet" href="{{asset('css/admin_css/datepicker.css')}}" />
    <link rel="stylesheet" href="{{asset('css/admin_css/bootstrap-datepicker.min.css')}}" />
    <link href="{{asset('fonts/admin_fonts/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="{{asset('css/backend_css/jquery.gritter.css')}}" /> --}}
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    @stack('styles')
</head>

<body>
    <!--Header strat-->
    @include('layouts.adminLayouts.admin_header')
    <!--Header end-->

    <!--sidebar-menu-->
    @include('layouts.adminLayouts.admin_sidebar')
    <!--sidebar-menu-->
    
    <!--main-container-part start-->
    @yield('content')
    <!--end-main-container-part-->

    <!--Footer-part-->
    @include('layouts.adminLayouts.admin_footer')
    <!--end-Footer-part-->
    <script src="{{asset('js/admin_js/jquery.min.js')}}"></script> 
    <script src="{{asset('js/admin_js/jquery.ui.custom.js')}}"></script> 
    <script src="{{asset('js/admin_js/jquery.uniform.js')}}"></script> 
    <script src="{{asset('js/admin_js/select2.min.js')}}"></script> 
    <script src="{{asset('js/admin_js/jquery.dataTables.min.js')}}"></script> 
    <script src="{{asset('js/admin_js/matrix.js')}}"></script> 
    <script src="{{asset('js/admin_js/matrix.tables.js')}}"></script>
    <script src="{{asset('js/admin_js/bootstrap.min.js')}}"></script>

    <script src="{{asset('js/admin_js/excanvas.min.js')}}"></script> 
    <script src="{{asset('js/admin_js/jquery.flot.min.js')}}"></script> 
    <script src="{{asset('js/admin_js/jquery.flot.resize.min.js')}}"></script> 
    <script src="{{asset('js/admin_js/jquery.peity.min.js')}}"></script> 
    <script src="{{asset('js/admin_js/fullcalendar.min.js')}}"></script> 
    <script src="{{asset('js/admin_js/matrix.dashboard.js')}}"></script> 
    {{-- <script src="{{asset('js/backend_js/jquery.gritter.min.js')}}"></script>  --}}
    <script src="{{asset('js/admin_js/matrix.interface.js')}}"></script> 
    <script src="{{asset('js/admin_js/matrix.chat.js')}}"></script> 
    <script src="{{asset('js/admin_js/jquery.validate.js')}}"></script> 
    <script src="{{asset('js/admin_js/matrix.form_validation.js')}}"></script> 
    <script src="{{asset('js/admin_js/jquery.wizard.js')}}"></script> 
    <script src="{{asset('js/admin_js/matrix.popover.js')}}"></script> 
    <script src="{{asset('js/admin_js/bootstrap-datepicker.min.js')}}"></script> 

    <script type="text/javascript">
    // This function is called from the pop-up menus to transfer to
    // a different page. Ignore if the value returned is a null string:
    function goPage (newURL) {

        // if url is empty, skip the menu dividers and reset the menu selection to default
        if (newURL != "") {
        
            // if url is "-", it is this page -- reset the menu:
            if (newURL == "-" ) {
                resetMenu();            
            } 
            // else, send page to designated URL            
            else {  
                document.location.href = newURL;
            }
        }
    }

    // resets the menu selection upon entry to this page:
    function resetMenu() {
    document.gomenu.selector.selectedIndex = 2;
    }
    </script>
    @stack('scripts')
</body>

</html>