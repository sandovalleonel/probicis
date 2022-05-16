#crear un proecto en laravel
composer create-project laravel/laravel mi-proyecto-laravel

#inicair servidor laravel
php artisan serve

##agregar esto evitar errores migracion App/Providers

use Illuminate\Support\Facades\Schema;
 public function boot()
    {
        Schema::defaultStringLength(191);
    }

#MANEJO DE VISTAS
ir a /resource/views
---crear un archivo nameFile.blade.php
ir a Route/web.php
---agregar Route::Get ...con el nombre de la vista

---pasar parematro tituloAbout  por una vista
Route::get('/about', function(){
    return view('about',['tituloAbout' =>'About']);
});
--rescatar valor en vistas html

<h1>{{$tituloAbout}}</h1>


###----------------------------------RUTAS
Route/web.php 

####--------CONTROLER-----------------
php artisan make:controller NombreController   (php artisan make:controller NombreController --resource) para hacer un crud
tener una vista llamada products 

ej....public function index(){
        return view('products');
    }
archivo web.php
Route::get('/products', 'App\Http\Controllers\InicioController@products');

#####-----------------bases de datos-----------------------------------------
##archivo para  cambiar parametros de la base de datos
.env
##migrar para la creacion con base de datos y cuando crea nuevas tablas para guardar en la base
php artisan migrate  (php artisan migrate:fresh)

##crear un archivo para una tabla(modificar los archivos /database/migrations)
1) php artisan make:migration create_categorias_table
    modificao el archivo y aumnto columnas

#######--------orm-----------------para usar los modelos y la base
2) php artisan make:model Categoria     (php artisan make:model Articulo -m) para crear automaticamente el item1

3) php artisan make:controller CategoriaController --resource
    importar el modelo use App\Models\Categoria;
    en cualquier metodo del archivo $datos = Categoria::all();
                                     echo $datos;

en el archivo web.php agregar nueva ruta para ese metodo del ontrolador
    Route::resource('/categoria','App\Http\Controllers\CategoriaController' );

######----------------------------plantillas blade---------------------------------
crear una carpeta layouts ... views/layouts
crear un archivo en loyouts  ... platillaPAdre.blade.php
agregar todo el html a repetir en la plantilla
<html>
<p>Esto es la plantilla</p>
@yield('root') //reservar la seccion para sustiruir
</html>

usar la plantilla...crear un archivo en view about.blade.php
@extends('layouts.plantillaPadre')
@section('root')
<h1>Todo lo que va dentro de la plantilla</h1>
@endsection
 









<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).




