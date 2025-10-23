<?php

namespace AngelDev\CrudGenerator;

use Illuminate\Support\ServiceProvider;
use AngelDev\CrudGenerator\Commands\MakeCrudCommand;

class CrudGeneratorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            MakeCrudCommand::class,
        ]);
    }

    public function boot()
    {
        
    }
}
