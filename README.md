**CRUD File Generator**

**CRUD File Generator** automatiza la creación de archivos necesarios para un **CRUD** en proyectos Laravel. Con un solo comando **php artisan make:crud <nombre>**, se generan automáticamente el Controlador, Modelo y Migración correspondientes, optimizando el flujo de trabajo y permitiendo que los desarrolladores se concentren en la lógica de negocio.

**Instalación**

Instala la librería mediante Composer:
```bash
composer require angeldev/crud-generator
```
**Requerimientos**

Laravel 10 o superior.


**Uso**

Ejecuta el comando Artisan para generar tus archivos para el **CRUD** completo:


```bash
php artisan make:crud Producto
```

Esto generará automáticamente:

**El Controlador** 

**El Modelo**

**La Migración** correspondiente

**Ejemplo de uso:**

Después de generar los archivos, puedes personalizar tu controlador, modelo y migración según la lógica de tu aplicación:
```php
// TestController.php
public function index() {
        return view("test.index");
}
```

**Licencia**

**MIT** License **© Angel Iglesias Salvador**
