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
            <div class="form-box">
                <div class="top">
                    <p>Not a member?
                        <a href="#">Register Now</a>
                    </p>
                </div>
                <form action="{{route("user.dologin")}}" class="form-control">
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
        <!--Register-->
        <div class="user signup">
            <div class="form-box">
                <div class="top">
                    <p>Not a member?
                        <a href="#">Login Now</a>
                    </p>
                </div>
                <form action="{{route("user.doregister")}}" class="form-control">
                    <div>
                        <h2>Welcome Shopper!</h2>
                        <p>Its good to have you</p>
                        <input type="email" value="{{old("email")}}" name="email" placeholder="Enter Email">
                        <input type="text" value="{{old("password")}}" name="username"  placeholder="Username">
                        <input type="text" value="{{old("mobile")}}" name="mobile" placeholder="Mobile Number">
                        <div>
                            <input type="password" value="{{old("password")}}" name="password" placeholder="Password">
                        </div>
                        <div>
                            <input type="password" value="{{old("password_confirmation")}}" name="password_confirmation" placeholder="Confirm Password">
                        </div>
                        <button>Register</button>
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
            <div class="img-box">
                <img src="./images/trial.svg" alt="">
            </div>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', myFunction);

function myFunction(){
    userForm.classList.add('active')
    formWrapper.classList.add('active')
  }
</script>
@endsection