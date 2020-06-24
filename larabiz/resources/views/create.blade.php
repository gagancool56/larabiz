@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Create New Listings
                <span class="float-right">
                    <a href="/home" class="btn btn-primary">Go Back</a>
                </span>
            </div>

            <div class="card-body">
                <form method="post" action="/listings">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address">
                    </div>

                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" class="form-control" name="website" id="website">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone no:</label>
                        <input type="number" class="form-control" name="phone" id="phone">
                    </div>

                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <input type="text" class="form-control" name="bio" id="bio">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
