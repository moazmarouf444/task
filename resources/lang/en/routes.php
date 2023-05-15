<?php
return [
    'admins' => [
        'index'            => 'Show Admins',
        'show'             => 'Show single Admin',
        'destroy'          => 'Delete Admin',
        'destroy_selected' => 'Delete selected Admins',

    ],
    'admin'  => [
        'admin' => 'Dashboard',


        'settings' => [
            'index'               => 'Settings',
            'update'              => 'Update Settings',
            'update_profile'      => 'Update Profile',
            'update_password'     => 'Update Password',
            'store_social_media'  => 'Store Social Media',
            'update_social_media' => 'Update Store Social Media',
            'delete_social_media' => 'Delete Store Social Media',

            'update_smtp' => 'Update smtp',
            'update_sms'  => ' Update SMS',
            'update_fcm'  => 'Update fcm',
        ],

        'reports' => [
            'index'            => 'Show Reports',
            'destroy'          => 'Delete Report',
            'destroy_selected' => 'Delete selected reports',
        ],

        'inbox' => [
            'index'                             => 'Show Inboxes',
            'show'                              => 'Show single Inbox',
            'destroy'                           => 'Delete Inbox',
            'destroy_selected'                  => 'Delete selected inboxes',
            'reply_sms_to_single_user'          => 'Sms Reply to single user',
            'reply_email_to_single_user'        => 'email Reply to single user ',
            'reply_notification_to_single_user' => 'Notification Reply to single user',
        ],

        'complains' => [
            'index'                             => 'عرض صفحة الشكاوي والمقترحات',
            'show'                              => 'عرض الشكوي كاملة',
            'destroy'                           => 'إضافة الشكاوي والمقترحات',
            'destroy_selected'                  => 'حذف المحدد من صفحة الشكاوي والمقترحات ',
            'change_status'                     => 'تغيير حالة الشكوي ',
            'reply_sms_to_single_user'          => 'الرد برسالة sms ',
            'reply_email_to_single_user'        => 'الرد برسالة بإيميل ',
            'reply_notification_to_single_user' => 'الرد برسالة بإشعار ',
        ],

        'users' => [
            'index'            => 'عرض الكل',
            'show'             => 'عرض العضو ',
            'create'           => 'إضافة العضو ',
            'store'            => 'تخزين العضو ',
            'block_user'       => 'حظر عضو ',
            'un_block_user'    => 'فك حظر عضو ',
            'edit'             => 'عرض صفحه تعديل العضو ',
            'update'           => 'تعديل العضو ',
            'blocked'          => 'عرض صفحه الأعضاء المحظورين ',
            'downloadUsers'    => 'تحميل ك Excel ',
            'destroy'          => 'حذف ',
            'destroy_selected' => 'حذف متعدد ',
            'active'           => 'عرض صفحه الأعضاء النشيطين ',
            'inactive'         => 'عرض صفحه الأعضاء الغير النشيطين',
            'male'             => 'عرض صفحه الأعضاء الذكور ',
            'female'           => 'عرض صفحه الأعضاء الإناث ',


            'send_sms_to_all'                  => 'إرسال رسالة sms الي جميع الأعضاء',
            'send_email_to_all'                => 'إرسال email الي جميع الأعضاء',
            'send_notification_to_all'         => 'إرسال إشعار الي جميع الأعضاء',
            'send_sms_to_single_user'          => 'إرسال رسالة sms الي هذا العضو',
            'send_email_to_single_user'        => 'إرسال رسالة email الي هذا العضو',
            'send_notification_to_single_user' => 'إرسال إشعار الي الي هذا العضو',
        ],

        'notification' => [
            'create'             => 'عرض الإشعارات',
            'store_sms'          => 'إرسال رسالة sms',
            'store_email'        => 'إرسال رسالة email',
            'store_notification' => 'إرسال إشعار',
        ],

        'countries' => [
            'index'             => 'عرض الدول',
            'create'            => 'إضافة دولة',
            'store'             => 'إضافة دولة',
            'downloadCountries' => 'تحميل الدول كملف Excel',
            'show'              => 'عرض الدولة',
            'edit'              => 'تعديل الدولة',
            'update'            => 'تعديل الدولة',
            'destroy'           => 'حذف الدولة',
            'destroy_selected'  => 'حذف الدول المحددة',
            'regions'           => 'عرض المناطق التابعة لها',
            'regions_create'    => 'إضافة منطقة',
        ],

        'regions' => [
            'index'            => 'عرض المناطق',
            'create'           => 'إضافة المنطقه',
            'store'            => 'إضافة المنطقه',
            'downloadCities'   => 'تحميل المناطق كملف Excel',
            'show'             => 'عرض المنطقه',
            'edit'             => 'تعديل المنطقه',
            'update'           => 'تعديل المنطقه',
            'destroy'          => 'حذف المنطقه',
            'destroy_selected' => 'حذف المناطق المحددة',
            'cities'           => 'عرض المدن التابعة لها',
            'cities_create'    => 'إضافة مدينة',
        ],


        'cities' => [
            'index'            => 'عرض المدن',
            'create'           => 'إضافة مدينه',
            'store'            => 'إضافة مدينه',
            'downloadCities'   => 'تحميل المناطق كملف Excel',
            'show'             => 'عرض مدينه',
            'edit'             => 'تعديل مدينه',
            'update'           => 'تعديل مدينه',
            'destroy'          => 'حذف مدينه',
            'destroy_selected' => 'حذف المدن المحددة',
            'districts'        => 'عرض الأحياء التابعة لها',
            'districts_create' => 'إضافة حي',
        ],

        'districts' => [
            'index'            => 'عرض الاحياء',
            'create'           => 'إ حي',
            'store'            => 'إضافة حي',
            'downloadCities'   => 'تحميل المناطق كملف Excel',
            'show'             => 'عرض حي',
            'edit'             => 'تعديل حي',
            'update'           => 'تعديل حي',
            'destroy'          => 'حذف حي',
            'destroy_selected' => 'حذف الاحياء المحددة',
        ],

        'ads' => [
            'index'            => 'عرض الاعلانات',
            'create'           => 'عرض صفحه إضافة الاعلان',
            'store'            => 'إضافة اعلان',
            'edit'             => 'عرض صفحه تعديل الاعلان',
            'update'           => 'تعديل اعلان',
            'destroy'          => 'حذف اعلان',
            'destroy_selected' => 'حذف الاعلانات المحددة',
        ],

        'faqs' => [
            'index'            => 'عرض صفحه الأسئلة الشائعة',
            'create'           => 'عرض صفحه إضافة الأسئلة الشائعة',
            'store'            => 'إضافة  الأسئلة الشائعة',
            'edit'             => 'عرض صفحه تعديل الأسئلة الشائعة',
            'update'           => 'تعديل الأسئلة الشائعة',
            'destroy'          => 'حذف هذا السؤال',
            'destroy_selected' => 'حذف الأسئلة الشائعة المحددة',
        ],


        'permissions' => [
            'permissions'      => 'الصلاحيات',
            'index'            => 'عرض صفحه الصلاحيات',
            'create'           => 'عرض صفحه إضافة الصلاحيات',
            'store'            => 'إضافة صلاحيه',
            'show'             => 'عرض الصلاحيات الخاصة بدور معين ',
            'edit'             => 'عرض صفحه تعديل الصلاحيات',
            'update'           => 'تعديل الصلاحيات',
            'destroy'          => 'حذف صلاحيه',
            'destroy_selected' => 'حذف الصلاحيات المحددة',
        ],
        #new_routes_trans_here

    ]

];
