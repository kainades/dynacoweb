<?php 
/*template name:calculador */
get_header(); ?>
  <div class="container">
      <div class="col-md-12">
        <div class="row">
          <br>
        <div class="col-md-4">
            <div id="DivInputNumber" class="form-group has-feedback">
              <label for="InputNumbers">Cantidad a convertir</label>
              <input type="cantidad" class="form-control" id="Inputcantidad" placeholder="Unidad">
            </div>
          </div>
          <div class="col-md-6">
            <label for="select">Unidad a convertir</label>
            <select id="seleccion" class="form-control">
              <option value="0">Seleccione conversion</option>
              <option value="1">bps  - Bits por segundo</option>
              <option value="8">Bps  - Bytes por segundo</option>
              <option value="1000">kbps - Kilobits por segundo</option>
              <option value="8000">kBps - Kilobytes por segundo</option>
              <option value="1000000">mbps - Megabits por segundo</option>
              <option value="8000000">MBps - Megabytes por segundo</option>
              <option value="1000000000">bgps - Gigabits por segundo</option>
              <option value="8000000000">GBps - Gigabytes por segundo</option>
              <option value="1000000000000">tbps - Terabits por segundo</option>
              <option value="8000000000000">TBps - Terabytes por segundo</option>
            </select>
          </div>
          
          <div class="col-md-10">
            <section>
              <br>
              <div class="panel panel-primary">
                <div class="panel-heading"><i class=""></i>Resultado</div>
                <div class="panel-body">
                  <div id="DivInputValue" class="form-group has-feedback"> 
                    <label for="InputResult">bps  - Bits por segundo</label>
                    <input type="result" class="form-control" id="InputResult1" placeholder="bps">
                    <span id="SpanInputResult" class="glyphicon form-control-feedback"></span> 
                  </div>
                  <div id="DivInputValue" class="form-group has-feedback"> 
                    <label for="InputResult">Bps  - Bytes por segundo</label>
                    <input type="result" class="form-control" id="InputResult2" placeholder="Bps">
                    <span id="SpanInputResult" class="glyphicon form-control-feedback"></span> 
                  </div>
                  <div id="DivInputValue" class="form-group has-feedback"> 
                    <label for="InputResult">kbps - Kilobits por segundo</label>
                    <input type="result" class="form-control" id="InputResult3" placeholder="kbps">
                    <span id="SpanInputResult" class="glyphicon form-control-feedback"></span> 
                  </div>
                  <div id="DivInputValue" class="form-group has-feedback"> 
                    <label for="InputResult">kBps - Kilobytes por segundo</label>
                    <input type="result" class="form-control" id="InputResult4" placeholder="kBps">
                    <span id="SpanInputResult" class="glyphicon form-control-feedback"></span> 
                  </div>
                  <div id="DivInputValue" class="form-group has-feedback"> 
                    <label for="InputResult">mbps - Megabits por segundo</label>
                    <input type="result" class="form-control" id="InputResult5" placeholder="mbps">
                    <span id="SpanInputResult" class="glyphicon form-control-feedback"></span> 
                  </div>
                  <div id="DivInputValue" class="form-group has-feedback"> 
                    <label for="InputResult">MBps - Megabytes por segundo</label>
                    <input type="result" class="form-control" id="InputResult6" placeholder="MBps">
                    <span id="SpanInputResult" class="glyphicon form-control-feedback"></span> 
                  </div>
                  <div id="DivInputValue" class="form-group has-feedback"> 
                    <label for="InputResult">bgps - Gigabits por segundo</label>
                    <input type="result" class="form-control" id="InputResult7" placeholder="bgps">
                    <span id="SpanInputResult" class="glyphicon form-control-feedback"></span> 
                  </div>
                  <div id="DivInputValue" class="form-group has-feedback"> 
                    <label for="InputResult">GBps - Gigabytes por segundo</label>
                    <input type="result" class="form-control" id="InputResult8" placeholder="GBps">
                    <span id="SpanInputResult" class="glyphicon form-control-feedback"></span> 
                  </div>
                  <div id="DivInputValue" class="form-group has-feedback"> 
                    <label for="InputResult">tbps - Terabits por segundo</label>
                    <input type="result" class="form-control" id="InputResult9" placeholder="tbps">
                    <span id="SpanInputResult" class="glyphicon form-control-feedback"></span> 
                  </div>
                  <div id="DivInputValue" class="form-group has-feedback"> 
                    <label for="InputResult">TBps - Terabytes por segundo</label>
                    <input type="result" class="form-control" id="InputResult10" placeholder="TBps">
                    <span id="SpanInputResult" class="glyphicon form-control-feedback"></span> 
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="col-md-2">
            <p>En comunicaci&oacuten y transferencia de datos, la definici&oacuten correcta es la m&eacutetrica. Es decir, que se toman 1000 bytes por kilobytes. A diferencia de la definici&oacuten binaria que establece que 1 kilobyte son 1024 bytes.</p>
          </div>



        </div>
        <br>
      </div>
        <hr class="dotted">
      </div> <!-- container -->
<!--  <script type="text/javascript">$(function(){$("#seleccion").change(function(){calculo()});$("#Inputcantidad").blur(function(){calculo()})});function calculo(){var d=[1,8,1E3,8E3,1E6,8E6,1E9,8E9,1E12,8E12],c=[];0<$("#Inputcantidad").val()&&0<$("#seleccion").val()?(c=[],jQuery.each(d,function(a,b){c.push($("#Inputcantidad").val()*$("#seleccion").val()/b)}),jQuery.each(c,function(a,b){x=a+1;$("#InputResult"+x).val(b)})):(jQuery.each(d,function(a,b){x=a+1;$("#InputResult"+x).val("")}),alert("Debe introducir cantidad a convertir."))};</script> -->
 <script type="text/javascript">$(function(){$("#seleccion").change(function(){calculo()});$("#Inputcantidad").blur(function(){calculo()})});function calculo(){var d=[1,8,1E3,8E3,1E6,8E6,1E9,8E9,1E12,8E12],c=[];0<$("#Inputcantidad").val()&&0<$("#seleccion").val()?(c=[],jQuery.each(d,function(a,b){c.push($("#Inputcantidad").val()*$("#seleccion").val()/b)}),jQuery.each(c,function(a,b){x=a+1;$("#InputResult"+x).val(b)})):(jQuery.each(d,function(a,b){x=a+1;$("#InputResult"+x).val("")}))};</script>
<?php get_footer(); ?>
