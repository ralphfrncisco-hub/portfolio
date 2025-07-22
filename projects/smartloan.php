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

    <link rel = "stylesheet" href = '../assets/css/index.css'>
    <link rel = "stylesheet" href = '../assets/css/fonts.css'>
    <link rel = "stylesheet" href = '../assets/css/pageload.css'>

    <link rel="icon" type="image/x-icon" href="../assets/images/rx.ico">
</head>
<style>
    .lngs
    {
        padding: 5px 15px;
        font-size: 10pt;
    }
    p
    {
        padding: 0;
    }
</style>
<body>
    <div class = "content" id = "home">
        <div class = "container-fluid">
            <navbar class = "row p-4" id = "navbar">
                <div class = "col-xxl-3 col-xl-4 col-lg-3 col-md-4 col-sm-12" id = "nav-header">
                    <h3><a href = "index.php">Ralph F<span id = "accent">.</span></a></h3>
                </div>
                <div class = "col-xxl-5 col-xl-5 col-lg-5 col-md-8" id = "nav-links">
                    <ul>
                        <li><a href = "../index.php #home" class = "nav-link">Home</a></li>
                        <li><a href = "../index.php #about" class = "nav-link">About</a></li>
                        <li><a href = "../index.php #project" class = "nav-link active">Projects</a></li>
                        
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

            <div class = "container-sm px-5">
                <div class = "col-xs-12 mt-5 mb-3" id = "project-header">
                    <h4 style = "margin-left: 0.2%">SmartLoan Dashboard</h4>
                </div>
                <div class = "col-xs-12 d-flex flex-wrap mt-3 mb-3">
                    <div class = "p-1"><a href="https://www.javascript.com/" target = "_blank" class="lngs">HTML</a></div>
                    <div class="p-1"><a href="https://www.javascript.com/" target = "_blank" class="lngs">JavaScript</a></div>
                    <div class="p-1"><a href="https://www.php.net/" target = "_blank" class="lngs">PHP</a></div>
                    <div class="p-1"><a href="https://www.mysql.com/" target = "_blank" class="lngs">MySQL</a></div>
                </div>

                <div class = "col-xs-12 project-description align-items-center mb-5">
                    <div id ="smartloan-images" class="carousel slide carousel-fade carousel-dark mb-5">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#smartloan-images" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#smartloan-images" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#smartloan-images" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="../assets/images/loan-system.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Dashboard</h5>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="../assets/images/loan-calculator.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Loan Calculator</h5>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="../assets/images/loan-history.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Loan History</h5>
                            </div>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#smartloan-images" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#smartloan-images" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <div class = "mt-4" id = "project-text" data-aos="fade-up">
                        <p>
                            <b>SmartLoan Dashboard</b> is a comprehensive and user-centric platform built to simplify and streamline the loan
                            management experience. Designed with both clarity and convenience in mind, this system empowers users to take
                            full control of their financial obligations by providing an all-in-one hub for monitoring, calculating, and managing
                            loans.
                        </p>
                    </div>
                    <div class = "mt-5 mb-5" id = "core-features" data-aos="fade-up">
                        <h4 class = "mb-4">Core Features</h4>

                        <span data-aos="fade-up"><u>Real-Time Loan Balance Monitoring</u><br>
                        Users can easily view their current loan balances, including principal remaining, interest accrued, and any upcoming payments.
                        This helps borrowers stay on top of their repayment schedules and avoid late fees.</span>
                        <br>
                        <br>
                        <span data-aos="fade-up"><u>Loan Status Tracking</u><br>
                        Every step of the loan process is transparent. From initial application submission to final approval or disbursement, users can track
                        the progress of each loan application, ensuring they are always informed about where they stand.</span>
                        <br>
                        <br>
                        <span data-aos="fade-up"><u>Built-in Loan Calculator</u><br>
                        The dashboard includes a powerful and easy-to-use loan calculator that allows users to simulate different loan scenarios. By entering
                        key inputs like loan amount, interest rate, and payment term, users can instantly see their estimated monthly payments and total
                        interest—helping them make smarter borrowing decisions.</span>
                        <br>
                        <br>
                        <span data-aos="fade-up"><u>Loan History Overview</u><br>
                        A detailed loan history section provides a complete record of all previous and active loans, including approval dates, payment
                        schedules, and status changes. This helps users keep track of their financial journey and offers a reliable reference for financial planning.</span>
                    </div>
                </div>
            </div>
        </div>

        <form action = "../send_email.php" method = "POST">
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
                 <img src = "../assets/images/rx.ico" style = "height: 30px; width: 40px">
            </div>
            <div class = "col-lg-6">
    
            </div>
        </footer>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
    <script>
        AOS.init({
        duration: 500,      // animation duration in milliseconds
        once: true,          // whether animation should happen only once - while scrolling down
        offset: 80,         // offset (in px) from the original trigger point
        easing: 'ease', // animation easing
        delay: 180           // delay before the animation starts
        });

        document.addEventListener('DOMContentLoaded', () => {
        const navbar1 = document.getElementById('navbar');
        console.log(navbar1)
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
            navbar1.classList.add('scrolled');
            } else {
            navbar1.classList.remove('scrolled');
            }
        });
        });


        function adjustPadding() {
            const aboutMeDesc = document.getElementById('about-me-desc');
            const divSect = document.getElementById("div-sect");

            if (window.innerWidth <= 768) {
            aboutMeDesc.classList.remove('pe-4');
            aboutMeDesc.classList.add('pe-1');
            divSect.style.height = '150px';
            }
            else {
            aboutMeDesc.classList.remove('pe-1');
            aboutMeDesc.classList.add('pe-4');
            }
        }
    </script>
</body>