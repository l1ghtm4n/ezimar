<!DOCTYPE html>
<html>
<head>
    <?php include 'include/inc_head.php' ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php include 'include/inc_header.php' ?>

    <?php include 'include/inc_sidebar.php' ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <h1 class="pull-left">Danh sach Landing page</h1>
            <a href="" class="btn btn-warning pull-right">Thiết kế Landing page</a>
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
                                            <div>
                                                <label>
                                                    <input type="checkbox">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-xs"
                                                    data-toggle="modal" data-target="#modalForDraff">Nháp
                                            </button>
                                        </td>
                                        <td>
                                            <div class="content-param">
                                                <label>
                                                    <b>xxx</b>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="content-campaign-statistics">
                                                <span>Chưa tham gia chiến dịch</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="content-edit">
                                                <button class="btn btn-success btn-xs">Chỉnh sửa</button>
                                                <br>
                                                <small>Đã cập nhật 26/12/2017 | 04:47</small>
                                            </div>
                                        </td>
                                        <td>
                                            <i class="material-icons icon-copy">content_copy</i>
                                        </td>
                                        <td>
                                            <i class="material-icons icon-delete">delete</i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <label>
                                                    <input type="checkbox">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <input type="checkbox" checked data-toggle="toggle" data-size="mini"
                                                   data-on="Đã xuất bản"
                                                   data-off="Tạm khóa"
                                                   data-onstyle="success"
                                            >
                                            <br>
                                            <a href="" class="a_link link-under">Link</a>
                                        </td>
                                        <td>
                                            <div class="content-param">
                                                <label>
                                                    <b>xxx</b>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="content-campaign-statistics">
                                                <span>Chưa tham gia chiến dịch</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="content-edit">
                                                <button class="btn btn-success btn-xs">Chỉnh sửa</button>
                                                <br>
                                                <small>Đã cập nhật 26/12/2017 | 04:47</small>
                                            </div>
                                        </td>
                                        <td>
                                            <i class="material-icons icon-copy">content_copy</i>
                                        </td>
                                        <td>
                                            <i class="material-icons icon-delete">delete</i>
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
    <div class="modal fade" id="modalForDraff" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><b>Xuất bản theo tên miền .ezimar</b></h4>
                </div>
                <div class="modal-body">
                    <div class="b_publish_title">
                        <i class="material-icons left">public</i>Xuất bản dưới tên miền ezimar.vn
                    </div>
                    <div class="input-subdomain">
                        <input type="text" name="publish_subdomain" class="i-subdomain"
                               placeholder="subdomain*">
                        <span>.ezimar.vn</span>
                        <br>
                    </div>
                    <small class="helper">* Trường thông tin bắt buộc</small>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">Xuất bản</button>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- ./wrapper -->
<?php include 'include/inc_js.php'?>

</body>
</html>
