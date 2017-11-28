# bundle-stg-theme-bundle
Bundle para Symfony 2.8 para utilizar el bootstrap-theme (tema con todo el framework de bootstrap incluido y con tema personalizado) via composer.

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
php composer.phar require stg/theme-bundle:*
```
Luego van a poder utilizar el código gestionado via composer e incluido en el autoloader en su aplicación.

Funcionalidad:
=============

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

- Y para visualizar un demo de la plantilla base del tema, ejecutar la siguiente url:

/web/app_dev.php/stgtheme/

- bla bla bla...(en construcción)
