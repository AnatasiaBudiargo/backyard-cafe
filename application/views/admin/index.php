
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">My Profile</h1>

                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="<?= base_url('assets/img/profile/') . $admin['image']; ?>">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $admin['name']; ?></h5>
                                    <p class="card-text"><?= $admin['email']; ?></p>
                                    <p class="card-text"><small class="text-muted">Admin since <?= date('d F Y', $admin['date_created']); ?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           