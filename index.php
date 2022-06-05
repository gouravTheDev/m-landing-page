<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Magic Moments Photography</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="mdi/css/materialdesignicons.min.css">

    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="landing.css">
</head>

<body>
    <?php
    require "sendmail.php";
    $mailSent = false;
    if (isset($_POST['submitDateForm'])) {
        $name = $_POST['name'];
        $eventType = $_POST['eventType'];
        $eventDate = $_POST['eventDate'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $notes = isset($_POST['notes']) ? $_POST['notes'] : '';

        $mailMsg = "Date availability check form has been submitted. The details are mentioned below. <br>";
        $mailMsg .= "<table>";
        $mailMsg .= "<tr>
                        <th>Name:- </th>
                        <td>" . $name . "</td>
                    </tr>";
        $mailMsg .= "<tr>
                    <th>Phone:- </th>
                    <td>" . $phone . "</td>
                </tr>";
        $mailMsg .= "<tr>
                        <th>Event Type:- </th>
                        <td>" . $eventType . "</td>
                    </tr>";
        $mailMsg .= "<tr>
                    <th>Event Date:- </th>
                    <td>" . $eventDate . "</td>
                </tr>";
        $mailMsg .= "<tr>
                <th>City:- </th>
                <td>" . $city . "</td>
            </tr>";

        $mailMsg .= "<tr>
            <th>Notes:- </th>
            <td>" . $notes . "</td>
        </tr>";
        $mailMsg .= "</table>";
        $mailMsg .= "<br>Thank you. <br> Team Magic Moments Photography";

        // echo $mailMsg;
        sendMail("magicmomentsphotography.in@gmail.com", "Date Availability Enquiry", $mailMsg);
        // sendMail("chatterjeegouravking@gmail.com", "Date Availability Enquiry", $mailMsg);
        $mailSent = true;
    }
    ?>
    <div class="container pt-0 mt-0 pb-4 mb-4">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse animate__animated animate__backInRight animation" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto text-center navbar-menus pt-3">
                    <a href="/" class="nav-link mr-2 text-white">
                        <p class="border-radius">HOME</p>
                    </a>
                    <a href="coming-soon.php" class="nav-link mr-2 text-white">
                        <p class="border-radius">ABOUT US</p>
                    </a>
                    <a href="coming-soon.php" class="nav-link mr-2 text-white">
                        <p class="border-radius">SHOP</p>
                    </a>
                    <a href="coming-soon.php" class="nav-link mr-2 text-white">
                        <p class="border-radius">BLOG</p>
                    </a>
                    <a href="coming-soon.php" class="nav-link mr-2 text-white">
                        <p class="">CONTACT</p>
                    </a>
                </ul>
                <div class="nav-login-section text-right">
                    <a href="coming-soon.php" class="mr-4" style="color: #fff">
                        <i class="mdi mdi-magnify"></i>
                    </a>
                    <a href="coming-soon.php" class="mr-4" style="color: #fff">
                        <i class="mdi mdi-cart"></i>
                    </a>
                    <a href="coming-soon.php" class="btn btn-sm btn-cus mr-2">
                        Login
                    </a>
                </div>
            </div>
        </nav>
        <div class="social-section">
            <div>
                <a href="" class="btn mr-4 social-icon-btn mb-4" style="color: #fff">
                    <i class="mdi mdi-facebook social-icon"></i>
                </a>
            </div>
            <div>
                <a href="" class="btn mr-4 social-icon-btn mb-4" style="color: #fff">
                    <i class="mdi mdi-google social-icon"></i>
                </a>
            </div>
            <div>
                <a href="" class="btn mr-4 social-icon-btn mb-4" style="color: #fff">
                    <i class="mdi mdi-whatsapp social-icon"></i>
                </a>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6 col-sm-12 mt-4 pt-4">
                <h1 class="text-center text-white main-heading mt-4 animate__animated animate__backInUp animation">MAGIC
                    MOMENTS <br>PHOTOGRAPHY</h1>
                <h3 class="text-white text-center mb-4 sub-heading pb-4 animate__animated animate__backInDown animation">
                    Begin your moments with us!</h3>
                <?php
                if ($mailSent) { ?>
                    <h6>Your enquiry has been submitted. Our team member will reach out to you shortly.</h6>
                <?php }
                ?>
                <div class="card-transparent card-cus px-0 py-0 mt-4 shadow animate__animated animate__bounceInLeft animation">
                    <div class="card-body px-2 py-3">
                        <h5 class="text-center text-white font-weight-bold">Date Availability Check</h5>
                        <form class="mt-4" method="POST">
                            <input type="hidden" name="submitDateForm" value="11">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="name" required>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <select class="form-control" id="" name="eventType" required>
                                            <option value="">Event Type</option>
                                            <option value="Wedding Reception">Wedding Reception</option>
                                            <option value="Reception">Reception</option>
                                            <option value="Birthday">Birthday</option>
                                            <option value="Anniversary">Anniversary</option>
                                            <option value="Puberty Ceremony">Puberty Ceremony</option>
                                            <option value="Portfolio Shoot">Portfolio Shoot</option>
                                            <option value="Family Get Together">Family Get Together</option>
                                            <option value="Corporate Meetings">Corporate Meetings</option>
                                            <option value="Product Shoot">Product Shoot</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="date" class="form-control date" name="eventDate" required placeholder="Event date">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="phone" required placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="city" required placeholder="City">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea id="" cols="30" rows="3" class="form-control" name="notes" placeholder="Additional Notes if any"></textarea>
                            </div>
                            <div class="form-group text-center mt-4 pb-0 mb-0">
                                <button type="submit" class="btn btn-sm">Check</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>