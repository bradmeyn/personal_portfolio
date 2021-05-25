
<?php


if($_POST["message"]) {


mail("bradjmeyn@gmail.com", "test",


$_POST["insert your message here"]. "From: an@email.address");


}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brad Meyn</title>
    
    
    <script src="https://kit.fontawesome.com/06496a0555.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
 <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/css/index.min.css">
</head>

<body>
    
    <header class="header" id="header">
        
        <div class="header__logo">
            <i class="fas fa-code"></i>
        </div>
        <button class="hamburger">
            <div class="hamburger__box">
                <div class="hamburger__line"></div>
            </div> 
        </button>

        <nav class="navbar">
            <ul class="navbar__links">
                <li class="navbar__links-container">
                    <a href="#" class="navbar__link">About</a>
                </li>
                <li class="navbar__links-container">
                    <a href="#" class="navbar__link">Projects</a>
                </li>
                <li class="navbar__links-container">
                    <a href="#" class="navbar__link">Contact</a>
                </li>
            </ul>
            <nav class="link__navbar">
            <a href="#" class="link">
                <span class="link__icon"><i class="fab fa-github"></i>
                    <div class="link__name">Github</div>
                </span>
            </a>
            <a class="link">
                <span class="link__icon"><i class="fas fa-file-alt"></i>
                <div class="link__name">Resume</div>
                </span>
            </a>
            <a class="link">
                <span class="link__icon"><i class="fas fa-envelope"></i>
                <div class="link__name">Email</div>
                </span>
            </a>
            
                       
            </nav>
        </nav>
   
    </header>

<div class="content">

<main>

    <!-- Landing Section------------------------------------ -->
    <section id="landing" class="landing">
       
        <div class="landing__content content-container">
            <h1 class="landing__heading"> <div class="landing__heading--intro">Hi, my name is </div> <div class="landing__heading--name">Brad Meyn.</div></h1>
            <p class="landing__subheading"> Welcome to my website. </p>
            <div class="landing__buttons">
                <button class="btn">My Work</button>
                <!-- <button class="btn--secondary">My Resume</button> -->
            </div>
        </div>
    </section>

    <!-- About Section------------------------------------ -->

    <section id="about" class="about" >
        <div class="about__content content-container" data-aos="fade-up" data-aos-duration="1000">
            <div class="about__text">
                <h2 class="about__heading">About Me</h2>
                <p class="about__paragraph">I started development as a hobby. My initial plan was to learn how websites are made so I could potentially build some investment related tools for work. Each morning before work I'd sit and go through online courses from Udemy and slowly build up my knowledge.</p>
                <p class="about__paragraph">After squeezing in development time around work and family I've come to the realisation this is what I want to do for a career. I enjoy programming because you are constantly learning new things and there are so many "aha" moments where you figure out how something works.</p>
                <p class="about__paragraph">From a language standpoint I've predominatly focused on frontend development (HTML, CSS & Javascript), with some exposure to backend languages and frameworks via Udemy courses (NodeJS, Express & MongoDB). </p>
            </div>

            <div class="card" data-aos="fade-up" data-aos-duration="1000">
                <div class="card__profile">

                <div class="card__img">
                    <img src="./images/Me.jpg" alt="" class="profile__img">
                </div>
                <div class="card__content">
                    <h3 class="card__heading">Brad Meyn</h3>
                    <div class="card__detail"><span class="icon"><i class="fas fa-map-marker-alt"></i></span> <span>Newcastle, Australia</span> </div>
                    <div class="card__detail"><span class="icon"><i class="fas fa-graduation-cap"></i></span> <span>Bachelor of Business & Commerce</span> </div>
           
                </div>
            </div>
                <div class="card__skills">
                    <h4 class="skills-heading">Experience with:</h4>
                    <div class="skill-container">
                        <ul class="skill-list">
                            <li class="skill-item">HTML</li>
                            <li class="skill-item">CSS & SASS</li>
                            <li class="skill-item">Javascript</li>
                            
                        </ul>
                        <ul class="skill-list">
                            <li class="skill-item">Node.JS</li>
                            <li class="skill-item">Express</li>
                            <li class="skill-item">MongoDB</li>
                        </ul>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>

    <!-- Project Section------------------------------------ -->

    <section id="projects" class="projects">
        <div class="content-container">
        <h2 class="projects__heading">Projects</h2>
        <p class="projects__text">Below are some projects I've made to highlight my skill with various technologies & concepts.</p>
        <div class="projects__container">

            <div class="project" data-aos="fade-up" data-aos-duration="1000">
                <div class="project__img">
                    <img src="/images/browser (3).png" alt="">
                </div>
                <div class="project__content">
                    <div class="project__tech">
                        <span class="tech">HTML</span>
                        <span class="tech">CSS</span>
                        <span class="tech">JS</span>
                        <span class="tech">NODE</span>
                    </div>
                    <h3 class="project__name">Project</h3>
                    <p class="project__description"> laborum velit corporis molestias praesentium magnam repudiandae dolorem nemo, itaque harum!</p>
                    <div class="project__links">
                        <a class="project-live" href="">Visit Site</a>
                        <a class="project-repo" href="">View Repo<i class="fas fa-angle-right"></i></a>
                        
                    </div>  
                </div>  
            </div>
            <div class="project" data-aos="fade-up" data-aos-duration="1000">
                <div class="project__img">
                    content
                    <!-- <img src="https://cms-assets.tutsplus.com/uploads/users/2660/posts/35190/image/zimed-app-landing-page-html-template-J33MNVG.jpg" alt=""> -->
                </div>
                <div class="project__content">
                    <div class="project__tech">
                        <span class="tech">HTML</span>
                        <span class="tech">CSS</span>
                        <span class="tech">JS</span>
                        <span class="tech">NODE</span>
                    </div>
                    <h3 class="project__name">Project</h3>
                    <p class="project__description"> laborum velit corporis molestias praesentium magnam repudiandae dolorem nemo, itaque harum!</p>
                    <div class="project__links">
                        <a class="project-live" href="">Visit Site</a>
                        <a class="project-repo" href="">View Repo<i class="fas fa-angle-right"></i></a>
                        
                    </div>  
                </div>  
            </div>
            <div class="project" data-aos="fade-up" data-aos-duration="1000">
                <div class="project__img">
                    <!-- <img src="https://cms-assets.tutsplus.com/uploads/users/2660/posts/35190/image/zimed-app-landing-page-html-template-J33MNVG.jpg" alt=""> -->
                </div>
                <div class="project__content">
                    <div class="project__tech">
                        <span class="tech">HTML</span>
                        <span class="tech">CSS</span>
                        <span class="tech">JS</span>
                        <span class="tech">NODE</span>
                    </div>
                    <h3 class="project__name">Project</h3>
                    <p class="project__description"> laborum velit corporis molestias praesentium magnam repudiandae dolorem nemo, itaque harum!</p>
                    <div class="project__links">
                        <a class="project-live" href="">Visit Site</a>
                        <a class="project-repo" href="">View Repo<i class="fas fa-angle-right"></i></a>
                    </div>  
                </div>  
            </div>
        </div>
    </div>
    </section>
    
    <section id="contact" class="contact">

        <div class="contact__content content-container" data-aos="fade-up" data-aos-duration="1000">
            <h3 class="contact__heading">Contact Me</h3>
            <p class="contact__text"> If you would like to get in touch please email me at <a class="contact__text--email" href="#"> bradmakesweb@dev.com</a> or via the form below. </p>
            
            <form action="mailto:bradjmeyn@gmail.com" method="POST">
                <div class="form">
                    <div class="form__inputs">
                        <div class="form__input">
                            <label for="name" class="label">Name</label>
                            <input type="text" class="input" id="name" placeholder="Name" name="name">
                        </div>

                        <div class="form__input">
                            <label for="email" class="label">Email</label>
                            <input type="email" class="input" id="email" placeholder="Email" name="email">
                        </div>

                        <div class="form__input">
                            <label for="message" class="label">Message</label>
                            <textarea type="text" class="input--textarea" id="message" placeholder="Message..." name="message" rows="10"></textarea>
                        </div>
                    </div>

                    <button type="submit" class="form__btn"><i class="fas fa-paper-plane"></i>Send</button>

                </div>
            </form>
            
 
            <nav class="link__navbar">
                        <a href="#" class="link">
                            <span class="link__icon"><i class="fab fa-github"></i>
                                <div class="link__name">Github</div>
                            </span>
                        </a>
                        <a class="link">
                            <span class="link__icon"><i class="fas fa-file-alt"></i>
                            <div class="link__name">Resume</div>
                            </span>
                        </a>
                        <a class="link">
                            <span class="link__icon"><i class="fab fa-instagram"></i>
                            <div class="link__name">Instagram</div>
                            </span>
                        </a>                
            </nav>  
        </div>
    </section>
</main>

</div>

<footer class="footer">
    <div class="footer__container">
        <div class="footer__copyright">&#x24B8; Copyright 2021 Brad Meyn. All rights reserved.</div>
    </div>
</footer>


</div>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
        once: true
    });
  </script>
<script src="js/main.js"></script>
</body>

</html>
