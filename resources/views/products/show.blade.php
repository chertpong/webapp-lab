@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Product: {!! $product->product_name !!}</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="products">
                            <div class="col-xs-12 col-md-8 col-md-offset-2">
                                <a href="{!! url('/shoppingCart') !!}">
                                    <button type="button" class="btn btn-success pull-right col-md-2">Check out</button>
                                </a>
                                <div class="col-xs-12 col-md-8 col-md-offset-2">
                                    <p class="text-left">{!! $product->id !!}</p>
                                    <p class="text-left">{!! $product->product_code !!}</p>
                                    <p class="text-left">{!! $product->product_name !!}</p>
                                    <p class="text-left">{!! $product->price !!}</p>
                                    <form action="shoppingCart/store" method="POST">
                                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                        <input type="hidden" name="product_id" value={!! $product->id !!}>
                                        <button type="submit" class="btn btn-info">Add to cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection