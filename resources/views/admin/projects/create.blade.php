@extends("layouts.app")

@section("page-title", "Create new role")

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

        <form class="col-12" method="POST" action="{{ route("admin.projects.store") }}">
            @csrf

            <h1 class="mb-3">
                Create new project:
            </h1>
            <div class="mb-3">
                <label for="project-title" class="form-label">Title:</label>
                <input type="text" class="form-control" id="project-title" name="title" value="{{old('title')}}">
            </div>
            <div class="mb-3">
                <label for="project-info" class="form-label">info:</label>
                <input type="text" class="form-control" id="project-info" name="info" value="{{old('info')}}">
            </div>
            <div class="mb-3">
                <label for="project-url" class="form-label">Url:</label>
                <input type="text" class="form-control" id="project-url" name="url" value="{{old('url')}}">
            </div>

            <div class="mb-3 d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary me-3">
                    Create new project
                </button>
                <button type="reset" class="btn btn-warning me-3">
                    Reset
                </button>
            </div>
        </form>
    </div>
</section>
@endsection
