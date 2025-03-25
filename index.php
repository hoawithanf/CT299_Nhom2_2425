<?php
    $is_homepage = true;
    session_start();
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pink Pony Cosmetics</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Vietnamese</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Trang Chủ</a></li>
                <li><a href="./shop-grid.html">Mua Hàng</a></li>
                <li><a href="#">Trang</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Chi Tiết</a></li>
                        <li><a href="./shoping-cart.html">Giỏ Hàng</a></li>
                        <li><a href="./checkout.html">Thanh Toán</a></li>
                        <li><a href="./blog-details.html">Tin Tức</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> pinkpony@gmail.com</li>
                                <li>Miễn phí vận chuyển với hóa đơn từ 250k</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>Tiếng Việt</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Tiếng Việt</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Đăng Nhập</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo2.ico" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.php">Trang Chủ</a></li>
                            <li><a href="./shop.php">Mua Hàng</a></li>
                            <li><a href="#">Trang</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./sanpham.php?id=1">Chi Tiết Sản Phẩm</a></li>
                                    <li><a href="./cart.php">Giỏ Hàng</a></li>
                                    <li><a href="./checkout.html">Thanh Toán</a></li>
                                    <li><a href="./blog-details.html">Tin Tức</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.php">Liên Hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="cart.php"><i class="fa fa-shopping-bag"></i> <span>
                            <?php
                                    $cart = [];
                                    if (isset($_SESSION['cart'])) {
                                        $cart = $_SESSION['cart'];
                                    }
                                    $count = 0;
                                    $tongtien = 0;
                                    foreach ($cart as $item) {
                                        $count += $item['qty'];
                                        $tongtien += $item['qty'] * $item['price'];
                                    }
                                    echo $count;
                                ?>




                            </span></a></li>
                        </ul>
                        <div class="header__cart__price">Tổng: <span><?=number_format($tongtien, 0, '', '.'). "VND"?></span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Danh Mục Sản Phẩm</span>
                        </div>
                        <ul>
                            <?php
                                require('./db/conn.php');
                                $sql_str = "select * from categories order by name";
                                $result = mysqli_query($conn, $sql_str);
                                while ($row = mysqli_fetch_assoc($result)){
                            ?>
                            <li><a href="shop.php"><?=$row['name']?></a></li>

                            <?php } ?>
                            <!-- <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="timkiem.php" method="get">
                                <div class="hero__search__categories">
                                    Danh Mục
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" name="tukhoa" placeholder="Bạn cần tìm gì?">
                                <button type="submit" class="site-btn">Tìm Kiếm</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+84 437 465 442</h5>
                                <span>Hotline 24/7</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>Mỹ Phẩm Thiên Nhiên</span>
                            <h2>Vegan <br />100% Thuần Chay</h2>
                            <p>Cam Kết Không Thử Nghiệm Trên Động Vật</p>
                            <a href="shop.php" class="primary-btn">MUA NGAY</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                    <div class="section-title">
                        <h2>Danh Mục Sản Phẩm</h2>
                    </div>
                    
                <div class="categories__slider owl-carousel">
                    <?php
                        $sql_str = "select * from categories order by name";
                        $result = mysqli_query($conn, $sql_str);
                        while($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="img/categories/cat_img1.jpg">
                                <h5><a href="shop.php"><?=$row['name']?></a></h5>
                            </div>
                        </div>
                    <?php }?>                    
                    <!-- <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-2.jpg">
                            <h5><a href="#">Dried Fruit</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-3.jpg">
                            <h5><a href="#">Vegetables</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-4.jpg">
                            <h5><a href="#">drink fruits</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-5.jpg">
                            <h5><a href="#">drink fruits</a></h5>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản Phẩm Đặc Trưng</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Tất Cả</li>
                            
                            <?php
                                $sql_str = "select * from categories order by name";
                                $result = mysqli_query($conn, $sql_str);
                                while($row = mysqli_fetch_assoc($result)) {
                            ?>

                            <li data-filter=".<?=$row['slug']?>"><?=$row['name']?></li>

                            <?php } ?>
                            <!-- <li data-filter=".fresh-meat">Fresh Meat</li>
                            <li data-filter=".vegetables">Vegetables</li>
                            <li data-filter=".fastfood">Fastfood</li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                            <?php
                                $sql_str = "select products.id as pid, products.name as pname, images, price, categories.slug as cslug from products, categories
                                 where products.category_id=categories.id";
                                $result = mysqli_query($conn, $sql_str);
                                while($row = mysqli_fetch_assoc($result)) {
                                    $anh_arr = explode(';', $row['images']);
                            ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix <?=$row['cslug']?>">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?="quantri/".$anh_arr[0]?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="sanpham.php?id=<?=$row['pid']?>"><?=$row['pname']?></a></h6>
                            <h5><?=$row['price']?></h5>
                        </div>
                    </div>
                </div>
                            <?php } ?>
                
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-6.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-8.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Sản Phẩm Mới Nhất</h4>
                        <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
<?php
    $sql_str = "select * from products order by created_at desc limit 0, 3;";
    $result = mysqli_query($conn, $sql_str);
    while($row = mysqli_fetch_assoc($result)) {
        $anh_arr = explode(';', $row['images']);

?>
                                    
                                        <a href="sanpham.php?id=<?=$row['id']?>" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="<?="quantri/".$anh_arr[0]?>" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6><?=$row['name']?></h6>
                                                <span><?=$row['price']?></span>
                                            </div>
                                        </a>
<?php
    }
?>

                                    </div>
                                    <div class="latest-prdouct__slider__item">
<?php
    $sql_str = "select * from products order by created_at desc limit 3, 3;";
    $result = mysqli_query($conn, $sql_str);
    while($row = mysqli_fetch_assoc($result)) {
        $anh_arr = explode(';', $row['images']);

?>
                                    
                                        <a href="sanpham.php?id=<?=$row['id']?>" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="<?="quantri/".$anh_arr[0]?>" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6><?=$row['name']?></h6>
                                                <span><?=$row['price']?></span>
                                            </div>
                                        </a>
<?php
    }
?>

                                    </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Sản Phẩm Ưa Chuộng</h4>
                        <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
<?php
    $sql_str = "select * from products order by created_at desc limit 6, 3;";
    $result = mysqli_query($conn, $sql_str);
    while($row = mysqli_fetch_assoc($result)) {
        $anh_arr = explode(';', $row['images']);

?>
                                    
                                        <a href="sanpham.php?id=<?=$row['id']?>" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="<?="quantri/".$anh_arr[0]?>" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6><?=$row['name']?></h6>
                                                <span><?=$row['price']?></span>
                                            </div>
                                        </a>
<?php
    }
?>

                                    </div>
                                    <div class="latest-prdouct__slider__item">
<?php
    $sql_str = "select * from products order by created_at desc limit 9, 3;";
    $result = mysqli_query($conn, $sql_str);
    while($row = mysqli_fetch_assoc($result)) {
        $anh_arr = explode(';', $row['images']);

?>
                                    
                                        <a href="sanpham.php?id=<?=$row['id']?>" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="<?="quantri/".$anh_arr[0]?>" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6><?=$row['name']?></h6>
                                                <span><?=$row['price']?></span>
                                            </div>
                                        </a>
<?php
    }
?>

                                    </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Sản Phẩm Thử Nghiệm</h4>
                        <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
<?php
    $sql_str = "select * from products order by created_at desc limit 3, 3;";
    $result = mysqli_query($conn, $sql_str);
    while($row = mysqli_fetch_assoc($result)) {
        $anh_arr = explode(';', $row['images']);

?>
                                    
                                        <a href="sanpham.php?id=<?=$row['id']?>" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="<?="quantri/".$anh_arr[0]?>" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6><?=$row['name']?></h6>
                                                <span><?=$row['price']?></span>
                                            </div>
                                        </a>
<?php
    }
?>

                                    </div>
                                    <div class="latest-prdouct__slider__item">
<?php
    $sql_str = "select * from products order by created_at desc limit 0, 3;";
    $result = mysqli_query($conn, $sql_str);
    while($row = mysqli_fetch_assoc($result)) {
        $anh_arr = explode(';', $row['images']);

?>
                                    
                                        <a href="sanpham.php?id=<?=$row['id']?>" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="<?="quantri/".$anh_arr[0]?>" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6><?=$row['name']?></h6>
                                                <span><?=$row['price']?></span>
                                            </div>
                                        </a>
<?php
    }
?>

                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Tin Tức</h2>
                    </div>
                </div>
            </div>
            <div class="row">
<?php
    $sql_str="select * from news order by created_at desc limit 0,3";
    $result = mysqli_query($conn, $sql_str);
    while($row = mysqli_fetch_assoc($result)) {

?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="<?='quantri/'.$row['avatar']?>" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> <?=$row['created_at']?></li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="tintuc.php"><?=$row['title']?></a></h5>
                            <p><?=$row['sumary']?> </p>
                        </div>
                    </div>
                </div>
                <?php } ?>
                
                
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="index.php"><img src="img/logo2.ico" alt=""></a>
                        </div>
                        <ul>
                            <li>Địa chỉ: Khu II CTU, Xuân Khánh, Ninh Kiều, Cần Thơ</li>
                            <li>Phone: +84 437 442 465</li>
                            <li>Email: pinkpony@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Đường Dẫn</h6>
                        <ul>
                            <li><a href="#">Về chúng tôi</a></li>
                            <li><a href="#">Về sản phẩm</a></li>
                            <li><a href="#">Mua sắm an toàn</a></li>
                            <li><a href="#">Thông tin giao hàng</a></li>
                            <li><a href="#">Chính sách bảo mật</a></li>
                            <li><a href="#">Vị trí trên bản đồ</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Dương Hữu Đan</a></li>
                            <li><a href="#">B2203437</a></li>
                            <li><a href="#">Nguyễn Thị Ngọc Quyển</a></li>
                            <li><a href="#">B2203465</a></li>
                            <li><a href="#">Trịnh Ngọc Hòa</a></li>
                            <li><a href="#">B2203442</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Tham gia ngay với chúng tôi</h6>
                        <p>Nhận thông báo về các ưu đãi qua email</p>
                        <form action="#">
                            <input type="text" placeholder="Nhập email của bạn">
                            <button type="submit" class="site-btn">Đăng ký</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Pink Pony <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Nhóm 2</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>