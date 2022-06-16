@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center container-child">
        <div class="col-sm-8 col-md-auto col-lg-auto">
            <h1 class="text-center mb-5 mt-5">LOGIN</h1>
            <form class="p-2">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" id="email" class="input-layer">
                </div>
                <div class="form-group mt-2">
                    <label for="" id="label-input">Password</label>
                    <input type="password" id="password" class="input-layer">
                </div>
                <div class="d-grid gap-2 mt-3">
                    <button class="btn-signin" type="button">Sign In</button>
                </div>
            </form>
            <div class="footer text-center mt-5">
                <h6 class="text-center">
                    <a href="" class="create-account">Create a new account?</a>
                </h6>
                <div class="icon-footer">
                    <img src="{{asset('frontend/dist/assets/images/icon/icon.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('jquery-script')
<script>
    $(document).ready(function(){
        $('.btn-signin').click(function(e){
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
    
            e.preventDefault();
            var email     = $("#email").val();
            var password  = $("#password").val();
    
            $.ajax({
                url: 'auth_login',
                type: 'POST',
                data: {
                    email: email,
                    password: password
                },
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                    if(data.success) {
                    $('#notifDiv').fadeIn();
                    $('#notifDiv').css('background', 'green');
                    $('#notifDiv').text('User Successfully Login');
                    setTimeout(() => {
                        $('#notifDiv').fadeOut();
                    }, 3000);
                    
                    } else if(data.verify_email) {
                        $('#notifDiv').fadeIn();
                        $('#notifDiv').css('background', 'red');
                        $('#notifDiv').text('Verify your account first from email');
                        setTimeout(() => {
                        $('#notifDiv').fadeOut();
                        }, 3000);
                    }
                    } 
                    else {
                        // $('#notifDiv').fadeIn();
                        // $('#notifDiv').css('background', 'red');
                        // $('#notifDiv').text('An error occured. Please try later');
                        // setTimeout(() => {
                        // $('#notifDiv').fadeOut();
                        // }, 3000);
                        console.log(data);
                    }
                }
            });
        })
    })
</script>
@endpush