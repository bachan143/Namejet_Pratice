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
                                <form class="" action="search.php" method="post">


                                <div class="row">
                                  <div class="col-sm-12">




                                             <h4>Advanced Search</h4>
                                             <select class="selectpicker" data-show-subtext="true" data-live-search="true">
                                                <option name="" value="" >Contains:</option>
                                                <option >Starts with:</option>
                                                <option >Ends with:</option>
                                                <option >Matches:</option>

                                                </select>
                                                  <form class="form-inline">
                                                   <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                                                   <button class="btn btn-outline-success btn-rounded " type="submit">Go</button>
                                                  </form>
                                        </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-sm-12">
                                                  <form class="" action="Search.php" method="post">


                                                  <h4>Domain Type</h4>

                                                  <select class="selectpicker"  name="Domain_Type">
                                                     <option  value="All_domains">All Domains</option>
                                                     <option  value="Pre-Release">Pre-Release</option>
                                                     <option  value="Pending_Deletes">Pending Deletes</option>
                                                     <option  value="Public_Auctions">Public Auctions</option>

                                                     </select>
                                                     <br/>
                                                     <div class="" style="text-align:right;">
                                                      <input type="submit" name="" value="update"></input>

                                                      <input type="submit" name="reset" value="reset">
                                                     </div>
                                                  </form>


                                                </div>

                                          </div>
                                          <!-- ================================ -->
                                          <div class="row">
                                                <div class="col-sm-12">
                                                  <form class="" action="Search.php" method="post">


                                                  <h4>Domain Type</h4>

                                                  <select class="selectpicker"  name="public_private">
                                                     <option  value="public">Public</option>
                                                     <option  value="private">Private</option>

                                                     </select>
                                                     <br/>
                                                     <div class="" style="text-align:right;">
                                                      <input type="submit" name="" value="update"></input>

                                                      <input type="submit" name="reset" value="reset">
                                                     </div>
                                                  </form>


                                                </div>

                                          </div>
                                          <!-- ===================================== -->
                                          <div class="row">
                                            <h7 style="margin-left:15px;">Domain Extensions</h7>
                                            <form class="" action="search.php" method="post">


                                              <div class="col-md-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="com" class="checkbox" name="check_list">.com</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="org" class="checkbox" name="check_list">.org</label>
                                                </div>
                                                <div class="checkbox disabled">
                                                  <label><input type="checkbox" value="co" class="checkbox" name="check_list">.co</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="tv" class="checkbox" name="check_list">.tv</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="me" class="checkbox" name="check_list">.me</label>
                                                </div>
                                                <div class="checkbox disabled">
                                                  <label><input type="checkbox" value="io" class="checkbox" name="check_list">.io</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="club" class="checkbox" name="check_list">.club</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="games" class="checkbox" name="check_list">.games</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="online" class="checkbox" name="check_list">.online</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="click" class="checkbox" name="check_list">.click</label>
                                                </div>

                                              </div>
                                              <div class="col-md-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="net" class="checkbox" name="check_list">.net</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="cc" class="checkbox" name="check_list">.cc</label>
                                                </div>
                                                <div class="checkbox ">
                                                  <label><input type="checkbox" value="biz" class="checkbox" name="check_list">.biz</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="info" class="checkbox" name="check_list">.info</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="xyz" class="checkbox" name="check_list">.xyz</label>
                                                </div>
                                                <div class="checkbox ">
                                                  <label><input type="checkbox" value="rocks" class="checkbox" name="check_list">.rocks</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="live" class="checkbox" name="check_list">.live</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" value="social" class="checkbox" name="check_list">.social</label>
                                                </div>
                                                <div class="checkbox ">
                                                  <label><input type="checkbox" value="site" class="checkbox" name="check_list">.site</label>
                                                </div>
                                                <div class="checkbox ">
                                                  <label><input type="checkbox" value="pizza" class="checkbox" name="check_list">.pizza</label>
                                                </div>

                                              </div>
                                              <div class="" style="margin-left:120px;">

                                                <input type="submit" name="submit" value="Update">
                                                  <a id="select_all" href="javascript:void(0);">check all|</a>

                                              </div>

                                           </form>
                                          </div>
                                          <div class="row">
                                                <div class="col-sm-12">
                                                  <h4>Order by Date</h4>
                                                  <form class="" action="Search.php" method="post">


                                                  <select class="selectpicker" name="WithDate">
                                                     <option value="anydate">Any Date</option>
                                                     <option  value="1day">Within 1 Day</option>
                                                      <option value="2day">Within 2 Day</option>
                                                       <option value="3day">Within 3 Day</option>
                                                        <option value="4day">Within 4 Day</option>
                                                         <option value="5day">Within 5 Day</option>


                                                     </select>
                                                     <br/>
                                                     <div class="" style="text-align:right;">

                                                       <input type="submit" name="" value="Update" name="submit1">
                                                       <input type="submit" name="reset" value="reset">
                                                     </div>

                                                    </form>
                                                </div>

                                          </div>
                                          <div class="row">
                                                <div class="col-sm-12">
                                                  <h4>High Bid Amount</h4>
                                                  <form class="" action="" method="post">


                                                  <select class="selectpicker" name="cardio" id = "cardio">
                                                     <option data-subtext="Rep California" value="anyamount" selected>Any Amount</option>
                                                     <option data-subtext="Sen California" value="morethan">MoreThan(>=)</option>
                                                      <option data-subtext="Sen California" value="lessthan">LessThan(<=)</option>


                                                     </select>
                                                     <div id = "cardioyes" style = "display:none;">
                                                              $ <input type = "text" name = "duration" />
                                                               </div>
                                                     <br/>
                                                     <div class="" style="text-align:right;">
                                                       <!-- <a href="#">reset|</a>
                                                       <a href="#">update</a> -->
                                                       <input type="submit" name="" value="update">
                                                       <input type="submit" name="reset" value="reset">
                                                     </div>
                                                  </form>


                                                </div>

                                          </div>
                                          <div class="row">
                                                <div class="col-sm-12">
                                                  <form class="" action="" method="post">


                                                  <h4>Min. Bid Amount</h4>
                                                  <select class="selectpicker" name = "cardio1" id = "cardio1" >
                                                     <option data-subtext="Rep California" value="anyamount1">Any Amount</option>
                                                     <option data-subtext="Sen California" value="morethan1">MoreThan(>=)</option>
                                                      <option data-subtext="Sen California" value="lessthan1">LessThan(<=)</option>
                                                        <option data-subtext="Sen California" value="equal">EqualTo</option>


                                                     </select>
                                                     <div id = "cardioyes1" style = "display:none;">
                                                              $ <input type = "text" name = "duration1" />
                                                               </div>
                                                     <br/>
                                                     <br/>
                                                     <div class="" style="text-align:right;">
                                                       <input type="submit" name="" value="update">
                                                       <input type="submit" name="reset" value="reset">

                                                     </div>
                                                       </form>


                                                </div>

                                          </div>
                                          <div class="row">
                                            <form class="" action="" method="post">


                                                <div class="col-sm-12">
                                                  <h4>Max Characters</h4>
                                                  <input type="text" name="max_character" value="">

                                                     <br/>
                                                     <div class="" style="text-align:right;">
                                                       <input type="submit" name="" value="update">
                                                       <input type="submit" name="reset" value="reset">

                                                     </div>


                                                </div>
                                            </form>

                                          </div>

                                          <div class="row">
                                                <div class="col-sm-12">
                                              <form class="" action="" method="post">


                                                  <h4>Min Characters</h4>
                                                  <input type="text" name="min_character" value="">

                                                     <br/>
                                                     <div class="" style="text-align:right;">
                                                       <input type="submit" name="" value="update">
                                                       <input type="submit" name="reset" value="reset">
                                                     </div>


                                                </div>
                                              </form>

                                          </div>
                                          <div class="row">
                                            <form class="" action="" method="post">


                                                <div class="col-sm-12">
                                                  <h4>BlackList</h4>
                                                  <input type="text" name="blacklist" value="">

                                                     <br/>
                                                     <div class="" style="text-align:right;">
                                                       <input type="submit" name="" value="update">
                                                       <input type="submit" name="reset" value="reset">

                                                     </div>


                                                </div>
                                            </form>

                                          </div>
                                          <div class="row">
                                            <form class="" action="" method="post">


                                                <div class="col-sm-12">
                                                  <h4>MYBID</h4>
                                                MINBID  <input type="text" name="minbid" value="">TO<br/>
                                                  MAXBID  <input type="text" name="maxbid" value="">



                                                     <br/>
                                                     <div class="" style="text-align:right;">
                                                       <input type="submit" name="" value="update">
                                                       <input type="submit" name="reset" value="reset">

                                                     </div>


                                                </div>
                                            </form>

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
                                              <form class="" action="" method="post">


                                                <h5>Filter SLDs</h5>
                                              <div class="checkbox">
                                                <label><input type="checkbox" value="nonumber" name="nonumber" >No numbers</label>
                                              </div>
                                              <div class="checkbox">
                                                <label><input type="checkbox" value="allnumber" name="allnumber">All numbers</label>
                                              </div>
                                              <div class="checkbox">
                                                <label><input type="checkbox" value="nodashes" name="nodashes">No dashes</label>
                                              </div>
                                              <div class="" style="text-align:right;">
                                                <input type="submit" name="" value="update">
                                                <input type="submit" name="reset" value="reset">
                                              </div>
                                              </form>

                                            </div>

                                            </div>
                                            <div class="row">
                                              <div class="col-sm-12">
                                                <button type="button" name="button" class="btn btn-primary">Search Domains</button><br/>
                                                <a href="#" style="padding-left:180px;">reset all</a>
                                              </div>





                                            </div>




                               </form>

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
                                                                            error_reporting(E_ALL & ~E_NOTICE);
                                                                              $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search";


                                                                            if(isset($_POST['reset']))
                                                                            {
                                                                              $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search";
                                                                            }

                                                                            if($_POST['Domain_Type']=='All_domains')
                                                                            {
                                                                                $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search";

                                                                            }
                                                                            elseif($_POST['Domain_Type']=='Pre-Release')
                                                                            {
                                                                                 $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search where type='PreRelease'";
                                                                            }
                                                                            elseif($_POST['Domain_Type']=='Pending_Deletes')
                                                                            {
                                                                                 $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search where type='Pending Delete'";
                                                                            }
                                                                            elseif($_POST['Domain_Type']=='Public_Auctions')
                                                                            {
                                                                                 $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search where type='Public Auction'";
                                                                            }
                                                                            elseif($_POST['public_private']=='public')
                                                                            {
                                                                                 $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search where type='Public Auction'";
                                                                            }
                                                                            elseif($_POST['public_private']=='private')
                                                                            {
                                                                                 $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search where type='PreRelease' or type='Pending Delete'";
                                                                            }






                                                                        elseif($_POST['WithDate']=='anydate')
                                                                          {
                                                                               $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search";
                                                                          }
                                                                          elseif($_POST['WithDate']=='1day')
                                                                          {
                                                                               $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search where (substring(Closing_Time,1,2)='1h' or substring(Closing_Time,1,2)='2h' or substring(Closing_Time,1,2)='3h' or substring(Closing_Time,1,3)='11h' or substring(Closing_Time,1,3)='12h');";
                                                                          }
                                                                          elseif($_POST['WithDate']=='2day')
                                                                          {
                                                                                $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search where (substring(Closing_Time,1,2)='1h' or substring(Closing_Time,1,2)='2h' or substring(Closing_Time,1,2)='3h' or substring(Closing_Time,1,3)='11h' or substring(Closing_Time,1,3)='12h' or substring(Closing_Time,1,2)='1d');";
                                                                          }
                                                                          elseif($_POST['WithDate']=='3day')
                                                                          {
                                                                           $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search where (substring(Closing_Time,1,2)='1h' or substring(Closing_Time,1,2)='2h' or substring(Closing_Time,1,2)='3h' or substring(Closing_Time,1,3)='11h' or substring(Closing_Time,1,3)='12h' or substring(Closing_Time,1,2)='1d'or substring(Closing_Time,1,2)='2d');";
                                                                          }
                                                                          elseif($_POST['WithDate']=='4day')
                                                                          {
                                                                           $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search where (substring(Closing_Time,1,2)='1h' or substring(Closing_Time,1,2)='2h' or substring(Closing_Time,1,2)='3h' or substring(Closing_Time,1,3)='11h' or substring(Closing_Time,1,3)='12h' or substring(Closing_Time,1,2)='1d' or substring(Closing_Time,1,2)='2d' or  substring(Closing_Time,1,2)='3d');";
                                                                          }
                                                                          elseif($_POST['WithDate']=='5day')
                                                                          {
                                                                           $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search where (substring(Closing_Time,1,2)='1h' or substring(Closing_Time,1,2)='2h' or substring(Closing_Time,1,2)='3h' or substring(Closing_Time,1,3)='11h' or substring(Closing_Time,1,3)='12h' or substring(Closing_Time,1,2)='1d' or substring(Closing_Time,1,2)='2d' or  substring(Closing_Time,1,2)='3d' or  substring(Closing_Time,1,2)='4d' );";
                                                                          }



                                                                            elseif($_POST['check_list']=='com')
                                                                            {
                                                                               $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search where domain_name  like '%.com%'";
                                                                            }
                                                                            elseif($_POST['check_list']=='info')
                                                                            {
                                                                               $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search where domain_name  like '%.info%'";
                                                                            }
                                                                            elseif($_POST['check_list']=='cc')
                                                                            {
                                                                               $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search where domain_name  like '%.cc%'";
                                                                            }
                                                                            elseif($_POST['check_list']=='biz')
                                                                            {
                                                                               $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search where domain_name  like '%.biz%'";
                                                                            }
                                                                            elseif($_POST['check_list']=='net')
                                                                            {
                                                                               $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search where domain_name  like '%.net%'";
                                                                            }
                                                                             elseif($_POST['cardio']=='anyamount')
                                                                             {

                                                                                 $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search";

                                                                            }
                                                                           elseif($_POST['cardio']=='morethan')
                                                                             {
                                                                                 $amount='$'.$_POST['duration'];



                                                                                  $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search where '$amount'< Current_Bid";


                                                                             }
                                                                             elseif($_POST['cardio']=='lessthan')
                                                                               {
                                                                                   $amount='$'.$_POST['duration'];



                                                                                    $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search where '$amount'> Current_Bid";


                                                                               }
                                                                               elseif($_POST['cardio1']=='anyamount1')
                                                                               {

                                                                                   $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search";

                                                                              }
                                                                              elseif($_POST['cardio1']=='morethan1')
                                                                                {
                                                                                    $amount='$'.$_POST['duration1'];



                                                                                     $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search where '$amount'<Min_Bid";


                                                                                }
                                                                                elseif($_POST['cardio1']=='lessthan1')
                                                                                  {
                                                                                      $amount='$'.$_POST['duration1'];



                                                                                       $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search where '$amount'>Min_Bid";


                                                                                  }
                                                                                  elseif($_POST['cardio1']=='equal')
                                                                                    {
                                                                                        $amount='$'.$_POST['duration1'];



                                                                                         $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search where '$amount'=Min_Bid";


                                                                                    }
                                                                                  elseif($_POST['max_character'])
                                                                                  {
                                                                                       $value=$_POST['max_character'];
                                                                                        $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time  from search where '$value'>= char_length(substring_index(domain_name,'.',1))";
                                                                                  }
                                                                                  elseif($_POST['min_character'])
                                                                                  {
                                                                                       $value=$_POST['min_character'];
                                                                                        $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time  from search where '$value'<= char_length(substring_index(domain_name,'.',1))";
                                                                                  }
                                                                                  elseif($_POST['maxbid'] AND $_POST['minbid'])
                                                                                  {
                                                                                       $minbid=$_POST['minbid'];
                                                                                       $maxbid=$_POST['maxbid'];
                                                                                        echo $minbid;

                                                                                       echo $maxbid;

                                                                                        // $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time  from search where '$value'<= char_length(substring_index(domain_name,'.',1))";
                                                                                  }
                                                                                  elseif($_POST['blacklist'])
                                                                                  {
                                                                                       $value=$_POST['blacklist'];

                                                                                        $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search where not locate('$value',domain_name)>0";
                                                                                  }
                                                                                  elseif($_POST['nonumber']=='nonumber')
                                                                                  {
                                                                                      $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search where not  substring_index(domain_name,'.',1) regexp '[0-9]'";
                                                                                  }
                                                                                  elseif($_POST['allnumber']=='allnumber')
                                                                                  {
                                                                                      $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search where  substring_index(domain_name,'.',1) regexp '[0-9]'";
                                                                                  }


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
                                  $('#cardio').change(function(){
                                        selection = $(this).val();
                                        switch(selection)
                                        {
                                            //show the <div> or not
                                            case 'morethan':
                                                $('#cardioyes').show();
                                                break;
                                              case 'lessthan':
                                              $('#cardioyes').show();
                                              break;

                                                default:
                                                $('#cardioyes').hide();
                                                break;
                                        }
                                      });
                                      // ========================================================================================================================================
                                      $('#cardio1').change(function(){
                                            selection = $(this).val();
                                            switch(selection)
                                            {
                                                //show the <div> or not
                                                case 'morethan1':
                                                    $('#cardioyes1').show();
                                                    break;
                                                  case 'lessthan1':
                                                  $('#cardioyes1').show();
                                                  case 'equal':
                                                  $('#cardioyes1').show();
                                                  break;

                                                    default:
                                                    $('#cardioyes1').hide();
                                                    break;
                                            }
                                          });









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
