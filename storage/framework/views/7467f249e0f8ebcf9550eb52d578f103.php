<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #0072c6;
            color: white;
            padding: 20px;
            border-radius: 5px;
            width: 50%;
            display: flex;
        }
        .left {
            width: 40%;
            padding-right: 20px;
        }
        .right {
            width: 60%;
        }
        h2 {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: none;
            border-radius: 3px;
        }
        button {
            background: #0056b3;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background: #004494;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <h2>Reach Us</h2>
            <p><strong>Location:</strong><br>36-B W 1st Ave, Miller, SD 57362, USA</p>
            <p><strong>Email:</strong><br>info@domain.com</p>
            <p><strong>Phone:</strong><br>+1-800-123-4567<br>+1 123-456-7890</p>
        </div>
        <div class="right">
            <h2>Request a Quote Today</h2>
            <form>
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <input type="tel" placeholder="Contact No" required>
                <input type="text" placeholder="Purpose of Contact" required>
                <textarea placeholder="Your Message" rows="4" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\services-app\resources\views/components/quote.blade.php ENDPATH**/ ?>