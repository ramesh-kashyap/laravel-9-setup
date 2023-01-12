<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">


        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Users /</span> All users
        </h4>
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



        <!-- Ajax Sourced Server-side -->
        <div class="card">
            <h5 class="card-header">Active Users</h5>

            <div class="card-datatable text-nowrap">
              <form class="form-repeater" style="margin-left: 14px;"  method="GET" action="{{route('admin.totalusers')}}">
                <div data-repeater-list="group-a">
                    <div data-repeater-item="">
                        <div class="row">
                            <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                                <input type="text" id="form-repeater-1-1" name="search"  class="form-control" value='{{@$search}}' placeholder="Search Users">
                            </div>

                            <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">

                                <select id="form-repeater-1-4" name="limit"  class="form-select">
                                  <option value="10">1

                                    0</option>
                                  <option value="25">25</option>
                                  <option value="50">50</option>
                                  <option value="100">100</option>
                                </select>
                            </div>
                            <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0" >

                                <button class="btn btn-primary waves-effect waves-light search-button">
                                  Submit
                                </button>
                                <a href="{{ route('admin.totalusers') }}" class="btn btn-danger waves-effect waves-light search-button">
                                  Reset
                                </a>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

            </form>
               <div class="table-responsive">
                <table class="datatables-ajax table">
                    <thead>
                        <tr>
                            <th>S NO.</th>
                            <th>User Name</th>
                           <th>User Id</th>
                           <th>Email ID</th>

                            <th>Mobile No.</th>
                            <th>Password</th>
                            <th>Transaction Password</th>

                            <th>Joining Date</th>
                            <th>Activation Date</th>
                            <th>Package</th>
                            <th>Sponsor ID</th>
                             <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(is_array($alluserlist) || is_object($alluserlist)){ ?>

                            <?php $cnt = $alluserlist->perPage() * ($alluserlist->currentPage() - 1);?>
                             @foreach($alluserlist as $value)

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
                                  <td> {{($value->sponsorDetail)?$value->sponsorDetail->username:0}}</td>
                                  <td><span
                                    class="badge bg-{{ $value->active_status == 'Active' ? 'success' : 'danger' }}">{{ $value->active_status }}</span>
                            </td>

                              </tr>
                              @endforeach

                         <?php }?>
                </table>

                <br>


              </div>
            </div>
        </div>
        <!--/ Ajax Sourced Server-side -->




    </div>
    <!-- / Content -->
