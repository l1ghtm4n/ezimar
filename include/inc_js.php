<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
<script>
    $(function () {
        $(".datepicker").datepicker();
    });

    $(function () {
        $('.val-li').click(function () {
            $value = '';
            string = '';
            $value = $(this).attr('data-content');
            var html = $value;
            string  = '<div class="box-item" style="width: 100%;margin-bottom: 10px;">\n' +
                '                                            <div class=\'col-md-4\' style=\'margin-left: -15px;\'>\n' +
                '                                                <a class=\'remove-val btn btn-xs btn-block btn-social btn-'+$value+' pull-right\' style=\'height: 30px; line-height: 25px; \'>\n' +
                '                                                    <i class=\'fa fa-'+$value+'\' style="line-height: 30px;"></i> '+$value+' <i class=\'delete-val fa fa-times pull-right\' style=\'line-height: 25px;\'></i>\n' +
                '                                                </a>\n' +
                '                                            </div>\n' +
                '                                            <div class=\'col-md-5\'>\n' +
                '                                                <select class=\'form-control pull-right input-sm\' style=\'width:80px;text-align:right;margin-left:10px;\'>\n' +
                '                                                    <option>VND</option>\n' +
                '                                                    <option>USD</option>\n' +
                '                                                </select>\n' +
                '                                                <input type=\'text\' class=\'form-control input-sm pull-right\' placeholder=\'100.000\' style=\'width:130px;text-align:right;\'>\n' +
                '                                            </div>\n' +
                '                                            <div class="clearfix"></div>\n' +
                '                                        </div>\n';
            $("#append-val").append(string);
            $("#myModal").modal('hide');
        });
    });
    $(document).on('click','.delete-val', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var $this = $(this);
        $this.parents('div.box-item').remove();
    });
</script>
<script src="plugins/iCheck/icheck.min.js"></script>
