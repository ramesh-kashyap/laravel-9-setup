<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Earning </h2>
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
                                <h4 class="card-title">AutoPool Income</h4>
                            </div>
                            <div class="card-body">
                                <div class="card-datatable">
                                    <table class="dt-multilingual table">
                                        <thead>
                                            <tr>
                                                <th>SR#</th>

                                                <th>Amount</th>
                                                <th>Date</th>
                                                <th>From ID </th>
                                                <th>Autopool Round </th>
                                                <th>Level </th>
                                                <th>Remarks </th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($level_income) || is_object($level_income)){ ?>

                                                <?php $cnt = $level_income->perPage() * ($level_income->currentPage() - 1); ?>
                                                @foreach ($level_income as $value)
                                                    <tr>
                                                        <td data-label="No"><?= $cnt += 1 ?></td>
                                                        <td data-label="comm">$ {{ $value->comm }}</td>
                                                        <td data-label="created_at">{{ $value->created_at }}</td>
                                                        <td data-label="rname">{{ $value->rname }}</td>
                                                        <td data-label="amt"><?php echo "Pool ".$value->amt?></td>
                                                        <td data-label="level">{{ $value->level }}</td>

                                                        <td data-label="remarks">{{ $value->remarks }}</td>

                                                    </tr>
                                                @endforeach

                                                <?php }?>

                                            </tbody>
                                        </table>
                                        <br>

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
