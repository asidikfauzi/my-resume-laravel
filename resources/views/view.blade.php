<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Ach Sidik Fauzi | Software Engineer focused on Backend Developer building products with extra attention to detail</title>
    <meta name="description" content="I'm a software engineer focused on backend development with a strong interest in application architecture. My main skills include using Golang, Laravel, Node.js, PostgreSQL, MySQL, Redis, RabbitMQ, and Docker. I thrive on tackling new challenges and am always open to exploring new technologies.">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">
    <link href="{{asset('assets/images/favicon.png')}}" rel="icon" sizes="16x16">
    <meta name="next-size-adjust">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}?v={{ time() }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&display=swap" rel="stylesheet">
</head>

<body class="portfolio-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="{{route('home')}}" class="logo d-flex align-items-center">
                <h1 class="sitename">@asidikfauzi</h1>
            </a>
        </div>
    </header>

    <main class="main">
        <!-- About Section -->
        <section id="about"
                 class="about dark-background"
                 style="background-image: url('{{asset('assets/images/background.jpg')}}');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: fixed;">
            <div class="container"
                 data-aos="fade-up"
                 data-aos-delay="100"
                 style="display: flex; flex-wrap: nowrap; align-items: center; justify-content: center;">
                <div class="col-lg-2"
                     style="flex: 0 0 auto; max-width: 180px; margin-right: 20px;">
                    <img src="{{asset('assets/images/me.JPG')}}"
                         class="img-fluid"
                         alt=""
                         style="width: 100%; height: auto;">
                </div>
                <div class="col-lg-10 content"
                     style="flex: 1;">
                    <h1>Ach Sidik Fauzi</h1>
                    <h2>Software Engineer</h2>
                    <div class="social-links"
                         style="display: flex; gap: 10px;">
                        <a href="mailto:asidikfauzi@gmail.com" target="_blank" class="p-2">
                            <i class="bi bi-envelope"></i>
                        </a>
                        <a href="https://wa.me/6287852982548" target="_blank" class="p-2">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                        <a href="https://github.com/asidikfauzi" target="_blank" class="p-2">
                            <i class="bi bi-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/asidikfauzi/" target="_blank" class="p-2">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="{{url('/cv')}}" target="_blank" class="p-2">
                            <b class="bi">CV</b>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <span>Available for freelance ✅</span>
                        </div>
                        <div class="col-lg-6">
                            <ul></ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- /About Section -->

        <section id="resume" class="resume section">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Sumary</h3>

                        <div class="resume-item pb-0">
                            <h4>Ach Sidik Fauzi</h4>
                            <p>
                                    I am a software engineer with a primary focus on backend development and a keen
                                    interest in designing robust application architectures. My journey in software
                                    engineering has been driven by a commitment to continuous improvement and a
                                    fascination with the evolving landscape of technology. I am particularly passionate
                                    about crafting scalable and efficient backend solutions that form the backbone of
                                    high-performing applications.
                            </p>
                            <p>
                                    A key strength I bring to any team is my collaborative nature. I believe that great
                                    software is the result of diverse ideas and teamwork, and I make it a priority to
                                    work effectively with colleagues across various domains. Whether working with
                                    frontend developers, product managers, or other stakeholders, I strive to foster
                                    open communication and align efforts toward shared goals.
                            </p>
                            <p>
                                    I am also deeply motivated by the challenges that come with learning and applying
                                    new technologies. Staying updated on industry advancements allows me to bring fresh
                                    perspectives and innovative solutions to the table. This dedication to continuous
                                    learning has enabled me to adapt quickly to new tools, frameworks, and best
                                    practices, ultimately enhancing my contributions to projects and teams.
                                    With my background in backend engineering, my focus on building reliable,
                                    scalable systems, and my strong collaborative skills, I am confident in my ability
                                    to deliver meaningful contributions to any project or organization I am a part of.
                            </p>
                        </div><!-- Edn Resume Item -->

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <h4>
                                    Universitas Surabaya, <br>
                                    <span style="color: #bb4d4d;">Bachelor Computer Science</span>
                                </h4>
                                <h5>2017 - 2022</h5>
                            </div>
                            <b>Surabaya, Indonesia</b>
                            <p><b>Coursework : </b></p>
                            <ul>
                                <li>Programming Basics</li>
                                <li>Computer Architecture</li>
                                <li>Computational Mathematics and Logic</li>
                                <li>Operating Systems</li>
                                <li>Databases</li>
                                <li>Computer Networks and Security</li>
                                <li>Software Development</li>
                                <li>Artificial Intelligence and Machine Learning</li>
                                <li>Web and Mobile Application Development</li>
                                <li>Theoretical Computation</li>
                            </ul>
                        </div><!-- Edn Resume Item -->

                        <h3 class="resume-title">Projects</h3>
                        <div class="resume-item">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <h4>
                                    Diaspora Muda Sumenep, <br>
                                    <span style="color: #bb4d4d;">Backend Engineer</span>
                                </h4>
                                <h5>Jan 2024 - Present</h5>
                            </div>
                            <p>
                                Home of Diaspora Muda Sumenep, A youth forum for young immigrants from Sumenep Regency
                                to contribute to local development. Focuses on developing human resources through
                                seminars, training, cadre formation, and networking
                            </p>
                            <p>
                                <b>Link : </b><a href="https://diasporamudasumenep.com/" style="color: #b95959;" target="_blank">diasporamudasumenep.com</a>
                            </p>
                        </div><!-- Edn Resume Item -->

                        <div class="resume-item">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <h4>
                                    Sales Tap, <br>
                                    <span style="color: #bb4d4d;">Backend Engineer</span>
                                </h4>
                                <h5>Dec 2021 - Mar 2022</h5>
                            </div>
                            <p>
                                Our system ensures accurate sales attendance and provides the ability to monitor sales
                                activities in a timely manner. Sales can easily take attendance with photos and location
                                notes every time they visit a target store. This helps ensure transparency in field
                                operations and allows management to track sales performance effectively
                            </p>
                            <p>
                                <b>Link : </b><a href="https://install.appcenter.ms/users/ariefyusron98/apps/salestap/distribution_groups/internal%20test" style="color: #b95959;" target="_blank">apk.sales.tap</a>
                            </p>
                        </div><!-- Edn Resume Item -->
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="resume-title">Professional Experience</h3>
                        <div class="resume-item">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <h4>
                                    Sentra Raya Solusi, <br>
                                    <span style="color: #bb4d4d;">Backend Engineer</span>
                                </h4>
                                <h5>Jul 2024 - Present</h5>
                            </div>
                            <p><b>South Jakarta, Indonesia</b> (Hybrid)</p>
                            <p><b>Projects :</b></p>
                            <ol>
                                <li>
                                    <b>SSDM POLRI</b>
                                    <br>
                                    Developing an integrated application to unify various existing POLRI applications, combining them into a single system to support conservation, operational processes, and data management.
                                    <p class="mt-2"><b>Responsibilities :</b></p>
                                    <ul>
                                        <li>Contribute to the development of the Marriage, Divorce, and Reconciliation subsystem for SSDM POLRI, focusing on data integrity and efficient data flow.</li>
                                        <li>Performed bug fixes and code refactoring to improve system stability and maintainability.</li>
                                    </ul>
                                    <b>Technologies : </b><br>
                                    NestJS, PostgreSQL, Redis, MinIO, and Docker
                                </li>
                                <li class="mt-3">
                                    <b>Audit Trail Record</b><br>
                                    Building an Audit Trails Record application to monitor user activities for Tugu Insurance clients, including API usage across client-owned applications. The application is based on blockchain technology, with communication facilitated by smart contracts to ensure data integrity and enable transparent, reliable auditing of user activities.
                                    <p class="mt-2"><b>Responsibilities :</b></p>
                                    <ul>
                                        <li>Lead the development and implementation of application-related flows for the Tugu Insurance Project.</li>
                                        <li>Delegate tasks to frontend, backend, and DevOps teams, providing guidance on all project aspects.</li>
                                        <li>Monitor and ensure the quality and accuracy of applications.</li>
                                        <li>Oversaw the end-to-end development of an audit trail logs application in collaboration with Tugu Insurance</li>
                                    </ul>
                                    <b>Technologies : </b><br>
                                    Nest.js, PostgreSQL, Ethers.js for core library, Docker
                                </li>
                            </ol>
                        </div><!-- Edn Resume Item -->

                        <div class="resume-item">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <h4>
                                    Bookingtogo, <br>
                                    <span style="color: #bb4d4d;">Backend Developer</span>
                                </h4>
                                <h5>May 2023 - Jun 2024</h5>
                            </div>
                            <p>
                                <b>West Jakarta, Indonesia</b> (On-site)
                            </p>
                            Bookingtogo is a travel and tourism platform designed to simplify travel planning and
                            booking for individuals and groups. The platform integrates a variety of travel-related
                            services, offering users a comprehensive solution to manage their travel efficiently.
                            Its key features include Flight Booking, Hotel Booking, Train Booking.
                            <p class="mt-3">
                                <b>Link Product : </b><a href="https://bookingtogo.com" style="color: #b95959;" target="_blank">bookingtogo.com</a>
                            </p>
                            <p><b>Contributions :</b></p>
                            <ul>
                                <li>Introduced RabbitMQ and Docker to the company, enabling faster data processing and significantly reducing cronjob workload with RabbitMQ’s delay message functionality.</li>
                                <li>Built flight and hotel pricing tools to find the lowest prices for the next two months, utilizing Redis and RabbitMQ for optimized data caching and retrieval.</li>
                            </ul>
                            <p><b>Responsibilities :</b></p>
                            <ul>
                                <li>Integrated hotel data from multiple vendors into a unified format for enhanced accessibility and efficiency.</li>
                                <li>Created a rescheduling feature to streamline processes for the ticketing team.</li>
                                <li>Developed promotional features in collaboration with Get And Ride (third parties), providing special offers on round-trip flights from Jakarta to Bali.</li>
                                <li>Refactored and updated all payment gateway code to accommodate new Get And Ride promotional features.</li>
                                <li>Performed bug fixes and code refactoring to improve system stability and maintainability.</li>
                            </ul>
                            <b>Technologies : </b><br>
                            Golang, Laravel, PostgreSQL, RabbitMQ, Redis, Docker
                        </div><!-- Edn Resume Item -->

                        <div class="resume-item">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <h4>
                                    Vorta Siber, <br>
                                    <span style="color: #bb4d4d;">Full-Stack Developer</span>
                                </h4>
                                <h5>Mar 2022 - May 2023</h5>
                            </div>
                            <p>
                                <b>South Jakarta, Indonesia</b> (Hybrid)
                            </p>
                            <p><b>Projects :</b></p>
                            <ol>
                                <li>
                                    <b>Sicana Kejaksaan Agung RI</b>
                                    <br>
                                    The Budget Planning System (Sistem Perencanaan Anggaran) for the Attorney General's
                                    Office of Indonesia is designed to streamline and modernize the financial planning
                                    process. This system ensures transparency, accountability, and efficiency in managing
                                    and allocating the organization's budget.
                                    <p class="mt-2">
                                        <b>Link Input Tools : </b><a href="https://sicana.kejaksaan.go.id/" style="color: #b95959;" target="_blank">sicana.kejaksaan.go.id</a>
                                        <br>
                                        <b>Link Dashboard : </b><a href="https://dasti.kejaksaan.go.id/v4/login" style="color: #b95959;" target="_blank">dasti.kejaksaan.go.id</a>
                                    </p>
                                    <p class="mt-2"><b>Responsibilities :</b></p>
                                    <ul>
                                        <li>Contribute to the development of the Suncana (Budget Planning and Analysis Information System) subsystem for Kejaksaan Agung RI, focusing on data integrity and efficient data flow.</li>
                                        <li>Conducted regular client visits to deliver presentations and explain the system's workflow, addressing inquiries and providing tailored solutions based on client feedback.</li>
                                        <li>Performed bug fixes and code refactoring to improve system stability and maintainability.</li>
                                    </ul>
                                    <b>Technologies : </b><br>
                                    Laravel, Node.js, PostgreSQL
                                </li>
                                <li class="mt-3">
                                    <b>Secret Project - Civil Records Management System with Facial Recognition</b><br>
                                    The Secret Project is a highly specialized system designed to manage and analyze civil records data. The platform leverages advanced facial recognition technology to allow users to search for individuals by uploading their photographs. This enables efficient and accurate identification while offering insights into their historical records, including any prior offenses or criminal activities documented in the system
                                    <p class="mt-2"><b>Responsibilities :</b></p>
                                    <ul>
                                        <li>Developed and integrated facial recognition algorithms to enhance the search functionality, ensuring high accuracy and speed.</li>
                                        <li>Optimized the system's backend for real-time processing, enabling quick retrieval of historical data.</li>
                                        <li>Collaborated with stakeholders to refine requirements and ensure the system aligns with operational needs.</li>
                                    </ul>
                                    <b>Technologies : </b><br>
                                    Node.js, PostgreSQL, RabbitMQ, Docker, Kong API Gateway for microservice architecture
                                </li>
                                <li class="mt-3">
                                    <b>OneBlock</b><br>
                                    Building an Audit Trails Record application to monitor user activities, including API usage across client-owned applications. The application is based on blockchain technology, with communication facilitated by smart contracts to ensure data integrity and enable transparent, reliable auditing of user activities.
                                    <p class="mt-2"><b>Responsibilities :</b></p>
                                    <ul>
                                        <li>Performed bug fixes and code refactoring to improve system stability and maintainability.</li>
                                        <li>Migrate from nest.js to golang where this application performs an audit trail of application usage using blockchain</li>
                                    </ul>
                                    <b>Technologies : </b><br>
                                    Golang, Nest.js, PostgreSQL, Web3 for core library, Docker
                                </li>
                            </ol>
                        </div><!-- Edn Resume Item -->


                    </div>
                </div>
            </div>
        </section><!-- /Resume Section -->

        <!-- Interests Section -->
        <section id="interests" class="interests section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Skills</h2>
                <div><span>My</span> <span class="description-title">Skills</span></div>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="features-item">
                            <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <g fill="none">
                                    <path fill="#ffffff" d="M11 1 19 5, 18 18, 20 18 C 1 20, 10 0, 0 5 "/>
                                    <path d="m21.4679537 3.20617761c.7135135 1.47335907-1.4548263 1.63088803-1.3436294 2.28880308.203861 1.18610039.0648649 2.94671815-.0926641 4.67953671-.2687258 2.9374517 1.9274132 9.9706563-2.650193 12.7969112-.8617761.5374517-2.9096525.8339768-4.9297297.8803089h-.0092665-.0092664c-2.0200772-.0463321-4.34594591-.3428572-5.20772197-.8803089-4.56833977-2.8262549-2.37220078-9.8594595-2.63166024-12.7969112-.16679536-1.73281856-.3057915-3.49343632-.09266409-4.67953671.11119691-.65791505-2.05714286-.8061776-1.34362934-2.28880308.61158301-1.26949807 2.12200772-.14826255 2.5019305-.54671815 1.93667954-2.01081081 4.29034749-2.54826255 6.14362934-2.5945946h1.019305c1.8440155.0926641 4.1976834.5930502 6.1436294 2.5945946.3799227.3984556 1.881081-.72277992 2.5019305.54671815zm-10.0355213 7.70038609c-.0833977.0370656-.2223938.9451738.203861.9915058.2872587.0277992 1.0749035.1204633 1.2602317 0 .36139-.2316602.3243243-.7876448.1204633-.9266409-.3428571-.2223939-1.4918919-.1111969-1.584556-.0648649zm-2.35366792-6.80154439c-.95444016-.11119692-2.55752896.77837837-2.7984556 2.66872586-.25945946 1.96447877 2.05714286 3.91042473 4.28108112 1.96447877 1.1953668-1.04710425 1.6123552-4.27181467-1.48262552-4.63320463zm6.44942082 0c-3.0949807.36138996-2.6779922 3.58610038-1.4826255 4.63320463 2.2239383 1.94594596 4.5405406 0 4.2810811-1.96447877-.2316602-1.89034749-1.834749-2.77992278-2.7984556-2.66872586z" fill="#8cc5e7"/>
                                    <path d="m12.3127413 8.98841699c.5837838-.08339768 1.9830116.58378378 1.8903475 1.37142861-.1111969.9173745-3.6046332 1.0378378-3.7899614-.0555985-.1111969-.66718146.4169884-1.09343629 1.8996139-1.31583011zm7.8857143 7.38532821c-.2872587-.0092664-.4725869-.3891892-.4725869-.6208494 0-.4169885.0555985-.9081082.36139-1.1212356.6301158-.4355212 1.1305019 1.7513514.1111969 1.742085zm-15.78069498 0c-1.01930502.0092664-.51891892-2.1776062.11119691-1.742085.3057915.2131274.36138996.7042471.36138996 1.1212356 0 .2316602-.18532818.611583-.47258687.6208494zm13.84401548 6.7181467c.1853281.2687259.1945946.454054-.1019305.5930502-1.130502.5189189-2.1405406-.1760618-1.7606178-.3706564.8061776-.407722 1.3065637-1.0471042 1.8625483-.2223938zm-11.90733595.0926641c.55598456-.8247104 1.05637066-.1853282 1.86254827.2223938.37992278.1945946-.63011583.8895753-1.76061776.3706564-.2965251-.1389962-.28725869-.3243243-.10193051-.5930502z" fill="#b8937f"/>
                                    <path  d="m19.7351351 3.42857143c.0463321-.1945946.5281854-.28725869.7969112.04633204.3243244.3984556-.4725868.94517375-.5096525.72277993-.0926641-.6023166-.3428571-.57451738-.2872587-.76911197zm-14.85405402 0c.05559846.19459459-.19459459.16679537-.28725869.76911197-.03706563.22239382-.83397683-.32432433-.50965251-.72277993.25945946-.33359073.74131275-.24092664.7969112-.04633204zm10.86023162 4.51274131c-.5834174 0-1.0563706-.47295325-1.0563706-1.05637066 0-.5834174.4729532-1.05637065 1.0563706-1.05637065s1.0563707.47295325 1.0563707 1.05637065c0 .58341741-.4729533 1.05637066-1.0563707 1.05637066zm-.2779922-1.17683398c.184237 0 .3335907-.14935365.3335907-.33359073 0-.18423707-.1493537-.33359073-.3335907-.33359073-.1842371 0-.3335908.14935366-.3335908.33359073 0 .18423708.1493537.33359073.3335908.33359073zm-4.1050193 2.66872587c.1111969-.42625482.5003861-.56525096.815444-.57451737.8061776-.01853282 1.1119691.41698842 1.1397683.75984556.0555985.58378378-2.2054054.72277988-1.9552123-.18532819zm-2.48339773-1.49189189c-.5834174 0-1.05637065-.47295325-1.05637065-1.05637066 0-.5834174.47295325-1.05637065 1.05637065-1.05637065.58341741 0 1.05637066.47295325 1.05637066 1.05637065 0 .58341741-.47295325 1.05637066-1.05637066 1.05637066zm.27799228-1.17683398c.18423708 0 .33359074-.14935365.33359074-.33359073 0-.18423707-.14935366-.33359073-.33359074-.33359073-.18423707 0-.33359073.14935366-.33359073.33359073 0 .18423708.14935366.33359073.33359073.33359073z" fill="#000"/>
                                </g>
                            </svg>
                            <h3><a href="https://go.dev/" target="_blank" class="stretched-link">&nbsp;&nbsp;Golang</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="features-item">
                            <svg height="24" width="24" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><rect fill="#f7df1e" height="512" rx="15%" width="512"/><path d="m324 370c10 17 24 29 47 29 20 0 33-10 33-24 0-16-13-22-35-32l-12-5c-35-15-58-33-58-72 0-36 27-64 70-64 31 0 53 11 68 39l-37 24c-8-15-17-21-31-21s-23 9-23 21c0 14 9 20 30 29l12 5c41 18 64 35 64 76 0 43-34 67-80 67-45 0-74-21-88-49zm-170 4c8 13 14 25 31 25 16 0 26-6 26-30v-166h48v164c0 50-29 72-72 72-39 0-61-20-72-44z"/></svg>
                            <h3><a href="https://www.javascript.com/" target="_blank" class="stretched-link">&nbsp;&nbsp;JavaScript</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="features-item">
                            <svg height="24" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><rect fill="#777bb3" height="512" rx="15%" width="512"/><g stroke="#fff" stroke-width="6"><path id="a" d="m155 202h-58a3 3 0 0 0 -3 2l-27 141c0 3 3 3 3 3h30c3 0 3-2 3-2l7-35h27c42 0 63-28 68-53s1-56-50-56zm13 54c-4 19-17 27-35 27h-18l11-53h18c27 0 26 10 24 26z"/><path d="m275 311c-4 0-3-4-3-4l12-61c0-8 6-16-18-15h-18l-15 78s0 3-4 3h-29c-3 0-3-3-3-3l28-141s0-2 4-2h30c3 0 2 3 2 3l-7 34h26c36 0 45 17 42 37l-13 69s0 3-5 3z"/><use x="239" xlink:href="#a"/></g></svg>
                            <h3><a href="https://www.php.net/" target="_blank" class="stretched-link">&nbsp;&nbsp;PHP</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="features-item">
                            <svg height="24" width="24" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g fill="#83cd29"><path d="m16 30a2.151 2.151 0 0 1 -1.076-.288l-3.424-2.027c-.511-.286-.262-.387-.093-.446a6.828 6.828 0 0 0 1.549-.7.263.263 0 0 1 .255.019l2.631 1.563a.34.34 0 0 0 .318 0l10.26-5.922a.323.323 0 0 0 .157-.278v-11.846a.331.331 0 0 0 -.159-.283l-10.26-5.917a.323.323 0 0 0 -.317 0l-10.254 5.919a.33.33 0 0 0 -.162.281v11.841a.315.315 0 0 0 .161.274l2.814 1.624c1.525.762 2.459-.136 2.459-1.038v-11.691a.3.3 0 0 1 .3-.3h1.3a.3.3 0 0 1 .3.3v11.692c0 2.035-1.108 3.2-3.038 3.2a4.389 4.389 0 0 1 -2.363-.642l-2.697-1.547a2.166 2.166 0 0 1 -1.076-1.872v-11.841a2.162 2.162 0 0 1 1.076-1.875l10.261-5.924a2.246 2.246 0 0 1 2.156 0l10.26 5.924a2.165 2.165 0 0 1 1.077 1.87v11.846a2.171 2.171 0 0 1 -1.077 1.872l-10.26 5.924a2.152 2.152 0 0 1 -1.078.288z"/><path d="m14.054 17.953a.3.3 0 0 1 .3-.3h1.327a.3.3 0 0 1 .295.251c.2 1.351.8 2.032 3.513 2.032 2.161 0 3.082-.489 3.082-1.636 0-.661-.261-1.152-3.62-1.481-2.808-.278-4.544-.9-4.544-3.144 0-2.07 1.745-3.305 4.67-3.305 3.287 0 4.914 1.141 5.12 3.589a.3.3 0 0 1 -.295.323h-1.336a.3.3 0 0 1 -.288-.232c-.319-1.421-1.1-1.875-3.2-1.875-2.36 0-2.634.822-2.634 1.438 0 .746.324.964 3.51 1.385 3.153.417 4.651 1.007 4.651 3.223 0 2.236-1.864 3.516-5.115 3.516-4.495.006-5.436-2.055-5.436-3.784z"/></g></svg>
                            <h3><a href="https://nodejs.org/en" target="_blank" class="stretched-link">&nbsp;&nbsp;Node.js</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="features-item">
                            <svg height="24" preserveAspectRatio="xMidYMid" viewBox="0 0 256 264" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m255.855641 59.619717c.094924.3513426.144359.7135979.144359 1.0775366v56.5680914c0 1.477861-.790591 2.842804-2.072582 3.57804l-47.478632 27.335401v54.181012c0 1.474524-.783663 2.835623-2.062271 3.57804l-99.107585 57.052725c-.22685.128892-.474322.211383-.721795.29903-.092802.030934-.180448.087646-.278406.113424-.6928.182443-1.421028.182443-2.113828 0-.113425-.030934-.216538-.092802-.324808-.134047-.226849-.082491-.464011-.15467-.680549-.278407l-99.08696173-57.052725c-1.28121047-.736019-2.07258227-2.100466-2.07258227-3.57804v-169.7042732c0-.3712087.05155677-.7321061.14435896-1.0826922.03093407-.1185806.10311355-.2268498.14435897-.3454304.07733516-.2165384.14951464-.4382325.26293954-.639304.07733516-.1340476.19076006-.2423168.28356225-.3660531.11858058-.1649816.2268498-.335119.36605309-.4794779.11858058-.1185806.27325089-.2062271.4072985-.3093407.14951464-.1237362.28356225-.2577838.4536996-.3557417h.00515568l49.54605871-28.52636244c1.276705-.73465813 2.8478368-.73465813 4.1245418 0l49.5460589 28.52636244h.010311c.164982.1031135.304185.2320055.4537.350586.134047.1031136.283562.1959158.402143.3093407.144359.1495146.247472.319652.371208.4846336.087647.1237363.206228.2320055.278407.3660531.118581.2062271.185604.4227656.268095.639304.041246.1185806.113425.2268498.144359.3505861.094925.3513425.143456.7135978.144359 1.0775365v105.9955692l41.286664-23.772828v-54.1861681c0-.3608974.051557-.7269505.144359-1.0723809.03609-.1237362.103113-.2320054.144359-.350586.082491-.2165385.15467-.4382326.268095-.639304.077335-.1340476.19076-.2423168.278407-.3660531.123736-.1649817.226849-.335119.371208-.479478.118581-.1185806.268096-.2062271.402143-.3093406.15467-.1237363.288718-.2577839.4537-.3557417h.005155l49.551215-28.5263625c1.276422-.7357166 2.84812-.7357166 4.124542 0l49.546058 28.5263625c.175293.1031135.309341.2320054.464011.350586.128892.1031136.278407.1959157.396988.3093406.144358.1495147.247472.319652.371208.4846337.092802.1237363.206227.2320055.278407.3660531.11858.2010714.185604.4227655.268095.639304.046401.1185806.113425.2268498.144359.350586zm-8.115036 55.258549v-47.0403994l-17.338543 9.9813913-23.953276 13.7914367v47.0403994l41.296975-23.772828zm-49.546059 85.094454v-47.071334l-23.561445 13.456318-67.281589 38.399484v47.514722zm-189.93515099-160.1765821v160.1765821l90.83272249 52.294035v-47.504411l-47.4528538-26.855923-.015467-.010311-.0206227-.010312c-.159826-.092802-.2938736-.226849-.4433883-.340274-.1288919-.103114-.2784066-.185605-.3918315-.29903l-.0103113-.015467c-.1340476-.128892-.2268498-.288718-.3402747-.433077-.1031136-.139203-.2268498-.257783-.3093406-.402142l-.0051557-.015467c-.0928022-.154671-.1495147-.340275-.2165385-.515568-.0670238-.15467-.1546703-.299029-.1959157-.464011v-.005156c-.0515568-.195916-.0618681-.402143-.0824908-.603214-.0206228-.15467-.0618682-.309341-.0618682-.464011v-.010311-110.7491042l-23.948121-13.7965924-17.33854269-9.9710799zm45.42151689-30.90312969-41.281508 23.76251659 41.2711967 23.7625166 41.2763523-23.7676722-41.2763523-23.75736099zm21.4682402 148.29790179 23.948121-13.786281v-103.6084911l-17.3385427 9.9813912-23.9532767 13.7914367v103.6084912zm127.1750919-120.256173-41.276353 23.7625166 41.276353 23.7625166 41.271196-23.7676723zm-4.129698 54.6759576-23.953276-13.7914367-17.338543-9.9813913v47.0403994l23.948121 13.786281 17.343698 9.986547zm-94.977887 106.0058804 60.543119-34.56366 30.263825-17.271519-41.245418-23.74705-47.488943 27.340557-43.2819113 24.917388z" fill="#ff2d20"/></svg>
                            <h3><a href="https://laravel.com/" target="_blank" class="stretched-link">&nbsp;&nbsp;Laravel</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="features-item">
                            <svg height="24" preserveAspectRatio="xMidYMid" viewBox="0 0 256 264" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m255.007926 158.085617c-1.534817-4.648204-5.555732-7.886338-10.756138-8.663797-2.451806-.365968-5.260121-.209885-8.5828.475344-5.79163 1.194864-10.088646 1.649515-13.224498 1.738199 11.836304-19.985146 21.461431-42.775649 27.002383-64.2288041 8.959409-34.6882956 4.171677-50.4911224-1.423076-57.639612-14.806615-18.9191686-36.409349-29.08349193-62.472277-29.39506699-13.902042-.1696813-26.107862 2.57537182-32.474162 4.5488776-5.928203-1.04528407-12.302781-1.6294134-18.991298-1.73760739-12.535723-.19983372-23.612896 2.53280369-33.077801 8.14943188-5.2412013-1.77130717-13.6501805-4.26922865-23.3622174-5.86375983-22.8425312-3.75013395-41.2520647-.82771362-54.7177829 8.68508083-16.30595847 11.5182263-23.86534877 31.5299769-22.46710397 59.4800924.44341802 8.8742725 5.4079261 35.8736996 13.22390767 61.4802036 4.49212 14.717339 9.282217 26.939713 14.2372655 36.329533 7.0266975 13.314956 14.5452933 21.15636 22.9861987 23.971769 4.7315658 1.576795 13.3273718 2.680019 22.3689607-4.848628 1.1457921 1.387012 2.6741062 2.766337 4.7037783 4.046928 2.5765543 1.625275 5.7277783 2.953164 8.8742725 3.740084 11.3414504 2.83551 21.9645639 2.126041 31.0274369-1.847576.055575 1.611677.098734 3.151816.13539 4.481479.060305 2.157376.119427 4.272184.198651 6.249829.536832 13.374669 1.446725 23.773709 4.142707 31.049311.147806.40085.347048 1.010402.557524 1.65661 1.344444 4.118467 3.594051 11.012139 9.315326 16.411788 5.925838 5.592388 13.092656 7.30812 19.656425 7.307529 3.291935 0 6.433108-.431594 9.187621-1.022227 9.820822-2.104166 20.973672-5.310965 29.041515-16.798448 7.627381-10.860194 11.335538-27.216998 12.006577-52.990817.08691-.728388.167317-1.424259.244767-2.087612.052028-.447557.105238-.905164.159039-1.361589l1.797321.157856.462929.031335c10.002328.455834 22.232388-1.665478 29.743298-5.154291 5.935298-2.754512 24.953792-12.794679 20.475861-26.351445"/><path d="m237.905589 160.722476c-29.739751 6.13454-31.784203-3.934596-31.784203-3.934596 31.400499-46.593183 44.526854-105.7362772 33.199002-120.2112149-30.903279-39.48489605-84.398411-20.8110854-85.291159-20.3262817l-.287335.0514365c-5.875585-1.2196952-12.451178-1.9463095-19.841478-2.0669192-13.45685-.2205266-23.664333 3.5278337-31.409959 9.4016443 0 0-95.43005977-39.3134411-90.9917411 49.4440647.9441848 18.8825127 27.0638707 142.8734223 58.2184204 105.4223373 11.3869746-13.694522 22.3890623-25.273644 22.3890623-25.273644 5.4646836 3.630115 12.0065774 5.481829 18.8647764 4.816702l.532692-.452287c-.165542 1.700361-.089866 3.363474.213432 5.33225-8.025866 8.967094-5.667473 10.541524-21.7115193 13.844101-16.2344203 3.345737-6.6973857 9.302319-.4706143 10.859012 7.5487482 1.887778 25.0129146 4.561884 36.8131546-11.956915l-.470614 1.884822c3.14472 2.518615 5.352942 16.383409 4.982836 28.951649-.370106 12.568832-.617238 21.197746 1.860582 27.9377s4.947362 21.90485 26.038688 17.385534c17.623797-3.776739 26.756434-13.563862 28.026975-29.889331.901616-11.606318 2.94193-9.890586 3.070817-20.267159l1.636508-4.91248c1.887187-15.733063.299751-20.808721 11.15758-18.447963l2.638633.231759c7.991575.363603 18.450919-1.285321 24.589598-4.138568 13.218586-6.13454 21.058217-16.376905 8.024683-13.685653z" fill="#336791"/><g fill="#fff"><path d="m108.076342 81.5250624c-2.679427-.3730624-5.106993-.0277876-6.334966.9016166-.69114.5232332-.904572 1.1292379-.961921 1.546642-.15431 1.1049977.620194 2.3264665 1.095538 2.9567113 1.345626 1.7837229 3.312037 3.0099215 5.258346 3.2801109.282014.0390208.562255.0579399.841312.0579399 3.24582 0 6.196028-2.5268914 6.456167-4.3922032.325173-2.3359261-3.066088-3.8932102-6.354476-4.3508175"/><path d="m196.860453 81.5989654h-.000592c-.255408-1.8310208-3.514235-2.3530716-6.606337-1.9232518-3.087372.4304111-6.081921 1.8239261-5.831833 3.6590855.201016 1.4272148 2.776979 3.8636489 5.827695 3.8630577.257182 0 .517321-.0171455.779233-.0538014 2.036175-.2820138 3.530199-1.5750208 4.239667-2.3205542 1.081349-1.1351502 1.706273-2.401552 1.592167-3.2245358"/><path d="m247.802088 160.025423c-1.133968-3.4291-4.783594-4.532915-10.847779-3.280111-18.005136 3.715843-24.453025 1.141653-26.570789-.417404 13.995455-21.320721 25.50836-47.091585 31.719168-71.1372567 2.942522-11.3899307 4.567797-21.9675197 4.700231-30.5887483.146624-9.4643141-1.464462-16.4176998-4.788914-20.6656443-13.402458-17.125395-33.07189-26.31124253-56.882254-26.56369519-16.368629-.18387067-30.198541 4.00554269-32.879742 5.18326099-5.646189-1.4041571-11.801422-2.2661617-18.501764-2.3761293-12.288591-.19865132-22.909931 2.7432794-31.704388 8.7394734-3.8198986-1.4213025-13.6921572-4.8101986-25.7643605-6.7547344-20.8725727-3.36110856-37.4581801-.8147067-49.294485 7.5706235-14.1231593 10.0058753-20.64317778 27.8915843-19.37973205 53.1593164.42509007 8.5018014 5.26839725 34.6534139 12.91292375 59.6988449 10.0620416 32.963696 20.9990947 51.62509 32.5078615 55.463317 1.3468083.44933 2.900545.763861 4.6127298.763861 4.1982817 0 9.3448868-1.892508 14.700194-8.330346 8.8949653-10.701155 17.1998891-19.66825 20.2612471-22.926485 4.5240462 2.428748 9.4932844 3.784425 14.5772194 3.920406.008868.133026.022466.266051.034291.398485-1.019861 1.209645-1.856443 2.269709-2.56946 3.174873-3.521921 4.470836-4.255039 5.401423-15.5923507 7.736167-3.2245358.665127-11.7907806 2.430521-11.9155288 8.434401-.1365728 6.559631 10.1241201 9.314735 11.2935612 9.606799 4.0741247 1.019862 7.9986697 1.522994 11.7417093 1.522994 9.103667-.000592 17.114161-2.992185 23.516526-8.78086-.197469 23.385866.778051 46.430005 3.585774 53.451381 2.29927 5.747289 7.917672 19.794772 25.664443 19.793589 2.60316 0 5.470005-.302706 8.623003-.978475 18.520683-3.971252 26.563104-12.156749 29.674716-30.203271 1.664886-9.644637 4.522272-32.67636 5.865533-45.029986 2.836102.884471 6.487501 1.28946 10.434513 1.288869 8.232203 0 17.730808-1.748841 23.687981-4.513996 6.691474-3.107473 18.767816-10.734263 16.577922-17.359519zm-44.105903-83.4808318c-.061488 3.647261-.563437 6.9581155-1.095538 10.4144111-.572305 3.7170254-1.164712 7.5599815-1.3137 12.2253303-.147215 4.5400094.419769 9.2603414.968425 13.8245914 1.107954 9.219547 2.244877 18.711649-2.156785 28.07782-.684047-1.214966-1.344444-2.54049-1.949857-4.008499-.546882-1.326116-1.734651-3.456296-3.378845-6.40473-6.399409-11.475658-21.384573-38.3491547-13.713442-49.3151778 2.28449-3.264739 8.083215-6.6199354 22.639742-4.813746zm-17.643899-61.7864573c21.333728.4712056 38.209035 8.4521386 50.157672 23.7199077 9.163973 11.7109653-.927039 64.9979864-30.140009 110.9686094-.288517-.366559-.582355-.736665-.886245-1.116231-.121201-.151944-.244766-.306254-.369515-.462337 7.548749-12.467141 6.072462-24.801847 4.758763-35.738309-.539788-4.487982-1.049423-8.727058-.919945-12.7083606.134208-4.2213395.692323-7.8402217 1.23152-11.3402679.663944-4.3135704 1.338531-8.7761293 1.152295-14.0374319.138938-.551612.195104-1.2037321.122384-1.9776443-.475345-5.0455058-6.235049-20.1435935-17.975576-33.8109192-6.421284-7.474254-15.786863-15.8394827-28.573856-21.4815335 5.500157-1.1398799 13.021709-2.2029007 21.442512-2.0154827zm-119.3781798 161.0198611c-5.8998244 7.093506-9.9745404 5.734282-11.314254 5.287908-8.7306051-2.91237-18.8600462-21.36388-27.7910762-50.624148-7.7278892-25.317986-12.2442494-50.7766834-12.6013487-57.9157134-1.1286467-22.5776628 4.344314-38.3130901 16.2675288-46.768776 19.4039723-13.760739 51.3064203-5.5243972 64.1253395-1.3468083-.1844619.1815057-.3760185.3517783-.5587067.5362402-21.0351593 21.2444526-20.5361663 57.5408776-20.4847298 59.7591501-.0017736.8560924.0697645 2.0681016.1684989 3.7353533.3618291 6.104388 1.0352332 17.4665311-.7638615 30.3339311-1.6725727 11.956914 2.0131178 23.660194 10.110522 32.108785.8383556.87442 1.7133672 1.69563 2.6173487 2.46836-3.6046928 3.860102-11.4378199 12.395603-19.775261 22.425718zm22.4789284-29.993385c-6.5265219-6.809127-9.4903279-16.281127-8.1328776-25.989026 1.900194-13.592831 1.1984111-25.4309096.8218014-31.7907064-.0526189-.8897921-.0993256-1.6696166-.1271131-2.2850808 3.0731824-2.7243603 17.3139953-10.3552887 27.4694507-8.028231 4.635196 1.0618384 7.458291 4.2172009 8.632462 9.6458199 6.0766 28.1026513.804655 39.8159813-3.431465 49.2282683-.873238 1.939214-1.697995 3.772009-2.402734 5.668655l-.5457 1.465645c-1.382282 3.706383-2.668194 7.152037-3.465164 10.424462-6.937422-.021284-13.6868359-2.984499-18.8186604-8.339806zm1.0647945 37.900415c-2.0255335-.506087-3.8476859-1.385237-4.9166189-2.114217.8927482-.42036 2.4819584-.991482 5.2376535-1.559057 13.3374223-2.746236 15.3966563-4.683677 19.8946883-10.394901 1.031686-1.30897 2.200536-2.793534 3.819307-4.601497.000591-.001182.001183-.001773.001774-.002365 2.411603-2.699528 3.514235-2.241921 5.514346-1.412434 1.621136.67104 3.199705 2.702485 3.84 4.938494.302707 1.055927.643252 3.060767-.470023 4.619825-9.396323 13.155917-23.087889 12.986827-32.9211269 10.526152zm69.7987249 64.952462c-16.316009 3.495908-22.092859-4.829117-25.89975-14.346051-2.457127-6.144591-3.664407-33.851122-2.807723-64.447556.011233-.407353-.046707-.800517-.159039-1.170032-.097552-.713608-.247723-1.435492-.455834-2.162107-1.274679-4.451917-4.379196-8.176037-8.103908-9.719723-1.479833-.613099-4.196508-1.738198-7.460656-.90339.696462-2.868028 1.903742-6.106161 3.21212-9.613302l.549248-1.475696c.61842-1.663113 1.393515-3.385939 2.214133-5.209274 4.432998-9.84861 10.504278-23.337386 3.915086-53.8108456-2.46836-11.4135797-10.710023-16.9870485-23.20436-15.6928591-7.4908086.7750947-14.343095 3.7974318-17.7609611 5.5303094-.7348914.3724712-1.4071131.7319354-2.034993 1.0825312.9536443-11.5004896 4.5583371-32.9920739 18.0406101-46.5896351 8.488203-8.5609238 19.793588-12.7887667 33.567926-12.5611455 27.140138.4446005 44.544 14.3726559 54.366004 25.9789746 8.463372 10.0017367 13.046541 20.076194 14.875788 25.5095427-13.754827-1.3982448-23.109765 1.3172472-27.852564 8.096813-10.316859 14.7474919 5.644416 43.3721944 13.315548 57.1287944 1.406522 2.52157 2.620896 4.700231 3.002826 5.626088 2.497922 6.054134 5.731917 10.095741 8.093266 13.04654.723658.903982 1.426032 1.780767 1.959908 2.546402-4.165765 1.201367-11.648887 3.975982-10.967206 17.846688-.549838 6.960481-4.461376 39.546384-6.447889 51.059289-2.62267 15.209829-8.219788 20.875529-23.95758 24.249644zm68.104277-77.936923c-4.259769 1.977644-11.388748 3.461025-18.161219 3.779103-7.480166.350596-11.287649-.837764-12.183353-1.568517-.420952-8.643695 2.79708-9.547085 6.20194-10.503095.535057-.150762 1.057108-.296794 1.560831-.472979.313349.254818.656259.507862 1.031686.755585 6.012157 3.968295 16.735778 4.396341 31.874069 1.271722.055575-.011824.11115-.022466.166134-.033699-2.041496 1.909062-5.53563 4.471427-10.490088 6.77188z"/></g></svg>
                            <h3><a href="https://www.postgresql.org/" target="_blank" class="stretched-link">&nbsp;&nbsp;PostgreSQL</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="700">
                        <div class="features-item">
                            <svg height="24" width="24" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g fill-rule="evenodd"><path d="m8.785 6.865a3.055 3.055 0 0 0 -.785.1v.035h.038a6.461 6.461 0 0 0 .612.785c.154.306.288.611.441.917.019-.019.038-.039.038-.039a1.074 1.074 0 0 0 .4-.957 4.314 4.314 0 0 1 -.23-.4c-.115-.191-.364-.287-.517-.44" fill="#5d87a1"/><path d="m27.78 23.553a8.849 8.849 0 0 0 -3.712.536c-.287.115-.745.115-.785.478.154.153.172.4.307.613a4.467 4.467 0 0 0 .995 1.167c.4.306.8.611 1.225.879.745.461 1.588.728 2.314 1.187.422.268.842.612 1.264.9.21.153.343.4.611.5v-.058a3.844 3.844 0 0 0 -.291-.613c-.191-.19-.383-.363-.575-.554a9.118 9.118 0 0 0 -1.99-1.932c-.613-.422-1.953-1-2.2-1.7l-.039-.039a7.69 7.69 0 0 0 1.321-.308c.65-.172 1.243-.133 1.912-.3.307-.077.862-.268.862-.268v-.3c-.342-.34-.587-.795-.947-1.116a25.338 25.338 0 0 0 -3.122-2.328c-.587-.379-1.344-.623-1.969-.946-.226-.114-.6-.17-.737-.36a7.594 7.594 0 0 1 -.776-1.457c-.548-1.04-1.079-2.193-1.551-3.293a20.236 20.236 0 0 0 -.965-2.157 19.078 19.078 0 0 0 -7.323-7.084 9.07 9.07 0 0 0 -2.421-.776c-.474-.02-.946-.057-1.419-.075a7.55 7.55 0 0 1 -.869-.664c-1.082-.685-3.862-2.157-4.658-.208-.51 1.231.758 2.441 1.193 3.066a8.866 8.866 0 0 1 .965 1.419c.133.322.171.663.3 1a22.556 22.556 0 0 0 .987 2.538 8.946 8.946 0 0 0 .7 1.172c.153.209.417.3.474.645a5.421 5.421 0 0 0 -.436 1.419 8.336 8.336 0 0 0 .549 6.358c.3.473 1.022 1.514 1.987 1.116.851-.34.662-1.419.908-2.364.056-.229.019-.379.132-.53v.184s.483 1.061.723 1.6a10.813 10.813 0 0 0 2.4 2.59 3.514 3.514 0 0 1 .876 1.167v.343h.427a1.054 1.054 0 0 0 -.427-.788 9.4 9.4 0 0 1 -.959-1.16 24.992 24.992 0 0 1 -2.064-3.519c-.3-.6-.553-1.258-.793-1.857-.11-.231-.11-.58-.295-.7a7.266 7.266 0 0 0 -.884 1.313 11.419 11.419 0 0 0 -.517 2.921c-.073.02-.037 0-.073.038-.589-.155-.792-.792-1.014-1.332a8.756 8.756 0 0 1 -.166-5.164c.128-.405.683-1.681.461-2.068-.111-.369-.48-.58-.682-.871a7.767 7.767 0 0 1 -.663-1.237c-.439-1.076-.661-2.276-1.139-3.36a10.4 10.4 0 0 0 -.921-1.489 9.586 9.586 0 0 1 -1.015-1.507c-.092-.213-.221-.561-.074-.793a.3.3 0 0 1 .259-.252c.238-.212.921.058 1.16.174a9.2 9.2 0 0 1 1.824.967c.258.194.866.685.866.685h.18c.612.133 1.3.037 1.876.21a12.247 12.247 0 0 1 2.755 1.32 16.981 16.981 0 0 1 5.969 6.545c.23.439.327.842.537 1.3.4.94.9 1.9 1.3 2.814a12.578 12.578 0 0 0 1.36 2.564c.286.4 1.435.612 1.952.822a13.7 13.7 0 0 1 1.32.535c.651.4 1.3.861 1.913 1.3.305.23 1.262.708 1.32 1.091" fill="#00758f"/></g></svg>
                            <h3><a href="https://www.mysql.com/" target="_blank" class="stretched-link">&nbsp;&nbsp;MySQL</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="800">
                        <div class="features-item">
                            <svg height="24" preserveAspectRatio="xMidYMid" viewBox="0 0 256 220" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m245.969687 168.943256c-13.661428 7.121223-84.433639 36.220132-99.50111 44.074377-15.06647 7.856246-23.436733 7.780243-35.339104 2.090066-11.9023723-5.690178-87.2167257-36.112129-100.7831496-42.596331-6.78121199-3.241101-10.3463234-5.976187-10.3463234-8.560268v-25.875808s98.0490639-21.345667 113.878559-27.023845c15.828494-5.679178 21.320666-5.884183 34.791087-.950029 13.471421 4.935154 94.016937 19.467608 107.330354 24.34376 0 0-.006001 23.110722-.006001 25.509797.002001 2.55808-3.070095 5.364168-10.024312 8.988281" fill="#912626"/><path d="m245.964922 143.220067c-13.660987 7.117993-84.430919 36.217965-99.497905 44.071957-15.065986 7.856994-23.435978 7.779993-35.337967 2.089999-11.9029882-5.685995-87.2139164-36.112966-100.7799034-42.59396-13.56598713-6.484994-13.85098686-10.947989-.52399955-16.165984 13.32598725-5.219995 88.22391585-34.6049673 104.05489995-40.2839618 15.827986-5.6769946 21.318981-5.8839944 34.788967-.9479991 13.470988 4.9339953 83.818921 32.9349689 97.130908 37.8099639 13.314988 4.880996 13.825986 8.898991.165 16.019985" fill="#c6302b"/><path d="m245.969687 127.074354c-13.661428 7.121223-84.433639 36.220132-99.50111 44.077378-15.06647 7.853245-23.436733 7.777243-35.339104 2.087065-11.9033723-5.687178-87.2167257-36.112129-100.7831496-42.596332-6.78121199-3.241101-10.3463234-5.973186-10.3463234-8.557266v-25.8788095s98.0490639-21.3446669 113.878559-27.0238445c15.828494-5.6781774 21.320666-5.8841838 34.791087-.9500296 13.471421 4.9351543 94.016937 19.4646083 107.330354 24.3417607 0 0-.006001 23.1107219-.006001 25.5127969.002001 2.55708-3.070095 5.363168-10.024312 8.987281" fill="#912626"/><path d="m245.964922 101.351164c-13.660987 7.119993-84.430919 36.217965-99.497905 44.074958-15.065986 7.853992-23.435978 7.776992-35.337967 2.086998-11.9029882-5.685995-87.2139164-36.111966-100.7799034-42.59396-13.56598713-6.4829936-13.85098686-10.9469894-.52399955-16.1669844 13.32598725-5.216995 88.22391585-34.6039669 104.05489995-40.2819615 15.827986-5.6779946 21.318981-5.8839944 34.788967-.9489991 13.470988 4.9339952 83.818921 32.9329685 97.130908 37.8099639 13.314988 4.8789953 13.825986 8.8989915.165 16.0189841z" fill="#c6302b"/><path d="m245.969687 83.6525661c-13.661428 7.1212226-84.433639 36.2211319-99.50111 44.0783779-15.06647 7.854245-23.436733 7.777243-35.339104 2.087064-11.9033723-5.687177-87.2167257-36.1131278-100.7831496-42.5953303-6.78121199-3.2421013-10.3463234-5.9751868-10.3463234-8.5572675v-25.8798087s98.0490639-21.343667 113.878559-27.0218444c15.828494-5.6791774 21.320666-5.8841838 34.791087-.9500296 13.471421 4.9351542 94.016937 19.4646082 107.330354 24.3417606 0 0-.006001 23.1107222-.006001 25.5117972.002001 2.5550799-3.070095 5.3611675-10.024312 8.9852808" fill="#912626"/><path d="m245.964922 57.929387c-13.660987 7.1199932-84.430919 36.2199654-99.497905 44.074958-15.065986 7.853993-23.435978 7.776993-35.337967 2.088998-11.9019883-5.6879946-87.2139164-36.1119657-100.7799034-42.5949594-13.56598713-6.4829938-13.85098686-10.9479896-.52399955-16.1669846 13.32598725-5.217995 88.22391585-34.601967 104.05489995-40.28196156 15.827986-5.67899459 21.318981-5.88299439 34.788967-.9479991 13.470988 4.93499529 83.818921 32.93396856 97.130908 37.81096386 13.314988 4.8759954 13.825986 8.8969916.165 16.0169848" fill="#c6302b"/><g fill="#fff"><path d="m159.282977 32.7570853-22.009055 2.2851473-4.927503 11.8553798-7.958822-13.2296434-25.41445-2.284155 18.963845-6.8385737-5.68955-10.4979845 17.754294 6.943752 16.738233-5.4801861-4.523659 10.8551938z"/><path d="m131.03169 90.2747287-41.0770853-17.0368992 58.8611473-9.0344186z"/><path d="m74.0816124 39.3466047c17.3752558 0 31.4602166 5.460341 31.4602166 12.1947286 0 6.7353799-14.0849608 12.1947287-31.4602166 12.1947287-17.3742636 0-31.4602171-5.4593488-31.4602171-12.1947287 0-6.7343876 14.0859535-12.1947286 31.4602171-12.1947286"/></g><path d="m185.29476 35.9977674 34.835845 13.7664497-34.806078 13.7525581z" fill="#621b1c"/><path d="m146.754853 51.2426667 38.539907-15.2448993.029767 27.5190078-3.77848 1.4784496z" fill="#9a2928"/></svg>
                            <h3><a href="https://redis.io/" target="_blank" class="stretched-link">&nbsp;&nbsp;Redis</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="900">
                        <div class="features-item">
                            <svg height="24" preserveAspectRatio="xMidYMid" viewBox="0 0 256 185" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m250.715745 70.4971666c-5.764643-3.9998389-18.975281-5.4997786-29.303599-3.4998595-1.200967-9.9995979-6.725416-18.7492462-16.333153-26.4989347l-5.524449-3.9998393-3.843095 5.7497689c-4.803869 7.4996986-7.205803 17.9992766-6.485223 27.9988749.240194 3.4998595 1.441161 9.7496078 5.044063 15.2493871-3.362709 1.9999198-10.328318 4.499819-19.455668 4.499819h-173.65985102l-.48038688 1.9999198c-1.68135403 9.9995972-1.68135403 41.2483422 18.0145073 65.2473782 14.8919927 18.249266 36.9897884 27.498894 66.0531938 27.498894 62.9306788 0 109.5282048-30.248784 131.3858068-84.9965841 8.646963.2499904 27.141857 0 36.509401-18.7492459.240194-.4999801.72058-1.4999404 2.401935-5.2497896l.960773-1.999919zm-110.729172-70.4971666h-26.421278v24.9989952h26.421278zm0 29.9987943h-26.421278v24.9989953h26.421278zm-31.225146 0h-26.4212775v24.9989953h26.4212775zm-31.2251456 0h-26.4212777v24.9989953h26.4212777zm-31.2251464 29.9987943h-26.4212774v24.9989953h26.4212774zm31.2251464 0h-26.4212777v24.9989953h26.4212777zm31.2251456 0h-26.4212775v24.9989953h26.4212775zm31.225146 0h-26.421278v24.9989953h26.421278zm31.225146 0h-26.421278v24.9989953h26.421278z" fill="#2396ed"/></svg>
                            <h3><a href="https://www.docker.com/" target="_blank" class="stretched-link">&nbsp;&nbsp;Docker</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1000">
                        <div class="features-item">
                            <svg height="24" preserveAspectRatio="xMidYMid" viewBox="0 0 256 271" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m245.44 108.307692h-85.090462c-4.268307 0-7.734153-3.465846-7.734153-7.734154v-88.6793842c0-6.56738457-5.32677-11.8941538-11.889231-11.8941538h-30.375385c-6.567384 0-11.8892305 5.32676923-11.8892305 11.8941538v88.1427692c0 4.573539-3.6972308 8.290462-8.2707693 8.310154l-27.8843077.132923c-4.612923.024615-8.3593846-3.716923-8.3495384-8.324923l.1723077-88.2412308c.0147692-6.57723082-5.312-11.9138462-11.8892308-11.9138462h-30.3507692c-6.56738465 0-11.8892308 5.32676923-11.8892308 11.8941538v248.3150772c0 5.833846 4.72615385 10.56 10.5550769 10.56h234.8849231c5.833846 0 10.56-4.726154 10.56-10.56v-141.341539c0-5.833846-4.726154-10.56-10.56-10.56zm-39.901538 93.233231c0 7.645539-6.198154 13.843692-13.843693 13.843692h-24.004923c-7.645538 0-13.843692-6.198153-13.843692-13.843692v-24.004923c0-7.645538 6.198154-13.843692 13.843692-13.843692h24.004923c7.645539 0 13.843693 6.198154 13.843693 13.843692z" fill="#f60"/></svg>
                            <h3><a href="https://www.rabbitmq.com/" target="_blank" class="stretched-link">&nbsp;&nbsp;RabbitMQ</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1100">
                        <div class="features-item">
                            <svg height="24" preserveAspectRatio="xMidYMid" viewBox="0 0 256 413" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="m87.9320692 36.714181c-4.5491332-4.5714328-10.8956201-7.3945714-17.9512365-7.3945714-7.0288568 0-13.3262844 2.8231386-17.8218984 7.3945714h-.1293381c-4.5357534 4.5491333-7.358892 10.90008-7.358892 17.9289369 0 7.0556164 2.8231386 13.3530439 7.358892 17.8754176l.1293381.1025784c4.495614 4.5491333 10.7930416 7.3455122 17.8218984 7.3455122 7.0556164 0 13.4021033-2.7963789 17.9512365-7.3455122l.066899-.1025784c4.5580531-4.5223737 7.354432-10.8198012 7.354432-17.8754176 0-7.0288569-2.7963789-13.3798036-7.354432-17.9289369zm-17.9512365 346.639491c7.0556164 0 13.4021033-2.872197 17.9512365-7.367811l.066899-.133798c4.5580531-4.486695 7.354432-10.837641 7.354432-17.817439 0-7.055616-2.7963789-13.379803-7.354432-17.951236h-.066899c-4.5491332-4.624952-10.8956201-7.421331-17.9512365-7.421331-7.0288568 0-13.3262844 2.796379-17.8218984 7.421331h-.1293381c-4.5357534 4.571433-7.358892 10.89562-7.358892 17.951236 0 6.979798 2.8231386 13.330744 7.358892 17.817439l.1293381.133798c4.495614 4.495614 10.7930416 7.367811 17.8218984 7.367811zm137.9725343-76.719793c6.275128-1.645716 11.957085-5.673037 15.422454-11.760848l.468293-.887527c3.081815-5.775615 3.643767-12.438757 1.998051-18.34371-1.659096-6.324187-5.735476-11.916945-11.809907-15.417994l-.352335-.236377c-5.918333-3.242372-12.661754-3.947042-18.856603-2.274566-6.297427 1.569897-11.952624 5.775615-15.400154 11.814366-3.492129 5.980773-4.223558 12.880291-2.551082 19.231238 1.725994 6.243908 5.762235 11.890186 11.796526 15.417994h.04014c6.047671 3.474289 12.89813 4.10314 19.244617 2.457424zm-111.9844958-126.247367c-6.6542223-6.636383-15.8238477-10.793042-25.9880385-10.793042-10.1240514 0-19.2713771 4.156659-25.9122196 10.793042-6.609623 6.614083-10.6860031 15.761409-10.6860031 25.89884 0 10.164191 4.0763801 19.338276 10.6860031 26.028178 6.6408425 6.582863 15.7881682 10.712762 25.9122196 10.712762 10.1641908 0 19.3338162-4.129899 25.9880385-10.712762 6.6230028-6.689902 10.6993828-15.863987 10.6993828-26.028178 0-10.137431-4.07638-19.284757-10.6993828-25.89884zm-14.6107455-43.163246c14.7267038 2.426204 27.9771693 9.48182 38.0878413 19.672771h.080278c1.605577 1.618956 3.175474 3.37171 4.624953 5.146764l25.283368-14.628585c-3.39847-10.271229-3.554567-21.010752-.825088-31.072364 3.608087-13.486842 12.349559-25.5598846 25.452847-33.1373134l.432613-.2586762c12.96057-7.3455122 27.696194-8.8618899 41.000179-5.2538029 13.469002 3.6036271 25.622323 12.3852382 33.186372 25.4796055v.02676c7.52837 13.014089 9.058127 27.95933 5.46342 41.392652-3.581327 13.477923-12.362938 25.631244-25.452846 33.155154l-3.451989 2.04265h-.352335c-12.108723 5.771155-25.426087 6.663142-37.655228 3.447529-10.043772-2.667041-19.257997-8.259799-26.469711-16.229702l-25.243229 14.583986c2.898957 7.680008 4.508993 15.966566 4.508993 24.694658 0 8.701332-1.610036 17.090469-4.508993 24.823995l25.243229 14.530467c7.211714-8.072481 16.425939-13.562661 26.469711-16.229702 13.469003-3.683906 28.405324-2.114009 41.459552 5.49018l.834008.392474v.053519c12.612694 7.626488 21.07765 19.440855 24.618838 32.767139 3.594707 13.353044 2.06495 28.302745-5.46342 41.343593l-.454913.914287-.053519-.080279c-7.564049 12.572555-19.480994 21.09103-32.637801 24.694658-13.500222 3.554567-28.432083 2.03819-41.472931-5.45896v-.107039c-13.103288-7.577429-21.84476-19.677231-25.452847-33.132853-2.729479-10.034853-2.573382-20.778835.825088-31.045605l-25.283368-14.583986c-1.449479 1.779514-3.019376 3.45199-4.624953 5.070946l-.080278.075819c-10.110672 10.141891-23.3611375 17.197507-38.0878413 19.547893v29.217031c10.4942259 2.194288 19.9002283 7.448091 27.2724993 14.815903l.03568.080278c9.878755 9.825236 15.993325 23.517235 15.993325 38.569514 0 15.00322-6.11457 28.61048-15.993325 38.489235l-.03568.156098c-9.9456537 9.878755-23.5975133 15.993325-38.6497923 15.993325-14.9720002 0-28.6416995-6.11457-38.5605939-15.993325h-.0356795v-.156098c-9.8921348-9.878755-16.0200848-23.486015-16.0200848-38.489235 0-15.052279 6.12795-28.744278 16.0200848-38.569514v-.080278h.0356795c7.3588919-7.367812 16.7782737-12.621615 27.24574-14.815903v-29.217031c-14.7400836-2.350386-27.9504097-9.406002-38.0477015-19.547893l-.1070384-.075819c-12.62161472-12.675134-20.5112389-30.104558-20.5112389-49.442834 0-19.284757 7.88962418-36.714181 20.5112389-49.389315h.1070384c10.0972918-10.190951 23.3076179-17.246567 38.0477015-19.672771v-29.087693c-10.4674663-2.274567-19.8868481-7.52391-27.24574-14.8426625h-.0356795v-.0802788c-9.8921348-9.9278143-16.0200848-23.5172348-16.0200848-38.5695138 0-14.9764602 6.12795-28.6952188 16.0200848-38.5739738l.0356795-.0490593c9.9188944-9.90551456 23.5885937-16.0200848 38.5605939-16.0200848 15.052279 0 28.7041386 6.11457024 38.6497923 16.0200848v.0490593h.03568c9.878755 9.878755 15.993325 23.5975136 15.993325 38.5739738 0 15.052279-6.11457 28.6416995-15.993325 38.5695138l-.03568.0802788c-7.372271 7.3187525-16.7782734 12.5680955-27.2724993 14.8426625zm142.0176953-19.391796-.209617-.312195c-3.492129-5.882654-9.058127-9.802936-15.212837-11.502171-6.346487-1.672476-13.196946-.963346-19.284757 2.510943h.04014c-6.074431 3.447529-10.137431 9.093806-11.836666 15.417994-1.672476 6.270667-.941047 13.196946 2.551082 19.231237l.115958.160558c3.501049 5.954012 9.067047 9.950114 15.284196 11.56907 6.248368 1.752754 13.210326 1.021325 19.208938-2.479724l.325575-.156097c5.904954-3.527809 9.838616-9.093807 11.484332-15.208377 1.672475-6.297428 1.007945-13.196946-2.466344-19.231238z" fill="#fff"/></svg>
                            <h3><a href="https://kafka.apache.org/" target="_blank" class="stretched-link">&nbsp;&nbsp;Kafka</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1200">
                        <div class="features-item">
                            <svg height="24" width="24" enable-background="new 0 2 48 48" viewBox="0 2 48 48" xmlns="http://www.w3.org/2000/svg"><path d="m20.1 18.2.1 2.3-1.6 3-2.5 4.9-.5 4.1 1.8 5.8 4.1 2.3h6.2l5.8-4.4 2.6-6.9-6-7.3-1.7-4.1z" fill="#eceff1"/><path d="m34.3 23.9c-1.6-2.3-2.9-3.7-3.6-6.6s.2-2.1-.4-4.6c-.3-1.3-.8-2.2-1.3-2.9-.6-.7-1.3-1.1-1.7-1.2-.9-.5-3-1.3-5.6.1-2.7 1.4-2.4 4.4-1.9 10.5 0 .4-.1.9-.3 1.3-.4.9-1.1 1.7-1.7 2.4-.7 1-1.4 2-1.9 3.1-1.2 2.3-2.3 5.2-2 6.3.5-.1 6.8 9.5 6.8 9.7.4-.1 2.1-.1 3.6-.1 2.1-.1 3.3-.2 5 .2 0-.3-.1-.6-.1-.9 0-.6.1-1.1.2-1.8.1-.5.2-1 .3-1.6-1 .9-2.8 1.9-4.5 2.2-1.5.3-4-.2-5.2-1.7.1 0 .3 0 .4-.1.3-.1.6-.2.7-.4.3-.5.1-1-.1-1.3s-1.7-1.4-2.4-2-1.1-.9-1.5-1.3c0 0-.6-.6-.8-.8s-.3-.4-.4-.5c-.2-.5-.3-1.1-.2-1.9.1-1.1.5-2 1-3 .2-.4.7-1.2.7-1.2s-1.7 4.2-.8 5.5c0 0 .1-1.3.5-2.6.3-.9.8-2.2 1.4-2.9s2.1-3.3 2.2-4.9c0-.7.1-1.4.1-1.9-.4-.4 6.6-1.4 7-.3.1.4 1.5 4 2.3 5.9.4.9.9 1.7 1.2 2.7.3 1.1.5 2.6.5 4.1 0 .3 0 .8-.1 1.3.2 0 4.1-4.2-.5-7.7 0 0 2.8 1.3 2.9 3.9.1 2.1-.8 3.8-1 4.1.1 0 2.1.9 2.2.9.4 0 1.2-.3 1.2-.3.1-.3.4-1.1.4-1.4.7-2.3-1-6-2.6-8.3z" fill="#263238"/><ellipse cx="21.6" cy="15.3" fill="#eceff1" rx="1.3" ry="2"/><ellipse cx="26.1" cy="15.2" fill="#eceff1" rx="1.7" ry="2.3"/><ellipse cx="21.7" cy="15.5" fill="#212121" rx="1.2" ry=".7" transform="matrix(-.1254 -.9921 .9921 -.1254 8.9754 38.9969)"/><ellipse cx="26" cy="15.6" fill="#212121" rx="1" ry="1.3"/><g fill="#ffc107"><path d="m39.3 37.6c-.4-.2-1.1-.5-1.7-1.4-.3-.5-.2-1.9-.7-2.5-.3-.4-.7-.2-.8-.2-.9.2-3 1.6-4.4 0-.2-.2-.5-.5-1-.5s-.7.2-.9.6-.2.7-.2 1.7c0 .8 0 1.7-.1 2.4-.2 1.7-.5 2.7-.5 3.7 0 1.1.3 1.8.7 2.1.3.3.8.5 1.9.5s1.8-.4 2.5-1.1c.5-.5.9-.7 2.3-1.7 1.1-.7 2.8-1.6 3.1-1.9.2-.2.5-.3.5-.9 0-.5-.4-.7-.7-.8z"/><path d="m19.2 37.9c-1-1.6-1.1-1.9-1.8-2.9-.6-1-1.9-2.9-2.7-2.9-.6 0-.9.3-1.3.7s-.8 1.3-1.5 1.8c-.6.5-2.3.4-2.7 1s.4 1.5.4 3c0 .6-.5 1-.6 1.4-.1.5-.2.8 0 1.2.4.6.9.8 4.3 1.5 1.8.4 3.5 1.4 4.6 1.5s3 0 3-2.7c.1-1.6-.8-2-1.7-3.6z"/><path d="m21.1 19.8c-.6-.4-1.1-.8-1.1-1.4s.4-.8 1-1.3c.1-.1 1.2-1.1 2.3-1.1s2.4.7 2.9.9c.9.2 1.8.4 1.7 1.1-.1 1-.2 1.2-1.2 1.7-.7.2-2 1.3-2.9 1.3-.4 0-1 0-1.4-.1-.3-.1-.8-.6-1.3-1.1z"/></g><path d="m20.9 19c.2.2.5.4.8.5.2.1.5.2.5.2h.9c.5 0 1.2-.2 1.9-.6.7-.3.8-.5 1.3-.7.5-.3 1-.6.8-.7s-.4 0-1.1.4c-.6.4-1.1.6-1.7.9-.3.1-.7.3-1 .3s-.6 0-.9 0-.5-.1-.8-.2c-.2-.1-.3-.2-.4-.2-.2-.1-.6-.5-.8-.6 0 0-.2 0-.1.1.3.3.4.4.6.6z" fill="#634703"/><path d="m23.9 16.8c.1.2.3.2.4.3s.2.1.2.1c.1-.1 0-.3-.1-.3 0-.2-.5-.2-.5-.1z" fill="#634703"/><path d="m22.3 17c0 .1.2.2.2.1.1-.1.2-.2.3-.2.2-.1.1-.2-.2-.2-.2.1-.2.2-.3.3z" fill="#634703"/><path d="m32 34.7v.3c.2.4.7.5 1.1.5.6 0 1.2-.4 1.5-.8 0-.1.1-.2.2-.3.2-.3.3-.5.4-.6 0 0-.1-.1-.1-.2-.1-.2-.4-.4-.8-.5-.3-.1-.8-.2-1-.2-.9-.1-1.4.2-1.7.5 0 0 .1 0 .1.1.2.2.3.4.3.7.1.2 0 .3 0 .5z" fill="#455a64"/></svg>
                            <h3><a href="https://www.linux.org/" target="_blank" class="stretched-link">&nbsp;&nbsp;Linux</a></h3>
                        </div>
                    </div><!-- End Feature Item -->

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1200">
                        <div class="features-item">
                            <svg height="24" width="24" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="m29.845 4.008c-.2-.164-1.772-1.008-1.772-1.008l-1.673.976 1.672-.976-1.672-1v1.975l-1.753-.975s-1.431.836-2.125 1.237c-.874.5-3.018 1.781-3.018 1.781v1.882l-1.766 4.6v2.5l-1.24.724-.498 1.291-3.472-9.015v-1.981l-6.928-4.019-3.46 2v2.04l2.158 5.2 1.311.772v2.37l5.2 12.628 5.191 2.973v.017l5.189-3 8.674-21-.019-1.991" fill="#3185b8"/><path d="m16.006 29.985-5.2-2.976-5.2-12.628v-2.37l-1.311-.772-2.158-5.199v-2.04l1.707 1v2l1.765 1.028v-2.017l3.449 2 .166 1.975 5.013 13.013 3.484 2.029v3.972l-1.721-1.008v1.993" fill="#3185b8"/><path d="m12.528 8 3.472 9.015v4.967l-1.762 1-5.014-13.015-.166-1.961 3.471-1.987v1.981m-8.685-3v2l1.766-.989z" fill="#61a5ce"/><path d="m5.609 8.029v-2.018l-1.765.989z" fill="#eae9e6"/><path d="m16 21.982 1.738.994 1.935-4.858 1.49.887v-4.656l.475-1.124 1.269.743v-1.968l-1.727-1 1.737-1.008-1.711-.992v-2l-1.7-.99v1.89l-1.766 4.6v2.5l-1.24.724-.5 1.291z" fill="#3185b8"/><path d="m15.973 24.016 1.748 1.008-.008 3.976 3.479-2 8.671-21-.019-1.991-5.2 3v4l-1.744.991v1.968l-1.269-.743-.475 1.124v4.651l-2.414 1.42-1.011 2.561-1.762 1.039" fill="#61a5ce"/><path d="m9.047 10 1.744-1.01v2z" fill="#eae9e6"/><path d="m10.791 10.994 1.729.977v-1.971l-1.729-1.01v2" fill="#3185b8"/><path d="m7.33 14.974v2.019l1.746-1z" fill="#61a5ce"/><path d="m10.818 17-1.752 1.02-1.736-1.027 1.746-1z" fill="#eae9e6"/><path d="m10.795 23v2.036l1.755-1.016z" fill="#61a5ce"/><path d="m14.241 26.988 1.768 1.028.006-2.068z" fill="#eae9e6"/><path d="m16 30 .007-1.985 1.7.989z" fill="#61a5ce"/><path d="m16 21.982-1.762 1 1.738 1.031 1.762-1.039z" fill="#eae9e6"/><path d="m24.647 11v-4l-1.721-.98v1.996l-1.72.984z" fill="#3185b8"/><path d="m21.177 11 1.737-1.008 1.733 1.008-1.747 1-1.727-1" fill="#eae9e6"/><path d="m21.206 9 1.72-.989v-1.987l-1.726.976v2" fill="#61a5ce"/><path d="m26.4 3.975v-1.975l1.676 1z" fill="#3185b8"/><path d="m29.845 4.008-5.2 3-1.721-.98-1.724.972-1.7-.99s2.144-1.277 3.018-1.781c.699-.397 2.129-1.229 2.129-1.229l1.75.979 1.676-.979s1.571.843 1.771 1.007m-17.315 2.012-3.471 1.987-6.918-4.006 3.46-2 6.928 4.019" fill="#eae9e6"/><path d="m28.1 6.958v-1.944l-1.691.976 1.691.969m-5.126 9.041 1.683-.965v1.936z" fill="#3185b8"/><path d="m19.458 24v2.006l1.753-1.014z" fill="#eae9e6"/><path d="m21.221 24.995-.021-1.995-1.742 1 1.764.992" fill="#3185b8"/></svg>
                            <h3><a href="https://www.vagrantup.com/" target="_blank" class="stretched-link">&nbsp;&nbsp;Vagrant</a></h3>
                        </div>
                    </div><!-- End Feature Item -->
                </div>
            </div>

        </section><!-- /Interests Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Certificate</h2>
                <div><span>My</span> <span class="description-title">Certificate</span></div>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-udemy">Udemy</li>
                        <li data-filter=".filter-oracle">Oracle</li>
                    </ul><!-- End Portfolio Filters -->

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-udemy">
                            <div class="portfolio-content h-100" style="max-height: 300px">
                                <img src="{{asset('assets/images/docker-udemy.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Docker: Pemula Sampai Mahir</h4>
                                    <p>Certificate for Completion</p>
                                    <a href="{{asset('assets/images/docker-udemy.jpg')}}" title="Certificate for Completion, Docker: Pemula Sampai Mahir" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                            <div class="portfolio-content h-100" style="max-height: 300px">
                                <img src="{{asset('assets/images/db-query-final-exam.png')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Database Programming With SQL</h4>
                                    <p>Award of Final Exam Completion</p>
                                    <a href="{{asset('assets/images/db-query-final-exam.png')}}" title="Award of Final Exam Completion, Database Programming With SQL" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-oracle">
                            <div class="portfolio-content h-100" style="max-height: 300px">
                                <img src="{{asset('assets/images/db-query.png')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Database Programming With SQL</h4>
                                    <p>Award of Course Completion</p>
                                    <a href="{{asset('assets/images/db-query.png')}}" title="Award of Course Completion, Database Programming With SQL" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-oracle">
                            <div class="portfolio-content h-100" style="max-height: 300px">
                                <img src="{{asset('assets/images/db-design-final-exam.png')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Database Design</h4>
                                    <p>Award of Final Exam Completion</p>
                                    <a href="{{asset('assets/images/db-design-final-exam.png')}}" title="Award of Final Exam Completion, Database Design" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-oracle">
                            <div class="portfolio-content h-100" style="max-height: 300px">
                                <img src="{{asset('assets/images/db-design.png')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Database Design</h4>
                                    <p>Award of Course Completion</p>
                                    <a href="{{asset('assets/images/db-design.png')}}" title="Award of Course Completion, Database Design" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Portfolio Section -->
    </main>

    <footer id="footer" class="footer dark-background">
        <div class="container">
            <h3 class="sitename">@asidikfauzi</h3>
            <p>Software Engineer</p>
            <div class="social-links d-flex justify-content-center">
                <a href="mailto:asidikfauzi@gmail.com" target="_blank" class="p-2"><i class="bi bi-envelope"></i></a>
                <a href="https://wa.me/6287852982548" target="_blank" class="p-2"><i class="bi bi-whatsapp"></i></a>
                <a href="https://github.com/asidikfauzi" target="_blank" class="p-2"><i class="bi bi-github"></i></a>
                <a href="https://www.linkedin.com/in/asidikfauzi/" target="_blank" class="p-2"><i class="bi bi-linkedin"></i></a>
                <a href="{{url('/cv')}}" target="_blank" class="p-2"><b class="bi">CV</b></a>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/vendor/typed.js/typed.umd.js')}}"></script>
    <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
