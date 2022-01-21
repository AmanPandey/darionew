<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//$route['dashboard/upcomings'] = "Dashboard/upcomings";
$route['About-Us'] = "Dashboard/about";
$route['Services'] = "Dashboard/services";
$route['Products'] = "Dashboard/products";
$route['Contacts'] = "Dashboard/contacts";
$route['Team'] = "Dashboard/team";
$route['Book-Your-Appointment'] = "Dashboard/bookYourAppointment";



// $route['Mega-Workshops'] = "Softidia/mega_workshops";
// $route['Antrigue'] = "Softidia/antrigue";
// $route['Drone-Technology'] = "Softidia/drone_technology";
// $route['IoT'] = "Softidia/IoT";
// $route['Robotics'] = "Softidia/robotics";
// $route['Workshops-Trending-Topics'] = "Softidia/Workshops_trending_topics";
// $route['Website-Designing'] = "Softidia/website_designing";
// $route['Digital-Media-Marketing'] = "Softidia/digital_media_marketing";
// $route['E-commerce-Development'] = "Softidia/e_commerce_development";
// $route['Mobile-Application'] = "Softidia/mobile_application";
// $route['Manage-Hostings'] = "Softidia/manage_hostings";
// $route['IT-Supports'] = "Softidia/it_supports";
// $route['All-Digital-Services'] = "Softidia/all_digital_services";
// $route['Creative-And-Brand-Management'] = "Softidia/creative_and_brand_management";
// $route['social-Media-Management'] = "Softidia/social_media_management";
// $route['Digital-Presence-Strategies'] = "Softidia/digital_presence_strategies";
// $route['Public-Relation-Management'] = "Softidia/public_relation_management";
// $route['Automation-Marketing-Tools'] = "Softidia/automation_marketing_tools";
// $route['Launching-Strategy-Events'] = "Softidia/launching_strategy_and_events";
// $route['Campus-Trainings'] = "Softidia/campus_trainings";
// $route['Corporate-Trainings'] = "Softidia/corporate_trainings";
// $route['Employee-Trainings'] = "Softidia/employee_trainings";
// $route['Seminars'] = "Softidia/seminars";
// $route['Talk-Shows'] = "Softidia/talk_shows";
// $route['Fashion-Events'] = "Softidia/fashion_events";
// $route['Community-Meets'] = "Softidia/community_meets";
// $route['Product-Expo'] = "Softidia/product_expo";
// $route['Travel-Events'] = "Softidia/tour_and_travel_events";

// $route['Contact'] = "Softidia/contact";



// $route['Career'] = "Softidia/career";
// $route['Corporate-Responsibilities'] = "Softidia/corporate_responsibilities";
// $route['Investor-Guidelines'] = "Softidia/investor_guidelines";
// $route['Terms-Condition'] = "Softidia/terms_and_condition";
// $route['Privacy-Policy'] = "Softidia/privacy_policy";
// $route['Team'] = "Softidia/team";
// $route['Site-Maps'] = "Softidia/site_maps";
// $route['Partner-Services'] = "Softidia/partner_services";
// $route['Cookiee-Policy'] = "Softidia/cookiee_policy";
// $route['In-News'] = "Softidia/in_news";



//Business
//$route['Reports'] = "Business/reports";
