 <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-12 col-lg-12 col-md-12">
           
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row content">
                            <div class="col-lg-7 d-none d-lg-block pic">
                                <div class="con">
                                    <a href="<?= base_url('auth'); ?>">
                                        <div class="title">
                                            <h4> BACKYARD CAFE </h4>
                                            <p> UNPARALLED DINING EXPERIENCE </p>
                                        </div>
                                    </a>
                                    <hr>
                                    <h3 class="bold"> Admin </h3>
                                    <h3> Page </h3>
                                </div>
                            </div>
                            <div class="col-lg-5 input">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h2 text-gray-700 mb-4">Login</h1>
                                        <?= $this->session->flashdata('message'); ?>
                                    </div>
                       
                                    <form class="user" method="post" action="<?= base_url('auth/login'); ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?> 
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Password">
                                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?> 
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <br>
                                        
                                    </form>
                                   <div class="link" style="margin-top: 18vh;">
                                        <div> <a class="small" href="forgot-password.html">Forgot Password?</a> </div>
                                        <div> <a class="small" href="<?= base_url('auth/registration'); ?>">Create an Account!</a></div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

</div>