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
    $trail->push('Ads', route('ads.ads-list'));
});
Breadcrumbs::for('ads.view-ads', function (BreadcrumbTrail $trail, $recordid, $action): void {
    $trail->parent('ads.ads-list');
    $trail->push('View Ads', route('ads.view-ads', ['recordid' => $recordid, 'action' => $action]));
});

/* profile */
Breadcrumbs::for('profile.profile', function (BreadcrumbTrail $trail): void {
    $trail->parent('dashboard');
    $trail->push('Profile', route('profile.profile'));
});

/* approve ads */
Breadcrumbs::for('ads-approve.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('dashboard');
    $trail->push('Approve Ads', route('ads-approve.index'));
});
Breadcrumbs::for('ads-approve.approve-ads', function (BreadcrumbTrail $trail, $recordid): void {
    $trail->parent('ads-approve.index');
    $trail->push('View Ad', route('ads-approve.approve-ads', ['recordid' => $recordid]));
});

/* users */
Breadcrumbs::for('users.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('dashboard');
    $trail->push('Users', route('users.index'));
});
Breadcrumbs::for('users.show-user-details', function (BreadcrumbTrail $trail, $userid): void {
    $trail->parent('users.index');
    $trail->push('User Details', route('users.show-user-details', ['userid' => $userid]));
});
Breadcrumbs::for('users.show-approve-ad', function (BreadcrumbTrail $trail, $recordid, $action, $userid): void {
    $trail->parent('users.show-user-details', $userid);
    $trail->push('Ad Details', route('users.show-approve-ad', ['recordid' => $recordid, 'action' => $action, 'userid' => $userid]));
});
Breadcrumbs::for('users.show-unapproved-ads', function (BreadcrumbTrail $trail, $recordid, $userid): void {
    $trail->parent('users.show-user-details', $userid);
    $trail->push('Ad Details', route('users.show-unapproved-ads', ['recordid' => $recordid, 'userid' => $userid]));
});
