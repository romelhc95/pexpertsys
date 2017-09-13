<i class="fa fa-pencil bg-blue"></i>
<div class="timeline-item">
            <span class="time">
                <i class="fa fa-clock-o"></i>
                {{ $diagnostico->created_at->format('H:i') }}
            </span>
    <h3 class="timeline-header">
        <a href="{{ route($editRoute, Hashids::encode($diagnostico->id)) }}">Se diagnosticó {{ $diagnostico->disease->name }}</a>
    </h3>

</div>