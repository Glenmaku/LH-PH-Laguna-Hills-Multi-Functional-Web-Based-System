<div class="adminSidebar">
    <div class="logo-details">
        <img src="./assets/images/logo-icon.png">
        <span class="logo-name"> The Laguna Hills</span>
    </div>
    <ul class="nav-links">    
        <li>
            <a href="#map" onclick="">
                <i class="fa-solid fa-map"></i>
                <span>Map</span>
            </a>
        </li>

        <li >
            <a href="#transaction-menu" onclick="">
                <i class="fa-solid fa-calculator"></i>
                <span>Transaction History</span>
            </a>
        </li>

        <li>
            <a href="#message" onclick="">
                <i class="fa-solid fa-envelope"></i>
                <span class="link-name">Message</span>
            </a>
        </li>

        <li>
            <a href="#announcement" onclick="">
                <i class="fa-solid fa-bullhorn"></i>
                <span class="link-name">Announcement</span>
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