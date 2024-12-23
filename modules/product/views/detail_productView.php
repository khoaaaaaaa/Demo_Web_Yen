<?php
get_header();
?>
<link rel="stylesheet" href="public/css/product.css">
<link rel="stylesheet" href="public/css/post.css">
<link rel="stylesheet" href="public/css/detail_product.css">
<main id="main">
        <section class="product_list">
                <div class="min_wrap">
                    <div class="product_category">                  
                        <div class="product_detail">
                            <div class="product_detail_box">
                                <div class="product_detail_box_anh">
                                    <!-- Swiper -->
                                    
                                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="admin/public/images/<?php echo $product_detail['img']?>" />
                                            </div>
                                            <?php if(!empty($list_img)){
                                                foreach($list_img as $item){?>
                                            <div class="swiper-slide">
                                                <img src="admin/public/images/<?php echo $item['url_img']?>" />
                                            </div>
                                            <?php }}?>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                    <div thumbsSlider="" class="swiper mySwiper">
                                        <div class="swiper-wrapper">
                                        
                                        <div class="swiper-slide">
                                            <img src="admin/public/images/<?php echo $product_detail['img']?>" />
                                        </div>
                                        <?php if(!empty($list_img)){
                                                foreach($list_img as $item){?>
                                        <div class="swiper-slide">
                                            <img src="admin/public/images/<?php echo $item['url_img']?>" />
                                        </div>
                                        <?php }}?>
                                        </div>
                                    </div>
                                    <!-- <img src="public/img/baongu.jpg" alt="">                          -->
                                </div>
                                <div class="product_detail_box_mota">
                                    <div class="content"><a href="">Trang chủ / </a>Cửa hàng</div>
                                    <div class="title"><?php echo $product_detail['title'] ?></div>
                                    <div class="price"><?php echo currency_format($product_detail['price']) ?></div>
                                    <div class="mota">
                                        <?php echo $product_detail['description'] ?>
                                    </div>
                                    <?php  $slug=create_slug($product_detail['title']);?>
                                    <div style="padding-top:20px" class="add_cart"><a href="<?php echo "them-gio-hang-".$product_detail['product_id'].".htm"?>">Thêm vào giỏ hàng</a></div>
                                    <div class="buy">
                                       
                                        <a class="buy_now" href="<?php echo "mua-ngay/".$slug."-".$product_detail['product_id'].".htm"?>">
                                            <strong>ĐẶT MUA NGAY</strong> <br>
                                            <span>Nhân viên sẽ xác nhận đơn hàng sớm nhất</span>
                                        </a>
                                        
                                    </div>                           
                                    </div>
                            </div>
                            <div class="product_detail_content">
                                <h3 class="motachitiet">MÔ TẢ</h3>
                                <div class="content_detail">
                                <?php echo $product_detail['detail'] ?>
                                </div>
                            </div>
                            <div class="product_detail_content">
                                <h3 class="motachitiet">ĐÁNH GIÁ (0)</h3>
                                <div class="content_detail">
                                    <ul>
                                        <li>Cua hoàng đế Canada nói riêng và Việt Nam nói chung đa số đều được nhập khẩu (hiện nay đã phát hiện giống cua hoàng đế vỏ xanh Việt Nam sống tại biển Cam Ranh, Phú Quý,…). Vì khoảng cách xa nên chủ yếu cua hoàng đế được đông lạnh trước khi vận chuyển, nhưng hiện nay điều kiện nhập khẩu cũng đã tiên tiến hơn nên có không ít nơi bán cua hoàng đế tươi sống.</li>
                                        <li>Để chọn một con cua ngon điều tiên quyết là phải tươi sống, đầy đủ các bộ phận, các khớp chân không bị lỏng lẻo, khi ấn vào có cảm giác săn chắc thì thịt cua mới nhiều. Với loại đông lạnh thì nên để ý thời gian đông lạnh, kiểm tra các bộ phận của cua có đầy đủ hay không, và một điều chắc chắn là thịt cua đông lạnh sẽ không được dai ngon và chắc như cua tươi sống.</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="list_product">
                                <h3 class="Similar_product">Sản phẩm tương tự</h3>
                                <div class="product">

                                <?php $list_product_same=get_list_product_by_cat_id($product_detail['cat_id']);
                                foreach($list_product_same as $item) { 
                                    $slug=create_slug($item['title']);?>
                                <div class="box_product">
                                <a href="<?php echo $slug."sp".$item['product_id'].".htm"?>"><div class="anh"><img style="height: 100% !important;" src="admin/public/images/<?php echo $item['img']?>" alt=""></div></a>
                                <div class="content_product">
                                    <p class="name"> <a href="<?php echo $slug."sp".$item['product_id'].".htm"?>" ><?php echo $item['title']?></a></p>
                                    <div class="price"><?php echo currency_format($item['price']) ?></div>
                                    <div class="add_cart"><a href="?mod=cart&action=add_cart&product_id=<?php echo $item['product_id']?>">Thêm vào giỏ hàng</a></div>
                                </div>
                                </div>
                            <?php }?>
                                    
                                </div>
                            </div>
                            
                        </div>
                        <div class="category">
                            <div class="title">TƯ VẤN ĐẶT HÀNG</div>
                            <div class="icon-box-text">
                                    <div class="box">
                                        <div class="logo"><img src="public/img/icon1.jpg" alt=""></div>
                                        <div class="text">
                                            <h3>SẢN PHẨM AN TOÀN</h3>
                                            <P>Cam kết chất lượng. </P>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="logo"><img src="public/img/icon_1.jpg" alt=""></div>
                                        <div class="text">
                                            <h3>SẢN PHẨM AN TOÀN</h3>
                                            <P>Cam kết chất lượng. </P>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="logo"><img src="public/img/icon_2.jpg" alt=""></div>
                                        <div class="text">
                                            <h3>ĐỔI TRẢ HÀNG</h3>
                                            <P>Nhanh chóng, rõ ràng.</P>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="logo"><img src="public/img/icon_3.jpg" alt=""></div>
                                        <div class="text">
                                            <h3>QUY CÁCH RÕ RÀNG</h3>
                                            <P>Sạch và tiện lợi</P>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="logo"><img src="public/img/icon_4.jpg" alt=""></div>
                                        <div class="text">
                                            <h3>MIỄN PHÍ GIAO HÀNG</h3>
                                            <P>Cho hóa đơn từ 500.000đ</P>
                                        </div>
                                    </div>
                                </div>
                                <div  class="img_shop">
                                    <img src="public/img/nha-hang.jpg" alt="">
                                    <b>NHÀ HÀNG QUÁN ĂN</b>
                                    <p>Liên hệ qua số <a href="http://">0999.999.999</a> để được tư vấn và báo giá tốt</p>
                                </div>
                                <div class="product_noibat">
                                    
                                <?php $list_product_nb=get_list_product_noibat();
                                foreach($list_product_nb as $item) { 
                                    $slug=create_slug($item['title']);?>
                                <div class="box_product">
                                <a href="<?php echo $slug."sp".$item['product_id'].".htm"?>"><div class="anh"><img style="height: 100% !important;" src="admin/public/images/<?php echo $item['img']?>" alt=""></div></a>
                                <div class="content_product">
                                    <p class="name"> <a href="<?php echo $slug."sp".$item['product_id'].".htm"?>" ><?php echo $item['title']?></a></p>
                                    <div class="price"><?php echo currency_format($item['price']) ?></div>
                                    <div class="add_cart"><a href="?mod=cart&action=add_cart&product_id=<?php echo $item['product_id']?>">Thêm vào giỏ hàng</a></div>
                                </div>
                                </div>
                            <?php }?>
                                
                                </div>
                            </div>
                    </div>
                </div>
        </section>     
    </main>
<?php
get_footer();
?>