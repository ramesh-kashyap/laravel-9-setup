
@include('layouts.admin.header')

<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">


        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">User Activation /</span> Account
        </h4>

        <div class="row">
            <div class="col-md-12">

                <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <!-- Account -->
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="http://127.0.0.1:8000/admin/assets/img/avatars/14.png"
                                alt="user-avatar" class="d-block w-px-100 h-px-100 rounded"
                                id="uploadedAvatar" />
                            <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-2 mb-3" tabindex="0">
                                    <span class="d-none d-sm-block">Hi, Kapil</span>
                                    <i class="ti ti-upload d-block d-sm-none"></i>

                                </label>

                            </div>
                        </div>
                    </div>
                    <hr class="my-0">
                    <div class="card-body">
                        <form id="formAccountSettings"  action="{{route('admin.activate-admin')}}" method="POST" onsubmit="return amtValue()">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="username_res" class="form-label">Name</label>
                                        <input class="form-control" id="username_res" placeholder="Name" type="text" name="name" value="">

                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="userid" class="form-label">User ID</label>
                                    <input class="form-control check_sponsor_exist" data-response="username_res" required id="inputEmail3" placeholder="Username" type="text" name="user_id" value="" >
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="amount">Amount</label>

                                            <select class=" select2 form-control" name="amount" id="amount" >
                                                <option value="">select Amount</option>
                                                <option value="1000">&#8377; 1000</option>
                                                <option value="2500">&#8377; 2500</option>
                                                <option value="5000">&#8377; 5000</option>
                                                <option value="10000">&#8377; 10000</option>
                                                <option value="25000">&#8377; 25000</option>
                                                <option value="50000">&#8377; 50000</option>
                                                <option value="100000">&#8377; 100000</option>
                                                <option value="250000">&#8377; 250000</option>

                                               </select>

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
    @include('layouts.admin.footer')


