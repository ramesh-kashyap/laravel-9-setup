
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">

                <section id="dashboard-ecommerce">
                    <div class="row match-height">

                        <div class="col-xl-8 col-md-6 col-12">
                            <div class="row">
                                <div class="col-xl-6 col-md-6 col-12">
                                    <div class="card card-congratulation-medal">
                                        <div class="card-body">
                                            <h5 class="b-text">Account Balance</h5>
                                            <h3 class="mb-75 mt-2 pt-50">
                                                <a href="#">{{currency()}}  {{ number_format(Auth::user()->available_balance(), 2) }}</a>
                                            </h3>

                                            <img src="{{asset('')}}upnl/app-assets/images/ico/accBalance.png"
                                                class="congratulation-medal" alt="Medal Pic" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-12">
                                    <div class="card card-congratulation-medal">
                                        <div class="card-body">
                                            <h5 class="b-text">Fund Balance</h5>
                                            <h3 class="mb-75 mt-2 pt-50">
                                                <a href="#">{{currency()}}  {{ number_format(Auth::user()->FundBalance(), 2) }}</a>
                                            </h3>

                                            <img src="{{asset('')}}upnl/app-assets/images/ico/fundBal.png"
                                                class="congratulation-medal" alt="Medal Pic" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-12">
                                    <div class="card card-congratulation-medal">
                                        <div class="card-body">
                                            <h5 class="b-text">Shopping Balance</h5>
                                            <h3 class="mb-75 mt-2 pt-50">
                                                <a href="#">$0</a>
                                            </h3>

                                            <img src="{{asset('')}}upnl/app-assets/images/ico/fundBal.png"
                                                class="congratulation-medal" alt="Medal Pic" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-12">
                                    <div class="card card-congratulation-medal">
                                        <div class="card-body">
                                            <h5 class="b-text">Earned Total</h5>
                                            <h3 class="mb-75 mt-2 pt-50">
                                                <a href="#">$1690.7875</a>
                                            </h3>

                                            <img src="{{asset('')}}upnl/app-assets/images/ico/earnTot.png"
                                                class="congratulation-medal" alt="Medal Pic" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-12">
                                    <div class="card card-congratulation-medal">
                                        <div class="card-body">
                                            <h5 class="b-text">Total Withdraw</h5>
                                            <h3 class="mb-75 mt-2 pt-50">
                                                <a href="#">$110.000</a>
                                            </h3>

                                            <img src="{{asset('')}}upnl/app-assets/images/ico/withdraw.png"
                                                class="congratulation-medal" alt="Medal Pic" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-12">
                                    <div class="card card-congratulation-medal">
                                        <div class="card-body">
                                            <h5 class="b-text">Active Deposit</h5>
                                            <h3 class="mb-75 mt-2 pt-50">
                                                <a href="#">$635</a>
                                            </h3>

                                            <img src="{{asset('')}}upnl/app-assets/images/ico/actDeposit.png"
                                                class="congratulation-medal" alt="Medal Pic" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-12">
                                    <div class="card card-congratulation-medal">
                                        <div class="card-body">
                                            <h5 class="b-text">Direct Income</h5>
                                            <h3 class="mb-75 mt-2 pt-50">
                                                <a href="#">$713.75</a>
                                            </h3>

                                            <img src="{{asset('')}}upnl/app-assets/images/ico/directInc.png"
                                                class="congratulation-medal" alt="Medal Pic" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-12">
                                    <div class="card card-congratulation-medal">
                                        <div class="card-body">
                                            <h5 class="b-text">Level ROI Income</h5>
                                            <h3 class="mb-75 mt-2 pt-50">
                                                <a href="#">$0</a>
                                            </h3>

                                            <img src="{{asset('')}}upnl/app-assets/images/ico/levelInc.png"
                                                class="congratulation-medal" alt="Medal Pic" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-12">
                                    <div class="card card-congratulation-medal">
                                        <div class="card-body">
                                            <h5 class="b-text">One Time Level Income</h5>
                                            <h3 class="mb-75 mt-2 pt-50">
                                                <a href="#">$0</a>
                                            </h3>

                                            <img src="{{asset('')}}upnl/app-assets/images/ico/levelInc.png"
                                                class="congratulation-medal" alt="Medal Pic" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-12">
                                    <div class="card card-congratulation-medal">
                                        <div class="card-body">
                                            <h5 class="b-text">Club Income</h5>
                                            <h3 class="mb-75 mt-2 pt-50">
                                                <a href="#">$0</a>
                                            </h3>

                                            <img src="{{asset('')}}upnl/app-assets/images/ico/clubInc.png"
                                                class="congratulation-medal" alt="Medal Pic" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-12">
                                    <div class="card card-congratulation-medal">
                                        <div class="card-body">
                                            <h5 class="b-text">AutoPool Income</h5>
                                            <h3 class="mb-75 mt-2 pt-50">
                                                <a href="#">$977.00</a>
                                            </h3>

                                            <img src="{{asset('')}}upnl/app-assets/images/ico/autoPool.png"
                                                class="congratulation-medal" alt="Medal Pic" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-12">
                                    <div class="card card-congratulation-medal">
                                        <div class="card-body">
                                            <h5 class="b-text">Daily Activity</h5>
                                            <h3 class="mb-75 mt-2 pt-50">
                                                <a href="#">$0.0375</a>
                                            </h3>

                                            <img src="{{asset('')}}upnl/app-assets/images/ico/actDeposit.png"
                                                class="congratulation-medal" alt="Medal Pic" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="card card-transaction">
                                <div class="card-header">
                                    <h4 class="card-title">Quick Link</h4>
                                    <br>
                                    <hr class="b-hr">
                                </div>
                                <div class="card-body">
                                    <a href="whatsapp://send?text=https://vision2o.live/joinus?id=V202916952"
                                        class="btn btn-success b-block" target="_blank"> Share on whatsApp</a>
                                    <input type="text" value="https://vision2o.live/joinus?id=V202916952" id="myInput"
                                        hidden>
                                    <button class="btn btn-warning b-block" onclick="myFunction()"> Copy Refferal
                                        Link</button>
                                    <a href="Activation" class="btn btn-secondary b-block"> Invest</a>
                                    <a href="PayoutINR" class="btn btn-primary b-block"> Withdraw</a>
                                    <a href="https://t.me/vision5107" class="btn btn-info b-block" target="_blank">Join
                                        on telegram</a>
                                </div>

                                <div class="card-header">
                                    <h4 class="card-title">Sticky Notes</h4>
                                    <br>
                                    <hr class="b-hr">
                                </div>
                                <div class="card-body">
                                    <button class="btn btn-danger b-block"> News & Updates</button>
                                </div>

                                <div class="card-header">
                                    <h4 class="card-title">User Details</h4>
                                    <br>
                                    <hr class="b-hr">
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tbody>


                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">Sponsor ID</span>
                                                    </td>
                                                    <td>{{Auth::user()->sponsor}}</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">User ID</span>
                                                    </td>
                                                    <td>{{Auth::user()->username}}</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">User Name</span>
                                                    </td>
                                                    <td>{{Auth::user()->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">Registration Date</span>
                                                    </td>
                                                    <td>{{Auth::user()->created_at}}</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">Activation Date</span>
                                                    </td>
                                                    <td>{{Auth::user()->adate}}</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">Mobile No.</span>
                                                    </td>
                                                    <td>{{Auth::user()->phone}}</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">Email</span>
                                                    </td>
                                                    <td>{{Auth::user()->email}}
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
                    </script>
                    <script>
                        function myFunction() {
                            // Get the text field
                            var copyText = document.getElementById("myInput");

                            // Select the text field
                            copyText.select();
                            copyText.setSelectionRange(0, 99999); // For mobile devices

                            // Copy the text inside the text field
                            navigator.clipboard.writeText(copyText.value);

                            // Alert the copied text
                            //   alert("Copied the text: " + copyText.value);
                        }

                    </script>
                </section>

            </div>
        </div>
    </div>

