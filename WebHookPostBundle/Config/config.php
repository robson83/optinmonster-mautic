<?php
// plugins/HelloWorldBundle/Config/config.php

return array(
    'name'        => 'WebHook Support for Mautic',
    'description' => 'Allows you to receive a post from services like optinMonster',
    'author'      => 'Robson Dantas',
    'version'     => '1.0.0',
    'routes'   => array(
        'public' => array(
            'mautic_formwebhook' => array(
                'path'       => '/formwebhook/{token}',
                'controller' => 'WebHookPostBundle:WebHook:index'
            ),
        ),
    ),
);
