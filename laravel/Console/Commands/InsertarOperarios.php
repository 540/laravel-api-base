<?php

namespace Laravel\Console\Commands;

use Illuminate\Console\Command;
use Laravel\Console\Database\Database;

class InsertarOperarios extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Laravel:insertarOperarios';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $database = new Database();
        try {
            $database->insertUser(123, 33, 'Alex', 'Diaz', 'Ochoa', 123456789, 'alexito@gmail.com');
            $this->info("Usuario insertado correctamente");
        } catch (\Exception $e) {
            $this->error("Error al insertar usuarios");
        }
        try {
            $database->insertUser(1234, 34, 'Jorge', 'Cuello', 'Cabeza', 987654321, 'jorgito@gmail.com');
            $this->info("Usuario insertado correctamente");
        } catch (\Exception $e) {
            $this->error("Error al insertar usuarios");
        }
    }
}
