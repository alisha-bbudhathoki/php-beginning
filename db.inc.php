<?php
    /** The name of the database for WordPress */
    define('DB_NAME', 'private');
    /** MySQL database username */
    define('DB_USER', 'root');
    /** MySQL database password */
    define('DB_PASSWORD', '');
    /** MySQL hostname */
    define('DB_HOST', 'localhost');
    function connect_db(){
        /** Create connection */
        $conn = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );

        /** Check connection */
        if ($conn->connect_error) {
            die("Fail to connect DATABASE" . $conn->connect_error);
        }
        return $conn;
    }
