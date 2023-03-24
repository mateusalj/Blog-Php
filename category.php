<?php
include_once('config/connection.php');

$cat = $_GET['cat'];

$stmt = $conectar->prepare('SELECT category.name_cat, posts.title, posts.image, posts.description, posts.data FROM category INNER JOIN posts ON category.id_cat = posts.id WHERE id = :id');
    
$stmt->execute(array('cat' => $cat));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

<?php foreach($results as $post): ?>
		<h1><?= $post["title"] ?></h1>
		<p><img src="<?= $post["image"]?>" class="card-img-top" alt="..."></p>
        <p><?= $post["name_cat"] ?></p>
		<p><?= $post["description"] ?></p>
		<p><?= date('d/m/Y', strtotime($post["data"])); ?></p>
<?php endforeach; ?>
