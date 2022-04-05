@extends('layout')

@section('title', 'login User')

@section('content')

<div class="user-form">
    
    <div class="form-wrapper container">
       {{-- Register --}}
                <form action="{{route("doregister")}}" method="post" enctype="multipart/form" class="form-control">
                    {{csrf_field()}}
                    <div>
                        <h2>Welcome Shopper!</h2>
                        <p>Its good to have you</p>
                        @include('inc.errors')
                        <input type="text" value="{{old("full_name")}}" name="full_name" placeholder="Enter Your Full Name">
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
</script>
@endsection