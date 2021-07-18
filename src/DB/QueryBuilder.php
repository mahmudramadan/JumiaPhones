<?php

declare(strict_types=1);

namespace App\DB;

use SQLite3;

class QueryBuilder
{
    protected $db;
    public function __construct()
    {
        $this->db = (new  ConnectionDB())->connect();
        if ($this->db != null) {
            // echo 'Connected to the SQLite database successfully!';
        } else {
            echo 'Whoops, could not connect to the SQLite database!';
            die();
        }
    }
    public function getData(string $table, string $attribute)
    {
        $statement = $this->db->query("SELECT {$attribute} FROM {$table}");
        $Data = [];
        while ($row = $statement->fetchArray(SQLITE3_ASSOC)) {
            $customer = [];
            foreach ($row as $key => $value) {
                $customer[$key] = $value;
            }
            array_push($Data, $customer);
        }
        return $Data;
    }
}