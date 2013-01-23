<section class="content">
    <div id="formulaireConnex">

        <h2>Connexion</h2>

        <?php echo form_open('connex/login', array('method' => 'post')); ?>
        <div class="champ">
            <?php echo form_label('Utilisateur :', 'nameUser'); ?>
            <?php
                $user = array('id' => 'user', 'value' => '', 'name' => "user", 'placeholder' => 'Nom d\'utilisateur');
                echo form_input($user);
            ?>
        </div>
        <div class="champ">
            <?php echo form_label('Mot de passe :', 'password'); ?>
            <?php
                $pass = array('id' => 'passwordConnex', 'value' => '', 'name' => 'password', 'placeholder' => 'Mot de passe');
                echo form_password($pass);
            ?>
        </div>
        <div class="champ">
            <?php
                $subm = array('id' => 'submConnex', 'value' => 'Connexion');
                echo form_submit($subm);
            ?>
        </div>
        <?php echo form_close(); ?>

    </div>

    <div id="formulaireInscription">

        <h2>Inscription</h2>

        <?php echo form_open('connex/inscription', array('method' => 'post')); ?>
        <div class="champ">
            <?php echo form_label('Nom d\'utilisateur :', 'userInsc'); ?>
            <?php
                $userInsc = array('id' => 'userInsc', 'value' => '', 'name' => 'userInscI', 'placeholder' => 'Entrez un nom d\'utilisateur');
                echo form_input($userInsc);
            ?>
        </div>
        <div class="champ">
            <?php echo form_label('Mot de passe :', 'passwordInsc1'); ?>
            <?php
                $passInsc1 = array('id' => 'passwordInsc1', 'value' => '', 'name' => 'passwordInscI1', 'placeholder' => 'Entrez un mot de passe');
                echo form_password($passInsc1);
            ?>
        </div>
        <div class="champ">
            <?php echo form_label('Confirmez le mot de passe :', 'passwordInsc2'); ?>
            <?php
                $passInsc2 = array('id' => 'passwordInsc2', 'value' => '', 'name' => 'passwordInscI2', 'placeholder' => 'Confirmez votre mot de passe');
                echo form_password($passInsc2);
            ?>
        </div>
        <div class="champ">
            <?php
                $submInsc = array('id' => 'submInsc', 'name' => 'submit', 'value' => 'S\'inscrire');
                echo form_submit($submInsc);
            ?>
        </div>
        <?php echo form_close(); ?>

    </div>
</section>


