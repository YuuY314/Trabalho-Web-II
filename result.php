<?php
    if(isset($_POST["text1"])){
        $text1 = $_POST["text1"];
    }
    
    if(isset($_POST["text2"])){
        $text2 = $_POST["text2"];
    }

    if(isset($_POST["text3"])){
        $text3 = $_POST["text3"];
    }

    if(isset($_POST["text4"])){
        $text4 = $_POST["text4"];
    }

    if(isset($_POST["months"])){
        $month = $_POST["months"];
    }

    if(isset($_POST["years"])){
        $year = $_POST["years"];
    }

    if(isset($_POST["search"])){
        $search = $_POST["search"];
    }

    if(isset($_POST["replace"])){
        $replace = $_POST["replace"];
    }
    
    if(isset($_POST["grades"])){
        $grade = $_POST["grades"];
    }
    
    if(isset($_POST["likes"])){
        $likes = [$_POST["likes"]];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rafael Yu - INF 251 - Trabalho Web II</title>
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time();?>">
    <style>
        form {
            height: 50vh;
        }
    </style>
</head>
<body>
    <form action="index.php" method="POST">
        <h1>Resultados</h1>
        <section>
            <div>
                <h3><strong>Join:</strong></h3>
                <?php 
                    $text_array = [$text1, $text2, $text3, $text4];
                    echo join(", ", $text_array);
                ?>
            </div>
            <div>
                <h3><strong>Texto 1 em maiúsculo:</strong></h3>
                <?php echo strtoupper($text1)?>
            </div>
            <div>
                <h3><strong>Qtd de letras no Texto 1:</strong></h3>
                <?php 
                    $formated_text1 = str_replace(" ", "", $text1);
                    echo mb_strlen(trim($formated_text1));
                ?>
            </div>
            <div>
                <h3><strong>Texto 1 com substituição de palavras:</strong></h3>
                <?php 
                    $replaced_text1 = str_replace($search, $replace, $text1);
                    echo $replaced_text1;
                ?>
            </div>
        </section>
        <section>
            <input type="submit" id="submit" value="Atualizar">
        </section>
    </form>
</body>
</html>