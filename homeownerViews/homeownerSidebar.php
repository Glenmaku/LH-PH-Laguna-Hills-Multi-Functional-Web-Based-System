    <div class="ownerSidebar" id="narbar-to-collapse">
        <button type="button" class="sidebar-btn_close justify-item-center" onclick="close_sidebar()">
            <span aria-hidden="true" class="">&times;</span>
        </button>
        <div class="logo-details">
            <img src="./assets/images/logo-icon.png">
            <span class="logo-name"> The Laguna Hills</span>
        </div>
        <ul class="nav-links list-unstyled">
            <li>
                <a href="homeowneraccountconnect.php" class="ps-4">
                    <i class="fa-solid fa-border-all"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#map" onclick="showHomeMap()" class="ps-4">
                    <i class="fa-solid fa-map"></i>
                    <span>Map</span>
                </a>
            </li>
            <!-- <li>
                <a href="#message" onclick="showMessage()" class="ps-4">
                    <i class="fa-solid fa-envelope"></i>
                    <span class="link-name">Messages</span>
                </a>
            </li> -->
            <li>
                <a href="#transaction" onclick="showHomeTrans()" class="ps-4">
                    <i class="fa-solid fa-calculator"></i>
                    <span>Transaction History</span>
                </a>
            </li>
            <li>
                <a href="#announcements" onclick="showHomeAnnounce()" class="ps-4">
                    <i class="fa-solid fa-bullhorn"></i>
                    <span>Announcement <span id="notif-announce" style="color:red;"></span></span>
                </a>
            </li>

        </ul>
    </div>
    </div>


    <script>
        function close_sidebar() {
            $(document).on('click', '.sidebar-btn_close', function() {
                $('.ownerSidebar').prop('hidden', true);
            })
        }

        function open_sidebar() {
            $(document).on('click', '.nav-responsives', function() {
                $('.ownerSidebar').prop('hidden', false);

            });
        }

        function showHomeAnnounce() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("notif-announce").innerHTML = this.responseText;
                    if (this.responseText !== "0") {
                        document.getElementById("notif-announce").addEventListener("click", function() {
                            document.getElementById("notif-announce").innerHTML = "0";
                        });
                    }
                }
            };
            xhttp.open("GET", "homeownerViews/includes/act-displayHomeAnnounce.php", true);
            xhttp.send();
        }
    </script>