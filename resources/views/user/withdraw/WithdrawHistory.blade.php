    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Withdrawal </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <section class="bs-validation">
                    <div class="row">

                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Withdrawal History</h4>
                                    <code>Available Balance :
                                        <b>{{ currency() }}{{ round(Auth::user()->available_balance(),2) }}</b></code>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('user.Withdraw-History') }}" method="GET">
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
                                                    <input type="submit" name="submit"
                                                        class="btn btn-outline-theme btn-lg d-block w-100 btn-primary"
                                                        value="Search" />
                                                </div>
                                            </div>
                                            <div class="col-xl-2">
                                                <div class="form-group mb-3">
                                                    <a href="{{ route('user.Withdraw-History') }}" name="reset"
                                                        class="btn btn-outline-theme btn-lg d-block w-100 btn-primary"
                                                        value="Reset">Reset</a>
                                                </div>
                                            </div>


                                        </div>
                                    </form>

                                    <div class="card-datatable">
                                        <table class="dt-multilingual table">
                                            <thead>
                                                <tr>
                                                    <th class="wd-15p">#S.NO</th>
                                                    <th class="wd-15p">Amount</th>
                                                    <th class="wd-15p">Date </th>
                                                    <th class="wd-15p">Transaction ID</th>
                                                    <th class="wd-15p">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(is_array($withdraw_report) || is_object($withdraw_report)){ ?>

                                                <?php $cnt = $withdraw_report->perPage() * ($withdraw_report->currentPage() - 1); ?>
                                                @foreach($withdraw_report as $value)
                                                    <tr>
                                                        <td><?= $cnt += 1 ?></td>
                                                        <td>{{ ($value->amount) }}</td>
                                                        <td>{{ $value->created_at }}</td>
                                                        <td>{{ $value->txn_id }}</td>
                                                        <td>{{ $value->status }}</td>

                                                    </tr>
                                                @endforeach

                                                <?php }?>

                                            </tbody>
                                        </table>
                                        {{ $withdraw_report->withQueryString()->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
