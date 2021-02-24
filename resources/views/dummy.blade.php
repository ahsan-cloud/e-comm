<html xmlns="http://www.w3.org/1999/xhtml"><head><title>

</title>
    <!-- <link rel="shortcut icon" href="../favicon.ico"><link rel="icon" type="image/gif" href="../animated_favicon1.gif"> -->
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link rel="stylesheet" href="css/design.css">
    <link rel="stylesheet" href="css/demo.css">
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <link href="../Styles/Dashboard/material-dashboard.css" rel="stylesheet" type="text/css">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../Styles/Dashboard/demo.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

</head>
<body>
    <form name="aspnetForm" method="post" action="./WallBoard.aspx" id="aspnetForm">
    <div class="container">  
    <div id="ctl00_ContentPlaceHolder1_UpdatePanel1">
            <div class="content">
                <div class="container-fluid">
                    <div class="row" style="background-color: #fff; padding: 10px;">
                        <div class="col-md-3 text-left">
                             <img src="/Images/ez_logo.jpg" style="width:80px; height:80px;" alt="easy manager logo">

                            <img src="/images/govt_logo.jpg" style="width:80px; height:80px" alt="ntp logo">
                        </div>
                        <div class="col-md-6 text-center heading-cs">
                            <h4>
                                <strong>National TB Control Program</strong></h4>
                            <h4>
                                <small>Ministry of National Health Services, Regulations &amp; Coordination</small></h4>
                            <h4>
                                <small>MANDATORY TB CASE NOTIFICATION - PILOT PROJECT</small></h4>
                            <h4 class="text-danger">
                                <strong>HELPLINE: 0800-88800</strong></h4>
                        </div>
                        <div class="col-md-3 text-right">
                            <img src="Images/ntp_logo.png" style="width:80px; height:80px;" alt="ntp logo">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="card card-stats">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">local_hospital</i>
                                    </div>
                                    <p class="card-category">
                                        HCPs registered</p>
                                    <h3 class="card-title">
                                        <strong><span id="ctl00_ContentPlaceHolder1_LblHCPs_card">414</span></strong>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="card card-stats">
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">textsms</i>
                                    </div>
                                    <p class="card-category">
                                        Total notify SMS</p>
                                    <h3 class="card-title">
                                        <strong><span id="ctl00_ContentPlaceHolder1_LblNotifySMS_card">977</span></strong>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="card card-stats">
                                <div class="card-header card-header-danger card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">call</i>
                                    </div>
                                    <p class="card-category">
                                        Total calls on TF</p>
                                    <h3 class="card-title">
                                        <strong><span id="ctl00_ContentPlaceHolder1_LblTotalCallsReceivedTF_card">1840</span></strong>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">phone_callback</i>
                                    </div>
                                    <p class="card-category">
                                        Calls taken</p>
                                    <h3 class="card-title">
                                        <strong><span id="ctl00_ContentPlaceHolder1_LblCompleted_card">0</span></strong></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card card-chart">
                                <div class="card-header card-header-warning">
                                    
                                <strong>   Healthcare Providers </strong>
                                </div>
                                <div class="card-body height-setting">
                                    
                                    <h4 class="card-title">
                                        <small>Regd SMS- Today</small> <small class="pull-right">
                                            <span id="ctl00_ContentPlaceHolder1_LblTodaysRegSMS">4</span></small></h4>
                                    <hr>
                                    <h4 class="card-title">
                                        <small>Total Regd SMS</small> <small class="pull-right">
                                            <span id="ctl00_ContentPlaceHolder1_LblRegisteredSMS">583</span></small></h4>
                                    <hr>
                                    <h4 class="card-title">
                                        <small>SMS Responded</small> <small class="pull-right">
                                            <span id="ctl00_ContentPlaceHolder1_LblSMSResponded">583</span></small></h4>
                                    <hr>
                                    <h4 class="card-title">
                                        <small>HCPs Verified</small> <small class="pull-right">
                                            <span id="ctl00_ContentPlaceHolder1_LblHCPVerified">414</span></small></h4>
                                    <hr>
                                    <h4 class="card-title">
                                        <small>HCPs Un-Verified</small> <small class="pull-right">
                                            <span id="ctl00_ContentPlaceHolder1_LblHCPUnverified">9</span></small></h4>
                                    <hr>
                                    <h4 class="card-title">
                                        <small>HCPs Provided Info</small> <small class="pull-right">
                                            <span id="ctl00_ContentPlaceHolder1_LblHCPInfoProvided">513</span></small></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-chart">
                                <div class="card-header card-header-success">
                                   <strong> TB Patient Notification </strong>
                                </div>
                                <div class="card-body height-setting">
                                    <h4 class="card-title">
                                        <small>Notify SMS- Today</small> <small class="pull-right">
                                            <span id="ctl00_ContentPlaceHolder1_LblTodaysNotifySMS">3</span></small></h4>
                                    <hr>
                                    
                                    <h4 class="card-title">
                                        <small>Notify SMS Respn.</small> <small class="pull-right">
                                            <span id="ctl00_ContentPlaceHolder1_LblNotifySMSResp">977</span></small></h4>
                                    <hr>
                                    <h4 class="card-title">
                                        <small>TB SMS Received</small> <small class="pull-right">
                                            <span id="ctl00_ContentPlaceHolder1_LblTBSMSRec">17</span></small></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-chart">
                                <div class="card-header card-header-danger">
                                   <strong> Call Rec. on Helpline </strong>
                                </div>
                                <div class="card-body height-setting">
                                    <h4 class="card-title">
                                        <small>Agents Logged In</small> <small class="pull-right">
                                            <span id="ctl00_ContentPlaceHolder1_LblAgentsLoggedIn">1</span></small></h4>
                                    <hr>
                                    <h4 class="card-title">
                                        <small>SMS- Today</small> <small class="pull-right">
                                            <span id="ctl00_ContentPlaceHolder1_LblTodaysSMS">15</span></small></h4>
                                    <hr>
                                    <h4 class="card-title">
                                        <small>Total SMS</small> <small class="pull-right">
                                            <span id="ctl00_ContentPlaceHolder1_LblTotalSMS">10355</span></small></h4>
                                    <hr>
                                    <h4 class="card-title">
                                        <small>Calls in Queue</small> <small class="pull-right">
                                            <span id="ctl00_ContentPlaceHolder1_LblCallsInQueue">0</span></small></h4>
                                    <hr>
                                    <h4 class="card-title">
                                        <small>Agents on Call</small> <small class="pull-right">
                                            <span id="ctl00_ContentPlaceHolder1_LblAgentOnCall">0</span></small></h4>
                                    <hr>
                                    <h4 class="card-title">
                                        <small>Agents Waiting</small> <small class="pull-right">
                                            <span id="ctl00_ContentPlaceHolder1_LblWaitingAgents">1</span></small></h4>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-chart">
                                <div class="card-header card-header-info">
                                    <strong> Helpline Staff </strong>
                                </div>
                                <div class="card-body height-setting">
                                    
                                    <h4 style="display: none" class="card-title">
                                        <small>Calls Abandoned</small> <small class="pull-right">
                                            <span id="ctl00_ContentPlaceHolder1_LblAbondened">3</span></small></h4>
                                    <hr>
                                    <h4 class="card-title">
                                        <small>Gen Info TB</small> <small class="pull-right">
                                            <span id="ctl00_ContentPlaceHolder1_LblInfoTB">250</span></small></h4>
                                    <hr>
                                    <h4 class="card-title">
                                        <small>Total Irrelv. Calls</small> <small class="pull-right">
                                            <span id="ctl00_ContentPlaceHolder1_LblIrrelevantCalls">193</span></small></h4>
                                    <hr>
                                    <h4 class="card-title">
                                        <small>Total Calls Rec.</small> <small class="pull-right">
                                            <span id="ctl00_ContentPlaceHolder1_LblTotalCallsReceivedAgent">1294</span></small></h4>
                                    <hr>
                                    <h4 class="card-title">
                                        <small>Total Relv Calls</small> <small class="pull-right">
                                            <span id="ctl00_ContentPlaceHolder1_LblRelCalls">11031</span></small></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="gridcard card">
                                <div class="gridcard card-body" style="padding: 10px">
                                    <div>
	<table cellspacing="0" cellpadding="0" rules="all" border="1" id="ctl00_ContentPlaceHolder1_GrdUserInfo" style="background-color:White;border-color:Silver;border-style:Groove;width:100%;border-collapse:collapse;">
		<tbody><tr align="center" style="color:Black;">
			<th scope="col">User Name</th><th scope="col">Name</th><th scope="col">Peer</th><th scope="col">Pause</th><th scope="col">CallsTaken</th><th scope="col">On Call Time</th><th scope="col">Call Status</th><th scope="col">Status</th>
		</tr><tr align="center" style="color:Black;">
			<td>&nbsp;</td><td>Ali Raza </td><td> 1002</td><td>0 : 0 : 0</td><td>0</td><td>&nbsp;</td><td>&nbsp;</td><td>Waiting</td>
		</tr>
	</tbody></table>
    </div>
</div>
                                    <span id="ctl00_ContentPlaceHolder1_WallboardTimer1" style="visibility:hidden;display:none;"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    

<script type="text/javascript">
//<![CDATA[

theForm.oldSubmit = theForm.submit;
theForm.submit = WebForm_SaveScrollPositionSubmit;

theForm.oldOnSubmit = theForm.onsubmit;
theForm.onsubmit = WebForm_SaveScrollPositionOnSubmit;
Sys.Application.add_init(function() {
    $create(Sys.UI._Timer, {"enabled":true,"interval":1000,"uniqueID":"ctl00$ContentPlaceHolder1$WallboardTimer1"}, null, null, $get("ctl00_ContentPlaceHolder1_WallboardTimer1"));
});
//]]>
</script>
<span style="display: none !important;"><input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="ctl00$ContentPlaceHolder1$WallboardTimer1"></span><span style="display: none !important;"><input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value=""></span><span style="display: none !important;"><input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUJODI4MTEwOTYxD2QWAmYPZBYCAgMPZBYCAgMPZBYCAgEPZBYCZg9kFjICAQ8PFgIeBFRleHQFAzQxNGRkAgMPDxYCHwAFAzk3N2RkAgUPDxYCHwAFBDE4NDBkZAIHDw8WAh8ABQEwZGQCCQ8PFgIfAAUBNGRkAgsPDxYCHwAFAzU4M2RkAg0PDxYCHwAFAzU4M2RkAg8PDxYCHwAFAzQxNGRkAhEPDxYCHwAFATlkZAITDw8WAh8ABQM1MTNkZAIVDw8WAh8ABQEzZGQCFw8PFgIfAAUDOTc3ZGQCGQ8PFgIfAAUCMTdkZAIbDw8WAh8ABQExZGQCHQ8PFgIfAAUCMTVkZAIfDw8WAh8ABQUxMDM1NWRkAiEPDxYCHwAFATBkZAIjDw8WAh8ABQEwZGQCJQ8PFgIfAAUBMWRkAicPDxYCHwAFATNkZAIpDw8WAh8ABQMyNTBkZAIrDw8WAh8ABQMxOTNkZAItDw8WAh8ABQQxMjk0ZGQCLw8PFgIfAAUFMTEwMzFkZAIxDzwrABECAA8WBB4LXyFEYXRhQm91bmRnHgtfIUl0ZW1Db3VudAIBZAwUKwAIFggeBE5hbWUFCVVzZXIgTmFtZR4KSXNSZWFkT25seWgeBFR5cGUZKwIeCURhdGFGaWVsZAUJVXNlciBOYW1lFggfAwUETmFtZR8EaB8FGSsCHwYFBE5hbWUWCB8DBQRQZWVyHwRoHwUZKwIfBgUEUGVlchYIHwMFBVBhdXNlHwRoHwUZKwIfBgUFUGF1c2UWCB8DBQpDYWxsc1Rha2VuHwRoHwUZKwIfBgUKQ2FsbHNUYWtlbhYIHwMFDE9uIENhbGwgVGltZR8EaB8FGSsCHwYFDE9uIENhbGwgVGltZRYIHwMFC0NhbGwgU3RhdHVzHwRoHwUZKwIfBgULQ2FsbCBTdGF0dXMWCB8DBQZTdGF0dXMfBGgfBRkrAh8GBQZTdGF0dXMWAmYPZBYEAgEPZBYQZg8PFgIfAAUGJm5ic3A7ZGQCAQ8PFgIfAAUJQWxpIFJhemEgZGQCAg8PFgIfAAUFIDEwMDJkZAIDDw8WAh8ABQkwIDogMCA6IDBkZAIEDw8WAh8ABQEwZGQCBQ8PFgIfAAUGJm5ic3A7ZGQCBg8PFgIfAAUGJm5ic3A7ZGQCBw8PFgIfAAUHV2FpdGluZ2RkAgIPDxYCHgdWaXNpYmxlaGRkGAEFJWN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkR3JkVXNlckluZm8PPCsADAEIAgFktZSyhpjs2V6Bvtd3MBm5baM85bgAjMj+j+ju/+4PYDY="></span><span style="display: none !important;"><input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="5CE35B4C"></span><span style="display: none !important;"><input type="hidden" name="__SCROLLPOSITIONX" id="__SCROLLPOSITIONX" value="0"></span><span style="display: none !important;"><input type="hidden" name="__SCROLLPOSITIONY" id="__SCROLLPOSITIONY" value="0"></span></form>


</body></html>