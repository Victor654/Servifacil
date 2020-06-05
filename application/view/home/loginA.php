<br>
<center>
<img class="responsive-img" style="width: 90px; height: 95px;" src="<?php echo URL; ?>/img/admin.png" />
<div class="section">
</div>
<div ></div>
<h5 class="white-text">ADMINISTRADOR</h5>
<div class="section">
</div>
<div class="container login">
  <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding:25px 48px 0px 48px; border: 1px solid #EEE;">
   <form class="col s12" method="post" action="<?php echo URL; ?>home/login" autocomplete="off">
      <?php
        if(isset($errorLogin)){
          echo $errorLogin;
        }
      ?>
    
            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name="id" required onkeypress="return justNumbers(event);">
                <label> Numero ID </label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12 '>
                <input class='validate' type='password' name='clave' id='password'  required onkeypress="return justNumbers(event);"/>
                <label for='password'>Clave</label>
              </div>
            </div>
            <a href="<?php echo URL; ?>home/recuperarC">¿Olvidó su contraseña?</a>
            <center>
              <br>
             <div>
              <input type="submit" name="btni" value="Iniciar Sesión" class="btn waves-effect waves-light blue darken-3">
                </div>
                <br>
            </center>
          </form>
        </div>
      </div>
    </center>
    <br><br><br><br><br><br>

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