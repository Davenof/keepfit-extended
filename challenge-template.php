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
        <title>30 Day Fitness Challenge - KeepFit</title>
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
            <!-- Page Content-->
            <section class="py-5 bg-dark text-white">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center mb-5">
                        <div class="col-lg-12">
                            <div class="text-center mb-5">
                                <h1 class="fw-bolder">Body Basics Challenge</h1>
                                <p class="lead fw-normal text-white mb-0"><span class="text-danger">THIS IS A TEMPLATE FOR ALL CHALLENGES. <br>
                                THE NAMES OF THE EXERCISES AS SHOWN IN THIS TEMPLATE ARE NOT 100% CORRECT. </span> <br>
                                    Students are encouraged to not move over to the next day's challenge exercise unless they have followed
                                    the current day's challenge exercise as instructed. Remember that KeepFit challenges
                                are put together by expert teachers and instructors, with your total wellbeing in mind.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion mb-5" id="accordionExample">
                        <div class="accordion-item">
                            <h1 class="accordion-header" id="headingOne"><button class="accordion-button fw-bolder bg-success text-white d-block text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">START CHALLENGE</button></h1>
                            <div class="accordion-collapse collapse" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row gx-5">
                                        <div class="col-12">
                                            <div class="card mb-4">
                                                <div class="card-header bg-dark text-white text-center fw-bold">
                                                    This is a 14-day challenge. Numbers below the page represent each day.
                                                </div>                               
                                                <div class="card-body bg-primary">
                                                    <table id="datatablesSimple">
                                                        <thead>
                                                            <tr>
                                                                <th>Activitiy Description</th>
                                                                <th>Challenge</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="bg-white">
                                                            <tr>
                                                                <td><div class="fw-bolder">CROSS JACKS </div>
                                                                    <div class="mt-4">
                                                                        <p class="text-danger fw-bold">This is a template description for all activities. <br>
                                                                        The below description is not the <br>
                                                                        correct representation of how the <br>
                                                                        exercises are done.</p>
                                                                        <p>
                                                                        Stand with your feet shoulder-width<br>
                                                                        apart and extend your arms straight <br>
                                                                        out to either side with palms facing down. <br>
                                                                        This is the starting position.
                                                                        </p>
                                                                        <p>Jump and cross your right arm over your <br>
                                                                        left and your right foot over your left.<br>
                                                                        Jump back to the starting position, <br>
                                                                        then cross with the opposite arm and foot. <br>
                                                                        This counts as one rep.</li>
                                                                        </p>
                                                                        <p>Continue alternating sides and repeating <br>
                                                                        this movement until you complete 25 reps. <br>
                                                                        Be sure to keep up the pace and not allow <br>
                                                                        too much time for recovery between jumps; <br>
                                                                        this way you'll be sure to keep up your <br>
                                                                        heart rate and engage your whole body. 
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center"><img src="images/webp/1.gif"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><div class="fw-bolder">FLAT TONED ABS</div>
                                                                    <div class="mt-4">
                                                                        <p class="text-danger fw-bold">This is a template message for all activities. <br>
                                                                        The below description is not the <br>
                                                                        correct representation of how the <br>
                                                                        exercises are done.</p>
                                                                        <p>
                                                                        Stand with your feet shoulder-width<br>
                                                                        apart and extend your arms straight <br>
                                                                        out to either side with palms facing down. <br>
                                                                        This is the starting position.
                                                                        </p>
                                                                        <p>Jump and cross your right arm over your <br>
                                                                        left and your right foot over your left.<br>
                                                                        Jump back to the starting position, <br>
                                                                        then cross with the opposite arm and foot. <br>
                                                                        This counts as one rep.</li>
                                                                        </p>
                                                                        <p>Continue alternating sides and repeating <br>
                                                                        this movement until you complete 25 reps. <br>
                                                                        Be sure to keep up the pace and not allow <br>
                                                                        too much time for recovery between jumps; <br>
                                                                        this way you'll be sure to keep up your <br>
                                                                        heart rate and engage your whole body. 
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center"><img src="images/webp/2.gif"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><div class="fw-bolder">BURPREE </div>
                                                                    <div class="mt-4">
                                                                        <p class="text-danger fw-bold">This is a template message for all activities. <br>
                                                                        The below description is not the <br>
                                                                        correct representation of how the <br>
                                                                        exercises are done.</p>
                                                                        <p>
                                                                        Stand with your feet shoulder-width<br>
                                                                        apart and extend your arms straight <br>
                                                                        out to either side with palms facing down. <br>
                                                                        This is the starting position.
                                                                        </p>
                                                                        <p>Jump and cross your right arm over your <br>
                                                                        left and your right foot over your left.<br>
                                                                        Jump back to the starting position, <br>
                                                                        then cross with the opposite arm and foot. <br>
                                                                        This counts as one rep.</li>
                                                                        </p>
                                                                        <p>Continue alternating sides and repeating <br>
                                                                        this movement until you complete 25 reps. <br>
                                                                        Be sure to keep up the pace and not allow <br>
                                                                        too much time for recovery between jumps; <br>
                                                                        this way you'll be sure to keep up your <br>
                                                                        heart rate and engage your whole body. 
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center"><img src="images/webp/3.gif"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><div class="fw-bolder">BUTT FITNESS </div>
                                                                    <div class="mt-4">
                                                                        <p class="text-danger fw-bold">This is a template message for all activities. <br>
                                                                        The below description is not the <br>
                                                                        correct representation of how the <br>
                                                                        exercises are done.</p>
                                                                        <p>
                                                                        Stand with your feet shoulder-width<br>
                                                                        apart and extend your arms straight <br>
                                                                        out to either side with palms facing down. <br>
                                                                        This is the starting position.
                                                                        </p>
                                                                        <p>Jump and cross your right arm over your <br>
                                                                        left and your right foot over your left.<br>
                                                                        Jump back to the starting position, <br>
                                                                        then cross with the opposite arm and foot. <br>
                                                                        This counts as one rep.</li>
                                                                        </p>
                                                                        <p>Continue alternating sides and repeating <br>
                                                                        this movement until you complete 25 reps. <br>
                                                                        Be sure to keep up the pace and not allow <br>
                                                                        too much time for recovery between jumps; <br>
                                                                        this way you'll be sure to keep up your <br>
                                                                        heart rate and engage your whole body. 
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center"><img src="images/webp/4.gif"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><div class="fw-bolder">PUSH UP </div>
                                                                    <div class="mt-4">
                                                                        <p class="text-danger fw-bold">This is a template message for all activities. <br>
                                                                        The below description is not the <br>
                                                                        correct representation of how the <br>
                                                                        exercises are done.</p>
                                                                        <p>
                                                                        Stand with your feet shoulder-width<br>
                                                                        apart and extend your arms straight <br>
                                                                        out to either side with palms facing down. <br>
                                                                        This is the starting position.
                                                                        </p>
                                                                        <p>Jump and cross your right arm over your <br>
                                                                        left and your right foot over your left.<br>
                                                                        Jump back to the starting position, <br>
                                                                        then cross with the opposite arm and foot. <br>
                                                                        This counts as one rep.</li>
                                                                        </p>
                                                                        <p>Continue alternating sides and repeating <br>
                                                                        this movement until you complete 25 reps. <br>
                                                                        Be sure to keep up the pace and not allow <br>
                                                                        too much time for recovery between jumps; <br>
                                                                        this way you'll be sure to keep up your <br>
                                                                        heart rate and engage your whole body. 
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center"><img src="images/webp/5.gif"></td>
                                                            <tr>
                                                                <td><div class="fw-bolder">HIGH KNEE FITNESS</div>
                                                                    <div class="mt-4">
                                                                        <p class="text-danger fw-bold">This is a template message for all activities. <br>
                                                                        The below description is not the <br>
                                                                        correct representation of how the <br>
                                                                        exercises are done.</p>
                                                                        <p>
                                                                        Stand with your feet shoulder-width<br>
                                                                        apart and extend your arms straight <br>
                                                                        out to either side with palms facing down. <br>
                                                                        This is the starting position.
                                                                        </p>
                                                                        <p>Jump and cross your right arm over your <br>
                                                                        left and your right foot over your left.<br>
                                                                        Jump back to the starting position, <br>
                                                                        then cross with the opposite arm and foot. <br>
                                                                        This counts as one rep.</li>
                                                                        </p>
                                                                        <p>Continue alternating sides and repeating <br>
                                                                        this movement until you complete 25 reps. <br>
                                                                        Be sure to keep up the pace and not allow <br>
                                                                        too much time for recovery between jumps; <br>
                                                                        this way you'll be sure to keep up your <br>
                                                                        heart rate and engage your whole body. 
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center"><img src="images/webp/6.gif"></td> 
                                                            </tr>
                                                            <tr>
                                                                <td><div class="fw-bolder">LOW KNEE FITNESS</div>
                                                                    <div class="mt-4">
                                                                        <p class="text-danger fw-bold">This is a template message for all activities. <br>
                                                                        The below description is not the <br>
                                                                        correct representation of how the <br>
                                                                        exercises are done.</p>
                                                                        <p>
                                                                        Stand with your feet shoulder-width<br>
                                                                        apart and extend your arms straight <br>
                                                                        out to either side with palms facing down. <br>
                                                                        This is the starting position.
                                                                        </p>
                                                                        <p>Jump and cross your right arm over your <br>
                                                                        left and your right foot over your left.<br>
                                                                        Jump back to the starting position, <br>
                                                                        then cross with the opposite arm and foot. <br>
                                                                        This counts as one rep.</li>
                                                                        </p>
                                                                        <p>Continue alternating sides and repeating <br>
                                                                        this movement until you complete 25 reps. <br>
                                                                        Be sure to keep up the pace and not allow <br>
                                                                        too much time for recovery between jumps; <br>
                                                                        this way you'll be sure to keep up your <br>
                                                                        heart rate and engage your whole body. 
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center"><img src="images/webp/7.gif"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><div class="fw-bolder">THIGH WORKOUT </div>
                                                                    <div class="mt-4">
                                                                        <p class="text-danger fw-bold">This is a template message for all activities. <br>
                                                                        The below description is not the <br>
                                                                        correct representation of how the <br>
                                                                        exercises are done.</p>
                                                                        <p>
                                                                        Stand with your feet shoulder-width<br>
                                                                        apart and extend your arms straight <br>
                                                                        out to either side with palms facing down. <br>
                                                                        This is the starting position.
                                                                        </p>
                                                                        <p>Jump and cross your right arm over your <br>
                                                                        left and your right foot over your left.<br>
                                                                        Jump back to the starting position, <br>
                                                                        then cross with the opposite arm and foot. <br>
                                                                        This counts as one rep.</li>
                                                                        </p>
                                                                        <p>Continue alternating sides and repeating <br>
                                                                        this movement until you complete 25 reps. <br>
                                                                        Be sure to keep up the pace and not allow <br>
                                                                        too much time for recovery between jumps; <br>
                                                                        this way you'll be sure to keep up your <br>
                                                                        heart rate and engage your whole body. 
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center"><img src="images/webp/8.gif"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><div class="fw-bolder">SITTING JACKS </div>
                                                                    <div class="mt-4">
                                                                        <p class="text-danger fw-bold">This is a template message for all activities. <br>
                                                                        The below description is not the <br>
                                                                        correct representation of how the <br>
                                                                        exercises are done.</p>
                                                                        <p>
                                                                        Stand with your feet shoulder-width<br>
                                                                        apart and extend your arms straight <br>
                                                                        out to either side with palms facing down. <br>
                                                                        This is the starting position.
                                                                        </p>
                                                                        <p>Jump and cross your right arm over your <br>
                                                                        left and your right foot over your left.<br>
                                                                        Jump back to the starting position, <br>
                                                                        then cross with the opposite arm and foot. <br>
                                                                        This counts as one rep.</li>
                                                                        </p>
                                                                        <p>Continue alternating sides and repeating <br>
                                                                        this movement until you complete 25 reps. <br>
                                                                        Be sure to keep up the pace and not allow <br>
                                                                        too much time for recovery between jumps; <br>
                                                                        this way you'll be sure to keep up your <br>
                                                                        heart rate and engage your whole body. 
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center"><img src="images/webp/9.gif"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><div class="fw-bolder">ABS AND CARDIO </div>
                                                                    <div class="mt-4">
                                                                        <p class="text-danger fw-bold">This is a template message for all activities. <br>
                                                                        The below description is not the <br>
                                                                        correct representation of how the <br>
                                                                        exercises are done.</p>
                                                                        <p>
                                                                        Stand with your feet shoulder-width<br>
                                                                        apart and extend your arms straight <br>
                                                                        out to either side with palms facing down. <br>
                                                                        This is the starting position.
                                                                        </p>
                                                                        <p>Jump and cross your right arm over your <br>
                                                                        left and your right foot over your left.<br>
                                                                        Jump back to the starting position, <br>
                                                                        then cross with the opposite arm and foot. <br>
                                                                        This counts as one rep.</li>
                                                                        </p>
                                                                        <p>Continue alternating sides and repeating <br>
                                                                        this movement until you complete 25 reps. <br>
                                                                        Be sure to keep up the pace and not allow <br>
                                                                        too much time for recovery between jumps; <br>
                                                                        this way you'll be sure to keep up your <br>
                                                                        heart rate and engage your whole body. 
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center"><img src="images/webp/10.gif"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><div class="fw-bolder">SIT UP</div>
                                                                    <div class="mt-4">
                                                                        <p class="text-danger fw-bold">This is a template message for all activities. <br>
                                                                        The below description is not the <br>
                                                                        correct representation of how the <br>
                                                                        exercises are done.</p>
                                                                        <p>
                                                                        Stand with your feet shoulder-width<br>
                                                                        apart and extend your arms straight <br>
                                                                        out to either side with palms facing down. <br>
                                                                        This is the starting position.
                                                                        </p>
                                                                        <p>Jump and cross your right arm over your <br>
                                                                        left and your right foot over your left.<br>
                                                                        Jump back to the starting position, <br>
                                                                        then cross with the opposite arm and foot. <br>
                                                                        This counts as one rep.</li>
                                                                        </p>
                                                                        <p>Continue alternating sides and repeating <br>
                                                                        this movement until you complete 25 reps. <br>
                                                                        Be sure to keep up the pace and not allow <br>
                                                                        too much time for recovery between jumps; <br>
                                                                        this way you'll be sure to keep up your <br>
                                                                        heart rate and engage your whole body. 
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center"><img src="images/webp/11.gif"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><div class="fw-bolder">SWIPE UP </div>
                                                                    <div class="mt-4">
                                                                        <p class="text-danger fw-bold">This is a template message for all activities. <br>
                                                                        The below description is not the <br>
                                                                        correct representation of how the <br>
                                                                        exercises are done.</p>
                                                                        <p>
                                                                        Stand with your feet shoulder-width<br>
                                                                        apart and extend your arms straight <br>
                                                                        out to either side with palms facing down. <br>
                                                                        This is the starting position.
                                                                        </p>
                                                                        <p>Jump and cross your right arm over your <br>
                                                                        left and your right foot over your left.<br>
                                                                        Jump back to the starting position, <br>
                                                                        then cross with the opposite arm and foot. <br>
                                                                        This counts as one rep.</li>
                                                                        </p>
                                                                        <p>Continue alternating sides and repeating <br>
                                                                        this movement until you complete 25 reps. <br>
                                                                        Be sure to keep up the pace and not allow <br>
                                                                        too much time for recovery between jumps; <br>
                                                                        this way you'll be sure to keep up your <br>
                                                                        heart rate and engage your whole body. 
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center"><img src="images/webp/12.gif"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><div class="fw-bolder">LEGS AND ABS</div>
                                                                    <div class="mt-4">
                                                                        <p class="text-danger fw-bold">This is a template message for all activities. <br>
                                                                        The below description is not the <br>
                                                                        correct representation of how the <br>
                                                                        exercises are done.</p>
                                                                        <p>
                                                                        Stand with your feet shoulder-width<br>
                                                                        apart and extend your arms straight <br>
                                                                        out to either side with palms facing down. <br>
                                                                        This is the starting position.
                                                                        </p>
                                                                        <p>Jump and cross your right arm over your <br>
                                                                        left and your right foot over your left.<br>
                                                                        Jump back to the starting position, <br>
                                                                        then cross with the opposite arm and foot. <br>
                                                                        This counts as one rep.</li>
                                                                        </p>
                                                                        <p>Continue alternating sides and repeating <br>
                                                                        this movement until you complete 25 reps. <br>
                                                                        Be sure to keep up the pace and not allow <br>
                                                                        too much time for recovery between jumps; <br>
                                                                        this way you'll be sure to keep up your <br>
                                                                        heart rate and engage your whole body. 
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center"><img src="images/webp/13.gif"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><div class="fw-bolder">SUMO SQUAT</div>
                                                                    <div class="mt-4">
                                                                        <p class="text-danger fw-bold">This is a template message for all activities. <br>
                                                                        The below description is not the <br>
                                                                        correct representation of how the <br>
                                                                        exercises are done.</p>
                                                                        <p>
                                                                        Stand with your feet shoulder-width<br>
                                                                        apart and extend your arms straight <br>
                                                                        out to either side with palms facing down. <br>
                                                                        This is the starting position.
                                                                        </p>
                                                                        <p>Jump and cross your right arm over your <br>
                                                                        left and your right foot over your left.<br>
                                                                        Jump back to the starting position, <br>
                                                                        then cross with the opposite arm and foot. <br>
                                                                        This counts as one rep.</li>
                                                                        </p>
                                                                        <p>Continue alternating sides and repeating <br>
                                                                        this movement until you complete 25 reps. <br>
                                                                        Be sure to keep up the pace and not allow <br>
                                                                        too much time for recovery between jumps; <br>
                                                                        this way you'll be sure to keep up your <br>
                                                                        heart rate and engage your whole body. 
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center"><img src="images/webp/14.gif"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="online-grid card-header bg-dark text-white">
                                                <div class="online-item bg-white badge-pill live-badge text-danger" id="live">ONLINE <i class="fa fa-cog fa-spin"></i></div>
                                                <div class="online-item">
                                                    <marquee>
                                                        <div class="online">
                                                            <div>
                                                                <span class="blink badge-blink">&middot;</span> David Ofili &nbsp;&nbsp; | &nbsp;&nbsp;<span class="blink badge-blink">&middot;</span> Garrett Winters&nbsp;&nbsp;| &nbsp;&nbsp;
                                                                <span class="blink badge-blink">&middot;</span> Ashton Cox &nbsp;&nbsp; | &nbsp;&nbsp;<span class="blink badge-blink">&middot;</span> Cedric Kelly&nbsp;&nbsp;| &nbsp;&nbsp;
                                                                <span class="blink badge-blink">&middot;</span> Airi Satou &nbsp;&nbsp; | &nbsp;&nbsp;<span class="blink badge-blink">&middot;</span> Brielle Williamson
                                                            </div>
                                                        </div>
                                                    </marquee>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>    
        </main>
        <!-- Footer-->
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-challenge-demo.js"></script>
        <script src="js/datatables-challenge-demo-2.js"></script>
    </body>
</html>
