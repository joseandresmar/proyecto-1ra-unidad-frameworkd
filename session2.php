<title>Carrito de compras</title>
<?php


   session_start();
   $total=0;
   echo "<h3>Carrito de compras:</h3>";
    if(isset($_SESSION["carrito"])){
        foreach ($_SESSION["carrito"] as $indice =>$arreglo) {
            echo "<hr>Producto: ". $indice . "<br>";
            $total +=$arreglo["cant"] * $arreglo["precio"];

            foreach ($arreglo as $key =>$value) {
                echo $key .": " . $value ."<br>";
            }
            echo "<a href='session2.php?item=$indice'>Eliminar Producto</a>";
            
        }
        echo "<h3>Total a pagar: $total</h3>";
        echo '<br><br><a href="session1.php">Regresar</a> |
        <a href="session2.php?vaciar=true">Vaciar Carrito</a>';
    }else{
        echo "<script>alert('el carrito esta vacio');</script>";
        ?>
        <a href="session1.php">Regresar</a>
        <?php
    }

    if(isset($_REQUEST["vaciar"])){
        session_destroy();
        header("Location:session2.php");
    }
    if (isset($_REQUEST["item"])) {
        $producto=$_REQUEST["item"];
        //$_SESSION["carrito"][$producto]["cant"]=$cantidad;

        unset($_SESSION["carrito"][$producto]);
        echo "<script>alert('se elimino el producto: $producto');</script>";
        header("Location: session2.php");
            }
    ?>


