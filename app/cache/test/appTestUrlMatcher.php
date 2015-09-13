<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appTestUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appTestUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // gpa_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gpa_homepage')), array (  '_controller' => 'GPABundle\\Controller\\DefaultController::indexAction',));
        }

        // gpa_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'gpa_home');
            }

            return array (  '_controller' => 'GPABundle\\Controller\\DefaultController::indexAction',  '_route' => 'gpa_home',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // gpa_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'GPABundle\\Controller\\LoginController::indexAction',  '_route' => 'gpa_login',);
            }

            // gpa_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'GPABundle\\Controller\\LogoutController::logoutAction',  '_route' => 'gpa_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/user_registation')) {
            // gpa_user_registration_form
            if ($pathinfo === '/user_registation') {
                return array (  '_controller' => 'GPABundle\\Controller\\DefaultController::userRegistrationFormAction',  '_route' => 'gpa_user_registration_form',);
            }

            // gpa_user_registration
            if ($pathinfo === '/user_registation/status') {
                return array (  '_controller' => 'GPABundle\\Controller\\DefaultController::userRegistrationAction',  '_route' => 'gpa_user_registration',);
            }

        }

        if (0 === strpos($pathinfo, '/student')) {
            // student_dashboard
            if (rtrim($pathinfo, '/') === '/student') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'student_dashboard');
                }

                return array (  '_controller' => 'GPABundle\\Controller\\StudentController::indexAction',  '_route' => 'student_dashboard',);
            }

            if (0 === strpos($pathinfo, '/student/p')) {
                if (0 === strpos($pathinfo, '/student/profile')) {
                    // student_profile
                    if (rtrim($pathinfo, '/') === '/student/profile') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'student_profile');
                        }

                        return array (  '_controller' => 'GPABundle\\Controller\\StudentController::profileAction',  '_route' => 'student_profile',);
                    }

                    if (0 === strpos($pathinfo, '/student/profile/edit_')) {
                        // student_change_details
                        if (rtrim($pathinfo, '/') === '/student/profile/edit_details') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'student_change_details');
                            }

                            return array (  '_controller' => 'GPABundle\\Controller\\StudentController::changeDetailsAction',  '_route' => 'student_change_details',);
                        }

                        // student_change_password
                        if (rtrim($pathinfo, '/') === '/student/profile/edit_pass') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'student_change_password');
                            }

                            return array (  '_controller' => 'GPABundle\\Controller\\StudentController::changePasswordAction',  '_route' => 'student_change_password',);
                        }

                    }

                    // student_view_grades
                    if (rtrim($pathinfo, '/') === '/student/profile/view_grades') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'student_view_grades');
                        }

                        return array (  '_controller' => 'GPABundle\\Controller\\StudentController::viewGradesAction',  '_route' => 'student_view_grades',);
                    }

                }

                if (0 === strpos($pathinfo, '/student/performance_analysis/gpa_')) {
                    // student_gpa_analysis
                    if (rtrim($pathinfo, '/') === '/student/performance_analysis/gpa_analysis') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'student_gpa_analysis');
                        }

                        return array (  '_controller' => 'GPABundle\\Controller\\StudentController::gpaAnalysisAction',  '_route' => 'student_gpa_analysis',);
                    }

                    // student_gpa_compare
                    if (rtrim($pathinfo, '/') === '/student/performance_analysis/gpa_compare') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'student_gpa_compare');
                        }

                        return array (  '_controller' => 'GPABundle\\Controller\\StudentController::gpaCompareAction',  '_route' => 'student_gpa_compare',);
                    }

                }

                // student_predict_gpa
                if (rtrim($pathinfo, '/') === '/student/profile/GPAprediction') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'student_predict_gpa');
                    }

                    return array (  '_controller' => 'GPABundle\\Controller\\StudentController::predictGPAAction',  '_route' => 'student_predict_gpa',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_dashboard
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_dashboard');
                }

                return array (  '_controller' => 'GPABundle\\Controller\\AdminController::indexAction',  '_route' => 'admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/profile')) {
                // admin_profile
                if ($pathinfo === '/admin/profile') {
                    return array (  '_controller' => 'GPABundle\\Controller\\AdminController::profileAction',  '_route' => 'admin_profile',);
                }

                if (0 === strpos($pathinfo, '/admin/profile/edit_')) {
                    // admin_change_details
                    if (rtrim($pathinfo, '/') === '/admin/profile/edit_details') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_change_details');
                        }

                        return array (  '_controller' => 'GPABundle\\Controller\\AdminController::changeDetailsAction',  '_route' => 'admin_change_details',);
                    }

                    // admin_change_password
                    if (rtrim($pathinfo, '/') === '/admin/profile/edit_pass') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_change_password');
                        }

                        return array (  '_controller' => 'GPABundle\\Controller\\AdminController::changePasswordAction',  '_route' => 'admin_change_password',);
                    }

                }

            }

            // admin_add_user
            if ($pathinfo === '/admin/add_users') {
                return array (  '_controller' => 'GPABundle\\Controller\\AdminController::addUserAction',  '_route' => 'admin_add_user',);
            }

            // admin_check_user_availability
            if ($pathinfo === '/admin/users/check_availability') {
                return array (  '_controller' => 'GPABundle\\Controller\\AdminController::checkUserAvailabilityAction',  '_route' => 'admin_check_user_availability',);
            }

            // admin_add_user_submit
            if ($pathinfo === '/admin/add_users/registration') {
                return array (  '_controller' => 'GPABundle\\Controller\\AdminController::userRegistrationAdminAction',  '_route' => 'admin_add_user_submit',);
            }

            // admin_view_users
            if ($pathinfo === '/admin/view_users') {
                return array (  '_controller' => 'GPABundle\\Controller\\AdminController::viewUsersAction',  '_route' => 'admin_view_users',);
            }

            // admin_register_users
            if ($pathinfo === '/admin/register_users') {
                return array (  '_controller' => 'GPABundle\\Controller\\AdminController::registerUsersAction',  '_route' => 'admin_register_users',);
            }

            if (0 === strpos($pathinfo, '/admin/view_users')) {
                // admin_get_ordered_unreg_userlist
                if ($pathinfo === '/admin/view_users/unreg/userList') {
                    return array (  '_controller' => 'GPABundle\\Controller\\AdminController::getArrangedUserListAction',  '_route' => 'admin_get_ordered_unreg_userlist',);
                }

                // admin_register_users_confirm
                if ($pathinfo === '/admin/view_users/registration/confirm') {
                    return array (  '_controller' => 'GPABundle\\Controller\\AdminController::confirmRegistrationAction',  '_route' => 'admin_register_users_confirm',);
                }

                // admin_ajax_view_users
                if ($pathinfo === '/admin/view_users/ajax/search_results') {
                    return array (  '_controller' => 'GPABundle\\Controller\\AdminController::searchUserAjaxAction',  '_route' => 'admin_ajax_view_users',);
                }

                // admin_user_profile_view
                if (preg_match('#^/admin/view_users/(?P<indexNum>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_profile_view')), array (  '_controller' => 'GPABundle\\Controller\\AdminController::userProfileViewAction',));
                }

                // admin_user_profile_change_details
                if (preg_match('#^/admin/view_users/(?P<indexNum>[^/]++)/edit_details/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_user_profile_change_details');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_profile_change_details')), array (  '_controller' => 'GPABundle\\Controller\\AdminController::changeDetailsAction',));
                }

                // admin_user_profile_change_password
                if (preg_match('#^/admin/view_users/(?P<indexNum>[^/]++)/edit_pass/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_user_profile_change_password');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_profile_change_password')), array (  '_controller' => 'GPABundle\\Controller\\AdminController::changePasswordAction',));
                }

                // admin_drop_user
                if ($pathinfo === '/admin/view_users/drop/user') {
                    return array (  '_controller' => 'GPABundle\\Controller\\AdminController::dropUserAction',  '_route' => 'admin_drop_user',);
                }

                if (0 === strpos($pathinfo, '/admin/view_users/st')) {
                    // admin_view_user_stats
                    if (0 === strpos($pathinfo, '/admin/view_users/stats') && preg_match('#^/admin/view_users/stats/(?P<indexNum>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_view_user_stats')), array (  '_controller' => 'GPABundle\\Controller\\AdminController::viewUserStatsAction',));
                    }

                    // admin_view_student_stats
                    if (0 === strpos($pathinfo, '/admin/view_users/student/stats') && preg_match('#^/admin/view_users/student/stats/(?P<indexNum>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_view_student_stats')), array (  '_controller' => 'GPABundle\\Controller\\AdminController::viewStudentStatsAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/view_users/lec')) {
                    // admin_view_lec_stats
                    if (0 === strpos($pathinfo, '/admin/view_users/lec/stats') && preg_match('#^/admin/view_users/lec/stats/(?P<indexNum>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_view_lec_stats')), array (  '_controller' => 'GPABundle\\Controller\\AdminController::viewLecStatsAction',));
                    }

                    // admin_get_ordered_lec_courselist
                    if ($pathinfo === '/admin/view_users/lec/courseList') {
                        return array (  '_controller' => 'GPABundle\\Controller\\AdminController::getArrangedCourseListAction',  '_route' => 'admin_get_ordered_lec_courselist',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/add_course')) {
                // admin_add_course
                if ($pathinfo === '/admin/add_course') {
                    return array (  '_controller' => 'GPABundle\\Controller\\AdminController::addCourseAction',  '_route' => 'admin_add_course',);
                }

                // admin_check_course_availability
                if ($pathinfo === '/admin/add_course/check_availability') {
                    return array (  '_controller' => 'GPABundle\\Controller\\AdminController::checkCourseAvailabilityAction',  '_route' => 'admin_check_course_availability',);
                }

            }

            // admin_check_dept_lec_list
            if ($pathinfo === '/admin/dept/lec_list') {
                return array (  '_controller' => 'GPABundle\\Controller\\AdminController::deptLecListAction',  '_route' => 'admin_check_dept_lec_list',);
            }

            if (0 === strpos($pathinfo, '/admin/course')) {
                // admin_create_course
                if ($pathinfo === '/admin/course/create') {
                    return array (  '_controller' => 'GPABundle\\Controller\\AdminController::createCourseAction',  '_route' => 'admin_create_course',);
                }

                // admin_add_enrolment
                if ($pathinfo === '/admin/course_enrolments/add_new') {
                    return array (  '_controller' => 'GPABundle\\Controller\\AdminController::addEnrolmentAction',  '_route' => 'admin_add_enrolment',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/student')) {
                // admin_check_student_availability
                if ($pathinfo === '/admin/student/check_availability') {
                    return array (  '_controller' => 'GPABundle\\Controller\\AdminController::checkStudentAvailabilityAction',  '_route' => 'admin_check_student_availability',);
                }

                // admin_get_available_course_list
                if ($pathinfo === '/admin/student/get/available_course_list') {
                    return array (  '_controller' => 'GPABundle\\Controller\\AdminController::availableCourseListAction',  '_route' => 'admin_get_available_course_list',);
                }

            }

            // admin_confirm_enrolment
            if ($pathinfo === '/admin/course_enrolments/confirm') {
                return array (  '_controller' => 'GPABundle\\Controller\\AdminController::confirmCourseEnrolmentAction',  '_route' => 'admin_confirm_enrolment',);
            }

            // admin_add_results
            if ($pathinfo === '/admin/manage_results/add_results') {
                return array (  '_controller' => 'GPABundle\\Controller\\AdminController::addResultsAction',  '_route' => 'admin_add_results',);
            }

            // admin_get_enrolled_course_list_with_no_results
            if ($pathinfo === '/admin/student/enrolled_list/without_results') {
                return array (  '_controller' => 'GPABundle\\Controller\\AdminController::getEnrolledCourseListWithNoResultsAction',  '_route' => 'admin_get_enrolled_course_list_with_no_results',);
            }

            if (0 === strpos($pathinfo, '/admin/manage_results')) {
                // admin_submit_course_results
                if ($pathinfo === '/admin/manage_results/submit_results') {
                    return array (  '_controller' => 'GPABundle\\Controller\\AdminController::submitCourseResultAction',  '_route' => 'admin_submit_course_results',);
                }

                // admin_view_course
                if ($pathinfo === '/admin/manage_results/view_course') {
                    return array (  '_controller' => 'GPABundle\\Controller\\AdminController::viewCourseAction',  '_route' => 'admin_view_course',);
                }

            }

            // admin_ajax_view_courses
            if ($pathinfo === '/admin/view_course/ajax/search_results') {
                return array (  '_controller' => 'GPABundle\\Controller\\AdminController::searchCourseAjaxAction',  '_route' => 'admin_ajax_view_courses',);
            }

            if (0 === strpos($pathinfo, '/admin/manage_')) {
                if (0 === strpos($pathinfo, '/admin/manage_course')) {
                    // admin_edit_course
                    if (0 === strpos($pathinfo, '/admin/manage_course/edit') && preg_match('#^/admin/manage_course/edit/(?P<courseID>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_edit_course')), array (  '_controller' => 'GPABundle\\Controller\\AdminController::editCourseAction',));
                    }

                    // admin_delete_course
                    if (rtrim($pathinfo, '/') === '/admin/manage_course/delete') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_delete_course');
                        }

                        return array (  '_controller' => 'GPABundle\\Controller\\AdminController::deleteCourseAction',  '_route' => 'admin_delete_course',);
                    }

                    // admin_view_course_results
                    if (0 === strpos($pathinfo, '/admin/manage_course/results') && preg_match('#^/admin/manage_course/results/(?P<courseID>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_view_course_results')), array (  '_controller' => 'GPABundle\\Controller\\AdminController::viewCourseResultsAction',));
                    }

                    // admin_change_course_details
                    if (0 === strpos($pathinfo, '/admin/manage_course/change_details') && preg_match('#^/admin/manage_course/change_details/(?P<currentCourseID>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_change_course_details')), array (  '_controller' => 'GPABundle\\Controller\\AdminController::changeCourseDetailsAction',));
                    }

                }

                // admin_view_student_results
                if ($pathinfo === '/admin/manage_results/view_student') {
                    return array (  '_controller' => 'GPABundle\\Controller\\AdminController::viewStudentResultsAction',  '_route' => 'admin_view_student_results',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/student')) {
                // admin_get_student_results
                if ($pathinfo === '/admin/student/get_results') {
                    return array (  '_controller' => 'GPABundle\\Controller\\AdminController::getStudentResultsAction',  '_route' => 'admin_get_student_results',);
                }

                // admin_edit_student_results
                if (0 === strpos($pathinfo, '/admin/student/edit_results') && preg_match('#^/admin/student/edit_results/(?P<courseID>[^/]++)/(?P<studentID>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_edit_student_results')), array (  '_controller' => 'GPABundle\\Controller\\AdminController::editStudentResultsAction',));
                }

                // admin_delete_student_results
                if (rtrim($pathinfo, '/') === '/admin/student/delete_results') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_delete_student_results');
                    }

                    return array (  '_controller' => 'GPABundle\\Controller\\AdminController::deleteStudentResultsAction',  '_route' => 'admin_delete_student_results',);
                }

                // admin_change_student_results
                if (rtrim($pathinfo, '/') === '/admin/student/change_results') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_change_student_results');
                    }

                    return array (  '_controller' => 'GPABundle\\Controller\\AdminController::changeStudentResultAction',  '_route' => 'admin_change_student_results',);
                }

            }

        }

        // lecturer_dashboard
        if (rtrim($pathinfo, '/') === '/lec') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'lecturer_dashboard');
            }

            return array (  '_controller' => 'GPABundle:Lecturer:index',  '_route' => 'lecturer_dashboard',);
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
