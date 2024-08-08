<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magram Health</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
        @media (max-width: 768px) {
            .missions{
                display: none;
            }

            .mmain-text{
                font-size: 1px;
                padding-top: 200px;
                width: 40vh;

            }
            .lower{
                font-size: 15px
            }
            .mmain-text > h1 {
                display: none
            }
            .center{
                width: 100vh;
                font-size: small
            }
            .about{
                display: block;
            }
            .about > img {
                display: none;
                width: 100vh;
                font-size: 10px;
            }
            #mri-images{
                display: block

            }
            #other-flex{
                display: block;
                gap:20px
            }


        }
        
        @import url('https://fonts.googleapis.com/css2?family=Assistant:wght@500&display=swap');
        body {
            margin: 0;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            color: #333;
        }
        .other-flex{
        display: flex;
        gap: 20px;
            
        }

  header {
            background-image: url(images/wallpaper.png);
            background-size: cover;
            animation: fadeIn 2s;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            color: white;
            display: flex;
            align-items: center;
            position: relative;
            transition: background-image 1s ease-in-out;
            overflow: visible;
            padding-left: 20px;
        }
        .header-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }
        .mmain-text {
            z-index: 2;
            position: relative;
            padding-top: 100px;
        }
        .about {
            background-color: #13274F;
            color: white;
            padding: 100px 70px;
            display: flex;
            gap: 40px;
            align-items: center;
            justify-content: center;
        }
        .about h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .about p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .about img {
            width: 600px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .about-content {
            max-width: 600px;
        }
        .about-content h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        
        .about-content p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        .about-content button {
            background-color: #007BFF;
            color: white;
            padding: 10px 40px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .about-content button:hover {
            background-color: #0056b3;
        }
        .mri-images {
            display: flex;
            gap: 20px;
            justify-content: center;
        }
        .mri-card {
            position: relative;
            display: block;
            width: 450px;
            text-decoration: none;
            color: #333;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .mri-card img {
            width: 100%;
            display: block;
            border-bottom: 4px solid #007BFF;
        }
        .mri-card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s;
            text-align: center;
            font-size: 20px;
        }
        .mri-card:hover .mri-card-overlay {
            opacity: 1;
        }
        .mri-card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }
        .mri-card h2 {
            position: absolute;
            bottom: 20px;
            left: 20px;
            margin: 0;
            font-size: 24px;
            background: rgba(255, 255, 255, 0.6);
            padding: 10px;
            border-radius: 5px;
        }
        .missions {
            background-image: url(images/cinema.jpg);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            color: aliceblue;
            display: block;
            gap: 40px;
            padding: 70px;
        }
        .vision {
            background-color: rgba(47, 126, 228, 0.6);
            padding: 20px;
        }
        .missions-section > p {
            text-align: center;
        }
        .mmain-text{
            font-family: "Bebas Neue", sans-serif;
            font-weight: 400;
            font-style: normal;
            padding-left: 30px;
            text-align: left;
            font-size: 45px;
            animation: fadeIn 11s;
        }
   @keyframes fadeIn {
     0% { opacity: 0; }
     100% { opacity: 1; }
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
    </style>
</head>
<body>
<?php include 'navbar.php' ?>

    <header>
        <div class="header-overlay"></div>
        <div style="width: 50%;">
            <br><br><br>
            <h1 class="mmain-text">Leading provider of advanced medical imaging solutions, MRI systems, Tele Radiology services, healthcare technology, Africa</h1>
            <div style="text-align: left; padding-left: 40px;" class="center">
                <br><br>
                <h2 class="lower">The World of Modern Medical Machines</h2>
                <p>Empowering Healthcare Across Africa</p>
        </div>
        </div>
    </header>

    <section id="about" class="about">
        <img src="images/doctor.jpg" alt="Doctor">
        <div class="about-content">
            <h1>Revolutionizing Medical Imaging in Africa</h1>
            <p>Welcome to Magram International, your premier destination for cutting-edge medical imaging solutions in Africa. As a trusted distributor of Time Medical (TM), we bring you the latest in diagnostic innovation, empowering healthcare professionals and institutions across the continent. With a focus on advanced MRI, DR, and tele-imaging technologies, we are committed to revolutionizing healthcare access and quality. Explore our range of products and services and join us in shaping the future of healthcare in Africa.</p>
            <button> <a style="text-decoration: none; color: white;" href="about.php">Learn More</a></button>
        </div>
    </section>

    <section style="text-align: center;" class="mri">
        <h1>MRI MACHINES</h1>
        <p>Explore our comprehensive range of advanced medical imaging solutions designed to meet the diverse needs of healthcare providers across Africa</p>
        <div id="mri-images" class="mri-images">
            <a  href="products.php" class="mri-card">
                <img src="images/neona.jpg" alt="NEONA MRI System">
                <div class="mri-card-overlay">
                    <span>NEONA</span>
                </div>
                <h2>NEONA MRI System</h2>
            </a>
            <a href="products.php" class="mri-card">
                <img src="images/emma.jpg" alt="EMMA MRI System">
                <div class="mri-card-overlay">
                    <span>View</span>
                </div>
                <h2>EMMA MRI System</h2>
            </a>
            <a  href="products.php" class="mri-card">
                <img src="images/nova.jpg" alt="NOVA Preclinical MRI System">
                <div class="mri-card-overlay">
                    <span>View</span>
                </div>
                <h2>NOVA Preclinical MRI System</h2>
            </a>
        </div>
        <br><br><br>    
    </section>

    <section class="missions">
        <div class="missions-section">
            <br>
            <div style="text-align: center;" class="vision">
                <img width="80" src="images/binoculars.png" alt="Vision">
                <h1>VISION</h1>
                <p>Our vision is a future where every individual in Africa has access to timely and accurate diagnostic imaging services, regardless of their location or socioeconomic status. We envision a healthcare landscape characterized by innovation, collaboration, and compassion, where the power of technology is harnessed to transform lives and build healthier, more resilient communities.</p>
            </div>
            <br>
            <div id="other-flex" style="" class="other-flex">
               
                <div class="vision">
                    <img width="80" src="images/commitment.png" alt="Commitment">
                    <h1>COMMITMENT</h1>
                    <p>At Magram International, we are guided by our core values of integrity, excellence, and empathy. We are dedicated to exceeding the expectations of our customers and stakeholders, delivering value-driven solutions that address the unique needs of the African healthcare market. With a focus on innovation, sustainability, and social responsibility, we are committed to making a lasting impact on the health and well-being of individuals and communities across the continent.</p>
                </div>
                <br>
                <div class="vision">
                    <img width="80" src="images/goal.png" alt="Goal">
                    <h1>MISSION</h1>
                    <p>At Magram International, our mission is to empower healthcare providers across Africa with advanced medical imaging solutions, ensuring equitable access to high-quality diagnostic services for all. We are committed to leveraging cutting-edge technology and strategic partnerships to overcome healthcare challenges, improve patient outcomes, and drive positive change in communities.</p>
                </div>
            </div>
        </div>
    </section>





        <?php include 'footer.php'?>
   
</body>
</html>
