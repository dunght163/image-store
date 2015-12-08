<?php

namespace ImageStore\Bundle\UserBundle;

final class ImageStoreUserEvents
{
    const CHANGE_PASSWORD_INITIALIZE = 'image_store_user.change_password.edit.initialize';
    const CHANGE_PASSWORD_SUCCESS = 'image_store_user.change_password.edit.success';
    const CHANGE_PASSWORD_COMPLETED = 'image_store_user.change_password.edit.completed';
    const GROUP_CREATE_INITIALIZE = 'image_store_user.group.create.initialize';
    const GROUP_CREATE_SUCCESS = 'image_store_user.group.create.success';
    const GROUP_CREATE_COMPLETED = 'image_store_user.group.create.completed';
    const GROUP_DELETE_COMPLETED = 'image_store_user.group.delete.completed';
    const GROUP_EDIT_INITIALIZE = 'image_store_user.group.edit.initialize';
    const GROUP_EDIT_SUCCESS = 'image_store_user.group.edit.success';
    const GROUP_EDIT_COMPLETED = 'image_store_user.group.edit.completed';
    const PROFILE_EDIT_INITIALIZE = 'image_store_user.profile.edit.initialize';
    const PROFILE_EDIT_SUCCESS = 'image_store_user.profile.edit.success';
    const PROFILE_EDIT_COMPLETED = 'image_store_user.profile.edit.completed';
    const REGISTRATION_INITIALIZE = 'image_store_user.registration.initialize';
    const REGISTRATION_SUCCESS = 'image_store_user.registration.success';
    const REGISTRATION_COMPLETED = 'image_store_user.registration.completed';
    const REGISTRATION_CONFIRM = 'image_store_user.registration.confirm';
    const REGISTRATION_CONFIRMED = 'image_store_user.registration.confirmed';
    const RESETTING_RESET_INITIALIZE = 'image_store_user.resetting.reset.initialize';
    const RESETTING_RESET_SUCCESS = 'image_store_user.resetting.reset.success';
    const RESETTING_RESET_COMPLETED = 'image_store_user.resetting.reset.completed';
    const SECURITY_IMPLICIT_LOGIN = 'image_store_user.security.implicit_login';
}
