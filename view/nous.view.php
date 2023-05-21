<main id="nous">
    <div class="page-content">
        <h1 class="grostitre">À Postes Égaux, l'association</h1>
        <p class="introNous">À Postes Égaux souhaite mettre en place des interventions en entreprises pour sensibiliser aux inégalités et discriminations entre les genres. En effet, beaucoup persistent toujours dans le monde du travail, et très peu sont connues, ou simplement écoutées. </p><img src="public/images/common/LogoAnouar.png" class="logo2" alt="Logo de notre association A Postes Egaux">


        <h2 class="grostitre2">Prochains évènements</h2>
        <div class="event-block">
            <h3 class="grostitre3">8 mars 2023 - IUT Sénart-Fontainebleau</h3>
            <div class="event-section">
                <img class="event-img" src="public/images/common/batH.png" class="batH">
                <p class="event-desc">Rendez-vous le 8 mars, journée internationale des droits des femmes, au 240 rue de la Motte à Moissy Cramayel pour une présentation de notre association, avec notre jeu de rôle À Postes Égaux auquel vous pourrez jouer gratuitement afin de vous faire une idée sur les inégalités de genre dans le monde du travail</p>
                <p class="event-desc">L'ensemble des intervenants seront présents pour accompagner 200 étudiants.</p>
                <div class="clear"></div>
            </div>
        </div>
        <?php foreach($event_data as $event):?>
            <h3 class="grostitre3"><?=$event['date']['full_txt']?> - <?=$event['lieu']?></h3>
            <div class="event-block">
                <div class="event-section">
                    <img class="event-img" src="public/images/batiments/<?=$event['image']?>"/>
                    <p class="event-desc"><?=$event['description']?></p>
                    <p class="event-desc">
                        Seront présents à cette intervention :
                        <ul>
                        <?php foreach($event['intervenants'] as $interv) {
                            echo '<li>', $interv['nom'].', '.$interv['fonction'], '</li>';
                        }?>
                        </ul>
                        <i><?=$event['participants']?> <?=$event['public']?> sont attendus.</i>
                    </p>
                </div>
                <div class="clear"></div>
            </div>
        <?php endforeach?>
        <p class="visite">Vous souhaitez que votre établissement fasse partie des prochains à recevoir notre visite ? Pour cela, <span><a href="NosReseaux.html">contactez-nous</a></span> afin que nous puissions programmer une intervention !</p>
    </div>
</main>