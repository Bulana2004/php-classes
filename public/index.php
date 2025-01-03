<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cylinder</title>
    <link rel="stylesheet" href="./assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>

        <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Calculate the Volume of a Cylinder</h3>
                        <!-- <p>Fill in the data below.</p> -->
                        <form class="requires-validation" id="form-calculate">

                            <div class="col-md-12 mt-3">
                               <input class="form-control" type="number" placeholder="Radius" required>
                            </div>

                            <div class="col-md-12 mt-3">
                                <input class="form-control" type="number" placeholder="Height" required>
                            </div>

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Calculate</button>
                            </div>
                        </form>
                        <!-- MOdal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Output</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" id="output">
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="refresh()">Close</button>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Modal -->
                        <form action="" id="form-WaterLevel">
                            <h4 class="mt-5">Volume of Water</h4>

                            <div class="col-md-12 mt-3">
                               <div class="row">
                                <div class="col-7">
                                    <input id="waterHeight" class="form-control" type="number" placeholder="Water Level Height" required>
                                </div>
                                <div class="col-2">
                                    <button type="submit" class="btn btn-secondary form-control">OK</button>
                                </div>
                                <div class="col-3">
                                    <button type="button" onclick="refresh1()" class="btn btn-secondary form-control">Refresh</button>
                                </div>
                               </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        $("#form-calculate").submit(function(e){
            e.preventDefault();
            var vals = $('input').map(function(){
                return $(this).val()
            }).get();

            $.ajax({
                type:'post',
                data:{vals : vals},
                url:'./php/cylindercheck.php',
                success:function(responce){
                    $("#exampleModal").modal('show');
                    $("#output").html(responce);
                }
            })
        })

        $("#form-WaterLevel").submit(function(e){
            e.preventDefault();
            var val = $('input').map(function(){
                return $(this).val()
            }).get();

            $.ajax({
                type:'post',
                data:{val : val},
                url:'./php/waterlevel.php',
                success:function(responce){
                    $("#exampleModal").modal('show');
                    $("#output").html(responce);
                }
            })
        })
    })

    function refresh1(){
        location.reload();
    }
</script>
</html>