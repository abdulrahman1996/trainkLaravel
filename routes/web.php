	<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Events\TestEvent;
    use App\Jobs\SendMail;
    use App\Mail\SendMailable;
    use Illuminate\Support\Facades\Mail;

    Route::get('/', function () {
    return view('welcome');
});
Route::get('/test' , function(){
 event(new TestEvent);
});
Route::get('/lessons'  , 'LessonsController@index');
Route::get('/testMail'  , function (){

    dispatch(new SendMail);
    echo 'email sent';
});
Route::get('documents/{document}' , 'DocumentController@show');