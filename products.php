<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTS</title>
    <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        body {
            font-family: Arial, sans-serif;
            background-color: #e6e6e6;
            color: #333;
            margin: 0;
            padding: 0;
        }

     

        .bg {
            background-image: url('images/doctors.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 50vh;
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
        }

        .bg p {
            font-size: 20px;
            margin-top: 10px;
        }

        .content {
            padding: 50px;
            background-color: white;
            max-width: 1200px;
            margin: 0 auto;
        }

        .content h1 {
            font-size: 36px;
            font-weight: 800;
            margin-bottom: 20px;
            text-align: center;
        }

        .content p {
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;   
            font-size: 18px;
            line-height: 1.6;
            margin: 0;
        }

        .products {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .product-card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            max-width: 600px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .product-card img {
            width: 100%;
            height: auto;
        }

        .product-card h1 {
            font-size: 24px;
            margin: 16px;
            color: #333;
        }

        .product-card p {
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;   
            font-size: 16px;
            margin: 16px;
            color: #666;
        }

        .product-card ul {
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;   
            list-style: disc;
            padding: 16px;
            margin: 0 16px 16px 16px;
            color: #555;
        }

        .product-card ul li {
            margin-bottom: 8px;
        }

        .product-card button {
            display: block;
            width: calc(100% - 32px);
            margin: 16px;
            padding: 10px 0;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .product-card button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

  <?php include 'navbar.php'?>

    <section class="bg"> 
        <br><br>
        <h1>PRODUCTS</h1> 
        <p>Home - Products</p>
    </section>

    <section class="content">
        <h1>Explore Our Medical Imaging Products</h1>
        <p>Explore our comprehensive range of advanced medical imaging solutions designed to meet the diverse needs of healthcare providers across Africa. From dedicated neonatal MRI systems to high-performance preclinical MRI technology, we offer cutting-edge solutions to empower healthcare professionals and improve patient outcomes. Discover our innovative lineup of MRI systems, each meticulously designed to deliver exceptional image quality, patient comfort, and cost-effectiveness. With a commitment to excellence and a passion for innovation, we are dedicated to shaping the future of healthcare in Africa and beyond through our transformative imaging solutions.</p>
    </section>

    <div class="products">
        <div class="product-card">
            <img src="images/neona2.jpg" alt="NEONA MRI System">
            <h1>NEONA MRI System</h1>
            <p>The NEONA MRI was designed from the onset to address very special needs including the Neonates that reside in the neonatal intensive-care unit (NICU) of large Medical Facilities. The design plan involved addressing two major problem areas that are particularly unique for this segment of critically ill infants.</p>
            <ul>
                <li>World's first dedicated neonatal MRI system</li>
                <li>Award-winning technology designed for neonatal intensive care units (NICU)</li>
                <li>Compact design for placement near NICU area</li>
                <li>MR-compatible neonatal incubator for patient safety and stability</li>
            </ul>
            <button><a style="color: white; text-decoration: none;" href="https://www.time-medical.com/neona"> Learn More </a></button>
        </div>

        <div class="product-card">
            <img src="images/emma2.jpg" alt="EMMA MRI System">
            <h1>EMMA MRI System</h1>
            <p>The EMMA 1.5T MRI is designed to offer breast imaging centers a new adjunctive tool to their current equipment options. Emma is a whole body MRI with dedicated breast coils for exclusive high-quality imaging.</p>
            <ul>
                <li>Whole-body MRI system with 1.5T field strength</li>
                <li>One-button scan for simple workflow</li>
                <li>Optimized protocols for fast acquisition times</li>
                <li>Designed for patient comfort with feet-first entry and noise reduction features</li>
            </ul>
            <button><a style="color: white; text-decoration: none;" href="https://www.time-medical.com/emma"> Learn More </a></button>
        </div>

        <div class="product-card">
            <img src="images/picaa.jpg" alt="PICA MRI System">
            <h1>PICA MRI System</h1>
            <p>The PICA is the company's flagship product. It's Open architecture, advanced hardware platform and leading-edge clinical applications make it ideally suited for patient comfort, fast acquisition times and excellent image quality.</p>
            <ul>
                <li>Open architecture MRI system with 0.35T field strength</li>
                <li>Suitable for patients up to 200 kg</li>
                <li>Cost-effective solution with lower operating costs</li>
                <li>ACR Accredited for head, spine, body, and musculoskeletal (MSK) scans</li>
            </ul>
            <button><a style="color: white; text-decoration: none;" href="https://www.time-medical.com/pica"> Learn More </a></button>
        </div>

        <div class="product-card">
            <img src="images/PICA+SMART_banner.jpg" alt="PICA Smart MRI System">
            <h1>PICA Smart MRI System</h1>
            <p>PICA SMART offers high performance and high value. Its superior performance and advanced imaging technology allow users to achieve early diagnosis of many pathologies. It has strong gradient strength at 22mT/m & slew rate of 55 T/m/s which allows image acquisition with high spatial resolution and better image quality. Each routine scan requires only about 20 minutes which can provide service to more patients.</p>
            <ul>
                <li>Advanced open MRI system with 0.3T field strength</li>
                <li>Small footprint and flexible site planning requirements</li>
                <li>Ideal for patient comfort and fast acquisition times</li>
                <li>Offers a more affordable MRI choice with lower maintenance costs</li>
            </ul>
            <button><a style="color: white; text-decoration: none;" href="https://www.time-medical.com/pica-smart"> Learn More </a></button>
        </div>

        <div class="product-card">
            <img src="images/MONA_banner.jpg" alt="MONA MRI System">
            <h1>MONA MRI System</h1>
            <p>The MONA is a dedicated orthopedic MRI system that can be used to divert the patients with MSK issues from the routine whole body MRI scanner. This can maximize the patient throughput with dedicated MRI system. The small footprint and open architecture of the system provides easy siting requirement and high patient comfort.</p>
            <ul>
                <li>Dedicated orthopedic open MRI system with 0.2T field strength</li>
                <li>Focuses on patients with musculoskeletal issues</li>
                <li>Small footprint and lower operational costs</li>
                <li>Ideal for clinics and practices specializing in orthopedic imaging</li>
            </ul>
            <button><a style="color: white; text-decoration: none;" href="https://www.time-medical.com/mona"> Learn More </a></button>
        </div>

        <div class="product-card">
            <img src="images/7T_banner.jpg" alt="NOVA Preclinical MRI System">
            <h1>NOVA Preclinical MRI System</h1>
            <p>NOVA are 7T-9.4T preclinical MRI systems using the world leading-edge magnet and console technologies configured to meet your requirements and demands in the preclinical studies. The usage of active-shielding technology on NOVA largely reduces stray field in a small footprint size and hence minimizes the potential hazards to the surrounding environment.</p>
            <ul>
                <li>7T field strength with ultra-high field magnets</li>
                <li>Ideal for preclinical studies with various bore sizes available</li>
                <li>Utilizes high-temperature superconducting (HTS) coil technology for increased SNR</li>
                <li>Customized MRI pulse sequences optimized for small animal imaging</li>
            </ul>
            <button><a style="color: white; text-decoration: none;" href="https://www.time-medical.com/nova -7t-preclinical"> Learn More </a></button>
        </div>
        
        <div style="text-align: center;" class="product-card">
            <img  style="width: 50%; text-align: center;"  src="images/health.jpg" alt="NOVA Preclinical MRI System">
            <h1>High Temperature Superconducting (HTS) Coil Technology</h1>
            <ul>
                
                <li>Developed by Professor Q. Y. Ma, PhD, founder of Time Medical Systems</li>
                <li>Delivers increased SNR to MR images with more efficient RF coil materials</li>
                <li>Ideal for improving image quality across routine and advanced clinical applications</li>
                <li>Application-specific HTS coils available for Brain, Spine, Body, Knee, Shoulder, Wrist, and TMJ imaging</li>
            </ul>
            <h4>Video Reference</h4>
            <iframe src="images/htc.mp4" width="500" height="270"> </iframe>
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>
</html>
