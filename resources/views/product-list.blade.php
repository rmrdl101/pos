@extends('templates.dashboard')

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>{{ $pageName }}</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Main row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Horizontal Form</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="{{ route('product-list') }}" method="POST">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="category" class="col-sm-2 control-label">Category</label>

                                    <div class="col-sm-10">
                                        <select name="category" id="category" class="form-control">
                                            @foreach($category as $row)
                                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="barcode" class="col-sm-2 control-label">Barcode</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="barcode" name="barcode" onkeydown="return (event.keyCode!=13);">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="productName" class="col-sm-2 control-label">Product Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="productName" name="productName">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="price" class="col-sm-2 control-label">Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="price" name="price">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="unit" class="col-sm-2 control-label">Unit</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="unit" name="unit">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="remarks" class="col-sm-2 control-label">Remarks</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="remarks" name="remarks">
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-info pull-right">Add New Product</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Product List</h3>

                            <div class="box-tools">
                                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <th>Barcode</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($data as $row)
                                    <tr>
                                        <td>{{ $row->barcode }}</td>
                                        <td>{{ $row->product_name }}</td>
                                        <td>₱ {{ $row->price }}</td>
                                        <td>
                                            <button class="label label-warning"><i class="fa fa-edit"></i></button>
                                            <a href="{{ route('category.delete', $row->id) }}" class="label label-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
@endsection
