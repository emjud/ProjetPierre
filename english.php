<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Emmaüs Scherwiller</title>
    <link rel="stylesheet" href="Styles/styles.css">
</head>

<body>
    <header>
        <h1>Summer Camps</h1>
        <h2>Emmaüs Scherwiller</h2>
    </header>

    <nav>
        <div><a href="#presentation">Introduction</a></div>
        <div><a href="#infoPratique">Informations</a></div>
        <div><a href="#inscription">Sign Up</a></div>
        <div><a href="#nousContacter">Contact Us</a></div>
        <!--<div>FAQ</div>-->
        <div><a href="#laRegion">The Area</a></div>
        <div><a href="http://www.emmaus-scherwiller.fr/" target="_blank">Emmaüs Scherwiller</a></div>
        <div><a href="index.php">FR</a></div>
    </nav>

    <section class="presentation">
        <div id=presentation></div>
        <h2>Introduction</h2>
        <div class="presEmCe">
            <div class="emmaus">
                <h3>Emmaüs Scherwiller :</h3>
                <div class="grrr1">
                    <p><strong>Emmaüs Scherwiller</strong> is a <strong>solidary helping community</strong>. It’s also a place to live.</p>
                    <div class="photo1"><img src="img/photo1.JPG" alt=""></div>
                </div>
                <div class="grrr2">
                    <p>Emmaüs doesn’t work via financial support. It works thanks to <strong>objects donations</strong>.</p>
                    <div class="photo2"><img src="img/photo2.jpg" alt=""></div>
                </div>
                <img src="img/logo_emmaus.png" alt="">
            </div>
            <div class="campEte">
                <h3>Summer Camps</h3>
                <p><strong>Summer camps</strong> are a perfect opportunity for young people worldwide to come to France in order to live a <strong>brand new experience</strong>.
                </p>
                <p>You’ll come <strong>help Emmaüs against poverty and exclusion</strong> in France and all over the world.
                </p>
                <div class="photo3"><img src="img/photo3.jpg" alt=""></div>
                <p>You can <strong>meet and exchange</strong> with people during activities such as sports, sightseeing, concerts...
                </p>
                <p>This experience will help you understand how Emmaüs works and the story behind it. You’ll also be able to <strong>get better in French</strong>.
                </p>
                <div class="photo4"><img src="img/photo4.jpg" alt=""></div>
            </div>
        </div>
    </section>
    <div class="ligne1"></div>
    <section class="infoPratique">
        <div id="infoPratique"></div>
        <h2>Informations</h2>
        <div class="info">
            <div class="activitees">
                <h3>Activities / Missions / Duration</h3>
                <div class="act">
                    <div class="act1">
                        <p>You’ll collect and sort people’s <strong>donations</strong>, which will eventually be <strong>sold or recycled</strong>.
                        </p>
                        <p>You’ll also be a salesman, a cashier…
                        </p>
                        <!--<div class="photo5"><img src="img/photo%206.jpg" alt=""></div>-->
                    </div>
                    <div class="act2">
                        <p>Eventually, you can take part to fulfilling <strong>projects</strong>.
                        </p>
                        <p>Summer camps last at least <strong>10</strong> days, from <strong>June 15th</strong> to <strong>September 15th</strong>.</p>
                        <!--<div class="photo6"><img src="img/photo%205.jpg" alt=""></div>-->
                    </div>
                </div>
            </div>
            <div class="hebergement">
                <h3>Shelter</h3>
                <p>Emmaüs will shelter you in <strong>mobile-homes</strong> with other young people.
                </p>
                <p>Food is also provided by Emmaüs and <strong>meals</strong> take place outside with the community.
                </p>
                <!--<div class="photo7"><img src="img/photo%207.JPG" alt=""></div>-->
                <h3>Transportation</h3>
                <p>You’ll only pay for <strong>transportation</strong> and take care of it.</p>
            </div>
        </div>
    </section>
    <div class="ligne2"></div>
    <section class="inscription">
        <div id="inscription"></div>
        <h2>Sign up</h2>
        <br>
        <div class="inscrip">
            <form action="inscriptionEn.php" method="POST"> 
                <div class="formulaire">
                    <div> 
                        <label for="nom">Last name</label>
                        <input type="text" name="nom">
                    </div>
                    <br>
                    <div>
                        <label for="prenom">First name</label>
                        <input type="text" name="prenom">
                    </div>
                    <br>
                    <div>
                        <label for="age">Age</label>
                        <input type="text" name="age">
                    </div>
                    <br>
                    <div>
                        <label for="pays">Country</label>
                        <input type="text" name="pays">
                    </div>
                    <br>
                    <div>
                        <label for="telephone">Phone number</label>
                        <input type="text" name="telephone">
                    </div>
                    <br>
                    <div>
                        <label for="email">Email address</label>
                        <input type="email" name="email">
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
            <h2>Get in touch</h2>
            <p><strong>Click here if you have a question</strong></p>
            <br>
            <div class="formContact">
                <div class="formContactCoor">
                    <form action="contact.php" method="POST">
                        <div>
                        <label for="nom">Last name</label>
                        <input type="text" name="nom">
                        </div>
                        <br>
                        <div>
                        <label for="prenom">First name</label>
                        <input type="text" name="Prénom">
                        </div>
                        <br>
                        <div>
                        <label for="email">Email address</label>
                        <input type="text" name="email">
                        </div>
                        <br>
                </div>
                <div class="fomrContactMess">
                        <div>
                            <label>Message</label>
                            <textarea name="message" id="" cols="30" rows="10"></textarea>
                        </div>
                        <br>
                        <button>Send</button>
                        </div>    
                    </form>
                </div>
            </div>
        </div>
        <div class="coordonnees">
                <h2>Our address</h2>
                <p>6 place de l'abbé Pierre <br>67750 SCHERWILLER <br>France <br>03 88 82 05 24</p>
        </div>   
    </section>
    <div class="ligne4"></div>
    <section class="laRegion">
        <div id="laRegion"></div>
        <h2>The Area</h2>
        <div class="tourisme">
            <div class="site">
                <h3>Sightseeing</h3>
                <p>You can discover <strong>«La Montagne des Singes» </strong>(Ape Mountain) and <strong>«La Volerie des Aigles»</strong> (Eagles’ Flight), five kilometers away from Scherwiller. You’ll be in direct contact with all of the animals.</p>
                <div class="photoSite">
                    <div class="photo9"><img src="img/photo9.jpg" alt=""></div>
                    <div class="photo11"><img src="img/photo11.jpg" alt=""></div>
                </div>
                <p>A little further away, you can visit the <strong>Haut-Koenigsbourg</strong> castle, which is a cultural symbol.</p>
                <div class="photo10"><img src="img/photo10.jpg" alt=""></div>
                <p>During your free time in the weekends, you can even visit <strong>Strasbourg</strong>, about fifty kilometers away fom Scherwiller!</p>
                <div class="photo8"><img src="img/photo8.jpg" alt=""></div>
            </div>
            <div class="gastronomie">
                <h3>Food</h3>
                <p><strong>Sauerkraut </strong>is a classic, it contains pork and, most importantly, fermented cabbage.</p>
                <div class="photo14"><img src="img/photo14.jpg" alt=""></div>
                <p><strong>Flammküeche</strong> is a thin, salty pie with cream, onions and a local type of bacon.</p>
                <div class="photo13"><img src="img/photo13.jpg" alt=""></div>
                <p><strong>Pretzels</strong> are a traditional salty pastry.</p>
                <div class="photo12"><img src="img/photo12.jpg" alt=""></div>
            </div>
        </div>
    </section>

    <footer>
        <a href="#">haut de page</a>
    </footer>
</body>

</html>