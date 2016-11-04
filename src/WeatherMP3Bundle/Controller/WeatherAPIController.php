<?php

namespace WeatherMP3Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cmfcmf\OpenWeatherMap;

class WeatherAPIController extends Controller
{
    public function getCurrentWeatherAction()
    {
        $lang = 'fr';
        $units = 'metric';

        $owm = new OpenWeatherMap('320e57cc5fcf1a84fbf01f9cde2a4fe1');

        $weather = $owm->getWeather('Paris', $units, $lang);
        
        if(!$weather) {
            return $this->render('WeatherMP3Bundle:Error:index.html.twig');
        }
        return $weather;
    }
}
