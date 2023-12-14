<section class="cards">
    <?php foreach ($article as $article) : ?>

        <li class="card">
        <a href="<?= $view->path('article', [$article->id]); ?>">
                <h2 class="title"><?= $article->title ?></h2>
            </a>
            <h2><?= $article->content?></h2>

            <p class="author"><?= $user->findById($article->author, 'id')->firstname ?></p>
            <p class="author"><?= $user->findById($article->author, 'id')->lastname ?></p>
            <p class="date">Crée le : <?= $article->createdAt ?></p>
        </li>

    <?php endforeach; ?>
</section>