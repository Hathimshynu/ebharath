<!DOCTYPE html>
<html lang="en">
<head>
    <title>BharatPay</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?=BASE_URL();?>assets/welcome/css/bootstrap.min.css">
    <script src="<?=BASE_URL();?>assets/welcome/js/jquery.min.js"></script>
    <script src="<?=BASE_URL();?>assets/welcome/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href="<?=BASE_URL();?>assets/welcome/css/style.css">
    <link href="https:<?=BASE_URL();?>assets/welcome/img/favicon.png" rel="icon">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <style>
            .header {
    background: #ffffff;
    box-shadow: unset;

}
.carousel-inner{
    height: 480px;
}
@media(max-width: 767px){
    .carousel-inner{
    height: 47vh;
}
}

    </style>
</head>
<body style="padding:0; ">
    <section class="p-0">
        <div class="row header">
            <div class="col-xs-2 logo">
                <a href="#"><img src="<?=BASE_URL();?>assets/welcome/img/favicon.png" style="height:35px;"></a>

            </div>
            <div class="col-xs-10 logo">
                <h3>Open with an app
                </h3>
                <div class="down-icon">
                    <a href="#" download><img src="<?=BASE_URL();?>assets/welcome/img/download-icon.png"></a>
                </div>
            </div>
        </div>
    </section>
    <section class="p-0">
        <div class="row welcome">
            <div class="col-lg-12 welcome-inner">
                <h2>Welcome back</h2>
                <h6>Quality Guarantee</h6>
            </div>
        </div>
    </section>
    <section>
        <div class="slider">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                     <li data-target="#myCarousel" data-slide-to="3"></li>
                      <li data-target="#myCarousel" data-slide-to="4"></li>
                       <li data-target="#myCarousel" data-slide-to="5"></li>
                        <li data-target="#myCarousel" data-slide-to="6"></li>
                         <li data-target="#myCarousel" data-slide-to="7"></li>
                         <li data-target="#myCarousel" data-slide-to="8"></li>
                         <li data-target="#myCarousel" data-slide-to="9"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="<?=BASE_URL();?>assets/welcome/img/1.jpg" alt="Los Angeles" style="width:100%;" class="slider-web" >
                        <img src="<?=BASE_URL();?>assets/welcome/img/1-small.jpg" alt="Los Angeles" style="width:100%;" class="slider-respon">
                    </div>
                    <div class="item">
                        <img src="<?=BASE_URL();?>assets/welcome/img/2.jpg" alt="Chicago" style="width:100%;" class="slider-web">
                        <img src="<?=BASE_URL();?>assets/welcome/img/2-small.jpg" alt="Chicago" style="width:100%;" class="slider-respon">
                    </div>
                    <div class="item">
                        <img src="<?=BASE_URL();?>assets/welcome/img/3.jpg" alt="Chicago" style="width:100%;" class="slider-web">
                        <img src="<?=BASE_URL();?>assets/welcome/img/3-small.jpg" alt="Chicago" style="width:100%;" class="slider-respon">
                    </div>
                     <div class="item">
                        <img src="<?=BASE_URL();?>assets/welcome/img/4.jpg" alt="Chicago" style="width:100%;" class="slider-web">
                        <img src="<?=BASE_URL();?>assets/welcome/img/4-small.jpg" alt="Chicago" style="width:100%;" class="slider-respon">
                    </div>
                     <div class="item">
                        <img src="<?=BASE_URL();?>assets/welcome/img/5.jpg" alt="Chicago" style="width:100%;" class="slider-web">
                        <img src="<?=BASE_URL();?>assets/welcome/img/5-small.jpg" alt="Chicago" style="width:100%;" class="slider-respon">
                    </div>
                     <div class="item">
                        <img src="<?=BASE_URL();?>assets/welcome/img/6.jpg" alt="Chicago" style="width:100%;" class="slider-web">
                        <img src="<?=BASE_URL();?>assets/welcome/img/6-small.jpg" alt="Chicago" style="width:100%;" class="slider-respon">
                    </div>
                     <div class="item">
                        <img src="<?=BASE_URL();?>assets/welcome/img/01.jpg" alt="Chicago" style="width:100%;" class="slider-web">
                        <img src="<?=BASE_URL();?>assets/welcome/img/7-small.jpg" alt="Chicago" style="width:100%;" class="slider-respon">
                    </div>
                    <div class="item">
                        <img src="<?=BASE_URL();?>assets/welcome/img/02.jpg" alt="Chicago" style="width:100%;" class="slider-web">
                        <img src="<?=BASE_URL();?>assets/welcome/img/8-small.jpg" alt="Chicago" style="width:100%;" class="slider-respon">
                    </div>
                    <div class="item">
                        <img src="<?=BASE_URL();?>assets/welcome/img/03.jpg" alt="Chicago" style="width:100%;" class="slider-web">
                        <img src="<?=BASE_URL();?>assets/welcome/img/9-small.jpg" alt="Chicago" style="width:100%;" class="slider-respon">
                    </div>
                    <div class="item">
                        <img src="<?=BASE_URL();?>assets/welcome/img/04.jpg" alt="Chicago" style="width:100%;" class="slider-web">
                        <img src="<?=BASE_URL();?>assets/welcome/img/10-small.jpg" alt="Chicago" style="width:100%;" class="slider-respon">
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
     <section>
        <div class="row product" style="margin-bottom:30px;">
            <div class="col-xs-6 product-inner">
                <div class="product-pic">
                    <div class="p1"></div>
                 
                    <h6>Joyalukkas 18k Rose Gold and Solitaire Pendant for Girls</h6>
                    <h6>&#8377; 38576.00</h6>
                    <a href="<?=BASE_URL();?>welcome/product" type="button" class="buy-btn">Buy Now</a>
                </div>

            </div>
            <div class="col-xs-6 product-inner">
                <div class="product-pic">
                    <div class="p2"></div>
                
                    <h6>Ratnavali Jewels American Diamond Traditional Jewellery </h6>
                   <h6>&#8377; 2899.00</h6>
                   <a href="<?=BASE_URL();?>welcome/product" type="button" class="buy-btn">Buy Now</a>
                </div>
            </div>
            <div class="col-xs-6 product-inner">
                <div class="product-pic">
                    <div class="p3"></div>
                   
                    <h6>Swasti Jewels Heart Shape Fashion Jewellery Set </h6>
                   <h6>&#8377; 4559.80</h6>
                   <a href="<?=BASE_URL();?>welcome/product" type="button" class="buy-btn">Buy Now</a>
                </div>
            </div>
            <div class="col-xs-6 product-inner">
                <div class="product-pic">
                    <div class="p4"></div>
                
                    <h6>Om Jewells Rhodium Plated Blue Crystal Jewellery Combo </h6>
                   <h6>&#8377; 1599.80</h6>
                   <a href="<?=BASE_URL();?>welcome/product" type="button" class="buy-btn">Buy Now</a>
                </div>
            </div>
            <div class="col-xs-6 product-inner">
                <div class="product-pic">
                    <div class="p5"></div>
                   
                    <h6>Sukkhi Gleaming Pearl Gold Plated Wedding Jewellery</h6>
                   <h6>&#8377; 1745.00</h6>
                   <a href="<?=BASE_URL();?>welcome/product" type="button" class="buy-btn">Buy Now</a>
                </div>
            </div>
            <div class="col-xs-6 product-inner">
                <div class="product-pic">
                    <div class="p6"></div>
                
                    <h6>Ananth Jewels 925 Sterling Silver BIS Hallmarked </h6>
                   <h6>&#8377; 9000.00</h6>
                   <a href="<?=BASE_URL();?>welcome/product" type="button" class="buy-btn">Buy Now</a>
                </div>

            </div>
            
             <div class="col-xs-6 product-inner">
                <div class="product-pic">
                    <div class="p7"></div>
                
                    <h6>Handicraft Kottage ® 1gm 22Ct Gold Plated Pendant</h6>
                    <h6>&#8377; 999.00</h6>
                    <a href="<?=BASE_URL();?>welcome/product" type="button" class="buy-btn">Buy Now</a>
                </div>

            </div>
            
             <div class="col-xs-6 product-inner">
                <div class="product-pic">
                    <div class="p8"></div>
              
                    <h6>Mansiyaorange Combo of Two Party One Gram Gold Forming </h6>
                    <h6>&#8377; 3199.00</h6>
                    <a href="<?=BASE_URL();?>welcome/product" type="button" class="buy-btn">Buy Now</a>
                </div>

            </div>
            
             <div class="col-xs-6 product-inner">
                <div class="product-pic">
                    <div class="p9"></div>
                 
                    <h6>Young & Forever Fashion Jewellery Elite Rose Gold Plated</h6>
                    <h6>&#8377; 4450.00</h6>
                    <a href="<?=BASE_URL();?>welcome/product" type="button" class="buy-btn">Buy Now</a>
                </div>

            </div>
            
             <div class="col-xs-6 product-inner">
                <div class="product-pic">
                    <div class="p10"></div>
                   
                    <h6>Ratnavali Jewels American Diamond Cz Gold Plated Necklace</h6>
                    <h6>&#8377; 4000.00</h6>
                    <a href="<?=BASE_URL();?>welcome/product" type="button" class="buy-btn">Buy Now</a>
                </div>

            </div>
            
             <div class="col-xs-6 product-inner">
                <div class="product-pic">
                    <div class="p11"></div>
               
                    <h6>chandrika pearls gems & jewellers Sania Mirza Style Without Piercing</h6>
                    <h6>&#8377; 278.00</h6>
                    <a href="<?=BASE_URL();?>welcome/product" type="button" class="buy-btn">Buy Now</a>
                </div>

            </div>
            
             <div class="col-xs-6 product-inner">
                <div class="product-pic">
                    <div class="p12"></div>
                   
                    <h6>Chandrika Pearls Gems &amp; Jewellers Sterling Silver Pendant </h6>
                    <h6>&#8377; 1060.00</h6>
                    <a href="<?=BASE_URL();?>welcome/product" type="button" class="buy-btn">Buy Now</a>
                </div>

            </div>
            
             <div class="col-xs-6 product-inner">
                <div class="product-pic">
                    <div class="p13"></div>
                   
                    <h6>Chandrika Sterling Silver Real Diamond Valentine Crown</h6>
                    <h6>&#8377; 1920.00</h6>
                    <a href="<?=BASE_URL();?>welcome/product" type="button" class="buy-btn">Buy Now</a>
                </div>

            </div>
            
             <div class="col-xs-6 product-inner">
                <div class="product-pic">
                    <div class="p14"></div>
                   
                    <h6>Chandrika Pearls Pure Sterling Silver Letters Initial Pendant</h6>
                    <h6>&#8377; 476.00</h6>
                    <a href="<?=BASE_URL();?>welcome/product" type="button" class="buy-btn">Buy Now</a>
                </div>

            </div>
            
             <div class="col-xs-6 product-inner">
                <div class="product-pic">
                    <div class="p15"></div>
                   
                    <h6>Chandrika Pearls Dhanteras Brass Hindu Puja Lamp</h6>
                    <h6>&#8377; 1880.00</h6>
                    <a href="<?=BASE_URL();?>welcome/product" type="button" class="buy-btn">Buy Now</a>
                </div>

            </div>
            
             <div class="col-xs-6 product-inner">
                <div class="product-pic">
                    <div class="p16"></div>
                   
                    <h6>Jewels Galaxy American Diamond Gold Plated Bangles</h6>
                    <h6>&#8377; 1999.00</h6>
                    <a href="<?=BASE_URL();?>welcome/product" type="button" class="buy-btn">Buy Now</a>
                </div>

            </div>
            
            <div class="col-xs-6 product-inner">
                <div class="product-pic">
                    <div class="p17"></div>
                   
                    <h6>Kharsini Jewellers German Oxidized Necklace</h6>
                    <h6>&#8377; 1999.00</h6>
                    <a href="<?=BASE_URL();?>welcome/product" type="button" class="buy-btn">Buy Now</a>
                </div>

            </div>
            
            <div class="col-xs-6 product-inner">
                <div class="product-pic">
                    <div class="p18"></div>
                   
                    <h6>Swan Stud Diamond Earrings</h6>
                    <h6>&#8377; 4999.00</h6>
                    <a href="<?=BASE_URL();?>welcome/product" type="button" class="buy-btn">Buy Now</a>
                </div>

            </div>
            
            <div class="col-xs-6 product-inner">
                <div class="product-pic">
                    <div class="p19"></div>
                   
                    <h6>Bonita Jeweller's Gold Necklace</h6>
                    <h6>&#8377; 5899.00</h6>
                    <a href="<?=BASE_URL();?>welcome/product" type="button" class="buy-btn">Buy Now</a>
                </div>

            </div>
            
            <div class="col-xs-6 product-inner">
                <div class="product-pic">
                    <div class="p20"></div>
                   
                    <h6>Bhima Jeweller's 18k Gold rose necklace</h6>
                    <h6>&#8377; 1999.00</h6>
                    <a href="<?=BASE_URL();?>welcome/product" type="button" class="buy-btn">Buy Now</a>
                </div>

            </div>
            
             

        </div>
    </section>
    <footer>
        <div class="row footer-inner">
            <div class="col-md-3 col-sm-3 col-xs-3 home">
            <a href="<?=BASEURL?>">
                <img src="<?=BASEURL;?>assets/welcome/img/nav/home.png">
                <p>Home</p></a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 search">
                <a href="<?=BASEURL?>">
                    <img src="<?=BASEURL?>assets/welcome/img/nav/search.png">
                    <p>Search</p></a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 win">
                <a href="<?=BASEURL?>welcome/win">
                    <img src="<?=BASEURL?>assets/welcome/img/nav/win.png">
                    <p>Win</p></a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 my">
                <a href="<?=BASEURL?>user">
                    <img src="<?=BASEURL;?>assets/welcome/img/nav/my.png">
                    <p>My</p></a>
            </div>
        </div>
    </footer>

<style>
    .whatsapp img {
        position: fixed;
        bottom: 150px;
        right: 0;
    }
    .refresh img {
        position: fixed;
        bottom: 80px;
        right: 0;
        max-width: 70px;
    }
</style>

<div class="row m-0">
    <div class="col-12 fix-btn">
        <!--<div class="whatsapp">-->
        <!--    <a target="_blank" href=""><img width="65" src="<?=BASE_URL();?>assets/welcome/img/telegram.png"></a>-->
        <!--</div>-->
        <div class="refresh">
            <a target="_blank" href=""> <img src="<?=BASE_URL();?>assets/welcome/img/refresh.png"></a>
        </div>
    </div>
</div>

<script src="<?=BASE_URL();?>assets/welcome/js/popper.min.js"></script>

<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }

    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>
</body>
</html>
