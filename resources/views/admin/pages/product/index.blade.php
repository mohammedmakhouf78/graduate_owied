@extends('admin.index')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Products Table</h3>
                <a href="{{route('admin.product.create')}}" class="btn btn-success float-right">Create</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Is Approved</th>
                            <th>Category</th>
                            <th>User</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>

                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{!!$product->description!!}</td>
                            @if ($product->is_approved == false)
                            <td class="text-danger">Denied</td>
                            @else
                            <td class="text-success">Approved</td>
                            @endif
                            <td>{{$product->category->name ?? ""}}</td>
                            <td>{{$product->user->name ?? ""}}</td>

                            <td>
                                <form method="get" action="{{route('admin.product.edit',$product)}}">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form method="POST" action="{{route('admin.product.destroy',$product)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
            </div>
        </div>

    </div>
</div>

@endsection