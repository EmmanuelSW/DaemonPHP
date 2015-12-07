# DAEMON PHP

DAEMON PHP  es una estructura enriquecida de carpetas y librerias para crear aplicaciones y proyectos PHP de una manera facil, sencilla y comoda, ademas de bonita.

Las caracteristicas mas importantes de este pequeño pero poderoso encarpetado es que tiene gran soporte para manejar URLs amigables para que nuestra aplicación luzca mejor, ademas de estar construido para trabajar con el patron MVC (Modelo, vista y controlador) para tener mas organización y trabajar con gran comodidad en tus proyectos.


## Caracteristicas

- Simple y facil de entender
- Estructura limpia y comoda
- Trabaja con URLs amigables
- Diseño flat esteticamenteh hermoso
- Incorpora una demostración de una aplicación CRUD
- Trae un ejemplo de manejo de AJAX 
- Usa el driver PDO para la gestión de la base de datos
- Usa solo codigo nativo PHP
- Demo login y registro de usuarios (proximamente)
- Alertas y mensajes (proximamente)


## Requerimientos

- PHP 5.3.0 +
- MySQL
- mod_rewrite activado


## Instalación

1. Edita las credenciales de tu base de datos en `app/config/config.php`
2. Ejecuta la sentencia .sql que se encuentra en `app/config/db.sql`.
3. Asegurate de que tengas mod_rewrite activado en tu servidor/entorno.


## Licencia

Este projecto esta bajo la licencia GNU General Public Licence.
Software Libre :)


## Inicio Rapido

#### Estructura y URL

La URL de la aplicación ejecutara los controladores y los métodos de estos ubicados en app/controllers.

`app.com/home/ejemplo` => Ejecuta el método *ejemplo()* en app/controllers/home.php

`app.com/home` Ejecuta el método *index()* en app/controllers/home.php

`app.com` Ejecuta el metodo *index()* en app/controllers/home.php (Por defecto).

`app.com/songs` Ejecuta el método *index()* en app/controllers/songs.php

`app.com/songs/editsong/17` Ejecuta el método *editsong()* en app/controllers/song.php y le pasamos el parametro, en este caso 17.



#### Cargando una vista

Entra en app/controllers/home.php y observa el metodo ejemplo()

El header, footer y la pagina ejemplo.php se encuentra en app/views/home/). La intención es hacerlo lo mas simple y nativo posible.

```php
public function ejemplo()
{
    // cargar vistas
    require APP . 'views/_templates/header.php';
    require APP . 'views/home/ejemplo.php';
    require APP . 'views/_templates/footer.php';
}
```  

###### Creado por: EmmanuelSW
###### Facebook: [https://facebook.com/emmanuelsw](https://facebook.com/emmanuelsw)