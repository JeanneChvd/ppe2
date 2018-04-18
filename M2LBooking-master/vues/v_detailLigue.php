<div class="container" role="main">

    <p class="bg-success">
        Informations sur la ligue <?php echo $laLigue['nomLigue'] ?>
    </p>


    <ul>

        <div id="list-example" class="list-group">
            <li class="list-group-item">
                Adresse : <?php echo $laLigue['adrLigue']." ".$laLigue['cpLigue']." ".$laLigue['villeLigue'] ?>
            </li>

            <li class="list-group-item">
                Contact : <?php echo $laLigue['emailLigue'] ?>
            </li>

            <li class="list-group-item">
                Site web : <?php echo $laLigue['urlLigue'] ?>
            </li>


        </div>
    </ul>

    <p class="bg-warning">
        Informations sur les membres
    </p>
    <ul>


    <?php
    foreach ($lesMembres as $unMembre) {
        $nomMembre = $unMembre['nomMembre'];
        $prenomMembre = $unMembre['prenomMembre'];
        $mailMembre = $unMembre['mailMembre'];
        $telMembre = $unMembre['telMembre'];
        $libelleStatut = $unMembre['libelleStatut'];

        ?>
        <li class="list-group-item">
            <?php echo $nomMembre ?>
            <?php echo $prenomMembre ?>
            :
            Mail : <?php echo $mailMembre ?>
            Téléphone : <?php echo $telMembre ?>
            Statut : <?php echo $libelleStatut ?>
        </li>

        <?php
    }
    ?>

    </ul>
</div>
