<!DOCTYPE html>
<html lang="en">
 <?php 
  include 'views/header.php';
 ?>



    <div class="container">
      <div class="row">
        <div class="col-lg-9">
            <h1 id="quickstart">Quick Start</h1>
            <p>Using the themes is as easy as downloading a CSS file and replacing the one that comes with <a href="http://getbootstrap.com" target="_blank">Bootstrap</a>.</p>
            <p>The themes are also available via CDN at <a href="http://www.bootstrapcdn.com/bootswatch/">BootstrapCDN</a>.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-9">
            <h1 id="customization">Customization</h1>
            <p>To modify a theme or create your own, follow the steps below in your terminal. You'll need to have <a href="https://help.github.com/articles/set-up-git" target="_blank">Git</a> and <a href="http://nodejs.org/" target="_blank">Node</a> installed.</p>
            <ol>
              <li><p>Download the repository: <code>git clone https://github.com/m-osama/bootswitch.git</code></p></li>
              <li><p>Install dependencies: <code>npm install</code></p></li>
              <li><p>Make sure that you have <code>grunt</code> available in the command line. You can install <code>grunt-cli</code> as described on the <a href="http://gruntjs.com/getting-started">Grunt Getting Started page</a>.</p></li>
              <li><p>Modify <code>variables.less</code> and <code>bootswatch.less</code> in one of the theme directories, or create your own in <code>/custom</code>.</p></li>
              <li><p>Type <code>grunt swatch:[theme]</code> to build the CSS for a theme, e.g., <code>grunt swatch:amelia</code> for Amelia. Or type <code>grunt swatch</code> to build them all at once. </p></li>
              <li><p>You can run <code>grunt</code> to start a server, watch for any changes to the LESS files, and automatically build a theme and reload it on change. Run <code>grunt server</code> for just the server, and <code>grunt watch</code> for just the watcher.</p></li>
            </ol>
            <p>Here are additional tips for <a href="http://getbootstrap.com/customize/" target="_blank">customizing Bootstrap 3</a>.</p>
          </div>
        </div>




        <div class="row">
          <div class="col-lg-9">
            <h1 id="bookmarklet">Bookmarklet</h1>
            <p>Drag <a class="label label-info" href="javascript:(function(e,a,g,h,f,c,b,d)%7Bif(!(f%3De.jQuery)%7C%7Cg%3Ef.fn.jquery%7C%7Ch(f))%7Bc%3Da.createElement(%22script%22)%3Bc.type%3D%22text/javascript%22%3Bc.src%3D%22//ajax.googleapis.com/ajax/libs/jquery/%22%2Bg%2B%22/jquery.min.js%22%3Bc.onload%3Dc.onreadystatechange%3Dfunction()%7Bif(!b%26%26(!(d%3Dthis.readyState)%7C%7Cd%3D%3D%22loaded%22%7C%7Cd%3D%3D%22complete%22))%7Bh((f%3De.jQuery).noConflict(1),b%3D1)%3Bf(c).remove()%7D%7D%3Ba.documentElement.childNodes%5B0%5D.appendChild(c)%7D%7D)(window,document,%221.3.2%22,function(%24,L)%7Bif(%24(%22.bootswatcher%22)%5B0%5D)%7B%24(%22.bootswatcher%22).remove()%7Delse%7Bvar%20%24e%3D%24(%27%3Cselect%20class%3D%22bootswatcher%22%3E%3Coption%3ECerulean%3C/option%3E%3Coption%3ECosmo%3C/option%3E%3Coption%3ECyborg%3C/option%3E%3Coption%3EDarkly%3C/option%3E%3Coption%3EFlatly%3C/option%3E%3Coption%3EJournal%3C/option%3E%3Coption%3ELumen%3C/option%3E%3Coption%3EPaper%3C/option%3E%3Coption%3EReadable%3C/option%3E%3Coption%3ESandstone%3C/option%3E%3Coption%3ESimplex%3C/option%3E%3Coption%3ESlate%3C/option%3E%3Coption%3ESpacelab%3C/option%3E%3Coption%3ESuperhero%3C/option%3E%3Coption%3EUnited%3C/option%3E%3Coption%3EYeti%3C/option%3E%3C/select%3E%27)%3Bvar%20l%3D1%2BMath.floor(Math.random()*%24e.children().length)%3B%24e.css(%7B%22z-index%22:%2299999%22,position:%22fixed%22,top:%225px%22,right:%225px%22,opacity:%220.5%22,color:%22%23000%22%7D).hover(function()%7B%24(this).css(%22opacity%22,%221%22)%7D,function()%7B%24(this).css(%22opacity%22,%220.5%22)%7D).change(function()%7Bif(!%24(%22link.bootswatcher%22)%5B0%5D)%7B%24(%22head%22).append(%27%3Clink%20rel%3D%22stylesheet%22%20class%3D%22bootswatcher%22%3E%27)%7D%24(%22link.bootswatcher%22).attr(%22href%22,%22//bootswatch.com/%22%2B%24(this).find(%22:selected%22).text().toLowerCase()%2B%22/bootstrap.min.css%22)%7D).find(%22option:nth-child(%22%2Bl%2B%22)%22).attr(%22selected%22,%22selected%22).end().trigger(%22change%22)%3B%24(%22body%22).append(%24e)%7D%3B%7D)%3B">Bootswatchlet</a> into your bookmarks bar, and use it on Bootstrap-based sites to see how they'd look with a theme.</p>
            <p></p>

            <h1 id="glyphsearch">GlyphSearch</h1>
            <p>Use <a href="http://glyphsearch.com/" target="_blank">GlyphSearch</a> to find the icons you need from Glyphicons, Font Awesome, and other popular icon font libraries.</p>


        </div>
      </div>
    </div>
    <br><br><br>



   <?php 
  include 'views/footer.php';
   ?>
</html>
