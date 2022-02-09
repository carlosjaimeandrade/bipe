<main>
    <div class="container">


        <div class="card mt-2">
            <div class="card-header">
                <h5>Localize os dados</h5>
            </div>
            <div class="card-body">
                <div class="simula-bipe">
                    <input type="text" placeholder="Entre com o codigo">
                    <input class="id_linha" type="text" placeholder="Entre com o id da linha ser inserido">
                    <button type="button" onclick="reqCod(event)">Bipe</button>
                </div>
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th scope="col">nome</th>
                            <th scope="col">modelo</th>
                            <th scope="col">id_linha</th>
                        </tr>
                    </thead>
                    <tbody class="inport">
                        <?php foreach ($params as $value) {
                        ?>
                            <tr>
                                <td><?php echo $value['codigo'] ?></td>
                                <td><?php echo $value['nome'] ?></td>
                                <td><?php echo $value['modelo'] ?></td>
                                <td><?php echo $value['id_linha'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
</main>


<script src="<?php echo BASEURL . "assets/js/api.js" ?>"></script>