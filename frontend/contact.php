<?php include 'layout/header.php' ?>

<div class="contact-hero relative h-[40vh] flex items-center justify-center overflow-hidden" style="background: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.8)), url('/frontend/assets/images/about_premium.png') no-repeat center center/cover;">
    <div class="text-center z-10 px-4">
        <h1 class="text-5xl md:text-6xl font-black text-white mb-4 tracking-tight uppercase underline decoration-blue-500 decoration-8 underline-offset-8">Get In <span class="text-blue-500">Touch</span></h1>
        <p class="text-xl text-slate-400 font-medium">We're here to help with all your automotive needs</p>
    </div>
</div>

<main class="bg-[#0f172a] min-h-screen py-12 px-6">
    <div class="container mx-auto max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 mb-20">
            <!-- Contact Info Cards -->
            <div class="bg-[#1e293b]/50 backdrop-blur-xl border border-white/5 p-10 rounded-3xl flex flex-col items-center text-center group hover:border-blue-500/30 transition shadow-2xl">
                <div class="w-16 h-16 bg-blue-600/20 text-blue-500 rounded-2xl flex items-center justify-center mb-6 text-2xl group-hover:scale-110 transition">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Visit Us</h3>
                <p class="text-slate-400 leading-relaxed">22-E, Block 6 P.E.C.H.S.<br>MAJU Road, Main Shahrah-e-Faisal<br>Karachi, Pakistan</p>
                <a href="#map" class="mt-6 text-blue-500 font-bold hover:underline">Open in Maps →</a>
            </div>

            <div class="bg-[#1e293b]/50 backdrop-blur-xl border border-white/5 p-10 rounded-3xl flex flex-col items-center text-center group hover:border-blue-500/30 transition shadow-2xl">
                <div class="w-16 h-16 bg-blue-600/20 text-blue-500 rounded-2xl flex items-center justify-center mb-6 text-2xl group-hover:scale-110 transition">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Call Support</h3>
                <p class="text-slate-400 leading-relaxed">Office: (021) 34919955<br>Mobile: 0324 2636583<br>Available 10:00 - 19:00</p>
                <a href="tel:02134919955" class="mt-6 text-blue-500 font-bold hover:underline">Call Now →</a>
            </div>

            <div class="bg-[#1e293b]/50 backdrop-blur-xl border border-white/5 p-10 rounded-3xl flex flex-col items-center text-center group hover:border-blue-500/30 transition shadow-2xl">
                <div class="w-16 h-16 bg-blue-600/20 text-blue-500 rounded-2xl flex items-center justify-center mb-6 text-2xl group-hover:scale-110 transition">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Working Hours</h3>
                <p class="text-slate-400 leading-relaxed">Monday - Saturday<br>10:00 AM – 07:00 PM<br><span class="text-red-500 font-bold uppercase">Sunday: Closed</span></p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
            <!-- Contact Form -->
            <div class="bg-[#1e293b] p-12 rounded-[2rem] border border-white/5 shadow-inner">
                <div class="mb-10 text-center lg:text-left">
                    <h2 class="text-4xl font-black text-white mb-2">Send Message</h2>
                    <p class="text-slate-400">Our team will get back to you within 24 hours.</p>
                </div>
                <form id="contact-form" method="POST" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-slate-500 ml-2">Your Name</label>
                            <input type="text" name="nam" placeholder="John Doe" class="w-full p-4 rounded-xl bg-[#0f172a] text-white border border-white/10 focus:ring-2 focus:ring-blue-500 outline-none transition" required>
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-slate-500 ml-2">Email Address</label>
                            <input type="email" name="email" placeholder="john@example.com" class="w-full p-4 rounded-xl bg-[#0f172a] text-white border border-white/10 focus:ring-2 focus:ring-blue-500 outline-none transition" required>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-slate-500 ml-2">Phone</label>
                            <input type="tel" name="phone" placeholder="+92 ..." class="w-full p-4 rounded-xl bg-[#0f172a] text-white border border-white/10 focus:ring-2 focus:ring-blue-500 outline-none transition" required>
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-slate-500 ml-2">Subject</label>
                            <input type="text" name="subject" placeholder="Select Subject" class="w-full p-4 rounded-xl bg-[#0f172a] text-white border border-white/10 focus:ring-2 focus:ring-blue-500 outline-none transition" required>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="text-xs font-bold uppercase tracking-widest text-slate-500 ml-2">Message</label>
                        <textarea name="message" placeholder="Describe your requirement..." class="w-full p-4 rounded-xl bg-[#0f172a] text-white border border-white/10 focus:ring-2 focus:ring-blue-500 outline-none transition h-40 resize-none" required></textarea>
                    </div>
                    <button type="submit" name="contac" class="w-full bg-blue-600 text-white py-5 rounded-2xl font-black uppercase tracking-wider hover:bg-blue-700 transition-all shadow-xl shadow-blue-500/20 active:scale-[0.98]">
                        Send Message <i class="fas fa-paper-plane ml-2"></i>
                    </button>
                </form>
            </div>

            <!-- Map Section -->
            <div id="map" class="h-full min-h-[500px] rounded-[2rem] overflow-hidden border-8 border-[#1e293b] shadow-2xl grayscale contrast-125 opacity-80 hover:grayscale-0 hover:opacity-100 transition-all duration-700">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.097766085011!2d67.06734167505242!3d24.860510277929322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e9f60d36339%3A0x1d64ea8b0a7ca381!2sMohammad%20Ali%20Jinnah%20University!5e0!3m2!1sen!2s!4v1717283577383!5m2!1sen!2s" class="w-full h-full border-0" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</main>


<?php include 'layout/footer.php' ?>
