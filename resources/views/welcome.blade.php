<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Muhammad Azis - Web Dev</title>
    {{-- Style --}}
    <link rel="icon" href="image/Title.png" type="image/x-icon">
    <link rel="stylesheet" href="css/NewStyle.css">
    <link rel="stylesheet" href="css/StyleResponsive.css">
</head>

<body>
    {{-- Header --}}
    <header>
        <div class="main-container">
            <div class="nav">
                <div class="logo">
                    <a href="/">Maetr.</a>
                </div>
                <nav>
                    <ul>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portofolios">Portofolios</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li>
                            <button class="btn"><a href="Resume" target="_blank">Resume</a></button>
                        </li>
                    </ul>
                </nav>

                <div class="burger">
                    <div class="line-1"></div>
                    <div class="line-2"></div>
                    <div class="line-3"></div>
                </div>
            </div>
            <section id="hero">
                <div class="hero-left">
                    <h3 class="pre-title">My Name is</h3>
                    <h1 class="hero-name"><span>Muhammad</span> Azis</h1>
                    <p>
                        I am an Informatics student who is very eager to increase my knowledge. I have a special
                        interest in programming, enjoy taking on
                        challenges, and am always ready to learn new things. My ability to adapt quickly in a new
                        environment makes it easy for me to master
                        new concepts
                    </p>
                </div>
                <div class="hero-right">
                    <img src="image/Hero.png" alt="Hero Right">
                </div>
            </section>
        </div>
    </header>
    {{-- end of Header --}}

    {{-- services --}}
    <section id="services">
        <div class="services main-container">
            <h3 class="pre-title">Services</h3>
            <h1 class="section-title services-title">Specialized in</h1>

            <div class="grid-2">
                {{-- Services 1 --}}
                <div class="service">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M6 8l.001 9.444c0 .861.696 1.556 1.557 1.556h.442v3.542c0 .804.707 1.458 1.51 1.458.806 0 1.49-.654 1.49-1.459v-3.541h2v3.542c0 .804.707 1.458 1.511 1.458.806 0 1.489-.654 1.489-1.459v-3.541l.444-.001c.858 0 1.556-.696 1.556-1.557v-9.442h-12zm16 1.471c0-.805-.695-1.471-1.5-1.471-.805-.001-1.5.667-1.5 1.472v6.106c0 .806.694 1.422 1.5 1.422.805 0 1.5-.615 1.5-1.422v-6.107zm-17 0c0-.805-.695-1.471-1.5-1.471-.805-.001-1.5.667-1.5 1.472v6.106c0 .806.694 1.422 1.5 1.422.805 0 1.5-.615 1.5-1.422v-6.107zm9.951-7.312l.94-1.859c.068-.132-.019-.3-.163-.3-.066 0-.13.038-.164.105l-.949 1.878c-1.531-.737-3.544-.812-5.229 0l-.95-1.878c-.033-.067-.097-.105-.164-.105-.144 0-.231.168-.163.3l.94 1.859c-1.845 1.034-3.049 2.584-3.049 4.84h12c0-2.256-1.204-3.806-3.049-4.84zm-5.45 2.841c-.276 0-.501-.224-.501-.5 0-.274.225-.5.501-.5s.499.226.499.5c0 .276-.223.5-.499.5zm4.998 0c-.276 0-.499-.224-.499-.5 0-.274.223-.5.499-.5s.501.226.501.5c0 .276-.225.5-.501.5z" />
                        </svg>
                    </div>
                    <h4>Android Developer</h4>
                    <p>
                        For six months, I went through a learning experience as an Android developer, starting when I
                        was a fifth semester student.
                    </p>
                </div>
                {{-- Services 2 --}}
                <div class="service">
                    <div class="service-icon">
                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                            clip-rule="evenodd">
                            <path
                                d="M12.02 0c6.614.011 11.98 5.383 11.98 12 0 6.623-5.376 12-12 12-6.623 0-12-5.377-12-12 0-6.617 5.367-11.989 11.981-12h.039zm3.694 16h-7.427c.639 4.266 2.242 7 3.713 7 1.472 0 3.075-2.734 3.714-7m6.535 0h-5.523c-.426 2.985-1.321 5.402-2.485 6.771 3.669-.76 6.671-3.35 8.008-6.771m-14.974 0h-5.524c1.338 3.421 4.34 6.011 8.009 6.771-1.164-1.369-2.059-3.786-2.485-6.771m-.123-7h-5.736c-.331 1.166-.741 3.389 0 6h5.736c-.188-1.814-.215-3.925 0-6m8.691 0h-7.685c-.195 1.8-.225 3.927 0 6h7.685c.196-1.811.224-3.93 0-6m6.742 0h-5.736c.062.592.308 3.019 0 6h5.736c.741-2.612.331-4.835 0-6m-12.825-7.771c-3.669.76-6.671 3.35-8.009 6.771h5.524c.426-2.985 1.321-5.403 2.485-6.771m5.954 6.771c-.639-4.266-2.242-7-3.714-7-1.471 0-3.074 2.734-3.713 7h7.427zm-1.473-6.771c1.164 1.368 2.059 3.786 2.485 6.771h5.523c-1.337-3.421-4.339-6.011-8.008-6.771" />
                        </svg>
                    </div>
                    <h4>Web Developer</h4>
                    <p>
                        Since the first semester of college, I have been on a learning journey as a web developer until
                        now.
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- end of Service --}}

    {{-- Portofolios --}}
    <section id="portofolios">
        <div class="portofolios main-container">
            <h3 class="pre-title">My Works</h3>
            <h1 class="section-title">Featured Portofolios</h1>

            <div class="grid-2">

                {{-- Portofolio 1 --}}
                <div class="portofolio">
                    <div class="portofolio-cover">
                        <img src="image/BatikShop.png" alt="portofolio 1">
                    </div>
                    <div class="portofolio-info">
                        <div class="portofolio-title">
                            <h4>Build a static web batik shop</h4>
                            <a href="/" class="portofolio-link"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z" />
                                </svg></a>
                        </div>

                        <div class="portofolio-tags">
                            <div>PHP</div>
                            <div>JavaScript</div>
                            <div>Bootstrap</div>
                        </div>

                        <p>My group and I have created a website for a batik store as part of our semester's final
                            project assigned by our professor. We utilized programming languages such as PHP, CSS,
                            JavaScript, and Bootstrap for developing the site.</p>
                    </div>
                </div>

                {{-- Portofolio 2 --}}
                <div class="portofolio">
                    <div class="portofolio-cover">
                        <img src="image/Hero.png" alt="portofolio 1">
                    </div>
                    <div class="portofolio-info">
                        <div class="portofolio-title">
                            <h4>Admin Dashboard</h4>
                            <a href="/" class="portofolio-link"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z" />
                                </svg></a>
                        </div>

                        <div class="portofolio-tags">
                            <div>php</div>
                            <div>Bootstrap</div>
                        </div>

                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam, asperiores inventore?</p>
                    </div>
                </div>

                {{-- Portofolio 3 --}}
                <div class="portofolio">
                    <div class="portofolio-cover">
                        <img src="image/Portofolio3.jpg" alt="portofolio 1">
                    </div>
                    <div class="portofolio-info">
                        <div class="portofolio-title">
                            <h4>Mobile App</h4>
                            <a href="/" class="portofolio-link"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z" />
                                </svg></a>
                        </div>

                        <div class="portofolio-tags">
                            <div>Kotlin</div>
                            <div>Android Studio</div>
                        </div>

                        <p>I created the Yogyakarta Tourism mobile application during my final assignment in semester 5,
                            this application is composable based which uses the Kotlin programming language with Android
                            Studio software.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- emd of Portofolios --}}

    {{-- Skills & Education --}}
    <section id="skills">
        <div class="skills main-container">
            <h3 class="pre-title">Learning Path</h3>
            <h1 class="section-title">Skills & Education</h1>

            <div class="skills-grid">
                <div class="skills-left">
                    {{-- Education 1 --}}
                    <div class="education">
                        <div class="line">
                            <div></div>
                        </div>

                        <div class="education-info">
                            <h4 class="education-title">Universitas Teknologi Digital Indonesia</h4>
                            <p>Teknologi Informasi - Teknik Informatika</p>
                            <h4 class="education-years">2021 - present</h4>
                        </div>
                    </div>

                    {{-- Education 2 --}}
                    <div class="education">
                        <div class="line">
                            <div></div>
                        </div>

                        <div class="education-info">
                            <h4 class="education-title">SMAN 4 PARE-PARE Sulawesi Selatan</h4>
                            <p>Ilmu Pengetahuan Alam</p>
                            <h4 class="education-years">2018 - 2021</h4>
                        </div>
                    </div>


                </div>
                <div class="skills-right">
                    <p>The following are the skills that I have learned from lecturers and self-taught until now.</p>
                    <div class="skills-list">
                        @foreach ($portofolio as $po)
                            <ul>
                                <li>{{ $po->skill }}</li>
                            </ul>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End of Skills & Education --}}

    {{-- Contact --}}
    <section id="contact">
        <div class="contact main-container">
            <div class="contact-left">
                <form class="contact-form" action="https://formspree.io/f/mqkrelnz" method="POST">
                    <div>
                        <input type="text" placeholder="Name" name="name">
                    </div>
                    <div>
                        <input type="email" placeholder="Email" name="email">
                    </div>
                    <div>
                        <textarea name="message" id="message" placeholder="Message" cols="30" rows="10"></textarea>
                    </div>
                    <div>
                        <button class="btn-submit">Send Message</button>
                    </div>
                </form>
            </div>
            <div class="contact-right">
                {{-- contact item 1 --}}
                <div class="contact-item">
                    <div class="contact-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M12 1c-3.148 0-6 2.553-6 5.702 0 3.148 2.602 6.907 6 12.298 3.398-5.391 6-9.15 6-12.298 0-3.149-2.851-5.702-6-5.702zm0 8c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2zm12 14h-24l4-8h3.135c.385.641.798 1.309 1.232 2h-3.131l-2 4h17.527l-2-4h-3.131c.435-.691.848-1.359 1.232-2h3.136l4 8z" />
                        </svg>
                    </div>
                    <div class="contact-item-detail">
                        <h4>Address</h4>
                        <p>Klaten ds.Pundungsari dk.Purwodadi.</p>
                    </div>
                </div>
                {{-- Contact item 2 --}}
                <div class="contact-item">
                    <div class="contact-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M20 22.621l-3.521-6.795c-.008.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.083-1.026-3.493-6.817-2.106 1.039c-7.202 3.755 4.233 25.982 11.6 22.615.121-.055 2.102-1.029 2.11-1.033z" />
                        </svg>
                    </div>
                    <div class="contact-item-detail">
                        <h4>Phone</h4>
                        <p>+62 856 5680 4903</p>
                    </div>
                </div>
                {{-- Contact item 3 --}}
                <div class="contact-item">
                    <div class="contact-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M0 3v18h24v-18h-24zm21.518 2l-9.518 7.713-9.518-7.713h19.036zm-19.518 14v-11.817l10 8.104 10-8.104v11.817h-20z" />
                        </svg>
                    </div>
                    <div class="contact-item-detail">
                        <h4>Email</h4>
                        <p>Muhazis73@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End of Contact --}}

    {{-- Footer --}}
    <footer>
        <div class="footer-icons">
            {{-- Instagram --}}
            <a href="https://www.instagram.com/m.zhys_/"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24">
                    <path
                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                </svg></a>

            {{-- Twitter --}}
            <a href="https://twitter.com/Maetr_22"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24">
                    <path
                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                </svg></a>

            {{-- Github --}}
            <a href="https://github.com/Etrama22"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24">
                    <path
                        d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                </svg></a>
        </div>
        <p>&#169; 2024 - Made by Muhammad Azis Etrama</p>
    </footer>
    {{-- End of Footer --}}
    <script src="js/Script.js"></script>
</body>

</html>
