<div id="contMensagens">
    <h2>Mensagens</h2>
    <table>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Mensagem</th>
        </tr>
        <?php 
            foreach($getMensagens as $key => $value){
        ?>
            <tr>
                <td><?= $value['nome'] ?></td>
                <td><?= $value['email'] ?></td>
                <td><?= $value['telefone'] ?></td>
                <td class="colMensagem"><p><?= $value['mensagem'] ?></p></td>
            </tr>
        <?php
            }
        ?>
    </table>
</div>