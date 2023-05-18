
@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="dash-widget">
                    <div class="dash-widgetimg">
                        <span></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5><span class="counters">
                                        <p>{{$productCount }}</p>
                                    </span></h5>
                        <h6>Available Products</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="dash-widget dash1">
                    <div class="dash-widgetimg">
                        <span></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5>$<span class="counters"><p>{{$totalAmount }}</p></span></h5>
                        <h6>Total Coins Available</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="dash-widget dash2">
                    <div class="dash-widgetimg">
                        <span></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5><span class="counters">
                                        <p>{{$categoryCount }}</p>
                                    </span></h5>
                        <h6>Total Categories saved</h6>
                    </div>
                </div>
            </div>

        </div>
        <div class="card mb-0">
            <div class="card-body">
                <h4 class="card-title">All Products</h4>
                <div class="table-responsive dataview">
                    <table class="table datatable ">

                        <thead>
                        <tr>
                            <th>#Id</th>

                            <th>Product Name</th>
                            <th>Category Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Slot</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                        </thead>
                        @foreach($products as $product)
                            <tbody>

                            <tr>

                                <td>#{{$product->id}}</td>
                                <td>
                                    {{$product->name}}
                                </td>
                                <td> {{$product->category}}</td>
                                <td> {{$product->price}}</td>
                                <td> {{$product->quantity}}</td>
                                <td> {{$product->slot}}</td>
                                <th> <form action="{{ route('product_destroy', $product->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-success waves-effect" value="submit" type="submit">
                                            Delete Product
                                        </button>

                                    </form></th>
                                <th> <button class="btn btn-success waves-effect" value="submit" type="submit">
                                        <a href="{{route('update_product',['id'=> $product->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true">Update</i></a>
                                    </button></th>

                            </tr>

                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div></div>
@endsection
