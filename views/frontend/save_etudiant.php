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
  <div class="row justifer-content-center p-2 col-lg-12">
      <nav class="navbar navbar-expand-sm bg-light  w-100">
          <!-- Links -->
          <ul class="navbar-nav w-100 justify-content-between ml-4 mr-4">
              <li class="nav-item">
                  <a class="btn bg-secondary w-75 mb-2 ml-3" name="btn" href="<?=BASE_URL?>/security/gestion_etudiant" style="color:white">RETOUR</a>
              </li>
          </ul>

      </nav>
  </div>
  
<div class="container h-75">
  <div class="row  h-100 justify-content-center align-items-center">
   <form class="needs-validation  p-3 w-50 bg-light p-5 shadow rounded" action='<?=BASE_URL?>/security/addStudent' id="forms" method="post" novalidate >
       <div class="container p-2 bg-secondary  text-white col-md-12">
       <h3 style="text-align:center; color:'bg-secondary'">Formulaire d'enregistrement</h3>    
       </div><br>
       <!--<div class="row col-lg-12">-->
       <div class="form-check">
           <input class="form-check-input" type="radio" name="choix2" id="boursier" value="boursier">
           <label class="form-check-label" for="boursier">Boursier</label>
       </div>
       <div class="form-check">
           <input class="form-check-input" type="radio" name="choix2" id="non_boursier" value="non_boursier">
           <label class="form-check-label" for="boursier">Non Boursier</label>
       </div>
 <div class="form-check" id="loge">
  <input class="form-check-input" type="radio" name="choix" id="logé" value="logé">
  <label class="form-check-label" for="logé">Logé</label>
</div>
   <div class="form-check" id="non_loge">
     <input class="form-check-input" type="radio" name="choix" id="non_logé" value="non_logé">
     <label class="form-check-label" for="non-logé">Non-Logé</label>
  </div>
       <br>
  <!--</div>-->

<div class="input-group">
   <input class="input--style-1" type="text" placeholder="Matricule" name="matricul">
 </div>
       <div class="input-group" id="chambre">
           <input class="input--style-1" type="text" placeholder="N°Chambre" name="chambr">
       </div>
    
<div class="input-group">
   <input class="input--style-1" type="text" placeholder="Prenom" name="prenom">
 </div>
 
<div class="input-group">
   <input class="input--style-1" type="text" placeholder="Nom" name="nom">
 </div>
 
<div class="input-group">
   <input class="input--style-1" type="text" placeholder="Mail" name="mail">
 </div>
       <div class="input-group">
           <input class="input--style-1" type="text" placeholder="Telephone" name="tel">
       </div>

       <div class="input-group">
   <input class="input--style-1" type="text" placeholder="Date de Naissance" name="date">
 </div>
       <div class="input-group" id="adresse">
           <input class="input--style-1"  type="text" placeholder="Adresse" name="adress">
       </div>
       <div class="input-group"  id="bourse">
           <select name="type" >
               <option disabled="disabled" selected="selected">Type Bourse</option>
               <option>Pension Complete</option>
               <option>Demi Bourse</option>
           </select>
       </div>
 <div class="input-group">
   <select name="dpart">
    <option disabled="disabled" selected="selected">Departement</option>
     <option>Fac science</option>
     <option>Fac lettre</option>
     <option>Fac droit</option>
   </select>
   </div>
   <button class="btn bg-secondary w-100 mb-3" name="btn"  id='submit' type="submit" style="color:white">Enregistrer</button>
   </form>
  </div>

 <script src="<?=BASE_URL?>/views/frontend/jquery-3.5.1.js"></script>
    <script>
        $(document).ready(function () {
            $("#bourse").hide();
            $("#adresse").hide();
            $("#chambre").hide();
            $("#non_loge").hide();
            $("#loge").hide();
         $("#non_logé").change(function () {
            if($("#non_logé").attr("checked")){
                $("#adresse").hide();
                $("#chambre").show();
            }else {
                $("#adresse").show();
                $("#chambre").hide();
            }
         });

         $("#boursier").change(function (){
             if($("#boursier").attr("checked")){
                 $("#bourse").hide();
                 $("#non_loge").hide();
                 $("#loge").hide();
             }else {
                 $("#bourse").show();
                 $("#non_loge").show();
                 $("#loge").show();
             }
         });

            $("#non_boursier").change(function (){
                if($("#non_boursier").attr("checked")){
                    $("#non_loge").show();
                    $("#loge").show();
                    $("#bourse").show();
                    $("#adresse").hide();
                }else {
                    $("#non_loge").hide();
                    $("#loge").hide();
                    $("#bourse").hide();
                    $("#adresse").show();
                }
            });

           $("#logé").change(function (){
                if($("#logé").attr("checked")){
                    $("#chambre").hide();
                }else {
                    $("#chambre").show();
                }
            });
        });
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>