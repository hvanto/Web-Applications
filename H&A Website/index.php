<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>




<header class="header">
        <?php include "includes/navigation.php"; ?>
        <div class="line-container">
                <svg width="393" height="169" viewBox="0 0 393 169" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 2L53.7895 164.112H60.0405L109.267 3.87406H193.656M193.656 3.87406V164.112M193.656 3.87406H287.421M287.421 3.87406C360.28 2.48438 387.093 12.3778 389 84.4617C384.538 154.588 357.502 169.083 287.421 164.112V3.87406Z" stroke="white" stroke-width="6"/>
                </svg>
        </div>
        <h1 class="header__title">Melbourne Based Web Design Agency</h1>
        <div class="header__btn-div">
                <a href='#form'><button  class="header__btn">Contact Us</button></a>
        </div>

</header>

<main class="main">
        <div class="clipped_background">
                <div class="about">
                        <h2 class="about__title hidden">Who We Are</h2>
                        <p class="about__desc hidden">Our team is comprised of a variety of members all possessing different specialties, ranging from the technical back-end development <i class="fa-solid fa-computer about__icon"></i> to the front-end graphical design. <i class="fa-solid fa-pen-nib about__icon"></i></p>
                        <p class="about__desc-2 hidden">Having a rich experience within the industry and being exposed to the latest techniques used in webdesign, we are able to customise and tailor our services to your in a standard that exceeds your needs as a business.</p>
                </div>
        </div>

        <section class="work">
                <h2 class="work__title">Our Projects</h2>
                <div class="work__content">
                        <div class="work__content-group">
                                <h2 class="work__content__title">What <span>We</span> Can Do For <span>You</span></h2>
                                <p class="work__content__text">Over team prides itself in creating cutting edge designs that are guaranteed to catch users attention. With our diverse skillset we are able to tailor our website to your businesses needs and deliver a high quality, eye catching website.</p>

                        </div>

                        <div class="work__content__img-container-1">
                                <img src="img/ror.png" alt="Website Example" class="work__content-img-1">
                        </div>
                        <div class="work__content__img-container-2">
                                <img src="img/wabi.png" alt="Website Example" class="work__content-img-2">
                        </div>
                </div>
        </section>



        <section class="contact">
                <?php include "includes/form.php"; ?>
        </section>

</main>



<?php include "includes/footer.php"; ?>