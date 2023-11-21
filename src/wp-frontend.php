<?php

function get_logo_image() {
    $domain = sanitize_url($_SERVER['SERVER_NAME']);

    $domainA = get_option('domainA');
    $domainB = get_option('domainB');

    $logo = null;
    if ($domain === $domainA) {
        $logoA = get_option('logoA');
        if ($logoA !== false) {
            $logo = $logoA;
        }
    } else if ($domain === $domainB) {
        $logoB = get_option('logoB');
        if ($logoB !== false) {
            $logo = $logoB;
        }
    }

    return $logo;
}

function modify_logo_image($imageInfo, ...$args)
{
    $customLogoId = get_theme_mod('custom_logo');

    if ($args[0] === $customLogoId) {
        $logoImageSrc = get_logo_image();
        if ($logoImageSrc) {
            $imageInfo[0] = $logoImageSrc;
        }
    }

    return $imageInfo;
}