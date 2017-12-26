<!DOCTYPE html>
<html>
<head>
    <?php include 'include/inc_head.php'?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php include 'include/inc_header.php'?>

    <?php include 'include/inc_sidebar.php'?>

    <div class="content-wrapper" style="min-height: 1036px;">
        <section class="content">
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">...</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="" class="col-md-3 control-label">Tên chiến dịch:</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-3 control-label">Mục tiêu chiến dịch:</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-3 control-label">Khách hàng mục tiêu:</label>
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-info">Thêm mới</button>
                                        <span style="padding:0px 10px;">hoặc</span>
                                        <button type="submit" class="btn btn-info">Chọn trong lịch sử</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-md-3 control-label">Sản phẩm:</label>
                                    <div class="col-md-8">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Thêm sản phẩm
                                                <span class="fa fa-caret-down"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#" data-toggle="modal" data-target="#modalChienDich">Thêm mới</a></li>
                                                <li><a href="#">Thêm từ kho</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-3 control-label">Ngày bắt đầu* :</label>
                                    <div class="col-md-3">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control datepicker" id="">
                                        </div>
                                    </div>
                                    <label for="" class="col-md-2 control-label">Ngày kết thúc* :</label>
                                    <div class="col-md-3">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control datepicker" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-3 control-label">Ngân sách dự kiến :</label>
                                    <div class="col-md-3" style="width: 240px;">
                                        <div class="radio pull-left" style="margin-right: 10px">
                                            <label>
                                                <input type="radio" name="" id="optionsRadios1" value="option1"> Toàn chiến dịch
                                            </label>
                                        </div>
                                        <div class="radio pull-left">
                                            <label>
                                                <input type="radio" name="" id="optionsRadios2" value="option2"> Theo ngày
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control pull-left" placeholder="100.000" style="width:100px;text-align:right;">
                                        <select class="form-control pull-left" style="width:80px;text-align:right;">
                                            <option>VND</option>
                                            <option>USD</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-3 control-label">Kênh quảng cáo :</label>
                                    <div class="col-md-4" id="append-val">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-offset-3 col-md-8">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm kênh</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-default pull-right" style="margin-left: 10px">Tiếp tục</button>
                                <button type="submit" class="btn btn-info pull-right">Lưu và kết thúc</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog" style="width: 400px;">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="input-group input-group-sm" style="width: 100%">
                            <input type="text" name="" class="form-control" placeholder="Search">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="val-li" style="margin-bottom: 5px" data-content="facebook">
                            <a class="btn btn-block btn-social btn-facebook">
                                <i class="fa fa-facebook"></i> Facebook
                            </a>
                        </div>
                        <div class="val-li" style="margin-bottom: 5px" data-content="google">
                            <a class="btn btn-block btn-social btn-google">
                                <i class="fa fa-google-plus"></i> Google
                            </a>
                        </div>
                        <div class="val-li" style="margin-bottom: 5px" data-content="twitter">
                            <a class="btn btn-block btn-social btn-twitter">
                                <i class="fa fa-twitter"></i> Twitter
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Them chien dich -->
        <div id="modalChienDich" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <p class="">
                                    Ảnh Sản phẩm
                                </p>
                                <div class="">
                                    <div class="">
                                        <div>
                                            <i class="material-icons">backup</i>
                                            <p class="center">
                                                Thêm ảnh có định dạng JPEG, JPG, PNG
                                            </p>
                                        </div>
                                    </div>
                                    <div class="a_ccamp_field_images_product w_ccamp_field_images_product valign-wrapper" style="">
                                        <div class="a_ccamp_field_images_product_overlay w_ccamp_field_images_product_overlay" title="Thay ảnh sản phẩm">
                                            <a class="a_ccamp_field_changeimg w_ccamp_field_changeimg">
                                                <i class="material-icons">swap_horiz</i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-4">
                                        Tên Sản phẩm<span>*</span> :
                                        <i class="fa fa-info-circle"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-field a_ccamp_field_content">
                                            <input type="text" class="ezimar-input" data-length="50" maxlength="50" name="name" value="">
                                            <span class="character-counter" style="float: right; font-size: 11px; height: 1px;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row a_ccamp_field c_mar_bot_10">
                                    <div class="col m4 a_ccamp_field_title">
                                        Mã Sản phẩm :
                                        <i class="fa fa-info-circle a_ccamp_field_info"></i>
                                    </div>
                                    <div class="col m8">
                                        <div class="input-field a_ccamp_field_content">
                                            <input type="text" class="ezimar-input" data-length="10" maxlength="10" name="code" value="">
                                            <span class="character-counter" style="float: right; font-size: 11px; height: 1px;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row a_ccamp_field c_mar_bot_10">
                                    <div class="col m4 a_ccamp_field_title">
                                        Nhà cung cấp :
                                        <i class="fa fa-info-circle a_ccamp_field_info"></i>
                                    </div>
                                    <div class="col m8">
                                        <div class="input-field a_ccamp_field_content">
                                            <input type="text" class="ezimar-input" data-length="50" maxlength="50" name="supplier" value="">
                                            <span class="character-counter" style="float: right; font-size: 11px; height: 1px;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row a_ccamp_field c_mar_bot_10">
                                    <div class="col m4 a_ccamp_field_title">
                                        Giá thành :
                                        <i class="fa fa-info-circle a_ccamp_field_info"></i>
                                    </div>
                                    <div class="col m8">
                                        <div class="a_ccamp_field_budget left">
                                            <input type="text" class="ezimar-input w_ccamp_input_money" name="price" value="">
                                        </div>
                                        <div class="input-field a_ccamp_field_currency left">
                                            <div class="select-wrapper">
                                                <span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-6f5f571b-79bc-fe6d-6dab-540f6c46ad61" value="VND">
                                                <ul id="select-options-6f5f571b-79bc-fe6d-6dab-540f6c46ad61" class="dropdown-content select-dropdown ">
                                                    <li class=""><span>VND</span></li>
                                                    <li class=""><span>USD</span></li>
                                                </ul>
                                                <select name="currency" data-select-id="6f5f571b-79bc-fe6d-6dab-540f6c46ad61" class="initialized">
                                                    <option value="1">VND</option>
                                                    <option value="2">USD</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row a_ccamp_field c_mar_bot_10">
                                    <div class="col m4 a_ccamp_field_title">
                                        Mô tả :
                                        <i class="fa fa-info-circle a_ccamp_field_info"></i>
                                    </div>
                                    <div class="col m8">
                                        <div class="input-field a_ccamp_field_content a_ccamp_field_textarea">
                                            <textarea class="materialize-textarea ezimar-input" data-length="250" maxlength="250" name="description"></textarea>
                                            <span class="character-counter" style="float: right; font-size: 11px; height: 1px;"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                        <button type="button" class="btn btn-success" >Lưu</button>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- ./wrapper -->

    <?php include 'include/inc_js.php' ?>
</div>
</body>
</html>
