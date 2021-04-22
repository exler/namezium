<?php

use Diglactic\Breadcrumbs\Breadcrumbs;

Breadcrumbs::for("home", function ($trail) {
    $trail->push("Home", route("home"));
});

Breadcrumbs::for("name", function ($trail, $name) {
    $trail->parent("home");
    $trail->push($name);
});

Breadcrumbs::for("search", function ($trail) {
    $trail->parent("home");
    $trail->push("Search Results");
});

Breadcrumbs::for("category", function ($trail, $category) {
    $trail->parent("home");
    $trail->push($category->title, route("category", $category->slug));
});

Breadcrumbs::for("generator", function ($trail, $generator) {
    $trail->parent("category", $generator->category);
    $trail->push($generator->title, route("generator", [$generator->category->slug, $generator->slug]));
});
