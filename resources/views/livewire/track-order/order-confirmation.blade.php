<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Perfume Shop - Shop' }}</title>
    {{-- ===== Jost Font ===== --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @livewire('partials.navbar')

    <div class="container mx-auto p-4 md:p-8 max-w-3xl">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-[#FF69B4] p-6 text-white text-center">
                <h1 class="text-3xl font-bold mb-2">Thank You for Your Order!</h1>
                <p class="text-xl">Order ID: #12345</p>
            </div>
            <div class="p-6 space-y-6">
                <section>
                    <h2 class="text-2xl font-semibold mb-4">Order Details</h2>
                    <div class="bg-gray-50 rounded-lg p-4 flex items-start space-x-4">
                        <img src="{{asset('pics/perfume_1.jpg')}}" alt="Product Image" class="w-24 h-24 object-cover rounded">
                        <div>
                            <h3 class="font-semibold text-lg">Wireless Noise-Cancelling Headphones</h3>
                            <p class="text-gray-600">Color: Black</p>
                            <p class="text-gray-600">Quantity: 1</p>
                            <p class="font-semibold mt-2">$249.99</p>
                        </div>
                    </div>
                </section>

                <section>
                    <h2 class="text-2xl font-semibold mb-4">Shipping Information</h2>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <p><span class="font-semibold">Shipping Method:</span> Standard Shipping (3-5 business days)</p>
                        <p><span class="font-semibold">Tracking Number:</span> 1Z999AA1123456789</p>
                        <p class="mt-2"><span class="font-semibold">Estimated Delivery Date:</span> June 15, 2023</p>
                    </div>
                </section>

                <section>
                    <h2 class="text-2xl font-semibold mb-4">Shipping Address</h2>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <p>John Doe</p>
                        <p>123 Main Street</p>
                        <p>Apt 4B</p>
                        <p>New York, NY 10001</p>
                        <p>United States</p>
                    </div>
                </section>

                <div class="text-center">
                    <p class="text-gray-600 mb-4">We'll send a confirmation email with order details and tracking info.</p>
                    <a href="#" class="inline-block bg-blue-500 text-white py-2 px-6 rounded-lg hover:bg-blue-600 transition duration-300">
                        Track Your Order
                    </a>
                </div>
            </div>
        </div>
    </div>

    @livewire('partials.footer')
</body>
  
</html>