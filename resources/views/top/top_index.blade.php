@extends('layout')

@section('content')
<header>
<div class ="heading">
<h2>ももクロの聖地巡礼をしよう！（関東ver.）</h2></div></header>
@foreach($topa as $top)
      <div style="text-align: left">
         <a href="/top/pre/{{ $top->pre_id }}">
            {{ $top->pre_id }},{{ $top->prefecture }}
           </a>
           </div>

@endforeach
@endsection