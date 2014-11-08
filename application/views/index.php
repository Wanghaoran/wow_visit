<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=7" />
    <title>艾泽拉斯旅游局</title>
    <link href="<?=$this->config->base_url()?>/static/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?=$this->config->base_url()?>/static/css/album.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="<?=$this->config->base_url()?>/static/javascript/jquery.js"></script>



    <script>

        var changepic = function(value){

            $.ajax({
                type : 'POST',
                url : '<?=$this -> config -> base_url()?>welcome/checkmap',
                data : '&value=' + value,
                async : false,
                dataType : 'json',
                success : function(ress){

                    var inHtml = '<div class="album-image-md" id="album-image-md"><p class="album-image-bd"><img src="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[1]['pic'] + '-b.jpg" class="album-image" id="album-image" alt="" width="487" height="300" /></p><p class="album-image-ft" id="album-image-ft"></p><p class="album-image-loading-overlay hide" id="album-image-loading-overlay"><img src="<?=$this->config->base_url()?>/static/images/loading.gif" alt="loading..." width="100" height="100" /></p></div><div class="album-carousel" id="album-carousel"><div class="album-carousel-zone" id="album-carousel-zone"><ul class="album-carousel-list" id="album-carousel-list"><li class="album-carousel-thumb li1 album-carousel-thumb-selected"><a href="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[1]['pic'] + '-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[1]['pic'] + '-s.jpg" alt="' + ress[1]['description'] + '"/></a></li><li class="album-carousel-thumb li2"><a href="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[2]['pic'] + '-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[2]['pic'] + '-s.jpg" alt="' + ress[2]['description'] + '"/></a></li><li class="album-carousel-thumb li3"><a href="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[3]['pic'] + '-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[3]['pic'] + '-s.jpg" alt="' + ress[3]['description'] + '"/></a></li><li class="album-carousel-thumb li4"><a href="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[4]['pic'] + '-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[4]['pic'] + '-s.jpg" alt="' + ress[4]['description'] + '"/></a></li><li class="album-carousel-thumb li5"><a href="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[5]['pic'] + '-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[5]['pic'] + '-s.jpg" alt="' + ress[5]['description'] + '"/></a></li><div class="clear"></div><li class="album-carousel-thumb li1"><a href="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[6]['pic'] + '-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[6]['pic'] + '-s.jpg" alt="' + ress[6]['description'] + '"/></a></li><li class="album-carousel-thumb li2"><a href="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[7]['pic'] + '-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[7]['pic'] + '-s.jpg" alt="' + ress[7]['description'] + '"/></a></li><li class="album-carousel-thumb li3"><a href="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[8]['pic'] + '-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[8]['pic'] + '-s.jpg" alt="' + ress[8]['description'] + '"/></a></li><li class="album-carousel-thumb li4"><a href="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[9]['pic'] + '-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[9]['pic'] + '-s.jpg" alt="' + ress[9]['description'] + '"/></a></li><li class="album-carousel-thumb li5"><a href="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[10]['pic'] + '-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[10]['pic'] + '-s.jpg" alt="' + ress[10]['description'] + '"/></a></li><div class="clear"></div><li class="album-carousel-thumb li1"><a href="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[11]['pic'] + '-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[11]['pic'] + '-s.jpg" alt="' + ress[11]['description'] + '"/></a></li><li class="album-carousel-thumb li2"><a href="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[12]['pic'] + '-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[12]['pic'] + '-s.jpg" alt="' + ress[12]['description'] + '"/></a></li><li class="album-carousel-thumb li3"><a href="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[13]['pic'] + '-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[13]['pic'] + '-s.jpg" alt="' + ress[13]['description'] + '"/></a></li><li class="album-carousel-thumb li4"><a href="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[14]['pic'] + '-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[14]['pic'] + '-s.jpg" alt="' + ress[14]['description'] + '"/></a></li><li class="album-carousel-thumb li5"><a href="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[15]['pic'] + '-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/' + value + '/' + ress[15]['pic'] + '-s.jpg" alt="' + ress[15]['description'] + '"/></a></li></ul></div></div>';

                    $('#album').html(inHtml);
                    var Album = new jQuery.Album();

                }
            });

        }

    </script>

    <script>

        var setp = 1;
        var pic_arr = [];

        var nextPrv = function(){

            var group_num = $('#album-image').attr('src').substr($('#album-image').attr('src').lastIndexOf('/') - 1).charAt(0);
            var pic_num = $('#album-image').attr('src').substring($('#album-image').attr('src').lastIndexOf('/') + 1, $('#album-image').attr('src').lastIndexOf('-'));

            if(setp == 1){
                //纪录选择图片
                pic_arr[0] = [group_num, pic_num];

                //清除样式
                $('#pic_tab').children('li').removeClass('nocur');

                //切换tab
                $($('#pic_tab').children('li')[1]).addClass('nocur');

                setp = 2;
                return;
            }

            if(setp == 2){
                //纪录选择图片
                pic_arr[1] = [group_num, pic_num];

                //清除样式
                $('#pic_tab').children('li').removeClass('nocur');

                //切换tab
                $($('#pic_tab').children('li')[2]).addClass('nocur');

                setp = 3;
                return;
            }

            if(setp == 3){
                //纪录选择图片
                pic_arr[2] = [group_num, pic_num];

                //清除样式
                $('#pic_tab').children('li').removeClass('nocur');

                //切换tab
                $($('#pic_tab').children('li')[3]).addClass('nocur');

                setp = 4;
                return;
            }

            if(setp == 4){
                //纪录选择图片
                pic_arr[3] = [group_num, pic_num];

                //清除样式
                $('#pic_tab').children('li').removeClass('nocur');

                //切换tab
//                $($('#pic_tab').children('li')[3]).addClass('nocur');
                //切换按钮
                $('#btn_next').hide();
                $('#submit_check').show();

                setp = 5;
                return;
            }

        }

        var checkSub = function(){
            if(setp != 5){
                alert('数据不完整请您重新选择！');
                //重置数据
                setp = 1;
                pic_arr = [];
            }

            //构建数据
            var post_data = '&pic_group_1=' + pic_arr[0][0] + '&pic_name_1=' + pic_arr[0][1] + '&pic_group_2=' + pic_arr[1][0] + '&pic_name_2=' + pic_arr[1][1] + '&pic_group_3=' + pic_arr[2][0] + '&pic_name_3=' + pic_arr[2][1] + '&pic_group_4=' + pic_arr[3][0] + '&pic_name_4=' + pic_arr[3][1];


            $.ajax({
                type : 'POST',
                url : '<?=$this -> config -> base_url()?>welcome/recordpic',
                data : post_data,
                async : false,
                dataType : 'json',
                success : function(ress){

                    if(ress.state == 'success'){
                        window.open (ress.sinaurl, '分享到新浪微博', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=n o, status=no');
                    }else{
                        alert('上传失败！' + ress.message);
                    }


                    //重置数据
                    setp = 1;
                    pic_arr = [];
                    //清除样式
                    $('#pic_tab').children('li').removeClass('nocur');

                    //切换tab
                    $($('#pic_tab').children('li')[0]).addClass('nocur');
                }
            });

        }

    </script>

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
            <select class="select_area" onchange="changepic(this.value);">
                <option value="1">德拉诺</option>
                <option value="2">东部王国</option>
                <option value="3">卡利姆多</option>
                <option value="4">诺森德</option>
                <option value="5">潘达利亚</option>
                <option value="6">外域</option>
            </select>

        </div>
        <ul class="tab" id="pic_tab">
            <li class="nocur"><a></a></li>
            <li><a</a></li>
            <li><a></a></li>
            <li><a></a></li>
        </ul>
        <div class="clear"></div>
        <div class="album" id="album">
            <div class="album-image-md" id="album-image-md">
                <p class="album-image-bd"><img src="<?=$this->config->base_url()?>/static/place/1/1-b.jpg" class="album-image" id="album-image" alt="" width="487" height="300" /></p>
                <p class="album-image-ft" id="album-image-ft"></p>
                <p class="album-image-loading-overlay hide" id="album-image-loading-overlay"><img src="<?=$this->config->base_url()?>/static/images/loading.gif" alt="loading..." width="100" height="100" /></p>
            </div>
            <div class="album-carousel" id="album-carousel">
                <div class="album-carousel-zone" id="album-carousel-zone">
                    <ul class="album-carousel-list" id="album-carousel-list">
                        <li class="album-carousel-thumb li1 album-carousel-thumb-selected"><a href="<?=$this->config->base_url()?>/static/place/1/1-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/1/1-s.jpg" alt="神秘而美丽的德拉诺等待你的探索！"/></a></li>
                        <li class="album-carousel-thumb li2"><a href="<?=$this->config->base_url()?>/static/place/1/2-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/1/2-s.jpg" alt="神秘而美丽的德拉诺等待你的探索！"/></a></li>
                        <li class="album-carousel-thumb li3"><a href="<?=$this->config->base_url()?>/static/place/1/3-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/1/3-s.jpg" alt="神秘而美丽的德拉诺等待你的探索！"/></a></li>
                        <li class="album-carousel-thumb li4"><a href="<?=$this->config->base_url()?>/static/place/1/4-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/1/4-s.jpg" alt="神秘而美丽的德拉诺等待你的探索！"/></a></li>
                        <li class="album-carousel-thumb li5"><a href="<?=$this->config->base_url()?>/static/place/1/5-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/1/5-s.jpg" alt="神秘而美丽的德拉诺等待你的探索！"/></a></li>
                        <div class="clear"></div>
                        <li class="album-carousel-thumb li1"><a href="<?=$this->config->base_url()?>/static/place/1/6-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/1/6-s.jpg" alt="神秘而美丽的德拉诺等待你的探索！"/></a></li>
                        <li class="album-carousel-thumb li2"><a href="<?=$this->config->base_url()?>/static/place/1/7-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/1/7-s.jpg" alt="神秘而美丽的德拉诺等待你的探索！"/></a></li>
                        <li class="album-carousel-thumb li3"><a href="<?=$this->config->base_url()?>/static/place/1/8-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/1/8-s.jpg" alt="神秘而美丽的德拉诺等待你的探索！"/></a></li>
                        <li class="album-carousel-thumb li4"><a href="<?=$this->config->base_url()?>/static/place/1/9-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/1/9-s.jpg" alt="神秘而美丽的德拉诺等待你的探索！"/></a></li>
                        <li class="album-carousel-thumb li5"><a href="<?=$this->config->base_url()?>/static/place/1/10-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/1/10-s.jpg" alt="神秘而美丽的德拉诺等待你的探索！"/></a></li>
                        <div class="clear"></div>
                        <li class="album-carousel-thumb li1"><a href="<?=$this->config->base_url()?>/static/place/1/11-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/1/11-s.jpg" alt="神秘而美丽的德拉诺等待你的探索！"/></a></li>
                        <li class="album-carousel-thumb li2"><a href="<?=$this->config->base_url()?>/static/place/1/12-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/1/12-s.jpg" alt="神秘而美丽的德拉诺等待你的探索！"/></a></li>
                        <li class="album-carousel-thumb li3"><a href="<?=$this->config->base_url()?>/static/place/1/13-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/1/13-s.jpg" alt="神秘而美丽的德拉诺等待你的探索！"/></a></li>
                        <li class="album-carousel-thumb li4"><a href="<?=$this->config->base_url()?>/static/place/1/14-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/1/14-s.jpg" alt="神秘而美丽的德拉诺等待你的探索！"/></a></li>
                        <li class="album-carousel-thumb li5"><a href="<?=$this->config->base_url()?>/static/place/1/15-b.jpg"><img src="<?=$this->config->base_url()?>/static/place/1/15-s.jpg" alt="神秘而美丽的德拉诺等待你的探索！"/></a></li>


                    </ul>
                </div>
            </div>
        </div>
        <a href="javascript:nextPrv();" class="btn_next" id="btn_next" title="下一贴"></a>
        <a href="javascript:checkSub();" class="btn_upload" style="display:none" id="submit_check" title="一键上传"></a>
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


            <?php foreach($hot10 as $key => $value):?>

                <a href="#"><img alt="<?=$map_arr[$value['group']][$value['pic']]['name']?>" src="<?=$this->config->base_url()?>/static/place/<?=$value['group']?>/<?=$value['pic']?>-b.jpg"  width="415" height="258"/><s></s><p><span class="text"><?=$map_arr[$value['group']][$value['pic']]['name']?></span></p></a>


            <?php endforeach;?>


            <div id="ctr">
                <?php foreach($hot10 as $key => $value):?>
                    <span></span>
                <?php endforeach;?>
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
            var a1=<?=$group_num[2]['num']?>;
            var b1=1000;
            var num1=a1/b1;

            var a2=<?=$group_num[3]['num']?>;
            var b2=1000;
            var num2=a2/b2;

            var a3=<?=$group_num[4]['num']?>;
            var b3=1000;
            var num3=a3/b3;

            var a4=<?=$group_num[1]['num']?>;
            var b4=1000;
            var num4=a4/b4;

            var a5=<?=$group_num[5]['num']?>;
            var b5=1000;
            var num5=a5/b5;

            var a6=<?=$group_num[0]['num']?>;
            var b6=1000;
            var num6=a6/b6;

            if(num1==0){$("#map_bg1").addClass("map1_bg1");}
            if(num1>0 && num1 <= 0.3){$("#map_bg1").addClass("map1_bg2");}
            if(num1>0.3 && num1 <=0.6){$("#map_bg1").addClass("map1_bg3");}
            if(num1>0.6 && num1 <1){$("#map_bg1").addClass("map1_bg4");}
            if(num1 >= 1){$("#map_bg1").addClass("map1_bg5");}

            if(num2==0){$("#map_bg2").addClass("map2_bg1");}
            if(num2>0 && num2 <= 0.3){$("#map_bg2").addClass("map2_bg2");}
            if(num2>0.3 && num2 <= 0.6){$("#map_bg2").addClass("map2_bg3");}
            if(num2>0.6 && num2 <1){$("#map_bg2").addClass("map2_bg4");}
            if(num2>=1){$("#map_bg2").addClass("map2_bg5");}

            if(num3==0){$("#map_bg3").addClass("map3_bg1");}
            if(num3>0 && num3 <= 0.3){$("#map_bg3").addClass("map3_bg2");}
            if(num3>0.3 && num3 <= 0.6){$("#map_bg3").addClass("map3_bg3");}
            if(num3>0.6 && num3 <1){$("#map_bg3").addClass("map3_bg4");}
            if(num3>=1){$("#map_bg3").addClass("map3_bg5");}

            if(num4==0){$("#map_bg4").addClass("map4_bg1");}
            if(num4>0 && num4 <= 0.3){$("#map_bg4").addClass("map4_bg2");}
            if(num4>0.3 && num4 <= 0.6){$("#map_bg4").addClass("map4_bg3");}
            if(num4>0.6 && num4 <1){$("#map_bg4").addClass("map4_bg4");}
            if(num4>=1){$("#map_bg4").addClass("map4_bg5");}

            if(num5==0){$("#map_bg5").addClass("map5_bg1");}
            if(num5>0 && num5 <= 0.3){$("#map_bg5").addClass("map5_bg2");}
            if(num5>0.3 && num5 <= 0.6){$("#map_bg5").addClass("map5_bg3");}
            if(num5>0.6 && num5 <1){$("#map_bg5").addClass("map5_bg4");}
            if(num5>=1){$("#map_bg5").addClass("map5_bg5");}

            if(num6==0){$("#map_bg6").addClass("map6_bg1");}
            if(num6>0 && num6 <= 0.3){$("#map_bg6").addClass("map6_bg2");}
            if(num6>0.3 && num6 <= 0.6){$("#map_bg6").addClass("map6_bg3");}
            if(num6>0.6 && num6 <1){$("#map_bg6").addClass("map6_bg4");}
            if(num6>=1){$("#map_bg6").addClass("map6_bg5");}
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