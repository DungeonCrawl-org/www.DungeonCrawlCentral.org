<?php $this->layout = 'dungeoncrawl'; ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="js/dcss.js"></script>

<h1 style="color:orange">Closest Dungeon Crawl WebTiles server</h1>
<p>Select the option to allow this page to determine your location</p>

<div class="container">
  <div id="play"><h2 id="play-status" class="text-center">Finding closest WebTiles server...</h2>
                 <p class="text-center" id="play-list-message">Or select a server manually:</p>
                 <ul class="list-unstyled" id="play-list" style="width: 100%; text-align: center;"><li>Loading...</li></ul>
  </div>
</div>
