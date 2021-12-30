<?php 
headerForm("Juguetes y Accesorios");
?>

<main class="main">
    <div class="contenedor__servicio">
        <span class="contenedor__img">
            <img src="img/jugetes.jpg"  class="img-servicio">
        </span>
        <div class="contenedor__descripcion">
            <h4 class="tittle__servicio">Juguetes y Accesorios</h4>
            <p class="text__servicio">Como sucede con las personas, las mascotas también se aburren o experimentan periodos de ansiedad. Cuando esto sucede nuestros perros y gatos pueden manifestarlo masticando zapatos o muebles de la casa, para prevenir esto es importante mantenerlos estimulados y que hagan ejercicio físico.
            </p>
        </div>
        <form class="button__servicio">
            <button name="btnEscoger" formaction="../controller/getValidarSession.php" formmethod="POST"> Escoger!</button>
        </form>
    </div>
</main> 

<?php 
footerForm();
?>