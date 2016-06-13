<div id="footerwrap">
    <div class="container">
        <div class="col-lg-5">
            <h3>Address</h3>  <br>
            <p>

                New York,<br/>
                12345<br/>
                United States
            </p><br>
            <h3>Social Links</h3>
            <p>
                <div class="btn-group">
                <button class="btn btn-default"><i class="fa fa-facebook "></i></button>
                <button class="btn btn-default"><i class="fa fa-google-plus "></i></button>
                <button class="btn btn-default"><i class="fa fa-linkedin "></i></button>
            </div>

            </p>
        </div>

        <div class="col-lg-7">
            <h3>Contact us</h3>

            <br>
            {{ Form::open(array('url'=>'contactus')) }}
                <div class="form-group">
                    <label for="name1">Your Name</label>

                    {{ Form::text('name', '', ['class' => 'form-control', 'required' => 'required','placeholder'=>'Your Name']) }}
                </div>
                <div class="form-group">
                    <label for="email1">Email address</label>
                    {{ Form::text('useremail', '', ['class' => 'form-control', 'required' => 'required','placeholder'=>'Enter email']) }}
                </div>
                <div class="form-group">
                    <label>Your Message</label>
                    {{ Form::textarea('mymessage', '', ['class' => 'form-control', 'required' => 'required','placeholder'=>'Your Message']) }}
                </div>
                <br>

                 {{ Form::submit('Sign Up', ['class' => 'btn btn-large btn-success']) }}
        </div>
    </div>
</div>
<div id="c">
    <div class="container">
        <p>&copy;&nbsp;<a href="/" style="color:white;">TIMEPUG</a></p>

    </div>
</div>