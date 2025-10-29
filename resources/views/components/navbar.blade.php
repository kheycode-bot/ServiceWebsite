<!-- Add Google Font -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@400;600&display=swap');
</style>

<nav class="bg-nature-5 shadow-md">
    <div class="container mx-auto px-4 flex items-center justify-between py-4">
        <!-- Company Name with Aesthetic Font -->
        <div class="company-name text-3xl font-semibold text-nature-1" style="font-family: 'Playfair Display', serif;">
            Saima Attaullah <span class="text-nature-3">Technical Services LLC</span>
        </div>

        <!-- Navigation Links -->
        <ul class="nav-links flex-grow flex justify-center space-x-6 text-lg" style="font-family: 'Poppins', sans-serif;">
            <li>
                <a href="{{ route('home') }}" 
                   class="text-nature-1 hover:text-nature-3 {{ request()->routeIs('home') ? 'font-bold border-b-2 border-nature-3' : '' }}">
                   Home
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}" 
                   class="text-nature-1 hover:text-nature-3 {{ request()->routeIs('about') ? 'font-bold border-b-2 border-nature-3' : '' }}">
                   About Us
                </a>
            </li>
            <li>
                <a href="{{ route('services') }}" 
                   class="text-nature-1 hover:text-nature-3 {{ request()->routeIs('services') ? 'font-bold border-b-2 border-nature-3' : '' }}">
                   Services
                </a>
            </li>
            <li>
                <a href="{{ route('faq') }}" 
                   class="text-nature-1 hover:text-nature-3 {{ request()->routeIs('faq') ? 'font-bold border-b-2 border-nature-3' : '' }}">
                   FAQ
                </a>
            </li>
            <li>
                <a href="{{ route('contact') }}" 
                   class="text-nature-1 hover:text-nature-3 {{ request()->routeIs('contact') ? 'font-bold border-b-2 border-nature-3' : '' }}">
                   Contact
                </a>
            </li>
        </ul>

        <!-- Phone Number (Right-Aligned) -->
        <div class="ml-auto text-lg" style="font-family: 'Poppins', sans-serif;">
            <a href="tel:+922386283128" class="text-nature-1 hover:text-nature-3">+922386283128</a>
        </div>
    </div>
</nav>
