<div class="header">
    <div class="logo">
        <img src="/img/Master/logo.png" alt="logo">
    </div>
</div>
<div class="nav">
    <div class="navigation">
        <a href="/dashboard"><i class="fas fa-home"></i> Dashboard</a>
        <a href="/profile/{{Auth::id()}}"><i class="fas fa-user-circle"></i> Profile</a>
        <a href="#"><i class="fas fa-envelope"></i> Messages</a>
        @if(Auth::check())
        <a href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
        @else
        <a href="/"><i class="fas fa-sign-out-alt"></i> Logout</a>
        @endif
    </div>
</div>
