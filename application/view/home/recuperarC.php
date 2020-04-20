    <center>
      <img class="responsive-img" style="width: 150px;" src="<?php echo URL; ?>/img/recuperar.png" />
      <div class="section"></div>

      <h5 class="blue-text">RECUPERAR CONTRASEÑA</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding:25px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post" action="<?php echo URL; ?>home/recuperarClave">
                      <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
        ?>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" name="email" class="validate">
                  <label for="email">Email</label>
                  <span class="helper-text" data-error="wrong" data-success="right">Debe conener un @</span>
              </div>
            </div>
            <br>
            <center>
             <div>
              <input type="submit" name="btni" value="Enviar" class="btn waves-effect waves-light blue darken-3">
                </div>
                <br>
            </center>
          </form>
        </div>
      </div>
    </center>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="<?php echo URL; ?>js/materialize.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>js/materialize.min.js"></script>

<script type="text/javascript">
    function justNumbers(e)
            {
            var keynum = window.event ? window.event.keyCode : e.which;
            if ((keynum == 8) || (keynum == 46))
            return true;
             
            return /\d/.test(String.fromCharCode(keynum));
            }
          </script>
</body>