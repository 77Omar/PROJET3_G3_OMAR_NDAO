<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<div class="container h-75">
    <div class="row  h-100 justify-content-center align-items-center">
        <form class="needs-validation  p-3 w-50 bg-light p-5 shadow rounded" id="forms" method="post" novalidate >
              <h3> Bienvenue a la Page de Gestion des Etudiants</h3>
            <a class="btn bg-secondary w-75 mb-4 ml-5" name="btn" href="<?=BASE_URL?>/security/list_etudiant" style="color:white">LISTER ETUDIANT</a>
            <a class="btn bg-secondary w-75 mb-4 ml-5" name="btn" href="<?=BASE_URL?>/security/save_etudiant" style="color:white">ENREGISTRER ETUDIANT</a>
            <a class="btn bg-secondary w-75 mb-4 ml-5" name="btn" href="<?=BASE_URL?>/security/index" style="color:white">PAGE ACCUEIL</a>
        </form>
    </div>
</div>
<script src="jquery-3.5.1.js"></script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
