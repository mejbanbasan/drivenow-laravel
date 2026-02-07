@extends('components.layout')

@section('content')
<div class="container mx-auto px-4 py-24 max-w-2xl">
    <!-- Success Card -->
    <div class="premium-card p-8 text-center animate-scale-in">
        <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-green-500/20 flex items-center justify-center">
            <i data-lucide="check-circle-2" class="w-10 h-10 text-green-500"></i>
        </div>
        
        <h1 class="text-2xl md:text-3xl font-bold mb-2">Booking Confirmed!</h1>
        <p class="text-muted-foreground mb-8">
            Thank you for choosing DriveNow. Your booking has been successfully confirmed.
        </p>

        <!-- Booking Details -->
        <div class="bg-secondary/50 rounded-xl p-6 text-left mb-8">
            <div class="grid md:grid-cols-2 gap-4">
                <div>
                    <p class="text-sm text-muted-foreground mb-1">Booking ID</p>
                    <p class="font-semibold text-primary">{{ request('booking_id', 'BK-2026-0000') }}</p>
                </div>
                <div>
                    <p class="text-sm text-muted-foreground mb-1">Transaction ID</p>
                    <p class="font-semibold">TXN{{ time() }}</p>
                </div>
                <div>
                    <p class="text-sm text-muted-foreground mb-1">Booking Date</p>
                    <p class="font-semibold">{{ date('F j, Y') }}</p>
                </div>
                <div>
                    <p class="text-sm text-muted-foreground mb-1">Status</p>
                    <span class="inline-flex items-center gap-1 px-2 py-1 rounded-full bg-green-500/20 text-green-500 text-sm">
                        <i data-lucide="check-circle-2" class="w-3 h-3"></i>
                        Confirmed
                    </span>
                </div>
            </div>
        </div>

        <!-- What's Next -->
        <div class="text-left mb-8">
            <h3 class="font-semibold mb-4">What's Next?</h3>
            <div class="space-y-3">
                <div class="flex items-start gap-3 text-sm">
                    <i data-lucide="mail" class="w-5 h-5 text-primary mt-0.5"></i>
                    <div>
                        <p class="font-medium">Check your email</p>
                        <p class="text-muted-foreground">We've sent booking details to your registered email</p>
                    </div>
                </div>
                <div class="flex items-start gap-3 text-sm">
                    <i data-lucide="calendar" class="w-5 h-5 text-primary mt-0.5"></i>
                    <div>
                        <p class="font-medium">Save the date</p>
                        <p class="text-muted-foreground">Add pickup date to your calendar</p>
                    </div>
                </div>
                <div class="flex items-start gap-3 text-sm">
                    <i data-lucide="car" class="w-5 h-5 text-primary mt-0.5"></i>
                    <div>
                        <p class="font-medium">Arrive on time</p>
                        <p class="text-muted-foreground">Bring your driving license and ID proof</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actions -->
        <div class="flex flex-col sm:flex-row gap-4">
            <a href="{{ route('booking.invoice', ['id' => request('car_id', 1), 'booking_id' => request('booking_id')]) }}" target="_blank" class="flex-1">
                <button class="w-full gap-2 flex items-center justify-center btn-glow h-10 rounded-lg bg-primary text-primary-foreground font-medium">
                    <i data-lucide="download" class="w-4 h-4"></i>
                    Download Invoice
                </button>
            </a>
            <a href="{{ route('home') }}" class="flex-1">
                <button class="w-full gap-2 flex items-center justify-center h-10 rounded-lg bg-secondary text-foreground hover:bg-secondary/80 font-medium transition-colors">
                    <i data-lucide="home" class="w-4 h-4"></i>
                    Back to Home
                </button>
            </a>
        </div>
    </div>

    <!-- Support Info -->
    <div class="glass-card p-6 mt-6 text-center">
        <p class="text-sm text-muted-foreground mb-2">Need help with your booking?</p>
        <div class="flex items-center justify-center gap-4">
            <a href="tel:+911800123456" class="flex items-center gap-2 text-primary hover:underline">
                <i data-lucide="phone" class="w-4 h-4"></i>
                1800-123-4567
            </a>
            <a href="mailto:support@drivenow.in" class="flex items-center gap-2 text-primary hover:underline">
                <i data-lucide="mail" class="w-4 h-4"></i>
                support@drivenow.in
            </a>
        </div>
    </div>
</div>
@endsection
