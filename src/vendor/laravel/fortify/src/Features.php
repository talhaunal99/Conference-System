<?php

namespace Laravel\Fortify;

use Illuminate\Support\Arr;

class Features
{
    /**
     * Determine if the given feature is enabled.
     *
     * @param  string  $feature
     * @return bool
     */
    public static function enabled(string $feature)
    {
        return in_array($feature, config('fortify.features', []));
    }

    /**
     * Determine if the feature is enabled and has a given option enabled.
     *
     * @param  string  $feature
     * @param  string  $option
     * @return bool
     */
    public static function optionEnabled(string $feature, string $option)
    {
        return static::enabled($feature) &&
               config("fortify-options.{$feature}.{$option}") === true;
    }

    /**
     * Determine if the application is using any features that require "profile" management.
     *
     * @return bool
     */
    public static function hasProfileFeatures()
    {
        return static::enabled(static::updateProfileInformation()) ||
               static::enabled(static::updatePasswords());
    }

    /**
     * Determine if the application can update a user's profile information.
     *
     * @return bool
     */
    public static function canUpdateProfileInformation()
    {
        return static::enabled(static::updateProfileInformation());
    }

    /**
     * Determine if the application is using any security profile features.
     *
     * @return bool
     */
    public static function hasSecurityFeatures()
    {
        return static::enabled(static::updatePasswords());
    }

    /**
     * Enable the registration feature.
     *
     * @return string
     */
    public static function registration()
    {
        return 'registration';
    }

    /**
     * Enable the password reset feature.
     *
     * @return string
     */
    public static function resetPasswords()
    {
        return 'reset-passwords';
    }

    /**
     * Enable the email verification feature.
     *
     * @return string
     */
    public static function emailVerification()
    {
        return 'email-verification';
    }

    /**
     * Enable the update profile information feature.
     *
     * @return string
     */
    public static function updateProfileInformation()
    {
        return 'update-profile-information';
    }

    /**
     * Enable the update password feature.
     *
     * @return string
     */
    public static function updatePasswords()
    {
        return 'update-passwords';
    }
}
