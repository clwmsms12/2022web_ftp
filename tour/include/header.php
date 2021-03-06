
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:title" content="Starbucks Coffee Korea" />
    <meta property="og:image" content="./images/logo.png" />

    <title>팜투어</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.5/swiper-bundle.css" integrity="sha512-wMTbLMebj4OAT4mU2nV6XvE8QuTHOrwPKNaGuGF2wiaNU9IHea/bgJcKP/DtG+c3+LbNu54evMgWOWPvN/7iDQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.5/swiper-bundle.min.js" integrity="sha512-g+qKl+LYdI74iYWV+VI91ahB/N6mVjrP8aGCtyIGvM2FkgpwbEEey0eUVUuqNn94yYS6/WxVwTawukEqaf+53A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <script>
        var slide = $(document).ready(function(){
            $(".slide").bxSlider({
                controls:false,
                pagerCustom:".slideTap",
                mode:"vertical"
            })
        })
    </script>

</head>
<body>
    <header class="headerWrap">
        <div class="header">
            <h1><img src="images/bottom_logo_new.png" alt=""></h1>
            <div class="search">
                <form action="#">
                    <input type="text" name="search" placeholder="검색어를 입력하세요." class="inp">
                </form>
                <p class="title">SEARCH</p>
                <div class="dot">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
            <img src="images/top_roll3.png" alt="">
        </div>
    </header>
    <div class="topMenu">
        <ul class="clearfix">
            <li>
                <h5><a href="tour.html">회사소개</a></h5>
            </li>
            <li>
                <h5><a href="tour2.html">EVENT</a></h5>
            </li>
            <li>
                <h5><a href="tour3.html">리조트</a></h5>
            </li>
            <li>
                <h5><a href="tour4.html">여행TIP</a></h5>
            </li>
            <li>
                <h5><a href="tour5.html">고객센터</a></h5>
            </li>
            <li>
                <h5><a href="tour6.html">커뮤니티</a></h5>
            </li>
        </ul>
    </div>
    <div class="line1"></div>