<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Dungeon Crawl Central</title>
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
