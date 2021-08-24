<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Bankrut</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <!-- <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/pg.png"> -->

        <!-- App css -->
        <link href="<?php echo base_url('assets');?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets');?>/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets');?>/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets');?>/css/style.css" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="<?php echo base_url('assets');?>/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets');?>/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?php echo base_url('assets');?>/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Multi Item Selection examples -->  
        <link href="<?php echo base_url('assets');?>/plugins/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!--Morris Chart CSS -->
        <!-- <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/morris/morris.css"> -->
        
        <!-- jQuery  -->
        <script src="<?php echo base_url('assets');?>/js/jquery.min.js"></script>

        <script src="<?php echo base_url('assets');?>/js/modernizr.min.js"></script>

         <!-- Required datatable js -->
        <script src="<?php echo base_url('assets');?>/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url('assets');?>/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Sweetalert -->
        <link href="<?php echo base_url('assets');?>/js/sweetalert/sweetalert.css" rel="stylesheet">
        <script src="<?php echo base_url('assets');?>/js/sweetalert/sweetalert.min.js"></script>

    <style>
        .topbar .topbar-left .logo img{
            height: 60px;
        }
    </style>

    </head>


    <body>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page" style="margin-left:0px">
                <!-- Start content -->
                <?php echo $content; ?>
                <!-- content -->

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <script type="text/javascript">
            function display_c(){
                var refresh= 1000;
                mytime=setTimeout('display_ct()',refresh)
            }

            function display_ct(){
                var x = new Date()
                var x1= x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear();
                x1 = x1 + " || " + x.getHours( )+ " : " + x.getMinutes() + " : " + x.getSeconds() + " WIB";
                document.getElementById('ct').innerHTML = x1;
                display_c();
            }
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url('assets');?>/js/popper.min.js"></script>
        <script src="<?php echo base_url('assets');?>/js/jquery.md5.js"></script>
        <script src="<?php echo base_url('assets');?>/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url('assets');?>/js/metisMenu.min.js"></script>
        <script src="<?php echo base_url('assets');?>/js/waves.js"></script>
        <script src="<?php echo base_url('assets');?>/js/jquery.slimscroll.js"></script>

        <!-- Buttons examples -->
        <script src="<?php echo base_url('assets');?>/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url('assets');?>/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="<?php echo base_url('assets');?>/plugins/datatables/jszip.min.js"></script>
        <script src="<?php echo base_url('assets');?>/plugins/datatables/pdfmake.min.js"></script>
        <script src="<?php echo base_url('assets');?>/plugins/datatables/vfs_fonts.js"></script>
        <script src="<?php echo base_url('assets');?>/plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?php echo base_url('assets');?>/plugins/datatables/buttons.print.min.js"></script>

        <!-- Key Tables -->
        <script src="<?php echo base_url('assets');?>/plugins/datatables/dataTables.keyTable.min.js"></script>

        <!-- Responsive examples -->
        <script src="<?php echo base_url('assets');?>/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url('assets');?>/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Selection table -->
        <script src="<?php echo base_url('assets');?>/plugins/datatables/dataTables.select.min.js"></script>

        <!--Morris Chart-->
        <!-- <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script> -->

        <!-- Dashboard init -->
        <!-- <script src="assets/pages/jquery.dashboard.js"></script> -->

        <!-- App js -->
        <script src="<?php echo base_url('assets');?>/js/jquery.core.js"></script>
        <script src="<?php echo base_url('assets');?>/js/jquery.app.js"></script>

        <!-- <script type="text/javascript">
            $(document).ready(function() {

                // Default Datatable
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                // Key Tables

                $('#key-table').DataTable({
                    keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                    select: {
                        style: 'multi'
                    }
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script> -->

<script>

// function myFunction() {
//   setInterval(function(){ 
//     get_last_teller();
//    }, 3000);
// }

// myFunction();
</script>

    </body>
</html>