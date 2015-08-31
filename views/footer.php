
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <ul class="list-inline">
                <li class="pull-right"><a href="#top"><i class="fa fa-arrow-up"></i> Back to top</a></li>
                <!-- <li><a href="http://news.bootswatch.com" onclick="pageTracker._link(this.href); return false;">Blog</a></li> -->
                <li><a href="#">RSS</a></li>
                <li><a href="https://twitter.com/mosama_">Twitter</a></li>
                <li><a href="https://github.com/m-osama/bootswitch">GitHub</a></li>
                <li><a href="#">API</a></li>
                <li><a href="#">Support</a></li>
              </ul>

              <ul class="list-inline" style="margin-bottom : 0px;">
                        <li>Made by <a href="http://mosama.me" rel="nofollow">Mohammed Osama</a>. Contact him at</li>
                        <li><a href="http://twitter.com/mohammedosama_" class="tip" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom"><i class="fa fa-twitter" ></i></a></li>
                        <li><a href="http://plus.google.com/u/0/+MohammedOSamaAhmed" class="tip" data-toggle="tooltip" data-placement="bottom" title="google plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="http://blog.mosama.me" class="tip" data-toggle="tooltip" data-placement="bottom" title="my Blog"><i class="fa fa-wordpress" ></i></a></li>
                        <li><a href="http://be.net/mosama" class="tip" data-toggle="tooltip" data-placement="bottom" title="behance"><i class="fa fa-behance" ></i></a></li>
                        <li><a href="http://github.com/m-osama" class="tip" data-toggle="tooltip" data-placement="bottom" title="github"><i class="fa fa-github" ></i></a></li>
                        <!-- <li><a href="http://mosama.me/cv" class="tip" data-toggle="tooltip" data-placement="bottom" title="my CV"><i class="fa fa-file-text-o" ></i></a></li> -->
                      </ul>
              
              <p style="margin-bottom : 25px;">Based on <a href="http://getbootstrap.com" rel="nofollow">Bootstrap</a>. Icons from <a href="http://fortawesome.github.io/Font-Awesome/" rel="nofollow">Font Awesome</a>. Web fonts from <a href="http://www.google.com/webfonts" rel="nofollow">Google</a>.</p>


            </div>
          </div>
        </div>
      </footer>

    <!-- footer end here  -->

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
    <script src="themes/js/bootstrap.js"></script>
      <script src="themes/js/bootstrap.min.js"></script>
      <script src="themes/js/tooltip.js"></script>
      <script src="themes/js/bootswitch.js"></script>
      <script>$(function() {
        $('.tip').tooltip()
      });
      </script>
      <!-- if i need a tooltip on click --> <!-- data-trigger="click" -->
      <script aria-hidden="true" nonce="z2c/KUU1H7aIEDkZL8YYnN1Z/i4">window.boq_progress&&window.boq_progress(); window.jstiming&&window.jstiming.load.tick('bl');</script>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!-- Dropdown.js -->
    <script src="https://cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.js"></script>
    <script>
      $("#dropdown-menu select").dropdown();
    </script>
    
  </body>
</html>