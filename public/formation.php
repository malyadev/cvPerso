<section id='formation'>
    <h2>Formation</h2>
    <?php


$formations = [
    'Développeur Web et Mobile' => ['Wild Code School Orléans', 'Mars - Aout 2020'],
    'Développeur Web' => ['Udemy', 'Juillet - Aout 2019'],
    'Licence Droit Economie Gestion' => ['CNAM Orléans', 'Octobre 2018 - Mars 2020'],];
?>


    <div class="formations">

        <?php foreach($formations as $formation => $detail) : ?>
        <div>
            <h3><?= $formation ?></h3>
            <ul>
                <li>
                    <?= $detail[0]?>
                </li>
                <li>
                    <?= $detail[1]?>
                </li>
            </ul>
        </div>
        <?php endforeach; ?>
    </div>




