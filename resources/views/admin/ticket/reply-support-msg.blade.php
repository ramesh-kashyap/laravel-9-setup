
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
                        <form id="formAccountSettings"  action="{{route('admin.admin_ticket_submit')}}" method="POST" onsubmit="return amtValue()">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-8">
                                    <label for="username_res" class="form-label">Ticket No</label>
                                        <input class="form-control" id="username_res" placeholder="Ticket no" type="text" name="ticket_no"  value="{{@$open_ticket_msg}}" readonly required="">

                                </div>

                                <div class="mb-3 col-md-8">
                                    <label for="userid" class="form-label">Message</label>
                                    <textarea class="form-control"   placeholder="Message in Discription"  name="message" required=""></textarea>
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

