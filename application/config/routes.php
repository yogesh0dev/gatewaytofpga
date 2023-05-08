<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'frontend/homepage';
//front-end

$route['aboutus'] = 'frontend/aboutus';
$route['svalidate/(:any)'] = 'frontend/svalidate/$1';
$route['videos'] = 'frontend/video_list';
$route['courseschedule'] = 'frontend/courseschedule';
$route['faq'] = 'frontend/faq';
$route['pages'] = 'frontend/pages';
$route['news-blogs'] = 'frontend/our_blogs';
$route['blogs-details/(:any)'] = 'frontend/blogs_details/$1';
$route['terms-conditions'] = 'frontend/terms_conditions';
$route['privacy-policy'] = 'frontend/privacy_policy';
$route['refund-policy'] = 'frontend/refund_policy';
$route['freshers-training'] = 'frontend/freshers_training';
$route['corporate-training'] = 'frontend/corporate_training';
$route['121-training'] = 'frontend/training_121';
$route['professional-training'] = 'frontend/professional_training';
$route['summer-training'] = 'frontend/summer_training';
$route['on-demand-training'] = 'frontend/on_demand_training';
$route['login'] = 'frontend/login';
$route['forgot'] = 'main/forgot';
$route['signup'] = 'frontend/signup';
$route['buynow/(:any)'] = 'frontend/buynow/$1';
$route['removebuy'] = 'frontend/removebuy';
$route['purchase/(:any)'] = 'student/add_to_courses/$1';
$route['viewdocs/(:any)/(:any)'] = 'student/student_docs/$1/$2';

$route['about-us'] = 'frontend/aboutus';
$route['internships'] = 'frontend/internship';
$route['careers'] = 'frontend/career';
$route['search'] = 'frontend/search';
$route['contact-us'] = 'frontend/contactus';
$route['contactus/add'] = 'contactus/add';
$route['askfordemo'] = 'frontend/askfordemo';


$route['sitemap'] = 'frontend/sitemap';
// $route['contact-us'] = 'frontend/contacts';


$route['categoryinfo/(:any)'] = 'frontend/category_courses/$1';
$route['course-details/(:any)'] = 'frontend/course_details/$1';
$route['course-details'] = 'frontend/course_list';

////////////////////////STUDENT SETTINGS
$route['student-dashboard'] = 'student/dashboard';
$route['student-helpsubmit'] = 'student/helpsubmit';
$route['student-gethelp'] = 'student/gethelplist';
$route['student-all-courses'] = 'student/all_courses';
$route['student-help'] = 'student/student_help';
$route['student-testimonials'] = 'student/student_testimonials';
$route['stestimonials'] = 'student/stestimonials_add';
$route['student-payment'] = 'student/student_payment';
$route['student-paydetails/(:any)'] = 'razorpay/checkout/$1';
$route['student-edit-profile'] = 'student/student_edit_profile';
$route['student-edits'] = 'student/student_edits';
$route['srcard'] = 'student/srcard';
$route['myCertificate/(:any)'] = "student/pdfGet/$1";
//paid info
$route['student-courses'] = 'student/student_courses';
$route['student-trainer'] = 'student/student_trainer';
$route['student-material'] = 'student/student_material';
$route['student-assignments'] = 'student/student_assignments';
$route['addassignment'] = 'trainers/add_assignments';
$route['addtest'] = 'trainers/add_test';
$route['student-test'] = 'student/student_test';
$route['student-leave-testimony'] = 'student/student_leave_testimony';
$route['student-certificate'] = 'student/student_certificate';
////////////////////////STUDENT SETTINGS
////////////////////////////////// teacher settings
$route['trainers-dashboard'] = 'trainers/dashboard';
$route['trcard'] = 'trainers/trainers_rcard';
$route['tattendance/(:any)'] = 'trainers/attendace/$1';
$route['marks/(:any)'] = 'trainers/marks/$1';
$route['assignments/(:any)'] = 'trainers/assignments/$1';
$route['sattendance/(:any)'] = 'trainers/sattendace/$1';
$route['smarks/(:any)'] = 'trainers/smarks/$1';
$route['sassignments/(:any)'] = 'trainers/sassignments/$1';
$route['trainers-all-courses'] = 'trainers/all_courses';
$route['trainers-help'] = 'trainers/trainers_help';
$route['trainers-helpanswer/(:any)'] = 'trainers/trainers_help_reply/$1';
$route['trainers-testimonials'] = 'trainers/trainers_testimonials';
$route['trainers-payment'] = 'trainers/trainers_payment';
$route['trainers-edit-profile'] = 'trainers/trainers_edit_profile';
//paid info
$route['trainers-courses'] = 'trainers/trainers_courses';
$route['trainers-student'] = 'trainers/trainers_student';
$route['trainers-material'] = 'trainers/trainers_material';
$route['trainers-assignments'] = 'trainers/trainers_assignments';
$route['trainers-test'] = 'trainers/trainers_test';
$route['trainers-leave-testimony'] = 'trainers/trainers_leave_testimony';
$route['trainers-certificate'] = 'trainers/trainers_certificate';
$route['gcertificate/(:any)'] = 'trainers/gcertificate/$1';
//////////////////////////////
$route['batchlist'] = 'Course_schedule/india';
$route['adminlogin'] = 'main/login';
$route['captcha'] = 'Captcha';
$route['dashboard'] = 'dashboard/index';
$route['download'] = 'dashboard/download';
$route['allusers'] = 'users/allusers';
$route['students'] = 'users/students';
$route['teachers'] = 'users/teachers';
//////////////////////////////fetch fomr values

$route['fcourse/(:any)'] = 'course_details/fcourse/$1';

////////ADMIN FORMS ENDS
$route['pendingmycourse'] = 'mycourses/pending_mycourse';
$route['mycourses/status/(:any)/(:any)'] = 'mycourses/status/$1/$2';
$route['bookacall/status/(:any)/(:any)'] = 'bookacall/status/$1/$2';
$route['bookademo/status/(:any)/(:any)'] = 'bookademo/status/$1/$2';
$route['contacts/status/(:any)/(:any)'] = 'contacts/status/$1/$2';
$route['internship/status/(:any)/(:any)'] = 'internship/status/$1/$2';
$route['career/status/(:any)/(:any)'] = 'career/status/$1/$2';
$route['testimony/status/(:any)/(:any)'] = 'testimony/status/$1/$2';
// $route['404_override'] = 'frontend';
$route['404_override'] = '';
$route['403_override'] = 'frontend';
$route['translate_uri_dashes'] = TRUE;
