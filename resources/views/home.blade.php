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
    <div class="github-link float-right">
      <a href="https://github.com/thavi97/MarsInfo">Github</a>
    </div>
  </div>
  <div class="weather-info-container col-lg-12">
    <span class="weather-text">Here are the latest images from Curiosity!</span>
  </div>
  <div class="row">
    @foreach($data['photos']['photos'] as $photo)
    <div class="col-lg-4 rover-photo">
      <div class="thumbnail">
        <img src="{{$photo['img_src']}}" alt="$photo['id']" style="width:100%">
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
