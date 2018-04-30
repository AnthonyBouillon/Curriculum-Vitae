<?php

include_once '../Controllers/contact-controller.php';
include_once 'header.php';
?>
<section> 
    <div class="row">

            <form method="POST" class="col xl5 push-xl1 test contact-block">
                <h2 class="center-align titleStyle">Formulaire de contact</h2>  
                
                <div class="row">
                    <div class="input-field col s12 xl6">
                        <input placeholder="Ecrivez votre nom" id="name" type="text" />
                        <label for="name" class="bold label">Nom</label>
                        <span id="text_name"></span>
                    </div>
                    
                    <div class="input-field col s12 xl6">
                        <input placeholder="Ecrivez votre prénom" id="first_name" type="text" name="first_name" />
                        <label for="first_name" class="bold label">Prénom</label>
                        <span id="text_first_name"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 xl6">
                        <input placeholder="Ecrivez votre adresse e-mail" id="mail" type="email" />
                        <label for="email" class="bold label">E-mail</label>
                        <span id="text_mail"></span>
                    </div>
                    
                    <div class="input-field col s12 xl6">
                        <input placeholder="Ecrivez la raison de votre message " id="subject" type="text" />
                        <label for="subject" class="bold label">Sujet</label>
                        <span id="text_subject"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                        <textarea placeholder="Ecrivez votre message" id="text" class="materialize-textarea"></textarea>
                        <label for="text" class="bold label">Message</label>
                        <span id="text_message"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <button class="btn waves-effect waves-light bold" type="submit" name="submit_mail" id="submit_mail">Envoyez
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>

        <aside class="col xl4 push-xl2 contact-block">
            <h2 id="lien" class="titleStyle"></h2>
            <p id="lien2"></p>
        </aside>
    </div>
</section>
<?php include_once 'footer.php'; ?>



