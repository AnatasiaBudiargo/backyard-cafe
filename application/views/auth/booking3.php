<div class="row d-flex justify-content-center">
            <div class="col-12">
                <ul id="progressbar" class="text-center">
                    <li class="active step0" id="step1">Booking</li>
                    <li class="active step0" id="step2">Your Details</li>
                    <li class="active step0" id="step3">Summary</li>
                </ul>                     
                
                
                <div class="slide3">
                    <div class="row form-cols justify-content-around">
                        <div class="form-col col-lg-5 col-md-10 col-sm-10 col-10 summary-details">
                            <div class="form-header">
                                <h5>Confirm Your Details</h5>
                            </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label " for="first-name">First name:</label>
                                    <div class="col-sm-8">
                                        <input disabled="disabled" class="form-control" type="text" id="FirstName" name="first-name" placeholder="<?= $bookings[0]->FirstName ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label " for="last-name">Last name:</label>
                                    <div class="col-sm-8">
                                        <input disabled="disabled" class="form-control" type="text" id="last-name" name="first-name" placeholder="<?= $bookings[0]->LastName ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label " for="mobile">Mobile:</label>
                                    <div class="col-sm-8">
                                        <input disabled="disabled" class="form-control" type="text" id="mobile" name="mobile" placeholder="<?= $bookings[0]->phone ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label " for="email">Email:</label>
                                    <div class="col-sm-8">
                                        <input disabled="disabled" class="form-control" type="text" id="email" name="mobile" placeholder="<?= $bookings[0]->email ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label " for="address">Address:</label>
                                    <div class="col-sm-8">
                                        <input disabled="disabled" class="form-control" type="text" id="address" name="address" placeholder="<?= $bookings[0]->alamat ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label " for="notes">Notes:</label>
                                    <div class="col-sm-8">
                                        <input disabled="disabled" class="form-control" type="text" id="notes" name="notes" placeholder="<?= $bookings[0]->notes ?>">
                                    </div>
                                </div>

                            </div>
                            <div class="form-col col-lg-5 col-md-10 col-sm-10 col-10 summary-special-req">
                                <div class="form-header">
                                    <h5>Booking Data</h5>
                                </div>
                                <div class="summary-req">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label " for="address">Date:</label>
                                        <div class="col-sm-8">
                                            <input disabled="disabled" class="form-control" type="text" id="date" name="date" placeholder="<?= date("d M Y", strtotime($bookings[0]->date)) ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label " for="notes">Time:</label>
                                        <div class="col-sm-8">
                                            <input disabled="disabled" class="form-control" type="text" id="time" name="tim" placeholder="<?= $bookings[0]->time ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label " for="notes">Number of People:</label>
                                        <div class="col-sm-8">
                                            <input disabled="disabled" class="form-control" type="text" id="quantity" name="quantity" placeholder="<?= $bookings[0]->quantity ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="message">
                                    <p>
                                        <bold>confirm your booking details are correct before proceeding so that we can hold your table.</bold>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="mr-auto p-2 booking-button">
                                <div class="back-button" id="back2">
                                <a href="<?= base_url('auth/booking2'); ?>">
                                    <button>BACK</button>
                                </a>
                                </div>
                            </div>
                            <div class="ml-auto p-2 booking-button">
                            <a href="<?= base_url('auth/bookingsuccess'); ?>">
                                    <button>CONFIRM</button>
                                </a>
                            </div>
                        </div>
                </div>


