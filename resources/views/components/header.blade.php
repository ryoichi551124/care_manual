{{-- header --}}
<header class="page-header">
    <div class="header wrapper">
        <h1 class="header-title"><a href="{{ url('/manuals') }}">ケアマニュアル</a></h1>
        <nav>
            <ul class="main-nav">
                @if (Auth::check())
                    <li><a href="{{ url('/manuals') }}">ホーム</a></li>
                    <li><a href="/logout">ログアウト</a></li>
                @endif
                @if ($role == 'admin')
                    <li><a href="/register">新規登録</a></li>
                @endif
            </ul>
        </nav>
    </div>
</header>