<section id='formation'>
    <h2>Formation</h2>

    <?php
    $formations = [
        'Développeur Web et Mobile' => 'periodes' => 'durée''Mars 2020 - Aout 2020', 'Wild Code School Orléans',
        'Développeur Web' => 'Juillet - Aout 2019', 'Udemy',
        'Licence Droit Economie Gestion' => 'Octobre 2018 - Mars 2020', 'Cnam Orléans'
    ];

    foreach ($formations as $formation => $periode) { ?>
    <div>
        <section> <?= $formation . $periode ?> </section>
    </div>
    <?php } ?>