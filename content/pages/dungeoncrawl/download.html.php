<?php $this->layout = 'dungeoncrawl'; ?>

<h1>Download Stone Soup fork</h1>
<h2><center>Latest Stable Version: <a href="https://github.com/crawl/crawl/releases/tag/0.32.1"><strong>0.32.1</strong></a></center></h2>
<br>
<table><center>
    <thead><tr><th></th>
               <th><h2><center>Graphical Tiles</center></h2></th>
               <th><h2><center>Console</center></h2></th>
           </tr></thead>
    <tbody><tr><th>Windows Installer</th>
               <td colspan=2><center><a href="https://github.com/crawl/crawl/releases/download/0.32.1/dcss-0.32.1-win32-installer.exe">Download Tiles+Console</a></center></td></tr>
           <tr><th>Windows Zips</th>
               <td><center><a href="https://github.com/crawl/crawl/releases/download/0.32.1/dcss-0.32.1-win32-tiles.zip">Download</a></center></td>
               <td><center><a href="https://github.com/crawl/crawl/releases/download/0.32.1/dcss-0.32.1-win32-console.zip">Download</a></center></td>
           </tr>
           <tr><th scope="row">Mac OS X</th>
               <td><a href="https://github.com/crawl/crawl/releases/download/0.32.1/dcss-0.32.1-macos-tiles-universal.zip">Download</a></td>
               <td><a href="https://github.com/crawl/crawl/releases/download/0.32.1/dcss-0.32.1-macos-console-universal.zip">Download</a></td>
           </tr>
           <tr><th scope="row">Linux AppImages</th>
               <td><ul class="list-unstyled"><li><a href="https://github.com/crawl/crawl/releases/download/0.32.1/dcss-0.32.1-linux-tiles.x86_64.AppImage">Download</a></li></ul></td>
               <td><ul class="list-unstyled"><li><a href="https://github.com/crawl/crawl/releases/download/0.32.1/dcss-0.32.1-linux-console.x86_64.AppImage">Download</a></li></ul></td>
           </tr>
           <tr><th scope="row">Linux Packages</th>
               <td colspan="2"><ul class="list-unstyled"><li><a href="#linux">See Instructions</a></li></ul></td>
           </tr>
           <tr><th scope="row"><p>Android</p><p style="font-weight: normal;">Published by Medrano83</p></th>
               <td><a href="https://play.google.com/store/apps/details?id=org.develz.crawl"><img alt="Get it on Google Play" src="https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png" width="210px" height="80px"></a></td>
               <td><a href="https://f-droid.org/en/packages/org.develz.crawl/"><img alt="Get it on F-Droid" src="https://fdroid.gitlab.io/artwork/badge/get-it-on.png" width="210px" height="80px"></a></td>
           </tr>
           <tr><th scope="row">Source</th>
               <td colspan="2"><ul class="list-unstyled">
                                        <li><a href="https://github.com/crawl/crawl/releases/download/0.32.1/stone_soup-0.32.1.zip">Full source</a></li>
                                        <li><a href="https://github.com/crawl/crawl/releases/tag/0.32.1">Other formats</a></li>
                                        <li><a href="#source">See Git Instructions Below</a></li>
                               </ul></td>
            </tr>
            <tr><th scope="row">Past Releases</th>
                <td colspan="2"><ul class="list-unstyled"><li><a href="release/?C=N;O=D">Releases Folder</a></li></ul></td>
            </tr>
            <tr><th scope="row">Development Builds</th>
                <td colspan="2"><ul class="list-unstyled"><li><a href="trunk/">Trunk Builds Page</a></li></ul></td>
            </tr>
     </tbody>
    </center>
</table>

<a name="linux"></a>
<h3>Linux</h3>
<p>
                        A version of DCSS may be available in your distribution's main package repository; look
                        for the packages 'crawl' (for the console version) and 'crawl-tiles' or 'crawl-sdl' (for
                        the tiles version). These packages tend to be for versions older than the current stable
                        release, so use the packages below if you can.
</p>
<p>
                        Unofficial builds of the tiles version are also available at
                        <a href="https://flathub.org/apps/details/org.develz.Crawl">Flathub</a> and
                        <a href="https://snapcraft.io/dungeon-crawl">Snapcraft</a>.
</p>
<h4>Ubuntu, Debian &amp; other Debian derivatives</h4>
<p>
                        DCSS packages are available for i386 and amd64 architectures. Follow these instructions:
</p>
<pre># Install the source repository
echo 'deb https://crawl.develz.org/debian crawl 0.32' | sudo tee -a /etc/apt/sources.list
# Install the DCSS signing key
wget https://crawl.develz.org/debian/pubkey -O - | sudo apt-key add -
# update your package list
sudo apt-get update
# install console version
sudo apt-get install crawl
# install tiles version
sudo apt-get install crawl-tiles</pre>

<h3>Source Code</h3>
<p>
                        To compile DCSS yourself, you can clone the
                        <a href="https://github.com/crawl/crawl">git repository on github</a>.
                        For help using git, see the
                        <a href="https://github.com/crawl/crawl/blob/master/crawl-ref/docs/develop/git/quickstart.txt">quickstart guide</a>.
                        For help compiling DCSS, see
                        <a href="https://github.com/crawl/crawl/blob/master/crawl-ref/INSTALL.md">INSTALL.md</a>.
</p>
