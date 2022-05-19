<?php
    include_once("temp/header.php");
?>

    <div class="container">
        <?php if(isset($printMsg) && $printMsg != ''): ?>
            <p id="msg"><?= $printMsg ?></p>
        <?php endif;?>
        <?php include_once("temp/darkbtn.html");?>
        <h1 id="main-title">Minha Agenda</h1>
        <?php if(count($contacts) > 0): ?>
            <table class="table" id="contacts-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Email</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($contacts as $contact): ?>
                        <tr>
                            <td scope="row" class="bold"><?= $contact["id"]?></td>
                            <td scope="row"><?= $contact["name"]?></td>
                            <td scope="row"><?= $contact["phone"]?></td>
                            <td scope="row"><?= $contact["email"]?></td>
                            <td class="actions">
                                <a href="show.php?id=<?= $contact["id"]?>"><i class="fas fa-eye check-icon"></i></a>
                                <a href="edit.php?id=<?= $contact["id"]?>"><i class="far fa-edit edit-icon"></i></a>
                                <form class="delete-form" action="/config/process.php" method="POST">
                                    <input type="hidden" name="type" value="delete">
                                    <input type="hidden" name="id" value="<?= $contact["id"]?>">
                                    <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        <?php else:?>
            <p id="empty-list-text">Ainda não há contatos na sua agenda, <a href="create.php"> clique aqui para adicionar</a>.</p>
        <?php endif;?>
        
    </div>
    <script class="fixed" src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    <script class="fixed" src="./temp/script.js"></script>

<?php
    include_once("temp/footer.php");
?>

