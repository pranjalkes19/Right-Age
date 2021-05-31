<?php require_once("con.php");
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="supernova"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F211276273293456" title="oEmbed Form">
<link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=https%3A%2F%2Fform.jotform.com%2F211276273293456" title="oEmbed Form">
<meta property="og:title" content="Online Complaint Form" >
<meta property="og:url" content="https://form.jotform.com/211276273293456" >
<meta property="og:description" content="Please click the link to complete this form." >
<meta name="slack-app-id" content="AHNMASS8M">
<link rel="shortcut icon" href="https://cdn.jotfor.ms/favicon.ico">
<link rel="canonical" href="https://form.jotform.com/211276273293456" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
<meta name="HandheldFriendly" content="true" />
<title>Online Complaint Form</title>
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.25341" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f7ed99c2c2c7240ba580251"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_styles.css?3.3.25341" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css?3.3.25341" />
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
.form-label.form-label-auto {
        
      display: block;
      float: none;
      text-align: left;
      width: 100%;
    
      }
    /* Injected CSS Code */
</style>

<script src="https://cdn.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.25341" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.25341" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.25341" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.min.js"></script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.25341" type="text/javascript"></script>
<script type="text/javascript">
	JotForm.init(function(){

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("3", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("3", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});
 JotForm.formatDate({date:(new Date()), dateField:$("id_"+3)});
 JotForm.displayLocalTime("input_3_hourSelect", "input_3_minuteSelect","input_3_ampm", "input_3_timeInput", false);
if (window.JotForm && JotForm.accessible) $('input_4').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_5').hint('ex: email@website.com');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_9').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_7').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_8').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_11').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_15').setAttribute('tabindex',0);
	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
	JotForm.newPaymentUI = true;
    /*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"weAre","qid":"1","text":"We are here to assist your child !","type":"control_head"},{"name":"redirectMe","qid":"2","text":"Redirect me to the Nearest Police Station Finder","type":"control_button"},{"description":"","name":"dateOf","qid":"3","text":"Date of filling the form:","type":"control_datetime"},{"name":"complainantsName","qid":"4","text":"Complainant's Name:","type":"control_textbox"},{"name":"email5","qid":"5","subLabel":"example@example.com","text":"E-mail","type":"control_email"},{"name":"clickTo6","qid":"6","text":"","type":"control_text"},{"name":"addressOf","qid":"7","subLabel":"Enter the closest location possible","text":"Address of the person against whom the complaint is filed :","type":"control_textarea"},{"name":"approximateAge","qid":"8","text":"Approximate age of the child :","type":"control_textarea"},{"name":"nameOf","qid":"9","subLabel":"Leave if unknown","text":"Name of the person against which\u002Fwhom the complaint is filed (if known):","type":"control_textbox"},null,{"name":"theSpecific11","qid":"11","text":"The specific details of the complaint :","type":"control_textarea"},null,null,null,{"description":"","name":"nearestPolice","qid":"15","subLabel":"","text":"Nearest Police Station :","type":"control_textbox"},null,{"name":"submit17","qid":"17","text":"Submit","type":"control_button"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"weAre","qid":"1","text":"We are here to assist your child !","type":"control_head"},{"name":"redirectMe","qid":"2","text":"Redirect me to the Nearest Police Station Finder","type":"control_button"},{"description":"","name":"dateOf","qid":"3","text":"Date of filling the form:","type":"control_datetime"},{"name":"complainantsName","qid":"4","text":"Complainant's Name:","type":"control_textbox"},{"name":"email5","qid":"5","subLabel":"example@example.com","text":"E-mail","type":"control_email"},{"name":"clickTo6","qid":"6","text":"","type":"control_text"},{"name":"addressOf","qid":"7","subLabel":"Enter the closest location possible","text":"Address of the person against whom the complaint is filed :","type":"control_textarea"},{"name":"approximateAge","qid":"8","text":"Approximate age of the child :","type":"control_textarea"},{"name":"nameOf","qid":"9","subLabel":"Leave if unknown","text":"Name of the person against which\u002Fwhom the complaint is filed (if known):","type":"control_textbox"},null,{"name":"theSpecific11","qid":"11","text":"The specific details of the complaint :","type":"control_textarea"},null,null,null,{"description":"","name":"nearestPolice","qid":"15","subLabel":"","text":"Nearest Police Station :","type":"control_textbox"},null,{"name":"submit17","qid":"17","text":"Submit","type":"control_button"}]);}, 20); 
</script>
</head>
<body>
<form class="jotform-form" action="success.php" method="post" name="form_211276273293456" id="211276273293456" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="211276273293456" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header" data-component="header">
              We are here to assist your child !
            </h1>
            <div id="subHeader_1" class="form-subHeader">
              Please complete the form below for your complaints.
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_datetime" id="id_3">
        <label class="form-label form-label-top form-label-auto" id="label_3" for="lite_mode_3"> Date of filling the form: </label>
        <div id="cid_3" class="form-input-wide" data-layout="half">
          <div data-wrapper-react="true">
            <div style="display:none">
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" class="currentDate form-textbox validate[limitDate]" id="day_3" name="q3_dateOf[day]" size="2" data-maxlength="2" data-age="" maxLength="2" value="08" autoComplete="off" aria-labelledby="label_3 sublabel_3_day" />
                <span class="date-separate" aria-hidden="true">
                   -
                </span>
                <label class="form-sub-label" for="day_3" id="sublabel_3_day" style="min-height:13px" aria-hidden="false"> Day </label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" class="form-textbox validate[limitDate]" id="month_3" name="q3_dateOf[month]" size="2" data-maxlength="2" data-age="" maxLength="2" value="05" autoComplete="off" aria-labelledby="label_3 sublabel_3_month" />
                <span class="date-separate" aria-hidden="true">
                   -
                </span>
                <label class="form-sub-label" for="month_3" id="sublabel_3_month" style="min-height:13px" aria-hidden="false"> Month </label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" class="form-textbox validate[limitDate]" id="year_3" name="q3_dateOf[year]" size="4" data-maxlength="4" data-age="" maxLength="4" value="2021" autoComplete="off" aria-labelledby="label_3 sublabel_3_year" />
                <label class="form-sub-label" for="year_3" id="sublabel_3_year" style="min-height:13px" aria-hidden="false"> Year </label>
              </span>
            </div>
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="text" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_3" size="12" data-maxlength="12" maxLength="12" data-age="" value="08-05-2021" data-format="ddmmyyyy" data-seperator="-" placeholder="DD-MM-YYYY" autoComplete="off" aria-labelledby="label_3 sublabel_3_litemode" />
              <img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_3_pick" src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2" />
              <label class="form-sub-label" for="lite_mode_3" id="sublabel_3_litemode" style="min-height:13px" aria-hidden="false"> Date </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_4">
        <label class="form-label form-label-top form-label-auto" id="label_4" for="input_4"> Complainant's Name: </label>
        <div id="cid_4" class="form-input-wide" data-layout="half">
          <input type="text" id="input_4" name="q4_complainantsName" data-type="input-textbox" class="form-textbox validate[Alphabetic]" style="width:310px" size="310" value="" placeholder="abc abc" data-component="textbox" aria-labelledby="label_4" />
        </div>
      </li>
      <li class="form-line" data-type="control_email" id="id_5">
        <label class="form-label form-label-top form-label-auto" id="label_5" for="input_5"> E-mail </label>
        <div id="cid_5" class="form-input-wide" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
          
          
          <?php
          $email=$_SESSION['email'];
          echo '
            <input type="email" id="input_5" name="q5_email5" class="form-textbox validate[Email]" style="width:310px" size="310" value="'.$email.'" placeholder="ex: email@website.com" data-component="email" aria-labelledby="label_5 sublabel_input_5" />
            <label class="form-sub-label" for="input_5" id="sublabel_input_5" style="min-height:13px" aria-hidden="false"> example@example.com </label>
            '
            ?> 
            
            
            </span>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_6">
        <div id="cid_6" class="form-input-wide" data-layout="full">
          <div id="text_6" class="form-html" data-component="text">
            <hr />
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_9">
        <label class="form-label form-label-top form-label-auto" id="label_9" for="input_9"> Name of the person against which/whom the complaint is filed (if known): </label>
        <div id="cid_9" class="form-input-wide" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="text" id="input_9" name="q9_nameOf" data-type="input-textbox" class="form-textbox" style="width:310px" size="310" value="" placeholder=" " data-component="textbox" aria-labelledby="label_9 sublabel_input_9" />
            <label class="form-sub-label" for="input_9" id="sublabel_input_9" style="min-height:13px" aria-hidden="false"> Leave if unknown </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_7">
        <label class="form-label form-label-top form-label-auto" id="label_7" for="input_7"> Address of the person against whom the complaint is filed : </label>
        <div id="cid_7" class="form-input-wide" data-layout="full">
          <span class="form-sub-label-container" style="vertical-align:top">
            <textarea id="input_7" class="form-textarea" name="q7_addressOf" style="width:648px;height:10px" data-component="textarea" aria-labelledby="label_7 sublabel_input_7"></textarea>
            <label class="form-sub-label" for="input_7" id="sublabel_input_7" style="min-height:13px" aria-hidden="false"> Enter the closest location possible </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_8">
        <label class="form-label form-label-top form-label-auto" id="label_8" for="input_8"> Approximate age of the child : </label>
        <div id="cid_8" class="form-input-wide" data-layout="full">
          <textarea id="input_8" class="form-textarea" name="q8_approximateAge" style="width:648px;height:10px" data-component="textarea" aria-labelledby="label_8"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_11">
        <label class="form-label form-label-top form-label-auto" id="label_11" for="input_11"> The specific details of the complaint : </label>
        <div id="cid_11" class="form-input-wide" data-layout="full">
          <textarea id="input_11" class="form-textarea" name="q11_theSpecific11" style="width:648px;height:140px" data-component="textarea" aria-labelledby="label_11"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_15">
        <label class="form-label form-label-top form-label-auto" id="label_15" for="input_15"> Nearest Police Station : </label>
        <div id="cid_15" class="form-input-wide" data-layout="half">
          <input type="text" id="input_15" name="q15_nearestPolice" data-type="input-textbox" class="form-textbox" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_15" />
        </div>
      </li>
      
      <li class="form-line" data-type="control_button" id="id_17">
        <div id="cid_17" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
            <button id="input_17" name="submit" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Submit
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  JotForm.poweredByText = "Powered by JotForm";
  </script>
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="211276273293456" />
  <script type="text/javascript">
  var all_spc = document.querySelectorAll("form[id='211276273293456'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "211276273293456-211276273293456";
}
  </script>
</form></body>
</html>
<script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.25341"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.25341"></script>
