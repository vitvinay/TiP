@extends('layouts.default')

@section('content')

<h1 style="margin:150px auto 30px auto; text-align:center">jQuery Name Badges Plugin Demo</h1>
<div class="container" style="margin:0 auto; text-align:center">

    <?php

    $id =Auth::user()->id;
    $count=DB::table('users')->where('admin_id','=',$id)->where('confirmed','=',1)->where('user_status','=',0)->count();
    if($count > 0)

    {

       // $data= DB::table('users')->where('admin_id','=',$id)->where('confirmed','=',1)->where('user_status','=',0)->simplePaginate(5);
        $data= DB::table('users')->where('admin_id','=',$id)->simplePaginate(5);

        echo " <div class='col-md-offset-3 col-md-7'><div class='panel panel-info'>
                                <div class='panel-heading' style='background-color:#23232e; color:#fff;'>
                                <table>
                                <tr>
                               <td><b>Current Users</b></td>
                               <td>&nbsp;&nbsp;</td>
                                <td>&nbsp;&nbsp;</td>
                               <td>
                                <form action='status' method='POST'>

                         <input type='hidden' name='_token' value=".csrf_token().">
                         <select name='user_status' id='myselect' class='form-control' onchange='this.form.submit()'>
                                     <option value='0'>Active</option>
                                    <option value='1'>Deactive</option>
                                  </select>
                                 </form>
                                 </td>
                                 <td>
                                 &nbsp;&nbsp;
                                 </td>
                                  <td>&nbsp;&nbsp;</td>
                                   <td>&nbsp;&nbsp;</td>
                                    <td>&nbsp;&nbsp;</td>
                                   <td>&nbsp;&nbsp;</td>
                                    <td>&nbsp;&nbsp;</td>
                                   <td>&nbsp;&nbsp;</td>
                                    <td>&nbsp;&nbsp;</td>
                                   <td>&nbsp;&nbsp;</td>
                                  <td >
                                  <form action='index' method='post' class='navbar-form navbar-left' roll='search' >
                                    <input type='hidden' name='_token' value=".csrf_token().">
                                    <div class='input-group custom-search-form'>
                                  <input type='text' class='form-control' name='search' placeholder='Search...'>
                                  <span class='input-group-btn'>
                                  <button class='btn btn-default-sm' type='submit'>
                                 <i class='fa fa-search'></i>
                                 </button>
                                 </span>
                                 </div>
                                   </form>

                                  </td>
                                 </tr>
                                 </table>
                                </div>
                                <div class='panel-body'>
                                <table class='table table-hover'>
                                 <thead>
                                 <th>Name</th>
                                 <th></th>
                                 <th>Email</th>
                                <!-- <th>Department</th>-->
                                 <th>Edit</th>
                                 </thead>
                                 <tbody>";

        foreach($data as $emp)
        {
            $username=$emp->username;
            $email=$emp->email;
            $dept=$emp->dept;
            $id=$emp->id;
            $status=$emp->user_status;
            echo "<tr><td><div class='name'>$username </div> </td><td>&nbsp;&nbsp;&nbsp;</td><td>$email</td>";
            /* if(isset($dept))
                 {
                     echo "<td>$dept</td>";
                 }
             else
                 {
                     echo "<td>No Department</td>";
                 }*/
            echo "<td><a href='editemployee?empid=".$id."'><button class='btn btn-default'><i class='fa fa-pencil'></i></button></a></td></tr>";
            /* if($status==0)
             {
                 echo "<td style='color:green;'>Active</td>";
             }
             else
             {
                 echo "<td style='color:red;'>Inactive</td></tr>";
             }*/

        }



        echo  "</tbody> </table>";

        echo $data->links();
        echo "</div></div></div>";

    }


    else
    {
        echo " <div class='container'><center> <div class='alert alert-info'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                          <b style='font-size:25px;'> <strong>Hey!</strong>&nbsp;&nbsp;You don't have Users Create users go to User->Create User</b></div></center></div>";
    }

    ?>






</div>
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
<script src="{{ asset('frontend/js/jquery.nameBadges.js') }}"></script>
<script>
    $(document).ready(function(){
        $('.name').nameBadge({border: {
            width: 0
        },
            colors: ['#1abc9c', '#2ecc71', '#e74c3c', '#34495e', '#f1c40f'],
            text: '#fff',
            margin: 15,
            size: 120});
    });
</script>
<!--<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>-->



</body>
</html>
@stop