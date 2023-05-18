
@extends('layouts.user_app')
@section('content')

    <div class="page-wrapper ms-0">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 col-sm-12 tabs_wrapper">
                    <div class="page-header ">
                        <div class="page-title">
                            <h4></h4>
                            <h6>Manage your purchases</h6>
                        </div>
                    </div>
                    @include('message')
                    <div class="tabs_container">
                        <div class="tab_content active" data-tab="fruits">
                            <div class="row ">
                                @foreach($products as $product)
                                <div class="col-lg-3 col-sm-6 d-flex ">

                                    <div class="productset flex-fill active">

                                        <div class="productsetimg">
                                            <img src="{{ URL::to('/') }}/images/{{ $product->image}}" alt="img">
                                            <h6>Units:{{$product->slot}}</h6>
                                            <div class="check-product">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="productsetcontent">

                                            <h4>Name:{{$product->name}}</h4>
                                            <h6>Price:{{$product->price}}</h6>
                                            <h6>Slot (s):{{$product->slot}}</h6>
                                            <hr>
                                            <div class="col-12">
                                            <a href="{{route('checkout',$product->id)}}"><button class="btn btn-success"> Purchase</button></a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@include('layouts/pos-sidebar')


@endsection
