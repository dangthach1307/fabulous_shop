@extends('front.layout.master')

@section('title', 'Login')

@section('css')
@endsection
@section('body_class', 'account-page')
@section('body')

    <section class="login-container">
        <div class="login-content">
            <div class="account-register">
                <div class="page-title">
                    <h2>Login</h2>
                </div>
                <fieldset class="col2-set">
                    @if (session('notification'))
                        <div class="alert alert-warning" role="alert">{{ session('notification') }}</div>
                    @endif
                    <form action="" method="post">
                        @csrf
                        <div class="register-users">
                            <div class="content">
                                <div class="form-list">
                                    <div class="form-group">
                                        <label for="email">Email Address <span class="required">*</span></label>
                                        <input type="text" title="Email Address"
                                            class="form-control input-text required-entry" id="email" name="email" autocomplete="email">
                                    </div>
                                    <div class="form-group">

                                        <label for="password">Password <span class="required">*</span></label>
                                        <input type="password" title="Password" id="validate-password"
                                            class="form-control input-text required-entry validate-password"
                                            name="password" autocomplete="new-password">
                                    </div>
                                </div>
                                <p class="required">* Required Fields</p>
                                <div class="buttons-set">
                                    <div class="login-remmember">
                                        <div class="checkbox">
                                            <label for="save-pass">
                                                <input type="checkbox" name="remember" id="save-pass">
                                                <span>Remember Me</span>
                                            </label>
                                        </div>
                                    </div>
                                    <button id="send2" name="send" type="submit"
                                        class="button login"><span>Login</span></button>
                                    <a class="forgot-word" href="forgot-password.html">Forgot Your Password?</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>
    </section>
@endsection
