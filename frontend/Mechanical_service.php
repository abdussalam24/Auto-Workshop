<?php include 'layout/header.php'; ?>

<div class="service-hero relative h-[50vh] flex items-center justify-center overflow-hidden" style="background: linear-gradient(rgba(15, 23, 42, 0.7), rgba(15, 23, 42, 0.7)), url('/frontend/assets/images/pexels-pixabay-162553.jpg') no-repeat center center/cover;">
    <div class="text-center z-10 px-4">
        <h1 class="text-5xl md:text-7xl font-black text-white mb-4 tracking-tight uppercase">Mechanical <span class="text-blue-500">Services</span></h1>
        <p class="text-xl text-blue-200 font-medium max-w-2xl mx-auto">Expert diagnosis and precision repairs for your vehicle's core mechanical systems.</p>
    </div>
    <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-[#0f172a] to-transparent"></div>
</div>

<main class="bg-[#0f172a] text-slate-300 py-20 px-6">
    <div class="container mx-auto max-w-5xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-24">
            <div class="space-y-6">
                <span class="text-blue-500 font-black uppercase tracking-widest text-sm">Advanced Engineering</span>
                <h2 class="text-4xl font-extrabold text-white tracking-tight">Precision Care for Every Component</h2>
                <p class="text-lg leading-relaxed text-slate-400">Regular <strong>Mechanical Services</strong> maintain the mechanical health of your vehicle is crucial for ensuring its longevity, performance, and safety. Our comprehensive services address all critical systems.</p>
                <p class="text-lg leading-relaxed text-slate-400">We utilize state-of-the-art diagnostic equipment to identify issues in your engine, transmission, brakes, and suspension. Early detection prevents minor issues from becoming costly repairs.</p>
                <div class="flex gap-4">
                    <a href="appointment.php" class="btn btn-primary rounded-xl px-10">Schedule Repair</a>
                </div>
            </div>
            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-3xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                <img src="/frontend/assets/images/pexels-pixabay-162553.jpg" alt="Mechanical Service" class="relative rounded-3xl shadow-2xl transition duration-500 group-hover:scale-[1.02]">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="p-10 bg-[#1e293b]/50 border border-white/5 rounded-3xl hover:border-blue-500/30 transition shadow-xl">
                <h3 class="text-2xl font-black text-white mb-6">Reliability in Karachi</h3>
                <p class="text-slate-400">Our services ensure your vehicle operates safely and efficiently. We help prevent unexpected breakdowns, extend vehicle lifespan, and maintain optimal performance for the harsh Karachi driving conditions.</p>
            </div>
            <div class="p-10 bg-[#1e293b]/50 border border-white/5 rounded-3xl hover:border-blue-500/30 transition shadow-xl border-l-4 border-l-blue-600">
                <h3 class="text-2xl font-black text-white mb-6">Affordable Excellence</h3>
                <p class="text-slate-400">Auto Workshop offers the most reliable mechanical services at competitive prices. You don't need to pay dealership premiums to get factory-grade repair quality.</p>
            </div>
        </div>
    </div>
</main>


<?php include 'layout/footer.php'; ?>
