<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminSlideController;
use App\Http\Controllers\Admin\AdminDestinationController;
use App\Http\Controllers\Admin\AdminServicesController;
use App\Http\Controllers\Admin\AdminPageTestimonialController;
use App\Http\Controllers\Admin\AdminGuideController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminCabController;
use App\Http\Controllers\Admin\AdminOutstationCabController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminVillaStayController;
use App\Http\Controllers\Admin\AdminResortStayController;

use App\Http\Controllers\Admin\AdminTabSectionController;
use App\Http\Controllers\Admin\AdminTestimonialController;
use App\Http\Controllers\Admin\AdminFestivalController;
use App\Http\Controllers\Admin\AdminHomeDestinationController;
use App\Http\Controllers\Admin\AdminFaqController;
use App\Http\Controllers\Admin\AdminMegaOfferController;
use App\Http\Controllers\Admin\AdminDiwaliController;
use App\Http\Controllers\Admin\AdminHoliController;
use App\Http\Controllers\Admin\AdminJanamastmiController;
use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminPackageProductController;
use App\Http\Controllers\Admin\AdminPackageAmenitieController;
use App\Http\Controllers\Admin\AdminAddHotelierController;
use App\Http\Controllers\Admin\AdminHotelController;
use App\Http\Controllers\Admin\AdminCmsPageController;
use App\Http\Controllers\Admin\AdminPackageCategoriesController;
use App\Http\Controllers\Admin\AdminHotelAmenitiesController;
use App\Http\Controllers\Admin\AdminRoomTypesController;
use App\Http\Controllers\Front\CabEnquiryController;
use App\Http\Controllers\HotelReviewController;
use App\Http\Controllers\NewsletterSubscriptionController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\SelfDriveController;
use App\Http\Controllers\HelicopterController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\GiftController;

use App\Http\Controllers\Customer\CustomerAuthController;
use App\Http\Controllers\Customer\CustomerHomeController;
use App\Http\Controllers\Customer\CustomerProfileController;
use App\Http\Controllers\Customer\CustomerOrderController;
use App\Http\Controllers\Front\ForexController;
// Hotelier Backend
use App\Http\Controllers\Hotelier\HotelierLoginController;
use App\Http\Controllers\Hotelier\HotelierHomeController;
use App\Http\Controllers\Hotelier\HotelierProfileController;
use App\Http\Controllers\Hotelier\HotelierHotelHomeSectionController;
use App\Http\Controllers\Hotelier\HotelierHotelAmenitiesController;
use App\Http\Controllers\Hotelier\HotelierRoomTypesController;



//use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\DestinationController;
use App\Http\Controllers\Front\ServicesController;
use App\Http\Controllers\Front\PageTestimonialController;
use App\Http\Controllers\Front\DiwaliController;
use App\Http\Controllers\Front\HoliController;
use App\Http\Controllers\Front\JanamastmiController;
use App\Http\Controllers\Front\GuideController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\OutStationCabController;
use App\Http\Controllers\Front\VillaStayController;
use App\Http\Controllers\Front\ResortStayController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\HotelController;



use App\Http\Controllers\Front\PackageController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HotelsOfferController;
use App\Http\Controllers\Front\CheckController;
use App\Http\Controllers\Front\CheckoutController;
use App\Http\Controllers\Front\CmsPageController;
use App\Http\Controllers\Front\HotelsDetailsController;
use App\Http\Controllers\Front\PackageCustomizeController;
use App\Http\Controllers\Front\RazorpayPaymentController;
//use App\Models\OutStationCab;


Route::get('/package',function(){
    return view('front.packages');
})->name('package');

Route::get('/flight',function(){
    return view('front.flight');
})->name('flight');
Route::get('/helicopter',function(){
    return view('front.helicopter');
})->name('helicopter');

Route::get('/giftcard',function(){
    return view('front.giftcard');
})->name('giftcard');
Route::get('/forex',function(){
    return view('front.forex');
})->name('forex');
Route::get('/selfdrive',function(){
    return view('front.selfdrive');
})->name('selfdrive');

Route::get('/activities',function(){
    return view('front.activities');
})->name('activities');

Route::get('/explore',function(){
    return view('front.explore');
})->name('explore');
Route::get('/hotel',function(){
    return view('front.hotel');
})->name('hotel');

Route::get('/privacy-policy',function(){
    return view('front.privacy-policy');
})->name('privacy-policy');

Route::get('/term-conditions',function(){
    return view('front.term-conditions');
})->name('term-conditions');


Route::post('/enquiry/store',[EnquiryController::class,'store'])->name('enquiry_store');
Route::post('/selfdrive/store',[SelfDriveController::class,'store'])->name('selfdrive_store');
Route::post('/helicopter/store',[HelicopterController::class,'store'])->name('helicopter_store');
Route::post('/forex/store',[ForexController::class,'store'])->name('forex_store');
Route::post('/gift/store',[GiftController::class,'store'])->name('gift_store');


//For admin Views
Route::get('/activities/view',[EnquiryController::class,'index'])->name('activities_view')->middleware('admin:admin');
Route::get('/select_activities/view',[ActivityController::class,'index'])->name('select_activities_view')->middleware('admin:admin');
Route::get('/activities/add',[ActivityController::class,'add'])->name('activities_add')->middleware('admin:admin');
Route::post('/admin/activity/store',[ActivityController::class,'store'])->name('acitivity_store')->middleware('admin:admin');
Route::get('/selfdrive/view',[SelfDriveController::class,'index'])->name('selfdrive_view')->middleware('admin:admin');
Route::get('/helicopter/view',[HelicopterController::class,'index'])->name('helicopter_view')->middleware('admin:admin');
Route::get('/forex/view',[ForexController::class,'index'])->name('forex_view')->middleware('admin:admin');
Route::get('/admin/activity/edit/{id}',[ActivityController::class,'edit'])->name('activity_edit')->middleware('admin:admin');
Route::post('/admin/activity/update/{id}',[ActivityController::class,'update'])->name('activity_update')->middleware('admin:admin');
Route::get('/admin/activity/delete/{id}',[ActivityController::class,'delete'])->name('activity_delete')->middleware('admin:admin');
Route::get('/activities', [EnquiryController::class, 'activity_view'])->name('activities');
Route::get('/gift/view',[GiftController::class,'index'])->name('gift_view')->middleware('admin:admin');

Route::get('/cart',[CartController::class,'index'])->name('cart');
Route::post('/cartdata/{id}',[CartController::class,'cartdata'])->name('cartdata');
Route::get('/cartdelete/{id}',[CartController::class,'cartdelete'])->name('cartdelete');
Route::get('/checkout/{id}',[CheckoutController::class,'index'])->name('checkout');
Route::post('/payment',[CheckoutController::class,'payment'])->name('payment');
Route::post('checkout/pay',[CheckoutController::class,'pay'])->name('pay');
//checkout/pay/success
//checkout/pay/failure
//checkout/pay/error
Route::get('payment/success',[CheckoutController::class,'success'])->name('success');
Route::get('payment/error',[CheckoutController::class,'error'])->name('error');

Route::get('/contact',[ContactController::class,'index'])->name('contac');
Route::post('/contactus',[ContactController::class,'contact'])->name('contactus');
Route::get('/resort',[ResortStayController::class,'index'])->name('resort');
Route::post('/resortstays',[ResortStayController::class,'resort'])->name('resortstays');
Route::get('/villastays',[VillaStayController::class,'index'])->name('villastays');
Route::post('/villa',[VillaStayController::class,'villa'])->name('villa');
Route::get('/outstationcabs',[OutStationCabController::class,'index'])->name('outstationcabs');
Route::post('/outstationcabsubmit',[OutStationCabController::class,'outstationcabsubmit'])->name('outstationcabsubmit');
Route::post('/outstationcabformsubmit',[OutStationCabController::class,'outstationcabformsubmit'])->name('outstationcabformsubmit');
Route::get('/cabs',[CabEnquiryController::class,'index'])->name('cabs');
Route::post('/cabsubmit',[CabEnquiryController::class,'cabsubmit'])->name('cabsubmit');
Route::post('/cabformsubmit',[CabEnquiryController::class,'cabformsubmit'])->name('cabformsubmit');



Route::get('/hotelsoffer',[HotelsOfferController::class,'index'])->name('hotelsoffer');
Route::get('/check',[CheckController::class,'index'])->name('check');
Route::get('/hotel',[HotelController::class,'index'])->name('hotel');
Route::get('/hoteldetails/{id}',[HotelsDetailsController::class,'hoteldetails'])->name('hoteldetails');

Route::get('/',[WebsiteController::class,'index'])->name('home');
//Route::get('/',[HomeController::class,'index'])->name('home');
// Route::post('/registration_submit',[WebsiteController::class,'registration_submit'])->name('registration_submit');
// Route::get('/registration/verify/{token}/{email}',[WebsiteController::class,'registration_verify']);
// Route::post('login_submit',[WebsiteController::class,'login_submit'])->name('login_submit');
// Route::get('/logout',[WebsiteController::class,'logout'])->name('logout');
// Route::post('forget_password_submit',[WebsiteController::class,'forget_password_submit'])->name('forget_password_submit');
// Route::get('/reset_password/{token}/{email}',[WebsiteController::class,'reset_password'])->name('reset_password');
// Route::post('reset_password_submit',[WebsiteController::class,'reset_password_submit'])->name('reset_password_submit');



// Add to Cart

Route::get('/roombook/{id}', [RazorpayPaymentController::class, 'roomtypes_data'])->name('hotel');


Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/destination',[DestinationController::class,'index'])->name('destination');
Route::get('/services',[ServicesController::class,'index'])->name('services');
Route::get('/testimonials',[PageTestimonialController::class,'index'])->name('testimonials');
Route::get('/guides',[GuideController::class,'index'])->name('guides');
Route::get('/blogs',[BlogController::class,'index'])->name('blogs');



// Hotel Review
Route::post('/hoteldetails/store',[HotelReviewController::class,'store'])->name('hoteldetails_store');


// Newsletter Subscription
Route::post('/newsletter/store',[NewsletterSubscriptionController::class,'store'])->name('newsletter_store');
Route::get('/newsletter/view',[NewsletterSubscriptionController::class,'index'])->name('newsletter_view')->middleware('admin:admin');



// Hotelier
Route::get('/hotelier/home',[HotelierHomeController::class,'index'])->name('hotelier_home')->middleware(('hotelier:hotelier'));
Route::get('/hotelier/login',[HotelierLoginController::class,'index'])->name('hotelier_login');
Route::post('/hotelier/login-submit',[HotelierLoginController::class,'login_submit'])->name('hotelier_login_submit');
Route::get('/hotelier/forget-password',[HotelierLoginController::class,'forget_password'])->name('hotelier_forget_password');
Route::post('/hotelier/forget-password-submit',[HotelierLoginController::class,'forget_password_submit'])->name('hotelier_forget_password_submit');
Route::get('/hotelier/logout',[HotelierLoginController::class,'logout'])->name('hotelier_logout');
Route::get('/hotelier/reset-password/{token}/{email}',[HotelierLoginController::class,'reset_password'])->name('hotelier_reset_password');
Route::post('/hotelier/reset-password-submit',[HotelierLoginController::class,'reset_password_submit'])->name('hotelier_reset_password_submit');
Route::get('/hotelier/edit-profile',[HotelierProfileController::class,'index'])->name('hotelier_profile')->middleware('hotelier:hotelier');
Route::post('/hotelier/edit-profile-submit',[HotelierProfileController::class,'profile_submit'])->name('hotelier_profile_submit');


Route::get('/hotelier/page/about',[HotelierPageController::class,'about'])->name('hotelier_page_about')->middleware('hotelier:hotelier');
Route::post('/hotelier/page/about/update',[HotelierPageController::class,'about_update'])->name('hotelier_page_about_update')->middleware('hotelier:hotelier');


/* HotelHomeSection  */
Route::get('/hotelier/hotelhomesection/view',[HotelierHotelHomeSectionController::class,'index'])->name('hotelhomesection_view')->middleware('hotelier:hotelier');
Route::get('/hotelier/hotelhomesection/add',[HotelierHotelHomeSectionController::class,'add'])->name('hotelhomesection_add')->middleware('hotelier:hotelier');
Route::post('/hotelier/hotelhomesection/store',[HotelierHotelHomeSectionController::class,'store'])->name('hotelhomesection_store')->middleware('hotelier:hotelier');
Route::get('/hotelier/hotelhomesection/edit/{id}',[HotelierHotelHomeSectionController::class,'edit'])->name('hotelhomesection_edit')->middleware('hotelier:hotelier');
Route::post('/hotelier/hotelhomesection/update/{id}',[HotelierHotelHomeSectionController::class,'update'])->name('hotelhomesection_update')->middleware('hotelier:hotelier');
Route::get('/hotelier/hotelhomesection/delete/{id}',[HotelierHotelHomeSectionController::class,'delete'])->name('hotelhomesection_delete')->middleware('hotelier:hotelier');







Route::get('/diwali',[DiwaliController::class,'index'])->name('diwali');
Route::get('/holi',[HoliController::class,'index'])->name('holi');
Route::get('/janamastmi',[JanamastmiController::class,'index'])->name('janamastmi');
Route::get('/package',[PackageController::class,'index'])->name('package');
Route::get('/package_details/{id}',[PackageController::class,'packagedetails'])->name('package_details');
Route::get('/packagelisting/{category_id}/{package_destination}',[PackageController::class,'packagelisting'])->name('packagelisting');
Route::get('/ajax/{id}',[PackageController::class,'testing'])->name('test');
Route::post('/packagesearch/{category_id}/{package_destination}',[PackageController::class,'packagesearch'])->name('packagesearch');

Route::get('/customid/{id}',[PackageCustomizeController::class,'hello'])->name('custom');
Route::post('/customdata',[PackageCustomizeController::class,'customdata'])->name('customdata');
Route::post('/customajax',[PackageCustomizeController::class,'customajax'])->name('customajax');
Route::post('logincustomize',[PackageCustomizeController::class,'logincustomize'])->name('logincustomize');
Route::post('/hotelsubmit',[PackageCustomizeController::class,'hotelsubmit'])->name('hotelsubmit');
Route::post('/hotelsub',[PackageCustomizeController::class,'hotelsub'])->name('hotelsub');
//Route::get('/package_details/{id}',[PackageCustomizeController::class,'customdata'])->name('custom_details');


// admin section

// Route::get('/admin/login',[AdminController::class,'login'])->name('admin_login');
// Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin_dashboard')->middleware('admin:admin');
// Route::get('/admin/settings',[AdminController::class,'settings'])->name('admin_settings')->middleware('admin:admin');
// Route::post('/admin/login-submit',[AdminController::class,'login_submit'])->name('admin_login_submit');
// Route::get('/admin/logout',[AdminController::class,'logout'])->name('admin_logout');

//admin controller
Route::get('/admin/home',[AdminHomeController::class,'index'])->name('admin_home')->middleware(('admin:admin'));
Route::get('/admin/login',[AdminLoginController::class,'index'])->name('admin_login');
Route::post('/admin/login-submit',[AdminLoginController::class,'login_submit'])->name('admin_login_submit');
Route::get('/admin/forget-password',[AdminLoginController::class,'forget_password'])->name('admin_forget_password');
Route::post('/admin/forget-password-submit',[AdminLoginController::class,'forget_password_submit'])->name('admin_forget_password_submit');
Route::get('/admin/logout',[AdminLoginController::class,'logout'])->name('admin_logout');
Route::get('/admin/reset-password/{token}/{email}',[AdminLoginController::class,'reset_password'])->name('admin_reset_password');
Route::post('/admin/reset-password-submit',[AdminLoginController::class,'reset_password_submit'])->name('admin_reset_password_submit');
Route::get('/admin/edit-profile',[AdminProfileController::class,'index'])->name('admin_profile')->middleware('admin:admin');
Route::post('/admin/edit-profile-submit',[AdminProfileController::class,'profile_submit'])->name('admin_profile_submit');







Route::get('/admin/slide/view',[AdminSlideController::class,'index'])->name('admin_slide_view')->middleware('admin:admin');
Route::get('/admin/slide/add',[AdminSlideController::class,'add'])->name('admin_slide_add')->middleware('admin:admin');
Route::post('/admin/slide/store',[AdminSlideController::class,'store'])->name('admin_slide_store')->middleware('admin:admin');
Route::get('/admin/slide/edit/{id}',[AdminSlideController::class,'edit'])->name('admin_slide_edit')->middleware('admin:admin');
Route::post('/admin/slide/update/{id}',[AdminSlideController::class,'update'])->name('admin_slide_update')->middleware('admin:admin');
Route::get('/admin/slide/delete/{id}',[AdminSlideController::class,'delete'])->name('admin_slide_delete')->middleware('admin:admin');

Route::get('/admin/cablist',[AdmincabController::class,'cablisting'])->name('admin_cab_list')->middleware('admin:admin');
Route::get('/admin/cabreturn',[AdmincabController::class,'cablist'])->name('admin_cab_return')->middleware('admin:admin');

Route::get('/admin/outstationcab',[AdminOutstationCabController::class,'outstationcab'])->name('admin_outstationcab')->middleware('admin:admin');
Route::get('/admin/outstationcablist',[AdminOutstationCabController::class,'outstationcablist'])->name('admin_outstationcablist')->middleware('admin:admin');



Route::get('/admin/page/about',[AdminPageController::class,'about'])->name('admin_page_about')->middleware('admin:admin');
Route::post('/admin/page/about/update',[AdminPageController::class,'about_update'])->name('admin_page_about_update')->middleware('admin:admin');

Route::get('/admin/page/destination',[AdminDestinationController::class,'destination'])->name('admin_page_destination')->middleware('admin:admin');
Route::post('/admin/page/destination/update',[AdminDestinationController::class,'destination_update'])->name('admin_page_destination_update')->middleware('admin:admin');

Route::get('/admin/page/services',[AdminServicesController::class,'services'])->name('admin_page_services')->middleware('admin:admin');
Route::post('/admin/page/services/update',[AdminServicesController::class,'services_update'])->name('admin_page_services_update')->middleware('admin:admin');

Route::get('/admin/page/testimonials',[AdminPageTestimonialController::class,'testimonial'])->name('admin_page_testimonials')->middleware('admin:admin');
Route::post('/admin/page/testimonials/update',[AdminPageTestimonialController::class,'testimonial_update'])->name('admin_page_testimonial_update')->middleware('admin:admin');

Route::get('/admin/page/guides',[AdminGuideController::class,'guides'])->name('admin_page_guides')->middleware('admin:admin');
Route::post('/admin/page/guides/update',[AdminGuideController::class,'guides_update'])->name('admin_page_guides_update')->middleware('admin:admin');

Route::get('/admin/page/blogs',[AdminBlogController::class,'blogs'])->name('admin_page_blogs')->middleware('admin:admin');
Route::post('/admin/page/blogs/update',[AdminBlogController::class,'blogs_update'])->name('admin_page_blogs_update')->middleware('admin:admin');

Route::get('/admin/setting', [AdminSettingController::class, 'index'])->name('admin_setting')->middleware('admin:admin');
Route::post('/admin/setting/update', [AdminSettingController::class, 'update'])->name('admin_setting_update')->middleware('admin:admin');


/* Add Hotelier  */
Route::get('/admin/addhotelier/view',[AdminAddHotelierController::class,'index'])->name('admin_addhotelier_view')->middleware('admin:admin');
Route::get('/admin/addhotelier/add',[AdminAddHotelierController::class,'add'])->name('admin_addhotelier_add')->middleware('admin:admin');
Route::post('/admin/addhotelier/store',[AdminAddHotelierController::class,'store'])->name('admin_addhotelier_store')->middleware('admin:admin');
Route::get('/admin/addhotelier/edit/{id}',[AdminAddHotelierController::class,'edit'])->name('admin_addhotelier_edit')->middleware('admin:admin');
Route::post('/admin/addhotelier/update/{id}',[AdminAddHotelierController::class,'update'])->name('admin_addhotelier_update')->middleware('admin:admin');
Route::get('/admin/addhotelier/delete/{id}',[AdminAddHotelierController::class,'delete'])->name('admin_addhotelier_delete')->middleware('admin:admin');



/* Tab  */
Route::get('/admin/tab/view',[AdminTabSectionController::class,'index'])->name('tab_view')->middleware('admin:admin');
Route::get('/admin/tab/add',[AdminTabSectionController::class,'add'])->name('tab_add')->middleware('admin:admin');
Route::post('/admin/tab/store',[AdminTabSectionController::class,'store'])->name('tab_store')->middleware('admin:admin');
Route::get('/admin/tab/edit/{id}',[AdminTabSectionController::class,'edit'])->name('tab_edit')->middleware('admin:admin');
Route::post('/admin/tab/update/{id}',[AdminTabSectionController::class,'update'])->name('tab_update')->middleware('admin:admin');
Route::get('/admin/tab/delete/{id}',[AdminTabSectionController::class,'delete'])->name('tab_delete')->middleware('admin:admin');

/* Testimonial  */
Route::get('/admin/testimonial/view', [AdminTestimonialController::class, 'index'])->name('admin_testimonial_view')->middleware('admin:admin');
Route::get('/admin/testimonial/add', [AdminTestimonialController::class, 'add'])->name('admin_testimonial_add')->middleware('admin:admin');
Route::post('/admin/testimonial/store', [AdminTestimonialController::class, 'store'])->name('admin_testimonial_store')->middleware('admin:admin');
Route::get('/admin/testimonial/edit/{id}', [AdminTestimonialController::class, 'edit'])->name('admin_testimonial_edit')->middleware('admin:admin');
Route::post('/admin/testimonial/update/{id}', [AdminTestimonialController::class, 'update'])->name('admin_testimonial_update')->middleware('admin:admin');
Route::get('/admin/testimonial/delete/{id}', [AdminTestimonialController::class, 'delete'])->name('admin_testimonial_delete')->middleware('admin:admin');

/* Festival  */
Route::get('/admin/festival/view', [AdminFestivalController::class, 'index'])->name('festival_view')->middleware('admin:admin');
Route::get('/admin/festival/add', [AdminFestivalController::class, 'add'])->name('festival_add')->middleware('admin:admin');
Route::post('/admin/festival/store', [AdminFestivalController::class, 'store'])->name('festival_store')->middleware('admin:admin');
Route::get('/admin/festival/edit/{id}', [AdminFestivalController::class, 'edit'])->name('festival_edit')->middleware('admin:admin');
Route::post('/admin/festival/update/{id}', [AdminFestivalController::class, 'update'])->name('festival_update')->middleware('admin:admin');
Route::get('/admin/festival/delete/{id}', [AdminFestivalController::class, 'delete'])->name('festival_delete')->middleware('admin:admin');

/* Home Destination  */
Route::get('/admin/home_destination/view', [AdminHomeDestinationController::class, 'index'])->name('home_destination_view')->middleware('admin:admin');
Route::get('/admin/home_destination/add', [AdminHomeDestinationController::class, 'add'])->name('home_destination_add')->middleware('admin:admin');
Route::post('/admin/home_destination/store', [AdminHomeDestinationController::class, 'store'])->name('home_destination_store')->middleware('admin:admin');
Route::get('/admin/home_destination/edit/{id}', [AdminHomeDestinationController::class, 'edit'])->name('home_destination_edit')->middleware('admin:admin');
Route::post('/admin/home_destination/update/{id}', [AdminHomeDestinationController::class, 'update'])->name('home_destination_update')->middleware('admin:admin');
Route::get('/admin/home_destination/delete/{id}', [AdminHomeDestinationController::class, 'delete'])->name('home_destination_delete')->middleware('admin:admin');


Route::get('/admin/faq/view', [AdminFaqController::class, 'index'])->name('admin_faq_view')->middleware('admin:admin');
Route::get('/admin/faq/add', [AdminFaqController::class, 'add'])->name('admin_faq_add')->middleware('admin:admin');
Route::post('/admin/faq/store', [AdminFaqController::class, 'store'])->name('admin_faq_store')->middleware('admin:admin');
Route::get('/admin/faq/edit/{id}', [AdminFaqController::class, 'edit'])->name('admin_faq_edit')->middleware('admin:admin');
Route::post('/admin/faq/update/{id}', [AdminFaqController::class, 'update'])->name('admin_faq_update')->middleware('admin:admin');
Route::get('/admin/faq/delete/{id}', [AdminFaqController::class, 'delete'])->name('admin_faq_delete')->middleware('admin:admin');



Route::get('/admin/mega/view', [AdminMegaOfferController::class, 'index'])->name('mega_view')->middleware('admin:admin');
Route::get('/admin/mega/add', [AdminMegaOfferController::class, 'add'])->name('mega_add')->middleware('admin:admin');
Route::post('/admin/mega/store', [AdminMegaOfferController::class, 'store'])->name('mega_store')->middleware('admin:admin');
Route::get('/admin/mega/edit/{id}', [AdminMegaOfferController::class, 'edit'])->name('mega_edit')->middleware('admin:admin');
Route::post('/admin/mega/update/{id}', [AdminMegaOfferController::class, 'update'])->name('mega_update')->middleware('admin:admin');
Route::get('/admin/mega/delete/{id}', [AdminMegaOfferController::class, 'delete'])->name('mega_delete')->middleware('admin:admin');


/* About Section  */
Route::get('/admin/about/view',[AdminAboutController::class,'index'])->name('about_view')->middleware('admin:admin');
Route::get('/admin/about/add',[AdminAboutController::class,'add'])->name('about_add')->middleware('admin:admin');
Route::post('/admin/about/store',[AdminAboutController::class,'store'])->name('about_store')->middleware('admin:admin');
Route::get('/admin/about/edit/{id}',[AdminAboutController::class,'edit'])->name('about_edit')->middleware('admin:admin');
Route::post('/admin/about/update/{id}',[AdminAboutController::class,'update'])->name('aboutupdatedata')->middleware('admin:admin');
Route::get('/admin/about/delete/{id}',[AdminAboutController::class,'delete'])->name('about_delete')->middleware('admin:admin');

/* Diwali  */
Route::get('/admin/diwali/view',[AdminDiwaliController::class,'index'])->name('diwali_view')->middleware('admin:admin');
Route::get('/admin/diwali/add',[AdminDiwaliController::class,'add'])->name('diwali_add')->middleware('admin:admin');
Route::post('/admin/diwali/store',[AdminDiwaliController::class,'store'])->name('diwali_store')->middleware('admin:admin');
Route::get('/admin/diwali/edit/{id}',[AdminDiwaliController::class,'edit'])->name('diwali_edit')->middleware('admin:admin');
Route::post('/admin/diwali/update/{id}',[AdminDiwaliController::class,'update'])->name('diwali_update')->middleware('admin:admin');
Route::get('/admin/diwali/delete/{id}',[AdminDiwaliController::class,'delete'])->name('diwali_delete')->middleware('admin:admin');

/* Holi  */
Route::get('/admin/holi/view',[AdminHoliController::class,'index'])->name('holi_view')->middleware('admin:admin');
Route::get('/admin/holi/add',[AdminHoliController::class,'add'])->name('holi_add')->middleware('admin:admin');
Route::post('/admin/holi/store',[AdminHoliController::class,'store'])->name('holi_store')->middleware('admin:admin');
Route::get('/admin/holi/edit/{id}',[AdminHoliController::class,'edit'])->name('holi_edit')->middleware('admin:admin');
Route::post('/admin/holi/update/{id}',[AdminHoliController::class,'update'])->name('holi_update')->middleware('admin:admin');
Route::get('/admin/holi/delete/{id}',[AdminHoliController::class,'delete'])->name('holi_delete')->middleware('admin:admin');

/* Janamastmi  */
Route::get('/admin/janamastmi/view',[AdminJanamastmiController::class,'index'])->name('janamastmi_view')->middleware('admin:admin');
Route::get('/admin/janamastmi/add',[AdminJanamastmiController::class,'add'])->name('janamastmi_add')->middleware('admin:admin');
Route::post('/admin/janamastmi/store',[AdminJanamastmiController::class,'store'])->name('janamastmi_store')->middleware('admin:admin');
Route::get('/admin/janamastmi/edit/{id}',[AdminJanamastmiController::class,'edit'])->name('janamastmi_edit')->middleware('admin:admin');
Route::post('/admin/janamastmi/update/{id}',[AdminJanamastmiController::class,'update'])->name('janamastmi_update')->middleware('admin:admin');
Route::get('/admin/janamastmi/delete/{id}',[AdminJanamastmiController::class,'delete'])->name('janamastmi_delete')->middleware('admin:admin');


Route::get('/admin/resort',[AdminResortStayController::class,'resort'])->name('resort')->middleware('admin:admin');
Route::get('/admin/villa',[AdminVillaStayController::class,'villa'])->name('villastay')->middleware('admin:admin');
Route::get('/admin/contact',[AdminContactController::class,'contact'])->name('contact')->middleware('admin:admin');
/* Package Categories  */
Route::get('/admin/package_category/view',[AdminPackageCategoriesController::class,'index'])->name('package_category_view')->middleware('admin:admin');
Route::get('/admin/package_category/add',[AdminPackageCategoriesController::class,'add'])->name('package_category_add')->middleware('admin:admin');
Route::post('/admin/package_category/store',[AdminPackageCategoriesController::class,'store'])->name('package_category_store')->middleware('admin:admin');
Route::get('/admin/package_category/edit/{id}',[AdminPackageCategoriesController::class,'edit'])->name('package_category_edit')->middleware('admin:admin');
Route::post('/admin/package_category/update/{id}',[AdminPackageCategoriesController::class,'update'])->name('package_category_update')->middleware('admin:admin');
Route::get('/admin/package_category/delete/{id}',[AdminPackageCategoriesController::class,'delete'])->name('package_category_delete')->middleware('admin:admin');


/*  Package Product */

Route::get('/admin/package_product/view',[AdminPackageProductController::class,'index'])->name('package_product_view')->middleware('admin:admin');
Route::get('/admin/package_product/add',[AdminPackageProductController::class,'add'])->name('package_product_add')->middleware('admin:admin');
Route::post('/admin/package_product/store',[AdminPackageProductController::class,'store'])->name('package_product_store')->middleware('admin:admin');
Route::get('/admin/package_product/edit/{id}',[AdminPackageProductController::class,'edit'])->name('package_product_edit')->middleware('admin:admin');
Route::post('/admin/package_product/update/{id}',[AdminPackageProductController::class,'update'])->name('package_product_update')->middleware('admin:admin');
Route::get('/admin/package_product/delete/{id}',[AdminPackageProductController::class,'delete'])->name('package_product_delete')->middleware('admin:admin');


/* Admin Hotel Section  */
Route::get('/admin/hotel/view',[AdminHotelController::class,'index'])->name('hotel_view')->middleware('admin:admin');
Route::get('/admin/hotel/add',[AdminHotelController::class,'add'])->name('hotel_add')->middleware('admin:admin');
Route::post('/admin/hotel/store',[AdminHotelController::class,'store'])->name('hotel_store')->middleware('admin:admin');
Route::get('/admin/hotel/edit/{id}',[AdminHotelController::class,'edit'])->name('hotel_edit')->middleware('admin:admin');
Route::post('/admin/hotel/update/{id}',[AdminHotelController::class,'update'])->name('hotel_update')->middleware('admin:admin');
Route::get('/admin/hotel/delete/{id}',[AdminHotelController::class,'delete'])->name('hotel_delete')->middleware('admin:admin');


/* Admin Hotel Amenitie  */
Route::get('/admin/adminamenities/view',[AdminHotelAmenitiesController::class,'index'])->name('adminamenities_view')->middleware('admin:admin');
Route::get('/admin/adminamenities/add',[AdminHotelAmenitiesController::class,'add'])->name('adminamenities_add')->middleware('admin:admin');
Route::post('/admin/adminamenities/store',[AdminHotelAmenitiesController::class,'store'])->name('adminamenities_store')->middleware('admin:admin');
Route::get('/admin/adminamenities/edit/{id}',[AdminHotelAmenitiesController::class,'edit'])->name('adminamenities_edit')->middleware('admin:admin');
Route::post('/admin/adminamenities/update/{id}',[AdminHotelAmenitiesController::class,'update'])->name('adminamenities_update')->middleware('admin:admin');
Route::get('/admin/adminamenities/delete/{id}',[AdminHotelAmenitiesController::class,'delete'])->name('adminamenities_delete')->middleware('admin:admin');


/* Admin Hotel Room Types  */
Route::get('/admin/adminroomtypes/view',[AdminRoomTypesController::class,'index'])->name('adminroomtypes_view')->middleware('admin:admin');
Route::get('/admin/adminroomtypes/add',[AdminRoomTypesController::class,'add'])->name('adminroomtypes_add')->middleware('admin:admin');
Route::post('/admin/adminroomtypes/store',[AdminRoomTypesController::class,'store'])->name('adminroomtypes_store')->middleware('admin:admin');
Route::get('/admin/adminroomtypes/edit/{id}',[AdminRoomTypesController::class,'edit'])->name('adminroomtypes_edit')->middleware('admin:admin');
Route::post('/admin/adminroomtypes/update/{id}',[AdminRoomTypesController::class,'update'])->name('adminroomtypes_update')->middleware('admin:admin');
Route::get('/admin/adminroomtypes/delete/{id}',[AdminRoomTypesController::class,'delete'])->name('adminroomtypes_delete')->middleware('admin:admin');





/*Packages Amenitie  */
Route::get('/admin/amenitie/view',[AdminPackageAmenitieController::class,'index'])->name('amenitie_view')->middleware('admin:admin');
Route::get('/admin/amenitie/add',[AdminPackageAmenitieController::class,'add'])->name('amenitie_add')->middleware('admin:admin');
Route::post('/admin/amenitie/store',[AdminPackageAmenitieController::class,'store'])->name('amenitie_store')->middleware('admin:admin');
Route::get('/admin/amenitie/edit/{id}',[AdminPackageAmenitieController::class,'edit'])->name('amenitie_edit')->middleware('admin:admin');
Route::post('/admin/amenitie/update/{id}',[AdminPackageAmenitieController::class,'update'])->name('amenitie_update')->middleware('admin:admin');
Route::get('/admin/amenitie/delete/{id}',[AdminPackageAmenitieController::class,'delete'])->name('amenitie_delete')->middleware('admin:admin');


/* CMS Pages  */

/* Visa Pages  */
Route::get('/admin/visa',[AdminCmsPageController::class,'index'])->name('visa')->middleware('admin:admin');
Route::post('/admin/visa/update',[AdminCmsPageController::class,'update'])->name('visa_update')->middleware('admin:admin');
Route::get('/visacard',[CmsPageController::class,'index'])->name('visacard');

/* about Pages  */
Route::get('/admin/about',[AdminCmsPageController::class,'about'])->name('about_us')->middleware('admin:admin');
Route::post('/admin/about/update',[AdminCmsPageController::class,'aboutupdate'])->name('about_update')->middleware('admin:admin');
Route::get('/about',[CmsPageController::class,'about'])->name('about');



/* Hotel Amenitie  */
Route::get('/hotelier/amenities/view',[HotelierHotelAmenitiesController::class,'index'])->name('amenities_view')->middleware('hotelier:hotelier');
Route::get('/hotelier/amenities/add',[HotelierHotelAmenitiesController::class,'add'])->name('amenities_add')->middleware('hotelier:hotelier');
Route::post('/hotelier/amenities/store',[HotelierHotelAmenitiesController::class,'store'])->name('amenities_store')->middleware('hotelier:hotelier');
Route::get('/hotelier/amenities/edit/{id}',[HotelierHotelAmenitiesController::class,'edit'])->name('amenities_edit')->middleware('hotelier:hotelier');
Route::post('/hotelier/amenities/update/{id}',[HotelierHotelAmenitiesController::class,'update'])->name('amenities_update')->middleware('hotelier:hotelier');
Route::get('/hotelier/amenities/delete/{id}',[HotelierHotelAmenitiesController::class,'delete'])->name('amenities_delete')->middleware('hotelier:hotelier');


/* Hotel Room Types  */
Route::get('/hotelier/roomtypes/view',[HotelierRoomTypesController::class,'index'])->name('roomtypes_view')->middleware('hotelier:hotelier');
Route::get('/hotelier/roomtypes/add',[HotelierRoomTypesController::class,'add'])->name('roomtypes_add')->middleware('hotelier:hotelier');
Route::post('/hotelier/roomtypes/store',[HotelierRoomTypesController::class,'store'])->name('roomtypes_store')->middleware('hotelier:hotelier');
Route::get('/hotelier/roomtypes/edit/{id}',[HotelierRoomTypesController::class,'edit'])->name('roomtypes_edit')->middleware('hotelier:hotelier');
Route::post('/hotelier/roomtypes/update/{id}',[HotelierRoomTypesController::class,'update'])->name('roomtypes_update')->middleware('hotelier:hotelier');
Route::get('/hotelier/roomtypes/delete/{id}',[HotelierRoomTypesController::class,'delete'])->name('roomtypes_delete')->middleware('hotelier:hotelier');


Route::post('/hotelbooking',[CustomerOrderController::class,'hotelbooking'])->name('hotelbooking');
Route::post('/booking',[CustomerOrderController::class,'booking'])->name('booking');
Route::post('/booksubmit',[CustomerOrderController::class,'booksubmit'])->name('booksubmit');
Route::post('/signin',[CustomerOrderController::class,'signin'])->name('signin');


// customer section
Route::get('/logout',[CustomerAuthController::class,'logout'])->name('logout');
Route::post('/registration_submit',[CustomerAuthController::class,'registration_submit'])->name('registration_submit');
Route::get('/registration/verify/{token}/{email}',[CustomerAuthController::class,'registration_verify']);
Route::post('login_submit',[CustomerAuthController::class,'login_submit'])->name('login_submit');
Route::post('forget_password_submit',[CustomerAuthController::class,'forget_password_submit'])->name('forget_password_submit');
Route::get('/reset_password/{token}/{email}',[CustomerAuthController::class,'reset_password'])->name('reset_password');
Route::post('reset_password_submit',[CustomerAuthController::class,'reset_password_submit'])->name('reset_password_submit');

Route::group(['middleware'=>['customer:customer']],function(){
    Route::get('/customer/home',[CustomerHomeController::class,'index'])->name('customer_home');
    Route::get('/customer/edit-profile',[CustomerProfileController::class,'index'])->name('customer_profile');
    Route::post('/customer/edit-profile-submit',[CustomerProfileController::class,'profile_submit'])->name('customer_profile_submit');
    Route::get('/customer/order/view',[CustomerOrderController::class,'index'])->name('customer_order_view');
    Route::get('/customer/order/detail/{id}',[CustomerOrderController::class,'detail'])->name('customer_order_detail');
    Route::get('/customer/invoice/{id}',[CustomerOrderController::class,'invoice'])->name('customer_invoice');
});


Route::get('currency',[ForexController::class,'currency'])->name('currency');
Route::post('currercychange',[ForexController::class,'currercychange'])->name('currercychange');