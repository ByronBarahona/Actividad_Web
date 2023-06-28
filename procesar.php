<!DOCTYPE html>
<html>
<head>
    <title>Boleta de compra</title>
    <link href="Style.css" type="text/css" rel="stylesheet">
</head>
<body>
<body>
    <div class="boleta">
        <img clas = "logo" src="./Img/Cine_Hoyts.png" alt="Cine_Hoyts">
        <h3>Boleta de compra</h3>
        <?php
        $descuentos = array(
            'niño' => 0.3,
            'adulto' => 0.05,
            'adulto_mayor' => 0.55
        );

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $edad = $_POST['edad'];
            $cantidad = $_POST['cantidad'];
            $pelicula = $_POST['pelicula'];

            $descuento = $descuentos[$edad];
            $subtotal = 20000 * $cantidad;
            $descuento_aplicado = $subtotal * $descuento;
            $total = $subtotal - $descuento_aplicado;


            echo "<p>Pelicula Seleccionada: $pelicula</p>";
            echo "<p>Entradas: $cantidad</p>";
            echo "<p>Subtotal: $" . number_format($subtotal, 2) . "</p>";
            echo "<p>Descuento ($edad): " . ($descuento * 100) . "%</p>";
            echo "<p>Descuento aplicado: $" . number_format($descuento_aplicado, 2) . "</p>";
            echo "<p>Total a pagar: $" . number_format($total, 2) . "</p>";
        } else {
            echo "<p>No se recibieron datos del formulario.</p>";
        }
        ?>
    </div>
</body>
</html>
