@extends('layouts.app')
@section('content')


    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                @foreach($amountByType as $amount)
                <div class="col-lg-4 col-sm-6 col-12">

                        <div class="dash-widget">

                        <div class="dash-widgetimg">
                            <span></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5><span class="counters">

                                        @if($amount->type == 'penny')
                                            <p>{{ $amount->total_amount }}</p>

                                </span></h5>
                            <h6>Penny</h6>
                            @endif
                            <h5><span class="counters">
                            @if($amount->type == 'dollar')
                                <p>{{ $amount->total_amount }}</p>

                                </span></h5>
                                <h6>Dollar</h6>
                            @endif
                            <h5><span class="counters">
                            @if($amount->type == 'cents')
                                        <p>{{ $amount->total_amount }}</p>

                                </span></h5>
                            <h6>Cents</h6>
                            @endif
                        </div>

                    </div>
                </div>
                @endforeach
                @include('message')

            </div>
            <div class="page-header">
                <div class="page-title">
                    <h4>Add Coin</h4>
                    <h6>Create new product</h6>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="{{ url('add/coin') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="number"  step="any" name="amount" placeholder="10.2">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Coin Type</label>
                                <select class="select" name="type">
                                    <option value="dollar"> Dollar</option>
                                    <option value="penny">Penny</option>
                                    <option value="cents">Cents</option>

                                </select>
                            </div>
                        </div>
                        <button class="btn btn-success waves-effect" value="submit" type="submit">
                            Add Coin
                        </button>
                    </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
