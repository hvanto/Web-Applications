<?php session_start(); ?>
<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>

<div class="home">
    <div class="home__group">
        <h1 class="home__title">Save <span class="home__title__span">Money</span><br> 
        Save <span class="home__title__span">Time</span><br> 
        Ensure <span class="home__title__span">Quality</span><br> 
        With <span class="home__title__span">RentIt</span></h2>
        <p class="home__text">Rent any of our available cars for the lowest price, 
        highest quality and flexibility!</p>
        <div class="home__buttons">
            <a href="" class="home__btn-enq">Book Today <i class="home__buttons_fa fa-solid fa-square-check"></i></a>
            <a href="" class="home__btn-enq2">Learn More <i class="home__buttons_fa fa-solid fa-circle-info"></i></a>
        </div>

    </div>
    <img src="img/suv.png" alt="SUV" class="home__img">

</div>

<div class="filter-titles">
        <h2 class="filter-title">Make A Booking <span class="orange-word">Today!</span></h2>
        <p class="filter-subtitle">In just a few simple clicks, you can be on your way!</p>
</div>

<!-- FORM -->
<form id="book_form" class="form-content hidden" action="includes/search.php" method="post">
    <div class="filter">
        <!-- Car Make -->
        <div class="filter__group">
            <label for="carMake" class="filter__title"><i class="filter__fa fa-solid fa-car"></i>Select Your Car Type</label>
            <select name="make" id="carMake" class="filter__selection" onchange="updateCarModels()" required>
                <option value="" class="filter__selection__car">Select Car Make</option>
                <option value="Toyota" class="filter__selection__car">Toyota</option>
                <option value="Honda" class="filter__selection__car">Honda</option>
                <option value="Ford" class="filter__selection__car">Ford</option>
                <option value="Audi" class="filter__selection__car">Audi</option>
            </select>
        </div>

        <!-- Car Model -->
        <div class="filter__group">
            <label class="filter__title" class="filter__title"><i class="filter__fa fa-solid fa-car"></i>Select Your Car Model</label>
            <select name="model" id="carModel" class="filter__selection" required>
                <option value="" class="filter__selection__car">Select Car Model</option>
            </select>
        </div>


        <!-- Pick Up Location -->
        <div class="filter__group">
            <label class="filter__title" for="pickLoc"><i class="filter__fa fa-solid fa-location-dot"></i>Select Pick Up Location</label>
            <select name="pick_loc" id="pickLoc" class="filter__selection" required>
                <option value="" class="filter__selection__car">Pick Up Location</option>
                <option value="Fairfield" class="filter__selection__car">Fairfield</option>
                <option value="Flemington" class="filter__selection__car">Flemington</option>
                <option value="Elwood" class="filter__selection__car">Elwood</option>
                <option value="Greensborough" class="filter__selection__car">Greensborough</option>
                <option value="Bundoora" class="filter__selection__car">Bundoora</option>
            </select>
        </div>


        <!-- Drop Off Location -->
        <div class="filter__group">
            <label class="filter__title" for="dropLoc"><i class="filter__fa fa-solid fa-location-dot"></i>Select Drop Off Location</label>
            <select name="drop_loc" id="dropLoc" class="filter__selection" required>
                <option value="" class="filter__selection__car">Drop Off Location</option>
                <option value="Fairfield" class="filter__selection__car">Fairfield</option>
                <option value="Flemington" class="filter__selection__car">Flemington</option>
                <option value="Elwood" class="filter__selection__car">Elwood</option>
                <option value="Greensborough" class="filter__selection__car">Greensborough</option>
                <option value="Bundoora" class="filter__selection__car">Bundoora</option>
            </select>
        </div>

        <div class="filter__group">
            <label class="filter__title" for="dateInput"><i class="filter__fa fa-solid fa-calendar"></i>Select Pick Up Date</label>
            <input type="date" id="dateInput" name="pick_date" class="filter__selection" required>
        </div>

        <div class="filter__group">
            <label class="filter__title" for="dateInput"><i class="filter__fa fa-solid fa-calendar"></i>Select Drop Off Date</label>
            <input type="date" id="dateInput" name="drop_date" class="filter__selection" required>
        </div>

    </div>
    <div class="filter__search">
        <button type="submit" name="submit" value="submit" class="home__btn-enq filter__search__btn">Search Now!</button>
    </div>
</form>

<!-- Submission Form -->
<div id="popup" class="popup">
    <div class="popup__content">
        <button class="closePopup"><i class="fa-solid fa-xmark"></i></button>
        <div class="popup__content__title">
            <h2 class="popup__content__title__main">CAR AVAILABLE!</h2>
            <p class="popup__content__title__sub">Confirm your details below to book your car today!</p>
        </div>
        <div class="popup__content__info">
            <div class="popup__content__info__details">
                <div class="popup__content__info__details__grouped">
                    <h2 class="popup__content__info__details__title"><i class="filter__fa fa-solid fa-car"></i>You will recieve: </h2>
                    <p class="popup__content__info__details__text"><?php echo $_SESSION['make']; ?> <?php echo $_SESSION['model']; ?></p>
                </div>
                <div class="popup__content__info__details__grouped">
                    <h2 class="popup__content__info__details__title"><i class="filter__fa fa-solid fa-location-dot"></i>Pick up location: </h2>
                    <p class="popup__content__info__details__text"><?php echo $_SESSION['pick_loc']; ?></p>
                </div>
                <div class="popup__content__info__details__grouped">
                    <h2 class="popup__content__info__details__title"><i class="filter__fa fa-solid fa-location-dot"></i>Drop off location: </h2>
                    <p class="popup__content__info__details__text"><?php echo $_SESSION['drop_loc']; ?></p>
                </div>
                <div class="popup__content__info__details__grouped">
                    <h2 class="popup__content__info__details__title"><i class="filter__fa fa-solid fa-calendar"></i>Dates: </h2>
                    <p class="popup__content__info__details__text"><?php echo $_SESSION['pick_date']; ?></p>
                </div>
            </div>
            <h2 class="popup__content__info__img-title">Your Car!</h2>
            <img src="<?php echo 'img/' . $_SESSION['model'] . '.png'; ?>" alt="Car Model" class="popup__content__info__img">
        </div>
        <button id="popup-btn" class="popup__content__btn home__btn-enq">CONFIRM</button>
    </div>
</div>


<div class="filter-titles">
        <h2 class="filter-title"><span class="orange-word">Our</span> Range</h2>
        <p class="filter-subtitle">View our range of cars and see for yourself how amazing they are.</p>
</div>

<div class="range">
    <div class="range__select">
        <!-- grid with all car options -->
        <a class="range__select__item" onclick="getCarDetails('Toyota Camry')">Toyota Camry</a>
        <a class="range__select__item" onclick="getCarDetails('Toyota Corolla')">Toyota Corolla</a>
        <a class="range__select__item" onclick="getCarDetails('Toyota Rav4')">Toyota Rav4</a>
        <a class="range__select__item" onclick="getCarDetails('Honda Accord')">Honda Accord</a>
        <a class="range__select__item" onclick="getCarDetails('Honda Civic')">Honda Civic</a>
        <a class="range__select__item" onclick="getCarDetails('Honda CR-V')">Honda CR-V</a>
        <a class="range__select__item" onclick="getCarDetails('Ford Mustang')">Ford Mustang</a>
        <a class="range__select__item" onclick="getCarDetails('Ford Focus')">Ford Focus</a>
        <a class="range__select__item" onclick="getCarDetails('Ford Escape')">Ford Escape</a>
        <a class="range__select__item" onclick="getCarDetails('Audi Q3')">Audi Q3</a>
        <a class="range__select__item" onclick="getCarDetails('Audi A5')">Audi A5</a>
        <a class="range__select__item" onclick="getCarDetails('Audi RS3')">Audi RS3</a>
    </div>
    <img id="image" src="img/camry.png" alt="Image" class="range__img">
    <div class="range__table">
        <!-- Table with car details -->
        <table class="range__table__details">
            <tr>
                <th class="range__table__details__title" colspan="2">Price <span id="price">$55</span></th>
                
            </tr>
            <tr class="range__table__details__rows">
                <td class="range__table__details__item table-title">Make</td>
                <td id="make" class="range__table__details__item">Toyota</td>
            </tr>
            <tr class="range__table__details__rows">
                <td class="range__table__details__item table-title">Model</td>
                <td id="model" class="range__table__details__item">Camry</td>
            </tr>
            <tr class="range__table__details__rows">
                <td class="range__table__details__item table-title">Year</td>
                <td id="year" class="range__table__details__item">2019</td>
            </tr>
            <tr class="range__table__details__rows">
                <td class="range__table__details__item table-title">Transmission</td>
                <td id="transmission" class="range__table__details__item">Automatic</td>
            </tr>
            <tr class="range__table__details__rows">
                <td class="range__table__details__item table-title">Fuel</td>
                <td id="fuel" class="range__table__details__item">Petrol</td>
            </tr>
            <tr class="range__table__details__rows">
                <td class="range__table__details__item table-title">Doors</td>
                <td id="doors" class="range__table__details__item">4</td>
            </tr>
        </table>
    </div>
</div>


<div class="banner">
    <h2 class="banner__heading">Save Money Using Local Suppliers!</h2>
    <h3 class="banner__subheading">Quality Selection of Cars, Large Range of Vehicles, 24/7 Support.</h3>
</div>

<div class="filter-titles">
        <h2 class="filter-title">Why <span class="orange-word">Us?</span></h2>
        <p class="filter-subtitle">Our core values and commitment to our customers guarantees satisfaction.</p>
</div>

<div class="values">
    <div class="values__card">
        <h2 class="values__card__title">Support</h2>
        <p class="values__card__text">We have a team dedicated to supporting you with any issues anytime and any day of the week.</p>
    </div>
    <div class="values__card">
        <h2 class="values__card__title">Reliability</h2>
        <p class="values__card__text">With our diverse selection of cars in all local areas, we guarntee you will be able rent out a suitable car for your situation.</p>
    </div>
    <div class="values__card">
        <h2 class="values__card__title">Quality</h2>
        <p class="values__card__text">Every car in our fleet must pass rigourous testing to ensure the vehicle is mechanically sound.</p>
    </div>
</div>


<?php include "includes/footer.php"; ?> 