<?php
echo view('comun/header');
?>
<div class="container-fluid" style="background-color:#F2F2F2;">
  <div class="row ">
        <div class="col-md-12 ">
            <div class="row min-vh-100 d-flex justify-content-center align-items-center ">
                <div class="col-md-6 " >
                         <div class="text-center ">
                             <h1>¡DISFRUTA TU COMPRA!</h1>
                        </div>
    
                    <div class="row text-center aling-item-center justify-content-center">
                         <div class="col-sm-12">
                             <a href="<?php echo base_url('project/thanks'); ?>" type="button" class="btn btn-dark rounded-pill align-self-end">COMPRAR DE NUEVO</a>
                        </div>
                    </div>
                     
                </div>
                
                <div class="col-md-6 " >
                    <div class="row">
                            <div class="d-flex justify-content-center">
                                <img src="<?php echo base_url('imgs/boy.svg'); ?>"  class="w-100 h-100">
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div