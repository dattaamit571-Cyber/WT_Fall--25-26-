
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"  >
<head>
         <title>Sakura Paribahan Private Limited</title>    <meta http-equiv="Content-Encoding" content="gzip" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="robots" content="index, follow" />
<link rel="preconnect" href="https://static-busbd.bdtickets.com">
<link rel="dns-prefetch" href="https://static-busbd.bdtickets.com">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="sakuraparibahanbd.com" />
<meta name="description" content="sakuraparibahanbd.com" />
<link rel="shortcut icon" href="https://static-busbd.bdtickets.com/skins/busbdbrown/default/images/favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="https://static-busbd.bdtickets.com/skins/busbdbrown/default/default.css" media="screen" />
<link rel="stylesheet" type="text/css" href="https://static-busbd.bdtickets.com/skins/busbdbrown/default/custom.css" media="screen" />
<link rel="stylesheet" type="text/css" href="https://static-busbd.bdtickets.com/js/jquery.ui/themes/base/ui.all.css" media="screen" />
<script type="text/javascript" src="https://static-busbd.bdtickets.com/js/jquery/jquery.js"></script>
<script type="text/javascript" src="https://static-busbd.bdtickets.com/js/jquery.json/jquery.json.min.js"></script>
<script type="text/javascript" src="https://static-busbd.bdtickets.com/js/jquery.ajaxq/jquery.ajaxq.min.js"></script>
<script type="text/javascript" src="https://static-busbd.bdtickets.com/js/jquery.validate/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://static-busbd.bdtickets.com/js/phpjs/php.full.min.js"></script>
<script type="text/javascript" src="https://static-busbd.bdtickets.com/js/jquery.ui/ui.datepicker.js"></script><script type="text/javascript">
var imageDirectory = 'https://static-busbd.bdtickets.com/skins/busbdbrown/default/';
var _arrowImage = imageDirectory + 'images/ajax-loader-tr.gif';
</script>
</head>
<body>
<div id="wrapper">
<div id="panel" class="bold">
    <ul>
        
            <!-- 
            <li><a href=" echo $this->url(array('redirectto' => 'cancellation'), 'onlinecustomer_onlinecustomer_signinredirect'); "> echo $this->translator('Onlineuser_cancellation', 'onlinecustomer'); </a></li>
            <li><a href="echo $this->url(array(), 'onlinecustomer_onlinecustomer_signup');">echo $this->translator('onlineuser_sign_up', 'onlinecustomer');</a></li>
            <li><a href="echo $this->url(array(), 'onlinecustomer_onlinecustomer_signin');">echo $this->translator('onlineuser_sign_in', 'onlinecustomer');</a></li> -->

        
        

        
                <li>
           <a href="/en_US/admin/dashboard">ADMIN</a>
        </li>
            </ul>
</div>

<div id="header">
    <div id="left_sub_header">       
                <div id="image_placeholder">
            <a href="/en_US/">
                <img  id="logo" src='https://static-busbd.bdtickets.com/busbdmedia/company_gznh7hmrc25fbb9ttwnlcbsjdlpriz1bzs4'  alt='Sakura Paribahan' />
            </a>
        </div>
    </div>
    <div id='headerrightbox'>
                    <div class="detailsbox yellow_white phoneDiv textcenter right">
                <span title="Call for bus tickets" class="telephone txtwhite">Call: 16460 Or Email: support@bdtickets.com</span>
            </div>
          
                </div>
</div>


<div class="howtobuy help-menu-btn"><span class="hide first">How to buy Tickets?</span><span class="second">?</span></div>
<div id="howtobuyresult" style="display: none;"><div class="closebutton"></div><div id="howtobuyresultphtml"></div><div style="clear: both;"></div></div>
<script type="text/javascript">
    $(document).ready(function() {
        $(".howtobuy").click(function(){
            if(($("#howtobuyresultphtml").html().length) <= 0){
                showLoading();
                $.ajax({
                    url: '/en_US/howtobuy',
                    async: false,
                    dataType: "json",
                    type: "POST",
                    success: function(data) {
                        hideLoading();
                        $("#howtobuyresult").addClass('active').fadeIn();
                        $("#howtobuyresultphtml").html(data);
                    }
                });
            }else{
                $("#howtobuyresult").fadeIn();
            }

        });
        $("#howtobuyresult .closebutton").click(function(){
            $("#howtobuyresult").fadeOut();
        });


    });
</script>

<style>
.new_site_button {
  background-color: #c90000;
  border: 1px solid black;
  border-radius: 5px;
  color: #fff;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 16px;
  cursor: pointer;
  float: right;
  font-family: Arial, Helvetica, sans-serif
}
.new_site_button:hover {
  background-color: #fff;
  color: #c90000;
}
</style><div id="container">
<div class="widget_container " id="container_1"><div class="widget" id="container_1_1"></div></div><div class="widget_container " id="container_2"><div class="widget" id="container_2_1"><link href="https://static-busbd.bdtickets.com/skins/busbdbrown/default/onlineseatbooking.css" media="screen" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://static-busbd.bdtickets.com/js/slider/js/bxslider/jquery.bxSlider.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        $('.bxslider').bxSlider({
            auto: true,
            autoControls: true
        });
        $('a.bx-prev,a.bx-next,div.bx-auto').remove();
    });
</script>

<div id='errorDiv' style="display:none;float:left; width:100%;"><ul class="message-container"><li  id='error_container' class="message error-first message error-last"></li></ul></div>
<script type="text/javascript" src="https://static-busbd.bdtickets.com/js/jquery.ui/ui.datepicker.js"></script><script type="text/javascript">
    $(document).ready(function() {
        $('li.searchcatagory').hide();
        $('select#searchmenu_coachtype').change(function(){
            $('select#searchmenu_tentative option[value=""]').attr('selected',true);
            $('input#searchmenu_noofseats').val('');
            if($(this).val() == 1){
                $('li.searchcatagory').show();
            }else{
                $('li.searchcatagory').hide();
            }
        })


        $("#coachsearchForm").submit(function() {
            var error = null;
            $('#error-general-wrapper').hide();
            if(trim($("#searchmenu_leavingform").val()) == ''){
                error = "PLEASE SELECT WHERE TO LEAVE FROM.";
            }else if(trim($("#searchmenu_goingto").val()) == ''){
                error = "PLEASE SELECT WHERE TO GO.";
            }else if(trim($("#searchmenu_departingon").val()) == ''){
                error = "PLEASE SELECT DEPARTING TIME.";
            }else if($('select#searchmenu_coachtype option:selected').val() == ''){
                error = "PLEASE SELECT COACH TYPE.";
            }

            if($('select#searchmenu_coachtype option:selected').val() == '1'){
                if($('select#searchmenu_tentative option:selected').val() == ''){
                    error = "PLEASE SELECT TENTATIVE TIME.";
                }/*else if($('input#searchmenu_noofseats').val() == ''){
                    error = "PLEASE PUT NO OF SEATS U REQUIRED.";
                }*/
            }

            /*if($('input#searchmenu_noofseats').val() > 6){
                error = "Maximum Allowed Seat 6(SIX).";
            }*/

            if(!is_null(error)){  $('#error_container').html(error);  $('#errorDiv').show(); error = false;  }else{
                $('#error_container').html('');   $('#errorDiv').hide(); error = true;
            }
            return error;
        });
        var departingonMaxDate = '4';

        if(departingonMaxDate){
            departingonMaxDate = "+" + departingonMaxDate  +"D";
        }else{
            departingonMaxDate = "'+1M'";
        }


        $("#searchmenu_departingon").datepicker({
            changeMonth: true,    changeYear: true, yearRange: '1920:2050', dateFormat: 'dd/mm/yy',
            minDate: 0, numberOfMonths: 2, maxDate: departingonMaxDate ,showOn: "button", buttonImage: imageDirectory + "images/calendar.gif", buttonImageOnly: true}).attr('readonly', 'readonly');
        $( "#searchmenu_departingon" ).click(function(){  $( "#searchmenu_departingon" ).datepicker("show"); });
        $('.ui-datepicker-trigger').css({'margin-top': '8px'});
    });
</script>
<div class="widget" id="container_2_1">
    <div id ="cmscontent">
        <div class="msgbox mar10">
            <!--<h1>Hello & Welcome to <span style="color: #B93117;">Sakura Paribahan</span></h1> -->
            <!-- <h4>First Time Online Intercity Bus Ticketing Portal In Bangladesh</h4> -->

                            <div id='news-tricker' class="">
                                        <marquee behaviour="scroll" direction="left" scrollamount="4">
                        <h2 style="color: #008000;">
                            <span style="color: #000000;">Routes : </span>
                            Dhaka->Khepupara<span style="color:black;margin-right:5px;">,</span>Khepupara->Dhaka<span style="color:black;margin-right:5px;">,</span>Vandaria->Dhaka<span style="color:black;margin-right:5px;">,</span>Dhaka->Barishal<span style="color:black;margin-right:5px;">,</span>Barishal->Dhaka<span style="color:black;margin-right:5px;">,</span>Dhaka->Vandaria<span style="color:black;margin-right:5px;">,</span>Dhaka->Kuakata<span style="color:black;margin-right:5px;">,</span>Dhaka->Mathbaria<span style="color:black;margin-right:5px;">,</span>Mathbaria->Dhaka<span style="color:black;margin-right:5px;">,</span>Kuakata->Dhaka<span style="color:black;margin-right:5px;">,</span>Dhaka->Patuakhali<span style="color:black;margin-right:5px;">,</span>Patuakhali->Dhaka<span style="color:black;margin-right:5px;">,</span>Dhaka->Swarupkathi<span style="color:black;margin-right:5px;">,</span>Swarupkathi->Dhaka<span style="color:black;margin-right:5px;">,</span>Dhaka->Pirojpur( Bekutia )<span style="color:black;margin-right:5px;">,</span>Bekutia->Dhaka<span style="color:black;margin-right:5px;">,</span>Dhaka->Jhalokathi<span style="color:black;margin-right:5px;">,</span>Jhalokathi->Dhaka<span style="color:black;margin-right:5px;">,</span>Dhaka->Pathorghata<span style="color:black;margin-right:5px;">,</span>Pathorghata->Dhaka<span style="color:black;margin-right:5px;">,</span>Dhaka->Barguna<span style="color:black;margin-right:5px;">,</span>Barguna->Dhaka<span style="color:black;margin-right:5px;">,</span>Gazipur->Khepupara<span style="color:black;margin-right:5px;">,</span>Khepupara->Gazipur<span style="color:black;margin-right:5px;">,</span>Gazipur->Barishal<span style="color:black;margin-right:5px;">,</span>Barishal->Gazipur<span style="color:black;margin-right:5px;">,</span>Khepupara->Saydabad( PADMA )<span style="color:black;margin-right:5px;">,</span>Saydabad->Khepupara( PADMA )<span style="color:black;margin-right:5px;">,</span>Barguna->Saydabad<span style="color:black;margin-right:5px;">,</span>Saydabad->Barguna<span style="color:black;margin-right:5px;">,</span>Gazipur->Vandaria<span style="color:black;margin-right:5px;">,</span>Vandaria->Gazipur<span style="color:black;margin-right:5px;">,</span>Abdullahpur->Patuakhali<span style="color:black;margin-right:5px;">,</span>Abdullahpur->Barishal<span style="color:black;margin-right:5px;">,</span>Barishal->Abdullahpur<span style="color:black;margin-right:5px;">,</span>Dhaka->Bekutia<span style="color:black;margin-right:5px;">,</span>Abdullahpur->Kuakata<span style="color:black;margin-right:5px;">,</span>Gazipur->Kuakata<span style="color:black;margin-right:5px;">,</span>Kuakata->Gazipur<span style="color:black;margin-right:5px;">,</span>Gazipur->Swarupkathi<span style="color:black;margin-right:5px;">,</span>Gazipur->Barguna<span style="color:black;margin-right:5px;">,</span>Barguna->Gazipur<span style="color:black;margin-right:5px;">,</span>Chandipur->Dhaka<span style="color:black;margin-right:5px;">,</span>Dhaka->Chandipur<span style="color:black;margin-right:5px;">,</span>Rayenda->Gazipur<span style="color:black;margin-right:5px;">,</span>Dhaka->Taltoli<span style="color:black;margin-right:5px;">,</span>Taltoli->Dhaka<span style="color:black;margin-right:5px;">,</span>Sayadabad->Kuakata<span style="color:black;margin-right:5px;">,</span>Kuakata->Sayadabad<span style="color:black;margin-right:5px;">,</span>Gazipur->Pirojpur<span style="color:black;margin-right:5px;">,</span>Pirojpur->Gazipur<span style="color:black;margin-right:5px;">,</span>Dhaka->Amtoli<span style="color:black;margin-right:5px;">,</span>Amtoli->Dhaka<span style="color:black;margin-right:5px;">,</span>Saydabad->Mathbaria( Padma GPLNJ )<span style="color:black;margin-right:5px;">,</span>Mathbaria->Saydabad( (Padma) GPLNJ )<span style="color:black;margin-right:5px;">,</span>Saydabad->Barishal( Padma Bridge )<span style="color:black;margin-right:5px;">,</span>Bowbazar->Poisar Hat<span style="color:black;margin-right:5px;">,</span>Poisar Hat->Bowbazar<span style="color:black;margin-right:5px;">,</span>Saydabad->Barguna( Abdullahpur )<span style="color:black;margin-right:5px;">,</span>Barguna->Saydabad( Abdullahpur )<span style="color:black;margin-right:5px;">,</span>Bowbazar->Barisal(Barishal)<span style="color:black;margin-right:5px;">,</span>Barisal(Barishal)->Bowbazar<span style="color:black;margin-right:5px;">,</span>Barishal->Gazipur( Padma Bridge )<span style="color:black;margin-right:5px;">,</span>Barishal->Saydabad( Padma Bridge )<span style="color:black;margin-right:5px;">,</span>Kuakata->Gazipur( Padma Bridge )<span style="color:black;margin-right:5px;">,</span>Barishal->Dhaka( Padma Bridge )<span style="color:black;margin-right:5px;">,</span>Kuakata->Dhaka( Padma Bridge )<span style="color:black;margin-right:5px;">,</span>Barguna->Saydabad( Padma Bridge )<span style="color:black;margin-right:5px;">,</span>Dhaka->Barishal( Padma Bridge )<span style="color:black;margin-right:5px;">,</span>Dhaka->Kuakata( PADMA BRIDGE )<span style="color:black;margin-right:5px;">,</span>Gazipur->Kuakata( PADMA BRIDGE )<span style="color:black;margin-right:5px;">,</span>Gazipur->Barishal( PADMA BRIDGE )<span style="color:black;margin-right:5px;">,</span>Taltoli->Dhaka( (Padma) )<span style="color:black;margin-right:5px;">,</span>Gazipur->Vandaria( Padma Bridge )<span style="color:black;margin-right:5px;">,</span>Saydabad->Barguna( (Padma) )<span style="color:black;margin-right:5px;">,</span>Dhaka->Pirojpur( (Padma) )<span style="color:black;margin-right:5px;">,</span>Pirojpur->Dhaka( (Padma) )<span style="color:black;margin-right:5px;">,</span>Kuakata->Saydabad( (Padma) )<span style="color:black;margin-right:5px;">,</span>Saydabad->Patuakhali( Padma )<span style="color:black;margin-right:5px;">,</span>Patuakhali->Saydabad( Padma )<span style="color:black;margin-right:5px;">,</span>Saydabad->Swarupkathi( Padma )<span style="color:black;margin-right:5px;">,</span>Swarupkathi->Saydabad( Padma )<span style="color:black;margin-right:5px;">,</span>Saydabad->Kuakata( Padma )<span style="color:black;margin-right:5px;">,</span>Saydabad->Jhalokathi( Padma )<span style="color:black;margin-right:5px;">,</span>Jhalokathi->Saydabad( Padma )<span style="color:black;margin-right:5px;">,</span>Ulania->Saydabad( Padma )<span style="color:black;margin-right:5px;">,</span>Saydabad->Ulania( Padma )<span style="color:black;margin-right:5px;">,</span>Gazipur->Mathbaria( (Padma) )<span style="color:black;margin-right:5px;">,</span>Mathbaria->Gazipur( (Padma) )<span style="color:black;margin-right:5px;">,</span>Swarupkathi->Dhaka( (Padma) )<span style="color:black;margin-right:5px;">,</span>Abdullahpur->Patuakhali( Padma )<span style="color:black;margin-right:5px;">,</span>Patuakhali->Abdullahpur( Padma )<span style="color:black;margin-right:5px;">,</span>Dhaka->Pathorghata( Padma )<span style="color:black;margin-right:5px;">,</span>Pathorghata->Dhaka( Padma )<span style="color:black;margin-right:5px;">,</span>Saydabad->Mathbaria( Padma )<span style="color:black;margin-right:5px;">,</span>Mathbaria->Saydabad( Padma )<span style="color:black;margin-right:5px;">,</span>Gazipur->Vandaria( Padma )<span style="color:black;margin-right:5px;">,</span>Vandaria->Gazipur( Padma )<span style="color:black;margin-right:5px;">,</span>Gazipur->Swarupkathi( Padma )<span style="color:black;margin-right:5px;">,</span>Swarupkathi->Gazipur( Padma )<span style="color:black;margin-right:5px;">,</span>Gazipur->Barguna( Padma )<span style="color:black;margin-right:5px;">,</span>Barguna->Gazipur( Padma )<span style="color:black;margin-right:5px;">,</span>Dhaka->Pathorghata( Badda/Padma )<span style="color:black;margin-right:5px;">,</span>Pathorghata->Dhaka( Badda/Padma )<span style="color:black;margin-right:5px;">,</span>Dhaka->Barguna( Badda/Padma )<span style="color:black;margin-right:5px;">,</span>Barguna->Dhaka( Badda/Padma )<span style="color:black;margin-right:5px;">,</span>Dhaka->Patuakhali( Badda/Padma )<span style="color:black;margin-right:5px;">,</span>Patuakhali->Dhaka( Badda/Padma )<span style="color:black;margin-right:5px;">,</span>Dhaka->Amtoli( Padma )<span style="color:black;margin-right:5px;">,</span>Dhaka->Swarupkathi( Padma )<span style="color:black;margin-right:5px;">,</span>Amtoli->Dhaka( PADMA )<span style="color:black;margin-right:5px;">,</span>Gulistan->Barishal( Padma )<span style="color:black;margin-right:5px;">,</span>Barishal->Gulistan( Padma )<span style="color:black;margin-right:5px;">,</span>Saydabad->Ulania( Padma Betagi )<span style="color:black;margin-right:5px;">,</span>Ulania->Saydabad( Padma Betagi )<span style="color:black;margin-right:5px;">,</span>Gazipur->Patuakhali( Padma )<span style="color:black;margin-right:5px;">,</span>Patuakhali->Gazipur( Padma )<span style="color:black;margin-right:5px;">,</span>Gazipur->Taltoli( Padma )<span style="color:black;margin-right:5px;">,</span>Taltoli->Gazipur( Padma )<span style="color:black;margin-right:5px;">,</span>Gazipur->Jhalokathi( Padma )<span style="color:black;margin-right:5px;">,</span>Jhalokathi->Gazipur( Padma )<span style="color:black;margin-right:5px;">,</span>Dhaka->Barishal( Padma-Nabinagar )<span style="color:black;margin-right:5px;">,</span>Dhaka->Kuakata( Padma-Nabinagar )                        </h2>
                    </marquee>
                                    </div>
                <div class="clear"></div>
                    </div>

        <div>
            <div class="black borderradious3 txtbrown left shadow3" id="searchform">
                <div class="searchTitle">Buy Ticket</div>
                <div class="onlinesearch_header">
                                        <form id="coachsearchForm" method="post" action="/en_US/seatsearch">
                                                
<input type="hidden" name="searchOption" value="oneway" id="searchOption" /> 
<input type="hidden" name="onlineseatbooking_token" value="46bb39373c29b1d04ae7df591b3bc7e1" id="onlineseatbooking_token" />                        <ul>
                            <li class="left">
                                <div class='block_div leaving_from'>
                                    <div class="">
                                        <span class='saerchradio_spantest'>
                                            <dt id="searchmenu_leavingform-label">
                                            <label for="searchmenu_leavingform">Leaving From:<span class="required">*</span></label>
                                            </dt>
                                        </span>
                                    </div>
                                    <div class="">
                                        
<select name="searchmenu_leavingform" id="searchmenu_leavingform" class="select">
    <option value="" label="---" selected="selected">---</option>
    <option value="262" label="ABDULLAHPUR">ABDULLAHPUR</option>
    <option value="129" label="AMTOLI">AMTOLI</option>
    <option value="282" label="BADDA">BADDA</option>
    <option value="1" label="BAGERHAT">BAGERHAT</option>
    <option value="126" label="BAKERGANJ">BAKERGANJ</option>
    <option value="3" label="BARGUNA">BARGUNA</option>
    <option value="4" label="BARISHAL">BARISHAL</option>
    <option value="261" label="BEKUTIA">BEKUTIA</option>
    <option value="435" label="BOWBAZAR">BOWBAZAR</option>
    <option value="324" label="CHANDIPUR">CHANDIPUR</option>
    <option value="290" label="CHANDKHALI">CHANDKHALI</option>
    <option value="383" label="DASHMINA">DASHMINA</option>
    <option value="444" label="DAULATDIA">DAULATDIA</option>
    <option value="292" label="DEWATOLA">DEWATOLA</option>
    <option value="14" label="DHAKA">DHAKA</option>
    <option value="140" label="FAKIRHAT">FAKIRHAT</option>
    <option value="19" label="GAZIPUR">GAZIPUR</option>
    <option value="501" label="GOLACHIPA">GOLACHIPA</option>
    <option value="20" label="GOPALGANJ">GOPALGANJ</option>
    <option value="603" label="GULISTAN">GULISTAN</option>
    <option value="145" label="JHALOKATHI">JHALOKATHI</option>
    <option value="128" label="KAKCHIRA">KAKCHIRA</option>
    <option value="268" label="KATHALIA">KATHALIA</option>
    <option value="134" label="KHEPUPARA">KHEPUPARA</option>
    <option value="139" label="KUAKATA">KUAKATA</option>
    <option value="127" label="LEBUKHALI">LEBUKHALI</option>
    <option value="273" label="MALIBAG">MALIBAG</option>
    <option value="187" label="MATHBARIA">MATHBARIA</option>
    <option value="434" label="MOSTAFAPUR">MOSTAFAPUR</option>
    <option value="138" label="PATHORGHATA">PATHORGHATA</option>
    <option value="52" label="PATUAKHALI">PATUAKHALI</option>
    <option value="53" label="PIROJPUR">PIROJPUR</option>
    <option value="363" label="POISAR HAT">POISAR HAT</option>
    <option value="266" label="RAJAPUR">RAJAPUR</option>
    <option value="327" label="RAYENDA">RAYENDA</option>
    <option value="257" label="SAYDABAD">SAYDABAD</option>
    <option value="256" label="SHAKARIA">SHAKARIA</option>
    <option value="137" label="SUBIDKHALI">SUBIDKHALI</option>
    <option value="188" label="SWARUPKATHI">SWARUPKATHI</option>
    <option value="270" label="TALTOLI">TALTOLI</option>
    <option value="331" label="TUNGIPARA">TUNGIPARA</option>
    <option value="675" label="ULANIA">ULANIA</option>
    <option value="149" label="VANDARIA">VANDARIA</option>
    <option value="141" label="VATIAPARA">VATIAPARA</option>
</select>                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class='block_div'>
                                    <div class="search_radio_span">
                                        <span class='saerchradio_spantest'>
                                            <label for="searchmenu_goingto" >Going To:<span class="required">*</span></label>
                                        </span>
                                    </div>
                                    <div class="search_radio_span small_search">
                                        
<select name="searchmenu_goingto" id="searchmenu_goingto" class="select">
    <option value="" label="---" selected="selected">---</option>
    <option value="262" label="ABDULLAHPUR">ABDULLAHPUR</option>
    <option value="129" label="AMTOLI">AMTOLI</option>
    <option value="282" label="BADDA">BADDA</option>
    <option value="1" label="BAGERHAT">BAGERHAT</option>
    <option value="126" label="BAKERGANJ">BAKERGANJ</option>
    <option value="3" label="BARGUNA">BARGUNA</option>
    <option value="4" label="BARISHAL">BARISHAL</option>
    <option value="261" label="BEKUTIA">BEKUTIA</option>
    <option value="435" label="BOWBAZAR">BOWBAZAR</option>
    <option value="324" label="CHANDIPUR">CHANDIPUR</option>
    <option value="290" label="CHANDKHALI">CHANDKHALI</option>
    <option value="383" label="DASHMINA">DASHMINA</option>
    <option value="292" label="DEWATOLA">DEWATOLA</option>
    <option value="14" label="DHAKA">DHAKA</option>
    <option value="140" label="FAKIRHAT">FAKIRHAT</option>
    <option value="16" label="FARIDPUR">FARIDPUR</option>
    <option value="19" label="GAZIPUR">GAZIPUR</option>
    <option value="501" label="GOLACHIPA">GOLACHIPA</option>
    <option value="20" label="GOPALGANJ">GOPALGANJ</option>
    <option value="603" label="GULISTAN">GULISTAN</option>
    <option value="145" label="JHALOKATHI">JHALOKATHI</option>
    <option value="128" label="KAKCHIRA">KAKCHIRA</option>
    <option value="268" label="KATHALIA">KATHALIA</option>
    <option value="134" label="KHEPUPARA">KHEPUPARA</option>
    <option value="139" label="KUAKATA">KUAKATA</option>
    <option value="127" label="LEBUKHALI">LEBUKHALI</option>
    <option value="273" label="MALIBAG">MALIBAG</option>
    <option value="187" label="MATHBARIA">MATHBARIA</option>
    <option value="434" label="MOSTAFAPUR">MOSTAFAPUR</option>
    <option value="138" label="PATHORGHATA">PATHORGHATA</option>
    <option value="52" label="PATUAKHALI">PATUAKHALI</option>
    <option value="53" label="PIROJPUR">PIROJPUR</option>
    <option value="363" label="POISAR HAT">POISAR HAT</option>
    <option value="266" label="RAJAPUR">RAJAPUR</option>
    <option value="327" label="RAYENDA">RAYENDA</option>
    <option value="257" label="SAYDABAD">SAYDABAD</option>
    <option value="256" label="SHAKARIA">SHAKARIA</option>
    <option value="137" label="SUBIDKHALI">SUBIDKHALI</option>
    <option value="188" label="SWARUPKATHI">SWARUPKATHI</option>
    <option value="270" label="TALTOLI">TALTOLI</option>
    <option value="331" label="TUNGIPARA">TUNGIPARA</option>
    <option value="675" label="ULANIA">ULANIA</option>
    <option value="149" label="VANDARIA">VANDARIA</option>
    <option value="141" label="VATIAPARA">VATIAPARA</option>
</select>                                    </div>
                                    <input value="{&quot;262&quot;:{&quot;52&quot;:{&quot;district_id&quot;:&quot;PATUAKHALI&quot;,&quot;district_title&quot;:&quot;PATUAKHALI&quot;},&quot;4&quot;:{&quot;district_id&quot;:&quot;BARISHAL&quot;,&quot;district_title&quot;:&quot;BARISHAL&quot;},&quot;134&quot;:{&quot;district_id&quot;:&quot;KHEPUPARA&quot;,&quot;district_title&quot;:&quot;KHEPUPARA&quot;},&quot;139&quot;:{&quot;district_id&quot;:&quot;KUAKATA&quot;,&quot;district_title&quot;:&quot;KUAKATA&quot;},&quot;129&quot;:{&quot;district_id&quot;:&quot;AMTOLI&quot;,&quot;district_title&quot;:&quot;AMTOLI&quot;},&quot;3&quot;:{&quot;district_id&quot;:&quot;BARGUNA&quot;,&quot;district_title&quot;:&quot;BARGUNA&quot;},&quot;126&quot;:{&quot;district_id&quot;:&quot;BAKERGANJ&quot;,&quot;district_title&quot;:&quot;BAKERGANJ&quot;},&quot;127&quot;:{&quot;district_id&quot;:&quot;LEBUKHALI&quot;,&quot;district_title&quot;:&quot;LEBUKHALI&quot;},&quot;256&quot;:{&quot;district_id&quot;:&quot;SHAKARIA&quot;,&quot;district_title&quot;:&quot;SHAKARIA&quot;},&quot;1&quot;:{&quot;district_id&quot;:&quot;BAGERHAT&quot;,&quot;district_title&quot;:&quot;BAGERHAT&quot;},&quot;53&quot;:{&quot;district_id&quot;:&quot;PIROJPUR&quot;,&quot;district_title&quot;:&quot;PIROJPUR&quot;},&quot;140&quot;:{&quot;district_id&quot;:&quot;FAKIRHAT&quot;,&quot;district_title&quot;:&quot;FAKIRHAT&quot;},&quot;20&quot;:{&quot;district_id&quot;:&quot;GOPALGANJ&quot;,&quot;district_title&quot;:&quot;GOPALGANJ&quot;},&quot;145&quot;:{&quot;district_id&quot;:&quot;JHALOKATHI&quot;,&quot;district_title&quot;:&quot;JHALOKATHI&quot;},&quot;149&quot;:{&quot;district_id&quot;:&quot;VANDARIA&quot;,&quot;district_title&quot;:&quot;VANDARIA&quot;},&quot;187&quot;:{&quot;district_id&quot;:&quot;MATHBARIA&quot;,&quot;district_title&quot;:&quot;MATHBARIA&quot;},&quot;188&quot;:{&quot;district_id&quot;:&quot;SWARUPKATHI&quot;,&quot;district_title&quot;:&quot;SWARUPKATHI&quot;},&quot;290&quot;:{&quot;district_id&quot;:&quot;CHANDKHALI&quot;,&quot;district_title&quot;:&quot;CHANDKHALI&quot;},&quot;137&quot;:{&quot;district_id&quot;:&quot;SUBIDKHALI&quot;,&quot;district_title&quot;:&quot;SUBIDKHALI&quot;},&quot;266&quot;:{&quot;district_id&quot;:&quot;RAJAPUR&quot;,&quot;district_title&quot;:&quot;RAJAPUR&quot;},&quot;270&quot;:{&quot;district_id&quot;:&quot;TALTOLI&quot;,&quot;district_title&quot;:&quot;TALTOLI&quot;},&quot;327&quot;:{&quot;district_id&quot;:&quot;RAYENDA&quot;,&quot;district_title&quot;:&quot;RAYENDA&quot;},&quot;261&quot;:{&quot;district_id&quot;:&quot;BEKUTIA&quot;,&quot;district_title&quot;:&quot;BEKUTIA&quot;}},&quot;282&quot;:{&quot;52&quot;:{&quot;district_id&quot;:&quot;PATUAKHALI&quot;,&quot;district_title&quot;:&quot;PATUAKHALI&quot;},&quot;4&quot;:{&quot;district_id&quot;:&quot;BARISHAL&quot;,&quot;district_title&quot;:&quot;BARISHAL&quot;},&quot;126&quot;:{&quot;district_id&quot;:&quot;BAKERGANJ&quot;,&quot;district_title&quot;:&quot;BAKERGANJ&quot;},&quot;127&quot;:{&quot;district_id&quot;:&quot;LEBUKHALI&quot;,&quot;district_title&quot;:&quot;LEBUKHALI&quot;},&quot;129&quot;:{&quot;district_id&quot;:&quot;AMTOLI&quot;,&quot;district_title&quot;:&quot;AMTOLI&quot;},&quot;256&quot;:{&quot;district_id&quot;:&quot;SHAKARIA&quot;,&quot;district_title&quot;:&quot;SHAKARIA&quot;},&quot;134&quot;:{&quot;district_id&quot;:&quot;KHEPUPARA&quot;,&quot;district_title&quot;:&quot;KHEPUPARA&quot;},&quot;139&quot;:{&quot;district_id&quot;:&quot;KUAKATA&quot;,&quot;district_title&quot;:&quot;KUAKATA&quot;},&quot;145&quot;:{&quot;district_id&quot;:&quot;JHALOKATHI&quot;,&quot;district_title&quot;:&quot;JHALOKATHI&quot;},&quot;149&quot;:{&quot;district_id&quot;:&quot;VANDARIA&quot;,&quot;district_title&quot;:&quot;VANDARIA&quot;},&quot;187&quot;:{&quot;district_id&quot;:&quot;MATHBARIA&quot;,&quot;district_title&quot;:&quot;MATHBARIA&quot;},&quot;188&quot;:{&quot;district_id&quot;:&quot;SWARUPKATHI&quot;,&quot;district_title&quot;:&quot;SWARUPKATHI&quot;},&quot;290&quot;:{&quot;district_id&quot;:&quot;CHANDKHALI&quot;,&quot;district_title&quot;:&quot;CHANDKHALI&quot;},&quot;137&quot;:{&quot;district_id&quot;:&quot;SUBIDKHALI&quot;,&quot;district_title&quot;:&quot;SUBIDKHALI&quot;},&quot;3&quot;:{&quot;district_id&quot;:&quot;BARGUNA&quot;,&quot;district_title&quot;:&quot;BARGUNA&quot;},&quot;268&quot;:{&quot;district_id&quot;:&quot;KATHALIA&quot;,&quot;district_title&quot;:&quot;KATHALIA&quot;},&quot;128&quot;:{&quot;district_id&quot;:&quot;KAKCHIRA&quot;,&quot;district_title&quot;:&quot;KAKCHIRA&quot;},&quot;292&quot;:{&quot;district_id&quot;:&quot;DEWATOLA&quot;,&quot;district_title&quot;:&quot;DEWATOLA&quot;},&quot;138&quot;:{&quot;district_id&quot;:&quot;PATHORGHATA&quot;,&quot;district_title&quot;:&quot;PATHORGHATA&quot;},&quot;266&quot;:{&quot;district_id&quot;:&quot;RAJAPUR&quot;,&quot;district_title&quot;:&quot;RAJAPUR&quot;},&quot;261&quot;:{&quot;district_id&quot;:&quot;BEKUTIA&quot;,&quot;district_title&quot;:&quot;BEKUTIA&quot;},&quot;53&quot;:{&quot;district_id&quot;:&quot;PIROJPUR&quot;,&quot;district_title&quot;:&quot;PIROJPUR&quot;},&quot;270&quot;:{&quot;district_id&quot;:&quot;TALTOLI&quot;,&quot;district_title&quot;:&quot;TALTOLI&quot;},&quot;20&quot;:{&quot;district_id&quot;:&quot;GOPALGANJ&quot;,&quot;district_title&quot;:&quot;GOPALGANJ&quot;}},&quot;257&quot;:{&quot;4&quot;:{&quot;district_id&quot;:&quot;BARISHAL&quot;,&quot;district_title&quot;:&quot;BARISHAL&quot;},&quot;52&quot;:{&quot;district_id&quot;:&quot;PATUAKHALI&quot;,&quot;district_title&quot;:&quot;PATUAKHALI&quot;},&quot;126&quot;:{&quot;district_id&quot;:&quot;BAKERGANJ&quot;,&quot;district_title&quot;:&quot;BAKERGANJ&quot;},&quot;127&quot;:{&quot;district_id&quot;:&quot;LEBUKHALI&quot;,&quot;district_title&quot;:&quot;LEBUKHALI&quot;},&quot;129&quot;:{&quot;district_id&quot;:&quot;AMTOLI&quot;,&quot;district_title&quot;:&quot;AMTOLI&quot;},&quot;256&quot;:{&quot;district_id&quot;:&quot;SHAKARIA&quot;,&quot;district_title&quot;:&quot;SHAKARIA&quot;},&quot;134&quot;:{&quot;district_id&quot;:&quot;KHEPUPARA&quot;,&quot;district_title&quot;:&quot;KHEPUPARA&quot;},&quot;139&quot;:{&quot;district_id&quot;:&quot;KUAKATA&quot;,&quot;district_title&quot;:&quot;KUAKATA&quot;},&quot;1&quot;:{&quot;district_id&quot;:&quot;BAGERHAT&quot;,&quot;district_title&quot;:&quot;BAGERHAT&quot;},&quot;53&quot;:{&quot;district_id&quot;:&quot;PIROJPUR&quot;,&quot;district_title&quot;:&quot;PIROJPUR&quot;},&quot;140&quot;:{&quot;district_id&quot;:&quot;FAKIRHAT&quot;,&quot;district_title&quot;:&quot;FAKIRHAT&quot;},&quot;20&quot;:{&quot;district_id&quot;:&quot;GOPALGANJ&quot;,&quot;district_title&quot;:&quot;GOPALGANJ&quot;},&quot;3&quot;:{&quot;district_id&quot;:&quot;BARGUNA&quot;,&quot;district_title&quot;:&quot;BARGUNA&quot;},&quot;137&quot;:{&quot;district_id&quot;:&quot;SUBIDKHALI&quot;,&quot;district_title&quot;:&quot;SUBIDKHALI&quot;},&quot;145&quot;:{&quot;district_id&quot;:&quot;JHALOKATHI&quot;,&quot;district_title&quot;:&quot;JHALOKATHI&quot;},&quot;149&quot;:{&quot;district_id&quot;:&quot;VANDARIA&quot;,&quot;district_title&quot;:&quot;VANDARIA&quot;},&quot;268&quot;:{&quot;district_id&quot;:&quot;KATHALIA&quot;,&quot;district_title&quot;:&quot;KATHALIA&quot;},&quot;292&quot;:{&quot;district_id&quot;:&quot;DEWATOLA&quot;,&quot;district_title&quot;:&quot;DEWATOLA&quot;},&quot;128&quot;:{&quot;district_id&quot;:&quot;KAKCHIRA&quot;,&quot;district_title&quot;:&quot;KAKCHIRA&quot;},&quot;138&quot;:{&quot;district_id&quot;:&quot;PATHORGHATA&quot;,&quot;district_title&quot;:&quot;PATHORGHATA&quot;},&quot;187&quot;:{&quot;district_id&quot;:&quot;MATHBARIA&quot;,&quot;district_title&quot;:&quot;MATHBARIA&quot;},&quot;188&quot;:{&quot;district_id&quot;:&quot;SWARUPKATHI&quot;,&quot;district_title&quot;:&quot;SWARUPKATHI&quot;},&quot;290&quot;:{&quot;district_id&quot;:&quot;CHANDKHALI&quot;,&quot;district_title&quot;:&quot;CHANDKHALI&quot;},&quot;266&quot;:{&quot;district_id&quot;:&quot;RAJAPUR&quot;,&quot;district_title&quot;:&quot;RAJAPUR&quot;},&quot;383&quot;:{&quot;district_id&quot;:&quot;DASHMINA&quot;,&quot;district_title&quot;:&quot;DASHMINA&quot;},&quot;501&quot;:{&quot;district_id&quot;:&quot;GOLACHIPA&quot;,&quot;district_title&quot;:&quot;GOLACHIPA&quot;},&quot;261&quot;:{&quot;district_id&quot;:&quot;BEKUTIA&quot;,&quot;district_title&quot;:&quot;BEKUTIA&quot;},&quot;270&quot;:{&quot;district_id&quot;:&quot;TALTOLI&quot;,&quot;district_title&quot;:&quot;TALTOLI&quot;},&quot;675&quot;:{&quot;district_id&quot;:&quot;ULANIA&quot;,&quot;district_title&quot;:&quot;ULANIA&quot;},&quot;141&quot;:{&quot;district_id&quot;:&quot;VATIAPARA&quot;,&quot;district_title&quot;:&quot;VATIAPARA&quot;},&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;434&quot;:{&quot;district_id&quot;:&quot;MOSTAFAPUR&quot;,&quot;district_title&quot;:&quot;MOSTAFAPUR&quot;},&quot;327&quot;:{&quot;district_id&quot;:&quot;RAYENDA&quot;,&quot;district_title&quot;:&quot;RAYENDA&quot;}},&quot;187&quot;:{&quot;262&quot;:{&quot;district_id&quot;:&quot;ABDULLAHPUR&quot;,&quot;district_title&quot;:&quot;ABDULLAHPUR&quot;},&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;},&quot;19&quot;:{&quot;district_id&quot;:&quot;GAZIPUR&quot;,&quot;district_title&quot;:&quot;GAZIPUR&quot;},&quot;282&quot;:{&quot;district_id&quot;:&quot;BADDA&quot;,&quot;district_title&quot;:&quot;BADDA&quot;}},&quot;149&quot;:{&quot;262&quot;:{&quot;district_id&quot;:&quot;ABDULLAHPUR&quot;,&quot;district_title&quot;:&quot;ABDULLAHPUR&quot;},&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;},&quot;19&quot;:{&quot;district_id&quot;:&quot;GAZIPUR&quot;,&quot;district_title&quot;:&quot;GAZIPUR&quot;},&quot;273&quot;:{&quot;district_id&quot;:&quot;MALIBAG&quot;,&quot;district_title&quot;:&quot;MALIBAG&quot;},&quot;282&quot;:{&quot;district_id&quot;:&quot;BADDA&quot;,&quot;district_title&quot;:&quot;BADDA&quot;}},&quot;266&quot;:{&quot;262&quot;:{&quot;district_id&quot;:&quot;ABDULLAHPUR&quot;,&quot;district_title&quot;:&quot;ABDULLAHPUR&quot;},&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;},&quot;19&quot;:{&quot;district_id&quot;:&quot;GAZIPUR&quot;,&quot;district_title&quot;:&quot;GAZIPUR&quot;},&quot;273&quot;:{&quot;district_id&quot;:&quot;MALIBAG&quot;,&quot;district_title&quot;:&quot;MALIBAG&quot;},&quot;282&quot;:{&quot;district_id&quot;:&quot;BADDA&quot;,&quot;district_title&quot;:&quot;BADDA&quot;}},&quot;145&quot;:{&quot;262&quot;:{&quot;district_id&quot;:&quot;ABDULLAHPUR&quot;,&quot;district_title&quot;:&quot;ABDULLAHPUR&quot;},&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;},&quot;19&quot;:{&quot;district_id&quot;:&quot;GAZIPUR&quot;,&quot;district_title&quot;:&quot;GAZIPUR&quot;},&quot;282&quot;:{&quot;district_id&quot;:&quot;BADDA&quot;,&quot;district_title&quot;:&quot;BADDA&quot;}},&quot;4&quot;:{&quot;262&quot;:{&quot;district_id&quot;:&quot;ABDULLAHPUR&quot;,&quot;district_title&quot;:&quot;ABDULLAHPUR&quot;},&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;},&quot;19&quot;:{&quot;district_id&quot;:&quot;GAZIPUR&quot;,&quot;district_title&quot;:&quot;GAZIPUR&quot;},&quot;282&quot;:{&quot;district_id&quot;:&quot;BADDA&quot;,&quot;district_title&quot;:&quot;BADDA&quot;},&quot;273&quot;:{&quot;district_id&quot;:&quot;MALIBAG&quot;,&quot;district_title&quot;:&quot;MALIBAG&quot;},&quot;16&quot;:{&quot;district_id&quot;:&quot;FARIDPUR&quot;,&quot;district_title&quot;:&quot;FARIDPUR&quot;},&quot;435&quot;:{&quot;district_id&quot;:&quot;BOWBAZAR&quot;,&quot;district_title&quot;:&quot;BOWBAZAR&quot;},&quot;603&quot;:{&quot;district_id&quot;:&quot;GULISTAN&quot;,&quot;district_title&quot;:&quot;GULISTAN&quot;}},&quot;14&quot;:{&quot;4&quot;:{&quot;district_id&quot;:&quot;BARISHAL&quot;,&quot;district_title&quot;:&quot;BARISHAL&quot;},&quot;52&quot;:{&quot;district_id&quot;:&quot;PATUAKHALI&quot;,&quot;district_title&quot;:&quot;PATUAKHALI&quot;},&quot;134&quot;:{&quot;district_id&quot;:&quot;KHEPUPARA&quot;,&quot;district_title&quot;:&quot;KHEPUPARA&quot;},&quot;139&quot;:{&quot;district_id&quot;:&quot;KUAKATA&quot;,&quot;district_title&quot;:&quot;KUAKATA&quot;},&quot;129&quot;:{&quot;district_id&quot;:&quot;AMTOLI&quot;,&quot;district_title&quot;:&quot;AMTOLI&quot;},&quot;3&quot;:{&quot;district_id&quot;:&quot;BARGUNA&quot;,&quot;district_title&quot;:&quot;BARGUNA&quot;},&quot;126&quot;:{&quot;district_id&quot;:&quot;BAKERGANJ&quot;,&quot;district_title&quot;:&quot;BAKERGANJ&quot;},&quot;127&quot;:{&quot;district_id&quot;:&quot;LEBUKHALI&quot;,&quot;district_title&quot;:&quot;LEBUKHALI&quot;},&quot;256&quot;:{&quot;district_id&quot;:&quot;SHAKARIA&quot;,&quot;district_title&quot;:&quot;SHAKARIA&quot;},&quot;1&quot;:{&quot;district_id&quot;:&quot;BAGERHAT&quot;,&quot;district_title&quot;:&quot;BAGERHAT&quot;},&quot;53&quot;:{&quot;district_id&quot;:&quot;PIROJPUR&quot;,&quot;district_title&quot;:&quot;PIROJPUR&quot;},&quot;16&quot;:{&quot;district_id&quot;:&quot;FARIDPUR&quot;,&quot;district_title&quot;:&quot;FARIDPUR&quot;},&quot;20&quot;:{&quot;district_id&quot;:&quot;GOPALGANJ&quot;,&quot;district_title&quot;:&quot;GOPALGANJ&quot;},&quot;140&quot;:{&quot;district_id&quot;:&quot;FAKIRHAT&quot;,&quot;district_title&quot;:&quot;FAKIRHAT&quot;},&quot;137&quot;:{&quot;district_id&quot;:&quot;SUBIDKHALI&quot;,&quot;district_title&quot;:&quot;SUBIDKHALI&quot;},&quot;145&quot;:{&quot;district_id&quot;:&quot;JHALOKATHI&quot;,&quot;district_title&quot;:&quot;JHALOKATHI&quot;},&quot;149&quot;:{&quot;district_id&quot;:&quot;VANDARIA&quot;,&quot;district_title&quot;:&quot;VANDARIA&quot;},&quot;268&quot;:{&quot;district_id&quot;:&quot;KATHALIA&quot;,&quot;district_title&quot;:&quot;KATHALIA&quot;},&quot;292&quot;:{&quot;district_id&quot;:&quot;DEWATOLA&quot;,&quot;district_title&quot;:&quot;DEWATOLA&quot;},&quot;128&quot;:{&quot;district_id&quot;:&quot;KAKCHIRA&quot;,&quot;district_title&quot;:&quot;KAKCHIRA&quot;},&quot;138&quot;:{&quot;district_id&quot;:&quot;PATHORGHATA&quot;,&quot;district_title&quot;:&quot;PATHORGHATA&quot;},&quot;266&quot;:{&quot;district_id&quot;:&quot;RAJAPUR&quot;,&quot;district_title&quot;:&quot;RAJAPUR&quot;},&quot;188&quot;:{&quot;district_id&quot;:&quot;SWARUPKATHI&quot;,&quot;district_title&quot;:&quot;SWARUPKATHI&quot;},&quot;270&quot;:{&quot;district_id&quot;:&quot;TALTOLI&quot;,&quot;district_title&quot;:&quot;TALTOLI&quot;},&quot;261&quot;:{&quot;district_id&quot;:&quot;BEKUTIA&quot;,&quot;district_title&quot;:&quot;BEKUTIA&quot;},&quot;187&quot;:{&quot;district_id&quot;:&quot;MATHBARIA&quot;,&quot;district_title&quot;:&quot;MATHBARIA&quot;},&quot;290&quot;:{&quot;district_id&quot;:&quot;CHANDKHALI&quot;,&quot;district_title&quot;:&quot;CHANDKHALI&quot;},&quot;363&quot;:{&quot;district_id&quot;:&quot;POISAR HAT&quot;,&quot;district_title&quot;:&quot;POISAR HAT&quot;},&quot;383&quot;:{&quot;district_id&quot;:&quot;DASHMINA&quot;,&quot;district_title&quot;:&quot;DASHMINA&quot;},&quot;141&quot;:{&quot;district_id&quot;:&quot;VATIAPARA&quot;,&quot;district_title&quot;:&quot;VATIAPARA&quot;},&quot;331&quot;:{&quot;district_id&quot;:&quot;TUNGIPARA&quot;,&quot;district_title&quot;:&quot;TUNGIPARA&quot;},&quot;324&quot;:{&quot;district_id&quot;:&quot;CHANDIPUR&quot;,&quot;district_title&quot;:&quot;CHANDIPUR&quot;},&quot;434&quot;:{&quot;district_id&quot;:&quot;MOSTAFAPUR&quot;,&quot;district_title&quot;:&quot;MOSTAFAPUR&quot;},&quot;327&quot;:{&quot;district_id&quot;:&quot;RAYENDA&quot;,&quot;district_title&quot;:&quot;RAYENDA&quot;}},&quot;3&quot;:{&quot;262&quot;:{&quot;district_id&quot;:&quot;ABDULLAHPUR&quot;,&quot;district_title&quot;:&quot;ABDULLAHPUR&quot;},&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;19&quot;:{&quot;district_id&quot;:&quot;GAZIPUR&quot;,&quot;district_title&quot;:&quot;GAZIPUR&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;},&quot;273&quot;:{&quot;district_id&quot;:&quot;MALIBAG&quot;,&quot;district_title&quot;:&quot;MALIBAG&quot;},&quot;282&quot;:{&quot;district_id&quot;:&quot;BADDA&quot;,&quot;district_title&quot;:&quot;BADDA&quot;}},&quot;139&quot;:{&quot;262&quot;:{&quot;district_id&quot;:&quot;ABDULLAHPUR&quot;,&quot;district_title&quot;:&quot;ABDULLAHPUR&quot;},&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;19&quot;:{&quot;district_id&quot;:&quot;GAZIPUR&quot;,&quot;district_title&quot;:&quot;GAZIPUR&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;},&quot;282&quot;:{&quot;district_id&quot;:&quot;BADDA&quot;,&quot;district_title&quot;:&quot;BADDA&quot;}},&quot;134&quot;:{&quot;262&quot;:{&quot;district_id&quot;:&quot;ABDULLAHPUR&quot;,&quot;district_title&quot;:&quot;ABDULLAHPUR&quot;},&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;},&quot;19&quot;:{&quot;district_id&quot;:&quot;GAZIPUR&quot;,&quot;district_title&quot;:&quot;GAZIPUR&quot;},&quot;282&quot;:{&quot;district_id&quot;:&quot;BADDA&quot;,&quot;district_title&quot;:&quot;BADDA&quot;}},&quot;129&quot;:{&quot;262&quot;:{&quot;district_id&quot;:&quot;ABDULLAHPUR&quot;,&quot;district_title&quot;:&quot;ABDULLAHPUR&quot;},&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;},&quot;19&quot;:{&quot;district_id&quot;:&quot;GAZIPUR&quot;,&quot;district_title&quot;:&quot;GAZIPUR&quot;},&quot;282&quot;:{&quot;district_id&quot;:&quot;BADDA&quot;,&quot;district_title&quot;:&quot;BADDA&quot;}},&quot;52&quot;:{&quot;262&quot;:{&quot;district_id&quot;:&quot;ABDULLAHPUR&quot;,&quot;district_title&quot;:&quot;ABDULLAHPUR&quot;},&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;},&quot;282&quot;:{&quot;district_id&quot;:&quot;BADDA&quot;,&quot;district_title&quot;:&quot;BADDA&quot;},&quot;19&quot;:{&quot;district_id&quot;:&quot;GAZIPUR&quot;,&quot;district_title&quot;:&quot;GAZIPUR&quot;},&quot;273&quot;:{&quot;district_id&quot;:&quot;MALIBAG&quot;,&quot;district_title&quot;:&quot;MALIBAG&quot;}},&quot;127&quot;:{&quot;262&quot;:{&quot;district_id&quot;:&quot;ABDULLAHPUR&quot;,&quot;district_title&quot;:&quot;ABDULLAHPUR&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;},&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;282&quot;:{&quot;district_id&quot;:&quot;BADDA&quot;,&quot;district_title&quot;:&quot;BADDA&quot;},&quot;19&quot;:{&quot;district_id&quot;:&quot;GAZIPUR&quot;,&quot;district_title&quot;:&quot;GAZIPUR&quot;},&quot;273&quot;:{&quot;district_id&quot;:&quot;MALIBAG&quot;,&quot;district_title&quot;:&quot;MALIBAG&quot;}},&quot;126&quot;:{&quot;262&quot;:{&quot;district_id&quot;:&quot;ABDULLAHPUR&quot;,&quot;district_title&quot;:&quot;ABDULLAHPUR&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;},&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;282&quot;:{&quot;district_id&quot;:&quot;BADDA&quot;,&quot;district_title&quot;:&quot;BADDA&quot;},&quot;19&quot;:{&quot;district_id&quot;:&quot;GAZIPUR&quot;,&quot;district_title&quot;:&quot;GAZIPUR&quot;},&quot;273&quot;:{&quot;district_id&quot;:&quot;MALIBAG&quot;,&quot;district_title&quot;:&quot;MALIBAG&quot;}},&quot;188&quot;:{&quot;262&quot;:{&quot;district_id&quot;:&quot;ABDULLAHPUR&quot;,&quot;district_title&quot;:&quot;ABDULLAHPUR&quot;},&quot;19&quot;:{&quot;district_id&quot;:&quot;GAZIPUR&quot;,&quot;district_title&quot;:&quot;GAZIPUR&quot;},&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;}},&quot;256&quot;:{&quot;262&quot;:{&quot;district_id&quot;:&quot;ABDULLAHPUR&quot;,&quot;district_title&quot;:&quot;ABDULLAHPUR&quot;},&quot;19&quot;:{&quot;district_id&quot;:&quot;GAZIPUR&quot;,&quot;district_title&quot;:&quot;GAZIPUR&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;},&quot;273&quot;:{&quot;district_id&quot;:&quot;MALIBAG&quot;,&quot;district_title&quot;:&quot;MALIBAG&quot;},&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;282&quot;:{&quot;district_id&quot;:&quot;BADDA&quot;,&quot;district_title&quot;:&quot;BADDA&quot;}},&quot;53&quot;:{&quot;262&quot;:{&quot;district_id&quot;:&quot;ABDULLAHPUR&quot;,&quot;district_title&quot;:&quot;ABDULLAHPUR&quot;},&quot;19&quot;:{&quot;district_id&quot;:&quot;GAZIPUR&quot;,&quot;district_title&quot;:&quot;GAZIPUR&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;},&quot;273&quot;:{&quot;district_id&quot;:&quot;MALIBAG&quot;,&quot;district_title&quot;:&quot;MALIBAG&quot;},&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;282&quot;:{&quot;district_id&quot;:&quot;BADDA&quot;,&quot;district_title&quot;:&quot;BADDA&quot;}},&quot;1&quot;:{&quot;262&quot;:{&quot;district_id&quot;:&quot;ABDULLAHPUR&quot;,&quot;district_title&quot;:&quot;ABDULLAHPUR&quot;},&quot;19&quot;:{&quot;district_id&quot;:&quot;GAZIPUR&quot;,&quot;district_title&quot;:&quot;GAZIPUR&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;},&quot;273&quot;:{&quot;district_id&quot;:&quot;MALIBAG&quot;,&quot;district_title&quot;:&quot;MALIBAG&quot;},&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;}},&quot;140&quot;:{&quot;262&quot;:{&quot;district_id&quot;:&quot;ABDULLAHPUR&quot;,&quot;district_title&quot;:&quot;ABDULLAHPUR&quot;},&quot;19&quot;:{&quot;district_id&quot;:&quot;GAZIPUR&quot;,&quot;district_title&quot;:&quot;GAZIPUR&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;},&quot;273&quot;:{&quot;district_id&quot;:&quot;MALIBAG&quot;,&quot;district_title&quot;:&quot;MALIBAG&quot;},&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;}},&quot;19&quot;:{&quot;1&quot;:{&quot;district_id&quot;:&quot;BAGERHAT&quot;,&quot;district_title&quot;:&quot;BAGERHAT&quot;},&quot;53&quot;:{&quot;district_id&quot;:&quot;PIROJPUR&quot;,&quot;district_title&quot;:&quot;PIROJPUR&quot;},&quot;140&quot;:{&quot;district_id&quot;:&quot;FAKIRHAT&quot;,&quot;district_title&quot;:&quot;FAKIRHAT&quot;},&quot;20&quot;:{&quot;district_id&quot;:&quot;GOPALGANJ&quot;,&quot;district_title&quot;:&quot;GOPALGANJ&quot;},&quot;3&quot;:{&quot;district_id&quot;:&quot;BARGUNA&quot;,&quot;district_title&quot;:&quot;BARGUNA&quot;},&quot;4&quot;:{&quot;district_id&quot;:&quot;BARISHAL&quot;,&quot;district_title&quot;:&quot;BARISHAL&quot;},&quot;126&quot;:{&quot;district_id&quot;:&quot;BAKERGANJ&quot;,&quot;district_title&quot;:&quot;BAKERGANJ&quot;},&quot;127&quot;:{&quot;district_id&quot;:&quot;LEBUKHALI&quot;,&quot;district_title&quot;:&quot;LEBUKHALI&quot;},&quot;52&quot;:{&quot;district_id&quot;:&quot;PATUAKHALI&quot;,&quot;district_title&quot;:&quot;PATUAKHALI&quot;},&quot;129&quot;:{&quot;district_id&quot;:&quot;AMTOLI&quot;,&quot;district_title&quot;:&quot;AMTOLI&quot;},&quot;256&quot;:{&quot;district_id&quot;:&quot;SHAKARIA&quot;,&quot;district_title&quot;:&quot;SHAKARIA&quot;},&quot;134&quot;:{&quot;district_id&quot;:&quot;KHEPUPARA&quot;,&quot;district_title&quot;:&quot;KHEPUPARA&quot;},&quot;139&quot;:{&quot;district_id&quot;:&quot;KUAKATA&quot;,&quot;district_title&quot;:&quot;KUAKATA&quot;},&quot;145&quot;:{&quot;district_id&quot;:&quot;JHALOKATHI&quot;,&quot;district_title&quot;:&quot;JHALOKATHI&quot;},&quot;149&quot;:{&quot;district_id&quot;:&quot;VANDARIA&quot;,&quot;district_title&quot;:&quot;VANDARIA&quot;},&quot;187&quot;:{&quot;district_id&quot;:&quot;MATHBARIA&quot;,&quot;district_title&quot;:&quot;MATHBARIA&quot;},&quot;188&quot;:{&quot;district_id&quot;:&quot;SWARUPKATHI&quot;,&quot;district_title&quot;:&quot;SWARUPKATHI&quot;},&quot;290&quot;:{&quot;district_id&quot;:&quot;CHANDKHALI&quot;,&quot;district_title&quot;:&quot;CHANDKHALI&quot;},&quot;137&quot;:{&quot;district_id&quot;:&quot;SUBIDKHALI&quot;,&quot;district_title&quot;:&quot;SUBIDKHALI&quot;},&quot;266&quot;:{&quot;district_id&quot;:&quot;RAJAPUR&quot;,&quot;district_title&quot;:&quot;RAJAPUR&quot;},&quot;270&quot;:{&quot;district_id&quot;:&quot;TALTOLI&quot;,&quot;district_title&quot;:&quot;TALTOLI&quot;},&quot;327&quot;:{&quot;district_id&quot;:&quot;RAYENDA&quot;,&quot;district_title&quot;:&quot;RAYENDA&quot;},&quot;261&quot;:{&quot;district_id&quot;:&quot;BEKUTIA&quot;,&quot;district_title&quot;:&quot;BEKUTIA&quot;}},&quot;273&quot;:{&quot;1&quot;:{&quot;district_id&quot;:&quot;BAGERHAT&quot;,&quot;district_title&quot;:&quot;BAGERHAT&quot;},&quot;53&quot;:{&quot;district_id&quot;:&quot;PIROJPUR&quot;,&quot;district_title&quot;:&quot;PIROJPUR&quot;},&quot;140&quot;:{&quot;district_id&quot;:&quot;FAKIRHAT&quot;,&quot;district_title&quot;:&quot;FAKIRHAT&quot;},&quot;20&quot;:{&quot;district_id&quot;:&quot;GOPALGANJ&quot;,&quot;district_title&quot;:&quot;GOPALGANJ&quot;},&quot;4&quot;:{&quot;district_id&quot;:&quot;BARISHAL&quot;,&quot;district_title&quot;:&quot;BARISHAL&quot;},&quot;149&quot;:{&quot;district_id&quot;:&quot;VANDARIA&quot;,&quot;district_title&quot;:&quot;VANDARIA&quot;}},&quot;444&quot;:{&quot;1&quot;:{&quot;district_id&quot;:&quot;BAGERHAT&quot;,&quot;district_title&quot;:&quot;BAGERHAT&quot;},&quot;53&quot;:{&quot;district_id&quot;:&quot;PIROJPUR&quot;,&quot;district_title&quot;:&quot;PIROJPUR&quot;},&quot;16&quot;:{&quot;district_id&quot;:&quot;FARIDPUR&quot;,&quot;district_title&quot;:&quot;FARIDPUR&quot;},&quot;20&quot;:{&quot;district_id&quot;:&quot;GOPALGANJ&quot;,&quot;district_title&quot;:&quot;GOPALGANJ&quot;},&quot;140&quot;:{&quot;district_id&quot;:&quot;FAKIRHAT&quot;,&quot;district_title&quot;:&quot;FAKIRHAT&quot;},&quot;4&quot;:{&quot;district_id&quot;:&quot;BARISHAL&quot;,&quot;district_title&quot;:&quot;BARISHAL&quot;},&quot;145&quot;:{&quot;district_id&quot;:&quot;JHALOKATHI&quot;,&quot;district_title&quot;:&quot;JHALOKATHI&quot;},&quot;266&quot;:{&quot;district_id&quot;:&quot;RAJAPUR&quot;,&quot;district_title&quot;:&quot;RAJAPUR&quot;},&quot;149&quot;:{&quot;district_id&quot;:&quot;VANDARIA&quot;,&quot;district_title&quot;:&quot;VANDARIA&quot;},&quot;268&quot;:{&quot;district_id&quot;:&quot;KATHALIA&quot;,&quot;district_title&quot;:&quot;KATHALIA&quot;},&quot;128&quot;:{&quot;district_id&quot;:&quot;KAKCHIRA&quot;,&quot;district_title&quot;:&quot;KAKCHIRA&quot;},&quot;292&quot;:{&quot;district_id&quot;:&quot;DEWATOLA&quot;,&quot;district_title&quot;:&quot;DEWATOLA&quot;},&quot;138&quot;:{&quot;district_id&quot;:&quot;PATHORGHATA&quot;,&quot;district_title&quot;:&quot;PATHORGHATA&quot;},&quot;126&quot;:{&quot;district_id&quot;:&quot;BAKERGANJ&quot;,&quot;district_title&quot;:&quot;BAKERGANJ&quot;},&quot;127&quot;:{&quot;district_id&quot;:&quot;LEBUKHALI&quot;,&quot;district_title&quot;:&quot;LEBUKHALI&quot;},&quot;52&quot;:{&quot;district_id&quot;:&quot;PATUAKHALI&quot;,&quot;district_title&quot;:&quot;PATUAKHALI&quot;},&quot;256&quot;:{&quot;district_id&quot;:&quot;SHAKARIA&quot;,&quot;district_title&quot;:&quot;SHAKARIA&quot;},&quot;129&quot;:{&quot;district_id&quot;:&quot;AMTOLI&quot;,&quot;district_title&quot;:&quot;AMTOLI&quot;},&quot;134&quot;:{&quot;district_id&quot;:&quot;KHEPUPARA&quot;,&quot;district_title&quot;:&quot;KHEPUPARA&quot;},&quot;139&quot;:{&quot;district_id&quot;:&quot;KUAKATA&quot;,&quot;district_title&quot;:&quot;KUAKATA&quot;},&quot;270&quot;:{&quot;district_id&quot;:&quot;TALTOLI&quot;,&quot;district_title&quot;:&quot;TALTOLI&quot;},&quot;187&quot;:{&quot;district_id&quot;:&quot;MATHBARIA&quot;,&quot;district_title&quot;:&quot;MATHBARIA&quot;},&quot;188&quot;:{&quot;district_id&quot;:&quot;SWARUPKATHI&quot;,&quot;district_title&quot;:&quot;SWARUPKATHI&quot;},&quot;3&quot;:{&quot;district_id&quot;:&quot;BARGUNA&quot;,&quot;district_title&quot;:&quot;BARGUNA&quot;},&quot;137&quot;:{&quot;district_id&quot;:&quot;SUBIDKHALI&quot;,&quot;district_title&quot;:&quot;SUBIDKHALI&quot;},&quot;290&quot;:{&quot;district_id&quot;:&quot;CHANDKHALI&quot;,&quot;district_title&quot;:&quot;CHANDKHALI&quot;},&quot;261&quot;:{&quot;district_id&quot;:&quot;BEKUTIA&quot;,&quot;district_title&quot;:&quot;BEKUTIA&quot;}},&quot;290&quot;:{&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;},&quot;282&quot;:{&quot;district_id&quot;:&quot;BADDA&quot;,&quot;district_title&quot;:&quot;BADDA&quot;},&quot;262&quot;:{&quot;district_id&quot;:&quot;ABDULLAHPUR&quot;,&quot;district_title&quot;:&quot;ABDULLAHPUR&quot;},&quot;19&quot;:{&quot;district_id&quot;:&quot;GAZIPUR&quot;,&quot;district_title&quot;:&quot;GAZIPUR&quot;}},&quot;137&quot;:{&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;},&quot;282&quot;:{&quot;district_id&quot;:&quot;BADDA&quot;,&quot;district_title&quot;:&quot;BADDA&quot;},&quot;262&quot;:{&quot;district_id&quot;:&quot;ABDULLAHPUR&quot;,&quot;district_title&quot;:&quot;ABDULLAHPUR&quot;},&quot;19&quot;:{&quot;district_id&quot;:&quot;GAZIPUR&quot;,&quot;district_title&quot;:&quot;GAZIPUR&quot;}},&quot;434&quot;:{&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;}},&quot;435&quot;:{&quot;4&quot;:{&quot;district_id&quot;:&quot;BARISHAL&quot;,&quot;district_title&quot;:&quot;BARISHAL&quot;},&quot;363&quot;:{&quot;district_id&quot;:&quot;POISAR HAT&quot;,&quot;district_title&quot;:&quot;POISAR HAT&quot;}},&quot;603&quot;:{&quot;4&quot;:{&quot;district_id&quot;:&quot;BARISHAL&quot;,&quot;district_title&quot;:&quot;BARISHAL&quot;}},&quot;261&quot;:{&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;},&quot;282&quot;:{&quot;district_id&quot;:&quot;BADDA&quot;,&quot;district_title&quot;:&quot;BADDA&quot;},&quot;262&quot;:{&quot;district_id&quot;:&quot;ABDULLAHPUR&quot;,&quot;district_title&quot;:&quot;ABDULLAHPUR&quot;},&quot;19&quot;:{&quot;district_id&quot;:&quot;GAZIPUR&quot;,&quot;district_title&quot;:&quot;GAZIPUR&quot;}},&quot;324&quot;:{&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;}},&quot;331&quot;:{&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;}},&quot;20&quot;:{&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;},&quot;19&quot;:{&quot;district_id&quot;:&quot;GAZIPUR&quot;,&quot;district_title&quot;:&quot;GAZIPUR&quot;},&quot;262&quot;:{&quot;district_id&quot;:&quot;ABDULLAHPUR&quot;,&quot;district_title&quot;:&quot;ABDULLAHPUR&quot;}},&quot;383&quot;:{&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;},&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;}},&quot;270&quot;:{&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;19&quot;:{&quot;district_id&quot;:&quot;GAZIPUR&quot;,&quot;district_title&quot;:&quot;GAZIPUR&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;},&quot;282&quot;:{&quot;district_id&quot;:&quot;BADDA&quot;,&quot;district_title&quot;:&quot;BADDA&quot;},&quot;262&quot;:{&quot;district_id&quot;:&quot;ABDULLAHPUR&quot;,&quot;district_title&quot;:&quot;ABDULLAHPUR&quot;}},&quot;141&quot;:{&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;}},&quot;138&quot;:{&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;},&quot;282&quot;:{&quot;district_id&quot;:&quot;BADDA&quot;,&quot;district_title&quot;:&quot;BADDA&quot;}},&quot;292&quot;:{&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;},&quot;282&quot;:{&quot;district_id&quot;:&quot;BADDA&quot;,&quot;district_title&quot;:&quot;BADDA&quot;}},&quot;128&quot;:{&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;},&quot;282&quot;:{&quot;district_id&quot;:&quot;BADDA&quot;,&quot;district_title&quot;:&quot;BADDA&quot;}},&quot;268&quot;:{&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;},&quot;282&quot;:{&quot;district_id&quot;:&quot;BADDA&quot;,&quot;district_title&quot;:&quot;BADDA&quot;}},&quot;363&quot;:{&quot;14&quot;:{&quot;district_id&quot;:&quot;DHAKA&quot;,&quot;district_title&quot;:&quot;DHAKA&quot;},&quot;435&quot;:{&quot;district_id&quot;:&quot;BOWBAZAR&quot;,&quot;district_title&quot;:&quot;BOWBAZAR&quot;}},&quot;327&quot;:{&quot;19&quot;:{&quot;district_id&quot;:&quot;GAZIPUR&quot;,&quot;district_title&quot;:&quot;GAZIPUR&quot;},&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;}},&quot;501&quot;:{&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;}},&quot;675&quot;:{&quot;257&quot;:{&quot;district_id&quot;:&quot;SAYDABAD&quot;,&quot;district_title&quot;:&quot;SAYDABAD&quot;}}}" type="hidden" id="jsonval"/>
                                </div>
                            </li>
                            <li>
                                <div class='block_div departing_block_div'>
                                    <div class="search_radio_span">
                                        <span class='saerchradio_spantest'> <span id="searchmenu_departingon-label"><label
                                                for="searchmenu_departingon">Departing On:<span class="required">*</span></label></span>
                                        </span>
                                    </div>
                                    <div class="search_radio_span">
                                        
<input type="text" name="searchmenu_departingon" id="searchmenu_departingon" value="04/11/2025" maxlength="255" class="input-text" />                                    </div>
                                </div>
                            </li>

                                                            <li>
                                    <div class='block_div'>
                                        <div class="search_radio_span">
                                        <span class='saerchradio_spantest'>
                                            <label for="searchmenu_type" >Coach Type:<span class="required">*</span></label>
                                        </span>
                                        </div>
                                        <div class="search_radio_span small_search">
                                            
<select name="searchmenu_coachtype" id="searchmenu_coachtype" class="select">
    <option value="" label="---" selected="selected">---</option>
    <option value="1" label="AC">AC</option>
    <option value="2" label="NonAc">NonAc</option>
</select>                                        </div>
                                    </div>
                                </li>
                                                        <!--
                            <li>
                                <div class='block_div small_block_div div_departing_time '>
                                    <div class="search_radio_span small" >
                                        <span class='saerchradio_spantest '>
                                            <span id="searchmenu_departingtime-label"><label for="searchmenu_departingtime" class="optional">Departing Time:</label></span>
                                        </span>
                                    </div>
                                    <div class="search_radio_span small" style="margin-top: 5px;">
                                        
<select name="searchmenu_departingtime" id="searchmenu_departingtime" class="small_select">
    <option value="" label="---" selected="selected">---</option>
    <option value="12:15 AM" label="12:15 AM">12:15 AM</option>
    <option value="1:45 AM" label="1:45 AM">1:45 AM</option>
    <option value="2:30 AM" label="2:30 AM">2:30 AM</option>
    <option value="4:30 AM" label="4:30 AM">4:30 AM</option>
    <option value="4:45 AM" label="4:45 AM">4:45 AM</option>
    <option value="5:00 AM" label="5:00 AM">5:00 AM</option>
    <option value="5:01 AM" label="5:01 AM">5:01 AM</option>
    <option value="5:15 AM" label="5:15 AM">5:15 AM</option>
    <option value="5:30 AM" label="5:30 AM">5:30 AM</option>
    <option value="5:45 AM" label="5:45 AM">5:45 AM</option>
    <option value="5:50 AM" label="5:50 AM">5:50 AM</option>
    <option value="6:00 AM" label="6:00 AM">6:00 AM</option>
    <option value="6:10 AM" label="6:10 AM">6:10 AM</option>
    <option value="6:15 AM" label="6:15 AM">6:15 AM</option>
    <option value="6:16 AM" label="6:16 AM">6:16 AM</option>
    <option value="6:30 AM" label="6:30 AM">6:30 AM</option>
    <option value="6:31 AM" label="6:31 AM">6:31 AM</option>
    <option value="6:45 AM" label="6:45 AM">6:45 AM</option>
    <option value="6:46 AM" label="6:46 AM">6:46 AM</option>
    <option value="6:47 AM" label="6:47 AM">6:47 AM</option>
    <option value="6:55 AM" label="6:55 AM">6:55 AM</option>
    <option value="7:00 AM" label="7:00 AM">7:00 AM</option>
    <option value="7:01 AM" label="7:01 AM">7:01 AM</option>
    <option value="7:02 AM" label="7:02 AM">7:02 AM</option>
    <option value="7:05 AM" label="7:05 AM">7:05 AM</option>
    <option value="7:14 AM" label="7:14 AM">7:14 AM</option>
    <option value="7:15 AM" label="7:15 AM">7:15 AM</option>
    <option value="7:16 AM" label="7:16 AM">7:16 AM</option>
    <option value="7:20 AM" label="7:20 AM">7:20 AM</option>
    <option value="7:21 AM" label="7:21 AM">7:21 AM</option>
    <option value="7:30 AM" label="7:30 AM">7:30 AM</option>
    <option value="7:31 AM" label="7:31 AM">7:31 AM</option>
    <option value="7:32 AM" label="7:32 AM">7:32 AM</option>
    <option value="7:33 AM" label="7:33 AM">7:33 AM</option>
    <option value="7:44 AM" label="7:44 AM">7:44 AM</option>
    <option value="7:45 AM" label="7:45 AM">7:45 AM</option>
    <option value="7:46 AM" label="7:46 AM">7:46 AM</option>
    <option value="8:00 AM" label="8:00 AM">8:00 AM</option>
    <option value="8:01 AM" label="8:01 AM">8:01 AM</option>
    <option value="8:02 AM" label="8:02 AM">8:02 AM</option>
    <option value="8:03 AM" label="8:03 AM">8:03 AM</option>
    <option value="8:04 AM" label="8:04 AM">8:04 AM</option>
    <option value="8:15 AM" label="8:15 AM">8:15 AM</option>
    <option value="8:16 AM" label="8:16 AM">8:16 AM</option>
    <option value="8:20 AM" label="8:20 AM">8:20 AM</option>
    <option value="8:30 AM" label="8:30 AM">8:30 AM</option>
    <option value="8:31 AM" label="8:31 AM">8:31 AM</option>
    <option value="8:32 AM" label="8:32 AM">8:32 AM</option>
    <option value="8:45 AM" label="8:45 AM">8:45 AM</option>
    <option value="8:46 AM" label="8:46 AM">8:46 AM</option>
    <option value="9:00 AM" label="9:00 AM">9:00 AM</option>
    <option value="9:01 AM" label="9:01 AM">9:01 AM</option>
    <option value="9:02 AM" label="9:02 AM">9:02 AM</option>
    <option value="9:15 AM" label="9:15 AM">9:15 AM</option>
    <option value="9:16 AM" label="9:16 AM">9:16 AM</option>
    <option value="9:30 AM" label="9:30 AM">9:30 AM</option>
    <option value="9:31 AM" label="9:31 AM">9:31 AM</option>
    <option value="9:32 AM" label="9:32 AM">9:32 AM</option>
    <option value="9:45 AM" label="9:45 AM">9:45 AM</option>
    <option value="9:46 AM" label="9:46 AM">9:46 AM</option>
    <option value="10:00 AM" label="10:00 AM">10:00 AM</option>
    <option value="10:01 AM" label="10:01 AM">10:01 AM</option>
    <option value="10:02 AM" label="10:02 AM">10:02 AM</option>
    <option value="10:15 AM" label="10:15 AM">10:15 AM</option>
    <option value="10:16 AM" label="10:16 AM">10:16 AM</option>
    <option value="10:17 AM" label="10:17 AM">10:17 AM</option>
    <option value="10:30 AM" label="10:30 AM">10:30 AM</option>
    <option value="10:31 AM" label="10:31 AM">10:31 AM</option>
    <option value="10:44 AM" label="10:44 AM">10:44 AM</option>
    <option value="10:45 AM" label="10:45 AM">10:45 AM</option>
    <option value="10:46 AM" label="10:46 AM">10:46 AM</option>
    <option value="11:00 AM" label="11:00 AM">11:00 AM</option>
    <option value="11:01 AM" label="11:01 AM">11:01 AM</option>
    <option value="11:15 AM" label="11:15 AM">11:15 AM</option>
    <option value="11:16 AM" label="11:16 AM">11:16 AM</option>
    <option value="11:29 AM" label="11:29 AM">11:29 AM</option>
    <option value="11:30 AM" label="11:30 AM">11:30 AM</option>
    <option value="11:31 AM" label="11:31 AM">11:31 AM</option>
    <option value="11:32 AM" label="11:32 AM">11:32 AM</option>
    <option value="11:45 AM" label="11:45 AM">11:45 AM</option>
    <option value="12:00 PM" label="12:00 PM">12:00 PM</option>
    <option value="12:01 PM" label="12:01 PM">12:01 PM</option>
    <option value="12:15 PM" label="12:15 PM">12:15 PM</option>
    <option value="12:16 PM" label="12:16 PM">12:16 PM</option>
    <option value="12:30 PM" label="12:30 PM">12:30 PM</option>
    <option value="12:31 PM" label="12:31 PM">12:31 PM</option>
    <option value="12:32 PM" label="12:32 PM">12:32 PM</option>
    <option value="12:45 PM" label="12:45 PM">12:45 PM</option>
    <option value="1:00 PM" label="1:00 PM">1:00 PM</option>
    <option value="1:02 PM" label="1:02 PM">1:02 PM</option>
    <option value="1:15 PM" label="1:15 PM">1:15 PM</option>
    <option value="1:30 PM" label="1:30 PM">1:30 PM</option>
    <option value="1:45 PM" label="1:45 PM">1:45 PM</option>
    <option value="1:46 PM" label="1:46 PM">1:46 PM</option>
    <option value="2:00 PM" label="2:00 PM">2:00 PM</option>
    <option value="2:01 PM" label="2:01 PM">2:01 PM</option>
    <option value="2:15 PM" label="2:15 PM">2:15 PM</option>
    <option value="2:30 PM" label="2:30 PM">2:30 PM</option>
    <option value="2:45 PM" label="2:45 PM">2:45 PM</option>
    <option value="3:00 PM" label="3:00 PM">3:00 PM</option>
    <option value="3:01 PM" label="3:01 PM">3:01 PM</option>
    <option value="3:15 PM" label="3:15 PM">3:15 PM</option>
    <option value="3:16 PM" label="3:16 PM">3:16 PM</option>
    <option value="3:30 PM" label="3:30 PM">3:30 PM</option>
    <option value="3:31 PM" label="3:31 PM">3:31 PM</option>
    <option value="3:32 PM" label="3:32 PM">3:32 PM</option>
    <option value="3:33 PM" label="3:33 PM">3:33 PM</option>
    <option value="3:45 PM" label="3:45 PM">3:45 PM</option>
    <option value="4:00 PM" label="4:00 PM">4:00 PM</option>
    <option value="4:01 PM" label="4:01 PM">4:01 PM</option>
    <option value="4:15 PM" label="4:15 PM">4:15 PM</option>
    <option value="4:30 PM" label="4:30 PM">4:30 PM</option>
    <option value="4:31 PM" label="4:31 PM">4:31 PM</option>
    <option value="4:45 PM" label="4:45 PM">4:45 PM</option>
    <option value="4:46 PM" label="4:46 PM">4:46 PM</option>
    <option value="5:00 PM" label="5:00 PM">5:00 PM</option>
    <option value="5:15 PM" label="5:15 PM">5:15 PM</option>
    <option value="5:30 PM" label="5:30 PM">5:30 PM</option>
    <option value="5:31 PM" label="5:31 PM">5:31 PM</option>
    <option value="5:45 PM" label="5:45 PM">5:45 PM</option>
    <option value="6:00 PM" label="6:00 PM">6:00 PM</option>
    <option value="6:01 PM" label="6:01 PM">6:01 PM</option>
    <option value="6:15 PM" label="6:15 PM">6:15 PM</option>
    <option value="6:20 PM" label="6:20 PM">6:20 PM</option>
    <option value="6:30 PM" label="6:30 PM">6:30 PM</option>
    <option value="6:31 PM" label="6:31 PM">6:31 PM</option>
    <option value="6:45 PM" label="6:45 PM">6:45 PM</option>
    <option value="6:46 PM" label="6:46 PM">6:46 PM</option>
    <option value="7:00 PM" label="7:00 PM">7:00 PM</option>
    <option value="7:01 PM" label="7:01 PM">7:01 PM</option>
    <option value="7:15 PM" label="7:15 PM">7:15 PM</option>
    <option value="7:16 PM" label="7:16 PM">7:16 PM</option>
    <option value="7:20 PM" label="7:20 PM">7:20 PM</option>
    <option value="7:30 PM" label="7:30 PM">7:30 PM</option>
    <option value="7:31 PM" label="7:31 PM">7:31 PM</option>
    <option value="7:45 PM" label="7:45 PM">7:45 PM</option>
    <option value="7:46 PM" label="7:46 PM">7:46 PM</option>
    <option value="8:00 PM" label="8:00 PM">8:00 PM</option>
    <option value="8:01 PM" label="8:01 PM">8:01 PM</option>
    <option value="8:02 PM" label="8:02 PM">8:02 PM</option>
    <option value="8:03 PM" label="8:03 PM">8:03 PM</option>
    <option value="8:15 PM" label="8:15 PM">8:15 PM</option>
    <option value="8:20 PM" label="8:20 PM">8:20 PM</option>
    <option value="8:30 PM" label="8:30 PM">8:30 PM</option>
    <option value="8:31 PM" label="8:31 PM">8:31 PM</option>
    <option value="8:45 PM" label="8:45 PM">8:45 PM</option>
    <option value="8:46 PM" label="8:46 PM">8:46 PM</option>
    <option value="9:00 PM" label="9:00 PM">9:00 PM</option>
    <option value="9:01 PM" label="9:01 PM">9:01 PM</option>
    <option value="9:05 PM" label="9:05 PM">9:05 PM</option>
    <option value="9:15 PM" label="9:15 PM">9:15 PM</option>
    <option value="9:30 PM" label="9:30 PM">9:30 PM</option>
    <option value="9:31 PM" label="9:31 PM">9:31 PM</option>
    <option value="9:32 PM" label="9:32 PM">9:32 PM</option>
    <option value="9:44 PM" label="9:44 PM">9:44 PM</option>
    <option value="9:45 PM" label="9:45 PM">9:45 PM</option>
    <option value="9:46 PM" label="9:46 PM">9:46 PM</option>
    <option value="9:47 PM" label="9:47 PM">9:47 PM</option>
    <option value="10:00 PM" label="10:00 PM">10:00 PM</option>
    <option value="10:01 PM" label="10:01 PM">10:01 PM</option>
    <option value="10:02 PM" label="10:02 PM">10:02 PM</option>
    <option value="10:03 PM" label="10:03 PM">10:03 PM</option>
    <option value="10:14 PM" label="10:14 PM">10:14 PM</option>
    <option value="10:15 PM" label="10:15 PM">10:15 PM</option>
    <option value="10:16 PM" label="10:16 PM">10:16 PM</option>
    <option value="10:17 PM" label="10:17 PM">10:17 PM</option>
    <option value="10:30 PM" label="10:30 PM">10:30 PM</option>
    <option value="10:31 PM" label="10:31 PM">10:31 PM</option>
    <option value="10:32 PM" label="10:32 PM">10:32 PM</option>
    <option value="10:33 PM" label="10:33 PM">10:33 PM</option>
    <option value="10:35 PM" label="10:35 PM">10:35 PM</option>
    <option value="10:44 PM" label="10:44 PM">10:44 PM</option>
    <option value="10:45 PM" label="10:45 PM">10:45 PM</option>
    <option value="10:46 PM" label="10:46 PM">10:46 PM</option>
    <option value="10:50 PM" label="10:50 PM">10:50 PM</option>
    <option value="11:00 PM" label="11:00 PM">11:00 PM</option>
    <option value="11:01 PM" label="11:01 PM">11:01 PM</option>
    <option value="11:02 PM" label="11:02 PM">11:02 PM</option>
    <option value="11:10 PM" label="11:10 PM">11:10 PM</option>
    <option value="11:14 PM" label="11:14 PM">11:14 PM</option>
    <option value="11:15 PM" label="11:15 PM">11:15 PM</option>
    <option value="11:16 PM" label="11:16 PM">11:16 PM</option>
    <option value="11:20 PM" label="11:20 PM">11:20 PM</option>
    <option value="11:30 PM" label="11:30 PM">11:30 PM</option>
    <option value="11:31 PM" label="11:31 PM">11:31 PM</option>
    <option value="11:32 PM" label="11:32 PM">11:32 PM</option>
    <option value="11:33 PM" label="11:33 PM">11:33 PM</option>
    <option value="11:35 PM" label="11:35 PM">11:35 PM</option>
    <option value="11:36 PM" label="11:36 PM">11:36 PM</option>
    <option value="11:40 PM" label="11:40 PM">11:40 PM</option>
    <option value="11:45 PM" label="11:45 PM">11:45 PM</option>
    <option value="11:46 PM" label="11:46 PM">11:46 PM</option>
    <option value="11:48 PM" label="11:48 PM">11:48 PM</option>
    <option value="11:49 PM" label="11:49 PM">11:49 PM</option>
    <option value="11:50 PM" label="11:50 PM">11:50 PM</option>
    <option value="11:55 PM" label="11:55 PM">11:55 PM</option>
    <option value="11:58 PM" label="11:58 PM">11:58 PM</option>
    <option value="11:59 PM" label="11:59 PM">11:59 PM</option>
</select>                                    </div>
                                </div>
                            </li>
                            -->
                        </ul>
                        <div style="clear: both;padding-left: 5px;">
                            <div class="buttons">
                                                                <button type="submit" id='searchmenu_submitbutton' name='searchmenu_submitbutton' class="positive">Search</button>
                                                            </div>
                        </div>
                        <input type="hidden" name="leavingFormTitle" id="leavingFormTitle">
                        <input type="hidden" name="goingToTitle" id="goingToTitle">
                    </form>
                </div>
            </div>
                           
            <div class="homepageslider detailsbox right whitesmoke_brown col1">
                <div class="slider">
                    <ul class="bxslider">
                                                <li><a target="_blank" href=""><img src="https://static-busbd.bdtickets.com/busbdmedia/Sakur_logo--1.1499698575" width="510px;" height="205px;" /></a></li>
                                                    <li><a target="_blank" href=""><img src="https://static-busbd.bdtickets.com/busbdmedia/14054135_1350663821628995_8605858133970033812_n (1).1499753660" width="510px;" height="205px;" /></a></li>
                                                    <li><a target="_blank" href=""><img src="https://static-busbd.bdtickets.com/busbdmedia/16640670_1568018296560212_2579773938864204346_n.1499753677" width="510px;" height="205px;" /></a></li>
                                                    <li><a target="_blank" href=""><img src="https://static-busbd.bdtickets.com/busbdmedia/18620150_1679658258729548_6031215808324181944_n.1499753711" width="510px;" height="205px;" /></a></li>
                                                    <li><a target="_blank" href=""><img src="https://static-busbd.bdtickets.com/busbdmedia/17760180_1627807520581289_7520367106504808320_n.1499753979" width="510px;" height="205px;" /></a></li>
                                                    <li><a target="_blank" href=""><img src="https://static-busbd.bdtickets.com/busbdmedia/20067931_1996727693891517_1657035712_n.1500547320" width="510px;" height="205px;" /></a></li>
                                                </ul>
                </div>
            </div>
                                        <div class="homepage-content detailsbox right whitesmoke_brown">
                    <div class="homepage">সম্মানিত যাত্রীবৃন্দের অবগতির জন্য বিশেষ ভাবে অনুরোধ করা যাচ্ছে যে, ই-টিকেট ক্রয় করার সময় যাত্রীর ব্যবহৃত ফোন নম্বর ব্যবহার করুন। ফরোয়ার্ড এসএমএস গ্রহণযোগ্য হইবে না এবং আপনার টিকেট বাতিল বলিয়া গণ্য হইবে। সুন্দর ও পরিচ্ছন্ন সেবা প্রদানের জন্য আপনাদের সার্বিক সহায়তা প্রত্যাশিত। এসএমএস এ প্রদর্শিত ভাড়ার অতিরিক্ত অর্থ দিয়ে টিকেট ক্রয় করিবেন না। কেউ এ সংক্রান্ত বিষয়ের অবতারণা করিলে টিকিট বিক্রেতা ও ক্রেতা সকলের বিরুদ্ধে প্রশাসনিক ব্যবস্থা গ্রহণ করা হবে।আপনাদের সকলের যাত্রা নিরাপদ ও শুভ হোক।<br />
<br />
অনলাইনে টিকিট ক্রয় করা যাত্রীবৃন্দকে অনুরোধ করা যাচ্ছে নির্ধারিত কাউন্টার থেকে গাড়িতে উঠতে। যাত্রার নির্ধারিত সময়ের কমপক্ষে ২০ মিনিট আগে কাউন্টারে উপস্থিত থাকা আবশ্যক। দেরিতে আসা বা কাউন্টার ছাড়া গাড়িতে ওঠার কারণে গাড়ি মিস হলে এর সম্পূর্ণ দায়ভার যাত্রীর নিজস্ব হবে।</div>
                </div>
            </div>
                <div class="clear"></div>
            </div>
</div>
<script type="text/javascript">
    var data1 = $('input#jsonval').val();
    if(data1.length > 0 ){   
            data1 = JSON.parse(data1);
            var activefrom = new Array();
            activefrom.push('');
            $.each(data1, function(i,v) {
                activefrom.push(i);
            }); 
            $('#searchmenu_leavingform option').each(function() { 
                if($.inArray($(this).attr('value'),activefrom)===-1){
                    $("#searchmenu_leavingform option[value='"+$(this).attr('value')+"']").remove();
                } 
            });
     }
    
    $('#searchmenu_goingto').attr('disabled', 'disabled');
    var select = $('#searchmenu_goingto');
    var options = select.attr('options');
    $('option', select).remove();
    $('select#searchmenu_leavingform').change(function(){
        $('#searchmenu_goingto').removeAttr('disabled');
        var selectedVal  = $(this).find('option:selected').val();
        var data = $('input#jsonval').val();
        var select = $('#searchmenu_goingto');
        var options = select.attr('options');
        $('option', select).remove();        
        var searchmenu_goingto_array = array();
        if(data.length > 0 ){   
            data = JSON.parse(data);
            $.each(data, function(i,v) {
                if(i == selectedVal){
                    $.each(v, function(u,val){
                        searchmenu_goingto_array.push({
                            district_id: u,
                            ditrict_name: val.district_id
                        });
                    })
                }
            });
            searchmenu_goingto_array.sort((a, b) => (a.ditrict_name > b.ditrict_name ? 1 : -1));
            searchmenu_goingto_array.forEach((obj, index)=>{
                $('select#searchmenu_goingto').append('<option value="' + obj.district_id + '">' + obj.ditrict_name + '</option>');
            })

            if($(this).find('option:selected').val() == ''){
                $('select#searchmenu_goingto').attr('disabled', 'disabled');
                $('select#searchmenu_departingtime').attr('disabled', 'disabled');
            }
        }
        $('#goingToTitle').val($('select#searchmenu_goingto').find('option:selected').text());
        $('#leavingFormTitle').val($('select#searchmenu_leavingform option:selected').text());
        dropDownDepartingTime();
    });

    /* Front Page AJAX Departing Time select option change Code start author: Razib */
    $('select#searchmenu_goingto').change(function(){
        dropDownDepartingTime();
        $('#goingToTitle').val($('select#searchmenu_goingto option:selected').text());
    });

    $('input#searchmenu_departingon').change(function(){
        dropDownDepartingTime();
    });

    if($('select#searchmenu_goingto').attr('disabled') == 'disabled'){
        $('select#searchmenu_departingtime').attr('disabled', 'disabled');
    }else{
        dropDownDepartingTime();
    }

    /* Front Page AJAX Departing Time select option change function start author: Razib */
    function dropDownDepartingTime() {
        $.ajax({
            url: '/en_US/ajax/onlineseatbooking/departingtime',
            data: {
                searchmenu_leavingform: $.trim($('select#searchmenu_leavingform option:selected').val()),
                searchmenu_goingto: $.trim($('select#searchmenu_goingto option:selected').val()),
                searchmenu_departingon: $.trim($('input#searchmenu_departingon').val())
            },
            type: "POST",
            success: function (data) {
                if (data) {
                    data = JSON.parse(data);
                    var counrData = $.map(data,function (i, v) {
                        return i
                    }).length;
                    if (counrData) {
                        var select = $('#searchmenu_departingtime');
                        var options = select.attr('options');
                        $('option', select).remove();
                        $('select#searchmenu_departingtime').append('<option value=" ">---</option>');
                        $.each(data, function (i, v) {
                            $('select#searchmenu_departingtime').append('<option value="' + v.schedule + '">' + v.schedule + '</option>');
                        })
                        select.removeAttr('disabled');
                    }
                }else{
                    $('select#searchmenu_departingtime').attr('disabled', 'disabled');
                }
            }
        });
        return false;
    }

</script></div></div><script type="text/javascript"></script><div class="clearfix"></div>
</div>

<div style="text-align: center; vertical-align: middle;">
			WE ACCEPT: <br/><img src="https://static-busbd.bdtickets.com/busbdimages/bank_logo.png" alt="" />
	        
</div>
<div style="clear:both;"></div>
<div id="footer" style="text-align: left;">
<div id="footermenulink">
           <ul>
                   <!-- <li>
                <a href="/en_US/showcontentview/home">     
                    Home     </a>
            </li> -->
                       <!-- <li><a href="/en_US/affiliate/signin"> Affiliate Sign In </a></li> -->
               
     <!-- <li><a href="/en_US/contactus"> Feedback </a></li> -->
     </ul>       
    </div>
<div style="clear:both;"></div>
<div id="fb-root"></div>
<script type="text/javascript">(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>    
<script type="text/javascript">
    if ($(".scalable").length > 0){
        $(".scalable").remove();
    }     
    $('.arrow').live("onclick", function(){
        $(".scalable").remove();
    });  
    $("#print_tkt").live('click', function(event){
            event.preventDefault();
            $('#print_content').jqprint();
        }); 
    function showLoading(){ 
        $("#loading-mask").removeClass("loading_mask_hide").addClass("loading_mask_show");         
    }
    function hideLoading(){
        $("#loading-mask").removeClass("loading_mask_show").addClass("loading_mask_hide");
    }
    function getLocation(){
        return trim(window.location);
    }
    function searching (query){
        
        $('.grid').html("<h> Please wait....</h>");
        $.ajaxq('grid_searching', {
            url: $(location).attr('href'),
            type: 'POST',
            async:false,
            data: { query: $.toJSON(query) },
            success: function(response) {
                $('#main_grid').html("LOADING PLEASE WAIT");
                $('#main_grid').html(response);
                hideLoading();
            }
        }); 
    }
    if ($('#main_grid').length > 0){
        $('#paggination_current_pageindex').live("change", function(){
            var pageIndexValue = $('#paggination_current_pageindex').val();
            var spa_total_pages =  parseInt($('#spa_total_pages').html());
            if(pageIndexValue > spa_total_pages){
                alert('seclect  value upto ' + spa_total_pages);
                return false;
            }
            var result  = new Array();
            result = toInputsArray();
            result['pageIndex'] = pageIndexValue;
            result['perPage'] = $('#changeLimit :selected').val();
            searching (result);
        });
    }
        
    if ($('#main_grid').length > 0){

        function  doFilter(){
            searching (toInputsArray());
        }

        function  _doChangeLimit(){
            var result  = new Array();
            result = toInputsArray();
            result['perPage'] = $('#changeLimit :selected').val();
            searching (result);
        }

        function toInputsArray() {
            var saveData = {};
            var query = new Array();
     
            $(".filter .input-text").each(function() {
                if($(this) !== null ) {
                    query[$(this).attr('name')] = $(this).attr('name')+ '~' + trim($(this).val());
                }
            });
            //fixed per page
            query['perPage'] = 'perPage' + '~' +trim($("#changeLimit").val()); 
            $(".hasDatepicker").each(function() {
                query[$(this).attr('name')] = $(this).attr('name')+ '~' + trim($(this).val());           	 
            });
            if ($(".filter .select-text") !== null){
                $(".filter .select-text").each(function() {
                    if($(this) !== null) {
                        query[$(this).attr('name')] = $(this).attr('name')+ '~' + trim($(this).val());
                    }
                });
            }

            for(var i in query){
                str = query[i].split("~");
                saveData[str[0]] = str[1];
            }
            return saveData;
        }

        function fncPaging(page, query){
            var perPageValue = $('#changeLimit :selected').val();
            query.pageIndex = page;

            query.perPage = perPageValue;
            searching (query);          
        }
    }
    if ($(".data tr").length > 0){
        $('.data tr').live("mouseover", function(){
            $(this).addClass("highlight");
        });
        $('.data tr').live("mouseout", function(){
            $(this).removeClass("highlight");
        });
    }
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  
  ga('create', 'UA-48000074-1', 'auto');
  ga('send', 'pageview');
</script><div style="clear:both;"></div>
</div>
<!--<div id="copyright">
Copyright @ <a href="https://www.intouchsoftbd.com" style="color: #f5f5f5;" target="_blank">Intouch Soft</a>
</div>-->
</div>
<script type="text/javascript">
$(function(){
$.each(document.images, function(){
var this_image = this;
var src = $(this_image).attr('src') || '' ;
if(!src.length > 0){
var lsrc = $(this_image).attr('lsrc') || '' ;
if(lsrc.length > 0){
var img = new Image();
img.src = lsrc;
$(img).load(function() {
this_image.src = this.src;
});
}
}
});
});
</script>
<script type="text/javascript" src="https://static-busbd.bdtickets.com/js/jquery.ui/ui.datepicker.js"></script>    </body>
</html>

