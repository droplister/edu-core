<div class="progress-label">
    {{ $title }}
    <span class="pull-right">{{ round($meta, 1) }}%</span>
</div>
<div class="progress mb-2">
    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ round($meta, 4) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ round($meta, 4) }}%">
        <span class="sr-only">{{ round($meta, 1) }}%</span>
    </div>
</div>