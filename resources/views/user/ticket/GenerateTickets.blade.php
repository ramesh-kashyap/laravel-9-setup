
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Tickets </h2>
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
                                    <h4 class="card-title">Generate Ticket</h4>

                                </div>
                                <div class="card-body">
                                    <form action="{{ route('user.SubmitTicket') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="box-body">
                                            <div class="row mg-b-25">
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label class="form-control-label">Select Category<span
                                                                        class="tx-danger">*</span></label>
                                                                    <select class="form-control" name="category" required="true">
                                                                        <option value="">Select Category</option>
                                                                        <option value="Verification">Verification </option>
                                                                        <option value="Technical">Technical</option>
                                                                        <option value="Team Building">Team Building </option>
                                                                        <option value="Financial">Financial</option>
                                                                        <option value="Fund Issue">Fund Issue</option>
                                                                        <option value="Others">Others</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        {{-- <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label class="form-control-label">Ticket No<span
                                                                        class="tx-danger">*</span></label>
                                                                <input type="number" class="form-control "
                                                                    name="ticket_no" required="true"
                                                                    placeholder="Enter Tickets Number.. ">
                                                            </div>
                                                        </div> --}}
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label class="form-control-label">Message<span class="tx-danger">*</span></label>

                                                                <textarea class="form-control" name="message" placeholder="Message"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="mt-2">
                                                <a href="{{ route('user.GenerateTicket') }}"> <button class="btn btn-primary"
                                                        type="button">Cancel</button> </a>
                                                <button class="btn btn-success" type="submit" name="submit">Submit
                                                </button>
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

