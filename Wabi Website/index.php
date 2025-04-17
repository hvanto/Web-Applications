<?php include "includes/header.php"; ?>

<!-- Navigation -->
<?php include "includes/navigation.php"; ?>


<!-- Homepage -->

<section class="homepage">

  <img class="homepage-iphone" src="images/wabi-phone.png" alt="Iphone Image">

  <div class="header">
    <h1 class="homepage-title">Point of sale.<br>
      Reservations.<br>
      Rostering.<br>
      In your pocket.</h1>
    <a href="#" class="button">Try It Free</a>
  </div>


</section>

<section class="price-card-section">
  <div class="row">
    <div class="col-xl-4">
      <div class="card-container pcontainer-1">
        <div class="card pc-1">
          <div class="card-inner">
            <div class="card-front pcard-front1">
              <h2 class="pricing-card-title card1-title">Reservations</h2>
              <div class="pricing-card-price card1-price price-card-price">$99/mo.</div>
              <button class="pricing-card-button price-button1">More Information</button>
              <button class="card-btn" onclick="flipCard(6)"><i class="fa-solid fa-plus fa-fc-icon"></i></button>
            </div>
            <div class="card-back card-back1">
              <p class="pc1-back-title">Reservations</p>
              <p class='pc1-back-text'>It’s as easy as it sounds. Download the wabi app on your
                iphone or ipad and be ready to take online bookings within minutes.
                Wabi reservations allows you to receive unlimited resverations and
                customise layouts for only $99 per month. No hidden fees or customer surcharge.</p>
              <button class="card-btn" onclick="flipCard(6)"><i class="fa-solid fa-plus fa-fc-icon"></i></button>

            </div>
          </div>
        </div>
        <div class="overlay"></div>
      </div>
    </div>

    <div class="col-xl-4">
      <div class="card-container pcontainer-2">
        <div class="card pc-2">
          <div class="card-inner">
            <div class="card-front pcard-front2">
              <h2 class="pricing-card-title card2-title">Point Of Sale</h2>
              <div class="pricing-card-price card2-price price-card-price">$99/mo.</div>
              <button class="pricing-card-button price-button2">More Information</button>
              <button class="card-btn" onclick="flipCard(7)"><i class="fa-solid fa-plus fa-fc-icon"></i></button>
            </div>
            <div class="card-back card-back1">
              <p class="pc2-back-title">Point Of Sale</p>
              <p class='pc2-back-text'>Finally a cloud base solution for restaurants
                that actually works. For just $99/mo take full control of your business,
                upload images, inventory and have access to all your data at your
                finger tips like never before.</p>
              <button class="card-btn" onclick="flipCard(7)"><i class="fa-solid fa-plus fa-fc-icon"></i></button>

            </div>
          </div>
        </div>
        <div class="overlay"></div>
      </div>
    </div>

    <div class="col-xl-4">
      <div class="card-container pcontainer-3">
        <div class="card pc-3">
          <div class="card-inner">
            <div class="card-front pcard-front3">
              <h2 class="pricing-card-title card3-title">Roster</h2>
              <div class="pricing-card-price card3-price price-card-price">$99/mo.</div>
              <button class="pricing-card-button price-button3">More Information</button>
              <button class="card-btn" onclick="flipCard(8)"><i class="fa-solid fa-plus fa-fc-icon"></i></button>
            </div>
            <div class="card-back card-back1">
              <p class="pc3-back-title">Roster</p>
              <p class='pc3-back-text'>Roster and team management at your finger tips like never before.
                Create custom rosters and budgets that fit your business. Keep track of your team
                by allowing them to clock in and out with there authenticated pin. confirm time
                sheets and make back of house a breeze let Wabi do the heavy lifting.</p>
              <button class="card-btn" onclick="flipCard(8)"><i class="fa-solid fa-plus fa-fc-icon"></i></button>

            </div>
          </div>
        </div>
        <div class="overlay"></div>
      </div>
    </div>

  </div>
</section>

<!-- Transition Section -->
<!-- <div class="content">
  <div class="second-section">
    <h2 class="second-title">The simplicity of Wabi.<br>All in an app.</h2>
    <p class="second-subtext">We have completely reinvented the way restaurants
      use tech. Putting businesses back in the driving seat and allowing them to
      choose when and what software they want to use and be charged. With
      customisation as its core, Wabi is the most simplistic and advanced
      restaurant technology of its kind.</p>

  </div>
</div> -->

<section class="flip-card-section">
  <div class="container">


    <div class="card-container">
      <div class="card card4">
        <div class="card-inner">
          <div class="card-front card-front4">
            <img src="images/wabiPay.png" alt="Eftpos Machine" class="fc4-front-img image">
            <h2 class="fc4-front-title image">Wabi Pay</h2>
            <p class="fc4-front-text image">Our trusted partners for eftpos terminals.</p>
            <button class="card-btn" onclick="flipCard(4)"><i class="fa-solid fa-plus fa-fc-icon"></i></button>
          </div>
          <div class="card-back card-back4">
            <h2 class="fc4-back-title">Windcave.</h2>
            <p class="fc4-back-text">We have partnered with Windcave to bring you
              the latest terminals to take your payments. Our
              Efpos bundles give you full unlimited access to
              all Wabi features for as low as 1.7% on all card
              transactions.</p>
            <button class="card-btn" onclick="flipCard(4)"><i class="fa-solid fa-plus fa-fc-icon"></i></button>
          </div>
        </div>
      </div>
      <div class="overlay"></div>
    </div>


    <div class="card-container">
      <div class="card card1">
        <div class="card-inner">
          <div class="card-front card-front1">
            <img alt="FIpad Picture" src="images/Ipad2.png" class="fc1-back-ipad image">
            <p class="fc1-back-title image">Simple</p>
            <p class='fc1-back-text image'>Wabi was created to be as simple as possible. Less clicks. Less sounds. More impact.</p>
            <button class="card-btn" onclick="flipCard(1)"><i class="fa-solid fa-plus fa-fc-icon"></i></button>
          </div>
          <div class="card-back card-back1">
            <h2 class='fc-1-title'>The simplicity of wabi</h2>
            <p class="fc-1-text">We have completely reinvented the way restaurants use tech. Putting businesses back in the 
              driving seat and allowing them to choose when and what software they want to use 
              and be charged. With customisation as its core wabi is the most simplistic and 
              Advanced restaurant technology of its kind.</p>
            <a href="https://apps.apple.com/au/app/wabify/id1525937298" class="apple-graph"><img src="images/apple.png" alt="Download Button" class="fc1-apple"></a>
            <img src="images/simple.png" alt="Graphs" class="fc1-graph">
            <button class="card-btn" onclick="flipCard(1)"><i class="fa-solid fa-plus fa-fc-icon"></i></button>
          </div>
        </div>
      </div>
      <div class="overlay"></div>
    </div>

    <!-- <div class="row">
      <div class="col-lg-6">
        <div class="card-container">
          <div class="card card2 ">

            <div class="card-inner">
              <div class="card-front card-front2">
                <h2 class="fc2-title image">Customer<br>Data.<br>Customer<br>Interactions.</h2>
                <button class="card-btn" onclick="flipCard(2)"><i class="fa-solid fa-plus fa-fc-icon"></i></button>
              </div>
              <div class="card-back card-back2">
                <h2 class="fc2-back-title">Tailored to you.</h2>
                <p class="fc2-back-text">Designed specifically owners and management in mind,
                  Wabi iOS app is perfect for keeping you in touch with live
                  notifications and updates and just as simple to add and
                  remove reservations.</p>
                <button class="card-btn" onclick="flipCard(2)"><i class="fa-solid fa-plus fa-fc-icon"></i></button>
              </div>
            </div>
          </div>
          <div class="overlay"></div>
        </div>
      </div>


      <div class="col-lg-6">
        <div class="card-container">
          <div class="card card3">
            <div class="card-inner">
              <div class="card-front card-front3">
                <img src="images/banner2.png" alt="flipcard banner" class="fc3-front-img image">
                <h2 class="fc3-title image">Reservations.<br>Point of Sale.<br>Team Management.<br>Eftpos Payments.<br>One App.</h2>
                <button class="card-btn" onclick="flipCard(3)"><i class="fa-solid fa-plus fa-fc-icon"></i></button>
              </div>
              <div class="card-back card-back3">
                <h2 class="fc3-back-title">Convenience for you.</h2>
                <p class="fc3-back-text">With our simplistic yet compact app, we are able to deliver
                  to you all the essential services your business needs to
                  operate all from within a single app.</p>
                <button class="card-btn" onclick="flipCard(3)"><i class="fa-solid fa-plus fa-fc-icon"></i></button>
              </div>
            </div>
          </div>
          <div class="overlay"></div>
        </div>
      </div>
    </div> -->

    <div class="card-container">
      <div class="card card-data">
        <div class="card-inner">
          <div class="card-front card-front1">
            <h2 class='fc-data-title'>Customer Data & Interaction</h2>
            <p class="fc-data-text">Designed with specifically owners and management in mind, Wabi 
              iOS app is perfect for keeping you in touch with live notifications 
              and updates and just as simple to ad and remove reservations.</p>
            <img src="images/data.png" alt="Iphone Image" class="fc-data-img image">
          </div>
        </div>
      </div>
      <div class="overlay"></div>
    </div>



    <div class="row">
      <div class="col-lg-6">
        <div class="card-container">
          <div class="card static1">
            <div class="card-inner">
              <div class="card-front static-front1">
                <img class="top-left-icon image" src="images/trophy.png" alt="Trophy Image">
                <h2 class="static-card-title image">500,000+</h2>
                <p class="static-text1 image">Bookings made using Wabi</p>
              </div>
            </div>
          </div>
          <div class="overlay"></div>
        </div>
      </div>


      <div class="col-lg-6">
        <div class="card-container">
          <div class="card static2">
            <div class="card-inner">
              <div class="card-front static-front2">
                <img class="top-left-icon image" src="images/handshake2.png" alt="Handshake Image">
                <img class="windcave-logo image" src="images/windcave.png" alt="Windcave Logo">
                <p class="static-text1 static-colour image">Our trusted partners for eftpos terminals</p>
              </div>
            </div>
          </div>
          <div class="overlay"></div>
        </div>
      </div>
    </div>

    <div class="card-container">
      <div class="card card5">
        <div class="card-inner">
          <div class="card-front card-front5">
            <img src="images/wabi-logo.png" alt="Wabi Logo" class="fc5-front-image image">
            <a class="fc-5-btn image">Get in touch</a>
          </div>
        </div>
      </div>
      <div class="overlay"></div>
    </div>

  </div>
</section>







<!-- Footer -->
<?php include "includes/footer.php"; ?>