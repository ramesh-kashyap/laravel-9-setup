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

                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">All Team</h4>
                                </div>
                                <div class="card-body">
                                    <div class="card-datatable">
                                        <table class="dt-multilingual table">
                                            <thead>
                                                <tr>
                                                    <th class="wd-5p">#</th>

                                                    <th>ID</th>
                                                    <th>Created At</th>
                                                    <th>status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(is_array($direct_team) || is_object($direct_team)){ ?>

                                                    <?php $cnt = $direct_team->perPage() * ($direct_team->currentPage() - 1); ?>
                                                     @foreach($direct_team as $value)
                                                <tr>
                                                    <td data-label="#: ">1</td>
                                                    <td data-label="Member ID:">{{$value->userCode}}</td>
                                                    <td data-label="Sponsor ID : ">{{$value->created_at}}</td>
                                                    <td data-label="Status : "> <span
                                                            class="badge bg-success">{{$value->active_status}}</span>
                                                    </td>



                                                </tr>

                                                @endforeach

                                                <?php }?>
                                               </tbody>
                                           </table>
                                           <br>

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
