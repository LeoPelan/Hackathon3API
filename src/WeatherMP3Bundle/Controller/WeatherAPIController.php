<?php

namespace WeatherMP3Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Cmfcmf\OpenWeatherMap;
use Cmfcmf\OpenWeatherMap\Exception as OWMException;

class WeatherAPIController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $lang = 'fr';
        $units = 'metric';

        $owm = new OpenWeatherMap('320e57cc5fcf1a84fbf01f9cde2a4fe1');

        try {
            $weather = $owm->getWeather('Berlin', $units, $lang);
        } catch(OWMException $e) {
            echo 'OpenWeatherMap exception: ' . $e->getMessage() . ' (Code ' . $e->getCode() . ').';
        } catch(\Exception $e) {
            echo 'General exception: ' . $e->getMessage() . ' (Code ' . $e->getCode() . ').';
        }
        return $this->render('WeatherMP3Bundle:Default:index.html.twig', array(
            "weather" => $weather
        ));
    }
}
