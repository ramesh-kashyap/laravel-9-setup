<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">


        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Users /</span> Roi Bnus
        </h4>



        <!-- Ajax Sourced Server-side -->
        <div class="card">
            <h5 class="card-header">Roi Bonus</h5>

            <div class="card-datatable text-nowrap">
                <form class="form-repeater" style="margin-left: 14px;" method="GET"
                    action="{{ route('admin.roi-bonus') }}">
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
                                    <a href="{{ route('admin.roi-bonus') }}"
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
                                <th>Name</th>
                                <th>User ID</th>
                                <th>Package</th>
                                <th>Commission</th>
                                <th>Transaction Date.</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(is_array($direct_incomes) || is_object($direct_incomes)){ ?>

                                <?php $cnt =$direct_incomes->perPage() * ($direct_incomes->currentPage() - 1); ?>
                                 @foreach($direct_incomes as $value)
                                  <tr>
                                      <td><?= $cnt += 1?></td>
                                      <td>{{($value->user)?$value->user->name:''}}</td>
                                      <td>{{$value->user_id_fk}}</td>
                                      <td> &#8377;  {{$value->amt}} </td>
                                      <td> &#8377;  {{$value->comm}} </td>
                                      <td>{{$value->created_at}}</td>

                                      <td>{{$value->remarks}}</td>



                                  </tr>
                                  @endforeach

                             <?php }?>


                                </tbody>
                              </table>
                                          <br>

                                {{ $direct_incomes->withQueryString()->links() }}

                </div>
            </div>
        </div>
        <!--/ Ajax Sourced Server-side -->




    </div>
    <!-- / Content -->
