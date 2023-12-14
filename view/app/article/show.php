<li class="card">

    <h2 class="title"><?= $article->title ?></h2>

    <p class="author">Ecrit par : <?= $user->findById($article->author, 'id')->firstname ?></p>
    <p class="author"><?= $user->findById($article->author, 'id')->lastname ?></p>
    <p class="content"><?= $article->content ?></p>
</li>