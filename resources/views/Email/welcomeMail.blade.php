@extends('layouts.main')

@section('content')

    @component('mail::message')
        {{ $mailInfo['title'] }}

        Congratulations!

        @component('mail::button', ['url' => $mailInfo['url']])
            Cheers!
        @endcomponent

        Thanks,<br>
        {{ config('app.name') }}
    @endcomponent

@endsection
