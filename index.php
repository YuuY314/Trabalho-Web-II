<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rafael Yu - INF 251 - Trabalho Web II</title>
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time();?>">
</head>
<body>
    <form action="result.php" method="POST">
        <h1>Testar Funções</h1>
        <section>
            <div>
                <label for="text1"><strong>Texto 1</strong></label>
                <input type="text" id="text1" name="text1" placeholder="Digite um texto" required>
            </div>
            <div>
                <label for="text2"><strong>Texto 2</strong></label>
                <input type="text" id="text2" name="text2" placeholder="Digite um texto">
            </div>
            <div>
                <label for="text3"><strong>Texto 3</strong></label>
                <input type="text" id="text3" name="text3" placeholder="Digite um texto">
            </div>
            <div>
                <label for="text4"><strong>Teste 4</strong></label>
                <input type="text" id="text4" name="text4" placeholder="Digite um texto">
            </div>
            <div id="checks">
                <div>
                    <label for="months"><strong>Mês</strong></label>
                    <select name="months" id="months" required>
                        <option value="" disabled selected>Selecione</option>
                        <option value="january">Janeiro</option>
                        <option value="february">Fevereiro</option>
                        <option value="march">Março</option>
                        <option value="april">Abril</option>
                        <option value="may">Maio</option>
                        <option value="june">Junho</option>
                        <option value="july">Julho</option>
                        <option value="august">Agosto</option>
                        <option value="september">Setembro</option>
                        <option value="october">Outubro</option>
                        <option value="november">Novembro</option>
                        <option value="december">Dezembro</option>
                    </select>
                </div>
                <div>
                    <label for="years"><strong>Ano</strong></label>
                    <select name="years" id="years" required>
                        <option value="" disabled selected>Selecione</option>
                        <?php 
                            $start_year = 2023;
                            $final_year = 1900;
                            for($i = $start_year; $i >= $final_year; $i--){
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div id="searchReplace">
                <div>
                    <label for="search"><strong>Busca</strong></label>
                    <input type="text" id="search" name="search" placeholder="Busque um termo" required>
                </div>
                <div>
                    <label for="replace"><strong>Troca</strong></label>
                    <input type="text" id="replace" name="replace" placeholder="Troque um termo" required> 
                </div>
            </div>
        </section>
        <section>
            <div>
                <h3><strong>Período</strong></h3>
                <div id="grades">
                    <div>
                        <input type="radio" id="first" value="first" name="grades">
                        <label for="first">Primeiro</label>
                    </div>
                    <div>
                        <input type="radio" id="second" value="second" name="grades">
                        <label for="second">Segundo</label>
                    </div>
                    <div>
                        <input type="radio" id="third" value="third" name="grades">
                        <label for="third">Terceiro</label>
                    </div>
                    <div>
                        <input type="radio" id="forth" value="forth" name="grades">
                        <label for="forth">Quarto</label>
                    </div>
                    <div>
                        <input type="radio" id="fifth" value="fifth" name="grades">
                        <label for="fifth">Quinto</label>
                    </div>
                    <div>
                        <input type="radio" id="sixth" value="sixth" name="grades">
                        <label for="sixth">Sexto</label>
                    </div>
                </div>
            </div>
            <div>
                <h3><strong>Gostos</strong></h3>
                <div id="likes">
                    <input type="checkbox" value="books" id="books" name="books">
                    <label for="books">Livros</label>
                    <input type="checkbox" value="magazines" id="magazines" name="magazines">
                    <label for="magazines">Revistas</label>
                    <input type="checkbox" value="games" id="games" name="games">
                    <label for="games">Jogos</label>
                </div>
            </div>
        </section>
        <section>
            <input type="reset" id="reset" value="Limpar">
            <input type="submit" id="submit" value="Enviar">
        </section>
    </form>
</body>
</html>