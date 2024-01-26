<style>
        /* Default styles for larger screens */
        .sidebar {
        }

        /* Media query for screens with a maximum width of 768 pixels (typical for mobile devices) */
        @media (max-width: 768px) {
            .sidebar {
                display: none; /* Hide the sidebar */
            }
        }
    </style>

<div class="sidebar">
    <div class="logo_content">
        <div class="logo">
          <i class='bx bxs-user-badge'></i>
            <div class="logo_name">Admin</div>
        </div>
        <i class='bx bx-menu' id='btn'></i>
    </div>

      <ul class="nav">
        <li>
          <a href="{{ route('admins.admin-dashboard') }}">
          <i class='bx bxs-dashboard' ></i>
            <span class="link_name">Dashboard</span>
          </a>
          <span class="tooltop">Dashboard</span>
        </li>
        <li>
          <a href="{{ route('admins.pets.index') }}">
          <i class='bx bxs-dog' ></i>
            <span class="link_name">Manage Pets</span>
          </a>
          <span class="tooltop">Manage Pets</span>
        </li>
        <li>
          <a href="{{ route('admins.adoption-requests.view') }}">
          <i class='bx bx-mail-send' ></i>
            <span class="link_name">Adoption Requests</span>
          </a>
          <span class="tooltop">Adoption Requests</span>
        </li>
        <li>
          <a href="{{ route('admins.pet-monitoring.index') }}">
          <i class='bx bx-desktop' ></i>
            <span class="link_name">Pet Monitoring</span>
          </a>
          <span class="tooltop">Pet Monitoring</span>
        </li>
        <li>
          <a href="{{ route('admins.missing-pets.index') }}">
          <i class='bx bx-search-alt' ></i>
            <span class="link_name">Missing Pet Reports</span>
          </a>
          <span class="tooltop">Missing Pet Reports</span>
        </li>
        <li>
          <a href="{{ route('admins.case-types.index') }}">
          <i class='bx bx-error'></i>
            <span class="link_name">Case Types</span>
          </a>
          <span class="tooltop">Case Types</span>
        </li>
        <li>
          <a href="{{ route('admins.reports.view') }}">
          <i class='bx bxs-report' ></i>
            <span class="link_name">User Reports</span>
          </a>
          <span class="tooltop">User Reports</span>
        </li>
        <li>
          <a href="{{ route('users.account-settings') }}">
          <i class='bx bx-cog' ></i>
            <span class="link_name">Account Settings</span>
          </a>
          <span class="tooltop">Account Settings</span>
        </li>
      </ul>
  </div>
