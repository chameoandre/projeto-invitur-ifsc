
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Layout de teste</title>
    <!-- Favicons-->
    <link href="materialize/css/materialize.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="//cdn.transifex.com/live.js"></script>
  </head>
  <body>
    <header>
      <nav class="top-nav">
        <div class="container">
          <div class="nav-wrapper"><a class="page-title">Grid</a></div>
        </div>
      </nav>
      <div class="container">
          <a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="mdi-navigation-menu"></i></a></div>
          
      <ul id="nav-mobile" class="side-nav fixed">
        <li class="logo"><a id="logo-container" href="http://materializecss.com/" class="brand-logo">
            <object id="front-page-logo" type="image/svg+xml" data="res/materialize.svg">Your browser does not support SVG</object></a></li>
        <li class="bold"><a href="about.html" class="waves-effect waves-teal">About</a></li>
        <li class="bold"><a href="getting-started.html" class="waves-effect waves-teal">Getting Started</a></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header active waves-effect waves-teal">CSS</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="color.html">Color</a></li>
                  <li class="active"><a href="grid.html">Grid</a></li>
                  <li><a href="helpers.html">Helpers</a></li>
                  <li><a href="media-css.html">Media</a></li>
                  <li><a href="sass.html">Sass</a></li>
                  <li><a href="shadow.html">Shadow</a></li>
                  <li><a href="table.html">Table</a></li>
                  <li><a href="typography.html">Typography</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Components</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="badges.html">Badges</a></li>
                  <li><a href="buttons.html">Buttons</a></li>
                  <li><a href="cards.html">Cards</a></li>
                  <li><a href="collections.html">Collections</a></li>
                  <li><a href="footer.html">Footer</a></li>
                  <li><a href="forms.html">Forms</a></li>
                  <li><a href="icons.html">Icons</a></li>
                  <li><a href="navbar.html">Navbar</a></li>
                  <li><a href="pagination.html">Pagination</a></li>
                  <li><a href="preloader.html">Preloader</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">JavaScript</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="collapsible.html">Collapsible</a></li>
                  <li><a href="dialogs.html">Dialogs</a></li>
                  <li><a href="dropdown.html">Dropdown</a></li>
                  <li><a href="media.html">Media</a></li>
                  <li><a href="modals.html">Modals</a></li>
                  <li><a href="parallax.html">Parallax</a></li>
                  <li><a href="pushpin.html">Pushpin</a></li>
                  <li><a href="scrollfire.html">ScrollFire</a></li>
                  <li><a href="scrollspy.html">Scrollspy</a></li>
                  <li><a href="side-nav.html">SideNav</a></li>
                  <li><a href="tabs.html">Tabs</a></li>
                  <li><a href="transitions.html">Transitions</a></li>
                  <li><a href="waves.html">Waves</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li class="bold"><a href="http://materializecss.com/mobile.html" class="waves-effect waves-teal">Mobile</a></li>
        <li class="bold"><a href="showcase.html" class="waves-effect waves-teal">Showcase</a></li>
      </ul>
        
    </header>
    <main><div class="container">
  <div class="row">

    <div class="col s12 m9 l10">


      <div>
        <div id="grid-container" class="section scrollspy">
          <p class="caption">We are using a standard 12 column fluid responsive grid system.The grid helps you layout your page in an ordered, easy fashion</p>
          <h3 class="header">Container</h3>
          <p>The container class is not strictly part of the grid but is important in laying out content. It allows you to center your page content. The <code class="language-markup">container</code> class is set to ~70% of the window width. It helps you center and contain your page content. We use the container to contain our body content.

          <h4>Demo</h4>
          <p>Try the button below to see what the page looks like without containers</p>
          <a id="container-toggle-button" class="btn waves-effect waves-light">Turn off Containers</a>

  <!-- Container Visual Demo -->
          <div class="row">
            <div class="col s12">
              <div class='browser-window'>
                <div class='top-bar'>
                  <div class='circles'>
                     <div id="close-circle" class="circle"></div>
                     <div id="minimize-circle" class="circle"></div>
                     <div id="maximize-circle" class="circle"></div>
                  </div>
                </div>
                <div class='content'>
                  <div class="row">

                    <div id="site-layout-example-top" class="col s12">
                      <!-- <p class="flat-text-logo"></p> -->
                    </div>
                    <div id="site-layout-example-right" class="col s12">
                      <div class="container">

                        <p class="flat-text small"></p>
                        <p class="flat-text full-width"></p>
                        <p class="flat-text full-width"></p>
                        <p class="flat-text full-width"></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <p>To add a container just put your content inside a <code class="language-markup">&lt;div></code> tag with a <code class="language-markup">container</code> class. Here's an example of how your page might be set up.</p>

          <pre><code class="language-markup">
    &lt;body>
      &lt;div class="container">
        &lt;!-- Page Content goes here -->
      &lt;/div>
    &lt;/body>
          </code></pre>

        </div>


        <!-- Grid visual demo -->
        <div id="grid-intro" class="scrollspy">
          <h3 class="header">Introduction</h3>
          <p>Take a look at this section to quickly understand how the grid works!</p>
          <h4>12 Columns</h4>
          <p>Our standard grid has 12 columns. No matter the size of the browser, each of these columns will always have an equal width.</p>
          <div class="row">
            <div class="col s1 grid-example"><span class="flow-text">1</span></div>
            <div class="col s1 grid-example"><span class="flow-text">2</span></div>
            <div class="col s1 grid-example"><span class="flow-text">3</span></div>
            <div class="col s1 grid-example"><span class="flow-text">4</span></div>
            <div class="col s1 grid-example"><span class="flow-text">5</span></div>
            <div class="col s1 grid-example"><span class="flow-text">6</span></div>
            <div class="col s1 grid-example"><span class="flow-text">7</span></div>
            <div class="col s1 grid-example"><span class="flow-text">8</span></div>
            <div class="col s1 grid-example"><span class="flow-text">9</span></div>
            <div class="col s1 grid-example"><span class="flow-text">10</span></div>
            <div class="col s1 grid-example"><span class="flow-text">11</span></div>
            <div class="col s1 grid-example"><span class="flow-text">12</span></div>
          </div>
          <p>To get a feel of how the grid is used in HTML, take a look at the code below which will produce a similar result to the one above.</p>
          <pre><code class="language-markup">
    &lt;div class="row">
      &lt;div class="col s1">1&lt;/div>
      &lt;div class="col s1">2&lt;/div>
      &lt;div class="col s1">3&lt;/div>
      &lt;div class="col s1">4&lt;/div>
      &lt;div class="col s1">5&lt;/div>
      &lt;div class="col s1">6&lt;/div>
      &lt;div class="col s1">7&lt;/div>
      &lt;div class="col s1">8&lt;/div>
      &lt;div class="col s1">9&lt;/div>
      &lt;div class="col s1">10&lt;/div>
      &lt;div class="col s1">11&lt;/div>
      &lt;div class="col s1">12&lt;/div>
    &lt;/div>
          </code></pre>
          <p>Note: For now, just know that the <code class="language-markup">s1</code> stands for small-1 which in plain English means "1 column on small screens".</p>

          <br>

          <h4>Columns live inside Rows</h4>
          <p>Remember when you are creating your layout that all columns must be contained inside a row and that you must add the <code class="language-markup">col</code> class to your inner divs to make them into columns</p>
          <div class="row">
            <div class="col s12 grid-example"><span class="flow-text">This div is 12-columns wide on all screen sizes</span></div>
            <div class="col s6 grid-example"><span class="flow-text">6-columns (one-half)</span></div>
            <div class="col s6 grid-example"><span class="flow-text">6-columns (one-half)</span></div>
          </div>
          <pre><code class="language-markup">
    &lt;div class="row">
      &lt;div class="col s12">This div is 12-columns wide&lt;/div>
      &lt;div class="col s6">This div is 6-columns wide&lt;/div>
      &lt;div class="col s6">This div is 6-columns wide&lt;/div>
    &lt;/div>
          </code></pre>

          <br>
        </div>
        <div id="grid-offsets" class="section scrollspy">
          <h2 class="header">Offsets</h2>
          <p>To offset, simply add <code class="language-markup">offset-s2</code> to the class where <code class="language-markup">s</code> signifies the screen class-prefix (s = small, m = medium, l = large) and the number after is the number of columns you want to offset by.</p>
          <div class="row">
            <div class="col s12 grid-example"><span class="flow-text">This div is 12-columns wide on all screen sizes</span></div>
            <div class="col s6 offset-s6 grid-example"><span class="flow-text">6-columns (offset-by-6)</span></div>
          </div>
          <pre><code class="language-markup">
    &lt;div class="row">
      &lt;div class="col s12 grid-example">&lt;span class="flow-text">This div is 12-columns wide on all screen sizes&lt;/span>&lt;/div>
      &lt;div class="col s6 offset-s6 grid-example">&lt;span class="flow-text">6-columns (offset-by-6)&lt;/span>&lt;/div>
    &lt;/div>
          </code></pre>
        </div>

        <br>

        <!-- Creating Layouts -->
        <div id="grid-layouts" class="scrollspy">
          <h3 class="header">Creating Layouts</h3>
          <p>Here we will show you how to create some commonly used layouts with our grid system. Hopefully these will get you more comfortable with laying out elements. To keep these demos simple, the ones here will not be responsive.</p>
          <div class="row">
            <div class="col s12 m6">
              <h4>Section</h4>
              <p>The section class is used for simple top and bottom padding. Just add the <code class="language-markup">section</code> class to your div's containing large blocks of content.</p>
            </div>
            <div class="col s12 m6">
              <h4>Divider</h4>
              <p>Dividers are 1 pixel lines that help break up your content. Just add the <code class="language-markup">divider</code> to a div in between your content.</p>
            </div>
          </div>

          <h4>Example Sections and Dividers</h4>
          <div class="divider"></div>
          <div class="section">
            <h5>Section 1</h5>
            <p>Stuff</p>
          </div>
          <div class="divider"></div>
          <div class="section">
            <h5>Section 2</h5>
            <p>Stuff</p>
          </div>
          <div class="divider"></div>
          <div class="section">
            <h5>Section 3</h5>
            <p>Stuff</p>
          </div>
          <div class="divider"></div>
          <pre><code class="language-markup">
  &lt;div class="divider">&lt;/div>
  &lt;div class="section">
    &lt;h5>Section 1&lt;/h5>
    &lt;p>Stuff&lt;/p>
  &lt;/div>
  &lt;div class="divider">&lt;/div>
  &lt;div class="section">
    &lt;h5>Section 2&lt;/h5>
    &lt;p>Stuff&lt;/p>
  &lt;/div>
  &lt;div class="divider">&lt;/div>
  &lt;div class="section">
    &lt;h5>Section 3&lt;/h5>
    &lt;p>Stuff&lt;/p>
  &lt;/div>
          </code></pre><br>

          <h4>Example Promotion Table</h4>
          <p>If we want 3 divs that are equal size, we define the divs with a width of 4-columns, 4+4+4 = 12, which nicely adds up to 12. Inside those divs, we can put our content. Take our front page content for example. We've modified it slightly for the sake of this example.</p>
          <div class="row">
            <div class="col s4">
              <div class="center promo promo-example">
                <i class="material-icons">flash_on</i>
                <p class="promo-caption">Speeds up development</p>
                <p class="light center">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components.</p>
              </div>
            </div>
            <div class="col s4">
              <div class="center promo promo-example">
                <i class="material-icons">group</i>
                <p class="promo-caption">User Experience Focused</p>
                <p class="light center">By utilizing elements and principles of Material Design, we were able to create a framework that focuses on User Experience.</p>
              </div>
            </div>
            <div class="col s4">
              <div class="center promo promo-example">
                <i class="material-icons">settings</i>
                <p class="promo-caption">Easy to work with</p>
                <p class="light center">We have provided detailed documentation as well as specific code examples to help new users get started.</p>
              </div>
            </div>
          </div>

          <pre><code class="language-markup">
    &lt;div class="row">

      &lt;div class="col s4">
        &lt;!-- Promo Content 1 goes here -->
      &lt;/div>
      &lt;div class="col s4">
        &lt;!-- Promo Content 2 goes here -->
      &lt;/div>
      &lt;div class="col s4">
        &lt;!-- Promo Content 3 goes here -->
      &lt;/div>

    &lt;/div>
          </code></pre>

          <br>

          <h4>Example Side Navigation Layout</h4>
          <p>You can see how easy it is to create layouts using the grid system. Just remember to make sure your column numbers add up to 12 for an even layout.</p>

          <div class="row">
            <div class="col s12">
              <div class='browser-window'>
                <div class='top-bar'>
                  <div class='circles'>
                     <div id="close-circle" class="circle"></div>
                     <div id="minimize-circle" class="circle"></div>
                     <div id="maximize-circle" class="circle"></div>
                  </div>
                </div>
                <div class='content'>
                  <div class="row">

                    <div id="site-layout-example-top" class="col s12">
                      <!-- <p class="flat-text-logo"></p> -->
                    </div>
                    <div id="site-layout-example-left" class="col s3">
                      <p class="flat-text-header"></p>
                      <p class="flat-text"></p>
                      <p class="flat-text"></p>
                    </div>
                    <div id="site-layout-example-right" class="col s9">
                      <p class="flat-text"></p>
                      <p class="flat-text"></p>
                      <p class="flat-text"></p>
                      <p class="flat-text"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <pre><code class="language-markup">
    &lt;!-- Navbar goes here -->

    &lt;!-- Page Layout here -->
    &lt;div class="row">

      &lt;div class="col s3">
        &lt;!-- Grey navigation panel -->
      &lt;/div>

      &lt;div class="col s9">
        &lt;!-- Teal page content  -->
      &lt;/div>

    &lt;/div>
          </code></pre>
        </div>


        <!-- Creating Responsive Layouts -->
        <div id="grid-responsive" class="scrollspy">
          <h3 class="header">Creating Responsive Layouts</h3>
          <p>Above we showed you how to layout elements using our grid system. Now we'll show you how to design your layouts so that they look great on all screen sizes.</p>
          <h4>Screen Sizes</h4>
          <table class="hoverable">
            <thead>
              <tr>
                  <th></th>
                  <th data-field="id">Mobile Devices <br>&lt;= 600px</th>
                  <th data-field="name">Tablet Devices <br>&lt;= 992px</th>
                  <th data-field="price">Desktop Devices <br>&gt; 992px</th>
              </tr>
            </thead>
              <tbody>
              <tr>
                <td><strong>Class Prefix</strong></td>
                <td><code class="language-markup">.s</code></td>
                <td><code class="language-markup">.m</code></td>
                <td><code class="language-markup">.l</code></td>
              </tr>
              <tr>
                <td><strong>Container Width</strong></td>
                <td>85%</td>
                <td>85%</td>
                <td>70%</td>
              </tr>
              <tr>
                <td><strong>Number of Columns</strong></td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
              </tr>
            </tbody>
          </table>

          <br>

          <h4>Adding Responsiveness</h4>
          <p>In the previous examples, we only defined the size for small screens using <code class="language-markup">"col s12"</code>. This is fine if we want a fixed layout since the rules propagate upwards. By just saying s12, we are essentially saying <code class="language-markup">"col s12 m12 l12"</code>. But by explicitly defining the size we can make our website more responsive.</p>

          <div class="row">
            <div class="grid-example col s12 teal lighten-2"><span class="flow-text">I am always full-width (col s12)</span></div>
            <div class="grid-example col s12 m6 teal lighten-2"><span class="flow-text">I am full-width on mobile (col s12 m6)</span></div>
          </div>
          <pre><code class="language-markup">
    &lt;div class="row">
      &lt;div class="grid-example col s12">&lt;span class="flow-text">I am always full-width (col s12)&lt;/span>&lt;/div>
      &lt;div class="grid-example col s12 m6">&lt;span class="flow-text">I am full-width on mobile (col s12 m6)&lt;/span>&lt;/div>
    &lt;/div>
          </code></pre>

          <br>

          <h4>Responsive Side Navigation Layout</h4>
          <p>In this example below, we take the same layout from above, but we make it responsive by defining how many columns the div should take up on each screen size. Try resizing your browser and watch the layout change below.</p>

          <div class="row">
            <div class="col s12">
              <div class='browser-window'>
                <div class='top-bar'>
                  <div class='circles'>
                     <div id="close-circle" class="circle"></div>
                     <div id="minimize-circle" class="circle"></div>
                     <div id="maximize-circle" class="circle"></div>
                  </div>
                </div>
                <div class='content'>
                  <div class="row">

                    <div id="site-layout-example-top" class="col s12">
                      <!-- <p class="flat-text-logo"></p> -->
                    </div>
                    <div id="site-layout-example-left" class="col s12 m4 l3">
                      <p class="flat-text-header"></p>
                      <p class="flat-text"></p>
                      <p class="flat-text"></p>
                    </div>
                    <div id="site-layout-example-right" class="col s12 m8 l9">
                      <p class="flat-text"></p>
                      <p class="flat-text"></p>
                      <p class="flat-text"></p>
                      <p class="flat-text"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <pre><code class="language-markup">
    &lt;!-- Navbar goes here -->

    &lt;!-- Page Layout here -->
    &lt;div class="row">

      &lt;div class="col s12 m4 l3"> &lt;!-- Note that "m4 l3" was added -->
        &lt;!-- Grey navigation panel

              This content will be:
          3-columns-wide on large screens,
          4-columns-wide on medium screens,
          12-columns-wide on small screens  -->

      &lt;/div>

      &lt;div class="col s12 m8 l9"> &lt;!-- Note that "m8 l9" was added -->
        &lt;!-- Teal page content

              This content will be:
          9-columns-wide on large screens,
          8-columns-wide on medium screens,
          12-columns-wide on small screens  -->

      &lt;/div>

    &lt;/div>
          </code></pre>

          <h4>More Responsive Grid Examples</h4>
          <div class="row">
            <div class="col grid-example s12 blue lighten-1"><span class="flow-text">s12</span></div>
            <div class="col grid-example s12 m4 l2 teal lighten-1"><span class="flow-text">s12 m4 l2</span></div>
            <div class="col grid-example s12 m4 l8 teal lighten-1"><span class="flow-text">s12 m4 l8</span></div>
            <div class="col grid-example s12 m4 l2 teal lighten-1"><span class="flow-text">s12 m4 l2</span></div>
            <div class="col grid-example s12 m6 l3 purple lighten-3"><span class="flow-text">s12 m6 l3</span></div>
            <div class="col grid-example s12 m6 l3 purple lighten-3"><span class="flow-text">s12 m6 l3</span></div>
            <div class="col grid-example s12 m6 l3 purple lighten-3"><span class="flow-text">s12 m6 l3</span></div>
            <div class="col grid-example s12 m6 l3 purple lighten-3"><span class="flow-text">s12 m6 l3</span></div>
          </div>
          <div class="row">
            <pre><code class="language-markup col s12">
  &lt;div class="row">
    &lt;div class="col s12">&lt;p>s12&lt;/p>&lt;/div>
    &lt;div class="col s12 m4 l2">&lt;p>s12 m4&lt;/p>&lt;/div>
    &lt;div class="col s12 m4 l8">&lt;p>s12 m4&lt;/p>&lt;/div>
    &lt;div class="col s12 m4 l2">&lt;p>s12 m4&lt;/p>&lt;/div>
  &lt;/div>
  &lt;div class="row">
    &lt;div class="col s12 m6 l3">&lt;p>s12 m6 l3&lt;/p>&lt;/div>
    &lt;div class="col s12 m6 l3">&lt;p>s12 m6 l3&lt;/p>&lt;/div>
    &lt;div class="col s12 m6 l3">&lt;p>s12 m6 l3&lt;/p>&lt;/div>
    &lt;div class="col s12 m6 l3">&lt;p>s12 m6 l3&lt;/p>&lt;/div>
  &lt;/div>
            </code></pre>
          </div>
        </div>
      </div>


    </div>

    <div class="col hide-on-small-only m3 l2">
      <div class="toc-wrapper">
        <div class="buysellads hide-on-small-only">
          <!-- CarbonAds Zone Code -->
          <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=materializecss" id="_carbonads_js"></script>
        </div>
        <div style="height: 1px;">
          <ul class="section table-of-contents">
            <li><a href="#grid-container">Container</a></li>
            <li><a href="#grid-intro">Introduction</a></li>
            <li><a href="#grid-offsets">Offsets</a></li>
            <li><a href="#grid-layouts">Creating Layouts</a></li>
            <li><a href="#grid-responsive">Responsive Layouts</a></li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</div>

    </main>    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l4 s12">
            <h5 class="white-text">Help Materialize Grow</h5>
            <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
            <form id="paypal-donate" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<button class="btn waves-effect waves-light red lighten-3" type="submit" name="action" alt="PayPal - The safer, easier way to pay online!">Donate Now
</button>
</form>

          </div>
          <div class="col l4 s12">
            <h5 class="white-text">Join the Discussion</h5>
            <p class="grey-text text-lighten-4">We have a Gitter chat room set up where you can talk directly with us. Come in and discuss new features, future goals, general problems or questions, or anything else you can think of.</p>
            <a class="btn waves-effect waves-light red lighten-3" target="_blank" href="https://gitter.im/Dogfalo/materialize">Chat</a>
          </div>
          <div class="col l4 s12" style="overflow: hidden;">
            <h5 class="white-text">Connect</h5>
            <iframe src="http://ghbtns.com/github-btn.html?user=dogfalo&repo=materialize&type=watch&count=true&size=large" allowtransparency="true" frameborder="0" scrolling="0" width="170" height="30"></iframe>
            <br>
            <a href="https://twitter.com/MaterializeCSS" class="twitter-follow-button" data-show-count="true" data-size="large" data-dnt="true">Follow @MaterializeCSS</a>
            <br>
            <div class="g-follow" data-annotation="bubble" data-height="24" data-href="https://plus.google.com/108619793845925798422" data-rel="publisher"></div>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2014-2015 Materialize, All rights reserved.
        <a class="grey-text text-lighten-4 right" href="https://github.com/Dogfalo/materialize/blob/master/LICENSE">MIT License</a>
        </div>
      </div>
    </footer>
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script>if (!window.jQuery) { document.write('<script src="bin/jquery-2.1.1.min.js"><\/script>'); }
    </script>

    <script src="bin/materialize.js"></script>
    <script src="js/init.js"></script>

    <!-- Google Plus Button-->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  </body>
</html>