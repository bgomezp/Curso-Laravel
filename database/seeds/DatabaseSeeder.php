<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->truncateTablas(['rol','permiso']); // funcion para borra las tablas antes de sembarlas
        $this->call(TablaRolSeeder::class); //llaamr a cad auna de los seeder para que se ejecute
        $this->call(TablaPermisoSeeder::class);
       

    }
    protected function truncateTablas(array  $tablas)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');//quiatr el chequeo d etabals foraneas para que no genere erro ral borrarlas
        foreach ($tablas as $tabla)
        {
            DB::table($tabla)->truncate(); //truncar o borrar tabla, dejarla limpia, sin registros 
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
