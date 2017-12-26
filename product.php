<!DOCTYPE html>
<html>
<head>
    <?php include 'include/inc_head.php'?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php include 'include/inc_header.php'?>

    <?php include 'include/inc_sidebar.php'?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <h1 class="pull-left">Danh sach san pham</h1>
            <button type="button" class="btn btn-warning pull-right"
                  data-toggle="modal" data-target="#modal_add_product">THêm sản phẩm</button>
            <div class="clearfix"></div>
        </section>
      
        <section class="content">
            <div class="row">
            <!-- /.col -->
                <div class="col-md-12">
                    <div class="box box-primary">
                
                        <div class="box-header with-border">
                            <div class="filter">
                                <div class="searchbox pull-left">
                                  <form action="" class="form-inline">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="form-group">
                                      <button class="btn btn-success">Search</button>
                                    </div>
                                  </form>
                                </div>
                                <div class="sort pull-right">
                                    <select class="form-control" id="sel1">
                                        <option>Sắp xếp theo mới nhất</option>
                                        <option>Sắp xếp theo cũ nhất</option>
                                        <option>Sắp xếp theo Tỉ lệ chuyển đổi</option>
                                    </select>
                                </div>
                            </div>
                        </div>
  
                        <div class="box-body no-padding">
                            <div class="table-responsive mailbox-messages">
                                <table class="table table-hover table-striped">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="checkbox">
                                            </td>
                                            <td class="mailbox-star">
                                                <img src="./dist/img/user4-128x128.jpg" height="40" width="40" alt="name image">
                                            </td>
                                            <td class="mailbox-name">
                                                <div class="a_lcontent_record_data">
                                                    <b>xe may </b>(123)
                                                    <br>
                                                    <small class="title_small">san pham hot</small>
                                                    <br>
                                                    <small class="title_small">Đã cập nhật 24/12/2017 | 07:42	<a class="a_link" href="#">Cap nhat ngay</a></small>
                                                </div>
                                            </td>
                                            <td class="mailbox-subject">
                                                <div class="a_lcontent_param">
                                                    <div class="a_lcontent_param_child">
                                                        <span class="title_statistical">0</span>
                                                        <i class="material-icons right tooltipped" data-position="bottom"
                                                          data-delay="30" data-tooltip="Liên hệ thu thập"
                                                          data-tooltip-id="44724f88-a87c-7a12-3a41-c07e92393e77">people</i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="mailbox-attachment">
                                                <div class="a_lcontent_param">
                                                    <div class="a_lcontent_param_child">
                                                        <i class="material-icons left tooltipped" data-position="bottom"
                                                         data-delay="30" data-tooltip="Giá thành sản phẩm"
                                                         data-tooltip-id="3b665a0d-9bdc-4e7c-4973-6fa17eaa882a">attach_money</i>
                                                        <span class="title_statistical">200.000 VND</span>
                                                    </div>
                                                    <div class="a_lcontent_param_child">
                                                        <i class="material-icons left tooltipped" data-position="bottom"
                                                         data-delay="30" data-tooltip="Nhà cung cấp"
                                                         data-tooltip-id="4d317272-a5e1-b7d5-e408-8ecc3b4bac81">store_mall_directory</i>
                                                        <span class="title_statistical">honda</span>
                                                    </div>
                                              </div>
                                            </td>
                                            <td class="mailbox-date">
                                                <a href="#" class="icon_delete">
                                                    <i class="fa fa-trash-o fa-lg"></i>
                                                </a>
                                            </td>
                                      </tr>
                                        <tr>
                                          <td>
                                            <input type="checkbox">
                                          </td>
                                          <td class="mailbox-star">
                                            <img src="./dist/img/user4-128x128.jpg" height="40" width="40" alt="name image">
                                          </td>
                                          <td class="mailbox-name">
                                            <div class="a_lcontent_record_data">
                                              <b>xe may </b>(123)
                                              <br>
                                              <small class="title_small">san pham hot</small>
                                              <br>
                                              <small class="title_small">Đã cập nhật 24/12/2017 | 07:42	<a class="a_link" href="#">Cap nhat ngay</a></small>
                                            </div>
                                          </td>
                                          <td class="mailbox-subject">
                                            <div class="a_lcontent_param">
                                              <div class="a_lcontent_param_child">
                                                <span class="title_statistical">0</span>
                                                <i class="material-icons right tooltipped" data-position="bottom"
                                                   data-delay="30" data-tooltip="Liên hệ thu thập"
                                                   data-tooltip-id="44724f88-a87c-7a12-3a41-c07e92393e77">people</i>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="mailbox-attachment">
                                            <div class="a_lcontent_param">
                                              <div class="a_lcontent_param_child">
                                                <i class="material-icons left tooltipped" data-position="bottom"
                                                   data-delay="30" data-tooltip="Giá thành sản phẩm"
                                                   data-tooltip-id="3b665a0d-9bdc-4e7c-4973-6fa17eaa882a">attach_money</i>
                                                <span class="title_statistical">200.000 VND</span>
                                              </div>
                                              <div class="a_lcontent_param_child">
                                                <i class="material-icons left tooltipped" data-position="bottom"
                                                   data-delay="30" data-tooltip="Nhà cung cấp"
                                                   data-tooltip-id="4d317272-a5e1-b7d5-e408-8ecc3b4bac81">store_mall_directory</i>
                                                <span class="title_statistical">honda</span>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="mailbox-date">
                                            <a href="#" class="icon_delete">
                                              <i class="fa fa-trash-o fa-lg"></i>
                                            </a>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <input type="checkbox">
                                          </td>
                                          <td class="mailbox-star">
                                            <img src="./dist/img/user4-128x128.jpg" height="40" width="40" alt="name image">
                                          </td>
                                          <td class="mailbox-name">
                                            <div class="a_lcontent_record_data">
                                              <b>xe may </b>(123)
                                              <br>
                                              <small class="title_small">san pham hot</small>
                                              <br>
                                              <small class="title_small">Đã cập nhật 24/12/2017 | 07:42	<a class="a_link" href="#">Cap nhat ngay</a></small>
                                            </div>
                                          </td>
                                          <td class="mailbox-subject">
                                            <div class="a_lcontent_param">
                                              <div class="a_lcontent_param_child">
                                                <span class="title_statistical">0</span>
                                                <i class="material-icons right tooltipped" data-position="bottom"
                                                   data-delay="30" data-tooltip="Liên hệ thu thập"
                                                   data-tooltip-id="44724f88-a87c-7a12-3a41-c07e92393e77">people</i>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="mailbox-attachment">
                                            <div class="a_lcontent_param">
                                              <div class="a_lcontent_param_child">
                                                <i class="material-icons left tooltipped" data-position="bottom"
                                                   data-delay="30" data-tooltip="Giá thành sản phẩm"
                                                   data-tooltip-id="3b665a0d-9bdc-4e7c-4973-6fa17eaa882a">attach_money</i>
                                                <span class="title_statistical">200.000 VND</span>
                                              </div>
                                              <div class="a_lcontent_param_child">
                                                <i class="material-icons left tooltipped" data-position="bottom"
                                                   data-delay="30" data-tooltip="Nhà cung cấp"
                                                   data-tooltip-id="4d317272-a5e1-b7d5-e408-8ecc3b4bac81">store_mall_directory</i>
                                                <span class="title_statistical">honda</span>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="mailbox-date">
                                            <a href="#" class="icon_delete">
                                              <i class="fa fa-trash-o fa-lg"></i>
                                            </a>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <input type="checkbox">
                                          </td>
                                          <td class="mailbox-star">
                                            <img src="./dist/img/user4-128x128.jpg" height="40" width="40" alt="name image">
                                          </td>
                                          <td class="mailbox-name">
                                            <div class="a_lcontent_record_data">
                                              <b>xe may </b>(123)
                                              <br>
                                              <small class="title_small">san pham hot</small>
                                              <br>
                                              <small class="title_small">Đã cập nhật 24/12/2017 | 07:42	<a class="a_link" href="#">Cap nhat ngay</a></small>
                                            </div>
                                          </td>
                                          <td class="mailbox-subject">
                                            <div class="a_lcontent_param">
                                              <div class="a_lcontent_param_child">
                                                <span class="title_statistical">0</span>
                                                <i class="material-icons right tooltipped" data-position="bottom"
                                                   data-delay="30" data-tooltip="Liên hệ thu thập"
                                                   data-tooltip-id="44724f88-a87c-7a12-3a41-c07e92393e77">people</i>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="mailbox-attachment">
                                            <div class="a_lcontent_param">
                                              <div class="a_lcontent_param_child">
                                                <i class="material-icons left tooltipped" data-position="bottom"
                                                   data-delay="30" data-tooltip="Giá thành sản phẩm"
                                                   data-tooltip-id="3b665a0d-9bdc-4e7c-4973-6fa17eaa882a">attach_money</i>
                                                <span class="title_statistical">200.000 VND</span>
                                              </div>
                                              <div class="a_lcontent_param_child">
                                                <i class="material-icons left tooltipped" data-position="bottom"
                                                   data-delay="30" data-tooltip="Nhà cung cấp"
                                                   data-tooltip-id="4d317272-a5e1-b7d5-e408-8ecc3b4bac81">store_mall_directory</i>
                                                <span class="title_statistical">honda</span>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="mailbox-date">
                                            <a href="#" class="icon_delete">
                                              <i class="fa fa-trash-o fa-lg"></i>
                                            </a>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <input type="checkbox">
                                          </td>
                                          <td class="mailbox-star">
                                            <img src="./dist/img/user4-128x128.jpg" height="40" width="40" alt="name image">
                                          </td>
                                          <td class="mailbox-name">
                                            <div class="a_lcontent_record_data">
                                              <b>xe may </b>(123)
                                              <br>
                                              <small class="title_small">san pham hot</small>
                                              <br>
                                              <small class="title_small">Đã cập nhật 24/12/2017 | 07:42	<a class="a_link" href="#">Cap nhat ngay</a></small>
                                            </div>
                                          </td>
                                          <td class="mailbox-subject">
                                            <div class="a_lcontent_param">
                                              <div class="a_lcontent_param_child">
                                                <span class="title_statistical">0</span>
                                                <i class="material-icons right tooltipped" data-position="bottom"
                                                   data-delay="30" data-tooltip="Liên hệ thu thập"
                                                   data-tooltip-id="44724f88-a87c-7a12-3a41-c07e92393e77">people</i>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="mailbox-attachment">
                                            <div class="a_lcontent_param">
                                              <div class="a_lcontent_param_child">
                                                <i class="material-icons left tooltipped" data-position="bottom"
                                                   data-delay="30" data-tooltip="Giá thành sản phẩm"
                                                   data-tooltip-id="3b665a0d-9bdc-4e7c-4973-6fa17eaa882a">attach_money</i>
                                                <span class="title_statistical">200.000 VND</span>
                                              </div>
                                              <div class="a_lcontent_param_child">
                                                <i class="material-icons left tooltipped" data-position="bottom"
                                                   data-delay="30" data-tooltip="Nhà cung cấp"
                                                   data-tooltip-id="4d317272-a5e1-b7d5-e408-8ecc3b4bac81">store_mall_directory</i>
                                                <span class="title_statistical">honda</span>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="mailbox-date">
                                            <a href="#" class="icon_delete">
                                              <i class="fa fa-trash-o fa-lg"></i>
                                            </a>
                                          </td>
                                        </tr>
                                    </tbody>
                                </table>
                              <!-- /.table -->
                            </div>
                          <!-- /.mail-box-messages -->
                        </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /. box -->
                </div>
                <!-- /.col -->
              </div>
        </section>
      
    </div>
    <!-- /.content-wrapper -->


  <!-- Modal -->
    <div id="modal_add_product" class="modal fade" role="dialog">
        <div class="modal-dialog">
    
          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Thêm sản phẩm mới</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div>Ảnh Sản phẩm</div>
                            <div class="preview-image">
                                  <i class="material-icons icon-backup">backup</i>
                                  <p class="center">
                                    Thêm ảnh có định dạng JPEG, JPG, PNG
                                  </p>
                            </div>
                        </div>
                        <div class="col-md-8">
                          <form action="">
                            <div class="form-group">
                              <label for="email">Tên sản phẩm:</label>
                              <input type="text" class="form-control" id="product_name">
                            </div>
                            <div class="form-group">
                              <label>Mã sản phẩm:</label>
                              <input type="text" class="form-control" id="product_id">
                            </div>
                            <div class="form-group">
                              <label>Nhà cung cấp:</label>
                              <input type="text" class="form-control" id="provider">
                            </div>
                            <div class="form-group">
                              <label>Giá thành</label>
                              <div class="row">
                                <div class="col-md-9">
                                  <input type="text" class="form-control pull-left" id="provider">
                                </div>
                                <div class="col-md-3">
                                  <select class="form-control pull-right" id="sel1">
                                    <option>VND</option>
                                    <option>USD</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label>Mô tả:</label>
                              <input type="text" class="form-control" id="description">
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">Lưu</button>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- ./wrapper -->
<?php include 'include/inc_js.php' ?>
</body>
</html>
