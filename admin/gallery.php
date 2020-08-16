<?php 
    include_once('include/pages.php');
    $gall = "active";
    $coll='in';
?>
<?php include('include/mainbar.php');?>




<div class="main">
<div class="main-content">
   <div class="container-fluid">
      <h3 class="page-title">Gallery</h3>
      <div class="row">
         <div class="col-md-3">
            <!-- FOLDERS -->
            <div class="panel">
               <div class="panel-heading">
                  <h3 class="panel-title">Folders</h3>
               </div>
               <div class="panel-body ">
                  <!-- start -->
                  <ul class="nav">
                     <!--  list folders in db -->
                     <li><a href="gallery.php" class=""><span>Folder 3</span></a></li>
                     <li><a href="gallery.php" class=""><span>Folder </span></a></li>
                     <li><a href="gallery.php" class=""> <span>Folder 1</span></a></li>
                     <li><a href="gallery.php" class=""><span>Folder 1</span></a></li>
                     <li><a href="gallery.php" class=""><span>Folder 1</span></a></li>
                     <!-- end loop -->
                     <center><button  class="btn btn-primary "  data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> <span>Add Folder</span></button></center>
                  </ul>
                  <!-- end -->
               </div>
            </div>
            <!-- END FOLDERS -->
            <!-- END INPUT SIZING -->
         </div>
         <div class="col-md-9">
            <!-- LABELS -->
            <div class="panel">
               <div class="panel-heading">
                  <h3 class="panel-title">Folder 2</h3>
                  <!-- FOLDER NAME -->
               </div>
               <div class="panel-body">

               <?php  include("mainpages/image_upload.php"); ?>
               
                  <!-- image display end  -->
               </div>
            </div>
            <!-- END LABELS -->
         </div>
      </div>
   </div>
</div>
<!-- END MAIN CONTENT -->
    
</div>
<!-- end -->




<?php include('include/end.php');?>

<div class="modal fade" id="myModal" tabindex="2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <!-- form -->
        <h5 class="modal-title" id="exampleModalCenterTitle">Create Folder</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="#">
      <div class="modal-body">
        <label>Folder Name :</label>
        <input type="text" class="form-control" placeholder="Enter Folder Name" required>
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit"  class="btn btn-primary" value="Create Folder">
        
      </div>
      </form>
    </div>
  </div>
</div>