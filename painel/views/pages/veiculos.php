<div id="contVeiculos">
                <div class="contAddVeic">
                    <h2>Adicionar veículo</h2>
                    <form action="<?= ROOT_PATH_PAINEL ?>" method="post" enctype="multipart/form-data">
                        <input type="text" placeholder="Marca Modelo" name="marca-modelo">
                        <input type="text" placeholder="Descrição do modelo" name="desc-modelo">
                        <input type="text" placeholder="Valor" name="valor">
                        <input type="text" placeholder="Ano de fabricação/modelo" name="ano">
                        <input type="text" placeholder="Combustível" name="combustivel">
                        <input type="number" placeholder="Km" name="km">
                        <input type="text" placeholder="Final da placa" name="final-placa">
                        <input type="text" placeholder="Cor" name="cor">
                        <input type="text" placeholder="Único dono" name="unico-dono">
                        <input type="number" placeholder="Quantidade de portas" name="quant-portas">
                        <input type="text" placeholder="Opcionais (separar por /)" name="opcionais">
                        <input type="text" placeholder="Descrição" name="descricao">
                        <select name="destaque">
                            <option value="0">Não destacar</option>
                            <option value="1">Destacar</option>
                        </select>
                        <input type="file" placeholder="Fotos" name="fotos[]" multiple>
                        <div class="contSubmit">
                            <input type="submit" value="Adicionar" name="addVeic">
                        </div>
                    </form>
                </div>
                <div class="contListaVeiculos">
                    <h2>Lista de Veículos</h2>
                    <?php 
                        if(count($listaVeiculos) == 0){
                    ?>
                            <div class="avisoSemVeic">Não existe veículo cadastrado.</div>
                    <?php
                        }else{
                    ?>
                    <table>
                        <tr>
                            <th>Marca - Modelo</th>
                            <th>Ano</th>
                            <th>Cor</th>
                            <th>Final da placa</th>
                            <th>Valor</th>
                            <th>Destaque</th>
                            <th></th>
                        </tr>
                        <?php 
                            foreach($listaVeiculos as $key => $value){
                        ?>
                        <tr>
                            <td><?= $value['marca-modelo'] ?></td>
                            <td><?= $value['ano'] ?></td>
                            <td><?= $value['cor'] ?></td>
                            <td><?= $value['final-placa'] ?></td>
                            <td><?= 'R$ '.$value['valor'] ?></td>
                            <td>
                                <?php 
                                    $id = $value['id'];
                                    if($value['destaque'] != '0')
                                        $valDest = 0;
                                    else
                                        $valDest = 1;
                                ?>
                                <a href="<?= ROOT_PATH_PAINEL."?id=$id&destaque=$valDest" ?>" class="btDestaque">
                                    <?php
                                        if($value['destaque'] != '0'){
                                    ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="14" width="12.25" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="green" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                                    <?php
                                        }
                                    ?>
                                </a>
                            </td>
                            <td class="colBt">
                                <a href="<?= ROOT_PATH.'anuncio?id='.$value['id'] ?>" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#2271b1" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
                                </a>
                                <!-- <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" viewBox="0 0 512 512"> --><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><!-- <path fill="#B197FC" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>
                                </a> -->
                                <a href="<?= ROOT_PATH_PAINEL.'?delVeiculo='.$value['id'] ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="14" width="12.25" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="red" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                                </a>
                            </td>
                        </tr>
                        <?php 
                            }
                        ?>
                    </table>
                    <?php 
                        }
                    ?>
                </div>
            </div>