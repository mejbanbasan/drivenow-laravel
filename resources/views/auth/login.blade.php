<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - DriveNow</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                container: {
                    center: true,
                    padding: "2rem",
                    screens: { "2xl": "1400px" },
                },
                extend: {
                    colors: {
                        background: "hsl(222 47% 5%)",
                        foreground: "hsl(210 40% 98%)",
                        card: "hsl(222 47% 8%)",
                        "card-foreground": "hsl(210 40% 98%)",
                        primary: "hsl(38 92% 50%)",
                        "primary-foreground": "hsl(222 47% 5%)",
                        secondary: "hsl(217 33% 17%)",
                        "secondary-foreground": "hsl(210 40% 98%)",
                        muted: "hsl(217 33% 17%)",
                        "muted-foreground": "hsl(215 20% 65%)",
                        destructive: "hsl(0 84% 60%)",
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
            body { @apply bg-background text-foreground antialiased; }
        }
        @layer components {
            .input-premium {
                @apply bg-secondary/50 border border-white/10 focus:border-primary/50 focus:ring-2 focus:ring-primary/20 transition-all duration-300 rounded-lg outline-none;
            }
            .btn-glow {
                background: linear-gradient(135deg, hsl(38 92% 50%) 0%, hsl(32 95% 44%) 100%);
                box-shadow: 0 10px 30px -10px hsl(38 92% 50% / 0.5);
                @apply transition-all duration-300 hover:scale-[1.02] hover:shadow-lg;
            }
            .gradient-text {
                @apply bg-clip-text text-transparent bg-gradient-to-r from-primary to-amber-300;
            }
            .animate-float {
                animation: float 6s ease-in-out infinite;
            }
            @keyframes float {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-20px); }
            }
        }
    </style>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="min-h-screen bg-background flex">
    <!-- Left Side - Form -->
    <div class="flex-1 flex items-center justify-center p-8">
        <div class="w-full max-w-md">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-2 mb-8">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary to-amber-400 flex items-center justify-center">
                    <i data-lucide="car" class="w-5 h-5 text-primary-foreground"></i>
                </div>
                <span class="text-xl font-bold">
                    Drive<span class="text-primary">Now</span>
                </span>
            </a>

            <h1 class="text-2xl font-bold mb-2">Welcome Back</h1>
            <p class="text-muted-foreground mb-8">
                Sign in to access your bookings and continue where you left off.
            </p>

            <form action="{{ route('home') }}" class="space-y-4">
                <div>
                    <label class="text-sm font-medium mb-2 block">Email Address</label>
                    <div class="relative">
                        <i data-lucide="mail" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground"></i>
                        <input type="email" placeholder="Enter your email" class="pl-10 h-12 w-full input-premium" required>
                    </div>
                </div>

                <div>
                    <label class="text-sm font-medium mb-2 block">Password</label>
                    <div class="relative">
                        <i data-lucide="lock" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground"></i>
                        <input type="password" placeholder="Enter your password" class="pl-10 h-12 w-full input-premium" required>
                        <button type="button" class="absolute right-3 top-1/2 -translate-y-1/2 text-muted-foreground hover:text-foreground">
                            <i data-lucide="eye" class="w-5 h-5"></i>
                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" class="w-4 h-4 accent-primary">
                        <span class="text-sm text-muted-foreground">Remember me</span>
                    </label>
                    <a href="#" class="text-sm text-primary hover:underline">
                        Forgot password?
                    </a>
                </div>

                <button type="submit" class="w-full h-12 btn-glow rounded-xl font-bold text-primary-foreground flex items-center justify-center gap-2">
                    Sign In
                    <i data-lucide="arrow-right" class="w-5 h-5"></i>
                </button>
            </form>

            <div class="relative my-8">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-white/10"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="bg-background px-4 text-muted-foreground">Or continue with</span>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <button class="h-12 rounded-lg bg-secondary hover:bg-secondary/80 flex items-center justify-center gap-2 transition-colors">
                    <i data-lucide="github" class="w-5 h-5"></i>
                    GitHub
                </button>
                <button class="h-12 rounded-lg bg-secondary hover:bg-secondary/80 flex items-center justify-center gap-2 transition-colors">
                    <span class="font-bold">G</span>
                    Google
                </button>
            </div>

            <p class="text-center text-sm text-muted-foreground mt-8">
                Don't have an account? 
                <a href="{{ route('register') }}" class="text-primary font-medium hover:underline">
                    Sign up for free
                </a>
            </p>
        </div>
    </div>

    <!-- Right Side - Image/Branding -->
    <div class="hidden lg:flex flex-1 bg-gradient-to-br from-primary/20 via-background to-background items-center justify-center p-12">
        <div class="max-w-lg text-center">
            <div class="w-24 h-24 mx-auto mb-8 rounded-2xl bg-primary/20 flex items-center justify-center animate-float">
                <i data-lucide="car" class="w-12 h-12 text-primary"></i>
            </div>
            <h2 class="text-3xl font-bold mb-4">Your Journey Starts Here</h2>
            <p class="text-muted-foreground mb-8">
                Access your bookings, manage your profile, and discover amazing deals on premium car rentals.
            </p>
            <div class="flex justify-center gap-8 text-sm">
                <div>
                    <p class="text-2xl font-bold gradient-text">10K+</p>
                    <p class="text-muted-foreground">Happy Customers</p>
                </div>
                <div>
                    <p class="text-2xl font-bold gradient-text">500+</p>
                    <p class="text-muted-foreground">Premium Cars</p>
                </div>
                <div>
                    <p class="text-2xl font-bold gradient-text">50+</p>
                    <p class="text-muted-foreground">Cities</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
