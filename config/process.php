<?php

    session_start();

    include_once("connect.php");
    include_once("url.php");

    $data = $_POST;

    //BANK MODIFICATIONS
    if(!empty($data)){


        // CREATE CONTACT
        if($data["type"] === "create"){
            $name = $data["name"];
            $phone = $data["phone"];
            $email = $data["email"];
            $observations = $data["observations"];

            $query = "INSERT INTO contacts (name, phone, email, observations) VALUES (:name, :phone, :email, :observations)";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":observations", $observations);

            try{
                
                $stmt->execute();
                $_SESSION["msg"] = "Contato criado com sucesso!";

            } catch(PDOException $e){
                //connection error
                $error = $e->getMessage();
                echo "Erro: $error";
            }
        } else if($data["type"] === "edit"){
                
            $name = $data["name"];
            $phone = $data["phone"];
            $email = $data["email"];
            $observations = $data["observations"];
            $id = $data["id"];

            $query = "UPDATE contacts SET name = :name, phone = :phone, email = :email, observations = :observations WHERE id = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":observations", $observations);
            $stmt->bindParam(":id", $id);

            try{
                $stmt->execute();
                $_SESSION["msg"] = "Contato atualizado com sucesso!";

            } catch(PDOException $e){
                //connection error
                $error = $e->getMessage();
                echo "Erro: $error";
            }

        } else if($data["type"] === "delete"){

            $id = $data["id"];

            $query = "DELETE FROM contacts WHERE id = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":id", $id);

            try{
                $stmt->execute();
                $_SESSION["msg"] = "Contato removido com sucesso!";

            } catch(PDOException $e){
                //connection error
                $error = $e->getMessage();
                echo "Erro: $error";
            }
        }

        // REDIRECT HOME
        header("Location:" . "../index.php");

    // SELECTION OF DATA
    }else{

        $id;

        if(!empty($_GET)){
            $id = $_GET["id"];
        }
        
        // Return one contact data
        if(!empty($id)){
    
            $query = "SELECT * FROM contacts WHERE id = :id";
    
            $stmt = $conn->prepare($query);
    
            $stmt->bindParam(":id", $id);
    
            $stmt->execute();
    
            $contact = $stmt->fetch();
    
        } else{
    
            // Return all contacts
            $contacts = [];
        
            $query = "SELECT * FROM contacts";
        
            $stmt = $conn->prepare($query);
        
            $stmt->execute();
        
            $contacts = $stmt->fetchAll();
        }
    }

    // CLOSE CONNECTION
    $conn = null;
?>
    