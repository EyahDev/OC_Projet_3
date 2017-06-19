<?php $this->titre  = "Jean Forteroche - Gerer les articles"; ?>

<?php include 'Vue/nav.php'?>

<section class="main clearfix">
    <section class="top" style="background: url(Contenu/img/Design-tips-ebook-1-1032x581.png), no-repeat, center, fixed; background-size: cover">
        <div class="wrapper content_header clearfix infoCategorie">
            <div class="work_nav">
                <ul class="btn clearfix">
                    <li><a href="admin" class="previous" data-title="Retour"></a></li>
                </ul>
            </div><!-- end work_nav -->
            <h1 class="title">Gerer les articles</h1>
        </div>
    </section><!-- end top -->

    <section class="wrapper">
        <div class="content" style="margin-right: auto; margin-left: auto; text-align: center">
            <?php if ($recupBillets->rowCount()) : ?>
            <h3>Articles publiés</h3>
            <?= $messageConfirmation?>
                <div id="demo">
                    <!-- Responsive table starts here -->
                    <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
                    <div class="table-responsive-vertical shadow-z-1">
                        <!-- Table starts here -->
                        <table id="table" class="table table-hover">
                            <thead>
                            <tr>
                                <th>Titre de l'article</th>
                                <th>Date de publication</th>
                                <th>Catégorie</th>
                                <th>Commentaires</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($recupBillets AS $affichageBillet) : ?>
                                <tr>
                                    <td data-title="Titre de l'article"><?= $this->nettoyageFailles($affichageBillet['titre']); ?></td>
                                    <td data-title="Date de publication"><time><?= $affichageBillet['billet_date']?></time></td>
                                    <td data-title="Catégorie"><?= $affichageBillet['categorie']?></td>
                                    <td data-title="Commentaires"><?= $affichageBillet['nbBillet']?></td>
                                    <td data-title="Action">
                                        <a href="<?= "gestionbillets/modification/" . $affichageBillet['id'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Modifier</a> /
                                        <a href="<?= "gestionbillets/suppression/" . $affichageBillet['id'] ?>" style="color: red;"><i class="fa fa-times" aria-hidden="true"></i> Supprimer</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php else : ?>
                <p>Aucun articles n'a été publiés</p>
            <?php endif; ?>
        </div><!-- end content -->
    </section>

</section><!-- end main -->