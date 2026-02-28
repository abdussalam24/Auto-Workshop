<?php include 'layout/header.php'; ?>

<div class="team-hero relative h-[50vh] flex items-center justify-center overflow-hidden" style="background: linear-gradient(rgba(15, 23, 42, 0.7), rgba(15, 23, 42, 0.7)), url('/frontend/assets/images/hero_premium.png') no-repeat center center/cover;">
    <div class="text-center z-10 px-4">
        <h1 class="text-5xl md:text-7xl font-black text-white mb-4 tracking-tight uppercase">Meet Our <span class="text-blue-500">Experts</span></h1>
        <p class="text-xl text-blue-200 font-medium max-w-2xl mx-auto">The skilled hands and technical minds keeping Karachi on the move since 1980.</p>
    </div>
    <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-[#0f172a] to-transparent"></div>
</div>

<main class="bg-[#0f172a] py-24 px-6">
    <section class="container mx-auto max-w-6xl">
        <div class="text-center mb-20">
            <span class="text-blue-500 font-black uppercase tracking-widest text-sm mb-4 block">Our Passion</span>
            <h2 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight">Precision in Every Turn</h2>
            <div class="w-20 h-1.5 bg-blue-600 mx-auto mt-6 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
            <!-- Team Member 1 -->
            <div class="group relative bg-[#1e293b]/40 backdrop-blur-xl border border-white/5 rounded-[2.5rem] overflow-hidden hover:border-blue-500/30 transition-all duration-500 hover:shadow-[0_0_50px_rgba(59,130,246,0.1)]">
                <div class="h-80 overflow-hidden relative">
                    <img src="/frontend/assets/images/WhatsApp Image 2024-06-05 at 1.40.28 PM.jpeg" alt="M.Abdussalam" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1e293b] via-transparent to-transparent opacity-60"></div>
                </div>
                <div class="p-8 text-center relative">
                    <h3 class="text-2xl font-black text-white mb-1">M. Abdussalam</h3>
                    <p class="text-blue-500 font-bold uppercase tracking-widest text-xs mb-4">Core Systems Architect</p>
                    <p class="text-slate-400 text-sm italic italic leading-relaxed">Expert in backend diagnostics and precision engine management systems.</p>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="group relative bg-[#1e293b]/40 backdrop-blur-xl border border-white/5 rounded-[2.5rem] overflow-hidden hover:border-blue-500/30 transition-all duration-500 hover:shadow-[0_0_50px_rgba(59,130,246,0.1)]">
                <div class="h-80 overflow-hidden relative">
                    <img src="/frontend/assets/images/IMG-20231125-WA0073-Photoroom.png" alt="Irtiza Ahmed" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1e293b] via-transparent to-transparent opacity-60"></div>
                </div>
                <div class="p-8 text-center relative">
                    <h3 class="text-2xl font-black text-white mb-1">Irtiza Ahmed</h3>
                    <p class="text-blue-500 font-bold uppercase tracking-widest text-xs mb-4">Performance Specialist</p>
                    <p class="text-slate-400 text-sm italic italic leading-relaxed">Dedicated to optimizing vehicle interfaces and performance tuning.</p>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="group relative bg-[#1e293b]/40 backdrop-blur-xl border border-white/5 rounded-[2.5rem] overflow-hidden hover:border-blue-500/30 transition-all duration-500 hover:shadow-[0_0_50px_rgba(59,130,246,0.1)]">
                <div class="h-80 overflow-hidden relative">
                    <img src="/frontend/assets/images/WhatsApp Image 2024-06-05 at 1.33.58 PM.jpeg" alt="Amman Ullah Azhar" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1e293b] via-transparent to-transparent opacity-60"></div>
                </div>
                <div class="p-8 text-center relative">
                    <h3 class="text-2xl font-black text-white mb-1">Amman Ullah Azhar</h3>
                    <p class="text-blue-500 font-bold uppercase tracking-widest text-xs mb-4">Diagnostic Expert</p>
                    <p class="text-slate-400 text-sm italic italic leading-relaxed">Specializes in modern vehicle telemetry and advanced frontend diagnostics.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-32 py-16 bg-[#1e293b]/50 border-t border-b border-white/5">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="text-center md:text-left">
                <h3 class="text-3xl font-black text-white mb-4">Ready to serve you</h3>
                <p class="text-slate-400 max-w-md">Our team is available 6 days a week for all your maintenance needs in Karachi.</p>
            </div>
            <div class="flex flex-col sm:flex-row justify-center md:justify-end gap-8">
                <div class="text-center">
                    <span class="block text-blue-500 font-black text-2xl mb-1">(021) 34919955</span>
                    <span class="text-xs uppercase font-bold text-slate-500 tracking-widest">Office Line</span>
                </div>
                <div class="text-center">
                    <span class="block text-white font-black text-2xl mb-1">10:00 – 19:00</span>
                    <span class="text-xs uppercase font-bold text-slate-500 tracking-widest">Working Hours</span>
                </div>
            </div>
        </div>
    </section>
</main>


<?php include 'layout/footer.php'; ?>
