@extends('layouts.default')

@section('content')
    <div class="container">
        <!--div class="jumbotron">
            <h1>Hello ,{{ Auth::user()->username }}</h1>
            <p><b>Your Organization</b></p>
        </div-->
        <style>
            /* responsive text queries */
            @media screen and (max-width: 992px) {
                p,.btn,input,div,span,h4 {
                    font-size: 95%;
                }
                h1 {
                    font-size: 24px;
                }
                h2 {
                    font-size: 22px;
                }
                h3 {
                    font-size: 18px;
                }
            }

            @media screen and (max-width: 768px) {
                p,.btn,input,div,span,h4 {
                    font-size: 95%;
                }
                h1 {
                    font-size: 22px;
                }
                h2 {
                    font-size: 20px;
                }
                h3 {
                    font-size: 17px;
                }
            }
        </style>
        <p><a href="Dashboard">&nbsp;&nbsp;&nbsp;Dashboard</a> <b>>></b> <b>Organization</b></p>
        <hr><br>

        <div class="row">

            @include('layouts.partials.errors')
         <!--   {{ Form::open(array('url'=>'storeorg','id'=>'myform')) }}-->
            <form>
            <div id="page-wrapper">
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    {{ Auth::user()->company }}
                                </div>
                                <div class="panel-body" id="formbody">
                                    <div id="wizard">
                                       <!-- <h2>Basic Info</h2>-->
                                        <section>
                                            <div class="panel panel-info">
                                                <div class="panel-heading" style="background-color:#23232e; color:#fff;">Basic Info</div>
                                                <div class="panel-body">
                                                    <!--- Username Field --->
                                                    <label>Compant Name :</label>
                                                    <div class="input-group" style="margin-bottom: 10px">
                                                        <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                                        {{ Form::text('company_name', Auth::user()->company, ['class' => 'form-control', 'required' => 'required','id'=>'cmpname']) }}

                                                    </div>
                                                    <?php
                                                    //  $data= DB::table('company')->where('company_id','=',Auth::user()->id)->get();
                                                    $data=DB::table('company')->where('admin_email','=',Auth::user()->email)->get();
                                                    foreach($data as $orgdata)
                                                    {
                                                        $website = $orgdata->website;
                                                        $industry = $orgdata->industry;
                                                        $email = $orgdata->email;
                                                        $address = $orgdata->address;
                                                        $city = $orgdata->city;
                                                        $state = $orgdata->state;
                                                        $country = $orgdata->country;
                                                        $zip = $orgdata->zip;
                                                        $tel = $orgdata->tel;
                                                        $mob = $orgdata->mob;
                                                    }
                                                    ?>
                                                    <label>Website :</label>
                                                    <div class="input-group" style="margin-bottom: 10px">
                                                        <span class="input-group-addon"><i class="fa fa-at"></i></span>
                                                        {{ Form::text('website', $website, ['class' => 'form-control', 'required' => 'required']) }}
                                                    </div>
                                                    <label>Industry :</label>
                                                    <div class="input-group" style="margin-bottom: 10px">
                                                        <span class="input-group-addon"><i class="fa fa-industry"></i></span>
                                                        {{ Form::text('industry', $industry, ['class' => 'form-control', 'required' => 'required']) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                       <!-- <h2>Contact Info</h2>-->
                                        <section>
                                            <div class="panel panel-info">
                                                <div class="panel-heading" style="background-color:#23232e; color:#fff;">Contact Info</div>
                                                <div class="panel-body" style="overflow-y:scroll;">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Email ID :</label>
                                                                <div class="input-group" style="margin-bottom: 10px">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                                    {{ Form::text('email', Auth::user()->email, ['class' => 'form-control', 'required' => 'required']) }}
                                                                </div>

                                                                <label>Address :</label>
                                                                <div class="input-group" style="margin-bottom: 10px">
                                                                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                                                    {{ Form::text('address', $address, ['class' => 'form-control', 'required' => 'required']) }}
                                                                </div>

                                                                <label>City:</label>
                                                                <div class="input-group" style="margin-bottom: 10px">
                                                                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                                                    {{ Form::text('city', $city, ['class' => 'form-control', 'required' => 'required']) }}
                                                                </div>

                                                                <label>State :</label>
                                                                <div class="input-group" style="margin-bottom: 10px">
                                                                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                                                    {{ Form::text('state', $state, ['class' => 'form-control', 'required' => 'required']) }}
                                                                </div>
                                                            </div><!--end col-md-4-->
                                                            <div class="col-md-6">
                                                                <label>Country:</label>
                                                                <div class="input-group" style="margin-bottom: 10px">
                                                                    <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                                                    {{ Form::text('country', $country, ['class' => 'form-control', 'required' => 'required']) }}
                                                                </div>

                                                                <label>Zip:</label>
                                                                <div class="input-group" style="margin-bottom: 10px">
                                                                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                                                    {{ Form::text('zip', $zip, ['class' => 'form-control', 'required' => 'required']) }}
                                                                </div>

                                                                <label>Telephone No. :</label>
                                                                <div class="input-group" style="margin-bottom: 10px">
                                                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                                    {{ Form::number('tel', $tel, ['class' => 'form-control', 'required' => 'required']) }}
                                                                </div>

                                                                <label>Mobile No. :</label>
                                                                <div class="input-group" style="margin-bottom: 10px">
                                                                    <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                                                                    {{ Form::number('mob', $mob, ['class' => 'form-control', 'required' => 'required']) }}
                                                                </div>
                                                            </div><!--end col-md-4-->
                                                        </div><!--end row-->
                                                    </div><!--end container-fluid-->
                                                </div><!--end panel-body-->
                                            </div><!--end panel-info-->
                                          <div class="form-group">
                                                {{ Form::submit('Save', ['class' => 'btn btn-primary col-md-1','id'=>'btn2']) }}
                                            </div><br><br>

                                          </form>

                                          <!--  {{ Form::close() }}-->

                                        </section>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /. PAGE INNER  -->
                </div>
                <!-- /. PAGE WRAPPER  -->
            </div>


            <script>
                $(function () {
                    $('form').bind('submit', function () {
                        $.ajax({
                            type: 'post',
                            url: 'storeorg',
                            data: $('form').serialize(),
                            success: function () {
                               // alert('form was submitted');
                            }
                        });
                        return false;
                    });
                });
            </script>


            <!-- <div class="panel panel-info">
                 <div class="panel-heading">Company Logo</div>
                 <div style="height:0px;overflow:hidden">
                     <input type="file" id="fileInput" name="fileInput" />
                 </div>
                 <center><button type="button" onclick="chooseFile();" class="btn btn-info" style="margin-top:20px;">choose file</button></center>
                 <script>
                     function chooseFile() {
                         $("#fileInput").click();
                     }
                 </script>
                 <div class="panel-body">

                     </div>
                     </div>-->





        </div>
    </div>


@stop
