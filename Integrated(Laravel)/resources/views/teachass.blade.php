<html !doctype>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
@extends('header.head')
<body>
        <!-- Left Panel -->

        <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">SLU AFAR</a>
                <a class="navbar-brand hidden" href="./"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/home"> <i class="menu-icon fa fa-home"></i>Home</a>
                    </li>
					<li>
                        <a href="/teachass"> <i class="menu-icon fa ti-pin2"></i>Teaching Assignments</a>
                    </li>
					<li>
                        <a href="/acapro"> <i class="menu-icon fa ti-briefcase"></i>Academic and Professional Preparation</a>
                    </li>
					<li>
                        <a href="/exampass"> <i class="menu-icon fa ti-check"></i>Examinations Passed</a>
                    </li>
					<li>
                        <a href="/unitgrad"> <i class="menu-icon fa ti-stats-up"></i>Units of Graduate Studies Earned</a>
                    </li>

                    <li>
                        <a href="/edupro"> <i class="menu-icon fa ti-blackboard"></i>Educational and Professional Experience</a>
                    </li>

                    <li>
                        <a href="/teachload"> <i class="menu-icon fa ti-pencil-alt"></i>Teaching and Student Load</a>
                    </li>

                    <li>
                        <a href="/progrowth"> <i class="menu-icon fa ti-user"></i>Professional Growth and Development Activities</a>
                    </li>
                    <li>
                        <a href="/inservice"> <i class="menu-icon fa ti-calendar"></i>In-Service Courses</a>
                    </li>

                    <li>
                        <a href="/researchact"> <i class="menu-icon fa ti-book"></i>Research Activities and Publications</a>
                    </li>
                    <li>
                        <a href="/commextension"> <i class="menu-icon fa ti-id-badge"></i>Community Extension and Outreach Activities</a>
                    </li>
                    <li>
                        <a href="/searchtouniver"> <i class="menu-icon fa ti-location-pin"></i>Service to the University</a>
                    </li>			
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>


                          </div>
                        </div>

                        <div class="dropdown for-message">
                          <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary">9</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
                </div>      
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"> Listing of Teaching Assignments</strong>
                            </div>
                            <div class="card-body">
                              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>Academic Year</th>
                                    <th>Courses</th>
                                    <th>Role in Course</th>
                                    <th>Teaching Load</th>
                                  </tr>
                                </thead>
                                <tbody> 
                                </tbody>
                              </table>
                            </div>
                            <div class="col col-md-3">
                                <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#mediumModal">Add Data
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->



        <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <div class="modal-body"> <!-- inside -->
                            <div class="card">
                                <div class="card-header">
                                    <strong>Input Data</strong>
                                </div>
                                <div class="card-body card-block">
                                        <form method="POST" action="teachass.php" enctype="multipart/form-data">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label class=" form-control-label">Academic Year</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="academic_year" name="academic_year" placeholder="Enter Academic Year" class="form-control"></div>
                                        </div>


                                        <div class="row form-group">
                                            <div class="col col-md-3"><label class=" form-control-label">Courses Taught</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="subjects" name="subjects" placeholder="Enter Courses Taught" class="form-control"></div>
                                        </div>


                                        <div class="row form-group">
                                            <div class="col col-md-3"><label class=" form-control-label">Role in Course</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="role" name="role" placeholder="Enter Role in Course" class="form-control"></div>
                                        </div>


                                        <div class="row form-group">
                                            <div class="col col-md-3"><label class=" form-control-label">Teaching Load</label></div>
                                            <div class="col-12 col-md-9"><input type="number" id="teaching_load" name="teaching_load" placeholder="Enter Teaching load" class="form-control"></div>
                                        </div> 
                                </div>
                            </div> 
                        </div> <!-- /inside -->       
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="upload">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>




 </div><!-- /#right-panel -->

    <!-- Right Panel -->


    @extends('footer.foot')


</body>
</html>