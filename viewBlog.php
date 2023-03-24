<?php 

include_once('config/connection.php');

$id = $_GET['id'];

$stmt = $conectar->prepare('SELECT id, title, description, image FROM posts WHERE id = :id');
    
$stmt->execute(array('id' => $id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<style>
    .container img{
        height: 350px;
    }
    .container a{
        text-decoration: none;
    }
    .container a:hover{
        color: #000;
    }
</style>
<div class="container" style="margin-top: 20px;">
<?php foreach($results as $post): ?>
		<h1><?= $post["title"] ?></h1>
		<p><?= $post["description"] ?></p>
        <img src="<?= $post["image"] ?>" alt="...">
<?php endforeach; ?>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
