<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
  public function index()
  {
    $weather_data = $this->getWeatherData();
    $todays_weather = array_pop($weather_data);
    $latest_date = $this->getLatestDate($todays_weather);
    //dd($todays_weather);
    $data = [
      'todays_weather' => $todays_weather,
      'latest_date' => $latest_date
    ];
    return view('home')->with('data', $data);
  }
  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {

  }
  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {

  }

  protected function getWeatherData(){
    $weather_data = json_decode(file_get_contents('https://api.nasa.gov/insight_weather/?api_key=54SAzZS6Ayg2q3gAZmTIFMQRIYkBF8fVkKs2xDOH&feedtype=json&ver=1.0'), true);
    array_pop($weather_data);
    array_pop($weather_data);
    return $weather_data;
  }

  protected function getLatestDate($todays_weather){
    $latest_date = date_format(date_create($todays_weather["First_UTC"]),"F d");
    return $latest_date;
  }
}
