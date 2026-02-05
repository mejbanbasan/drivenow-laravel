@extends('components.layout')

@section('content')
<div class="min-h-screen bg-background relative overflow-hidden">
     <!-- Background decoration -->
    <div class="absolute top-0 right-0 w-1/3 h-full bg-primary/5 blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-1/3 h-full bg-blue-600/5 blur-3xl"></div>

    <div class="container mx-auto px-4 py-20 md:py-32 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-24 items-start">
            
            <!-- Contact Info -->
            <div>
                <span class="text-primary font-semibold tracking-wider text-sm uppercase mb-2 block animate-fade-in">Get in Touch</span>
                <h1 class="text-4xl md:text-5xl font-bold mb-6 animate-fade-in" style="animation-delay: 100ms">
                    Let's Start a <br> <span class="gradient-text">Conversation</span>
                </h1>
                <p class="text-muted-foreground text-lg mb-12 max-w-lg animate-fade-in" style="animation-delay: 200ms">
                    Have questions about booking, pricing, or partnerships? Our team is here to help you 24/7.
                </p>

                <div class="space-y-8 animate-fade-in" style="animation-delay: 300ms">
                    <!-- Address -->
                    <div class="flex items-start gap-4 p-4 rounded-2xl hover:bg-white/5 transition-colors">
                        <div class="w-12 h-12 rounded-xl bg-secondary flex items-center justify-center shrink-0">
                            <i data-lucide="map-pin" class="w-6 h-6 text-primary"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg mb-1">Visit Us</h3>
                            <p class="text-muted-foreground leading-relaxed">
                                123, Tech Plaza, Cyber City,<br>
                                Gurugram, Haryana 122002
                            </p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start gap-4 p-4 rounded-2xl hover:bg-white/5 transition-colors">
                         <div class="w-12 h-12 rounded-xl bg-secondary flex items-center justify-center shrink-0">
                            <i data-lucide="mail" class="w-6 h-6 text-primary"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg mb-1">Email Us</h3>
                            <p class="text-muted-foreground mb-1">support@drivenow.in</p>
                            <p class="text-muted-foreground">partnerships@drivenow.in</p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="flex items-start gap-4 p-4 rounded-2xl hover:bg-white/5 transition-colors">
                         <div class="w-12 h-12 rounded-xl bg-secondary flex items-center justify-center shrink-0">
                            <i data-lucide="phone" class="w-6 h-6 text-primary"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg mb-1">Call Us</h3>
                            <p class="text-muted-foreground mb-1">+91 1800-123-4567 (Toll Free)</p>
                            <p class="text-muted-foreground">+91 98765 43210 (Support)</p>
                        </div>
                    </div>
                </div>

                <!-- Socials -->
                <div class="mt-12 flex gap-4 animate-fade-in" style="animation-delay: 400ms">
                    @foreach(['facebook', 'twitter', 'instagram', 'linkedin'] as $social)
                        <a href="#" class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-muted-foreground hover:bg-primary hover:text-primary-foreground hover:border-primary transition-all">
                            <i data-lucide="{{ $social }}" class="w-5 h-5"></i>
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Contact Form -->
            <div class="premium-card p-8 md:p-10 animate-fade-in" style="animation-delay: 300ms">
                <h2 class="text-2xl font-bold mb-6">Send us a Message</h2>
                <form onsubmit="event.preventDefault(); alert('Message sent successfully!');" class="space-y-6">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-sm font-medium">First Name</label>
                            <input type="text" placeholder="John" class="w-full h-12 rounded-lg bg-secondary/50 border border-white/10 px-4 focus:border-primary/50 focus:ring-1 focus:ring-primary/50 outline-none transition-all">
                        </div>
                        <div class="space-y-2">
                             <label class="text-sm font-medium">Last Name</label>
                            <input type="text" placeholder="Doe" class="w-full h-12 rounded-lg bg-secondary/50 border border-white/10 px-4 focus:border-primary/50 focus:ring-1 focus:ring-primary/50 outline-none transition-all">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-medium">Email Address</label>
                        <input type="email" placeholder="john@example.com" class="w-full h-12 rounded-lg bg-secondary/50 border border-white/10 px-4 focus:border-primary/50 focus:ring-1 focus:ring-primary/50 outline-none transition-all">
                    </div>

                    <div class="space-y-2">
                         <label class="text-sm font-medium">Subject</label>
                         <select class="w-full h-12 rounded-lg bg-secondary/50 border border-white/10 px-4 focus:border-primary/50 focus:ring-1 focus:ring-primary/50 outline-none transition-all appearance-none">
                            <option>General Inquiry</option>
                            <option>Booking Issue</option>
                            <option>Feedback</option>
                            <option>Partnership</option>
                         </select>
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-medium">Message</label>
                        <textarea rows="4" placeholder="How can we help you?" class="w-full rounded-lg bg-secondary/50 border border-white/10 p-4 focus:border-primary/50 focus:ring-1 focus:ring-primary/50 outline-none transition-all resize-none"></textarea>
                    </div>

                    <button type="submit" class="w-full btn-glow h-14 rounded-xl font-bold text-primary-foreground text-lg shadow-lg hover:shadow-primary/25 transition-all">
                        Send Message
                    </button>
                    
                    <p class="text-xs text-center text-muted-foreground mt-4">
                        By sending this message, you agree to our <a href="#" class="text-primary hover:underline">Privacy Policy</a>.
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
