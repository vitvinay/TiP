<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Transport\MailgunTransport;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);

Route::get('hello/{name}', function($name){
    echo 'welcome to my site  ' .  $name;
});


Route::get('test', function(){
    echo 'GET';
    echo '<form method="post" action="hello">';
    //echo '<input type="hidden" value="put" name="_method">';
    echo '<input type="submit">';
    echo'</form>';
});

Route::post('hello', function(){
    
    echo 'welcome to my site';
});
Route::put('hello', function(){
    echo 'put call  ' ;
});
Route::delete('hello', function(){
    echo 'delete call ';
});




Route::get('customer',function(){
    $customer = App/DemoModel::find(1);
    echo $customer->name;
});

//////Calender module
Route::get('/sunny', function () {
    $data = [
        'page_title' => 'Home',
    ];
    return view('event/index', $data);
});



//Route::resource('events', 'EventController');
Route::get('/api',  function () {
    ///$events = DB::table('events')->select('id', 'name', 'title', 'start_time as start', 'end_time as end')->where('name','sunny')->get();
    $email=Auth::user()->email;
    $events = DB::table('checkin_and_out')->select('email','checkin_time','checkout_time', DB::Raw('CONCAT(checkin_date," ",checkin_time) as start'), DB::Raw('CONCAT(checkin_date," ",checkout_time) as end'))->where('email',$email)->get();
    foreach($events as $event)
    {
        //$event->title = $event->checkin_time . ' - ' .$event->checkout_time;
        $event->title = ' - ' .$event->checkout_time;
        //$event->timezone = $event->timezone . ' - ' .$event->email;

                //$event->start = $event->checkin_time;
                //$event->end = $event->checkout_time;


        //$event->checkin_time;
                //$event->checkout_time;

      //  $event->url = url('events/' . $event->id);
    }
    return $events;
});
/*Route::get('/api1',  function () {
    $events = DB::table('events')->select('id', 'name', 'title', 'start_time as start', 'end_time as end')->get();
    foreach($events as $event)
    {
        $event->title = $event->title . ' - ' .$event->name;
        $event->url = url('events/' . $event->id);
    }
    return $events;
});*/
Route::get('/api1/{name}',  function ($name) {
    //$getdate = DB::table('checkin_and_out')->get();
    $events = DB::table('checkin_and_out')->select( 'email','checkin_time','checkout_time', DB::Raw('CONCAT(checkin_date," ",checkin_time) as start'), DB::Raw('CONCAT(checkin_date," ",checkout_time) as end'))->where('email',$name)->get();
    //$events = DB::table('checkin_and_out')->select('id', 'email', 'timezone', 'created_at as start', 'updated_at as end')->where('email',$name)->get();
    foreach($events as $event)
    {
                $event->title = ' - ' .$event->checkout_time;
        //$event->timezone = $event->timezone . ' - ' .$event->email;
       // $event->url = url('events/' . $event->id);
    }
    return $events;
});






    
    



    




///calender module end
//////////////////////////////////////////////////////////////////////////////////////////
//admin pages only

Route::group(['middleware' => ['auth', 'admin']], function() {
    Route::get('createuser', function () {
        return view('createuser');
    });
    
    Route::get('erequest', function () {
    return view('erequest'); //
});
    Route::get('selectemp','ControllerAdview1@index6');
    Route::get('ftdateemp','ControllerAdview1@index7');
    Route::get('smonth','ControllerAdview1@index10');

    //calendar functions
    Route::post('adddate3', 'DateController@adddate3');
    //Route::post('selectsingle', 'DateController@selectsingle');
    Route::post('selectsingle', 'DateController@selectsingle');
    Route::get('/delete/{id}', 'DateController@deleterequest');
    Route::get('/update/{id}', 'DateController@updaterequest');
//Report Routes
    Route::get('admin_report_client', function () {
    return view('admin_report_client');
    });
    /*Route::post('AllEmp','ClientController@allemp');
    Route::post('AllClient','ClientController@allclient');
    Route::post('AllClientLeave','ClientController@allclientleave');
    Route::post('AllLeave','ClientController@allleave');
    Route::post('ChkinEmp','ClientController@chkemp');*/
    //report routes
    Route::any('alltimeemp','TimecardController@time2');
    Route::any('Allftdateemp','TimecardController@time1');
    Route::any('Empleaveall','TimecardController@leaveall');
    Route::any('Empleave','TimecardController@leave');
    
    Route::any('allclient','TimecardController@clientall');
    Route::any('perclient','TimecardController@clientp');
    
    Route::any('Leaveclient','TimecardController@Lclient');
    Route::any('selectclient','TimecardController@Sclient');
// report end
    
//User tab routes
    Route::get('employee', function () {
        return view('employee');
    });
    Route::get('allemployee', function () {
        return view('allemployee');
    });
    //organization tab routes
    Route::get('organization', function () {
        return view('organization');
    });
    Route::get('departments', function () {
        return view('departments');
    });
    Route::get('timesheet', function () {
        return view('timesheet');
    });

    //extra oRg pages
    //show all active users
    Route::get('allactiveusers', function () {
        return view('allactiveusers');
    });

    //show all deactive users
    Route::get('alldeactiveusers', function () {
        return view('alldeactiveusers');
    });

    Route::get('showdepartments', function () {
        return view('showdepartments');
    });

    Route::get('editemployee', function () {
        return view('edit');
    });

    Route::get('editdeptname', function () {
        return view('editdeptname');
    });

    Route::get('jsname', function () {
        return view('jsname');
    });

    Route::post('storeuser','AdminController@store');

    Route::post('storeorg','OrganizationController@store');

    Route::post('storedept','OrganizationController@storedept');

    Route::get('deptname','OrganizationController@renamedept');


    Route::get('deletedept','OrganizationController@deletedept');

    Route::get('editdept','OrganizationController@editdept');


    Route::post('updateuser','AdminController@update');

    Route::get('deactive','AdminController@deactiveuser');

    Route::get('active','AdminController@activeuser');



    //create employee in department
    Route::post('deptuser','AdminController@deptuser');

    //show employee by status
    Route::post('status','AdminController@showstatus');


    });
////////////////////////////////////////////////////////////////////////////////////////////////
//employee pages only
Route::group(['middleware' => ['auth', 'emp']], function() {
    //calendar views

    Route::get('alltime','ControllerAdview1@index8');
    Route::get('Allftdate','ControllerAdview1@index9');
    Route::get('emonth','ControllerAdview1@index11');
    
    Route::post('adddate', 'DateController@datewise');
    Route::post('adddate1', 'DateController@datewise1');
    Route::post('store', 'DateController@store');
    // your routes
    Route::get('dashboard', 'CheckinoutController@index1');
    Route::get('chkout', 'CheckinoutController@index2');


Route::post('dashboard', 'CheckinoutController@method');
Route::get('timep', 'timepugController@time');
    Route::get('timepq', 'timepugController@timesave');
    Route::get('employeesheet', function () {
        return view('employeesheet');
    });

    //profile setting employee

    Route::get('index1','ControllerAdmin@index1');
   //Route::get('index','ControllerContact@index');
//Route::get('index','ControllerImage@index');

    //Route::post('save','ControllerAdmin@save');
   Route::post('update1','ControllerAdmin@update1');//for basic info
    Route::post('update','ControllerContact@update');//for contact details
   Route::post('update2','ControllerPass@update2');//for password
   Route::post('updatei','ControllerImage@updatei');//for image


});

////////////////////////////////////////////////////////////////////////////////////
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
// common pages middleware
Route::group(['middleware' => ['web']], function () {

    //check in & ckeck out module



//end checkin and check out
//Report module
   
    //email send

    /*
    * Registration
    */
    //Route::get('register','RegistrationController@create');

    // Route::get('store','RegistrationController@store');
    Route::get('/task', 'TaskController@viewtask');

Route::post('saveuser', 'TaskController@submituser');

Route::get('/delete/{id}','TaskController@deleteuser');


    Route::get('adminregister', [
        'as' => 'register_path',
        'uses' => 'RegistrationController@create'
    ]);

    Route::post('adminregister', [
        'as' => 'register_path',
        'uses' => 'RegistrationController@store'
    ]);

    Route::get('register/verify/{confirmationCode}', [
        'as' => 'confirmation_path',
        'uses' => 'RegistrationController@confirm'
    ]);

    Route::get('register/verify_users/{confirmationCode}', [
        'as' => 'confirmation_path',
        'uses' => 'AdminController@confirm'
    ]);

    //regiteration end

    /*
   * Login
   */

    Route::get('adminlogin', [
        'as' => 'login_path',
        'uses' => 'SessionsController@create'
    ]);

    Route::post('adminlogin', [
        'as' => 'login_path',
        'uses' => 'SessionsController@store'
    ]);

    Route::get('logout', [
        'as' => 'logout_path',
        'uses' => 'SessionsController@destroy',
    ]);

//employee login part
    Route::get('employeelogin', function () {
        return view('sessions.empcreate');
    });

    Route::get('pwddemo', function () {
        return view('pwddemo');
    });

    Route::post('empstore','EmployeeSessionController@store');
    
     Route::get('emplogout', [
        'as' => 'logout_path',
        'uses' => 'EmployeeSessionController@destroy',
    ]);

    //employee ends

//contact us
    Route::post('contactus','ContactusController@callus');

});



Route::group(['middleware' => 'web'], function () {
    Route::auth();

    //search
    Route::get('search', function () {
        return view('mysearch');
    });

    Route::get('dash', function () {
        return view('dash');
    });

    Route::get('searchresult', function () {
        return view('searchresult');
    });

    Route::post('index','SearchController@index');

    Route::get('/home', 'HomeController@index');

    

    

    

    

    

    

    






});
