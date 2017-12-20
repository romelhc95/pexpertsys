@extends('layouts.layoutuser')
@section('title') Diagnósticos @stop
@section('breadcrumb') Diagnósticos @stop
@section('content')
<ul class="timeline">
    {{-- timeline time label --}}
    <li class="time-label">
        <span class="bg-red">
            @if($diagnosticos->total() < 2)
                Se encuentra {!! $diagnosticos->total() !!} registro del diagnóstico realizado.
                @else
                Se encuentran {!! $diagnosticos->total() !!} registros de diagnósticos realizados.
            @endif
        </span>
    </li>
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
    {!! $diagnosticos->render() !!}
@stop
