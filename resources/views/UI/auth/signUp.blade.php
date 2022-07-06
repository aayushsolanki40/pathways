@extends('UI.layout.app')
@section('content')
    <section class="section innerpages position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="position-relative font-size56">Signup</h1>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-10 system-column">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                </div>
                <div class="col-12 ranking-listing">
                    <div class="row text-center justify-content-center">
                        <div class="col-lg-8 col-md-8 col-sm-10 system-column">
                            <form id="sdignupForm" action="{{route('ui.auth.makeSignup')}}" method="post">
                                @csrf
                                <div class="security-form">
                                    <div class="security-form-sub signup-form">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="form-group"><input type="text" name="firstName" class="form-control" placeholder="First Name" value="{{ old('firstName') }}">
                                                @error('firstName')
                                                    <div class="error text-danger text-left">{{ $message }}</div>
                                                @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="form-group"><input type="text" name="lastName" class="form-control"
                                                        placeholder="Last Name" value="{{ old('lastName') }}">
                                                    @error('lastName')
                                                        <div class="error text-danger text-left">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group"><input type="email" name="email" class="form-control"
                                                placeholder="Email" value="{{ old('email') }}" autocomplete=false>
                                            @error('email')
                                                <div class="error text-danger text-left">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group"><input type="number" name="phone" class="form-control"
                                                placeholder="Phone" value="{{ old('phone') }}" autocomplete=false>
                                            @error('phone')
                                                <div class="error text-danger text-left">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group"><input id="passwordInp" type="password" name="password" class="form-control"
                                                placeholder="Password" value="{{ old('password') }}" autocomplete=false>
                                            @error('password')
                                                <div class="error text-danger text-left">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group"><input id="confPasswordInp" type="password" name="confPassword" class="form-control"
                                                placeholder="Confirm Password" value="" autocomplete=false >
                                                @error('confPassword')
                                                    <div class="error text-danger text-left">{{ $message }}</div>
                                                @enderror</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <span>If you have an account ? <a class="link" href="{{route('ui.auth.login')}}">Login</a></span>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <button type="submit" class="button file-upload-btn" type="submit">Sign Up</button>
                                        <div class="wallet-text">Already Have a Wallet? Connect</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
