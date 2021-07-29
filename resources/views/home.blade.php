@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! You can check your tasks below
                    <div class="">
                    <a href="/tasks" class="text-white" >
                        <button type="button" class="btn btn-primary mt-3">Task List</button>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
