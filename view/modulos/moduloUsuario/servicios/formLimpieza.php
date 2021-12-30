<?php 
headerForm("Limpieza Dental");
?>

<main class="main">
    <div class="contenedor__servicio">
        <span class="contenedor__img">
            <img src="img/dental_servicio.jpg"  class="img-servicio">
        </span>
        <div class="contenedor__descripcion">
            <h4 class="tittle__servicio">Limpieza Dental</h4>
            <p class="text__servicio">La salud dental de nuestra mascota es uno de los aspectos importantes en el cuidado de su salud. Promover la higiene bucal de tu perro es esencial para mantenerlo en buen estado de salud y prevenir patologías graves para su salud tanto a un nivel dental como general. Si te has decidido, como padre de mascota, cuidar la higiene bucal de tu engreído, sigue nuestras recomendaciones.
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