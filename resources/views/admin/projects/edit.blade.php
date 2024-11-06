@extends("layouts.app")

@section("page-title", "Editing " . $project->title)

@section("content")
<section class="container py-4">
    <div class="row justify-content-around">
        @if ( $errors->any() )
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error )
                        <li>
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="col-12 col-md-6 card m-3" method="POST" action="{{ route("admin.projects.update", $project->id) }}">
            @method("PUT")
            @csrf

            <h1 class="mb-3">
                Editing {{ $project->title }}:
            </h1>
            <div class="mb-3">
                <label for="project-title" class="form-label">Title:</label>
                <input type="text" class="form-control" id="project-title" name="title" value="{{ old('title', $project->title) }}">
                {{-- @error("name")
                    <div class="alert alert-danger"> {{ $message }}</div>
                @enderror ERRORE SINGOLO --}}
            </div>
            <div class="mb-3">
                <label for="project-info" class="form-label">Info:</label>
                <input type="text" class="form-control" id="project-info" name="info" value="{{ old('info', $project->info) }}">
            </div>
            <div class="mb-3">
                <label for="project-url" class="form-label">Url:</label>
                <input type="text" class="form-control" id="project-url" name="url" value="{{ old('url', $project->url) }}">
            </div>

            <div class="mb-3 d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-success me-3">
                    Editing {{ $project->title }}
                </button>
                <button type="reset" class="btn btn-warning me-3">
                    Reset
                </button>
            </div>
        </form>
    </div>
</section>
@endsection

