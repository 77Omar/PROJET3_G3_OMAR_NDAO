<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="<?=BASE_URL?>/views/frontend/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="./style.css">
    <style>
        h1 {text-align: center;}
    </style>
</head>
<body>
<div class="container h-75">
    <div class="row  h-100 justify-content-center align-items-center">
        <form class="needs-validation  p-3 w-100 bg-light p-5 shadow rounded" action='' id="forms" method="post" novalidate >

            <div id="scrollZone" class="col">
                <table class="table table-bordered" style="background-color:#C4C4C4;">
                    <button type="button" id="list"  class="btn btn-default pull-left" >Lister</button><br>
                    <thead class="rounded-pill text-info">
                    <tr class="text-center">
                        <th scope="col">N°Chambre</th>
                        <th scope="col">Type Chambre</th>
                        <th scope="col">N° Batiment</th>
                        <th scope="col" colspan="2">Choix</th>
                    </tr>
                    </thead>
                    <tbody id="tbody">
                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Modal Header</h4>
                                </div>
                                <div class="modal-body">
                                    <div  class="form-group">
                                        <input type="hidden" id="num" class="form-control">
                                    </div>
                                    <div  class="form-group">
                                        <label for="Num">N°Chambre</label>
                                        <input type="text" id="number" class="form-control">
                                    </div>
                                    <div  class="form-group">
                                        <label for="Num">N° Batiment</label>
                                        <input type="text" id="batiment" class="form-control">
                                    </div>
                                    <div  class="form-group">
                                        <label for="Num">Type Chambre</label>
                                        <input type="text" id="chamb" class="form-control">
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <a href="#" id="save" class="btn btn-primary pull-right">Update</a>
                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>

<script>

    $(document).ready(function(){
        alert('ok');
        let offset=0;
        const tbody=$('#tbody');
        $.ajax({
            type:'POST',
            url: "<?=BASE_URL?>/controllers/security/ListRoom";
        data:{
            limit:1,offset:offset
        },
        dataType:"JSON",
            success: function(data){
            tbody.html('')
            printData(data,tbody);
            offset+=1
        },
    });
        //srcoll
        const scrollZone = $('#scrollZone')
        scrollZone.scroll(function(){

            const st = scrollZone[0].scrollTop;
            const sh = scrollZone[0].scrollHeight;
            const ch = scrollZone[0].clientHeight;
            console.log(st,sh,ch);
            if(sh-st<=ch){
                $.ajax({
                    type:'POST',
                    url: "<?=BASE_URL?>/controllers/security/ListRoom";
                data:{
                    limit:1,offset:offset},
                dataType:"JSON",
                    success: function(data){
                    printData(data,tbody);
                    offset+=1;
                },
            });
            }
        });

        function
        function printData(data,tbody){
            $.each(data, function(indice,chambre){
                tbody.append(`
      <tr class="text-center">
           <td scope="row">${chambre.numChambre}</td>
           <td>${chambre.numBatiment}</td>
           <td>${chambre.typechambre}</td>
           <td><button type="button" id="modif" class="btn btn-info"  data-toggle="modal" data-target="#myModal">modifier</button></td>
           <td><button type="button" class="btn btn-danger" id="delete">supprimer</button></td>
      </tr>
         `)
            });
        }
    });
</script>
<!-- Optional JavaScript -->
<jQuery first, then Popper.js, then Bootstrap JS>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>