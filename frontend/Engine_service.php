<?php include 'layout/header.php'; ?>

<div class="service-hero relative h-[50vh] flex items-center justify-center overflow-hidden" style="background: linear-gradient(rgba(15, 23, 42, 0.7), rgba(15, 23, 42, 0.7)), url('/frontend/assets/images/pexels-shvetsa-4315575.jpg') no-repeat center center/cover;">
    <div class="text-center z-10 px-4">
        <h1 class="text-5xl md:text-7xl font-black text-white mb-4 tracking-tight uppercase">Engine <span class="text-blue-500">Service</span></h1>
        <p class="text-xl text-blue-200 font-medium max-w-2xl mx-auto">Expert diagnostics and precision performance tuning for the heart of your vehicle.</p>
    </div>
    <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-[#0f172a] to-transparent"></div>
</div>

<main class="bg-[#0f172a] text-slate-300 py-20 px-6">
    <div class="container mx-auto max-w-5xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-24">
            <div class="space-y-6">
                <span class="text-blue-500 font-black uppercase tracking-widest text-sm">Heart of Performance</span>
                <h2 class="text-4xl font-extrabold text-white tracking-tight">Revitalize Your Drive</h2>
                <p class="text-lg leading-relaxed text-slate-400">Regular <strong>Engine Service</strong> is vital for the longevity and performance of your car. Our expert mechanics provide comprehensive diagnostics and repairs to keep your engine running at its absolute best.</p>
                <p class="text-lg leading-relaxed text-slate-400">From spark plug replacements to complex engine rebuilds, we handle it all with precision and care. We use advanced diagnostic tools and high-quality parts to ensure optimal power and efficiency.</p>
                <div class="flex gap-4">
                    <a href="appointment.php" class="btn btn-primary rounded-xl px-10">Diagnostic Check</a>
                </div>
            </div>
            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-3xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                <img src="/frontend/assets/images/pexels-shvetsa-4315575.jpg" alt="Engine Service" class="relative rounded-3xl shadow-2xl transition duration-500 group-hover:scale-[1.02]">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="p-10 bg-[#1e293b]/50 border border-white/5 rounded-3xl hover:border-blue-500/30 transition shadow-xl">
                <h3 class="text-2xl font-black text-white mb-6">Expertise in Karachi</h3>
                <p class="text-slate-400">At Auto Workshop, we understand the technical complexity of modern engines. We offer thorough inspections and preventive maintenance to avoid catastrophic breakdowns and expensive overhauls.</p>
            </div>
            <div class="p-10 bg-[#1e293b]/50 border border-white/5 rounded-3xl hover:border-blue-500/30 transition shadow-xl border-b-4 border-b-blue-600">
                <h3 class="text-2xl font-black text-white mb-6">Reliable & Efficient</h3>
                <p class="text-slate-400">Whether it's a strange noise or a check engine light, our team provides honest evaluations. We use genuine parts and follow factory specifications for all engine work in Karachi.</p>
            </div>
        </div>
    </div>
</main>


<?php include 'layout/footer.php'; ?>
