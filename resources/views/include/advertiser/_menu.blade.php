<ul>
    <li><a href="{{ route('advertiser.dashboard') }}" title=""><i class="la la-briefcase"></i>Manage Jobs</a></li>
    <li><a href="{{ route('advertiser.job-posts.create') }}" title=""><i class="la la-file-text"></i>Post a New Job</a></li>
    <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="la la-sign-out"></i> Logout
        </a>
    </li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</ul>
