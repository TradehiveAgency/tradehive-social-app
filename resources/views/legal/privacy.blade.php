@extends('legal.layout')

@section('title', 'Privacy Policy')
@section('description', 'How TradeHive Social collects, uses and protects your information.')

@section('content')
<p>TradeHive Social is a social media scheduling service run by TradeHive LLC ("TradeHive", "we", "us"). This policy explains what information we collect when you use TradeHive Social at social.tradehiveagency.com, how we use it, and the choices you have.</p>

<h2>Information we collect</h2>
<ul>
    <li><strong>Account details:</strong> your name, email address and password (stored only as a secure hash), plus the workspaces and team members you set up.</li>
    <li><strong>Connected social accounts:</strong> when you connect Instagram, Facebook, Threads, TikTok, LinkedIn, YouTube, Google Business Profile, Pinterest, X, Bluesky, Mastodon, Telegram or Discord, we receive the access tokens and basic profile details (name, username, profile picture, page or channel IDs) that the network shares with your permission.</li>
    <li><strong>Your content:</strong> posts, captions, images, videos, comments, ideas and schedules you create or upload.</li>
    <li><strong>Performance data:</strong> post and account statistics the networks provide, such as views, reach and engagement.</li>
    <li><strong>Billing details:</strong> handled by Stripe. We receive your plan, billing status and the last four digits of your card; we never see or store full card numbers.</li>
    <li><strong>Usage and technical data:</strong> log data such as IP address, browser type and the pages you use, kept to run and secure the service.</li>
</ul>

<h2>How we use it</h2>
<ul>
    <li>To publish, schedule and manage the content you ask us to, on the accounts you connect.</li>
    <li>To show you analytics about your own accounts and posts.</li>
    <li>To run the AI writing assistant when you use it.</li>
    <li>To bill your subscription, provide support, send service emails (such as password resets) and keep the service secure.</li>
</ul>
<p>We do not sell your personal information, and we do not use data from your connected accounts for advertising.</p>

<h2>Google user data</h2>
<p>TradeHive Social's use and transfer of information received from Google APIs (YouTube and Google Business Profile) adheres to the <a href="https://developers.google.com/terms/api-services-user-data-policy">Google API Services User Data Policy</a>, including the Limited Use requirements. We use that data only to provide the publishing and analytics features you request, and we do not use it to train AI models.</p>

<h2>Who we share it with</h2>
<p>Only with service providers that help us run TradeHive Social, and only as needed:</p>
<ul>
    <li>The social networks you connect, to publish and read your content.</li>
    <li>Hosting and storage providers that run our servers and keep your media.</li>
    <li>Stripe for payments, and Resend for service emails.</li>
    <li>OpenAI, only for text you send to the AI writing assistant.</li>
</ul>
<p>We may also disclose information if the law requires it or to protect the rights and safety of our users and TradeHive.</p>

<h2>How long we keep it</h2>
<p>We keep your information while your account is active. When you disconnect a social account we delete its access tokens. When you delete your account, we delete your account data, content and connected-account tokens within 30 days, except records we must keep for legal or billing reasons.</p>

<h2>Your choices and rights</h2>
<ul>
    <li>You can update your details, disconnect social accounts or delete your account at any time in TradeHive Social.</li>
    <li>You can ask us for a copy of your data, to correct it or to delete it by emailing <a href="mailto:contact@tradehiveagency.com">contact@tradehiveagency.com</a>. See <a href="{{ route('legal.data-deletion') }}">Data deletion</a>.</li>
    <li>California residents have rights under the CCPA, including to know, delete and correct personal information and not to be discriminated against for using them. We do not sell or share personal information for cross-context advertising.</li>
    <li>You can remove TradeHive Social's access from each network's own settings (for example, Facebook Settings → Business integrations, or your Google Account → Third-party connections).</li>
</ul>

<h2>Security</h2>
<p>We use encrypted connections (HTTPS), encrypt stored access tokens, hash passwords, and limit who can access production systems. No method of storage or transmission is completely secure, but we work to protect your information.</p>

<h2>Children</h2>
<p>TradeHive Social is for businesses and is not intended for anyone under 16. We do not knowingly collect information from children.</p>

<h2>Changes</h2>
<p>We will post any changes to this policy on this page and update the date above. For significant changes we will also email account owners.</p>

<h2>Contact</h2>
<p>TradeHive LLC, Orange County, California, USA · <a href="mailto:contact@tradehiveagency.com">contact@tradehiveagency.com</a></p>
@endsection
