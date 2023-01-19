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
                                <h4 class="card-title">Growth Bonus</h4>
                            </div>
                            <div class="card-body">

                                <form action="{{ route('user.Appraisal-bonus') }}" method="GET">
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
                                                <a href="{{ route('user.Appraisal-bonus') }}" name="reset"
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
                                                <th>SR#</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                                <th>From ID  </th>
                                                <th>Autopool Round </th>
                                                <th>Level </th>
                                                <th>Remarks </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($level_income) || is_object($level_income)){ ?>

                                                <?php $cnt = $level_income->perPage() * ($level_income->currentPage() - 1); ?>
                                                @foreach ($level_income as $value)
                                                    <tr>
                                                        <td><?= $cnt += 1 ?></td>
                                                        <td>$ {{ $value->comm }}</td>
                                                        <td>{{ $value->created_at }}</td>
                                                        <td>{{ $value->rname }}</td>
                                                        <td><?php echo "Pool ".$value->amt?></td>
                                                        <td>{{ $value->level }}</td>
                                                        <td>{{ $value->remarks }}</td>

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
