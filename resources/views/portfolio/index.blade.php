@extends('layout.app')

@section('content')
<div class="row">
    @foreach($projects as $project)
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">{{ $project->title }}</h5>
                <p class="card-text">{{ Str::limit($project->description, 100) }}</p>
                <!-- @if(!empty($project->url))
                <a href="{{ $project->url }}" target="_blank" class="btn btn-primary">Visit Project</a>
                @endif -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDetail{{ $project->id }}">
                    {{ __('messages.text-23') }}
                </button>
                @include('portfolio.detail', ['project' => $project])
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection