<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>{{siteName()}} | Register</title>
    <link rel="apple-touch-icon" href="https://vision2o.live/member/{{asset('')}}upnl/app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/{{asset('')}}upnl/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/vendors/css/vendors.min.css">


    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/themes/bordered-layout.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/themes/semi-dark-layout.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/app-assets/css/pages/authentication.css">


    <link rel="stylesheet" type="text/css" href="{{asset('')}}upnl/assets/css/style.css">
    <style>
        .auth-wrapper.auth-basic .auth-inner {
        max-width: 443px;
    }
        </style>
</head>


<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-basic px-2">
                    <div class="auth-inner my-2">

                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="{{asset('')}}" class="brand-logo">
                                    <a href="{{asset('')}}" class="brand-logo">
                                        <img src="{{asset('')}}upnl/app-assets/images/logo/logov.png" alt="" width="180">
                                    </a>
                                </a>
                                <h4 class="card-title mb-1">Adventure starts here 🚀</h4>
                                <span class="sponsor" style="color:orange"></span>
                                <form class="auth-register-form mt-2" action="Registration.html" method="post">
                                    <div class="mb-1">
                                        <label for="register-username" class="form-label">Sponsor ID</label>
                                        <input type="text" name="usponsor" class="form-control ps-15 bg-transparent userdtl" onkeyup="referalId()" onBlur="userdtl()" value="" placeholder="Sponsor ID" required>
                                    </div>
                                    <div class="mb-1">
                                        <label for="register-email" class="form-label">Name</label>
                                        <input type="text" name="uname" class="form-control ps-15 bg-transparent" placeholder="Full Name" required>
                                    </div>
                                    <div class="mb-1">
                                        <label for="register-password" class="form-label">Email</label>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input type="email" name="uemail" class="form-control ps-15 bg-transparent" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <label for="register-password" class="form-label">Country</label>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <select name="ucountry" class="form-select">
                                                <option value="">Select Country</option>
                                                <option value="1" class="text-dark"> AFGHANISTAN <b>(+93 )</b></option>
                                                <option value="2" class="text-dark"> ALBANIA <b>(+355 )</b></option>
                                                <option value="3" class="text-dark"> ALGERIA <b>(+213 )</b></option>
                                                <option value="4" class="text-dark"> AMERICAN SAMOA <b>(+1684 )</b></option>
                                                <option value="5" class="text-dark"> ANDORRA <b>(+376 )</b></option>
                                                <option value="6" class="text-dark"> ANGOLA <b>(+244 )</b></option>
                                                <option value="7" class="text-dark"> ANGUILLA <b>(+1264 )</b></option>
                                                <option value="8" class="text-dark"> ANTARCTICA <b>(+0 )</b></option>
                                                <option value="9" class="text-dark"> ANTIGUA AND BARBUDA <b>(+1268 )</b></option>
                                                <option value="10" class="text-dark"> ARGENTINA <b>(+54 )</b></option>
                                                <option value="11" class="text-dark"> ARMENIA <b>(+374 )</b></option>
                                                <option value="12" class="text-dark"> ARUBA <b>(+297 )</b></option>
                                                <option value="13" class="text-dark"> AUSTRALIA <b>(+61 )</b></option>
                                                <option value="14" class="text-dark"> AUSTRIA <b>(+43 )</b></option>
                                                <option value="15" class="text-dark"> AZERBAIJAN <b>(+994 )</b></option>
                                                <option value="16" class="text-dark"> BAHAMAS <b>(+1242 )</b></option>
                                                <option value="17" class="text-dark"> BAHRAIN <b>(+973 )</b></option>
                                                <option value="18" class="text-dark"> BANGLADESH <b>(+880 )</b></option>
                                                <option value="19" class="text-dark"> BARBADOS <b>(+1246 )</b></option>
                                                <option value="20" class="text-dark"> BELARUS <b>(+375 )</b></option>
                                                <option value="21" class="text-dark"> BELGIUM <b>(+32 )</b></option>
                                                <option value="22" class="text-dark"> BELIZE <b>(+501 )</b></option>
                                                <option value="23" class="text-dark"> BENIN <b>(+229 )</b></option>
                                                <option value="24" class="text-dark"> BERMUDA <b>(+1441 )</b></option>
                                                <option value="25" class="text-dark"> BHUTAN <b>(+975 )</b></option>
                                                <option value="26" class="text-dark"> BOLIVIA <b>(+591 )</b></option>
                                                <option value="27" class="text-dark"> BOSNIA AND HERZEGOVINA <b>(+387 )</b></option>
                                                <option value="28" class="text-dark"> BOTSWANA <b>(+267 )</b></option>
                                                <option value="29" class="text-dark"> BOUVET ISLAND <b>(+0 )</b></option>
                                                <option value="30" class="text-dark"> BRAZIL <b>(+55 )</b></option>
                                                <option value="31" class="text-dark"> BRITISH INDIAN OCEAN TERRITORY <b>(+246 )</b></option>
                                                <option value="32" class="text-dark"> BRUNEI DARUSSALAM <b>(+673 )</b></option>
                                                <option value="33" class="text-dark"> BULGARIA <b>(+359 )</b></option>
                                                <option value="34" class="text-dark"> BURKINA FASO <b>(+226 )</b></option>
                                                <option value="35" class="text-dark"> BURUNDI <b>(+257 )</b></option>
                                                <option value="36" class="text-dark"> CAMBODIA <b>(+855 )</b></option>
                                                <option value="37" class="text-dark"> CAMEROON <b>(+237 )</b></option>
                                                <option value="38" class="text-dark"> CANADA <b>(+1 )</b></option>
                                                <option value="39" class="text-dark"> CAPE VERDE <b>(+238 )</b></option>
                                                <option value="40" class="text-dark"> CAYMAN ISLANDS <b>(+1345 )</b></option>
                                                <option value="41" class="text-dark"> CENTRAL AFRICAN REPUBLIC <b>(+236 )</b></option>
                                                <option value="42" class="text-dark"> CHAD <b>(+235 )</b></option>
                                                <option value="43" class="text-dark"> CHILE <b>(+56 )</b></option>
                                                <option value="44" class="text-dark"> CHINA <b>(+86 )</b></option>
                                                <option value="45" class="text-dark"> CHRISTMAS ISLAND <b>(+61 )</b></option>
                                                <option value="46" class="text-dark"> COCOS (KEELING) ISLANDS <b>(+672 )</b></option>
                                                <option value="47" class="text-dark"> COLOMBIA <b>(+57 )</b></option>
                                                <option value="48" class="text-dark"> COMOROS <b>(+269 )</b></option>
                                                <option value="49" class="text-dark"> CONGO <b>(+242 )</b></option>
                                                <option value="50" class="text-dark"> CONGO, THE DEMOCRATIC REPUBLIC OF THE <b>(+242 )</b></option>
                                                <option value="51" class="text-dark"> COOK ISLANDS <b>(+682 )</b></option>
                                                <option value="52" class="text-dark"> COSTA RICA <b>(+506 )</b></option>
                                                <option value="53" class="text-dark"> COTE D'IVOIRE <b>(+225 )</b></option>
                                                <option value="54" class="text-dark"> CROATIA <b>(+385 )</b></option>
                                                <option value="55" class="text-dark"> CUBA <b>(+53 )</b></option>
                                                <option value="56" class="text-dark"> CYPRUS <b>(+357 )</b></option>
                                                <option value="57" class="text-dark"> CZECH REPUBLIC <b>(+420 )</b></option>
                                                <option value="58" class="text-dark"> DENMARK <b>(+45 )</b></option>
                                                <option value="59" class="text-dark"> DJIBOUTI <b>(+253 )</b></option>
                                                <option value="60" class="text-dark"> DOMINICA <b>(+1767 )</b></option>
                                                <option value="61" class="text-dark"> DOMINICAN REPUBLIC <b>(+1809 )</b></option>
                                                <option value="62" class="text-dark"> ECUADOR <b>(+593 )</b></option>
                                                <option value="63" class="text-dark"> EGYPT <b>(+20 )</b></option>
                                                <option value="64" class="text-dark"> EL SALVADOR <b>(+503 )</b></option>
                                                <option value="65" class="text-dark"> EQUATORIAL GUINEA <b>(+240 )</b></option>
                                                <option value="66" class="text-dark"> ERITREA <b>(+291 )</b></option>
                                                <option value="67" class="text-dark"> ESTONIA <b>(+372 )</b></option>
                                                <option value="68" class="text-dark"> ETHIOPIA <b>(+251 )</b></option>
                                                <option value="69" class="text-dark"> FALKLAND ISLANDS (MALVINAS) <b>(+500 )</b></option>
                                                <option value="70" class="text-dark"> FAROE ISLANDS <b>(+298 )</b></option>
                                                <option value="71" class="text-dark"> FIJI <b>(+679 )</b></option>
                                                <option value="72" class="text-dark"> FINLAND <b>(+358 )</b></option>
                                                <option value="73" class="text-dark"> FRANCE <b>(+33 )</b></option>
                                                <option value="74" class="text-dark"> FRENCH GUIANA <b>(+594 )</b></option>
                                                <option value="75" class="text-dark"> FRENCH POLYNESIA <b>(+689 )</b></option>
                                                <option value="76" class="text-dark"> FRENCH SOUTHERN TERRITORIES <b>(+0 )</b></option>
                                                <option value="77" class="text-dark"> GABON <b>(+241 )</b></option>
                                                <option value="78" class="text-dark"> GAMBIA <b>(+220 )</b></option>
                                                <option value="79" class="text-dark"> GEORGIA <b>(+995 )</b></option>
                                                <option value="80" class="text-dark"> GERMANY <b>(+49 )</b></option>
                                                <option value="81" class="text-dark"> GHANA <b>(+233 )</b></option>
                                                <option value="82" class="text-dark"> GIBRALTAR <b>(+350 )</b></option>
                                                <option value="83" class="text-dark"> GREECE <b>(+30 )</b></option>
                                                <option value="84" class="text-dark"> GREENLAND <b>(+299 )</b></option>
                                                <option value="85" class="text-dark"> GRENADA <b>(+1473 )</b></option>
                                                <option value="86" class="text-dark"> GUADELOUPE <b>(+590 )</b></option>
                                                <option value="87" class="text-dark"> GUAM <b>(+1671 )</b></option>
                                                <option value="88" class="text-dark"> GUATEMALA <b>(+502 )</b></option>
                                                <option value="89" class="text-dark"> GUINEA <b>(+224 )</b></option>
                                                <option value="90" class="text-dark"> GUINEA-BISSAU <b>(+245 )</b></option>
                                                <option value="91" class="text-dark"> GUYANA <b>(+592 )</b></option>
                                                <option value="92" class="text-dark"> HAITI <b>(+509 )</b></option>
                                                <option value="93" class="text-dark"> HEARD ISLAND AND MCDONALD ISLANDS <b>(+0 )</b></option>
                                                <option value="94" class="text-dark"> HOLY SEE (VATICAN CITY STATE) <b>(+39 )</b></option>
                                                <option value="95" class="text-dark"> HONDURAS <b>(+504 )</b></option>
                                                <option value="96" class="text-dark"> HONG KONG <b>(+852 )</b></option>
                                                <option value="97" class="text-dark"> HUNGARY <b>(+36 )</b></option>
                                                <option value="98" class="text-dark"> ICELAND <b>(+354 )</b></option>
                                                <option value="99" class="text-dark"> INDIA <b>(+91 )</b></option>
                                                <option value="100" class="text-dark"> INDONESIA <b>(+62 )</b></option>
                                                <option value="101" class="text-dark"> IRAN, ISLAMIC REPUBLIC OF <b>(+98 )</b></option>
                                                <option value="102" class="text-dark"> IRAQ <b>(+964 )</b></option>
                                                <option value="103" class="text-dark"> IRELAND <b>(+353 )</b></option>
                                                <option value="104" class="text-dark"> ISRAEL <b>(+972 )</b></option>
                                                <option value="105" class="text-dark"> ITALY <b>(+39 )</b></option>
                                                <option value="106" class="text-dark"> JAMAICA <b>(+1876 )</b></option>
                                                <option value="107" class="text-dark"> JAPAN <b>(+81 )</b></option>
                                                <option value="108" class="text-dark"> JORDAN <b>(+962 )</b></option>
                                                <option value="109" class="text-dark"> KAZAKHSTAN <b>(+7 )</b></option>
                                                <option value="110" class="text-dark"> KENYA <b>(+254 )</b></option>
                                                <option value="111" class="text-dark"> KIRIBATI <b>(+686 )</b></option>
                                                <option value="112" class="text-dark"> KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF <b>(+850 )</b></option>
                                                <option value="113" class="text-dark"> KOREA, REPUBLIC OF <b>(+82 )</b></option>
                                                <option value="114" class="text-dark"> KUWAIT <b>(+965 )</b></option>
                                                <option value="115" class="text-dark"> KYRGYZSTAN <b>(+996 )</b></option>
                                                <option value="116" class="text-dark"> LAO PEOPLE'S DEMOCRATIC REPUBLIC <b>(+856 )</b></option>
                                                <option value="117" class="text-dark"> LATVIA <b>(+371 )</b></option>
                                                <option value="118" class="text-dark"> LEBANON <b>(+961 )</b></option>
                                                <option value="119" class="text-dark"> LESOTHO <b>(+266 )</b></option>
                                                <option value="120" class="text-dark"> LIBERIA <b>(+231 )</b></option>
                                                <option value="121" class="text-dark"> LIBYAN ARAB JAMAHIRIYA <b>(+218 )</b></option>
                                                <option value="122" class="text-dark"> LIECHTENSTEIN <b>(+423 )</b></option>
                                                <option value="123" class="text-dark"> LITHUANIA <b>(+370 )</b></option>
                                                <option value="124" class="text-dark"> LUXEMBOURG <b>(+352 )</b></option>
                                                <option value="125" class="text-dark"> MACAO <b>(+853 )</b></option>
                                                <option value="126" class="text-dark"> MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF <b>(+389 )</b></option>
                                                <option value="127" class="text-dark"> MADAGASCAR <b>(+261 )</b></option>
                                                <option value="128" class="text-dark"> MALAWI <b>(+265 )</b></option>
                                                <option value="129" class="text-dark"> MALAYSIA <b>(+60 )</b></option>
                                                <option value="130" class="text-dark"> MALDIVES <b>(+960 )</b></option>
                                                <option value="131" class="text-dark"> MALI <b>(+223 )</b></option>
                                                <option value="132" class="text-dark"> MALTA <b>(+356 )</b></option>
                                                <option value="133" class="text-dark"> MARSHALL ISLANDS <b>(+692 )</b></option>
                                                <option value="134" class="text-dark"> MARTINIQUE <b>(+596 )</b></option>
                                                <option value="135" class="text-dark"> MAURITANIA <b>(+222 )</b></option>
                                                <option value="136" class="text-dark"> MAURITIUS <b>(+230 )</b></option>
                                                <option value="137" class="text-dark"> MAYOTTE <b>(+269 )</b></option>
                                                <option value="138" class="text-dark"> MEXICO <b>(+52 )</b></option>
                                                <option value="139" class="text-dark"> MICRONESIA, FEDERATED STATES OF <b>(+691 )</b></option>
                                                <option value="140" class="text-dark"> MOLDOVA, REPUBLIC OF <b>(+373 )</b></option>
                                                <option value="141" class="text-dark"> MONACO <b>(+377 )</b></option>
                                                <option value="142" class="text-dark"> MONGOLIA <b>(+976 )</b></option>
                                                <option value="143" class="text-dark"> MONTSERRAT <b>(+1664 )</b></option>
                                                <option value="144" class="text-dark"> MOROCCO <b>(+212 )</b></option>
                                                <option value="145" class="text-dark"> MOZAMBIQUE <b>(+258 )</b></option>
                                                <option value="146" class="text-dark"> MYANMAR <b>(+95 )</b></option>
                                                <option value="147" class="text-dark"> NAMIBIA <b>(+264 )</b></option>
                                                <option value="148" class="text-dark"> NAURU <b>(+674 )</b></option>
                                                <option value="149" class="text-dark"> NEPAL <b>(+977 )</b></option>
                                                <option value="150" class="text-dark"> NETHERLANDS <b>(+31 )</b></option>
                                                <option value="151" class="text-dark"> NETHERLANDS ANTILLES <b>(+599 )</b></option>
                                                <option value="152" class="text-dark"> NEW CALEDONIA <b>(+687 )</b></option>
                                                <option value="153" class="text-dark"> NEW ZEALAND <b>(+64 )</b></option>
                                                <option value="154" class="text-dark"> NICARAGUA <b>(+505 )</b></option>
                                                <option value="155" class="text-dark"> NIGER <b>(+227 )</b></option>
                                                <option value="156" class="text-dark"> NIGERIA <b>(+234 )</b></option>
                                                <option value="157" class="text-dark"> NIUE <b>(+683 )</b></option>
                                                <option value="158" class="text-dark"> NORFOLK ISLAND <b>(+672 )</b></option>
                                                <option value="159" class="text-dark"> NORTHERN MARIANA ISLANDS <b>(+1670 )</b></option>
                                                <option value="160" class="text-dark"> NORWAY <b>(+47 )</b></option>
                                                <option value="161" class="text-dark"> OMAN <b>(+968 )</b></option>
                                                <option value="162" class="text-dark"> PAKISTAN <b>(+92 )</b></option>
                                                <option value="163" class="text-dark"> PALAU <b>(+680 )</b></option>
                                                <option value="164" class="text-dark"> PALESTINIAN TERRITORY, OCCUPIED <b>(+970 )</b></option>
                                                <option value="165" class="text-dark"> PANAMA <b>(+507 )</b></option>
                                                <option value="166" class="text-dark"> PAPUA NEW GUINEA <b>(+675 )</b></option>
                                                <option value="167" class="text-dark"> PARAGUAY <b>(+595 )</b></option>
                                                <option value="168" class="text-dark"> PERU <b>(+51 )</b></option>
                                                <option value="169" class="text-dark"> PHILIPPINES <b>(+63 )</b></option>
                                                <option value="170" class="text-dark"> PITCAIRN <b>(+0 )</b></option>
                                                <option value="171" class="text-dark"> POLAND <b>(+48 )</b></option>
                                                <option value="172" class="text-dark"> PORTUGAL <b>(+351 )</b></option>
                                                <option value="173" class="text-dark"> PUERTO RICO <b>(+1787 )</b></option>
                                                <option value="174" class="text-dark"> QATAR <b>(+974 )</b></option>
                                                <option value="175" class="text-dark"> REUNION <b>(+262 )</b></option>
                                                <option value="176" class="text-dark"> ROMANIA <b>(+40 )</b></option>
                                                <option value="177" class="text-dark"> RUSSIAN FEDERATION <b>(+70 )</b></option>
                                                <option value="178" class="text-dark"> RWANDA <b>(+250 )</b></option>
                                                <option value="179" class="text-dark"> SAINT HELENA <b>(+290 )</b></option>
                                                <option value="180" class="text-dark"> SAINT KITTS AND NEVIS <b>(+1869 )</b></option>
                                                <option value="181" class="text-dark"> SAINT LUCIA <b>(+1758 )</b></option>
                                                <option value="182" class="text-dark"> SAINT PIERRE AND MIQUELON <b>(+508 )</b></option>
                                                <option value="183" class="text-dark"> SAINT VINCENT AND THE GRENADINES <b>(+1784 )</b></option>
                                                <option value="184" class="text-dark"> SAMOA <b>(+684 )</b></option>
                                                <option value="185" class="text-dark"> SAN MARINO <b>(+378 )</b></option>
                                                <option value="186" class="text-dark"> SAO TOME AND PRINCIPE <b>(+239 )</b></option>
                                                <option value="187" class="text-dark"> SAUDI ARABIA <b>(+966 )</b></option>
                                                <option value="188" class="text-dark"> SENEGAL <b>(+221 )</b></option>
                                                <option value="189" class="text-dark"> SERBIA AND MONTENEGRO <b>(+381 )</b></option>
                                                <option value="190" class="text-dark"> SEYCHELLES <b>(+248 )</b></option>
                                                <option value="191" class="text-dark"> SIERRA LEONE <b>(+232 )</b></option>
                                                <option value="192" class="text-dark"> SINGAPORE <b>(+65 )</b></option>
                                                <option value="193" class="text-dark"> SLOVAKIA <b>(+421 )</b></option>
                                                <option value="194" class="text-dark"> SLOVENIA <b>(+386 )</b></option>
                                                <option value="195" class="text-dark"> SOLOMON ISLANDS <b>(+677 )</b></option>
                                                <option value="196" class="text-dark"> SOMALIA <b>(+252 )</b></option>
                                                <option value="197" class="text-dark"> SOUTH AFRICA <b>(+27 )</b></option>
                                                <option value="198" class="text-dark"> SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS <b>(+0 )</b></option>
                                                <option value="199" class="text-dark"> SPAIN <b>(+34 )</b></option>
                                                <option value="200" class="text-dark"> SRI LANKA <b>(+94 )</b></option>
                                                <option value="201" class="text-dark"> SUDAN <b>(+249 )</b></option>
                                                <option value="202" class="text-dark"> SURINAME <b>(+597 )</b></option>
                                                <option value="203" class="text-dark"> SVALBARD AND JAN MAYEN <b>(+47 )</b></option>
                                                <option value="204" class="text-dark"> SWAZILAND <b>(+268 )</b></option>
                                                <option value="205" class="text-dark"> SWEDEN <b>(+46 )</b></option>
                                                <option value="206" class="text-dark"> SWITZERLAND <b>(+41 )</b></option>
                                                <option value="207" class="text-dark"> SYRIAN ARAB REPUBLIC <b>(+963 )</b></option>
                                                <option value="208" class="text-dark"> TAIWAN, PROVINCE OF CHINA <b>(+886 )</b></option>
                                                <option value="209" class="text-dark"> TAJIKISTAN <b>(+992 )</b></option>
                                                <option value="210" class="text-dark"> TANZANIA, UNITED REPUBLIC OF <b>(+255 )</b></option>
                                                <option value="211" class="text-dark"> THAILAND <b>(+66 )</b></option>
                                                <option value="212" class="text-dark"> TIMOR-LESTE <b>(+670 )</b></option>
                                                <option value="213" class="text-dark"> TOGO <b>(+228 )</b></option>
                                                <option value="214" class="text-dark"> TOKELAU <b>(+690 )</b></option>
                                                <option value="215" class="text-dark"> TONGA <b>(+676 )</b></option>
                                                <option value="216" class="text-dark"> TRINIDAD AND TOBAGO <b>(+1868 )</b></option>
                                                <option value="217" class="text-dark"> TUNISIA <b>(+216 )</b></option>
                                                <option value="218" class="text-dark"> TURKEY <b>(+90 )</b></option>
                                                <option value="219" class="text-dark"> TURKMENISTAN <b>(+7370 )</b></option>
                                                <option value="220" class="text-dark"> TURKS AND CAICOS ISLANDS <b>(+1649 )</b></option>
                                                <option value="221" class="text-dark"> TUVALU <b>(+688 )</b></option>
                                                <option value="222" class="text-dark"> UGANDA <b>(+256 )</b></option>
                                                <option value="223" class="text-dark"> UKRAINE <b>(+380 )</b></option>
                                                <option value="224" class="text-dark"> UNITED ARAB EMIRATES <b>(+971 )</b></option>
                                                <option value="225" class="text-dark"> UNITED KINGDOM <b>(+44 )</b></option>
                                                <option value="226" class="text-dark"> UNITED STATES <b>(+1 )</b></option>
                                                <option value="227" class="text-dark"> UNITED STATES MINOR OUTLYING ISLANDS <b>(+1 )</b></option>
                                                <option value="228" class="text-dark"> URUGUAY <b>(+598 )</b></option>
                                                <option value="229" class="text-dark"> UZBEKISTAN <b>(+998 )</b></option>
                                                <option value="230" class="text-dark"> VANUATU <b>(+678 )</b></option>
                                                <option value="231" class="text-dark"> VENEZUELA <b>(+58 )</b></option>
                                                <option value="232" class="text-dark"> VIET NAM <b>(+84 )</b></option>
                                                <option value="233" class="text-dark"> VIRGIN ISLANDS, BRITISH <b>(+1284 )</b></option>
                                                <option value="234" class="text-dark"> VIRGIN ISLANDS, U.S. <b>(+1340 )</b></option>
                                                <option value="235" class="text-dark"> WALLIS AND FUTUNA <b>(+681 )</b></option>
                                                <option value="236" class="text-dark"> WESTERN SAHARA <b>(+212 )</b></option>
                                                <option value="237" class="text-dark"> YEMEN <b>(+967 )</b></option>
                                                <option value="238" class="text-dark"> ZAMBIA <b>(+260 )</b></option>
                                                <option value="239" class="text-dark"> ZIMBABWE <b>(+263 )</b></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <label for="register-password" class="form-label">Mobile No.</label>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input type="number" name="umobile" class="form-control ps-15 bg-transparent" placeholder="Contact Number" required>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <label for="register-password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input type="password" name="upass" class="form-control ps-15 bg-transparent" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <label for="register-password" class="form-label">Confirm Password</label>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input type="password" name="uconpass" class="form-control ps-15 bg-transparent" placeholder="Retype Password" required>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="register-privacy-policy" tabindex="4" />
                                            <label class="form-check-label" for="register-privacy-policy">
                                                I agree to <a href="#">privacy policy & terms</a>
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100" tabindex="5">Sign up</button>
                                </form>
                                <p class="text-center mt-2">
                                    <span>Already have an account?</span>
                                    <a href="{{route('login')}}">
                                        <span>Sign in instead</span>
                                    </a>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('')}}upnl/app-assets/js/userdash.js"></script>
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

    <script src="{{asset('')}}upnl/app-assets/vendors/js/vendors.min.js"></script>


    <script src="{{asset('')}}upnl/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>


    <script src="{{asset('')}}upnl/app-assets/js/core/app-menu.min.js"></script>
    <script src="{{asset('')}}upnl/app-assets/js/core/app.min.js"></script>


    <script src="{{asset('')}}upnl/app-assets/js/scripts/pages/auth-register.min.js"></script>
</body>
</html>
