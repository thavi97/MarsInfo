@extends('templates.app')
@section('weather')
<div class="row">
  <div class="weather-info-container col-lg-12">
    <div class="temperature-text-container">
      <span class="weather-text">
        {{$data['latest_date']}}<br>
        <b>{{round($data['todays_weather']['AT']['av']+32, 1)}}°C</b>
      </span>
    </div>
    <div class="wind-speed-container">
      <span class="weather-text">
        Wind Speed<br>
        <b>{{$data['todays_weather']['HWS']['av']}}m/s</b>
      </span>
    </div>
  </div>
</div>
@endsection
