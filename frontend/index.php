<?php include 'layout/header.php' ?>    

<main class="bg-[#0f172a]">
    <div class="hero-section min-h-[80vh] flex items-center justify-center relative overflow-hidden" style="background: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.9)), url('/frontend/assets/images/hero_premium.png') no-repeat center center/cover;">
        <div class="main-content container mx-auto flex flex-col md:flex-row justify-between items-center p-8 gap-12 z-10">
            <div class="text text-center md:text-left md:w-1/2">
                <h1 class="text-6xl md:text-8xl font-black mb-6 tracking-tight text-white">PRECISE <br><span class="text-blue-500">CARE</span> FOR YOUR CAR</h1>
                <p class="text-xl md:text-2xl text-gray-400 font-medium max-w-lg leading-relaxed mb-8">Trust the experts at the Auto Workshop for all your maintenance and mechanical needs. Quality service since 1980.</p>
                <div class="flex gap-4 justify-center md:justify-start">
                    <a href="appointment.php" class="btn btn-primary btn-lg px-10 rounded-full font-bold shadow-lg shadow-blue-500/20">Book Now</a>
                    <a href="#services" class="btn btn-outline btn-lg px-10 rounded-full font-bold border-gray-600 text-white hover:bg-gray-800">Our Services</a>
                </div>
            </div>
            <div class="carousel rounded-2xl w-full md:w-1/2 shadow-2xl border border-white/10 glass">
                <div class="carousel-item w-full">
                    <img src="/frontend/assets/images/hero_premium.png" class="w-full object-cover h-64 md:h-96" />
                </div>
                <div class="carousel-item w-full">
                    <img src="/frontend/assets/images/detailing_premium.png" class="w-full object-cover h-64 md:h-96" />
                </div>
                <div class="carousel-item w-full">
                    <img src="/frontend/assets/images/about_premium.png" class="w-full object-cover h-64 md:h-96" />
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-[#0f172a] to-transparent"></div>
    </div>

    <div class="services-section bg-[#0f172a] py-24 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full bg-blue-600/5 blur-[120px] -z-10"></div>
        <div class="container mx-auto px-6">
            <div class="sec mb-16 text-center">
                <section id="services">
                    <span class="text-blue-500 font-black uppercase tracking-widest text-sm mb-4 block">What We Offer</span>
                    <h2 class="text-5xl md:text-6xl font-black mb-6 text-white tracking-tight">Our Premium <span class="text-blue-500">Services</span></h2>
                    <p class="text-slate-400 text-lg max-w-2xl mx-auto">Expert automotive solutions delivered with precision and care. We handle everything from basic maintenance to complex diagnostics.</p>
                </section>
            </div>
        </div>
    </div>

    <div class="services-container relative bg-[#0f172a] pb-24">
        <div class="container mx-auto px-6 -mt-32 pb-24 relative z-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Service Card: Car Wash -->
            <div class="group bg-[#1e293b]/80 backdrop-blur-xl border border-white/5 rounded-[2.5rem] overflow-hidden hover:border-blue-500/30 transition-all duration-500 hover:shadow-[0_0_50px_rgba(59,130,246,0.1)]">
                <div class="h-64 overflow-hidden">
                    <img src="/frontend/assets/images/pexels-sleepididthis-1740919.jpg" alt="Car Wash" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"/>
                </div>
                <div class="p-10">
                    <h3 class="text-2xl font-black text-white mb-4">Car Wash</h3>
                    <p class="text-slate-200 mb-8 line-clamp-2 italic">Maintain your vehicle's pristine shine with our detailing and deep cleaning services.</p>
                    <a href="Car_wash.php" class="inline-flex items-center text-blue-500 font-bold tracking-wider hover:gap-3 transition-all">
                        EXPLORE SERVICE <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- Service Card: Oil Change -->
            <div class="group bg-[#1e293b]/80 backdrop-blur-xl border border-white/5 rounded-[2.5rem] overflow-hidden hover:border-blue-500/30 transition-all duration-500 hover:shadow-[0_0_50px_rgba(59,130,246,0.1)]">
                <div class="h-64 overflow-hidden">
                    <img src="/frontend/assets/images/pexels-daniel-andraski-197681005-13065690.jpg" alt="Oil Change" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"/>
                </div>
                <div class="p-10">
                    <h3 class="text-2xl font-black text-white mb-4">Oil Change</h3>
                    <p class="text-slate-200 mb-8 line-clamp-2 italic">High-performance synthetic oils to keep your engine running smooth and efficient.</p>
                    <a href="Oil_change.php" class="inline-flex items-center text-blue-500 font-bold tracking-wider hover:gap-3 transition-all">
                        EXPLORE SERVICE <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- Service Card: Engine Service -->
            <div class="group bg-[#1e293b]/80 backdrop-blur-xl border border-white/5 rounded-[2.5rem] overflow-hidden hover:border-blue-500/30 transition-all duration-500 hover:shadow-[0_0_50px_rgba(59,130,246,0.1)]">
                <div class="h-64 overflow-hidden">
                    <img src="/frontend/assets/images/pexels-shvetsa-4315575.jpg" alt="Engine" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"/>
                </div>
                <div class="p-10">
                    <h3 class="text-2xl font-black text-white mb-4">Engine Service</h3>
                    <p class="text-slate-200 mb-8 line-clamp-2 italic">Full diagnostics and repair for complex engine management and performance tuning.</p>
                    <a href="Engine_service.php" class="inline-flex items-center text-blue-500 font-bold tracking-wider hover:gap-3 transition-all">
                        EXPLORE SERVICE <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- Service Card: Tire Change -->
            <div class="group bg-[#1e293b]/80 backdrop-blur-xl border border-white/5 rounded-[2.5rem] overflow-hidden hover:border-blue-500/30 transition-all duration-500 hover:shadow-[0_0_50px_rgba(59,130,246,0.1)]">
                <div class="h-64 overflow-hidden">
                    <img src="/frontend/assets/images/pexels-olly-3806249.jpg" alt="Tire Change" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"/>
                </div>
                <div class="p-10">
                    <h3 class="text-2xl font-black text-white mb-4">Tire Change</h3>
                    <p class="text-slate-200 mb-8 line-clamp-2 italic">Precision alignment and balancing services for a safer and more stable driving experience.</p>
                    <a href="Tire_change.php" class="inline-flex items-center text-blue-500 font-bold tracking-wider hover:gap-3 transition-all">
                        EXPLORE SERVICE <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- Service Card: Mechanical -->
            <div class="group bg-[#1e293b]/80 backdrop-blur-xl border border-white/5 rounded-[2.5rem] overflow-hidden hover:border-blue-500/30 transition-all duration-500 hover:shadow-[0_0_50px_rgba(59,130,246,0.1)]">
                <div class="h-64 overflow-hidden">
                    <img src="/frontend/assets/images/pexels-pixabay-162553.jpg" alt="Mechanical" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"/>
                </div>
                <div class="p-10">
                    <h3 class="text-2xl font-black text-white mb-4">Mechanical Repairs</h3>
                    <p class="text-slate-200 mb-8 line-clamp-2 italic">Brakes, suspension, and complete transmission care by our expert technicians.</p>
                    <a href="Mechanical_service.php" class="inline-flex items-center text-blue-500 font-bold tracking-wider hover:gap-3 transition-all">
                        EXPLORE SERVICE <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- Service Card: Meet Team -->
            <div class="group bg-blue-600 border border-white/5 rounded-[2.5rem] overflow-hidden hover:bg-blue-700 transition-all duration-500 shadow-2xl flex flex-col justify-center items-center text-center p-12">
                <div class="w-24 h-24 rounded-full bg-white/20 flex items-center justify-center mb-8 text-white text-4xl">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="text-3xl font-black text-white mb-4 tracking-tight uppercase">Join the <br>Family</h3>
                <p class="text-blue-100 mb-8 leading-relaxed">Work with Karachi's finest team of expert mechanics. Professionalism at its peak.</p>
                <a href="employees.php" class="px-10 py-4 border-2 border-white text-white rounded-full font-black tracking-widest hover:bg-white hover:text-blue-600 transition shadow-xl">
                    MEET THE TEAM
                </a>
            </div>
        </div>
    </div>
</div>

    <section class="enquiry-section bg-[#0f172a] py-24 overflow-hidden relative">
        <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center gap-16 relative z-10">
            <div class="form-container flex-1 bg-[#1e293b]/50 p-10 rounded-3xl border border-white/5 backdrop-blur-xl shadow-2xl">
                <h2 class="text-4xl font-extrabold mb-8 text-white tracking-tight">Quick <span class="text-blue-500">Enquiry</span></h2>
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
                        <input type="email" name="mail" placeholder="Email Address" class="w-full p-4 rounded-xl bg-[#0f172a] text-white border border-white/10 focus:ring-2 focus:ring-blue-500 transition" required>
                    </div>
                    <textarea name="desc" placeholder="How can we help you today?" class="w-full p-4 rounded-xl bg-[#0f172a] text-white border border-white/10 focus:ring-2 focus:ring-blue-500 transition h-40" required></textarea>
                    <div class="flex flex-col sm:flex-row items-center gap-6 pt-4">
                        <label for="file-upload" class="w-full sm:w-auto bg-gray-700/50 text-white px-8 py-4 rounded-xl cursor-pointer hover:bg-gray-700 transition flex items-center justify-center border border-white/5">
                            <i class="fas fa-paperclip mr-3 text-blue-400"></i>Attach Photos
                            <input id="file-upload" name="file" type="file" class="hidden">
                        </label>
                        <button type="submit" name="enquiry" class="w-full sm:w-auto bg-blue-600 text-white px-12 py-4 rounded-xl font-black uppercase tracking-wider hover:bg-blue-700 transition-all shadow-xl shadow-blue-500/20">Send Quick Enquiry</button>
                    </div>
                </form>
            </div>
            <div class="image-container flex-1 hidden lg:block">
                <div class="relative group">
                    <img src="/frontend/assets/images/person-fotor-bg-remover-20240525142154.png" alt="Mechanic" class="max-w-full h-auto drop-shadow-[0_35px_35px_rgba(59,130,246,0.3)] z-10 relative">
                    <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-blue-600/20 rounded-full blur-[100px] z-0"></div>
                </div>
            </div>
        </div>
        <div class="absolute top-0 right-0 w-[50%] h-full bg-blue-600/5 blur-[150px] -z-10"></div>
    </section>

</main>

<?php include 'layout/footer.php' ?>
