    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">My Team </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <section class="bs-validation">
                    <div class="row">
                        <div class="col-xl-12 col-md-6 col-12">
                            <div class="card card-statistics">
                                <div class="card-body statistics-body">
                                    <div class="row">
                                        <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-primary me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">5</h4>
                                                    <p class="card-text font-small-3 mb-0">Total Direct</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-info me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="user" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">5</h4>
                                                    <p class="card-text font-small-3 mb-0">Active Direct</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-sm-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-danger me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="box" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">0</h4>
                                                    <p class="card-text font-small-3 mb-0">Inactive Direct</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Refferal Team</h4>
                                </div>
                                <div class="card-body">
                                    <div class="card-datatable">
                                        <table class="dt-multilingual table">
                                            <thead>
                                                <tr class="text-success">
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>User ID</th>
                                                    <th>Email ID</th>
                                                    <th>Mobile No</th>
                                                    <th>Joining Date</th>
                                                    <th >Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(is_array($direct_team) || is_object($direct_team)){ ?>

                                                <?php $cnt = $direct_team->perPage() * ($direct_team->currentPage() - 1); ?>
                                                @foreach($direct_team as $value)
                                                    <tr >
                                                        <td ><?= $cnt += 1?></td>
                                                        <td >{{ $value->name }}</td>
                                                        <td >{{ $value->username }}</td>
                                                        <td >{{ $value->email }}</td>
                                                        <td >{{ $value->phone }}</td>
                                                        <td >{{ $value->created_at }}</td>

                                                        <td><span
                                                                class="badge badge-{{ ($value->active_status=='Active')?'success':'danger' }}">{{ $value->active_status }}</span>
                                                        </td>


                                                    </tr>
                                                @endforeach

                                                <?php }?>
                                            </tbody>
                                        </table>
                                        {{ $direct_team->withQueryString()->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
