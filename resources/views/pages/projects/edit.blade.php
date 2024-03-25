@extends('layouts.app')

@section('content')
    <main class="container py-3">
        <h1 class="text-success">Edit Project</h1>
        <form action="{{ route('dashboard.projects.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text"
                    class="form-control @error('title')
                    is-invalid
                    @enderror"
                    id="title" name="title" required value="{{ old('title') ?? $project->title }}">
                @error('title')
                    <div class="alert alert-danger mt-1">

                        {{ $message }}

                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') ?? $project->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="project_start_date" class="form-label">Project start date</label>
                <input type="date" class="form-control" id="project_start_date" name="project_start_date"
                    value="{{ old('project_start_date') ?? $project->project_start_date }}">
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </main>
@endsection
