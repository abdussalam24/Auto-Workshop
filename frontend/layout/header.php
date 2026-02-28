
<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Workshop</title>
    <link href="/frontend/assets/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
<header>
    <div class="top-bar">
        <a href="appointment.php" id="app">Get free appointment with the mechanic →</a>
        <div class="contact-info">
            <span>Call us now: <a href="tel:02134919955">(021) 3491 9955</a></span> |
            <a href="contact.php" id="map">Find us on map →</a>
        </div>
    </div>
    <nav class="navbar">
        <div class="logo">
            <h1>Auto Workshop</h1>
        </div>
        <div class="menu-toggle" id="mobile-menu">
            <i class="fas fa-bars"></i>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php#services">Services</a></li>
            <li><a href="offers.php">Offers</a></li>
            <li><a href="appointment.php">Appointment</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>

    </nav>
    <script>
        document.getElementById('mobile-menu').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
        });
    </script>

</header>
