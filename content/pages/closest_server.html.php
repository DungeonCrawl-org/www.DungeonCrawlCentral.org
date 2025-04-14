<?php $this->layout = 'default'; ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js"></script>

<script type="text/javascript" src="/js/closest_server.js"></script>

<h2 style="color:orange">Closest Dungeon Crawl server</h2>
<p>Select the option to allow this page to determine your location</p>

<div class="container">
  <div id="play"><h4 id="play-status" class="text-center">Finding closest server...Please wait!</h4>
                 <ul class="list-unstyled" id="play-list" style="width: 100%;"><li>Loading...</li></ul>
  </div>
</div>
