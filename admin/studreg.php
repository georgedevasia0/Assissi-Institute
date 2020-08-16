<?php 
    include_once('include/pages.php');
    $form = "active";
    $formcoll='in';
?>

<?php include('include/mainbar.php');?>
<div class="main">
   <div class="main-content">
      <div class="container">
         <h3 class="page-title">Request Registeration</h3>
         <div class="row">
            <div class="container-fluid">
               <!-- TABLE NO PADDING -->
               <div class="panel">
                  <div class="panel-heading ">
                     <div class="row">
                        <div class="col-md-3">
                           <h3 class="panel-title">Filter Results</h3>
                        </div>
                        <br>
                        <form action="#" method="post">
                           <div class="col-md-3">
                              <input type="text" class="form-control" placeholder="Search Text">
                           </div>
                           <div class="col-md-3">
                              <select class="form-control">
                                 <option value="null">Select one</option>
                                 <option value="contacted">Contacted</option>
                                 <option value="recent">Recent added</option>
                                 <option value="not-contacted">Not-Contacted</option>
                              </select>
                           </div>
                           <div class="col-md-3">
                              <select class="form-control">
                                 <option value="null">Select one</option>
                                 <option value="contacted">Contacted</option>
                                 <option value="recent">Recent added</option>
                                 <option value="not-contacted">Not-Contacted</option>
                              </select>
                           </div>
                           <div class="col-md-3">
                              <p class="demo-button btn btn-primary">
                                 <button type="button" class="fa fa-search">Filter</button>
                              </p>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="panel-body no-padding">
                     <table class="table table-striped">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Phone</th>
                              <th>Address</th>
                              <th>Date</th>
                              <th>Email</th>
                              <th>Qualification</th>
                              <th>Branch</th>
                              <th>Age</th>
                              <th>Contacted</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1</td>
                              <td>James Nolan</td>
                              <td>1234567890</td>
                              <td>abc city</td>
                              <td>12/12/2020</td>
                              <td>aaa@aa.com</td>
                              <td>BBA</td>
                              <td>GERMAN</td>
                              <td>25</td>
                              <td>
                                 <!-- <div class="row"> -->
                                 <form action="#">
                                    <!-- <div class="col-md-6"> -->
                                    <label class="fancy-radio">
                                    <input name="gender" value="male" type="radio">
                                    <span><i></i>Contacted</span>
                                    </label>
                                    <label class="fancy-radio">
                                    <input name="gender" value="female" type="radio" checked>
                                    <span><i></i>Not-Contacted</span>
                                    </label>
                                    <!-- </div> -->
                                    <div class="col-md-6 ">
                                       <p class="demo-button">
                                          <button type="button" class="btn btn-primary">Save</button>
                                       </p>
                                    </div>
                                 </form>
                  </div>
                  </td>
                  </tr>
                  <!-- second list  -->
                  <tr>
                  <td>2</td>
                  <td>James Nolan</td>
                  <td>1234567890</td>
                  <td>abc city</td>
                  <td>12/12/2020</td>
                  <td>aaa@aa.com</td>
                  <td>BBA</td>
                  <td>GERMAN</td>
                  <td>25</td>
                  <td>
                  <!-- <div class="row"> -->
                  <form action="#">
                  <!-- <div class="col-md-6"> -->
                  <label class="fancy-radio">
                  <input name="gender" value="male" type="radio">
                  <span><i></i>Contacted</span>
                  </label>
                  <label class="fancy-radio">
                  <input name="gender" value="female" type="radio" checked>
                  <span><i></i>Not-Contacted</span>
                  </label>
                  <!-- </div> -->
                  <div class="col-md-6">
                  <p class="demo-button">
                  <button type="button" class="btn btn-primary">Save</button>
                  </p>
                  </div>
                  </form>
               </div>
               </td>
               </tr>
               <!-- end  -->
               <!-- start  -->
               <tr>
               <td>3</td>
               <td>James Nolan</td>
               <td>1234567890</td>
               <td>abc city</td>
               <td>12/12/2020</td>
               <td>aaa@aa.com</td>
               <td>BBA</td>
               <td>GERMAN</td>
               <td>25</td>
               <td>
               <!-- <div class="row"> -->
               <form action="#">
               <!-- <div class="col-md-6"> -->
               <label class="fancy-radio">
               <input name="gender" value="male" type="radio">
               <span><i></i>Contacted</span>
               </label>
               <label class="fancy-radio">
               <input name="gender" value="female" type="radio" checked>
               <span><i></i>Not-Contacted</span>
               </label>
               <!-- </div> -->
               <div class="col-md-6">
               <p class="demo-button">
               <button type="button" class="btn btn-primary">Save</button>
               </p>
               </div>
               </form>
               <!-- </div> -->
               </td>
               </tr>
               <!-- end  -->
               </tbody>
               </table>
            </div>
         </div>
         <!-- END TABLE NO PADDING -->
      </div>
   </div>
</div>
</div>
</div>
<?php include('include/end.php');?>