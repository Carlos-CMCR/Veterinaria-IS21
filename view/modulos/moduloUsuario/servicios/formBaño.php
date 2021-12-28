<?php 
headerForm("Baño y Peluqueria");
?>

<main class="main">
    <div class="contenedor__servicio">
        <span class="contenedor__img">
            <img src="img/baño.jpg"  class="img-servicio">
        </span>
        <div class="contenedor__descripcion">
            <h4 class="tittle__servicio">Baño y peluqueria</h4>
            <p class="text__servicio">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, similique porro enim obcaecati, adipisci vero deserunt officia asperiores nesciunt ullam maxime odio. Placeat facilis tempora quae ratione similique deleniti dolore, optio saepe. Saepe nihil id laudantium dignissimos minus harum sunt.</p>
            <form>
                <button name="btnEscoger" formaction="../controller/getValidarSession.php" formmethod="POST"> Escoger!</button>
            </form>
            
        </div>
        
    </div>
</main> 

<?php 
footerForm();
?>
