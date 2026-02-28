<?php include 'layout/header.php'; ?>

<div class="service-hero relative h-[50vh] flex items-center justify-center overflow-hidden" style="background: linear-gradient(rgba(15, 23, 42, 0.7), rgba(15, 23, 42, 0.7)), url('/frontend/assets/images/pexels-daniel-andraski-197681005-13065690.jpg') no-repeat center center/cover;">
    <div class="text-center z-10 px-4">
        <h1 class="text-5xl md:text-7xl font-black text-white mb-4 tracking-tight uppercase">Oil <span class="text-blue-500">Change</span></h1>
        <p class="text-xl text-blue-200 font-medium max-w-2xl mx-auto">Synthetic oil & filter replacement to keep your engine running at peak efficiency.</p>
    </div>
    <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-[#0f172a] to-transparent"></div>
</div>

<main class="bg-[#0f172a] text-slate-300 py-20 px-6">
    <div class="container mx-auto max-w-5xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-24">
            <div class="space-y-6">
                <span class="text-blue-500 font-black uppercase tracking-widest text-sm">Engine Health</span>
                <h2 class="text-4xl font-extrabold text-white tracking-tight">The Lifeblood of Your Car</h2>
                <p class="text-lg leading-relaxed text-slate-400">Regular <strong>Oil Change</strong> & <strong>Oil Filter Replacement</strong> help protect your engine and keep your car running smoothly. These services promote maximum vehicle performance and extend the life of your car.</p>
                <p class="text-lg leading-relaxed text-slate-400">Oil is responsible for lubricating the operating parts within your engine while reducing friction. As the engine generates heat, oil acts as a cooling agent, absorbing harmful particles and directing them to the filter.</p>
                <div class="flex gap-4">
                    <a href="appointment.php" class="btn btn-primary rounded-xl px-10">Book Oil Change</a>
                </div>
            </div>
            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-3xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                <img src="/frontend/assets/images/pexels-daniel-andraski-197681005-13065690.jpg" alt="Oil Change" class="relative rounded-3xl shadow-2xl transition duration-500 group-hover:scale-[1.02]">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="p-10 bg-[#1e293b]/50 border border-white/5 rounded-3xl hover:border-blue-500/30 transition shadow-xl">
                <h3 class="text-2xl font-black text-white mb-6">Karachi's Best Valued Service</h3>
                <p class="text-slate-400">Regular oil maintenance prevents critical issues and enhances fuel efficiency. We use only premium-grade lubricants tailored for the Karachi climate, ensuring your engine remains operative at best levels of performance.</p>
            </div>
            <div class="p-10 bg-[#1e293b]/50 border border-white/5 rounded-3xl hover:border-blue-500/30 transition shadow-xl border-t-4 border-t-blue-600">
                <h3 class="text-2xl font-black text-white mb-6">Fast & Reliable</h3>
                <p class="text-slate-400">Our quick-service bay ensures you're back on the road in no time. We provide complete oil and filter replacement at very reasonable prices, avoiding the high costs of dealership service centers.</p>
            </div>
        </div>
    </div>
</main>


<?php include 'layout/footer.php'; ?>
