<?php
    //conexão
    include_once 'php_action/db_connect.php';
    //header
    include_once 'includes/header.php';
    //Select
    if(isset($_GET['id'])):
        $id = mysqli_escape_string($connect, $_GET['id']);

        $sql = "SELECT * FROM funcionarios WHERE id = '$id'";
        $resultado = mysqli_query($connect,$sql);
        $dados = mysqli_fetch_array($resultado);
    endif;
?>
 <div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar Funcionário</h3>
        <form action="php_action/update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="profissao" id="profissao" value="<?php echo $dados['profissao']; ?>">
                <label for="profissao">Profissão</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="endereco" id="endereco" value="<?php echo $dados['endereco']; ?>">
                <label for="endereco">Endereço</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="telefone" id="telefone" value="<?php echo $dados['telefone']; ?>">
                <label for="telefone">Telefone</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="estado_civil" id="estado_civil" value="<?php echo $dados['estado_civil']; ?>">
                <label for="estado_civil">Estado Civil</label>
            </div>
            <div class="input-field col s12">
                <input type="date" name="data_ingresso" id="data_ingresso" value="<?php echo $dados['data_ingresso']; ?>">
                <label for="data_ingresso">Data Ingresso </label>
            </div>

            <div class="input-field col s12">
                <input type="number" name="salario" id="salario" value="<?php echo $dados['salario']; ?>">
                <label for="salario">Sálario </label>
            </div>

            <button type="submit" name="btn-editar" class="btn">Atualizar</button>
            
            <a href="index.php" class="btn blue">Lista de Clientes</a> 
        </form>
    </div>
 </div>


<?php
    //footer
    include_once 'includes/footer.php';
?> 

      