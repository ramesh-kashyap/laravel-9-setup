<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Deposit Lists </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">

            <section class="bs-validation">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <b> Deposit History</b>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('user.DepositHistory') }}" method="GET">
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
                                                <a href="{{ route('user.DepositHistory') }}" name="reset"
                                                    class="btn btn-outline-theme btn-lg d-block w-100 btn-primary"
                                                    value="Reset">Reset</a>
                                            </div>
                                        </div>


                                    </div>
                                </form>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#S.NO</th>
                                                <th>User ID</th>
                                                <th>Amount</th>
                                                <th>Transection Date</th>
                                                <th>Transection ID</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php if(is_array($deposit_list) || is_object($deposit_list)){ ?>

                                            <?php $cnt = 0; ?>
                                            @foreach($deposit_list as $value)
                                                <tr>
                                                    <td><?= $cnt += 1?></td>
                                                    <td>{{ $value->user_id_fk }}</td>
                                                    <td>{{currency()}} {{ $value->amount }}</td>
                                                    <td>{{ $value->created_at }}</td>
                                                    <td>{{ $value->transaction_id }}</td>
                                                    <?php if($value->status=="Active"){$color="green";}else{$color="red";}?>
                                                    <td style="color:<?=@$color?>">{{ $value->status }}</td>

                                                </tr>
                                            @endforeach

                                            <?php }?>

                                        </tbody>
                                    </table>
                                    {{ $deposit_list->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

    </div>
</div>
