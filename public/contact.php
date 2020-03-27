<?php

/* if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $errors = [];

    foreach ($_POST as $key => $value) {
        $data[$key] = trim($value);
        $data = htmlentities($data);
    }

        if (empty($data["lastname"])) {
            $errors['nomreq'] = "Votre nom est requis";
        }

        if (empty(strlen($data['lastname'])) > 255) {
                $errors[] = "Ne sont autorisés que des lettres et des espaces :)";
            } else {
                echo '';
        }
} */
?>

<h2>Contactez-moi :)</h2>

<h3>Via ce formulaire...</h3>

<div>
    <form id="form" action="" method="post">
        <div id="nomprenom">
            <div class="form">
                <label for="nom"> Nom </label>
                <input type="text"  name="lastname" required placeholder="John" >
                <span> <?php if (!empty($errors['nomreq'])) : ?>
                    <?php echo $errors['nomreq']; endif ?>
            </div>

            <div class="form">
                <label  for="prenom">Prénom </label>
                <input  type="text"  name="firstname" required placeholder="Doe" >
                
            </div>
        </div>

<div id="mailtel">
    <div class="form">
        <label  for="courriel">Mail </label>
        <input  type="email"  name="email" required placeholder="john.doe@gmail.com" >

        </span>
    </div>

    <div class="form">
        <label  for="phone"> Téléphone </label>
        <input  type="tel" name="phone" required placeholder="0601020304" >
        
    </div>
</div>


        <div class="form">
            <label  for="entreprise"> Raison sociale </label>
            <input value="" type="text" name="entreprise" required placeholder="Entreprise" >
            
        </div>

        <label> Sujet de votre message </label>
        <select name="subject" >
            <option value=""></option>
            <option value="info"> Demande d'informations</option>
            <option value="contact"> Prise de contact</option>
            <option value="proposition"> Proposition de poste</option>
            <option value="other"> Autre </option>
        </select>

        <div class="form">
            <label for="message"> Message </label>
            <textarea type="text" name="message" required placeholder="Dites moi tout :)" ></textarea>
        </div>

        <div  class="button">
            <button  type="submit" >Envoyer</button>
        </div>
    </form>

    <div>
        <h3>...ou via mes réseaux et adresses professionnels </h3>

        <div id="reseaux">
            <div id="github">
                <figure>
                    <img src="public/images/github.png" alt="Logo Github avec lien vers profil">
                    <figcaption>Malyadev248</figcaption>
                </figure>

            </div>

            <div id="linkedin">
                <figure>
                    <a href="https://www.linkedin.com/in/yannice-maladin-7a89b0161/" target="_blank">
                    <img src="public/images/linkedin.png" alt="Logo avec lien ve Linkedin">
                    <figcaption>Maladin Yannice</figcaption>
                    </a>
                </figure>
            </div>


            <div id="gmail">
                <figure>
                    <img src="public/images/gmail.png" alt="Logo Gmail avec adresse mail">
                    <figcaption>malyadev248@gmail.com</figcaption>
                </figure>
            </div>
        </div>
    </div>
</div>

