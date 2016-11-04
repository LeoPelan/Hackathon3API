<?php

namespace WeatherMP3Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WeatherMP3Bundle:Default:index.html.twig');
    }
}
