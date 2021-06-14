<div class="row d-flex justify-content-center">
            <div class="col-12">
                <ul id="progressbar" class="text-center">
                    <li class="active step0" id="step1">Booking</li>
                    <li class="step0" id="step2">Your Details</li>
                    <li class="step0" id="step3">Summary</li>
                </ul>            
            
            <form  method="post" action="<?= base_url('auth/booking2'); ?>" >
                <div class="slide1">
                    <div class="row form-cols justify-content-around">
                        <div class="form-col col-lg-5 col-md-10 col-sm-10 col-10 bookingData">
                            <div class="form-header">
                                <h5>Select Date And Time</h5>
                            </div>
                            <div class="flex-container">
                                <div class="form-group">
                                    <input class="form-control" type="date" id="date" name="date" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="time" id="time" name="time" min="08:00" max="23:00" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-col col-lg-5 col-md-10 col-sm-10 col-10 number-of-people">
                            <div class="form-header">
                                <h5>How Many People Are Coming?</h5>
                            </div>

                            <div class="input-group plus-minus-input justify-content-center">
                                <input class="input-group-field" type="number" name="quantity" id="quantity" value="<?= set_value('quantity'); ?>" required>
                                <div class="input-group-button">
                                    <button type="button" class="button hollow circle" data-quantity="minus" data-field="quantity">
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div class="input-group-button">
                                    <button type="button" class="button hollow circle" data-quantity="plus" data-field="quantity">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="d-flex">
                        <div class="ml-auto p-2 booking-button">
                            <div class="next-button next-satu" id="next1">
                            <button type="submit" > NEXT </button>
                            <a href="<?= base_url('auth/booking2'); ?>" >
                                
                            </div>
                        </div>
                    </div>
                </div>
            </form>