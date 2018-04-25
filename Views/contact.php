<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Contactez-moi</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css" />
        <link href="../Publics/LIB/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../Publics/CSS/main.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1>Curriculum Vitae | Développeur web junior | Full-stack</h1>
        </header>

        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo"><img class="responsive-img" src="http://eric.univ-lyon2.fr/~rabdesselam/fr/CV/MyCV.gif"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="sass.html">Accueil</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <li><a href="collapsible.html">Javascript</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <ul class="sidenav" id="mobile-demo">
                <li><a href="sass.html">Accueil</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">Javascript</a></li>
                <li><a href="mobile.html">Contact</a></li>
            </ul>
        </nav>
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
                        <div class="input-field col xl6">
                            <input placeholder="Ecrivez votre nom" id="first_name" type="text" class="validate">
                            <label for="first_name">Nom</label>
                        </div>
                        <div class="input-field col xl6">
                            <input placeholder="Ecrivez votre prénom" id="first_name" type="text" class="validate">
                            <label for="first_name">Prénom</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col xl6">
                            <input placeholder="Ecrivez votre adresse e-mail" id="first_name" type="text" class="validate">
                            <label for="first_name">E-mail</label>
                        </div>
                        <div class="input-field col xl6">
                            <input placeholder="Ecrivez la raison de votre message " id="first_name" type="text" class="validate">
                            <label for="first_name">Sujet</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea placeholder="Ecrivez votre message" id="icon_prefix2" class="materialize-textarea"></textarea>
                            <label for="icon_prefix2">Message</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Envoyez
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

        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h4 class="white-text">Anthony BOUILLON</h5>
                            <p class="grey-text text-lighten-4">Haut de france; Le Plessis-Brion; 60150</p>
                    </div>
                    <div class="col l4 offset-l2 s12 social-networks">
                        <a class="grey-text text-lighten-3" href="#!"><i class="fa fa-linkedin"></i> Linkedin</a><br/>
                        <a class="grey-text text-lighten-3" href="#!"><i class="fa fa-twitter"></i> Twitter</a><br/>
                        <a class="grey-text text-lighten-3" href="#!"><i class="fa fa-github" aria-hidden="true"></i> Github</a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
        <script src="../Publics/JS/main.js"></script>
        <script type='text/javascript'>
            var letexte2 = 'Après avoir cliqué sur "envoyez", je recevrez un e-mail de votre part, et je vous répondrez dès que je l\'aurais lu !';
            var letexte = "Informations complémentaires";
            var cmpt = 0;
            var cmpt2 = 0;

            function typewriter() {
                lelien = document.getElementById('lien');
                if (cmpt < letexte.length) {
                    courant = lelien.innerHTML.substring(0, lelien.innerHTML.length - 1);
                    courant += letexte.charAt(cmpt) + " ";
                    lelien.innerHTML = courant;
                }
                cmpt++;
                setTimeout("typewriter()", 80);
            }
            typewriter();

            function typess() {
                lelien2 = document.getElementById('lien2');
                if (cmpt2 < letexte2.length) {
                    courant5 = lelien2.innerHTML.substring(0, lelien2.innerHTML.length - 1);
                    courant5 += letexte2.charAt(cmpt2) + " ";
                    lelien2.innerHTML = courant5;
                }
                cmpt2++;
                setTimeout("typess()", 30);
            }
            setTimeout(typess, 2500);
        </script>
    </body>
</html>



