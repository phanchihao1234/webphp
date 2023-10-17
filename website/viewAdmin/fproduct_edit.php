<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/web/website/viewAdmin/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/web/website/viewAdmin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/web/website/viewAdmin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/web/website/viewAdmin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/web/website/viewAdmin/css/style.css" rel="stylesheet">

</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php
        include 'side3.php';
        ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php
            include 'nav3.php';
            ?>
            <!-- Navbar End -->
            <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <div class="col-md-8">
                        <form action="product_update.php" method='post' enctype="multipart/form-data">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Form edit product</h6>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="idproduct" value="<?php echo $detail['idproduct'] ?>" readonly
                                    placeholder="name@example.com">
                                <label for="floatingInput">Mã sp</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword" name="ten" value="<?php echo $detail['ten'] ?>"
                                    placeholder="text">
                                <label for="floatingPassword">Tên sp</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingPassword" name="gia" value="<?php echo $detail['gia'] ?>">
                                <label for="floatingPassword">Giá</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingPassword" name="gia_km" value="<?php echo $detail['gia_km'] ?>">
                                <label for="floatingPassword">Giá khuyến mãi</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" name="idcat"
                                    aria-label="Floating label select example">
                                    <option selected>Open this select menu</option>
                                    <?php foreach($datacat as $item){ 
                                        $s =''; 
                                        if($detail['idcat']==$item['idcat']) $s ='selected';
                                        ?>
                                    <option value="<?php echo $item['idcat'] ?>" <?php echo $s;?>>
                                    <?php echo $item['name'] ?></option>
                                    <?php } ?>
                                </select>
                                <label for="floatingSelect">Danh mục</label>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" name="mota"
                                    id="floatingTextarea" style="height: 150px;"><?php echo $detail['mota'] ?></textarea>
                                <label for="floatingTextarea">Mô tả</label>
                            </div>
                            <div class="mt-3 mb-3">
                                <input class="form-control mb-3" type="file" id="formFile" name="img" > 
                                <img src="<?php echo '../images/'. $detail['img']?>" name="img1" style="width: 200px">
                            </div>
                            <input type="submit" value="Thay đổi">
                        </div> 
                        </form>
                    </div>
                </div>
            </div>


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php
    include 'script.php';
    ?>
</body>

</html>