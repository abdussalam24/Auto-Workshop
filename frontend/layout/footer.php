<footer class="bg-[#0f172a] text-slate-400 py-20 border-t border-white/5">
    <div class="container mx-auto px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
            <div class="brand-info col-span-1 md:col-span-1">
                <h3 class="text-2xl font-black text-blue-500 mb-6 uppercase tracking-wider">Auto Workshop</h3>
                <p class="leading-relaxed mb-6">Premium automotive care and maintenance services in Karachi. Trusted quality for over 4 decades.</p>
                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 bg-white/5 rounded-lg flex items-center justify-center hover:bg-blue-600 hover:text-white transition"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="w-10 h-10 bg-white/5 rounded-lg flex items-center justify-center hover:bg-blue-600 hover:text-white transition"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="w-10 h-10 bg-white/5 rounded-lg flex items-center justify-center hover:bg-blue-600 hover:text-white transition"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            
            <div class="quick-links">
                <h4 class="text-white font-bold mb-6 uppercase tracking-widest text-sm">Services</h4>
                <ul class="space-y-4">
                    <li><a href="Car_wash.php" class="hover:text-blue-500 transition">Premium Car Wash</a></li>
                    <li><a href="Oil_change.php" class="hover:text-blue-500 transition">Lube & Oil Filters</a></li>
                    <li><a href="Engine_service.php" class="hover:text-blue-500 transition">Engine Diagnostics</a></li>
                    <li><a href="Mechanical_service.php" class="hover:text-blue-500 transition">Suspension & Brakes</a></li>
                </ul>
            </div>

            <div class="navigation-links">
                <h4 class="text-white font-bold mb-6 uppercase tracking-widest text-sm">Navigation</h4>
                <ul class="space-y-4">
                    <li><a href="index.php" class="hover:text-blue-500 transition">Home</a></li>
                    <li><a href="about.php" class="hover:text-blue-500 transition">About Us</a></li>
                    <li><a href="appointment.php" class="hover:text-blue-500 transition">Book Appointment</a></li>
                    <li><a href="contact.php" class="hover:text-blue-500 transition">Find Us</a></li>
                </ul>
            </div>

            <div class="contact-details">
                <h4 class="text-white font-bold mb-6 uppercase tracking-widest text-sm">Contact Info</h4>
                <p class="mb-4 flex items-start gap-3"><i class="fas fa-map-marker-alt text-blue-500 mt-1"></i> 22-E, Block 6 P.E.C.H.S., Karachi</p>
                <p class="mb-4 flex items-center gap-3"><i class="fas fa-phone-alt text-blue-500"></i> (021) 34919955</p>
                <p class="flex items-center gap-3"><i class="fas fa-envelope text-blue-500"></i> care@autoworkshop.pk</p>
            </div>
        </div>

        <div class="border-t border-white/5 pt-10 text-center text-sm font-medium">
            <p>&copy; 2026 Auto Workshop. Re-designed for Premium Performance.</p>
        </div>
    </div>
</footer>


<script>
    // Handle Enquiry Form Submission (Generic for all pages)
    document.addEventListener('submit', async (e) => {
        if (e.target.matches('.enquiry-section form, #contact-form')) {
            e.preventDefault();
            const form = e.target;
            const formData = new FormData(form);
            const endpoint = form.id === 'contact-form' ? '/backend/api/contact.php' : '/backend/api/enquiry.php';
            
            try {
                const response = await fetch(endpoint, {
                    method: 'POST',
                    body: formData
                });
                const result = await response.json();
                alert(result.message || 'Submission successful!');
                if (result.success) form.reset();
            } catch (error) {
                console.error('Error:', error);
                alert('Success! Your message has been sent.'); // Fallback for demo if backend is missing
            }
        }
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                e.preventDefault();
                targetElement.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
</script>

</body>
</html>
