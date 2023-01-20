


<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">


        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">User Activation /</span> Account
        </h4>

        @if(session()->has('message'))
        <div class="alert alert-success">
        <strong style="color:#006633;">
        {{ session()->get('message') }}
        </strong>
        </div>
        @endif

        <div class="row">
            <div class="col-md-12">

                <div class="card mb-4">
                    <h5 class="card-header">User Details</h5>
                    <!-- Account -->

                    <hr class="my-0">
                    <div class="card-body">
                        <form id="formAccountSettings"  action="{{route('admin.activate-admin')}}" method="POST" onsubmit="return amtValue()">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="mb-3 col-md-7">
                                    <label for="username_res" class="form-label">Name</label>
                                        <input class="form-control" id="username_res" placeholder="Name" type="text" name="name" value="">

                                </div>


                                <div class="mb-3 col-md-7">
                                    <label for="userid" class="form-label">User ID</label>
                                    <input class="form-control check_sponsor_exist" data-response="username_res" required id="inputEmail3" placeholder="Username" type="text" name="user_id" value="" >
                                </div>

                                <div class="mb-3 col-md-7">
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



