<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thein Htike Aung</title>
</head>
<body>
    <h1>List</h1>

    <?php
    include('mysql.php');
    $db = connect();

    $sql = $db->query("SELECT * FROM roles");
    $results = $sql->fetchAll();


    ?>

    <ul>
        <?php foreach($results as $result) : ?>
            <li>
                <?= $result->name ?> (<?= $result->value ?>)
                <a href="edit.php?id= <?= $result->id ?>">Edit</a>
                <a href="delete.php?id= <?= $result->id ?>">Delete </a>
            </li>
            
        <?php endforeach ?>    
    </ul>
    <a href="new.php">New Role</a>
</body>
</html>