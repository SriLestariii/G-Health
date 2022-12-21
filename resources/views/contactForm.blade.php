@extends('layouts.main')

@section('content')
    <div class="container" style="width: 800px;">
        <div class="row mt-5 mb-5">
            <div class="col-8 offset-2 mt-5">
                <div class="card">
                    <div class="card-header bg-success text-white text-center"">
                        <h3>G-Health Contact</h3>
                        <small>Ada masukan? Kami siap mendengarkan!</small>
                    </div>
                    <div class="card-body">

                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                                @php
                                    Session::forget('success');
                                @endphp
                            </div>
                        @endif

                        <form method="POST" action="{{ route('contact-form.store') }}">
                            @csrf

                            <div class="form-floating mb-3">
                                <input id="name" type="text" name="name" class="form-control"
                                    placeholder="Name" value="{{ old('name') }}">
                                <label for="name">Name</label>
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="form-floating mb-3">
                                <input id="email" type="email" name="email" class="form-control"
                                    placeholder="Email" value="{{ old('email') }}">
                                <label for="email">Email</label>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-floating mb-3">
                                <input id="subject" type="text" name="subject" class="form-control"
                                    placeholder="Subject" value="{{ old('subject') }}">
                                <label for="subject">Subject</label>
                                @if ($errors->has('subject'))
                                    <span class="text-danger">{{ $errors->first('subject') }}</span>
                                @endif
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Message" id="content" name="content" row="5"></textarea>
                                <label for="content">Message</label>
                              </div>

                            <div class="form-group text-center">
                                <button class="btn btn-success btn-submit"
                                    style="--bs-btn-padding-y: 8px; --bs-btn-padding-x: 16px; --bs-btn-font-size: 1.25rem;">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
