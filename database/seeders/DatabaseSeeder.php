<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Practica;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $practica = new Practica();
        
        $practica -> titulo = "PC1-1";
        $practica -> subtitulo= "Yoda Say";
        $practica -> parrafo= "Descarga el repositorio de YodaSay de npm y cambia el mensaje de Yoda";
        $practica -> enlace= "https://github.com/d-maza";
        $practica -> skills= "NodeJS - JavaScript";

        $practica -> save();
        
        $practica2 = new Practica();
        
        $practica2 -> titulo = "PC1-2";
        $practica2 -> subtitulo= "Aplicación Express";
        $practica2 -> parrafo= "Pasa el paramento (nombre) por la url y comprueba si está dentro de la array de nombres predefinidos";
        $practica2 -> enlace= "https://github.com/d-maza/PC2-NODE-EXPRESS";
        $practica2 -> skills= "NodeJS - Express - Ejs";

        $practica2 -> save();
        
        $practica3 = new Practica();
    
        $practica3 -> titulo = "PC1-3";
        $practica3 -> subtitulo= "NodeJS CRUD con MonogoDB";
        $practica3 -> parrafo= "Crea una base de Datos de Stras Wars con MongoDB y realiza un CRUD";
        $practica3 -> enlace= "https://github.com/d-maza/PC3-CRUD-NODE-MONGODB";
        $practica3 -> skills= "NodeJS - Express - Ejs - Mongodb";
    
        $practica3 -> save();
    
        $practica4 = new Practica();

        $practica4 -> titulo = "PC2-1";
        $practica4 -> subtitulo= "Formulario PHP & SQLite";
        $practica4 -> parrafo= "Crea un formulario de registro que conecte u una BBDD de SQlite ";
        $practica4 -> enlace= "https://github.com/d-maza";
        $practica4 -> skills= "PHP - SQLite - Bootstrap";

        $practica4 -> save();
        
        $practica5 = new Practica();
        
        $practica5 -> titulo = "PC2-2";
        $practica5 -> subtitulo= "Routes Laravel";
        $practica5 -> parrafo= "Crear diferentes tutas en Laravel, usando grupo de rutas, prefix y middleware de autentificacion";
        $practica5 -> enlace= "https://github.com/d-maza/PC2-2-Laravel---Jetstream";
        $practica5 -> skills= "Laravel - JetStream - Blade - MySQ";

        $practica5 -> save();
        
        $practica6 = new Practica();
        
        $practica6 -> titulo = "PC2-3";
        $practica6 -> subtitulo= "Crea un proyecto web";
        $practica6 -> parrafo= "Backend funcional y conexión con base de datos usan do MVC y SAP y con formato elegante y profesional. Muestra el resultado por Front End ";
        $practica6 -> enlace= "https://github.com/d-maza";
        $practica6 -> skills= "Laravel - JetStream - Vue - Tailwind";

        $practica6 -> save();
        
       
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
    }
}