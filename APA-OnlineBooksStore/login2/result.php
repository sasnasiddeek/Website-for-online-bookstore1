 
   <?php
   error_reporting(0);
    include('include/db.php');
    if(!isset($_REQUEST['index']))
    //session_start();
?>
<!-- header -->
<?php
include('include/header.php');
?>
            <!-- ================= headre end===================================== -->
            
        <!-- sidebar -->
<?php
include('include/sidebar.php');
?>
            <!-- ================= sidebar end===================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card card-body printableArea">
                            <h3><b>Books Informations</b> 
       <hr>
                            
                        <div class="card " >
                            <form action="" method="post">
                            <div class="card-body">
                                 <div class="form-group m-t-20">
                                    <label>Book Title</label>
<input type="IndexNo" readonly="" class="form-control unicase-form-control text-input"  name="index"  required  value="<?=ucwords($IndexNo)?>">
                            </div>
                             <button type="submit" name="search" class="btn btn-success btn-md" >Search</button>
                        </div>
                       
                        </form>
                        
                         <div class="card">
                            <div class="card-body">
                                   <div class="table-responsive">
                                    <table class="table table-hover" style="cursor:pointer">
                <?php 
                

{
    $index = $_REQUEST['index'];
    $result = mysqli_query($con,"SELECT * FROM `student` WHERE IndexNo='$index'");
}

                        if(mysqli_num_rows($result)>0):
                        while($row = mysqli_fetch_array($result)):
                ?>
                <tr>
                    <td>
                      <h3> &nbsp;<b class="text-danger"><?=$row['IndexNo']?></b></h3>
                  
                    </td>
                </tr>
                <tr>
                    <td>
                      <h3> &nbsp;<b class="text-danger"><?=$row['StudentName']?></b></h3>
                  
                    </td>
                </tr>
                <tr>
                    <td>
                     <h4 class="font-bold">Web Programming&nbsp;&nbsp;<font color="green"><?=$row['WebProgramming']?></font> </h4>
                       
                    </td>
                </tr>
                <tr>
                    <td>
                     <h4 class="font-bold">JavaProgramming&nbsp;&nbsp;<font color="green"><?=$row['JavaProgramming']?></font> </h4>
                       
                    </td>
                </tr>
                <tr>
                    <td>
                    <h4 class="font-bold">MobileAppDevelopment&nbsp;&nbsp;<font color="green"><?=$row['MobileAppDevelopment']?></font></h4> 
                    </td>
                </tr>
                         
                <?php endwhile; else:?>
               
                <?php endif;?>
                 
            </table>
                                </div>

                            </div>
                        </div>

                        
                                                          
                    </div>
                </div></div>
                  
                                 

                            </div>
                       

                    </div>
                
                
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
    <script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'IndexNo='+$("#IndexNo").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>

<!-- footer -->
           <?php
           include('include/footer.php')

           ?>
            <!-- ===================footer end ================================ -->
           