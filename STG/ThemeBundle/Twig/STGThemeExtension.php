<?php

namespace STG\ThemeBundle\Twig;

use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;


class STGThemeExtension extends AbstractExtension implements GlobalsInterface
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getGlobals():array
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
