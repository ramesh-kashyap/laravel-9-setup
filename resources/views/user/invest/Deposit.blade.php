<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
      <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
          <div class="row breadcrumbs-top">
            <div class="col-12">
              <h2 class="content-header-title float-start mb-0">Buy Package </h2>
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
                  <h4 class="card-title">Package Activation </h4>
                  <code>Activation Balance : <b>{{currency()}} {{ number_format(Auth::user()->FundBalance(), 2) }} </b></code>
                </div>
                <div class="card-body">
                  <form class="g-3" action="{{ route('user.fundActivation') }}" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <label for="inputFirstName" class="form-label">Package</label>
                        <input class="form-control" min="1"  type="number"
                        name="amount" placeholder="Enter Amount" required>
                      </div>

                      <br>

                      <div class="col-md-12">
                        <label for="inputFirstName" class="form-label">Member ID </label>
                        <input class="form-control check_sponsor_exist" data-response="sponsor"  type="text"
                          name="user_id" placeholder="Enter User ID" required>
                        <span id="sponsor" style="color:#00b297"> </span>
                      </div>

                      <div class="col-md-12">
                        <label for="inputFirstName" class="form-label">TRANSACTION PASSWORD </label>
                        <input type="password" class="form-control" name="transaction_password"
                           value="" required id="password" placeholder="Transaction Password">

                      </div>

                      <div class="col-12 mt-4">
                        <a href="{{route('user.invest')}}"> <button class="btn btn-primary px-5" type="button">Back</button></a>
                        <button type="submit" class="btn btn-success px-5" name="act1a2a3">Activate</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
      </div>

    </div>
  </div>

  <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>
  <script>

      $('.check_sponsor_exist').change(function(e) {
          var ths = $(this);
          var res_area = $(ths).attr('data-response');
          var sponsor = $(this).val();
          // alert(sponsor);
          $.ajax({
              type: "POST",
              url: "{{ route('getUserName') }}",
              data: {
                  "user_id": sponsor,
                  "_token": "{{ csrf_token() }}",
              },
              success: function(response) {
                  // alert(response);
                  if (response != 1) {
                      // alert("hh");
                      $(".submit-btn").prop("disabled", false);
                      $('#' + res_area).html(response).css('color', '#00b297').css('font-weight', '800')
                          .css('margin-buttom', '10px');
                  } else {
                      // alert("hi");
                      $(".submit-btn").prop("disabled", true);
                      $('#' + res_area).html("User Not exists!").css('color', 'red').css(
                          'margin-buttom', '10px');
                  }
              }
          });
      });
  </script>
