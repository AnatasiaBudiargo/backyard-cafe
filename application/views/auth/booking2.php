<div class="row d-flex justify-content-center">
            <div class="col-12">
                <ul id="progressbar" class="text-center">
                    <li class="active step0" id="step1">Booking</li>
                    <li class="active step0" id="step2">Your Details</li>
                    <li class="step0" id="step3">Summary</li>
                </ul>     

<form action="<?= base_url('auth/update_processBooking'); ?>" method="POST">

                <div class="slide2">
                    <div class="row form-cols justify-content-center">
                        <div class="form-col col-lg-6 col-md-8 col-sm-8 col-8 personal-details text-center">
                            <div class="form-group">
                                <input type="hidden" name="product_id" value="<?= $id; ?>" readOnly>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" id="FirstName" name="FirstName" placeholder="First Name*">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" id="LastName" name="LastName" placeholder="Last Name*">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" id="mobile" name="mobile" placeholder="Mobile*">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" id="email" name="email" placeholder="Email*">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" id="address" name="address" placeholder="Address*">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" id="notes" name="notes" placeholder="Notes">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="mr-auto p-2 booking-button">
                            <div class="back-button" id="back1">
                            <a href="<?= base_url('auth/booking1'); ?>">
                                <button>BACK</button>
                            </a>
                                
                            </div>
                        </div>
                        <div class="ml-auto p-2 booking-button">
                            <div class="next-button" id="next2">
                            <button type="submit"> NEXT </button>
                            </div>
                        </div>
                    </div>
                </div>

</form>


        