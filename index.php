<?php
//sessão
session_start();
if (isset($_SESSION['mensagem'])) : ?>

    <script>
        //mensagem
        window.onload = function() {
            M.toast({
                html: '<?php echo $_SESSION['mensagem']; ?>'
            });
        };
    </script>
<?php
endif;
session_unset();
//conexão
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
?>



<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Funcionários</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome: </th>
                    <th>profissão: </th>
                    <th>endereço: </th>
                    <th>telefone: </th>
                    <th>Estado Civil: </th>
                    <th>Data de ingresso: </th>
                    <th>Salário: </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM  funcionarios";
                $resultado = mysqli_query($connect, $sql);
                while ($dados = mysqli_fetch_array($resultado)) :
                ?>
                    <tr>
                        <td><?php echo $dados['nome']; ?></td>
                        <td><?php echo $dados['profissao']; ?></td>
                        <td><?php echo $dados['endereco']; ?></td>
                        <td><?php echo $dados['telefone']; ?></td>
                        <td><?php echo $dados['estado_civil']; ?></td>
                        <td><?php echo $dados['data_ingresso']; ?></td>
                        <td><?php echo $dados['salario']; ?></td>

                        <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

                        <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                        <!-- Estrutura do Modal -->
                        <div id="modal<?php echo $dados['id']; ?>" class="modal">
                            <div class="modal-content">
                                <h4>Atenção</h4>
                                <p>Deseja realmente apagar os dados desse Funcionário?</p>
                            </div>
                            <div class="modal-footer">
                            
                            
                                <form action="php_action/delete.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                    <button type="submit" name="btn-deletar" class="btn red">Sim, quero Apagar</button>
                                
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                </form>
                            </div>
                        </div>

                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="btn">Adicionar Funcionário</a>
    </div>
</div>


<?php
//footer
include_once 'includes/footer.php';
?>