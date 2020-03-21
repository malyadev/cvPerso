<section id="experience">
    <h2>Expérience</h2>

    <ul>
        <?php
        $projets = [
            "CvBatman" => "Réalisation du CV d'un célèbre personnage de Comics en reconversionprofessionnelle. Projet réalisé dans le cadre de ma formation à la Wild Code School",
            "Les protéines en poudre" => "Les protéines en poudre sont des produits dopants... vraiment ?",
            "Agence de voyages" => "Site vitrine d'une agence de voyage réalisé en parallèle de ma formation sur Udemy"
        ];

        foreach($projets as $projet => $description) { ?>

            <li>
                <h3 class=""> <?= $projet ?> </h3>
                <p class=""> <?= $description ?> </p>
            </li>
        <?php }?>
    </ul>

</section>