<?php

function set_domains_settings_inputs()
{
    create_settings_field('domainA', 'Domain A');
    create_settings_field('logoA', 'Logo A');
    create_settings_field('domainB', 'Domain B');
    create_settings_field('logoB', 'Logo B');
}

function create_settings_field($fieldId, $title) {
    add_settings_field($fieldId, $title, function () use ($fieldId) {
        render_settings_input($fieldId);
    }, 'general');

    register_setting(
        'general',
        $fieldId
    );
}

function render_settings_input($optionName)
{
    $value = '';
    $option = get_option($optionName);
    if ($option !== false) {
        $value = $option;
    }

    echo '<input type="text" name="' . $optionName . '" id=' . $optionName .'" value="' . $value . '" />';
}