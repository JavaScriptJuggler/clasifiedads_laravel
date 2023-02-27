<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail): void {
    $trail->push('Dashboard', route('dashboard'));
});
Breadcrumbs::for('ads.ads-list', function (BreadcrumbTrail $trail): void {
    $trail->parent('dashboard');
    $trail->push('My Ads', route('ads.ads-list'));
});
