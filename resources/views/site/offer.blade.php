@extends('index')
@section('content')
    <div class="Filter">
        <section class="container-fluid ">
            <div class="row ">
                <section class="col-md-4 fixed  SlideTride offerTitle">
                    <div class="TrideText">
                        <h1 class="text-center Title ">{{$service_name}}</h1>
                    </div><!--.TrideText -->
                    <div class="SliderImgDiv" style="background-image:url(images/uslugi1.jpg)"></div>
                </section>
                <div class="col-md-6 offset-md-4 OffersList clearfix">
                    <nav class="offerPageList">
                        <ul>
                            @if(!empty($offers))
                                @foreach($offers as $offer)
                                    <li> $offer-><span class="Price">99999</span></li>
                                @endforeach
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </div>
@endsection