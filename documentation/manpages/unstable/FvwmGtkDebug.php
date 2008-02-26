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
include_once("$rel_path/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Man page - FvwmGtkDebug";
$heading        = "FVWM - Man page - FvwmGtkDebug";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_unstable_FvwmGtkDebug";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FvwmGtkDebug in unstable branch (2.5.25)"); ?>

<H1>FvwmGtkDebug</H1>
Section: Fvwm Module (1)<BR>Updated: 2003-06-10<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>

<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmGtkDebug - graphical interactive fvwm module debugger
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

<A NAME="ixAAC"></A>
FvwmGtkDebug should be spawned by <I><a href="<?php echo conv_link_target('./fvwm.php');?>">fvwm</a></I>(1).
<P>

To run this module, place this command somewhere in the configuration:
<P>

<blockquote><pre>    Module FvwmGtkDebug</pre></blockquote>
<P>

To stop this module, just close the <FONT>GUI</FONT> window, the usual KillModule works too.
<P>

You may also run this application in the dummy mode from the command line,
but this only shows the <FONT>GUI</FONT> with dummy event data and not the real data.
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

<A NAME="ixAAD"></A>
This module monitors all fvwm event information and shows it nicely in the
interactive gtk+ application. Good for debugging purposes.
<A NAME="lbAE">&nbsp;</A>
<H2>INVOCATION</H2>

<A NAME="ixAAE"></A>
There are several command line switches:
<P>

<B><u>FvwmGtkDebug</u></B>
[ <B>--mask</B> <I>mask</I> ]
[ <B>--xmask</B> <I>mask</I> ]
[ <B>--debug</B> <I>level</I> ]
<P>

Long switches may be abbreviated to shorter switches.
<P>

<B>-m</B>|<B>--mask</B> <I>mask</I> - set the initial module mask, 31 bit integer.
This mask may be changed interactively at any time.
By default almost all events are monitored (except for some flood events
like <I></I><FONT><I>CONFIGURE_WINDOW</I></FONT><I></I> or <I></I><FONT><I>FOCUS_WINDOW</I></FONT><I></I>. The special value of <I>-1</I>
sets the maximal mask.
<P>

<B>-x</B>|<B>--xmask</B> <I>mask</I> - set the initial module extended mask, 31 bit integer.
This mask may be changed interactively at any time.
By default almost all events are monitored (except for some flood events
like <I></I><FONT><I>ENTER_WINDOW</I></FONT><I></I> or <I></I><FONT><I>LEAVE_WINDOW</I></FONT><I></I>. The special value of <I>-1</I>
sets the maximal extended mask.
<P>

<B>-d</B>|<B>--debug</B> <I>level</I> - use the Perl library debugging mechanism.
The useful <I>level</I>s are 2 to 4.
<A NAME="lbAF">&nbsp;</A>
<H2>SEE ALSO</H2>

<A NAME="ixAAF"></A>
See also FvwmDebug.
<A NAME="lbAG">&nbsp;</A>
<H2>AUTHOR</H2>

<A NAME="ixAAG"></A>
Mikhael Goikhman &lt;<A HREF="mailto:migo@homemail.com">migo@homemail.com</A>&gt;.
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">INVOCATION</A><DD>
<DT><A HREF="#lbAF">SEE ALSO</A><DD>
<DT><A HREF="#lbAG">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
<A HREF="/cgi-bin/man/man2html">man2html</A>,
using the manual pages.<BR>
Time: 14:44:10 GMT, February 26, 2008


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 26-Feb-2008 -->
