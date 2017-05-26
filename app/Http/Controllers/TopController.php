<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Prefecture;
use App\Place;
use App\Detail;


class TopController extends Controller
{
  public function top_index()
  {
    $top = Prefecture::all();
    return view('top.top_index')->with('topa',$top);

}
public function pla_index($pref_id)
{
  $prefecture = Prefecture::where('pre_id', $pref_id)->first();
  $places = Place::where('pre_id', $pref_id)->get();

    return view('place.pla_index')->with('placeall',$places)->with('prefecture', $prefecture);
}
public function detail($pre_id, $place_id)
{
  $place = Place::where('pla_id', $place_id)->first();
  $details = Detail::where('pla_id', $place_id)->get();

  return view('Detail.detail')->with('placea',$place)->with('datailsa',$details);

}
}