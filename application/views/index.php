<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=7" />
    <title>艾泽拉斯旅游局</title>
    <link href="<?=$this->config->base_url()?>/static/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?=$this->config->base_url()?>/static/css/album.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body style="background: #ffffff;">
<div class="contain">
    <!--header start-->
    <div class="header">
        <a href="#" class="logo"></a>
        <div class="clear"></div>
        <div class="shipin">
            <embed src="http://player.youku.com/player.php/sid/XODE5NjkwMzU2/v.swf" quality="high" width="493" height="348" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash"></embed>
        </div>

    </div>
    <!--header end-->
    <!--star start-->
    <div class="zkmx"><img src="<?=$this->config->base_url()?>/static/images/img_zkmx.jpg"/></div>
    <!--star end-->
    <!--album start-->
    <div class="xcbox">
        <div class="selectbox">
            <select class="select_area"><option>地区</option><option>请选择</option></select>

        </div>
        <ul class="tab">
            <li class="nocur"><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
        </ul>
        <div class="clear"></div>
        <div class="album" id="album">
            <div class="album-image-md" id="album-image-md">
                <p class="album-image-bd"><img src="<?=$this->config->base_url()?>/static/images/01.jpg" class="album-image" id="album-image" alt="" width="487" height="300" /></p>
                <p class="album-image-ft" id="album-image-ft">相册图片-示例图片（1）</p>
                <!--<a class="album-download" id="album-download" href="images/01.jpg" target="_blank"></a>-->
                <!--
                <ul class="album-image-nav hide" id="album-image-nav">
                    <li class="album-image-nav-left-block" id="album-image-nav-left-block"><a href="#prev-image" class="album-image-btn-prev" id="album-image-btn-prev"></a></li>
                    <li class="album-image-nav-right-block" id="album-image-nav-right-block"><a href="#next-image" class="album-image-btn-next" id="album-image-btn-next"></a></li>
                </ul>
                -->
                <p class="album-image-loading-overlay hide" id="album-image-loading-overlay"><img src="<?=$this->config->base_url()?>/static/images/loading.gif" alt="loading..." width="100" height="100" /></p>
            </div>
            <div class="album-carousel" id="album-carousel">
                <!--<a href="#prev-group" class="album-carousel-btn-prev" id="album-carousel-btn-prev">‹</a>-->
                <div class="album-carousel-zone" id="album-carousel-zone">
                    <ul class="album-carousel-list" id="album-carousel-list">
                        <li class="album-carousel-thumb li1 album-carousel-thumb-selected"><a href="<?=$this->config->base_url()?>/static/images/01.jpg"><img src="<?=$this->config->base_url()?>/static/images/s-01.jpg" alt="相册图片-示例图片（1）"/></a></li>
                        <li class="album-carousel-thumb li2"><a href="<?=$this->config->base_url()?>/static/images/02.jpg"><img src="<?=$this->config->base_url()?>/static/images/s-02.jpg" alt="相册图片-示例图片（2）"/></a></li>
                        <li class="album-carousel-thumb li3"><a href="<?=$this->config->base_url()?>/static/images/03.jpg"><img src="<?=$this->config->base_url()?>/static/images/s-03.jpg" alt="相册图片-示例图片（3）"/></a></li>
                        <li class="album-carousel-thumb li4"><a href="<?=$this->config->base_url()?>/static/images/04.jpg"><img src="<?=$this->config->base_url()?>/static/images/s-04.jpg" alt="相册图片-示例图片（4）"/></a></li>
                        <li class="album-carousel-thumb li5"><a href="<?=$this->config->base_url()?>/static/images/05.jpg"><img src="<?=$this->config->base_url()?>/static/images/s-05.jpg" alt="相册图片-示例图片（5）"/></a></li>
                        <div class="clear"></div>
                        <li class="album-carousel-thumb li1"><a href="<?=$this->config->base_url()?>/static/images/01.jpg"><img src="<?=$this->config->base_url()?>/static/images/s-01.jpg" alt="相册图片-示例图片（1）"/></a></li>
                        <li class="album-carousel-thumb li2"><a href="<?=$this->config->base_url()?>/static/images/02.jpg"><img src="<?=$this->config->base_url()?>/static/images/s-02.jpg" alt="相册图片-示例图片（2）"/></a></li>
                        <li class="album-carousel-thumb li3"><a href="<?=$this->config->base_url()?>/static/images/03.jpg"><img src="<?=$this->config->base_url()?>/static/images/s-03.jpg" alt="相册图片-示例图片（3）"/></a></li>
                        <li class="album-carousel-thumb li4"><a href="<?=$this->config->base_url()?>/static/images/04.jpg"><img src="<?=$this->config->base_url()?>/static/images/s-04.jpg" alt="相册图片-示例图片（4）"/></a></li>
                        <li class="album-carousel-thumb li5"><a href="<?=$this->config->base_url()?>/static/images/05.jpg"><img src="<?=$this->config->base_url()?>/static/images/s-05.jpg" alt="相册图片-示例图片（5）"/></a></li>
                        <div class="clear"></div>
                        <li class="album-carousel-thumb li1"><a href="<?=$this->config->base_url()?>/static/images/01.jpg"><img src="<?=$this->config->base_url()?>/static/images/s-01.jpg" alt="相册图片-示例图片（1）"/></a></li>
                        <li class="album-carousel-thumb li2"><a href="<?=$this->config->base_url()?>/static/images/02.jpg"><img src="<?=$this->config->base_url()?>/static/images/s-02.jpg" alt="相册图片-示例图片（2）"/></a></li>
                        <li class="album-carousel-thumb li3"><a href="<?=$this->config->base_url()?>/static/images/03.jpg"><img src="<?=$this->config->base_url()?>/static/images/s-03.jpg" alt="相册图片-示例图片（3）"/></a></li>
                        <li class="album-carousel-thumb li4"><a href="<?=$this->config->base_url()?>/static/images/04.jpg"><img src="<?=$this->config->base_url()?>/static/images/s-04.jpg" alt="相册图片-示例图片（4）"/></a></li>
                        <li class="album-carousel-thumb li5"><a href="<?=$this->config->base_url()?>/static/images/05.jpg"><img src="<?=$this->config->base_url()?>/static/images/s-05.jpg" alt="相册图片-示例图片（5）"/></a></li>


                    </ul>
                </div>
                <!--<a href="#next-group" class="album-carousel-btn-next" id="album-carousel-btn-next">›</a>-->
            </div>
        </div>
        <a href="#" class="btn_next" title="下一贴"></a>
        <a href="#" class="btn_upload" style="display:none" title="一键上传"></a>
    </div>
    <!--album end-->
    <!--map start-->
    <div class="map">
        <div class="map_left">
            <div class="map5" id="map5"><div id="map_bg5">&nbsp;</div></div>
            <div class="map6" id="map6"><div id="map_bg6"><img src="<?=$this->config->base_url()?>/static/images/yun.png"/></div></div>
        </div>
        <div class="map1" id="map1"><div id="map_bg1"><img src="<?=$this->config->base_url()?>/static/images/img_map1.png"/></div></div>
        <div class="mapmid">
            <div class="map2" id="map2"><div id="map_bg2"><img src="<?=$this->config->base_url()?>/static/images/img_map2.png"/></div></div>
            <div class="map3" id="map3"><div id="map_bg3"><img src="<?=$this->config->base_url()?>/static/images/img_map3.png"/></div></div>
        </div>
        <div class="map4" id="map4"><div id="map_bg4"><img src="<?=$this->config->base_url()?>/static/images/img_map4.png"/></div></div>
    </div>
    <!--map end-->
    <!--redian start-->
    <div class="redian">
        <div id="focus">

            <a href="#"><img alt="戴佩妮独立作" src="<?=$this->config->base_url()?>/static/images/05.jpg"  width="415" height="258"/><s></s><p><span class="text">戴佩妮独立作</span><span class="play" ></span></p></a>
            <a href="#"><img alt="专辑推荐：《中国最强音第八场》" src="<?=$this->config->base_url()?>/static/images/04.jpg"  width="415" height="258"/><s></s><p><span class="text">专辑推荐：《中国最强音第八场》</span><span class="play" ></span></p></a>
            <a href="#"><img alt="戴佩妮独立作" src="<?=$this->config->base_url()?>/static/images/05.jpg"  width="415" height="258"/><s></s><p><span class="text">戴佩妮独立作</span><span class="play" ></span></p></a>
            <a href="#"><img alt="专辑推荐：《中国最强音第八场》" src="<?=$this->config->base_url()?>/static/images/04.jpg"  width="415" height="258"/><s></s><p><span class="text">专辑推荐：《中国最强音第八场》</span><span class="play" ></span></p></a>
            <a href="#"><img alt="戴佩妮独立作" src="<?=$this->config->base_url()?>/static/images/05.jpg"  width="415" height="258"/><s></s><p><span class="text">戴佩妮独立作</span><span class="play" ></span></p></a>
            <a href="#"><img alt="专辑推荐：《中国最强音第八场》" src="<?=$this->config->base_url()?>/static/images/04.jpg"  width="415" height="258"/><s></s><p><span class="text">专辑推荐：《中国最强音第八场》</span><span class="play" ></span></p></a>
            <a href="#"><img alt="戴佩妮独立作" src="<?=$this->config->base_url()?>/static/images/05.jpg"  width="415" height="258"/><s></s><p><span class="text">戴佩妮独立作</span><span class="play" ></span></p></a>
            <a href="#"><img alt="专辑推荐：《中国最强音第八场》" src="<?=$this->config->base_url()?>/static/images/04.jpg"  width="415" height="258"/><s></s><p><span class="text">专辑推荐：《中国最强音第八场》</span><span class="play" ></span></p></a>

            <div id="ctr">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!--redian end-->
    <!--jiangpin start-->
    <div class="jiangpin">
        <div class="jpbox"></div>
        <div class="btn_go"><a href="#" title="前往旅游局"></a></div>
    </div>
    <!--jiangpin end-->
</div>
<script type="text/javascript" src="<?=$this->config->base_url()?>/static/javascript/jquery.js"></script>
<script type="text/javascript" src="<?=$this->config->base_url()?>/static/javascript/carousel.js"></script>
<script type="text/javascript" src="<?=$this->config->base_url()?>/static/javascript/album.js"></script>
<script type="text/javascript">
    var Album = new jQuery.Album();
</script>
<script type="text/javascript" src="<?=$this->config->base_url()?>/static/javascript/base-min.js"></script>
<script type="text/javascript" src="<?=$this->config->base_url()?>/static/javascript/Tab-min.js"></script>
<script type="text/javascript">
    t1 = new Tab("ctr", "span", "focus", "a", {
        autoPlay : true,
        timeout : 5000,
        delay:200,
        event : "mouseover"
    });
</script>
<script type="text/javascript">

    $(document).ready(
        function () {
            var a1=100;
            var b1=1000;
            var num1=a1/b1;

            var a2=200;
            var b2=1000;
            var num2=a2/b2;

            var a3=300;
            var b3=1000;
            var num3=a3/b3;

            var a4=400;
            var b4=1000;
            var num4=a4/b4;

            var a5=500;
            var b5=1000;
            var num5=a5/b5;

            var a6=600;
            var b6=1000;
            var num6=a6/b6;

            if(num1==0){$("#map_bg1").addClass("map1_bg1");}
            if(num1>0 && num1 <= 0.3){$("#map_bg1").addClass("map1_bg2");}
            if(num1>0.3 && num1 <=0.6){$("#map_bg1").addClass("map1_bg3");}
            if(num1>0.6 && num1 <1){$("#map_bg1").addClass("map1_bg4");}
            if(num1==1){$("#map_bg1").addClass("map1_bg5");}

            if(num2==0){$("#map_bg2").addClass("map2_bg1");}
            if(num2>0 && num2 <= 0.3){$("#map_bg2").addClass("map2_bg2");}
            if(num2>0.3 && num2 <= 0.6){$("#map_bg2").addClass("map2_bg3");}
            if(num2>0.6 && num2 <1){$("#map_bg2").addClass("map2_bg4");}
            if(num2==1){$("#map_bg2").addClass("map2_bg5");}

            if(num3==0){$("#map_bg3").addClass("map3_bg1");}
            if(num3>0 && num3 <= 0.3){$("#map_bg3").addClass("map3_bg2");}
            if(num3>0.3 && num3 <= 0.6){$("#map_bg3").addClass("map3_bg3");}
            if(num3>0.6 && num3 <1){$("#map_bg3").addClass("map3_bg4");}
            if(num3==1){$("#map_bg3").addClass("map3_bg5");}

            if(num4==0){$("#map_bg4").addClass("map4_bg1");}
            if(num4>0 && num4 <= 0.3){$("#map_bg4").addClass("map4_bg2");}
            if(num4>0.3 && num4 <= 0.6){$("#map_bg4").addClass("map4_bg3");}
            if(num4>0.6 && num4 <1){$("#map_bg4").addClass("map4_bg4");}
            if(num4==1){$("#map_bg4").addClass("map4_bg5");}

            if(num5==0){$("#map_bg5").addClass("map5_bg1");}
            if(num5>0 && num5 <= 0.3){$("#map_bg5").addClass("map5_bg2");}
            if(num5>0.3 && num5 <= 0.6){$("#map_bg5").addClass("map5_bg3");}
            if(num5>0.6 && num5 <1){$("#map_bg5").addClass("map5_bg4");}
            if(num5==1){$("#map_bg5").addClass("map5_bg5");}

            if(num6==0){$("#map_bg6").addClass("map6_bg1");}
            if(num6>0 && num6 <= 0.3){$("#map_bg6").addClass("map6_bg2");}
            if(num6>0.3 && num6 <= 0.6){$("#map_bg6").addClass("map6_bg3");}
            if(num6>0.6 && num6 <1){$("#map_bg6").addClass("map6_bg4");}
            if(num6==1){$("#map_bg6").addClass("map6_bg5");}
        }
    )

    //function $(id){
    // return document.getElementById(id)
    //}
    //function getHeight() {
    //var a1=100;
    //var b1=1000;
    //var num1=a1/b1;
    //
    //var a2=200;
    //var b2=1000;
    //var num2=a2/b2;
    //
    //var a3=300;
    //var b3=1000;
    //var num3=a3/b3;
    //
    //var a4=400;
    //var b4=1000;
    //var num4=a4/b4;
    //
    //$("map_bg1").style.height=$("map1").offsetHeight * num1 + "px";
    //$("map_bg2").style.height=$("map2").offsetHeight * num2 + "px";
    //$("map_bg3").style.height=$("map3").offsetHeight * num3 + "px";
    //$("map_bg4").style.height=$("map4").offsetHeight * num4 + "px";
    //}
    //window.onload = function() {
    //getHeight();
    //}

</script>
<script src="http://tjs.sjs.sinajs.cn/open/thirdpart/js/frame/appclient.js" charset="utf-8"></script>
</body>
</html>