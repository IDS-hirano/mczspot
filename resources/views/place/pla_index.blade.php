@extends('layout')

@section('content')
<h2>{{ $prefecture->prefecture }}の聖地一覧</h2>
@foreach($placeall as $places)
      <div style="text-align: left">
         <a href="/top/pre/{{ $prefecture->pre_id }}/pla/{{ $places->pla_id }}">
            {{ $places->place_name }}
           </a>
           </div>

@endforeach
@endsection