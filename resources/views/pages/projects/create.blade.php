@extends('layouts.app')

@section('content')
    <main class="container py-3">
        <h1 class="text-success">Create Project</h1>
        <form action="{{ route('dashboard.projects.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text"
                    class="form-control @error('title')
                    is-invalid
                    @enderror"
                    id="title" name="title" required>
                @error('title')
                    <div class="alert alert-danger mt-1">

                        {{ $message }}

                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="project_start_date" class="form-label">Project start date</label>
                <input type="date" class="form-control" id="project_start_date" name="project_start_date">
            </div>

            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </main>
@endsection
