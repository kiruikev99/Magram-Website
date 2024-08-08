<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Page</title>
    <style>
          @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        body {
     
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .flex-action p {
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;   
        }
        
        
        
        .bg {
            background-image: url(images/services.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 50vh;
            padding: 50px;
            text-align: center;
            color: aliceblue;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        .bg h1 {
            font-size: 48px;
            font-weight: 800;
            margin: 0;
            color: aliceblue;
        }
        
        .bg p {
            font-size: 20px;
            margin-top: 10px;
        }
        
        .content {
            padding: 50px;
            background-color: white;
        }
        
        .content h1 {
            font-size: 36px;
            font-weight: 800;
            margin-bottom: 20px;
            text-align: center;
        }
        p{
          
        }
        
        .content p {
            font-size: 18px;
            font-family: "Montserrat", sans-serif;
                font-optical-sizing: auto;
                font-weight: <weight>;
                font-style: normal;
            line-height: 1.6;
            margin: 0;
        }
        
        .flex-action {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }
        p{
            font-family: "Montserrat", sans-serif;
                font-optical-sizing: auto;
                font-weight: <weight>;
                font-style: normal;
        }
        
        .flex-action img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        
        .services {
            text-align: center;
            padding: 50px 0;
            background-color: #f7f7f7;
        }
        
        .services h3 {
            font-size: 24px;
            margin-bottom: 30px;
            font-family: "Montserrat", sans-serif;
                font-optical-sizing: auto;
                font-weight: <weight>;
                font-style: normal;
        }
        
        .parts {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }
        
        .parts .one {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 250px;
        }
        
        .parts .one img {
            width: 90px;
            margin-bottom: 15px;
        }


        footer {
    background-color: #13274F;
    color: white;
    padding: 40px 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.footer-container {
    max-width: 1200px;
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.footer-section {
    flex: 1 1 200px;
    margin: 10px;
}

.footer-section h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

.footer-section p,
.footer-section a {
    font-size: 16px;
    color: #ffffff;
    text-decoration: none;
    margin: 5px 0;
}

.footer-section a:hover {
    color: #007BFF;
}

.social-icons {
    display: flex;
    gap: 20px;
    margin-top: 20px;
}

.social-icons a {
    color: #ffffff;
    font-size: 24px;
    transition: color 0.3s;
}

.social-icons a:hover {
    color: #007BFF;
}

.subscribe-form input[type="email"] {
    padding: 10px;
    border: none;
    border-radius: 5px;
    width: 200px;
    margin-right: 10px;
}

.subscribe-form button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #007BFF;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s;
}

.subscribe-form button:hover {
    background-color: #0056b3;
}

.footer-bottom {
    margin-top: 20px;
    font-size: 14px;
    color: #cccccc;
}
.flex-action{
    display: flex;
}
    </style>
</head>
<body>
   <?php include 'navbar.php' ?>
    
    <section class="bg">
        <br><br><br>
        <h1>SERVICES</h1>
        <p>Home - Services</p>
    </section>
    
    <section class="content">
             <div style="text-align: center;" class="img">
                <img width="190" src="images/medical.png">

            </div>
        <h1>Comprehensive Services for Medical Imaging</h1>
        <div class="flex-action">
            
           
            <p>Our commitment to excellence extends beyond providing cutting-edge medical imaging solutions; it encompasses a comprehensive suite of services aimed at supporting healthcare providers throughout their journey. With a wealth of expertise and a passion for innovation, we offer a range of services designed to optimize the performance, reliability, and efficiency of your imaging infrastructure. At Magram International, we understand that investing in medical imaging technology is a significant decision. That's why we go above and beyond to provide comprehensive installation and training services, empowering healthcare professionals with the knowledge and skills needed to leverage the full potential of their imaging equipment. Magram International as your trusted partner, you can rest assured that you'll receive the highest level of service and support, allowing you to focus on what matters most—delivering exceptional patient care.</p>
        </div>
    </section>
    
    <section class="services">
        <h3>Our services span every stage of the imaging process</h3>
        <div class="parts">
            <div class="one">
                <img src="images/training (3).png" alt="Consultation">
                <p>Initial Consultation and Sales to Installation</p>
            </div>
            <div class="one">
                <img src="images/training (1).png" alt="Training">
                <p>Training</p>
            </div>
            <div class="one">
                <img src="images/training (2).png" alt="Maintenance">
                <p>Ongoing Maintenance</p>
            </div>
        </div>
        <p>Whether you're seeking to upgrade your existing equipment or embarking on a new imaging project, our team of experts is here to guide you every step of the way</p>
    </section>
    <section style="background-color: #ffffff; padding: 40px;" class="end">
        <p style="font-size: 18px;
            margin-top: 10px; text-align: center;">Furthermore, our maintenance and support offerings are tailored to ensure the continued performance and reliability of your imaging systems. From routine maintenance and troubleshooting to timely repairs and upgrades, our dedicated support team is committed to maximizing uptime and minimizing disruptions to your operations.</p>
    </section>


    <?php include 'footer.php' ?>
</body>
</html>
