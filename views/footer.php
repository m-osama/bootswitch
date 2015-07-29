
<!-- footer -->
    <div>
      <footer>
        <nav class="navbar  colorfooter">
          <div class="container-fluid">
          <div class="col-md-10 col-md-offset-1">
            <div class="navbar-header">
              <a class="navbar-brand" href="http://mosama.me/amr/index.html">Amr|Osama</a>
            </div>
            <div class="collapse navbar-collapse text3 navbar-right ">
                  <ul class="nav navbar-nav list-inline">
                    <li><a href="http://fb.com/mohammedosamaahmed"><i class="fa fa-facebook-official" title="facebook"></i></a></li>
                    <li><a href="http://twitter.com/mohammedosama_"><i class="fa fa-twitter" title="twitter"></i></a></li>
                    <li><a href="http://plus.google.com/u/0/+MohammedOSamaAhmed"><i class="fa fa-google-plus" title="google plus"></i></a></li>
                    <li><a href="http://blog.mosama.me"><i class="fa fa-wordpress" title="blog"></i></a></li>
                    <li><a href="http://be.net/mosama"><i class="fa fa-behance" title="behance"></i></a></li>
                    <li><a href="http://github.com/m-osama"><i class="fa fa-github-square" title="github"></i></a></li>
                    <li><a href="http://mosama.me/cv"><i class="fa fa-file-text-o" title="CV"></i></a></li>
                  </ul>
            </div>
            </div>
          </div>
        </nav>
      </footer>
    </div>
    <!-- footer end  -->

    <!-- Material Design for Bootstrap -->
    <script src="dist/js/material.min.js"></script>
    <!-- Open source code -->
    <script>
      window.page = window.location.hash || "#about";

      $(document).ready(function() {
        if (window.page != "#about") {
          $(".menu").find("li[data-target=" + window.page + "]").trigger("click");
        }
      });

      $(window).on("resize", function() {
        $("html, body").height($(window).height());
        $(".main, .menu").height($(window).height() - $(".header-panel").outerHeight());
        $(".pages").height($(window).height());
      }).trigger("resize");

      $(".menu li").click(function() {
        // Menu
        if (!$(this).data("target")) return;
        if ($(this).is(".active")) return;
        $(".menu li").not($(this)).removeClass("active");
        $(".page").not(page).removeClass("active").hide();
        window.page = $(this).data("target");
        var page = $(window.page);
        window.location.hash = window.page;
        $(this).addClass("active");


        page.show();

        var totop = setInterval(function() {
          $(".pages").animate({scrollTop:0}, 0);
        }, 1);

        setTimeout(function() {
          page.addClass("active");
          setTimeout(function() {
            clearInterval(totop);
          }, 1000);
        }, 100);
      });

      function cleanSource(html) {
        var lines = html.split(/\n/);

        lines.shift();
        lines.splice(-1, 1);

        var indentSize = lines[0].length - lines[0].trim().length,
            re = new RegExp(" {" + indentSize + "}");

        lines = lines.map(function(line){
          if (line.match(re)) {
            line = line.substring(indentSize);
          }

          return line;
        });

        lines = lines.join("\n");

        return lines;
      }

      $("#opensource").click(function() {
        $.get(window.location.href, function(data){
          var html = $(data).find(window.page).html();
          html = cleanSource(html);
          $("#source-modal pre").text(html);
          $("#source-modal").modal();
        });
      });
    </script>

    <!-- Twitter Bootstrap -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- Material Design for Bootstrap -->
    <script src="dist/js/material.min.js"></script>
    <script src="dist/js/ripples.min.js"></script>
    <script>
      $.material.init();
    </script>


    <!-- Sliders -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
    <script>
      $(function() {
        $.material.init();
        $(".shor").noUiSlider({
          start: 40,
          connect: "lower",
          range: {
            min: 0,
            max: 100
          }
        });

        $(".svert").noUiSlider({
          orientation: "vertical",
          start: 40,
          connect: "lower",
          range: {
            min: 0,
            max: 100
          }
        });
      });
    </script>

    <!-- Dropdown.js -->
    <script src="https://cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.js"></script>
    <script>
      $("#dropdown-menu select").dropdown();
    </script>
  </body>
</html>