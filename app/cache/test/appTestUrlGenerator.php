<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appTestUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appTestUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gpa_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gpa_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gpa_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\LoginController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gpa_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\LogoutController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gpa_user_registration_form' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\DefaultController::userRegistrationFormAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user_registation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gpa_user_registration' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\DefaultController::userRegistrationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user_registation/status',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'student_dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\StudentController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/student/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'student_profile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\StudentController::profileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/student/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'student_change_details' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\StudentController::changeDetailsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/student/profile/edit_details/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'student_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\StudentController::changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/student/profile/edit_pass/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'student_view_grades' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\StudentController::viewGradesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/student/profile/view_grades/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'student_gpa_analysis' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\StudentController::gpaAnalysisAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/student/performance_analysis/gpa_analysis/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'student_gpa_compare' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\StudentController::gpaCompareAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/student/performance_analysis/gpa_compare/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'student_predict_gpa' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\StudentController::predictGPAAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/student/profile/GPAprediction/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_profile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::profileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_change_details' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::changeDetailsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/profile/edit_details/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/profile/edit_pass/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_add_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::addUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/add_users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_check_user_availability' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::checkUserAvailabilityAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/users/check_availability',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_add_user_submit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::userRegistrationAdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/add_users/registration',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_view_users' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::viewUsersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/view_users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_register_users' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::registerUsersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/register_users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_get_ordered_unreg_userlist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::getArrangedUserListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/view_users/unreg/userList',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_register_users_confirm' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::confirmRegistrationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/view_users/registration/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_ajax_view_users' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::searchUserAjaxAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/view_users/ajax/search_results',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_user_profile_view' => array (  0 =>   array (    0 => 'indexNum',  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::userProfileViewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'indexNum',    ),    1 =>     array (      0 => 'text',      1 => '/admin/view_users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_user_profile_change_details' => array (  0 =>   array (    0 => 'indexNum',  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::changeDetailsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit_details/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'indexNum',    ),    2 =>     array (      0 => 'text',      1 => '/admin/view_users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_user_profile_change_password' => array (  0 =>   array (    0 => 'indexNum',  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit_pass/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'indexNum',    ),    2 =>     array (      0 => 'text',      1 => '/admin/view_users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_drop_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::dropUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/view_users/drop/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_view_user_stats' => array (  0 =>   array (    0 => 'indexNum',  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::viewUserStatsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'indexNum',    ),    1 =>     array (      0 => 'text',      1 => '/admin/view_users/stats',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_view_student_stats' => array (  0 =>   array (    0 => 'indexNum',  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::viewStudentStatsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'indexNum',    ),    1 =>     array (      0 => 'text',      1 => '/admin/view_users/student/stats',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_view_lec_stats' => array (  0 =>   array (    0 => 'indexNum',  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::viewLecStatsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'indexNum',    ),    1 =>     array (      0 => 'text',      1 => '/admin/view_users/lec/stats',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_get_ordered_lec_courselist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::getArrangedCourseListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/view_users/lec/courseList',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_add_course' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::addCourseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/add_course',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_check_course_availability' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::checkCourseAvailabilityAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/add_course/check_availability',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_check_dept_lec_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::deptLecListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/dept/lec_list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_create_course' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::createCourseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/course/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_add_enrolment' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::addEnrolmentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/course_enrolments/add_new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_check_student_availability' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::checkStudentAvailabilityAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/student/check_availability',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_get_available_course_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::availableCourseListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/student/get/available_course_list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_confirm_enrolment' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::confirmCourseEnrolmentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/course_enrolments/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_add_results' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::addResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/manage_results/add_results',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_get_enrolled_course_list_with_no_results' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::getEnrolledCourseListWithNoResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/student/enrolled_list/without_results',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_submit_course_results' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::submitCourseResultAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/manage_results/submit_results',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_view_course' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::viewCourseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/manage_results/view_course',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_ajax_view_courses' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::searchCourseAjaxAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/view_course/ajax/search_results',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_edit_course' => array (  0 =>   array (    0 => 'courseID',  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::editCourseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'courseID',    ),    1 =>     array (      0 => 'text',      1 => '/admin/manage_course/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_delete_course' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::deleteCourseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/manage_course/delete/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_view_course_results' => array (  0 =>   array (    0 => 'courseID',  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::viewCourseResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'courseID',    ),    1 =>     array (      0 => 'text',      1 => '/admin/manage_course/results',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_change_course_details' => array (  0 =>   array (    0 => 'currentCourseID',  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::changeCourseDetailsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'currentCourseID',    ),    1 =>     array (      0 => 'text',      1 => '/admin/manage_course/change_details',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_view_student_results' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::viewStudentResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/manage_results/view_student',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_get_student_results' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::getStudentResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/student/get_results',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_edit_student_results' => array (  0 =>   array (    0 => 'courseID',    1 => 'studentID',  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::editStudentResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'studentID',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'courseID',    ),    2 =>     array (      0 => 'text',      1 => '/admin/student/edit_results',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_delete_student_results' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::deleteStudentResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/student/delete_results/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_change_student_results' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle\\Controller\\AdminController::changeStudentResultAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/student/change_results/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lecturer_dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GPABundle:Lecturer:index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/lec/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/app/example',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
