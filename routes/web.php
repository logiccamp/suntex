<?php

use App\Http\Controllers\Admin\AgentController as AdminAgentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentAuths;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\Deals;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\FavouritesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PropertypicturesController;
use App\Http\Controllers\RealestateController;
use App\Http\Controllers\TypeController;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Auth::routes();
Route::get('/real-estate', [RealestateController::class, 'index'])->name('realEstate');

Route::get('/properties', [PropertyController::class, 'index'])->name('property');

Route::get('/properties/{id}', [PropertyController::class, 'show'])->name('viewproperty');

Route::post('/properties', [PropertyController::class, 'store'])->name('viewpropertystore');


Route::get('/favourites', [FavouritesController::class, 'index'])->name('favourites');

Route::delete('/favourites/{fav}', [FavouritesController::class, 'destroy'])->name('favourites.destroy');

Route::delete('/favourites/delete', [FavouritesController::class, 'destroyall'])->name('favourites.destroyall');

Route::get('/favourites/own-this/{fav}', [FavouritesController::class, 'ownthis'])->name('favourites.own');
Route::any('/savedeal/{product}', [Deals::class, 'savedeal'])->name('savedeal');
Route::get('/my-deals', [Deals::class, 'index'])->name('Deals');


















Route::get('/agent', [AgentController::class, 'index'])->name('agents');
Route::post('/agent/publish/{propertyid}', [AgentController::class, 'publish'])->name('agentspublish');
Route::post('/agent/unpublish/{propertyid}', [AgentController::class, 'unpublish'])->name('agentsunpublish');

Route::get('/agent/login', [AgentController::class, 'login'])->name('agentslogin');
Route::post('/agent/login', [AgentController::class, 'loginAuth'])->name('loginagent');

Route::get('/agent/signup', [AgentController::class, 'signup'])->name('agentsignup');
Route::post('/agent/signup', [AgentController::class, 'signupAuth'])->name('agentregister');


Route::get('/agent/profile', [AgentController::class, 'profile'])->name('profile');
Route::get('/agent/profile/update', [AgentController::class, 'updateprofile'])->name('updateprofile');
Route::get('/agent/profile/upload-selfie', [AgentController::class, 'uploadSelfie']);
Route::get('/agent/profile/upload-id', [AgentController::class, 'uploadId']);
Route::get('/agent/profile/upload-selfie-id', [AgentController::class, 'uploadselfieid']);
Route::get('/agent/contacts', [ContactsController::class, 'index']);
Route::get('/agent/contacts/add', [ContactsController::class, 'create'])->name("addcontact");
Route::post('/agent/contacts/add', [ContactsController::class, 'store'])->name("addcontact");
Route::get('/agent/contacts/edit/{id}', [ContactsController::class, 'edit'])->name("editcontact");
Route::post('/agent/contacts/edit/{id}', [ContactsController::class, 'update'])->name("updateContact");
Route::get('/agent/contacts/delete/{id}', [ContactsController::class, 'destroy'])->name("destroycontact");

Route::get('/agent/property/{id}', [AgentController::class, 'ViewProperty'])->name('ViewProperty');
Route::get('/agent/myproperties', [AgentController::class, 'myproperties'])->name('agentproperties');

Route::get('/agent/add-property', [AgentController::class, 'addproperty'])->name('addproperty');
Route::post('/agent/add-property', [AgentAuths::class, 'addproperty1'])->name('addproperty1');

Route::get('/agent/add-propertypg2/{newprop}', [AgentController::class, 'addproperty2'])->name('addpropertymain');
Route::post('/agent/add-propertypg2', [AgentAuths::class, 'addproperty2'])->name('addproperty2');

Route::get('/agent/add-propertypg3/{newprop}', [AgentController::class, 'addproperty3'])->name('addproperty3main');
Route::post('/agent/add-propertypg3/{newprop}', [AgentAuths::class, 'addproperty3'])->name('addproperty3');

Route::get('/agent/add-more-images/{newprop}', [AgentController::class, 'addproperty4'])->name('addproperty4main');
Route::post('/agent/add-propertypg4/{newprop}', [AgentAuths::class, 'addproperty4'])->name('addproperty4');

Route::post('/agent/deleteproperty-picture/{imageId}', [PropertypicturesController::class, 'delete'])->name('propertyimage.delete');

Route::get('/agent/notifications/sent', [AgentController::class, 'notificationsSent'])->name('notificationssent');
Route::get('/agent/notifications', [AgentController::class, 'notifications'])->name('notifications-agent');
Route::get('/agent/notifications/create', [AgentController::class, 'notificationsCreate'])->name('notificationsCreate');
Route::post('/agent/notifications/create', [EmailController::class, 'sendMail'])->name('composeEmail');
Route::get('/agent/notification/read/{id}', [AgentController::class, 'read'])->name('readnotifications-agent');
Route::get('/agent/notification/readapi/{id}', [AgentController::class, 'readapi']);

Route::get('/fake', [AgentController::class, 'fake'])->name('fake');
Route::post('/fake2', [AgentController::class, 'fake2'])->name('fake2');


Route::get('/agent/deals', [Deals::class, 'agent'])->name('deal-agent');




// =================================================== ADMIN =============================
Route::get('/management/admin', [AdminController::class, 'index'])->name('adminhome');

Route::get('/management/admin/login', [AdminController::class, 'login'])->name('adminlogin');
Route::post('/management/admin/login', [AdminController::class, 'loginAuth'])->name('adminlogin.now');

Route::get('/management/admin/manage-types', [AdminController::class, 'types'])->name('managetypes');
Route::post('/management/admin/manage-types/{typeid}', [AdminController::class, 'destroy'])->name('managetypes.delete');

Route::get('/management/admin/add-type', [AdminController::class, 'addtype'])->name('managetypes.create');
Route::post('/management/admin/add-type', [AdminController::class, 'addtypeCreate'])->name('managetypes.store');

Route::get('/management/admin/properties', [AdminController::class, 'properties'])->name('propertyies');
Route::post('/management/admin/properties/{id}', [AdminController::class, 'propertyAction'])->name('propertyAction');
Route::get('/management/admin/view-property/{property}', [AdminController::class, 'viewproperty'])->name('adminview-property');


Route::get('/management/admin/agents/', [AdminAgentController::class, 'index'])->name('allagents');
Route::get('/management/admin/agents/verified', [AdminAgentController::class, 'Verified'])->name('agentsVerfified');
Route::get('/management/admin/agents/blocked', [AdminAgentController::class, 'Blocked'])->name('agentsBlocked');
Route::get('/management/admin/agents/pending', [AdminAgentController::class, 'Pending'])->name('agentsPending');

Route::get('/management/agent/{id}', [AdminAgentController::class, 'show'])->name('showagent');
Route::post('/management/agent/{id}', [AdminAgentController::class, 'update'])->name('updateAgent');


Route::get('/management/admin/notifications', [AdminController::class, 'notifications'])->name('notifications-agent');
Route::get('/management/admin/notifications/sent', [AdminController::class, 'notificationsSent'])->name('notificationssent');
Route::get('/management/admin/notifications/create', [AdminController::class, 'notificationsCreate'])->name('notificationsCreate');
Route::post('/management/admin/notifications/create', [EmailController::class, 'sendMail'])->name('composeEmail');
Route::get('/management/admin/notification/read/{id}', [AdminController::class, 'read'])->name('readnotifications-agent');
Route::get('/management/agent/notification/readapi/{id}', [AdminController::class, 'readapi']);


//========================================== api ==========================================
Route::get('/properties/fetch/{offset}', [PropertyController::class, 'index2'])->name('fetchproperty');
Route::post('/category/fetch/{offset}/20', [PropertyController::class, 'fetchpropertiesC'])->name('fetchpropertyC');


//========================================== categories ==========================================
Route::get('/categories/filter/{category}', [PropertyController::class, 'fetchbyType'])->name('fetchbyType');




Route::get('/sendmail', [MailController::class, 'basic_email1'])->name('sendmail1');
Route::post('/sendmail/post', [MailController::class, 'basic_email'])->name('sendmail');

Route::get('/agent/logout', function(Request $request){
    Auth::logout();
    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/agent/login');
});



// vue

Route::get('/getTypes', [TypeController::class, 'getAll'])->name('getType');



