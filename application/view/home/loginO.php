    <br>
    <center>
      <img class="responsive-img" style="width: 170px; height: 200px;" src="<?php echo URL; ?>img/op.png" />
      <div class="section"></div>

      <h5 class="blue-text">OPERARIO</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding:25px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post" action="<?php echo URL; ?>home/login3">
            <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
        ?>
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' required name="id" onkeypress="return justNumbers(event);"  >
                <label for='email'>Numero ID</label>
              </div>
            </div>
            <br>
            <center>
               <div>
                  <input type="submit" name="btni" value="Iniciar Sesión" class="btn waves-effect waves-light blue darken-3">
                </div>
                <br>
            </center>
          </form>
        </div>
      </div>
    </center>
    <br><br><br><br><br><br><br><br><br><br><br>

    <!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="<?php echo URL; ?>js/materialize.min.js"></script>
<script>
 function justNumbers(e)
            {
            var keynum = window.event ? window.event.keyCode : e.which;
            if ((keynum == 8) || (keynum == 46))
            return true;
             
            return /\d/.test(String.fromCharCode(keynum));
            }
</script>