<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Credenciamento paguelogo</title>
</head>

<body>
    <section class="bg">
        <div class="container">
            <div class="row justify-content-center">
                <img class="img" src="img/colorida.png" alt="">
            </div>
            <div class="row">
                <h2>Credenciamento</h2>

            </div>
            <form class="formu" action="form.php" enctype="multipart/form-data" method="POST" role="form">
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="nome" class="form-control" placeholder="Nome do consultor">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="E-mail">
                        </div>
                        <textarea name="des" class="form-control" placeholder="Descrição do plano comercial"></textarea>
                        
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Upload ficha de cadastro</label>
                            <input class="files" type="file" name="cadastro" value="cadastro">
                        </div>
                        <div class="form-group">
                            <label for="">Upload do termo de sessão - Frente</label>
                            <input class="files" type="file" name="termofrente" value="termofrente">
                        </div>
                        <div class="form-group">
                            <label for="">Upload do termo de sessão - Verso</label>
                            <input class="files" type="file" name="termoverso" value="termoverso">
                        </div>
                        <div class="form-group">
                            <label for="">Upload do documento do cliente (RG/CNH)</label>
                            <input class="files" type="file" name="documento" value="documento">
                        </div>
                    </div>

                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <input type="hidden" name="acao" value="enviar">
                        <button type="submit" name="BTEnvia" value="enviar" class="btn-paguelogo">Enviar</button>
                    </div>
                </div>
            </form>
<p class="p-rodape">Paguelogo</p>
        </div>
    </section>










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
