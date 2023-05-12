@extends('layouts.app')
@section('content')


    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-12"></div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="dash-widget">
                        <div class="dash-widgetimg">
                            <span></span>
                        </div>
                        <div class="dash-widgetcontent">
                            <h5><span class="counters">

                                        <p>{{ $categoryCount }}</p>
                                   </span></h5>
                            <h6>Available Categories</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12"></div>

                @include('message')
            </div>
            <div class="page-header">
                <div class="page-title">
                    <h4>Add Category</h4>
                    <h6>Create new category</h6>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="{{url('add/category')}}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="row">

                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Product Category</label>
                                    <select class="select" name="category">
                                        <option value="hp">Hp Computer</option>
                                        <option value="Ujuzikilimo fertilzer">C.A.N UjuziKilimo Fertilizer</option>
                                        <option value="Travel bag">Travel Bag</option>
                                        <option value="sony Tv">Sony Tv</option>
                                        <option value="Sumsung Tv">Sumsung Tv</option>
                                        <option value="Shoe">Sport shoe</option>
                                        <option value="Remote sensor">Remote sensor</option>
                                    </select>
                                </div>
                                <button class="btn btn-success waves-effect" value="submit" type="submit">
                                    Add Category
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
