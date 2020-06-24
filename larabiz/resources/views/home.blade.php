@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Company Listings
                <span class="float-right">
                    <a href="/listings/create" class="btn btn-primary">Create Listings</a>
                </span>
            </div>

            <div class="card-body">
                @if(count($listings))
                    <table class="table table-striped">
                        <thead>
                            <tr>Company</tr>
                        </thead>
                        <tbody>
                            @foreach($listings as $listing)
                                <tr>
                                    <td>{{ $listing->name }}</td>
                                    <td>
                                        <form action="/listings/{{ $listing->id }}" method="post" class="float-right ml-2">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        <a href="/listings/{{ $listing->id }}/edit"
                                            class="btn btn-primary float-right">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <h4>You have no listings yet!</h4>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
