<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// News
Breadcrumbs::for('news', function (BreadcrumbTrail $trail) {
    $trail->push('News', route('news.index'));
});

// News > Edit
Breadcrumbs::for('edit-news', function (BreadcrumbTrail $trail, $news) {
    $trail->parent('news');
    $trail->push('Edit '. $news->title , route('news.edit', $news->id));
});


// Product > Create
Breadcrumbs::for('news-create', function (BreadcrumbTrail $trail) {
    $trail->parent('news');
    $trail->push('Create ' , route('news.create'));
});


// Product
Breadcrumbs::for('product', function (BreadcrumbTrail $trail) {
    $trail->push('Product', route('product.index'));
});


// Product > Edit
Breadcrumbs::for('edit-product', function (BreadcrumbTrail $trail, $product) {
    $trail->parent('product');
    $trail->push('Edit '. $product->name , route('product.edit', $product->id));
});


// Product > Create
Breadcrumbs::for('product-create', function (BreadcrumbTrail $trail) {
    $trail->parent('product');
    $trail->push('Create ' , route('product.create'));
});



// Contact
Breadcrumbs::for('contact', function (BreadcrumbTrail $trail) {
    $trail->push('Contact', route('contact.index'));
});