<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use Illuminate\Support\Facades\Request;

Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail): void {
    $trail->push('Dashboard', route('dashboard'));
});
Breadcrumbs::for('ads.ads-list', function (BreadcrumbTrail $trail): void {
    $trail->parent('dashboard');
    $trail->push('My Ads', route('ads.ads-list'));
});
Breadcrumbs::for('ads.view-ads', function (BreadcrumbTrail $trail, $recordid): void {
    $trail->parent('ads.ads-list');
    $trail->push('View Ads', route('ads.view-ads', ['recordid' => $recordid]));
});
