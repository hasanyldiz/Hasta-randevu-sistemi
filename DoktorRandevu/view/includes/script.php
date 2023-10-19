
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"></script>
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
      $('#telefonNumarasi').inputmask("(599) 999-9999");
      var bgsecler = document.getElementsByClassName("bgsec");
      for (var i = 0; i < bgsecler.length; i++) {
        var bgsec = bgsecler[i];
        var renk = bgsec.getAttribute("data-bgsec");
        bgsec.style.background = renk;
      }
    </script>
    
    <script src="js/swiper-bundle.min.js"></script>
    <!-- JavaScript -->
    <script src="js/script.js"></script>
    <script>
      var acc = document.getElementsByClassName("accordion");
      var i;
      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
          /* Toggle between adding and removing the "active" class,
          to highlight the button that controls the panel */
          this.classList.toggle("active");

          /* Toggle between hiding and showing the active panel */
          var panel = this.nextElementSibling;
          if (panel.style.display === "block") {
            panel.style.display = "none";
          } else {
            panel.style.display = "block";
          }
        });
      }


      <?php 
        if( array_key_exists("mesajVer", $_SESSION ) ){
          echo "
          
          swal({
            title : '$_SESSION[mesajbaslik]',
            text  : '$_SESSION[mesajIcerik]',
            icon  : '$_SESSION[mesajVer]',
          });";
        }

        unset($_SESSION["mesajVer"]);
      ?>

    </script>

    </body>

</html>