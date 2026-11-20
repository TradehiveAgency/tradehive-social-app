@extends('legal.layout')

@section('title', 'Terms of Service')
@section('description', 'The terms for using TradeHive Social.')

@section('content')
<p>These terms are an agreement between you and TradeHive LLC ("TradeHive", "we", "us") for using TradeHive Social at social.tradehiveagency.com. By creating an account or using the service you agree to them. If you use TradeHive Social for a company, you confirm you can accept these terms for it.</p>

<h2>The service</h2>
<p>TradeHive Social lets you plan, create, approve, schedule and publish social media content, and view analytics, across the networks you connect. Optional AI features help you write content. Some plans include content created for you by TradeHive.</p>

<h2>Your account</h2>
<ul>
    <li>Give accurate information and keep your password safe. You are responsible for activity in your account and workspaces.</li>
    <li>Tell us right away at <a href="mailto:contact@tradehiveagency.com">contact@tradehiveagency.com</a> if you think your account was accessed without permission.</li>
</ul>

<h2>Connected networks</h2>
<p>When you connect a social account, you authorize TradeHive Social to act on it as you direct. You must follow each network's own terms and policies. Networks can change or limit their features at any time, and we are not responsible for their actions, outages or decisions about your accounts.</p>

<h2>Your content</h2>
<p>You own the content you create or upload. You give us permission to store, process and publish it only to provide the service to you. You are responsible for your content and confirm you have the rights to post it. Review AI-generated text before publishing; you are responsible for what you publish.</p>

<h2>Acceptable use</h2>
<p>Do not use TradeHive Social to post spam, unlawful, deceptive, infringing, hateful or harmful content; to misrepresent who you are; to collect other people's data without permission; to break any network's rules; or to interfere with or reverse-engineer around the service's security.</p>

<h2>Plans, billing and cancellation</h2>
<ul>
    <li>Paid plans are billed in advance each month or year through Stripe and renew automatically until cancelled.</li>
    <li>You can cancel at any time in Settings → Billing; access continues to the end of the paid period.</li>
    <li>Free trials convert to the paid plan shown at signup unless you cancel before the trial ends.</li>
    <li>Payments are non-refundable except where the law requires, or if we end the service without cause, in which case we refund the unused part of your period. Contact us if you were charged in error.</li>
    <li>We will give at least 30 days' notice of price changes.</li>
</ul>

<h2>Open source</h2>
<p>TradeHive Social is built on TryPost and is licensed under the GNU Affero General Public License v3.0. The source code of the version we run is available at <a href="https://github.com/TradehiveAgency/tradehive-social-app">github.com/TradehiveAgency/tradehive-social-app</a>. These terms govern your use of our hosted service; the AGPL governs the source code.</p>

<h2>Suspension and termination</h2>
<p>You may stop using the service and delete your account at any time. We may suspend or end accounts that break these terms or put the service, other users or the networks at risk. After termination we delete your data as described in our <a href="{{ route('legal.privacy') }}">Privacy Policy</a>.</p>

<h2>Disclaimers</h2>
<p>The service is provided "as is" and "as available". We do not promise that it will be uninterrupted or error-free, that posts will always publish at the exact scheduled time, or any particular results from your social media.</p>

<h2>Limitation of liability</h2>
<p>To the extent the law allows, TradeHive is not liable for indirect, incidental, special or consequential damages, or lost profits, revenue or data. Our total liability for any claim is limited to the amount you paid us in the 12 months before the claim.</p>

<h2>Changes to these terms</h2>
<p>We may update these terms. We will post changes here and, for significant changes, email account owners. Continuing to use the service after changes take effect means you accept them.</p>

<h2>Governing law</h2>
<p>These terms are governed by the laws of the State of California, USA. Disputes will be handled in the courts of Orange County, California, unless the law requires otherwise.</p>

<h2>Contact</h2>
<p>TradeHive LLC · <a href="mailto:contact@tradehiveagency.com">contact@tradehiveagency.com</a></p>
@endsection
