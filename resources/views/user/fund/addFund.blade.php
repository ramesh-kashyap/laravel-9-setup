<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Add Fund </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">

            <section class="bs-validation">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">

                            <form method="POST" action="#">


                                <div class="card-header">
                                    <div class="card-title">PAY HERE - USDT(TRC20)</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="card-body text-center">

                                                <img style="width: 200px" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=TVYxRXXg7kMqL91Ys3pLRPtivg9p5VnpjS">
                                                <div class="copy-tooltip text-center">
                                                    <input type="hidden" id="wallet-address" value="TVYxRXXg7kMqL91Ys3pLRPtivg9p5VnpjS">
                                                    <br>
                                                    <h6 id="wallet-add1" class="wallet-address">TVYxRXXg7kMqL91Ys3pLRPtivg9p5VnpjS</h6>
                                                    <a  class="btn btn-success copyToClipboard" onclick="copyFunctionwallet('wallet-address')">Copy Text</a>
                                                </div>


                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Fund</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('user.SubmitBuyFund') }}" method="POST"
                                    enctype="multipart/form-data">

                                    @csrf

                                    <div class="box-body">
                                        <div class="row mg-b-25">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label">Deposit ($)</label>
                                                            <input type="number" min="1" class="form-control"
                                                                name="amount" required="true"
                                                                placeholder="Enter amount ">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label">UTR No/Slip No<span
                                                                    class="tx-danger">*</span></label>
                                                            <input type="text" class="form-control "
                                                                name="transaction_hash" placeholder="Enter UTR No. "
                                                                required="true">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label">Upload Reciept</label>
                                                            <input type="file" class="form-control " name="icon_image"
                                                                required="true">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mt-2">


                                            </div>

                                        </div>
                                        <div class="mt-2">
                                            <a href="{{route('user.AddFund')}}"> <button class="btn btn-primary"
                                                    type="button">Cancel</button> </a>
                                            <button class="btn btn-success" type="submit" name="inr8956dep">Request
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Fund History</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="dt-multilingual table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Fund</th>
                                                <th>UTR Number</th>

                                                <th>Request Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($level_income) || is_object($level_income)){ ?>

                                            <?php $cnt =$level_income->perPage() * ($level_income->currentPage() - 1); ?>
                                            @foreach($level_income as $value)
                                            <tr>
                                                <td>
                                                    <?= $cnt += 1?>
                                                </td>


                                                <td>&#36; {{$value->amount}}</td>
                                                <td>{{$value->txn_no}}</td>
                                                <td>{{date("D, d M Y h:i:s a", strtotime($value->created_at));}} </td>
                                                <td class="btn-success btn-sm"><span
                                                        class="badge badge-{{($value->status=='Approved')?'success':'danger'}}">{{$value->status}}</span>
                                                </td>


                                            </tr>
                                            @endforeach

                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </section>
</div>

<script src="https://code.jquery.com//jquery-3.3.1.min.js"> </script>
<script>


    function copyFunctionwallet(inputID) {

        var copyText = document.getElementById("wallet-address");

        copyText.select();

        document.execCommand("copy");
        $(".copyToClipboard").html("Copied");

         /* Alert the copied text */
         alert("copied: "+copyText.value)

        }
        </script>



