# Apuntes Laravel

### Artisan
`artisan` es un comando que puede hacer muchas cosas por tí, te ahorra crear archivos y escribe plantillas de código. 

### Carpetas del proyecto:
- `resources/views`: Aquí van las vistas del proyecto. Por defecto solo esta una plantilla `welcome.blade.php`. Blade es un lenguaje para crear HTML dinámico.

- `routes/`: contiene 4 archivos.
    - `api.php`: Aquí se registran las rutas del backend/api de la aplicación.
    - `web.php`: Aquí se registran las rutas del frontend de la aplicación.

### Sintaxis de rutas

```php
/*
    Ejemplos
*/

// GET a / retorna vista welcome.blade.php de la carpeta resources/views
Route::get('/', function() {
    return view('welcome') 
});

Route::get('/sample-route' function() {
    return response('Sample Text', 200) // response es un Wrapper, recibe body de la respuesta y el statusCode
    ->header('foo', 'bar')->header('foo2', 'bar2') // Asi se agregan headers
});

Route::get('/wildcards/{something}', function($something) {
    return response('<h1>Wildcard in the URL:' + $something + '</h1>')
})

Route::get('/helper/methods/{something}', function($something) {
    
    // Dump n Die
    dd($something); // Detiene ejecución e imprime la variable en la linea

    // Dump, Die, Debug
    ddd($something); // Detiene ejecución y muestra una pantalla con mucha info de Debug
    
    // Return no se llamaría nunca. ddd() tampoco, ya que hay un dd() antes
    return response('<h1>Called Helper Methods</h1>');
});

```