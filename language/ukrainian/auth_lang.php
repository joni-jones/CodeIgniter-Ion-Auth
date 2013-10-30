<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Auth Lang - English
*
* Author: Ben Edmunds
* 		  ben.edmunds@gmail.com
*         @benedmunds
*
* Author: Daniel Davis
*         @ourmaninjapan
*
* Translation: Ievgen Sentiabov
*         @joni-jones
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.09.2013
*
* Description:  English language file for Ion Auth example views
*
*/

// Errors
$lang['error_csrf'] = 'Форма не пройшла перевірку безпеки.';

// Login
$lang['login_heading']         = 'Авторизація';
$lang['login_subheading']      = 'Авторизуйтесь за допомогою вашої електронної пошти/ім\'я користувача та пароля.';
$lang['login_identity_label']  = 'Електронна пошта/Ім\'я користувача:';
$lang['login_password_label']  = 'Пароль:';
$lang['login_remember_label']  = 'Запам\'ятати мене:';
$lang['login_submit_btn']      = 'Вхід';
$lang['login_forgot_password'] = 'Втратили пароль?';

// Index
$lang['index_heading']           = 'Користувачі';
$lang['index_subheading']        = 'Доступний список користувачів.';
$lang['index_fname_th']          = 'Ім\'я';
$lang['index_lname_th']          = 'Прізвище';
$lang['index_email_th']          = 'Електронна Пошта';
$lang['index_groups_th']         = 'Групи';
$lang['index_status_th']         = 'Статус';
$lang['index_action_th']         = 'Дія';
$lang['index_active_link']       = 'Активний';
$lang['index_inactive_link']     = 'Неактивний';
$lang['index_create_user_link']  = 'Створити нового користувача';
$lang['index_create_group_link'] = 'Створити нову групу';

// Deactivate User
$lang['deactivate_heading']                  = 'Деактивувати Користувача';
$lang['deactivate_subheading']               = 'Ви впевнені у деактивації користувача \'%s\'';
$lang['deactivate_confirm_y_label']          = 'Так:';
$lang['deactivate_confirm_n_label']          = 'Ні:';
$lang['deactivate_submit_btn']               = 'Відправити';
$lang['deactivate_validation_confirm_label'] = 'підтвердження';
$lang['deactivate_validation_user_id_label'] = 'Ідентифікатор користувача';

// Create User
$lang['create_user_heading']                           = 'Створити Користувача';
$lang['create_user_subheading']                        = 'Будь-ласка, введіть інформацію про користувача.';
$lang['create_user_fname_label']                       = 'Ім\'я:';
$lang['create_user_lname_label']                       = 'Прізвище:';
$lang['create_user_company_label']                     = 'Компанія:';
$lang['create_user_email_label']                       = 'Електронна Пошта:';
$lang['create_user_phone_label']                       = 'Номер Телефону:';
$lang['create_user_password_label']                    = 'Пароль:';
$lang['create_user_password_confirm_label']            = 'Підтвердження Пароля:';
$lang['create_user_submit_btn']                        = 'Створити Користувача';
$lang['create_user_validation_fname_label']            = 'Ім\'я';
$lang['create_user_validation_lname_label']            = 'Прізвище';
$lang['create_user_validation_email_label']            = 'Електронна Адреса';
$lang['create_user_validation_phone1_label']           = 'Перша Частина Телефону';
$lang['create_user_validation_phone2_label']           = 'Друга Частина Телефону';
$lang['create_user_validation_phone3_label']           = 'Третя Частина Телефону';
$lang['create_user_validation_company_label']          = 'Назва Компанії';
$lang['create_user_validation_password_label']         = 'Пароль';
$lang['create_user_validation_password_confirm_label'] = 'Підтвердження Пароля';

// Edit User
$lang['edit_user_heading']                           = 'Edit User';
$lang['edit_user_subheading']                        = 'Please enter the users information below.';
$lang['edit_user_fname_label']                       = 'First Name:';
$lang['edit_user_lname_label']                       = 'Last Name:';
$lang['edit_user_company_label']                     = 'Company Name:';
$lang['edit_user_email_label']                       = 'Email:';
$lang['edit_user_phone_label']                       = 'Phone:';
$lang['edit_user_password_label']                    = 'Password: (if changing password)';
$lang['edit_user_password_confirm_label']            = 'Confirm Password: (if changing password)';
$lang['edit_user_groups_heading']                    = 'Member of groups';
$lang['edit_user_submit_btn']                        = 'Save User';
$lang['edit_user_validation_fname_label']            = 'First Name';
$lang['edit_user_validation_lname_label']            = 'Last Name';
$lang['edit_user_validation_email_label']            = 'Email Address';
$lang['edit_user_validation_phone1_label']           = 'First Part of Phone';
$lang['edit_user_validation_phone2_label']           = 'Second Part of Phone';
$lang['edit_user_validation_phone3_label']           = 'Third Part of Phone';
$lang['edit_user_validation_company_label']          = 'Company Name';
$lang['edit_user_validation_groups_label']           = 'Groups';
$lang['edit_user_validation_password_label']         = 'Password';
$lang['edit_user_validation_password_confirm_label'] = 'Password Confirmation';

// Create Group
$lang['create_group_title']                  = 'Create Group';
$lang['create_group_heading']                = 'Create Group';
$lang['create_group_subheading']             = 'Please enter the group information below.';
$lang['create_group_name_label']             = 'Group Name:';
$lang['create_group_desc_label']             = 'Description:';
$lang['create_group_submit_btn']             = 'Create Group';
$lang['create_group_validation_name_label']  = 'Group Name';
$lang['create_group_validation_desc_label']  = 'Description';

// Edit Group
$lang['edit_group_title']                  = 'Edit Group';
$lang['edit_group_saved']                  = 'Group Saved';
$lang['edit_group_heading']                = 'Edit Group';
$lang['edit_group_subheading']             = 'Please enter the group information below.';
$lang['edit_group_name_label']             = 'Group Name:';
$lang['edit_group_desc_label']             = 'Description:';
$lang['edit_group_submit_btn']             = 'Save Group';
$lang['edit_group_validation_name_label']  = 'Group Name';
$lang['edit_group_validation_desc_label']  = 'Description';

// Change Password
$lang['change_password_heading']                               = 'Change Password';
$lang['change_password_old_password_label']                    = 'Old Password:';
$lang['change_password_new_password_label']                    = 'New Password (at least %s characters long):';
$lang['change_password_new_password_confirm_label']            = 'Confirm New Password:';
$lang['change_password_submit_btn']                            = 'Change';
$lang['change_password_validation_old_password_label']         = 'Old Password';
$lang['change_password_validation_new_password_label']         = 'New Password';
$lang['change_password_validation_new_password_confirm_label'] = 'Confirm New Password';

// Forgot Password
$lang['forgot_password_heading']                 = 'Forgot Password';
$lang['forgot_password_subheading']              = 'Please enter your %s so we can send you an email to reset your password.';
$lang['forgot_password_email_label']             = '%s:';
$lang['forgot_password_submit_btn']              = 'Submit';
$lang['forgot_password_validation_email_label']  = 'Email Address';
$lang['forgot_password_username_identity_label'] = 'Username';
$lang['forgot_password_email_identity_label']    = 'Email';
$lang['forgot_password_email_not_found']         = 'No record of that email address.';

// Reset Password
$lang['reset_password_heading']                               = 'Change Password';
$lang['reset_password_new_password_label']                    = 'New Password (at least %s characters long):';
$lang['reset_password_new_password_confirm_label']            = 'Confirm New Password:';
$lang['reset_password_submit_btn']                            = 'Change';
$lang['reset_password_validation_new_password_label']         = 'New Password';
$lang['reset_password_validation_new_password_confirm_label'] = 'Confirm New Password';

// Activation Email
$lang['email_activate_heading']    = 'Activate account for %s';
$lang['email_activate_subheading'] = 'Please click this link to %s.';
$lang['email_activate_link']       = 'Activate Your Account';

// Forgot Password Email
$lang['email_forgot_password_heading']    = 'Reset Password for %s';
$lang['email_forgot_password_subheading'] = 'Please click this link to %s.';
$lang['email_forgot_password_link']       = 'Reset Your Password';

// New Password Email
$lang['email_new_password_heading']    = 'New Password for %s';
$lang['email_new_password_subheading'] = 'Your password has been reset to: %s';

