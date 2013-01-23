<section id="formShare">
    <?php echo form_open('curling/analyser'); ?>

    <?php echo form_input(array('id' => 'urlV', 'name' => 'url', 'placeholder' => 'Entrez une url')); ?>
    <div class="shareBottom">
        <?php echo form_submit(array('id' => 'verif', 'value' => 'Envoyer')); ?>
    </div>


    <?php echo form_close(); ?>
</section>
<section class="content">

    <?php foreach ($liens as $lien): ?>
        <article>
            <?php echo form_open('curling/lister'); ?>
                <input type="hidden" name="id" value="<?php echo $lien->id ?>" />
                <input type="hidden" name="url" value="<?php echo $lien->url ?>" />
                <input type="hidden" name="img" value="<?php echo $lien->src ?>" />
                <input type="hidden" name="desc" value="<?php echo $lien->desc ?>" />
                <input type="hidden" name="title" value="<?php echo $lien->title ?>" />
            <?php echo form_close(); ?>
            <div class="imageArticle">
                <?php  echo '<img src="' . $lien->src . '" />' ?>
            </div>
            <section class="parametres">
                <?php echo anchor('curling/supprimer/'.$lien->id, ' ', array( 'id' => $lien->id, 'class' => 'delete', 'title'=>'Supprimer ce message')) ?>
                <?php echo anchor('curling/preview/'.$lien->id, ' ', array('class' => 'update', 'title'=>'Modifier ce message')) ?>
            </section>
            <section class="contenuArticle">
                <h3>
                    <?php echo $lien->title ?>
                </h3>

                <p class="lien"> <?php echo ($lien->url) ?></p>
                <p><?php echo $lien->desc ?></p>
            </section>


        </article>
    <?php endforeach; ?>

</section>


