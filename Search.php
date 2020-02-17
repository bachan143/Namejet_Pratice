<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- Bootstrap Css -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css"/>
         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"/>
        <link type="text/css" href="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.11/css/dataTables.checkboxes.css" rel="stylesheet" />
         <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


  <!-- Custom Css -->
  <link rel="stylesheet" href="style.css">

    <title>Namejet</title>
  </head>
  <body>
        <!-- Container start -->
           <div class="container">
                  <!-- Fulll Body -->
               <div id="full-body" class="">

                    <!-- Header Part -->
               <div class="haeder">


                      <div id="head-first"  class="row">    <!--start domain name -->
                       <div id="pre" class="col-md-6">
                           <h6 class="pt-2">The Premier Domain Name Aftermarket Service</h6>
                          </div>
                          <div class="col-md-6 pt-1" style="text-align:right;">
                              UserGuide:<a href="#"><img src="india.png"   alt="" width="20px" height="20px"></a>
                              <span class="support" >?support</span>
                          </div>

                        </div>           <!-- end domain name -->
                       <div id="head-second" class="row">    <!--indian flag-->
                         <div class="col-md-12">
                           <img src="namejet1.png" class="img-thumbnail" alt="">

                         </div>

                       </div>   <!--end indian flag-->
                       <!-- Start NavigationBar -->
                       <div class="row">
                             <div class="col-md-4">     <!--  Logo start -->
                              <nav class="navbar navbar-expand-lg navbar-dark">
                                <img src="namekart.png" class="img-thumbnail" alt="" style="width:200px;height:100px;">

                                </nav>

                             </div>
                             <div class="col-md-8 pt-2">
                                 <nav class="navbar navbar-expand-lg navbar-dark mainnav" style="background-color:#4775d1;">
                                   <button type="button" name="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
                                     <span class="navbar-toggler-icon"></span>
                                       </button>
                                       <div class="collapse navbar-collapse" id="myMenu">
                                             <ul class="navbar-nav pl-5 custom-nav ml-auto">
                                               <li class="nav-item custom-nav">
                                                 <a href="Search.php" class="nav-link ">Search</a>
                                               </li>
                                               <li class="nav-item">
                                                 <a href="Featured.php" class="nav-link ">Featured</a>
                                               </li>
                                               <li class="nav-item">
                                                 <a href="Download.php" class="nav-link">Downloads</a>
                                               </li>
                                               <li class="nav-item">
                                                 <a href="Help_Center.php" class="nav-link">Help Center</a>
                                               </li>
                                               <li class="nav-item">
                                                 <a href="MyAccount.php" class="nav-link">My Account</a>
                                               </li>


                                             </ul>
                                             </div>
                                        </nav>
                                       <div class="row">        <!--  Seach box -->
                                          <div class="col-md-8 mt-2">
                                            <form class="form-inline col s12" action="/action_page.php">
                                         <input class="form-control col s12 16 mr-sm-2" type="text" placeholder="Search Domains">
                                            <button class="btn btn-success" type="submit">Search</button>
                                             </form>

                                          </div>
                                          <div class="col-md-4 mt-2">      <!-- Account-->
                                            <a href="MyAccount.php">Create an Account | </a>
                                            <a href="MyAccount.php">Log In</a>

                                           </div>                   <!--end Account    -->

                                         </div>                        <!--    end Search box -->


                              </div>          <!-- end Link -->

                        </div>        <!-- end Navigation -->


               </div>            <!-- End   Header -->

                    <div class="search_body">   <!--Search Starting-->
                          <div class="row">
                              <div class="col-md-3">
                                <div class="row">
                                  <div class="col-sm-12">




                                             <h4>Advanced Search</h4>
                                             <select class="selectpicker" data-show-subtext="true" data-live-search="true">
                                                <option data-subtext="Rep California">Contains:</option>
                                                <option data-subtext="Sen California">Starts with:</option>
                                                <option data-subtext="Sen Massacusetts">Ends with:</option>
                                                <option data-subtext="Rep Alabama">Matches:</option>

                                                </select>
                                                  <form class="form-inline">
                                                   <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                                                   <button class="btn btn-outline-success btn-rounded " type="submit">Go</button>
                                                  </form>
                                        </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-sm-12">
                                                  <h4>Domain Type</h4>
                                                  <select class="selectpicker" data-show-subtext="true" data-live-search="true">
                                                     <option data-subtext="Rep California">All Domains</option>
                                                     <option data-subtext="Sen California">Pre-Release</option>
                                                     <option data-subtext="Sen Massacusetts">Pending Deletes</option>
                                                     <option data-subtext="Rep Alabama">Public Auctions</option>

                                                     </select>
                                                     <br/>
                                                     <div class="" style="text-align:right;">
                                                       <a href="#">reset|</a>
                                                       <a href="#">update</a>
                                                     </div>


                                                </div>

                                          </div>
                                          <div class="row">
                                            <h7 style="margin-left:15px;">Domain Extensions</h7>
                                              <div class="col-md-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="" class="checkbox">.com</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="" class="checkbox">.org</label>
                                                </div>
                                                <div class="checkbox disabled">
                                                  <label><input type="checkbox" value="" class="checkbox">.co</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="" class="checkbox">.tv</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="" class="checkbox">.me</label>
                                                </div>
                                                <div class="checkbox disabled">
                                                  <label><input type="checkbox" value="" class="checkbox">.io</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="" class="checkbox">.club</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="" class="checkbox">.games</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="" class="checkbox">.online</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="" class="checkbox">.click</label>
                                                </div>

                                              </div>
                                              <div class="col-md-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="" class="checkbox">.net</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="" class="checkbox">.cc</label>
                                                </div>
                                                <div class="checkbox disabled">
                                                  <label><input type="checkbox" value="" class="checkbox">.biz</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="" class="checkbox">.info</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="" class="checkbox">.xyz</label>
                                                </div>
                                                <div class="checkbox disabled">
                                                  <label><input type="checkbox" value="" class="checkbox">.rocks</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="" class="checkbox">.live</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="" class="checkbox">.social</label>
                                                </div>
                                                <div class="checkbox ">
                                                  <label><input type="checkbox" value="" class="checkbox">.site</label>
                                                </div>
                                                <div class="checkbox ">
                                                  <label><input type="checkbox" value="" class="checkbox">.pizza</label>
                                                </div>

                                              </div>
                                              <div class="" style="margin-left:120px;">
                                                <a id="select_all" href="javascript:void(0);">check all|</a>
                                                <a href="#">update</a>
                                              </div>


                                          </div>
                                          <div class="row">
                                                <div class="col-sm-12">
                                                  <h4>Order by Date</h4>
                                                  <select class="selectpicker" data-show-subtext="true" data-live-search="true">
                                                     <option data-subtext="Rep California">Any Date</option>
                                                     <option data-subtext="Sen California">Within 1 Day</option>
                                                      <option data-subtext="Sen California">Within 2 Day</option>
                                                       <option data-subtext="Sen California">Within 3 Day</option>
                                                        <option data-subtext="Sen California">Within 4 Day</option>
                                                         <option data-subtext="Sen California">Within 5 Day</option>


                                                     </select>
                                                     <br/>
                                                     <div class="" style="text-align:right;">
                                                       <a href="#">reset|</a>
                                                       <a href="#">update</a>
                                                     </div>


                                                </div>

                                          </div>
                                          <div class="row">
                                                <div class="col-sm-12">
                                                  <h4>High Bid Amount</h4>
                                                  <select class="selectpicker" data-show-subtext="true" data-live-search="true">
                                                     <option data-subtext="Rep California">Any Amount</option>
                                                     <option data-subtext="Sen California">MoreThan(>=)</option>
                                                      <option data-subtext="Sen California">LessThan(<=)</option>


                                                     </select>
                                                     <br/>
                                                     <div class="" style="text-align:right;">
                                                       <a href="#">reset|</a>
                                                       <a href="#">update</a>
                                                     </div>


                                                </div>

                                          </div>
                                          <div class="row">
                                                <div class="col-sm-12">
                                                  <h4>Min. Bid Amount</h4>
                                                  <select class="selectpicker" data-show-subtext="true" data-live-search="true">
                                                     <option data-subtext="Rep California">Any Amount</option>
                                                     <option data-subtext="Sen California">MoreThan(>=)</option>
                                                      <option data-subtext="Sen California">LessThan(<=)</option>
                                                        <option data-subtext="Sen California">EqualTo</option>


                                                     </select>
                                                     <br/>
                                                     <div class="" style="text-align:right;">
                                                       <a href="#">reset|</a>
                                                       <a href="#">update</a>
                                                     </div>


                                                </div>

                                          </div>
                                          <div class="row">
                                                <div class="col-sm-12">
                                                  <h4>Max Characters</h4>
                                                  <input type="text" name="" value="">

                                                     <br/>
                                                     <div class="" style="text-align:right;">
                                                       <a href="#">reset|</a>
                                                       <a href="#">update</a>
                                                     </div>


                                                </div>

                                          </div>
                                          <div class="row">


                                              <div class="col-md-6">
                                                <h5 >Default Sort</h5>
                                                <select class="selectpicker" data-show-subtext="true" data-live-search="true">
                                                   <option data-subtext="Rep California">Domain</option>
                                                   <option data-subtext="Sen California">Type</option>
                                                    <option data-subtext="Sen California">Time Left</option>



                                                   </select>
                                                   <select class="selectpicker" data-show-subtext="true" data-live-search="true">
                                                      <option data-subtext="Rep California">Type</option>
                                                      <option data-subtext="Sen California">Domain</option>
                                                       <option data-subtext="Sen California">Time Left</option>



                                                      </select>
                                                      <select class="selectpicker" data-show-subtext="true" data-live-search="true">
                                                         <option data-subtext="Rep California">Time Left</option>
                                                         <option data-subtext="Sen California">Type</option>
                                                          <option data-subtext="Sen California">Domain</option>



                                                         </select>

                                              </div>
                                              <div class="col-md-6" style="padding-top:32px;">
                                                <select class="selectpicker" data-show-subtext="true" data-live-search="true">
                                                   <option data-subtext="Rep California">Ascending</option>
                                                   <option data-subtext="Sen California">Descending</option>




                                                   </select>
                                                   <select class="selectpicker" data-show-subtext="true" data-live-search="true">
                                                      <option data-subtext="Rep California">Ascending</option>
                                                      <option data-subtext="Sen California">Descending</option>




                                                      </select>
                                                      <select class="selectpicker" data-show-subtext="true" data-live-search="true">
                                                         <option data-subtext="Rep California">Ascending</option>
                                                         <option data-subtext="Sen California">Descending</option>




                                                         </select>
                                                         <div class="" style="text-align:right;">
                                                           <a href="#">reset|</a>
                                                           <a href="#">update</a>
                                                         </div>


                                              </div>

                                          </div>
                                          <div class="row">
                                            <div class="col-sm-12">
                                                <h5>Filter SLDs</h5>
                                              <div class="checkbox">
                                                <label><input type="checkbox" value="" >No numbers</label>
                                              </div>
                                              <div class="checkbox">
                                                <label><input type="checkbox" value="">All numbers</label>
                                              </div>
                                              <div class="checkbox disabled">
                                                <label><input type="checkbox" value="">No dashes</label>
                                              </div>
                                              <div class="" style="text-align:right;">
                                                <a href="#">reset|</a>
                                                <a href="#">update</a>
                                              </div>

                                            </div>

                                            </div>
                                            <div class="row">
                                              <div class="col-sm-12">
                                                <button type="button" name="button" class="btn btn-primary">Search Deomains</button><br/>
                                                <a href="#" style="padding-left:180px;">reset all</a>
                                              </div>





                                            </div>






                              </div>
                              <div class="col-md-9">
                                      <h1>Search Results</h1>
                                      <div  id="" style="height:50px;border:1px solid  #33cc33; background:#009900;">


                                            <p class="pt-3 pl-3"><a href="#"  style="border:1px solid #6666ff;background:#6666ff; color:white;font-weight: bold;">Bid on Selected</a></p>








                                               <!-- end pagination -->

                                          </div>


                                      <div class="mainpart_table">
                                        <div class="container">
                                                       <div class="row justify-content center">
                                                          <div class="col-sm-12 bg-light rounded my-2 py-2">


                                                                <table class="table table-bordered table-striped table-hover" id="example1">
                                                                <thead id="table_anchor">
                                                                  <tr >
                                                                    <th></th>
                                                                    <th>   <a href="#">Domain</a></th>
                                                                    <th>  <a href="#">Type</a></th>
                                                                    <th> <a href="#">   Bidders</a> </th>
                                                                    <th>  <a href="#">   My Bid</a></th>
                                                                    <th> <a href="#">Min. Bid</a</th>
                                                                    <th> <a href="#">  Current Bid</a></th>
                                                                    <th> <a href="#">Closing Time</a> </th>
                                                                  </tr>
                                                                </thead>
                                                                   <tbody>
                                                                      <?php
                                                                        $conn=mysqli_connect("localhost","root","root","namejet");
                                                                        if(!$conn)
                                                                            die("connection failed".mysqli_connect_error());
                                                                        $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search";
                                                                        $res=mysqli_query($conn,$sql);
                                                                        if(mysqli_num_rows($res)>0)
                                                                        {
                                                                        while($row=mysqli_fetch_assoc($res)){
                                                                      ?>
                                                                      <tr id="table_anchor1">
                                                                         <td></td>
                                                                         <td> <a href="#">  <?= $row['domain_name'] ?> </a> </td>
                                                                         <td><?= $row['type']  ?>  </td>
                                                                         <td><?= $row['Bidders']  ?> </td>
                                                                         <td><?= $row['My_Bid']  ?> </td>
                                                                         <td><?= $row['Min_Bid']  ?> </td>
                                                                         <td><?= $row['Current_Bid']  ?> </td>
                                                                         <td><?= $row['Closing_Time']  ?> </td>

                                                                      </tr>
                                                                      <?php }}

                                                                       ?>
                                                                   </tbody>

                                                                </table>
                                                          </div>



                                                       </div>

                                                    </div>

                                      </div>







                                      <div class="" style="height:50px;border:1px solid  #33cc33; background:#009900;" >
                                           <p class="pt-3 pl-3"><a href="#"  style="border:1px solid #6666ff;background:#6666ff; color:white;font-weight: bold;">Bid on Selected</a></p>
                                                <!-- Pagination start -->



                                                <!-- end pagination end -->





                                      </div>

                              </div>

                          </div>

                    </div><!--Search Ending-->







                  <div class="footer" id="footer">   <!--Footer-->
                    <hr>

                    <div class="row">
                      <div class="col-md-6">
                                   <h5>© 2020 Nameket, All rights reserved.</h5>
                                   <a href="#">Terms | </a>
                                   <a href="#">Privacy |  </a>
                                   <a href="#">Cookie Policy</a>
                                   <img src="domain.gif" alt="" style="text-align:center">
                      </div>
                      <div class="col-md-6" style="text-align:right;">
                        <a href="index.php">Home| </a>
                         <a href="Press-releases.php">Press Releases | </a>
                          <a href="About.php">About Us| </a>
                           <a href="Contact_Us.php">Contact Us| </a>
                            <a href="Help_Center.php">Help| </a>
                            <a href="SiteMap.php">Site Map</a>
                               <h6>Questions?Call Us At</h6>
                               <h5>1-866-462-3572</h5>
                               <p>Visit our<a href=""> Help Center</a> for simple and quick support.</p>
                      </div>

                    </div>

                  </div>  <!-- End Footer-->












    </div>
</div>




<script type="text/javascript">
           	        $(document).ready(function()
           	        {
           	        var table=$('table').DataTable(
                        {
                          ordering:false,
                          "rowHeight": 'auto',
                          'columnDefs': [
                            {
                               'targets': 0,
                               'checkboxes': {
                                  'selectRow': true
                               }
                            }
                          ],
                          'select': {
                            'style': 'multi'
                          },
                          'order': [[1, 'asc']]

                        });

                        // Check box Selected



                                  // Handle form submission event
                                  $('#frm-example').on('submit', function(e){
                                  var form = this;

                                  var rows_selected = table.column(0).checkboxes.selected();

                                  // Iterate over all selected checkboxes
                                  $.each(rows_selected, function(index, rowId){
                                    // Create a hidden element
                                    $(form).append(
                                        $('<input>')
                                           .attr('type', 'hidden')
                                           .attr('name', 'id[]')
                                           .val(rowId)
                                    );
                                  });
                                  });

                                   //end check box Selected



                                  // ===================================================================================================


                                  $("#select_all").click(function() { //"select all" change
                                                      $(".checkbox").data('checked', !$(".checkbox").data('checked')).prop('checked', $(".checkbox").data('checked')); //change all ".checkbox" checked status
                                                      if ($(".checkbox").data('checked')) {
                                                      this.innerHTML = "uncheck all";
                                                      } else
                                                      this.innerHTML = "check all";
                                                      });

                                                      //".checkbox" change
                                                      $('.checkbox').change(function() {
                                                      //uncheck "select all", if one of the listed checkbox item is unchecked
                                                      if (false == $(this).prop("checked")) { //if this item is unchecked
                                                      $("#select_all").prop('checked', false); //change "select all" checked status to false
                                                      }
                                                      //check "select all" if all checkbox items are checked
                                                      if ($('.checkbox:checked').length == $('.checkbox').length) {
                                                      $("#select_all").html("uncheck all");
                                                      $(".checkbox").data('checked', true);
                                                      }
                                                      else {
                                                      $("#select_all").html("check all");
                                                      $(".checkbox").data('checked', false);
                                                      }
                                                      });








                                  // ========================================================================================================================






           	        });

           </script>




           <script
         src="https://code.jquery.com/jquery-3.4.1.js"  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>



    <!--JQuery Proper Bootstrap -->

<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.11/js/dataTables.checkboxes.min.js"></script>

</script>


  </body>
</html>
