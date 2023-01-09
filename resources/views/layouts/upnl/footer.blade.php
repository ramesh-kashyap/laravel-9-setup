</div>
</div>
</div>
@include('partials.notify')
<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2022<a
                class="ms-25" href="#!" target="_blank">{{siteName()}}</a><span class="d-none d-sm-inline-block">, All
                rights
                Reserved</span></span></p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>

<script src="{{asset('')}}upnl/app-assets/js/userdash.js"></script>

<script src="{{asset('')}}upnl/app-assets/vendors/js/vendors.min.js"></script>
<script src="{{asset('')}}upnl/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
<script src="{{asset('')}}upnl/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
<script src="{{asset('')}}upnl/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
<script src="{{asset('')}}upnl/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js"></script>
<script src="{{asset('')}}upnl/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
<script src="{{asset('')}}upnl/app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>


<script src="{{asset('')}}upnl/app-assets/vendors/js/charts/apexcharts.min.js"></script>
<script src="{{asset('')}}upnl/app-assets/vendors/js/extensions/toastr.min.js"></script>


<script src="{{asset('')}}upnl/app-assets/js/core/app-menu.min.js"></script>
<script src="{{asset('')}}upnl/app-assets/js/core/app.min.js"></script>
<script src="{{asset('')}}upnl/app-assets/js/scripts/customizer.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
    .swal-modal {
        width: 20rem;
        opacity: 0;
        pointer-events: none;
        background-color: #fff;
        text-align: center !important;
        border-radius: 5px;
        position: static;
        margin: 25px auto;
        display: inline-block;
        vertical-align: middle;
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        z-index: 10001;
        transition: opacity .2s, -webkit-transform .3s;
        transition: transform .3s, opacity .2s;
        transition: transform .3s, opacity .2s, -webkit-transform .3s;
    }

    .swal-button {
        background-color: #00cfe8 !important;
        color: #fff;
        border: none;
        box-shadow: none;
        border-radius: 5px;
        font-weight: 400;
        font-size: 12px;
        padding: 10px 24px;
        margin: 0;
        box-shadow: rgb(0 0 0 / 17%) 0px -23px 25px 0px inset, rgb(0 0 0 / 15%) 0px -36px 30px 0px inset, rgb(0 0 0 / 10%) 0px -79px 40px 0px inset, rgb(0 0 0 / 6%) 0px 2px 1px, rgb(0 0 0 / 9%) 0px 4px 2px, rgb(0 0 0 / 9%) 0px 8px 4px, rgb(0 0 0 / 9%) 0px 16px 8px, rgb(0 0 0 / 9%) 0px 32px 16px !important;
        cursor: pointer;
        width: 17rem;
    }

    .swal-text {
        font-size: 14px;
        position: relative;
        float: none;
        line-height: normal;
        vertical-align: top;
        text-align: center;
        display: inline-block;
        margin: 0;
        padding: 0 10px;
        font-weight: bold;
        color: #283046;
        max-width: calc(100% - 20px);
        overflow-wrap: break-word;
        box-sizing: border-box;
    }

    .swal-title {
        color: rgba(0, 0, 0, .65);
        font-weight: 600;
        text-transform: none;
        position: relative;
        display: block;
        padding: 13px 16px;
        font-size: 22px;
        line-height: normal;
        text-align: center;
        margin-bottom: 0;
    }
</style>

<script src="{{asset('')}}upnl/app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
<script src="{{asset('')}}upnl/app-assets/js/scripts/tables/table-datatables-basic.min.js"></script>
<script src="{{asset('')}}upnl/app-assets/js/scripts/pages/app-ecommerce.min.js"></script>

<script>
    function showTime() {
        var options = {
            weekday: 'short'
            , year: 'numeric'
            , month: 'short'
            , day: 'numeric'
            , hour: '2-digit'
            , minute: '2-digit'
            , second: '2-digit'
            , hour24: false
        };
        var prnDt = new Date().toLocaleTimeString('en-us', options);
        var time = prnDt;
        document.getElementById("MyClockDisplay").innerText = time;
        document.getElementById("MyClockDisplay").textContent = time;
        setTimeout(showTime, 1000);
    }

    showTime();

</script>
<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14
                , height: 14
            });
        }
    })

</script>
</body>

</html>