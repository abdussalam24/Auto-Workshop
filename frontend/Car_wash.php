<?php include 'layout/header.php'; ?>

<div class="service-hero relative h-[50vh] flex items-center justify-center overflow-hidden" style="background: linear-gradient(rgba(15, 23, 42, 0.7), rgba(15, 23, 42, 0.7)), url('/frontend/assets/images/pexels-sleepididthis-1740919.jpg') no-repeat center center/cover;">
    <div class="text-center z-10 px-4">
        <h1 class="text-5xl md:text-7xl font-black text-white mb-4 tracking-tight uppercase">Premium <span class="text-blue-500">Car Wash</span></h1>
        <p class="text-xl text-blue-200 font-medium max-w-2xl mx-auto">Luxury detailing and deep cleaning for your vehicle's ultimate protection.</p>
    </div>
    <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-[#0f172a] to-transparent"></div>
</div>

<main class="bg-[#0f172a] text-slate-300 py-20 px-6">
    <div class="container mx-auto max-w-5xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-24">
            <div class="space-y-6">
                <span class="text-blue-500 font-black uppercase tracking-widest text-sm">Professional Care</span>
                <h2 class="text-4xl font-extrabold text-white tracking-tight">The Ultimate Shine for Your Vehicle</h2>
                <p class="text-lg leading-relaxed text-slate-400">Regular <strong>Car Wash</strong> services help maintain the appearance and protect the exterior of your vehicle. A thorough wash removes dirt, grime, and environmental contaminants that can damage your car's paint over time.</p>
                <p class="text-lg leading-relaxed text-slate-400">Our professional car wash services use high-quality cleaning agents and equipment to ensure a scratch-free and sparkling finish. We pay attention to every detail, from the wheels to the roof, leaving your car looking brand new.</p>
                <div class="flex gap-4">
                    <a href="appointment.php" class="btn btn-primary rounded-xl px-10">Book Slot</a>
                </div>
            </div>
            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-3xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                <img src="/frontend/assets/images/pexels-sleepididthis-1740919.jpg" alt="Car Wash" class="relative rounded-3xl shadow-2xl transition duration-500 group-hover:scale-[1.02]">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="p-10 bg-[#1e293b]/50 border border-white/5 rounded-3xl hover:border-blue-500/30 transition shadow-xl">
                <h3 class="text-2xl font-black text-white mb-6">Best Services in Karachi</h3>
                <p class="text-slate-400">At Auto Workshop, we offer a range of car wash packages to suit your needs. Whether you need a quick exterior wash or a comprehensive detailing service, our team is dedicated to providing the best care for your vehicle.</p>
            </div>
            <div class="p-10 bg-[#1e293b]/50 border border-white/5 rounded-3xl hover:border-blue-500/30 transition shadow-xl">
                <h3 class="text-2xl font-black text-white mb-6">Why Choose Us?</h3>
                <p class="text-slate-400">We use eco-friendly products and advanced washing techniques to give your car the shine it deserves without harming the environment. Our affordable pricing and attention to detail make us the preferred choice.</p>
            </div>
        </div>
    </div>
</main>


<?php include 'layout/footer.php'; ?>
