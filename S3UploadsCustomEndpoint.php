<?php
/*
Plugin Name:    S3 Uploads custom endpoint.
Description:    Adds custom endpoint support in S3 Uploads.
Version:        1.0.0
Author:         Joel Bernerman
*/

if (defined('S3_UPLOADS_CUSTOM_ENDPOINT')) {
    add_filter('s3_uploads_s3_client_params', function ($params) {
        $params['endpoint'] = S3_UPLOADS_CUSTOM_ENDPOINT;
        $params['use_path_style_endpoint'] = true;
        $params['debug'] = defined('S3_UPLOADS_DEBUG') && S3_UPLOADS_DEBUG === true;
        return $params;
    } );
}