<!-- Content wrapper -->
<div class="content-wrapper">

    <!-- Content -->
    <style>
        .card-body {
            flex: 1 1 auto;
            padding: 0;
            color: var(--bs-card-color);
        }

        .text-muted {
            --bs-text-opacity: 1;
            color: #46464a !important;
            font-size: 1.3125rem;
            font-weight: 700;
        }
        .card {
            background-clip: padding-box;
            box-shadow: 0 2.35rem 1.425rem rgb(58 0 255 / 10%);
            border: 1px solid #d1d1d1;
        }
    </style>
    <div class="container-xxl flex-grow-1 container-p-y">


        <div class="row">

            <!-- total user -->
            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <small class="d-block mb-1 text-muted">Total User</small>
                            <p class="card-text text-success"><img style="width:56px;" src="{{asset('admin/assets/img/user.png')}}" alt=""></p>
                        </div>
                        <h4 class="card-title mb-1">20</h4>
                    </div>
                  
                </div>
            </div>

              <!-- Active user -->
              <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <small class="d-block mb-1 text-muted">Active User</small>
                            <p class="card-text text-success"><img style="width:56px;" src="{{asset('admin/assets/img/user.png')}}" alt=""></p>
                        </div>
                        <h4 class="card-title mb-1">5678</h4>
                    </div>
                  
                </div>
            </div>

              <!-- Active user -->
              <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <small class="d-block mb-1 text-muted">Pending User</small>
                            <p class="card-text text-success"><img style="width:56px;" src="{{asset('admin/assets/img/user.png')}}" alt=""></p>
                        </div>
                        <h4 class="card-title mb-1">$42.5k</h4>
                    </div>
                  
                </div>
            </div>

              <!-- Todays Registration -->
              <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <small class="d-block mb-1 text-muted">Today Registration</small>
                            <p class="card-text text-success"><img style="width:56px;" src="{{asset('admin/assets/img/user.png')}}" alt=""></p>
                        </div>
                        <h4 class="card-title mb-1">42.5k</h4>
                    </div>
                  
                </div>
            </div>


               <!-- Todays Activated -->
               <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <small class="d-block mb-1 text-muted">Today Activated</small>
                            <p class="card-text text-success"><img style="width:56px;" src="{{asset('admin/assets/img/user.png')}}" alt=""></p>
                        </div>
                        <h4 class="card-title mb-1">42.5k</h4>
                    </div>
                  
                </div>
            </div>

             <!-- Total Business -->
             <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <small class="d-block mb-1 text-muted">Total Business</small>
                            <p class="card-text text-success"><img style="width: 36px;" src="{{asset('admin/assets/img/bonus.png')}}" alt=""></p>
                        </div>
                        <h4 class="card-title mb-1">{{currency()}}42.5k</h4>
                    </div>
                  
                </div>
            </div>

            <!-- Total Business -->
            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <small class="d-block mb-1 text-muted">Total Level Bonus</small>
                            <p class="card-text text-success"><img style="width: 36px;" src="{{asset('admin/assets/img/5110795.png')}}" alt=""></p>
                        </div>
                        <h4 class="card-title mb-1">{{currency()}}42.5k</h4>
                    </div>
                  
                </div>
            </div>

             <!-- Total Business -->
             <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <small class="d-block mb-1 text-muted">Total Roi Bonus</small>
                            <p class="card-text text-success"><img style="width: 36px;" src="{{asset('admin/assets/img/5110795.png')}}" alt=""></p>
                        </div>
                        <h4 class="card-title mb-1">{{currency()}}42.5k</h4>
                    </div>
                  
                </div>
            </div>

              <!-- Total Business -->
              <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <small class="d-block mb-1 text-muted">Pending Withdrawal</small>
                            <p class="card-text text-success"><img style="width: 36px;" src="{{asset('admin/assets/img/bonus.png')}}" alt=""></p>
                        </div>
                        <h4 class="card-title mb-1">{{currency()}}42.5k</h4>
                    </div>
                  
                </div>
            </div>

               <!-- Total Business -->
               <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <small class="d-block mb-1 text-muted">Approved Withdrawal</small>
                            <p class="card-text text-success"><img style="width: 36px;" src="{{asset('admin/assets/img/bonus.png')}}" alt=""></p>
                        </div>
                        <h4 class="card-title mb-1">{{currency()}}42.5k</h4>
                    </div>
                  
                </div>
            </div>

          

        </div>


    </div>
    <!-- / Content -->
