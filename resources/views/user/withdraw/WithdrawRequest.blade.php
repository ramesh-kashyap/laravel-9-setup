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

                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">INR Withdrawal </h4>
                                    <code>Available Balance : <b>{{  currency() }}{{round(Auth::user()->available_balance(),2)}}</b></code>

                                </div>
                                <div class="card-body">
                                    <form action="{{ route('user.WithdrawRequest') }}" method="post" class="form">
                                        <div class="box-body">
                                            <div class="row ">
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Amount<span
                                                                class="tx-danger">*</span></label>
                                                        <input class="form-control" type="number" min="1" name="amount"
                                                            placeholder="Minimum Withdraw Amount $2 " required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-control-label">Transaction Password <span
                                                                class="tx-danger">*</span></label>
                                                        <input class="form-control" type="password" name="transaction_password"
                                                            placeholder="*************" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="">
                                                <a href="DASHBOARD"> <button class="btn btn-primary"
                                                        type="button">CANCEL</button> </a>
                                                <button class="btn btn-success" type="submit"
                                                    name="inr894578with">WITHDRAW</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <b><code>INR</code> Withdrawal History</b>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="wd-15p">#</th>
                                                    <th class="wd-20p">Amount</th>
                                                    <th class="wd-10p">Request Date</th>
                                                    <th class="wd-25p">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
        </div>
    </div>

