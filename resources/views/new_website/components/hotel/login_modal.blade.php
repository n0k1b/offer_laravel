<!-- Login Modal Start -->
<div class="modal fade login-popup" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">
                <img src={{asset("assets_website/images/modal/logo-for-popup.png")}} class="logo-popup">

                <form action="" method="POST">
                    <div class="mb-3">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                            required="required">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>

                    <div class="mb-3">
                        <input type="password" name="password" id="txtPassword" class="form-control"
                            placeholder="Password" required="required" autocomplete="on">
                        <i id="toggle_pass" class="fa-solid fa-eye"></i>
                    </div>

                    <a href="">forgot your password?</a>

                    <div class="mb-3">
                        <ul class="modal-duelbtn">
                            <li>
                                <input type="submit" name="login" value="Login" class="btn-modal">
                            </li>
                            <li>
                                <input type="button" name="login" value="Signup" class="btn-modal-second">

                            </li>
                        </ul>

                </form>

                <h4 class="title-separator">OR</h4>

                <ul class="social-login">
                    <li><a href="#"><img src={{asset("assets_website/images/modal/apple-icon.png")}}
                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Login with Apple"></a></li>
                    <li><a href="#"><img src={{asset("assets_website/images/modal/google-icon.png")}}
                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Login with Google"></a></li>
                    <li><a href="#"><img src={{asset("assets_website/images/modal/facebook-icon.png")}}
                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Login with Facebook"></a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
<!-- Login Modal End -->
