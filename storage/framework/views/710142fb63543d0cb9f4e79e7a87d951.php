<body>
    <div class="main-content">
        <!-- Your website content here -->

    <footer>
        <div class="footer-container">
            <div class="footer-description">
                <p>Your trusted partner in electrical solutions. We ensure quality and safety in every service.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-google"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="footer-links">
                <h3>Useful Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p><i class="fas fa-map-marker-alt"></i> 123 Street, City, Country</p>
                <p><i class="fas fa-phone"></i> +123 456 7890</p>
                <p><i class="fas fa-envelope"></i> info@example.com</p>
            </div>
        </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Saima Attaullah | All Rights Reserved</p>
        </div>
    </footer>
</body>


<style>
/* Footer Styles */
html, body {
    height: 100%;
    margin: 0;
    display: flex;
    flex-direction: column;
}

.main-content {
    flex: 1;
}

footer {
    background: #1c1c1c;
    color: #fff;
    padding: 50px 0;
    font-family: 'Poppins', sans-serif;
    position: relative;
    width: 100%;
}

.footer-container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: auto;
    padding: 20px;
}

.footer-description {
    max-width: 300px;
}

.footer-description p {
    font-size: 0.9rem;
    color: #bbb;
}

.social-icons {
    margin-top: 15px;
}

.social-icons a {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    margin: 5px;
    transition: 0.3s ease;
}

.social-icons a:hover {
    background: #007bff;
}

.social-icons i {
    font-size: 18px;
    color: white;
}

/* Footer Links */
.footer-links {
    text-align: left;
}

.footer-links h3 {
    font-size: 1.2rem;
    margin-bottom: 15px;
}

.footer-links ul {
    list-style: none;
    padding: 0;
}

.footer-links ul li {
    margin-bottom: 8px;
}

.footer-links ul li a {
    color: #bbb;
    text-decoration: none;
    transition: 0.3s ease-in-out;
}

.footer-links ul li a:hover {
    color: #007bff;
}

/* Footer Contact */
.footer-contact h3 {
    font-size: 1.2rem;
    margin-bottom: 15px;
}

.footer-contact p {
    font-size: 0.9rem;
    color: #bbb;
    margin-bottom: 10px;
}

.footer-contact i {
    color: #007bff;
    margin-right: 8px;
}


.footer-bottom {
    text-align: center;
    padding: 15px 0;
    background: #111;
    font-size: 0.9rem;
    color: #bbb;
    width: 100%;
}

/* Show footer-bottom when scrolling down */
body.scrolling-down .footer-bottom {
    opacity: 1;
}

</style>
<?php /**PATH C:\xampp\htdocs\services-app\resources\views/components/footer.blade.php ENDPATH**/ ?>