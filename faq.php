<?php

    session_start();

    if (!isset($_SESSION['userEmail'])) {
        header("Location: 401.php");
        die();
} 

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Classes - KeepFit</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Powers the Toggle Tooltip -->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php
                include_once 'primary-nav.php';
            ?>
            <!-- Secondary Navbar-->
            <?php
                include_once 'secondary-nav.php';
            ?>
            <!-- Header Ends -->
            <!-- Page Content-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Frequently Asked Questions</h1>
                        <p class="lead fw-normal text-muted mb-0">What Do You Want To Know?</p>
                    </div>
                    <div class="row gx-5">
                        <div class="col-xl-12">
                            <!-- FAQ Accordion 1-->
                            <div class="accordion mb-5" id="accordionExample">
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingOne"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Can I have a customised workout plan?</button></h3>
                                    <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong class="text-danger">This is a template text for all the FAQs.</strong>
                                            "The quick brown fox jumps over the lazy dog" is an English-language 
                                            pangram—a sentence that contains all the letters of the alphabet. 
                                            The phrase is commonly used for touch-typing practice, testing typewriters 
                                            and computer keyboards, displaying examples of fonts, and other applications 
                                            involving text where the use of all letters in the alphabet is desired.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Is the app available on Windows?</button></h3>
                                    <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong class="text-danger">This is a template text for all the FAQs.</strong>
                                            "The quick brown fox jumps over the lazy dog" is an English-language 
                                            pangram—a sentence that contains all the letters of the alphabet. 
                                            The phrase is commonly used for touch-typing practice, testing typewriters 
                                            and computer keyboards, displaying examples of fonts, and other applications 
                                            involving text where the use of all letters in the alphabet is desired.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingThree"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Can I request for my data?</button></h3>
                                    <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong class="text-danger">This is a template text for all the FAQs.</strong>
                                            "The quick brown fox jumps over the lazy dog" is an English-language 
                                            pangram—a sentence that contains all the letters of the alphabet. 
                                            The phrase is commonly used for touch-typing practice, testing typewriters 
                                            and computer keyboards, displaying examples of fonts, and other applications 
                                            involving text where the use of all letters in the alphabet is desired.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingFour"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">Must I use the website?</button></h3>
                                    <div class="accordion-collapse collapse" id="collapseFour" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong class="text-danger">This is a template text for all the FAQs.</strong>
                                            "The quick brown fox jumps over the lazy dog" is an English-language 
                                            pangram—a sentence that contains all the letters of the alphabet. 
                                            The phrase is commonly used for touch-typing practice, testing typewriters 
                                            and computer keyboards, displaying examples of fonts, and other applications 
                                            involving text where the use of all letters in the alphabet is desired.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingFive"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Is my participation in a class assessed?</button></h3>
                                    <div class="accordion-collapse collapse" id="collapseFive" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong class="text-danger">This is a template text for all the FAQs.</strong>
                                            "The quick brown fox jumps over the lazy dog" is an English-language 
                                            pangram—a sentence that contains all the letters of the alphabet. 
                                            The phrase is commonly used for touch-typing practice, testing typewriters 
                                            and computer keyboards, displaying examples of fonts, and other applications 
                                            involving text where the use of all letters in the alphabet is desired.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingSix"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">How do I exit a challenge?</button></h3>
                                    <div class="accordion-collapse collapse" id="collapseSix" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong class="text-danger">This is a template text for all the FAQs.</strong>
                                            "The quick brown fox jumps over the lazy dog" is an English-language 
                                            pangram—a sentence that contains all the letters of the alphabet. 
                                            The phrase is commonly used for touch-typing practice, testing typewriters 
                                            and computer keyboards, displaying examples of fonts, and other applications 
                                            involving text where the use of all letters in the alphabet is desired.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingSeven"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">What happens if I'm not logged in?</button></h3>
                                    <div class="accordion-collapse collapse" id="collapseSeven" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong class="text-danger">This is a template text for all the FAQs.</strong>
                                            "The quick brown fox jumps over the lazy dog" is an English-language 
                                            pangram—a sentence that contains all the letters of the alphabet. 
                                            The phrase is commonly used for touch-typing practice, testing typewriters 
                                            and computer keyboards, displaying examples of fonts, and other applications 
                                            involving text where the use of all letters in the alphabet is desired.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card border-0 bg-light mt-xl-5">
                                <div class="card-body p-4 py-lg-5">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="text-center">
                                            <div class="h6 fw-bolder">Have more questions?</div>
                                            <a href="contact.php"><p class="btn btn-primary text-white mb-4">
                                                Contact Us
                                            </p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <div id="layoutAuthentication_footer">
            <footer class="bg-dark py-4 mt-auto">
                <div class="container px-5">
                    <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                        <div class="col-auto">
                            <div class="small m-0 text-muted" id="attribution">
                                &copy; 2022 | Designed and developed by <a class="text-muted" href="https://www.linkedin.com/in/david-ofili-7b9a752a/" 
                                target="_blank">David Ofili</a>. Powered by <a class="text-muted" href="https://code-academy.co.uk/" 
                                target="_blank">Code Academy UK</a> | All rights reserved.
                            </div>
                        </div>
                        <div class="col-auto" id="attr-link">
                            <a class="link-light small text-muted" href="#!">Privacy</a>
                            <span class="text-white mx-1">&middot;</span>
                            <a class="link-light small text-muted" href="#!">Terms</a>
                            <span class="text-white mx-1">&middot;</span>
                            <a class="link-light small text-muted" href="#!">Contact</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
