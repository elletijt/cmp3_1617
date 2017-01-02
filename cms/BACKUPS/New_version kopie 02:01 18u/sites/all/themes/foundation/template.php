<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 17/11/16
 * Time: 10:49
 */


function foundation_get_title() {

    //default site title

    $defaulttitle = drupal_get_title();

    //if no default page title --> get drupal site title
    if(!$defaulttitle) $defaulttitle = variable_get('site_name');

    //display title (string) to use in ou template file
    return $defaulttitle;
}