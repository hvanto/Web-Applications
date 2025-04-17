<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>





<header class='about-heading'>
    <div class="about-heading__bg">
        <?php include "includes/navigation.php"; ?>
    </div>

    <div class="about-heading__text">
        <h1 class="about-heading__text__title">Get To Know Us</h1>
    </div>
</header>

<main>
    <div class="about-main">
        <h2 class="about-main__title">Our Values</h2>
        <div class="about-main__values">
            <div class="about-main__desc1">
                <h3 class="about-main__desc1__title1">Eye Catching</p>
                <p class="about-main__desc1__text1">At H&A we have a love for design, striving to combine beauty with functionality, tailoring our designs around you business ideas and values.</p>
            </div>
            <div class="about-main__desc2">
                <h3 class="about-main__desc2__title2">Collaboration</p>
                <p class="about-main__desc2__text2">Our team works hard in not only putting your dreams into a website, but also in developing a strong relationship with your business in an attempt to truly understand and build up your business.</p>
            </div>
            <div class="about-main__desc3">
                <h3 class="about-main__desc3__title3">Ethics</p>
                <p class="about-main__desc3__text3">Since day one, we have stood by our word in that maintaining fairness and transparency in both our work and our relationships is a must, in all cases of business.</p>
            </div>
        </div>
    </div>
    
    <div class="about-story">
        <h2 class="about-story__title">Our Story</h2>
        <div class="about-story__group">
            <div class="about-story__desc">
                <h2 class="about-story__desc__title">The Beginning</h2>
                <p class="about-story__desc__text">H&A was founded in 2022 by two young entrepreneurs, whom had a shared vision of 
                improving businesses through delicate and robust websites. Our journey began as we realised a lot of businesses, small and large, weren't satisfied with their business websites as they either didn't fulfill any practical purpose or were lacking in marketing their business values and culture.</p>
                <p class="about-story__desc__text2">Since founding H&A, we have worked with a wide range of clients, from small start-ups to large corporations, and have helped them all to achieve their goals. We are proud of our work and the relationships we have built with our clients, and we look forward to working with you.</p>
            </div>
            <img src="img/code.jpg" alt="Coding" class="about-story__img">
        </div>
    </div>

    <div class="about-card-title2">
        <h2 class="about-story__title title-spacing">Key Features</h2>
    </div>

    <div class="about-card">
        <div class="about-container">
            <!-- CARD 1 -->
            <div class="card">
                <div class="face face1">
                    <div class="content2">
                    <i class="about-card-icon fa-solid fa-mobile"></i>
                    <h3 class="about-card-title">Optimised</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content2">
                        <p class="about-card-text">In bringing our designs to life, they must also 
                            be scalable across all platforms. Meaning all delivered websites are 
                            optimised for mobile, tablet and desktop.</p> 
                        <a class="about-card-link" href="app-dev.php" type="button">Read More</a>
                    </div>
                </div>
            </div>
            <!-- CARD 2 -->
            <div class="card">
                <div class="face face1">
                    <div class="content2">
                    <i class="about-card-icon fa-solid fa-desktop"></i>
                    <h3 class="about-card-title">Embedded SEO</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content2">
                        <p class="about-card-text">Within each of our sites, we follow structures 
                            that support higher rankings in the Google algorithm, resulting in greater 
                            leads for your website.
                        </p>
                        <a class="about-card-link" href="seo-marketing.php" type="button">Read More</a>
                    </div>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="card">
                <div class="face face1">
                    <div class="content2">
                    <i class="about-card-icon fa-regular fa-pen-to-square"></i>
                    <h3 class="about-card-title">Revisions</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content2">
                        <p class="about-card-text">We offer 3 free
                            revisions to ensure that you are satisfied with your website 
                            ensuring it is tailored to you and your businesses needs. 
                        </p>
                        <a class="about-card-link" href="web-dev.php" type="button">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>        
        






</main>

<footer>


</footer>



<?php include "includes/footer.php"; ?>