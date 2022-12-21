@extends('layouts.main')

@section('content')
    <section class="login-block py-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form class="md-float-material form-material" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="text-center heading">G-Health Login</h3>
                                    </div>
                                </div>

                                <div class="form-floating mb-3">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid
                                    @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Email">
                                    <label for="email">Email</label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid
                                    @enderror"
                                        name="password" required autocomplete="current-password" placeholder="Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label for="password">Password</label>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>

                                <div class="or-container">
                                    <div class="line-separator"></div>
                                    <div class="or-label">or</div>
                                    <div class="line-separator"></div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <a class="btn btn-lg btn-google btn-block text-uppercase btn-outline"
                                            href="{{ route('google-auth') }}"><img src="/img/google.svg"></a>

                                    </div>
                                </div>
                                <br>

                                <p class="text-inverse text-center" style="margin-top: -40px;">Don't have an account yet? <a
                                        style="display: inline-flex; text-decoration:none;"
                                        href="{{ url('/register') }}">Register Now!</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
