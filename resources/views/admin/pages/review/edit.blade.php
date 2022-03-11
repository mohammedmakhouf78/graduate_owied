@extends('admin.index')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create New Review</h3>
            </div>
            <form method="POST" action="{{route('admin.review.update',$review)}}">
                @csrf
                @method('PUT')
                <div class="card-body">

                    <x-form.input-text name="review" label="Review" :old="$review->review" />

                    <x-form.select-array name="rate" label="Rate" :mydata="[0,1]" />

                    <x-form.input-select name="product_id" label="Product" :mydata="$products" />

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