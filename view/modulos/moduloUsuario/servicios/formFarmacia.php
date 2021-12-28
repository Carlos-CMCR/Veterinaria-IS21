<?php 
headerForm("Farmacia Veterinaria");
?>

<main class="main">
    <div class="contenedor__servicio">
        <span class="contenedor__img">
            <img src="img/farmacia.jpg"  class="img-servicio">
        </span>
        <div class="contenedor__descripcion">
            <h4 class="tittle__servicio">Farmacia Veterinaria</h4>
            <p class="text__servicio">¿Te parece importante saber dónde comprar medicamentos o productos de parafarmacia para tu mascota? ¿Te interesa además recibir el consejo de un veterinario? Ni todos los medicamentos para humanos sirven para los animales ni todos los farmacéuticos tienen conocimientos veterinarios.
            </p>
            <button name="btnEscoger" formaction="../controller/getValidarSession.php" formmethod="POST"> Escoger!</button>
            </form>
            
        </div>
        
    </div>
</main> 

<?php 
footerForm();
?>