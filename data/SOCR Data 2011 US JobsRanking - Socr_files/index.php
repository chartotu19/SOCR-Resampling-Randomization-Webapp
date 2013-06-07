/* <pre><nowiki> */
 
/* Main page fixes */
#interwiki-completelist {
    font-weight: bold;
}
body.page-Main_Page #ca-delete {
    display: none !important;
}

/* Edit window toolbar */
#toolbar {
    height: 22px;
    margin-bottom: 6px;
}

/* Make the list of references smaller */
ol.references {
    font-size: 100%;
}
.references-small { 
    font-size: 90%;
}

/* VALIDATOR NOTICE: the following is correct, but the W3C validator doesn't accept it */
/* -moz-* is a vendor-specific extension (CSS 2.1 4.1.2.1) */
/* column-count is from the CSS3 module "CSS Multi-column Layout" */
/* Please ignore any validator errors caused by these two lines */
.references-2column {
    font-size: 90%;
    -moz-column-count: 2;
    -webkit-column-count: 2;
    column-count: 2;
}

.same-bg { background: none; }

/* Highlight clicked reference in blue to help navigation */
ol.references > li:target {
    background-color: #DEF;
}

sup.reference:target { 
    background-color: #DEF;
}

/* Styling for citations */
cite {
    font-style: normal;
    word-wrap: break-word;
}

/* If there is an inline link to a full citation, the full citation will turn blue when the inline link is clicked */
cite:target { 
    background-color: #DEF;
}

/* For linked citation numbers and document IDs, where the number need not be shown on a screen or a handheld, but should be included in the printed version */

@media screen, handheld, projection {
    cite *.printonly {
        display: none;
    }
}


/* wikitable/prettytable class for skinning normal tables */
table.wikitable,
table.prettytable {
    margin: 1em 1em 1em 0;
    background: #f9f9f9;
    border: 1px #aaa solid;
    border-collapse: collapse;
}
.wikitable th, .wikitable td,
.prettytable th, .prettytable td {
    border: 1px #aaa solid;
    padding: 0.2em;
}
.wikitable th,
.prettytable th {
    background: #f2f2f2;
    text-align: center;
}
.wikitable caption,
.prettytable caption {
    margin-left: inherit;
    margin-right: inherit;
    font-weight: bold;
}


/* default skin for navigation boxes */
table.navbox {            /* navbox container style */
  border:1px solid #aaa;
  width:100%; 
  margin:auto;
  clear:both;
  font-size:88%;
  text-align:center;
  padding:1px;
}
table.navbox + table.navbox {
  margin-top:-1px;        /* single pixel border between adjacent navboxes (doesn't work for IE6, but that's okay) */
}
.navbox-title, .navbox-abovebelow, table.navbox th {
  text-align:center;      /* title and above/below styles */
  padding-left:1em;
  padding-right:1em;
}
.navbox-group {           /* group style */
  white-space:nowrap;
  text-align:right;
  font-weight:bold;
  padding-left:1em;
  padding-right:1em;
}
.navbox, .navbox-subgroup {
  background:#fdfdfd;     /* Background color */
}
.navbox-list {
  border-color:#fdfdfd;   /* Must match background color */
}
.navbox-title, table.navbox th {
  background:#ccccff;     /* Level 1 color */
}
.navbox-abovebelow, .navbox-group, .navbox-subgroup .navbox-title {
  background:#ddddff;     /* Level 2 color */
}
.navbox-subgroup .navbox-group, .navbox-subgroup .navbox-abovebelow {
  background:#e6e6ff;     /* Level 3 color */
}
.navbox-even {
  background:#f7f7f7;     /* Even row striping */
}
.navbox-odd {
  background:transparent; /* Odd row striping */
}

/* Infobox template style */
.infobox {
    border: 1px solid #aaa;
    background-color: #f9f9f9;
    color: black;
    margin: 0.5em 0 0.5em 1em;
    padding: 0.2em;
    float: right;
    clear: right;
}
.infobox td,
.infobox th {
    vertical-align: top;
}
.infobox caption {
    font-size: larger;
    margin-left: inherit;
}
.infobox.bordered {
    border-collapse: collapse;
}
.infobox.bordered td,
.infobox.bordered th {
    border: 1px solid #aaa;
}
.infobox.bordered .borderless td,
.infobox.bordered .borderless th {
    border: 0;
}

.infobox.sisterproject {
    width: 20em;
    font-size: 90%;
}

.infobox.standard-talk {
    border: 1px solid #c0c090;
    background-color: #f8eaba;
}
.infobox.standard-talk.bordered td,
.infobox.standard-talk.bordered th {
    border: 1px solid #c0c090;
}

/* styles for bordered infobox with merged rows */
.infobox.bordered .mergedtoprow td,
.infobox.bordered .mergedtoprow th {
    border: 0;
    border-top: 1px solid #aaa;
    border-right: 1px solid #aaa;
}

.infobox.bordered .mergedrow td,
.infobox.bordered .mergedrow th {
    border: 0;
    border-right: 1px solid #aaa;
}

/* Styles for geography infoboxes, e.g. countries, country subdivisions, cities, etc. */
.infobox.geography {
    text-align: left;
    border-collapse: collapse;
    line-height: 1.2em; 
    font-size: 90%;
}

.infobox.geography  td,
.infobox.geography  th {
    border-top: solid 1px #aaa;
    padding: 0.4em 0.6em 0.4em 0.6em;
}
.infobox.geography .mergedtoprow td,
.infobox.geography .mergedtoprow th {
    border-top: solid 1px #aaa;
    padding: 0.4em 0.6em 0.2em 0.6em;
}

.infobox.geography .mergedrow td,
.infobox.geography .mergedrow th {
    border: 0;
    padding: 0 0.6em 0.2em 0.6em;
}

.infobox.geography .mergedbottomrow td,
.infobox.geography .mergedbottomrow th {
    border-top: 0;
    border-bottom: solid 1px #aaa;
    padding: 0 0.6em 0.4em 0.6em;
}

.infobox.geography .maptable td,
.infobox.geography .maptable th {
    border: 0;
    padding: 0;
}

/* Style for "notices" */
.notice {
    margin: 1em;
    padding: 0.2em;
}

#disambig {
    border-top: 1px solid #ccc; 
    border-bottom: 1px solid #ccc;
}

/* Persondata and other (future) metadata,
   "table.InChI" and ".InChI-label" are temporary. */
table.InChI,
table.persondata {
    border: 1px solid #aaa;
    display: none;
    speak: none;
}
.InChI-label,
.persondata-label {
    color: #aaa;
}

/* Makes redirects appear in italics in categories and on [[Special:Allpages]] */
.redirect-in-category, .allpagesredirect {
    font-style: italic;
}

/* Class for links with loudspeaker icon next to them. 
   (Used in [[Template:Audio]] and the like to make the speaker clickable) */
.audiolink a {
    background: url("http://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Loudspeaker.svg/11px-Loudspeaker.svg.png") center left no-repeat !important;
    padding-left: 16px !important;
    padding-right: 0 !important;
}

/* Icons for medialist templates [[Template:Listen]], [[Template:Multi-listen_start]], [[Template:Video]], [[Template:Multi-video_start]] */
div.listenlist {
    background: url("http://upload.wikimedia.org/wikipedia/commons/thumb/a/a6/Gnome-speakernotes.png/30px-Gnome-speakernotes.png");
    padding-left: 40px;
}
div.videolist, div.multivideolist {
    background: url("http://upload.wikimedia.org/wikipedia/en/thumb/2/20/Tango-video-x-generic.png/40px-Tango-video-x-generic.png");
    padding-left: 50px;
}

/* Style rules for media list templates */
div.medialist {
    min-height: 50px;
    margin: 1em;
    background-position: top left;
    background-repeat: no-repeat;
}
div.medialist ul {
    list-style-type: none; 
    list-style-image: none;
    margin: 0;
}
div.medialist ul li {
    padding-bottom: 0.5em;
}
div.medialist ul li li {
    font-size: 91%;
    padding-bottom: 0;
}

/* Change the external link icon to an Adobe icon for all PDF files */
/* (in browsers that support these CSS selectors, like Mozilla and Opera) */
#bodyContent a[href$=".pdf"].external, 
#bodyContent a[href*=".pdf?"].external, 
#bodyContent a[href*=".pdf#"].external,
#bodyContent a[href$=".PDF"].external, 
#bodyContent a[href*=".PDF?"].external, 
#bodyContent a[href*=".PDF#"].external,
#mw_content a[href$=".pdf"].external, 
#mw_content a[href*=".pdf?"].external, 
#mw_content a[href*=".pdf#"].external,
#mw_content a[href$=".PDF"].external, 
#mw_content a[href*=".PDF?"].external, 
#mw_content a[href*=".PDF#"].external {
    background: url(http://upload.wikimedia.org/wikipedia/commons/thumb/2/23/Icons-mini-file_acrobat.gif/15px-Icons-mini-file_acrobat.gif) center right no-repeat;
    padding-right: 16px;
}

/* Change the external link icon to an Adobe icon anywhere the PDFlink class */
/* is used (notably Template:PDFlink). This works in IE, unlike the above. */
span.PDFlink a {
    background: url(http://upload.wikimedia.org/wikipedia/commons/thumb/2/23/Icons-mini-file_acrobat.gif/15px-Icons-mini-file_acrobat.gif) center right no-repeat !important;
    padding-right: 17px !important;
}

span.geolink a {
    background: url(http://upload.wikimedia.org/wikipedia/en/a/a7/Monobook-globe.png) center right no-repeat !important;
    padding-right: 11px !important;
}

/* Content in columns with CSS instead of tables [[Template:Columns]] */
div.columns-2 div.column {
    float: left;
    width: 50%;
    min-width: 300px;
}
div.columns-3 div.column {
    float: left;
    width: 33.3%;
    min-width: 200px;
}
div.columns-4 div.column {
    float: left;
    width: 25%;
    min-width: 150px;
}
div.columns-5 div.column {
    float: left;
    width: 20%;
    min-width: 120px;
}

/*Add formatting to make sure that "external references" from [[Template:Ref]] do
  not get URL expansion, not even when printed. The mechanism up to MediaWiki 1.4 was
  that the HTML code contained a SPAN following the anchor A; this SPAN had the class
  "urlexpansion", which was not displayed on screen, but was shown when the medium was
  "print". The rules below ensure (a) that there is no extra padding to the right of
  the anchor (displayed as "[<number>]"), (b) that there is no "external link arrow" for
  the link, and (c) that this SPAN of class "urlexpansion" is never shown.
  ~~~~
*/
.plainlinksneverexpand {
    background: none ! important;
    padding: 0 ! important;
}
.plainlinksneverexpand .urlexpansion {
    display: none ! important;
}

/* Make sure that ext links displayed within "plainlinksneverexpand" don't get
   the arrow...
*/
.plainlinksneverexpand a {
    background: none !important;
    padding: 0 !important;
}

/* With MediaWiki 1.5, the mechanism has changed: instead of a SPAN of class "urlexpansion"
   following the anchor A, the anchor itself now has class "external autonumber" and the
   expansion is inserted when printing (see the common printing style sheet at
   http://en.wikipedia.org/skins-1.5/common/commonPrint.css) using the ":after" pseudo-
   element of CSS. We have to switch this off for links due to Template:Ref!
*/
.plainlinksneverexpand a.external.text:after {
    display: none !important;
}
.plainlinksneverexpand a.external.autonumber:after {
    display: none !important;
}

/* Messagebox templates */
.messagebox {
    border: 1px solid #aaa;
    background-color: #f9f9f9;
    width: 80%;
    margin: 0 auto 1em auto;
    padding: .2em;
}
.messagebox.merge {
    border: 1px solid #c0b8cc;
    background-color: #f0e5ff;
    text-align: center;
}
.messagebox.cleanup {
    border: 1px solid #9f9fff;
    background-color: #efefff;
    text-align: center;
}
.messagebox.standard-talk {
    border: 1px solid #c0c090;
    background-color: #f8eaba;
    margin: 4px auto;
}
/* For old WikiProject banners inside banner shells. */
.mbox-inside .standard-talk,
.messagebox.nested-talk {
    border: 1px solid #c0c090;
    background-color: #f8eaba;
    width: 100%;
    margin: 2px 0;
    padding: 2px;
}
.messagebox.small {
    width: 238px;
    font-size: 85%;
    float: right;
    clear: both;
    margin: 0 0 1em 1em;
    line-height: 1.25em; 
}
.messagebox.small-talk {
    width: 238px;
    font-size: 85%;
    float: right;
    clear: both;
    margin: 0 0 1em 1em;
    line-height: 1.25em; 
    background: #F8EABA;
}


/* Cell sizes for tmbox/imbox/cmbox/ombox message boxes */
th.mbox-text, td.mbox-text {     /* The message body cell(s) */
    border: none; 
    padding: 0.25em 0.9em;       /* 0.9em left/right */
    width: 100%;
}
td.mbox-image {                  /* The left image cell */
    border: none; 
    padding: 2px 0 2px 0.9em;    /* 0.9em left, 0px right */
    text-align: center; 
}
td.mbox-imageright {             /* The right image cell */
    border: none;
    padding: 2px 0.9em 2px 0;    /* 0px left, 0.9em right */
    text-align: center; 
}

/* Article message box styles */
table.ambox {            /* 10% = Will not overlap with other elements */
    margin: -1px 10% 0px;    /* -1px = Single border between stacked boxes in all browsers */
    border: 1px solid #aaa; 
    border-left: 10px solid #1e90ff;    /* Default "notice" blue */
    background: #fbfbfb; 
}
.ambox th.mbox-text, 
.ambox td.mbox-text {            /* The message body cell(s) */
    border: none; 
    padding: 0.25em 0.5em;       /* 0.5em left/right */
    width: 100%;                 /* Make all amboxes the same width regardless of text length */
}
.ambox td.mbox-image {           /* The left image cell */
    border: none; 
    padding: 2px 0 2px 0.5em;    /* 0.5em left, 0px right */
    text-align: center; 
}
.ambox td.mbox-imageright {      /* The right image cell */
    border: none; 
    padding: 2px 0.5em 2px 0;    /* 0px left, 0.5em right */
    text-align: center; 
}

table.ambox-notice {
    border-left: 10px solid #1e90ff;    /* Blue */
}
table.ambox-speedy {
    border-left: 10px solid #b22222;    /* Red */
    background: #fee;                   /* Pink */
}
table.ambox-serious,
table.ambox-delete {    /* "serious" is deprecated, use "delete" instead. */
    border-left: 10px solid #b22222;    /* Red */
}
table.ambox-content {
    border-left: 10px solid #f28500;    /* Orange */
}
table.ambox-style {
    border-left: 10px solid #f4c430;    /* Yellow */
}
table.ambox-merge,
table.ambox-move {    /* "merge" is deprecated, use "move" instead. */
    border-left: 10px solid #9932cc;    /* Purple */
}
table.ambox-protection {
    border-left: 10px solid #bba;       /* Gray-gold */
}

/* Image message box styles */
table.imbox {
    margin: 4px 10%; 
    border-collapse: collapse; 
    border: 3px solid #1e90ff;    /* Default "notice" blue */
    background: #fbfbfb;
}
.imbox .mbox-text .imbox {    /* For imboxes inside imbox-text cells. */
    margin: 0 -0.5em;    /* 0.9 - 0.5 = 0.4em left/right. */
}
.mbox-inside .imbox {    /* For imboxes inside other templates. */
    margin: 4px;
}

table.imbox-notice {
    border: 3px solid #1e90ff;    /* Blue */
}
table.imbox-speedy {
    border: 3px solid #b22222;    /* Red */
    background: #fee;             /* Pink */
}
table.imbox-delete {
    border: 3px solid #b22222;    /* Red */
}
table.imbox-content {
    border: 3px solid #f28500;    /* Orange */
}
table.imbox-style {
    border: 3px solid #f4c430;    /* Yellow */
}
table.imbox-move {
    border: 3px solid #9932cc;    /* Purple */
}
table.imbox-protection {
    border: 3px solid #bba;       /* Gray-gold */
}
table.imbox-license {
    border: 3px solid #88a;       /* Dark gray */
    background: #f7f8ff;          /* Light gray */
}
table.imbox-featured {
    border: 3px solid #cba135;    /* Brown-gold */
}

/* Category message box styles */
table.cmbox {
    margin: 3px 10%;
    border-collapse: collapse;
    border: 1px solid #aaa; 
    background: #DFE8FF;           /* Default "notice" blue */
}

table.cmbox-notice {
    background: #DFE8FF;    /* Blue */
}
table.cmbox-speedy {
    margin-top: 4px;
    margin-bottom: 4px;
    border: 4px solid #b22222;    /* Red */
    background: #FFDBDB;          /* Pink */
}
table.cmbox-delete {
    background: #FFDBDB;    /* Red */
}
table.cmbox-content {
    background: #FFE7CE;    /* Orange */
}
table.cmbox-style {
    background: #FFF9DB;    /* Yellow */
}
table.cmbox-move {
    background: #F1D0FF;    /* Purple */
}
table.cmbox-protection {
    background: #EFEFE1;    /* Gray-gold */
}

/* Other pages message box styles */
table.ombox {
    margin: 4px 10%; 
    border-collapse: collapse; 
    border: 1px solid #aaa;       /* Default "notice" gray */
    background: #f9f9f9;
}
table.ombox-small {               /* For the "small=yes" option */
    clear: right;
    float: right;
    margin: 4px 0 4px 1em;
    width: 238px;
    font-size: 88%;
    line-height: 1.25em;
}

table.ombox-notice {
    border: 1px solid #aaa;       /* Gray */
}
table.ombox-speedy {
    border: 2px solid #b22222;    /* Red */
    background: #fee;             /* Pink */
}
table.ombox-delete {
    border: 2px solid #b22222;    /* Red */
}
table.ombox-content {
    border: 1px solid #f28500;    /* Orange */
}
table.ombox-style {
    border: 1px solid #f4c430;    /* Yellow */
}
table.ombox-move {
    border: 1px solid #9932cc;    /* Purple */
}
table.ombox-protection {
    border: 2px solid #bba;       /* Gray-gold */
}
 
/* Talk page message box styles */
table.tmbox {
    margin: 4px 10%;
    border-collapse: collapse;
    border: 1px solid #c0c090;    /* Default "notice" gray-brown */
    background: #f8eaba;
}
table.tmbox-small {               /* For the "small=yes" option */
    clear: right;
    float: right;
    margin: 4px 0 4px 1em;
    width: 238px;
    font-size: 88%;
    line-height: 1.25em;
}
.mbox-inside .tmbox {    /* For tmboxes inside other templates. */
    margin: 2px 0;
    width: 100%;    /* Fix for Safari and Opera. */
}

table.tmbox-speedy {
    border: 2px solid #b22222;    /* Red */
    background: #fee;             /* Pink */
}
table.tmbox-delete {
    border: 2px solid #b22222;    /* Red */
}
table.tmbox-content {
    border: 2px solid #f28500;    /* Orange */
}
table.tmbox-style {
    border: 2px solid #f4c430;    /* Yellow */
}
table.tmbox-move {
    border: 2px solid #9932cc;    /* Purple */
}
table.tmbox-protection,
table.tmbox-notice {
    border: 1px solid #c0c090;    /* Gray-brown */
}

/* Pink fmbox warning style for warning notices with log entries. */
div.mw-warning-with-logexcerpt {
    border: 1px solid #BB7070;
    background: #FFDBDB;
    padding: 0.25em 0.9em;
}


/* Put a checker background at the image description page only visible if the image has transparent background */
#file img {
    background: url("http://upload.wikimedia.org/wikipedia/commons/5/5d/Checker-16x16.png") repeat;
}

/* Support for Template:IPA, Template:Unicode and Template:Polytonic. The inherit declaration resets the font for all browsers except MSIE6.  The empty comment must remain. Please copy any changes to [[Template:IPA fonts]] and [[Template:Unicode fonts]]. */
.IPA {
    font-family: "Charis SIL", "Doulos SIL", Gentium, GentiumAlt, "DejaVu Sans", Code2000, "TITUS Cyberbit Basic", "Arial Unicode MS", "Lucida Sans Unicode", "Chrysanthi Unicode";
    font-family /**/:inherit;
}
.Unicode {
    font-family: Code2000, Code2001, "Free Serif", "TITUS Cyberbit Basic", "Doulos SIL", "Chrysanthi Unicode", "Bitstream Cyberbit", "Bitstream CyberBase", Thryomanes, Gentium, GentiumAlt, "Lucida Grande", "Free Sans", "Arial Unicode MS", "Microsoft Sans Serif", "Lucida Sans Unicode";
    font-family /**/:inherit;
}
.latinx {
    font-family: Code2000, Code2001, "TITUS Cyberbit Basic", "Microsoft Sans Serif";
    font-family /**/:inherit;
}
.polytonic {
    font-family: "Athena Unicode", Gentium, "Palatino Linotype", "Arial Unicode MS", "Lucida Sans Unicode", "Lucida Grande", Code2000; 
    font-family /**/:inherit;
}
.mufi {
    font-family: Alphabetum, Cardo, LeedsUni, Junicode, "TITUS Cyberbit Basic", ALPHA-Demo;
}

/* Pseudo-classes in support of [[Template:lang]]. */

:lang(he) {
    font-family: "SBL Hebrew", "Ezra SIL SR", "Ezra SIL", Cardo, "Chrysanthi Unicode", "TITUS Cyberbit Basic", "Arial Unicode MS", Narkisim, "Times New Roman";
    font-family /**/:inherit;
}
:lang(fa) {
    font-family: "Nafees Nastaleeq", "Pak Nastaleeq", PDMS_Jauhar;
    font-family /**/:inherit;
}
:lang(ps) {
    font-family: "Nafees Nastaleeq", "Pak Nastaleeq", PDMS_Jauhar;
    font-family /**/:inherit;
}
:lang(ur) {
    font-family: "Nafees Nastaleeq", "Pak Nastaleeq", PDMS_Jauhar;
    font-family /**/:inherit;
}
:lang(sux-Xsux) {
    font-family: Akkadian;
    font-family /**/:inherit;
}
:lang(ja) {
       font-family: Code2000, "Arial Unicode MS", "Bitstream Cyberbit", "Bitstream CyberCJK", IPAGothic, IPAPGothic, IPAUIGothic, "Kochi Gothic", IPAMincho, IPAPMincho;
    font-family /**/:inherit;
}
:lang(ko) {
    font-family: "Adobe Myungjo Std M", AppleMyungjo, "Baekmuk Batang", "Baekmuk Gulim", Batang, Dotum, DotumChe, Gulim, GulimChe, HYGothic-Extra, HYMyeongJo-Extra, "New Gulim", UnBatang, UnDotum, UnYetgul, UWKMJF;
    font-family /**/:inherit;
}
:lang(zh-Hans) {
    font-family: "Adobe Song Std L", "AR PL ShanHeiSun Uni", "AR PL ShanHeiSun Uni MBE", "MS Hei", "MS Song", SimHei;
    font-family /**/:inherit;
}
:lang(zh-Hant) {
    font-family: "Adobe Ming Std L", "AR PL New Sung", "AR PL ZenKai Uni", "AR PL ZenKai Uni MBE", MingLiU, PMingLiU;
    font-family /**/:inherit;
}
:lang(grc) {
    font-family: "Athena Unicode", Gentium, "Palatino Linotype", "Arial Unicode MS", "Lucida Sans Unicode", "Lucida Grande", Code2000;
    font-family /**/:inherit;
}

#wpSave {
    font-weight: bold;
}

/* class hiddenStructure is defunct. See [[Wikipedia:hiddenStructure]] */
.hiddenStructure {
    display: inline ! important;
    color: #f00; 
    background-color: #0f0;
}

/* suppress missing interwiki image links where #ifexist cannot be used due to high number of requests */
/* use restricted to rail icon management pages */
/* see .hidden-redlink on http://meta.wikimedia.org/wiki/MediaWiki:Common.css */
.check-icon a.new {
    display: none; 
    speak:none;
}

/* Removes underlines from links */
.nounderlines a { 
    text-decoration: none;
}

/* Remove underline from IPA links */
.IPA a:link, .IPA a:visited {
    text-decoration: none;
}

#EnWpMpBook { background-image: url(http://upload.wikimedia.org/wikipedia/en/7/7e/MP-open-book.png); }
#EnWpMpSearch { background: url(http://upload.wikimedia.org/wikipedia/en/a/ae/MP-magnifying-glass.png) no-repeat top right; }
#EnWpMpSearchInner { float: right; width: 20em; text-align: center; }
#EnWpMpBook2 { background-image: url(http://upload.wikimedia.org/wikipedia/commons/8/8e/MP-open-book2.png); }

/* Standard Navigationsleisten, aka box hiding thingy from .de.  Documentation at [[Wikipedia:NavFrame]]. */
div.Boxmerge,
div.NavFrame {
    margin: 0;
    padding: 4px;
    border: 1px solid #aaa;
    text-align: center;
    border-collapse: collapse;
    font-size: 95%;
}
div.Boxmerge div.NavFrame {
    border-style: none;
    border-style: hidden;
}
div.NavFrame + div.NavFrame {
    border-top-style: none;
    border-top-style: hidden;
}
div.NavPic {
    background-color: #fff;
    margin: 0;
    padding: 2px;
    float: left;
}
div.NavFrame div.NavHead {
    height: 1.6em;
    font-weight: bold;
    background-color: #ccf;
    position:relative;
}
div.NavFrame p {
    font-size: 100%;
}
div.NavFrame div.NavContent {
    font-size: 100%;
}
div.NavFrame div.NavContent p {
    font-size: 100%;
}
div.NavEnd {
    margin: 0;
    padding: 0;
    line-height: 1px;
    clear: both;
}
a.NavToggle {
    position: absolute;
    top: 0;
    right: 3px;
    font-weight: normal;
    font-size: 90%;
}

/* Coloured watchlist numbers */
.mw-plusminus-pos {
    color: #006400; /* darkgreen */
}

/* .mw-plusminus-null currently at developer default */
.mw-plusminus-neg {
    color: #8B0000; /* darkred */
}

.dablink {
    font-style: italic;
    padding-left: 2em;
}
.dablink i {
    font-style: normal;
}

/* Style for horizontal UL lists */
.horizontal ul {
    padding: 0;
    margin: 0;
}
.horizontal li { 
    padding: 0 0.6em 0 0.4em;
    display: inline;
    border-right: 1px solid;
}
.horizontal li:last-child {
    border-right: none;
    padding-right: 0;
}

/* Geographical coordinates 

To display coordinates using the notation in the source code, write this in your User:Username/monobook.css:
   .geo-default { display: inline } .geo-nondefault { display: none } 
   .geo-dec { display: inline } .geo-dms { display: inline }

To display coordinates using decimal notation, write this in your User:Username/monobook.css:
   .geo-default { display: inline } .geo-nondefault { display: inline } 
   .geo-dec { display: inline } .geo-dms { display: none }

To display coordinates using DMS notation, write this in your User:Username/monobook.css:
   .geo-default { display: inline } .geo-nondefault { display: inline } 
   .geo-dec { display: none }   .geo-dms { display: inline }

To display coordinates in both decimal and DMS notation, write this in your User:Username/monobook.css:
   .geo-default { display: inline } .geo-nondefault { display: inline } 
   .geo-dec { display: inline }   .geo-dms { display: inline }
   .geo-multi-punct { display: inline }

See [[Template:Coor link]] for how these are used.

Note that the classes "geo", "longitude", and "latitude" are not just styles but also used by the [[Geo microformat]], so the names should not be changed.

*/

.geo-default { display: inline; }
.geo-nondefault { display: none; }
.geo-dms { display: inline; }
.geo-dec { display: inline; }
.geo-multi-punct { display: none; }

.longitude, .latitude {
    white-space: nowrap;
}

/* This is used for the Geo microformat, but no style is needed for now other than .geo-dec. */
.geo { }

/***** end Geo-related */

/* When <div class="nonumtoc"> is used on the table of contents, the ToC will display without numbers */
.nonumtoc .tocnumber { display:none; }
.nonumtoc #toc ul,
.nonumtoc .toc ul {
    line-height: 1.5em;
    list-style: none;
    margin: .3em 0 0;
    padding: 0;
}
.nonumtoc #toc ul ul, 
.nonumtoc .toc ul ul { 
    margin: 0 0 0 2em; 
}

/* Allow limiting of which header levels are shown in a TOC; <div class="toclimit-3">, for
   instance, will limit to showing ==headings== and ===headings=== but no further (as long as
   there are no =headings= on the page, which there shouldn't be according to the MoS). */
.toclimit-2 .toclevel-2 {display:none;}
.toclimit-3 .toclevel-3 {display:none;}
.toclimit-4 .toclevel-4 {display:none;}
.toclimit-5 .toclevel-5 {display:none;}
.toclimit-6 .toclevel-6 {display:none;}
.toclimit-7 .toclevel-7 {display:none;}

/* Allow transcluded pages to display in lists rather than a table. Compatible in Firefox; incompatible in IE6. */
.listify td {display:list-item;}
.listify tr {display:block;}
.listify table {display:block;}

/* Styling for Template:Quote */
blockquote.templatequote { 
     margin-top: 0; 
}
blockquote.templatequote div.templatequotecite { 
    line-height: 1em;
    text-align: left;
    padding-left: 2em;
    margin-top: 0;
}
blockquote.templatequote div.templatequotecite cite {
    font-size: 85%;
}

div.user-block {
    padding: 5px;
    border: 1px solid #A9A9A9;
    background-color: #FFEFD5;
}

/* Prevents line breaks in links */
.nowraplinks a {
    white-space: nowrap;
}

/* For template documentation */
.template-documentation {
    clear: both;
    margin: 1em 0 0 0;
    border: 1px solid #aaa; 
    background-color: #ecfcf4; 
    padding: 5px;
}

.thumbinner {
    min-width: 100px;
}

/* Inline div's in ImageMaps (code borrowed from de.wiki) */
.imagemap-inline div {
    display: inline;
}

/* Increase the height of the image upload box */
#wpUploadDescription {
    height: 13em;
}

/* Reduce line-height for <sup> and <sub> */
sup, sub {
    line-height: 1em;
}


/* The backgrounds for galleries. */
#content .gallerybox div.thumb {
    background-color: #F9F9F9;   /* Light gray padding */
}
.gallerybox .thumb img {
    background: white url("http://upload.wikimedia.org/wikipedia/commons/5/5d/Checker-16x16.png") repeat;
}
/* .ns-0 = articles, .ns-2 = user pages, .ns-100 = portals. */
.ns-0 .gallerybox .thumb img,
.ns-2 .gallerybox .thumb img,
.ns-100 .gallerybox .thumb img {
    background: white;   /* No chequered background */
}

/* Prevent boxes from overlapping the category listings */
#mw-subcategories, #mw-pages, #mw-category-media {
    clear: both;
}

/* Selectively hide headers in WikiProject banners */
.wpb .wpb-header             {display: none}
.wpbs-inner .wpb .wpb-header {display: block}     /* for IE */
.wpbs-inner .wpb .wpb-header {display: table-row} /* for real browsers */

/* Stop HTML formulae breaking in silly places */
span.texhtml { white-space: nowrap; }

/* Temporary rule for the duration of [[Wikipedia:2008 main page redesign proposal]] */
#pretzelsmainpageproposal-head { background: white url('http://upload.wikimedia.org/wikipedia/en/c/c4/Faded_globe.PNG') no-repeat;}

/* </nowiki></pre> */