<!DOCTYPE html>
<html lang="es">
<meta charset= "utf8">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url("csss/style.css") ?>" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="<?php echo base_url('imgs/logo.svg'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">
    <title>Project</title>
</head>
<body style="background-color: #F2F2F2">
<div class="container-fluid">
  <div class="row ">
        <div class="col-md-12 ">
            <div class="row min-vh-100">
                <div class="col-md-6 col-xs-2" style="background-color:#F2F2F2;">
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
                
                <div class="col-md-6 col-xs-2" style="background-color:#FFFFFF;">
                  <div  class="d-flex justify-content-center">
                        <div class="form aling-items-center">
                            <div class="row mt-5 pt-5">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                      <h3 class="text-center">FINALIZA TU COMPRA</h3><br>
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                                                </svg> </span>
                                                <input type="text" class="form-control" placeholder="Correo electrónico" aria-describedby="basic-addon1">
                                        </div><br>
                                </div>       
                            </div>
                           
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                                            <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                                            </svg> </span>
                                        <input type="text" class="form-control" placeholder="Número de la Tarjeta" aria-describedby="basic-addon1">
                                    </div>
                                </div>       
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Fecha" aria-label="Fecha">
                                        <input type="text" class="form-control" placeholder="CVV" aria-label="CVV">
                                    </div><BR>
                                </div>       
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                                            <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                            <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                                            </svg> </span>
                                        <input type="text" class="form-control" placeholder="Número del titular de la Tarjeta" aria-describedby="basic-addon1">
                                    </div><br>
                                </div>       
                            </div>

                            
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                            </svg></span>
                                        <input type="text" class="form-control" placeholder="Teléfono" aria-describedby="basic-addon1">
                                    </div><br>
                                </div>       
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
                                            <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                            </svg></span>
                                        <input type="text" class="form-control" placeholder="Fecha DD/MM/YYYY" aria-describedby="basic-addon1">
                                    </div>
                                 </div>     
                            </div> <br>

                           

                        </div>
                    </div> 

                    <div class="row text-center aling-item-center justify-content-center">
                                <div class="col-sm-12">
                                    <a href="<?php echo base_url('project/thanks'); ?>" type="button" class="btn text-white p-2 fw-bold mt-3 rounded-pill" style="background-color: #39374D ; font-family:poppins ; margin:10px ; width : 200px">COMPRAR</a>
                                </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
