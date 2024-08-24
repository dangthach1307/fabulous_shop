@extends('front.layout.master')

@section('title', 'Register')

@section('css')
@endsection
@section('body_class', 'account-page')
@section('body')

    <section class="register-container">
        <div class="register-content">
            <div class="account-register">
                <div class="page-title">
                    <h2>Register</h2>
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
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="first_name">First name <span class="required">*</span></label>
                                            <input type="text" title="First name"
                                                class="form-control input-text required-entry" id="first_name"
                                                name="first_name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="last_name">Last name <span class="required">*</span></label>
                                            <input type="text" title="Last name"
                                                class="form-control input-text required-entry" id="last_name"
                                                name="last_name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email Address <span class="required">*</span></label>
                                        <input type="email" title="Email Address"
                                            class="form-control input-text required-entry" id="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password <span class="required">*</span></label>
                                        <input type="password" title="Password" id="password"
                                            class="form-control input-text required-entry validate-password"
                                            name="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm-password">Confirm Password <span
                                                class="required">*</span></label>
                                        <input type="password" title="Confirm Password" id="confirm-password"
                                            class="form-control input-text required-entry validate-password"
                                            name="confirm_password">
                                    </div>
                                </div>
                                <p class="required">* Required Fields</p>
                                <div class="buttons-set">
                                    <button id="register" name="register" type="submit"
                                        class="button register"><span>Register</span></button>
                                    <a class="login-link" href="{{ route('account.login') }}">Already have an account? Log
                                        in here</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>
    </section>

@endsection
