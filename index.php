<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
            <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="recursos\css\estilo.css">
        <title>SysControlOfícios</title>
    
    </head>
    <body>
         <header class="cabecalho">
        <h1>Controle de Ofícios</h1>
        
        </header>
        
        <div class="info"> Preencha e salve as informações corretamente. </div>

        
        <main class="principal">
            
            <div class="mensagem">
                
             <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
             ?>
            </div>
            
        <form method="POST" action="proc_cad_oficio.php">
            <fieldset>
            <div class="form-container">
            <span class="label">Nº do Ofício:</span><input type="number" placeholder="Nº do Ofício" name="numerooficio" required> <br>
            <span class="label">Pregão Eletrônico:</span><input type="number" placeholder="Nº do Pregão Eletrônico" name="pregaoeletronico" required> <br>
            <span class="label">Setorial:</span><input type="text" placeholder="Informe o Setorial" name="setorial" required> <br>
            <label>Descrição:</label>
            <textarea name="descricao" rows="3" cols="50"></textarea><br><br>
            <button type="submit" name="cadastrar" value="Salvar" class="css3button">Salvar</button>
            
            </div> 
             </fieldset>
            
        </form>
        
        </main>
        

               
        <footer class="rodape">
            
        NK Web Developer in PHP © <?= date("Y");  ?>
        
        </footer>
    </body>
</html>
