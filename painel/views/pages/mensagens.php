<div id="contMensagens">
    <h2>Mensagens</h2>
    <?php 
        if(count($getMensagens) != 0){
    ?>
        <table>
            <tr>
                <th></th>
                <th>Nome</th>
                <th>Contatos</th>
                <th>Mensagem</th>
            </tr>
            <?php 
                foreach($getMensagens as $key => $value){
            ?>
                <tr>
                    <td class="colDataHora"><p><?= $value['hora'].'<br>'.$value['dia'] ?></p></td>
                    <td><?= $value['nome'] ?></td>
                    <td class="colContatos"><p><?= $value['telefone'].'<br>'.$value['email'] ?></p></td>
                    <td class="colMensagem"><p><?= $value['mensagem'] ?></p></td>
                </tr>
            <?php
                }
            ?>
        </table>
    <?php 
        }else{
    ?>
        <div class="avisoSemMsg">Caixa de mensagens vazia.</div>
    <?php 
        }
    ?>
</div>