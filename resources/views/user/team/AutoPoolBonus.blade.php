
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

                        <div class="col-md-12">
                            <select name="pkgid" class="form-select pkg" onchange="autoPoolTbl(this,value)">
                                <option value="0">Select Pool</option>
                                <option value="1">Basic - 5$</option>
                                <option value="2">Stadard - 10</option>
                                <option value="3">Silver - 20$</option>
                                <option value="4">Gold - 40$</option>
                                <option value="5">Pearl - 80$</option>
                                <option value="6">Topaz - 160$</option>
                                <option value="7">Emerald - 320$</option>
                                <option value="8">Ruby - 640$</option>
                                <option value="9">Diamond - 1280$</option>
                                <option value="10">Ambassador - 2560$</option>
                                <option value="11">Crown - 5120$</option>
                            </select>
                        </div>

                        <div class="col-md-12 col-12 mt-2">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">AutoPool Profit</h4>
                                </div>
                                <div class="card-body">
                                    <div id="poolData">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
