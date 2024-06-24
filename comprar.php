<?php
require_once('../../TNDD/vistas/header.php')



?>

<div>

    <div class="form dark">
        <h5 class="text-center" style="color: yellow; font-size:x-large">Formulario de compras</h5>

        <form class="row g-3" style="display: flex; justify-content:center; align-items:center;">
            <div class="col-md-4">

                <input type="text" name="nombre" class="form-control" id="inputNombre" placeholder="Nombre y apellido" require>
            </div>
            <div class="col-md-4">

                <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Correo electrónico" require>
            </div>
            <div class="col-md-4">

                <input type="tel" name="telefono" class="form-control" id="inputel" placeholder="Telefono 00-000-00000000" require pattern="[00-000-00000000{13}">
            </div>
            <div class="col-8">

                <input type="text" name="direccion" class="form-control" id="inputAddress" placeholder="Direccion completa" require>
            </div>
            <div class="col-4">
                <input type="date" name="fecha" class="form-control" id="inputDate" placeholder="dd/mm/yy">
            </div>
            </div>
            <div class="col-12 d-flex" style="text-align: center; justify-content:center; margin-top:2rem;">
            <button type="submit" class="btn btn-primary">Comprar</button>
            </div>
        </form>







</div>
</div>



</div>



<div style="bottom: 0; padding: 100px; text-align: center;">

    <?php

    require_once('../../TNDD/vistas/footer.php')
    ?>
</div>

</html>