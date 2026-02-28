<?php include 'layout/header.php'; ?>

<div class="service-hero relative h-[50vh] flex items-center justify-center overflow-hidden" style="background: linear-gradient(rgba(15, 23, 42, 0.7), rgba(15, 23, 42, 0.7)), url('/frontend/assets/images/pexels-olly-3806249.jpg') no-repeat center center/cover;">
    <div class="text-center z-10 px-4">
        <h1 class="text-5xl md:text-7xl font-black text-white mb-4 tracking-tight uppercase">Tire <span class="text-blue-500">Change</span></h1>
        <p class="text-xl text-blue-200 font-medium max-w-2xl mx-auto">Precision balancing and high-quality tire replacements for ultimate road safety.</p>
    </div>
    <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-[#0f172a] to-transparent"></div>
</div>

<main class="bg-[#0f172a] text-slate-300 py-20 px-6">
    <div class="container mx-auto max-w-5xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-24">
            <div class="space-y-6">
                <span class="text-blue-500 font-black uppercase tracking-widest text-sm">Road Safety First</span>
                <h2 class="text-4xl font-extrabold text-white tracking-tight">Grip You Can Trust</h2>
                <p class="text-lg leading-relaxed text-slate-400">Ensure your safety on the road with professional <strong>Tire Change</strong> services. Worn tires can lead to poor handling, increased braking distances, and the risk of dangerous blowouts.</p>
                <p class="text-lg leading-relaxed text-slate-400">Our team provides quick and efficient tire replacement, balancing, and alignment. We offer a wide selection of tires from top brands to ensure you get the best fit for your car and driving style.</p>
                <div class="flex gap-4">
                    <a href="appointment.php" class="btn btn-primary rounded-xl px-10">Select Tires</a>
                </div>
            </div>
            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-3xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                <img src="/frontend/assets/images/pexels-olly-3806249.jpg" alt="Tire Change" class="relative rounded-3xl shadow-2xl transition duration-500 group-hover:scale-[1.02]">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="p-10 bg-[#1e293b]/50 border border-white/5 rounded-3xl hover:border-blue-500/30 transition shadow-xl border-b-4 border-b-blue-600">
                <h3 class="text-2xl font-black text-white mb-6">Best Tire Services in Karachi</h3>
                <p class="text-slate-400">From regular tire inspections to emergency replacements, Auto Workshop is your go-to destination for all things related to tires. We ensure your vehicle has the grip and stability it needs for Karachi's diverse road surfaces.</p>
            </div>
            <div class="p-10 bg-[#1e293b]/50 border border-white/5 rounded-3xl hover:border-blue-500/30 transition shadow-xl">
                <h3 class="text-2xl font-black text-white mb-6">Affordable and Fast</h3>
                <p class="text-slate-400">Don't wait for a puncture or a blowout to occur. Visit us today for an affordable tire service and drive with confidence. We offer rapid fitting and precision balancing to get you back on the road safely.</p>
            </div>
        </div>
    </div>
</main>


<?php include 'layout/footer.php'; ?>
