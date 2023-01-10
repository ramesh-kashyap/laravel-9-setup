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
