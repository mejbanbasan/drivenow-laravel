@extends('components.layout')

@section('content')
<div class="container mx-auto px-4 py-24">
    <!-- Breadcrumb -->
    <div class="flex items-center gap-2 text-sm text-muted-foreground mb-6">
        <a href="{{ route('cars.index') }}" class="hover:text-foreground transition-colors flex items-center gap-1">
            <i data-lucide="arrow-left" class="w-4 h-4"></i>
            Back to Cars
        </a>
        <span>/</span>
        <span>{{ $car['category'] }}</span>
        <span>/</span>
        <span class="text-foreground">{{ $car['name'] }}</span>
    </div>

    <div class="grid lg:grid-cols-3 gap-8">
        <!-- Left Column - Images & Details -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Main Image -->
            <div class="relative aspect-video rounded-2xl overflow-hidden premium-card">
                <img
                    src="{{ asset($car['image']) }}"
                    alt="{{ $car['name'] }}"
                    class="w-full h-full object-cover"
                />
                <div class="absolute top-4 left-4">
                    <span class="category-badge px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-primary/20 text-primary border border-primary/30">{{ $car['category'] }}</span>
                </div>
                <div class="absolute top-4 right-4 flex gap-2">
                    <button class="w-10 h-10 rounded-full bg-background/80 backdrop-blur-sm flex items-center justify-center text-muted-foreground hover:text-destructive transition-all">
                        <i data-lucide="heart" class="w-5 h-5"></i>
                    </button>
                    <button class="w-10 h-10 rounded-full bg-background/80 backdrop-blur-sm flex items-center justify-center text-muted-foreground hover:text-foreground transition-all">
                        <i data-lucide="share-2" class="w-5 h-5"></i>
                    </button>
                </div>
            </div>

            <!-- Car Info -->
            <div class="premium-card p-6">
                <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4 mb-6">
                    <div>
                        <div class="flex items-center gap-2 mb-2">
                            <i data-lucide="star" class="w-5 h-5 text-primary fill-primary"></i>
                            <span class="font-semibold">{{ $car['rating'] }}</span>
                            <span class="text-muted-foreground">({{ $car['reviewCount'] }} reviews)</span>
                        </div>
                        <h1 class="text-2xl md:text-3xl font-bold mb-1">{{ $car['name'] }}</h1>
                        <p class="text-muted-foreground">{{ $car['brand'] }} {{ $car['model'] }} • {{ $car['year'] }}</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm text-muted-foreground mb-1">Starting from</p>
                        <div class="flex items-baseline gap-1 justify-end">
                            <span class="text-primary text-2xl">₹</span>
                            <span class="text-4xl font-bold">{{ $car['pricePerKm'] }}</span>
                            <span class="text-muted-foreground">/km</span>
                        </div>
                        <p class="text-sm text-muted-foreground">+ ₹{{ $car['baseFare'] }} base fare</p>
                    </div>
                </div>

                <!-- Quick Specs -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 p-4 bg-secondary/50 rounded-xl mb-6">
                    <div class="text-center">
                        <i data-lucide="users" class="w-6 h-6 mx-auto mb-2 text-primary"></i>
                        <p class="text-sm text-muted-foreground">Seats</p>
                        <p class="font-semibold">{{ $car['seats'] }}</p>
                    </div>
                    <div class="text-center">
                        <i data-lucide="settings-2" class="w-6 h-6 mx-auto mb-2 text-primary"></i>
                        <p class="text-sm text-muted-foreground">Transmission</p>
                        <p class="font-semibold">{{ $car['transmission'] }}</p>
                    </div>
                    <div class="text-center">
                        <i data-lucide="fuel" class="w-6 h-6 mx-auto mb-2 text-primary"></i>
                        <p class="text-sm text-muted-foreground">Fuel Type</p>
                        <p class="font-semibold">{{ $car['fuelType'] }}</p>
                    </div>
                    <div class="text-center">
                        <i data-lucide="gauge" class="w-6 h-6 mx-auto mb-2 text-primary"></i>
                        <p class="text-sm text-muted-foreground">Mileage</p>
                        <p class="font-semibold">{{ $car['mileage'] }}</p>
                    </div>
                </div>

                <!-- Features -->
                <div>
                    <h3 class="font-semibold mb-4">Features & Amenities</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach($car['features'] as $feature)
                            <span class="feature-chip flex items-center gap-2 px-3 py-1.5 rounded-lg text-sm bg-secondary text-muted-foreground">
                                <i data-lucide="check" class="w-4 h-4 text-primary"></i>
                                {{ $feature }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Pricing Details -->
            <div class="premium-card p-6">
                <h3 class="font-semibold mb-4">Pricing Details</h3>
                <div class="space-y-3">
                    <div class="flex justify-between text-sm">
                        <span class="text-muted-foreground">Base Fare</span>
                        <span class="font-medium">₹{{ $car['baseFare'] }}</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-muted-foreground">Per Kilometer</span>
                        <span class="font-medium">₹{{ $car['pricePerKm'] }}/km</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-muted-foreground">Security Deposit (Refundable)</span>
                        <span class="font-medium">₹{{ number_format($car['securityDeposit']) }}</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-muted-foreground">GST</span>
                        <span class="font-medium">18%</span>
                    </div>
                </div>
                <div class="mt-4 p-3 bg-primary/10 rounded-lg border border-primary/20">
                    <p class="text-sm text-muted-foreground">
                        <strong class="text-foreground">Example:</strong> For a 100km trip: 
                        ₹{{ $car['baseFare'] }} + (100 × ₹{{ $car['pricePerKm'] }}) = ₹{{ $car['baseFare'] + 100 * $car['pricePerKm'] }} + GST
                    </p>
                </div>
            </div>
        </div>

        <!-- Right Column - Booking Widget -->
        <div class="lg:sticky lg:top-24 space-y-6 h-fit">
            <div class="premium-card p-6">
                <h3 class="font-semibold mb-6">Book This Car</h3>
                
                <form action="{{ route('booking.create', $car['id']) }}" method="GET">
                    <div class="space-y-4 mb-6">
                        <div class="relative">
                            <i data-lucide="map-pin" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground"></i>
                            <input
                                type="text"
                                name="pickupLocation"
                                placeholder="Pickup Location"
                                class="w-full h-12 pl-10 pr-4 rounded-lg input-premium bg-secondary border-white/10"
                            />
                        </div>
                        <div class="relative">
                            <i data-lucide="map-pin" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground"></i>
                            <input
                                type="text"
                                name="dropoffLocation"
                                placeholder="Drop-off Location"
                                class="w-full h-12 pl-10 pr-4 rounded-lg input-premium bg-secondary border-white/10"
                            />
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="relative">
                                <i data-lucide="calendar" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground"></i>
                                <input
                                    type="date"
                                    name="pickupDate"
                                    class="w-full h-12 pl-10 pr-4 rounded-lg input-premium bg-secondary border-white/10 [&::-webkit-calendar-picker-indicator]:invert"
                                />
                            </div>
                            <div class="relative">
                                <i data-lucide="calendar" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground"></i>
                                <input
                                    type="date"
                                    name="returnDate"
                                    class="w-full h-12 pl-10 pr-4 rounded-lg input-premium bg-secondary border-white/10 [&::-webkit-calendar-picker-indicator]:invert"
                                />
                            </div>
                        </div>
                    </div>

                    <!-- Add-ons -->
                    <div class="mb-6">
                        <h4 class="text-sm font-medium mb-3">Add-ons (Optional)</h4>
                        <div class="space-y-2">
                            @foreach([
                                ['name' => "Insurance Cover", 'price' => 500],
                                ['name' => "GPS Navigation", 'price' => 200],
                                ['name' => "Child Seat", 'price' => 150],
                                ['name' => "Additional Driver", 'price' => 300],
                            ] as $addon)
                                <label class="flex items-center justify-between p-3 bg-secondary/50 rounded-lg cursor-pointer hover:bg-secondary transition-colors">
                                    <div class="flex items-center gap-3">
                                        <input type="checkbox" name="addons[]" value="{{ $addon['name'] }}" class="w-4 h-4 accent-primary" />
                                        <span class="text-sm">{{ $addon['name'] }}</span>
                                    </div>
                                    <span class="text-sm text-muted-foreground">+₹{{ $addon['price'] }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <button type="submit" class="w-full h-12 btn-glow rounded-xl font-bold text-primary-foreground flex items-center justify-center gap-2 group">
                        Continue to Booking
                    </button>
                </form>
            </div>

            <!-- Trust Badges -->
            <div class="glass-card p-4">
                <div class="flex items-center gap-3 text-sm">
                    <i data-lucide="shield" class="w-5 h-5 text-primary"></i>
                    <div>
                        <p class="font-medium">100% Verified Vehicle</p>
                        <p class="text-xs text-muted-foreground">Inspected before every rental</p>
                    </div>
                </div>
            </div>

            <div class="glass-card p-4">
                <div class="flex items-center gap-3 text-sm">
                    <i data-lucide="zap" class="w-5 h-5 text-primary"></i>
                    <div>
                        <p class="font-medium">Instant Confirmation</p>
                        <p class="text-xs text-muted-foreground">Get booking confirmed in minutes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
