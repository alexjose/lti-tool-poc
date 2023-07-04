<!DOCTYPE html>
<html lang="en">

<head lang="en">
    <title>QA-MOC_2020_ALS Provider | Course Exercise</title>
    <link href="https://d3b9k62ia62q51.cloudfront.net/css/jquery.dataTables.min.css?ver=3.0" media="screen" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="https://d3b9k62ia62q51.cloudfront.net/img/1002/favicon.ico" />
    <link rel="stylesheet" href="https://d3b9k62ia62q51.cloudfront.net/dist/css/1002/bootstrap-4.0.0/css/bootstrap.min.css?ver=3.0" />
    <link rel="stylesheet" href="https://d3b9k62ia62q51.cloudfront.net/dist/css/1002/app-css-responsive.v2.css?ver=3.0" />
    <link href="https://d3b9k62ia62q51.cloudfront.net/css/ca5580c0375e106ae24da5a5c575e8b9.css?ver=3.0" media="screen" rel="stylesheet" />
    <link href="https://d3b9k62ia62q51.cloudfront.net/css/bootstrap-select.min.css?ver=3.0" media="screen" rel="stylesheet" />
    <link rel="stylesheet" href="https://d3b9k62ia62q51.cloudfront.net/dist/css/font-awesome.min.css?ver=3.0" />
    <link rel="stylesheet" href="https://d3b9k62ia62q51.cloudfront.net/dist/css/common.css?ver=3.0" />
    <link rel="stylesheet" href="https://d3b9k62ia62q51.cloudfront.net/dist/css/dispatchversion.css?version=3.0" />
    <link rel="stylesheet" type="text/css" href="https://d3b9k62ia62q51.cloudfront.net/dist/css/add_participants.css?v=3.0" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://d3b9k62ia62q51.cloudfront.net/dist/css/users/custom.css?ver=3.0" />

    <link rel="stylesheet" href="https://d3b9k62ia62q51.cloudfront.net/dist/css/font-awesome.min.css?ver=3.0" />
    <link href="https://d3b9k62ia62q51.cloudfront.net/css/jquery.dataTables.min.css?ver=3.0" media="screen" rel="stylesheet" type="text/css" />
    <link href="https://d3b9k62ia62q51.cloudfront.net/css/bootstrap.min.css?ver=3.0" media="screen" rel="stylesheet" type="text/css" />
    <link href="https://d3b9k62ia62q51.cloudfront.net/css/style.css?v=3.0" media="screen" rel="stylesheet" type="text/css" />
    <style type="text/css">
        a.standard-btn {
            background: #0072BC;
            padding: 5px 16px;
            color: #ffffff;
            border-radius: 2px;
            text-decoration: none;
        }

        h1.modal-title {
            font-size: 18px;
            font-style: normal;
            font-weight: 500;
        }

        .course_step1 {
            background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/launchcourse_bg_ecard_1002.png") no-repeat scroll left top 10px;
            float: left;
            min-height: 110px;
            width: 80px;
        }

        .course_step1_selected {
            background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/launchcourse_bg_hover_ecard_1002.png") no-repeat scroll left top 10px;
            float: left;
            min-height: 110px;
            width: 80px;
        }


        .course_step2 {
            background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/launchcourse_bg_ecard_1002.png") no-repeat scroll left -65px top 10px;
            float: left;
            min-height: 100px;
            padding: 110px 0 0;
            text-align: center;
            width: 150px;
        }

        .course_step2_selected {
            background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/launchcourse_bg_hover_ecard_1002.png") no-repeat scroll left -66px top 10px;
            float: left;
            min-height: 100px;
            padding: 110px 0 0;
            text-align: center;
            width: 150px;
        }

        .course_step2_1 {
            background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/launchcourse_bg_1002.png") no-repeat scroll left -89px top 10px;
            float: left;
            min-height: 100px;
            padding: 110px 0 0;
            text-align: center;
            width: 100px;
        }

        .course_step2_1_selected {
            background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/launchcourse_bg_hover_ecard_1002.png") no-repeat scroll left -89px top 10px;
            float: left;
            min-height: 100px;
            padding: 110px 0 0;
            text-align: center;
            width: 100px;
        }

        .course_step3 {
            background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/launchcourse_bg_ecard_1002.png") no-repeat scroll left -200px top 10px;
            float: left;
            min-height: 100px;
            padding: 110px 0 0;
            text-align: center;
            width: 150px;
        }

        .course_step3_selected {
            background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/launchcourse_bg_hover_ecard_1002.png") no-repeat scroll left -200px top 10px;
            float: left;
            min-height: 100px;
            padding: 110px 0 0;
            text-align: center;
            width: 150px;
        }

        .course_step3_1 {
            background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/launchcourse_bg_ecard_1002.png") no-repeat scroll left -202px top 10px;
            float: left;
            min-height: 100px;
            padding: 110px 0px 0px 8px;
            text-align: center;
            width: 120px;
        }

        .course_step3_1_selected {
            background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/launchcourse_bg_hover_ecard_1002.png") no-repeat scroll left -202px top 10px;
            float: left;
            min-height: 100px;
            padding: 110px 0px 0px 25px;
            text-align: center;
            width: 120px;
        }

        .course_step4 {
            background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/launchcourse_bg_ecard_1002.png") no-repeat scroll left -340px top 10px;
            float: left;
            min-height: 100px;
            padding: 110px 0 0;
            text-align: center;
            width: 150px;
        }

        .course_step4_selected {
            background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/launchcourse_bg_hover_ecard_1002.png") no-repeat scroll left -340px top 10px;
            float: left;
            min-height: 100px;
            padding: 110px 0 0;
            text-align: center;
            width: 150px;
        }

        .course_step4_1 {
            background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/launchcourse_bg_ecard_1002.png") no-repeat scroll left -340px top 10px;
            float: left;
            min-height: 100px;
            padding: 110px 10px 0px 15px;
            text-align: center;
            width: 115px;
        }

        .course_step4_2 {
            background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/launchcourse_bg_ecard_1002.png") no-repeat scroll left -340px top 10px;
            float: left;
            min-height: 100px;
            padding: 110px 10px 0px 0px;
            text-align: center;
            width: 172px;
        }

        .course_step4_1_selected {
            background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/launchcourse_bg_hover_ecard_1002.png") no-repeat scroll left -200px top 9px;
            float: left;
            min-height: 100px;
            padding: 110px 10px 0px 15px;
            text-align: center;
            width: 166px;
        }

        .course_step5 {
            background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/launchcourse_bg_ecard_1002.png") no-repeat scroll left -465px top 10px;
            float: left;
            min-height: 100px;
            padding: 110px 0 0;
            text-align: center;
            width: 150px;
        }

        .course_step5_selected {
            background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/launchcourse_bg_hover_ecard_1002.png") no-repeat scroll left -465px top 10px;
            float: left;
            min-height: 100px;
            padding: 110px 0 0;
            text-align: center;
            width: 150px;
        }

        .course_step6 {
            background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/launchcourse_bg_ecard_1002.png") no-repeat scroll left -600px top 10px;
            float: left;
            min-height: 100px;
            padding: 110px 0 0;
            text-align: center;
            width: 150px;
        }

        .course_step6_selected {
            background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/launchcourse_bg_hover_ecard_1002.png") no-repeat scroll left -600px top 10px;
            float: left;
            min-height: 100px;
            padding: 110px 0 0;
            text-align: center;
            width: 150px;
        }

        .find_training a {
            color: #fff;
            position: absolute;
            text-decoration: none;
            top: 0;
            right: 0;
            background: #0072BC;
            width: 46px;
            line-height: 36px;
            text-align: center;
            border-radius: 4px;
        }

        .ecard_certificate p {
            margin-bottom: 12px !important;
        }

        .modal-footer.ecard_certificate a {
            border-radius: 6px !important;
            text-transform: uppercase;
        }

        .modal-body.modal-body-certificate.ecard_certificate {
            margin-bottom: 0px;
        }

        .modal-footer.ecard_certificate a.red_btn:hover {
            background-color: #53B4D5 !important;
            color: #ffffff;
        }

        @media only screen and (max-width: 767px) {
            .course_step1 {
                min-height: 75px;
                width: 100%;
                background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/1002/course.jpg") no-repeat center top 10px;
            }

            .course_step1_selected {
                min-height: 75px;
                width: 100%;
                background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/1002/course_hover.jpg") no-repeat center top 10px;
            }

            .course_step5 {
                width: 100%;
                background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/1002/eCard-icon.png") no-repeat center top 10px;
                text-align: center;
                padding: 65px 0 0;
            }

            .course_step2_selected {
                width: 100%;
                background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/1002/survey_hover.jpg") no-repeat center top 10px;
                text-align: center;
            }

            .course_step2_1_selected {
                width: 100%;
                background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/1002/survey_hover.jpg") no-repeat center top 10px;
                text-align: center;
            }

            .course_step3_selected {
                width: 100%;
                background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/1002/certificate_hover.jpg") no-repeat center top 10px;
                text-align: center;
            }

            .course_step3_1_selected {
                width: 100%;
                background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/1002/certificate_hover.jpg") no-repeat center top 10px;
                text-align: center;
            }

            .course_step4_selected {
                width: 100%;
                background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/1002/claim_hover.jpg") no-repeat center top 10px;
                text-align: center;
            }

            .course_step4_1_selected {
                width: 100%;
                background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/1002/claim_hover.jpg") no-repeat center top 10px;
                text-align: center;
            }

            .course_step4_2_selected {
                width: 100%;
                background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/1002/claim_hover.jpg") no-repeat center top 10px;
                text-align: center;
            }

            .course_step5_selected {
                width: 100%;
                background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/1002/eCard-icon_hover.png") no-repeat center top 10px;
                text-align: center;
                padding: 65px 0 0;
            }

            .course_step6 {
                width: 100%;
                background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/1002/email_icon.png") no-repeat center top 10px;
                text-align: center;
                padding: 112px 0 0;
            }

            .course_step6_selected {
                width: 100%;
                background: rgba(0, 0, 0, 0) url("https://preprod-rqi1stop.laerdalblr.in/img/1002/email_icon_hover.png") no-repeat center top 10px;
                text-align: center;
                padding: 112px 0 0;
            }
        }
    </style>
    <link href="https://d3b9k62ia62q51.cloudfront.net/dist/css/scorm/dispatch-launch-new.css?v=3.0" media="screen" rel="stylesheet">
    <script src="https://d3b9k62ia62q51.cloudfront.net/js/8319ff2ee57a3781849b90370919e95d.js?ver=3.0" charset="utf-8"></script>

    <!-- One trust -->
    <script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" type="text/javascript" charset="UTF-8" data-domain-script="1365d418-5c4d-4166-90d8-140f47c5b1d5-test"></script>
    <script type="text/javascript">
        function OptanonWrapper() {}
    </script>
    <!-- One trust -->
    <!-- Google -->
    <script type="text/plain" src="https://www.googletagmanager.com/gtag/js?id=G-91KMFFSYV0" class="optanon-category-C0002"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-91KMFFSYV0');
    </script>
    <!-- Google -->
    <script>
        function cancelECardOrCertificatePopup(modalToClose) {
            $('#' + modalToClose).modal("hide");
        }
        $(document).ready(function() {
            $('#proceed_to_ecards').click((e) => {
                redirectAndCloseWindow('viewEcardModal', $('#proceed_to_ecards').attr('data-ecard-url'));
            });
            $('#viewEcardModal').on('show.bs.modal', function(e) {
                $('#proceed_to_ecards').attr('data-ecard-url', $(e.relatedTarget).data('ecards-url'));
                setTimeout(function() {
                    if ($('#viewEcardModal').is(':visible')) {
                        redirectAndCloseWindow('viewEcardModal', $(e.relatedTarget).data('ecards-url'));
                    }
                }, 10000);
            });

            $('#proceed_to_certificates').click((e) => {
                redirectAndCloseWindow('proceed_to_certificates', $('#proceed_to_certificates').attr('data-certificate-url'));
            });
            $('#viewCertificatesModal').on('show.bs.modal', function(e) {
                $('#proceed_to_certificates').attr('data-certificate-url', $(e.relatedTarget).data('certificate-url'));
                setTimeout(function() {
                    if ($('#viewCertificatesModal').is(':visible')) {
                        redirectAndCloseWindow('viewCertificatesModal', $(e.relatedTarget).data('certificate-url'));
                    }
                }, 10000);
            });

            function redirectAndCloseWindow(id, url) {
                var newWin = window.open(url, '_blank');
                if (newWin && !newWin.closed && typeof newWin.closed != 'undefined') {
                    $('#' + id).modal("hide");
                    window.close();
                }
            }
        });
    </script>
</head>

<body oncontextmenu="return false;">
    <div class="launch-topheader">
        <div class="container launch-main">
            <div>
                <img src="https://preprod-rqi1stop.laerdalblr.in/img/elearning-logo_1002.png" alt="RQI Logo" aria-label="RQI Logo" />
            </div>
            <div class="language-dropdown">
            </div>
        </div>
    </div>
    <div id="main-container" class="clearfix">
        <div class="trpopup_loader" id="trpopup_loader"><!-- this is used to show loader on any ajax request --></div>
        <div id="page-wrap">
            <!-- / / SECTION / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / /  -->
            <div class="clearfix">
                <!-- / /BEGIN PAGE HEADING / / / / / / / / / / / / / / / / / / / / / /-->
                <div class="page-heading col-sm-12 clearfix alt-bg none">
                    <div class="container pl0 pr0">
                        <div class="heading-text" id="heading-content">
                            <!--PAGE TITLE-->
                            <h1 class="entry-title inner-maintitle">QA-MOC_2020_ALS Provider</h1>
                            <span>Dispatch Version 6.0</span>
                        </div>
                    </div>
                </div>
                <!-- / / END PAGE-HEADING / / / / / / / / / / / / / / / / / / / / / /-->
                <!--/ /END ROW / / / / / / / / / / / / / / / / / / / / / / / / / / / / /-->

            </div>
            <!--// END CONTAINER - SECTION  //-->
            <!--SECTION START-->
            <div class="container">

                <div class="inner-page-wrap has-left-sidebar has-one-sidebar row clearfix pt10">
                    <div class="page type-page col-sm-10 mobile-clear ipad-fullwidth mob-lr0 1 ">
                        <!-- course activation date start -->
                        <div class="col-sm-12 pad0 mar_bot">
                            <div class="col-sm-12 pad0" style="font-size:16px;">
                                <strong class="mobile-ml-15">Start : </strong> 2023/05/18
                            </div>
                        </div>
                        <!-- course activation date end -->
                        <div class="page-content innerpageborder-rbox pb0 clearfix mb-20">

                            <!-- Table content start -->

                            <!-- course description start -->
                            <div class="col-sm-12 new_cont">
                                <p>QA-MOC_2020_ALS Provider</p>
                            </div>

                            <div class="referncelibraryCont">
                                <ul class="support-list">
                                    <li>
                                        <a href="https://samishanmaurya.laerdalblr.in/view_library/1039?secret=NTAzMTcyODU3XzE2ODQ0NzkzNDY=" aria-label="Go to Reference Library opens in new window" target="_blank"><span><em class="fa fa-external-link fa-xm"></em></span> Go to Reference Library </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-12 marbottom minHeight" style="position:relative;">
                                <div class="hori_line">&nbsp;</div>
                                <!--STEP 1-->
                                <div class="course_step1"></div>


                                <div class="course_step4">
                                    <a href="#" role="button" data-target="#cmeEvaluationValidation" data-toggle="modal" class="sf-button standard outline_btn standard" style="margin:0px 12px !important;" aria-label="Claim CME/CE For QA-MOC_2020_ALS Provider open as dialog box">Claim CME/CE</a>
                                </div>

                                <div class="course_step5_selected">
                                    <a class="sf-button standard accent standard" style="text-transform:none;" title="View eCard" href="#" data-ecards-url="https://qa-maurya-rqi1stop.laerdalblr.in/certificate/ecard/3022170?sess=MTY4NDQ3OTM0Ng==" data-target="#viewEcardModal" data-toggle="modal" data-backdrop="static" data-keyboard="false" aria-label="View eCard of QA-MOC_2020_ALS Provider opens in new window">View eCard </a>

                                </div>
                                <div class="course_step6_selected">
                                    <a class="sf-button accent standard" style="text-transform:none;" title="View eCard" href="#" id="go-emailcard" data-target="#confirm-email" data-toggle="modal" data-backdrop="static" data-keyboard="false" aria-label="Email eCard of QA-MOC_2020_ALS Provider">Email eCard</a>
                                </div>
                            </div>
                            <!-- course description end -->


                            <!-- TABLE START -->

                            <div class="clear-accordion"></div>


                            <!-- RQI Courses will have the TODO list within the CDP -->
                            <div class="panel-group panel-mid" id="accordion">
                                <table class="table panel panel-default" id="rqiCourseTodoList" aria-describedby="accordion" aria-label="Topic table For QA-MOC_2020_ALS Provider">
                                    <thead class="rowDivHeader">
                                        <tr>
                                            <th class="cellDivHeader1 " scope="col">
                                                QA-MOC_2020_ALS Provider </th>
                                            <th class="cellDivHeader1" scope="col">
                                                Type </th>
                                            <th class="cellDivHeader1" scope="col">
                                                Status </th>
                                            <th class="cellDivHeader1" scope="col">
                                                ACTION </th>
                                        </tr>
                                    </thead>

                                    <tbody id="collapse1" class="panel-collapse collapse in">
                                        <tr class="rowDiv   ">
                                            <td class="cellDiv" title="QA-MOC_2020_ALS Provider">
                                                ALS Session 2
                                            </td>
                                            <td class="cellDiv" title="Type"> Required </td>
                                            <td class="cellDiv" title="Status">

                                                Due 2023/06/30 </td>
                                            <td class="cellDiv action" title="ACTION">

                                                <a href="https://qa-maurya-rqi1stop.laerdalblr.in/scorm/dispatchlaunchlti/3022170/1093b53c42f115cc6218e9641f99241777016b4acaf38998f5a79a8eb8dad790dddd21d0493fa7485a3a337c86aaf1766ae2ea437ce5c2fe7ea4cbf5c83c60af?topic=module2&status=current&test_today_date=2023-05-19&sourceId=16425b02-46f5-ed11-907c-000d3ab39643|module2|1680296400000|1688158799999&courseLmsData=MjAwMDIxOF8yX2ZhaWxlZF8=&dispatchVersion=6.0" class="sf-button standard accent standard" aria-label="Start For ALS Session 2" data-topicid="module2" data-topic="ALS Session 2">
                                                    <span class="text" data-topicid="module2" data-topic="ALS Session 2"><em class="fa fa-play"></em>&nbsp;Start</span>
                                                </a>


                                            </td>
                                        </tr>
                                        <!-- End Current ToDo list -->


                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12 complete_btn_pad">
                                <input type="button" id="hideshowbtn" class="sf-button standard accent" name="Completed" value="Completed Activities" role="button" aria-expanded="false" />
                                <div class="arrowClass">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" aria-label="toggle" href="#collapse2">
                                        <span></span></a>
                                </div>
                            </div>
                            <div class="panel-group panel-mid hideclass" id="past_todo">
                                <table class="table panel panel-default" aria-describedby="course-name" aria-label="completed activities table For QA-MOC_2020_ALS Provider">
                                    <thead class="panel-heading-new rowDivHeader completed-activity-header">
                                        <tr>
                                            <th scope="col" class="cellDivHeader1">Completed Activities</th>
                                            <th scope="col" class="cellDivHeader1">
                                                Completed on</th>
                                            <th scope="col" class="cellDivHeader1">Marks</th>
                                            <th scope="col" class="cellDivHeader1">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr class="rowDiv">
                                            <td class="cellDiv" title="Completed Activities">
                                                <div class="separator">
                                                    <span class="restrict-text">ALS Session 1</span>
                                                </div>
                                            </td>
                                            <td class="cellDiv" title="Completed on">
                                                <div class="separator">
                                                    <span class="restrict-text">
                                                        2023/02/07</span>
                                                </div>
                                            </td>
                                            <td class="cellDiv" title="Score">
                                                <div class="separator">
                                                    <span class="restrict-text">100% </span>
                                                </div>
                                            </td>
                                            <td class="cellDiv review" title="Action">
                                                <div class="separator">
                                                    <span class="restrict-text">
                                                        <a href="https://qa-maurya-rqi1stop.laerdalblr.in/scorm/dispatchlaunchlti/3022170/1093b53c42f115cc6218e9641f99241777016b4acaf38998f5a79a8eb8dad790dddd21d0493fa7485a3a337c86aaf1766ae2ea437ce5c2fe7ea4cbf5c83c60af?topic=module1&status=past&sourceId=16425b02-46f5-ed11-907c-000d3ab39643|module1|1672520400000|1680296399999&courseLmsData=MjAwMDIxOF8yX2ZhaWxlZF8=&dispatchVersion=6.0" class="review_btn" aria-label="Review For ALS Session 1">
                                                            <span class="text">Review</span>
                                                        </a>

                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- End Current ToDo list -->
                            </div>
                            <!-- END RQI Courses -->

                        </div>
                    </div>
                    <!-- sidebar start -->
                    <div class="sidebar left-sidebar col-sm-2 col-xs-12 res-768">
                        <div class="stickyBanner sticky-banner mt-32 t-align">
                            <a href="https://shopcpr.heart.org/reference-tools?utm_source=rqi1s&utm_medium=banner_programs&utm_campaign=10_off" target="_blank"><img alt="Shop Now" aria-label="Shop Now opens in new window" src="https://d3b9k62ia62q51.cloudfront.net/img/sticky_banner.png"></a>
                        </div>
                    </div>
                    <!-- sidebar end -->

                </div>
                <!-- SECTION END -->
            </div>
        </div>
        <!--// CLOSE #main-container //-->
        <!-- Modal End -->

        <!--Course Cancelled Modal Start-->
        <div class="modal modal-courselisting fade" id="video-player" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog admin-modal-popup video-model">
                <div class="modal-content">

                </div>
            </div>
        </div>

        <!-- Modal Start for view certificate -->
        <div class="modal modal-courselisting fade" id="embedVideoPlaye" role="dialog" aria-labelledby="embedVideoPlaye_label" aria-hidden="true">
            <div class="modal-dialog admin-modal-popup certificate-status-model">
                <div class="modal-content">
                    <div class="modal-header">
                        <button data-dismiss="modal" class="close video-close" type="button"><span aria-hidden="true" aria-label="Close">×</span><span class="sr-only">Close</span>
                        </button>
                        <h1 class="modal-title" id="embedVideoPlaye_label"> Course Completion Certificate</h1>
                    </div>

                    <div class="modal-body modal-body-certificate">
                        <div class="full clearfix">
                            You have not yet completed the required course evaluation. After you complete all required course content and the evaluation, you will be able to view, download, and print your Course Completion Certificate. </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
        <!-- Modal Start for view certificate -->
        <div class="modal modal-courselisting fade" id="cmeEvaluationValidation" role="dialog" aria-labelledby="cmeEvaluationValidation_label" aria-hidden="true">
            <div class="modal-dialog admin-modal-popup certificate-status-model">
                <div class="modal-content">
                    <div class="modal-header">
                        <button data-dismiss="modal" class="close video-close" type="button" id="cmeEvaluationValidationClose"><span aria-hidden="true" aria-label="Close">×</span><span class="sr-only">Close</span>
                        </button>
                        <h1 class="modal-title" id="cmeEvaluationValidation_label"> Claim CME/CE Credit</h1>
                    </div>

                    <div class="modal-body modal-body-certificate">
                        <div class="full clearfix">
                            You must complete the required course content to view, download, and print your CME/CE certificate. </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal modal-courselisting fade" id="course_completion" role="dialog" aria-labelledby="course_completion_label" aria-hidden="true">
            <div class="modal-dialog admin-modal-popup certificate-status-model">
                <div class="modal-content">
                    <div class="modal-header">
                        <button data-dismiss="modal" class="close video-close" type="button" id="course_completion_close"><span aria-hidden="true" aria-label="Close">×</span><span class="sr-only">Close</span>
                        </button>
                        <h1 class="modal-title" id="course_completion_label"> Download Course Completion Certificate</h1>
                    </div>

                    <div class="modal-body modal-body-certificate">
                        <div class="full clearfix">
                            You have not yet completed the course. After you complete all required course content, you will be able to view, download, and print your Course Completion Certificate. </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal End -->
        <!-- Modal Start -->
        <div class="modal modal-courselisting fade" id="myModal2" role="dialog" aria-labelledby="myModal2Form" aria-hidden="true">
            <div class="modal-dialog modal-dialog-email">
                <div class="modal-content" id="myModal2Form">
                </div>
            </div>
        </div>
        <!-- Modal End -->


        <div class="modal modal-courselisting fade" id="creditEvaluationValidation" role="dialog" aria-labelledby="creditEvaluationValidation_label" aria-hidden="true">
            <div class="modal-dialog admin-modal-popup certificate-status-model">
                <div class="modal-content">
                    <div class="modal-header">
                        <button data-dismiss="modal" class="close video-close" type="button" aria-label="Close For Claim eCard" id="creditEvaluationValidationClose">
                            <span aria-hidden="true" aria-label="Close">×</span><span class="sr-only">Close</span>
                        </button>
                        <h1 class="modal-title" id="creditEvaluationValidation_label"> Claim eCard</h1>
                    </div>

                    <div class="modal-body modal-body-certificate">
                        <div class="full clearfix">
                            You are not compliant. Please complete modules </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal modal-courselisting fade" id="creditEvaluationValidationMsCheck" role="dialog" aria-labelledby="creditEvaluationValidationMsCheck_label" aria-hidden="true">
            <div class="modal-dialog admin-modal-popup certificate-status-model">
                <div class="modal-content">
                    <div class="modal-header">
                        <button data-dismiss="modal" class="close video-close" type="button" aria-label="Close For Claim eCard" id="creditEvaluationValidationMsCheckClose">
                            <span aria-hidden="true" aria-label="Close">×</span><span class="sr-only">Close</span>
                        </button>
                        <h1 class="modal-title" id="creditEvaluationValidationMsCheck_label"> Claim eCard</h1>
                    </div>

                    <div class="modal-body modal-body-certificate">
                        <div class="full clearfix">
                            You have not yet completed the skills portion of the course. After you complete skills portion, you will be able to view, download, and print your eCard. </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal modal-courselisting fade" id="course_survey" role="dialog" aria-labelledby="course_survey_label" aria-hidden="true">
            <div class="modal-dialog admin-modal-popup certificate-status-model">
                <div class="modal-content">
                    <div class="modal-header">
                        <button data-dismiss="modal" class="close video-close" type="button" aria-label="Close For Evaluation" id="course_survey_close">
                            <span aria-hidden="true" aria-label="Close">×</span><span class="sr-only">Close</span>
                        </button>
                        <h1 class="modal-title" id="course_survey_label">Evaluation</h1>
                    </div>

                    <div class="modal-body modal-body-certificate">
                        <div class="full clearfix">
                            Evaluation for this course has been completed </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal modal-courselisting fade" id="complete_course_topics" role="dialog" aria-labelledby="complete_course_topics_label" aria-hidden="true">
            <div class="modal-dialog admin-modal-popup certificate-status-model">
                <div class="modal-content">
                    <div class="modal-header">
                        <button data-dismiss="modal" class="close video-close" type="button" aria-label="Close For Course Evaluation" id="complete_course_topics_close">
                            <span aria-hidden="true" aria-label="Close">×</span><span class="sr-only">Close</span>
                        </button>
                        <h1 class="modal-title" id="complete_course_topics_label">Course Evaluation</h1>
                    </div>

                    <div class="modal-body modal-body-certificate">
                        <div class="full clearfix">
                            After completion of all content modules, you must take the course evaluation to complete your course. </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal modal-courselisting fade" id="claimEcardWithOutEvaluation" role="dialog" aria-labelledby="claimEcardWithOutEvaluation_label" aria-hidden="true">
            <div class="modal-dialog admin-modal-popup certificate-status-model">
                <div class="modal-content">
                    <div class="modal-header">
                        <button data-dismiss="modal" class="close video-close" type="button" aria-label="Close For View eCard" id="claimEcardWithOutEvaluationClose">
                            <span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                        <h1 class="modal-title" id="claimEcardWithOutEvaluation_label">View eCard</h1>
                    </div>

                    <div class="modal-body modal-body-certificate">
                        <div class="full clearfix">
                            You have not yet completed the required course evaluation. After you complete all required course content and the evaluation, you will be able to view, download, and print your eCard. </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Start for Notification messages-->
        <div class="modal modal-courselisting fade" id="notificationsModal" role="dialog" aria-labelledby="notificationsModal_label" aria-hidden="true">
            <div class="modal-dialog" style="padding-top: 150px !important;">
                <div class="modal-content">
                    <div class="share-modelwidnow">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close For Notifications" id="notificationsModalClose">
                                <span aria-hidden="true">×</span><span class="sr-only">Close</span>
                            </button>
                            <h1 class="modal-title" id="notificationsModal_label">Notifications</h1>
                        </div>
                        <div class="modal-body terms-modelbody mt10-terms" style="border: 0px !important;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->

        <!-- Modal Start -->
        <div class="modal modal-courselisting fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-email">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close For Find Hands-On Sessions" id="myModelClose">
                            <span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                        <h1 class="modal-title" id="myModalLabel">Find Hands-On Sessions</h1>
                    </div>
                    <div class="modal-body modal-body-certificate">
                        <div class="full clearfix">
                            <!-- Skill session widget start -->
                            <div class="skillsession-widget">
                                <div class="skillsession-innerbox">
                                    <p>Contact an AHA Training Center in your area for more details or to schedule a hands-on session.</p>
                                    <div class="locateinusa-wrap pt10 text-center">
                                        <a style="float:none" href="-" target="_blank" class="sf-button standard accent standard details-btn us_skill_action" aria-label="US Training Centers For Find Hands-On Sessions">US Training Centers</a>
                                    </div>
                                    <div class="locateinusa-wrap text-center">
                                        <a style="float:none" href="-" target="_blank" class="sf-button standard accent standard details-btn" aria-label="International Training Centers For Find Hands-On Sessions" id="myModelLocateOutUsa">International Training Centers</a>
                                    </div>

                                </div>
                            </div>
                            <!-- Skill session widget end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
        <!--Claim eCard-->
        <div class="modal modal-courselisting fade" id="claimEcard" role="dialog" aria-labelledby="claimEcard_label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-email">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close For Claim eCard" id="claimEcardClose">
                            <span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                        <h1 class="modal-title" id="claimEcard_label">Claim eCard</h1>
                    </div>
                    <div class="modal-body modal-body-certificate" id="getecardsuccess">
                        <p>Your eCard has been assigned and is ready to be claimed.</p>
                        <a style="float:none" id="getEcard" href="#" role="button" target="_blank" class="sf-button standard accent standard details-btn" onClick="window.location.href = window.location.href" aria-label="Claim eCard">Claim eCard</a>
                        <a class="sf-button standard accent standard btn-model-mobile" data-dismiss="modal" href="#" role="button" target="_self" onClick="window.location.href = window.location.href" aria-label="Close For Claim eCard"><span class="text">Close</span></a>
                    </div>
                    <div class="modal-body modal-body-certificate" id="errorMsg">
                        <p>The eCard could not be created at this time due to technical issues. Please try again.</p>
                        <p>If you continue to experience issues, please contact your system administrator.</p>
                        <a class="sf-button standard accent standard btn-model-mobile" data-dismiss="modal" href="#" role="button" target="_self" aria-label="Close For Claim eCard" id="claimEcardCloseLast"><span class="text">Close</span></a>
                    </div>
                    <div class="loading" id="loading">
                        <p>Assigning eCard...</p>
                        <img src="https://qa-maurya-rqi1stop.laerdalblr.in/img/ajax-loader.gif" alt="loading" height="42" width="42">
                        <br /><br />
                    </div>
                </div>
            </div>
        </div>

        <!--View eCard Alert popup-->
        <div class="modal modal-courselisting fade" id="viewEcardModal" role="dialog" aria-labelledby="viewEcardModal_label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-email">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="viewEcardModal_label">Alert</h1>
                    </div>
                    <div class="modal-body modal-body-certificate ecard_certificate">
                        <p>
                        <p>You are about to navigate from this page</p>
                        <p>By clicking on Proceed, this window will be closed and you will be redirected to the Certificate Site to view the eCard. If you are idle for 10 sec the current window will be closed.</p>
                        <p>You can come back to your course details page by clicking on the launch button against your course.</p>
                        </p>
                    </div>

                    <div class="modal-footer ecard_certificate">
                        <a onclick="cancelECardOrCertificatePopup('viewEcardModal')" type="button" class="btn btn-default grey_btn mar0 btn-archive">Cancel</a>
                        <a id="proceed_to_ecards" type="button" class="btn btn-primary-archive red_btn btn-archive">Proceed</a>
                    </div>
                </div>
            </div>
        </div>
        <!--View eCard Alert popup end -->

        <!--View Certificate Alert popup -->
        <div class="modal modal-courselisting fade" id="viewCertificatesModal" role="dialog" aria-labelledby="viewCertificatesModal_label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-email">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="viewCertificatesModal_label">Alert</h1>
                    </div>
                    <div class="modal-body modal-body-certificate ecard_certificate">
                        <p>
                        <p>You are about to navigate from this page</p>
                        <p>By clicking on Proceed, this window will be closed and you will be redirected to the Certificate Site to view the Certificate. If you are idle for 10 sec the current window will be closed.</p>
                        <p>You can come back to your course details page by clicking on the launch button against your course.</p>
                        </p>
                    </div>

                    <div class="modal-footer ecard_certificate">
                        <a onclick="cancelECardOrCertificatePopup('viewCertificatesModal')" type="button" class="btn btn-default grey_btn mar0 btn-archive">Cancel</a>
                        <a id="proceed_to_certificates" type="button" class="btn btn-primary-archive red_btn btn-archive">Proceed</a>
                    </div>
                </div>
            </div>
        </div>
        <!--View Certificate Alert popup -->

        <!-- view order details popup -->
        <div class="modal" id="orderDetails" role="dialog" aria-labelledby="orderDetailsLabel" aria-hidden="true">
            <div class="modal-dialog admin-modal-popup">
                <div class="modal-content">
                    <div class="modal-header header-order-details">
                        <button data-dismiss="modal" class="close video-close" type="button" id="orderDetailsClose" aria-label="Close"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                        <h1 class="modal-title" id="orderDetailsLabel">View Order Details</h1>
                    </div>
                    <div class="modal-body modal-body-certificate fixed-height">

                        <div class="full clearfix">
                            <div class="print-order">
                                <div>
                                    <h2 class="order-id">Order ID</h2>
                                </div>
                                <div>
                                    <div class="print-icons">
                                        <a href="/mycourse/downloadorderdetails/"><span class="vector"><img src="/dist/images/Vector.png" alt=""></span></a>
                                    </div>
                                </div>
                            </div>

                            <h2 class="order-date">Order Date and Time</h2>
                            <h2 class="order-date">Subscription Plan</h2>
                            <h2 class="course-name">Course Name</h2>
                            <h2 class="amount-paid">Amount Paid</h2>
                            <h2 class="payment-mode">Payment Mode</h2>
                            <h2 class="ref-number">Transaction Ref Number</h2>
                            <h2 class="purchase-status">Purchase Status</h2>
                            <em class="fa fa-solid fa-circle order_success"></em>
                            <hr>
                            <div class="contact-suport">
                                <h3>Contact Support</h3>
                                <div>
                                    <a class="contact_email" href="mailto:"></a>
                                </div>
                                <div>
                                    <a class="contact_tele" href="tel:"></a>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="modal-footer order-details-footer">
                        <button type="button" class="btn btn-secondary btn-course btn-view-details" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>

        <!--- Payment Success modal -->
        <div id='success-popup-lms' class="modal fade" role="dialog" tabindex="-1">
            <div class="modal-content">
                <div class="success-icon">
                    <em class='fa fa-check-circle fa-succcess-confirm'></em>
                </div>
                <div class="modal-header">
                    <h4 class="modal-title-archive"><strong></strong></h4>
                    <div class='order-receipt'>
                        <button data-bb-handler="launch" onclick="" type="button" class="btn btn-default grey_btn mar0  btn-order-receipt" aria-label="Order Receipt downloads Pdf">ORDER RECEIPT</button>
                    </div>
                </div>
                <div class="modal-body modal-body-reciept">
                    <div class="archive-body"><strong>Your course has been activated and ready to launch</strong></div>
                    <div id="validity_info"><span>Subscription valid till </span></div>
                </div>
                <div class="modal-footer-archive text-center pad0">
                    <button data-bb-handler="close" type="button" data-dismiss="modal" class="btn btn-default grey_btn btn-order-close">Close</button>
                </div>
            </div>
        </div>

        <!-- confirm-email modal popup -->
        <div class="modal fade" tabindex="-1" id="confirm-email" role="dialog">
            <form method="post" id="emailUserEcard" name="emailUserEcard" action="" enctype="multipart/form-data">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title">Email eCard</h4>
                        </div>

                        <div class="modal-body">
                            <div id="email-card">
                                <div class="alert alert-danger" id="widget_alert" role="alert">
                                    Please note: You can email the eCard to yourself at a later time using the "Email eCard" option on the Course Launch page or the Programs listing page. </div>
                                <p>Please provide an email address to receive your eCard / eCredential</p>
                                <div class="mt-20 mb-20">
                                    <label class="d-block"><strong>Course Name</strong></label>
                                    <span>QA-MOC_2020_ALS Provider</span>
                                </div>
                                <div>
                                    <label class="d-block"><strong>Email Address</strong></label>
                                    <a class="f-16" id="recieve-ecard">Enter email address to receive eCard</a>

                                </div>
                            </div>

                            <div id="edit-email-card" style="display: none;">
                                <div class="form-group has-feedback">
                                    <label for="">Enter email address <span>*</span></label>
                                    <input class="form-control" placeholder="" id="email_ecard_user" name="email_ecard_user" value="" data-fv-field="" oncopy="return false" onpaste="return false">
                                </div>
                                <div class="form-group has-feedback">
                                    <label for=""> Re-enter email address <span>*</span></label>
                                    <input class="form-control" placeholder="" id="email_ecard_user_confirm" name="email_ecard_user_confirm" value="" data-fv-field="" oncopy="return false" onpaste="return false">
                                </div>
                            </div>

                            <div id="ecard-email-success" class="text-center" style="display: none;">
                                <div class="mb-15">
                                    <img src="/dist/images/success_icon.png" alt="">
                                </div>
                                <label><strong>Your ecard emailed successfully</strong></label>
                            </div>
                            <div id="ecard-email-failure" class="text-center">
                                <div class="mb-15">
                                    <img src="/dist/images/failure_icon.png" alt="">
                                </div><br>
                                <label><strong class="failed-resp-msg"></strong></label>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <div class="cta-wrapper">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <button type="submit" id="send-email" class="btn btn-primary btn-confirm-email" data-dismiss="">Send Email</button>
                            </div>
                            <div id="success-close" class="text-center" style="display: none;">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- @tw/tr-modal -->
        <div class="modal fade add-participant-modal" id="add-participant-modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content"></div>
            </div>
        </div> <!--// CLOSE #main-container //-->
    </div>
    
    <script type="text/javascript" src="https://d3b9k62ia62q51.cloudfront.net/js/admin/formValidation.js?ver=3.0"></script>
    <script type="text/javascript" src="https://d3b9k62ia62q51.cloudfront.net/js/admin/formvalidation.bootstrap.js?ver=3.0"></script>
    <script src="https://d3b9k62ia62q51.cloudfront.net/dist/js/custom/scorm/dispatch-launch-new.js?v=3.0"></script>
    <script type="text/javascript" src="https://d3b9k62ia62q51.cloudfront.net/dist/js/custom/teamreporterapp/teamreporter.js?v=3.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" integrity="sha384-d3UHjPdzJkZuk5H3qKYMLRyWLAQBJbby2yr2Q58hXXtAGF8RSNO9jpLDlKKPv5v3" crossorigin="anonymous"></script>

</body>

</html>