@include('admin/head')
<body class="vertical-layout vertical-menu-modern 1-column  bg-full-screen-image blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                                <div class="card-header border-0">
                                    <div class="card-title text-center">
                                        <img src="{{URL::asset('admin/app-assets/images/logo/logo-dark.png')}}" alt="branding logo">
                                    </div>
                                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Easily Using</span></h6>
                                </div>
                                <div class="card-content">
                                    <div class="text-center">
                                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="la la-facebook"></span></a>
                                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="la la-twitter"></span></a>
                                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin"><span class="la la-linkedin font-medium-4"></span></a>
                                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github"><span class="la la-github font-medium-4"></span></a>
                                    </div>
                                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>OR Using Account
                                            Details</span></p>
                                    <div class="card-body">
                                        <form class="form-horizontal" id='login' novalidate>
                                            @csrf
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="text" class="form-control" name="user-name" id="user-name" placeholder="Your Username" required>
                                                <div class="form-control-position">
                                                    <i class="la la-user"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" class="form-control" name="user-password" id="user-password" placeholder="Enter Password" required>
                                                <div class="form-control-position">
                                                    <i class="la la-key"></i>
                                                </div>
                                            </fieldset>
                                            <div class="form-group row">
                                                <div class="col-sm-6 col-12 text-center text-sm-left pr-0">
                                                    <fieldset>
                                                        <input type="checkbox" id="remember-me" class="chk-remember">
                                                        <label for="remember-me"> Remember Me</label>
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6 col-12 float-sm-left text-center text-sm-right"><a href="recover-password.html" class="card-link">Forgot Password?</a></div>
                                            </div>
                                            <button type="submit" id="login-submit" class="btn btn-outline-info btn-block"><i class="la la-circle-o-notch spinner spiner-login" style="display: none"></i><i class="ft-unlock"></i> Login</button>
                                            <p id="login-error-massage" style="display: none" class="alert alert-danger mt-2"></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->
@include('admin/footer')
<script>
    $(document).ready(function(){
        $('#login').submit(function(event){
            event.preventDefault();
            let form = new FormData(this)
            let submit = $('#login-submit')
            let loginErrorMassage = $('#login-error-massage')
            $.ajax({
                url: 'login',
                type: 'post',
                data: form,
                processData: false,
                contentType: false,
                beforeSend: ()=>{
                    submit.attr('disabled',true)
                    $(submit[0].children[0]).fadeIn()
                    $(submit[0].children[1]).fadeOut()
                    loginErrorMassage.fadeOut()
                },
                success: (data)=>{
                        window.location.href = 'dashboard';
                },
                error: (error)=>{
                    // $('.spinner').fadeOut();
                    loginErrorMassage.fadeIn()
                    loginErrorMassage.html(error.responseJSON.message)
                    submit.attr('disabled',false)
                    $(submit[0].children[1]).fadeIn()
                        $(submit[0].children[0]).fadeOut()
                }
            })
        })
    })
</script>