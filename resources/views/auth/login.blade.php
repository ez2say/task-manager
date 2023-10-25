@extends('layouts.main')

@section('title', 'Создание задачи')

@section('content')
<div id="stars"></div>
<div id="stars2"></div>
<div id="stars3"></div>
<div class="section">
    <div class="container">
        <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5">
                <div class="section pb-5 pt-5 pt-sm-2 text-center">
                    <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                    <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
                    <label for="reg-log"></label>
                    <div class="card-3d-wrap mx-auto">
                        <div class="card-3d-wrapper">
                            <div class="card-front">
                                <div class="center-wrap">
                                    <form method="post" action="/login" class="section text-center">
                                        @csrf
                                        <h4 class="mb-4 pb-3">Log In</h4>
                                        <div class="form-group">
                                            <input type="email" class="form-style" placeholder="Email" name="email">
                                            <i class="input-icon uil uil-at"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input type="password" class="form-style" placeholder="Password" name="password">
                                            <i class="input-icon uil uil-lock-alt"></i>
                                        </div>
                                        <button class="btn mt-4">Login</button>
                                        <p class="mb-0 mt-4 text-center"><a href="" class="link">Forgot your password?</a></p>
                                    </form>
                                </div>
                            </div>
                            <div class="card-back">
                                <div class="center-wrap">
                                    <form method="post" action="/register" class="section text-center">
                                        @csrf
                                        <h4 class="mb-3 pb-3">Sign Up</h4>
                                        <div class="form-group">
                                            <input type="text" class="form-style" placeholder="Full Name" name="name">
                                            <i class="input-icon uil uil-user"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input type="email" class="form-style" placeholder="Email" name="email">
                                            <i class="input-icon uil uil-at"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input type="password" class="form-style" placeholder="Password" name="password">
                                            <i class="input-icon uil uil-lock-alt"></i>
                                        </div>
                                        <div class="form-group mt-2">
                                            <input type="password" class="form-style" placeholder="Password" name="password_confirmation">
                                            <i class="input-icon uil uil-lock-alt"></i>
                                        </div>
                                        <button  class="btn mt-4">Register</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
