@extends('layouts.app')

@section('content')

<div class="col-md-8">
    <div class="card border-0 shadow rounded">
        <div class="card-body">
            Selamat Datang <strong>{{ auth()->guard($guard)->user()->name }}</strong>
            <hr>
            <br>
            {{ $guard_type }}
            <br>
            <a href="{{ route('logout') }}" style="cursor: pointer" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="btn btn-md btn-primary">LOGOUT</a>
            <form id="logout-form" action="{{ url('/logout-'.$guard_type) }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>

@endsection
