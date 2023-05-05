<?php 

    // Load DotEnvironment Class
    require_once('./dotenv.php');
    $__DotEnvironment = new DotEnvironment(realpath(__DIR__."/.env"));
    echo "<pre>";
    print_r($_ENV);
    echo "</pre>";

    // connect to postgresql
    try {
        $password = $_ENV["pg_password"];
        $dbh = new PDO("pgsql:host=localhost;port=5432;dbname=weekend-to-do-app;user=postgres;password=$password");
        echo "PDO connection object created";
    }
    catch(PDOException $e) {
    echo $e->getMessage();
    }

    //connect to database
    // try {
    //     $db = pg_connect("host=localhost port=5432 dbname=weekend-to-do-app");
    //     echo `<script type="text/javascript">
    //             console.log("db connected");
    //     </script>`;
    // } catch(PDOException $e){
    //     $error = $e->getMessage();
    //     echo `<script type="text/javascript">
    //             console.log("cannot connect to db: ${$error}");
    //         </script>`;
    // };

    // if (PgSql\Connection) {
    //     $test = pg_query($db, `SELECT * FROM "tasks" ORDER BY "date" ASC;`);
    //     if ($test) {
    //         echo `<script type="text/javascript">
    //             console.log("db connected");
    //         </script>`;
    //     } else {
    //         echo `<script type="text/javascript">
    //             console.log("cannot connect to db");
    //         </script>`;
    //     };
    // }    
?>