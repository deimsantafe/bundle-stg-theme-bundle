<?php

namespace STG\ThemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{   

    /**
     * @Route("/")
     */
    public function indexAction()
    {
        if ($this->getParameter('stg_theme.configuration.materialize') == false) {
            //renderizo vista bootstrap
            return $this->render('@STGTheme/Default/base.html.twig');
        }
        else {
            //renderizo vista materializecss
            return $this->render('@STGTheme/Default/baseMaterializecss.html.twig');
        }


    }
}
