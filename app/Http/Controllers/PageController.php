<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $cars = [
        [
            'id' => 1,
            'name' => "Maruti Swift",
            'brand' => "Maruti Suzuki",
            'model' => "Swift VXi",
            'category' => "Hatchback",
            'year' => 2024,
            'seats' => 5,
            'transmission' => "Manual",
            'fuelType' => "Petrol",
            'baseFare' => 500,
            'pricePerKm' => 8,
            'securityDeposit' => 5000,
            'rating' => 4.5,
            'reviewCount' => 128,
            'image' => "/cars/hatchback-silver.jpg",
            'features' => ["AC", "Bluetooth", "USB", "Power Steering", "Power Windows"],
            'mileage' => "22 km/l",
            'isPopular' => true,
        ],
        [
            'id' => 2,
            'name' => "Honda City",
            'brand' => "Honda",
            'model' => "City ZX CVT",
            'category' => "Sedan",
            'year' => 2024,
            'seats' => 5,
            'transmission' => "Automatic",
            'fuelType' => "Petrol",
            'baseFare' => 800,
            'pricePerKm' => 12,
            'securityDeposit' => 8000,
            'rating' => 4.7,
            'reviewCount' => 256,
            'image' => "/cars/sedan-red.jpg",
            'features' => ["AC", "GPS", "Bluetooth", "Sunroof", "Leather Seats", "Cruise Control"],
            'mileage' => "18 km/l",
            'isFeatured' => true,
            'isPopular' => true,
        ],
        [
            'id' => 3,
            'name' => "Toyota Fortuner",
            'brand' => "Toyota",
            'model' => "Fortuner Legender",
            'category' => "SUV",
            'year' => 2024,
            'seats' => 7,
            'transmission' => "Automatic",
            'fuelType' => "Diesel",
            'baseFare' => 1500,
            'pricePerKm' => 18,
            'securityDeposit' => 15000,
            'rating' => 4.8,
            'reviewCount' => 189,
            'image' => "/cars/suv-white.jpg",
            'features' => ["AC", "GPS", "Bluetooth", "4WD", "Leather Seats", "Sunroof", "Cruise Control", "Hill Assist"],
            'mileage' => "12 km/l",
            'isFeatured' => true,
            'isPopular' => true,
        ],
        [
            'id' => 4,
            'name' => "Mercedes S-Class",
            'brand' => "Mercedes-Benz",
            'model' => "S 450 4MATIC",
            'category' => "Luxury",
            'year' => 2024,
            'seats' => 5,
            'transmission' => "Automatic",
            'fuelType' => "Petrol",
            'baseFare' => 5000,
            'pricePerKm' => 50,
            'securityDeposit' => 50000,
            'rating' => 4.9,
            'reviewCount' => 67,
            'image' => "/cars/luxury-black.jpg",
            'features' => ["AC", "GPS", "Premium Audio", "Massage Seats", "Ambient Lighting", "Night Vision", "ADAS"],
            'mileage' => "10 km/l",
            'isFeatured' => true,
        ],
        [
            'id' => 5,
            'name' => "Hyundai Creta",
            'brand' => "Hyundai",
            'model' => "Creta SX(O)",
            'category' => "SUV",
            'year' => 2024,
            'seats' => 5,
            'transmission' => "Automatic",
            'fuelType' => "Diesel",
            'baseFare' => 1000,
            'pricePerKm' => 15,
            'securityDeposit' => 10000,
            'rating' => 4.6,
            'reviewCount' => 312,
            'image' => "/cars/suv-white.jpg",
            'features' => ["AC", "GPS", "Bluetooth", "Panoramic Sunroof", "Ventilated Seats", "ADAS"],
            'mileage' => "18 km/l",
            'isPopular' => true,
        ],
        [
            'id' => 6,
            'name' => "Tata Nexon EV",
            'brand' => "Tata",
            'model' => "Nexon EV Max",
            'category' => "Electric",
            'year' => 2024,
            'seats' => 5,
            'transmission' => "Automatic",
            'fuelType' => "Electric",
            'baseFare' => 900,
            'pricePerKm' => 10,
            'securityDeposit' => 10000,
            'rating' => 4.4,
            'reviewCount' => 98,
            'image' => "/cars/hatchback-silver.jpg",
            'features' => ["AC", "GPS", "Fast Charging", "Connected Car", "Cruise Control"],
            'mileage' => "437 km range",
            'isFeatured' => true,
        ],
    ];

    public function home()
    {
        return view('home', ['cars' => $this->cars]);
    }

    public function index()
    {
        return view('cars.index', ['cars' => $this->cars]);
    }

    public function show($id)
    {
        $car = collect($this->cars)->firstWhere('id', $id);
        if (!$car) {
            abort(404);
        }
        return view('cars.show', ['car' => $car]);
    }

    public function book($id)
    {
        $car = collect($this->cars)->firstWhere('id', $id);
        if (!$car) {
            abort(404);
        }
        return view('booking.create', ['car' => $car]);
    }

    public function confirmation()
    {
        return view('booking.confirmation');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function howItWorks()
    {
        return view('pages.how-it-works');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
