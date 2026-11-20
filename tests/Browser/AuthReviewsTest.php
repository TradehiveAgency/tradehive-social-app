<?php

declare(strict_types=1);

test('the login panel lists the four product highlights', function () {
    config(['trypost.self_hosted' => false]);

    $page = visit(route('login'));

    $page->assertVisible('@auth-highlights')
        ->assertSeeIn('@auth-highlights', 'Plan once, publish everywhere')
        ->assertSeeIn('@auth-highlights', 'Made for local businesses')
        ->assertCount('[data-testid="auth-highlights"] li', 4)
        ->assertNoJavaScriptErrors();
});

test('the highlights panel sits beside login and register only', function (string $route, bool $hasPanel) {
    config(['trypost.self_hosted' => false]);

    $page = visit(route($route));

    $page->assertVisible('@auth-logo');

    $hasPanel
        ? $page->assertPresent('@auth-highlights')
        : $page->assertMissing('@auth-highlights');

    $page->assertNoJavaScriptErrors();
})->with([
    ['login', true],
    ['password.request', false],
]);

test('the auth column keeps a 16px gutter without overflow on phones', function (string $route) {
    config(['trypost.self_hosted' => false]);

    $page = visit(route($route))->resize(390, 844);
    $page->assertVisible('@auth-logo');

    $layout = $page->script(<<<'JS'
        (() => {
            const email = document.querySelector('#email').getBoundingClientRect();
            return {
                overflow: document.documentElement.scrollWidth > window.innerWidth,
                left: Math.round(email.left),
                right: Math.round(window.innerWidth - email.right),
                height: Math.round(email.height),
            };
        })()
    JS);

    expect($layout)->toBe(['overflow' => false, 'left' => 16, 'right' => 16, 'height' => 32]);
})->with(['login']);
