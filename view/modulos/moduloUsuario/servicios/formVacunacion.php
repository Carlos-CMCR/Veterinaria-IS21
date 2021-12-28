<?php 
headerForm("Vacunación y desparasitaciones en perros y gatos");
?>

<main class="main">
    <div class="contenedor__servicio">
        <span class="contenedor__img">
            <img src="img/vacunacion.jpeg"  class="img-servicio">
        </span>
        <div class="contenedor__descripcion">
            <h4 class="tittle__servicio">Vacunación y desparasitaciones en perros y gatos</h4>
            <p class="text__servicio">Habitualmente los calendarios de vacunación para perros y gatos varían según los veterinarios. Las características anatómicas y fisiológicas de perros y gatos no son iguales, por lo que sus enfermedades y su respuesta a los fármacos tampoco son iguales. De ahí que los tratamientos no puedan ser idénticos.
            </p>
            <button name="btnEscoger" formaction="../controller/getValidarSession.php" formmethod="POST"> Escoger!</button>
            </form>
            
        </div>
        
    </div>
</main> 

<?php 
footerForm();
?>