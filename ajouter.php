<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php



$nom = $note = $img = $commentaire = "";
$nomErreur = $imgErreur = $noteErreur = $commentaireErreur =  "";
$erreur = false;

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    //CAS #2
    //On vient de recevoir le formulaire
    echo "<h1>POST == TRUE </h1>";
    
    if(empty($_POST["nom"])){
        $nomErreur = "Le nom ne peut pas être vide";
        $erreur  = true;
    }
    else{
        $nom = trojan($_POST["nom"]);
    }

    if(empty($_POST["note"])){
        $noteErreur = "La note es vide";
        $erreur  = true;
    }
    else{
        $img = trojan($_POST["note"]);
    }


    if(empty($_POST["img"])){
        $imgErreur = "L'image ne peut pas être vide";
        $erreur  = true;
    }
    else{
        $img = trojan($_POST["img"]);
    }

    if(empty($_POST["commentaire"])){
        $commentaireErreur = "Le commentaire ne peut pas être vide";
        $erreur  = true;
    }
    else{
        $commentaire = trojan($_POST["commentaire"]);
    }



}
?>

    <h1>Formulaire</h1>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="post" action="index.php">

                
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" name="nom" class="form.control" placeholder="name" value="<?php echo $nom ?>" >   
                    </div>

                    <div class="form-group">
                        <label for="">Note</label>
                        <input type="text" name="mdp" class="form.control" placeholder="<?php echo $imgErreur ?>" value="<?php echo $img ?>" >   
                    </div>


                    <div class="form-group">
                        <label for="">img</label>
                        <input type="text" name="email" class="form.control" placeholder="name" value="<?php echo $commentaire ?>" >   
                    </div>

                    <div class="form-group">
                        <label for="">commentaire</label>
                        <input type="text" name="avatar" class="form.control" placeholder="name" value="<?php echo $note ?>" >   
                    </div>






                    <div class="form-group">
                        <input type="submit">   
                    </div>

                </form>
            </div>
        </div>
    </div>








        <?php
                    //AFFICHER LE RÉSULTAT DE MON FORM
                
                if ($_SERVER['REQUEST_METHOD'] != "POST" || $erreur == true){
                    // Cas #1 On veut afficher le formulaire
                    echo "<h1>On affiche le formulaire </h1>";
                }


        function trojan($data){
            $data = trim($data); //Enleve les caractères invisibles
            $data = addslashes($data); //Mets des backslashs devant les ' et les  "
            $data = htmlspecialchars($data); // Remplace les caractères spéciaux par leurs symboles comme ­< devient &lt;
            
            return $data;
        }

    ?>

    
    
</body>
</html>