<?php

namespace Laravel\Console\Database;

use mysqli;

class Database
{
    private function conection(): mysqli
    {
        $servername = 'mysql';
        $username = 'root';
        $password = '';
        $database = 'laravel';
        $conn = new mysqli($servername, $username, $password, $database);
        if ($conn->connect_error) {
            die("Error de connexion a la base de datos: " . $conn->connect_error);
        }
        return $conn;
    }

    public function insertUser(
        float $cliente,
        float $operario,
        string $nombre,
        string $apellido1,
        string $apellido2,
        int $telefono,
        string $email
    ): void {
        $conn = $this->conection();

        $sql = "INSERT INTO operarios (cliente, operario, nombre_operario, apellido_1_operario, apellido_2_operario,
                       telefono_1, email) VALUES ('" . $cliente . "', '" . $operario . "', '" .
            $nombre . "', '" . $apellido1 . "', '" .
            $apellido2 . "', '" . $telefono . "', '" .
            $email . "')";

        $conn->query($sql);

        $conn->close();
    }
}
