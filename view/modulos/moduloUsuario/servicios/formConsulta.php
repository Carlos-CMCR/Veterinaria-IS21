<?php 
headerForm("Consulta Veterinaria");
?>

<main class="main">
    <div class="contenedor__servicio">
        <span class="contenedor__img">
            <img src="img/consulta_animal.jpg"  class="img-servicio">
        </span>
        <div class="contenedor__descripcion">
            <h4 class="tittle__servicio">Consulta Veterinaria</h4>
            <p class="text__servicio">De forma general, debes llevar a tu perro o gato al veterinario al menos una vez al año, aunque una respuesta más precisa es que depende de cada caso, es decir, del estilo de vida, condición física y etapa de vida de cada mascota. Y de forma exacta, es el veterinario quien definirá el momento preciso y frecuencia de consulta para cada una de tus mascotas, pues es el profesional de la salud indicado para darle seguimiento a la salud de los amigos de cuatro patas, además de cuidar también de la salud de las personas en casa al prevenir también riesgos de contagios entre animales y humanos.<form>
                <button name="btnEscoger" formaction="../controller/getValidarSession.php" formmethod="POST"> Escoger!</button>
            </form>
            
        </div>
        
    </div>
</main> 

<?php 
footerForm();
?>
