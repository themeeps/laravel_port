<!-- Modal -->
<div class="modal fade" id="modalDetail{{ $project->id }}" tabindex="-1" aria-labelledby="modalDetailLabel{{ $project->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDetailLabel{{ $project->id }}">Project Details - {{ $project->title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <strong>Description:</strong>
                <p>{{ $project->description }}</p>
                <strong>Role:</strong>
                <p>{{ $project->role }}</p>
                <strong>Programming Languages:</strong>
                <p>{{ $project->programming_language }}</p>
                @if(!empty($project->url))
                <p><a href="{{ $project->url }}" target="_blank" class="btn btn-success">{{ __('messages.text-8') }}</a></p>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('messages.text-21') }}</button>
            </div>
        </div>
    </div>
</div>