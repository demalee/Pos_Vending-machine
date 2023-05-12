@extends('layouts.user_app')
@section('content')

    <div class="page-wrapper ms-0">
        <div class="content">
            <form action="{{ url('buy/product') }}" method="POST" enctype="multipart/form-data" >
                @csrf
            <div class="row">

    <div class="col-lg-2 col-sm-12 col-12">
        <div class="form-group">
            <label>How many slots</label>
            <input type="number"   name="slot">
        </div>
    </div>
    <div class="col-lg-2 col-sm-12 col-12">
        <div class="form-group">
            <label>Amount </label>
            <input type="number" step="type" name="amount">
        </div>
    </div>
    <div class="col-lg-2 col-sm-6 col-12">
        <div class="form-group">
            <label>Coin type</label>
                <select class="select" name="type">
                    <option value="dollar"> Dollar</option>
                    <option value="penny">Penny</option>
                    <option value="cents">Cents</option>

                </select>


        </div>
    </div>


    </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <button class="btn btn-success waves-effect" value="submit" type="submit">
                        Buy
                    </button>
                </div>


            </form></div></div>
@endsection
