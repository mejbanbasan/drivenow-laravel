@extends('components.layout')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 md:py-32 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-primary/5 via-background to-background"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10 text-center">
        <span class="inline-block px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-semibold mb-6 border border-primary/20">Our Story</span>
        <h1 class="text-4xl md:text-6xl font-bold mb-6 max-w-4xl mx-auto">
            Redefining Mobility for <span class="gradient-text">Modern India</span>
        </h1>
        <p class="text-lg text-muted-foreground max-w-2xl mx-auto leading-relaxed">
            DriveNow isn't just a car rental company. We are a technology-driven mobility platform dedicated to making personal transportation accessible, affordable, and luxurious.
        </p>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-12 md:py-20">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="relative">
                <div class="absolute -inset-4 bg-gradient-to-r from-primary/30 to-purple-600/30 blur-3xl rounded-full opacity-30"></div>
                <div class="relative rounded-2xl overflow-hidden premium-card">
                    <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?q=80&w=2070&auto=format&fit=crop" alt="Our Mission" class="w-full h-full object-cover">
                </div>
            </div>
            <div class="space-y-8">
                <div>
                    <h2 class="text-3xl font-bold mb-4">Our Mission</h2>
                    <p class="text-muted-foreground leading-relaxed">
                        To empower people to travel with freedom and dignity. We believe everyone deserves the joy of driving a premium vehicle without the burdens of ownership. We strive to provide transparent, reliable, and safe transportation solutions.
                    </p>
                </div>
                 <div>
                    <h2 class="text-3xl font-bold mb-4">Our Vision</h2>
                    <p class="text-muted-foreground leading-relaxed">
                        To become India's most loved experiential mobility brand, known for our obsession with customer happiness, technological innovation, and sustainable practices.
                    </p>
                </div>
                 <div class="grid grid-cols-2 gap-4 pt-4">
                    <div class="glass-card p-4 text-center">
                        <p class="text-3xl font-bold text-primary mb-1">5+</p>
                        <p class="text-xs text-muted-foreground">Years of Service</p>
                    </div>
                     <div class="glass-card p-4 text-center">
                        <p class="text-3xl font-bold text-primary mb-1">1M+</p>
                        <p class="text-xs text-muted-foreground">Kilometers Driven</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values -->
<section class="py-20 bg-card/50">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Core Values</h2>
            <p class="text-muted-foreground">The principles that drive us forward every day.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="premium-card p-8">
                <div class="w-12 h-12 rounded-xl bg-primary/20 flex items-center justify-center mb-6">
                    <i data-lucide="shield-check" class="w-6 h-6 text-primary"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Trust & Safety</h3>
                <p class="text-muted-foreground text-sm leading-relaxed">
                    Safety is non-negotiable. Our vehicles undergo a 40-point quality check before every trip, and we provide 24/7 roadside support.
                </p>
            </div>
             <div class="premium-card p-8">
                <div class="w-12 h-12 rounded-xl bg-primary/20 flex items-center justify-center mb-6">
                    <i data-lucide="heart-handshake" class="w-6 h-6 text-primary"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Customer Obsession</h3>
                <p class="text-muted-foreground text-sm leading-relaxed">
                    We don't just rent cars; we curate experiences. From booking to drop-off, every interaction is designed to delight you.
                </p>
            </div>
             <div class="premium-card p-8">
                <div class="w-12 h-12 rounded-xl bg-primary/20 flex items-center justify-center mb-6">
                    <i data-lucide="zap" class="w-6 h-6 text-primary"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Innovation</h3>
                <p class="text-muted-foreground text-sm leading-relaxed">
                    We leverage technology to simplify mobility. Keyless entry, automated health monitoring, and AI-driven pricing are just the start.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Team (Compact) -->
<section class="py-20">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Meet the Leadership</h2>
        </div>
        <div class="grid md:grid-cols-4 gap-8">
            <!-- Member 1 -->
            <div class="group text-center">
                <div class="relative w-48 h-48 mx-auto mb-4 rounded-full overflow-hidden border-2 border-primary/20 group-hover:border-primary transition-colors">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=256&auto=format&fit=crop" alt="CEO" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg">Arjun Mehta</h3>
                <p class="text-primary text-sm">Founder & CEO</p>
            </div>
             <!-- Member 2 -->
             <div class="group text-center">
                <div class="relative w-48 h-48 mx-auto mb-4 rounded-full overflow-hidden border-2 border-primary/20 group-hover:border-primary transition-colors">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=256&auto=format&fit=crop" alt="COO" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg">Zara Khan</h3>
                <p class="text-primary text-sm">Head of Operations</p>
            </div>
             <!-- Member 3 -->
             <div class="group text-center">
                <div class="relative w-48 h-48 mx-auto mb-4 rounded-full overflow-hidden border-2 border-primary/20 group-hover:border-primary transition-colors">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=256&auto=format&fit=crop" alt="CTO" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg">Vikram Singh</h3>
                <p class="text-primary text-sm">Chief Technology Officer</p>
            </div>
             <!-- Member 4 -->
             <div class="group text-center">
                <div class="relative w-48 h-48 mx-auto mb-4 rounded-full overflow-hidden border-2 border-primary/20 group-hover:border-primary transition-colors">
                    <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=256&auto=format&fit=crop" alt="CMO" class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-lg">Priya Desai</h3>
                <p class="text-primary text-sm">Head of Marketing</p>
            </div>
        </div>
    </div>
</section>
@endsection
