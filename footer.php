<style>
      @import url('https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap');   
     footer {
        font-family: "Red Hat Display", sans-serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
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




<footer>
        <div class="footer-container">
            <div class="footer-section">
                <img width="200" src="images/dex.jpg">
                <p>Magram International is a leading provider of advanced medical imaging solutions, MRI systems, Tele Radiology services, and healthcare technology across Africa.</p>
            </div>
            <div class="footer-section">
                <h2>Quick Links</h2>
                <a href="about.php">About Us</a><br>
                <a href="products.php">Products</a><br>
                <a href="services.php">Services</a><br>
                <a href="faq.php">FAQ</a><br>
                <a href="contactus.php">Contact Us</a>
            </div>
            <div class="footer-section">
                <h2>Contact Us</h2>
                <p>Email: info@magramhealth.com</p>
                <p>Phone: +123 456 7890</p>
                <p>Address: 123 Health Street, Wellness City, Africa</p>
            </div>
            <div class="footer-section">
                <h2>MAPS</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31910.26192716093!2d36.84251699059228!3d-1.3054558107310856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f117c0ee5fdbf%3A0xd55946e437b6d67e!2sIndustrial%20Area%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1722081099886!5m2!1sen!2ske" width="250" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="social-icons">
            <a href="https://facebook.com" target="_blank" aria-label="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com" target="_blank" aria-label="Twitter">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://linkedin.com" target="_blank" aria-label="LinkedIn">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://instagram.com" target="_blank" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Magram International. All rights reserved.</p>
        </div>
    </footer>