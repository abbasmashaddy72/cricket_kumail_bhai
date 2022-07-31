<?php

return [

    /*
    |--------------------------------------------------------------------------
    | The name of the permissions column
    |--------------------------------------------------------------------------
    |
    | This is the name of the column where permissions are stored. By default
    | this is set to "permissions", but it can be anything you like.
    |
    */

    'column' => 'permissions',

    /*
    |--------------------------------------------------------------------------
    | Defined permissions
    |--------------------------------------------------------------------------
    |
    | Only the permissions defined in this array are permitted. This gives
    | you a single source of truth and avoids errors. Permission names can
    | be anything you like and you can provide a description.
    |
    */

    'permissions' => [
        'dashboard', // Added Controller, SideMenu
        'homepage', // Added SliderController, Controller, FeatureController, CountController, SliderForm, Form, FeatureForm, CountForm, SliderAction, FeatureAction
        'book_appointment', // Added Controller, SideMenu
        'feedback', // Added Controller, SideMenu
        'contact_us', // Added Controller, SideMenu
        'department_list', // Added Controller, SideMenu
        'department_add', // Added Controller, Form
        'department_edit', // Added Controller, Form, Action
        'department_view', // Added Controller, Action
        'department_delete', // Added Action
        'service_list', // Added Controller, SideMenu
        'service_add', // Added Controller, Form
        'service_edit', // Added Controller, Form, Action
        'service_view', // Added Controller, Action
        'service_delete', // Added Action
        'review_list', // Added Controller, SideMenu
        'review_add', // Added Controller, Form
        'review_edit', // Added Controller, Form, Action
        'review_view', // Added Controller, Action
        'review_delete', // Added Action
        'doctor_list', // Added Controller, SideMenu
        'doctor_add', // Added Controller, From
        'doctor_edit', // Added Controller, From, Action
        'doctor_view', // Added Controller, Action
        'doctor_delete', // Added Action
        'blog_list', // Added Controller, SideMenu
        'blog_add', // Added Controller, Form
        'blog_edit', // Added Controller, Form, Action
        'blog_view', // Added Controller, Action
        'blog_delete', // Added Action
        'package_list', // Added Controller, SideMenu
        'package_add', // Added Controller, Form
        'package_edit', // Added Controller, Form, Action
        'package_view', // Added Controller, Action
        'package_delete', // Added Action
        'package_list_list', // Added Controller, SideMenu
        'package_list_add', // Added Controller, Form
        'package_list_edit', // Added Controller, Form, Action
        'package_list_view', // Added Controller, Action
        'package_list_delete', // Added Action
        'insurance_list', // Added Controller, SideMenu
        'insurance_add', // Added Controller, Form
        'insurance_edit', // Added Controller, Form, Action
        'insurance_view', // Added Controller, Action
        'insurance_delete', //Added Action
        'terms', // Added Controller, Form, SideMenu
        'privacy', // Added Controller, Form, SideMenu
        'career', // Added Controller, Form, SideMenu
        'user_list', // Added Controller, SideMenu
        'user_add', // Added Controller, Form
        'user_edit', // Added Controller, Form, Action
        'user_view', // Added Controller, Action
        'user_delete', // Added Action
        'user_permissions_edit', // Added Controller, Action
        'gallery', // Added Routes, SideMenu
        'log_viewer' // Added ENV, SideMenu
    ],

    /*
    |--------------------------------------------------------------------------
    | Permission driver
    |--------------------------------------------------------------------------
    |
    | The permission driver feature allows you to specify how permissions
    | are sourced. By default, the provided "ArrayDriver" will source
    | permissions from this file, however you can provide your own custom
    | driver to source permissions from a database, or an API endpoint. See
    | the README.md for details on creating custom drivers.
    |
    */

    'driver' => TPG\Deadbolt\Drivers\ArrayDriver::class,

];
