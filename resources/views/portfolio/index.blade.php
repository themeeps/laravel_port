@extends('layout.app')

@section('content')
<div class="row">
    @foreach($projects as $project)
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">{{ $project->title }}</h5>
                <p class="card-text">{{ Str::limit($project->description, 100) }}</p>
                <a href="{{ $project->link }}" target="_blank" class="btn btn-primary">View Project</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection