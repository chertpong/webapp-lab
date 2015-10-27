@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Products</div>
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
                            <div class="col-xs-12">
                                <table class="table table-responsive table-striped">
                                    <tr>
                                        <th>#</th>
                                        <th>Product code</th>
                                        <th>Product name</th>
                                        <th>Price</th>
                                    </tr>
                                    @foreach($cart as $index=>$product)
                                        <tr>
                                            <td>{!! $index+1 !!}</td>
                                            <td>{!! $product->product_code !!}</td>
                                            <td><a href={!! url('products/'.$product->id) !!}>{!! $product->product_name !!}</a></td>
                                            <td>{!! $product->price !!}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>Total</td>
                                        <td>{!! $amount !!}</td>
                                    </tr>
                                </table>
                                <button type="button" class="btn btn-warning pull-right col-xs-2">Check-out now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

