<?php

declare(strict_types=1);

test('the legal pages are public', function (string $route, string $title) {
    $this->get(route($route))
        ->assertOk()
        ->assertSee($title)
        ->assertSee('contact@tradehiveagency.com');
})->with([
    ['legal.privacy', 'Privacy Policy'],
    ['legal.terms', 'Terms of Service'],
    ['legal.data-deletion', 'Data Deletion'],
]);

test('the privacy policy carries the Google Limited Use disclosure', function () {
    $this->get(route('legal.privacy'))
        ->assertOk()
        ->assertSee('Limited Use');
});
