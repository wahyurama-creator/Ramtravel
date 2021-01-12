@extends('layouts.app')

@section('title', 'Ramtravel - Detail Page')

@section('content')
    <!-- Detail -->
    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Paket Travel</li>
                                <li class="breadcrumb-item active">Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1>{{ $items->title }}</h1>
                            <p>{{ $items->location }}</p>
                            @if($items->galleries->count())
                                <div class="gallery">
                                    <div class="xzoom-container">
                                        <!-- Main Picture -->
                                        <img
                                            src="{{ Storage::url($items->galleries->first()->image) }}"
                                            class="xzoom"
                                            id="xzoom-default"
                                            xoriginal="{{ Storage::url($items->galleries->first()->image) }}"
                                        />

                                        <div class="xzoom-thumbs">
                                            @foreach($items->galleries as $gallery)
                                                <a href="{{ Storage::url($gallery->image) }}">
                                                    <img
                                                        src="{{ Storage::url($gallery->image) }}"
                                                        class="xzoom-gallery"
                                                        width="120"
                                                        xpreview="{{ Storage::url($gallery->image) }}"
                                                        alt=""
                                                    />
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <h2>Tentang Wisata</h2>
                            <p>{!! $items->about !!}</p>
                            <div class="features row">
                                <div class="col-md-4">
                                    <img
                                        src="{{ url('frontend/images/icon-ticket.svg') }}"
                                        alt=""
                                        class="features-image"
                                    />
                                    <div class="description">
                                        <h3>Featured Event</h3>
                                        <p>{{ $items->featured_event }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img
                                        src="{{ url('frontend/images/icon-language.svg') }}"
                                        alt=""
                                        class="features-image"
                                    />
                                    <div class="description">
                                        <h3>Language</h3>
                                        <p>{{ $items->language }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img
                                        src="{{ url('frontend/images/icon-food.svg') }}"
                                        alt=""
                                        class="features-image"
                                    />
                                    <div class="description">
                                        <h3>Foods</h3>
                                        <p>{{ $items->foods }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>Members are going</h2>
                            <div class="members my-2">
                                <img src="{{ url('frontend/images/testimonial-1.png') }}" class="members-image mr-1"
                                     alt="">
                                <img src="{{ url('frontend/images/testimonial-2.png') }}" class="members-image mr-1"
                                     alt="">
                            </div>
                            <hr/>
                            <h2>Trip Information</h2>
                            <table>
                                <tr>
                                    <th width="50%">Date of Departure</th>
                                    <td width="50%" class="text-right">
                                        {{ \Carbon\Carbon::create($items->date_of_departure)
                                            ->format('F n, Y') }}
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Duration</th>
                                    <td width="50%" class="text-right">{{ $items->duration }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Type</th>
                                    <td width="50%" class="text-right">{{ $items->type }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td width="50%" class="text-right">${{ $items->price }},00 / Person</td>
                                </tr>
                            </table>
                        </div>
                        <div class="join-container">
                            @auth()
                                <form action="{{ route('checkout-process', $items->id) }}" method="post">
                                    @csrf
                                    <button class="btn btn-block btn-join-now mt-3 py-2">
                                        Join Now
                                    </button>
                                </form>
                            @endauth
                            @guest()
                                <a href="{{ route('login') }}" class="btn btn-block btn-join-now mt-3 py-2">
                                    Login or Register to Join
                                </a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/xZoom/xzoom.css') }}"/>
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/xZoom/xzoom.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $(".xzoom, .xzoom-gallery").xzoom({
                zoomWidth: 500,
                title: false,
                tint: "#333",
                Xoffset: 15,
            });
        });
    </script>
@endpush
