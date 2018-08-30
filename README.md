# bundle-stg-theme-bundle

Esta nueva rama propone 2 temas customizados utilizando lo siguiente: 

Tema basado en materializecss (http://materializecss.com) para dar soporte completo a proyectos que requieran el diseño materialize definido por google.

Tema basado en Bootstrap 4: para dar soporte completo a proyectos que requieran el diseño del framework bootstrap.


Bundle para Symfony (2.8 a 3.4) para utilizar las plantillas de diseño propuestas por la Secretaría de Tecnologías para la Gestión del Gobierno de Santa Fe.

Para su instalación desde packagist.org: https://packagist.org/packages/stgbundle/theme-bundle

Luego de instalada la dependencia van a poder utilizar el código gestionado via composer e incluido en el autoloader en su aplicación.

- Agregar a app/AppKernel.php dentro del array de bundles:

```php
$bundles = array(

new STG\ThemeBundle\STGThemeBundle(),
)
```

- Para ver una vista demo del tema customizado importar las rutas por default (app/config/routing.yml):

```yml
stg_theme:
    resource: '@STGThemeBundle/Controller/DefaultController.php'
    type:     annotation
    prefix:   /stgtheme
```

- config.yml de tu aplicación, agregar los siguientes parametros:

```yml

stg_theme:
    configuration:
        offline:  #true o false (Indica si lee los recursos de la intranet de gobierno o de servidores cdn externos).
        materialize: #true o false (Indica si la vista demo del bundle renderiza la basada en materializecss o en bootstrap, son las vistas de ejemplo de maquetación)

```
Funcionalidad:
=============

- Para visualizar un demo de la plantilla base del tema, ejecutar la siguiente url:

```
/web/app_dev.php/stgtheme/
```

- Extender en su plantilla twig según el tema a utilizar: 

Para utilizar el tema de materializecss:
---------------------------------------

```twig
{% extends 'STGThemeBundle:Default:baseMaterializecss.html.twig' %}
```
en Symfony >= 3.4 

```yml
{% extends '@STGTheme/Default/baseMaterializecss.html.twig' %}
```

Bloques para utilizar o redefinir con el tema de materializecss:

```twig

{% block css %}
    {# contiene los assets de estilos de la plantilla #}
{% endblock %}

{% block nav %}

     {% block navItemsDropdown %}
     {% endblock %}
     
     {% block navBar %}
        {% block navBarItems %}
        {% endblock%}
     {% endblock %}

    {% block sideNav %}
        {% block sideItems %}
        {% endblock %}        
    {% endblock %}
     
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


Para utilizar el tema de bootstrap:
-----------------------------------

```twig
{% extends 'STGThemeBundle:Default:base.html.twig' %}
```
en Symfony >= 3.4 

```yml
{% extends '@STGTheme/Default/base.html.twig' %}
```

Bloques para utilizar o redefinir con el tema de bootstrap:

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

- Materializecss: http://archives.materializecss.com/0.100.2/
- Bootstrap 4.
- Jquery 3.
- Material Icons: https://material.io/icons/ http://google.github.io/material-design-icons/
