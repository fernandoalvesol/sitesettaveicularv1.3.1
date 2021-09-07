<?php
header('Content-Type: text/html; charset=utf-8');
?>
    
    <div class="container">
    
        <!-- <div class="col-md-12"> -->

        <form method="post" enctype="multipart/form-data" id="frmBoleto" name="frmBoleto">                        
      
            <div class="col-md-10">
                  
                <div class="form-group">
                    <label for="">Informe CPF OU CNPJ Para Solicitar Boleto</label>
                    <input type="tel" class="form-control" id="dfnCpf" placeholder="CPF/CNPJ" data-mask="99999999999?999" name="dfnCpf" value="" autocomplete="off">
                </div>

            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <input type="button" class="btn btn-success btn-lg" id="pbEnviar" name="pbEnviar" value="Solicitar 2° Via" style="margin-top: 18px;">
                </div>
            </div>
        
            <div class="col-md-12">
                <div class="form-group">
                    <div id="msg"></div>
                </div>
            </div>    
        </form>
        
        <!-- </div> -->

</div>
<script type="text/javascript" src="script.js"></script>