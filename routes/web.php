<?php

use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Row;

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

// Route::get('/', function () {
//     return view('welcome');
// });
      Route::get('bata','HomeController@test')->name('bata');
      Route::get('yellow','HomeController@test2')->name('yellow');
      Route::get('test3','HomeController@test3');
      Route::get('product_details','HomeController@test4');
      Route::get('checkout_page','HomeController@test5');
      
        Route::get('/', 'HomeController@index')->name('toppage');
//  Route::get('/aboutus', 'SiteController@aboutus')->name('aboutus.list');
        Route::get('/allnews', 'HomeController@allnews')->name('allnews');
        // Route::get('/newsdetails/{name}/{id}', 'HomeController@newsdetails')->name('newsdetails');
        Route::get('/career', 'HomeController@career')->name('career');
        Route::get('/contact', 'HomeController@contact')->name('contact');
        Route::get('/aboutus', 'HomeController@aboutus')->name('aboutus');
        Route::get('/setLang/{lang}', 'HomeController@setLang')->name('setLang');
        Route::post('/sentmessages', 'HomeController@sentmessages')->name('messages');

        Route::get('/products/{cat_name}/{sub_cat_name}/{id}', 'HomeController@subcategorylist')->name('subcategorylist');

        Route::get('/products/{name}/{id}', 'HomeController@productDetails')->name('detials');
        Route::get('/media/campaign', 'HomeController@campaign')->name('campaign');
        Route::get('/export/comingsoon', 'HomeController@comming_soon')->name('comming_soon');
        Route::get('/products/{id}', 'HomeController@productList')->name('productList');

        Route::get('/allproducts', 'HomeController@details')->name('details');
        Route::get('/details', 'HomeController@products_details')->name('products_details');

        Route::get('/checkout', 'HomeController@checkout')->name('checkout');
        Route::post('/login', 'HomeController@login')->name('useLogin');
        Route::post('/signup', 'HomeController@signup')->name('signup');
        Route::get('/logout', 'HomeController@logout')->name('logout');
        Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
        Route::get('/vendorprofile/{name}/{id}','HomeController@vendorprofile')->name('vendorprofile');
        Route::prefix('admin')->group(function () {
        Route::group(['middleware' => 'checkAdmin'], function () {

            Route::get('/logout/{type}', 'Admin\LoginController@logout')->name('admin.logout');

            Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');
            // offer crud 
            Route::get('/offer', 'Admin\OfferController@index')->name('offer.list');
            Route::get('/offer/add', 'Admin\OfferController@offerAdd')->name('offer.add');
            Route::post('/offer/addsubmit', 'Admin\OfferController@offerAddSubmit')->name('offer.submit');
            Route::get('/offer/edit/{id}', 'Admin\OfferController@offerEdit')->name('offer.edit');
            Route::post('/offer/edit', 'Admin\OfferController@offerEditSubmit')->name('offer.edit.submit');
            Route::post('/offer/offerBulkubmit', 'Admin\OfferController@offerBulkubmit')->name('offer.bulk.submit');
            Route::get('/download', 'Admin\OfferController@download')->name('download');
            
            // offer Type crud 
            Route::get('/offertype', 'Admin\OfferTypeController@index')->name('offertype.list');
            Route::get('/offertype/add', 'Admin\OfferTypeController@offerTypeAdd')->name('offertype.add');
            Route::post('/offertype/addsubmit', 'Admin\OfferTypeController@offerTypeAddSubmit')->name('offertype.submit');
            Route::get('/offertype/edit/{id}', 'Admin\OfferTypeController@offerTypeEdit')->name('offertype.edit');
            Route::post('/offertype/edit', 'Admin\OfferTypeController@offerTypeEditSubmit')->name('offertype.edit.submit');
            
            // brand CRUD routes //
            Route::get('/brand/list', 'Admin\BrandController@brandList')->name('brand.list');
            Route::get('/brand/add', 'Admin\BrandController@brandAdd')->name('brand.add');
            Route::post('/brand/add', 'Admin\BrandController@brandAddSubmit')->name('brand.add.submit');
            Route::get('/brand/edit/{id}', 'Admin\BrandController@brandEdit')->name('brand.edit');
            Route::post('/brand/edit', 'Admin\BrandController@brandEditSubmit')->name('brand.edit.submit');
            Route::post('/brand/content/edit', 'Admin\BrandController@brandContentSubmit')->name('brand.content.submit');

            // Vendor CRUD routes //
            Route::get('/vendor/list', 'Admin\VendorController@vendorList')->name('vendor.list');
            Route::get('/vendor/add', 'Admin\VendorController@vendorAdd')->name('vendor.add');
            Route::post('/vendor/add', 'Admin\VendorController@vendorAddSubmit')->name('vendor.add.submit');
            Route::get('/vendor/edit/{id}', 'Admin\VendorController@vendorEdit')->name('vendor.edit');
            Route::post('/vendor/edit/main', 'Admin\VendorController@vendorEditSubmit')->name('vendor.edit.submit');
            Route::post('/vendor/content/edit', 'Admin\VendorController@vendorContentSubmit')->name('vendor.content.submit');
            
            Route::get('/admin/list', 'Admin\UserController@adminList')->name('admin.list');
            Route::get('/admin/add', 'Admin\UserController@adminAdd')->name('admin.add');
            Route::post('/admin/add', 'Admin\UserController@adminAddSubmit')->name('admin.add.submit');
            Route::get('/admin/edit/{id}', 'Admin\UserController@adminEdit')->name('admin.edit');
            Route::post('/admin/edit', 'Admin\UserController@adminEditSubmit')->name('admin.edit.submit');
            Route::post('/vendor/edit', 'Admin\UserController@vendorEditSubmit')->name('vendor.profile.content.submit');
            
            // Route::get('/equipment/delete/{id}', 'Admin\DashboardController@equipmentDelete')->name('admin.equipment.delete');
            Route::get('/inbox/list', 'Admin\InboxController@index')->name('inbox');
            Route::get('/product', 'Admin\ProductController@index')->name('product.list');
            Route::get('/product/add', 'Admin\ProductController@productAdd')->name('product.add');
            Route::post('/product/addsubmit', 'Admin\ProductController@productAddSubmit')->name('product.submit');
            Route::get('/product/edit/{id}', 'Admin\ProductController@productEdit')->name('product.edit');
            Route::post('/product/edit', 'Admin\ProductController@productEditSubmit')->name('product.edit.submit');

            Route::get('/productimage/edit/{id}',
            'Admin\ProductController@product_image')->name('product_image.edit');
            Route::post('/productimage/submit',
            'Admin\ProductController@product_image_submit')->name('product_image_submit.submit');
            Route::post('/productimage/product_image_delete',
            'Admin\ProductController@product_image_delete')->name('product_image_delete');

            Route::get('/productcategory', 'Admin\ProductCategoryController@index')->name('productcategory.list');
            Route::get('/productcategory/add', 'Admin\ProductCategoryController@productcategoryAdd')->name('productcategory.add');
            Route::post('/productcategory/addsubmit', 'Admin\ProductCategoryController@productcategoryAddSubmit')->name('productcategory.submit');
            Route::get('/productcategory/edit/{id}', 'Admin\ProductCategoryController@productcategoryEdit')->name('productcategory.edit');
            Route::post('/productcategory/editsubmit','Admin\ProductCategoryController@productcategoryEditSubmit')->name('productcategory.edit.submit');

        
            Route::get('/bannerimage', 'Admin\BannerimageController@index')->name('bannerimage.list');
            Route::get('/bannerimage/add',
            'Admin\BannerimageController@bannerimageAdd')->name('bannerimage.add');
            Route::post('/bannerimage/addsubmit',
            'Admin\BannerimageController@bannerimageAddSubmit')->name('bannerimage.submit');
            Route::get('/bannerimage/edit/{id}',
            'Admin\BannerimageController@bannerimageEdit')->name('bannerimage.edit');
            Route::post('/bannerimage/editsubmit}',
            'Admin\BannerimageController@bannerimageEditSubmit')->name('bannerimage.edit.submit');



            Route::get('/aboutus', 'Admin\AboutusController@index')->name('aboutus.list');
            Route::get('/aboutus/add','Admin\AboutusController@aboutusAdd')->name('aboutus.add');
            Route::post('/aboutus/addsubmit','Admin\AboutusController@aboutusEditSubmit')->name('aboutus.submit');
            Route::get('/aboutus/edit/{id}','Admin\AboutusController@aboutusEdit')->name('aboutus.edit');

            Route::get('/settings', 'Admin\SettingsController@index')->name('settings.list');
            Route::get('/settings/add','Admin\SettingsController@settingsAdd')->name('settings.add');
            Route::post('/settings/addsubmit','Admin\SettingsController@settingsAddSubmit')->name('settings.submit');
            Route::get('/settings/edit/{id}','Admin\SettingsController@settingsEdit')->name('settings.edit');
            Route::post('/settings/editsumbit','Admin\SettingsController@settingsEditSubmit')->name('settings.edit.submit');


            Route::get('/news', 'Admin\NewsController@index')->name('news.list');
            Route::get('/news/add','Admin\NewsController@newsAdd')->name('news.add');
            Route::post('/news/addsubmit','Admin\NewsController@newsAddSubmit')->name('news.add.submit');
            Route::get('/news/edit/{id}','Admin\NewsController@newsEdit')->name('news.edit');
            Route::post('/news/editsubmit','Admin\NewsController@newsEditSubmit')->name('news.edit.submit');

            Route::get('/gallery', 'Admin\GalleryController@index')->name('gallery.list');
            Route::get('/gallery/add','Admin\GalleryController@galleryAdd')->name('gallery.add');
            Route::post('/gallery/addsubmit','Admin\GalleryController@galleryAddSubmit')->name('gallery.add.submit');
            Route::get('/gallery/edit/{id}','Admin\GalleryController@galleryEdit')->name('gallery.edit');
            Route::post('/gallery/editsubmit','Admin\GalleryController@galleryEditSubmit')->name('gallery.edit.submit');
            Route::get('/gallery/{id}/delete/','Admin\GalleryController@delete')->name('gallery.delete');

            
            Route::post('/getCategory',
            'Admin\ProductController@getCategory')->name('getCategory');

        });
    Route::group(['middleware' => 'checkLogout'], function () {
        Route::get('/login/{type}', 'Admin\LoginController@index')->name('admin.login');
        Route::post('/login/{type}', 'Admin\LoginController@adminLoginSubmit')->name('admin.Login.submit');
    });
});
