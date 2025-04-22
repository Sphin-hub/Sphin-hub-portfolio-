<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Damianshub | Social Media Manager</title>

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #ff7eb3, #65d6ce);
            color: #333;
        }
        .container {
            width: 90%;
            margin: auto;
            padding: 50px 20px;
            text-align: center;
        }
        header {
            background: rgba(255, 255, 255, 0.9);
            padding: 100px 20px;
            border-bottom-left-radius: 30px;
            border-bottom-right-radius: 30px;
        }
        header h1 {
            font-size: 48px;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        header p {
            font-size: 24px;
            color: #777;
        }
        section {
            background: white;
            margin: 40px 0;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0px 4px 20px rgba(0,0,0,0.1);
        }
        h2 {
            font-size: 32px;
            color: #333;
            margin-bottom: 20px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        ul li {
            margin: 10px 0;
            font-size: 18px;
        }
        .testimonial {
            margin: 20px auto;
            font-style: italic;
            color: #555;
        }
        form input, form textarea {
            width: 80%;
            padding: 15px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        form button {
            padding: 15px 40px;
            background-color: #65d6ce;
            border: none;
            color: white;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s;
        }
        form button:hover {
            background-color: #ff7eb3;
        }
        footer {
            text-align: center;
            padding: 20px;
            color: white;
        }
        img.banner {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 20px;
        }
    </style>
</head>

<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "sphinexart@gmail.com";
    $subject = "New Message from Damianshub Portfolio";
    $name = strip_tags($_POST['name']);
    $email = strip_tags($_POST['email']);
    $message = strip_tags($_POST['message']);
    
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $body = "You have received a new message from your portfolio site.\n\n".
            "Name: $name\n".
            "Email: $email\n".
            "Message:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message sent successfully! Thank you for contacting Damianshub.');</script>";
    } else {
        echo "<script>alert('Message sending failed. Please try again later.');</script>";
    }
}
?>

    <!-- HEADER -->
    <header>
        <div class="container">
            <img class="banner" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAQEBIQEBAVEBAVEBEQEA8PEBAQDxUQFhIWFhUVFRUYHSggGBolHRUVITEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OGBAQGzIlHyUtLS0tLTAtLS0tLSstLS0tLS0tLS0tLS0tLSstKy0tLS0tKy0tLS0tLS0tLS0tLS0rLf/AABEIALcBFAMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAACAwABBAUGB//EADsQAAIBAgMFBAYGAgEFAQAAAAECAAMRBBIhMQVBIlFhBxMygaGx0RMUI0JSYnLR8RYkU5KywtLh8eH/xAAYAQADAQEAAAAAAAAAAAAAAAAAAAIDBP/EACERAQEAAgICAgMAAAAAAAAAAAABAhEDIRIxQVEyMkHw/9oADAMBAAIRAxEAPwDhBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQf//Z" alt="Banner">

            <h1>Damianshub</h1>
            <p>Your Social Media Success Partner</p>
        </div>
    </header>

    <!-- ABOUT -->
    <section id="about">
        <div class="container">
            <h2>About Me</h2>
            <p>Hello! I'm Damian James, a passionate Social Media Manager helping brands grow with creativity, strategy, and engagement. Let’s turn your online presence into real success!</p>
            <p><strong>Phone:</strong> +2348100647774</p>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services">
        <div class="container">
            <h2>My Services</h2>
            <ul>
                <li>Content Creation & Scheduling</li>
                <li>Social Media Strategy Development</li>
                <li>Paid Ads Management</li>
                <li>Community Building & Engagement</li>
                <li>Analytics and Growth Tracking</li>
            </ul>
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <section id="testimonials">
        <div class="container">
            <h2>What Clients Say</h2>
            <div class="testimonial">
                <p>"Working with Damianshub was the best decision for our brand. Our followers doubled in 3 months!" - <strong>Jane K.</strong></p>
            </div>
            <div class="testimonial">
                <p>"Professional, creative, and reliable. Damian knows how to bring a brand to life!" - <strong>Michael T.</strong></p>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section id="contact">
        <div class="container">
            <h2>Contact Me</h2>
            <form method="POST" action="">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <p>© 2025 Damianshub. All rights reserved.</p>
    </footer>

</body>
</html>
