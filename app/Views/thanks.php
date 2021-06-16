<?php
echo view('comun/header');
echo view('comun/menu');
?>
<div class="container-fluid" style="background-color:#F2F2F2;">
    <div class="row d-flex flex-row flex-sm-row-reverse m-md-2 ml-sm-2 mt-2 justify-content-center align-items-center">
        <div class="col-md-6  h-75 " style="margin-bottom:30px">

            <div class="row">
                <div class="d-flex justify-content-center mx-auto d-block">
                    <img src="<?php echo base_url('imgs/boy.svg'); ?>">
                </div>
            </div>
        </div>
        <div class="col-md-6 ">
            <div class="text-center ">
                <h1 class="fw-bold fs-1 text-center" style="font-family:poppins ; margin:10px">¡DISFRUTA TU COMPRA!</h1>
            </div>

            <div class="row text-center aling-item-center justify-content-center">
                <div class="col-sm-12">
                    <a href="<?php echo base_url('/'); ?>" type="button" class="btn text-white fw-bold mt-3 rounded-pill" style="background-color: #39374D ; font-family:poppins ; margin:10px ; width : 200px">COMPRAR DE NUEVO</a>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
echo view('comun/footer');
?>