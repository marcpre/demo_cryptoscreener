<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Coindation</title>

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
    <script src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/js/main/jquery.min.js"></script>
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
    <script src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
    <script src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/js/plugins/forms/selects/select2.min.js"></script>

    <script src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/js/plugins/sliders/ion_rangeslider.min.js"></script>
    <script src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/js/plugins/ui/moment/moment_locales.min.js"></script>

    <script src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/assets/js/app.js"></script>
    <script src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/js/demo_pages/jqueryui_sliders.js"></script>

    <script src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/js/demo_pages/form_multiselect.js"></script>

    <script src="{{asset('js/form_select2.js')}}"></script>
    <script src="{{asset('js/extra_sliders_ion.js')}}"></script>


    <!-- /Theme JS files -->
</head>

<body class="navbar-md-md-top">

<!-- Multiple fixed navbars wrapper -->
<div class="fixed-top">

    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-dark bg-indigo">
        <div class="navbar-brand wmin-0 mr-5">
            <a href="" class="d-inline-block">
                <img src="global_assets/images/logo_light.png" alt="">
            </a>
        </div>

        <div class="d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-tree5"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link">Screener</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="navbar-nav-link">News</a>
                </li>

                <!--
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Menu</a>

                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Action</a>
                        <a href="#" class="dropdown-item">Another action</a>
                        <a href="#" class="dropdown-item">One more action</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Separate action</a>
                    </div>
                </li>
                -->
            </ul>
<!--
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link">
                        Text link
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link">
                        <i class="icon-bell2"></i>
                        <span class="d-md-none ml-2">Notifications</span>
                        <span class="badge badge-mark border-white ml-auto ml-md-0"></span>
                    </a>
                </li>

                <li class="nav-item dropdown dropdown-user">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="global_assets/images/image.png" class="rounded-circle" alt="">
                        <span>Victoria</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                        <a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
                        <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                        <a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                    </div>
                </li>
            </ul>
            -->
        </div>
    </div>
    <!-- /main navbar -->

</div>
<!-- /multiple fixed navbars wrapper -->


<!-- Page header -->
<!--
<div class="page-header">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Starters</span> - Navbars Fixed</h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>
</div>
-->
<!-- /page header -->


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
			<span class="navbar-text">
				&copy; 2015 - {{ date('Y') }}. Made with ♥ by <a href="#" target="_blank">Coindation</a>
			</span>

        <!--
        <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link">Text link</a>
            </li>

            <li class="nav-item">
                <a href="#" class="navbar-nav-link">
                    <i class="icon-lifebuoy"></i>
                </a>
            </li>

            <li class="nav-item">
                <a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold">
						<span class="text-pink-400">
							<i class="icon-cart2 mr-2"></i>
							Purchase
						</span>
                </a>
            </li>
        </ul> -->
    </div>
</div>
<!-- /footer -->

</body>
</html>
