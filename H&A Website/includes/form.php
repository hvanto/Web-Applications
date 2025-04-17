<h2 class="enquiry-heading-1 hidden">Excited to work with <span>us</span> to build <span>your</span> website?</h2>
<h2 class="enquiry-heading-2 hidden">Enquire with <span>us</span> today!</h2>


<div class="container grid-structure">
    <form id="form" name="emailContact" class="form-content hidden" action="includes/db.php" method="post">

        <div class="row justify-content-center mb-3 form-content">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-4 col-sm-12 mb-3">
                    <label class="form-label">First Name<em>*</em></label>
                    <input type="text" class="form-control" name="first_name" placeholder="E.g. John" required>
                </div>

                <div class="col-lg-4 col-sm-12 mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name" placeholder="E.g. Smith">
                </div>
            </div>

            <div class="row justify-content-center mb-3">
                <div class="col-lg-5 col-sm-12 mb-3">
                    <label class="form-label">Email<em>*</em></label>
                    <input type="text" class="form-control" name="email" placeholder="E.g. 'name@example.com'" required>
                </div>
                <div class="col-lg-3 col-sm-12 mb-3">
                    <label class="form-label">Mobile<em>*</em></label>
                    <input type="text" class="form-control" name="mobile" placeholder="E.g. 0412 345 678" required>
                </div>
            </div>
            <div class="row justify-content-center  mb-3">

                <div class="col-lg-5 col-sm-12 mb-3">
                    <label class="form-label">Paste existing website below</label>
                    <input type="text" class="form-control" name="existing_website" placeholder="E.g. 'https://www.apple.com/au/'">
                </div>
                <div class="form-group col-lg-3 col-sm-12 mb-3">
                    <label class="form-label">Price range</label>
                    <select id="inputState" name="price_range" class="form-control">
                        <option selected>Select one of the options</option>
                        <option>$500 - 1000</option>
                        <option>$1000 - 2000</option>
                        <option>$2000 - 5000</option>
                        <option>$5000 - 10,000</option>
                        <option>$10,000+</option>
                    </select>
                </div>

            </div>

            <div class="row justify-content-center mb-3">
                <div class="col-lg-8 col-sm-12 mb-3">
                    <div class="form-group">
                        <label class="form-label" for="exampleFormControlTextarea1">Please input any other
                            requests/considerations that you have</label>
                        <textarea class="form-control" name="requests" id="exampleFormControlTextarea1" rows="2"></textarea>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-lg-8 col-sm-12">
                    <span class="form-label" required>By ticking the checkbox you are agreeing to our terms and conditions
                        and acknowledging that we as a
                        business use trusted external softwares to process the forms submitted</span>
                </div>
            </div>
            <div class="form-footer-content">
                <div class="form-check col-lg-2">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        I agree to the terms and conditions
                    </label>
                </div>
                <div class="col-lg-1 form-submit">
                    <button type="submit" class="form-btn btn btn-primary mb-2" name="submit" value="submit">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>