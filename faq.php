<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magram International FAQ</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 20px;
            width: 100%;
            padding: 10px 20px;
            background-color: #f0f8ff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        
        nav ul {
            display: flex;
           
            list-style: none;
            margin: 0;
            padding: 0;
        }
        
        nav ul li {
            cursor: pointer;
            transition: color 0.3s;
        }
        
        nav ul li:hover {
            color: #007BFF;
        }
        
        .image img {
            width: 150px;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            font-family: "Raleway", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
            color: #333;
            background-color: #ffffff;
        }
        .bg {
            background-image: url(images/mask.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 50vh;
         
            text-align: center;
            color: aliceblue;
            font-size: x-large;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .upper-text {
            text-align: center;
            font-size: 18px;
            line-height: 1.6;
            margin: 20px 0;
            font-weight: 800;
            padding: 20px;
        }
        .faq-container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
        }
        .faq-item {
            background-color: #fff;
            margin: 10px 0;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-left: 5px solid #008cff;
        }
        .faq-title {
            font-weight: 600;
            cursor: pointer;
            margin-bottom: 10px;
            color: #025383;
            position: relative;
            font-size: large;
            padding-left: 20px;
        }
        .faq-title::before {
            content: '+';
            position: absolute;
            left: 0;
            top: 0;
            font-size: 20px;
            color: #00eeff;
        }
        .faq-content {
            display: none;
            font-family: "Montserrat", sans-serif;
                font-optical-sizing: auto;
                font-weight: <weight>;
                font-style: normal;
            margin-top: 10px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'?>
    <section class="bg">
        <br><br>
        <h1>FAQ</h1>
        <p>Home - FAQ</p>
    </section>
   
    <div class="faq-container">
        <div class="faq-item">
            <div class="faq-title"> What does Magram International specialize in?</div>
            <div class="faq-content"> Magram International specializes in providing advanced medical imaging solutions, including MRI systems, to healthcare providers across Africa.</div>
        </div>
        <div class="faq-item">
            <div class="faq-title"> What products does Magram International offer?</div>
            <div class="faq-content"> We offer a range of products including dedicated neonatal MRI systems, whole-body MRI systems, preclinical MRI systems, and specialized orthopedic MRI systems, among others.</div>
        </div>
        <div class="faq-item">
            <div class="faq-title"> How can I purchase products from Magram International?</div>
            <div class="faq-content"> You can contact us directly through our website or reach out to one of our authorized distributors for information on purchasing our products.</div>
        </div>
        <div class="faq-item">
            <div class="faq-title"> Does Magram International provide installation services?</div>
            <div class="faq-content"> Yes, we offer installation services for all our products to ensure proper setup and functionality.</div>
        </div>
        <div class="faq-item">
            <div class="faq-title"> What is TeleRadiology and how does Magram International utilize it?</div>
            <div class="faq-content"> TeleRadiology is the remote interpretation of medical images by radiologists. Magram International offers TeleRadiology services, connecting healthcare providers with expert radiologists for timely and accurate diagnoses.</div>
        </div>
        <div class="faq-item">
            <div class="faq-title"> What maintenance and support offerings does Magram International provide?</div>
            <div class="faq-content"> We offer comprehensive maintenance and support services to ensure the continued performance and reliability of your imaging systems, including routine maintenance, troubleshooting, and repairs.</div>
        </div>
        <div class="faq-item">
            <div class="faq-title"> Can Magram International provide training on using their products?</div>
            <div class="faq-content"> Yes, we offer training services to healthcare professionals to ensure they are proficient in using our imaging systems effectively.</div>
        </div>
        <div class="faq-item">
            <div class="faq-title"> Are Magram International's products FDA-approved?</div>
            <div class="faq-content"> Yes, many of our products are FDA-approved, ensuring they meet rigorous quality and safety standards.</div>
        </div>
        <div class="faq-item">
            <div class="faq-title"> What are the benefits of using high-temperature superconducting (HTS) coil technology?</div>
            <div class="faq-content"> HTS coil technology delivers increased signal-to-noise ratio (SNR) to MR images, resulting in improved image quality across routine and advanced clinical applications.</div>
        </div>
        <div class="faq-item">
            <div class="faq-title"> How can I contact Magram International for further inquiries?</div>
            <div class="faq-content"> You can contact us through the contact information provided on our website, or reach out to one of our authorized distributors for assistance.</div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.faq-title').forEach(item => {
            item.addEventListener('click', event => {
                const content = item.nextElementSibling;
                content.style.display = content.style.display === 'block' ? 'none' : 'block';
                item.querySelector('.faq-title::before').textContent = content.style.display === 'block' ? '-' : '+';
            });
        });
    </script>
     <?php include 'footer.php' ?>
</body>
</html>
