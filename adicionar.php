<?php
    //header
    include_once 'includes/header.php';
?>
 <div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Cliente</h3>
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="profissao" id="profissao">
                <label for="profissao">Profissão</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="endereco" id="endereco">
                <label for="endereco">Endereço</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="telefone" id="telefone">
                <label for="telefone">Telefone</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="estado_civil" id="estado_civil">
                <label for="estado_civil">Estado Civil</label>
            </div>
            <div class="input-field col s12">
                <input type="date" name="data_ingresso" id="data_ingresso">
                <label for="data_ingresso">Data Ingresso </label>
            </div>

            <div class="input-field col s12">
                <input type="number" name="salario" id="salario">
                <label for="salario">Sálario </label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn">Cadastrar Cliente</button>
            
            <a href="index.php" class="btn blue">Lista de Clientes</a> 
        </form>
    </div>
 </div>


<?php
    //footer
    include_once 'includes/footer.php';
?> 

      