<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Magram Health Care</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> <!-- Your custom styles -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap');   
        /* Your existing styles for nav */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
             font-family: "Red Hat Display", sans-serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
            position: fixed;
            width: 100%;
            gap: 40px;
            padding: 10px 20px;
            background-color: #f0f8ff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        
        nav ul {
            display: flex;
            justify-content: end;
            list-style: none;
            gap: 40px;
            padding: 0;
        }
        
        nav ul li {
            margin-right: 20px; /* Adjust spacing between menu items */
        }
        
        nav ul li:last-child {
            margin-right: 0; /* Remove margin from the last item */
        }
        
        nav ul li a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        nav ul li a:hover {
            color: #007BFF;
            text-decoration: none;
        }
        
        .image img {
            width: 150px; /* Adjust logo size */
        }
        #menu-toggle{
            display: none
        }

        /* Media query for smaller screens (phones) */
        @media only screen and (max-width: 768px) {
            #menu-toggle{
            display: block;
        }
            nav ul {
                padding: 50px;
                display: none; /* Hide the menu items by default */
                flex-direction: column;
                position: absolute;
                top: 70px; /* Adjust as needed to position the dropdown */
                right: 0; /* Align to the left side */
                height: 80vh;
                width: 50%;
                
                background-color: #f0f8ff;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                z-index: 999;
            }
            
            nav ul.active {
                display: flex; /* Show the menu items when active */
            }
            
            nav ul li {
                margin-right: 0;
                margin-bottom: 40px;
            }
            nav ul li a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s;
        }
        }
    </style>
</head>
<body>
    
    <nav id="navbar">
        <div class="image">
            <a href="landing.php"><img src="images/dex.jpg" alt="Logo"></a>
        </div>
        <ul>
            <li><a href="about.php">About Us</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>
        <div  style="color: black; size: 300px" id="menu-toggle"><img width ="45" src="images/bar.png" alt=""></div> <!-- Hamburger menu icon -->
    </nav>

    <script>
        // JavaScript for toggling the responsive menu
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.querySelector('nav ul').classList.toggle('active');
        });
    </script>

</body>
</html>
