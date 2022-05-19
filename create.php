<?php
    include_once("temp/header.php");
?>

    <div class="container container-add">
        <?php include_once("temp/dark.html");?>
        <h1 id="main-title">Criar Contato</h1>
        <form id="create-form" action="config/process.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="from-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
            </div>
            <div class="from-group">
                <label for="phone">Telefone:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" required>
            </div>
            <div class="from-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Digite o email" required>
            </div>
            <div class="from-group">
                <label for="observations">Observações:</label>
                <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira as observaçoes" rows="3"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary btn-register btn-lg float-right isolate">Cadastrar</button>
        </form>
    </div>

    <script class="fixed" src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    <script class="fixed" src="./temp/script.js"></script>
<?php
    include_once("temp/footer.php");
?>