@extends('layouts.app')

@section('content')
    <main class="container py-3">
        <h1 class="text-success">Projects List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->description }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
