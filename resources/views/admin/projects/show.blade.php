@extends("layouts.app")

@section("page-title", $project["title"])

@section("content")
<section class="container py-4">
    <div class="row">
        <div class="col-12">
            <h1 class="fw-bold text-center mb-4">
                {{  $project["title"] }} Page
            </h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-8 card m-3">
            <ul>
                <li class="fw-bold fs-3 mb-2"> {{ $project["title"] }} </li>
                <li class="mb-2">
                    info: {{ $project["info"] }}
                </li>
                <li class="mb-2">
                    url: <a href="{{ $project["url"] }}">URL GitHUb</a>
                </li>
            </ul>
        </div>
    </div>
</section>
@endsection
