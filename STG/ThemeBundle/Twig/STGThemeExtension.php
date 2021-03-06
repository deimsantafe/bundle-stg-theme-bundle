<?php

namespace STG\ThemeBundle\Twig;

use Symfony\Component\DependencyInjection\ContainerInterface;


class STGThemeExtension extends \Twig_Extension implements \Twig_Extension_GlobalsInterface
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getGlobals()
    {
        return array(
            'configuration_offline' => $this->container->getParameter('stg_theme.configuration.offline'),
            'configuration_materialize' => $this->container->getParameter('stg_theme.configuration.materialize')
        );
    }

    public function getName()
    {
        return 'stg_theme_extension';
    }
}
