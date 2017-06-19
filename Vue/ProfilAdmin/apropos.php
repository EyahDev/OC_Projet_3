<?php $this->titre = "Jean Forteroche - Nouvel article"; ?>

<?php include 'Vue/nav.php'?>

<section class="main clearfix">
    <section class="top" style="background: url(Contenu/img/Design-tips-ebook-1-1032x581.png), no-repeat, center, fixed; background-size: cover">
        <div class="wrapper content_header clearfix ">
            <div class="work_nav">

                <ul class="btn clearfix">
                    <li><a href="profiladmin" class="previous" data-title="Retour"></a></li>
                    <li><a href="admin" class="grid" data-title="Administration"></a></li>
                </ul>

            </div><!-- end work_nav -->
            <h1 class="title">Rédaction de la section "A propos"</h1>
        </div>
    </section><!-- end top -->

    <section class="wrapper">
        <div class="content" style="margin-right: auto; margin-left: auto;">
            <form action="profiladmin/publierApropos" method="POST">
                <label for="URLauteur">URL de l'image de présentation de la catatégorie<br/>
                    <strong>Attention : </strong> l'image doit avoir une taille d'environ <strong>466x466px</strong> sous peine d'avoir des problèmes d'affichage.<br/>
                </label>
                <input type="text" id="URLauteur" name="URLauteur" value="<?= ($infoUtilisateur['url_img_apropos'] == 'Contenu/img/default/user_default.png')? '' : $infoUtilisateur['url_img_apropos'] ?>" placeholder="Une image par défaut sera généré si vous n'en avez pas" />
                <label for="aProposRedac">A propos</label>
                <textarea class="tinyMCE" id="aProposRedac" name="contenuApropos" style="height: 500px"><?= $infoUtilisateur['apropos']?></textarea>
                <input type="hidden" name="idUtilisateur" value="<?= $infoUtilisateur['id']?>">
                <button style="width: 80px" type="submit">Publier</button>
            </form>
        </div><!-- end content -->
    </section>
</section><!-- end main -->