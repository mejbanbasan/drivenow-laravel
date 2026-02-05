@extends('components.layout')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center pt-20">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img
            src="{{ asset('hero-car.jpg') }}"
            alt="Luxury Car"
            class="w-full h-full object-cover object-center"
        />
        <div class="absolute inset-0 bg-gradient-to-r from-background via-background/95 to-background/50"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="space-y-8">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 border border-primary/20">
                    <i data-lucide="shield" class="w-4 h-4 text-primary"></i>
                    <span class="text-sm font-medium text-primary">100% Verified Cars</span>
                </div>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                    Premium Car Rentals at <span class="gradient-text">₹8/km</span>
                </h1>

                <p class="text-lg text-muted-foreground max-w-lg">
                    Experience the freedom of the road with India's most trusted car rental service. 
                    Transparent pricing, verified vehicles, and 24/7 support.
                </p>

                <!-- Search Widget -->
                <div class="search-widget max-w-xl p-6 md:p-8 glass-card rounded-2xl shadow-2xl">
                    <form action="{{ route('cars.index') }}" method="GET" class="grid gap-4">
                        <div class="relative">
                            <i data-lucide="map-pin" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground"></i>
                            <input
                                type="text"
                                name="location"
                                placeholder="Pickup Location"
                                class="w-full pl-10 h-12 input-premium rounded-xl bg-secondary/50 border border-white/10 text-foreground placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary/50"
                            />
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="relative">
                                <i data-lucide="calendar" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground"></i>
                                <input
                                    type="date"
                                    name="pickup"
                                    class="w-full pl-10 h-12 input-premium rounded-xl bg-secondary/50 border border-white/10 text-foreground focus:outline-none focus:ring-2 focus:ring-primary/50 [&::-webkit-calendar-picker-indicator]:invert"
                                />
                            </div>
                            <div class="relative">
                                <i data-lucide="calendar" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground"></i>
                                <input
                                    type="date"
                                    name="return"
                                    class="w-full pl-10 h-12 input-premium rounded-xl bg-secondary/50 border border-white/10 text-foreground focus:outline-none focus:ring-2 focus:ring-primary/50 [&::-webkit-calendar-picker-indicator]:invert"
                                />
                            </div>
                        </div>

                        <button
                            type="submit"
                            class="w-full h-14 btn-glow rounded-xl font-bold text-lg text-primary-foreground flex items-center justify-center gap-2 group"
                        >
                            <i data-lucide="search" class="w-5 h-5"></i>
                            Search Available Cars
                            <i data-lucide="arrow-right" class="w-5 h-5 transition-transform group-hover:translate-x-1"></i>
                        </button>
                    </form>
                </div>

                <!-- Trust Badges -->
                <div class="flex flex-wrap items-center gap-6 text-sm text-muted-foreground">
                    <div class="flex items-center gap-2">
                        <i data-lucide="shield" class="w-4 h-4 text-primary"></i>
                        <span>Fully Insured</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i data-lucide="clock" class="w-4 h-4 text-primary"></i>
                        <span>24/7 Support</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i data-lucide="star" class="w-4 h-4 text-primary"></i>
                        <span>4.8 Rating</span>
                    </div>
                </div>
            </div>

            <!-- Right Content - Stats -->
            <div class="hidden lg:block">
                <div class="grid grid-cols-2 gap-4">
                    @php
                        $stats = [
                            ['value' => "10K+", 'label' => "Happy Customers", 'icon' => null],
                            ['value' => "500+", 'label' => "Premium Cars", 'icon' => null],
                            ['value' => "50+", 'label' => "Locations", 'icon' => null],
                            ['value' => "4.8", 'label' => "Rating", 'icon' => "star"],
                        ];
                    @endphp
                    @foreach($stats as $index => $stat)
                        <div
                            class="premium-card p-6 text-center stat-item relative overflow-hidden group hover:-translate-y-1 transition-all duration-300"
                            style="animation-delay: {{ $index * 100 }}ms"
                        >
                            <div class="flex items-center justify-center gap-1 mb-2">
                                <span class="text-3xl font-bold gradient-text">{{ $stat['value'] }}</span>
                                @if($stat['icon'])
                                    <i data-lucide="{{ $stat['icon'] }}" class="w-5 h-5 text-primary fill-primary"></i>
                                @endif
                            </div>
                            <p class="text-sm text-muted-foreground">{{ $stat['label'] }}</p>
                            
                            <!-- Shimmer Effect -->
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/5 to-transparent -translate-x-full group-hover:animate-[shimmer_1.5s_infinite]"></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Cars Section -->
<section class="py-20 md:py-28">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-12">
            <div>
                <p class="text-primary font-semibold mb-2">Our Fleet</p>
                <h2 class="text-3xl md:text-4xl font-bold">
                    Featured <span class="gradient-text">Premium Cars</span>
                </h2>
                <p class="text-muted-foreground mt-2 max-w-lg">
                    Handpicked selection of our finest vehicles for an exceptional driving experience.
                </p>
            </div>
            <a href="{{ route('cars.index') }}" class="btn-glow inline-flex items-center gap-2 px-6 py-3 rounded-xl font-medium text-primary-foreground hover:bg-amber-600 transition-colors">
                View All Cars
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
        </div>

        <!-- Cars Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach(array_slice(array_filter($cars, function($c) { return isset($c['isFeatured']) && $c['isFeatured']; }), 0, 4) as $index => $car)
                <a
                    href="{{ route('cars.show', $car['id']) }}"
                    class="group premium-card overflow-hidden animate-fade-in block"
                    style="animation-delay: {{ $index * 100 }}ms"
                >
                    <!-- Image -->
                    <div class="relative aspect-[4/3] overflow-hidden">
                        <img
                            src="{{ asset($car['image']) }}"
                            alt="{{ $car['name'] }}"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-card via-transparent to-transparent"></div>
                        
                        <!-- Category Badge -->
                        <div class="absolute top-3 left-3">
                            <span class="px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-primary/20 text-primary border border-primary/30">{{ $car['category'] }}</span>
                        </div>

                        <!-- Favorite Button -->
                        <button class="absolute top-3 right-3 w-9 h-9 rounded-full bg-background/80 backdrop-blur-sm flex items-center justify-center text-muted-foreground hover:text-destructive hover:bg-background transition-all">
                            <i data-lucide="heart" class="w-4 h-4"></i>
                        </button>
                    </div>

                    <!-- Content -->
                    <div class="p-5">
                        <!-- Rating -->
                        <div class="flex items-center gap-1 mb-2">
                            <i data-lucide="star" class="w-4 h-4 text-primary fill-primary"></i>
                            <span class="text-sm font-medium">{{ $car['rating'] }}</span>
                            <span class="text-sm text-muted-foreground">
                                ({{ $car['reviewCount'] }} reviews)
                            </span>
                        </div>

                        <!-- Name -->
                        <h3 class="text-lg font-semibold mb-1 group-hover:text-primary transition-colors">
                            {{ $car['name'] }}
                        </h3>
                        <p class="text-sm text-muted-foreground mb-4">{{ $car['brand'] }} {{ $car['model'] }}</p>

                        <!-- Features -->
                        <div class="flex items-center gap-4 mb-4 text-xs text-muted-foreground">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-4 h-4"></i>
                                <span>{{ $car['seats'] }} Seats</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="settings-2" class="w-4 h-4"></i>
                                <span>{{ $car['transmission'] }}</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i data-lucide="fuel" class="w-4 h-4"></i>
                                <span>{{ $car['fuelType'] }}</span>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="flex items-center justify-between pt-4 border-t border-white/5">
                            <div class="flex items-baseline gap-1">
                                <span class="text-primary text-lg font-medium">₹</span>
                                <span class="text-2xl font-bold text-foreground">{{ $car['pricePerKm'] }}</span>
                                <span class="text-muted-foreground text-sm">/km</span>
                            </div>
                            <span class="bg-primary text-primary-foreground px-4 py-2 rounded-lg text-sm font-medium hover:bg-amber-600 transition-colors">
                                Book Now
                            </span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="py-20 md:py-28 bg-card/50">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto mb-16">
            <p class="text-primary font-semibold mb-2">Simple Process</p>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                How <span class="gradient-text">DriveNow</span> Works
            </h2>
            <p class="text-muted-foreground">
                Renting a car has never been easier. Follow these simple steps to get on the road.
            </p>
        </div>

        <!-- Steps -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            @php
                $steps = [
                    ['icon' => 'search', 'title' => "Search & Compare", 'description' => "Browse our extensive fleet of verified vehicles. Filter by category, features, and price to find your perfect match."],
                    ['icon' => 'calendar', 'title' => "Book Your Trip", 'description' => "Select your pickup and drop-off dates, choose add-ons like GPS or insurance, and review transparent pricing."],
                    ['icon' => 'credit-card', 'title' => "Secure Payment", 'description' => "Pay securely with multiple options including UPI, cards, and net banking. Get instant booking confirmation."],
                    ['icon' => 'car', 'title' => "Enjoy Your Ride", 'description' => "Pick up your car from your chosen location and enjoy the journey. 24/7 roadside assistance included."],
                ];
            @endphp
            @foreach($steps as $index => $step)
                <div class="relative text-center group animate-fade-in" style="animation-delay: {{ $index * 100 }}ms">
                    <!-- Connector Line -->
                    @if($index < count($steps) - 1)
                        <div class="hidden lg:block absolute top-12 left-1/2 w-full h-0.5 bg-gradient-to-r from-primary/50 to-transparent"></div>
                    @endif

                    <!-- Step Number -->
                    <div class="relative inline-block mb-6">
                        <div class="w-24 h-24 rounded-2xl bg-secondary flex items-center justify-center group-hover:bg-primary/10 transition-all duration-500">
                            <i data-lucide="{{ $step['icon'] }}" class="w-10 h-10 text-primary"></i>
                        </div>
                        <span class="absolute -top-2 -right-2 w-8 h-8 rounded-full bg-primary text-primary-foreground text-sm font-bold flex items-center justify-center">
                            {{ $index + 1 }}
                        </span>
                    </div>

                    <!-- Content -->
                    <h3 class="text-lg font-semibold mb-2">{{ $step['title'] }}</h3>
                    <p class="text-sm text-muted-foreground leading-relaxed">
                        {{ $step['description'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-20 md:py-28">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto mb-16">
            <p class="text-primary font-semibold mb-2">Why DriveNow</p>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                The <span class="gradient-text">Smart Choice</span> for Car Rentals
            </h2>
            <p class="text-muted-foreground">
                Join thousands of satisfied customers who trust DriveNow for their travel needs.
            </p>
        </div>

        <!-- Features Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $features = [
                    ['icon' => 'wallet', 'title' => "Transparent Pricing", 'description' => "No hidden charges. Pay only for kilometers driven plus a minimal base fare."],
                    ['icon' => 'shield', 'title' => "Fully Insured", 'description' => "All our vehicles come with comprehensive insurance for your peace of mind."],
                    ['icon' => 'clock', 'title' => "Flexible Booking", 'description' => "Book for hours, days, or weeks. Modify or cancel with ease."],
                    ['icon' => 'map-pin', 'title' => "Multiple Locations", 'description' => "Pick up and drop off at convenient locations across major cities."],
                    ['icon' => 'headphones', 'title' => "24/7 Support", 'description' => "Round-the-clock customer support and roadside assistance."],
                    ['icon' => 'award', 'title' => "Verified Vehicles", 'description' => "Every car undergoes rigorous inspection before each rental."],
                ];
            @endphp
            @foreach($features as $index => $feature)
                <div class="premium-card p-6 group animate-fade-in" style="animation-delay: {{ $index * 100 }}ms">
                    <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
                        <i data-lucide="{{ $feature['icon'] }}" class="w-7 h-7 text-primary"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">{{ $feature['title'] }}</h3>
                    <p class="text-sm text-muted-foreground leading-relaxed">
                        {{ $feature['description'] }}
                    </p>
                </div>
            @endforeach
        </div>

        <!-- Stats Banner -->
        <div class="mt-16 glass-card p-8 md:p-12">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <p class="text-4xl md:text-5xl font-bold gradient-text mb-2">10K+</p>
                    <p class="text-muted-foreground">Happy Customers</p>
                </div>
                <div>
                    <p class="text-4xl md:text-5xl font-bold gradient-text mb-2">500+</p>
                    <p class="text-muted-foreground">Premium Vehicles</p>
                </div>
                <div>
                    <p class="text-4xl md:text-5xl font-bold gradient-text mb-2">50+</p>
                    <p class="text-muted-foreground">Cities Covered</p>
                </div>
                <div>
                    <p class="text-4xl md:text-5xl font-bold gradient-text mb-2">98%</p>
                    <p class="text-muted-foreground">Satisfaction Rate</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 md:py-28 bg-card/50">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto mb-16">
            <p class="text-primary font-semibold mb-2">Testimonials</p>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                What Our <span class="gradient-text">Customers Say</span>
            </h2>
            <p class="text-muted-foreground">
                Real experiences from real travelers across India.
            </p>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid md:grid-cols-3 gap-6">
            @php
                $testimonials = [
                    [
                        'id' => 1,
                        'name' => "Rajesh Kumar",
                        'role' => "Business Traveler",
                        'avatar' => "RK",
                        'rating' => 5,
                        'text' => "DriveNow made my Mumbai trip seamless. The car was in pristine condition, and the per-km pricing saved me a lot compared to traditional rentals.",
                        'location' => "Mumbai",
                    ],
                    [
                        'id' => 2,
                        'name' => "Priya Sharma",
                        'role' => "Family Trip",
                        'avatar' => "PS",
                        'rating' => 5,
                        'text' => "Booked a Fortuner for our Bangalore to Coorg trip. Amazing vehicle, transparent pricing, and the booking process was incredibly smooth!",
                        'location' => "Bangalore",
                    ],
                    [
                        'id' => 3,
                        'name' => "Amit Patel",
                        'role' => "Weekend Explorer",
                        'avatar' => "AP",
                        'rating' => 5,
                        'text' => "Best car rental experience! The GPS feature and 24/7 support gave us complete peace of mind during our road trip.",
                        'location' => "Delhi",
                    ],
                ];
            @endphp
            @foreach($testimonials as $index => $testimonial)
                <div class="premium-card p-6 relative animate-fade-in" style="animation-delay: {{ $index * 100 }}ms">
                    <!-- Quote Icon -->
                    <i data-lucide="quote" class="absolute top-6 right-6 w-8 h-8 text-primary/20"></i>

                    <!-- Rating -->
                    <div class="flex items-center gap-1 mb-4">
                        @for($i = 0; $i < $testimonial['rating']; $i++)
                            <i data-lucide="star" class="w-4 h-4 text-primary fill-primary"></i>
                        @endfor
                    </div>

                    <!-- Text -->
                    <p class="text-muted-foreground mb-6 leading-relaxed">
                        "{{ $testimonial['text'] }}"
                    </p>

                    <!-- Author -->
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-primary/20 flex items-center justify-center text-primary font-semibold">
                            {{ $testimonial['avatar'] }}
                        </div>
                        <div>
                            <p class="font-semibold">{{ $testimonial['name'] }}</p>
                            <p class="text-sm text-muted-foreground">
                                {{ $testimonial['role'] }} • {{ $testimonial['location'] }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 md:py-28">
    <div class="container mx-auto px-4">
        <div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-primary/20 via-primary/10 to-transparent p-8 md:p-16">
            <!-- Background Pattern -->
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0zNiAxOGMtNi42MjcgMC0xMiA1LjM3My0xMiAxMnM1LjM3MyAxMiAxMiAxMiAxMi01LjM3MyAxMi0xMi01LjM3My0xMi0xMi0xMnptMCAxOGMtMy4zMTQgMC02LTIuNjg2LTYtNnMyLjY4Ni02IDYtNiA2IDIuNjg2IDYgNi0yLjY4NiA2LTYgNnoiIGZpbGw9IiNmNTllMGIiIGZpbGwtb3BhY2l0eT0iLjA1Ii8+PC9nPjwvc3ZnPg==')] opacity-50"></div>
            
            <div class="relative grid lg:grid-cols-2 gap-8 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">
                        Ready to Hit the Road?
                    </h2>
                    <p class="text-lg text-muted-foreground mb-8 max-w-lg">
                        Book your dream car today and experience the freedom of the open road. 
                        Starting at just ₹8/km with no hidden charges.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('cars.index') }}" class="btn-glow inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl font-bold text-lg text-primary-foreground hover:scale-[1.02] transition-transform">
                            Browse Cars
                            <i data-lucide="arrow-right" class="w-5 h-5"></i>
                        </a>
                        <a href="tel:+911800123456" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl font-bold text-lg bg-white/5 backdrop-blur-xl border border-white/10 hover:bg-white/10 transition-colors">
                            <i data-lucide="phone" class="w-5 h-5"></i>
                            Call Us Now
                        </a>
                    </div>
                </div>

                <div class="hidden lg:block">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-4">
                            <div class="glass-card p-4">
                                <p class="text-sm text-muted-foreground mb-1">Starting from</p>
                                <p class="text-2xl font-bold">₹8<span class="text-sm font-normal text-muted-foreground">/km</span></p>
                            </div>
                            <div class="glass-card p-4">
                                <p class="text-sm text-muted-foreground mb-1">Available Cars</p>
                                <p class="text-2xl font-bold">500+</p>
                            </div>
                        </div>
                        <div class="space-y-4 mt-8">
                            <div class="glass-card p-4">
                                <p class="text-sm text-muted-foreground mb-1">Cities</p>
                                <p class="text-2xl font-bold">50+</p>
                            </div>
                            <div class="glass-card p-4">
                                <p class="text-sm text-muted-foreground mb-1">Customer Rating</p>
                                <p class="text-2xl font-bold">4.8 ★</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
