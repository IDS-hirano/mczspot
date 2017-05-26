@extends('layout')

@section('content')
<a class="detail-title">{{ $placea->place_name }}<h2>
@foreach($datailsa as $details)
      <div style="text-align: left">
      <a class ="placeinfo">
         {{ $details->information }}</p><br/>
         <image src="{{ $details->image_url }}", class="place-image">

           </div>
@endforeach
@endsection