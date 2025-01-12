<?php require('layout/header.php') ?>
<style>
    main {
        font-family: "Encode Sans SC", sans-serif;
    }

    .row img {
        max-width: 100%;
    }
</style>
<main>
    <div class="container">
        <div id="ant-layout">
            <section class="search-quan">
                <i class="fas fa-search"></i>
                <form action="thucdon.php" method="GET">
                    <input name="search" type="text" placeholder="Tìm món hoặc thức ăn">
                </form>
            </section>
            <section class="main">
                <div class="row">
                    <h3>WixShop là gì?</h3>
                    <p>Tại Wixshop, chúng tôi hiểu rằng một bữa ăn ngon có thể mang lại cho bạn sức khoẻ và tinh thần thoải mái nhất. Vì vậy, WixShop cho ra mắt dịch vụ trên GrabFood, nhằm kết nối các nhà hàng, quán ăn tại địa phương với tất cả mọi người. Bạn chỉ cần đặt món ăn yêu thích trên GrabFood, đội ngũ giao hàng của chúng tôi sẽ nhanh chóng mang đến cho bạn bữa ăn nóng hổi và ngon lành.</p>
                </div>
                <div class="row">
                    <h3>WixShop hoạt động như thế nào?</h3>
                    <p>WixShop hoạt động từ 7h đến 22h hằng ngày, tuỳ theo khu vực của bạn và thời gian mở cửa cụ thể của từng nhà hàng, quán ăn.</p>
                </div>
                <div class="row">
                    <img src="images/bg/GrabFood.jpg" alt="">

                    <h3>Những nhà hàng, quán ăn nào trong khu vực của tôi giao hàng qua GrabFood?</h3>
                    <p>Để xem danh sách các nhà hàng, quán ăn có giao hàng qua GrabFood bạn chỉ cần nhập địa chỉ của mình trên ứng dụng. Để đảm bảo đồ ăn nóng hổi, tươi ngon và được giao đến bạn nhanh chóng, GrabFood sẽ quét vị trí của bạn và gợi ý danh sách nhà hàng, quán ăn ở gần vị trí bạn nhất.</p>
                </div>
                <div class="row">
                    <h3>Tôi có thể thanh toán bằng tiền mặt không?</h3>
                    <p>Có nhé!</p>
                </div>
                <div class="row">
                    <h3>Tôi có thể thanh toán bằng GrabPay không?</h3>
                    <p>Hiện tại bạn chưa thể thanh toán GrabFood bằng GrabPay. Chúng tôi đang cố gắng để áp dụng phương thức thanh toán này cho dịch vụ GrabFood trong thời gian sớm nhất</p>
                </div>
                <div class="row">
                    <h3>Chi phí được tính như thế nào?</h3>
                    <p>Chi phí hiển thị trên ứng dụng bao gồm chi phí của phần ăn theo đơn giá của nhà hàng và phí vận chuyển.</p>
                </div>
                <div class="row">
                    <h3>Tôi có thể đặt giao nhận những món ăn nào qua GrabFood?</h3>
                    <p>Danh sách đa dạng các món ăn của chúng tôi bao gồm: món Việt, Tây, Á, món theo phong cách Fusion,… có thể phục vụ cho mọi nhu cầu ăn uống của bạn.</p>
                </div>
                <div class="row">
                    <h3>Tôi có thể tìm thấy những nhà hàng, quán ăn nào trong khu vực của mình?</h3>
                    <p>Danh sách nhà hàng, quán ăn được sắp xếp dựa theo khoảng cách và thời gian giao hàng dự kiến từ Địa chỉ giao thức ăn đến vị trí của bạn.</p>
                </div>
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=11075Qi8n-XytUCon69ANL5jVPbcbdXc&ehbc=2E312F" width="640" height="480"></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/jJoFCFcJHsI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </section>
        </div>
    </div>
</main>
<?php require('layout/footer.php') ?>