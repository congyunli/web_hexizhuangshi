<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("common","header"); ?>
<div class="container">
    <div class="banner colums recruit">
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
        <div class="case-txt clearfix pdb40 recruit">
            <?php echo $content;?>
        </div>
    </div>
</div>
<?php include template("common","footer"); ?>
</body>
</html>