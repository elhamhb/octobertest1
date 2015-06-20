<?php

return [
    'auth' => [
        'title' => 'بخش مدیریت',
    ],
    'field' => [
        'invalid_type'              => 'نوع فیلد :type نا معتبر می باشد.',
        'options_method_not_exists' => 'کلاس مدل :model باید شامل متد :method() باشد و گزینه های مورد نیاز ":field" را بازگرداند.',
    ],
    'widget' => [
        'not_registered' => "کلاس مربوط به ابزارک ':name' به سیستم معرفی نشده است",
        'not_bound'      => "ابزارکی تعریف شده در کلاس با نام ':name' به هیچ کنترلری ارتباط داده نشده است",
    ],
    'page' => [
        'untitled'      => "بدون عنوان",
        'access_denied' => [
            'label'    => "شما مجوز دسترسی ندارید",
            'help'     => "شما مجوز لازم براس دسترسی به این صفحه را ندارید.",
            'cms_link' => "بازگشت به مدیریت",
        ],
    ],
    'partial' => [
        'not_found_name' => "بخشی با نام ':name' یافت نشد.",
    ],
    'account' => [
        'sign_out'             => 'خروج',
        'login'                => 'ورود',
        'reset'                => 'تنظیم مجدد',
        'restore'              => 'بازگرداندن',
        'login_placeholder'    => 'ورود',
        'password_placeholder' => 'کلمه عبور',
        'forgot_password'      => "کلمه عبور خود را فراموش کرده اید؟",
        'enter_email'          => "پست الکترونیکی خود را وارد نمایید",
        'enter_login'          => "نام کاربری خود را وارد نمایید",
        'email_placeholder'    => "پست الکترونیکی",
        'enter_new_password'   => "کلمه عبور جدید را وارد نمایید",
        'password_reset'       => "بازگرداندن کلمه عبور",
        'restore_success'      => "یک نامه به پست الکترونیکی شما جهت شروع عملیات بارگرداندن کلمه عبور ارسال شد.",
        'restore_error'        => "کاربری با نام کاریری ':login' یافت نشد.",
        'reset_success'        => "کلمه عبور شما بارگردانی شد و شما هم اکنون میتوانید وارد سیستم شوید.",
        'reset_error'          => "اطلاعات رمز عبور نا معتبر است , لطفا مجددا تلاش نمایید!",
        'reset_fail'           => "عدم توانایی در بازگرداندن کلمه عبور شما!",
        'apply'                => 'اعمال کردن',
        'cancel'               => 'انصراف',
        'delete'               => 'حذف',
        'ok'                   => 'تایید',
    ],
    'dashboard' => [
        'menu_label'                   => 'میز کار',
        'widget_label'                 => 'ابزارک',
        'widget_width'                 => 'عرض',
        'full_width'                   => 'عرض کامل',
        'add_widget'                   => 'افزودن ابزارک',
        'widget_inspector_title'       => 'تنظیمات ابزارک',
        'widget_inspector_description' => 'پیکر بندی ابزارک گزارشگیری',
        'widget_columns_label'         => 'عرض :columns',
        'widget_columns_description'   => 'عرض ابزارک باید عددی مابین 1 تا 10 باشد.',
        'widget_columns_error'         => 'لطفا عرض ابزارک را عددی مابین 1 تا 10 وارد نمایید.',
        'columns'                      => '{1} ستون|[2,Inf] ستون ها',
        'widget_new_row_label'         => 'تحمیل سطر جدید',
        'widget_new_row_description'   => 'افزودن ابزارک در سطر جدید.',
        'widget_title_label'           => 'عنوان ابزارک',
        'widget_title_error'           => 'گزینه "عنوان ابزارک" حتما باید وارد شود.',
        'status'                       => [
            'widget_title_default' => 'وضعیت سیستم',
            'online'               => 'online',
            'update_available'     => '{0} به روز رسانی موجود است!|{1} به روز رسانی موجود است!|[2,Inf] به روز رسانی موجود است!',
        ]
    ],
    'user' => [
        'name'                  => 'مدیریت',
        'menu_label'            => 'مدیران',
        'menu_description'      => 'مدیریت کاربران , گروه ها و دسترسی های مدیران.',
        'list_title'            => 'مدیریت مدیران',
        'new'                   => 'مدیر جدید',
        'login'                 => "ورود",
        'first_name'            => "نام",
        'last_name'             => "نام خانوادگی",
        'full_name'             => "نام کامل",
        'email'                 => "پست الکترونیکی",
        'groups'                => "گروه ها",
        'groups_comment'        => "مختص گروهی که این شخص به آن تعلق دارد.",
        'avatar'                => "نمایه",
        'password'              => "کلمه عبور",
        'password_confirmation' => "تکرار کلمه عبور",
        'superuser'             => "کاربر ممتاز",
        'superuser_comment'     => "اگر میخواهید این شخص به تمام قسمت ها دسترسی داشته باشد این گزینه را فعال نمایید.",
        'send_invite'           => 'دعوت نامه توسط پست الکترونیکی ارسال شود',
        'send_invite_comment'   => 'جهت ارسال دعوت نامه به پست الکترونیکی این شخص این گزینه را فعال نمایید',
        'delete_confirm'        => 'آیا از حذف این مدیر اطمینان دارید؟',
        'return'                => 'بازگشت به لیست مدیران',
        'allow'                 => 'اجازه دسترسی',
        'inherit'               => 'ارث بری',
        'deny'                  => 'عدم دسترسی',
        'group'                 => [
            'name'           => 'گروه',
            'name_field'     => 'نام',
            'menu_label'     => 'گروه ها',
            'list_title'     => 'مدیریت گروه ها',
            'new'            => 'گروه مدیریت جدید',
            'delete_confirm' => 'آیا از حذف این گروه از مدیران اطمینان دارید?',
            'return'         => 'بازگشت به لیست گروه ها',
        ],
        'preferences' => [
            'not_authenticated' => 'هیچ کاربر ثبت شده ای جهت بارگذاری یا ذخیره تنظیمات وجود ندارد.'
        ]
    ],
    'list' => [
        'default_title'           => 'لیست',
        'search_prompt'           => 'جستجو...',
        'no_records'              => 'چیزی یافت نشد.',
        'missing_model'           => 'هیچ مدلی برای لیست استفاده شده در کلاس :class تعریف نشده است.',
        'missing_column'          => 'ستونی برای :columns تعریف نشده است.',
        'missing_columns'         => 'ستونی برای لیست عریف شده در :class موجود نیست.',
        'missing_definition'      => "در لیست تعریف شده ستونی برای ':field' موجود نیست.",
        'behavior_not_ready'      => 'لسیت مقدار دهی اولیه شده است ، لطفا بررسی نمایید که متد makeLists() در کنترلر خود فراخوانی کرده باشید.',
        'invalid_column_datetime' => "ستون ':column' از نوع شی تاریخ نمی باشد ، لطفا بررسی نمایید که این ستون در مدل از نوع تاریخ تعریف شده باشد.",
        'pagination'              => 'نمایش :from تا :to از :total مورد',
        'prev_page'               => 'صفحه قبل',
        'next_page'               => 'صفحه بعد',
        'loading'                 => 'در حال بارگذاری...',
        'setup_title'             => 'راه اندازی لیست',
        'setup_help'              => 'ستون هایی را که میخواهید مشاهده نمایید را انتخاب نمایید. میتوانید محل قرار گیری ستونها را با جابجا نمودن آنها به .',
        'records_per_page'        => 'مورد در هر صفحه',
        'records_per_page_help'   => 'تعداد موارد نمایش داده شده در هر صفحه را انتخاب نمایید. لطفا توجه نمایید نمایش تعداد زیادی از موارد در هر صفحه از کارایی سیستم میکاهد.'
    ],
    'fileupload' => [
        'attachment'        => 'فایل ضمیمه',
        'help'              => 'برای فایل ضمیمه عنوان و توضیح مختصری وارد نمایید.',
        'title_label'       => 'عنوان',
        'description_label' => 'توضیحات'
    ],
    'form' => [
        'create_title'                         => ":name جدید",
        'update_title'                         => "ویرایش :name",
        'preview_title'                        => "پیش نمایش :name",
        'create_success'                       => ':name با موفقیت ایجاد شد.',
        'update_success'                       => ':name با موفقیت به روز رسانی شد.',
        'delete_success'                       => ':name با موفقیت حذف شد.',
        'missing_id'                           => "رکورد مشخصه (ID) برای فرم انتخاب نشده است.",
        'missing_model'                        => 'مدلی برای فرن تعریف شده در کلاس :class مشخص نشده است.',
        'missing_definition'                   => "فرم مورد نظر شامل فیلدی برای ':field' نمی باشد.",
        'not_found'                            => 'فرمی با مشخصه :id یافت نشد.',
        'action_confirm'                       => "آیا اطمینان دارید؟",
        'create'                               => 'ایجاد',
        'create_and_close'                     => 'ایجاد و خروج',
        'creating'                             => 'در حال ایجاد...',
        'creating_name'                        => 'درحال ایجاد :name...',
        'save'                                 => 'ذخیره',
        'save_and_close'                       => 'ذخیره و خروج',
        'saving'                               => 'در حال ذخیره...',
        'saving_name'                          => 'درحال ذخیره :name...',
        'delete'                               => 'حذف',
        'deleting'                             => 'در حال حذف...',
        'deleting_name'                        => 'درحال حذف :name...',
        'undefined_tab'                        => 'متفرقه',
        'field_off'                            => 'خاموش',
        'field_on'                             => 'روشن',
        'add'                                  => 'افزودن',
        'apply'                                => 'اعمال',
        'cancel'                               => 'انصراف',
        'close'                                => 'خروج',
        'confirm'                              => 'تایید',
        'reload'                               => 'بارگذاری مجدد',
        'ok'                                   => 'تایید',
        'or'                                   => 'یا',
        'confirm_tab_close'                    => 'در صورت بستن این پنجره موارد ذخیره نشده از بین خواهند رفت. آیا از حذف شدن این پنجره اطمینان دارید؟',
        'behavior_not_ready'                   => 'فرم مور نظر مقدار دهی اولیه نشده است ، بررسی کنید که متد initForm() در کنترلر فرتخوانی شده باشد.',
        'select'                               => 'انتخاب',
        'select_all'                           => 'همه',
        'select_none'                          => 'هیچ',
        'select_placeholder'                   => 'لطفا انتخاب نمایید',
        'insert_row'                           => 'افزودن سطر',
        'delete_row'                           => 'حذف سطر',
        'concurrency_file_changed_title'       => 'فایل تغییر کرد',
        'concurrency_file_changed_description' => 'فایلی که شما ویرایش کردید توسط کاربر دیگری تغییر یافته و ذخیره شده است. شما میتوانید فایل را مجددا بارگذاری نمایید و تغییراتی که اعمال کرده اید را از دست بدهید و یا تغییرات اعمال شده توسط آن کاربر را بین برده و فایل را بازنویسی نمایید.',
    ],
    'relation' => [
        'missing_definition'    => "در ارتباط مورد نظر فیلد ':field' وجود ندارد.",
        'missing_model'         => "مدلی برای ارتباط موجود در :class وجود ندارد.",
        'invalid_action_single' => "این عمل در ارتباط یک تعرفه نمبتواند اعمال شود.",
        'invalid_action_multi'  => "این عمل در ارتباط چند طرفه نمیتواند اعمال شود.",
        'help'                  => "بر روی یک گزینه کلیک کنید تا افزوده شود",
        'related_data'          => "اعلاعات :name مرتبط",
        'add'                   => "افزودن",
        'add_selected'          => "افرودن انتخاب شده ها",
        'add_a_new'             => ":name جدید",
        'cancel'                => "انصراف",
        'add_name'              => "افزودن :name",
        'create'                => "ایجاد",
        'create_name'           => "ایجاد :name",
        'update'                => "بروز رسانی",
        'update_name'           => "بروز رسانی :name",
        'remove'                => "حذف",
        'remove_name'           => "حذف :name",
        'delete'                => "حذف",
        'delete_name'           => "حذف :name",
        'delete_confirm'        => "آیا اطمینان دارید؟",
    ],
    'model' => [
        'name'                   => "مدل",
        'not_found'              => "مدل ':class' با مشخصه ی :id یافت نشد",
        'missing_id'             => "مشخصه ای برای مودل مورد نظر یافت نشد.",
        'missing_relation'       => "مدل ':class' شامل تعریفی از ':relation'.",
        'invalid_class'          => "مدل :model استفاده شده در :class معتبر نمی باشد، این مدل باید از کلاس \Model ارث برده باشد.",
        'mass_assignment_failed' => "Mass assignment failed for Model attribute ':attribute'.",
    ],
    'warnings' => [
        'tips'             => 'راهنمایی پیکر بندی سیستم',
        'tips_description' => 'مشکلاتی در پیکربندی سیستم وجود دارد، شما باید تنظیمات زیر را بررسی نمایید.',
        'permissions'      => 'پوشه :name یا یکی از زیر پوشه های آن برای PHP قابل نوشتن نیستند. لطفا تنظیمات این پوشه را تعییر دهید.',
        'extension'        => 'افزونه PHP با نام :name نصب نشده است. لطفن این افزونه را نصب کرده و فعال نمایید.'
    ],
    'editor' => [
        'menu_label'            => 'تنظیمات ویرایشگر کد',
        'menu_description'      => 'سفارشی سازی ویرایشگر کد، مانند اندازه فونت و رنگ بندی آن.',
        'font_size'             => 'اندازه فونت',
        'tab_size'              => 'اندازه کاراکتر TAB',
        'use_hard_tabs'         => 'فاصله گذاری با استفاده از TAB',
        'code_folding'          => 'بلاک بندی کدها',
        'word_wrap'             => 'چیدمان کلمات',
        'highlight_active_line' => 'مشخص نودن خط فعال',
        'show_invisibles'       => 'نمایش کاراکتر های مخفی',
        'show_gutter'           => 'نمایش نشانگر',
        'theme'                 => 'رنگ بندی',
    ],
    'tooltips' => [
        'preview_website' => 'پیش نماسش وب سایت'
    ],
    'mysettings' => [
        'menu_label'       => 'تنظیمات من',
        'menu_description' => 'تنظیمات مربوط به حساب کاربری شما',
    ],
    'myaccount' => [
        'menu_label'       => 'حساب کاربری من',
        'menu_description' => 'به روز رسانی اطلاعات حساب کار بری شما مانند نام و کلمه عبور و ... .',
        'menu_keywords'    => 'ورود امن'
    ],
    'branding' => [
        'menu_label'       => 'شخصی سازی بخش مدیریت',
        'menu_description' => 'شخصی سازی بخش مدیریت مانند نام، رنگ ها  و لوگو.',
    ],
    'backend_preferences' => [
        'menu_label'       => 'تنظیمات مدیریت',
        'menu_description' => 'تنظیمات مربوط به زبان مربوط به قسمت مدیریت.',
        'locale'           => 'زبان',
        'locale_comment'   => 'زبان مورد نظر خود را انتخاب نمایید.',
    ],
    'access_log' => [
        'hint'             => 'این لیست نشاندهنده ورود کاربران مدیر به سیستم می باشد. موارد برای مدت :days روز نگهداری می شوند.',
        'menu_label'       => 'ثبت دسترسی ها',
        'menu_description' => 'نمایش لیست ورود موفقیت آمیز کاربران مدیر.',
        'created_at'       => 'زمان و تاریخ',
        'login'            => 'ورود',
        'ip_address'       => 'آدرس آی پی',
        'first_name'       => 'نام',
        'last_name'        => 'نام خوانوادگی',
        'email'            => 'پست الکترونیکی',
    ],
    'filter' => [
        'all' => 'همه'
    ],
    'layout' => [
        'direction' => 'rtl'
    ]
];