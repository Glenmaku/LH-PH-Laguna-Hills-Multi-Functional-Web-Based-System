<div class="adminSidebar">
    <div class="logo-details">
        <img src="./assets/images/logo-icon.png">
        <span class="logo-name"> The Laguna Hills</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="/admin.php">
                <i class="fa-solid fa-border-all"></i>
                <span class="link-name">Dashboard</span>
            </a>
        </li>

        <li>
            <a href="#map" onclick="showMap()">
                <i class="fa-solid fa-map"></i>
                <span>Map</span>
            </a>
        </li>

        <li >
            <a href="#transaction-menu" onclick="showAllTransaction()">
                <i class="fa-solid fa-calculator"></i>
                <span>Transaction</span>
            </a>
        </li>

        <li>
            <a href="#message" onclick="showmessage()">
                <i class="fa-solid fa-envelope"></i>
                <span class="link-name">Message</span>
            </a>
        </li>

        <li>
            <a href="#announcement" onclick="showAllAnnouncement()">
                <i class="fa-solid fa-bullhorn"></i>
                <span class="link-name">Announcement</span>
            </a>
        </li>

        <li>
            <a href="#">
                <i class="fa-regular fa-clipboard"></i>
                <span class="link-name">Account Records</span>
            </a>
            <ul>
                <li>
                    <a href="#account-records" onclick="showAllAccountRecord()">
                        <i class="fa-solid fa-user-tie"></i>
                        <span class="sub-name">Admin Accounts</span>
                    </a>
                </li>

                <li>
                    <a href="#account-records" onclick="showAllAccountRecord()">
                        <i class="fa-solid fa-users"></i>
                        <span class="sub-name">Homeowners Accounts</span>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="./index.php">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span class="link-name">Logout</span>
            </a>
        </li>
    </ul>
</div>
</div>

<script>
    let sidebarLinks = document.querySelectorAll('.admin-sidebar li');

    sidebarLinks.forEach(link => {
        link.addEventListener('mouseenter', event => {
            let submenu = event.currentTarget.querySelector('ul');
            if (submenu) {
                submenu.style.display = 'block';
            }
        });
        link.addEventListener('mouseleave', event => {
            let submenu = event.currentTarget.querySelector('ul');
            if (submenu) {
                submenu.style.display = 'none';
            }
        });
    });
</script>