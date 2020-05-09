@extends('templates.app')
@section('weather')
<div class="row">
  <div class="col-lg-4">
    <p class="weather-text">Average Temperature: {{$todays_weather['AT']['av']+32}} C</p>
  </div>
  <div class="col-lg-4">
    <p class="weather-text">Min Temperature: {{$todays_weather['AT']['mn']+32}} C</p>
  </div>
  <div class="col-lg-4">
    <p class="weather-text">Max Temperature: {{$todays_weather['AT']['mx']+32}} C</p>
  </div>
</div>
@endsection
