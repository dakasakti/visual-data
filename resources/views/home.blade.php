@extends('layouts.app')
{{-- @extends('database.index') --}}
{{-- @extends('DatabaseController') --}}


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ __('Dashboard') }}"></a></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
                <form method="POST" action="{{ url('/logout') }}">
                  @csrf
                    <div class="card-footer">
                        <button type="submit">Logout</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
