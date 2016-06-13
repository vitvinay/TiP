@extends('layouts.default')

@section('content')


 

 <div class="page-title">                    
                    <h2><span class="fa fa-users"></span> Address Book <small><?php
$id = Auth::user()->id;
echo $id;
?> </small></h2>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <p>Use search to find contacts. You can search by: name, address, phone. Or use the advanced search.</p>
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <span class="fa fa-search"></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Who are you looking for?"/>
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-primary">Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Add new contact</button>
                                            </div>
                                        </div>
                                    </form>                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
         <!-- <p>Some text in the modal.</p>-->
         <?php
$id = Auth::user()->id;
echo $id;
?> 
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
                    
                    <div class="row">
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="assets/images/users/user3.jpg" alt="Nadia Ali"/>
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name">Nadia Ali</div>
                                        <div class="profile-data-title">Singer-Songwriter</div>
                                    </div>
                                    <div class="profile-controls">
                                        <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                                        <a href="#" class="profile-control-right"><span class="fa fa-phone"></span></a>
                                    </div>
                                </div>                                
                                <div class="panel-body">                                    
                                    <div class="contact-info">
                                        <p><small>Mobile</small><br/>(555) 555-55-55</p>
                                        <p><small>Email</small><br/>nadiaali@domain.com</p>
                                        <p><small>Address</small><br/>123 45 Street San Francisco, CA, USA</p>                                   
                                    </div>
                                </div>                                
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="assets/images/users/user.jpg" alt="Dmitry "/>
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name">Dmitry Ivaniuk</div>
                                        <div class="profile-data-title">Web Developer / UI/UX Designer</div>
                                    </div>
                                    <div class="profile-controls">
                                        <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                                        <a href="#" class="profile-control-right"><span class="fa fa-phone"></span></a>
                                    </div>
                                </div>                                
                                <div class="panel-body">                                    
                                    <div class="contact-info">
                                        <p><small>Mobile</small><br/>(333) 333-33-22</p>
                                        <p><small>Email</small><br/>dmitry@domain.com</p>                                        
                                        <p><small>Address</small><br/>123 45 Street San Francisco, CA, USA</p>                                   
                                    </div>
                                </div>                                
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="assets/images/users/user2.jpg" alt="John Doe"/>
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name">John Doe</div>
                                        <div class="profile-data-title">Web Developer/Designer</div>
                                    </div>
                                    <div class="profile-controls">
                                        <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                                        <a href="#" class="profile-control-right"><span class="fa fa-phone"></span></a>
                                    </div>
                                </div>                                
                                <div class="panel-body">                                    
                                    <div class="contact-info">
                                        <p><small>Mobile</small><br/>(234) 567-89-12</p>
                                        <p><small>Email</small><br/>john@domain.com</p>
                                        <p><small>Address</small><br/>123 45 Street San Francisco, CA, USA</p>                                   
                                    </div>
                                </div>                                
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="assets/images/users/user4.jpg" alt="Brad Pitt"/>
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name">Brad Pitt</div>
                                        <div class="profile-data-title">Actor and Film Producer</div>
                                    </div>
                                    <div class="profile-controls">
                                        <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                                        <a href="#" class="profile-control-right"><span class="fa fa-phone"></span></a>
                                    </div>
                                </div>                                
                                <div class="panel-body">                                    
                                    <div class="contact-info">
                                        <p><small>Mobile</small><br/>(321) 777-55-11</p>
                                        <p><small>Email</small><br/>brad@domain.com</p>
                                        <p><small>Address</small><br/>123 45 Street San Francisco, CA, USA</p>                                   
                                    </div>
                                </div>                                
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="assets/images/users/user5.jpg" alt="John Travolta"/>
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name">John Travolta</div>
                                        <div class="profile-data-title">Actor</div>
                                    </div>
                                    <div class="profile-controls">
                                        <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                                        <a href="#" class="profile-control-right"><span class="fa fa-phone"></span></a>
                                    </div>
                                </div>                                
                                <div class="panel-body">                                    
                                    <div class="contact-info">
                                        <p><small>Mobile</small><br/>(111) 222-33-78</p>
                                        <p><small>Email</small><br/>travolta@domain.com</p>
                                        <p><small>Address</small><br/>123 45 Street San Francisco, CA, USA</p>                                   
                                    </div>
                                </div>                                
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="assets/images/users/user6.jpg" alt="Darth Vader"/>
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name">Darth Vader</div>
                                        <div class="profile-data-title">Cyborg</div>
                                    </div>
                                    <div class="profile-controls">
                                        <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                                        <a href="#" class="profile-control-right"><span class="fa fa-phone"></span></a>
                                    </div>
                                </div>                                
                                <div class="panel-body">                                    
                                    <div class="contact-info">
                                        <p><small>Mobile</small><br/>(000) 000-00-01</p>
                                        <p><small>Email</small><br/>vader@domain.com</p>
                                        <p><small>Address</small><br/>Somewhere deep in space</p>                                   
                                    </div>
                                </div>                                
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="assets/images/users/user7.jpg" alt="Samuel "/>
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name">Samuel Leroy Jackson</div>
                                        <div class="profile-data-title">Actor and film producer</div>
                                    </div>
                                    <div class="profile-controls">
                                        <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                                        <a href="#" class="profile-control-right"><span class="fa fa-phone"></span></a>
                                    </div>
                                </div>                                
                                <div class="panel-body">                                    
                                    <div class="contact-info">
                                        <p><small>Mobile</small><br/>(552) 221-23-25</p>
                                        <p><small>Email</small><br/>samuel@domain.com</p>
                                        <p><small>Address</small><br/>123 45 Street San Francisco, CA, USA</p>                                   
                                    </div>
                                </div>                                
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="assets/images/users/no-image.jpg" alt="Samuel "/>
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name">Alex Sonar</div>
                                        <div class="profile-data-title">Designer</div>
                                    </div>
                                    <div class="profile-controls">
                                        <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                        <a href="#" class="profile-control-right"><span class="fa fa-phone"></span></a>
                                    </div>
                                </div>                                
                                <div class="panel-body">                                    
                                    <div class="contact-info">
                                        <p><small>Mobile</small><br/>(213) 428-74-13</p>
                                        <p><small>Email</small><br/>alex@domain.com</p>
                                        <p><small>Address</small><br/>123 45 Street San Francisco, CA, USA</p>                                   
                                    </div>
                                </div>                                
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>                        
                    </div>
                    <!-- <div class="row">
                        <div class="col-md-12">
                            <ul class="pagination pagination-sm pull-right push-down-10 push-up-10">
                                <li class="disabled"><a href="#">«</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>                                    
                                <li><a href="#">»</a></li>
                            </ul>                            
                        </div>
                    </div> -->

                </div>
                <!-- END PAGE CONTENT WRAPPER -->








@stop