<?php
	$main=$this->router->fetch_class();
	$sub=$this->router->fetch_method();
	$try=$main.$sub;
	$uri=$this->uri->segment(1);
	$uri2=$this->uri->segment(2);
?>
<!doctype html>
<html lang="en" class="light-theme color-header headercolor1">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?=site_url();?>/assets/admin2/images/favicon-32x32.png" type="image/png" />
  <!--plugins-->
  <link href="<?=site_url();?>/assets/admin2/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="<?=site_url();?>/assets/admin2/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="<?=site_url();?>/assets/admin2/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="<?=site_url();?>/assets/admin2/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?=site_url();?>/assets/admin2/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="<?=site_url();?>/assets/admin2/css/style.css" rel="stylesheet" />
  <link href="<?=site_url();?>/assets/admin2/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- loader-->
	<link href="<?=site_url();?>/assets/admin2/css/pace.min.css" rel="stylesheet" />
 <link href="<?=site_url();?>/assets/admin/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

  <!--Theme Styles-->
  <link href="<?=site_url();?>/assets/admin2/css/dark-theme.css" rel="stylesheet" />
  <link href="<?=site_url();?>/assets/admin2/css/light-theme.css" rel="stylesheet" />
  <link href="<?=site_url();?>/assets/admin2/css/semi-dark.css" rel="stylesheet" />
  <link href="<?=site_url();?>/assets/admin2/css/header-colors.css" rel="stylesheet" />
	 <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link href="<?=site_url();?>/assets/admin/plugins/select2/css/select2.min.css" rel="stylesheet" />
	<link href="<?=site_url();?>/assets/admin/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />

  <title>Dashboard :: Gateway To FPGA</title>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
    <header class="top-header">        
      <nav class="navbar navbar-expand">
        <div class="mobile-toggle-icon d-xl-none">
            <i class="bi bi-list"></i>
          </div>
          <div class="top-navbar d-none d-xl-block">
          <ul class="navbar-nav align-items-center">
            <li class="nav-item">
            <a class="nav-link" href="<?=site_url();?>dashboard">Dashboard</a>
            </li>
            
          </ul>
          </div>
          <div class="search-toggle-icon d-xl-none ms-auto">
            <i class="bi bi-search"></i>
          </div>
          <form class="searchbar d-none d-xl-flex ms-auto">
              <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
              <input class="form-control" type="text" placeholder="Type here to search">
              <div class="position-absolute top-50 translate-middle-y d-block d-xl-none search-close-icon"><i class="bi bi-x-lg"></i></div>
          </form>
          <div class="top-navbar-right ms-3">
            <ul class="navbar-nav align-items-center">
            <li class="nav-item dropdown dropdown-large">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                <div class="projects">
                  <i class="bi bi-grid-3x3-gap-fill"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                 <div class="row row-cols-3 gx-2">
                    <div class="col">
                      <a href="ecommerce-orders.html">
                       <div class="apps p-2 radius-10 text-center">
                          <div class="apps-icon-box mb-1 text-white bg-primary bg-gradient">
                            <i class="bi bi-cart-plus-fill"></i>
                          </div>
                          <p class="mb-0 apps-name">Orders</p>
                       </div>
                      </a>
                    </div>
                    <div class="col">
                      <a href="javascript:;">
                      <div class="apps p-2 radius-10 text-center">
                         <div class="apps-icon-box mb-1 text-white bg-danger bg-gradient">
                           <i class="bi bi-people-fill"></i>
                         </div>
                         <p class="mb-0 apps-name">Users</p>
                      </div>
                    </a>
                   </div>
                   <div class="col">
                    <a href="ecommerce-products-grid.html">
                    <div class="apps p-2 radius-10 text-center">
                       <div class="apps-icon-box mb-1 text-white bg-success bg-gradient">
                        <i class="bi bi-bank2"></i>
                       </div>
                       <p class="mb-0 apps-name">Products</p>
                    </div>
                    </a>
                  </div>
                  <div class="col">
                    <a href="component-media-object.html">
                    <div class="apps p-2 radius-10 text-center">
                       <div class="apps-icon-box mb-1 text-white bg-orange bg-gradient">
                        <i class="bi bi-collection-play-fill"></i>
                       </div>
                       <p class="mb-0 apps-name">Media</p>
                    </div>
                    </a>
                  </div>
                  <div class="col">
                    <a href="pages-user-profile.html">
                    <div class="apps p-2 radius-10 text-center">
                       <div class="apps-icon-box mb-1 text-white bg-purple bg-gradient">
                        <i class="bi bi-person-circle"></i>
                       </div>
                       <p class="mb-0 apps-name">Account</p>
                     </div>
                    </a>
                  </div>
                  <div class="col">
                    <a href="javascript:;">
                    <div class="apps p-2 radius-10 text-center">
                       <div class="apps-icon-box mb-1 text-dark bg-info bg-gradient">
                        <i class="bi bi-file-earmark-text-fill"></i>
                       </div>
                       <p class="mb-0 apps-name">Docs</p>
                    </div>
                    </a>
                  </div>
                  <div class="col">
                    <a href="ecommerce-orders-detail.html">
                    <div class="apps p-2 radius-10 text-center">
                       <div class="apps-icon-box mb-1 text-white bg-pink bg-gradient">
                        <i class="bi bi-credit-card-fill"></i>
                       </div>
                       <p class="mb-0 apps-name">Payment</p>
                    </div>
                    </a>
                  </div>
                  <div class="col">
                    <a href="javascript:;">
                    <div class="apps p-2 radius-10 text-center">
                       <div class="apps-icon-box mb-1 text-white bg-bronze bg-gradient">
                        <i class="bi bi-calendar-check-fill"></i>
                       </div>
                       <p class="mb-0 apps-name">Events</p>
                    </div>
                  </a>
                  </div>
                  <div class="col">
                    <a href="javascript:;">
                    <div class="apps p-2 radius-10 text-center">
                       <div class="apps-icon-box mb-1 text-dark bg-warning bg-gradient">
                        <i class="bi bi-book-half"></i>
                       </div>
                       <p class="mb-0 apps-name">Story</p>
                      </div>
                    </a>
                  </div>
                 </div><!--end row-->
              </div>
            </li>
            
			
            <li class="nav-item dropdown dropdown-large d-none d-sm-block">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                <div class="notifications">
                  <span class="notify-badge">8</span>
                  <i class="bi bi-bell-fill"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end p-0">
                <div class="p-2 border-bottom m-2">
                    <h5 class="h5 mb-0">Notifications</h5>
                </div>
                <div class="header-notifications-list p-2">

                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                         <div class="notification-box"><i class="bi bi-basket2-fill"></i></div>
                         <div class="ms-3 flex-grow-1">
                           <h6 class="mb-0 dropdown-msg-user">New Orders <span class="msg-time float-end text-secondary">1 m</span></h6>
                           <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">You have recived new orders</small>
                         </div>
                      </div>
                    </a>
                  
               </div>
               <div class="p-2">
                 <div><hr class="dropdown-divider"></div>
                   <a class="dropdown-item" href="#">
                     <div class="text-center">View All Notifications</div>
                   </a>
               </div>
              </div>
            </li>
            </ul>
            </div>
      </nav>
    </header>
       <!--end top header-->

       <!--start sidebar -->
       <aside class="sidebar-wrapper">
          <div class="iconmenu"> 
            <div class="nav-toggle-box">
              <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
            </div>
            <ul class="nav nav-pills flex-column">
              <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
                <button class="nav-link <?php 
				  if($uri=='dashboard' || $uri=='bookacall' || $uri=='contacts' || $uri=='internship' || $uri=='career' || $uri=='help' || $uri=='testimony' || $uri=='pendingmycourse' || $uri=='certifications' || $uri=='mycourses' )
				  {echo 'active';}  
					?>" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button"><i class="bi bi-house-door-fill"></i></button>
              </li>
              <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Course Manager">
                <button class="nav-link <?php 
				  if($uri=='category' || $uri=='courses' || $uri=='course_details' || $uri=='Course_details' || $uri=='curriculam' || $uri=='course_info' || $uri=='course_lectures' || $uri=='course_material'  || $uri=='course_schedule' )
				  {echo 'active';}
					?>" data-bs-toggle="pill" data-bs-target="#pills-application" type="button"><i class="bi-book-half"></i></button>
              </li>
			  <!--
              <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Batch Manager">
                <button class="nav-link <?php if($uri=='course_schedule'){echo 'active';}?>" data-bs-toggle="pill" data-bs-target="#pills-widgets" type="button"><i class="bi bi-briefcase-fill"></i></button>
              </li>
			  -->
              <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Payment Manager">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-ecommerce" type="button"><i class="bi bi-bag-check-fill"></i></button>
              </li>
              <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="User Manager">
                <button class="nav-link <?php 
				  if($uri=='students' || $uri=='attendance' || $uri=='teachers' || $uri=='allusers' || $uri=='users')
				  {echo 'active';}
					?>" data-bs-toggle="pill" data-bs-target="#pills-components" type="button"><i class="bi bi-person-circle"></i></button>
              </li>
             
			 
              <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="CMS">
                <button class="nav-link <?php 
				  if($uri=='Videos' || $uri=='blogs' || $uri=='videos')
				  {echo 'active';}
					?>" data-bs-toggle="pill" data-bs-target="#pills-tables" type="button"><i class="bi bi-bi bi-globe2"></i></button>
              </li>
			  
			  <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Logout">
                <a href="<?=site_url();?>main/logout" ><button class="nav-link" type="button"><i class="bi bi-power"></i></button></a>
              </li>
			  
			  
              
            </ul>
          </div>
          <div class="textmenu">
            <div class="brand-logo">
              <img src="<?=site_url();?>assets/images/logos/logo.png" width="140" alt=""/>
            </div>
            <div class="tab-content">
              <div class="tab-pane fade
				  <?php 
				  if($uri=='dashboard' || $uri=='bookacall' || $uri=='contacts' || $uri=='internship' || $uri=='career' || $uri=='help' || $uri=='testimony' || $uri=='pendingmycourse' || $uri=='certifications' || $uri=='mycourses' )
				  {echo 'active show';}
					?>" id="pills-dashboards"> <!-- Dashboard -->
                <div class="list-group list-group-flush">
                  <div class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-0">Dashboards</h5>
                    </div>
                    <small class="mb-0">Your Quick Management Links</small>
                  </div>
                  <a href="<?=site_url();?>dashboard" class="list-group-item">
				  <i class="bi bi-house-door-fill"></i>Back to Dashboard</a>
                  <a href="<?=site_url();?>bookacall" class="list-group-item
				  <?php if($uri=='bookacall'){echo 'active';}?>">
				  <i class="bi bi-broadcast-pin"></i>Demo Requests</a>
                  <a href="<?=site_url();?>contacts" class="list-group-item
				  <?php if($uri=='contacts'){echo 'active';}?>">
				  <i class="bi bi-bookmark-check"></i>Enquiries</a>
                  <a href="<?=site_url();?>mycourses" class="list-group-item
				  <?php if($uri=='mycourses'){echo 'active';}?>"><i class="bi bi-cart-plus"></i>Purchase Requests</a>
				  
                  <a href="<?=site_url();?>internship" class="list-group-item
				  <?php if($uri=='internship'){echo 'active';}?>"><i class="bi-file-earmark-person"></i>Internship Requests</a>
                  <a href="<?=site_url();?>career" class="list-group-item
				  <?php if($uri=='career'){echo 'active';}?>"><i class="bi-person-badge-fill"></i>Job Applications</a>
				  
				  <a href="<?=site_url();?>certifications" class="list-group-item
				  <?php if($uri=='certifications'){echo 'active';}?>"><i class="bi-person-badge-fill"></i>Certifications Listing</a>
				  
				  <a href="<?=site_url();?>help" class="list-group-item
				  <?php if($uri=='help'){echo 'active';}?>"><i class="bi-person-badge-fill"></i>Help Listing</a>
				  
				  <a href="<?=site_url();?>testimony" class="list-group-item
				  <?php if($uri=='testimony'){echo 'active';}?>"><i class="bi-person-badge-fill"></i>Testimony Listing</a>
				 
				  
				
                </div>
              </div>
              <div class="tab-pane fade
				  <?php 
				  if($uri=='category' || $uri=='courses' || $uri=='course_details' || $uri=='Course_details' || $uri=='curriculam' || $uri=='course_info' || $uri=='course_lectures' || $uri=='course_material' || $uri=='course_schedule' )
				  {echo 'active show';}
					?>" id="pills-application"> <!-- courses -->
                <div class="list-group list-group-flush">
                  <div class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-0">Course Manager</h5>
                    </div>
                    <small class="mb-0">Mange Your Course Related content here</small>
                  </div>
                  <a href="<?=site_url();?>category" class="list-group-item
				  <?php if($uri=='category'){echo 'active';}?>"><i class="bi bi-card-list"></i>Categories</a>
                  <a href="<?=site_url();?>courses" class="list-group-item
				  <?php if($uri=='courses'){echo 'active';}?>"><i class="bi-book"></i>Courses</a>
                  <a href="<?=site_url();?>Course_details" class="list-group-item
				  <?php if($uri=='Course_details' || $uri=='course_details'){echo 'active';}?>"><i class="bi-book-half"></i>Course Details</a>
                  <a href="<?=site_url();?>curriculam" class="list-group-item
				  <?php if($uri=='curriculam'){echo 'active';}?>"><i class="bi-book-half"></i>Course Outlines</a>
                  <a href="<?=site_url();?>course_info" class="list-group-item
				  <?php if($uri=='course_info'){echo 'active';}?>"><i class="bi-book-fill"></i>Course Information</a>
                  <a href="<?=site_url();?>course_material" class="list-group-item
				  <?php if($uri=='course_material'){echo 'active';}?>"><i class="bi bi-briefcase"></i>Course Material</a>
				  <a href="<?=site_url();?>course_schedule/add" class="list-group-item
				  <?php if($uri=='course_schedule' && $uri2=='add'){echo 'active';}?>"><i class="bi bi-box"></i>Add Schedule</a>
                  <a href="<?=site_url();?>course_schedule" class="list-group-item
				  <?php if($uri=='course_schedule' && $uri2!='add'){echo 'active';}?>"><i class="bi bi-box"></i>List Schedule</a>
				  <!--
				  <a href="<?=site_url();?>course_lectures" class="list-group-item
				  <?php if($uri=='course_lectures'){echo 'active';}?>"><i class="bi bi-briefcase"></i>Course Lectures Listing</a>
				  -->
				  
                </div>
              </div>
			  <!--
              <div class="tab-pane fade
				  <?php 
				  if($uri=='course_schedule')
				  {echo 'active show';}
					?>" id="pills-widgets">  <!-- batches -- >
                <div class="list-group list-group-flush">
                  <div class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-0">Batch Manager</h5>
                    </div>
                    <small class="mb-0">You can create and assign batches from here</small>
                  </div>
                  <a href="<?=site_url();?>course_schedule/add" class="list-group-item
				  <?php if($uri=='course_schedule' && $uri2=='add'){echo 'active';}?>"><i class="bi bi-box"></i>Add Schedule</a>
                  <a href="<?=site_url();?>course_schedule" class="list-group-item
				  <?php if($uri=='course_schedule' && $uri2!='add'){echo 'active';}?>"><i class="bi bi-box"></i>List Schedule</a>
                  
                </div>
              </div>
			  -->
              <div class="tab-pane fade <?php 
				  if($uri=='transactions')
				  {echo 'active show';}
					?>" id="pills-ecommerce">  <!-- payments -->
                <div class="list-group list-group-flush">
                  <div class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-0">Payment Manager</h5>
                    </div>
                    <small class="mb-0">You can see all your transaction details from here.</small>
                  </div>
                  
                 
				  <a href="<?=site_url();?>transactions" class="list-group-item
				  <?php if($uri=='transactions'){echo 'active';}?>"><i class="bi bi-bell"></i>Transactions</a>
                  <a href="ecommerce-transactions.html" class="list-group-item"><i class="bi bi-handbag"></i>Discounts</a>
                 
                </div>
              </div>
              <div class="tab-pane fade <?php 
				  if($uri=='students' || $uri=='attendance' || $uri=='teachers' || $uri=='allusers' || $uri=='users')
				  {echo 'active show';}
					?>" id="pills-components">  <!-- users -->
                <div class="list-group list-group-flush">
                  <div class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-0">User Manager</h5>
                    </div>
                    <small class="mb-0">Manage Student, Trainers from here</small>
                  </div>
                  <a href="<?=site_url();?>students" class="list-group-item
				  <?php if($uri=='students'){echo 'active';}?>"><i class="bi bi-bell"></i>Students</a>
                  <a href="<?=site_url();?>teachers" class="list-group-item
				  <?php if($uri=='teachers'){echo 'active';}?>"><i class="bi bi-arrows-collapse"></i>Trainers</a>
                  <a href="<?=site_url();?>allusers" class="list-group-item
				  <?php if($uri=='allusers'){echo 'active';}?>"><i class="bi bi-badge-8k"></i>All Users</a>
                  <a href="<?=site_url();?>users/add" class="list-group-item
				  <?php if($uri=='users' && $uri2=='add'){echo 'active';}?>"><i class="bi bi-badge-8k"></i>Add Users</a>
				  
				  <a href="<?=site_url();?>attendance" class="list-group-item
				  <?php if($uri=='attendance'){echo 'active';}?>"><i class="bi bi-badge-8k"></i>Attendance Listing</a>
				  
                </div>
              </div>
             
              <div class="tab-pane fade <?php 
				  if($uri=='Videos' || $uri=='blogs' || $uri=='videos' || $uri=='pages')
				  {echo 'active show';}
					?>" id="pills-tables"> <!-- video manager -->
                <div class="list-group list-group-flush">
                  <div class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-0">Content Manager</h5>
                    </div>
                    <small class="mb-0">Creat Blogs and Upload videos from here</small>
                  </div>
                   <a href="<?=site_url();?>blogs" class="list-group-item
				  <?php if($uri=='blogs'){echo 'active';}?>"><i class="bi bi-badge-8k"></i>Blogs /Pages Listing</a>

				  
				   <a href="<?=site_url();?>Videos" class="list-group-item
				  <?php if($uri=='Videos' && $uri2!='add'){echo 'active';}?>"><i class="bi bi-badge-8k"></i>Videos Listing</a>
				  <a href="<?=site_url();?>Videos/add" class="list-group-item
				  <?php if($uri=='Videos' && $uri2=='add'){echo 'active';}?>"><i class="bi bi-badge-8k"></i>Add Videos</a>
				  
				  
                </div>
              </div>
              <div class="tab-pane fade" id="pills-tables"> <!-- video manager -->
                <div class="list-group list-group-flush">
                  <div class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-0">Video Manager</h5>
                    </div>
                    <small class="mb-0">Upload videos from here</small>
                  </div>
                  <a href="table-basic-table.html" class="list-group-item"><i class="bi bi-table"></i>Basic Tables</a>
                  <a href="table-advance-tables.html" class="list-group-item"><i class="bi bi-basket3"></i>Advance Tables</a>
                  <a href="table-datatable.html" class="list-group-item"><i class="bi bi-graph-up"></i>Data Tables</a>
                </div>
              </div>
             
              <div class="tab-pane fade" id="pills-icons">  <!-- icons -->
                <div class="list-group list-group-flush">
                  <div class="list-group-item">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-0">Icons</h5>
                    </div>
                    <small class="mb-0">Some placeholder content</small>
                  </div>
                  <a href="icons-line-icons.html" class="list-group-item"><i class="bi bi-brightness-low"></i>Line Icons</a>
                  <a href="icons-boxicons.html" class="list-group-item"><i class="bi bi-chat"></i>Boxicons</a>
                  <a href="icons-feather-icons.html" class="list-group-item"><i class="bi bi-droplet"></i>Feather Icons</a>
                </div>
              </div>
              
            </div>
          </div>
       </aside>
       <!--start sidebar -->

       <!--start content-->
       <main class="page-content">
              <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
              <div class="breadcrumb-title pe-3">Pages</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="<?=site_url();?>dashboard"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
					<a href="<?=site_url().$main;?>">
					<?=Ucfirst($main);?></a> - <?=Ucfirst($sub);?></li>
                  </ol>
                </nav>
              </div>
            </div>
      <?php if($sub!='index'){?>
			<div class="col-xl-12 mx-auto">
			<?php }?>
				<div class="card shadow-sm radius-10 border-0 mb-3">
					<div class="card-body">
						<div class="border p-3 rounded">
						
						<div class="d-sm-flex align-items-center">
						<?php if($sub=='index'){
									$sub="Listing";
							}?>
                        <h5 class="mb-2 mb-sm-0">
				<?=Ucfirst($main).' - '.ucwords(str_replace("_"," ",$sub));?></h5>
                        <div class="ms-auto">
				<?php 
				if($uri=='dashboard' || $uri=='bookacall' || $uri=='contacts' || $uri=='internship' || $uri=='career' || $uri=='testimony' || $uri=='course_schedule' || $uri=='mycourses' || $sub=='add'){?>
						<?php }else{?>
							 <a href="<?=site_url().'/'.$main;?>/add" type="button" class="btn btn-primary">Add <?=ucwords($main);?></a>
				<?php }?>
                        </div>
                      </div>
					  <hr>
						<?php                    
							if(isset($_view) && $_view)
								$this->load->view($_view);
						?>
						</div>
					</div>
				</div>
				<?php if($sub!='index'){?>
			</div>
			<?php }?>
      </main>
   <!--end page main-->


       <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        
         <!--start switcher-->
       <div class="switcher-body">
        <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-paint-bucket me-0"></i></button>
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
          <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
          </div>
          <div class="offcanvas-body">
            <h6 class="mb-0">Theme Variation</h6>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1">
              <label class="form-check-label" for="LightTheme">Light</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
              <label class="form-check-label" for="DarkTheme">Dark</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
              <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
            </div>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3" checked>
              <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
            </div>
            <hr/>
            <h6 class="mb-0">Header Colors</h6>
            <hr/>
            <div class="header-colors-indigators">
              <div class="row row-cols-auto g-3">
                <div class="col">
                  <div class="indigator headercolor1" id="headercolor1"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor2" id="headercolor2"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor3" id="headercolor3"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor4" id="headercolor4"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor5" id="headercolor5"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor6" id="headercolor6"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor7" id="headercolor7"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor8" id="headercolor8"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
       <!--end switcher-->

  </div>
  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
  <script src="<?=site_url();?>/assets/admin2/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="<?=site_url();?>/assets/admin2/js/jquery.min.js"></script>
  <script src="<?=site_url();?>/assets/admin2/plugins/simplebar/js/simplebar.min.js"></script>
  
  <script src="<?=site_url();?>/assets/admin2/js/pace.min.js"></script>
  <script src="<?=site_url();?>/assets/admin2/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
   <script src="<?=site_url();?>/assets/admin/plugins/datatable/js/jquery.dataTables.min.js"></script>
  <script src="<?=site_url();?>/assets/admin/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
  <script src="<?=site_url();?>/assets/admin/js/table-datatable.js"></script>
  
  <?php if($try=='dashboardindex'){?>
  <script src="<?=site_url();?>/assets/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="<?=site_url();?>/assets/admin/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="<?=site_url();?>/assets/admin2/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="<?=site_url();?>/assets/admin2/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
  <script src="<?=site_url();?>/assets/admin2/plugins/chartjs/chart.min.js"></script>
  <script src="<?=site_url();?>/assets/admin/js/index.js"></script>
  <script>
     new PerfectScrollbar(".best-product")
     new PerfectScrollbar(".top-sellers-list")
  </script>
  <script src="<?=site_url();?>/assets/admin2/js/app.js"></script>
  <?php }?>
  
  <!--app-->
  <script src="<?=site_url();?>/assets/admin/js/component-popovers-tooltips.js"></script>

   <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="<?=site_url();?>/assets/admin/plugins/select2/js/select2.min.js"></script>
  <script src="<?=site_url();?>/assets/admin/js/form-select2.js"></script>
  
  
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
  
  
  
  
  
  
  
  
  
  
  
  <script>
		// function fetchvalue(info,urlz){
		function fetchvalue(info,urlz,newid){
			var infoz=$('.'+info).find(':selected').val();
			var urlz='<?=site_url();?>'+urlz+'/'+infoz;
			$.ajax({
			  type: 'GET',
			  url:urlz,
				}).done(function(res) {
					var data = res;
					var jdata = null;
					try
					{
						jdata = $.parseJSON(data);  
					}catch(e)
					{}
					if(jdata)
					{
						json = JSON.parse(res);
						$('#course_id').val(json.id);
						$('#cname').html(json.title);	
					}else
					{
						$('.'+newid).html(res);
					}
					
					
					
				});

		}			//accepts form as parameter
		function submitForm(form){ //accepts form as parameter
		event.preventDefault();
		$("#alertz").html('');
			var formData = $(form).serialize(); //serialize this particular form
			$.ajax({
					  type: 'POST',
					  url: $(form).attr('action'), //get value from forms action attrbute
					  data: formData,
					  enctype: 'multipart/form-data',
						// processData: false,
						// contentType: false,
						// cache: false,
						// timeout: 600000
			}).done(function(response) {
					if(response!='1'){
						$("#alertz").html("<div style=\"width: 100%;\" class='alert alert-warning alert-dismissible' role='alert'>"+response+"</div>");
						var scrollPos =  $(".inner-title").offset().top;
						$(window).scrollTop(scrollPos);
					}else{
						$("#alertz").html("<div style=\"width: 100%;\" class='alert alert-success alert-dismissible' role='alert'>Your Information Has been Shared Successfully. </div>");
						var scrollPos =  $(".inner-title").offset().top;
						$(window).scrollTop(scrollPos);
						history.go(-1);

					}
			});
			
		}
		</script>
	<script>
		$(document).ready(function() {
		  $('#summernote').summernote();
		  $('#summernote1').summernote();
		  $('#summernote2').summernote();
		  $('#summernote3').summernote();
		  $('#summernote4').summernote();
		  $('#summernote5').summernote();
		});
	</script>
	<script>
	function submitForm(form){ //accepts form as parameter
		var formData = $(form).serialize(); //serialize this particular form
		$.ajax({
				  type: 'POST',
				  url: $(form).attr('action'), //get value from forms action attrbute
				  data: formData
		}).done(function(response) {
			if(response!='1'){
				$("#alertz").html(response);
			}

		});
	}

	</script>
	<script>
	$('.server_name_file_name').click(function(e) {
   e.preventDefault();
   var id = $(this).attr('id');
   $.ajax({
            type: 'POST',  
            url: '<?=site_url();?>download', 
            data: { server_file_name: id,},
            success: function(response) {
                if(response == 1){
                    alert("Unable to download, Maybe the file is corrupted. Please try to reload the page.");
                }else{
                    window.location.href = response;
                    return false;
                }
            }})

});
	</script>
</body>

</html>