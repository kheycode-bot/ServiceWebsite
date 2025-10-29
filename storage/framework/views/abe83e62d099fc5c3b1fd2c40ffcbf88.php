

<?php $__env->startSection('content'); ?>

<section class="hero">
    <div class="overlay">
        <h1>Contact Us</h1>
    </div>
</section>

<section class="office-locations">
    <div class="office-container">
        <div class="head-office">
            <h2>Head Office</h2>
            <h3 class="office-title">SD</h3>
            <div class="office-info">
                <p>South Dakota</p>
                <p>+1-800-123-4567</p>
                <p>36/B W 1st Ave, Miller, SD 57362, USA</p>
            </div>
            <img src="images/contact.webp" alt="Head Office">
        </div>
        <div class="regional-offices">
            <h2>Regional Offices</h2>
            <div class="office">
                <h3 class="office-title">MT</h3>
                <div class="office-info">
                    <p>Montana</p>
                    <p>19-A/2 3rd Ave, Grey Park, MT 57362, USA</p>
                    <p>+1-800-123-4567</p>
                </div>
            </div>
            <div class="office">
                <h3 class="office-title">ND</h3>
                <div class="office-info">
                    <p>North Dakota</p>
                    <p>24/C W 2nd Ave, James Rd, ND 12345, USA</p>
                    <p>+1-800-123-4567</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<style>
/* General Reset */
html, body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

/* Hero Section */
.hero {
    background: url('images/security.webp') center/cover no-repeat;
    height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    position: relative;
    color: white;
}

.hero::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
}

.overlay {
    position: relative;
    z-index: 1;
    font-size: 40px;
    font-weight: bold;
}

/* Office Locations */
.office-locations {
    padding: 50px;
    text-align: center;
}

/* Office Locations */
.office-locations {
    padding: 50px;
    text-align: center;
}

/* Office Container: Flexbox for Side-by-Side Alignment */
.office-container {
    display: flex;
    justify-content: space-between; /* Ensures spacing */
    align-items: flex-start;
    text-align: center;
    gap: 50px; /* Adjusts spacing between Head Office and Regional Offices */
}

/* Head Office & Regional Offices Styles */
.head-office, .regional-offices {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    width: 48%; /* Ensures proper alignment */
}

/* Bolding the Headings */
.head-office h2,
.regional-offices h2 {
    font-size: 25px;
    font-weight: bold; /* Bold the headings */
    color: black;
    margin-bottom: 15px;
}

/* Office Title */
.office-title {
    font-size: 24px;
    font-weight: bold;
    border-bottom: 2px solid black;
    display: inline-block;
    margin-bottom: 10px;
}

/* Office Info */
.office-info p {
    margin: 5px 0;
}

/* Centering Image */
.head-office img {
    display: block;
    margin: 20px auto;
    max-width: 400px;
    width: 100%;
}

</style>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\services-app\resources\views/contact.blade.php ENDPATH**/ ?>