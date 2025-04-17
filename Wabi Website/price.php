<?php include "includes/header.php"; ?>

<!-- Navigation -->
<?php include "includes/navigation.php"; ?>





<div class="pricing-cards-container">
  <div class="pricing-card price-card1">
    <h2 class="pricing-card-title card1-title">Reservations</h2>
    <div class="pricing-card-price card1-price">$99/mo.</div>
    <button onclick="scrollToTables()" id="button1" class="pricing-card-button price-button1">View Features</button>
  </div>
  <div class="pricing-card price-card2">
    <h2 class="pricing-card-title card2-title">Point of Sale</h2>
    <div class="pricing-card-price card2-price">$99/mo.</div>
    <button onclick="scrollToTables()" id="button2" class="pricing-card-button price-button2">View Features</button>
  </div>
  <div class="pricing-card price-card3">
    <h2 class="pricing-card-title card3-title">Roster</h2>
    <div class="pricing-card-price card3-price">$99/mo.</div>
    <button onclick="scrollToTables()" id="button3" class="pricing-card-button price-button3">View Features</button>
  </div>
</div>

<section id="tables">
  <div id="table1" class="price-table">
    <div class="table-container">
      <table class="pricing-table-1">
        <thead>
          <tr class="price-row">
            <th class="table-title">FEATURES</th>
            <th class="table-title">RESERVATIONS</th>
          </tr>
        </thead>
        <tbody>
          <tr class="price-row">
            <td class="table-content price-table-border" data-label="Column 1">Table Layout Customisation</td>
            <td class="table-content" data-label="Column 2"><i class="fa-solid fa-check fa-price-icon"></i></td>
          </tr>
          <tr class="price-row">
            <td class="table-content price-table-border" data-label="Column 1">Flexible Booking Options</td>
            <td class="table-content" data-label="Column 2"><i class="fa-solid fa-check fa-price-icon"></i></td>
          </tr>
          <tr class="price-row">
            <td class="table-content price-table-border" data-label="Column 1">Guest Information Collection</td>
            <td class="table-content" data-label="Column 2"><i class="fa-solid fa-check fa-price-icon"></i></td>
          </tr>
          <tr class="price-row">
            <td class="table-content price-table-border" data-label="Column 1">Waitlist Management</td>
            <td class="table-content" data-label="Column 2"><i class="fa-solid fa-check fa-price-icon"></i></td>
          </tr>
          <tr class="price-row">
            <td class="table-content price-table-border" data-label="Column 1">Reservation Reminders</td>
            <td class="table-content" data-label="Column 2"><i class="fa-solid fa-check fa-price-icon"></i></td>
          </tr>
          <tr class="price-row">
            <td class="table-content price-table-border" data-label="Column 1">Reporting and Analytics</td>
            <td class="table-content" data-label="Column 2"><i class="fa-solid fa-check fa-price-icon"></i></td>
          </tr>
          <tr class="price-row">
            <td class="table-content price-table-border" data-label="Column 1">Feedback and Reviews</td>
            <td class="table-content" data-label="Column 2"><i class="fa-solid fa-check fa-price-icon"></i></td>
          </tr>
          <tr class="price-row">
            <td class="table-content price-table-border" data-label="Column 1">Fluid Integration</td>
            <td class="table-content" data-label="Column 2"><i class="fa-solid fa-check fa-price-icon"></i></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div id="table2" class="price-table">
    <div class="table-container">
      <table class="pricing-table-2">
        <thead>
          <tr class="price-row">
            <th class="table-title">FEATURES</th>
            <th class="table-title">POS</th>
          </tr>
        </thead>
        <tbody>
          <tr class="price-row">
            <td class="table-content price-table-border" data-label="Column 1">Customisable Menu</td>
            <td class="table-content" data-label="Column 2"><i class="fa-solid fa-check fa-price-icon"></i></td>
          </tr>
          <tr class="price-row">
            <td class="table-content price-table-border" data-label="Column 1">Order Management</td>
            <td class="table-content" data-label="Column 2"><i class="fa-solid fa-check fa-price-icon"></i></td>
          </tr>
          <tr class="price-row">
            <td class="table-content price-table-border" data-label="Column 1">Payment Processing</td>
            <td class="table-content" data-label="Column 2"><i class="fa-solid fa-check fa-price-icon"></i></td>
          </tr>
          <tr class="price-row">
            <td class="table-content price-table-border" data-label="Column 1">Reporting and Analytics</td>
            <td class="table-content" data-label="Column 2"><i class="fa-solid fa-check fa-price-icon"></i></td>
          </tr>
          <tr class="price-row">
            <td class="table-content price-table-border" data-label="Column 1">Integration With Delivery Services</td>
            <td class="table-content" data-label="Column 2"><i class="fa-solid fa-check fa-price-icon"></i></td>
          </tr>
          <tr class="price-row">
            <td class="table-content price-table-border" data-label="Column 1">Inventory Tracking</td>
            <td class="table-content" data-label="Column 2"><i class="fa-solid fa-check fa-price-icon"></i></td>
          </tr>
          <tr class="price-row">
            <td class="table-content price-table-border" data-label="Column 1">Employee Access Controls</td>
            <td class="table-content" data-label="Column 2"><i class="fa-solid fa-check fa-price-icon"></i></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


  <div id="table3" class="price-table">
    <div class="table-container">
      <table class="pricing-table-3">
        <thead>
          <tr class="price-row">
            <th class="table-title">FEATURES</th>
            <th class="table-title">ROSTER</th>
          </tr>
        </thead>
        <tbody>
          <tr class="price-row">
            <td class="table-content price-table-border" data-label="Column 1">Employee Scheduling</td>
            <td class="table-content" data-label="Column 2"><i class="fa-solid fa-check fa-price-icon"></i></td>
          </tr>
          <tr class="price-row">
            <td class="table-content price-table-border" data-label="Column 1">Time and Attendance Tracking</td>
            <td class="table-content" data-label="Column 2"><i class="fa-solid fa-check fa-price-icon"></i></td>
          </tr>
          <tr class="price-row">
            <td class="table-content price-table-border" data-label="Column 1">Shift Swapping</td>
            <td class="table-content" data-label="Column 2"><i class="fa-solid fa-check fa-price-icon"></i></td>
          </tr>
          <tr class="price-row">
            <td class="table-content price-table-border" data-label="Column 1">Employee Availability</td>
            <td class="table-content" data-label="Column 2"><i class="fa-solid fa-check fa-price-icon"></i></td>
          </tr>
          <tr class="price-row">
            <td class="table-content price-table-border" data-label="Column 1">Labour Cost Tracker</td>
            <td class="table-content" data-label="Column 2"><i class="fa-solid fa-check fa-price-icon"></i></td>
          </tr>
          <tr class="price-row">
            <td class="table-content price-table-border" data-label="Column 1">Payroll Integration</td>
            <td class="table-content" data-label="Column 2"><i class="fa-solid fa-check fa-price-icon"></i></td>
          </tr>
          <tr class="price-row">
            <td class="table-content price-table-border" data-label="Column 1">Reporting and Analytics</td>
            <td class="table-content" data-label="Column 2"><i class="fa-solid fa-check fa-price-icon"></i></td>
          </tr>
          <tr class="price-row">
            <td class="table-content price-table-border" data-label="Column 1">Communication Tools</td>
            <td class="table-content" data-label="Column 2"><i class="fa-solid fa-check fa-price-icon"></i></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>


<!-- JavaScript For Loading Dif Tables -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    // Hide all divs except the first one initially
    $('#table2, #table3').hide();

    // When button1 is clicked, show table1 and hide the other tables
    $('#button1').click(function() {
      $('#table1').show();
      $('#table2, #table3').hide();
    });

    // When button2 is clicked, show table2 and hide the other tables
    $('#button2').click(function() {
      $('#table2').show();
      $('#table1, #table3').hide();
    });

    // When button3 is clicked, show table3 and hide the other tables
    $('#button3').click(function() {
      $('#table3').show();
      $('#table1, #table2').hide();
    });
  });
</script>




<?php include "includes/footer.php"; ?>