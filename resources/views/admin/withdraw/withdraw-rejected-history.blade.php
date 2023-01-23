<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">


        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Users /</span> Total users
        </h4>



        <!-- Ajax Sourced Server-side -->
        <div class="card">
            <h5 class="card-header">Total Users</h5>

            <div class="card-datatable text-nowrap">
                <form class="form-repeater" style="margin-left: 14px;" method="GET"
                    action="{{ route('admin.withdraw-rejected-history') }}">
                    <div data-repeater-list="group-a">
                        <div data-repeater-item="">
                            <div class="row">
                                <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                                    <input type="text" id="form-repeater-1-1" name="search" class="form-control"
                                        value='{{ @$search }}' placeholder="Search Users">
                                </div>

                                <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">

                                    <select id="form-repeater-1-4" name="limit" class="form-select">
                                        <option value="10">1

                                            0</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">

                                    <button class="btn btn-primary waves-effect waves-light search-button">
                                        Submit
                                    </button>
                                    <a href="{{ route('admin.withdraw-rejected-history') }}"
                                        class="btn btn-danger waves-effect waves-light search-button">
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
                                <th>User ID</th>
                                <th>Request Amount</th>
                                 <th>Transaction Date.</th>
                                  <th>Payment Mode</th>
                                 <th>Transaction ID</th>

                                 <th>Status </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(is_array($withdraw_request_user) || is_object($withdraw_request_user)){ ?>

                                <?php $cnt =  $withdraw_request_user->perPage() * ($withdraw_request_user->currentPage() - 1);  ?>
                                 @foreach($withdraw_request_user as $value)
                                  <tr>
                                      <td><?= $cnt += 1?></td>

                                      <td>{{$value->user_id_fk}}</td>
                                      <td>&#36; {{$value->amount}}</td>


                                      <td>{{$value->created_at}}</td>
                                      <td>{{$value->payment_mode}}</td>
                                      <td>{{$value->txn_id}}</td>

                                      <td><span class="badge bg-{{ $value->status == 'Approved' ? 'success' : 'danger' }}">{{ $value->status }}</span></td>
                                  </tr>
                                  @endforeach

                             <?php }?>


                                </tbody>
                              </table>
                                <br>

                                 {{ $withdraw_request_user->withQueryString()->links() }}


                </div>
            </div>
        </div>
        <!--/ Ajax Sourced Server-side -->




    </div>
    <!-- / Content -->

