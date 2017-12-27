# bundle-stg-theme-bundle
Bundle para Symfony (2.8 a 3.4) para utilizar el bootstrap-theme (tema con todo el framework de bootstrap incluido y con tema personalizado) via composer.

Para utilizar este bundle/paquete agregar en el composer.json de tu proyecto lo siguiente, (ejemplo):

```json
"repositories": [

    {
        "type": "git",
        "url":  "https://github.com/deimsantafe/bundle-stg-theme-bundle"
    }
],

"minimum-stability" : "dev",
"prefer-stable" : true

]
```

Luego ejecutar: 

```bash
php composer.phar require stgbundle/theme-bundle:*
```
Luego instalar los assets

```bash
php app/console assets:install
```

Luego van a poder utilizar el código gestionado via composer e incluido en el autoloader en su aplicación.

- Una vez instalado, agregar a app/AppKernel.php dentro del array de bundles:

```php
$bundles = array(

new STG\ThemeBundle\STGThemeBundle(),
)
```

- Luego importar las rutas por default (app/config/routing.yml):

```yml
stg_theme:
    resource: '@STGThemeBundle/Controller/DefaultController.php'
    type:     annotation
    prefix:   /stgtheme
```

- config.yml de tu aplicación, agregar los siguientes parametros:

```yml

# Twig Configuration
twig:    
    form:
        resources: ['STGThemeBundle::bootstrap_4_custom_layout.html.twig'] #para renderizar los templates de formularios

stg_theme:
    configuration:
        offline:  #true o false (Indica si lee los recursos de la intranet o de servidores cdn externos).

```
Funcionalidad:
=============

- Para visualizar un demo de la plantilla base del tema, ejecutar la siguiente url:

```
/web/app_dev.php/stgtheme/
```

- Extender en su plantilla twig: 

```yml
{% extends 'STGThemeBundle:Default:base.html.twig' %}
```

Bloques para utilizar o redefinir:

```twig

{% block css %}
    {# contiene los assets de estilos de la plantilla #}
{% endblock %}

{% block nav %}
     {% block navItems %}
     {% endblock %}
     
     {% block searchTop %}     
     {% endblock%}
{% endblock %}

{% block main %}
    
         {% block cover %}
         
            {# con la variable de template "datos_encabezado_imagen" se puede setear una imagen personalizada en este bloque #}
         
         {% endblock %}
    
         {% block breadcrumbItems %}                                 
         {% endblock %}
         
         {% block content %}        
         
            {# cotenido principal #}
         
         {% endblock %}
         
         {% block backTop %}         
         {% endblock %}
    
{% endblock %}

{% block footer %}

{% endblock %}

{% block javascript %}

    {# libreras de javascript #}

{% endblock %}

```

Variables twig (para reutilizar):

```twig

<title>{{ datos_encabezado_title | default('Titulo de la aplicación') }}</title>

background-image: url('{{ datos_encabezado_imagen |  default(asset('bundles/stgtheme/img/bootstrap-top.jpg')) }}');

<h1>{{ datos_encabezado_title | default('Titulo de la aplicación') }}</h1>

<p>{{ datos_encabezado_entity | default('Organismo o dependencia') }}</p>

```

Dependencias:
============

- Bootstrap 4.
- Jquery 3.
- Material Icons: https://material.io/icons/ http://google.github.io/material-design-icons/
