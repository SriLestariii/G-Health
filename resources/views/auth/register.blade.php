@extends('layouts.main')

@section('content')
    <section class="login-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form method="POST" action="{{ route('register') }}" class="md-float-material form-material" action="#"
                        method="POST">
                        @csrf
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="text-center heading">G-Health Register</h3>
                                    </div>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                        id="name" placeholder="Name">
                                    <label for="name">Name</label>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email"
                                        id="email" placeholder="Email">
                                    <label for="email">Email</label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="new-password" id="password-confirm"
                                        placeholder="Password">
                                    <label for="floatingInput">Password</label>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control"
                                        id="password-confirm"name="password_confirmation" placeholder="Password">
                                    <label for="password">Confirm Password</label>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 text-center pt-3">
                                        <input type="submit"
                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20"
                                            name="submit" value="Signup Now">
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

                                <p class="text-inverse text-center" style="margin-top: -35px;">Already have an account? <a
                                        style="display: inline-flex" href="{{ url('login') }}">Login</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
