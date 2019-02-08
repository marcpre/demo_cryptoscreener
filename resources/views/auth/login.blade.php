<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Coindation.com</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
    <link
        href="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/css/icons/icomoon/styles.css"
        rel="stylesheet" type="text/css">
    <link
        href="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/assets/css/bootstrap.min.css"
        rel="stylesheet" type="text/css">
    <link
        href="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/assets/css/bootstrap_limitless.min.css"
        rel="stylesheet" type="text/css">
    <link
        href="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/assets/css/layout.min.css"
        rel="stylesheet" type="text/css">
    <link
        href="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/assets/css/components.min.css"
        rel="stylesheet" type="text/css">
    <link
        href="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/assets/css/colors.min.css"
        rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script
        src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/js/main/jquery.min.js"></script>
    <script
        src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script
        src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script
        src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/js/plugins/forms/styling/uniform.min.js"></script>

    <script
        src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/assets/js/app.js"></script>
    <script
        src="https://gitcdn.link/repo/marcpre/demo_cryptoscreener/master/_other/layout_html/global_assets/js/demo_pages/login.js"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center">

            <!-- Login card -->
            <form method="POST" class="login-form" action="{{ route('login') }}">
                @csrf

                <div class="card mb-0">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                            <h5 class="mb-0">Login to your account</h5>
                            <span class="d-block text-muted">Your credentials</span>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <!-- <input type="text" class="form-control" placeholder="Username"> -->
                            <input id="email" placeholder="Email" type="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                   required autofocus>

                            <div class="form-control-feedback">
                                <i class="icon-user text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <!-- <input type="password" class="form-control" placeholder="Password"> -->

                            <input id="password" placeholder="Password" type="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif

                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group d-flex align-items-center">
                            <div class="form-check mb-0">
                                <label class="form-check-label">
                                    <input type="checkbox" name="remember" id="remember"
                                           {{ old('remember') ? 'checked' : '' }} class="form-check-input" checked
                                           data-fouc>
                                    {{ __('Remember Me') }}
                                </label>
                            </div>

                            @if (Route::has('password.request'))
                                <a class="ml-auto" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif

                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }} <i
                                    class="icon-circle-right2 ml-2"></i></button>
                        </div>
                        <!--
                                                <div class="form-group text-center text-muted content-divider">
                                                    <span class="px-2">or sign in with</span>
                                                </div>

                                                <div class="form-group text-center">
                                                    <button type="button" class="btn btn-outline bg-indigo border-indigo text-indigo btn-icon rounded-round border-2"><i class="icon-facebook"></i></button>
                                                    <button type="button" class="btn btn-outline bg-pink-300 border-pink-300 text-pink-300 btn-icon rounded-round border-2 ml-2"><i class="icon-dribbble3"></i></button>
                                                    <button type="button" class="btn btn-outline bg-slate-600 border-slate-600 text-slate-600 btn-icon rounded-round border-2 ml-2"><i class="icon-github"></i></button>
                                                    <button type="button" class="btn btn-outline bg-info border-info text-info btn-icon rounded-round border-2 ml-2"><i class="icon-twitter"></i></button>
                                                </div>
                        -->
                        <div class="form-group text-center text-muted content-divider">
                            <span class="px-2">Don't have an account?</span>
                        </div>

                        <div class="form-group">
                            <a href="{{ route('register') }}" class="btn btn-light btn-block">Sign up</a>
                        </div>

                        <span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a
                                href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
                    </div>
                </div>
            </form>
            <!-- /login card -->

        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
