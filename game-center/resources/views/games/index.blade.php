@extends('layouts.app')

@section('content')
<div class="container">
    <h2>List</h2>
    <div class="row">
        @foreach ($games as $game)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ $game->thumbnail }}" class="card-img-top" alt="{{ $game->name }}" width="150" height="150" style="object-fit:cover;margin-top:10px">
                    <div class="card-body">
                        <h5 class="card-title">{{ $game->name }}</h5>
                        <p class="card-text">{{ $game->description }}</p>
                        <a href="{{ $game->telegram_bot_url }}" class="btn btn-primary" target="_blank">Play</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
