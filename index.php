<?php get_header(); ?>

   <!--Header-->
    <header class="header">
        <span class="header__layout"></span>

        <?php get_template_part('parts/swiper') ?>

        <div class="header__content">
            <p class="header__subtitle">ORGANIZACIÓN</p>
            <h1 class="header__title">ESFÉRICA</h1>
            <a href="" class="header__button">Sumate</a>
        </div>
    </header>

    <main class="main-container">
            <!--Cards destacados--->
            <section class="featured-cards">
                <div class="featured-cards__card" style="background-image: url('https://images.pexels.com/photos/414798/pexels-photo-414798.jpeg');">
                    <span></span>
                    <div class="featured-cards__body">    
                    <h3>Lorem ipsum dolor sit amet,</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, excepturi laboriosam illo dignissimos ducimus error laborum eaque. Cum, voluptatibus reiciendis.</p>
                    </div>
                </div>

                <div class="featured-cards__card" style="background-image: url('https://images.pexels.com/photos/33033492/pexels-photo-33033492.jpeg');">
                    <div class="featured-cards__body">    
                    <h3>Lorem ipsum dolor sit amet,</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, excepturi laboriosam illo dignissimos ducimus error laborum eaque. Cum, voluptatibus reiciendis.</p>
                    </div>
                </div>

                <div class="featured-cards__card" style="background-image: url('https://images.pexels.com/photos/771319/pexels-photo-771319.jpeg');">
                    <div class="featured-cards__body">    
                    <h3>Lorem ipsum dolor sit amet,</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, excepturi laboriosam illo dignissimos ducimus error laborum eaque. Cum, voluptatibus reiciendis.</p>
                    </div>
                </div>
            </section>

            <div class="">
                            <!-- Iconos --->

                        <section class="benefits">

                            <div class="benefits__item">
                                <i class="fa-solid fa-seedling"></i>
                                <p class="benefits__label">Biodiversidad</p>
                            </div>
                            <div class="benefits__item">
                                <i class="fa-solid fa-people-group"></i>
                                <p class="benefits__label">Participación comunitaria</p>
                            </div>
                            <div class="benefits__item">
                                <i class="fa-solid fa-recycle"></i>
                                <p class="benefits__label">Economía circular</p>
                            </div>
                            <div class="benefits__item">
                                <i class="fa-solid fa-dove"></i>
                                <p class="benefits__label">Especies nativas</p>
                            </div>
                        </section>

                        <!--Seccion de informacion-->
                        <section class="section-info" >
                        <div class="section-info__text" data-aos="fade-right"  data-aos-offset="200" data-aos-duration="500">
                            <h2 class="section-info__title">Transformación ecológica con justicia social</h2>
                            <p class="section-info__paragraph">
                                En Esférica trabajamos por una transición socioecológica justa desde el territorio. Promovemos la educación ambiental situada, la participación ciudadana y el cuidado colectivo de los ecosistemas urbanos y rurales. Creemos que el cambio empieza desde lo común.
                            </p>
                            <a href="/" class="section-info__btn">Ver mas</a>
                        </div>

                        <div class="section-info__cards" data-aos="fade-left"  data-aos-offset="200" data-aos-duration="500">
                            <div class="section-info__card">
                                <img loading="lazy"  src="https://images.pexels.com/photos/414798/pexels-photo-414798.jpeg" alt="imagen">
                            </div>
                            <div class="section-info__card">
                                <img  loading="lazy" src="https://images.pexels.com/photos/771319/pexels-photo-771319.jpeg" alt="imagen">
                            </div>
                        </div>
                    </section>
            </div>

        <section  class="projects">
            <h2> <i class="fa fa-tools"></i> Proyectos y Acciones</h2>

            <div class="projects__cards">
                
                <?php  get_template_part('parts/proyectos') ?>

            </div>
        </section>

        <section class="section resources">

            <h2><i class="fa-regular fa-file-lines"></i> Recursos</h2>
            <h3 class="resources__subtitle">Encuentra nuestras publicaciones, guías ambientales y archivos descargables.</h3>

            <div class="resources__cards">

                <article data-aos="fade-right" data-aos-duration="500" class="resources__cards--card">
                    <h3>Guía Ambiental 2023</h3>
                    <p>Una guía completa sobre prácticas sostenibles para el medio ambiente.</p>
                    <a href="guia_ambiental_2023.pdf" class="resources__cards--btn" download>Descargar PDF</a>
                </article>

                <article data-aos="fade-right" data-aos-duration="600"  class="resources__cards--card">
                    <h3>Publicación: Cambio Climático</h3>
                    <p>Información clave sobre el impacto del cambio climático y cómo actuar.</p>
                    <a href="guia_ambiental_2023.pdf" class="resources__cards--btn" download>Descargar PDF</a>
                </article>

                <article data-aos="fade-left" data-aos-duration="500"  class="resources__cards--card">
                    <h3>Manual de Reciclaje</h3>
                    <p>Aprende cómo reciclar correctamente con este manual práctico.</p>
                    <a href="guia_ambiental_2023.pdf" class="resources__cards--btn" download>Descargar PDF</a>
                </article>

            </div>

        </section>

        <section class="section section-topics">

           <!--- <h2 class="section-topics__title"><i class="fa-solid fa-leaf"></i> Temáticas</h2> -->

            <div class="section-topics__row">
                <!---Primera fila-->

                <article class="section-topics__item">
                    <span class="section-topics__item--layout">
                    </span>
                    <div class="section-topics__item--background">
                        <img src="https://img.freepik.com/free-photo/people-taking-part-high-protocol-event_23-2150951375.jpg?t=st=1753122531~exp=1753126131~hmac=d28de30b1e46411bfa43f019fab0bc5aa41958e5915e7caa0483a4f7880583e7&w=900" alt="About background image">
                    </div>

                    <div class="section-topics__content">
                        <i class="fas fa-people-group"></i>
                        <p class="section-topics__label">¿Quienes Somos?</p>
                    </div>
                </article>

                <article class="section-topics__item">
                    <span class="section-topics__item--layout">
                    </span>
                    <div class="section-topics__item--background">
                        <img src="https://img.freepik.com/free-photo/close-up-transplanting-process-plants_23-2149080689.jpg?t=st=1753127404~exp=1753131004~hmac=68d070a2735c6cecaa0a37e4031351ac38e2cfd2fb34d419740ad08185e5e0da&w=900" alt="About background image">
                    </div>

                    <div class="section-topics__content">
                        <i class="fas fa-book-open-reader"></i>
                        <p class="section-topics__label">Ed. Ambiental</p>
                    </div>
                </article>

                <article class="section-topics__item">
                    <span class="section-topics__item--layout">
                    </span>
                    <div class="section-topics__item--background">
                        <img src="https://resizer.glanacion.com/resizer/v2/geronimo-momo-benavides-junto-al-grupo-de-5ZU7XEIUBJA7XO3HRKYBLKMMI4.jpg?auth=6bf49781fbd45b3a9d891ad9da797c56c9efb30ef121ed5b2429190bf2761e4e&width=1280&height=854&quality=70&smart=true" alt="About background image">
                    </div>

                    <div class="section-topics__content">
                        <i class="fas fa-user-graduate"></i>
                        <p class="section-topics__label">Juventudes Esferica</p>
                    </div>
                </article>

                <article class="section-topics__item">
                    <span class="section-topics__item--layout">
                    </span>
                    <div class="section-topics__item--background">
                        <img src="https://media.tycsports.com/files/2022/02/20/392728/momo-vs-viruzz_862x485.png" alt="About background image">
                    </div>

                    <div class="section-topics__content">
                        <i class="fas fa-globe"></i>
                        <p class="section-topics__label">Relaciones Internacionales</p>
                    </div>
                </article>

            </div>

            <div class="section-topics__row">

                <!---Segunda fila -->
                <article class="section-topics__item">
                    <span class="section-topics__item--layout">
                    </span>
                    <div class="section-topics__item--background">
                        <img src="https://i.pinimg.com/474x/1a/7e/8a/1a7e8a39c8532194c2536d36904198ba.jpg" alt="About background image">
                    </div>

                    <div class="section-topics__content">
                        <i class="fas fa-screwdriver-wrench"></i>
                        <p class="section-topics__label">Proyectos</p>
                    </div>
                </article>

                <article class="section-topics__item">
                    <span class="section-topics__item--layout">
                    </span>
                    <div class="section-topics__item--background">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoCL5kS34jq0BvSjWm8Cup7kU-vHw1LCIDrA&s" alt="About background image">
                    </div>

                    <div class="section-topics__content">
                        <i class="fas fa-scale-balanced"></i>
                        <p class="section-topics__label">Asesoramiento Legal</p>
                    </div>
                </article>

                <article class="section-topics__item">
                    <span class="section-topics__item--layout">
                    </span>
                    <div class="section-topics__item--background">
                        <img src="https://pbs.twimg.com/profile_images/1716240706828632064/dFaceHoZ_200x200.jpg" alt="About background image">
                    </div>

                    <div class="section-topics__content">
                        <i class="fas fa-hands-helping"></i>
                        <p class="section-topics__label">Sumate!</p>
                    </div>
                </article>

            </div>

        </section>

        <!--Seccion para el formulario-->

        <section class="suscribe">  

            <div class="suscribe__content">
                <div class="suscribe__content--text">
                    <h2>Suscribite a nuestro newsletter.</h2>
                    <p>Recibí en tu correo todas las noticias, actividades, actualizaciones y contenidos exclusivos sobre los proyectos, eventos y acciones que impulsa Esférica.</p>
                </div>
                <div class="suscribe__form">
                    <form action="">
                        <p for="email">Manténgase actualizado</p>
                        <div class="suscribe__form--field">
                            <input type="email" placeholder="Ingrese su email" id="email">
                            <button>Suscribe</button>
                        </div>
                        <p class="aviso">Su correo estará seguro con nosotros, libre de spam.</p>
                    </form>
                </div>
            </div>
            <span class="layout"></span>
        </section>

    </main>
<?php get_footer(); ?>