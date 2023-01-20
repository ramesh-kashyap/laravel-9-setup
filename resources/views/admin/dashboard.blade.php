<?php
use App\Models\User;
use App\Models\Investment;
use App\Models\Income;
use App\Models\Withdraw;


?>


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
                        <h4 class="card-title mb-1">{{User::countAlluser()}}</h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

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
                        <h4 class="card-title mb-1">{{User::countActiveuser()}}</h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>


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
                        <h4 class="card-title mb-1">{{User::countPendinguser()}}</h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                      </div>
                      <a href="#" class="card-title mb-1">More info <i class="fa fa-arrow-circle-right"></i></a>


                </div>
            </div>

              <!-- Todays Registration -->
              <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div><small class="d-block mb-1 text-muted">Today Registration</small></div>
                            <p class="card-text text-success"><img style="width:56px;" src="{{asset('admin/assets/img/user.png')}}" alt=""></p>
                        </div>
                        <h4 class="card-title mb-1">{{User::countTodaysuser()}}</h4>

                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                        <a href="#" class="card-title mb-1">More info <i class="fa fa-arrow-circle-right"></i></a>
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
                        <h4 class="card-title mb-1">{{Investment::countTodaysactiveted()}}</h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>


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
                        <h4 class="card-title mb-1">{{currency()}} {{Investment::counttotal_business()}}</h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

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
                        <h4 class="card-title mb-1">{{currency()}} {{round(Income::count_level_bonus(),2)}}</h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

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
                        <h4 class="card-title mb-1">{{currency()}} {{Income::Count_roi_bonus()}}</h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

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
                        <h4 class="card-title mb-1">{{currency()}} {{Withdraw::CounttotalPendingWithdaw()}}</h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

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
                        <h4 class="card-title mb-1">{{currency()}}  {{Withdraw::CounttotalWithdaw()}}</h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

                </div>
            </div>



        </div>


    </div>
    <!-- / Content -->
