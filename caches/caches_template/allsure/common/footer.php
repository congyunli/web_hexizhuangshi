<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>    <section class="container-width">
        <div class="screen show4">
            <div class="container">
                <h2>CONTACT US</h2>
                <p class="title-little">
                    <img class="titleIMG" src="<?php echo APP_PATH;?>statics/allsure/images/contact-child.png" style="width:74px;" alt=""/>
                    say hello
                </p>
                <section class="clearfix">
                    <dl>
                        <dd><img src="<?php echo APP_PATH;?>statics/allsure/images/phone.png" alt=""/></dd>

                        <?php $db = pc_base::load_model('module_model');  $info = $db->get_one(array('module'=>'admin')); $setting = string2array($info[setting]); ?>

                        <dt><?php echo $setting['admin_phone'];?></dt>

                    </dl>

                    <dl>
                        <dd><img src="<?php echo APP_PATH;?>statics/allsure/images/address.png" alt=""/></dd>

                        <dt><?php echo $setting['admin_address'];?></dt>

                    </dl>

                    <dl>
                        <dd><img src="<?php echo APP_PATH;?>statics/allsure/images/mails.png" alt=""/></dd>

                        <dt><?php echo $setting['admin_contactEmail'];?></dt>

                    </dl>
                </section>
            </div>
        </div>

        <address>
            <img src="<?php echo APP_PATH;?>statics/allsure/images/map.jpg" alt="">
        </address>

    </section>

</body>

</html>