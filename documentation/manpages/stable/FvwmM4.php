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
$title          = "FVWM - Man page - FvwmM4";
$heading        = "FVWM - Man page - FvwmM4";
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

<?php decoration_window_start("Manual page for FvwmM4 in stable branch (2.4.16)"); ?>

<H1>FvwmM4</H1>
Section: User Commands  (1)<BR>Updated: 3 July 2001<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>


<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmM4 - the FVWM  M4 pre-processor
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

FvwmM4 is spawned by fvwm, so no command line invocation will work.
<P>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

When called, this module will attempt to have M4 pre-process the file
specified in its invocation, and then have fvwm read the resulting file.
<P>
<A NAME="lbAE">&nbsp;</A>
<H2>INVOCATION</H2>

FvwmM4 can be invoked by inserting the line 'FvwmM4' in
the .fvwm2rc file. It can also be called from a menu or mouse binding.
If the user wants his entire .fvwm2rc file pre-processed with FvwmM4,
then fvwm should be invoked as:
<P>


<P>


<blockquote><PRE>fvwm2 -cmd &quot;FvwmM4 .fvwm2rc&quot;</PRE></blockquote>
<P>



<P>
Note that the argument to the option &quot;-cmd&quot; should be enclosed
in quotes, and no other quoting should be used. For example, a
typical invocation might be:
<P>


<P>


<blockquote><PRE>fvwm2 -cmd &quot;FvwmM4 -m4-squote { -m4-equote } .fvwm2rc&quot;</PRE></blockquote>
<P>



<P>
Some options can be specified on the command line:
<DL COMPACT>
<DT>-m4-prefix<DD>
I think this makes all the m4 directives require the prefix &quot;m4_&quot;.
<P>
<DT>-m4-prefix-defines<DD>
Causes built-in defines to be prefixed with &quot;m4_&quot; (i.e., m4_HOME
is defined instead of HOME, etc.)
<P>
<DT>-m4opt <I>option</I><DD>
Lets you pass an option to the m4 program.  Not really needed as any
unknown options will be passed on automatically.
<P>
<DT>-m4-squote <I>character</I><DD>
Lets you change the m4 start-of-quote character to <I>character</I>.
<P>
<DT>-m4-equote <I>character</I><DD>
Lets you change the m4 end-of-quote character to <I>character</I>.
<P>
<DT>-m4prog <I>name</I><DD>
Instead of invoking &quot;m4&quot;, fvwm will invoke <I>name</I>.
<P>
<DT>-outfile <I>filename</I><DD>
Instead of creating a random unique name for the temporary file for
the preprocessed rc file, this option will let you specify the name of
the temporary file it will create.  Please note that FvwmM4 will attempt
to remove this file before writing to it, so don't point it at anything
important even if it has read-only protection.
<P>
<DT>-debug<DD>
Causes the temporary file create by m4 to
be retained. This file is usually called &quot;/tmp/fvwmrcXXXXXX&quot;
<P>
<DT>-lock<DD>
If you want to use this option you need to start FvwmM4 with
ModuleSynchronous. This option causes fvwm to wait that the pre-process
finish and that FvwmM4 asks fvwm to Read the pre-processed file before
continuing. This may be useful at startup if you use a session manager
as Gnome. Also, this is useful if you want to process and run a Form in
a fvwm function.
<P>
<DT>-noread<DD>
Causes the pre-processed file to be not read by fvwm. Useful to
pre-process a FvwmScript script with FvwmM4.
<P>
<P>
</DL>
<A NAME="lbAF">&nbsp;</A>
<H2>CONFIGURATION OPTIONS</H2>

FvwmM4 defines some values for use in the pre-processor file:
<P>
<DL COMPACT>
<DT>TWM_TYPE<DD>
Always set to &quot;fvwm&quot;.
<DT>SERVERHOST<DD>
The name of the machine running the X Server.
<DT>CLIENTHOST<DD>
The name of the machine running fvwm.
<DT>HOSTNAME<DD>
The hostname of the machine running fvwm. Generally the same as CLIENTHOST.
<DT>OSTYPE<DD>
The operating system for CLIENTHOST.
<DT>USER<DD>
The name of the person running fvwm.
<DT>HOME<DD>
The home directory of the person running fvwm.
<DT>VERSION<DD>
The X11 version.
<DT>REVISION<DD>
The X11 revision number.
<DT>VENDOR<DD>
The X server vendor.
<DT>RELEASE<DD>
The X server release number.
<DT>SCREEN<DD>
The screen number.
<DT>WIDTH<DD>
The screen width in pixels.
<DT>HEIGHT<DD>
The screen height in pixels.
<DT>X_RESOLUTION<DD>
Some distance/pixel measurement for the horizontal direction, I think.
<DT>Y_RESOLUTION<DD>
Some distance/pixel measurement for the vertical direction, I think.
<DT>PLANES<DD>
Number of color planes for the X server display
<DT>BITS_PER_RGB<DD>
Number of bits in each rgb triplet.
<DT>CLASS<DD>
The X11 default visual class, e.g. PseudoColor.
<DT>COLOR<DD>
Yes or No, Yes if the default visual class is neither StaticGrey or GreyScale.
<DT>FVWM_CLASS<DD>
The visual class that fvwm is using, e.g. TrueColor.
<DT>FVWM_COLOR<DD>
Yes or No, Yes if the FVWM_CLASS is neither StaticGrey or GreyScale.
<DT>FVWM_VERSION<DD>
The fvwm version number, ie 2.0
<DT>OPTIONS<DD>
Some combination of SHAPE, XPM, NO_SAVEUNDERS, and M4, as defined in
configure.h at compile time.
<DT>FVWM_MODULEDIR<DD>
The directory where fvwm looks for .fvwmrc and modules by default, as
determined at compile time.
<DT>FVWM_USERDIR<DD>
The value of $FVWM_USERDIR.
<DT>SESSION_MANAGER<DD>
The value of $SESSION_MANAGER. Undefined if this variable is not set.
<P>
</DL>
<A NAME="lbAG">&nbsp;</A>
<H2>EXAMPLE PROLOG</H2>

<P>


<P>


<blockquote><PRE>define(TWM_TYPE,``fvwm'')dnl
define(SERVERHOST,``spx20'')dnl
define(CLIENTHOST,``grumpy'')dnl
define(HOSTNAME,``grumpy'')dnl
define(OSTYPE,``SunOS'')dnl
define(USER,``nation'')dnl
define(HOME,``/local/homes/dsp/nation'')dnl
define(VERSION,``11'')dnl
define(REVISION,``0'')dnl
define(VENDOR,``HDS human designed systems, inc. (2.1.2-D)'')dnl
define(RELEASE,``4'')dnl
define(SCREEN,``0'')dnl
define(WIDTH,``1280'')dnl
define(HEIGHT,``1024'')dnl
define(X_RESOLUTION,``3938'')dnl
define(Y_RESOLUTION,``3938'')dnl
define(PLANES,``8'')dnl
define(BITS_PER_RGB,``8'')dnl
define(CLASS,``PseudoColor'')dnl
define(COLOR,``Yes'')dnl
define(FVWM_VERSION,``1.24l'')dnl
define(OPTIONS,``SHAPE XPM M4 '')dnl
define(FVWM_MODULEDIR,``/local/homes/dsp/nation/modules'')dnl
define(FVWM_USERDIR,``/local/homes/dsp/nation/.fvwm2rc.d'')dnl
define(SESSION_MANAGER,``local/grumpy:/tmp/.ICE-unix/440,tcp/spx20:1025'')dnl</PRE></blockquote>
<P>



<P>
<A NAME="lbAH">&nbsp;</A>
<H2>AUTHORS</H2>

<P>
FvwmM4 is the result of a random bit mutation on a hard disk,
presumably a result of a  cosmic-ray or some such thing.
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">INVOCATION</A><DD>
<DT><A HREF="#lbAF">CONFIGURATION OPTIONS</A><DD>
<DT><A HREF="#lbAG">EXAMPLE PROLOG</A><DD>
<DT><A HREF="#lbAH">AUTHORS</A><DD>
</DL>
<HR>
This document was created by
man2html,
using the manual pages.<BR>
Time: 17:47:37 GMT, May 30, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 30-May-2003 -->
