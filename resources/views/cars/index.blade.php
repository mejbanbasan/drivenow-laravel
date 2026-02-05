@extends('components.layout')

@section('content')
<div class="container mx-auto px-4 pt-8 pb-16">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-3xl md:text-4xl font-bold mb-2">
            Browse Our <span class="gradient-text">Fleet</span>
        </h1>
        <p class="text-muted-foreground">
            Choose from {{ count($cars) }}+ verified vehicles across all categories
        </p>
    </div>

    <!-- Search & Filter Bar -->
    <div x-data="{ showFilters: false }" class="flex flex-col lg:flex-row gap-4 mb-8">
        <div class="relative flex-1">
            <i data-lucide="search" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground"></i>
            <input
                type="text"
                name="search"
                placeholder="Search by car name or brand..."
                class="pl-10 h-12 input-premium w-full rounded-lg bg-secondary/50 border border-white/10"
                value="{{ request('search') }}"
            />
        </div>
        
        <div class="flex gap-2">
            <button
                @click="showFilters = !showFilters"
                class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-secondary hover:bg-secondary/80 transition-colors"
                :class="showFilters ? 'bg-primary text-primary-foreground hover:bg-primary/90' : 'bg-secondary text-foreground'"
            >
                <i data-lucide="filter" class="w-4 h-4"></i>
                Filters
            </button>
            
            <div class="flex border border-white/10 rounded-lg overflow-hidden">
                <button class="p-3 bg-secondary hover:bg-secondary/80 transition-colors">
                    <i data-lucide="grid-3x3" class="w-4 h-4"></i>
                </button>
                <button class="p-3 hover:bg-secondary/80 transition-colors">
                    <i data-lucide="list" class="w-4 h-4"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Results Count -->
    <p class="text-sm text-muted-foreground mb-6">
        Showing {{ count($cars) }} of {{ count($cars) }} cars
    </p>

    <!-- Cars Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach($cars as $index => $car)
            <a
                href="{{ route('cars.show', $car['id']) }}"
                class="group premium-card overflow-hidden animate-fade-in block"
                style="animation-delay: {{ $index * 50 }}ms"
            >
                <!-- Image -->
                <div class="relative aspect-[4/3] overflow-hidden">
                    <img
                        src="{{ asset($car['image']) }}"
                        alt="{{ $car['name'] }}"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-card via-transparent to-transparent"></div>
                    
                    <div class="absolute top-3 left-3">
                        <span class="px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider bg-primary/20 text-primary border border-primary/30">
                            {{ $car['category'] }}
                        </span>
                    </div>

                    <button class="absolute top-3 right-3 w-9 h-9 rounded-full bg-background/80 backdrop-blur-sm flex items-center justify-center text-muted-foreground hover:text-destructive hover:bg-background transition-all">
                        <i data-lucide="heart" class="w-4 h-4"></i>
                    </button>
                </div>

                <!-- Content -->
                <div class="p-5">
                    <div>
                        <div class="flex items-center gap-1 mb-2">
                            <i data-lucide="star" class="w-4 h-4 text-primary fill-primary"></i>
                            <span class="text-sm font-medium">{{ $car['rating'] }}</span>
                            <span class="text-sm text-muted-foreground">({{ $car['reviewCount'] }})</span>
                        </div>

                        <h3 class="text-lg font-semibold mb-1 group-hover:text-primary transition-colors">
                            {{ $car['name'] }}
                        </h3>
                        <p class="text-sm text-muted-foreground mb-4">{{ $car['brand'] }} {{ $car['model'] }}</p>

                        <div class="flex items-center gap-4 mb-4 text-xs text-muted-foreground">
                            <div class="flex items-center gap-1">
                                <i data-lucide="users" class="w-4 h-4"></i>
                                <span>{{ $car['seats'] }}</span>
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
                    </div>

                    <div class="flex items-center justify-between pt-4 border-t border-white/5">
                        <div class="flex items-baseline gap-1">
                            <span class="text-primary text-sm font-medium">₹</span>
                            <span class="text-xl font-bold text-foreground">{{ $car['pricePerKm'] }}</span>
                            <span class="text-muted-foreground text-xs">/km</span>
                        </div>
                        <span class="px-4 py-2 rounded-lg text-sm font-medium bg-gradient-to-r from-primary to-amber-600 text-primary-foreground hover:opacity-90 transition-opacity cursor-pointer">
                            Book Now
                        </span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

    @if(count($cars) === 0)
        <div class="text-center py-16">
            <p class="text-xl font-semibold mb-2">No cars found</p>
            <p class="text-muted-foreground mb-4">Try adjusting your filters</p>
            <button class="px-4 py-2 rounded-lg bg-secondary hover:bg-secondary/80 transition-colors">
                Clear Filters
            </button>
        </div>
    @endif
</div>

<!-- Alpine.js for interactions -->
<script src="//unpkg.com/alpinejs" defer></script>
@endsection
