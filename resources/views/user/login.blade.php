@extends('layout')

@section('title', 'login User')

@section('content')

<div class="user-form">
    
    <div class="form-wrapper container">
        <!--Login-->
        <div class="user login">
            <div class="img-box">
                <img src="./images/login.svg" alt="">
            </div>
                <form action="{{route("dologin")}}" method="post" enctype="multipart/form"class="form-control">
                    {{csrf_field()}}
                    @include('inc.errors')
                    <div>
                        <h2>Hello Again!</h2>
                        <p>Welcome back you've been missed.</p>
                        <input required value="{{old("email")}}" type="text" name="email" placeholder="Enter Username/Mobile/Email">
                        <div>
                            <input required value="{{old("password")}}" type="password" name="password" placeholder="Password">
                            <div class="icon form-icon">
                                <img src="./imagers/eye.svg" alt="">
                            </div>
                        </div>
                        <button>Login</button>
                    </div>
                    <div>
                        <p>Or continue with</p>
                        <div class="icons">
                            <div class="icon">
                                <img src="./images/google.svg" alt="">
                            </div>
                            <div class="icon">
                                <img src="./images/apple.svg" alt="">
                            </div>
                            <div class="icon">
                                <img src="./images/facebook.svg" alt="">
                            </div>
                            <div class="icon">
                                <img src="./images/github.svg" alt="">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</div>
@endsection