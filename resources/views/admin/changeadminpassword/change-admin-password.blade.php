


<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">


        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Change Admin /</span> Password
        </h4>

        <div class="row">
            <div class="col-md-12">

                <div class="card mb-4">
                    <h5 class="card-header">Change Password</h5>
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                    <strong style="color:#006633;">
                    {{ session()->get('message') }}
                    </strong>
                    </div>
                    @endif
                    <hr class="my-0">
                    <div class="card-body">
                        <form id="formAccountSettings"  action="{{route('admin.change-password-post')}}" method="POST" onsubmit="return amtValue()">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="old_password" class="form-control-label">Old Password</label>
                                        <input class="form-control" id="old_password" placeholder="Old Password" type="password" name="old_password" value="">

                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="password" class="form-control-label">New Password</label>
                                    <input class="form-control" id="password" placeholder="New Password" type="password" name="password" value="" >
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="confirm_password" class="form-control-label">Cofirm Password</label>
                                    <input class="form-control" id="confirm_password" placeholder="confirm Password" type="password" name="password_confirmation" value="" >
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Confirm</button>
                                <button type="reset" class="btn btn-label-secondary">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <!-- /Account -->
                </div>

            </div>
        </div>



    </div>
    <!-- / Content -->



