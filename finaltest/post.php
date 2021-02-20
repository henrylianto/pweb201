<?php
require_once'header.php';
 ?>



<div class="container" style="margin-top: 40px;">
    <div>
        <div class="row">
            <div class="col-4"><img src="assets/img/popop.jpeg"><img></div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <h1 class="text-center">Test</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4 class="text-center">Oleh : Sugiyono</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h3 class="text-center">Tags :&nbsp;</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="btn-group d-lg-flex justify-content-lg-center" role="group"><button class="btn btn-primary" type="button" style="margin-right: 10px;">Button 1</button><button class="btn btn-primary" type="button" style="margin-right: 10px;">Button 2</button><button class="btn btn-primary" type="button">Button</button></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Paragraph</p>
                    </div>
                </div>
                <div class="row">
                  <div class = "col"id="disqus_thread"></div>
                  <script>
                      /**
                      *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                      *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                      /*
                      var disqus_config = function () {
                      this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                      this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                      };
                      */
                      (function() { // DON'T EDIT BELOW THIS LINE
                      var d = document, s = d.createElement('script');
                      s.src = 'https://makesies.disqus.com/embed.js';
                      s.setAttribute('data-timestamp', +new Date());
                      (d.head || d.body).appendChild(s);
                      })();
                  </script>
                  <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php
require_once'footer.php';
 ?>
