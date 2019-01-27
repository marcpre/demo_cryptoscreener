<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="http://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/js/main/jquery.min.js"></script>
    <script src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/js/plugins/loaders/blockui.min.js"></script>
    <script src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/js/plugins/ui/slinky.min.js"></script>
    <script src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/js/plugins/ui/ripple.min.js"></script>
    <!-- /core JS files -->

    <!-- Load plugin -->
    <script src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/js/plugins/extensions/jquery_ui/widgets.min.js"></script>
    <script src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/js/plugins/extensions/jquery_ui/touch.min.js"></script>

    <!-- Used for Multiselects -->
    <script src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/js/plugins/notifications/pnotify.min.js"></script>
    <script src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <!-- /load plugin -->

    <!-- Theme JS files -->

    <script src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/assets/js/app.js"></script>
    <script src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/js/demo_pages/jqueryui_sliders.js"></script>

    <script src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/js/demo_pages/form_multiselect.js"></script>

    <!-- <script src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/js/demo_pages/dashboard.js"></script> -->
    <!-- /theme JS files -->

</head>

<body class="navbar-top">

<!-- Multiple fixed navbars wrapper -->
<div class="fixed-top">

    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-dark bg-indigo fixed-top">
        <div class="navbar-brand wmin-0 mr-5">
            <a href="index.html" class="d-inline-block">
                <img src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/images/placeholder.png" alt="">
            </a>
        </div>

        <div class="d-md-none">
        </div>

        <div class="collapse navbar-collapse" id="navbar-mobile">
        </div>
    </div>
</div>
<!-- /main navbar -->

<!-- /multiple fixed navbars wrapper -->

<!-- Page content -->
<div class="page-content pt-0">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content">

            @yield('content')

        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->


<!-- Footer -->
<div class="navbar navbar-expand-lg navbar-light">
    <div class="text-center d-lg-none w-100">
        <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
            <i class="icon-unfold mr-2"></i>
            Footer
        </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-footer">
        <span class="navbar-text"></span>
    </div>
</div>
<!-- /footer -->

</body>
</html>
