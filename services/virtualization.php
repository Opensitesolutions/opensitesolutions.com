<?php
  set_include_path('includes:../../includes:../includes');
?>

<?php
    include 'header_virt.inc';
?>
<?php
    include 'topmenu.inc';
?>

<?php
    include 'right.inc';
?>

<!-- Center Column -->
                <div id="primaryContentContainer">
                        <div id="primaryContent">
                                <h2 id="top">Emulation / Virtualization</h2>
</p>
<br><br>
<h2>Categories</h2>
<ul>
<li><a href="#emu">Open source emulation</a></li>
<li><a href="#virt">Open source virtualization</a></li>
<li><a href="#dvirt">Open source desktop virtualization</a></li>
</ul>

<h5 id="emu">Emulation</h5>
<p class="post align-right">
        <ul>
        <b>Open Source Solution</b>
        <li><a href="http://bochs.sourceforge.net/" target="_blank" name="em1">Bochs</a> is a highly portable open source IA-32 (x86) PC emulator written in C++, that runs on most popular platforms. <a href="http://kowabunga-cnet.com.com/2001-3121_9-0.html?tag=sh.glnav&kbid=1805&m=27&i=4"><img border="0" src="http://kowabunga.com.com/b.aspx?id=1805&mm=27&img=notebooks_125x125.gif"/ align="left"></a>It includes emulation of the Intel x86 CPU, common I/O devices, and a custom BIOS. Currently, Bochs can be compiled to emulate a 386, 486, Pentium/PentiumII/PentiumIII/Pentium4 or x86-64 CPU including optional MMX, SSEx and 3DNow! instructions. Bochs is capable of running most Operating Systems inside the emulation including Linux, DOS, Windows� 95/98 and Windows� NT/2000/XP or Windows Vista. </li><br><Br>
        <li><a href="http://wiki.qemu.org/Index.html" target="_blank" name="em2"> QEMU</a> is a generic and open source machine emulator and virtualizer. When used as a machine emulator, QEMU can run OSes and programs made for one machine (e.g. an ARM board) on a different machine (e.g. your own PC). By using dynamic translation, it achieves very good performances. When used as a virtualizer, QEMU achieves near native performances by executing the guest code directly on the host CPU. A host driver called the QEMU accelerator (also known as KQEMU) is needed in this case. The virtualizer mode requires that both the host and guest machine use x86 compatible processors. </li><br>
<a href="#top">Top</a>
        </ul>
</p>

<h5 id="virt">Virtualization</h5>
<p class="post align-right">
        <ul>
        <b>Open Source Solution</b>
	<li><a href="http://openvz.org" target="_blank" name="virt2">OpenVZ</a> OpenVZ is an open source container-based virtualization solution built on Linux. OpenVZ creates isolated, secure containers (otherwise known as VEs or VPSs) on a single physical server enabling better server utilization and ensuring that applications do not conflict</li><br>
	<li><a href="http://www.virtualbox.org/" target="_blank" name="virt1">VirtualBox</a> is a family of powerful x86 virtualization products for enterprise as well as home use. Not only is VirtualBox an extremely feature rich, high performance product for enterprise customers, it is also the only professional solution that is freely available as Open Source Software. Presently, VirtualBox runs on Windows, Linux and Macintosh hosts and supports a large number of guest operating systems including but not limited to Windows (NT 4.0, 2000, XP, Server 2003, Vista), DOS/Windows 3.x, Linux (2.4 and 2.6), and OpenBSD.</li>
	<br>
	<b>SUN buys Innotek the company that makes Virtualbox</b>
	<br>
<a href="#top">Top</a>
 </ul>
</p>


<h5 id="dvirt">Desktop Virtualization</h5>
<p class="post align-right">
        <ul>
        <b>Open Source Solution</b>
	<li><a href="http://virtuawin.sourceforge.net/" target="_blank" name="vd1">VirtuaWin</a> is a open source virtual desktop managere for the windows operating system (Win9x/ME/NT/Win2K/XP/Win2003/Vista). VirtualWin design allows for easy configuration and customization.</li><br>
	<li><a href="http://virt-dimension.sourceforge.net/" target="_blank" name="vd2">Virtual Dimension</a> is a open source feature full, fast virtual desktop manageer for windows platform. The goal of this project is to enhance the Microsoft "Window Manager" up to the level of usual unix window manager, by providing virtual desktops.</li><br>
<a href="#top">Top</a>
 </ul>
</p>



                        </div>
                </div>
        <!-- End center Column -->


<?php
    include 'left.inc';
?>


<?php
    include 'footer.inc';
?>
