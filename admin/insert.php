<!DOCTYPE html>
<html lang="pt-br>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document1</title>
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#basic-conf'
     });
</script>
<script>
tinymce.init({
  selector: '#basic-conf',
  width: 600,
  height: 300,
  plugins: [
    'advlist autolink link image lists charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks code fullscreen insertdatetime media nonbreaking',
    'table emoticons template paste help'
  ],
  toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
    'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
    'forecolor backcolor emoticons | help',
  menu: {
    favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
  },
  menubar: 'favs file edit view insert format tools table help',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});
</script>
<body>
    <main>
        <div class="container">
            <form action="envia.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputTitle1" class="form-label">Titulo</label>
                    <input type="text" placeholder="Digite o titulo" class="form-control" id="exampleInputTitle1" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputData1" class="form-label">Data</label>
                    <input type="date" class="form-control" id="exampleInputData1" name="data" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputDescrição1" class="form-label">Texto descritivo</label>
                    <textarea type="text" placeholder="Descrição" class="form-control" id="basic-conf" name="description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputImage1" class="form-label">Envie a imagem</label>
                    <input type="file" id="formGroupExampleInput3" placeholder="Insira uma imagem" name="image" required>
                </div>
                <div class="mb-3 form">
                <button type="submit" class="btn btn-primary">Publicar</button>
                </div>
            </form>
        </div>
    </main>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
