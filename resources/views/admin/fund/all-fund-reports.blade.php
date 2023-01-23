<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">


        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Users /</span> Edit Users
        </h4>



        <!-- Ajax Sourced Server-side -->
        <div class="card">
            <h5 class="card-header">Edit Users</h5>

            <div class="card-datatable text-nowrap">
                <form class="form-repeater" style="margin-left: 14px;" method="GET"
                    action="{{ route('admin.All-fund-Report') }}">
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
                                    <a href="{{ route('admin.All-fund-Report') }}"
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
                                <th>Amount</th>
                                <th>Transaction Date.</th>
                                <th>Transaction ID.</th>
                                <th>Status</th>
                                <th>Payment Mode</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php if(is_array($all_fund_reports) || is_object($all_fund_reports)){ ?>

                            <?php $cnt =$all_fund_reports->perPage() * ($all_fund_reports->currentPage() - 1); ?>
                            @foreach($all_fund_reports as $value)
                                <tr>
                                    <td><?= $cnt += 1?></td>

                                    <td>{{ ($value->user)?$value->user->name:"" }}</td>
                                    <td>{{ $value->user_id_fk }}</td>
                                    <td> {{ $value->amount }}</td>
                                    <td>{{ $value->created_at }}</td>
                                    <td>{{ $value->txn_no }}</td>

                                    <td ><span class="badge bg-{{ $value->status == 'Approved' ? 'success' : 'danger' }}">{{ $value->status }}</span></td>
                                    <td>{{ $value->type }}</td>
                                </tr>
                            @endforeach

                            <?php }?>


                        </tbody>
                    </table>
                    <br>


                    {{ $all_fund_reports->withQueryString()->links() }}

                </div>
            </div>
        </div>
        <!--/ Ajax Sourced Server-side -->




    </div>
    <!-- / Content -->
