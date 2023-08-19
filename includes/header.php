<header id="header-nav" class="container">
  <div class="logo">
    <a  href="index.php">
    <img id="head-logo" src="images/medvicow.png">
    </a>
  </div>
  <div class="nav-items">
    <ul class="li-box">
      <li id="home-id"><a href="index.php" class="nav-menu">Home</a></li>
      <li id="company-id"><button onclick="myCompany()" id="com-btn" class="company-btn menu-btn nav-menu" data-dropdown="dropdown1" aria-haspopup="true" aria-expanded="false" aria-label="browse">Company <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down menu-svg company-btn" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/></svg>
      </button>
      <div id="dropdown1" class="dropdown-c drop-style">
        <div class="ul-item">
              <ul role="menu">
                <li role="menuitem">
                  <a class="dropdown-link" href="#best-of-the-day">
                    <i class="bi bi-capsule icon"></i>
                    <div>
                      <span class="dropdown-link-title">Product</span>
                      <p>All Company Product</p>
                    </div>
                  </a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="#featured-streams">
                  <i class="bi bi-people-fill icon"></i>
                    <div>
                      <span class="dropdown-link-title">Team</span>
                      <p>Medvico Official Team</p>
                    </div>
                  </a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="#subscriptions">
                  <i class="bi bi-shop-window icon"></i>
                    <div>
                      <span class="dropdown-link-title">Stockist</span>
                      <p>Company Authorised Stockist</p>
                    </div>
                  </a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link" href="#creative-feed">
                  <i class="bi bi-hourglass-split icon"></i>
                    <div>
                      <span class="dropdown-link-title">Upcomming</span>
                      <p>Our Upcomming Medicine</p>
                    </div>
                  </a>
                </li>
              </ul>
              </div>
              <div class="img-item">
              <img src="images/medicinebanner.jpg" width="400px" class="company-drop-img" alt="">
              </div>
            </div>
      </li>
      <li id="contact-id"><a href="contact.php" class="nav-menu">Contact Us</a></li>
      <li id="about-id"><a href="about.php" class="nav-menu">About</a></li>

      <li id="account-id"><button onclick="myAccount()" id="acc-btn" class="account-btn menu-btn nav-menu" data-dropdown="dropdown2" aria-haspopup="true" aria-expanded="false" aria-label="browse">Account <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down menu-svg account-btn" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/></svg>
      </button>
      <div id="dropdown2" class="dropdown-a drop-style2">
        <div class="ul-item">
              <ul role="menu">
                <li role="menuitem">
                  <a class="dropdown-link2" href="#featured-streams">
                  <i class="bi bi-person-circle"></i>
                    <div>
                      <span class="dropdown-link-title">Account</span>
                    </div>
                  </a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link2" href="#subscriptions">
                  <i class="bi bi-box-arrow-right"></i>
                    <div>
                      <span class="dropdown-link-title">Logout</span>
                    </div>
                  </a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link2" href="login.php">
                  <i class="bi bi-person-fill"></i>
                    <div>
                      <span class="dropdown-link-title">Login</span>
                    </div>
                  </a>
                </li>
                <li role="menuitem">
                  <a class="dropdown-link2" href="#creative-feed">
                  <i class="bi bi-person-fill-add"></i>
                    <div>
                      <span class="dropdown-link-title">Register</span>
                    </div>
                  </a>
                </li>
              </ul>
              </div>
              <div class="login-sec">
              
              </div>
            </div>
      </li>
    </ul>
    
  </div>
  <div class="hamburger">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>
</header>
<script>
  /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myCompany() {
    document.getElementById("dropdown1").classList.toggle("show");
    document.getElementById("com-btn").classList.toggle("comactivebtn");
  }
  function myAccount() {
    document.getElementById("dropdown2").classList.toggle("show");
    document.getElementById("acc-btn").classList.toggle("accactivebtn");
  }  

  // Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.company-btn')) {
    var dropdowns = document.getElementsByClassName("dropdown-c");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
  if (!event.target.matches('.company-btn')) {
    var dropdowns = document.getElementsByClassName("company-btn");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('comactivebtn')) {
        openDropdown.classList.remove('comactivebtn');
      }
    }
  }
  if (!event.target.matches('.account-btn')) {
    var dropdowns = document.getElementsByClassName("dropdown-a");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
  if (!event.target.matches('.account-btn')) {
    var dropdowns = document.getElementsByClassName("account-btn");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('accactivebtn')) {
        openDropdown.classList.remove('accactivebtn');
      }
    }
  }
}

const hamburger = document.querySelector(".hamburger");
const navItems = document.querySelector(".nav-items");
const liBox = document.querySelector(".li-box");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  navItems.classList.toggle("active");
  liBox.classList.toggle("active");
  

})

/*--------
document.querySelectorAll(".nav-menu").forEach(n => n.addEventListener("click", () => {
  hamburger.classList.remove("active");
  navItems.classList.remove("active");
  liBox.classList.remove("active");
}))
-----*/

 
</script>