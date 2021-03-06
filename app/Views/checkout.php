<?php
echo view('comun/header');
?>
<div class="container-fluid ">
    <div class="row min-vh-100 align-items-center checkout">
        <div class="col-md-6 col-12 checkout-side" style="background-color:#F2F2F2;">
            <div class="row mt-4 pt-4 mb-0">
                <div class="col text-center">
                    <p class="fw-bold fs-1 text-center" style="font-family:poppins ; margin:10px">CPU GAMER ULTRA RGB</p>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <p class="fw-bold fs-1 text-center" style="font-family:poppins ; margin:10px">Bs. 9800</p>
                </div>
            </div>

            <div class="row">
                <div class="d-flex justify-content-center">
                    <img src="<?php echo base_url('imgs/pc-gamer.png'); ?>" width=500 height=400 class="">
                </div>
            </div>

        </div>

        <form class="col-md-6 col-12 checkout-side" action="<?php echo base_url('/checkout') ?>" method="post" style="background-color:#FFFFFF;">
            <div class="d-flex justify-content-center">
                <div class="form aling-items-center">
                    <div class="row mt-5 pt-5">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <h3 class="text-center">FINALIZA TU COMPRA</h3><br>
                            <?php
                            // To print error messages 

                            if (isset($validation)) {

                                print_r($validation->listErrors());
                            }
                            ?>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
                                    </svg> </span>
                                <input type="text" class="form-control" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" placeholder="Correo electr??nico" aria-describedby="basic-addon1" name="correo">
                            </div><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                                        <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
                                    </svg> </span>
                                <input type="text" class="form-control" placeholder="N??mero de la Tarjeta" maxlength="16" aria-describedby="basic-addon1" name="numeroDeTarjeta">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="input-group mb-3">
                                <input type="text" pattern="^(1|2|3|4|5|6|7|8|9|01|02|03|04|05|06|07|08|09|10|11|12)\/\b202[1-9]\d{0}$" class="form-control" placeholder="Fecha" name="fecha" aria-label="Fecha">
                                <input type="text" pattern="^\d{3}$" class="form-control" placeholder="CVV" aria-label="CVV" name="cvv">
                            </div><BR>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                                        <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z" />
                                    </svg> </span>
                                <input type="text" class="form-control" pattern="^[a-zA-Z\ ]$" name="titular" placeholder="Nombre del titular de la Tarjeta" aria-describedby="basic-addon1">
                            </div><br>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                    </svg></span>
                                <input type="text" class="form-control" placeholder="Tel??fono" name="telefono" pattern="^(\+591|591)?[ -]*(6|7)[ -]*([0-9][ -]*){7}$" aria-describedby="basic-addon1">
                            </div><br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
                                        <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                    </svg></span>
                                <input type="text" name="fechaActual" class="form-control" pattern="^(?:3[01]|[12][0-9]|0?[1-9])([\-/.])(0?[1-9]|1[1-2])\1\d{4}$" placeholder="Fecha de entrega - DD/MM/YYYY" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div> <br>



                </div>
            </div>

            <div class="row text-center aling-item-center justify-content-center">
                <div class="col-sm-12">
                    <button type="submit" class="btn text-white p-2 fw-bold mt-3 rounded-pill" style="background-color: #39374D ; font-family:poppins ; margin:10px ; width : 200px">COMPRAR</button>
                </div>
            </div>

        </form>

    </div>
</div>
<?php
echo view('comun/footer');
?>