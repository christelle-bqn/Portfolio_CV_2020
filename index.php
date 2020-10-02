<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Portfolio - Christelle Boquillion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--favicon-->
        <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico" />
        <!--main style-->
        <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
        <link rel="styesheet" type="text/css" media="screen" href="css/animate.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="css/jquery.magnific-popup.css">
        <!-- fonts -->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Nunito" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Prata" />
        <link rel="stylesheet" type="text/css" href='https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900' rel='stylesheet'>
        <!-- fontawesome -->
        <script src="https://kit.fontawesome.com/84faafdf88.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <!--wrapper start-->
    <div class="wrapper">
        <header>
            <!--banner start-->
            <div class="banner row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 noPadd" style="height:100%">
                    <!--background start-->
                    <canvas class="banner__background"></canvas>
                    <!--background end-->
                </div>
            </div>
            <div class="banner__text container">
                <h1 class="banner__text__title">Christelle Boquillion</h1>
                <h2 class="banner__text__subTitle">Développeuse Web</h2>
            </div>
            <!--banner end-->
            <!--navbar start-->
            <nav class="navbar navbar-expand-lg .navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link goSmoothly" href="#wrapper">Home <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link goSmoothly" href="#about">Bio</a>
                            <a class="nav-item nav-link goSmoothly" href="#skills">Compétences</a>
                            <a class="nav-item nav-link goSmoothly" href="#portfolio">Portfolio</a>
                            <a class="nav-item nav-link goSmoothly" href="#education">Formations</a>
                            <a class="nav-item nav-link goSmoothly" href="#experience">Expérience</a>
                            <a class="nav-item nav-link goSmoothly" href="#plus">Plus personnels</a>
                            <a class="nav-item nav-link goSmoothly" href="#contact">Contact</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!--navbar end-->
        </header>
        <!--about me start-->
        <section class="about__wrapper" id="about" class="module">
            <div class="container">
                <div class="heading">
                    <h2 class="heading__title">
                        Bio
                        <span>Bio</span>
                    </h2>
                    <hr class="heading__line">
                </div>
                <div class="row">
                    <div class=" col-xs-12 col-sm-12 col-md-7 col-lg-7">
                        <p>En formation à la Web@cadémie by EPITECH, je suis actuellement à la recherche d'une entreprise pouvant 
                            m’accueillir en alternance afin de poursuivre ma seconde année et obtenir le titre de développeur intégrateur 
                            web.<br><br>
                            • Contrat de professionnalisation ou d'apprentissage de 1 an (disponibilité immédiate)<br>
                            • Rythme : 3 semaines en entreprise/ 1 semaine en formation<br>
                            • Paris et ses environs / Nîmes et ses environs </p>
                        <a href="downloadCV.php?file=Boquillion_Christelle-CV.pdf" class="about__btnDownload">Télécharger mon CV</a>
                        <div class="social">
                            <ul class="social__list">
                                <li class="social__list__item">
                                    <a href="https://github.com/christelle-bqn" class="social__list__item-link" target="_blank">
                                        <i class="fa fa-github" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="social__list__item">
                                    <a href="https://www.linkedin.com/in/christelle-boquillion" class="social__list__item-link" target="_blank">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 offset-md-1 offset-lg-1 about__proPic"> <img src="assets/images/profile.png" alt="" class="rounded-circle proPic"> </div>
                </div>
            </div>
        </section>
        <!--about me end-->
         <!--skills start-->
         <section class="skills__wrapper" id="skills" class="module">
            <div class="container">
                <div class="heading">
                    <h2 class="heading__title">
                        Compétences
                        <span>Compétences</span>
                    </h2>
                    <hr class="heading__line">
                </div>
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="skills">
                            <h3>HTML / CSS</h3>
                            <div class="skills__line"></div>
                        </div>                    
                        <div class="skills"> 
                            <h3>PHP</h3>
                            <div class="skills__line"></div>
                        </div>
                        <div class="skills">
                            <h3>Javascript</h3>
                            <div class="skills__line"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">                       
                        <div class="skills">
                            <h3>Symfony</h3>
                            <div class="skills__line"></div>
                        </div>
                        <div class="skills">
                            <h3>React.js</h3>
                            <div class="skills__line"></div>
                        </div>
                        <div class="skills">
                            <h3>MySQL</h3>
                            <div class="skills__line"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">  
                        <div class="skills">
                            <h3>Bootstrap</h3>
                            <div class="skills__line"></div>
                        </div>                     
                        <div class="skills">
                            <h3>POO</h3>
                            <div class="skills__line"></div>
                        </div>
                        <div class="skills">
                            <h3>Git</h3>
                            <div class="skills__line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--skills end-->
        <!--portfolio start-->
        <section class="portfolio__wrapper" id="portfolio" class="module">
            <div class="container">
                <div class="heading">
                    <h2 class="heading__title">
                        Portfolio
                        <span>Portfolio</span>
                    </h2>
                    <hr class="heading__line">
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="assets/images/portfolio/Meetic.png" title="My Meetic - Site de rencontres axé sur les centres d'intérêt&emsp;&emsp;
                            Projet individuel | 2 semaines | HTML, jQuery, Ajax, PHP POO, CSS&emsp;&emsp;
                            <a href='https://github.com/christelle-bqn/My_Meetic' target='_blank'>Github</a>">
                            <div class="thumb">
                                <img src="assets/images/portfolio/Meetic.png" class="thumb__img" alt="My Meetic">
                                <div class="overlay">
                                    <div class="overlay__item">
                                        <h3 class="overlay__item__title">My Meetic</h3>
                                        <h4 class="overlay__item__subTitle">Application web</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="assets/images/portfolio/FreeAds.png" title="Free Ads - Site de petites annonces&emsp;&emsp;
                        Projet individuel | 2 semaines | Laravel, MySQL&emsp;&emsp;
                        <a href='https://github.com/christelle-bqn/FreeAds' target='_blank'>Github</a>">
                            <div class="thumb">
                                <img src="assets/images/portfolio/FreeAds.png" class="thumb__img" alt="Free Ads">
                                <div class="overlay">
                                    <div class="overlay__item">
                                        <h3 class="overlay__item__title">Free Ads</h3>
                                        <h4 class="overlay__item__subTitle">Application web</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="assets/images/portfolio/MyQuiz.png" title="My Quiz - Site de quiz (test de sa culture générale)&emsp;&emsp;
                        Projet individuel | 2 semaines | Symfony&emsp;&emsp;
                        <a href='https://github.com/christelle-bqn/My_Quiz' target='_blank'>Github</a>">
                            <div class="thumb">
                                <img src="assets/images/portfolio/MyQuiz.png" class="thumb__img" alt="My Quiz">
                                <div class="overlay">
                                    <div class="overlay__item">
                                        <h3 class="overlay__item__title">My Quiz</h3>
                                        <h4 class="overlay__item__subTitle">Application web</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="assets/images/portfolio/MyPaint.png" title="My Paint - Application web reprenant les principales fonctionnalités de 'Paint'&emsp;&emsp;
                        Projet individuel | 1 semaine | HTML, jQuery, CSS&emsp;&emsp;
                        <a href='https://github.com/christelle-bqn/My_Paint' target='_blank'>Github</a>">
                            <div class="thumb">
                                <img src="assets/images/portfolio/MyPaint.png" class="thumb__img" alt="My Paint">
                                <div class="overlay">
                                    <div class="overlay__item">
                                        <h3 class="overlay__item__title">My Paint</h3>
                                        <h4 class="overlay__item__subTitle">Application web</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="assets/images/portfolio/MySnap.png" title="My Snapchat - Application mobile reprenant les principales fonctionnalités de 'Snapchat'<br>
                        Projet d'équipe de 3 | 1 semaine | React Native Expo<br>
                        <a href='https://github.com/christelle-bqn/My_Snapchat' target='_blank'>Github</a>">
                            <div class="thumb">
                                <img src="assets/images/portfolio/MySnap.png" class="thumb__img" alt="My Snapchat">
                                <div class="overlay">
                                    <div class="overlay__item">
                                        <h3 class="overlay__item__title">My Snapchat</h3>
                                        <h4 class="overlay__item__subTitle">Application Mobile</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="assets/images/portfolio/PiePHP.png" title="PiePHP - Framework MVC basé sur la structure de CakePHP&emsp;&emsp;
                        Projet individuel | 4 semaines | PHP POO, MySQL&emsp;&emsp;
                        <a href='https://github.com/christelle-bqn/PiePHP' target='_blank'>Github</a>">
                            <div class="thumb">
                                <img src="assets/images/portfolio/PiePHP.png" class="thumb__img" alt="PiePHP">
                                <div class="overlay">
                                    <div class="overlay__item">
                                        <h3 class="overlay__item__title">PiePHP</h3>
                                        <h4 class="overlay__item__subTitle">Framework MVC</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--portfolio end-->
        <!--education start-->
        <section class="education__wrapper" id="education" class="module">
            <div class="container">
                <div class="heading">
                    <h2 class="heading__title">
                        Formations
                        <span>Formations</span>
                    </h2>
                    <hr class="heading__line">
                </div>
                <div class="row workDetails">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                        <div class="workYear">2019 - 2021</div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-10 rightArea">
                        <div class="arrow"></div>
                        <div class="exCon">
                            <h4 class="exCon__title">Titre d'intégrateur-développeur web (BAC +2)</h4>
                            <h5 class="exCon__subTitle">Web@cadémie by EPITECH (Paris)</h5>
                        </div>
                    </div>
                </div>
                <div class="row workDetails">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                        <div class="workYear">2018</div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-10 rightArea">
                        <div class="arrow"></div>
                        <div class="exCon">
                            <h4 class="exCon__title">Certificat de Qualification Professionnelle Barman</h4>
                            <h5 class="exCon__subTitle">GRETA Val de Loire</h5>
                        </div>
                    </div>
                </div>
                <div class="row workDetails">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                        <div class="workYear">2014 - 2015</div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-10 rightArea">
                    <div class="arrow"></div>
                    <div class="exCon">
                        <h4 class="exCon__title">Les Compagnons du Devoir, Pâtisserie</h4>
                        <h5 class="exCon__subTitle">Les Compagnons du Devoir Belgique</h5>
                    </div>
                    </div>
                </div>
                <div class="row workDetails">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                        <div class="workYear">2012 -2014</div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-10 rightArea">
                    <div class="arrow"></div>
                    <div class="exCon">
                        <h4 class="exCon__title">CAP Pâtisserie</h4>
                        <h5 class="exCon__subTitle">Lycée Professionnel Voltaire Nîmes</h5>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!--education end-->
        <!--exprience start-->
        <section class="experience__wrapper" id="experience" class="module">
            <div class="container">
            <div class="heading">
                <h2 class="heading__title">
                    Expérience
                    <span>Expérience</span>
                </h2>
                <hr class="heading__line">
            </div>
            <div class="row workDetails">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                    <div class="workYear">2019</div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-10 rightArea">
                    <div class="arrow"></div>
                    <div class="exCon">
                        <h4 class="exCon__title">Équipière polyvalente en restauration</h4>
                        <h5 class="exCon__subTitle">ZooParc de Beauval</h5>
                        <ul class="exCon__list">
                            <li class="exCon__list__item">Accueil, préparation des plats, service et vente</li>
                            <li class="exCon__list__item">Travail en équipe</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row workDetails">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                    <div class="workYear">2018</div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-10 rightArea">
                    <div class="arrow"></div>
                    <div class="exCon">
                        <h4 class="exCon__title">Barmaid</h4>
                        <h5 class="exCon__subTitle">Hôtel Mercure Blois Centre 4*</h5>
                        <ul class="exCon__list">
                            <li class="exCon__list__item">Accueil, conseil clientèle, préparation des cocktails, service et vente</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row workDetails">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                    <div class="workYear">2014 - 2017</div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-10 rightArea">
                    <div class="arrow"></div>
                    <div class="exCon">
                        <h4 class="exCon__title">Pâtissière</h4>
                        <h5 class="exCon__subTitle">Boulangerie pâtisserie La Tradition De Monte, La Fleur Du Pain</h5>
                        <ul class="exCon__list">
                            <li class="exCon__list__item">Responsable de la production des pâtisseries</li>
                            <li class="exCon__list__item">Management des apprentis, travail en équipe</li>    
                        </ul>                    
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!--exprience end-->
        <!--plus start-->
        <section class="plus" id="plus" class="module">
            <div class="container">
                <div class="heading">
                    <h2 class="heading__title">
                        Plus personnels
                        <span>Plus personnels</span>
                    </h2>
                    <hr class="heading__line">
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 plus__infos">
                        <h3 class="plus__infos__title">Langue</h3>
                        <div>
                            <img class="plus__infos__img" src="assets/images/plus/english.jpg">
                            <h4 class="plus__infos__subTitle">Anglais - B2</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 plus__infos">
                        <h3 class="plus__infos__title">Intérêts</h3>
                        <div class="row plus__infos-interests">
                            <div>
                                <img class="plus__infos__img" src="assets/images/plus/drawing.png">
                                <h4 class="plus__infos__subTitle">Dessin</h4>
                            </div>
                            <div>
                                <img class="plus__infos__img" src="assets/images/plus/cinema.png">
                                <h4 class="plus__infos__subTitle">Cinema d'animation</h4>
                            </div>
                            <div>
                                <img class="plus__infos__img" src="assets/images/plus/cooking.png">
                                <h4 class="plus__infos__subTitle">Cuisine</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 plus__infos">
                        <h3 class="plus__infos__title">Permis</h3>
                        <div>
                            <img class="plus__infos__img" src="assets/images/plus/car.png">
                            <h4 class="plus__infos__subTitle-car">Voiture</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--plus end-->
        <!--contact start-->
        <section class="contact__wrapper" id="contact" class="module">
            <div class="container">
                <div class="heading">
                    <h2 class="heading__title">
                        Contact
                        <span>Contact</span>
                    </h2>
                    <hr class="heading__line">
                </div>
                <div class="row contact">
                    <!--contact info start-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 contact__infos">
                        <p class="contact__infos__item"> <i class="fa fa-map-marker fa-lg infos__item__icon"></i> 94200 Ivry-sur-Seine </p>
                        <p class="contact__infos__item"> <i class="fa fa-mobile fa-lg infos__item__icon"></i> 06.25.60.74.83</p>
                        <p class="contact__infos__item"> <i class="fa fa-envelope-o infos__item__icon"></i> <a href="mailto:christelle.boquillion@epitech.eu">christelle.boquillion@epitech.eu</a></p>
                    </div>
                    <!--contact info end-->
                    <!--contact form start-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 contact__form">
                        <h4 class="contact__form__title">Formulaire de contact</h4>
                        <div class="contact__form__msgSubmit" class="hidden"></div>
                        <form method="post" class="form">
                        <div class="form-group col-xs-12 col-sm-12 col-md-8 col-lg-8">
                            <input name="name" type="text" class="form-control" placeholder="Votre nom/prénom..." required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-8 col-lg-8 noMarr">
                            <input name="email" type="email" class="form-control" placeholder="Votre email..." required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-8 col-lg-8 noMarr">
                            <input name="subject" type="text" class="form-control" placeholder="Sujet..." required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <textarea name="comments" cols="" rows="" class="form-control" placeholder="Votre message..." required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <input type="submit" name="send" class="form__submitBtn" value="Envoyer le message">
                        <div id="simple-msg"></div>
                        </form>
                    </div>
                    <!--contact form end-->
                </div>
            </div>
        </section>
        <!--contact end-->
    </div>
    <!--wrapper end-->
    <!--jquery js-->
    <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/magnific-popup.js"></script>
    <script src="js/jquery.contact.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/banner.js"></script>
    <script src="js/particles.js"></script>
    </body>
</html>