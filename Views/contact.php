<?php
include_once '../Models/database.php';
include_once '../Models/visitors.php';
include_once '../Controllers/contact-controller.php';
$title = 'Contactez-moi';
$body = 'body_contact';
include_once 'header.php';
?>
<section> 
    <div class="row">
        <form method="POST" class="col s12 m5 l6 offset-l1 xl5 push-xl1 contact-block" onsubmit="return validate_Form()">
            <h2 class="center-align titleStyle title_form_contact">Formulaire de contact</h2>
            <?= !empty($success['send_mail']) ? '<div class="card-panel teal lighten-2 center-align">' . $success['send_mail'] . '</div>' : '' ?>
            <?= !empty($error['fail_mail']) ? '<div class="card-panel orange lighten-2 center-align">' . $error['fail_mail'] . '</div>' : '' ?>
            <div class="row"> 
                <div class="input-field col s12 xl6">
                    <i class="material-icons prefix">mode_edit</i>
                    <input type="text" placeholder="Ecrivez votre nom" id="name" name="name" onblur="form_name()" />
                    <label for="name" class="bold label">Nom <span class="text-red">*</span></label>
                    <span id="msg_name"></span>
                    <span class="text-red"><?= $error['name'] ?? '' ?></span>
                    <span class="text-red"><?= $error['name_regex'] ?? '' ?></span>
                </div>            
                <div class="input-field col s12 xl6">
                    <i class="material-icons prefix">mode_edit</i>
                    <input type="text" placeholder="Ecrivez votre prénom" id="first_name" name="first_name" onblur="form_first_name()" />
                    <label for="first_name" class="bold label">Prénom <span class="text-red">*</span></label>
                    <span id="msg_first_name"></span>
                    <span class="text-red"><?= $error['first_name'] ?? '' ?></span>
                    <span class="text-red"><?= $error['first_name_regex'] ?? '' ?></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 xl6">
                    <i class="material-icons prefix">mode_edit</i>
                    <input type="email" placeholder="Ecrivez votre adresse e-mail" id="mail" name="mail" onblur="form_mail()" />
                    <label for="mail" class="bold label">E-mail <span class="text-red">*</span></label>
                    <span id="msg_mail"></span>
                    <span class="text-red"><?= $error['mail'] ?? '' ?></span>
                    <span class="text-red"><?= $error['mail_regex'] ?? '' ?></span>
                </div>    
                <div class="input-field col s12 xl6">
                    <i class="material-icons prefix">mode_edit</i>
                    <input type="text" placeholder="Ecrivez la raison de votre message" id="subject" name="subject" onblur="form_subject()" />
                    <label for="subject" class="bold label">Sujet <span class="text-red">*</span></label>
                    <span id="msg_subject"></span>
                    <span class="text-red"><?= $error['subject'] ?? '' ?></span>
                    <span class="text-red"><?= $error['subject_regex'] ?? '' ?></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 xl12">
                    <i class="material-icons prefix">mode_edit</i>
                    <textarea placeholder="Ecrivez votre message" class="materialize-textarea" id="text" name="text" onblur="form_text()"></textarea>
                    <label for="text" class="bold label">Message <span class="text-red">*</span></label>
                    <span id="msg_message"></span>
                    <span class="text-red"><?= $error['text'] ?? '' ?></span>
                    <span class="text-red"><?= $error['text_regex'] ?? '' ?></span>
                </div>
            </div>
            <p><span class="text-red">*</span>  Champs obligatoires</p>
            <div class="row">
                <div class="input-field col s12 xl12">
                    <button type="submit" class="btn waves-effect waves-light bold"  id="submit_mail" name="submit_mail">Envoyez
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </form>
        <aside class="col s12 m4 offset-m1 l4 offset-l1 xl4 push-xl2 contact-block bloc-info">
            <h2 class="titleStyle title_info_more" id="title_contact"></h2>
            <p id="para_contact"></p>
        </aside>
    </div>
</section>
<?php include_once 'footer.php'; ?>