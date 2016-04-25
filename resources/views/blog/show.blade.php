@extends('layouts.app')

@section('style')
    {!! Html::style('css/index.css') !!}
    {!! Html::style('css/blog.css') !!}
@endsection

@section('content')
    <div id="content">
        <section class="blogs blogs-wrapper" id="blogs">
            <div class="container">
                <div class="col-lg-8 col-md-8 col-sm-8 blog-area-left">
                    <div class="blog-detail-content">
                        <div class="owners">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                <a href="#" class="author_avatar">
                                    <img alt="" src="../img/blogs/author2.jpg">
                                </a>
                            </div>
                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                <a href="#" class="author_name">John Smith</a>
                                <p>Chia sẻ blog - 25/03/2016 - 17:55 | TP. HCM</p>
                            </div>
                        </div>
                        <h1 class="blog-title">(HCM) Khám phá 10 quán cà phê “chất” nhất Sài thành</h1>
                        <div class="content">
                            <div class="content-main">
                                <h2>
                                    <strong style="font-size: 16px;">1. L’Usine</strong>
                                </h2>
                                <p>
                                    <span>Quán cà phê kiêm cửa hàng quần áo và phòng trưng bày nghệ thuật này nằm trong tòa nhà từng là Hotel de Saigon được xây dựng từ những năm 1890. L’Usine được tờ CNTraveler bình chọn là một trong những lý do để du khách tới TP HCM.</span>
                                </p>
                                <p>
                                    <img alt="" src="../img/blogs-connect/blogs1.jpg">
                                </p>
                                <p>
                                    <span>Những bức tường gạch trắng và đèn kiểu cổ tạo cho quán một phong cách du mục thú vị. Ngoài các món cà phê truyền thống của Việt Nam, du khách còn có thể thưởng thức những đồ uống và món ăn được chế biến theo phong cách châu Âu.</span>
                                </p>
                                <p>
                                    <img alt="" src="../img/blogs-connect/blogs2.jpg">
                                </p>
                                <p>
                                    <span>Hộn vịt lộn là món ăn rất phổ biến trong cuộc sống hằng ngày của người Việt. Bạn có thể dễ dàng thưởng thức món ăn này tại quán cóc ở một con phố nào bất kỳ. Đối với nhiều người, món ăn có phần dã man, kinh dị khi bên trong có con vịt bé xíu với một lớp lông tơ xung quanh, tuy nhiên, nó vẫn là món ăn khoái khẩu của rất nhiều người.</span>
                                </p>
                                <h2>
                                    <strong style="font-size: 16px;">2. Runam Cafe</strong>
                                </h2>
                                <p>
                                    <span>Runam được lòng du khách quốc tế bởi thiết kế tuyệt đẹp, với những bức tường cây xanh mát, đèn tỏa ánh sáng ấm áp. Khu ngoài trời có các ghế sofa và nhiều góc nhỏ tĩnh lặng để bạn đọc sách và nhấm nháp cà phê.</span>
                                </p>
                                <p>
                                    <img alt="" src="../img/blogs-connect/blogs3.jpg">
                                </p>
                                <p>
                                    <img alt="" src="../img/blogs-connect/blogs4.jpg">
                                </p>
                                <p>
                                    <span>Ngoài cà phê sữa đá nổi tiếng, quán còn có nhiều loại đồ uống độc đáo, như Sand Dune (Cồn Cát) được pha từ cà phê espresso với rượu rum, wishkey và rượu đường.</span>
                                </p>
                                <p>
                                    <img alt="" src="../img/blogs-connect/blogs5.jpg">
                                </p>
                                <p style="text-align: right;">
                                    <strong><span style="font-size: 14px; text-align: right;">Mimi Nguyễn</span></strong>
                                </p>
                            </div>

                            <div class="social">
                                <ul class="like-comment">
                                    <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                    <li><i class="fa fa-comments fa-mg-right"></i>52</li>
                                </ul>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                                <input type="text" id="comment" placeholder="Viết Bình Luận...">
                                <div class="comment">
                                    <div class="wrapper">
                                        <div class="avatar-comment">
                                            <a href="#"><img alt="" src="../img/comments/commenter10.jpg"></a>
                                        </div>
                                        <div class="cmt-wrapper">
                                            <div class="name">
                                                <h5 class="bold"><a href="#">Yoona</a></h5>
                                            </div>
                                            <div class="cmt-content">
                                                <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="wrapper">
                                        <div class="avatar-comment">
                                            <a href="#"><img alt="" src="../img/comments/commenter11.jpg"></a>
                                        </div>
                                        <div class="cmt-wrapper">
                                            <div class="name">
                                                <h5 class="bold"><a href="#">Park So-yeon</a></h5>
                                            </div>
                                            <div class="cmt-content">
                                                <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="wrapper">
                                        <div class="avatar-comment">
                                            <a href="#"><img alt="" src="../img/comments/commenter12.jpg"></a>
                                        </div>
                                        <div class="cmt-wrapper">
                                            <div class="name">
                                                <h5 class="bold"><a href="#">Hyomin</a></h5>
                                            </div>
                                            <div class="cmt-content">
                                                <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row blogs-more">
                                <div class="other-header bold">Bài Viết Khác</div>
                                <div class="col-xs-6 col-md-3 item-blog">
                                    <div class="card">
                                        <div class="img-container">
                                            <a href="#"><img alt="" src="../img/blogs-connect/anothers/an1.jpg"></a>
                                        </div>
                                        <div class="info">
                                            <div class="name"><a href="blog-detail.html">Cuộc đua quán quân của các thức uống</a></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-md-3 item-blog">
                                    <div class="card">
                                        <div class="img-container">
                                            <a href="#"><img alt="" src="../img/blogs-connect/anothers/an2.jpg"></a>
                                        </div>
                                        <div class="info">
                                            <div class="name"><a href="blog-detail.html">Các món ăn vặt "sốt rần rần" ở Hà Nội</a></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-md-3 item-blog">
                                    <div class="card">
                                        <div class="img-container">
                                            <a href="#"><img alt="" src="../img/blogs-connect/anothers/an3.jpg"></a>
                                        </div>
                                        <div class="info">
                                            <div class="name"><a href="blog-detail.html">Phát thèm trước 6 thương hiệu trà sữa</a></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-md-3 item-blog">
                                    <div class="card">
                                        <div class="img-container">
                                            <a href="#"><img alt="" src="../img/blogs-connect/anothers/an4.jpg"></a>
                                        </div>
                                        <div class="info">
                                            <div class="name"><a href="blog-detail.html">Cận cảnh 2 lễ hội ẩm thực hoành tráng</a></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-md-3 item-blog">
                                    <div class="card">
                                        <div class="img-container">
                                            <a href="#"><img alt="" src="../img/blogs-connect/anothers/an5.jpg"></a>
                                        </div>
                                        <div class="info">
                                            <div class="name"><a href="blog-detail.html">Khám phá khu chợ ăn uống bật nhất HCM</a></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-md-3 item-blog">
                                    <div class="card">
                                        <div class="img-container">
                                            <a href="#"><img alt="" src="../img/blogs-connect/anothers/an6.jpg"></a>
                                        </div>
                                        <div class="info">
                                            <div class="name"><a href="blog-detail.html">5 điểm quanh Hà Nội chụp #ootd đẹp mê</a></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-md-3 item-blog">
                                    <div class="card">
                                        <div class="img-container">
                                            <a href="#"><img alt="" src="../img/blogs-connect/anothers/an7.jpg"></a>
                                        </div>
                                        <div class="info">
                                            <div class="name"><a href="blog-detail.html">Điểm mặt những món online được order</a></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-md-3 item-blog">
                                    <div class="card">
                                        <div class="img-container">
                                            <a href="#"><img alt="" src="../img/blogs-connect/anothers/an8.jpg"></a>
                                        </div>
                                        <div class="info">
                                            <div class="name"><a href="blog-detail.html">Đi ăn bánh cống độc nhất vô nhị tại HCM</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 blog-area-right">
                    <div id="chuyen-de-right">
                        <div class="tabs-box">
                            <ul class="clearfix">
                                <li class="active"><a href="#topnew">Mới nhất</a></li>
                                <li class=""><a href="#topview">Xem nhiều nhất</a></li>
                            </ul>

                            <div id="topnew" class="build-tab">
                                <div class="article-new clearfix">
                                    <a href="blog-detail.html">
                                        <img alt="" src="../img/blogs-connect/anothers/an1.jpg">
                                    </a>
                                    <div class="article-new-content">
                                        <div class="article-new-title">
                                            <a href="blog-detail.html" title="Cuộc đua giành quán quân của các thức uống trên cả tuyệt vời">Cuộc đua giành quán quân của các thức uống trên cả tuyệt vời</a>
                                        </div>
                                        <div class="article-new-description">
                                            Thức uống cũng sành điệu quá nè.
                                        </div>
                                    </div>
                                </div>

                                <div class="article-new clearfix">
                                    <a href="blog-detail.html">
                                        <img alt="" src="../img/blogs-connect/anothers/an2.jpg">
                                    </a>
                                    <div class="article-new-content">
                                        <div class="article-new-title">
                                            <a href="blog-detail.html" title="Các món ăn vặt đang sốt rần rần ở Hà Nội">Các món ăn vặt đang "sốt rần rần" ở Hà Nội</a>
                                        </div>
                                        <div class="article-new-description">
                                            Hà Nội truyền thống dần nhường chỗ cho hàng trăm món ăn vặt mới lạ, update mỗi ngày. Các bạn đã thử hết
                                        </div>
                                    </div>
                                </div>

                                <div class="article-new clearfix">
                                    <a href="blog-detail.html">
                                        <img alt="" src="../img/blogs-connect/anothers/an3.jpg">
                                    </a>
                                    <div class="article-new-content">
                                        <div class="article-new-title">
                                            <a href="blog-detail.html" title="Bí kíp du lịch đảo Nam Du chỉ 1 triệu 7">Bí kíp du lịch đảo Nam Du chỉ 1 triệu 7</a>
                                        </div>
                                        <div class="article-new-description">
                                            Nam Du (Kiên Giang) hứa hẹn sẽ là điểm đến cực “hot” mùa hè này bởi làn nước trong xanh, hàng dừa rợp bóng
                                        </div>
                                    </div>
                                </div>

                                <div class="article-new clearfix">
                                    <a href="blog-detail.html">
                                        <img alt="" src="../img/blogs-connect/anothers/an4.jpg">
                                    </a>
                                    <div class="article-new-content">
                                        <div class="article-new-title">
                                            <a href="blog-detail.html" title="Cuộc đua giành quán quân của các thức uống trên cả tuyệt vời">Cuộc đua giành quán quân của các thức uống trên cả tuyệt vời</a>
                                        </div>
                                        <div class="article-new-description">
                                            Thức uống cũng sành điệu quá nè.
                                        </div>
                                    </div>
                                </div>

                                <div class="article-new clearfix">
                                    <a href="blog-detail.html">
                                        <img alt="" src="../img/blogs-connect/anothers/an5.jpg">
                                    </a>
                                    <div class="article-new-content">
                                        <div class="article-new-title">
                                            <a href="blog-detail.html" title="Các món ăn vặt đang sốt rần rần ở Hà Nội">Các món ăn vặt đang "sốt rần rần" ở Hà Nội</a>
                                        </div>
                                        <div class="article-new-description">
                                            Hà Nội truyền thống dần nhường chỗ cho hàng trăm món ăn vặt mới lạ, update mỗi ngày. Các bạn đã thử hết
                                        </div>
                                    </div>
                                </div>

                                <div class="article-new clearfix">
                                    <a href="blog-detail.html">
                                        <img alt="" src="../img/blogs-connect/anothers/an6.jpg">
                                    </a>
                                    <div class="article-new-content">
                                        <div class="article-new-title">
                                            <a href="blog-detail.html" title="Bí kíp du lịch đảo Nam Du chỉ 1 triệu 7">Bí kíp du lịch đảo Nam Du chỉ 1 triệu 7</a>
                                        </div>
                                        <div class="article-new-description">
                                            Nam Du (Kiên Giang) hứa hẹn sẽ là điểm đến cực “hot” mùa hè này bởi làn nước trong xanh, hàng dừa rợp bóng
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="topview" class="build-tab" style="display: none;">
                                <div class="article-new clearfix">
                                    <a href="blog-detail.html">
                                        <img alt="" src="../img/blogs-connect/anothers/an6.jpg">
                                    </a>
                                    <div class="article-new-content">
                                        <div class="article-new-title">
                                            <a href="blog-detail.html" title="Cuộc đua giành quán quân của các thức uống trên cả tuyệt vời">Cuộc đua giành quán quân của các thức uống trên cả tuyệt vời</a>
                                        </div>
                                        <div class="article-new-description">
                                            Thức uống cũng sành điệu quá nè.
                                        </div>
                                    </div>
                                </div>

                                <div class="article-new clearfix">
                                    <a href="blog-detail.html">
                                        <img alt="" src="../img/blogs-connect/anothers/an5.jpg">
                                    </a>
                                    <div class="article-new-content">
                                        <div class="article-new-title">
                                            <a href="blog-detail.html" title="Các món ăn vặt đang sốt rần rần ở Hà Nội">Các món ăn vặt đang "sốt rần rần" ở Hà Nội</a>
                                        </div>
                                        <div class="article-new-description">
                                            Hà Nội truyền thống dần nhường chỗ cho hàng trăm món ăn vặt mới lạ, update mỗi ngày. Các bạn đã thử hết
                                        </div>
                                    </div>
                                </div>

                                <div class="article-new clearfix">
                                    <a href="blog-detail.html">
                                        <img alt="" src="../img/blogs-connect/anothers/an4.jpg">
                                    </a>
                                    <div class="article-new-content">
                                        <div class="article-new-title">
                                            <a href="blog-detail.html" title="Bí kíp du lịch đảo Nam Du chỉ 1 triệu 7">Bí kíp du lịch đảo Nam Du chỉ 1 triệu 7</a>
                                        </div>
                                        <div class="article-new-description">
                                            Nam Du (Kiên Giang) hứa hẹn sẽ là điểm đến cực “hot” mùa hè này bởi làn nước trong xanh, hàng dừa rợp bóng
                                        </div>
                                    </div>
                                </div>

                                <div class="article-new clearfix">
                                    <a href="blog-detail.html">
                                        <img alt="" src="../img/blogs-connect/anothers/an3.jpg">
                                    </a>
                                    <div class="article-new-content">
                                        <div class="article-new-title">
                                            <a href="blog-detail.html" title="Cuộc đua giành quán quân của các thức uống trên cả tuyệt vời">Cuộc đua giành quán quân của các thức uống trên cả tuyệt vời</a>
                                        </div>
                                        <div class="article-new-description">
                                            Thức uống cũng sành điệu quá nè.
                                        </div>
                                    </div>
                                </div>

                                <div class="article-new clearfix">
                                    <a href="blog-detail.html">
                                        <img alt="" src="../img/blogs-connect/anothers/an2.jpg">
                                    </a>
                                    <div class="article-new-content">
                                        <div class="article-new-title">
                                            <a href="blog-detail.html" title="Các món ăn vặt đang sốt rần rần ở Hà Nội">Các món ăn vặt đang "sốt rần rần" ở Hà Nội</a>
                                        </div>
                                        <div class="article-new-description">
                                            Hà Nội truyền thống dần nhường chỗ cho hàng trăm món ăn vặt mới lạ, update mỗi ngày. Các bạn đã thử hết
                                        </div>
                                    </div>
                                </div>

                                <div class="article-new clearfix">
                                    <a href="blog-detail.html">
                                        <img alt="" src="../img/blogs-connect/anothers/an1.jpg">
                                    </a>
                                    <div class="article-new-content">
                                        <div class="article-new-title">
                                            <a href="blog-detail.html" title="Bí kíp du lịch đảo Nam Du chỉ 1 triệu 7">Bí kíp du lịch đảo Nam Du chỉ 1 triệu 7</a>
                                        </div>
                                        <div class="article-new-description">
                                            Nam Du (Kiên Giang) hứa hẹn sẽ là điểm đến cực “hot” mùa hè này bởi làn nước trong xanh, hàng dừa rợp bóng
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            //  When user clicks on tab, this code will be executed
            $(".tabs-box li").click(function() {
                // remove class "active" from currently active tab
                $(".tabs-box li").removeClass('active');
                // add class "active" to the selected/clicked tab
                $(this).addClass("active");
                //  Hide all tab content
                $(".build-tab").hide();
                //get the href value of the selected tab
                var selected_tab = $(this).find("a").attr("href");
                //  Show the selected tab content
                $(selected_tab).fadeIn();
                //add return false so that the click on the link is not executed
                return false;
            });
        });
    </script>
@endsection