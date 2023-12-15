

<section>

    <form method="POST" style="max-width: 400px; margin: auto;">
        <!-- ... autres champs du formulaire ... -->
        <div>
            <button type="submit" name="submitted" class="envoyer-btn"><h3>Ajout d'un article</h3></button>
        </div>
    <form method="POST" style="max-width: 400px; margin: auto;">
        <div style="margin-bottom: 10px;">
            <label for="titre" style="display: block; margin-bottom: 5px; font-weight: bold;">Titre</label>
            <input type="text" id="titre" name="titre" style="width: 100%; padding: 8px; box-sizing: border-box;" required>
            <span style="color: red; font-size: 12px;"><?=$formAdd->error('titre')?></span>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="contenu" style="display: block; margin-bottom: 5px; font-weight: bold;">Contenu</label>
            <textarea id="contenu" name="contenu" style="width: 100%; height: 100px; padding: 8px; box-sizing: border-box;" required></textarea>
            <span style="color: red; font-size: 12px;"><?=$formAdd->error('contenu')?></span>
        </div>

        <?= $formAdd->submit('submitted', 'envoyer', ['class' => 'envoyer-btn']) ?>
    </form>
</section>

