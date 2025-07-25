<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ralph Francisco</title>

    <!-- css resources -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel = "stylesheet" href = 'assets/css/index.css'>
    <link rel = "stylesheet" href = 'assets/css/fonts.css'>
    <link rel = "stylesheet" href = 'assets/css/pageload.css'>

    <link rel="icon" type="image/x-icon" href="assets/images/rx.ico">
</head>
<body>
    <div class = "content" id = "home">
        <div class = "container-fluid">
            <navbar class = "row p-4" id = "navbar">
                <div class = "col-xl-3 col-lg-2 col-md-3 col-sm-12" id = "nav-header">
                    <h3><a href = "index.html">Ralph F<span id = "accent">.</span></a></h3>
                </div>
                <div class = "col-xl-5 col-lg-5 col-md-6" id = "nav-links">
                    <ul>
                        <li><a href = "#home" class = "nav-link active">Home</a></li>
                        <li><a href = "#about" class = "nav-link">About</a></li>
                        <li><a href = "#project" class = "nav-link">Projects</a></li>
                        
                    </ul>
                </div>
                <div class = "col-xl-4 col-lg-5 col-md-3" id = "nav-links">
                    <ul>
                        <li>
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <a href = "#">Contact <i class="bi bi-arrow-up-right" 
                                    style = "position: relative; font-size: 11pt; top: 0px;"></i>
                                </a>
                            </button>
                        </li>
                    </ul>
                </div>
            </navbar>
            <div class = "row" id = "me-intro">
                <div class = "col-xxl-6 col-xl-7 col-lg-6 col-md-6 col-sm-12 p-5 text-intro" id = "text-intro">
                    <h1 class = "mt-5 blurIn" id = "greeting-text"><span class = "fs-2 fw-light">Hello!</span><br> I'm <span id = "accent">Ralph</span></h1>
                    <p class = "fs-5 mt-4 pe-3 blurLonger">
                        I'm a dedicated web developer who specializes in building functional, visually appealing websites to deliver seamless user experiences.
                    </p>

                    <div class = "anchors-island mt-4">
                        <a href = "assets/files/resume.pdf" class = "anchor grandEntrance" id = "projects-anchor" download>View my Resume </a>
                    </div>
                    
                </div>
                
                <div class="col-xxl-6 col-xl-5 col-lg-6 col-md-6 col-sm-12" id = "img-main-me" style="text-align: center;">
                    <img src="assets/images/45642.png" id = "main-me" loading = "eager">
                </div>                
            </div>

            <div class = "row d-flex flex-row justify-content-center text-center mt-4 mb-5 about-me-intro" id = "about">
                <div class = "col-xxl-8 col-lg-6 col-md-12 col-sm-12 p-5 about-me-pargph" id = "text-intro" data-aos="fade-up">
                    <h1 class = "mt-5 mb-1"><b>What I <span id = "accent">do</span></b></h1>

                    <p class = "mt-4" id = "about-me-desc">
                        Aspiring Web Developer with a strong foundation in responsive design and data integration, skilled in building user-friendly, accessible web applications. 
                        Also proficient in <u>Python</u>, <u>Java</u>, <u>C#</u>, and <u>C++</u> with practical knowledge of software development principles.
                    </p>

                    <div class = "d-flex flex-row gap-3 col-xxl-12 col-lg-12 col-md-12 col-sm-12 p-5 mt-4" id = "skills">
                        <div class="col-4 p-4 justify-content-center text-center">
                            <img src = "assets/images/web-development.png">
                            <h4>Web <br>Application</h3>
                        </div>
                        <div class="col-4 p-4 justify-content-center text-center">
                            <img src = "assets/images/app.png">
                            <h4>Software <br>Development</h3>
                        </div>
                        <div class="col-4 p-4 justify-content-center text-center">
                            <img src = "assets/images/db.png">
                            <h4>Database <br>Integration</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class = "row d-flex flex-row justify-content-center mb-5 about-me-intro" id = "project">
                <div class = "col-xxl-8 col-lg-6 col-md-12 col-sm-12 p-5" id = "text-intro"  data-aos="fade-up">
                    <h1 class = "mt-5 mb-1 text-center"><b>My Recent <span id = "accent">Projects</span></b></h1>

                    <div class = "projects-organizer mt-5 mb-5"> 
                        <div class = "row">
                            <a href = "projects/smartloan.php" class = "direct-to-project">
                                <div class = "col-xs-12" id = "projects">
                                    <div class = "row">
                                        <div class = "col-md-4">
                                            <img src = "assets/images/loan-system.jpg">
                                        </div>
                                        <div class="col-md-8">
                                            <p>
                                                <b>SmartLoan Dashboard</b><br><span class = "hide-br"><br></span>
                                                <span style="font-weight: normal;" id = "project-desc">
                                                    A seamless web-based system for tracking loan balances and calculating loans based on the cooperative’s policies—fast, clear, and hassle-free.
                                                </span>
                                            </p>
                                            <br>
                                            <ul>
                                                <li>HTML</li>
                                                <li>CSS</li>
                                                <li>JavaScript</li>
                                                <li>PHP</li>
                                                <li>MySQL</li>
                                            </ul>
                                        </div>
                                        <div class = "col-md-0">
    
                                        </div>
                                    </div> 
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form action = "https://formsubmit.co/ralphfrncisco@gmail.com" method = "POST">
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class = "d-flex container-fluid">
                                <div class = "col-lg-6 col-sm-12">
                                    <p id = "contact-me-text-modal">Contact Me</p>
                                    <h1>Let's Get In Touch</h1>
                                    <p id = "manually">or reach out manually using <span id = "accent">ralphfrncisco@gmail.com</span></p>

                                    <div class = "scls">
                                        <a href = "https://www.facebook.com/rlphfrancisco1623" target = "_blank" style = "color:rgba(255, 255, 255, 0.75);">
                                            <i class="bi bi-facebook"></i>
                                        </a>
                                        <a href = "https://www.linkedin.com/in/ralphfrancisco" target = "_blank">
                                            <i class="bi bi-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class = "col-lg-6 col-sm-12">
                                    <div class = "col-lg-12 col-sm-12">
                                        <label class = "form-label">Full Name</label>
                                        <div class="input-text">
                                            <span class="">
                                                <i class="bi bi-person"></i>
                                            </span>
                                            <input type="text" class="form-control" name = "user_name" placeholder="Enter your full name..." />
                                        </div>
                                    </div>
                                    
                                    <div class = "col-lg-12 col-sm-12 mt-3">
                                        <label class = "form-label">Email Address</label>
                                        <div class="input-text">
                                            <span class="">
                                                <i class="bi bi-envelope"></i>
                                            </span>
                                            <input type="text" class="form-control" name = "email_address" style = "padding: 8px 0px 8px 10px" placeholder="Enter your email address..." />
                                        </div>
                                    </div>
                                    
                                    <div class = "col-lg-12 col-sm-12 mt-3">
                                        <label class = "form-label">Phone Number</label>
                                        <div class="input-text">
                                            <span class="">
                                                <i class="bi bi-telephone"></i>
                                            </span>
                                            <input type="text" class="form-control" name = "phone_number" style = "padding: 8px 0px 8px 10px" placeholder="Enter your phone number..." />
                                        </div>
                                    </div>

                                    <div class = "col-lg-12 col-sm-12 mt-4">
                                        <label class = "form-label">Message</label>
                                        <textarea type = "text" id="user_message" class = "form-control" name = "message" maxlength="300" oninput="updateCharCount()" rows="5" resize="none" placeholder="Enter your message here..."></textarea>
                                        <small id="charCount">0 / 300</small>
                                    </div>
                                    <div class = "col-lg-12 col-sm-12 mt-5">
                                        <input type = "submit" class = "btn" id = "send-email" type = "button" value = "Send">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                </div>
            </div>
        </form>
        
        <footer class = "row mt-5" id = "footer">
            <div class = "col-lg-6">
                <!-- <h3><a href = "index.html">Ralph F<span id = "accent">.</span></a></h3> -->
                 <img src = "assets/images/rx.ico" style = "height: 30px; width: 40px">
            </div>
            <div class = "col-lg-6">
    
            </div>
        </footer>
    </div>

    
    <script src ="assets/js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
    <script>
        AOS.init({
        duration: 500,      // animation duration in milliseconds
        once: false,          // whether animation should happen only once - while scrolling down
        offset: 180,         // offset (in px) from the original trigger point
        easing: 'ease', // animation easing
        delay: 100           // delay before the animation starts
        });
    </script>
</body>
</html>


