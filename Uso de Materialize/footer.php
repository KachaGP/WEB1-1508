<footer class="page-footer orange" style="margin: 0; padding: 0; width: 100%; box-sizing: border-box;">
  <div style="display: flex; justify-content: space-between; align-items: center; padding: 20px 40px; width: 100%;">
    <!-- Texto a la izquierda -->
    <div style="max-width: 70%;">
      <h5 class="white-text">FES ARAGÓN</h5>
      <p class="grey-text text-lighten-4" style="margin: 0;">
        Hecho en México, Universidad Nacional Autónoma de México (UNAM), todos los derechos reservados 2025.<br>
        Esta página puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile,
        se cite la fuente completa y su dirección electrónica. De otra forma,
        requiere permiso previo por escrito de la institución.
      </p>
    </div>

    <!-- GIF a la derecha -->
    <div style="text-align: right;">
      <img src="<?php echo (strpos($_SERVER['PHP_SELF'], '/logica/') !== false) ? '../multimedia/homero.gif' : './multimedia/homero.gif'; ?>" 
           style="width: 120px; height: auto; border-radius: 10px;">
    </div>
  </div>

  <div class="footer-copyright" style="background: rgba(0,0,0,0.1); text-align:center; width: 100%;">
    Hecho por: Ing. Andres Flores<a class="orange-text text-lighten-3" href="http://materializecss.com"></a>
  </div>
</footer>

<style>
  body {
    margin: 0;
    padding: 0;
    background-color: #fff;
  }

  footer {
    width: 100%;
  }
</style>
