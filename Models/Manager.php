<?php

class Manager
{
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost; dbName=movies', 'root', 'root');
        return $db;
    }
}
