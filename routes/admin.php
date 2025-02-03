<?php



use App\Http\Controllers\Admin\DirectionController;
use App\Http\Controllers\Admin\PositionController;
use App\Http\Middleware\AdminAccess;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PhoneController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\FeedbackController;


Route::group(['prefix' => 'admin', "middleware"=> AdminAccess::class], function () {

    Route::get("/", function (){return view("admin.home.index");});

    Route::resource("directions",DirectionController::class)->names("admin.directions");

    Route::resource("positions",PositionController::class)->names("admin.positions");

    Route::resource("phones",PhoneController::class)->names("admin.phones");

    Route::resource("employees",EmployeeController::class)->names("admin.employees");

    Route::resource("/feedback",FeedbackController::class)->names("admin.feedback");

    Route::get('/auth', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.auth');

});


Auth::routes();























//
//
//Route::group([
//    'prefix' => 'admin',
////    'middleware' => [AdminAccess::class],
//    "namespace" => "App\Http\Controllers\Admin"
//], function ()
//{
//
//    Route::get("/",[AdminController::class,"index"])->name("admin.index");
//
////    Route::resource("/directions",DirectionController::class)->names(["index"=>"admin.direction"]);
//
//    Route::resource("/positions/",PositionController::class)->names([
//        "index"=>"admin.position",
//        "create"=>"admin.position.create",
//        "store"=>"admin.position.store",
//        "destroy"=>"admin.position.delete",
//    ]);
//
//
//    Route::resource("/phones",PhoneController::class)->names(["index"=>"admin.phone"]);
//
//    Route::resource("/teams",TeamController::class)->names([
//        "index"=>"admin.member",
//        "create"=>"admin.member.create",
//        "store"=> "admin.member.store",
//        "delete"=> "admin.member.delete",
//    ]);
//
//
//});
//
//
//

























//Route::resource('/posts', TeamController::class)->names('cpanel.laboratory.methods');
//Route::resource('/posts', DirectionController::class)->names('cpanel.laboratory.methods');
//Route::resource('/posts', PostController::class)->names('cpanel.laboratory.methods');

//
//    Route::get("/position",[AdminController::class,"position"])->name("admin.position");
//
//    Route::post("/position",[AdminController::class,"savePosition"])->name("admin.save.position");
//
//    Route::delete("/position",[AdminController::class,"deletePosition"])->name("admin.delete.position");
//      Route::get("/phone",[AdminController::class,"phone"])->name("admin.phone");
//
//    Route::post("/phone",[AdminController::class,"savePhone"])->name("admin.save.phone");
//
//    Route::delete("/phone",[AdminController::class,"deletePhone"])->name("admin.delete.phone");
//    Route::get("/member",[AdminController::class,"member"])->name("admin.member");
//
//    Route::post("/member",[AdminController::class,"saveTeam"])->name("admin.save.member");
//
//    Route::delete("/member",[AdminController::class,"deleteTeam"])->name("admin.delete.member");
