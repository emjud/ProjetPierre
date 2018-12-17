<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emmaüs Scherwiller</title>

    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="Styles/styles.css">
</head>

<body>
    <header>
        <h1>Camps d'été</h1>
        <h2>Emmaüs Scherwiller</h2>
    </header>

    <nav>
        <div><a href="#presentation">Présentation</a></div>
        <div><a href="#infoPratique">Info Pratique</a></div>
        <div><a href="#inscription">Inscription</a></div>
        <div><a href="#nousContacter">Nous Contacter</a></div>
        <!--<div>FAQ</div>-->
        <div><a href="#laRegion">La Région</a></div>
        <div><a href="http://www.emmaus-scherwiller.fr/" target="_blank">Emmaüs Scherwiller</a></div>
        <div><a href="english.php">EN</a></div>
    </nav>

    <section class="presentation">
        <div id="presentation"></div>
        <h2>Présentation</h2>
        <div class="presEmCe">
            <div class="emmaus">
                <h3>Emmaüs Scherwiller :</h3>
                <div class="grrr1">
                    <p><strong>Emmaüs Scherwiller</strong>, c’est une <strong>communauté d’entraide</strong> et d’activités solidaires, mais aussi un lieu de vie et d’accueil.</p>
                    <div class="photo1"><img src="img/photo1.jpg" alt=""></div>
                </div>
                <div class="grrr2">
                    <p>Emmaüs ne fonctionne pas grâce à des subventions, mais grâce à la <strong>récupération et à la collecte d’objets</strong>.</p>
                    <div class="photo2"><img src="img/photo2.jpg" alt=""></div>
                </div>
                <div class="logo"><img src="img/logo_emmaus.png" alt=""></div>
            </div>
            <div class="campEte">
                <h3>Camps d'Eté</h3>
                <p>Les <strong>chantiers d’été</strong>, c’est l’occasion pour des jeunes du monde entier de venir en France pour vivre une <strong>expérience inédite</strong>.
                </p>
                <p>Tu viendras aider Emmaüs contre la pauvreté et l’exclusion en France et à l’international.
                </p>
                <div class="photo3"><img src="img/photo3.jpg" alt=""></div>
                <p>Tu pourras <strong>rencontrer</strong> et <strong>échanger</strong> lors de <strong>sorties</strong> et <strong>activités</strong> qui seront organisées : visites dans la région, sport, concerts…
                </p>
                <p>Cette expérience t’aidera à comprendre le fonctionnement et l’histoire d’Emmaüs. Tu pourras également perfectionner ton français.
                </p>
                <div class="photo4"><img src="img/photo4.jpg" alt=""></div>
            </div>
        </div>
    </section>
    <div class="ligne1"></div>    
    <section class="infoPratique">
        <div id="infoPratique"></div>
        <h2>Info Pratique</h2>
        <div class="info">
            <div class="activitees">
                <h3>Activitées - Missions - Durée</h3>
                <div class="act">
                    <div class="act1">
                        <p>Tu pourras <strong>collecter</strong> et <strong>trier</strong> les <strong>dons</strong> des gens qui pourront être vendus ou recyclés.
                        </p>
                        <p>Tu pourras aussi exercer le métier <strong>d’employé de rayon</strong>, de <strong>vendeur</strong> ou même de <strong>caissier</strong>.
                        </p>
                        <div class="photo5"><img src="img/photo6.jpg" alt=""></div>
                    </div>
                    <div class="act2">
                        <p>Enfin, tu auras la possibilité de participer à des <strong>projets enrichissants</strong> personnellement et pour la communauté.
                        </p>
                        <p>Les camps d’été durent un minimum de <strong>10 jours</strong> pendant une période allant du <strong>15 juin</strong> au <strong>15 septembre</strong>.</p>
                        <div class="photo6"><img src="img/photo5.jpg" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="hebergement">
                <h3>Hébergement</h3>
                <p>Emmaüs s’occupe de l’hébergement en <strong>mobile-home</strong> sur place.
                </p>
                <p>Les <strong>repas</strong> sont pris en charge par Emmaüs et consommés sur place en communauté.
                </p>
                <div class="photo7"><img src="img/photo7.JPG" alt=""></div>
                <h3>Transport</h3>
                <p>Tu t'occuperas du <strong>transport</strong> et les frais seront à ta charger.</p>
            </div>
        </div>
    </section>
    <div class="ligne2"></div>
    <section class="inscription">
        <div id="inscription"></div>
        <h2>Inscription</h2>
        <br>
        <div class="inscrip">
            <form action="inscription.php" method="POST">
                <div class="formulaire">               
                    <div> 
                        <label for="nom">Nom</label>
                        <input type="text" name="nom">
                    </div>
                    <br>
                    <div>
                        <label for="prenom">Prénom</label>
                        <input type="text" name="prenom">
                    </div>
                    <br>
                    <div>
                        <label for="age">Age</label>
                        <input type="text" name="age">
                    </div>
                    <br>
                    <div>
                        <label for="pays">Pays</label>
                        <input type="text" name="pays">
                    </div>
                    <br>
                    <div>
                        <label for="telephone">Téléphone</label>
                        <input type="text" name="telephone">
                    </div>
                    <br>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email">
                    </div>
                    <br>
                    <div>
                    <p>Date :</p>
                        <div>
                            <label for="du">Du</label>
                            <input type="text" name="du">
                        </div>
                        <div>
                            <label for="au">Au</label>
                            <input type="text" name=>
                        </div>
                        <p>Durée du chantiers : 15 jours</p>
                    </div>
                </div>
                <div class="calendrier">
                    <button>Envoyer</button>
                </div>
            </form>
            <div class="adresse">
                <div class="plan"><a href="https://www.google.fr/maps/place/Emma%C3%BCs+Scherwiller+Centre+Alsace/@48.287754,7.424845,15.75z/data=!4m5!3m4!1s0x47915ad21ef0cab9:0xee6b4a4921a7d106!8m2!3d48.2882362!4d7.4296661" target="_blank"><img src="img/plan.jpg" alt=""></a></div>
                <p>6 Place de l'abbé Pierre <br>67750 SCHERWILLER <br>FRANCE</p>
            </div>
        </div>
    </section>
    <div class="ligne3"></div>
    <section class="nousContacter">
        <div id="nousContacter"></div>
        <div class="contact">
            <h2>Nous Contacter</h2>
            <p><strong>Une question à nous poser, c'est ici !</strong></p>
            <br>
            <div class="formContact">
                <div class="formContactCoor">
                    <form action="contact.php" method="POST">
                        <div>
                        <label for="nom">Nom</label>
                        <input type="text" name="nom">
                        </div>
                        <br>
                        <div>
                        <label for="prenom">Prénom</label>
                        <input type="text" name="Prénom">
                        </div>
                        <br>
                        <div>
                        <label for="email">e-mail</label>
                        <input type="text" name="email">
                        </div>
                        <br>
                </div>
                <div class="formContactMess">
                        <div>
                        <label>Message</label>
                        <textarea name="message" id="" cols="30" rows="10"></textarea>
                        </div>
                        <br>
                        <button>Envoyer</button>
                </div>    
                    </form>
                </div>
            </div>
        </div>
        <div class="coordonnees">
                <h2>Nos Coordonnées</h2>
                <p>6 place de l'abbé Pierre <br>67750 SCHERWILLER <br>France <br>03 88 82 05 24</p>
        </div>   
    </section>
    <div class="ligne4"></div>
    <section class="laRegion">
        <div id="laRegion"></div>
        <h2>La Région</h2>
        <div class="tourisme">
            <div class="site">
                <h3>Sites Touristiques</h3>
                <p>A 5km de Scherwiller, tu pourras découvrir la <strong>Montagne des singes</strong> et la <strong>Volerie des Aigles</strong>, deux <strong>parcs animaliers</strong> où tu seras en contact direct avec les animaux.</p>
                <div class="photoSite">
                    <div class="photo9"><img src="img/photo9.jpg" alt=""></div>
                    <div class="photo11"><img src="img/photo11.jpg" alt=""></div>
                </div>
                <p>Un peu plus loin, à 13km, tu pourras visiter le <strong>château du Haut-Koenigsbourg</strong>, un <strong>symbole culturel</strong> de la région.</p>
                <div class="photo10"><img src="img/photo10.jpg" alt=""></div>
                <p>Pendant tes week-ends de libre, tu pourras même visiter <strong>Strasbourg</strong>, à une cinquantaine de kilomètres de Scherwiller!</p>
                <div class="photo8"><img src="img/photo8.jpg" alt=""></div>
            </div>
            <div class="gastronomie">
                <h3>Gastronomie</h3>
                <p>Un grand classique: la <strong>choucroute </strong>, plat à base de chou fermenté et de porc.</p>
                <div class="photo14"><img src="img/photo14.jpg" alt=""></div>
                <p>La <strong>Flammküeche</strong>: une tarte salée à pâte fine garnie de crème, lardons et oignons.</p>
                <div class="photo13"><img src="img/photo13.jpg" alt=""></div>
                <p>Le <strong>bretzel</strong>: une pâtisserie salée traditionnelle.</p>
                <div class="photo12"><img src="img/photo12.jpg" alt=""></div>
            </div>
        </div>
    </section>
    
    <footer>
        <a href="#">haut de page</a>
    </footer>
</body>
</html>

