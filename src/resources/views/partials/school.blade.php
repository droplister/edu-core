<div class="card mb-4">
    <div class="card-body">
        <h3>
            <a href="{{ route('schools.show', ['school' => $school->slug]) }}">
                {{ $school->name }}
            </a>
        </h3>
    </div>
    <div class="card-footer">
    </div>
</div>