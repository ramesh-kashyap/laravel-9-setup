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

                            </div>
                            <div class="card-body">
                                <div class="card-datatable">
                                    <table class="dt-multilingual table">
                                        <thead>
                                            <tr>
                                                <th class="wd-15p">#S.NO</th>
                                                <th>Ticket No</th>
                                                <th>Category</th>
                                                <th>Request Date</th>
                                                <!--<th>Closing Date</th>-->
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($level_income) || is_object($level_income)){ ?>

                                            <?php $cnt =$level_income->perPage() * ($level_income->currentPage() - 1); ?>
                                            @foreach($level_income as $value)
                                                <tr>
                                                    <td><?= $cnt += 1?></td>

                                                    <!--<td>{{ $value->user_id_fk }}</td>-->
                                                    <td>{{ $value->ticket_no }}</td>
                                                    <td>{{ $value->category }}</td>
                                                    <td>{{ $value->gen_date }}</td>
                                                    <!--<td>{{ $value->closing_date }}</td>-->
                                                    <?php if($value->status=="1"){$color="red";}else{$color="green";}?>
                                                    <td style="color:<?=@$color?>;font-weight:700">
                                                        {{ ($value->status)?"Closed":"Open" }}
                                                    </td>
                                                    <td><a
                                                            href="{{ route('user.ViewMessage') }}?ticket_no={{ $value->ticket_no }}"><button
                                                                style="color:#000;border:1px solid #000;padding:8px;border-radius:15px">View
                                                                all message</button></a></td>

                                                </tr>
                                            @endforeach

                                            <?php }?>
                                        </tbody>
                                    </table>
                                    {{ $level_income->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
