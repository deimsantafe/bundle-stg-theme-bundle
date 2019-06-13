<?php

namespace STG\ThemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        //dump('stg_theme.configuration.materialize: '.$this->getParameter('stg_theme.configuration.materialize'));


        if ($this->getParameter('stg_theme.configuration.materialize') == false) {
            //renderizo vista bootstrap
            return $this->render('@STGTheme/Default/base.html.twig');
        }
        else {
            //renderizo vista materializecss
            //return $this->render('STGThemeBundle::Default:baseMaterializecss.html.twig');

            return $this->render('@STGTheme/Default/baseMaterializecss.html.twig');
        }


    }
}
