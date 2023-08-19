<footer class="footer-sec container">
  <div class="footer-nav">
    
    <div class="footer-nav-1 footer-nav-sec">
    <button onclick="fCom()" id="foot-com" class="foot-company">Company <i class="bi bi-chevron-right"></i></button>
    <ul id="footer-ul1" class="drop-company">
      <li><a href="">Home</a></li>
      <li><a href="">Services</a></li>
      <li><a href="">Product</a></li>
      <li><a href="">Contact</a></li>
      <li><a href="">About</a></li>
    </ul>
    </div>

    <div class="footer-nav-2 footer-nav-sec">
    <button onclick="fLink()" id="foot-lin" class="foot-link">Important Link <i class="bi bi-chevron-right"></i></button>
    <ul id="footer-ul2" class="drop-link">
      <li><a href="">Stockist</a></li>
      <li><a href="">Employee</a></li>
      <li><a href="">Manage Account</a></li>
      <li><a href="">Feedback </a></li>
      <li><a href="">Help & Support</a></li>
    </ul>
    </div>

    <div class="footer-nav-3 footer-nav-sec">
    <button onclick="fSocial()" id="foot-soc" class="foot-social">Social Links <i class="bi bi-chevron-right"></i></button>
    <ul id="footer-ul3" class="drop-social">
      <li><a href="">Facebook</a></li>
      <li><a href="">Instagram</a></li>
      <li><a href="">Twitter</a></li>
      <li><a href="">Youtube</a></li>
      <li><a href="">Website</a></li>
    </ul>
    </div>

    <div class="footer-nav-4">
      <img src="images/medvicoo.png" alt="">
      <p>Medvico Pharma Limited: Elevating Health through Excellence in Pharmaceuticals, Delivering Quality Medicines Worldwide with Dedication and Integrity.</p>
      <div class="footer-lang">
      <button>Subscribe</button>
      <a class="lang-btn" href="#"><i class="bi bi-globe-americas"></i> India | English</a>
      </div>
    </div>
</footer>

<script>
  /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function fCom() {
    document.getElementById("footer-ul1").classList.toggle("show");
    document.getElementById("foot-com").classList.toggle("foot-company");
  }
   
  function fLink() {
    document.getElementById("footer-ul2").classList.toggle("show");
    document.getElementById("foot-lin").classList.toggle("foot-link");
  }

  function fSocial() {
    document.getElementById("footer-ul3").classList.toggle("show");
    document.getElementById("foot-soc").classList.toggle("foot-social");
  }

  const hamburge = document.querySelector(".foot-company");





  </script>