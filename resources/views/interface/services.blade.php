<!DOCTYPE html>
<html lang="en"><head>
    <title>{{$cur_page->page_name}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <header class="header w-100 shadow">
        <div class="container">

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="./">
                        Logo
                    </a>
                    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link trangChu" href="./" style="display: none;">{{$pages[0]->page_name}}</a>
                            </li>
                            <?php for($i=1;$i<count($pages);$i++):if($pages[$i]->page_key=='administration'){continue;}?>
                            <li class="nav-item">
                                <a class="nav-link" href="{{$pages[$i]->page_uri}}">{{$pages[$i]->page_name}}</a>
                            </li>
                            <?php endfor?>
                            <li class="nav-item">
                                <button type="button" class="change_language">
                                    <span class="language_vi me-1">VI</span>
                                    <span class="language_en me-1" style="display: none;">En</span>
                                    <i class="fa-solid fa-globe"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </header>

    <main>
        <section class="breadcrumb-wrapper mb-5 py-3 py-lg-5">
            <div class="container">
                <nav class="breadcrumb d-flex justify-content-center">
                    <h1 class="breadcrumb-item text-center active">Dịch vụ</h1>
                </nav>
            </div>
        </section>

        <section id="service-main" class="mb-5">
            <div class="container">
                <div class="accordion accordion-flush" id="service_list">
                    <?php $sum=0;foreach($services as $service):$sum+=intval($service->service_price);?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="service_title-1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#service_content-1" aria-expanded="true" aria-controls="service_content-1">
                                {{$service->service_name}}
                                <strong>
                                    {{$service->service_price}}
                                </strong>
                            </button>
                        </h2>
                        <div id="service_content-1" class="accordion-collapse collapse" aria-labelledby="service_title-1" data-bs-parent="#service_list">
                            <div class="accordion-body">
                                {{$service->service_details}}
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="service_title-1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#service_content-1" aria-expanded="true" aria-controls="service_content-1">
                                TỔNG
                                <strong>
                                    {{$sum}}
                                </strong>
                            </button>
                        </h2>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer"><div class="footer py-3 py-lg-5">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-9">
                <a class="footer-logo" href="./">
                    Logo
                </a>
                <div class="footer-content mt-4">
                    <h1 class="fw-bold">Công ty TNHH ABCXYZ</h1>
                    <ul>
                        <li>
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <span>33 đường 33, phường 33, quận 33, Thành phố Hồ Chí Minh</span>
                        </li>
                        <li>
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <a href="mailto:abcxyz@gmail.com">
                                abcxyz@gmail.com
                            </a>
                        </li>
                        <li>
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <a href="tel:0200 000 0000">
                                0200 000 0000
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <ul class="footer-menu">
                <?php foreach($pages as $page):if($page->page_key=='administration'){continue;}?>
                    <li>
                        <a href="{{$page->page_uri}}">
                            {{$page->page_name}}
                        </a>
                    </li>
                <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="designby">
    Copyright <a href="#">IntelERP@2023</a>
</div>

<button id="scrollTopBtn" class="shadow" onclick="topFunction();" style="display: none;">
    <i class="fa-solid fa-angle-up"></i>
</button></footer>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#footer").load("footer.html");
        });
    </script>

    <script>
        $(".header .navbar-collapse .navbar-nav .nav-item:nth-child(4) .nav-link").addClass("active");
    </script>



</body></html>