<?php
$config['Shopify']['api_key'] = 'YOUR_API_KEY';
$config['Shopify']['secret'] = 'YOUR_SECRET_CODE';

//Name that will appear when referencing the app. 
//For example, with charging, this name will be used.
//Don't use any special chars, like even & - this will cause error with shopify API charge.
//Bug is opened, will see if it gets fixed.
$config['Shopify']['app_name'] = "App name here";
