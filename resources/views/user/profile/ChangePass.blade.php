<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Change Password</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">

            <section class="bs-validation">
                <div class="row">

                    <div class="col-md-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Login Password</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('user.edit-password') }}" method="POST" class="form">
                                    @csrf
                                    <div class="box-body">
                                        <div class="row mg-b-25">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-control-label">Old Password <span class="tx-danger">*</span></label>
                                                    <input class="form-control" type="password" name="old_password" placeholder="Enter Old Password" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-control-label">New Password <span class="tx-danger">*</span></label>
                                                    <input class="form-control" type="password" name="password" placeholder="Enter New  Password" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-control-label">Confirm New Password <span class="tx-danger">*</span></label>
                                                    <input class="form-control" type="password" name="password_confirmation" placeholder="Enter Confirm New Password " required>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="box-footer">
                                            <a href="{{route('user.ChangePass')}}"> <button class="btn btn-primary" type="button">CANCEL</button> </a>
                                            <button class="btn btn-success" type="submit" name="cng34idr">UPDATE </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <hr>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Transaction Password</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('user.change-trxpasswword') }}" method="POST">
                                        @csrf
                                        <div class="box-body">
                                            <div class="row mg-b-25">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Old Password <span class="tx-danger">*</span></label>
                                                        <input class="form-control" type="password" name="old_password" placeholder="Enter Old Password" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label">New Password <span class="tx-danger">*</span></label>
                                                        <input class="form-control" type="password" name="password" placeholder="Enter New  Password" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Confirm New Password <span class="tx-danger">*</span></label>
                                                        <input class="form-control" type="password" name="password_confirmation" placeholder="Enter Confirm New Password " required>
                                                    </div>
                                                </div>

                                            </div>

                                            <br>

                                            <div class="box-footer">
                                                <a href="{{route('user.ChangePass')}}"> <button class="btn btn-primary" type="button">CANCEL</button> </a>
                                                <button class="btn btn-success" type="submit" name="cng68idtr">UPDATE </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </div>
</div>
