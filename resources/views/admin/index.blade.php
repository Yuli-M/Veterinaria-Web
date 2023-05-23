@extends('layout.admin')

@section('content')

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="{{asset('images/slide-01.jpg')}}" alt="">
                    <div class="text-content">
                        <h3>Bienvenido</h3>
                        <h5>{{ $name }}</h5>
                        <h4>Clinica Veterinaria “El cachorro”</h4>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="{{asset('asset/images/slide-02.jpg')}}" alt="">
                    <div class="text-content">
                        <h3>Clinica Veterinaria “El cachorro”</h3>
                        <h5>La mejor opcion para tus mascotas</h5>
                        <a href="#" class="main-stroked-button">Leer mas</a>
                        <a href="#" class="main-filled-button">Informacion</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="{{asset('images/slide-03.jpg')}}" alt="">
                    <div class="text-content">
                        <h3>Servicios veterinarios especializados</h3>
                        <h5>Descubre mas sobre nuestras opciones</h5>
                        <a href="#" class="main-stroked-button">Estetica</a>
                        <a href="#" class="main-filled-button">Atencion Medica</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
        </div>
    </div>
    <div class="scroll-down scroll-to-section"><a href="#about"><i class="fa fa-arrow-down"></i></a></div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Projects Area Starts ***** -->
    <section class="section" id="projects">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="section-heading">
                        <h6>Nuestros servicios</h6>
                        <h2>Siempre al cuidado de tu mascota</h2>
                    </div>
                    <div class="filters">
                        <ul>
                            <li class="active" data-filter="*">Emergencias</li>
                            <li data-filter=".des">Consultas medicas</li>
                            <li data-filter=".dev">Estetica</li>
                            <li data-filter=".gra">Nutricion</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="{{asset('images/features-icon-1.png')}}" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Emergencias</h4>
                            <p>¡Estamos aquí cuando más nos necesitas! Nuestro equipo veterinario capacitado está preparado para atender cualquier emergencia que pueda surgir con tu mascota. Brindamos atención inmediata y cuidados intensivos para garantizar su bienestar en situaciones críticas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="{{asset('images/features-icon-1.png')}}" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Consultas médicas</h4>
                            <p>Cuida la salud de tu mascota con nuestras consultas médicas especializadas. Nuestros veterinarios realizarán exámenes exhaustivos, vacunas y pruebas diagnósticas para asegurarse de que tu compañero peludo esté en óptimas condiciones. ¡Confía en nosotros para mantener a tu mascota sana y feliz!</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="{{asset('images/features-icon-1.png')}}" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Estética</h4>
                            <p>¿Quieres que tu mascota luzca radiante? Nuestros servicios de estética animal son perfectos para consentir a tu peludo. Ofrecemos baños relajantes, cortes de pelo a la moda, limpieza de oídos y uñas, ¡y mucho más! Déjanos embellecer a tu mascota y realzar su belleza natural.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="{{asset('images/features-icon-1.png')}}" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Nutrición</h4>
                            <p>Una alimentación adecuada es clave para una vida saludable. En nuestra veterinaria, te ofrecemos asesoramiento nutricional personalizado para tu mascota. Te ayudaremos a elegir la dieta ideal, con los alimentos y suplementos adecuados, para asegurar que tu compañero tenga una nutrición equilibrada y llena de vitalidad.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->
    <!-- ***** Projects Area Ends ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h6>En Veterinaria "El Cachorro"</h6>
                        <h2>Nos preocupamos por el bienestar de tu mascota</h2>
                    </div>
                    <div class="subscribe-content">
                        <p>Contamos con un equipo profesional altamente capacitado y modernas instalaciones para ofrecerle la mejor atención.<br>
                            Nuestro enfoque es brindar un cuidado integral, promoviendo la salud y felicidad de tu mascota en cada etapa. Confía en nosotros para el cuidado de tu fiel amigo. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->



    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h1>Direccion</h1>
                        <h2>Veterinaria "El Cachorro"</h2>
                        <h6>Calle Perroquet 123, Colonia Mascotas</h6>
                        <h6>Ciudad Animalia, País Petlandia</h6>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="owl-carousel owl-theme">
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="{{asset('images/member-item-01.jpg')}}" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="{{asset('images/member-item-04.jpg')}}" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="{{asset('images/member-item-02.jpg')}}" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="{{asset('images/member-item-05.jpg')}}" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="{{asset('images/member-item-03.jpg')}}" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="{{asset('images/member-item-04.jpg')}}" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="{{asset('images/member-item-06.jpg')}}" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->

@endsection

