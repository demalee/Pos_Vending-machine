@extends('layouts.app')
@section('content')


    <div class="page-wrapper">
        <div class="content">
            <div class="row">

            </div>
            @include('message')
            <div class="page-header">
                <div class="page-title">

                    <h6>Update Product</h6>

                </div>
            </div>

            <div class="card">
                <div class="card-body">
                        <form action="{{ route('update/product', ['id' => $ujuziProduct->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" name="name" value="{{$ujuziProduct->name}}">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="select" name="category">
                                        @foreach($categories as $category)
                                            <option value="{{$category->category}}">{{$category->category}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Slots</label>
                                    <input type="number" name="slot" value="{{$ujuziProduct->slot}}">
                                </div>
                            </div>

                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input type="number" name="quantity" value="{{$ujuziProduct->quantity}}">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="number" name="price" value="{{$ujuziProduct->price}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description">{{$ujuziProduct->description}}</textarea>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="form-group">
                                <label> Product Image</label>
                                <div class="image-upload">
                                    <input type="file" name="image">
                                    <div class="image-uploads">
                                      <img src="{{ URL::to('/') }}/images/{{ $ujuziProduct->image}}" style="width: 100px; border-radius: 30px">
                                        <h4>Drag and drop a file to upload</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button class="btn btn-success waves-effect" value="submit" type="submit">
                                Upate Product
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>



@endsection
