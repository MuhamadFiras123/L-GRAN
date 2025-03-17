<?php
include 'connect.php';
if(isset($_POST['SUBMIT'])){
    $text=$_POST[''];
    $email=$_POST[''];
    $text=$_POST[''];
    $time=$_POST[''];
    $text=$_POST[''];
    $phone=$_POST[''];
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width, initial-scale-1.0">
        <title>L'GRAN RESTAURANT</title>
        <link rel="stylesheet" href="style.css">
        <link href= 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <!-- booking -->
        <section class="booking" id="booking">
            <div class="title">
                <img src="./images/yellow wave.png" alt="">
                <p>BOOK NOW</p>
                <img src="./images/yellow wave.png" alt="">
            </div>
            <p class="sub-title">
                Book Your Table Now And Have A Great Meal!
            </p>
            <form action="">
                <div class="first">
                    <div class="input">
                        <p>
                            Enter Your Full Name
                        </p>
                        <input type="text" placeholder="Write your name here..." name="name" autocomplete="off">
                    </div>
                    <div class="input">
                        <p>
                            Enter Your Email Address
                        </p>
                        <input type="email" placeholder="Write your email here...">
                    </div>
                </div>
                <div class="mid">
                    <div class="input">
                        <p>
                            How many people?
                        </p>
                        <div class="input-i">
                            <select name="" id="">
                                <option value="0">
                                    1 people
                                </option>
                                <option value="1">
                                    2 people
                                </option>
                                <option value="2">
                                    3 people
                                </option>
                                <option value="3">
                                    4 people
                                </option>
                                <option value="4">
                                    5 people
                                </option>
                                <option value="4">
                                    6 people
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="input">
                        <p>What time?</p>
                        <div class="input-i">
                            <input type="time" placeholder="10:00am">
                        </div>
                    </div>
                </div>
                <div class="last">
                    <div class="input">
                        <p>
                            Date
                        </p>
                        <div class="input-i">
                            <input type="date" placeholder="6 / 1 / 2023">
                        </div>
                    </div>
                    <div class="input">
                        <p>Your Phone Number</p>
                        <input type="phone" placeholder="Enter your phone number...">
                    </div>
                </div>
                <button class="btn">
                    SUBMIT
                </button>
            </form>
        </section>
    </body>
</html>
