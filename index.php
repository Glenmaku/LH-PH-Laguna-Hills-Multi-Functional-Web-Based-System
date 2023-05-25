<?php include "header.php"; ?>
<div id="contents" class="HomeContents">

</div>

<script>
    function toggleNavbar() {
        var navbar = document.getElementById("navbarNav");
        if (navbar.classList.contains("show")) {
            navbar.classList.remove("show");
        } else {
            navbar.classList.add("show");
        }
    }
</script>
<script>
    // Function to scroll to the top
    function scrollToTop() {
      var element = document.getElementById("top");
      element.scrollIntoView();
    }

    // Callback function to execute when DOM changes occur
    var observer = new MutationObserver(function(mutationsList) {
      for (var mutation of mutationsList) {
        if (mutation.type === "childList") {
          scrollToTop();
          break;
        }
      }
    });

    // Configure and start observing changes in the contents div
    var targetNode = document.getElementById("contents");
    var config = { childList: true };
    observer.observe(targetNode, config);

    // Hide spinner and scroll to top when the window finishes loading
    const spinnerWrapperEl = document.querySelector('.pre-loading-home');
    window.addEventListener('load', () => {
      spinnerWrapperEl.style.opacity = '0';
      setTimeout(() => {
        spinnerWrapperEl.style.display = 'none';
        scrollToTop();
      }, 1000);
    });

  function activateNav(navId) {
  // Remove "active" class from all navigation links
  var navLinks = document.getElementsByClassName("nav-link");
  for (var i = 0; i < navLinks.length; i++) {
    navLinks[i].classList.remove("active");
  }

  // Add "active" class to the specified navigation link
  var navElement = document.getElementById(navId);
  navElement.classList.add("active");
}
 </script>
<?php include "footer.php"; ?>

