<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice - DriveNow</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#f59e0b", // Amber 500
                    }
                }
            }
        }
    </script>
    <style>
        @media print {
            .no-print { display: none; }
            body { -webkit-print-color-adjust: exact; }
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen p-4 md:p-8 font-sans text-gray-900">

    <div class="max-w-3xl mx-auto bg-white shadow-xl rounded-lg overflow-hidden print:shadow-none print:max-w-none">
        
        <!-- Header -->
        <div class="bg-slate-900 text-white p-8 flex justify-between items-center print:bg-slate-900 print:text-white">
            <div>
                <div class="flex items-center gap-2 mb-2">
                    <div class="w-8 h-8 rounded-lg bg-yellow-500 flex items-center justify-center text-slate-900 font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><path d="M9 17h6"/><circle cx="17" cy="17" r="2"/></svg>
                    </div>
                    <span class="text-2xl font-bold">DriveNow</span>
                </div>
                <p class="text-slate-400 text-sm">Premium Car Rental Services</p>
            </div>
            <div class="text-right">
                <h1 class="text-3xl font-bold text-yellow-500 mb-1">INVOICE</h1>
                <p class="text-slate-300">#{{ request('booking_id', 'INV-'.time()) }}</p>
            </div>
        </div>

        <!-- Info Grid -->
        <div class="p-8 grid grid-cols-2 gap-8 border-b border-gray-100">
            <div>
                <h3 class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Billed To</h3>
                <p class="font-bold text-lg mb-1">{{ request('name', 'John Doe') }}</p>
                <p class="text-gray-600 text-sm">+91 98765 43210</p>
                <p class="text-gray-600 text-sm">{{ request('email', 'john@example.com') }}</p>
                <p class="text-gray-600 text-sm mt-2">123, Civil Lines, Mumbai</p>
            </div>
            <div class="text-right">
                <div class="mb-4">
                    <h3 class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-1">Invoice Date</h3>
                    <p class="font-medium">{{ date('F j, Y') }}</p>
                </div>
                <div>
                     <h3 class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-1">Payment Method</h3>
                    <p class="font-medium">Online Payment (Credit Card)</p>
                </div>
            </div>
        </div>

        <!-- Car Details -->
        <div class="p-8 border-b border-gray-100 bg-gray-50/50 print:bg-gray-50">
            <h3 class="font-bold text-lg mb-4">Rental Details</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div>
                    <span class="block text-xs text-gray-500 uppercase">Vehicle</span>
                    <span class="font-semibold block mt-1">{{ $car['brand'] }} {{ $car['model'] }}</span>
                    <span class="text-xs text-gray-500">{{ $car['category'] }}</span>
                </div>
                <div>
                    <span class="block text-xs text-gray-500 uppercase">Pickup Date</span>
                    <span class="font-semibold block mt-1">{{ date('M j, Y, 10:00 AM', strtotime('+1 day')) }}</span>
                </div>
                <div>
                    <span class="block text-xs text-gray-500 uppercase">Dropoff Date</span>
                    <span class="font-semibold block mt-1">{{ date('M j, Y, 10:00 AM', strtotime('+3 days')) }}</span>
                </div>
                <div>
                    <span class="block text-xs text-gray-500 uppercase">Duration</span>
                    <span class="font-semibold block mt-1">2 Days</span>
                </div>
            </div>
        </div>

        <!-- Line Items -->
        <div class="p-8">
            <table class="w-full mb-8">
                <thead>
                    <tr class="border-b-2 border-slate-100">
                        <th class="text-left py-3 text-xs font-bold text-gray-500 uppercase">Description</th>
                        <th class="text-right py-3 text-xs font-bold text-gray-500 uppercase">Rate</th>
                        <th class="text-right py-3 text-xs font-bold text-gray-500 uppercase">Qty</th>
                        <th class="text-right py-3 text-xs font-bold text-gray-500 uppercase">Amount</th>
                    </tr>
                </thead>
                <tbody class="text-sm">
                    <tr class="border-b border-gray-50">
                        <td class="py-4">
                            <p class="font-medium text-gray-900">Car Rental Charges</p>
                            <p class="text-gray-500 text-xs">Base fare for {{ $car['name'] }}</p>
                        </td>
                        <td class="text-right py-4">₹{{ number_format($car['baseFare']) }}</td>
                        <td class="text-right py-4">2 Days</td>
                        <td class="text-right py-4 font-medium">₹{{ number_format($car['baseFare'] * 2) }}</td>
                    </tr>
                    <tr class="border-b border-gray-50">
                        <td class="py-4">
                            <p class="font-medium text-gray-900">Insurance & Protection</p>
                            <p class="text-gray-500 text-xs">Standard Coverage</p>
                        </td>
                        <td class="text-right py-4">₹500</td>
                        <td class="text-right py-4">1</td>
                        <td class="text-right py-4 font-medium">₹500</td>
                    </tr>
                    <tr class="border-b border-gray-50">
                        <td class="py-4">
                            <p class="font-medium text-gray-900">Taxes & Fees</p>
                            <p class="text-gray-500 text-xs">GST (18%) + Service Fee</p>
                        </td>
                        <td class="text-right py-4">₹450</td>
                        <td class="text-right py-4">1</td>
                        <td class="text-right py-4 font-medium">₹450</td>
                    </tr>
                </tbody>
            </table>

            <div class="flex justify-end">
                <div class="w-full md:w-1/2 lg:w-1/3 space-y-3">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Subtotal</span>
                        <span class="font-medium">₹{{ number_format(($car['baseFare'] * 2) + 500 + 450) }}</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Security Deposit (Refundable)</span>
                        <span class="font-medium">₹{{ number_format($car['securityDeposit']) }}</span>
                    </div>
                    <div class="flex justify-between items-center py-4 border-t-2 border-slate-900 mt-4">
                        <span class="font-bold text-lg">Total Paid</span>
                        <span class="font-bold text-2xl text-primary">₹{{ number_format(($car['baseFare'] * 2) + 500 + 450 + $car['securityDeposit']) }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="bg-gray-50 p-8 border-t border-gray-100 text-center text-sm text-gray-500">
            <p class="mb-2 font-medium">Thank you for choosing DriveNow!</p>
            <p>For any queries, contact support@drivenow.in or +91 1800-123-4567</p>
            <p class="mt-4 text-xs">DriveNow Pvt Ltd. | GSTIN: 27AABCU9603R1ZN</p>
        </div>
        
    </div>

    <!-- Print Controls -->
    <div class="fixed bottom-8 right-8 flex gap-4 no-print">
        <button onclick="window.print()" class="bg-slate-900 text-white px-6 py-3 rounded-full shadow-lg font-bold hover:bg-slate-800 transition-colors flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
            Print Invoice
        </button>
        <button onclick="window.close()" class="bg-white text-slate-900 px-6 py-3 rounded-full shadow-lg font-bold hover:bg-gray-50 transition-colors">
            Close
        </button>
    </div>

    <script>
        // Auto-trigger print after slight delay to ensure styles loaded
        window.onload = function() {
            setTimeout(function() {
                window.print();
            }, 500);
        }
    </script>
</body>
</html>
