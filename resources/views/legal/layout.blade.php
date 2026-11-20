<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') · TradeHive Social</title>
    <meta name="description" content="@yield('description')">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <style>
        :root { --text: #0b1f17; --muted: #4b5f57; --line: #dfe7e3; --brand: #067a52; --bg: #fbfdfc; }
        @media (prefers-color-scheme: dark) {
            :root { --text: #e8f1ed; --muted: #a9bbb3; --line: #24332d; --brand: #3ddc97; --bg: #0c1411; }
        }
        * { box-sizing: border-box; }
        body { margin: 0; background: var(--bg); color: var(--text); font: 16px/1.65 ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, sans-serif; }
        header, main, footer { max-width: 760px; margin: 0 auto; padding: 0 16px; }
        header { display: flex; align-items: center; gap: 10px; padding-top: 28px; padding-bottom: 8px; }
        header a { display: inline-flex; align-items: center; gap: 10px; color: var(--text); text-decoration: none; font-weight: 700; }
        header img { width: 32px; height: 32px; }
        main { padding-bottom: 48px; }
        h1 { font-size: 2rem; line-height: 1.2; margin: 24px 0 4px; }
        h2 { font-size: 1.2rem; margin: 32px 0 8px; }
        p, li { color: var(--text); }
        .updated { color: var(--muted); margin: 0 0 24px; }
        a { color: var(--brand); }
        ul { padding-left: 22px; }
        footer { border-top: 1px solid var(--line); padding-top: 16px; padding-bottom: 32px; color: var(--muted); font-size: 14px; }
        footer a { margin-right: 14px; }
    </style>
</head>
<body>
    <header>
        <a href="/"><img src="/favicon.svg" alt="">TradeHive Social</a>
    </header>
    <main>
        <h1>@yield('title')</h1>
        <p class="updated">Last updated November 20, 2026</p>
        @yield('content')
    </main>
    <footer>
        <a href="{{ route('legal.privacy') }}">Privacy</a>
        <a href="{{ route('legal.terms') }}">Terms</a>
        <a href="{{ route('legal.data-deletion') }}">Data deletion</a>
        <a href="https://github.com/TradehiveAgency/tradehive-social-app">Source code (AGPL)</a>
        <p>&copy; {{ date('Y') }} TradeHive LLC · <a href="mailto:contact@tradehiveagency.com">contact@tradehiveagency.com</a></p>
    </footer>
</body>
</html>
