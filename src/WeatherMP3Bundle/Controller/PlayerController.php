<?php

namespace WeatherMP3Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use WeatherMP3Bundle\Controller\WeatherAPIController;

class PlayerController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $weather = new WeatherAPIController();
        return $this->render('WeatherMP3Bundle:Player:index.html.twig', array(
            "weather" => $weather->getCurrentWeatherAction()
        ));
    }

}
