@extends('layouts.app')

@section('content')
    <main class="container py-3">
        <h1 class="text-success">Projects List</h1>

        <a href="{{ route('dashboard.projects.create') }}" class="btn btn-primary">+ Create new project</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->description }}</td>
                        <td class="d-flex gap-2 ">
                            <a href="{{ route('dashboard.projects.edit', $item->id) }}" class="btn btn-primary">Edit</a>

                            <form action="{{ route('dashboard.projects.destroy', $item->id) }}" method="POST">
                                @csrf

                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
