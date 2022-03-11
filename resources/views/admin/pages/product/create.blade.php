@extends('admin.index')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create New Product</h3>
            </div>
            <form method="POST" action="{{route('admin.product.store')}}">
                @csrf
                <div class="card-body">

                    <x-form.input-text name="name" label="Name" />

                    <x-form.input-text name="price" label="Price" />

                    <x-form.input-text-area name="description" label="Description" />

                    <x-form.input-check-box name="is_approved" label="Is Approved ?" />

                    <x-form.input-select name="category_id" label="Category" :mydata="$categories" />

                    <x-form.input-select name="user_id" label="User" :mydata="$users" />
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>

</div>

@endsection

@section('js')

@endsection