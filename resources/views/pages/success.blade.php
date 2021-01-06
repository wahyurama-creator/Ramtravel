@extends('layouts.success')

@section('title', 'Ramtravel - Success Page')

@section('content')
    <!-- Detail -->
    <main>
        <div class="section-success d-flex align-items-center">
            <div class="col text-center">
                <img src="{{ url('frontend/images/icon_mail.png') }}" alt="">
                <h1>Yay!Success</h1>
                <p>
                    We have sent your email for trip instruction <br>please read it as well
                </p>
                <a href="{{ route('home') }}" class="btn btn-homepage mt-3 px-5">
                    Home Page
                </a>
            </div>
        </div>
    </main>
@endsection
