@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Company Listings</div>

            <div class="card-body">
                @if(count($listings))
                    @foreach($listings as $listing)
                        <div class="list-group">
                            <div class="list-group-item">
                                <a href="/listings/{{ $listing->id }}">{{ $listing->name }}</a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
