<?php
include_once '../Controllers/contact-controller.php';
$body = 'body_contact';
include_once 'header.php';
?>
<section> 
    <div class="row">
        <form method="POST" class="col s12 m6 l6 offset-l1 xl5 push-xl1 contact-block">
            <h2 class="center-align titleStyle">Formulaire de contact</h2>  
            <div class="row">
                <div class="input-field col s12 xl6">
                    <input type="text" placeholder="Ecrivez votre nom" id="name" name="name" />
                    <label for="name" class="bold label">Nom</label>
                    <span id="text_name"></span>
                </div>            
                <div class="input-field col s12 xl6">
                    <input type="text" placeholder="Ecrivez votre prénom" id="first_name" name="first_name" />
                    <label for="first_name" class="bold label">Prénom</label>
                    <span id="text_first_name"></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 xl6">
                    <input type="email" placeholder="Ecrivez votre adresse e-mail" id="mail" name="mail" />
                    <label for="email" class="bold label">E-mail</label>
                    <span id="text_mail"></span>
                </div>    
                <div class="input-field col s12 xl6">
                    <input type="text" placeholder="Ecrivez la raison de votre message" id="subject" name="subject" />
                    <label for="subject" class="bold label">Sujet</label>
                    <span id="text_subject"></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 xl12">
                    <i class="material-icons prefix">mode_edit</i>
                    <textarea placeholder="Ecrivez votre message" class="materialize-textarea" id="text" name="text"></textarea>
                    <label for="text" class="bold label">Message</label>
                    <span id="text_message"></span>
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
        <aside class="col s12 m6 l4 offset-l1 xl4 push-xl2 contact-block">
            <h2 class="titleStyle" id="title_contact"></h2>
            <p id="para_contact"></p>
        </aside>
    </div>
</section>
<?php include_once 'footer.php'; ?>