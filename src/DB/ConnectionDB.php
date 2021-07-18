<?php

declare(strict_types=1);

namespace App\DB;

use SQLite3;

class ConnectionDB
{

    private $db;

    public function connect()
    {
        if ($this->db == null) {
            $this->db = new SQLite3(Config::PATH_TO_SQLITE_FILE);
        }
        return $this->db;
    }
}