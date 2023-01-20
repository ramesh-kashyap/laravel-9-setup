<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">


        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Account Settings /</span> Account
        </h4>

        <div class="row">
            <div class="col-md-12">

                <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <!-- Account -->
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="{{asset('')}}admin/assets/img/avatars/14.png"
                                alt="user-avatar" class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar" />
                            <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-2 mb-3" tabindex="0">
                                    <span class="d-none d-sm-block">Hi, {{($profile)?$profile->name:''}}</span>
                                    <i class="ti ti-upload d-block d-sm-none"></i>

                                </label>

                            </div>
                        </div>
                    </div>
                    <hr class="my-0">
                    <div class="card-body">
                        <form id="formAccountSettings" action="{{ route('admin.update-user-profile') }}" method="POST">

                            {{ csrf_field() }}
                            <div class="row">

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Sponsor ID</label>
                                    <input class="form-control" type="text" name=""  value="{{ $profile->sponsor_detail ? $profile->sponsor_detail->username : '0' }}"
                                    readonly>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label  class="form-label">User ID</label>
                                    <input class="form-control" type="text" name="memberID"
                                    value="{{ $profile ? $profile->username : '' }}" readonly>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label  class="form-label">Name</label>
                                    <input class="form-control"  type="text"  name="name"
                                        value="{{($profile)?$profile->name:'0'}}"  />
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label  class="form-label">E-mail</label>
                                    <input class="form-control" type="email" name="email"
                                        value="{{($profile)?$profile->email:''}}" />
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" >Phone Number</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">IN (+1)</span>
                                        <input type="text" value="{{($profile)?$profile->phone:''}}" name="phone" class="form-control"
                                            />
                                    </div>
                                </div>



                                {{-- <div class="mb-3 col-md-6">
                                    <label class="form-label" for="country">Country</label>
                                    <select id="country" class="select2 form-select">
                                        <option value="">Select</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Canada">Canada</option>
                                        <option value="China">China</option>
                                        <option value="France">France</option>
                                        <option value="Germany">Germany</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Korea">Korea, Republic of</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Russia">Russian Federation</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                    </select>
                                </div> --}}

                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save changes</button>
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



