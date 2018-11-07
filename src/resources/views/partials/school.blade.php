<div class="card">
    <div class="card-body">
        <h3>
            <a href="#">
                {{ $school->name }}
            </a>
        </h3>
        <p>
            Catholic &nbsp;&bull;&nbsp; Location, ST &nbsp;&bull;&nbsp; PK, K-12 &nbsp;&bull;&nbsp; <a href="#">0 Reviews</a>
        </p>
        <p>
            Content
        </p>
        <p>
            @if($school->meta['gender'] !== 'Coed')
                <strong>{{ $school->meta['gender'] }} School</strong>
                &nbsp;
            @endif
            Students <strong>{{ $school->meta['students'] }}</strong>
            &nbsp;
            Student-Teacher Ratio
            @if($school->meta['st_ratio'] < 1)
                <strong>1:{{ round(1 / $school->meta['st_ratio']) }}</strong>
            @else
                <strong>{{ round($school->meta['st_ratio']) }}:1</strong>
            @endif
        </p>
    </div>
    <div class="card-footer">
        <a href="#">Ask a Question</a> &nbsp; &nbsp; <a href="#">Leave a Review</a> &nbsp; &nbsp; <a href="#" class="pull-right">Save to Shortlist</a>
    </div>
</div>