<?php include 'layout/header.php' ?>

<div class="offers-hero relative h-[50vh] flex items-center justify-center overflow-hidden" style="background: linear-gradient(rgba(15, 23, 42, 0.7), rgba(15, 23, 42, 0.7)), url('/frontend/assets/images/about_premium.png') no-repeat center center/cover;">
    <div class="text-center z-10 px-4">
        <h1 class="text-5xl md:text-7xl font-black text-white mb-4 tracking-tight uppercase underline decoration-blue-500 decoration-8 underline-offset-8">PERFORMANCE <span class="text-blue-500">DEALS</span></h1>
        <p class="text-xl text-slate-300 font-medium max-w-2xl mx-auto">High-performance maintenance packages tailored for Karachi's roads.</p>
    </div>
    <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-[#0f172a] to-transparent"></div>
</div>

<main class="bg-[#0f172a] py-24 px-6">
    <div class="container mx-auto max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-stretch">
            <!-- Basic Package -->
            <div class="group bg-[#1e293b]/50 backdrop-blur-xl border border-white/5 p-12 rounded-[2.5rem] flex flex-col hover:border-blue-500/20 transition-all duration-500 shadow-2xl">
                <div class="mb-10 text-center">
                    <span class="text-blue-500 font-black uppercase tracking-widest text-xs mb-2 block">Essential</span>
                    <h3 class="text-3xl font-black text-white mb-2">Basic Combo</h3>
                    <div class="text-4xl font-black text-white mt-4">RS. 4,200</div>
                </div>
                <div class="space-y-4 mb-10 flex-grow">
                    <div class="flex items-center gap-3 text-slate-300">
                        <i class="fas fa-check-circle text-blue-500"></i>
                        <span>Computerized Scanning</span>
                    </div>
                    <div class="flex items-center gap-3 text-slate-300">
                        <i class="fas fa-check-circle text-blue-500"></i>
                        <span>Throttle Body Service</span>
                    </div>
                    <div class="flex items-center gap-3 text-slate-300">
                        <i class="fas fa-check-circle text-blue-500"></i>
                        <span>Injector Cleaning</span>
                    </div>
                    <div class="flex items-center gap-3 text-slate-300">
                        <i class="fas fa-check-circle text-blue-500"></i>
                        <span>Spark Plugs Cleaning</span>
                    </div>
                    <div class="flex items-center gap-3 text-slate-300">
                        <i class="fas fa-check-circle text-blue-500"></i>
                        <span>Complete Brakes Service</span>
                    </div>
                </div>
                <a href="appointment.php" class="w-full bg-slate-800 text-white py-5 rounded-2xl font-black uppercase tracking-wider text-center hover:bg-slate-700 transition active:scale-[0.98]">
                    Get Started
                </a>
            </div>

            <!-- Advanced Package (Featured) -->
            <div class="group bg-blue-600 p-12 rounded-[2.5rem] flex flex-col transform lg:-translate-y-8 shadow-[0_0_80px_rgba(37,99,235,0.2)] relative z-20">
                <div class="absolute -top-5 left-1/2 -translate-x-1/2 bg-white text-blue-600 px-6 py-2 rounded-full font-black text-xs uppercase tracking-widest shadow-xl">
                    Most Popular
                </div>
                <div class="mb-10 text-center">
                    <span class="text-blue-100 font-black uppercase tracking-widest text-xs mb-2 block">Performance</span>
                    <h3 class="text-3xl font-black text-white mb-2">Advanced Care</h3>
                    <div class="text-4xl font-black text-white mt-4">RS. 6,500</div>
                </div>
                <div class="space-y-4 mb-10 flex-grow">
                    <div class="flex items-center gap-3 text-white">
                        <i class="fas fa-check-circle text-blue-200"></i>
                        <span class="font-bold">Everything in Basic</span>
                    </div>
                    <div class="flex items-center gap-3 text-blue-50">
                        <i class="fas fa-check-circle text-blue-200"></i>
                        <span>Catalytic Converter Cleaning</span>
                    </div>
                    <div class="flex items-center gap-3 text-blue-50">
                        <i class="fas fa-check-circle text-blue-200"></i>
                        <span>Sensor Deep Cleaning</span>
                    </div>
                    <div class="flex items-center gap-3 text-blue-50">
                        <i class="fas fa-check-circle text-blue-200"></i>
                        <span>Suspension Check-up</span>
                    </div>
                </div>
                <a href="appointment.php" class="w-full bg-white text-blue-600 py-5 rounded-2xl font-black uppercase tracking-wider text-center hover:scale-105 transition active:scale-[0.98] shadow-2xl">
                    Book Advanced Care
                </a>
            </div>

            <!-- Premium Package -->
            <div class="group bg-[#1e293b]/50 backdrop-blur-xl border border-white/5 p-12 rounded-[2.5rem] flex flex-col hover:border-blue-500/20 transition-all duration-500 shadow-2xl">
                <div class="mb-10 text-center">
                    <span class="text-blue-500 font-black uppercase tracking-widest text-xs mb-2 block">Ultimate</span>
                    <h3 class="text-3xl font-black text-white mb-2">Premium Luxe</h3>
                    <div class="text-4xl font-black text-white mt-4">RS. 9,000</div>
                </div>
                <div class="space-y-4 mb-10 flex-grow">
                    <div class="flex items-center gap-3 text-slate-300">
                        <i class="fas fa-check-circle text-blue-500"></i>
                        <span class="font-bold">Everything in Advanced</span>
                    </div>
                    <div class="flex items-center gap-3 text-slate-300">
                        <i class="fas fa-check-circle text-blue-500"></i>
                        <span>EGR System Cleaning</span>
                    </div>
                    <div class="flex items-center gap-3 text-slate-300">
                        <i class="fas fa-check-circle text-blue-500"></i>
                        <span>Engine Decarbonizing</span>
                    </div>
                    <div class="flex items-center gap-3 text-slate-300">
                        <i class="fas fa-check-circle text-blue-500"></i>
                        <span>Air Filter Replacement</span>
                    </div>
                </div>
                <a href="appointment.php" class="w-full bg-slate-800 text-white py-5 rounded-2xl font-black uppercase tracking-wider text-center hover:bg-slate-700 transition active:scale-[0.98]">
                    Go Premium
                </a>
            </div>
        </div>

        <section class="mt-40 bg-[#1e293b] rounded-[3rem] p-12 md:p-20 overflow-hidden relative border border-white/5 shadow-inner">
            <div class="flex flex-col lg:flex-row items-center gap-16 relative z-10">
                <div class="flex-1 text-center lg:text-left">
                    <h2 class="text-4xl md:text-5xl font-black text-white mb-6">Didn't find what <br><span class="text-blue-500">you need?</span></h2>
                    <p class="text-slate-400 text-lg mb-10 max-w-sm mx-auto lg:mx-0">Send us a custom inquiry and our master mechanics will get back to you with a tailored quote.</p>
                    <div class="hidden lg:block">
                         <img src="/frontend/assets/images/person-fotor-bg-remover-20240525142154.png" alt="Mechanic" class="w-64 grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition duration-700">
                    </div>
                </div>

                <div class="flex-1 w-full bg-[#0f172a]/50 p-10 rounded-3xl border border-white/10 backdrop-blur-xl">
                    <form method="post" enctype="multipart/form-data" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <input type="text" name="nam" placeholder="Your Name" class="w-full p-4 rounded-xl bg-[#0f172a] text-white border border-white/10 focus:ring-2 focus:ring-blue-500 transition" required>
                            <input type="text" name="phone" placeholder="Phone Number" class="w-full p-4 rounded-xl bg-[#0f172a] text-white border border-white/10 focus:ring-2 focus:ring-blue-500 transition" required>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <select name="brand" class="w-full p-4 rounded-xl bg-[#0f172a] text-white border border-white/10 focus:ring-2 focus:ring-blue-500 transition" required>
                                <option value="">Select Brand</option>
                                <option value="suzuki">Suzuki</option>
                                <option value="honda">Honda</option>
                                <option value="toyota">Toyota</option>
                                <option value="kia">Kia</option>
                            </select>
                            <input type="email" name="mail" placeholder="Email (Optional)" class="w-full p-4 rounded-xl bg-[#0f172a] text-white border border-white/10 focus:ring-2 focus:ring-blue-500 transition">
                        </div>
                        <textarea name="desc" placeholder="Tell us about your vehicle issues..." class="w-full p-4 rounded-xl bg-[#0f172a] text-white border border-white/10 focus:ring-2 focus:ring-blue-500 transition h-32 resize-none" required></textarea>
                        <div class="flex flex-col sm:flex-row items-center gap-6">
                            <label for="file-upload" class="w-full sm:w-auto px-8 py-3 bg-slate-800 text-slate-300 rounded-xl cursor-pointer hover:bg-slate-700 transition text-center text-sm font-bold uppercase tracking-wider">
                                <i class="fas fa-camera mr-2"></i> Attach Photo
                                <input id="file-upload" name="file" type="file" class="hidden">
                            </label>
                            <button type="submit" name="enquiry" class="flex-1 bg-blue-600 text-white px-10 py-4 rounded-xl font-black uppercase tracking-widest hover:bg-blue-700 transition shadow-xl shadow-blue-500/20 active:scale-95">
                                Send Inquiry <i class="fas fa-chevron-right ml-2 text-xs"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</main>


<?php include 'layout/footer.php' ?>
