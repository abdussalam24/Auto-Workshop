<?php include 'layout/header.php'; ?>

<div class="main-banner relative h-[60vh] flex items-center justify-center overflow-hidden" style="background: linear-gradient(rgba(15, 23, 42, 0.7), rgba(15, 23, 42, 0.7)), url('/frontend/assets/images/about_premium.png') no-repeat center center/cover;">
    <div class="text-center z-10 px-4">
        <h1 class="text-5xl md:text-7xl font-black text-white mb-4 tracking-tight uppercase">EXPERIENCE <span class="text-blue-500">MATTERS</span></h1>
        <p class="text-xl md:text-2xl text-blue-200 font-medium">Serving Karachi since 1980 with excellence</p>
    </div>
    <div class="absolute bottom-0 left-0 w-full h-24 bg-gradient-to-t from-[#0f172a] to-transparent"></div>
</div>


<main class="bg-[#0f172a] text-slate-300">
    <section class="About py-20 px-8 text-center border-b border-white/5">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-extrabold mb-8 text-white tracking-tight">About Auto Workshop</h2>
            <p class="text-lg md:text-xl leading-relaxed text-slate-400 mb-8">Trusted brand since 1980 started in Bahadurabad, Karachi. Operating with over 38 years of experience in the automotive industry.</p>
            <div class="p-10 rounded-3xl bg-blue-600/5 border border-blue-500/10 shadow-2xl">
                <h3 class="text-2xl font-bold mb-6 text-blue-400 capitalize">Automotive Repair & Maintenance Specialist</h3>
                <p class="mb-4">Auto Workshop is a general automobile repair workshop with an excellent reputation for providing best quality services. We build lasting relationships through honesty and integrity.</p>
            </div>
        </div>
    </section>
    
    <section class="contact grid grid-cols-1 md:grid-cols-2 gap-8 p-12 bg-slate-900 border-b border-white/5">
        <div class="contact-info p-10 bg-[#1e293b] rounded-2xl border border-white/5 hover:border-blue-500/30 transition shadow-xl">
            <div class="w-12 h-12 bg-blue-600/20 text-blue-500 rounded-lg flex items-center justify-center mb-6">
                <i class="fas fa-phone-alt"></i>
            </div>
            <h3 class="font-extrabold text-2xl mb-4 text-white">Call Now</h3>
            <p class="text-slate-400">(021) 34919955</p>
            <p class="text-slate-400 mt-2 font-bold text-blue-500">Mobile: 0324 2636583</p>
        </div>
        <div class="working-time p-10 bg-[#1e293b] rounded-2xl border border-white/5 hover:border-blue-500/30 transition shadow-xl">
            <div class="w-12 h-12 bg-blue-600/20 text-blue-500 rounded-lg flex items-center justify-center mb-6">
                <i class="fas fa-clock"></i>
            </div>
            <h3 class="font-extrabold text-2xl mb-4 text-white">Working Time</h3>
            <p class="text-slate-400">WEEK DAYS: 10:00 – 19:00</p>
            <p class="text-red-400 mt-2 uppercase text-sm font-bold">Sunday: Closed</p>
        </div>
    </section>
    
    <section class="timeline flex flex-col md:flex-row justify-around py-20 px-8 gap-8 bg-[#0f172a]">
        <div class="timeline-item flex-1 p-10 bg-blue-600/5 border border-blue-500/10 rounded-3xl text-center transform hover:-translate-y-2 transition shadow-lg">
            <div class="text-5xl font-black text-blue-600 mb-4">1980</div>
            <p class="text-white font-bold text-xl mb-2">Foundation</p>
            <p class="text-slate-500">Started with basic maintenance services in Karachi.</p>
        </div>
        <div class="timeline-item flex-1 p-10 bg-blue-600/5 border border-blue-500/10 rounded-3xl text-center transform hover:-translate-y-2 transition shadow-lg">
            <div class="text-5xl font-black text-blue-600 mb-4">2005</div>
            <p class="text-white font-bold text-xl mb-2">Expansion</p>
            <p class="text-slate-500">Expanded to two specialized shops in Gulshan area.</p>
        </div>
        <div class="timeline-item flex-1 p-10 bg-blue-600/5 border border-blue-500/10 rounded-3xl text-center transform hover:-translate-y-2 transition shadow-lg">
            <div class="text-5xl font-black text-blue-600 mb-4">2018+</div>
            <p class="text-white font-bold text-xl mb-2">Digital Age</p>
            <p class="text-slate-500">Modernized with online booking and 8k diagnostics.</p>
        </div>
    </section>
</main>


<?php include 'layout/footer.php'; ?>
