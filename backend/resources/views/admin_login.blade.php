<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
                    <div class="bg-image" style="background-image: url('assets/media/photos/photo19@2x.jpg');">
                    <div class="row no-gutters justify-content-center bg-primary-dark-op">
                        <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">
                            <!-- Sign In Block -->
                            <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
                                <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-white">
                                    <!-- Header -->
                                    <div class="mb-2 text-center">
                                        <a class="link-fx font-w700 font-size-h1" href="index.html">
                                            <span class="text-dark">Tusi</span><span class="text-primary">Cəmiyyəti</span>
                                        </a>
                                        <p class="text-uppercase font-w700 font-size-sm text-muted">Daxil ol</p>
                                    </div>
                                    <!-- END Header -->
                                    @include('settings.errors')
                                    <form class="js-validation-signin" action="{{ route('AdminLoginPost') }}" method="POST" novalidate="novalidate">
                                        @csrf
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="login-username" name="email" placeholder="E-Poçt daxil edin..." />
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-user-circle"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="login-password" name="password" placeholder="Şifrə daxil edin..." />
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-asterisk"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-hero-primary">
                                                <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Daxil ol
                                            </button>
                                        </div>
                                    </form>
                                    <!-- END Sign In Form -->
                                </div>
                                <div class="block-content bg-body">
                                    <div class="d-flex justify-content-center text-center push">
                                        <a class="item item-circle item-tiny mr-1 bg-default active" data-toggle="theme" data-theme="default" href="#"></a>
                                        <a class="item item-circle item-tiny mr-1 bg-xwork" data-toggle="theme" data-theme="assets/css/themes/xwork.min.css" href="#"></a>
                                        <a class="item item-circle item-tiny mr-1 bg-xmodern" data-toggle="theme" data-theme="assets/css/themes/xmodern.min.css" href="#"></a>
                                        <a class="item item-circle item-tiny mr-1 bg-xeco" data-toggle="theme" data-theme="assets/css/themes/xeco.min.css" href="#"></a>
                                        <a class="item item-circle item-tiny mr-1 bg-xsmooth" data-toggle="theme" data-theme="assets/css/themes/xsmooth.min.css" href="#"></a>
                                        <a class="item item-circle item-tiny mr-1 bg-xinspire" data-toggle="theme" data-theme="assets/css/themes/xinspire.min.css" href="#"></a>
                                        <a class="item item-circle item-tiny mr-1 bg-xdream" data-toggle="theme" data-theme="assets/css/themes/xdream.min.css" href="#"></a>
                                        <a class="item item-circle item-tiny mr-1 bg-xpro" data-toggle="theme" data-theme="assets/css/themes/xpro.min.css" href="#"></a>
                                        <a class="item item-circle item-tiny bg-xplay" data-toggle="theme" data-theme="assets/css/themes/xplay.min.css" href="#"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Sign In Block -->
                        </div>
                    </div>
                </div>
</body>
</html>