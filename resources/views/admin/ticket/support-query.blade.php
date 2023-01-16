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
                    action="{{ route('admin.support-query') }}">
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
                                    <a href="{{ route('admin.support-query') }}"
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
                                <th>Ticket Number</th>
                                <th>Category</th>
                                <th>Request Date</th>
                                <th>Closing Date</th>
                                <th>Status</th>
                                <th>View</th>
                                <th>close</th>
                                <th>Reply</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php if(is_array($level_incomes) || is_object($level_incomes)){ ?>

                            <?php $cnt =  $level_incomes->perPage() * ($level_incomes->currentPage() - 1); ?>
                            @foreach($level_incomes as $value)
                                <tr>
                                    <td><?= $cnt += 1?></td>

                                    <td>{{ $value->user_id_fk }}</td>

                                    <td>{{ $value->ticket_no }}</td>
                                    <td>{{ $value->category }}</td>
                                    <td>{{ $value->gen_date }}</td>
                                    <td>{{ $value->closing_date }}</td>
                                    <td><?=($value->status) ? "Closed" : "Open"?></td>

                                    <td> <a class="btn btn-primary"
                                            href="{{ route('admin.get_support_msg') }}?ticket_no=<?=$value->ticket_no?>">View
                                            all message</a></td>

                                    <td><a class="btn btn-danger"
                                            href="{{ route('admin.close_ticket_') }}?ticket_no=<?=$value->ticket_no?>">Close
                                            Ticket</a></td>

                                    <td> <a class="btn btn-success"
                                            href="{{ route('admin.reply_support_msg') }}?ticket_no=<?=$value->ticket_no?>">Reply
                                            Ticket</a></td>

                                </tr>
                            @endforeach

                            <?php }?>


                        </tbody>
                    </table>

                    <br>
                    {{ $level_incomes->links() }}



                </div>
            </div>
        </div>
        <!--/ Ajax Sourced Server-side -->




    </div>
    <!-- / Content -->
