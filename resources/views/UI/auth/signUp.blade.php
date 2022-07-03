@extends('UI.layout.app')
@section('content')
    <section class="section innerpages position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="position-relative font-size56">Signup</h1>
                </div>
                @if($errors->any())
                    {!! implode('', $errors->all('<div>:message</div>')) !!}
                @endif
                <div class="col-12 ranking-listing">
                    <div class="row text-center justify-content-center">
                        <div class="col-lg-8 col-md-8 col-sm-10 system-column">
                            <form id="signupForm" action="{{route('ui.auth.makeSignup')}}" method="post">
                                @csrf
                                <div class="security-form">
                                    <div class="security-form-sub signup-form">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="form-group"><input type="text" name="firstName" class="form-control"
                                                        placeholder="First Name" value="" required></div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="form-group"><input type="text" name="lastName" class="form-control"
                                                        placeholder="Last Name" value="" required></div>
                                            </div>
                                        </div>
                                        <div class="form-group"><input type="email" name="email" class="form-control"
                                                placeholder="Email" value="" autocomplete=false required></div>
                                        <div class="form-group"><input type="number" name="phone" class="form-control"
                                                placeholder="Phone" value="" autocomplete=false required></div>
                                        <div class="form-group"><input id="passwordInp" type="password" name="password" class="form-control"
                                                placeholder="Password" value="" autocomplete=false required></div>
                                        <div class="form-group"><input id="confPasswordInp" type="password" name="confPassword" class="form-control"
                                                placeholder="Confirm Password" value="" autocomplete=false required>
                                                @error('confPassword')
                                                    <div class="error">{{ $message }}</div>
                                                @enderror</div>
                                    </div>
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
