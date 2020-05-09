<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
  public function index()
  {
    $weather_data = json_decode(file_get_contents('https://api.nasa.gov/insight_weather/?api_key=54SAzZS6Ayg2q3gAZmTIFMQRIYkBF8fVkKs2xDOH&feedtype=json&ver=1.0'), true);
    array_pop($weather_data);
    array_pop($weather_data);
    $todays_weather = array_pop($weather_data);
    return view('home')->with('todays_weather', $todays_weather);
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
}
