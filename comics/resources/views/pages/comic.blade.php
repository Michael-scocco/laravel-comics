@extends('layouts.main-layout')

@section('title')
    <title>{{ $comic['title'] }}</title>
@endsection

@section('main')
    <main>
        <section class="comic">
            <div class="comic-cover-bar">
                <div class="wrapper-comic-cover">
                    <div class="label comic-type-label">
                        {{ $comic['type'] }}
                    </div>
                    <img class="comic-cover" src=" {{ $comic['thumb'] }} ">
                    <div class="label view-gallery-label">
                        View Gallery
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="comic-info">
                    <span class="comic-title">
                        {{ $comic['title'] }}
                    </span>
                    <div class="availability-bar">
                        <span class="wrapper-price">
                            U.S. Price:
                            <span class="price">
                                {{ $comic['price'] }}
                            </span>
                        </span>
                        <span class="availability">
                            Available
                        </span>
                        <div class="select-check-availabilty">
                            Check availability
                            <i class="fas fa-caret-down"></i>
                        </div>
                    </div>
                    <p class="comic-description">
                        {{ $comic['description'] }}
                    </p>

                </div>
                <div class="banner-adv">
                    <h3>
                        Advertisement
                    </h3>
                    <img src=" {{ asset('storage/assets/adv.jpg') }}">
                </div>
            </div>

            <div class="comic-recap">
                <div class="container">
                    <div class="talent">
                        <h2>
                            Talent
                        </h2>

                        <div class="artists">
                            <div class="row-title">
                                Art by:
                            </div>
                            <div class="row-content">
                                @foreach ($comic['artists'] as $artist)
                                    @if ($loop -> last)
                                        <a href="#">
                                            {{ $artist }}
                                        </a>
                                    @else
                                        <a href="#">
                                            {{ $artist }}
                                        </a>,
                                    @endif

                                @endforeach
                            </div>
                        </div>
                        <div class="writers">
                            <div class="row-title">
                                Written by:
                            </div>
                            <div class="row-content">
                                @foreach ($comic['writers'] as $writer)
                                    @if ($loop -> last)
                                        <a href="#">
                                            {{ $writer }}
                                        </a>
                                    @else
                                        <a href="#">
                                            {{ $writer }}
                                        </a>,
                                    @endif

                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="specs">
                        <h2>
                            Specs
                        </h2>

                        <div class="series-type">
                            <div class="row-title">
                                Series:
                            </div>
                            <div class="row-content">
                                <a href="#">
                                    {{ $comic['series'] }}
                                </a>
                            </div>
                        </div>
                        <div class="price">
                            <div class="row-title">
                                U.S. Price:
                            </div>
                            <div class="row-content">
                                {{ $comic['price'] }}
                            </div>
                        </div>
                        <div class="sale-date">
                            <div class="row-title">
                                On Sale Date:
                            </div>
                            <div class="row-content">
                                {{ $comic['sale_date'] }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="merchandise">
                <div class="container">
                    <ul>
                        <li>
                            <span>Digital Comics</span>
                            <img src=" {{ asset('storage/assets/icons-1.png')}}">
                        </li>
                        <li>
                            <span>Shop DC</span>
                            <img src=" {{ asset('storage/assets/icons-2.png')}}">
                        </li>
                        <li>
                            <span>Comic Shop Locator</span>
                            <img src=" {{ asset('storage/assets/icons-3.png')}}">
                        </li>
                        <li>
                            <span>Subscritptions </span>
                            <img src=" {{ asset('storage/assets/icons-4.png')}}">
                        </li>
                    </ul>
                </div>
            </div>
        </section>

    </main>
@endsection
