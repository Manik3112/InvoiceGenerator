<?php
$am=0;
$tam=0;
$sn=0;
$ino=$_GET['ino'];
$gst =$_GET['gst'];
$client=$_GET['client'];
$project=$_GET['project'];
$description=$_GET['description'];
$amount=$_GET['amount'];
$company=$_GET['company'];
?>
<HTML>
<HEAD>
	<TITLE>Selvoss Invoice</TITLE>

</HEAD>
<BODY style="font-family:sans-serif;">
<br>
<TABLE BORDER=0 WIDTH=795 CELLSPACING=0 CELLPADDING=0>


<TR ALIGN=LEFT VALIGN=TOP>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=1 HEIGHT=14></TD>
	<TD COLSPAN=43 ROWSPAN=1 WIDTH=794 HEIGHT=14></TD>
</TR>

<TR ALIGN=LEFT VALIGN=TOP>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=1 HEIGHT=29></TD>
	<TD COLSPAN=3 ROWSPAN=2 WIDTH=23 HEIGHT=51></TD>
	<TD COLSPAN=20 ROWSPAN=1 WIDTH=208 HEIGHT=29><b>GSTIN : <?php echo$gst; ?></b></TD>
	<TD COLSPAN=4 ROWSPAN=2 WIDTH=329 HEIGHT=51></TD>
	<TD COLSPAN=13 ROWSPAN=2 WIDTH=226 HEIGHT=51 style="text-align:right;font-size:2.3em;font-weight:bold;font-style:italic;"><?php echo$company;?></TD>
	<TD COLSPAN=3 ROWSPAN=2 WIDTH=8 HEIGHT=51></TD>
</TR>

<TR ALIGN=LEFT VALIGN=TOP>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=1 HEIGHT=22></TD>
	<TD COLSPAN=20 ROWSPAN=1 WIDTH=208 HEIGHT=22 style="font-size:1em;"><b>Date:</b> <?php $mydate=getdate(date("U"));
echo "$mydate[mday] $mydate[month] $mydate[year]";
?>
</TD>
</TR>

<TR ALIGN=LEFT VALIGN=TOP>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=1 HEIGHT=6></TD>
	<TD COLSPAN=43 ROWSPAN=1 WIDTH=794 HEIGHT=6></TD>
</TR>

<TR ALIGN=LEFT VALIGN=TOP>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=1 HEIGHT=7></TD>
	<TD COLSPAN=2 ROWSPAN=1 WIDTH=17 HEIGHT=7></TD>
	<TD COLSPAN=39 ROWSPAN=1 WIDTH=760 HEIGHT=7><IMG SRC="images/hex30.jpg" HEIGHT=7 WIDTH=770 ALIGN=TOP BORDER=0></TD>
	<TD COLSPAN=2 ROWSPAN=1 WIDTH=17 HEIGHT=7></TD>
</TR>

<TR ALIGN=LEFT VALIGN=TOP>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=1 HEIGHT=22></TD>
	<TD COLSPAN=43 ROWSPAN=1 WIDTH=794 HEIGHT=22></TD>
</TR>

<TR ALIGN=LEFT VALIGN=TOP>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=1 HEIGHT=20></TD>
	<TD COLSPAN=3 ROWSPAN=1 WIDTH=23 HEIGHT=20></TD>
	<TD COLSPAN=4 ROWSPAN=1 WIDTH=54 HEIGHT=20><IMG SRC="images/hex31.jpg" HEIGHT=20 WIDTH=54 ALIGN=TOP BORDER=0></TD>
	<TD COLSPAN=2 ROWSPAN=1 WIDTH=9 HEIGHT=20></TD>
	<TD COLSPAN=6 ROWSPAN=1 WIDTH=34 HEIGHT=20><IMG SRC="images/hex32.jpg" HEIGHT=20 WIDTH=34 ALIGN=TOP BORDER=0></TD>
	<TD COLSPAN=14 ROWSPAN=1 WIDTH=444 HEIGHT=20></TD>
	<TD COLSPAN=4 ROWSPAN=1 WIDTH=50 HEIGHT=20><IMG SRC="images/hex33.jpg" HEIGHT=20 WIDTH=50 ALIGN=TOP BORDER=0></TD>
	<TD COLSPAN=2 ROWSPAN=1 WIDTH=16 HEIGHT=20><IMG SRC="images/hex34.jpg" HEIGHT=20 WIDTH=16 ALIGN=TOP BORDER=0></TD>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=23 HEIGHT=20></TD>
	<TD COLSPAN=3 ROWSPAN=1 WIDTH=82 HEIGHT=20 style="font-size:1.2em;text-align:right;"><b><?php echo$ino; ?></b></TD>
	<TD COLSPAN=3 ROWSPAN=1 WIDTH=82 HEIGHT=20></TD>
</TR>

<TR ALIGN=LEFT VALIGN=TOP>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=1 HEIGHT=11></TD>
	<TD COLSPAN=5 ROWSPAN=3 WIDTH=28 HEIGHT=82></TD>
	<TD COLSPAN=17 ROWSPAN=1 WIDTH=201 HEIGHT=11></TD>
	<TD COLSPAN=7 ROWSPAN=3 WIDTH=335 HEIGHT=82></TD>
	<TD COLSPAN=6 ROWSPAN=2 WIDTH=80 HEIGHT=21><IMG SRC="images/hex36.jpg" HEIGHT=21 WIDTH=35 ALIGN=TOP BORDER=0></TD>
	<TD COLSPAN=6 ROWSPAN=3 WIDTH=121 HEIGHT=82><b><p style="padding-top:5px;"><?php $mydate=getdate(date("U"));
	echo "$mydate[mday] $mydate[month] $mydate[year]";
	?></b></p></TD>
</TR>

<TR ALIGN=LEFT VALIGN=TOP>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=1 HEIGHT=10></TD>
	<TD COLSPAN=17 ROWSPAN=2 WIDTH=201 HEIGHT=71>
		<?php
			echo $client;
		?>
	</TD>
</TR>

<TR ALIGN=LEFT VALIGN=TOP>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=1 HEIGHT=61></TD>
	<TD COLSPAN=4 ROWSPAN=1 WIDTH=50 HEIGHT=61></TD>
	<TD COLSPAN=4 ROWSPAN=1 WIDTH=35 HEIGHT=61></TD>
</TR>

<TR ALIGN=LEFT VALIGN=TOP>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=1 HEIGHT=11></TD>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=16 HEIGHT=11></TD>
	<TD COLSPAN=39 ROWSPAN=1 WIDTH=759 HEIGHT=11><IMG SRC="images/hex38.jpg" HEIGHT=11 WIDTH=770 ALIGN=TOP BORDER=0></TD>
	<TD COLSPAN=3 ROWSPAN=1 WIDTH=19 HEIGHT=11></TD>
</TR>

<TR ALIGN=LEFT VALIGN=TOP>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=1 HEIGHT=35></TD>
	<TD COLSPAN=43 ROWSPAN=1 WIDTH=794 HEIGHT=35></TD>
</TR>

<TR ALIGN=LEFT VALIGN=TOP>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=1 HEIGHT=30></TD>
	<TD COLSPAN=4 ROWSPAN=1 WIDTH=26 HEIGHT=30></TD>
	<TD COLSPAN=2 ROWSPAN=1 WIDTH=38 HEIGHT=30><IMG SRC="images/hex39.jpg" HEIGHT=20 WIDTH=38 ALIGN=TOP BORDER=0></TD>
	<TD COLSPAN=10 ROWSPAN=1 WIDTH=72 HEIGHT=30></TD>
	<TD COLSPAN=5 ROWSPAN=1 WIDTH=74 HEIGHT=30><IMG SRC="images/hex40.jpg" HEIGHT=20 WIDTH=74 ALIGN=TOP BORDER=0></TD>
	<TD COLSPAN=4 ROWSPAN=1 WIDTH=128 HEIGHT=30></TD>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=207 HEIGHT=30><IMG SRC="images/hex41.jpg" HEIGHT=20 WIDTH=107 ALIGN=TOP BORDER=0></TD>
	<TD COLSPAN=8 ROWSPAN=1 WIDTH=80 HEIGHT=30></TD>
	<TD COLSPAN=4 ROWSPAN=1 WIDTH=69 HEIGHT=30><IMG SRC="images/hex42.jpg" HEIGHT=20 WIDTH=69 ALIGN=TOP BORDER=0></TD>
	<TD COLSPAN=5 ROWSPAN=1 WIDTH=100 HEIGHT=30></TD>
</TR>
<!***********************************************!>
<?php
				$sn++;
				$tam=$tam+$amount;
				$am=$tam/1.18;
				echo "
				<TR ALIGN=LEFT VALIGN=TOP>
				<TD COLSPAN=1 ROWSPAN=1 WIDTH=1></TD>
				<TD COLSPAN=4 ROWSPAN=1 WIDTH=26></TD>
				<TD COLSPAN=2 ROWSPAN=1 WIDTH=38>".$sn."</TD>
				<TD COLSPAN=10 ROWSPAN=1 WIDTH=72></TD>
				<TD COLSPAN=5 ROWSPAN=1 WIDTH=74>".$project."</TD>
				<TD COLSPAN=4 ROWSPAN=1 WIDTH=128></TD>
				<TD COLSPAN=5 ROWSPAN=1 WIDTH=207>".$description."</TD>
				<TD COLSPAN=4 ROWSPAN=1 WIDTH=80></TD>
				<TD COLSPAN=4 ROWSPAN=1 WIDTH=69>".ceil($am)."</TD>
				<TD COLSPAN=5 ROWSPAN=1 WIDTH=100></TD>
				</TR>";

?>
<!***********************************************!>
<TR ALIGN=LEFT VALIGN=TOP>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=1 HEIGHT=27></TD>
	<TD COLSPAN=43 ROWSPAN=1 WIDTH=794 HEIGHT=27></TD>
</TR>
<TR ALIGN=LEFT VALIGN=TOP>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=1 HEIGHT=47></TD>
	<TD COLSPAN=25 ROWSPAN=1 WIDTH=794 HEIGHT=47></TD>
	<TD COLSPAN=9 ROWSPAN=1 WIDTH=794 HEIGHT=47>IGST : 18%</TD>
	<TD COLSPAN=9 ROWSPAN=1 WIDTH=794 HEIGHT=47><?php $tx=floor(($am*18)/100); echo$tx;?></TD>
</TR>
<TR ALIGN=LEFT VALIGN=TOP>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=1 HEIGHT=26></TD>
	<TD COLSPAN=27 ROWSPAN=1 WIDTH=534 HEIGHT=26></TD>
	<TD COLSPAN=5 ROWSPAN=1 WIDTH=67 HEIGHT=26><IMG SRC="images/hex43.jpg" HEIGHT=26 WIDTH=67 ALIGN=TOP BORDER=0></TD>
	<TD COLSPAN=2 ROWSPAN=1 WIDTH=35 HEIGHT=26></TD>
	<TD COLSPAN=9 ROWSPAN=1 WIDTH=158 HEIGHT=26 style="font-size:1.5em;"><b><?php echo ceil($am+$tx);?></b></TD>
</TR>

<TR ALIGN=LEFT VALIGN=TOP>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=1 HEIGHT=11></TD>
	<TD COLSPAN=43 ROWSPAN=1 WIDTH=794 HEIGHT=11></TD>
</TR>

<TR ALIGN=LEFT VALIGN=TOP>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=1 HEIGHT=20></TD>
	<TD COLSPAN=4 ROWSPAN=1 WIDTH=26 HEIGHT=20></TD>
	<TD COLSPAN=4 ROWSPAN=1 WIDTH=55 HEIGHT=20><IMG SRC="images/hex44.jpg" HEIGHT=20 WIDTH=55 ALIGN=TOP BORDER=0></TD>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=5 HEIGHT=20></TD>
	<TD COLSPAN=2 ROWSPAN=1 WIDTH=12 HEIGHT=20><IMG SRC="images/hex45.jpg" HEIGHT=20 WIDTH=12 ALIGN=TOP BORDER=0></TD>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=5 HEIGHT=20></TD>
	<TD COLSPAN=7 ROWSPAN=1 WIDTH=99 HEIGHT=20><IMG SRC="images/hex46.jpg" HEIGHT=20 WIDTH=99 ALIGN=TOP BORDER=0></TD>
	<TD COLSPAN=24 ROWSPAN=1 WIDTH=592 HEIGHT=20></TD>
</TR>

<TR ALIGN=LEFT VALIGN=TOP>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=1 HEIGHT=10></TD>
	<TD COLSPAN=43 ROWSPAN=1 WIDTH=794 HEIGHT=10></TD>
</TR>

<TR ALIGN=LEFT VALIGN=TOP>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=1 HEIGHT=17></TD>
	<TD COLSPAN=4 ROWSPAN=1 WIDTH=26 HEIGHT=17></TD>
	<TD COLSPAN=6 ROWSPAN=1 WIDTH=64 HEIGHT=17><IMG SRC="images/hex47.jpg" HEIGHT=17 WIDTH=64 ALIGN=TOP BORDER=0></TD>
	<TD COLSPAN=3 ROWSPAN=1 WIDTH=15 HEIGHT=17><IMG SRC="images/hex48.jpg" HEIGHT=17 WIDTH=15 ALIGN=TOP BORDER=0></TD>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=5 HEIGHT=17></TD>
	<TD COLSPAN=2 ROWSPAN=1 WIDTH=26 HEIGHT=17><IMG SRC="images/hex49.jpg" HEIGHT=17 WIDTH=26 ALIGN=TOP BORDER=0></TD>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=45 HEIGHT=17><IMG SRC="images/hex50.jpg" HEIGHT=17 WIDTH=45 ALIGN=TOP BORDER=0></TD>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=6 HEIGHT=17></TD>
	<TD COLSPAN=2 ROWSPAN=1 WIDTH=17 HEIGHT=17><IMG SRC="images/hex51.jpg" HEIGHT=17 WIDTH=17 ALIGN=TOP BORDER=0></TD>
	<TD COLSPAN=4 ROWSPAN=1 WIDTH=42 HEIGHT=17><IMG SRC="images/hex52.jpg" HEIGHT=17 WIDTH=42 ALIGN=TOP BORDER=0></TD>
	<TD COLSPAN=19 ROWSPAN=1 WIDTH=548 HEIGHT=17></TD>
</TR>
<TR ALIGN=LEFT VALIGN=TOP>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=1 HEIGHT=19></TD>
	<TD COLSPAN=31 ROWSPAN=1 WIDTH=567 HEIGHT=19></TD>
	<TD COLSPAN=8 ROWSPAN=1 WIDTH=165 HEIGHT=19></TD>
	<TD COLSPAN=4 ROWSPAN=1 WIDTH=62 HEIGHT=19></TD>
</TR>

<TR ALIGN=LEFT VALIGN=TOP>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=1 HEIGHT=7></TD>
	<TD COLSPAN=43 ROWSPAN=1 WIDTH=794 HEIGHT=7></TD>
</TR>

<TR ALIGN=LEFT VALIGN=TOP>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=1 HEIGHT=17></TD>
	<TD COLSPAN=30 ROWSPAN=1 WIDTH=566 HEIGHT=17></TD>
	<TD COLSPAN=6 ROWSPAN=1 WIDTH=74 HEIGHT=17><IMG SRC="images/hex54.jpg" HEIGHT=17 WIDTH=74 ALIGN=TOP BORDER=0></TD>
	<TD COLSPAN=7 ROWSPAN=1 WIDTH=154 HEIGHT=17></TD>
</TR>

<TR ALIGN=LEFT VALIGN=TOP>
	<TD COLSPAN=1 ROWSPAN=1 WIDTH=1 HEIGHT=17></TD>
	<TD COLSPAN=43 ROWSPAN=1 WIDTH=794 HEIGHT=17></TD>
</TR>

</TABLE>
</BODY>
</HTML>
