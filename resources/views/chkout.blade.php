@extends('layouts.emp1default')
@section('content')
        <!-- /subnavbar -->
<head>
<body style="background-image: url(code/img/bg1.jpg);background-color: #eef1f4;">
<!-- /navbar -->

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<!--script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script-->
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript">
    setInterval("my_function();" ,100);
    function my_function()
    {
        $('#refresh').load(location.href + ' #time');
    }


</script>
<script type="text/javascript">

    /*$(document).ready(function(){
     $("#myModal").modal('show');

     });*/

    $(document).ready(function(){

        $('#page_effect').fadeIn(2000);

    });

    function flip() {
        $('.card').toggleClass('flipped');
    }


    function flip1() {
        $('.card1').toggleClass('flipped1');
    }




</script>
<style>
form { margin-top: 15px; }
        form input { margin-right: 15px; }
        
    #results {  height:90;width:60px;   }
    

    .box {
    //width: 200px;
    //height: 260px;
        position: relative;
    //border: 1px solid #ccc;
        -webkit-perspective: 800px;
        -moz-perspective: 800px;
        -o-perspective: 800px;
        perspective: 800px;
    }
    .card {
        width: 100%;
        height: 100%;
        position: absolute;
        -webkit-transition: -webkit-transform 1s;
        -moz-transition: -moz-transform 1s;
        -o-transition: -o-transform 1s;
        transition: transform 1s;
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        -o-transform-style: preserve-3d;
        transform-style: preserve-3d;
        -webkit-transform-origin: 50% 50%;
    }
    .card div {
        display: block;
        height: 100%;
        width: 100%;
    //line-height: 260px;
    //color: white;
        text-align: right;
    // font-weight: bold;
    //font-size: 14px;
        position: absolute;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -o-backface-visibility: hidden;
        backface-visibility: hidden;
    }
    .card .front {
    //background: red;
    }
    .card .back {
    //background: blue;
        -webkit-transform: rotateY( 180deg );
        -moz-transform: rotateY( 180deg );
        -o-transform: rotateY( 180deg );
        transform: rotateY( 180deg );
    }
    .card.flipped {
        -webkit-transform: rotateY( 180deg );
        -moz-transform: rotateY( 180deg );
        -o-transform: rotateY( 180deg );
        transform: rotateY( 180deg );
    }







    <!-- check out model code start-->
         .box1 {
         //width: 200px;
         //height: 260px;
             position: relative;
         //border: 1px solid #ccc;
             -webkit-perspective: 800px;
             -moz-perspective: 800px;
             -o-perspective: 800px;
             perspective: 800px;
         }
    .card1 {
    //width: 100%;
    //height: 100%;
        position: absolute;
        -webkit-transition: -webkit-transform 1s;
        -moz-transition: -moz-transform 1s;
        -o-transition: -o-transform 1s;
        transition: transform 1s;
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        -o-transform-style: preserve-3d;
        transform-style: preserve-3d;
        -webkit-transform-origin: 50% 50%;
    }
    .card1 div {
        display: block;
        height: 100%;
        width: 100%;
    //line-height: 260px;
    //color: white;
        text-align: right;
    // font-weight: bold;
    //font-size: 14px;
        position: absolute;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -o-backface-visibility: hidden;
        backface-visibility: hidden;
    }
    .card1 .front1 {
    //background: red;
    }
    .card1 .back1 {
    //background: blue;
        -webkit-transform: rotateY( 180deg );
        -moz-transform: rotateY( 180deg );
        -o-transform: rotateY( 180deg );
        transform: rotateY( 180deg );
    }
    .card1.flipped1 {
        -webkit-transform: rotateY( 180deg );
        -moz-transform: rotateY( 180deg );
        -o-transform: rotateY( 180deg );
        transform: rotateY( 180deg );
    }
    <!-- check out model code end-->
</style>
</head>

<br><br><br><br><div class="container table-responsive" style="background-image: url(code/img/body-bg.png);background-color: #eef1f4;border:3px solid gray;">
    <br><div class="col-md-7 " >
        <div class="row ">

            <h5 class="col-md-2"><i class="fa fa-user fa-3x" style="border:2px solid gray;padding:10px;"></i> </h5>
            <h5 class="col-md-3" style="margin-top:40px;">Sayali Deshmukh<br> sayali.deshmukh002@gmail.com</h5>
            <table class="table table-striped">
                <br><br><br><thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Check in</th>
                    <th>Check in time</th>
                    <th>Check out</th>
                    <th>Check out time</th>
                    <th>break</th>
                    <th>Total hours</th>


                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Doe</td>
                    <td><div id="results"><center>image</center> </div></td>
                    <td>10.00am</td>
                    <td><div id="results1"><center>image</center> </div></td>

                    <td>7.00pm</td>
                    <td>break</td>
                    <td>9 hours</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Doe</td>
                    <td></td>
                    <td>10.00am</td>
                    <td></td>

                    <td>7.00pm</td>
                    <td>break</td>
                    <td>9 hours</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Doe</td>
                    <td></td>
                    <td>10.00am</td>
                    <td></td>
                    <td>7.00pm</td>
                    <td>break</td>

                    <td>9 hours</td>
                </tr>
                </tbody>
            </table>

        </div>


    </div>
    <div class="col-md-4 col-md-offset-1" id="page_effect" style="display:none;">
        <div class="row ">


            <div class="panel panel-default">
                <div class="panel-body ">
                    <center><h3><?php
                            echo date('d-M-y ');
                            ?></h3></center>
                    <hr>
                    <center>
you are logged in at: 

<?php
 $new = DB::table('checkin_and_out')->orderBy('id', 'desc')->first();
           $old=$new->checkin_time;
            echo  $old;
         
             ?>

                    </center>


                   
                        <b>
                        
                            <form name="fo" action="{{action('timepugController@time')}}" method="get">
                                <div id="refresh">
                                    <div id="time">
                            <?php

                            
                            $timezonenew = DB::table('checkin_and_out')->orderBy('id', 'desc')->first();
           $timezoneold=$timezonenew->timezone;
            echo  $timezoneold;

                            date_default_timezone_set($timezoneold);

                            echo $datenew=date('y-m-d ');
                            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

                            echo date('h:i:s a');

                            $datetimez=date('h:i:sa');
                            ?>

                        </b>

                </div>
            </div>


            <input type="hidden" id="mydate" name="mydate" value="<?php echo $datenew?>" />
            <input type="hidden" id="mycity" name="mycity" value="<?php echo $timezoneold?>" />
            <input type="hidden" id="myField" name="myField" value="<?php echo $datetimez ?>" />

            <td width="100%">

                <ilayer id="worldclockns" width=100% height=35><layer id="worldclockns2" width=100% height=35 left=0 top=0 style="font:bold 16px Arial;"></layer></ilayer>

                <br><br><br><br>
                <section class="box">

                    <div class="card"  onclick="this.classList.toggle('hover');">

                        <script>
                            function clickHandler() {
                                $('#hide').toggle('slow');
                                $('#show').toggle('slow');

                            }

                            $(document).ready(function(){
                                $('#show').hide();

                                $('#hide, #show').on('click',clickHandler);

                            });

                        </script>


                    </div>

                    <!--input id='btn_1' type='button' value='button 1' onclick='javascript:show_hide("btn_1","btn_2")'/>
                                                                                           <input id='btn_2' type='button' value='button 2' style='visibility:hidden' onclick='javascript:show_hide("btn_2","btn_1")'/>

                                                                                           <script language='javascript' type='text/javascript'>

                                                                                               function show_hide(id2hide, id2show)
                                                                                               {
                                                                                                   document.getElementById(id2hide).style.visibility='hidden';
                                                                                                   document.getElementById(id2show).style.visibility='visible';
                                                                                               }

                                                                                           </script-->
                </section>


                <!-- Trigger the modal with a button -->


                       <button type='button' class='btn btn-primary' data-toggle='modal'  style='float:left;margin-top:-30px;' data-target='#myModal' o>Take picture</button>

<!--input type="button" value="Access Camera" onClick="setup(); $(this).hide().next().show();"-->

                <!--button type="button" class="btn btn-primary " data-toggle="modal"  style="float:left;"data-target="#myModal">Take picture</button-->

                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">. Header</h4>
                            </div>
                            <div class="modal-body">
                                <center><div id="my_camera"></div></center>

                                <!-- First, include the Webcam.js JavaScript Library -->
                                <script  src="{{asset('code/js/webcam.js')}}" type="text/javascript"></script>

                                <!-- Configure a few settings and attach camera -->
                            <script language="JavaScript">
            Webcam.set({
                // live preview size
                width: 320,
                height: 240,
                
                // device capture size
                dest_width: 64,
                dest_height: 50,
                
                // final cropped size
                crop_width: 50,
                crop_height: 60,
                
                // format and quality
                image_format: 'jpeg',
                jpeg_quality: 90,
                
                // flip horizontal (mirror mode)
                flip_horiz: true
            });
            
        </script>

                                <!-- A button for taking snaps -->
                               <form>
            <div id="pre_take_buttons">
            <input type="button" value="Access Camera" class='btn btn-primary' onClick="setup(); $(this).hide().next().show();">
                <!-- This button is shown before the user takes a snapshot -->
                <input type=button value="Take Snapshot" class='btn btn-primary' onClick="preview_snapshot()">
            </div>
            <div id="post_take_buttons" style="display:none">
                <!-- These buttons are shown after a snapshot is taken -->
                <input type=button value="Take Another Pic" class='btn btn-primary' onClick="cancel_preview()">
                <input type=submit value="Save Photo & Check out" name='chkout' onClick="save_photo()" class='btn btn-success' style="font-weight:bold;">
                 <!--input type='submit' id='hide' name='chkin' class='btn btn-primary'  value='check In'-->
            </div>
        </form>

                                <!-- Code to handle taking the snapshot and displaying it locally -->
                               <script language="JavaScript">
    function setup() {
            Webcam.attach( '#my_camera' );
        }
        // preload shutter audio clip
        var shutter = new Audio();
        shutter.autoplay = false;
        shutter.src = navigator.userAgent.match(/Firefox/) ? 'shutter.ogg' : 'shutter.mp3';
        
        function preview_snapshot() {
            // play sound effect
            try { shutter.currentTime = 0; } catch(e) {;} // fails in IE
            shutter.play();
            
            // freeze camera so user can preview current frame
            Webcam.freeze();
            
            // swap button sets
            document.getElementById('pre_take_buttons').style.display = 'none';
            document.getElementById('post_take_buttons').style.display = '';
        }
        
        function cancel_preview() {
            // cancel preview freeze and return to live camera view
            Webcam.unfreeze();
            
            // swap buttons back to first set
            document.getElementById('pre_take_buttons').style.display = '';
            document.getElementById('post_take_buttons').style.display = 'none';
        }
        
        function save_photo() {
            // actually snap photo (from preview freeze) and display it
            Webcam.snap( function(data_uri)
        {
            // display results in page
           document.getElementById('results').innerHTML =
                         '<img src="'+data_uri+'"/>';

            /*var raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');

            document.getElementById('mydata').value = raw_image_data;
            document.getElementById('myform').submit();*/
        
                // shut down camera, stop capturing
                Webcam.reset();
                
                // show results, hide photo booth
                document.getElementById('results').style.display = '';
                document.getElementById('my_photo_booth').style.display = 'none';
            } );
        }
    </script>
    <form id="myform" method="post" action="myscript">
    <input id="mydata" type="hidden" name="mydata" value=""/>
    <input type="hidden" name="_token" value="{{ csrf_token()}}">
</form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
                </h6>
                </form>

        </div>
    </div>



    <!-- /widget-content -->


</div>
</div>


</div>
</div>  </div>
<!--/div>
</div-->
</div>
</div>

</body>
@endsection