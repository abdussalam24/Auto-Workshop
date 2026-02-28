<footer>
    <div class="footer-container">
        <div class="footer-top">
            <div class="footer-item">
                <i class="fa fa-envelope"></i>
                <h3>Get Free</h3>
                <p>APPOINTMENT</p>
            </div>
            <div class="footer-item">
                <i class="fa fa-phone"></i>
                <h3>Call Now</h3>
                <p>0344 2139413</p>
            </div>
            <div class="footer-item">
                <i class="fa fa-tag"></i>
                <h3>View Our</h3>
                <p>TOP OFFERS</p>
            </div>
        </div>
        <div class="footer-middle">
            <div class="about">
                <h3>About</h3>
                <p>Auto Workshop is a general automobile repair workshop with an excellent reputation for
                    providing best quality services. We are based in Karachi, Pakistan...</p>
                <a href="#" id="read">Read more...</a>
            </div>
            <div class="services">
                <h3>Services</h3>
                <ul>
                    <li><a href="#" id="car">Car Wash</a></li>
                    <li><a href="#" id="oil">Oil change</a></li>
                    <li><a href="#" id="engine">Engine Service</a></li>
                    <li><a href="#" id="mechani">Mechanical Service</a></li>
                </ul>
            </div>
            <div class="address">
                <h3>Address</h3>
                <p>MAJU Road, Main Shahrah-e-Faisal, 22-E, Block 6 P.E.C.H.S., Karachi, Karachi City, Sindh 75400, Pakistan</p>
                <p>Tel: (021) 34575947<br>Cell: 0318 0206408</p>
                <a href="#" id="map1">Get directions on the map</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2021 Auto Workshop by <a href="#">CreativeWave</a></p>
        </div>
    </div>
</footer>


<script>
    // document.getElementById('contact-form').addEventListener('submit', function(event) {
    //     event.preventDefault();
    //     alert('Message sent successfully!');
    // });

    document.addEventListener('DOMContentLoaded', () => {
        const links = document.querySelectorAll('.nav-links a[href^="#"]');
        // header
        document.getElementById('read').addEventListener('click', function() {
            window.location.href = 'about.php';
        });
        document.getElementById('home').addEventListener('click', function() {
            window.location.href = 'index.php';
        });
        document.getElementById('about').addEventListener('click', function() {
            window.location.href = 'about.php'; // Navigate to the About page
        });
        document.getElementById('offers').addEventListener('click', function() {
            window.location.href = 'offers.php'; // Navigate to the About page
        });
        document.getElementById('appointment').addEventListener('click', function() {
            window.location.href = 'appointment.php';
        });
        document.getElementById('contact').addEventListener('click', function() {
            window.location.href = 'contact.php';
        });
        // footer
        document.getElementById('map').addEventListener('click', function() {
            window.location.href = 'contact.php';
        });
        document.getElementById('car').addEventListener('click', function() {
            window.location.href = 'Car_wash.php';
        });
        document.getElementById('oil').addEventListener('click', function() {
            window.location.href = 'Oil_change.php';
        });
        document.getElementById('engine').addEventListener('click', function() {
            window.location.href = 'Engine_service.php';
        });
        document.getElementById('mechani').addEventListener('click', function() {
            window.location.href = 'Mechanical_service.php';
        });
    });
</script>
</body>

</html>


    const contactForm = document.querySelector('.contact-section form') || document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', async function(event) {
            event.preventDefault();
            const formData = new FormData(contactForm);
            try {
                const response = await fetch('../backend/api/contact.php', {
                    method: 'POST',
                    body: formData
                });
                const result = await response.json();
                alert(result.message);
                if (result.success) {
                    contactForm.reset();
                }
            } catch (error) {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            }
        });
    }
</script>
</body>
</html>
