<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edith</title>
</head>
<body>
    <h1>Edit and Update</h1>
    <?php
        include('mysql.php');
        $db = connect();

        $id = $_GET['id'];

        $sql = $db->query("SELECT * FROM roles WHERE id = $id");
        $result = $sql->fetch();
    ?>

    <form action="update.php" method="post">
        <input type="hidden" name="id" value = "<?= $result->id ?>"><br>
        <input type="text" name="name" value = "<?= $result->name ?>"><br>
        <input type="text" name="value" value = "<?= $result->value ?>"><br>
        <button>update</button>
    </form>
</body>
</html>