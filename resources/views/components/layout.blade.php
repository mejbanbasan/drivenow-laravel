<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DriveNow - Premium Car Rental</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                container: {
                    center: true,
                    padding: "2rem",
                    screens: {
                        "2xl": "1400px",
                    },
                },
                extend: {
                    colors: {
                        background: "hsl(222 47% 5%)",
                        foreground: "hsl(210 40% 98%)",
                        card: "hsl(222 47% 8%)",
                        "card-foreground": "hsl(210 40% 98%)",
                        popover: "hsl(222 47% 8%)",
                        "popover-foreground": "hsl(210 40% 98%)",
                        primary: "hsl(38 92% 50%)",
                        "primary-foreground": "hsl(222 47% 5%)",
                        secondary: "hsl(217 33% 17%)",
                        "secondary-foreground": "hsl(210 40% 98%)",
                        muted: "hsl(217 33% 17%)",
                        "muted-foreground": "hsl(215 20% 65%)",
                        accent: "hsl(217 33% 17%)",
                        "accent-foreground": "hsl(210 40% 98%)",
                        destructive: "hsl(0 84% 60%)",
                        "destructive-foreground": "hsl(210 40% 98%)",
                        border: "hsl(217 33% 17%)",
                        input: "hsl(217 33% 17%)",
                        ring: "hsl(38 92% 50%)",
                    },
                    borderRadius: {
                        lg: "0.75rem",
                        md: "calc(0.75rem - 2px)",
                        sm: "calc(0.75rem - 4px)",
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer base {
            * {
                @apply border-border;
            }
            body {
                @apply bg-background text-foreground antialiased;
                font-feature-settings: "rlig" 1, "calt" 1;
            }
        }
        
        @layer components {
            .glass {
                @apply bg-white/5 backdrop-blur-xl border border-white/10;
            }
            .glass-card {
                background: linear-gradient(135deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.05) 100%);
                @apply backdrop-blur-xl border border-white/10 rounded-2xl;
            }
            .premium-card {
                background: linear-gradient(145deg, hsl(222 47% 10%) 0%, hsl(222 47% 6%) 100%);
                @apply rounded-2xl border border-white/5 shadow-xl transition-all duration-500;
            }
            .premium-card:hover {
                @apply border-primary/30 -translate-y-1;
                box-shadow: 0 0 40px -10px hsl(38 92% 50% / 0.3);
            }
            .btn-glow {
                background: linear-gradient(135deg, hsl(38 92% 50%) 0%, hsl(32 95% 44%) 100%);
                box-shadow: 0 10px 30px -10px hsl(38 92% 50% / 0.5);
                @apply transition-all duration-300;
            }
            .btn-glow:hover {
                box-shadow: 0 15px 40px -10px hsl(38 92% 50% / 0.6);
                @apply scale-[1.02];
            }
            .gradient-text {
                @apply bg-clip-text text-transparent bg-gradient-to-r from-primary to-amber-300;
            }
            .input-premium {
                @apply bg-secondary/50 border-white/10 focus:border-primary/50 focus:ring-2 focus:ring-primary/20 transition-all duration-300;
            }
        }
    </style>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="min-h-screen flex flex-col relative">
    <!-- Navbar -->
    <nav class="fixed top-0 left-0 right-0 z-[100] glass">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16 md:h-20">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary to-amber-400 flex items-center justify-center transition-transform group-hover:scale-110">
                        <i data-lucide="car" class="w-5 h-5 text-primary-foreground"></i>
                    </div>
                    <span class="text-xl font-bold tracking-tight">
                        Drive<span class="text-primary">Now</span>
                    </span>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center gap-8">
                    <a href="{{ route('home') }}" class="text-sm font-medium transition-colors relative py-2 {{ request()->routeIs('home') ? 'text-primary' : 'text-muted-foreground hover:text-foreground' }}">
                        Home
                        @if(request()->routeIs('home'))
                            <span class="absolute bottom-0 left-0 right-0 h-0.5 bg-primary rounded-full"></span>
                        @endif
                    </a>
                    <a href="{{ route('cars.index') }}" class="text-sm font-medium transition-colors relative py-2 {{ request()->routeIs('cars.*') ? 'text-primary' : 'text-muted-foreground hover:text-foreground' }}">
                        Browse Cars
                        @if(request()->routeIs('cars.*'))
                            <span class="absolute bottom-0 left-0 right-0 h-0.5 bg-primary rounded-full"></span>
                        @endif
                    </a>
                    <a href="{{ route('how-it-works') }}" class="text-sm font-medium transition-colors relative py-2 {{ request()->routeIs('how-it-works') ? 'text-primary' : 'text-muted-foreground hover:text-foreground' }}">
                        How It Works
                        @if(request()->routeIs('how-it-works'))
                            <span class="absolute bottom-0 left-0 right-0 h-0.5 bg-primary rounded-full"></span>
                        @endif
                    </a>
                    <a href="{{ route('about') }}" class="text-sm font-medium transition-colors relative py-2 {{ request()->routeIs('about') ? 'text-primary' : 'text-muted-foreground hover:text-foreground' }}">
                        About
                        @if(request()->routeIs('about'))
                            <span class="absolute bottom-0 left-0 right-0 h-0.5 bg-primary rounded-full"></span>
                        @endif
                    </a>
                    <a href="{{ route('contact') }}" class="text-sm font-medium transition-colors relative py-2 {{ request()->routeIs('contact') ? 'text-primary' : 'text-muted-foreground hover:text-foreground' }}">
                        Contact
                        @if(request()->routeIs('contact'))
                            <span class="absolute bottom-0 left-0 right-0 h-0.5 bg-primary rounded-full"></span>
                        @endif
                    </a>
                </div>

                <!-- Desktop Actions -->
                <div class="hidden lg:flex items-center gap-3">
                    <button class="relative p-2 hover:bg-secondary rounded-lg transition-colors">
                        <i data-lucide="heart" class="w-5 h-5 text-muted-foreground"></i>
                    </button>
                    <button class="relative p-2 hover:bg-secondary rounded-lg transition-colors">
                        <i data-lucide="bell" class="w-5 h-5 text-muted-foreground"></i>
                        <span class="absolute top-1 right-1 w-2 h-2 bg-primary rounded-full"></span>
                    </button>
                    <a href="{{ route('login') }}" class="flex items-center gap-2 px-4 py-2 hover:bg-secondary rounded-lg transition-colors text-sm font-medium">
                        <i data-lucide="user" class="w-4 h-4"></i>
                        Sign In
                    </a>
                    <a href="{{ route('register') }}" class="bg-primary text-primary-foreground hover:bg-amber-600 px-4 py-2 rounded-lg text-sm font-medium transition-colors btn-glow">
                        Get Started
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="lg:hidden p-2 hover:bg-secondary rounded-lg transition-colors" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <i data-lucide="menu" class="w-6 h-6 text-foreground"></i>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="hidden lg:hidden py-4 border-t border-white/10 animate-fade-in bg-background/95 backdrop-blur-xl absolute left-0 right-0 px-4 border-b border-white/10">
                <div class="flex flex-col gap-2">
                    <a href="{{ route('home') }}" class="px-4 py-3 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('home') ? 'bg-primary/10 text-primary' : 'text-muted-foreground hover:bg-secondary' }}">
                        Home
                    </a>
                    <a href="{{ route('cars.index') }}" class="px-4 py-3 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('cars.*') ? 'bg-primary/10 text-primary' : 'text-muted-foreground hover:bg-secondary' }}">
                        Browse Cars
                    </a>
                    <div class="flex gap-2 mt-4">
                        <a href="{{ route('login') }}" class="flex-1 text-center border border-input bg-background hover:bg-accent hover:text-accent-foreground px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                            Sign In
                        </a>
                        <a href="{{ route('register') }}" class="flex-1 text-center bg-primary text-primary-foreground hover:bg-amber-600 px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow pt-16 md:pt-20 flex flex-col relative z-0 w-full">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-card border-t border-white/5 relative z-10">
        <div class="container mx-auto px-4 py-12 md:py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 lg:gap-12">
                <!-- Brand -->
                <div class="lg:col-span-2">
                    <a href="{{ route('home') }}" class="flex items-center gap-2 mb-4">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary to-amber-400 flex items-center justify-center">
                            <i data-lucide="car" class="w-5 h-5 text-primary-foreground"></i>
                        </div>
                        <span class="text-xl font-bold">
                            Drive<span class="text-primary">Now</span>
                        </span>
                    </a>
                    <p class="text-muted-foreground text-sm mb-6 max-w-sm">
                        India's most trusted car rental platform. Book premium vehicles at affordable rates with transparent pricing per kilometer.
                    </p>
                    <div class="space-y-3 text-sm text-muted-foreground">
                        <div class="flex items-center gap-3">
                            <i data-lucide="phone" class="w-4 h-4 text-primary"></i>
                            <span>+91 1800-123-4567</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i data-lucide="mail" class="w-4 h-4 text-primary"></i>
                            <span>support@drivenow.in</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i data-lucide="map-pin" class="w-4 h-4 text-primary"></i>
                            <span>Mumbai, Delhi, Bangalore, Chennai, Hyderabad</span>
                        </div>
                    </div>
                </div>

                <!-- Company Links -->
                <div>
                    <h4 class="font-semibold mb-4">Company</h4>
                    <ul class="space-y-3">
                        @foreach(['About Us', 'Careers', 'Blog', 'Press'] as $link)
                            <li>
                                <a href="#" class="text-sm text-muted-foreground hover:text-primary transition-colors">{{ $link }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Support Links -->
                <div>
                    <h4 class="font-semibold mb-4">Support</h4>
                    <ul class="space-y-3">
                        @foreach(['Help Center', 'Contact Us', 'FAQs', 'Cancellation Policy'] as $link)
                            <li>
                                <a href="#" class="text-sm text-muted-foreground hover:text-primary transition-colors">{{ $link }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Legal Links -->
                <div>
                    <h4 class="font-semibold mb-4">Legal</h4>
                    <ul class="space-y-3">
                        @foreach(['Terms of Service', 'Privacy Policy', 'Cookie Policy', 'Refund Policy'] as $link)
                            <li>
                                <a href="#" class="text-sm text-muted-foreground hover:text-primary transition-colors">{{ $link }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="mt-12 pt-8 border-t border-white/5 flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-sm text-muted-foreground">
                    © {{ date('Y') }} DriveNow. All rights reserved. (v1.5)
                </p>
                <div class="flex items-center gap-4">
                    @foreach(['facebook', 'twitter', 'instagram', 'linkedin'] as $social)
                        <a href="#" class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center text-muted-foreground hover:bg-primary hover:text-primary-foreground transition-all">
                            <i data-lucide="{{ $social }}" class="w-4 h-4"></i>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </footer>

    <!-- Initialize Lucide Icons -->
    <script>
        lucide.createIcons();
    </script>
</body>
</html>
