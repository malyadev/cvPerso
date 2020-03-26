<?php

$user_lastnameErr = $user_firstnameErr = $emailErr = $phoneErr = $subject = $user_messageErr = $entrepriseErr = "";
$user_lastname = $user_firstname = $email = $phone = $subjectErr= $user_message = $entreprise = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["user_lastname"])) {
        $user_lastnameErr = "Votre nom est requis";
    } else {
        $user_lastname = test_input($_POST["user_lastname"]);
        if (!preg_match("/^[a-zA-Z ]$/", $user_lastname)) {
            $user_lastnameErr = "Ne sont autorisés que des lettres et des espaces :)";
        }
    }

    if (empty($_POST["user_firstname"])) {
        $user_firstnameErr = "Votre prénom est requis";
    } else {
        $user_firstname = test_input($_POST["user_firstname"]);
        if (!preg_match("/^[a-zA-Z ]$/", $user_firstname)) {
            $user_firstnameErr = "Ne sont autorisés que des lettres et des espaces :)";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Votre adresse mail est requise";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Votre adresse mail n'est pas au bon format";
        }
    }

    if (empty($_POST["phone"])) {
        $phoneErr = "Votre numéro de téléphone est requis";
    } else {
        $phone = test_input($_POST["phone"]);
    }

    if (!empty($_POST["entreprise"])) {
        $entreprise = test_input($_POST["entreprise"]);
        if (!preg_match("/^[a-zA-Z ]$/", $user_lastname)) {
            $entrepriseErr = "Ne sont autorisés que des lettres et des espaces :)";
        }
    }

    if (empty($_POST["subject"])) {
        $subjectErr = "Vous devez choisir un sujet";
    } else {
        $subject = test_input($_POST["subject"]);
        if (!preg_match("/^[a-zA-Z ]$/", $subject)) {
            $subjectErr = "Ne sont autorisés que des lettres et des espaces :)";
        }
    }

    if (empty($_POST["user_message"])) {
        $user_messageErr = "Un message est requis pour envoyer le formulaire";
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Contactez-moi :)</h2>

<h3>Via ce formulaire...</h3>

<div>
    <form id="form" action="returncontact.php" method="post">
        <div id="nomprenom">
            <div class="form">
                <label  id ="nomg" for="nom"> Nom </label>
                <input  id="nomd" type="text"  name="user_lastname" required>
                <span><?php echo $user_lastnameErr;?></span>
            </div>

            <div class="form">
                <label  for="prenom">Prénom </label>
                <input  type="text"  name="user_firstname" required>
                <span> <?php echo $user_firstnameErr;?></span>
            </div>
        </div>

<div id="mailtel">
    <div class="form">
        <label  for="courriel">Mail </label>
        <input  type="email"  name="email" required>
        <span> <?php echo $emailErr;?></span>
    </div>

    <div class="form">
        <label  for="phone"> Téléphone </label>
        <input  type="tel" name="phone" required>
        <span> <?php echo $phoneErr;?></span>
    </div>
</div>


        <div class="form">
            <label  for="entreprise"> Votre raison sociale </label>
            <input  type="text" name="entreprise" required>
            <span> <?php echo $entrepriseErr;?></span>
        </div>

        <label> Sujet de votre message </label>
        <select name="subject" required>
            <span><?php echo $subjectErr;?></span>
            <option value=""></option>
            <option name="info"> Demande d'informations</option>
            <option name="contact"> Prise de contact</option>
            <option name="proposition"> Proposition de poste</option>
        </select>

        <div class="form">
            <label for="message"> Message :</label>
            <textarea type="text" name="user_message" required></textarea>
            <span><?php echo $user_messageErr;?></span>

        </div>

        <div  class="button">
            <button  type="submit" required>Envoyer</button>
        </div>
    </form>
</div>

