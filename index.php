

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <style>
        body {
            text-align: center;
            margin: 10px;
            padding-top: 10px;
            display: grid;
        }
        table {
            text-align: center;
            margin: 10px;
        }
        form {
            margin: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>To Do List</h1>
    </header>
    <main>
        <h2>Write down a task to complete.</h2>
        <button action=index.php method="GET" name="testDB">Test DB Connection</button>
    </main>
    <form action="index.php" method="POST">
        <label>Task Description</label>
        <input type="text" name="description"/>
        <button type="submit">Submit</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>Task Description</th>
                <th>Completion Status</th>
                <th>Mark Complete</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>  
</body>
</html>