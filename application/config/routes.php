<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'documentation';
$route['alldocfile/documentation'] = 'documentation/index';
$route['documentation/getting-started'] = 'documentation/getting_started';
$route['documentation/getting-started/introduction'] = 'documentation/getting_started_introduction';

// Installation Routes
$route['documentation/getting-started/installation'] = 'documentation/getting_started_installation';
$route['documentation/getting-started/installation/cloud'] = 'documentation/getting_started_cloud';
$route['documentation/getting-started/installation/cloud/quick-start'] = 'documentation/getting_started_cloud_quickstart';
$route['documentation/getting-started/installation/cloud/react'] = 'documentation/getting_started_cloud_react';
$route['documentation/getting-started/installation/cloud/angular'] = 'documentation/getting_started_cloud_angular';
$route['documentation/getting-started/installation/cloud/vue'] = 'documentation/getting_started_cloud_vue';
$route['documentation/getting-started/installation/cloud/blazor'] = 'documentation/getting_started_cloud_blazor';
$route['documentation/getting-started/installation/cloud/svelte'] = 'documentation/getting_started_cloud_svelte';
$route['documentation/getting-started/installation/cloud/web-component'] = 'documentation/getting_started_cloud_webcomponent';
$route['documentation/getting-started/installation/cloud/jquery'] = 'documentation/getting_started_cloud_jquery';
$route['documentation/getting-started/installation/cloud/django'] = 'documentation/getting_started_cloud_django';
$route['documentation/getting-started/installation/cloud/laravel'] = 'documentation/getting_started_cloud_laravel';
$route['documentation/getting-started/installation/cloud/ruby-on-rails'] = 'documentation/getting_started_cloud_rails';
$route['documentation/getting-started/installation/cloud/bootstrap'] = 'documentation/getting_started_cloud_bootstrap';

// Self-hosted Routes
$route['documentation/getting-started/installation/self-hosted'] = 'documentation/getting_started_self_hosted';
$route['documentation/getting-started/installation/self-hosted/quick-start'] = 'documentation/getting_started_self_hosted_quickstart';
$route['documentation/getting-started/installation/self-hosted/react'] = 'documentation/getting_started_self_hosted_react';
$route['documentation/getting-started/installation/self-hosted/angular'] = 'documentation/getting_started_self_hosted_angular';
$route['documentation/getting-started/installation/self-hosted/vue'] = 'documentation/getting_started_self_hosted_vue';
$route['documentation/getting-started/installation/self-hosted/blazor'] = 'documentation/getting_started_self_hosted_blazor';
$route['documentation/getting-started/installation/self-hosted/svelte'] = 'documentation/getting_started_self_hosted_svelte';
$route['documentation/getting-started/installation/self-hosted/web-component'] = 'documentation/getting_started_self_hosted_webcomponent';
$route['documentation/getting-started/installation/self-hosted/jquery'] = 'documentation/getting_started_self_hosted_jquery';
$route['documentation/getting-started/installation/self-hosted/java-swing'] = 'documentation/getting_started_self_hosted_java';

// ZIP Routes
$route['documentation/getting-started/installation/zip'] = 'documentation/getting_started_zip';
$route['documentation/getting-started/upgrading'] = 'documentation/getting_started_upgrading';

// Other main sections
$route['documentation/integration'] = 'documentation/integration';
$route['documentation/configuration'] = 'documentation/configuration';
$route['documentation/api'] = 'documentation/api';
$route['404_override'] = 'errors/show_404';
$route['translate_uri_dashes'] = FALSE;