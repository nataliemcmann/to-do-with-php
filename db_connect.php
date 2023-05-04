<?php 
    //intialize errors variable
    $errors = "";

    //connect to database
    try {
        $db = pg_connect("host=localhost port=5432 dbname=weekend-to-do-app");
    } catch(PDOException $e){
        echo "Connection failed : ". $e->getMessage();
    };

    // if (isset($_GET["testDB"])) {
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