    <!-- JUMBOTRON -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="logo">
                <span class="title"> BACKYARD CAFE </span> <br>
                <span class="title2"> UNPARALLELED DINING EXPERIENCE </span>
            </div>
            <div class="row">
                <div class="col-lg">
                    <h1 class="display-4"> An <span> elevated </span> culinary <span> experience </span> in Surabaya
                    </h1>
                    <p> Catering (+62) 123-456-789 / Office (+62) 987-654-321 / Email @VanaSurabaya.com </p>
                    <div class="row row-cols-4 sosmed">
                        <div class="col-auto">
                            <a href="#"> <img src="<?= base_url('assets/img/sosmed/facebook.png'); ?>" alt="facebook"> </a>
                        </div>
                        <div class="col-auto">
                            <a href="#"> <img src="<?= base_url('assets/img/sosmed/instagram.png'); ?>" alt="instagram"> </a>
                        </div>
                        <div class="col-auto">
                            <a href="#"><img src="<?= base_url('assets/img/sosmed/twitter.png'); ?>" alt="twitter"> </a>
                        </div>
                        <div class="col-auto">
                            <a href="#"><img src="<?= base_url('assets/img/sosmed/email.png');?>" alt="email"> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- AKHIR JUMBOTRON -->


    <!-- LOCATION -->
    <section class="location " id="location ">
        <div class="container ">
            <div class="row ">
                <div class="col-lg text-center ">
                    <h3> We are located on 04 Tunjungan Street, in Surabaya, Indonesia </h3>
                    <h3> from 11:00am to 03.00pm. </h3>
                    <h6> NOVEMBER 10, 2020 </h6>
                    <a href="#"> <img src="<?= base_url('assets/img/ICON/twitter-icon.png'); ?>" alt=" "> Follow @VanaCafe </a>
                </div>
            </div>
        </div>
    </section>

    <!-- AKHIR LOCATION -->

    <!-- BOOK AND EVENT -->
    <section class="book-and-event " id="book-and-event ">
        <div class="container book ">
            <div class="row ">
                <div class="col-lg text-center ">
                    <h1 class="js"> We'll cater any size party </h1>
                    <p class="js"> We will make your dream party come true with various kinds and supported by international <br> standard dishes, venues, decorations and services.</p>
                    <a href="#" class="js"> BOOK AND EVENT </a>
                </div>
            </div>
        </div>
    </section>


    <!-- AKHIR BOOK AND EVENT -->

    <!-- PHOTO MENU -->
    <section class="photo-menu" id="photo-menu">
        <div class="card-group">
            <div class="card">
                <a href="#gambar-satu">
                    <img src="<?= base_url('assets/img/satu.jpg'); ?>" class="card-img-top" alt="satu">
                </a>
                <div class="overlay" id="gambar-satu">
                    <img src="<?= base_url('assets/img/satu.jpg'); ?>" alt="satu">
                    <a href="#gambar-dua" class="next"> next </a>
                    <a href="#" class="close"> <img src="<?= base_url('assets/img/ICON/close.png'); ?>" alt="close"> </a>
                </div>
            </div>
            <div class="card ">
                <a href="#gambar-dua">
                    <img src="<?= base_url('assets/img/dua.jpg'); ?>" class="card-img-top" alt="dua">
                </a>
                <div class="overlay" id="gambar-dua">
                    <a href="#gambar-satu" class="prev"> Prev </a>
                    <img src="<?= base_url('assets/img/dua.jpg'); ?>" alt="dua">
                    <a href="#gambar-tiga" class="next"> next </a>
                    <a href="#" class="close"> <img src="<?= base_url('assets/img/ICON/close.png'); ?>" alt="close"> </a>
                </div>
            </div>

            <div class="card ">
                <a href="#gambar-tiga">
                    <img src="<?= base_url('assets/img/tiga.jpg'); ?>" class="card-img-top" alt="tiga">
                </a>
                <div class="overlay" id="gambar-tiga">
                    <a href="#gambar-dua" class="prev"> Prev </a>
                    <img src="<?= base_url('assets/img/tiga.jpg'); ?>" alt="tiga">
                    <a href="#gambar-empat" class="next"> next </a>
                    <a href="#" class="close"> <img src="<?= base_url('assets/img/ICON/close.png'); ?>" alt="close"> </a>
                </div>
            </div>

            <div class="card ">
                <a href="#gambar-empat">
                    <img src="<?= base_url('assets/img/empat.jpg'); ?>" class="card-img-top " alt="empat ">
                </a>
                <div class="overlay" id="gambar-empat">
                    <a href="#gambar-tiga" class="prev"> Prev </a>
                    <img src="<?= base_url('assets/img/empat.jpg'); ?>" alt="empat">
                    <a href="#" class="close"> <img src="<?= base_url('assets/img/ICON/close.png'); ?>" alt="close"> </a>
                </div>
            </div>
        </div>
    </section>

    <!-- AKHIR PHOTO MENU -->

    <!-- MENU -->
    <section class="menu " id="menu ">
        <div class="menu-isi ">
            <div class="container konten">
                <div class="row">
                    <div class="col-lg-3">
                        <hr>
                    </div>
                    <div class="col-lg-6">
                        <h1> SOMETHING FOR EVERYONE </h1>
                        <h5> BURGER + SANDWICH + SOUP + SALADS </h5>
                    </div>
                    <div class="col-lg-3">
                        <hr>
                    </div>
                </div>
                <a href="<?= base_url('auth/menu'); ?>"> VIEW MENU </a>
            </div>
        </div>
    </section>

    <!-- AKHIR MENU -->


    <!-- OUR CHEF -->
    <section id="our-chef" class="our-chef mb-5 ">
        <div class="container">
            <div class="row pt-4 mb-4 ">
                <div class="col text-center ">
                    <h1 class="title "> OUR CHEF </h1>
                </div>
            </div>
            <div class="row gambar">
                <div class="col-lg-4 gmbr">
                    <img src="<?= base_url('assets/img/chef/chef-1.jpg'); ?>" alt="chef-1">
                    <div class="lapisan">
                        <div class="konten">
                            <h4> CHEF A </h4>
                            <a href="#"> <img src="<?= base_url('assets/img/ICON/facebook.png');?>" alt="facebook"> </a>
                            <a href="#"> <img src="<?= base_url('assets/img/ICON/twitter.png');?>" alt="twitter"> </a>
                            <a href="#"> <img src="<?= base_url('assets/img/ICON/linkedin.png');?>" alt="linkedin"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 gmbr">
                    <img src="<?= base_url('assets/img/chef/chef-2.jpg'); ?>" alt="chef-2">
                    <div class="lapisan">
                        <div class="konten">
                            <h4> CHEF B </h4>
                            <a href="#"> <img src="<?= base_url('assets/img/ICON/facebook.png');?>" alt="facebook"> </a>
                            <a href="#"> <img src="<?= base_url('assets/img/ICON/twitter.png');?>" alt="twitter"> </a>
                            <a href="#"> <img src="<?= base_url('assets/img/ICON/linkedin.png');?>" alt="linkedin"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 gmbr">
                    <img src="<?= base_url('assets/img/chef/chef-3.jpg'); ?>" alt="chef-3">
                    <div class="lapisan">
                        <div class="konten">
                            <h4> CHEF C </h4>
                            <a href="#"> <img src="<?= base_url('assets/img/ICON/facebook.png');?>" alt="facebook"> </a>
                            <a href="#"> <img src="<?= base_url('assets/img/ICON/twitter.png');?>" alt="twitter"> </a>
                            <a href="#"> <img src="<?= base_url('assets/img/ICON/linkedin.png');?>" alt="linkedin"> </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- AKHIR OUR CHEF -->

<!-- TESTIMONIALS -->
<section id ="testimonials"  style="background-color: #f3f3f3; padding: 7vh;">
        <div class="container">
            <div class="row">
                <div class="col text-center"> 
                    <h1>TESTIMONIALS</h1> </div>
            </div>
            <form method="POST" action="<?= base_url('admin/create_process'); ?>">
                     <?= $this->session->flashdata('message'); ?>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="text" class="form-control form-control-user"
                    id="email" name="email" placeholder="Enter Email Address" value="<?= set_value('email'); ?>">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="Testimonials">Testimonials</label>
                    <textarea type="text" id="testi" name="testi"  class="form-control" rows="3" placeholder="Your testimonials"></textarea>
                </div>
                <button type="submit" value="save" class="btn btn-primary">Submit</button>
            </form>
        </div>
</section>