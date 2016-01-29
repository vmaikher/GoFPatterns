<?php
namespace patterns\creational\factoryMethod\drivers;

abstract class Driver
{
    protected $type;

    public function connect($db, $host, $username, $password)
    {
        echo "Connect to $this->type with name $db, host=$host, username=$username, password=$password" . PHP_EOL;
    }

    public function select($table, array $fields)
    {
        echo "$this->type:Select fields: " . implode(', ', $fields) . " from $table" . PHP_EOL;
    }

    public function update($table, array $fields, array $values)
    {
        echo "$this->type:Update fields: " . implode(', ', $fields). " from $table " .
             " with values:" . implode(' ', $values) . PHP_EOL;
    }

    public function insert($table, array $fields, array $values)
    {
        echo "$this->type:Insert values: " . implode(', ', $values) . " into fields:" . implode(' ', $fields) .
             " from $table" . PHP_EOL;
    }

    public function addCondition($field, $value)
    {
        echo "$this->type: add condition, $field = $value" . PHP_EOL;
    }
}
