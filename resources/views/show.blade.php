@extends('layouts.app')

@section('page-title', 'DC Comics - Show')

@section('main-box')
    <div class="single-comic-section">
        <div class="blue-line">

        </div>
        <div class="single-comic-box-top">
            <div class="comic-picture-box">
                <img src="{{$single_comic['thumb']}}" alt="">
            </div>
            <div class="comic-info-top">
                
                <div class="comic-info-top-left">
                    <h1>{{$single_comic['title']}}</h1>
                    <div class="green-box">
                        <div class="green-box-left">
                            <span>US Price : {{$single_comic['price']}}</span>
                            <span>AVAILABLE</span>
                        </div>
                        <div class="green-box-right">
                            <span>Check Availability</span>
                        </div>
                    </div>
                    <div class="description-box">
                        <p>{{$single_comic['description']}}</p>
                    </div>
                </div>
                
                <div class="comic-info-top-right">
                    <img src="{{ asset('img/adv.jpg') }}" alt="">
                </div>
            
            </div>
            <div class="comic-info-bottom">

            </div>
        </div>
        <div class="single-comic-box-bottom">
            <div class="comic-details-box">
                
                <div class="comic-details-left">
                    <h3>Talent</h3>
                    <div class="comic-art">
                        <div class="detail-1">
                            <span>Art by:</span>
                        </div>
                        <div class="detail-2">
                            @foreach($single_comic['artists'] as $artist)
                                <span>{{$artist}}, </span>
                            @endforeach
                        </div>
                    </div>
                    <div class="comic-writers">
                        <div class="detail-1">
                            <span>Written by:</span>
                        </div>
                        <div class="detail-2">
                            @foreach($single_comic['writers'] as $writer)
                                <span>{{$writer}}, </span>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                <div class="comic-details-right">
                    <h3>Specs</h3>
                    <div class="comic-details-series">
                        <div class="detail-1">
                            <span>Series:</span>
                        </div>
                        <div class="detail-2">
                            <span>{{strtoupper($single_comic['series'])}}</span>
                        </div>
                    </div>
                    <div class="comic-details-price">
                        <div class="detail-1">
                            <span>U.S. Price:</span>
                        </div>
                        <div class="detail-2">
                            <span>{{$single_comic['price']}}</span>
                        </div>
                    </div>
                    <div class="comic-details-date">
                        <div class="detail-1">
                            <span>On Sale Date:</span>
                        </div>
                        <div class="detail-3">
                            <span>{{$single_comic['sale_date']}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection