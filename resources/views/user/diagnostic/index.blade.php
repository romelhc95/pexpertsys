@extends('layouts.layoutuser')
@section('title') Diagnósticos @stop
@section('breadcrumb') Diagnósticos @stop
@section('content')
<ul class="timeline">
    {{-- timeline time label --}}
    @foreach ($diagnosticos as $diagnostico)
    <li class="time-label">
        <span class="bg-red">
            {{ $diagnostico->created_at->format('d-m-Y') }}
        </span>
    </li>
    {{-- /.timeline-label --}}
    {{-- timeline item --}}
    <li>
        {{-- timeline icon --}}
        @include('user.diagnostic._partial', [
            'object' => $diagnostico,
            'editRoute' => 'user::diagnosticos::detail',
            'name' => $diagnostico->disease->name,
            'content' => 'El diagnostico',
        ])
    </li>
    @endforeach
    {{-- END timeline item --}}
</ul>
@stop
