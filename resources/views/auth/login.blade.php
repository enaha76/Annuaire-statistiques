<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Log In | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        
        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <div class="account-pages pt-2 pt-sm-5 pb-2 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="  p-0 rounded" style="box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1)">

                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-dark">
                                <a href="index.html">
                                    <span class="logo-lg">
                                        <img src="assets/images/logo.png" alt="" height="20">
                                        <span class="text-light fw-bold">Annuaire Statistique</span>
                                    </span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center pb-0 fw-bold">S'identifier</h4>
                                </div>

                                <form method="POST" action="{{ route('login') }}" >
                                         @csrf
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">votre Email</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>mot de passe incorrecte </strong>
                                        </span>
                                    @enderror
                                    </div>

                                    <div class="mb-3">
                                        @if (Route::has('password.request'))
                                    <a class="text-muted  float-end" href="{{ route('password.request') }}">
                                        <small>Mot de passe oublié?</small>
                                    </a>
                                @endif
                                        <label for="password" class="form-label">Mot de Passe</label>
                                        <div class="input-group input-group-merge">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>mot de passe incorrect</strong>
                                            </span>
                                            @enderror
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                           
                                        </div>
                                       
                                    </div>

                                    <div class="mb-3 mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                            <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="mb-1 mb-0 text-center">
                                        <button class="btn btn-dark" type="submit"> connexion</button>
                                    </div>
                                    
                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                      
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            2022 - 2023 © SUPNUM 
        </footer>

        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>
