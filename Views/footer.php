<footer>
    <div class="row">
        <!-- Taille du premier bloc -->
        <div class="col s12 m12 l6 offset-l1 xl6 offset-xl1 headshot bloc-footer">
            <div class="row">
                <div class="col s12">
                    <h3 class="black-text center-align" id="h3-name">Anthony BOUILLON</h3>
                </div>
            </div>
            <div class="row margin-bottom">
                <div class="col s1">
                    <i class="fa fa-address-card" aria-hidden="true"></i>
                </div>
                <div class="col s8">
                    <span class="white-text text-lighten-4 bold para-footer">Haut de france, Oise, Le Plessis-Brion</span>
                </div>
                <div class="col s12 m1 offset-m2">
                    <a href="https://github.com/AnthonyBouillon" title="Lien redirigeant vers le profil d'Anthony Bouillon sur Github"><i class="fa fa-github" aria-hidden="true" alt="Logo github"></i></a>
                </div>
            </div>
            <div class="row margin-bottom">
                <div class="col s1">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </div>
                <div class="col s8">
                    <span class="white-text text-lighten-4 bold para-footer">anthony-bouillon@outlook.fr</span>
                </div>
                <div class="col s12 m1 offset-m2">
                    <a href="https://www.linkedin.com/in/anthony-bouillon-44313a151/" title="Lien redirigeant vers le profil d'Anthony Bouillon sur Linkedin"><i class="fa fa-linkedin" alt="Logo linkedin"></i></a>
                </div>
            </div>
            <div class="row margin-bottom">
                <div class="col s1">
                    <i class="fa fa-phone"></i>
                </div>
                <div class="col s8">
                    <span class="white-text text-lighten-4 bold para-footer">06.49.70.52.50</span>
                </div>
                <div class="col s12 m1 offset-m2">
                    <a href="https://twitter.com/_Ant_ho_ny_" title="Lien redirigeant vers le profil d'Anthony Bouillon sur Twitter"><i class="fa fa-twitter" alt="Logo twitter"></i></a>
                </div>
            </div>
        </div>
        <!-- Taille du deuxième bloc -->
        <div class="col s12 m4 offset-m1 l2 offset-l1 xl2 offset-xl2 headshot headshot-1 bloc2-footer">
            <h3 class="white-text center-align" id="h3-info">Information</h3> 
            <p id="para-counter"><?= $count_views ?><br/><?= $number_visitors ?></p>
        </div>
    </div>
</footer>
<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120392400-1" async></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-120392400-1');
</script>
<!-- Librairie materialize, le script javascript principale et le second -->
<script src="Publics/LIB/materialize/js/materialize.min.js" ></script>
<script src="Publics/JS/main.min.js" async></script>
<script src="Publics/JS/display-text.min.js" async></script>
</body>
</html>  