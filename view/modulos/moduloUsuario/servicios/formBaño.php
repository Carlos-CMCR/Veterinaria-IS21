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
            <p class="text__servicio">La calidad del pelaje de un perro está determinada por su genética, pero también por su nutrición y sus cuidados básicos. Es decir que un correcto aseo es un factor determinante en el pelaje del perro y en su salud. Por ello el baño debe convertirse en una actividad imprescindible para mantener en buenas condiciones su manto y para cuidar su higiene general, evitando eczemas e infecciones.

            La periodicidad de cuidados como el corte de pelo, el cepillado, la limpieza de orejas y dientes, vería en relación a la raza y el tipo de manto. La frecuencia del baño depende entonces de las necesidades de cada perro, su entorno y su familia. Sin embargo la recomendación general es bañarlos cada dos o tres semanas.</p>
            <form>
                <button name="btnEscoger" formaction="../controller/getValidarSession.php" formmethod="POST"> Escoger!</button>
            </form>
            
        </div>
        
    </div>
</main> 

<?php 
footerForm();
?>
