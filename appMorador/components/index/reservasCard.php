<div class="section full mt-4">
    <div class="section-heading padding">
        <h2 class="title">Minhas Reservas</h2>
        <a href="reservas.php" class="link">Ver Todas</a>
    </div>
    <div class="carousel-single owl-carousel owl-theme shadowfix">
        <?php

        $query = "select * from reserva_ambiente inner join ambiente on reserva_ambiente.ambiente = ambiente.id where morador = '{$_SESSION['id']}'";

        $resultado = mysqli_query($link_condominio, $query);
        $numrows = mysqli_num_rows($resultado);

        if ($numrows > 0) {
            while ($reservas = mysqli_fetch_assoc($resultado)) {
                include("itemReserva.php");
            }
        } else {
            echo "<p>Nenhuma reserva cadastrada</p>";
        }

        ?>
    </div>
</div>