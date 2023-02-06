<div class="adminSidebar">
    <div class="logo-details">
        <img src="./assets/images/logo-icon.png">
        <span class="logo-name"> The Laguna Hills</span>
    </div>
    <ul class="nav-links list-unstyled">
        <li class="">
            <a href="admin.php" class="ps-4">
                <i class="fa-solid fa-border-all"></i>
                <span class="link-name">Dashboard</span>
            </a>
        </li>

        <li>
            <a href="#map" onclick="showMap()" class="ps-4" id="mapcons">
                <i class="fa-solid fa-map"></i>
                <span>Map</span>
            </a>
        </li>

        <li >
            <a href="#transaction-menu" onclick="showAllTransaction()"class="ps-4">
                <i class="fa-solid fa-calculator"></i>
                <span>Transaction</span>
            </a>
        </li>

        <li>
            <a href="#message" onclick=" showAdminMessage()"class="ps-4">
                <i class="fa-solid fa-envelope"></i>
                <span class="link-name">Message</span>
            </a>
        </li>

        <li>
            <a href="#announcement" onclick="showAllAnnouncement()"class="ps-4">
                <i class="fa-solid fa-bullhorn"></i>
                <span class="link-name">Announcement</span>
            </a>
        </li>

        <li>
            <a href=""class="ps-4">
                <i class="fa-regular fa-clipboard"></i>
                <span class="link-name">Account Records</span>
            </a>
            <ul>
                <li>
                    <a href="#account-records" onclick="showAllAdminRecord()"class="ps-2">
                        <i class="fa-solid fa-user-tie"></i>
                        <span class="sub-name">Admin Accounts</span>
                    </a>
                </li>

                <li>
                    <a href="#account-records" onclick="showAllOwnerRecord()"class="ps-2">
                        <i class="fa-solid fa-users"></i>
                        <span class="sub-name">Homeowners Accounts</span>
                    </a>
                </li>
            </ul>
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


    function expand(){


    }
</script>