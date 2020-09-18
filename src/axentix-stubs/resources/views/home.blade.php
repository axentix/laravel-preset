@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="txt-center success p-3 rounded-2 light-shadow-2 mt-4" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="card light-shadow-2 rounded-2 mx-auto mt-4 container white">
            <div class="card-header txt-center">Dashboard</div>
            <div class="card-content">
                <p>
                    You are logged in!
                </p>
            </div>
        </div>
    </div>
@endsection
