<?php 
include_once 'db_connection.php';

$statement =$pdo->prepare('SELECT * FROM test');
$statement->execute();
$comp = $statement->fetchAll(PDO::FETCH_ASSOC);

// echo '<pre>';
// var_dump($comp);
// print_r($comp);
// echo '</pre>'


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>add page</h2>
    <form action="">

    </form>
    <?php 
        foreach($comp as $i => $c):?>
        <p><?php echo $c['username'] ?></p>
        <?php endforeach;  ?>

</body>
</html>