const navLinks = document.getElementById('navLinks');
const burgerMenu = document.getElementById('burgerMenu');

// Add an event listener to the burger menu icon
burgerMenu.addEventListener('click', () => {
  // Toggle the "active" class to show/hide the menu
  navLinks.classList.toggle('active');
});


// Filtering Cars

function updateCarModels() {
  var carMake = document.getElementById("carMake").value;
  var carModelSelect = document.getElementById("carModel");
  
  // Clear previous options
  carModelSelect.innerHTML = '<option value="">Select Car Model...</option>';
  
  if (carMake === "Toyota") {
    // Add Toyota car models
    var toyotaModels = ["Camry", "Corolla", "Rav4"];
    for (var i = 0; i < toyotaModels.length; i++) {
      var option = document.createElement("option");
      option.text = toyotaModels[i];
      option.classList.add("filter__selection__car");
      carModelSelect.add(option);
    }
  } else if (carMake === "Honda") {
    // Add Honda car models
    var hondaModels = ["Accord", "Civic", "CR-V"];
    for (var i = 0; i < hondaModels.length; i++) {
      var option = document.createElement("option");
      option.text = hondaModels[i];
      option.classList.add("filter__selection__car");
      carModelSelect.add(option);
    }
  } else if (carMake === "Ford") {
    // Add Ford car models
    var fordModels = ["Mustang", "Focus", "Escape"];
    for (var i = 0; i < fordModels.length; i++) {
      var option = document.createElement("option");
      option.text = fordModels[i];
      option.classList.add("filter__selection__car");
      carModelSelect.add(option);
    }
  }  else if (carMake === "Audi") {
    // Add Ford car models
    var audiModels = ["Q3", "A5", "RS3"];
    for (var i = 0; i < audiModels.length; i++) {
      var option = document.createElement("option");
      option.text = audiModels[i];
      option.classList.add("filter__selection__car");
      carModelSelect.add(option);
    }
  }
}



///////////////// POP UP FORM
///////////////////////////////////////////////


// Check if the "success" query parameter is present in the URL
const urlParams = new URLSearchParams(window.location.search);
const successParam = urlParams.get('success');

if (successParam === 'true') {
    // Show the popup
    document.getElementById('popup').style.display = 'flex';

    // Close the popup when the "Close" button is clicked
    document.querySelector('.closePopup').addEventListener('click', function() {
        document.getElementById('popup').style.display = 'none';
    });
}
  


///////////////// POPUP CONFIRM

// Add an event listener to popup-btn id
document.getElementById('popup-btn').addEventListener('click', function() {
  // Return page back to index.php
  window.location.href = 'index.php';
});



///////////////////////////
/////////// CAR TABLE INFO

function getCarDetails(make) {

  switch (make) {
    case 'Toyota Camry':
      document.getElementById('image').src = "img/Camry.png";
      document.getElementById('price').textContent = "$55";
      document.getElementById('make').textContent = "Toyota";
      document.getElementById('model').textContent = "Camry";
      document.getElementById('year').textContent = "2019";
      document.getElementById('transmission').textContent = "Automatic";
      document.getElementById('fuel').textContent = "Petrol";
      document.getElementById('doors').textContent = "4";
      break;
    case 'Toyota Corolla':
      document.getElementById('image').src = "img/Corolla.png";
      document.getElementById('price').textContent = "$51";
      document.getElementById('make').textContent = "Toyota";
      document.getElementById('model').textContent = "Corolla";
      document.getElementById('year').textContent = "2022";
      document.getElementById('transmission').textContent = "Diesel";
      document.getElementById('fuel').textContent = "Petrol";
      document.getElementById('doors').textContent = "5";
      break;
    case 'Toyota Rav4':
      document.getElementById('image').src = "img/Rav4.png";
      document.getElementById('price').textContent = "$59";
      document.getElementById('make').textContent = "Toyota";
      document.getElementById('model').textContent = "Rav4";
      document.getElementById('year').textContent = "2023";
      document.getElementById('transmission').textContent = "Automatic";
      document.getElementById('fuel').textContent = "Petrol";
      document.getElementById('doors').textContent = "5";
      break;
    case 'Honda Civic':
      document.getElementById('image').src = "img/Civic.png";
      document.getElementById('price').textContent = "$64";
      document.getElementById('make').textContent = "Honda";
      document.getElementById('model').textContent = "Civic";
      document.getElementById('year').textContent = "2018";
      document.getElementById('transmission').textContent = "Manual";
      document.getElementById('fuel').textContent = "Petrol";
      document.getElementById('doors').textContent = "4";
      break;
    case 'Honda CR-V':
      document.getElementById('image').src = "img/CR-V.png";
      document.getElementById('price').textContent = "$79";
      document.getElementById('make').textContent = "Honda";
      document.getElementById('model').textContent = "CR-V";
      document.getElementById('year').textContent = "2021";
      document.getElementById('transmission').textContent = "Automatic";
      document.getElementById('fuel').textContent = "Diesel";
      document.getElementById('doors').textContent = "5";
      break;
    case 'Honda Accord':
      document.getElementById('image').src = "img/Accord.png";
      document.getElementById('price').textContent = "$49";
      document.getElementById('make').textContent = "Honda";
      document.getElementById('model').textContent = "Accord";
      document.getElementById('year').textContent = "2018";
      document.getElementById('transmission').textContent = "Automatic";
      document.getElementById('fuel').textContent = "Petrol";
      document.getElementById('doors').textContent = "4";
      break;
    case 'Ford Mustang':
      document.getElementById('image').src = "img/Mustang.png";
      document.getElementById('price').textContent = "$169";
      document.getElementById('make').textContent = "Ford";
      document.getElementById('model').textContent = "Mustang";
      document.getElementById('year').textContent = "2022";
      document.getElementById('transmission').textContent = "Manual";
      document.getElementById('fuel').textContent = "Petrol";
      document.getElementById('doors').textContent = "2";
      break;
    case 'Ford Focus':
      document.getElementById('image').src = "img/Focus.png";
      document.getElementById('price').textContent = "$59";
      document.getElementById('make').textContent = "Ford";
      document.getElementById('model').textContent = "Focus";
      document.getElementById('year').textContent = "2019";
      document.getElementById('transmission').textContent = "Manual";
      document.getElementById('fuel').textContent = "Diesel";
      document.getElementById('doors').textContent = "4";
      break;
    case 'Ford Escape':
      document.getElementById('image').src = "img/Escape.png";
      document.getElementById('price').textContent = "$52";
      document.getElementById('make').textContent = "Ford";
      document.getElementById('model').textContent = "Escape";
      document.getElementById('year').textContent = "2020";
      document.getElementById('transmission').textContent = "Automatic";
      document.getElementById('fuel').textContent = "Diesel";
      document.getElementById('doors').textContent = "5";
      break;
    case 'Audi Q3':
      document.getElementById('image').src = "img/Q3.png";
      document.getElementById('price').textContent = "$109";
      document.getElementById('make').textContent = "Audi";
      document.getElementById('model').textContent = "Q3";
      document.getElementById('year').textContent = "2022";
      document.getElementById('transmission').textContent = "Automatic";
      document.getElementById('fuel').textContent = "Petrol";
      document.getElementById('doors').textContent = "5";
      break;
    case 'Audi A5':
      document.getElementById('image').src = "img/A5.png";
      document.getElementById('price').textContent = "$79";
      document.getElementById('make').textContent = "Audi";
      document.getElementById('model').textContent = "A5";
      document.getElementById('year').textContent = "2018";
      document.getElementById('transmission').textContent = "Manual";
      document.getElementById('fuel').textContent = "Petrol";
      document.getElementById('doors').textContent = "4";
      break;
    case 'Audi RS3':
      document.getElementById('image').src = "img/rs3.png";
      document.getElementById('price').textContent = "$159";
      document.getElementById('make').textContent = "Audi";
      document.getElementById('model').textContent = "RS3";
      document.getElementById('year').textContent = "2023";
      document.getElementById('transmission').textContent = "Manual";
      document.getElementById('fuel').textContent = "Petrol";
      document.getElementById('doors').textContent = "4";
      break;
  }
};
