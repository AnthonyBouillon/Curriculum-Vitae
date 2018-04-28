<?php
include_once '../Controllers/contact-controller.php';
include_once 'header.php';
?>
        <section> 
            <div class="row">
                <div>
                    <h2 class="center-align">Contact</h2>
                </div>
            </div>
            <div class="row">
                <form method="POST" class="col xl5 push-xl1 test">
                    <h3 class="center-align">Formulaire de contact</h3>                  
                    <div class="row">
                        <div class="input-field col s12 xl6">
                            <input placeholder="Ecrivez votre nom" id="name" type="text" />
                            <label for="name">Nom</label>
                            <span id="text_name"></span>
                        </div>
                        <div class="input-field col s12 xl6">
                            <input placeholder="Ecrivez votre prénom" id="first_name" type="text" name="first_name" />
                            <label for="first_name">Prénom</label>
                            <span id="text_first_name"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 xl6">
                            <input placeholder="Ecrivez votre adresse e-mail" id="mail" type="email" />
                            <label for="email">E-mail</label>
                            <span id="text_mail"></span>
                        </div>
                        <div class="input-field col s12 xl6">
                            <input placeholder="Ecrivez la raison de votre message " id="subject" type="text" />
                            <label for="subject">Sujet</label>
                            <span id="text_subject"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea placeholder="Ecrivez votre message" id="text" class="materialize-textarea"></textarea>
                            <label for="text">Message</label>
                            <span id="text_message"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light" type="submit" name="submit_mail" id="submit_mail">Envoyez
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
                <aside class="col xl4 push-xl2">
                    <h3 id="lien"></h3>
                    <p id="lien2"></p>
                </aside>
            </div>
        </section>

 
<form method="post" id="theform" action="">
   <input name="nom" id="nom" type="text"><br />
   <input type="submit" name="valider" value="Valider" id="tester" onClick="checkForm()" />
   <span id="namee"></span>
</form>
<script type="text/javascript">
    document.getElementById('tester').type="button";
  function checkForm(){
    if(document.getElementById('nom').value === ""){
      document.getElementById('namee').innerHTML='Vous devez indiquer votre nom !';
      return false;
    }else{
      document.getElementById('theform').submit();
    }
  }
</script>
<?php include_once 'footer.php'; ?>



