
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Support Message </h2>
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
                                    <h4 class="card-title">View All Messages</h4>
                                </div>
                                <div class="card-body">
                                    <div class="card-datatable">
                                        <table class="dt-multilingual table">

                                            <?php if(is_array($open_ticket_msg) || is_object($open_ticket_msg)){ ?>
                                                <?php $count= 0; ?>
                                                <?php foreach ($open_ticket_msg as $item): ?>
                                                <?php if($item->reply_by == 'user'){ }  ?>

                                                <h5 class="form-header" style="width: 233px; background:#e92266;padding: 7px;color: #fff;border-radius: 10px;"> <?= $item->category ?> (<?=$item->gen_date?>)</h5>
                                                <br>
                                               <p class="comp_bank_p" style="color:#000" ><?= $item->msg ?></p>
                                               <p class="text-right" style="margin-right: 30px;color:#000;margin-left:300px"><?=($item->reply_by == 'admin')? 'Admin' : 'You'?></p>
                                               <?php endforeach; ?>
                                               <?php } ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

