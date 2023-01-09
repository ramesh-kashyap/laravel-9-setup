<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
      <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
          <div class="row breadcrumbs-top">
            <div class="col-12">
              <h2 class="content-header-title float-start mb-0">Profile </h2>
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
                  <h4 class="card-title">Bank Update</h4>
                </div>
                <div class="card-body">
                  <form action="{{ route('user.bank-update') }}" method="POST">
                    @csrf
                    <div class="box-body">
                      <div class="row ">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label">Bank Name <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="bank_name" value="{{ @$bank->bank_name }}"
                              placeholder="Enter Bank Name">
                          </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label">Branch Name <span class="tx-danger">*</span></label>
                              <input class="form-control" type="text" name="branch_name" value="{{ @$bank->branch_name }}"
                                placeholder="Enter Branch Name">
                            </div>
                          </div>

                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label">A/C Holder First Name <span
                                class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="account_holder" value="{{ @$bank->account_holder }}"
                              placeholder="Enter a/c holder first name">
                          </div>
                        </div>
                      
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label">Bank IFSC <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="ifsc_code" value="{{ @$bank->ifsc_code }}"
                              placeholder="Enter IFS Code " required>
                          </div>
                        </div>


                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label">Bank A/c Number <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="account_number" value="{{ @$bank->account_no }}"
                              placeholder="Enter Account Number" required>
                          </div>
                        </div>
                      </div>
                      <br>
                      <div class="">
                        <a href="{{route('user.BankDetail')}}" class="btn btn-primary " type="button">CANCEL</a>
                        <button class="btn btn-success " name="Bank89655656">UPDATE</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>