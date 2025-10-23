<?php

namespace AngelDev\CrudGenerator;

class Installer
{
    public static function afterInstall()
    {
        echo "\n==============================================\n";
        echo "🧩 AngelDev CRUD Generator installed successfully 🎉\n";
        echo "👉 Run: php artisan make:crudName\n";
        echo "to generate your first CRUD automatically 🚀\n";
        echo "==============================================\n\n";
    }
}
