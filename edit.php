<?php
    include_once("temp/header.php");
?>

    <div class="container container-edit">
        
        <div class="btn-back">
            <?php include_once("temp/backbtn.html");?>
        </div>
        <h1 id="main-title">Editar Contato</h1>
        <form id="create-form" action="config/process.php" method="POST">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $contact['id']?>">
            <div class="from-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" value="<?= $contact['name']?>" required>
            </div>
            <div class="from-group">
                <label for="phone">Telefone:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" value="<?= $contact['phone']?>" required>
            </div>
            <div class="from-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Digite o email"  value="<?= $contact['email']?>" required>
            </div>
            <div class="from-group">
                <label for="observations">Observações:</label>
                <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira as observaçoes" rows="3"> <?= $contact['observations']?> </textarea>
            </div>
            
            <button type="submit" class="btn btn-primary btn-register isolate">Atualizar</button>
        </form>
    </div>

    <script class="fixed" src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    <script class="fixed" src="./temp/script.js"></script>

<?php
    include_once("temp/footer.php");
?>