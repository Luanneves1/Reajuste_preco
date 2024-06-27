<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<?php
$preco = $_GET["num"] ?? "0";
$porcent = $_GET["reaj"] ?? "0";
$reaj = ($preco * $porcent) / 100;
$aumento = $reaj + $preco;
?>

<body>

    <main>
        <h1>Reajuste de preço</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="">Valor do prouto</label>
            <input type="number" value="<?= $preco ?>" name="num" required>

            <label for="">Qual será o porcentagem de reajuste do produto?<strong> ( <span id="p">?</span>%)</strong></label>
            <input type="range" id="reaj" name="reaj" min="0" max="100" step="1" oninput="mudaValor()">

            <input type="submit" value="Reajustar">

        </form>


    </main>

    <section>
        <h2>Valor Reajustado</h2>
<p>
    O produto que custava R$ <?= number_format($preco,"2",",",".")?>  <strong> foi reajustado em <?=$porcent?>% </strong> com isso passou a custar <strong> <?= number_format($aumento,"2",",",".")?> </strong>
    </section>

    <script>
        mudaValor();

        function mudaValor() {
            p.innerText = reaj.value;

        }
    </script>
</body>

</html>