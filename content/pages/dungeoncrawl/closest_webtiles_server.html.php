<?php $this->layout = 'dungeoncrawl'; ?>

<script src="/dungeoncrawl/server.js"></script>

<h2 style="color:orange">Closest Dungeon Crawl WebTiles server</h2>
<p>Select the option to allow this page to determine your location</p>

<div class="container">
  <div id="play"><h4 id="play-status" class="text-center">Finding closest WebTiles server...</h4>
                 <p class="text-center" id="play-list-message">Or select a server manually:</p>
                 <ul class="list-unstyled" id="play-list" style="width: 100%; text-align: center;"><li>Loading...</li></ul>
  </div>
</div>
