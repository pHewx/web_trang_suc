        <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <img width="100%" src="./admin/light-bootstrap-dashboard-master/examples/images/footer/1.jpg" alt="">
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center footer_bg pt-5" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
            <h4 class="mt-5">BE PART OF BAWATCH</h4>
            <p>Ai nói bạn không thể lựa chọn gia đình?</p>
            <p class="ketnoi">
                <span><i class="fab fa-facebook-f"></i></span>
                <span><i class="fab fa-instagram"></i></span>
                <span><i class="fab fa-youtube"></i></span>
            </p>
            <p>#BAWATCH</p>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 " data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <img width="100%" src="./admin/light-bootstrap-dashboard-master/examples/images/footer/2.jpg" alt="">
        </div>

    </div>
    <div class="bg-dark" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
        <div class="container d-flex justify-content-between align-items-center p-4">
            <div class="footer_item d-flex align-items-center color-white">
                <i style="font-size: 38px" class="fas fa-shield-alt me-3"></i>
                <p>BẢO HÀNH 10 NĂM LỖI NHÀ SẢN XUẤT</p>
            </div>
            <div class="footer_item d-flex align-items-center color-white">
                <i style="font-size: 38px" class="fas fa-shipping-fast me-3"></i>
                <p>FREESHIP VỚI ĐƠN HÀNG TỪ >999K</p>
            </div>
            <div class="footer_item d-flex align-items-center color-white">
                <i style="font-size: 38px" class="fas fa-medal me-3"></i>
                <p>CAM KẾT 100% HÀNG CHÍNH HÃNG</p>
            </div>
        </div>
    </div>

    <div class="footer_login mt-5">
        <div class="header_footer_login text-center">
            <h5>ĐĂNG KÍ NHẬN TIN MỚI</h5>
            <p>Nhận các tin tức về chương trình và khuyến mãi sớm nhất !</p>
        </div>
        <div class="login_footer" style="max-width: 800px; margin: 20px auto;">
            <form method="post" action="" class="d-flex justify-content-between">
                <div class="mb-3">
                    <input style="width: 260px; height:50px" placeholder="Email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <input style="width: 260px; height:50px" placeholder="Password" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-dark text-white">ĐĂNG KÝ</button>
            </form>
        </div>
    </div>
    <div class="d-flex flex-column justify-content-center" style=" background-color: #F8F7F4; padding: 63px 16px ;
" >
        <h3 class="text-center" style="font-size: 32px;line-height: 32px;">CƠ SỞ</h3>
        <p class="description">Trải dài từ Bắc ra Nam</p>
        <div class="row d-flex justify-content-center gap-3">
            <div id="map" class="col-md-4"></div>
            <div id="stores" class="col-md-4">
                <div class ="storeList"></div>
            </div>
        </div>
    </div>
    <div class="footer_end" style="padding: 40px 0">

        <div class="row container">
        <?php 
            $sql = "SELECT * FROM `setting`";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo '
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <p class="mb-3">'.$row['address'].'</p>
                        <p>'.$row['note'].'</p>
                    </div>
                    ';
                }
            }else{
                echo '
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <p class="mb-3">© 2021 - Bản quyền của CTCP PHÁT TRIỂN SẢN PHẨM SÁNG TẠO VIỆT</p>
                        <p>Giấy chứng nhận ĐKKD số 0108150321 do Sở Kế hoạch và Đầu tư Thành phố Hà Nội cấp ngày 29/01/2021 123C Thụy Khuê, Tây Hồ, Hà Nội</p>
                    </div>
                    ';
            }
        ?>
            

           
        </div>

    </div>
</div>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">
    bkLib.onDomLoaded(nicEditors.allTextAreas);
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
<script src="./js/video.js"></script>
<script src="./js/ajax.js"></script>
<script src="./js/app.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<script>
    AOS.init();
</script>
<script>
    const storeListElement = document.querySelector(".storeList");

            console.log(storeListElement)

    const stores =[
        {
            label: 'HANOI STORES',
            adressList: [
                {
                    address: "33 Hàm Long, Hoàn Kiếm.",
                    coords: {lat : 21.019518979681365, lng: 105.85231836767251}
                },
                {
                    address: "9 B7 Phạm Ngọc Thạch, Đống Đa.", 
                    coords: {lat : 21.01014891396903, lng: 105.83600505259083}
                },
                {
                    address: "173C Kim Mã, Ba Đình.",
                    coords: {lat : 21.03163913465346, lng: 105.82401826608542}
                },
                {
                    address: "82 Cầu Giấy, Quan Hoa, Cầu Giấy.",
                    coords: {lat : 21.03136585278573, lng: 105.80041611981497}
                },
            ]
           
        },
        {
            label: 'TP.HCM STORES',
            adressList: [
                {
                    address: "25 Nguyễn Trãi, P.Bến Thành, Quận 1.",
                    coords: {lat : 20.997796657548264, lng: 105.81155840841363}
                },
                {
                    address: "348 Lê Văn Sỹ, Phường 14, Quận 3.", 
                    coords: {lat : 10.787714213273707, lng: 106.67886529470891}
                },
                {
                    address: "349 Quang Trung, Phường 10, Quận Gò Vấp.",
                    coords: {lat : 10.829996782053396, lng: 106.67077751005088}
                },
            ]
        }
    ]

    let html = stores.map(store => {
        return `
            <div>
                <p class="label">${store.label}</p>
                <ul>
                    ${
                     store.adressList.map(item => `<li class="item">${item.address}</li>`).join("")
                    }
                </ul>
            </div>
        `
    }).join("");

    console.log(html)

    storeListElement.innerHTML = html;




function initMap() {
  var map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 21.0168864, lng: 105.7855574 },
    zoom: 12
  });
}
</script>
<script src="./js/sanpham.js?<?php echo time(); ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZUfNCb9pYD-duM2Oq09tQDAtpxt9n2sE&callback=initMap" async defer></script>

</body>

</html>