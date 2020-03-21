<section id="formation">
    <h2>Formation</h2>

    <ul>
        <?php
        $formations = [
            "Développeur Web et Mobile" => "Wild Code School Orléans",
            "Développeur Web" => "Udemy",
            "Licence Droit Economie Gestion" => "Cnam Orléans"
        ];

        foreach($formations as $formation => $lieu) { ?>

        <li>
            <h3 class=""> <?= $formation ?> </h3>
            <p class=""> <?= $lieu ?> </p>
        </li>
        <?php };?>
    </ul>

</section>
