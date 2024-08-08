<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Magram Health Care</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap');
    
        body {
            font-family: "Raleway", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
            color: #333;
        }
        .team{
            font-family: "Raleway", sans-serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .header {
            background-color: #343a40;
            color: white;
            padding: 15px 0;
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        .contact-wrap {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
            margin-top: 80px; /* Adjusted to accommodate fixed header */
        }

        .contact-in {
            flex: 1 1 300px;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f8f9fa;
        }

        .contact-in h1, .contact-in h2 {
            margin-bottom: 15px;
            color: #007bff;
        }

        .contact-in p {
            margin-bottom: 10px;
        }

        .contact-in-input, .contact-in-textarea, .contact-in-btn {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .contact-in-btn {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        .contact-in-btn:hover {
            background-color: #0056b3;
        }

        .contact-in-form {
            background: linear-gradient(to right, #007bff, #0056b3);
            color: white;
            padding: 20px;
            border-radius: 8px;
        }

        .map-container {
            flex: 1 1 100%;
            margin: 20px;
            height: 400px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    
<header class="fixed-top">
    <?php include 'navbar.php'; ?>
</header>

<div class="contact-wrap">
    <div style="text-align: center;" class="contact-in">
        <h1 style="font-weight: 800;">OUR TEAM</h1>


        <div class="team">

            
            <div class="admin">
                <p style="font-weight: 900">BABU ANNAKODI</p>
                <P style="font-weight: 700">DIRECTOR</P>
                <p>+254 114753800</p>

            </div>
                <div class="admin2">
                    <p style="font-weight: 900">RAPHAEL TIYIES</p>
                        <p style="font-weight: 700">ADMIN</p>
                        <p> +254 745 491 342</p>

                </div>
                
                    
                    <div class="market">
                        <p style="font-weight: 900">AMMON ODHIAMBO</p>
                        <p style="font-weight: 700">MARKETER</p>
                        <p> +254 728 490 894</p>

                    </div>
        </div>
       
        <hr>
       <div style="background-color: #D3D3D3; padding: 50px"  class="dex">

       
                <h2  style="font-weight: 800;"><i class="fa fa-envelope" aria-hidden="true"></i> EMAIL</h2>
                <div class="team">

                    
                    <div  class="admin">
                        <p style="font-weight: 900">BABU ANNAKODI</p>
                        <p style="font-weight: 500">babu.a@magramhealth.com</p>
                    

                    </div>
                        <div class="admin2">
                            <p style="font-weight: 900">RAPHAEL TIYIES</p>
                                <p style="font-weight: 500">raphaeltiyies7@gmail.com</p>
                            

                        </div>
                        
                            
                            <div class="market">
                                <p style="font-weight: 900">AMMON ODHIAMBO</p>
                                <p style="font-weight: 500">ammon.o@magramhealth.com</p>
                            

                            </div>
                </div>
        </div>
        <hr>
        <br><br>

        <p>P.O Box 18727, Nairobi Kenya</p>
        <ul class="list-unstyled">
            <li class="d-inline-block mr-2"><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
            <li class="d-inline-block mr-2"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li class="d-inline-block mr-2"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
            <li class="d-inline-block"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
    </div>

   

    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255282.32335424496!2d36.84739685!3d-1.3032089500000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1172d84d49a7%3A0xf7cf0254b297924c!2sNairobi!5e0!3m2!1sen!2ske!4v1722521502590!5m2!1sen!2ske" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<?php include 'footer.php' ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
