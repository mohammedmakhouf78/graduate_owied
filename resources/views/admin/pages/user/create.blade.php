@extends('admin.index')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create New User</h3>
            </div>
            <form method="POST" action="{{route('admin.user.store')}}">
                @csrf
                <div class="card-body">

                    <x-form.input-text name="name" label="Name" />

                    <x-form.input-email name="email" label="Email Address" />

                    <x-form.input-password name="password" label="password" />

                    <x-form.input-text name="phone" label="Phone" />

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>

</div>

@endsection