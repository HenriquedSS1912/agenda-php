<?php
    include_once("temp/header.php");
?>

    <div class="container container-show" id="view-contact-container">
        
        <?php include_once("temp/backbtn.html");?>
        <h1 id="main-title"><?= $contact["name"]?></h1>
        <p class="bold ">Telefone: </p>
        <p><?= $contact["phone"]?></p>
        <p class="bold">Email: </p>
        <p><?= $contact["email"]?></p>
        <p class="bold">Observações: </p>
        <p><?= $contact["observations"]?></p>

    </div>

    <script class="fixed" src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    <script class="fixed" src="./temp/script.js"></script>
<?php
    include_once("temp/footer.php");
?>