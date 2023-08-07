<?php

class Database
{
    public static $conn = null;
    public static function getconnection()
    {
        if(Database::$conn == null) {
            $servername = "mysql.selfmade.ninja";
            $username = "Abishek";
            $password = "41194119a@A";
            $dbname = "Abishek_newdb";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } else {
                Database::$conn = $conn;
                return Database::$conn;
            }
        } else {
            return Database::$conn;
        }
    }
}
