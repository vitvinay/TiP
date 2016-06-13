


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome in 1st view.</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                    <form action="saveuser" method="post">
                    {{csrf_field()}}
                    <input type="text" name="taskname">
                    <input type="submit" value="save">
                    </form>
                    @if($errors->has())
                    @foreach ($errors->all() as $error)
                    <h1>{{$error}}</h1>
                    @endforeach
                    @endif
                    @if(Session::has('message'))
                    {!! Session::get('message') !!}
                    @endif 
                    <?php
                            $select=DB::table('tasks')->select('*')->get();
                            foreach ($select as $key) {
                                ?>
<form action="delete/<?php echo $key->id ?>" method="post">
                    {{csrf_field()}}
                    <input type="text" name="taskname" value=<?php echo $key->name;?> >
                    <p>
                    <?php echo $key->name;?>
                    </p>
                    <input type="submit" value="update">
                    <a href="delete/<?php echo $key->id ?>">delete</a>
                    </form>

<?php
                            }

                    ?>

                </div>
            </div>
        </div>
    </div>
</div>

