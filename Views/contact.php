<?php
include_once '../Controllers/contact-controller.php';
$body = 'body_contact';
include_once 'header.php';
?>
<section> 
    <div class="row">
        <form method="POST" class="col s12 m6 l6 offset-l1 xl5 push-xl1 contact-block" onsubmit="return validate_Form()">
            <h2 class="center-align titleStyle">Formulaire de contact</h2>
            <p><span class="text-red">*</span>  Champs obligatoires</p>
            <div class="row">
                <div class="input-field col s12 xl6">
                    <input type="text" placeholder="Ecrivez votre nom" id="name" name="name" onblur="form_name()" />
                    <label for="name" class="bold label">Nom <span class="text-red">*</span></label>
                    <span id="error_name"></span>
                    <span><?= !empty($error['']) ? $error[''] : '' ?></span>
                    <span><?= !empty($error['']) ? $error[''] : '' ?></span>
                </div>            
                <div class="input-field col s12 xl6">
                    <input type="text" placeholder="Ecrivez votre prénom" id="first_name" name="first_name" onblur="form_first_name()" />
                    <label for="first_name" class="bold label">Prénom <span class="text-red">*</span></label>
                    <span id="error_first_name"></span>
                    <span><?= !empty($error['']) ? $error[''] : '' ?></span>
                    <span><?= !empty($error['']) ? $error[''] : '' ?></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 xl6">
                    <input type="email" placeholder="Ecrivez votre adresse e-mail" id="mail" name="mail" onblur="form_mail()" />
                    <label for="email" class="bold label">E-mail <span class="text-red">*</span></label>
                    <span id="error_mail"></span>
                    <span><?= !empty($error['']) ? $error[''] : '' ?></span>
                    <span><?= !empty($error['']) ? $error[''] : '' ?></span>
                </div>    
                <div class="input-field col s12 xl6">
                    <input type="text" placeholder="Ecrivez la raison de votre message" id="subject" name="subject" onblur="form_subject()" />
                    <label for="subject" class="bold label">Sujet <span class="text-red">*</span></label>
                    <span id="error_subject"></span>
                    <span><?= !empty($error['']) ? $error[''] : '' ?></span>
                    <span><?= !empty($error['']) ? $error[''] : '' ?></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 xl12">
                    <i class="material-icons prefix">mode_edit</i>
                    <textarea placeholder="Ecrivez votre message" class="materialize-textarea" id="text" name="text" onblur="form_text()"></textarea>
                    <label for="text" class="bold label">Message <span class="text-red">*</span></label>
                    <span id="error_message"></span>
                    <span><?= !empty($error['']) ? $error[''] : '' ?></span>
                    <span><?= !empty($error['']) ? $error[''] : '' ?></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 xl12">
                    <button type="submit" class="btn waves-effect waves-light bold"  id="submit_mail" name="submit_mail">Envoyez
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </form>
        <aside class="col s12 m6 l4 offset-l1 xl4 push-xl2 contact-block bloc-info">
            <h2 class="titleStyle" id="title_contact"></h2>
            <p id="para_contact"></p>
        </aside>
    </div>
</section>
<?php include_once 'footer.php'; ?>