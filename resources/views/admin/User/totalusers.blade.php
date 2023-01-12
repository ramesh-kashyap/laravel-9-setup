@include('layouts.admin.header')

<!-- Content wrapper -->
<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">



        <div class="row g-4 mb-4">
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span>Session</span>
                                <div class="d-flex align-items-center my-1">
                                    <h4 class="mb-0 me-2">21,459</h4>
                                    <span class="text-success">(+29%)</span>
                                </div>
                                <span>Total Users</span>
                            </div>
                            <span class="badge bg-label-primary rounded p-2">
                                <i class="ti ti-user ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span>Paid Users</span>
                                <div class="d-flex align-items-center my-1">
                                    <h4 class="mb-0 me-2">4,567</h4>
                                    <span class="text-success">(+18%)</span>
                                </div>
                                <span>Last week analytics </span>
                            </div>
                            <span class="badge bg-label-danger rounded p-2">
                                <i class="ti ti-user-plus ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span>Active Users</span>
                                <div class="d-flex align-items-center my-1">
                                    <h4 class="mb-0 me-2">19,860</h4>
                                    <span class="text-danger">(-14%)</span>
                                </div>
                                <span>Last week analytics</span>
                            </div>
                            <span class="badge bg-label-success rounded p-2">
                                <i class="ti ti-user-check ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span>Pending Users</span>
                                <div class="d-flex align-items-center my-1">
                                    <h4 class="mb-0 me-2">237</h4>
                                    <span class="text-success">(+42%)</span>
                                </div>
                                <span>Last week analytics</span>
                            </div>
                            <span class="badge bg-label-warning rounded p-2">
                                <i class="ti ti-user-exclamation ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Users List Table -->
        <div class="card">
            <div class="card-header border-bottom">
                <h5 class="card-title mb-3">Search Filter</h5>
                <div class="card-body">
                <form action="{{ route('admin.totalusers') }}" method="GET">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="form-group mb-3">
                                <input type="text" Placeholder="Search Users" name="search"
                                    class="form-control" value="{{ @$search }}">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="form-group mb-3">
                                <select name="limit" class="form-control">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="form-group mb-3">
                                <button type="submit" name="submit"
                                    class="btn btn-outline-theme btn-lg d-block w-100 btn-primary"
                                    value="Search" >Search</button>
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="form-group mb-3">
                                <a href="{{ route('admin.totalusers') }}" name="reset"
                                    class="btn btn-outline-theme btn-lg d-block w-100 btn-primary"
                                    value="Reset">Reset</a>
                            </div>
                        </div>


                    </div>
                </form>
                </div>
            </div>
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top">
                    <thead>
                        <tr>
                            <th>S NO.</th>
                            <th>Name</th>
                            <th>User Id</th>
                            <th>Email ID</th>
                            <th>Mobile No.</th>
                            <th>Password</th>
                            <th>Transaction Password</th>
                            <th>Joining Date</th>
                            <th>Activation Status</th>
                            <th>Package</th>
                            <th>Sponsor ID</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(is_array($active_user) || is_object($active_user)){ ?>

                     <?php $cnt = $active_user->perPage() * ($active_user->currentPage() - 1);?>
                      @foreach($active_user as $value)

                       <tr>
                           <td><?= $cnt += 1?></td>
                           <td>{{$value->name}}</td>
                           <td>{{$value->username}}</td>
                           <td>{{$value->email}}</td>
                           <td>{{$value->phone}}</td>
                           <td>{{$value->PSR}}</td>
                           <td>{{$value->TPSR}}</td>

                           <td>{{$value->created_at}}</td>
                           <td>{{$value->adate}}</td>
                           <td>&#8377; {{$value->package}}</td>
                           <td> {{$value->sponsor}}</td>
                           <td><span class="{{($value->active_status=='Active')?'badge green':'badge red'}}">{{$value->active_status}}</span></td>

                       </tr>
                       @endforeach

                  <?php }?>


                     </tbody>
                   </table>


            </div>

        </div>



    </div>
    <!-- / Content -->





    @include('layouts.admin.footer')
