<?php

namespace AngelDev\CrudGenerator\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeCrudCommand extends Command
{
    protected $signature = 'make:crud {name}';
    protected $description = 'Automatically generates a basic CRUD.';

    public function handle()
    {
        $name = $this->argument('name');
        $this->info("Generating CRUD for: $name ...");

        // Crear modelo
        // Create model
        $modelPath = app_path("Models/{$name}.php");
        File::put($modelPath, "<?php\n\nnamespace App\Models;\n\nuse Illuminate\Database\Eloquent\Model;\n\nclass {$name} extends Model\n{\n    protected \$guarded = [];\n}\n");

        // Crear migración
        // Create migration
        $this->call('make:migration', [
            'name' => 'create_' . strtolower($name) . '_table',
        ]);

        // Crear controlador
        // Create controller
        $controllerPath = app_path("Http/Controllers/{$name}Controller.php");
        File::put($controllerPath, "<?php\n\nnamespace App\Http\Controllers;\n\nuse App\Models\\{$name};\nuse Illuminate\Http\Request;\n\nclass {$name}Controller extends Controller\n{\n    public function index() {\n        return view(\"{$name}.index\");\n    }\n}\n");

        $this->info('Model, Migration and Controller created successfully.');
    }
}
