@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

    <br>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Meta Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Summary</th>
                <th scope="col">Content</th>
            </tr>
        </thead>
        <tbody>
            @foreach($all_blogs as $single_blog)
            <tr>
                <th scope="row">{{ $single_blog['id'] }}</th>
                <td>{{ $single_blog['title'] }}</td>
                <td>{{ $single_blog['meta_title'] }}</td>
                <td>{{ $single_blog['slug'] }}</td>
                <td>{{ $single_blog['summary'] }}</td>
                <td>{{ $single_blog['content'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection