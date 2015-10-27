@extends('app')

@section('content')
    <div class="container-fluid" ng-controller="mainProductController">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="alert-msg col-xs-12">
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
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Products</div>
                    <div class="panel-body">
                        <div class="products">
                            <div class="col-xs-12">
                                <a href="{!! url('/shoppingCart') !!}">
                                    <button type="button" class="btn btn-success pull-right col-md-2">Check out</button>
                                </a>
                                <table class="table table-responsive table-striped">
                                    <tr>
                                        <th>Id</th>
                                        <th>Product code</th>
                                        <th>Product name</th>
                                        <th>Price</th>
                                        <td></td>
                                    </tr>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{!! $product->id !!}</td>
                                            <td>{!! $product->product_code !!}</td>
                                            <td><a href={!! url('products/'.$product->id) !!}>{!! $product->product_name !!}</a></td>
                                            <td>{!! $product->price !!}</td>
                                            <td>
                                                <button type="button" class="btn btn-info" ng-click="addToCart({!! $product->id !!})">Add to cart</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

