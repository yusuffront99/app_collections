@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center container-child">
        <div class="col-sm-8 col-md-auto col-lg-auto">
            <h1 class="text-center mb-5 mt-5">LOGIN</h1>
            <form action="" class="p-2">
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
                    <img src="icons/icon.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection