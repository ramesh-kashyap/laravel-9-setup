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
                                <h4 class="card-title">Booster Matrix</h4>
                            </div>
                            <div class="card-body">
                                <div class="card-datatable">
                                    <table class="dt-multilingual table">
                                        <thead>
                                            <tr>
                                                <th>SR#</th>


                                      <th>ID NO</th>
                                      <th>Date</th>
                                      <th> Is Completed  </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($level_income) || is_object($level_income)){ ?>

                                                <?php $cnt = $level_income->perPage() * ($level_income->currentPage() - 1); ?>
                                                @foreach ($level_income as $value)
                                                    <tr>
                                                        <td><?= $cnt += 1 ?></td>
                                                        <td>{{ $value->user_id_fk }}</td>

                                                        <td>{{ $value->created_at }}</td>

                                                        <td><?php if($value->isComplete=="1"){echo "<span class='badge badge-success'>Completed</span>";}else{echo "<span class='badge badge-danger'>Pending</span>";}?>

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
