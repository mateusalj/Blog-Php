<?php
    include('../config/connection.php');
    include('session.php');
    $stmt = $conectar->prepare("SELECT * FROM posts ORDER BY id DESC");

    $stmt->execute();

    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>

<?php include "header.php"; ?>
    <main class="col-md-9 col-lg-10 pt-3">
        <div class="container">
            <h1 id="main-title">Meus Posts</h1>
                <table class="table" id="contacts-table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Título</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($results as $post): ?>
                            <tr>
                                <td scope="row"><?= $post["id"] ?></td>
                                <td scope="row"><?= $post["title"] ?></td>
                                <td scope="row"><?= $post["description"] ?></td>
                                <td class="actions">
                                    <a href="../viewBlog.php?id=<?= $post["id"] ?>">
                                        <i class="fas fa-eye check-icon"><i class="bi bi-binoculars-fill"></i></i>
                                    </a>
                                    <a href="editar.php?id=<?= $post["id"] ?>">
                                        <i class="fas fa-eye check-icon"><i class="bi bi-pencil-fill"></i></i>
                                    </a>
                                    <a href="delete.php?id=<?= $post["id"] ?>"><i class="bi bi-trash3-fill"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
        </div>
    </main>
</body>
 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>