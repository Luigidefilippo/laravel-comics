@extends('layouts.app')

@section('content')
<div class="comics-container py-4">
    <div class="container">
        <div class="text">
            <h3>CURRENT SERIES</h3>
        </div>
        <div class="row row-col-6 gap-3">
            @foreach ($db as $comics)
                <div class="col">
                    <div class="card">
                        <img src="{{ $comics['thumb'] }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comics['series'] }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection