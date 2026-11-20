@extends('legal.layout')

@section('title', 'Data Deletion')
@section('description', 'How to delete your TradeHive Social data.')

@section('content')
<p>You can delete your data from TradeHive Social at any time. Choose whichever option fits.</p>

<h2>Disconnect one social account</h2>
<p>In TradeHive Social, open <strong>Channels</strong>, choose the account and select <strong>Disconnect</strong>. We delete that account's access tokens right away. Posts already published on the network stay there; delete them on the network if you want them gone.</p>

<h2>Delete your whole account</h2>
<p>Open <strong>Settings → Profile → Delete account</strong>. We delete your account, workspaces, content, media and connected-account tokens within 30 days, except records we must keep for legal or billing reasons.</p>

<h2>Remove access from the network's side</h2>
<ul>
    <li><strong>Facebook and Instagram:</strong> Facebook Settings → Security and login → Business integrations → remove TradeHive Social.</li>
    <li><strong>Google (YouTube, Business Profile):</strong> your Google Account → Security → Third-party apps with account access → TradeHive Social → Delete all connections.</li>
    <li><strong>TikTok, LinkedIn, Pinterest and others:</strong> remove TradeHive Social from the connected apps section of that network's settings.</li>
</ul>
<p>When access is removed on the network's side, TradeHive Social can no longer use that account. Disconnect it in Channels too, or ask us, and we delete its stored tokens.</p>

<h2>Ask us to delete it</h2>
<p>Email <a href="mailto:contact@tradehiveagency.com?subject=Data%20deletion%20request">contact@tradehiveagency.com</a> with the subject "Data deletion request" from the email address on your account. We confirm within 3 business days and finish deletion within 30 days.</p>
@endsection
