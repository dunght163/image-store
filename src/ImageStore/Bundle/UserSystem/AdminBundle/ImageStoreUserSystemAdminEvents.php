<?php

namespace ImageStore\Bundle\UserSystem\AdminBundle;

final class ImageStoreUserSystemAdminEvents
{
    const CHANGE_PASSWORD_INITIALIZE = 'image_store_user_system_admin.change_password.edit.initialize';
    const CHANGE_PASSWORD_SUCCESS = 'image_store_user_system_admin.change_password.edit.success';
    const CHANGE_PASSWORD_COMPLETED = 'image_store_user_system_admin.change_password.edit.completed';
    const GROUP_CREATE_INITIALIZE = 'image_store_user_system_admin.group.create.initialize';
    const GROUP_CREATE_SUCCESS = 'image_store_user_system_admin.group.create.success';
    const GROUP_CREATE_COMPLETED = 'image_store_user_system_admin.group.create.completed';
    const GROUP_DELETE_COMPLETED = 'image_store_user_system_admin.group.delete.completed';
    const GROUP_EDIT_INITIALIZE = 'image_store_user_system_admin.group.edit.initialize';
    const GROUP_EDIT_SUCCESS = 'image_store_user_system_admin.group.edit.success';
    const GROUP_EDIT_COMPLETED = 'image_store_user_system_admin.group.edit.completed';
    const PROFILE_EDIT_INITIALIZE = 'image_store_user_system_admin.profile.edit.initialize';
    const PROFILE_EDIT_SUCCESS = 'image_store_user_system_admin.profile.edit.success';
    const PROFILE_EDIT_COMPLETED = 'image_store_user_system_admin.profile.edit.completed';
    const REGISTRATION_INITIALIZE = 'image_store_user_system_admin.registration.initialize';
    const REGISTRATION_SUCCESS = 'image_store_user_system_admin.registration.success';
    const REGISTRATION_COMPLETED = 'image_store_user_system_admin.registration.completed';
    const REGISTRATION_CONFIRM = 'image_store_user_system_admin.registration.confirm';
    const REGISTRATION_CONFIRMED = 'image_store_user_system_admin.registration.confirmed';
    const RESETTING_RESET_INITIALIZE = 'image_store_user_system_admin.resetting.reset.initialize';
    const RESETTING_RESET_SUCCESS = 'image_store_user_system_admin.resetting.reset.success';
    const RESETTING_RESET_COMPLETED = 'image_store_user_system_admin.resetting.reset.completed';
    const SECURITY_IMPLICIT_LOGIN = 'image_store_user_system_admin.security.implicit_login';
}
