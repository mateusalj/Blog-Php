<?php 

include_once('../config/connection.php');

include_once('session.php');

$id = $_GET['id'];

$stmt = $conectar->prepare('SELECT id, title,description FROM posts WHERE id = :id');
    
$stmt->execute(array('id' => $id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);


include_once('header.php');
?>
<style>
    .formulario {
        font-size: 12px;
        padding-top: 0px;
        padding-left: 300px;
    }
    #dados{
        border: 1px solid;
        border-color: darkred;
        border-radius: 18px;
        padding-left: 20px;
        height: 50px;
        padding-top: 12px;
    }
</style>
<main class="col-md-9 col-lg-10">
    <div class="container">
        <h1 id="main-title">Editar Postagem</h1>
	</div>
</main>
<form class="formulario" action="editar-fim.php" method="post" enctype="multipart/form-data">
    <?php foreach($results as $post): ?>
        <div class="mb-3"> 
        <p><input id="dados" type="hidden" value="<?= $post["id"] ?>" name="id"></p>
        </div>
        <div class="mb-3">
        <label class="form-label">Titulo</label>   
        <p><input id="dados" type="text" value="<?= $post["title"] ?>" name="title"></p>
        </div>
        <div class="mb-3">
        <label class="form-label">Descrição</label>    
        <p><input id="dados" type="text" value="<?= $post["description"] ?>" name="description"></p>
        </div>
    <?php endforeach; ?>
	<input type="submit" value="EDITAR">
</form>

<?php
include "footer.php";
?>
