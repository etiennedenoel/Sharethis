<section class="content">
    <article class='updating'>
        <?php echo form_open('curling/modif'); ?>
            <img src="<?php echo($img); ?>" alt="Image du site">
            <section class="contenuArticle">

                <div class="champ">
                    <label for="title">titre</label>
                    <input type="text" name="titre" value="<?php echo $titre ?>"/>
                </div>

                <div class="champ">
                    <label for="lien">lien</label>
                    <input type="text" name="lien" value="<?php echo $lien ?>"/>
                </div>


            </section>
            <div class="champ">
                <label class='labelDesc' for="description">Description</label>
                <textarea name="description" /><?php echo $description ?> </textarea>
            </div>

            <input type="hidden" name="img" value="<?php echo $img ?>"/><br/>

            <input type="hidden" value="<?php echo $id ?>" name="id" />
            <input class="modifier" type="submit" value="Modifier" />
        <?php echo form_close(); ?>
    </article>
</section>
