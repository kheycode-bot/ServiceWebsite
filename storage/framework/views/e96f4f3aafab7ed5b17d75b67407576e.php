

<?php $__env->startSection('content'); ?>

<section class="hero">
    <div class="overlay">
        <h1>About Us</h1>
    </div>
</section>

<section class="company-profile">
    <h2>Company Profile</h2>
    <p>
        Aliquam suscipit felis a arcu laoreet congue. Habeo nemore appellantur eu usu putant adolescens consequuntur ei, 
        mel tempor consulatu voluptaria. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    </p>
</section>

<section class="content-wrapper">
    <section class="accolades">
        <h2>Accolades</h2>
        <div class="awards">
            <div class="award">
                <img src="images/award.png" alt="Best Service Award 2016">
            </div>
            <div class="award">
                <img src="images/award.png" alt="Best Service Award 2015">
            </div>
            <div class="award">
                <img src="images/award.png" alt="Best Service Award 2014">
            </div>
        </div>
    </section>

    <section class="tabs">
        <div class="tab-buttons">
            <button class="tab-link active" onclick="openTab(event, 'mission')">Mission</button>
            <button class="tab-link" onclick="openTab(event, 'vision')">Vision</button>
            <button class="tab-link" onclick="openTab(event, 'values')">Values</button>
        </div>

        <div id="mission" class="tab-content active">
            <h2>Mission</h2>
            <p>Aliquam suscipit felis a arcu laoreet congue...</p>
        </div>
        <div id="vision" class="tab-content">
            <h2>Vision</h2>
            <p>Our vision is to...</p>
        </div>
        <div id="values" class="tab-content">
            <h2>Values</h2>
            <p>Our values are...</p>
        </div>
    </section>
</section>

<section class="have-queries">
    <div class="overlay">
        <h2>Have Queries?</h2>
        <p class="query-text">Mel temper consultant voluptaria. Lorem ipsum dolor sit amet.</p>
        <button class="query-button">Contact Us</button>
    </div>
</section>

<section class="people-we-work-with">
    <h2>People We Work With</h2>
    <div class="logos-slider">
        <div><img src="images/logo1.png" alt="LOGOIPSUM"></div>
        <div><img src="images/logo2.png" alt="LOGOIPSUM"></div>
        <div><img src="images/logo3.png" alt="LOGOIPSUM"></div>
        <div><img src="images/logo2.png" alt="LOGOIPSUM"></div>
        <div><img src="images/logo2.png" alt="LOGOIPSUM"></div>
        <div><img src="images/logo2.png" alt="LOGOIPSUM"></div>
        <div><img src="images/logo6.png" alt="LOGOIPSUM"></div>
        <div><img src="images/logo6.png" alt="LOGOIPSUM"></div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<style>
/* General Reset */
html, body {
    margin: 0;
    padding: 0;
    overflow-x: hidden;
    height: 100%;
}


/* Hero Section */
.hero {
    background: url('images/aboutus.jpg') center/cover no-repeat;
    height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    position: relative;
    color: white;
}

/* Dark Overlay */
.hero::before, .have-queries::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
}

.overlay {
    position: relative;
    z-index: 1;
    text-align: center;
    font-size: 40px;
    font-weight: bold;
}

/* Headings */
.overlay-h2 {
    font-size: 2rem;
    font-weight: bold;
    color: white;
    text-transform: uppercase;
    margin-bottom: 20px;
}

h2{
    font-size: 2rem;
    font-weight: bold;
    color: black;
    text-transform: uppercase;
    margin-bottom: 20px;
}
/* Company Profile */
.company-profile {
    padding: 50px;
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

/* Content Wrapper */
.content-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 50px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 50px;
    padding-bottom: 20px;
}

/* Accolades */
.accolades {
    flex: 1;
    text-align: center;
}

.awards {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: nowrap;
}

.award {
    max-width: 150px;
}

.award img {
    width: 100px;
    height: auto;
}

/* Tabs */
.tabs {
    flex: 1;
}

.tab-buttons {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-bottom: 20px;
}

.tab-link {
    padding: 8px 15px;
    border: none;
    background: #eee;
    cursor: pointer;
    transition: 0.3s;
    font-weight: bold;
}

.tab-link.active {
    background: white;
    border-bottom: 3px solid black;
}

.tab-content {
    display: none;
    padding: 15px;
    background: white;
    text-align: center;
    border-radius: 5px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
}

.tab-content.active {
    display: block;
}

/* Have Queries Section */
.have-queries {
    background: url('images/support.jpg') center/cover no-repeat;
    padding: 40px 20px;
    text-align: center;
    position: relative;
    color: white;
    height: 250px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.have-queries h2{
    color: white;
}
.query-text {
    font-size: 14px;
    margin-bottom: 15px;
}

.query-button {
    padding: 6px 12px;
    font-size: 14px;
    border: none;
    background: #007bff;
    color: white;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

.query-button:hover {
    background: #0056b3;
}

/* People We Work With */
.people-we-work-with {
    padding: 50px;
    text-align: center;
    background: #f9f9f9; /* Adjust to match website background */
}

.logos-slider {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 15px;
    overflow: hidden;
    background: transparent;
    padding: 10px 0;
    max-width: 60%; /* Reduce overall width */
    margin: 0 auto; /* Center the slider */
}

.logos-slider img {
    max-width: 80px; /* Reduce logo size */
    height: auto;
    filter: grayscale(100%);
    transition: filter 0.3s ease-in-out, transform 0.3s ease-in-out;
}

.logos-slider img:hover {
    filter: grayscale(0%);
    transform: scale(1.1);
}

#app {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    flex-grow: 1; /* Ensures content expands */
}

footer {
    margin-top: auto; /* Pushes footer to bottom */
    width: 100%;
    
}


/* Responsive */
@media screen and (max-width: 768px) {
    .content-wrapper {
        flex-direction: column;
        text-align: center;
    }

    .awards {
        flex-wrap: wrap;
    }

    .award img {
        width: 80px;
    }

    .have-queries {
        height: auto;
    }

    .query-button {
        font-size: 12px;
        padding: 5px 10px;
    }
}
</style>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>

function openTab(evt, tabName) {
    // Hide all tab contents
    var tabContent = document.getElementsByClassName("tab-content");
    for (var i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
    }

    // Remove "active" class from all tab links
    var tabLinks = document.getElementsByClassName("tab-link");
    for (var i = 0; i < tabLinks.length; i++) {
        tabLinks[i].classList.remove("active");
    }

    // Show the selected tab and mark the button as active
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.classList.add("active");
}

// Ensure the first tab is shown on page load
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("mission").style.display = "block";
});

$(document).ready(function(){
    $('.logos-slider').slick({
        slidesToShow: 3,  // Show 3 logos at a time
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: false,
        infinite: true,
        pauseOnHover: false,
        centerMode: true,  // Centers the active slide
        responsive: [
            { breakpoint: 1024, settings: { slidesToShow: 2 } },
            { breakpoint: 768, settings: { slidesToShow: 2 } },
            { breakpoint: 480, settings: { slidesToShow: 1 } }
        ]
    });
});

</script>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\services-app\resources\views/about.blade.php ENDPATH**/ ?>