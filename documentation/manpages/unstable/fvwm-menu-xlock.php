<?php
//--------------------------------------------------------------------
//-  File          : documentation/manpages/template.php
//-  Project       : FVWM Home Page
//-  Programmer    : Uwe Pross
//--------------------------------------------------------------------

// This is an autogenerated file, use manpages2php to create it.

//--------------------------------------------------------------------
// this manpages should not appear in the navigation structure
// so we hide its contents from navgen
//--------------------------------------------------------------------
if(isset($navigation_check)) return;

$rel_path = "../../..";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
include("$rel_path/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Man page - fvwm-menu-xlock";
$heading        = "FVWM - Man page - fvwm-menu-xlock";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for fvwm-menu-xlock in unstable branch (2.5.8)"); ?>

<H1>FVWM-MENU-XLOCK</H1>
Section: FVWM Utilities (1)<BR>Updated: 2003-03-15<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>

<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

fvwm-menu-xlock - builds xlock menu definition for FVWM
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

<A NAME="ixAAC"></A>
<B><u>fvwm-menu-xlock</u></B>
[ <B>--help</B>|<B>-h</B>|<B>-?</B> ]
[ <B>--version</B>|<B>-V</B> ]
[ <B>--name</B>|<B>-n</B> name ]
[ <B>--title</B>|<B>-t</B> title ]
[ <B>--item</B> format ]
[ <B>--icon-title</B> icon ]
[ <B>--icon-item</B> icon ]
[ <B>--special-first</B>|<B>-s</B> ]
[ --- xlock params ]
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

<A NAME="ixAAD"></A>
A simple perl script which parses xlock's output to build an fvwm
menu definition of all xlock's modes.
<A NAME="lbAE">&nbsp;</A>
<H2>OPTIONS</H2>

<A NAME="ixAAE"></A>
<DL COMPACT>
<DT><B>--help</B><DD>
<A NAME="ixAAF"></A>
show the help and exit
<DT><B>--version</B><DD>
<A NAME="ixAAG"></A>
show the version and exit
<DT><B>--name</B> name<DD>
<A NAME="ixAAH"></A>
define menu name in the following argument.
Default is ``XLockMenu''
<DT><B>--title</B> title<DD>
<A NAME="ixAAI"></A>
define menu title in the following argument.
Default is ``XLock Modes''.
<DT><B>--item</B> format<DD>
<A NAME="ixAAJ"></A>
define menu item format in the following argument,
default is '%n\t(%d)'.
<FONT>TAB</FONT> can be specified as '\t', but in .fvwm2rc you should specify a double
backslash or a real <FONT>TAB</FONT>.


<P>


Format specifiers:


<P>


<blockquote><pre>  %n - mode name
  %d - mode description
  %D - mode description without &quot;Shows &quot; prefix if any</pre></blockquote>


<P>


These specifiers can receive an optional integer size, positive for right
adjusted string or negative for left adjusted, example: <TT>%8x</TT>; and optional
*num or *-num, which means to leave only the first or last (if minus) num of
chars, the num must be greater than 3, since the striped part is replaced
with ``...'', example: %*30x. Both can be combined: %-10*-20x, this instructs to
get only the 20 last characters, but if the length is less then 10 - to fill
with up to 10 spaces on the right.
<DT><B>--icon-title</B> icon<DD>
<A NAME="ixAAK"></A>

<DT><B>--icon-item</B> icon<DD>
<A NAME="ixAAL"></A>

define menu icon for title and regular item accordingly.
Default is no menu icons (equivalent to an empty icon argument).
<DT><B>--wm-icons</B><DD>
<A NAME="ixAAM"></A>
define icon names suitable for use with wm-icons package.
Currently this is equivalent to: --icon-title '' --icon-item
menu/lock.xpm.
<DT><B>--special-first</B><DD>
<A NAME="ixAAN"></A>
instructs to include special modes (usually black, bomb and random) first.
</DL>
<P>

Option parameters can be specified either using '=' or in the next argument.
Short options are ok if not ambiguous: -h, -t; but be careful with
short options, what is now unambiguous, can became ambiguous in the next
versions.
<P>

Additional arguments (after <B>--</B>) will be passed to xlock.
<P>

Please see the <B><A HREF="http://localhost/cgi-bin/man/man2html/1+xlock">xlock</A></B>(1) man page for the xlock options.
<A NAME="lbAF">&nbsp;</A>
<H2>USAGE</H2>

<A NAME="ixAAO"></A>
Add these lines to your fvwm configuration file:
<P>

<blockquote><pre>  PipeRead 'fvwm-menu-xlock --name MenuSSaver --title &quot;Screensaver&quot; \
    --icon-item mini-bball.xpm --special-first -- -nice 19 -nolock'
  PipeRead 'fvwm-menu-xlock --name MenuSLock --title &quot;Lock Screen&quot; \
    --icon-item mini-rball.xpm --special-first -- -nice 19'
  AddToMenu &quot;Utilities&quot; &quot;Screensaver%mini-monitor.xpm%&quot; Popup MenuSSaver
  AddToMenu &quot;Utilities&quot; &quot;Screenlock%mini-lock.xpm%&quot;     Popup MenuSLock</pre></blockquote>
<A NAME="lbAG">&nbsp;</A>
<H2>AUTHORS</H2>

<A NAME="ixAAP"></A>
Charles K. Hines &lt;<A HREF="mailto:chuck_hines@vnet.ibm.com">chuck_hines@vnet.ibm.com</A>&gt;, initial version.
<P>

Mikhael Goikhman &lt;<A HREF="mailto:migo@homemail.com">migo@homemail.com</A>&gt;, from 24 Feb 1999.
<A NAME="lbAH">&nbsp;</A>
<H2>COPYING</H2>

<A NAME="ixAAQ"></A>
The script is distributed by the same terms as fvwm itself.
See <FONT>GNU</FONT> General Public License for details.
<A NAME="lbAI">&nbsp;</A>
<H2>BUGS</H2>

<A NAME="ixAAR"></A>
Depends on the output of xlock. Will produce an empty menu if the structure
of the output is changed.
<P>

Report bugs to <A HREF="mailto:fvwm-bug@fvwm.org">fvwm-bug@fvwm.org</A>.
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">OPTIONS</A><DD>
<DT><A HREF="#lbAF">USAGE</A><DD>
<DT><A HREF="#lbAG">AUTHORS</A><DD>
<DT><A HREF="#lbAH">COPYING</A><DD>
<DT><A HREF="#lbAI">BUGS</A><DD>
</DL>
<HR>
This document was created by
man2html,
using the manual pages.<BR>
Time: 00:48:09 GMT, November 01, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 01-Nov-2003 -->
