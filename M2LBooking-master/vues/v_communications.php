<div class="container" role="main">
    <h4 class="mt-5">Informations sur les communications</h4>

    <h5>Impressions</h5>

    Les   ligues   disposent   de   la   possibilité   d'imprimer   sur   des   ressources   d'impression
    numériques   connectées   situées   dans   le   local   reprographie   du   rez-de-chaussée  dont
    l'usage fait l'objet d'une facturation à prix coûtant. Un système de comptage situé sur le
    serveur d'impression permet au CROSL d’effectuer une facturation mensuelle auprès des
    ligues.



    <?php
        foreach ($lesImpressions as $uneImpression){
            $libelle = $uneImpression['libelle'];
            $pageMinute = $uneImpression['pageMinute'];

    ?>

    <p>

        Il y a <?php echo $libelle?> qui fait <?php echo $pageMinute?>
    </p>

    <?php
        }
        ?>



    <h5>Affranchissements disponibles</h5>
    <p>
        Une   machine   à   affranchir   permet   un  affranchissement  rapide   et   en   nombre.   Cette
        prestation est facturée aux ligues au coût de l'affranchissement. Chaque mois, on relie la
        machine à affranchir à une imprimante pour obtenir une liste de codes de gestion
        correspondant aux ligues associés à une quantité et un type d'affranchissement. La prise
        en compte de ces informations permet au CROSL d'éditer des factures.
    </p>