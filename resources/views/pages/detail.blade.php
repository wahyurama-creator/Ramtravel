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
                            <h1>Nusa Penida</h1>
                            <p>Indonesia</p>
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <!-- Main Picture -->
                                    <img
                                        src="frontend/images/produk-1.jpg"
                                        class="xzoom"
                                        id="xzoom-default"
                                        xoriginal="frontend/images/produk-1.jpg"
                                    />

                                    <div class="xzoom-thumbs">
                                        <a href="frontend/images/produk-1-1.jpg">
                                            <img
                                                src="frontend/images/produk-1-1.jpg"
                                                class="xzoom-gallery"
                                                width="120"
                                                xpreview="frontend/images/produk-1-1.jpg"
                                                alt=""
                                            />
                                        </a>
                                        <a href="frontend/images/produk-1.jpg">
                                            <img
                                                src="frontend/images/produk-1.jpg"
                                                class="xzoom-gallery"
                                                width="120"
                                                xpreview="frontend/images/produk-1.jpg"
                                                alt=""
                                            />
                                        </a>
                                        <a href="frontend/images/produk-1.jpg">
                                            <img
                                                src="frontend/images/produk-1.jpg"
                                                class="xzoom-gallery"
                                                width="120"
                                                xpreview="frontend/images/produk-1.jpg"
                                                alt=""
                                            />
                                        </a>
                                        <a href="frontend/images/produk-1.jpg">
                                            <img
                                                src="frontend/images/produk-1.jpg"
                                                class="xzoom-gallery"
                                                width="120"
                                                xpreview="frontend/images/produk-1.jpg"
                                                alt=""
                                            />
                                        </a>
                                        <a href="frontend/images/produk-1.jpg">
                                            <img
                                                src="frontend/images/produk-1.jpg"
                                                class="xzoom-gallery"
                                                width="120"
                                                xpreview="frontend/images/produk-1.jpg"
                                                alt=""
                                            />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <h2>Tentang Wisata</h2>
                            <p>
                                Nusa Penida adalah sebuah pulau bagian dari negara Republik
                                Indonesia yang terletak di sebelah tenggara Bali yang
                                dipisahkan oleh Selat Badung. Di dekat pulau ini terdapat juga
                                pulau-pulau kecil lainnya yaitu Nusa Ceningan dan Nusa
                                Lembongan. Perairan pulau Nusa Penida terkenal dengan kawasan
                                selamnya di antaranya terdapat di Crystal Bay, Manta Point,
                                Batu Meling, Batu Lumbung, Batu Abah, Toyapakeh dan Malibu
                                Point.
                            </p>
                            <p>
                                Perbukitan dan kapur karang merupakan kondisi tanah di pulau
                                ini, salah satunya gunung bukit tertinggi bernama Gunung Mundi
                                yang terletak di Kecamatan Nusa Penida. Sumber air adalah mata
                                air dan sungai hanya terdapat di wilayah daratan Kabupaten
                                Klungkung yang mengalir sepanjang tahun.
                            </p>
                            <div class="features row">
                                <div class="col-md-4">
                                    <img
                                        src="frontend/images/icon-ticket.svg"
                                        alt=""
                                        class="features-image"
                                    />
                                    <div class="description">
                                        <h3>Featured Event</h3>
                                        <p>Tari Kecak</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img
                                        src="frontend/images/icon-language.svg"
                                        alt=""
                                        class="features-image"
                                    />
                                    <div class="description">
                                        <h3>Language</h3>
                                        <p>Bahasa Indonesia</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img
                                        src="frontend/images/icon-food.svg"
                                        alt=""
                                        class="features-image"
                                    />
                                    <div class="description">
                                        <h3>Foods</h3>
                                        <p>Local Foods</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>Members are going</h2>
                            <div class="members my-2">
                                <img src="frontend/images/testimonial-1.png" class="members-image mr-1" alt="">
                                <img src="frontend/images/testimonial-2.png" class="members-image mr-1" alt="">
                                <img src="frontend/images/testimonial-1.png" class="members-image mr-1" alt="">
                                <img src="frontend/images/testimonial-2.png" class="members-image mr-1" alt="">
                            </div>
                            <hr/>
                            <h2>Trip Information</h2>
                            <table>
                                <tr>
                                    <th width="50%">Date of Departure</th>
                                    <td width="50%" class="text-right">30 November 2020</td>
                                </tr>
                                <tr>
                                    <th width="50%">Duration</th>
                                    <td width="50%" class="text-right">3D 2N</td>
                                </tr>
                                <tr>
                                    <th width="50%">Type</th>
                                    <td width="50%" class="text-right">Open Trip</td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td width="50%" class="text-right">$80,00 / Person</td>
                                </tr>
                            </table>
                        </div>
                        <div class="join-container">
                            <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-3 py-2"
                            >Join Now</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/xZoom/xzoom.css') }}" />
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
