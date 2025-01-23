<?php 
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(isset($_SESSION['mensagem']) && isset($_SESSION['tipo-msg'])){

        $mensagem = $_SESSION['mensagem'];
        $tipo = $_SESSION['tipo-msg'];

        /**Exibir a mensagem */
        if($tipo == 'sucesso'){
            echo '<div class="alert alert-success" role="alert">'. $mensagem .'</div>';
        }elseif($tipo == 'erro'){
            echo '<div class="alert alert-danger" role="alert">'. $mensagem .'</div>';
        }

        /** Limpe as variáveis de sessão */
        unset($_SESSION['mensagem']);
        unset($_SESSION['tipo-msg']);
    }


?>
<div class="navTool">
    <a href="http://localhost/kioficina/public/servico/adicionar">ADICIONAR</a>
</div>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Foto</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Preço</th>
            <th scope="col">Tempo</th>
            <th scope="col">Especialidade</th>
            <th scope="col">Editar</th>
            <th scope="col">Desativar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listaServico as $linha): ?>
            <tr>
                <th scope="row"><?php echo $linha['id_servico'] ?></th>
                <td><?php echo $linha['id_servico'] ?></td>
                <td><?php echo $linha['nome_servico'] ?></td>
                <td><?php echo $linha['descricao_servico'] ?></td>
                <td><?php echo $linha['preco_base_servico'] ?></td>
                <td><?php echo $linha['tempo_estimado_servico'] ?></td>
                <td><?php echo $linha['id_especialidade'] ?></td>
                <td><a href="http://localhost/kioficina/public/servico/editar"><i class="bi bi-pencil"></i></a></td>
                <td><a href="http://localhost/kioficina/public/servico/desativar"><i class="bi bi-trash"></i></a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>