@extends('layouts.app')

@section('page-title', 'DC Comics - Show')

@section('main-box')
    <div class="single-comic-section">
        <div class="blue-line">

        </div>
        <div class="single-comic-box">
            <div class="comic-picture-box">
                <img src="{{$single_comic['thumb']}}" alt="">
            </div>
            <div class="comic-info-top">
                
            </div>
            <div class="comic-info-bottom">

            </div>
        </div>
    </div>
@endsection