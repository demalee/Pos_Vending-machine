
@extends('layouts.app')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="dash-widget">
                        <div class="dash-widgetimg">
                            <span></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5><span class="counters">
                                        <p>{{$salesCount }}</p>
                                    </span></h5>
                            <h6>Products successfully sold</h6>
                        </div>
                    </div>
                </div>



            </div>
            <div class="card mb-0">
                <div class="card-body">
                    <h4 class="card-title">All Sold Products</h4>
                    <div class="table-responsive dataview">
                        <table class="table datatable ">

                            <thead>
                            <tr>
                                <th>#Id</th>

                                <th>Amount Given by buyer</th>
                                <th>Change Given </th>
                                <th>Slot</th>
                                <th>Coin type</th>
                            </tr>
                            </thead>
                            @foreach($sales as $sale)
                            <tbody>
                            <tr>

                                    <td>#{{$sale->id}}</td>
                                    <td> {{$sale->amount}}</td>
                                <td> {{$sale->change_amount}}</td>
                                    <td> {{$sale->slot}}</td>
                                    <td> {{$sale->type}}</td>

                            </tr>

                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div></div>
@endsection
