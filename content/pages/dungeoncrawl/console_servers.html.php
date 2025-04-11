<?php $this->layout = 'dungeoncrawl'; ?>

<h1 id="servers">Console Servers</h1>
<a name="cdi"></a></p>
<h2>crawl.dcss.io aka CDI</h2>
<ul>
<li>Located in <strong>New York, USA</strong>.</li>
<li>Console play via SSH (port 22): username “crawl” – required&nbsp;<em>SSH-key</em> (<a href="https://crawl.dcss.io/crawl/cao_key.ppk" target="_blank">PuTTY key</a> <a href="https://crawl.dcss.io/crawl/cao_key" target="_blank">Unix key</a>).</li>
</ul>
<p><a name="cdo"></a></p>
<h2>crawl.develz.org aka CDO</h2>
<ul>
<li>Located in <strong>Nuremberg, Germany</strong>.</li>
<li>Console play via SSH (port 22): username “crawl” – <em>SSH-key required</em> (<a href="http://crawl.develz.org/cao_key.ppk" target="_blank">PuTTY key</a> <a href="http://crawl.develz.org/cao_key" target="_blank">Unix key</a>).</li>
</ul>
<p><a name="cao"></a></p>
<h2>crawl.akrasiac.org aka CAO</h2>
<ul>
<li>Located in <strong>Arizona, USA</strong>.</li>
<li>Console play via SSH (port 22): username “joshua” – password “joshua” or <em>SSH-key</em> (<a href="https://crawl.akrasiac.org/cao_key.ppk" target="_blank">PuTTY key</a> <a href="https://crawl.akrasiac.org/cao_key" target="_blank">Unix key</a>).</li>
</ul>
<p><a name="cdo"></a></p>
<h2>underhound.eu aka CUE</h2>
<ul>
<li>Located in <strong>Amsterdam, Netherlands, Europe</strong>.</li>
<li>Console play via SSH (port 23): username “terminal” – password “terminal” or <em>SSH-key</em> (<a href="https://crawl.akrasiac.org/cao_key.ppk" target="_blank">PuTTY key</a> <a href="https://crawl.akrasiac.org/cao_key" target="_blank">Unix key</a>).</li>
</ul>
<p><a name="cbro"></a></p>
<h2>cbro.beRotato.org aka CBRO</h2>
<ul>
<li>Located in <strong>Ohio, USA</strong>.</li>
<li>Console play via SSH (port 22): username “crawler” – <em>SSH-key required</em> (<a href="https://cbro.berotato.org/keys/cbro_key.ppk" target="_blank">PuTTY key</a> <a href="https://cbro.berotato.org/keys/cbro_key" target="_blank">Unix key</a>).</li>
<li><a href="https://cbro.berotato.org/morgue/" target="_blank">Morgues</a>, <a href="https://cbro.berotato.org/rcfiles/" target="_blank">rc files</a>, and so on are available online.</li>
<li>ZureaL can be reached in Libera IRC via ‘!tell ZureaL’ in #crawl, or email: zureal@gmail.com</li>
</ul>
<p><a name="cnc"></a></p>
<h2>crawl.nemelex.cards aka CNC</h2>
<ul>
<li>Located in <strong>Gyeonggi, South Korea</strong>.</li>
<li>Console play via SSH (port 1326): username “nemelex” – password “xobeh” or <em>SSH-key</em> (<a href="https://crawl.akrasiac.org/cao_key.ppk" target="_blank">PuTTY key</a> <a href="https://crawl.akrasiac.org/cao_key" target="_blank">Unix key</a>).</li>
</ul>
<p><a name="cxc"></a></p>
<h2>crawl.xtahua.com aka CXC</h2>
<ul>
<li>Located in <strong>Paris, France</strong>.</li>
<li>Console play via SSH (port 22): username “crawl” – <em>SSH-key required</em> (<a href="https://crawl.akrasiac.org/cao_key.ppk" target="_blank">PuTTY key</a> <a href="https://crawl.akrasiac.org/cao_key" target="_blank">Unix key</a>).</li>
</ul>
<h1 id="connecting">Connecting to console servers</h1>
<p>To play in non-graphical mode on one of these servers you need a program to do <em>SSH</em>. The programs are available in many different forms and commonly used to log into a remote server and receive a shell. Using SSH is the preferred method because it’s usually faster and, especially if your delay to a server is high, its compression feature is worth it.</p>
<p>The next paragraphs explain in more detail how to play non-graphical mode online via SSH.</p>
<h2>On Windows-based operating systems</h2>
<p>We suggest to download the open-source program called <a href="http://www.chiark.greenend.org.uk/~sgtatham/putty/">PuTTY</a> or its feature-enhanced sister <a href="http://haanstra.eu/putty/">PuTTYtray</a>, both capable of doing SSH connections.</p>
<p>Once Putty starts up you will see a configuration dialog. Simply put in the host name of the server you desire to play on and choose the SSH connection type.</p>
<div id="attachment_1164" class="wp-caption alignnone" style="width: 466px"><img class="size-full wp-image-1164     " title="Putty Session CAO" src="/img/ssh/putty_session.png" alt="" width="456" height="126"><p class="wp-caption-text">Connect via SSH to CAO. Username and Password: joshua</p></div>
<p>If using an SSH key, you must go to <strong>Connection </strong>&gt; <strong>SSH </strong>&gt; <strong>Auth</strong>&nbsp;and set the private key file:</p>
<div id="attachment_1160" class="wp-caption alignnone" style="width: 466px"><img class="size-full wp-image-1160  " title="Putty SSH-Key Setting" src="/img/ssh/putty_cao_key.png" alt="" width="456" height="107"><p class="wp-caption-text">Setting SSH-Key in Putty</p></div>
<p>Click <strong>Open</strong>&nbsp;at the bottom to start the connection. If not using a key, you’ll be prompted for a username and password.</p>
<p>In the <strong>Session</strong>&nbsp;configuration, you can enter a session name in the box under Saved Sessions and click <strong>Save</strong>&nbsp;to store your session information for future connections. The next time you start PuTTY, selection your session and click the <strong>Load</strong>&nbsp;button to load your session data before clicking <strong>Open</strong>.</p>
<p><span style="font-size: 1.17em;">Other recommended settings</span></p>
<p>Here are some other settings we recommend changing from the default. The first is important to properly enable extended console colors:</p>
<ul>
<li><strong>Data</strong>&nbsp;&gt; Terminal-type string &gt; set value to xterm-256color
<p></p><div id="attachment_5109" class="wp-caption alignnone" style="width: 471px"><img class="size-full wp-image-5109" title="Set Terminal-type string" src="/img/ssh/putty-xterm1.png" alt="" width="461" height="128"><p class="wp-caption-text">Set Terminal-type string to xterm-256color</p></div></li>
</ul>
<p>If you intend to play with the numeric keypad there are 2 important settings you should enable in Putty to have proper controlling:<strong><br>
</strong></p>
<ul>
<li><strong>Terminal</strong> &gt; <strong>Keyboard</strong>&gt; Initial state of numeric keypad &gt;
<p></p><div id="attachment_1162" class="wp-caption alignnone" style="width: 466px"><img class="size-full wp-image-1162   " title="Putty Keyboard Nethack" src="/img/ssh/putty_keyboard_nethack.png" alt="Setting Numeric Keypad to Nethack" width="456" height="97"><p class="wp-caption-text">Setting Numeric Keypad to Nethack</p></div></li>
<li><strong>Terminal</strong> &gt; <strong>Features</strong>&gt; Advanced terminal features &gt;
<p></p><div id="attachment_1161" class="wp-caption alignnone" style="width: 466px"><img class="size-full wp-image-1161  " title="Putty Keyboard Application Keypad" src="/img/ssh/putty_keyboard_application_keypad.png" alt="Disable Application Keypad Mode" width="456" height="102"><p class="wp-caption-text">Disable Application Keypad Mode</p></div></li>
</ul>
<p>You may want to change the effect of the mouse buttons to prevent accidentally pasting your clipboard into the game:</p>
<ul>
<li><strong>Window </strong>&gt; <strong>Selection</strong>&gt; Action of mouse buttons &gt;
<p></p><div class="wp-caption alignnone" style="width: 466px"><img title="Windows-style Mouse Buttons" src="/img/ssh/putty_mouse_control.png" alt="Windows-style Mouse Buttons" width="456" height="84"><p class="wp-caption-text">Windows-style Mouse Buttons</p></div></li>
</ul>
<p>Otherwise, the default configuration of Putty is quite OK. You may want to choose a different font like “Lucida Console”, “Consolas”, “Courier New” or “<a href="http://dejavu-fonts.org/wiki/index.php?title=Main_Page">Dejavu Mono</a>” by going to&nbsp;<strong>Window </strong>&gt; <strong>Appearence</strong>&nbsp; and clicking the <strong>Change</strong>&nbsp;button under Font settings.</p>
<h2>On Unix-based operating systems</h2>
<p>The SSH client was probably installed automatically for you. Nevertheless <a href="http://www.chiark.greenend.org.uk/~sgtatham/putty/">PuTTY</a> may also be available for your distribution. Connecting is as easy as typing <code>ssh -C -l &lt;username&gt; &lt;server name&gt;</code>. The following examples should answer any questions:</p>
<p>To connect to CAO the following 2 ways are possible.<br>
SSH without key will prompt you for the password “joshua”:</p>
<blockquote><p>ssh -C -l joshua crawl.akrasiac.org</p></blockquote>
<p>SSH with <a href="http://crawl.akrasiac.org/cao_key">SSH-key</a> authentication will log you on without a password prompt:</p>
<blockquote><p>wget http://crawl.akrasiac.org/cao_key<br>
chmod 400 cao_key<br>
ssh -C -i cao_key -l joshua crawl.akrasiac.org</p></blockquote>
<p>You must authenticate via <a href="http://crawl.akrasiac.org/cao_key">SSH-key</a> if you intend to play via SSH on CDO:</p>
<blockquote><p>wget http://crawl.akrasiac.org/cao_key<br>
chmod 400 cao_key<br>
ssh -C -i cao_key -l crawl crawl.develz.org</p></blockquote>
<p>Alternatively, when using SSH you can give the parameters via configuration file and then just run <code>ssh &lt;alias&gt;</code> instead. <a href="http://angband.pl/crawl/config">Here</a> is an example to save as <code>~/.ssh/config</code>. Make sure the path to the <a href="http://crawl.akrasiac.org/cao_key">SSH-key</a> is correctly specified:</p>
<blockquote><p>mkdir -p ~/.ssh<br>
wget http://angband.pl/crawl/config -P ~/.ssh<br>
wget http://crawl.akrasiac.org/cao_key -P ~/.ssh<br>
chmod 400 ~/.ssh/cao_key<br>
ssh cao<br>
ssh cdo</p></blockquote>
</div>
