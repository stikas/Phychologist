<div id="main-nav">
    <nav class="navbar">
        <div class="container">

            <div class="navbar-header">
                <a href="{{ url('/') }}" class="navbar-brand">Μαρία Γκιόκα</a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ftheme">
                    <span class="sr-only">Toggle</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="navbar-collapse collapse" id="ftheme">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/') }}/#home">Αρχικη Σελιδα</a></li>
                    <li><a href="{{ url('/') }}/#about">Σχετικα</a></li>
                    <li><a href="{{ url('/') }}/#service">Υπηρεσιες</a></li>
                    <li><a href="{{ url('/articles') }}">Αρθρα</a></li>
                    <li><a href="{{ url('/') }}/#get-touch">Επικοινωνια</a></li>
                    @if (Auth::check())
                    <li><a href="/cms">CMS</a></li>
                    <li><a href="/logout">Logout</a></li>
                    @endif
                </ul>

            </div>

        </div>
    </nav>
</div>