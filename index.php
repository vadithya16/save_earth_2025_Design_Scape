<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Save Earth</title>
</head>
<body>

</body>
</html>


<?php include 'nav.php'; ?>
<!-- Hero Section -->
<section class="hero" id="home">
    <br>
    <h1>SAVE THE <span>MOTHER EARTH</span></h1>
    <p>Join Hands With Us, So Our Future Generation Breathe</p>
    <br>
    <img src="images/planet.svg" alt="Smiling Earth" class="planetsvg"><br><br><br>
    <a href="register.php" class="btn">Join The Community</a>&nbsp;&nbsp;&nbsp;<a href="Donate.php" class="btn1">Donate</a>
</section>

<!-- About Section -->
<section class="about" id="about">
	<h2>ABOUT</h2>
    <div class="divflex">
        <div class="about-content">
            <p class="psent">We Have To Help The Mother Earth, So Our Future Generation Can Live <span class="highlight">Happily</span>.
                Join Our Community To Support Us In Plantation And Reduce CO2.</p>
        </div>
        <div class="about-image">
            <img src="images/plant.png" alt="Planting Tree">
        </div>
    </div>
</section>

<!-- Resources Section -->
<section id="resource">
	<?php
    $videos = [
        "https://www.youtube.com/embed/W5bh1JFo43U?si=cT20MHMTgyitiDBu",
        "https://www.youtube.com/embed/QQYgCxu988s?si=pBzhBovzbVvo-Kte",
        "https://www.youtube.com/embed/lzVWXyXnarI?si=RSE98fmTFCRP3E9O"
    ];
?>
<div class="container1 text-center mt-4">
    <h1>RESOURCES</h1>
</div>

<div class="resources-slider">
    <button class="slider-btn prev-btn" onclick="prevSlide()">❮</button>
    <div class="resources-slider-track">
        <?php foreach ($videos as $video): ?>
            <div class="resources-video-item">
                <iframe width="100%" height="315" src="<?= $video ?>" frameborder="0" allowfullscreen></iframe>
            </div>
        <?php endforeach; ?>
    </div>
    <button class="slider-btn next-btn" onclick="nextSlide()">❯</button>
</div>

<script>
    let currentIndex = 0;
    function updateSlider() {
        const sliderTrack = document.querySelector('.resources-slider-track');
        sliderTrack.style.transform = `translateX(${-currentIndex * 100}%)`;
    }
    function nextSlide() {
        const totalSlides = document.querySelectorAll('.resources-video-item').length;
        if (currentIndex < totalSlides - 1) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateSlider();
    }
    function prevSlide() {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = document.querySelectorAll('.resources-video-item').length - 1;
        }
        updateSlider();
    }
</script>

</section>
<!-- Community Posts Section -->
<section id="community-posts">
    <?php
    // Dummy community posts (can be replaced with real posts data)
    $posts = [
        "This is a community post related to environment conservation...<a href='#'>Read More</a>",
        "Join us for a webinar on climate change awareness...<a href='#'>Read More</a>",
        "Volunteers needed for tree plantation event...<a href='#'>Read More</a>",
    ];
    ?>
    <div class="container2 text-center mt-4">
        <h1>COMMUNITY POSTS</h1>
    </div>

    <div class="community-slider">
        <button class="slider-btn prev-btn" onclick="prevPost()">❮</button>
        <div class="community-slider-track">
            <?php foreach ($posts as $post): ?>
                <div class="community-post-item">
                    <div class="post-content">
                        <p><?= $post ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="slider-btn next-btn" onclick="nextPost()">❯</button>
    </div>

    <script>
        let currentPostIndex = 0;
        function updatePostSlider() {
            const sliderTrack = document.querySelector('.community-slider-track');
            sliderTrack.style.transform = `translateX(${-currentPostIndex * 100}%)`;
        }

        function nextPost() {
            const totalPosts = document.querySelectorAll('.community-post-item').length;
            if (currentPostIndex < totalPosts - 1) {
                currentPostIndex++;
            } else {
                currentPostIndex = 0;
            }
            updatePostSlider();
        }

        function prevPost() {
            if (currentPostIndex > 0) {
                currentPostIndex--;
            } else {
                currentPostIndex = document.querySelectorAll('.community-post-item').length - 1;
            }
            updatePostSlider();
        }
    </script>

</section>

<section class="eco-testimonials">
    <h2 class="eco-testimonials__title">What Our Community Says</h2>
    <div class="eco-testimonials__container">
        <div class="eco-testimonials__testimonial">
            <p>"Planting trees is not just an act, it's a promise to the future."</p>
            <h4>- Alex Johnson</h4>
        </div>
        <div class="eco-testimonials__testimonial">
            <p>"Every small step towards sustainability counts. Let's save our planet together!"</p>
            <h4>- Maria Lopez</h4>
        </div>
        <div class="eco-testimonials__testimonial">
            <p>"Reducing plastic use and conserving water can make a significant impact!"</p>
            <h4>- Kevin Smith</h4>
        </div>
    </div>
</section>


    


<!-- Footer -->
<?php include 'footer.php'; ?>
</body>
</html>
