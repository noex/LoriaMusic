<?php

namespace EnhancedProxy96881c9f_541efc166f8577e5ebfce132290480d81073446f\__CG__\ByExample\DemoBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class UserRestController__JMSInjector
{
    public static function inject($container) {
        require_once '/Applications/MAMP/htdocs/RestIndus/MultimediaBack/app/cache/prod/jms_diextra/proxies/EnhancedProxy96881c9f_541efc166f8577e5ebfce132290480d81073446f-__CG__-ByExample-DemoBundle-Controller-UserRestController.php';
        $c = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('ByExample\\DemoBundle\\Controller\\UserRestController' => array('getUserAction' => array(0 => 'security.access.method_interceptor'), 'getConnectedUserAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxy96881c9f_1b792b6620b9b37a2d0209b9293382972075d48e\__CG__\ByExample\DemoBundle\Controller\UserRestController();
        $instance->__CGInterception__setLoader($c);
        return $instance;
    }
}