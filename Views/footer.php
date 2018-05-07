<footer>
    <div class="container-fluid">
        <div class="row">
            <!-- Taille du premier bloc -->
            <div class="col s12 m12 l6 offset-l1 xl6 offset-xl1 headshot">
                <h3 class="black-text" id="h3-name">Anthony BOUILLON</h3>
                <!-- Image de profil -->
                <img class="responsive-img img-profile" id="img-display" src="http://formation.novei.fr/assets/images/promo3/anthony.jpg" title="Photo de profil" alt="Photo">
                <p class="black-text text-lighten-4 bold">Haut de france; Le Plessis-Brion, 60150; anthony-bouillon@outlook.fr; 06-49-70-52-50</p>
                <!-- Icones des réseaux sociaux -->
                <a class="grey-text text-lighten-3" href="https://www.linkedin.com/in/anthony-bouillon-44313a151/"><i class="fa fa-linkedin" title="Lien redirigeant vers le profil d'Anthony Bouillon sur Linkedin"></i></a>
                <a class="grey-text text-lighten-3" href="https://twitter.com/_Ant_ho_ny_"><i class="fa fa-twitter" title="Lien redirigeant vers le profil d'Anthony Bouillon sur Twitter"></i></a>
                <a class="grey-text text-lighten-3" href="https://github.com/AnthonyBouillon"><i class="fa fa-github" aria-hidden="true" title="Lien redirigeant vers le profil d'Anthony Bouillon sur Github"></i></a> 
            </div>
            <!-- Taille du deuxième bloc -->
            <div class="col s12 m4 offset-m1 l2 offset-l1 xl2 offset-xl1 headshot headshot-1">
                <h3 class="white-text center-align" id="h3-info">Information</h3>
                <p id="para-counter"><?= $count_views ?><br/><?= $number_visitors ?></p>
            </div>
        </div>
    </div>
</footer>
<!-- Librairie materialize, le script javascript principale et le second -->
<script src="Publics/LIB/materialize/js/materialize.min.js"></script>
<script src="Publics/JS/main.js"></script>
<script src="Publics/JS/display-text.js"></script>
</body>
</html>