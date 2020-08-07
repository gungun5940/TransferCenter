<?php
include('header.php');
?>

<body id="jsn-master" class="jsn-textstyle-custom jsn-color-blue jsn-direction-ltr jsn-desktop jsn-joomla-25  jsn-com-content jsn-view-featured jsn-itemid-101 jsn-homepage">
    <a name="top" id="top"></a>
    <div id="jsn-page">
        <div id="jsn-body">
            <div id="jsn-body-inner">
                <div id="jsn-hs-slideshow" class="row-fluid" ?>
                    <div class=" jsn-modulecontainer">
                        <div class="jsn-modulecontainer_inner">
                            <div class="jsn-modulecontent">

                                <!-- START REVOLUTION SLIDER ver. 2.0.4 -->

                                <div id="rev_slider_wrapper" class="rev_slider_wrapper" style="float:right;border-radius: 25px;background-color:#E9E9E9;padding:0px;margin-left:0px;margin-right:0px;margin-top:10px;margin-bottom:0px;height:365px;width:1200px;direction:ltr;">
                                    <div id="rev_slider" class="rev_slider" style="display:none;height:365px;width:1200px;">
                                        <ul>

                                            <li data-transition="random" data-slotamount="1" data-masterspeed="300">

                                                <img src="img/blue.png" style="height:365px;width:1200px;">

                                            </li>

                                            <li data-transition="random" data-slotamount="1" data-masterspeed="300">

                                                <img src="img/red.png" style="height:365px;width:1200px;">

                                            </li>

                                            <li data-transition="random" data-slotamount="1" data-masterspeed="300">

                                                <img src="img/green.png" style="height:365px;width:1200px;">

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    var tpj = jQuery;


                                    var revapi1;

                                    tpj(document).ready(function() {

                                        if (tpj.fn.cssOriginal != undefined)
                                            tpj.fn.css = tpj.fn.cssOriginal;

                                        if (tpj('#rev_slider').revolution == undefined)
                                            revslider_showDoubleJqueryError('#rev_slider', "joomla");
                                        else
                                            revapi1 = tpj('#rev_slider').show().revolution({
                                                delay: 5000,
                                                startwidth: 1200,
                                                startheight: 365,
                                                hideThumbs: 200,

                                                thumbWidth: 100,
                                                thumbHeight: 50,
                                                thumbAmount: 5,

                                                navigationType: "none",
                                                navigationArrows: "nexttobullets",
                                                navigationStyle: "round-old",

                                                touchenabled: "on",
                                                onHoverStop: "on",

                                                navOffsetHorizontal: 0,
                                                navOffsetVertical: 20,

                                                shadow: 0,
                                                fullWidth: "off",

                                                stopLoop: "off",
                                                stopAfterLoops: -1,
                                                stopAtSlide: -1,

                                                shuffle: "off",

                                                hideSliderAtLimit: 0,
                                                hideCaptionAtLimit: 0,
                                                hideAllCaptionAtLilmit: 0
                                            });

                                    }); //ready
                                </script>

                                <!-- END REVOLUTION SLIDER -->
                                <div class="clearbreak"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row no-gutter">
                    <!-- row -->
                    <div class="col-lg-4 col-md-4 col-xs-12" style="margin-left: 10px";>
                        <!-- misc wrapper -->

                        <div class="col-padded col-shaded">
                            <!-- inner custom column -->

                            <ul class="list-unstyled clear-margins">
                                <!-- widgets -->

                                <li class="widget-container widget_course_search thai-font">
                                    <!-- widget -->
                                    <h1 class="title-widget">กิจกรรมที่กำลังมาถึง</h1>
                                </li><!-- widget end -->

                                <div id="calendar"></div>

                            </ul><!-- widgets end -->

                        </div><!-- inner custom column end -->

                    </div><!-- misc wrapper end -->


                    <div class="col-lg-7 col-md-8 col-xs-12">
                        <!-- upcoming events wrapper -->

                        <div class="col-padded" style="margin-bottom: 25px;">
                            <!-- inner custom column -->

                            <ul class="list-unstyled clear-margins thai-font">
                                <!-- widgets -->

                                <li class="widget-container widget_recent_news">
                                    <!-- widgets list -->

                                    <h1 class="title-widget">ข่าวประชาสัมพันธ์</h1>


                                    <!-- ------------------TAB----------------  -->
                                    <ul class="nav nav-tabs nav-justified">
                                        <!-- starts tab controls -->
                                        <li class="active"><a href="#news-tab-02" data-toggle="tab">ข่าวประชาสัมพันธ์</a></li>
                                        <li class=""><a href="#news-tab-03" data-toggle="tab">ภาพถ่ายกิจกรรมที่ผ่านมา</a></li>
                                    </ul>

                                    <div class="tab-content">
                                        <!-- starts tab containers -->

                                        <div id="news-tab-02" class="tab-pane fade  active  in">
                                            <!-- tab 1 starts -->
                                            <p>
                                                <ul class="list-unstyled">
                                                    <li class="recent-news-wrap">
                                                        <div class="recent-news-content clearfix">
                                                            <figure class="recent-news-thumb">
                                                                <a href="#" title="Megan Boyle flourishes..."><img src="img/logo.jpg" class="attachment-thumbnail wp-post-image" /></a>
                                                            </figure>
                                                            <div class="recent-news-text">
                                                                <h1 class="title-median"><a href="#" title="ทดสอบ">[<strong>ข่าวประชาสัมพันธ์</strong>] ทดสอบ1</a></h1>
                                                                <div class="recent-news-meta">
                                                                    <div class="recent-news-date">31 กรกฎาคม 2563</div>
                                                                </div>
                                                                <a href="#" class="moretag" title="read more">อ่านรายละเอียด</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="recent-news-wrap">
                                    <div class="recent-news-content clearfix">
                                        <figure class="recent-news-thumb">
                                            <a href="news-single.php" title="Megan Boyle flourishes..."><img src="img/logo.jpg" class="attachment-thumbnail wp-post-image" alt="Thumbnail 1" /></a>
                                        </figure>
                                        <div class="recent-news-text">
                                            <h1 class="title-median"><a href="index.php?module=news&op=detail&id=145" title="โครงการค่ายเตรียมความพร้อมนักศึกษาใหม่สู่รั้วมหาวิทยาลัย “เพาะพันธุ์กล้ากาสะลอง”  ">[<strong>ข่าวประชาสัมพันธ์</strong>] ทดสอบ2 </a></h1>
                                            <div class="recent-news-meta">
                                                <div class="recent-news-date">31 กรกฎาคม 2563</div>
                                            </div>
                                            <a href="index.php?module=news&op=detail&id=145" class="moretag" title="read more">อ่านรายละเอียด</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <p>
                                    <a href="#" class="btn btn-danger btn-sm pull-right" title="Button">ดูเพิ่มเติม</a>
                                </p>
                            </ul>
                            </p>
                        </div><!-- tab 1 ends -->

                    </div><!-- upcoming events wrapper end -->

                </div><!-- row end -->

            </div><!-- container end -->

        </div><!-- content wrapper end -->
    


    <?php
    include('footer.php');
    ?>
    <script src='js/core/main.js'></script>
    <script src='js/daygrid/main.js'></script>
    <script src='js/bootstrap/main.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                timeZone: 'local',
                plugins: ['dayGrid'],
                locale: 'th',
                events: 'calendar.php',
                header: {
                    left: 'today',
                    center: 'title',
                    right: 'prev,next'
                },
                buttonText: {
                    today: 'วันนี้',
                    month: 'เดือน',
                    week: 'สัปดาห์',
                    day: 'วัน',
                    list: 'รายการ'
                }
            });
            calendar.render();
        });
    </script>