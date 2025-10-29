@extends('layouts.app')

@section('content')
    <!-- Hero Section with Callback Form -->
    <div class="relative text-white py-20 bg-cover bg-center bg-no-repeat hero-section"
    style="background-image: url('/images/hero1.jpg'); background-size: cover; background-position: center;">


        <div class="container mx-auto px-6 lg:px-12 relative z-10"> 
            <div class="flex flex-col md:flex-row items-center justify-between">
                <!-- Left: Hero Text -->
                <div class="md:w-1/2 flex flex-col items-center text-center md:text-left">
                <h1 class="text-4xl font-bold mb-4 leading-tight text-center">
                 When It Comes To Reliability,  We Are The <br> One You Need!
                     </h1>
                    <p class="text-lg mb-8">Fusion ports outermost images, our vehicula tellus freggar so.</p>
                    <div class="flex flex-col sm:flex-row justify-center md:justify-start space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="/services" class="bg-nature-4 text-nature-2 px-6 py-3 rounded-lg font-semibold hover:bg-nature-3 transition duration-300">Know More ➤</a>
                    </div>
                </div>
                
                <!-- Right: Callback Form with Reduced Width -->
                <div class="md:w-1/3 bg-nature-5 p-5 rounded-lg shadow-lg mt-10 md:mt-0">
                    <h2 class="text-3xl font-bold mb-4 text-center text-nature-1">Request Callback</h2>
                    <p class="text-nature-2 mb-6 text-center">Please Complete The Form</p>

                    @if(session('success'))
                        <div class="bg-green-500 text-white p-3 rounded-md mb-4 text-center">{{ session('success') }}</div>
                    @endif

                    @if($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-md mb-4">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('callback.store') }}" method="POST" class="bg-white p-6 shadow-lg rounded-lg">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-black font-semibold mb-2">Your Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-nature-1 text-black" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-black font-semibold mb-2">Your Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-nature-1 text-black" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-black font-semibold mb-2">Contact No</label>
                            <input type="text" name="phone" value="{{ old('phone') }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-nature-3 text-black" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-black font-semibold mb-2">Purpose Of Contact</label>
                            <input type="text" name="purpose" value="{{ old('purpose') }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-nature-3 text-black" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-black font-semibold mb-2">Your Message</label>
                            <textarea name="message" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-nature-3 text-black" required>{{ old('message') }}</textarea>
                        </div>

                        <button type="submit" class="w-full bg-nature-3 text-white py-3 rounded-lg hover:bg-nature-2 transition duration-300">
                            Request Call
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <section class="bg-white py-16 mt-30">
    <div class="container mx-auto px-6 lg:px-20">
        <!-- Heading and Description -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">Quality Work Through Dedication</h2>
            <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                Aliquam suscipit felis a arcu laoreet congue. Habeo nemore appellantur eu usu, usu putant adolescens 
                consequuntur ei, mel tempor consulatu voluptaria.
            </p>
        </div>

        <hr class ="mt-20 font-semibold text-gray-200"></hr>


        <!-- Content Section -->
        <div class="flex flex-col lg:flex-row items-center lg:items-center mt-20">
            <!-- Left Image -->
            <div class="w-full lg:w-1/2 flex justify-center lg:justify-center">
                <img src="images/worker.avif" alt="Worker Image" class="max-w-sm lg:max-w-md">
            </div>

            <!-- Right Text Content -->
            <div class="w-full lg:w-1/2 mt-8 lg:mt-0 lg:pl-12">
                <h3 class="text-xl font-semibold text-gray-900">Fusce Porta Euismod Magna, Eu Vehicula Tellus Feugiat.</h3>
                <p class="text-gray-600 mt-4">
                    Aliquam suscipit felis a arcu laoreet congue. Habeo nemore appellantur eu usu, usu putant 
                    adolescens consequuntur ei, mel tempor consulatu voluptaria.
                </p>
                
                <!-- Bullet Points -->
                <ul class="mt-4 space-y-2">
                    <li class="flex items-center text-gray-700">
                        <span class="text-blue-500 mr-2">➤</span> Luctus nec ullamcorper mattis
                    </li>
                    <li class="flex items-center text-gray-700">
                        <span class="text-blue-500 mr-2">➤</span> Habeo nemore putant
                    </li>
                    <li class="flex items-center text-gray-700">
                        <span class="text-blue-500 mr-2">➤</span> Mel tempor consulatu voluptaria
                    </li>
                </ul>
                <!-- Button -->
                <a href="#" class="inline-block mt-6 px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">
                    Know More
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services">
        <div class="service-box">
            <div class="service-overlay"></div>
            <img src="images/residential.jpg" alt="Residential Services">
            <h2>Residential Services</h2>
            <p>It elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
            <a href="#" class="contact-btn">Contact Us</a>
        </div>

        <div class="service-box">
            <div class="service-overlay2"></div>
            <img src="images/commercial.jpg" alt="Commercial Services">
            <h2>Commercial Services</h2>
            <p>It elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
            <a href="#" class="contact-btn">Contact Us</a>
        </div>

        <div class="service-box">
            <div class="service-overlay"></div>
            <img src="images/industrial.avif" alt="Industrial Services">
            <h2>Industrial Services</h2>
            <p>It elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
            <a href="#" class="contact-btn">Contact Us</a>
        </div>
    </section>


 <!-- Services Section -->
 <section class="bg-gray-100 py-16">
    <div class="container mx-auto px-6 lg:px-20 text-center">
        <h2 class="text-3xl font-bold text-gray-900">Our Services</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">We offer high-quality services to meet all your needs.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mt-12">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <i class="fas fa-th-large text-4xl text-blue-500 mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-900">Floor & Wall Tiling Works</h3>
                <p class="text-gray-600 mt-2">Expert tiling solutions for residential and commercial spaces.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <i class="fas fa-bolt text-4xl text-blue-500 mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-900">Electrical Fittings & Fixtures</h3>
                <p class="text-gray-600 mt-2">Reliable repairs and maintenance for electrical systems.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <i class="fas fa-wrench text-4xl text-blue-500 mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-900">Sanitary Installation & Pipes Repairing</h3>
                <p class="text-gray-600 mt-2">Professional plumbing and sanitary installation services.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <i class="fas fa-border-all text-4xl text-blue-500 mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-900">False Ceiling & Light Partitions</h3>
                <p class="text-gray-600 mt-2">High-quality ceiling and partition installations.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <i class="fas fa-chair text-4xl text-blue-500 mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-900">Carpentry & Wood Flooring</h3>
                <p class="text-gray-600 mt-2">Expert woodwork and flooring solutions.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <i class="fas fa-scroll text-4xl text-blue-500 mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-900">Wallpaper Fixing</h3>
                <p class="text-gray-600 mt-2">Professional wallpaper installation and maintenance.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <i class="fas fa-window-restore text-4xl text-blue-500 mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-900">Glass & Aluminum Installation</h3>
                <p class="text-gray-600 mt-2">Durable glass and aluminum fittings for various applications.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <i class="fas fa-trowel text-4xl text-blue-500 mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-900">Plaster Works</h3>
                <p class="text-gray-600 mt-2">High-quality plastering for smooth and strong surfaces.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <i class="fas fa-paint-brush text-4xl text-blue-500 mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-900">Engraving & Ornamentation</h3>
                <p class="text-gray-600 mt-2">Custom engraving and decoration services.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <i class="fas fa-fan text-4xl text-blue-500 mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-900">Air-Conditioning & Ventilation</h3>
                <p class="text-gray-600 mt-2">Expert installation and maintenance for air filtration systems.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-us">
  <h2>Why Choose Us</h2>
  <p>We provide secure, affordable, and round-the-clock support for all your needs.</p>

  <div class="cards-container">
    <div class="card card1">
      <div class="icon">🔒</div>
      <h3>Safe & Secure</h3>
      <p>Your data is protected with our advanced security protocols.</p>
      <a href="#">Learn More</a>
    </div>

    <div class="card card2">
      <div class="icon">🎧</div>
      <h3>24/7 Support</h3>
      <p>Our team is available at all times to assist you.</p>
      <a href="#">Learn More</a>
    </div>

    <div class="card card3">
      <div class="icon">💰</div>
      <h3>Cost-Effective</h3>
      <p>Affordable solutions without compromising quality.</p>
      <a href="#">Learn More</a>
    </div>
  </div>
</section>




<section id="contact" class="py-12 flex justify-center">
    
    <div class="container mx-auto flex flex-col items-center px-4 bg-nature-2 rounded-lg shadow-lg py-12">

        <!-- Centered Heading -->
        <h2 class="text-2xl font-bold text-white text-center mb-6">Request a Quote Today</h2>
     
        <div class="flex flex-wrap lg:flex-nowrap justify-center items-center w-full">
            
            <!-- Contact Info (Left) -->
            <div class="text-white w-full max-w-sm lg:max-w-md px-6 text-center">
                <h3 class="text-xl font-bold mb-4">Reach Us</h3>
                <p><strong>Location :</strong><br> 36-B W 1st Ave, Miller, SD 57362, USA</p>
                <p class="mt-4"><strong>Email :</strong><br> info@domain.com</p>
                <p class="mt-4"><strong>Phone :</strong><br> +1-800-123-4567<br> +1 123-456-7890</p>
            </div>

            <!-- Contact Form (Right) -->
            <div class="w-full max-w-2xl bg-nature-2 p-8 rounded-lg shadow-lg lg:ml-8">
          
            @if(session('success'))
    <div class="bg-green-500 text-white p-3 mb-4 rounded-md">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('quote.store') }}" method="POST" class="space-y-4">
    @csrf

    <div class="flex space-x-4">
        <div class="w-full">
            <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}"
                class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-400 bg-white"
                required>
            @error('name')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="w-full">
            <input type="email" name="email" placeholder="Your Email" value="{{ old('email') }}"
                class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-400 bg-white"
                required>
            @error('email')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div>
        <input type="text" name="phone" placeholder="Contact No" value="{{ old('phone') }}"
            class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-400 bg-white"
            required>
        @error('phone')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <input type="text" name="purpose" placeholder="Purpose Of Contact" value="{{ old('purpose') }}"
            class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-400 bg-white"
            required>
        @error('purpose')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <textarea name="message" placeholder="Your Message" rows="4"
            class="w-full p-3 border rounded-md focus:ring-2 focus:ring-blue-400 bg-white"
            required>{{ old('message') }}</textarea>
        @error('message')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <button type="submit" 
        class="w-full bg-blue-600 text-white px-6 py-3 rounded-md font-bold hover:bg-blue-700 transition-all duration-300">
        Send Message
    </button>
</form>

            </div>

        </div>
    </div>
</section>


@endsection

<style>

.hero-section::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.74); /* Adjust darkness here */
}

    .services {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    padding: 50px;
}

.service-box {
    position: relative;
    width: 30%;
    text-align: center;
    color: white;
    overflow: hidden;
    border-radius: 10px;
}

.service-box img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 10px;
}

.service-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Dark transparent overlay */    border-radius: 10px;
}

.service-overlay2 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 123, 255, 0.5); /* Blue overlay */
    border-radius: 10px;
}

.service-box h2,
.service-box p,
.service-box .contact-btn {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    z-index: 2;
}

.service-box h2 {
    top: 20%;
    font-size: 22px;
    font-weight: bold;
}

.service-box p {
    top: 40%;
    width: 80%;
}

.contact-btn {
    top: 70%;
    background: #007bff;
    color: white;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px;
    transition: 0.3s;
}

.contact-btn:hover {
    background: #0056b3;
}

.why-choose-us {
    text-align: center;
    padding: 50px 20px;
    background-color: #f9f9f9;
}

.why-choose-us h2 {
    font-size: 2rem;
    margin-bottom: 10px;
}

.why-choose-us p {
    font-size: 1.1rem;
    color: #555;
    max-width: 600px;
    margin: 0 auto 30px;
}

.cards-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
}

/* Card Styling */
.card {
    position: relative;
    width: 280px;
    height: 320px;
    background-size: cover;
    background-position: center;
    color: white;
    padding: 20px;
    border-radius: 12px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    text-align: center;
    transition: transform 0.3s ease-in-out;
    overflow: hidden;
}

/* Adding a dark overlay */
.card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4); /* Darker overlay */
    z-index: 1;
}

/* Ensuring content stays on top */
.card * {
    position: relative;
    z-index: 2;
}

/* Background Images */
.card1 {
    background-image: url('images/security.webp');
}
.card2 {
    background-image: url('images/support.jpg');
}
.card3 {
    background-image: url('images/cost.jpg');
}

/* Hover Effect */
.card:hover {
    transform: scale(1.05);
}

/* Button */
.card a {
    background-color: #007bff;
    color: white;
    padding: 12px 18px;
    text-decoration: none;
    border-radius: 6px;
    font-weight: bold;
    transition: background 0.3s ease-in-out;
}

.card a:hover {
    background-color: #0056b3;
}

/* Responsive Layout */
@media (max-width: 768px) {
    .cards-container {
        flex-direction: column;
        align-items: center;
    }

    .card {
        width: 90%;
        max-width: 300px;
    }
}


</style>
