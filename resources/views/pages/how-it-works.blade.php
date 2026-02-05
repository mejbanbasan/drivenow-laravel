@extends('components.layout')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 md:py-32 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-primary/5 via-background to-background"></div>
        <div class="absolute top-0 right-0 w-1/2 h-full bg-[url('https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?q=80&w=2070&auto=format&fit=crop')] bg-cover bg-center opacity-10"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-2xl">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                How <span class="gradient-text">DriveNow</span> Works
            </h1>
            <p class="text-lg text-muted-foreground mb-8 text-lg leading-relaxed">
                Experience the seamless journey of renting your dream car. We've simplified the process to get you on the road faster.
            </p>
        </div>
    </div>
</section>

<!-- Steps Section -->
<section class="py-12 md:py-20">
    <div class="container mx-auto px-4">
        <div class="grid gap-12 lg:gap-24">
            <!-- Step 1 -->
            <div class="grid md:grid-cols-2 gap-8 items-center group">
                <div class="order-2 md:order-1 relative">
                    <div class="absolute inset-0 bg-primary/20 blur-3xl rounded-full opacity-20 group-hover:opacity-30 transition-opacity"></div>
                    <div class="relative rounded-2xl overflow-hidden border border-white/10 shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1485291571150-772bcfc10da5?q=80&w=2128&auto=format&fit=crop" alt="Search Cars" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-background/80 to-transparent"></div>
                        <div class="absolute bottom-6 left-6">
                            <i data-lucide="search" class="w-8 h-8 text-primary mb-2"></i>
                            <h3 class="text-xl font-bold">1. Browse & Select</h3>
                        </div>
                    </div>
                </div>
                <div class="order-1 md:order-2 space-y-6">
                    <div class="w-16 h-16 rounded-2xl bg-secondary flex items-center justify-center text-3xl font-bold text-primary">01</div>
                    <h2 class="text-3xl md:text-4xl font-bold">Find Your Perfect Ride</h2>
                    <p class="text-muted-foreground text-lg leading-relaxed">
                        Explore our extensive fleet of verified premium vehicles. Filter by category, price, fuel type, and transmission to find exactly what matches your needs. From compact hatchbacks for city runs to luxury SUVs for family trips, we have it all.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <i data-lucide="check-circle" class="w-5 h-5 text-primary"></i>
                            <span class="text-sm text-muted-foreground">Real-time availability updates</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check-circle" class="w-5 h-5 text-primary"></i>
                            <span class="text-sm text-muted-foreground">Detailed car specifications and photos</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check-circle" class="w-5 h-5 text-primary"></i>
                            <span class="text-sm text-muted-foreground">Transparent pricing per kilometer</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="grid md:grid-cols-2 gap-8 items-center group">
                <div class="space-y-6">
                    <div class="w-16 h-16 rounded-2xl bg-secondary flex items-center justify-center text-3xl font-bold text-primary">02</div>
                    <h2 class="text-3xl md:text-4xl font-bold">Book & Customize</h2>
                    <p class="text-muted-foreground text-lg leading-relaxed">
                        Select your pickup and drop-off dates, choose your location, and add optional extras like insurance cover, GPS navigation, or child seats. Our booking process is streamlined to take less than 2 minutes.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <i data-lucide="check-circle" class="w-5 h-5 text-primary"></i>
                            <span class="text-sm text-muted-foreground">Flexible rental durations</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check-circle" class="w-5 h-5 text-primary"></i>
                            <span class="text-sm text-muted-foreground">Instant fare estimation</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check-circle" class="w-5 h-5 text-primary"></i>
                            <span class="text-sm text-muted-foreground">Secure document upload</span>
                        </li>
                    </ul>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 bg-primary/20 blur-3xl rounded-full opacity-20 group-hover:opacity-30 transition-opacity"></div>
                    <div class="relative rounded-2xl overflow-hidden border border-white/10 shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1550355291-bbee04a92027?q=80&w=2072&auto=format&fit=crop" alt="Booking" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-background/80 to-transparent"></div>
                         <div class="absolute bottom-6 left-6">
                            <i data-lucide="calendar-check" class="w-8 h-8 text-primary mb-2"></i>
                            <h3 class="text-xl font-bold">2. Quick Booking</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="grid md:grid-cols-2 gap-8 items-center group">
                <div class="order-2 md:order-1 relative">
                    <div class="absolute inset-0 bg-primary/20 blur-3xl rounded-full opacity-20 group-hover:opacity-30 transition-opacity"></div>
                    <div class="relative rounded-2xl overflow-hidden border border-white/10 shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1617788138017-80ad40651399?q=80&w=2070&auto=format&fit=crop" alt="Enjoy Ride" class="w-full h-full object-cover">
                         <div class="absolute inset-0 bg-gradient-to-t from-background/80 to-transparent"></div>
                          <div class="absolute bottom-6 left-6">
                            <i data-lucide="key" class="w-8 h-8 text-primary mb-2"></i>
                            <h3 class="text-xl font-bold">3. Drive Away</h3>
                        </div>
                    </div>
                </div>
                <div class="order-1 md:order-2 space-y-6">
                    <div class="w-16 h-16 rounded-2xl bg-secondary flex items-center justify-center text-3xl font-bold text-primary">03</div>
                    <h2 class="text-3xl md:text-4xl font-bold">Pick Up & Enjoy</h2>
                    <p class="text-muted-foreground text-lg leading-relaxed">
                        Visit your selected pickup location, verify your ID, and get the keys. Complete a quick digital inspection, and you're ready to hit the road. Enjoy 24/7 roadside assistance throughout your journey.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <i data-lucide="check-circle" class="w-5 h-5 text-primary"></i>
                            <span class="text-sm text-muted-foreground">Digital key handover process</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check-circle" class="w-5 h-5 text-primary"></i>
                            <span class="text-sm text-muted-foreground">Clean and sanitized vehicles</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check-circle" class="w-5 h-5 text-primary"></i>
                            <span class="text-sm text-muted-foreground">Full tank fuel options</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAO Section -->
<section class="py-20 bg-card/50">
    <div class="container mx-auto px-4">
         <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Frequently Asked <span class="gradient-text">Questions</span>
            </h2>
            <p class="text-muted-foreground">
                Got questions? We've got answers.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
             <!-- FAQ Item -->
            <div x-data="{ open: false }" class="premium-card p-6 cursor-pointer" @click="open = !open">
                <div class="flex justify-between items-center">
                    <h3 class="font-semibold text-lg">What documents do I need?</h3>
                    <i data-lucide="chevron-down" class="w-5 h-5 transition-transform" :class="open ? 'rotate-180' : ''"></i>
                </div>
                <div x-show="open" class="mt-4 text-muted-foreground text-sm leading-relaxed animate-fade-in">
                    You need a valid Driving License, an ID proof (Aadhar/Passport/Voter ID), and a credit/debit card for the security deposit. International customers need an International Driving Permit (IDP).
                </div>
            </div>

            <div x-data="{ open: false }" class="premium-card p-6 cursor-pointer" @click="open = !open">
                <div class="flex justify-between items-center">
                    <h3 class="font-semibold text-lg">Is fuel included in the price?</h3>
                    <i data-lucide="chevron-down" class="w-5 h-5 transition-transform" :class="open ? 'rotate-180' : ''"></i>
                </div>
                <div x-show="open" class="mt-4 text-muted-foreground text-sm leading-relaxed animate-fade-in">
                     No, fuel is not included. The car is provided with a full tank (or specific level) and must be returned with the same level. A refueling charge plus convenience fee applies otherwise.
                </div>
            </div>

             <div x-data="{ open: false }" class="premium-card p-6 cursor-pointer" @click="open = !open">
                <div class="flex justify-between items-center">
                    <h3 class="font-semibold text-lg">What is the cancellation policy?</h3>
                    <i data-lucide="chevron-down" class="w-5 h-5 transition-transform" :class="open ? 'rotate-180' : ''"></i>
                </div>
                <div x-show="open" class="mt-4 text-muted-foreground text-sm leading-relaxed animate-fade-in">
                    Free cancellation up to 24 hours before the trip start time. 50% refund for cancellations between 24 hours and pickup time. No refund for no-shows or late cancellations.
                </div>
            </div>

            <div x-data="{ open: false }" class="premium-card p-6 cursor-pointer" @click="open = !open">
                <div class="flex justify-between items-center">
                    <h3 class="font-semibold text-lg">Is there a security deposit?</h3>
                    <i data-lucide="chevron-down" class="w-5 h-5 transition-transform" :class="open ? 'rotate-180' : ''"></i>
                </div>
                <div x-show="open" class="mt-4 text-muted-foreground text-sm leading-relaxed animate-fade-in">
                    Yes, a fully refundable security deposit is required. The amount varies by car category (₹3,000 - ₹10,000). It is refunded within 5-7 working days after the trip ends.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20">
    <div class="container mx-auto px-4 text-center">
        <div class="glass-card p-12 max-w-4xl mx-auto rounded-3xl relative overflow-hidden">
             <!-- Background Pattern -->
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0zNiAxOGMtNi42MjcgMC0xMiA1LjM3My0xMiAxMnM1LjM3MyAxMiAxMiAxMiAxMi01LjM3MyAxMi0xMi01LjM3My0xMi0xMi0xMnptMCAxOGMtMy4zMTQgMC02LTIuNjg2LTYtNnMyLjY4Ni02IDYtNiA2IDIuNjg2IDYgNi0yLjY4NiA2LTYgNnoiIGZpbGw9IiNmNTllMGIiIGZpbGwtb3BhY2l0eT0iLjA1Ii8+PC9nPjwvc3ZnPg==')] opacity-50"></div>
            
            <div class="relative z-10">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Start Your Journey?</h2>
                <p class="text-muted-foreground mb-8 max-w-lg mx-auto">
                    Book your premium car today and experience the difference.
                </p>
                <div class="flex justify-center gap-4">
                    <a href="{{ route('cars.index') }}" class="btn-glow px-8 py-4 rounded-xl font-bold text-primary-foreground flex items-center gap-2">
                        Browse Fleet
                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="//unpkg.com/alpinejs" defer></script>
@endsection
