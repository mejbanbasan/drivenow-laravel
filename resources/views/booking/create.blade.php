@extends('components.layout')

@section('content')
<div class="container mx-auto px-4 py-24" id="booking-app">
    <!-- Breadcrumb -->
    <a href="{{ route('cars.show', $car['id']) }}" class="inline-flex items-center gap-2 text-sm text-muted-foreground hover:text-foreground mb-6">
        <i data-lucide="arrow-left" class="w-4 h-4"></i>
        Back to {{ $car['name'] }}
    </a>

    <!-- Progress Steps -->
    <div class="flex items-center justify-center mb-12">
        <div class="flex items-center step-item" data-step="1">
            <div class="flex flex-col items-center">
                <div class="step-indicator active w-10 h-10 rounded-full flex items-center justify-center font-semibold bg-primary text-primary-foreground transition-all duration-300">
                    1
                </div>
                <span class="text-xs mt-2 text-foreground">Trip Details</span>
            </div>
            <div class="w-16 md:w-24 h-0.5 mx-2 bg-secondary step-line"></div>
        </div>
        <div class="flex items-center step-item" data-step="2">
            <div class="flex flex-col items-center">
                <div class="step-indicator pending w-10 h-10 rounded-full flex items-center justify-center font-semibold bg-secondary text-muted-foreground transition-all duration-300">
                    2
                </div>
                <span class="text-xs mt-2 text-muted-foreground">Add-ons</span>
            </div>
            <div class="w-16 md:w-24 h-0.5 mx-2 bg-secondary step-line"></div>
        </div>
        <div class="flex items-center step-item" data-step="3">
            <div class="flex flex-col items-center">
                <div class="step-indicator pending w-10 h-10 rounded-full flex items-center justify-center font-semibold bg-secondary text-muted-foreground transition-all duration-300">
                    3
                </div>
                <span class="text-xs mt-2 text-muted-foreground">Your Details</span>
            </div>
            <div class="w-16 md:w-24 h-0.5 mx-2 bg-secondary step-line"></div>
        </div>
        <div class="flex items-center step-item" data-step="4">
            <div class="flex flex-col items-center">
                <div class="step-indicator pending w-10 h-10 rounded-full flex items-center justify-center font-semibold bg-secondary text-muted-foreground transition-all duration-300">
                    4
                </div>
                <span class="text-xs mt-2 text-muted-foreground">Payment</span>
            </div>
        </div>
    </div>

    <div class="grid lg:grid-cols-3 gap-8">
        <!-- Left Column - Form Steps -->
        <div class="lg:col-span-2">
            <!-- Step 1: Trip Details -->
            <div id="step-1" class="step-content animate-fade-in">
                <div class="premium-card p-6">
                    <h2 class="text-xl font-semibold mb-6">Trip Details</h2>
                    <div class="space-y-4">
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label class="text-sm font-medium mb-2 block">Pickup Location</label>
                                <div class="relative">
                                    <i data-lucide="map-pin" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground"></i>
                                    <input type="text" id="pickupLocation" placeholder="Enter pickup location" class="pl-10 h-12 w-full input-premium rounded-lg bg-secondary border-white/10" value="{{ request('pickupLocation') }}">
                                </div>
                            </div>
                            <div>
                                <label class="text-sm font-medium mb-2 block">Drop-off Location</label>
                                <div class="relative">
                                    <i data-lucide="map-pin" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground"></i>
                                    <input type="text" id="dropoffLocation" placeholder="Enter drop-off location" class="pl-10 h-12 w-full input-premium rounded-lg bg-secondary border-white/10" value="{{ request('dropoffLocation') }}">
                                </div>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label class="text-sm font-medium mb-2 block">Pickup Date & Time</label>
                                <div class="relative">
                                    <i data-lucide="calendar" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground"></i>
                                    <input type="datetime-local" id="pickupDate" class="pl-10 h-12 w-full input-premium rounded-lg bg-secondary border-white/10 [&::-webkit-calendar-picker-indicator]:invert" value="{{ request('pickupDate') }}">
                                </div>
                            </div>
                            <div>
                                <label class="text-sm font-medium mb-2 block">Return Date & Time</label>
                                <div class="relative">
                                    <i data-lucide="calendar" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground"></i>
                                    <input type="datetime-local" id="returnDate" class="pl-10 h-12 w-full input-premium rounded-lg bg-secondary border-white/10 [&::-webkit-calendar-picker-indicator]:invert" value="{{ request('returnDate') }}">
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="text-sm font-medium mb-2 block">
                                Estimated Distance: <span id="dist-val">100</span> km
                            </label>
                            <input type="range" min="50" max="1000" step="10" value="100" id="estimatedKm" class="w-full accent-primary">
                            <div class="flex justify-between text-xs text-muted-foreground mt-1">
                                <span>50 km</span>
                                <span>1000 km</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2: Add-ons -->
            <div id="step-2" class="step-content hidden animate-fade-in">
                <div class="premium-card p-6">
                    <h2 class="text-xl font-semibold mb-6">Optional Add-ons</h2>
                    <div class="space-y-3">
                        @foreach([
                            ['key' => "insurance", 'name' => "Insurance Cover", 'price' => 500, 'desc' => "Comprehensive coverage for damages"],
                            ['key' => "gps", 'name' => "GPS Navigation", 'price' => 200, 'desc' => "Built-in navigation system"],
                            ['key' => "childSeat", 'name' => "Child Seat", 'price' => 150, 'desc' => "Safe seating for children"],
                            ['key' => "extraDriver", 'name' => "Additional Driver", 'price' => 300, 'desc' => "Add another driver to the booking"],
                        ] as $addon)
                            <label class="block addon-card">
                                <div class="flex items-center justify-between p-4 rounded-xl cursor-pointer transition-all bg-secondary/50 border-2 border-transparent hover:border-white/10">
                                    <div class="flex items-center gap-4">
                                        <input type="checkbox" name="addons" value="{{ $addon['price'] }}" data-key="{{ $addon['key'] }}" class="w-5 h-5 accent-primary addon-checkbox">
                                        <div>
                                            <p className="font-medium">{{ $addon['name'] }}</p>
                                            <p className="text-sm text-muted-foreground">{{ $addon['desc'] }}</p>
                                        </div>
                                    </div>
                                    <span class="font-semibold text-primary">+₹{{ $addon['price'] }}</span>
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Step 3: Your Details -->
            <div id="step-3" class="step-content hidden animate-fade-in">
                <div class="premium-card p-6">
                    <h2 class="text-xl font-semibold mb-6">Your Details</h2>
                    <div class="space-y-4">
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label class="text-sm font-medium mb-2 block">First Name</label>
                                <div class="relative">
                                    <i data-lucide="user" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground"></i>
                                    <input type="text" placeholder="Enter first name" class="pl-10 h-12 w-full input-premium rounded-lg bg-secondary border-white/10">
                                </div>
                            </div>
                            <div>
                                <label class="text-sm font-medium mb-2 block">Last Name</label>
                                <div class="relative">
                                    <i data-lucide="user" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground"></i>
                                    <input type="text" placeholder="Enter last name" class="pl-10 h-12 w-full input-premium rounded-lg bg-secondary border-white/10">
                                </div>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label class="text-sm font-medium mb-2 block">Email Address</label>
                                <div class="relative">
                                    <i data-lucide="mail" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground"></i>
                                    <input type="email" placeholder="Enter email" class="pl-10 h-12 w-full input-premium rounded-lg bg-secondary border-white/10">
                                </div>
                            </div>
                            <div>
                                <label class="text-sm font-medium mb-2 block">Phone Number</label>
                                <div class="relative">
                                    <i data-lucide="phone" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground"></i>
                                    <input type="tel" placeholder="Enter phone number" class="pl-10 h-12 w-full input-premium rounded-lg bg-secondary border-white/10">
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="text-sm font-medium mb-2 block">Driving License Number</label>
                            <div class="relative">
                                <i data-lucide="credit-card" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground"></i>
                                <input type="text" placeholder="Enter driving license number" class="pl-10 h-12 w-full input-premium rounded-lg bg-secondary border-white/10">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4: Payment -->
            <div id="step-4" class="step-content hidden animate-fade-in">
                <div class="premium-card p-6">
                    <h2 class="text-xl font-semibold mb-6">Payment Method</h2>
                    <div class="space-y-3 mb-6">
                        @foreach([
                            ['key' => "upi", 'name' => "UPI", 'desc' => "Pay using any UPI app"],
                            ['key' => "card", 'name' => "Credit/Debit Card", 'desc' => "Visa, Mastercard, RuPay"],
                            ['key' => "netbanking", 'name' => "Net Banking", 'desc' => "All major banks supported"],
                            ['key' => "wallet", 'name' => "Wallets", 'desc' => "Paytm, PhonePe, etc."],
                        ] as $method)
                            <label class="flex items-center gap-4 p-4 rounded-xl cursor-pointer transition-all bg-secondary/50 border-2 border-transparent hover:border-white/10 payment-option">
                                <input type="radio" name="paymentMethod" value="{{ $method['key'] }}" class="w-5 h-5 accent-primary" {{ $loop->first ? 'checked' : '' }}>
                                <div>
                                    <p class="font-medium">{{ $method['name'] }}</p>
                                    <p class="text-sm text-muted-foreground">{{ $method['desc'] }}</p>
                                </div>
                            </label>
                        @endforeach
                    </div>
                    <div class="p-4 bg-primary/10 rounded-xl border border-primary/20">
                        <p class="text-sm text-muted-foreground">
                            <i data-lucide="shield" class="w-4 h-4 inline mr-2 text-primary"></i>
                            Your payment is secure. We use 256-bit SSL encryption.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex justify-between mt-6">
                <button id="backBtn" class="flex items-center gap-2 px-6 py-3 rounded-xl font-medium bg-secondary text-foreground hover:bg-secondary/80 transition-colors disabled:opacity-50" disabled>
                    <i data-lucide="arrow-left" class="w-4 h-4"></i>
                    Back
                </button>
                
                <button id="nextBtn" class="flex items-center gap-2 px-6 py-3 rounded-xl font-medium bg-primary text-primary-foreground hover:bg-amber-600 transition-colors btn-glow">
                    <span id="nextBtnText">Continue</span>
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </button>
            </div>
        </div>

        <!-- Right Column - Booking Summary -->
        <div class="lg:sticky lg:top-24 h-fit space-y-6">
            <div class="premium-card p-6">
                <div class="flex gap-4 mb-4">
                    <img src="{{ asset($car['image']) }}" alt="{{ $car['name'] }}" class="w-24 h-20 object-cover rounded-lg">
                    <div>
                        <h3 class="font-semibold">{{ $car['name'] }}</h3>
                        <p class="text-sm text-muted-foreground">{{ $car['brand'] }} • {{ $car['category'] }}</p>
                        <p class="text-sm text-primary mt-1">₹{{ $car['pricePerKm'] }}/km</p>
                    </div>
                </div>

                <div class="space-y-2 mb-4 pt-4 border-t border-white/5">
                    <div class="flex items-center gap-2 text-sm">
                        <i data-lucide="car" class="w-4 h-4 text-primary"></i>
                        <span class="text-muted-foreground">Distance:</span>
                        <span id="summary-dist">100 km</span>
                    </div>
                </div>
            </div>

            <!-- Price Breakdown -->
            <div class="premium-card p-6">
                <h3 class="font-semibold mb-4">Price Breakdown</h3>
                <div class="space-y-3 text-sm">
                    <div class="flex justify-between">
                        <span class="text-muted-foreground">Base Fare</span>
                        <span>₹{{ $car['baseFare'] }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-muted-foreground"><span id="summary-km">100</span> km × ₹{{ $car['pricePerKm'] }}</span>
                        <span id="summary-km-charge">₹{{ 100 * $car['pricePerKm'] }}</span>
                    </div>
                    
                    <div id="addons-summary"></div> <!-- Addons injected here -->

                    <div class="pt-3 border-t border-white/5">
                        <div class="flex justify-between">
                            <span class="text-muted-foreground">Subtotal</span>
                            <span id="summary-subtotal">₹0</span>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-muted-foreground">GST (18%)</span>
                        <span id="summary-gst">₹0</span>
                    </div>
                    <div class="pt-3 border-t border-white/5">
                        <div class="flex justify-between text-lg font-semibold">
                            <span>Total</span>
                            <span class="text-primary" id="summary-total">₹0</span>
                        </div>
                    </div>
                    <div class="flex justify-between text-muted-foreground">
                        <span>Security Deposit</span>
                        <span>₹{{ number_format($car['securityDeposit']) }}</span>
                    </div>
                </div>
            </div>
            
             <!-- Trust Badges -->
              <div class="flex gap-4 text-xs text-muted-foreground">
                <div class="flex items-center gap-1">
                   <i data-lucide="shield" class="w-4 h-4 text-primary"></i>
                  <span>Secure Payment</span>
                </div>
                <div class="flex items-center gap-1">
                  <i data-lucide="clock" class="w-4 h-4 text-primary"></i>
                  <span>Free Cancellation</span>
                </div>
              </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        let currentStep = 1;
        const totalSteps = 4;
        
        const carBaseFare = {{ $car['baseFare'] }};
        const carPricePerKm = {{ $car['pricePerKm'] }};
        
        const nextBtn = document.getElementById('nextBtn');
        const backBtn = document.getElementById('backBtn');
        const nextBtnText = document.getElementById('nextBtnText');
        
        // Elements for updates
        const distInput = document.getElementById('estimatedKm');
        const distVal = document.getElementById('dist-val');
        const summaryDist = document.getElementById('summary-dist');
        const summaryKm = document.getElementById('summary-km');
        const summaryKmCharge = document.getElementById('summary-km-charge');
        const summarySubtotal = document.getElementById('summary-subtotal');
        const summaryGst = document.getElementById('summary-gst');
        const summaryTotal = document.getElementById('summary-total');
        const addonsContainer = document.getElementById('addons-summary');
        const addonCheckboxes = document.querySelectorAll('.addon-checkbox');

        function updatePrice() {
            const km = parseInt(distInput.value);
            distVal.textContent = km;
            summaryDist.textContent = km + " km";
            summaryKm.textContent = km;
            
            const kmCharge = km * carPricePerKm;
            summaryKmCharge.textContent = "₹" + kmCharge;
            
            let addonsCost = 0;
            let addonsHtml = '';
            
            addonCheckboxes.forEach(cb => {
                const parent = cb.closest('.addon-card').querySelector('div'); // Style handling
                if(cb.checked) {
                    addonsCost += parseInt(cb.value);
                    parent.classList.add('bg-primary/10', 'border-primary');
                    parent.classList.remove('border-transparent');
                    
                    // Add result to summary
                    const name = cb.nextElementSibling.querySelector('p').textContent;
                    const price = cb.value;
                    addonsHtml += `<div class="flex justify-between text-primary"><span>${name}</span><span>₹${price}</span></div>`;
                } else {
                    parent.classList.remove('bg-primary/10', 'border-primary');
                    parent.classList.add('border-transparent');
                }
            });
            
            addonsContainer.innerHTML = addonsHtml;
            
            const subtotal = carBaseFare + kmCharge + addonsCost;
            summarySubtotal.textContent = "₹" + subtotal;
            
            const gst = subtotal * 0.18;
            summaryGst.textContent = "₹" + gst.toFixed(0);
            
            const total = subtotal + gst;
            summaryTotal.textContent = "₹" + total.toFixed(0);
            
            if (currentStep === 4) {
                 nextBtnText.textContent = `Pay ₹${total.toFixed(0)}`;
            } else {
                 nextBtnText.textContent = "Continue";
            }
        }

        // Init price
        distInput.addEventListener('input', updatePrice);
        addonCheckboxes.forEach(cb => cb.addEventListener('change', updatePrice));
        updatePrice();

        // Payment Method styling
        const paymentRadios = document.querySelectorAll('input[name="paymentMethod"]');
        paymentRadios.forEach(radio => {
            radio.addEventListener('change', () => {
                document.querySelectorAll('.payment-option').forEach(opt => {
                     opt.classList.remove('bg-primary/10', 'border-primary');
                     opt.classList.add('border-transparent');
                });
                if(radio.checked) {
                    radio.closest('.payment-option').classList.add('bg-primary/10', 'border-primary');
                    radio.closest('.payment-option').classList.remove('border-transparent');
                }
            });
        });

        // Navigation
        nextBtn.addEventListener('click', () => {
            if (currentStep < totalSteps) {
                document.getElementById(`step-${currentStep}`).classList.add('hidden');
                currentStep++;
                document.getElementById(`step-${currentStep}`).classList.remove('hidden');
                updateSteps();
                updatePrice(); // specifically for button text
            } else {
                // Submit - Redirect to confirmation
                window.location.href = "{{ route('booking.confirmation') }}?booking_id=BK-" + Date.now();
            }
        });

        backBtn.addEventListener('click', () => {
            if (currentStep > 1) {
                document.getElementById(`step-${currentStep}`).classList.add('hidden');
                currentStep--;
                document.getElementById(`step-${currentStep}`).classList.remove('hidden');
                updateSteps();
                updatePrice();
            }
        });

        function updateSteps() {
            backBtn.disabled = currentStep === 1;
            
            document.querySelectorAll('.step-item').forEach(item => {
                const step = parseInt(item.dataset.step);
                const indicator = item.querySelector('.step-indicator');
                const line = item.querySelector('.step-line');
                
                if (step < currentStep) {
                    indicator.className = "step-indicator completed w-10 h-10 rounded-full flex items-center justify-center font-semibold bg-primary/20 text-primary border-2 border-primary transition-all duration-300";
                    indicator.innerHTML = '<i data-lucide="check" class="w-5 h-5"></i>';
                    if(line) line.classList.replace('bg-secondary', 'bg-primary');
                } else if (step === currentStep) {
                    indicator.className = "step-indicator active w-10 h-10 rounded-full flex items-center justify-center font-semibold bg-primary text-primary-foreground transition-all duration-300";
                    indicator.innerHTML = step;
                    if(line) line.classList.replace('bg-primary', 'bg-secondary');
                } else {
                    indicator.className = "step-indicator pending w-10 h-10 rounded-full flex items-center justify-center font-semibold bg-secondary text-muted-foreground transition-all duration-300";
                    indicator.innerHTML = step;
                    if(line) line.classList.replace('bg-primary', 'bg-secondary');
                }
            });
            lucide.createIcons();
        }
    });
</script>
@endsection
