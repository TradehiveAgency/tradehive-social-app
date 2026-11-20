<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => '認証情報が記録と一致しません。',
    'password' => '入力されたパスワードが正しくありません。',
    'throttle' => 'ログインの試行回数が多すぎます。:seconds 秒後にもう一度お試しください。',

    'flash' => [
        'welcome' => 'TradeHive Social へようこそ！',
        'welcome_trial' => 'TradeHive Social へようこそ！トライアルが開始されました。',
    ],

    'legal' => '続行すると、<a href=":terms_url" target="_blank">利用規約</a>および<a href=":privacy_url" target="_blank">プライバシーポリシー</a>に同意したものとみなされます。',

    'reviews' => [
        'eyebrow' => 'G2で5/5',
        'heading' => '毎日投稿する人に愛される',
    ],

    'panel' => [
        'heading' => 'SNS運用を、まるごとおまかせ。',
        'schedule' => [
            'title' => '一度の計画で、すべてに投稿',
            'body' => 'Instagram、Facebook、TikTok、LinkedIn、YouTube、Google Businessなどをひとつのカレンダーで。',
        ],
        'ai' => [
            'title' => 'あなたらしい文章を書くAI',
            'body' => '1週間分の投稿を数分で作成。MCP経由でAIアシスタントに任せることもできます。',
        ],
        'approvals' => [
            'title' => '公開前に承認',
            'body' => 'クライアントやブランドごとにワークスペースを分け、ワンクリックで承認。',
        ],
        'local' => [
            'title' => '地域ビジネスのために',
            'body' => '集客につながるGoogleビジネスの投稿、レビュー依頼、季節のキャンペーン。',
        ],
    ],

    'or_continue_with' => 'または次で続行',
    'or_continue_with_email' => 'またはメールで続行',
    'google_login' => 'Google でログイン',
    'google_signup' => 'Google で登録',
    'github_login' => 'GitHub でログイン',
    'github_signup' => 'GitHub で登録',
    'github_email_unavailable' => 'GitHub からメールアドレスを取得できませんでした。GitHub のメールアドレスを公開するか、email スコープを許可してから、もう一度お試しください。',

    'login' => [
        'title' => 'TradeHive Social にログイン',
        'page_title' => 'ログイン',
        'email' => 'メールアドレス',
        'password' => 'パスワード',
        'show_password' => 'パスワードを表示',
        'hide_password' => 'パスワードを隠す',
        'forgot_password' => 'パスワードをお忘れですか？',
        'remember_me' => 'ログイン状態を保持',
        'submit' => 'ログイン',
        'no_account' => 'アカウントをお持ちでないですか？',
        'sign_up' => '登録',
    ],

    'register' => [
        'title' => 'TradeHive Social アカウントを作成',
        'page_title' => '登録',
        'name' => '名前',
        'name_placeholder' => '氏名',
        'email' => 'メールアドレス',
        'password' => 'パスワード',
        'show_password' => 'パスワードを表示',
        'hide_password' => 'パスワードを隠す',
        'submit' => 'アカウントを作成',
        'has_account' => 'すでにアカウントをお持ちですか？',
        'log_in' => 'ログイン',
        'password_requirements' => [
            'min' => ':count 文字以上',
            'mixed_case' => '大文字と小文字',
            'number' => '数字を 1 つ以上',
            'symbol' => '記号を 1 つ以上',
        ],
    ],

    'forgot_password' => [
        'title' => 'パスワードをお忘れの方',
        'description' => 'パスワード再設定リンクを受け取るにはメールアドレスを入力してください',
        'page_title' => 'パスワードをお忘れの方',
        'email' => 'メールアドレス',
        'submit' => 'パスワード再設定リンクを送信',
        'return_to' => 'または、次に戻る',
        'log_in' => 'ログイン',
    ],

    'reset_password' => [
        'title' => 'パスワードを再設定',
        'description' => '新しいパスワードを入力してください',
        'page_title' => 'パスワードの再設定',
        'email' => 'メールアドレス',
        'password' => 'パスワード',
        'confirm_password' => 'パスワードの確認',
        'confirm_placeholder' => 'パスワードを確認',
        'submit' => 'パスワードを再設定',
    ],

    'verify_email' => [
        'title' => 'メールアドレスの確認',
        'description' => 'ただいまお送りしたメール内のリンクをクリックして、メールアドレスを確認してください。',
        'page_title' => 'メールアドレスの確認',
        'link_sent' => '登録時に入力されたメールアドレスに、新しい確認リンクを送信しました。',
        'resend' => '確認メールを再送信',
        'log_out' => 'ログアウト',
    ],

    'accept_invite' => [
        'page_title' => '招待を承諾',
        'title' => '招待されました！',
        'description' => ':workspace ワークスペースへの参加に招待されました。',
        'workspace' => 'ワークスペース',
        'your_role' => 'あなたの役割',
        'email' => 'メールアドレス',
        'accept' => '招待を承諾',
        'decline' => '招待を辞退',
        'login_prompt' => 'この招待を承諾するには、ログインまたはアカウントを作成してください。',
        'log_in' => 'ログイン',
        'create_account' => 'アカウントを作成',
        'expired_title' => 'この招待は無効です',
        'expired_description' => 'この招待のワークスペースは削除されました。引き続きアクセスが必要な場合は、アカウント所有者に新しい招待を依頼してください。',
        'expired_action' => 'ホームへ',
    ],

];
