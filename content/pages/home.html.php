<?php
	$dir_path = "img/titles";
	$files = scandir($dir_path);
	$count = count($files);
	$index = rand(2, ($count-1));
	$filename = $files[$index];

	echo "<h2>" . _("Welcome to Dungeon Crawl Cosplay; a 5-in-1 website!") . "</h2>";
	echo '<img src="'.$dir_path."/".$filename.'" alt="'.$filename.'" style="float:right">';

	echo '<h3><a href="/dungeoncrawl">Dungeon Crawl</a> (DC) ' . _("is the game with many forks to choose from.") . "</h3>";
	echo '<ul><li><a href="/dungeoncrawl/online_servers">' . _("Play online on a Webtiles server") . "</a>.</li>";
	echo     '<li><a href="/dungeoncrawl/download_forks">' . _("Download") . "</a>" . _(" an offline version of one of the DC forks.") . "</li>";
	echo     "<li>" . _("Join our ") . "<a href="https://discord.gg/gMnE5JFcB7" target="_blank">' . _("Dungeon Crawl community") . "</a>". _(" discord server.") . "</li></ul>";

	echo "<br><p>" . _("Please select your Crawl Cosplay pleasure among the following options") . ":";
	echo '<h3><a href="/cca">' . _("Crawl Cosplay Academy") . "</a> (CCA)</h3>";
	echo "<ul><li>" . _("For those new to DCSS or who haven't yet won a couple of times.") . "</li>";
	echo     "<li>" . _("Read") . ' <a href="/cca/about_cca">' . _("About CCA") . "</a></li></ul>";

	echo '<h3><a href="/ccc">' . _("Crawl Cosplay Challenges") . "</a> (CCC)</h3>";
	echo "<ul><li>" . _("The original weekly challenge posted on Reddit since 2019!") . "</li>";
    	echo     "<li>" . _("Read") . ': <a href="/ccc/about_ccc">' . _("About CCC") . "</a>.</li>";
    	echo     "<li>" . _("See") . ': <a href="/ccc/all_ccc_history">' . _("all 100+ challenges") . "</a></li></ul>";

    	echo '<h3><a href="/cctt">' . _("Crawl Cosplay Trunk Tournament") . "</a> (CCTT)</h3>";
    	echo "<ul><li>" . _("A tournament lasting about a month with each week highlighting some of the latest Trunk changes.") . "</li>";
    	echo     "<li>" . _("CCTT #2 started Friday Feb 21st, 2025 at 00:00 UTC and runs until the end of March 27th UTC.") . "</li>";
    	echo     "<li>" . _("Read") . ': <a href="/cctt/about_cctt">' . _("About CCTT") . "</a>.</li>";
    	echo 	 '<li><a href="/cctt/past_cctt_results">' . _("Past CCTT Results") . "</a></li></ul>";

	echo '<h3><a href="/ccsdt">' . _("Crawl Cosplay Sudden Death Tournament") . "</a> (CCSDT)</h3>";
	echo "<ul><li>" . _("A tournament lasting 5 weeks with a different Crawl Unique combo to play each week. You only get one try!") . "</li>";
	echo     "<li>" . _("Next CCSDT for v0.33 in mid 2025.") . "</li>";
	echo     "<li>" . _("Read") . ': <a href="/ccsdt/about_ccsdt">' . _("About CCSDT") . "</a>.</li></ul>";

	echo '<h3><a href="/ccft">' . _("Crawl Cosplay Fork Tournament") . "</a> (CCFT) " . _("NEW & Upcoming!") . "</h3>";
	echo "<ul><li>" . _("A tournament lasting about a 4-5 weeks with each week highlighting a different DCSS Fork.") . "</li>";
	echo     "<li>" . _("The first ever CCFT will likely start on May 30th, 2025.");
	echo     "<li>" . _("Read a draft of") . ' <a href="/ccft/about_ccft">' . _("About CCFT") . "</a>.</li></ul>";
	
	echo "<h2>" . _("Watch a video about the Crawl Cosplay website") . "</h2>";
	echo "<p>" . _("For indepth details about the Crawl Cosplay website, see:")
		   . ' <a href="https://www.youtube.com/watch?v=x7u0PwESwPM&t=39s" target="_blank">' . _("Dumalacath's CC video") . "</a></p>";

	echo "<h2>" . _("Want to chat?") . "</h2>";
	echo "<p>" . _("Come chat with us on our DCSS Crawl Cosplay 2.0 community")
	           . ' <a href="https://discord.gg/pW7nqC8Wu3" target="_blank">'
		   . _("Discord server") . '<img src="/img/discord_transparent_border.png" width="18" height="18" ></a> '
		   . _("with over 125 members!") . "</p>";
	
	echo "<h2>" . _("Crawl Cosplay Streamers") . "</h2>";
	echo "<p>"  . _("Our Crawl Cosplay YouTube channel")
		    . ' <a href="https://www.youtube.com/@dcsscrawlcosplayshorts" target="_blank">@dcsscrawlcosplayshorts</a> ' 
		    . _("is a repertoire of short video extracts that have links to the full video or playlist.") . "</p>";

	echo "<p>"  . _("See the") . ' <a href="/cc_streamers"><b>' . _("Crawl Cosplay Streamers") . "</b></a>'"  
		    . _("webpage for info on current and past streamers as well as links to their CC playlists.") . "</p>";
	echo "<p>" . _("Happy Crawling,") . "</p>";
	echo "<p>" . _("from RoGGa your host, our webdev team, and the @VIPs members who all help make this site what it is.") . " :-D</p>";
?>
