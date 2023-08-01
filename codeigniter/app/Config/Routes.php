<?php

namespace Config;

// Create a new instance of our RouteCollection class.
use App\Controllers\AdminHome;
use App\Controllers\Home;

$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->group('admin',function ($routes){
    $routes->post('home','Login::index');
    //AdminHome
    $routes->get('/','Login::index');
    $routes->get('panel','AdminHome::main_page',['filter' => 'mainfilter']);
    $routes->get('pages','AdminHome::pages',['filter' => 'mainfilter']);
    $routes->get('insight','AdminHome::insight',['filter' => 'mainfilter']);

    //GetEditedHome
    $routes->get('edit_home/(:any)/(:any)','GetEditedHome::getValue/$1/$2',['filter' => 'mainfilter']);
    $routes->post('upload_home','GetEditedHome::upload',['filter' => 'mainfilter']);

    //EditAbout
    $routes->get('edit_about','EditAbout::index',['filter' => 'mainfilter']);
    $routes->get('edit_about/getContent/(:any)','EditAbout::getContent/$1',['filter' => 'mainfilter']);
    $routes->post('upload_about','EditAbout::uploadContent',['filter' => 'mainfilter']);

    //EditExpertise
    $routes->get('edit_expertise','EditExpertise::index',['filter' => 'mainfilter']);
    $routes->get('edit_expertise/getExpertise/(:any)', 'EditExpertise::getExpertise/$1',['filter' => 'mainfilter']);
    $routes->post('upload_expertise','EditExpertise::uploadExpertise',['filter' => 'mainfilter']);

    //EditServices
    $routes->get('edit_services','EditServices::index',['filter' => 'mainfilter']);
    $routes->get('edit_services/getContent/(:any)','EditServices::getContent/$1',['filter' => 'mainfilter']);
    $routes->post('update_services','EditServices::updateContent',['filter' => 'mainfilter']);

    //EditTestimonial
    $routes->get('edit_testimonial','EditTestimonial::index',['filter' => 'mainfilter']);
    $routes->get('edit_testimonial/getContent/(:any)','EditTestimonial::getContent/$1',['filter' => 'mainfilter']);
    $routes->post('update_testimonial','EditTestimonial::updateTestimonial',['filter' => 'mainfilter']);

    //EditLangs
    $routes->get('edit_langs','EditLangs::index',['filter' => 'mainfilter']);
    $routes->post('update_langs','EditLangs::updateLangs',['filter' => 'mainfilter']);
    $routes->get('langs/content/(:any)/(:any)','EditLangs::getContent/$1/$2',['filter' => 'mainfilter']);
    //AdminLangs
    $routes->get('admin_langs','AdminLangs::index',['filter' => 'mainfilter']);
    $routes->get('get_header/(:any)','AdminLangs::getContent/$1',['filter' => 'mainfilter']);
    $routes->post('add_lang','AdminLangs::addLang',['filter' => 'mainfilter']);
    $routes->get('rm_lang/(:any)','AdminLangs::removeLang/$1',['filter' => 'mainfilter']);
    //Blogs
    $routes->get('edit_blogs/(:any)','EditBlogs::getBlogs/$1',['filter' => 'mainfilter']);
    $routes->get('add_blog','EditBlogs::addBlog',['filter' => 'mainfilter']);
    $routes->post('submit_blog','EditBlogs::submitBlog',['filter' => 'mainfilter']);
    $routes->get('delete_blog/(:any)','EditBlogs::deleteBlog/$1',['filter' => 'mainfilter']);
    $routes->get('alter_blog/(:any)','EditBlogs::alterBlog/$1',['filter' => 'mainfilter']);
    $routes->post('submit_alter','EditBlogs::submitAlter',['filter' => 'mainfilter']);
    $routes->get('rm_pic/(:any)','EditBlogs::rmPic/$1',['filter' => 'mainfilter']);
    //Portfolios
    $routes->get('edit_portfolios/(:any)','EditPortfolio::getContent/$1',['filter' => 'mainfilter']);
    $routes->get('add_portfolio','EditPortfolio::addPortfolio',['filter' => 'mainfilter']);
    $routes->post('submit_portfolio','EditPortfolio::submitPortfolio',['filter' => 'mainfilter']);
    $routes->get('delete_portfolio/(:any)','EditPortfolio::rmPortfolio/$1',['filter' => 'mainfilter']);
    $routes->get('alter_portfolio/(:any)','EditPortfolio::alterPortfolio/$1',['filter' => 'mainfilter']);
    $routes->post('submit_alter_p','EditPortfolio::submitAlter',['filter' => 'mainfilter']);
    $routes->get('rm_pic_portfolio/(:any)','EditPortfolio::rmPic/$1',['filter' => 'mainfilter']);
    //Contacts
    $routes->get('edit_contacts','EditContacts::getContacts',['filter' => 'mainfilter']);
    $routes->get('add_contact','EditContacts::addContact',['filter' => 'mainfilter']);
    $routes->post('submit_contact','EditContacts::submitContact',['filter' => 'mainfilter']);
    $routes->get('delete_contact/(:any)','EditContacts::rmContact/$1',['filter' => 'mainfilter']);
    $routes->get('alter_contact/(:any)','EditContacts::alterContact/$1',['filter' => 'mainfilter']);
    $routes->post('submit_alter_c','EditContacts::submitAlter',['filter' => 'mainfilter']);
    //Messages
    $routes->group('messages',function ($routes){
        $routes->get('read_messages','HandleMessages::readMessages',['filter' => 'mainfilter']);
        $routes->get('set_read/(:any)','HandleMessages::setRead/$1',['filter' => 'mainfilter']);
        $routes->get('delete_message/(:any)','HandleMessages::rmMessage/$1',['filter' => 'mainfilter']);
    });

    //Auth
    $routes->get('auth','AdminHome::index');

});
$routes->get('/blogs','Home::blogs');
$routes->get('/blogs/(:any)/(:any)','Home::singleBlog/$1/$2');

$routes->get('/portfolios/(:any)','Home::singlePortfolio/$1');

$routes->post('/send_message','HandleMessages::getMessage');

$routes->get('{locale}','Home::index');

$routes->get('{locale}/blogs','Home::blogs');
$routes->get('{locale}/blogs/(:any)/(:any)','Home::singleBlog/$1/$2');

$routes->get('{locale}/portfolios/(:any)','Home::singlePortfolio/$1');

$routes->post('{locale}/send_message','HandleMessages::getMessage');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
