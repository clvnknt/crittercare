<div class="userSidebar">
    <div class="logo_content">
        <div class="logo">
            <i class='bx bxs-bone'></i>
            <div class="logo_name">CritterCare</div>
        </div>
        <i class='bx bx-menu' id='userBtn'></i>
    </div>

    <ul class="nav">
        <li>
            <a href="{{ route('users.user-dashboard') }}">
                <i class='bx bxs-dashboard'></i>
                <span class="link_name">Dashboard</span>
            </a>
            <span class="tooltop">Dashboard</span>
        </li>
        <li>
            <a href="{{ route('users.available-pets.index') }}">
                <i class='bx bxs-dog'></i>
                <span class="link_name">Adopt</span>
            </a>
            <span class="tooltop">Adopt</span>
        </li>
        <li>
            <a href="{{ route('users.missing-pets') }}">
                <i class='bx bxs-file-find'></i>
                <span class="link_name">Missing Pets</span>
            </a>
            <span class="tooltop">Missing Pets</span>
        </li>
        <li>
            <a href="{{ route('users.reports.index') }}">
                <i class='bx bx-desktop'></i>
                <span class="link_name">View Or Report Cases</span>
            </a>
            <span class="tooltop">View Or Report Cases</span>
        </li>
        <li>
            <a href="{{ route('users.account-settings') }}">
                <i class='bx bx-cog'></i>
                <span class="link_name">Account Settings</span>
            </a>
            <span class="tooltop">Account Settings</span>
        </li>
    </ul>
</div>

<style>
    @media (max-width: 767px) {
        .userSidebar {
            display: none;
        }
    }
</style>
