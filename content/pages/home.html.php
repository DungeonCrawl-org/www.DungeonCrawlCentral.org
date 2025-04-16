<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?=$page_title ?? 'Dungeon Crawl Central'?></title>
    <link rel="icon" href="/img/feat-dg_entrance.png" type="image/png">
    <!-- <link rel="stylesheet" 	href="/css/reset.css"> -->
    <link rel="stylesheet" href="/css/dungeoncrawl.css?v=<?=time()?>">
    <!-- <link rel="stylesheet" href="https://crawl.develz.org/tournament/0.23/tourney-score.css"> -->

<style>

#dlTable {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#dlTable td, #dlTable th {
  border: 1px solid #ddd;
  padding: 8px;
}

#dlTable tr:nth-child(even){background-color: Dark Gray}

#dltable tr:hover {background-color: #ddd;}

#dlTable th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: drak gray;
  color: white;
}


div.score-sidebar-cca {
    float: right;
    clear: both;
    text-align: right;
    width: 575px;
    padding: 0 2em 5em;
}
	
.centerTable { 
    margin: 0px auto; 
    border: none;
}
	
h1	{
	font-size: 48px;
	text-align: center;
}

.dropbtn {
  background-color: #7D623C;
  color: white;
  padding: 12px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #7D623C;
  min-width: 500px;
  box-shadow: 0px 8px 12px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 12px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #000000;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #7D623C;}

</style>

<?php

    if (isset($meta) && is_array($meta) && isset($meta['filename'])) {
        $meta += [
            'width' => 256,
            'height' => 256,
            'alt' => "Dungeon Crawl",
            'type' => "image/png",
        ];
        if (strpos($meta['filename'], 'https') === 0) {
            $meta['secure_filename'] = $meta['filename'];
            $meta['filename'] = str_replace("https", "http", $meta['filename']);
        } else {
            $meta['secure_filename'] = str_replace("http", "https", $meta['filename']);
        }
        echo <<<META
            <meta property="og:image" content="{$meta['filename']}" />
            <meta property="og:image:secure_url" content="{$meta['secure_filename']}" />
            <meta property="og:image:type" content="{$meta['type']}" />
            <meta property="og:image:width" content="{$meta['width']}" />
            <meta property="og:image:height" content="{$meta['height']}" />
            <meta property="og:image:alt" content="{$meta['alt']}" />
        META;
    }

?>
</head>
<body class="page_back">
<div class="page_floor">
     <div class="page information">
	  <div class="dropdown" style="float:left;">
		<button class="dropbtn">Menu</button>
		<div class="dropdown-content" style="left:0;">
			<a href="/">Dungeon Crawl Central website</a>
			<a href="https://discord.gg/gMnE5JFcB7" target="_blank"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&#8627; Dungeon Crawl community discord server</a>
			<a href="/online_servers"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&#8627; Play online on a Dungeon Crawl server</a>
			<a href="/download"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&#8627; Download a Dungeon Crawl fork for offline play</a>
			<a href="/forks"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&#8627; View Dungeon Crawl forks details</a>
			<a href="https://www.reddit.com/r/dungeoncrawl/" target="_blank"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&#8627; Dungeon Crawl subreddit</a>
			<a href="https://www.crawlcosplay.org/">Crawl Cosplay (CC) website</a>
			<a href="https://discord.gg/pW7nqC8Wu3" target="_blank"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&#8627; Crawl Cosplay 2.0 community discord server</a>
		</div>
	</div>

	<div class="dropdown" style="float:right;">
		<button class="dropbtn">Donate!</button>
		<div class="dropdown-content" style="right:0;">
			Please donate for the cost of the CCO.CrawlCosplay.Org webtiles server at:<br>
			<a href="https://patreon.com/rogga" target="_blank"><b style="color:yellow">Patreon</b></a>
		</div>
	</div>    <div class="toplinks"><br></div>
    <div class="page_content">
        <div class="heading">
            <h1><img src="/img/feat-dg_entrance.png"> <a href="https://www.DungeonCrawlCentral.org">www.DungeonCrawlCentral.org</a> <img src="/img/feat-dg_entrance.png"></h1>
	          <div class="fineprint"><center>Come chat with us in our new <a href="https://discord.gg/gMnE5JFcB7" target="_blank">Dungeon Crawl community discord server<img src="/img/discord_transparent_border.png" width="18" height="18"></a></center></div>
        </div>
	<br>
        <img src="/img/HR-right.png"><br>

<h2><center>Welcome to the Dungeon Crawl Central website;</center></h2>
<h4><center><img src="/img/portals/enter_temple.png"> your repository of all things related to Dungeon Crawl forks actively developed! <img src="/img/portals/bailey_portal.png"></center></h4>
<br>
        <img src="/img/HR-right.png"><br>
<h2 style="color:Orange"><center>Adventure through dungeons filled with dangerous monsters in a quest to find the fabulous: </center></h2>
<h1>Orb of Zot</h1>
<center><img src="/img/orb_of_zot.gif"></center>

<h2><center><a href="/online_servers">Play Online</a>
            <img src="/img/portals/enter_elf.png"> <a href="/download">Download DC forks offline versions</a>
            <img src="/img/portals/desolation_portal.png"> <a href="/forks">Details of DC forks</a></center></h2>
<br>
<p><img src="/img/HR-right.png"></p>
<h2>Other links</h2>
<ul><li><a href="https://discord.gg/gMnE5JFcB7" target="_blank">Dungeon Crawl community</a> discord server</li>
    <li><a href="https://www.reddit.com/r/dungeoncrawl/" target="_blank">Dungeon Crawl subreddit</a></li>
    <li><a href="https://www.crawlcosplay.org/">Crawl Cosplay</a> website</li>
    <li><a href="https://discord.gg/JYJf7ndQJK" target="_blank">Crawl Cosplay 2.0 community</a> discord server</li>
    <li><a href="http://dungeoncrawl.org/" target="_blank">Linley's Dungeon Crawl</a>: the orginal game!</li>
</ul>
		<br />
		<img src="/img/HR-right.png"><br />
		<br />
		<footer>Copyleft  |  <a href="https://github.com/CrawlCosplay-org/www.crawlcosplay.org/issues" target="_blank">Send bug report or feature request</a>
		<p style="text-align:right;">You are too beserk; please calm down first!</p></footer>
		</div>
	</div>
</div>
</div>
<div id="page_footer">&nbsp;</div>
</body>
</html>
