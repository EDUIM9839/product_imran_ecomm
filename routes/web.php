<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FranchiseController;
use App\http\Controllers\SocialAuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

// Admin Only Routes

route::middleware(['auth', 'role:super_admin'])->group(function (){

        Route::get('/superadmin/dashboard', [SuperAdminController::class, 'dashboard'])->name('super_admin.dashboard');
        route::get('/superadmin/pop',[SuperAdminController::class,'pop_page'])->name('pop-page');
        route::get('/superadmin/email',[SuperAdminController::class,'email_page'])->name('email-page');
        route::get('/superadmin/general-settings',[SuperAdminController::class,'general_settings'])->name('general-settings');
        route::get('/superadmin/add-product',[SuperAdminController::class,'add_product'])->name('add-product');
        route::get('/superadmin/online-orders',[SuperAdminController::class,'online_orders'])->name('online-orders');
        route::get('/superadmin/expense-list',[SuperAdminController::class,'expense_list'])->name('expense-list');
        route::get('/superadmin/quotation-list',[SuperAdminController::class,'quotation_list'])->name('quotation-list');
        route::get('/superadmin/sales-returns',[SuperAdminController::class,'sales_returns'])->name('sales-returns');
        route::get('/superadmin/users',[SuperAdminController::class,'users'])->name('users');
        route::get('/superadmin/customers',[SuperAdminController::class,'customers'])->name('customers');
        route::get('/superadmin/sales-report',[SuperAdminController::class,'sales_report'])->name('sales-report');
        route::get('/superadmin/suppliers',[SuperAdminController::class,'suppliers'])->name('suppliers');
        route::get('/superadmin/stock-transfer',[SuperAdminController::class,'stock_transfer'])->name('stock-transfer');
        route::get('/superadmin/activities',[SuperAdminController::class,'activities'])->name('activities');
        route::get('/superadmin/profile',[SuperAdminController::class,'profile'])->name('profile');
        route::get('/superadmin/admin-dashboard',[SuperAdminController::class,'admin_dashboard'])->name('admin-dashboard');
        route::get('/superadmin/sales-dashboard',[SuperAdminController::class,'sales_dashboard'])->name('sales-dashboard');
        
        
        
        // ==============Role permissions ==============
        route::get('/superadmin/roles-permissions',[SuperAdminController::class,'roles_permissions'])->name('roles-permissions');
        Route::post('/superadmin/roles/store', [RoleController::class, 'store'])->name('roles.store');
        Route::post('/superadmin/roles/update/{id}', [RoleController::class, 'update'])->name('roles.update');
        Route::post('/superadmin/roles/delete/{id}', [RoleController::class, 'delete'])->name('roles.delete');
        Route::post('/superadmin/roles/bulk-delete', [RoleController::class, 'bulkDelete'])->name('roles.bulk-delete');
        Route::get('/superadmin/roles/filter', [RoleController::class, 'filter'])->name('roles.filter');
        Route::get('/superadmin/roles/search', [RoleController::class, 'search'])->name('roles.search');
        Route::get('/permissions', [RoleController::class, 'permissions'])->name('permissions');
        Route::get('/permissions/{role}', [RoleController::class, 'rolePermissions'])->name('roles.permissions');
        Route::post('/superadmin/update', [RoleController::class, 'PermissionsUpdate'])->name('permissions.update');
        
        
        // ==================user and franchise register========================
        Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
        Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::post('/users/{id}/update', [UserController::class, 'update'])->name('users.update');
        Route::delete('/users/{id}/delete', [UserController::class, 'destroy'])->name('users.destroy');
        
        // ===========================Module ================
        Route::get('/add-modules', [ModuleController::class, 'index'])->name('add-modules');
        Route::post('/modules', [ModuleController::class, 'store'])->name('modules.store');
        Route::get('/modules/list', [ModuleController::class, 'list'])->name('modules.list');
        Route::post('/modules/update', [ModuleController::class, 'update'])->name('modules.update');
        Route::post('/modules/delete', [ModuleController::class, 'delete'])->name('modules.delete');
        Route::post('/superadmin/module/bulk-delete', [ModuleController::class, 'bulkDelete'])->name('modul.bulk-delete');
       
        
        // =====================Categorise ====================
        route::get('/superadmin/category-list',[CategoryController::class,'category_list'])->name('category-list');
        Route::get('/superadmin/categories', [CategoryController::class, 'categories_index'])->name('categories.index');
        Route::get('/superadmin/categories/list', [CategoryController::class, 'categories_list'])->name('categories.list');
        Route::post('/superadmin/categories/store', [CategoryController::class, 'categories_store'])->name('categories.store');
        Route::post('/superadmin/categories/update', [CategoryController::class, 'categories_update'])->name('categories.update');
        Route::post('/superadmin/categories/delete', [CategoryController::class, 'categories_delete'])->name('categories.delete');
        Route::post('/categories/bulk-delete', [CategoryController::class, 'categories_bulkDelete'])->name('categories.bulkDelete');

        
        // =======================Sub Categories ================
        Route::get('/superadmin/sub-categories', [SubCategoryController::class, 'subcategories_index'])->name('subcategories.index');
        Route::get('/superadmin/sub-categories/list', [SubCategoryController::class, 'subcategories_list'])->name('subcategories.list');
        Route::post('/superadmin/sub-categories/store', [SubCategoryController::class, 'subcategories_store'])->name('subcategories.store');
        Route::post('/superadmin/sub-categories/update', [SubCategoryController::class, 'subcategories_update'])->name('subcategories.update');
        Route::post('/superadmin/sub-categories/delete', [SubCategoryController::class, 'subcategories_delete'])->name('subcategories.delete');
        Route::post('/superadmin/sub-categories/bulk-delete', [SubCategoryController::class, 'subcategories_bulkDelete'])->name('subcategories.bulkDelete');





        
    });
    
    
    // // Admin Only Routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

// // User Only Routes
Route::middleware(['auth', 'role:user'])->group(function () {
        Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
});

// // franchise Only Routes
Route::middleware(['auth', 'role:franchise'])->group(function () {
        Route::get('/common/reports', [FranchiseController::class, 'dashboard'])->name('franchise.dashboard');
    });
    
    
    // ===================login & logout route ================
    route::get('/signin',[WebsiteController::class,'signin'])->name('signin');
    Route::post('/login', [LoginController::class, 'login'])->name('login.post');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // ==================Social Login Routes===============

    Route::get('auth/{provider}', [SocialAuthController::class, 'redirectToProvider']);
    Route::get('auth/{provider}/callback', [SocialAuthController::class, 'handleProviderCallback']);
   
    
    // ================Registration Page =================
    route::get('/register',[WebsiteController::class,'register'])->name('register');
    route::get('/forgot-password',[WebsiteController::class,'forgot_password'])->name('forgot-password');
    
    Route::post('/register/user', [LoginController::class, 'registerUser']);
    Route::post('/validate-sponsor', [LoginController::class, 'validateSponsor']);
