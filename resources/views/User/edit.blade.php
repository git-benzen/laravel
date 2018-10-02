@extends('layouts.master')

@section('content')
    @include('layout.errors')
    <div class="row">
        <div class="col-md-12">
            <form action="" method="post">
                <div class="form-group">
                    <label for="title">naam:</label>
                    <input
                            type="text"
                            class="form-control"
                            id="naam"
                            name="naam"
                            value="{{ $user['naam'] }}">
                </div>
                <div class="form-group">
                    <label for="content">email:</label>
                    <input
                            type="email"
                            class="form-control"
                            id="email"
                            name="email"
                            value="{{ $user['email'] }}">
                </div>
                <div class="form-group">
                    <label for="content">Paswoord:</label>
                    <input
                            type="password"
                            class="form-control"
                            id="password"
                            name="password"
                            maxlength="12"
                            value="{{ $user['password'] }}">
                </div>
                <div class="form-group">
                    <label for="content">Post:</label>
                    <input
                            type="text"
                            class="form-control"
                            id="post"
                            name="post"
                            value="{{ $user['post'] }}">
                </div>
                <div class="form-group">
                    <label for="content">Role:</label>
                    <input
                            type="text"
                            class="form-control"
                            id="role"
                            name="role"
                            value="{{ $user['role'] }}">
                </div>
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $userId }}">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection