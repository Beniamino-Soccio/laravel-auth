@extends("layouts.app")

@section("content")

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="py-3 fw-bold text-center">
                    Projects list:
                </h1>
            </div>
            <div class="col-8">
                <div class="mb-3">
                    <a href="{{ route("admin.projects.create") }}" class="btn btn-primary btn-lg">
                        Create new project
                    </a>
                </div>

                @forelse ( $projects as $index => $project )
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title fw-bold fs-3">{{ $project->title }}</h5>
                            <p class="card-text">{{ $project->info }}</p>
                            <a href="{{ $project->url }}" class="card-link">Repository GitHUb</a>
                            <div class="mt-2">
                                <a href="{{ route("admin.projects.show", $project->id) }}" class="btn btn-sm btn-primary me-2">Show</a>
                                <a href="{{ route("admin.projects.edit", $project->id) }}" class="btn btn-sm btn-success me-2">Edit</a>
                                <form action="{{ route("admin.projects.delete", $project->id) }}" method="POST" class="d-inline project-destroyer" custom-data-name="{{ $project->name }}">
                                    @csrf
                                    @method("DELETE")

                                    <button type="submit" class="btn btn-sm btn-warning"> Delete </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No role available</p>
                @endforelse
            </div>
        </div>
    </div>

@endsection

@section("additional-scripts")
    @vite("resources/js/projects/delete-confirmation.js")
@endsection
