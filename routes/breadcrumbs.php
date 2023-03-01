<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use Illuminate\Support\Facades\Request;

/* dashboard */

Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail): void {
    $trail->push('Dashboard', route('dashboard'));
});

/* ads */
Breadcrumbs::for('ads.ads-list', function (BreadcrumbTrail $trail): void {
    $trail->parent('dashboard');
    $trail->push('My Ads', route('ads.ads-list'));
});
Breadcrumbs::for('ads.view-ads', function (BreadcrumbTrail $trail, $recordid): void {
    $trail->parent('ads.ads-list');
    $trail->push('View Ads', route('ads.view-ads', ['recordid' => $recordid]));
});

/* profile */
Breadcrumbs::for('profile.profile', function (BreadcrumbTrail $trail): void {
    $trail->parent('dashboard');
    $trail->push('Profile', route('profile.profile'));
});
