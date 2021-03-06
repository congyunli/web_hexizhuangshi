<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("common","header"); ?>

<div class="container">
    <div class="banner colums case clearfix">
        <div class="left">
            <div class="inner-ctner">
                <h2>亿达·春田留庄别墅</h2>
            </div>
        </div>
        <div class="right">
            <div id="banner" class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="<?php echo APP_PATH;?>statics/hexi/images/demo/banner2.jpg"/>
                    </li>
                    <li>
                        <img src="<?php echo APP_PATH;?>statics/hexi/images/demo/banner2.jpg"/>
                    </li>
                    <li>
                        <img src="<?php echo APP_PATH;?>statics/hexi/images/demo/banner2.jpg"/>
                    </li>
                    <li>
                        <img src="<?php echo APP_PATH;?>statics/hexi/images/demo/banner2.jpg"/>
                    </li>
                    <li>
                        <img src="<?php echo APP_PATH;?>statics/hexi/images/demo/banner2.jpg"/>
                    </li>
                    <li>
                        <img src="<?php echo APP_PATH;?>statics/hexi/images/demo/banner2.jpg"/>
                    </li>
                    <li>
                        <img src="<?php echo APP_PATH;?>statics/hexi/images/demo/banner2.jpg"/>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container colums mgt30 clearfix">
    <div class="left">
        <ul class="left-labels">
            <li class="title"><i class="i-link i-title2"></i></li>
            <li><a href=""><i class="i-link w-shimu"></i></a></li>
            <li><a href=""><i class="i-link w-gongzhuang"></i></a></li>
            <li><a href=""><i class="i-link w-siren"></i></a></li>
        </ul>
    </div>
    <div class="right">
        <ul class="case-list clearfix pdb45">
            <li class="ctner">
                <i class="i-link shimu"></i>
                <a href="">
                    <div class="img-frame">
                        <img src="<?php echo APP_PATH;?>statics/hexi/images/demo/demo3.jpg" alt="" />
                    </div>
                </a>
            </li>
            <li class="ctner">
                <i class="i-link gongzhuang"></i>
                <a href="">
                    <div class="img-frame">
                        <img src="<?php echo APP_PATH;?>statics/hexi/images/demo/demo3.jpg" alt="" />
                    </div>
                </a>
            </li>
            <li class="ctner">
                <i class="i-link siren"></i>
                <a href="">
                    <div class="img-frame">
                        <img src="<?php echo APP_PATH;?>statics/hexi/images/demo/demo3.jpg" alt="" />
                    </div>
                </a>
            </li>
            <li class="ctner">
                <i class="i-link shimu"></i>
                <a href="">
                    <div class="img-frame">
                        <img src="<?php echo APP_PATH;?>statics/hexi/images/demo/demo3.jpg" alt="" />
                    </div>
                </a>
            </li>
            <li class="ctner">
                <i class="i-link gongzhuang"></i>
                <a href="">
                    <div class="img-frame">
                        <img src="<?php echo APP_PATH;?>statics/hexi/images/demo/demo3.jpg" alt="" />
                    </div>
                </a>
            </li>
            <li class="ctner">
                <i class="i-link siren"></i>
                <a href="">
                    <div class="img-frame">
                        <img src="<?php echo APP_PATH;?>statics/hexi/images/demo/demo3.jpg" alt="" />
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>

<?php include template("common","footer"); ?>

<script type="text/javascript">
    $(function(){
        $('#banner').flexslider({
            animation: "fade",     //动画效果
            directionNav: false,    //显示方向箭头？false
            slideshow: true,      //多张开启自动滚动
            slideshowSpeed: 3000,
            animationSpeed: 400,
            manualControlEvent: 'hover',
            start: function(obj){
                var $sliders = obj.find('li'),
                        exist = $sliders.length/2;
                var $pager = $('.flex-control-nav', obj);
                for(var i=0; i<exist; i++){
                    console.log($('li:eq('+i+') img', obj).attr('src'));
                    var src=$('li:eq('+i+') img', obj).attr('src');
                    $('li>a', $pager).css({
                        'background-image': 'url('+src+')',
                        'background-repeat': 'no-repeat',
                        'background-size': '100% auto'
                    });
                    $('li>a', $pager).on('mouseenter', function(){
                        $(this).click();
                    });
                }
            }
        });
    });
</script>
</body>
</html>