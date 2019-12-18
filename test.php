<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		#btn:hover{
			color: red;
		}
	</style>
	<script type="text/javascript">
		function Popup(){
			var Btn = document.getElementById("btn");
			var up = document.getElementById("popup");
			if(up.style.display="none"){
				up.style.display="block";
			}
		}
		function Close(){
			var up = document.getElementById("popup");
			if(up.style.display="block"){
				up.style.display="none";
			}
		}
	</script>
</head>
<body>
	<div onclick="Popup()" id="btn">click</div>
	<div id="modal_buy_now" class="modal fade" style="display: block;">
		
							    <div class="modal-dialog" id="popup">
							        <div class="modal-content">
							            <div class="modal-header">
							                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="close" onclick="Close()">×</button>
							                <div class="modal-title"><span>Đặt hàng ngay - thông tin đặt hàng</span>
							                </div>
							            </div>
							            <div class="modal-body">
							                <form action="" name="eshopcart_info" method="post" id="eshopcart_info">
							                    <div class="row cls">
							                        <div class=" col-modal-l">
							                            <div class="media-box">
							                                <div class="pull-left">
							                                    <div class="media-img ">
							                                        <img class="img-responsive " src="https://vugiaphat.vn/images/products/2019/05/16/resized/phong-xong-hoi-kho_1557994189.png" alt="Thiết kế phòng xông hơi khô 1mx1mx2m">
							                                    </div>
							                                </div>
							                                <div class="media-body">
							                                    <h2>Thiết kế phòng xông hơi khô 1mx1mx2m</h2>


							                                    <div>
							                                        <strong>Số lượng</strong>
							                                        <input class="quantity_modal" type="text" name="quantity" value="1" id="quantity_modal">
							                                    </div>
							                                    <div class="price_modal">
							                                        19.500.000đ </div>
							                                </div>
							                                <div class="clear"></div>
							                            </div>
							                        </div>
							                        <div class=" col-modal-r">
							                            <div class="input_text_wrap">
							                                <input type="text" name="sender_name" id="sender_name" placeholder="Họ và tên" value="" class="input_text">
							                            </div>
							                            <div class="input_text_wrap">
							                                <input type="text" name="sender_telephone" id="sender_telephone" placeholder="Điện thoại" value="" class="input_text">
							                            </div>
							                            <div class="input_text_wrap">
							                                <input type="text" name="sender_address" id="sender_address" placeholder="Địa chỉ" value="" class="input_text">
							                            </div>

							                            <select class="input_text" name="city_receiver">
							                                <option value="0" data-price="0" data-type="species">Tỉnh/TP nhận hàng</option>
							                                <option value="Hà Nội">Hà Nội</option>
							                                <option value="TP HCM">TP HCM</option>
							                                <option value="Bắc Kinh">Bắc Kinh</option>
							                                <option value="Hải Phòng">Hải Phòng</option>
							                                <option value="Đà Nẵng">Đà Nẵng</option>
							                                <option value="Cần Thơ">Cần Thơ</option>
							                                <option value="Nước Ngoài">Nước Ngoài</option>
							                                <option value="Bắc Giang">Bắc Giang</option>
							                                <option value="Bắc Kạn">Bắc Kạn</option>
							                                <option value="Bắc Ninh">Bắc Ninh</option>
							                                <option value="Cao Bằng">Cao Bằng</option>
							                                <option value="Điện Biên">Điện Biên</option>
							                                <option value="Hà Giang">Hà Giang</option>
							                                <option value="Hà Nam">Hà Nam</option>
							                                <option value="Hải Dương">Hải Dương</option>
							                                <option value="Hòa Bình">Hòa Bình</option>
							                                <option value="Hưng Yên">Hưng Yên</option>
							                                <option value="Lai Châu">Lai Châu</option>
							                                <option value="Lạng Sơn">Lạng Sơn</option>
							                                <option value="Lào Cai">Lào Cai</option>
							                                <option value="Nam Định">Nam Định</option>
							                                <option value="Ninh Bình">Ninh Bình</option>
							                                <option value="Phú Thọ">Phú Thọ</option>
							                                <option value="Quảng Ninh">Quảng Ninh</option>
							                                <option value="Sơn La">Sơn La</option>
							                                <option value="Thái Bình">Thái Bình</option>
							                                <option value="Thái Nguyên">Thái Nguyên</option>
							                                <option value="Thanh Hóa">Thanh Hóa</option>
							                                <option value="Tuyên Quang">Tuyên Quang</option>
							                                <option value="Vĩnh Phúc">Vĩnh Phúc</option>
							                                <option value="Yên Bái">Yên Bái</option>
							                                <option value="Bình Định">Bình Định</option>
							                                <option value="Bình Phước">Bình Phước</option>
							                                <option value="Bình Thuận">Bình Thuận</option>
							                                <option value="Đắk Lắk">Đắk Lắk</option>
							                                <option value="Đắk Nông">Đắk Nông</option>
							                                <option value="Gia Lai">Gia Lai</option>
							                                <option value="Hà Tĩnh">Hà Tĩnh</option>
							                                <option value="Khánh Hòa">Khánh Hòa</option>
							                                <option value="Kon Tum">Kon Tum</option>
							                                <option value="Lâm Đồng">Lâm Đồng</option>
							                                <option value="Nghệ An">Nghệ An</option>
							                                <option value="Ninh Thuận">Ninh Thuận</option>
							                                <option value="Phú Yên">Phú Yên</option>
							                                <option value="Quảng Bình">Quảng Bình</option>
							                                <option value="Quảng Nam">Quảng Nam</option>
							                                <option value="Quảng Ngãi">Quảng Ngãi</option>
							                                <option value="Quảng Trị">Quảng Trị</option>
							                                <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
							                                <option value="An Giang">An Giang</option>
							                                <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
							                                <option value="Bạc Liêu">Bạc Liêu</option>
							                                <option value="Bến Tre">Bến Tre</option>
							                                <option value="Bình Dương">Bình Dương</option>
							                                <option value="Cà Mau">Cà Mau</option>
							                                <option value="Đồng Nai">Đồng Nai</option>
							                                <option value="Đồng Tháp">Đồng Tháp</option>
							                                <option value="Hậu Giang">Hậu Giang</option>
							                                <option value="Kiên Giang">Kiên Giang</option>
							                                <option value="Long An">Long An</option>
							                                <option value="Sóc Trăng">Sóc Trăng</option>
							                                <option value="Tây Ninh">Tây Ninh</option>
							                                <option value="Tiền Giang">Tiền Giang</option>
							                                <option value="Trà Vinh">Trà Vinh</option>
							                                <option value="Vĩnh Long">Vĩnh Long</option>
							                            </select>
							                            <br>

							                            <select class="input_text" name="method_receiver">
							                                <option value="0" data-price="0" data-type="species">Hình thức nhận hàng</option>
							                                <option value="shop">Thanh toán trực tiếp tại cửa hàng</option>
							                                <option value="cod">Thanh toán khi nhận hàng (COD)</option>
							                            </select>
							                            <br>


							                            <!--								<input type="text" name="sender_email"  id="sender_email"  value="" class="input_text" />-->
							                            <div class="btn_area">
							                                <a rel="nofollow" class="btn btn-default" href="javascript: void(0)" id="submitbt">
							                                    <span>Đặt hàng</span>
							                                </a>
							                                <a rel="nofollow" class="btn reset-default" href="javascript: void(0)" id="resetbt">
							                                    <span>Nhập lại</span>
							                                </a>
							                            </div>

							                            <input type="hidden" name="id" value="279">
							                            <input type="hidden" name="price" value="25000000">
							                            <input type="hidden" name="price_old" value="25000000">
							                            <input type="hidden" name="module" value="products">
							                            <input type="hidden" name="view" value="cart">
							                            <input type="hidden" name="task" value="eshopcart2_save" id="task">
							                        </div>
							                        <div class="clear"></div>
							                        <div class="other_info">
							                            <!-- 										<div class="check-square mt10">Nhận giao hàng trong <strong>60 phút</strong> tại <strong>TP.Hà Nội và TP.HCM</strong> </div>
																	<div class="check-square mt10">Giao hàng <strong>tận nơi</strong>, hài lòng thanh toán</div>
																	<div class="check-square mt10">Bảo hành <strong></strong></div>
																	<div class="mt10">Mọi thắc mắc xin vui lòng liên hệ theo số máy <strong style="color: #E31010;"> 096 709 3395</strong> để biết thêm chi tiết.</div> -->
							                            <p>Giao&nbsp;hàng trong <strong>24 - 38h</strong> với khách hàng nội thành <strong>TP.Hà Nội</strong> và <strong>TP.HCM</strong>
							                            </p>

							                            <p>Giao&nbsp;hàng <strong>tận nơi</strong>, <strong>lắp đặt miễn phí</strong> hài lòng mới thanh toán</p>

							                            <p>Bảo hành:</p>

							                            <p>Mọi thắc mắc xin vui lòng liên hệ theo số máy&nbsp;<span style="color:#e74c3c"><strong>091 668 0110 - 08 6841 5794</strong></span>&nbsp; để biết thêm chi tiết&nbsp;</p>
							                        </div>
							                    </div>

							                </form>
							            </div>
							        </div>
							    </div>
							</div>
</body>
</html>