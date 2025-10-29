@extends('layouts.app')

@section('content')

<section class="hero">
    <div class="overlay">
        <h1>FAQ</h1>
    </div>
</section>

<section class="have-question">
    <h2>Have Questions?</h2>
    <p>
        Aliquam suscipit felis a arcu laoreet congue. Habeo nemore appellantur eu usu putant adolescens consequuntur ei, 
        mel tempor consulatu voluptaria. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    </p>
</section>

<section class="faq-section">
    <div class="faq-container">
        <div class="faq-item">
            <button class="faq-question">Luctus nec ullamcorper mattis ?</button>
            <div class="faq-answer">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">Fusce porta euismod magna eu vehicula ?</button>
            <div class="faq-answer">
                <p>Aliquam suscipit felis a arcu laoreet congue...</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">Fusce porta euismod magna eu vehicula ?</button>
            <div class="faq-answer">
                <p>Aliquam suscipit felis a arcu laoreet congue...</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">Fusce porta euismod magna eu vehicula ?</button>
            <div class="faq-answer">
                <p>Aliquam suscipit felis a arcu laoreet congue...</p>
            </div>
        </div>
    </div>
</section>

@endsection

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
    background: url('images/cost.jpg') center/cover no-repeat;
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

h2 {
    font-size: 2rem;
    font-weight: bold;
    color: black;
    text-transform: uppercase;
    margin-bottom: 20px;
}

.have-question {
    padding: 50px;
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.faq-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

.faq-item {
    border-bottom: 1px solid #ccc;
    padding: 10px 0;
}

.faq-question {
    width: 100%;
    text-align: left;
    font-size: 1.2rem;
    font-weight: bold;
    background: none;
    border: none;
    cursor: pointer;
    padding: 10px;
}

.faq-answer {
    display: none;
    padding: 10px;
    opacity: 0;
    max-height: 0;
    overflow: hidden;
    transition: opacity 0.3s ease, max-height 0.3s ease;
}

.faq-item.active .faq-answer {
    display: block;
    opacity: 1;
    max-height: 500px; /* Adjust this value if needed */
}

</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".faq-question").forEach((item) => {
        item.addEventListener("click", function () {
            let parent = this.parentNode;
            parent.classList.toggle("active");

            let answer = parent.querySelector(".faq-answer");
            if (parent.classList.contains("active")) {
                answer.style.display = "block";
            } else {
                answer.style.display = "none";
            }
        });
    });
});

</script>
