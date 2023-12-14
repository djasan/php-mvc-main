

<h1 style ="text-align: center; font-size:33px; margin-top:100px;" ><?= $titreBlog?></h1>

<?php foreach($article as $article):?>
    <li><h2><?= $article->title?></h2>
    <p><?= $article->content?></p>
    </li>
    <?php endforeach;?>
    



