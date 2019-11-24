<ul>
    <li><a href="{{ route('candidate.profile') }}" title=""><i class="la la-file-text"></i>My Profile</a></li>
    <li><a href="{{ route('candidate.resume') }}" title=""><i class="la la-briefcase"></i>My Resume</a></li>
    <li><a href="{{ route('candidate.skills.index') }}" title=""><i class="la la-briefcase"></i>My Skills</a></li>
    <li>
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
            <i class="la la-unlink"></i> Logout
        </a>
    </li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</ul>
