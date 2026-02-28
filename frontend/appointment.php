<?php include 'layout/header.php'; ?>

<main class="bg-[#0f172a] py-12 px-4 min-h-screen">
    <div class="appointment-container bg-[#1e293b] shadow-2xl overflow-hidden rounded-2xl max-w-4xl mx-auto border border-white/5">
        <div class="p-10 text-center bg-blue-600/10 text-white rounded-t-xl relative border-b border-white/5">
            <h1 class="text-4xl font-extrabold mb-2 text-white tracking-tight">Book Professional Service</h1>
            <p class="text-blue-400 font-medium">Schedule your next appointment in three simple steps</p>
        </div>
        
        <div class="appointment-steps p-8 border-b border-white/5 flex justify-between gap-4 overflow-x-auto no-scrollbar">
            <div class="appointment-step active flex flex-col items-center flex-1 min-w-[100px]" data-step="1">
                <div class="step-icon w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold mb-2 shadow-lg shadow-blue-500/30">1</div>
                <div class="step-label text-xs font-bold uppercase tracking-wider text-blue-500">Service</div>
            </div>
            <div class="appointment-step flex flex-col items-center flex-1 min-w-[100px]" data-step="2">
                <div class="step-icon w-10 h-10 rounded-full bg-gray-700/50 text-gray-500 flex items-center justify-center font-bold mb-2">2</div>
                <div class="step-label text-xs font-bold uppercase tracking-wider text-gray-500">Scheduling</div>
            </div>
            <div class="appointment-step flex flex-col items-center flex-1 min-w-[100px]" data-step="3">
                <div class="step-icon w-10 h-10 rounded-full bg-gray-700/50 text-gray-500 flex items-center justify-center font-bold mb-2">3</div>
                <div class="step-label text-xs font-bold uppercase tracking-wider text-gray-500">Confirmation</div>
            </div>
        </div>



        <form id="appointment-form" method="POST" enctype="multipart/form-data" class="p-8">
            <div class="step-content active" data-step="1">
                <h2 class="text-2xl font-bold mb-6 text-white">Auto Workshop Offers Free Online Appointment Booking</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="form-group flex flex-col gap-2">
                        <label class="font-bold text-gray-700">Our Services</label>
                        <select name="ser" class="p-3 border rounded-lg bg-gray-50 focus:ring-2 focus:ring-blue-500" required>
                            <option value="">Select service</option>
                            <option value="carWash">Car Wash</option>
                            <option value="oilChange">Oil Change</option>
                            <option value="engineService">Mechanical Services</option>
                            <option value="tireChange">Tire Change</option>
                        </select>
                    </div>
                    <div class="form-group flex flex-col gap-2">
                        <label class="font-bold text-gray-700">Our Packages</label>
                        <select name="pack" class="p-3 border rounded-lg bg-gray-50 focus:ring-2 focus:ring-blue-500" required>
                            <option value="">Select package</option>
                            <option value="basic">Basic (RS:4200)</option>
                            <option value="advanced">Advanced (RS:6500)</option>
                            <option value="premium">Premium (RS:9000)</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="step-content hidden" data-step="2">
                <h2 class="text-2xl font-bold mb-6 text-white">Your Availability</h2>
                <div class="grid grid-cols-1 gap-6">
                    <div class="form-group flex flex-col gap-2">
                        <label class="font-bold text-gray-700">Preferred Date</label>
                        <input type="date" name="date" class="p-3 border rounded-lg bg-gray-50 focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="form-group flex flex-col gap-2">
                            <label class="font-bold text-gray-700">Start from</label>
                            <input type="time" name="start-time" class="p-3 border rounded-lg bg-gray-50 focus:ring-2 focus:ring-blue-500" required>
                        </div>
                        <div class="form-group flex flex-col gap-2">
                            <label class="font-bold text-gray-700">Finish by</label>
                            <input type="time" name="end-time" class="p-3 border rounded-lg bg-gray-50 focus:ring-2 focus:ring-blue-500" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="step-content hidden" data-step="3">
                <h2 class="text-2xl font-bold mb-6 text-white">Confirmation info</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" name="nam" placeholder="Full Name" class="p-3 border rounded-lg" required>
                    <input type="tel" name="phone" placeholder="Phone Number" class="p-3 border rounded-lg" required>
                    <input type="email" name="Email" placeholder="Email Address" class="p-3 border rounded-lg" required>
                    <input type="text" name="carBrand" placeholder="Car Brand (e.g. Honda)" class="p-3 border rounded-lg" required>
                    <select name="carType" class="p-3 border rounded-lg" required>
                        <option value="">Car Type</option>
                        <option value="sedan">Sedan</option>
                        <option value="suv">SUV</option>
                    </select>
                    <input type="text" name="carNumber" placeholder="Plate Number" class="p-3 border rounded-lg" required>
                    <input type="text" name="address" placeholder="Location/Address" class="p-3 border rounded-lg md:col-span-2" required>
                </div>
            </div>

            <div class="step-content hidden" data-step="4">
                <div class="text-center py-10">
                    <div class="w-16 h-16 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-check text-2xl"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-white">Booking Complete!</h2>
                    <p class="text-slate-400 mt-4">Thank you! Your booking is complete. An email with details of your booking has been sent to you.</p>
                </div>
            </div>

            <div class="mt-8 flex justify-between">
                <button type="button" id="prevBtn" class="bg-gray-700/50 text-gray-300 px-10 py-4 rounded-xl font-bold hover:bg-gray-700 transition hidden" onclick="prevStep()">Back</button>
                <button type="button" id="nextBtn" class="bg-blue-600 text-white px-10 py-4 rounded-xl font-bold hover:bg-blue-700 transition ml-auto shadow-lg shadow-blue-500/20" onclick="nextStep()">Next Step</button>
                <button type="submit" id="submitBtn" name="appoint" class="bg-green-600 text-white px-10 py-4 rounded-xl font-bold hover:bg-green-700 transition hidden shadow-lg shadow-green-500/20">Complete Booking</button>
            </div>
        </form>
    </div>
</main>

<style>
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    
    input, select, textarea {
        background: #0f172a !important;
        color: white !important;
        border-color: rgba(255,255,255,0.1) !important;
    }
    input:focus, select:focus, textarea:focus {
        border-color: #3b82f6 !important;
        box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2) !important;
    }
    label { color: #94a3b8 !important; }
    h2 { color: #f1f5f9 !important; }
</style>

<script>
    let currentStep = 1;
    const totalSteps = 3; // Excluding "Finish" screen which is shown on success

    function updateStepsUI() {
        document.querySelectorAll('.step-content').forEach(el => el.classList.add('hidden'));
        document.querySelector(`.step-content[data-step="${currentStep}"]`).classList.remove('hidden');

        document.querySelectorAll('.appointment-step').forEach((el, idx) => {
            const icon = el.querySelector('.step-icon');
            const label = el.querySelector('.step-label');
            
            icon.className = 'step-icon w-10 h-10 rounded-full flex items-center justify-center font-bold mb-2 transition-all duration-300';
            label.className = 'step-label text-xs font-bold uppercase tracking-wider transition-all duration-300';
            
            if (idx + 1 === currentStep) {
                icon.classList.add('bg-blue-600', 'text-white', 'shadow-lg', 'shadow-blue-500/30', 'scale-110');
                label.classList.add('text-blue-500');
            } else if (idx + 1 < currentStep) {
                icon.classList.add('bg-green-600', 'text-white');
                label.classList.add('text-green-500');
                icon.innerHTML = '<i class="fas fa-check"></i>';
            } else {
                icon.classList.add('bg-gray-700/50', 'text-gray-500');
                label.classList.add('text-gray-500');
                icon.innerHTML = idx + 1;
            }
        });

        document.getElementById('prevBtn').classList.toggle('hidden', currentStep === 1);
        document.getElementById('nextBtn').classList.toggle('hidden', currentStep === totalSteps);
        document.getElementById('submitBtn').classList.toggle('hidden', currentStep !== totalSteps);
    }

    function nextStep() {
        if (currentStep < totalSteps) {
            currentStep++;
            updateStepsUI();
        }
    }

    function prevStep() {
        if (currentStep > 1) {
            currentStep--;
            updateStepsUI();
        }
    }
</script>


<?php include 'layout/footer.php'; ?>
