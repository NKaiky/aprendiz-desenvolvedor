<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>SysControlOfícios</title>
    </head>
    <body>
        <h1>Cadastrar Ofício</h1>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <form method="POST" action="proc_cad_oficio.php">
            <label>Nº do Ofício:</label>
            <input type="number" name="numerooficio" placeholder="Nº do Ofício"><br><br>
            
            <label>Pregão Eletrônico:</label>
            <input type="number" name="pregaoeletronico" placeholder="Nº do Pregão Eletrônico"><br><br>
            
            <label>Setorial:</label>
            <input type="text" name="setorial" placeholder="Insira o Setorial"><br><br>
            
             <label>Descrição:</label>
             <textarea name="descricao" rows="3" cols="50"></textarea><br><br>
            
             <input name="cadastrar" type="submit" value="Cadastrar">
        </form>
    </body>
</html>
