<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feeproposal $feeproposal
 * @var string[]|\Cake\Collection\CollectionInterface $projects
 */
?>
<br>

<html>
<button style = 'float:right;'onclick="history.go(-1);"> Back </button>
<buttoner style='float: right; margin-right: 25px;padding: 0px;'> <?= $this->Html->link(__(' Download to pdf'), ['action' => 'feeproposalReport', $feeproposal->id ], ['class' => 'button']); ?> </buttoner>

<head>



<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 15 (filtered)">
<style>

<!--
 /* Font Definitions */
 @font-face
	{font-family:Wingdings;
	panose-1:5 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:"Segoe UI";
	panose-1:2 11 5 2 4 2 4 2 2 3;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin:0cm;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;}
h1
	{mso-style-link:"Heading 1 Char";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	text-align:justify;
	text-indent:-36.0pt;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;
	font-weight:normal;}
h2
	{mso-style-link:"Heading 2 Char";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	text-align:justify;
	text-indent:-36.0pt;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;
	font-weight:normal;}
h3
	{mso-style-link:"Heading 3 Char";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:72.0pt;
	text-align:justify;
	text-indent:-36.0pt;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;
	font-weight:normal;}
h4
	{mso-style-link:"Heading 4 Char";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:108.0pt;
	text-align:justify;
	text-indent:-36.0pt;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;
	font-weight:normal;}
h5
	{mso-style-link:"Heading 5 Char";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:144.0pt;
	text-align:justify;
	text-indent:-36.0pt;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;
	font-weight:normal;}
h6
	{mso-style-link:"Heading 6 Char";
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:3.0pt;
	margin-left:180.0pt;
	text-align:justify;
	text-indent:-36.0pt;
	font-size:11.0pt;
	font-family:"Arial",sans-serif;
	font-weight:normal;
	font-style:italic;}
p.MsoHeading7, li.MsoHeading7, div.MsoHeading7
	{mso-style-link:"Heading 7 Char";
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:3.0pt;
	margin-left:72.0pt;
	text-align:justify;
	text-indent:-72.0pt;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;}
p.MsoHeading8, li.MsoHeading8, div.MsoHeading8
	{mso-style-link:"Heading 8 Char";
	margin-top:12.0pt;
	margin-right:0cm;
	margin-bottom:3.0pt;
	margin-left:36.0pt;
	text-align:justify;
	text-indent:-36.0pt;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;
	font-style:italic;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-link:"Header Char";
	margin:0cm;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{mso-style-link:"Footer Char";
	margin:0cm;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;}
p.J15, li.J15, div.J15
	{mso-style-name:"J 1\.5";
	margin:0cm;
	text-align:justify;
	line-height:150%;
	font-size:12.0pt;
	font-family:"Arial",sans-serif;
	layout-grid-mode:line;}
p.Newhdg, li.Newhdg, div.Newhdg
	{mso-style-name:"New hdg";
	mso-style-link:"New hdg Char";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:1.0cm;
	text-align:justify;
	text-indent:-1.0cm;
	page-break-after:avoid;
	font-size:11.0pt;
	font-family:"Arial",sans-serif;
	font-weight:bold;}
span.NewhdgChar
	{mso-style-name:"New hdg Char";
	mso-style-link:"New hdg";
	font-family:"Arial",sans-serif;
	font-weight:bold;}
span.HeaderChar
	{mso-style-name:"Header Char";
	mso-style-link:Header;
	font-family:"Arial",sans-serif;}
span.FooterChar
	{mso-style-name:"Footer Char";
	mso-style-link:Footer;
	font-family:"Arial",sans-serif;}
.MsoChpDefault
	{font-family:"Calibri",sans-serif;}
.MsoPapDefault
	{margin-bottom:8.0pt;
	line-height:107%;}
 /* Page Definitions */
 @page WordSection1
	{size:595.3pt 841.9pt;
	margin:72.0pt 72.0pt 72.0pt 72.0pt;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 ol
	{margin-bottom:0cm;}
ul
	{margin-bottom:0cm;}
</style>

</head>



<body lang=EN-US style='word-wrap:break-word'>

<div class="contenter">
<div class=WordSection1>

<p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:0cm;text-align:center'><b><span lang=EN-AU
style='font-size:18.0pt'>Engagement Agreement</span></b></p>

<p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:0cm;text-align:center'><b><span lang=EN-AU
style='font-size:11.0pt'>&nbsp;</span></b></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-align:justify'><b><span lang=EN-AU style='font-size:11.0pt'>BETWEEN<br>
<br>
</span></b></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-align:justify'><b><span lang=EN-AU style='font-size:11.0pt'>CLIENT: <?=$clientname->first()['Clients']['firstname'].' '.$clientname->first()['Clients']['lastname']?></span></b></p>

 <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm'><b><span lang=EN-AU style='font-size:11.0pt'>GUARANTOR: <?=$feeproposal->guarantor?></span></b></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm'><b><span lang=EN-AU style='font-size:11.0pt'>CONSULTANT: MARSHALL STRUCTURES</span></b></p>


<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm'><b><span lang=EN-AU style='font-size:11.0pt'>PROJECT TITLE: <?= $feeproposal->project->projectname ?> </span></b></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm'><span lang=EN-AU style='font-size:11.0pt'><br>
<br>
</span></p>

<p class=Newhdg align=left style='text-align:left'><span lang=EN-AU>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-AU>Scope of Services</span></p>

<div style='border:none;border-top:solid windowtext 1.0pt;padding:6.0pt 0cm 0cm 0cm;
margin-left:1.0cm;margin-right:0cm'>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;border:none;padding:0cm'><span lang=EN-AU style='font-size:
11.0pt'>The scope of services to be provided are as follows-&#8194;&#8194;</span></p>

</div>

<p class=MsoListParagraphCxSpFirst style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:64.35pt;text-indent:-18.0pt'><span lang=EN-AU
style='font-size:11.0pt;font-family:Symbol'><span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-AU style='font-size:11.0pt'> ◉  <?= $feeproposal->scopeofservice ?></span></p>



<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:1.0cm'><span lang=EN-AU style='font-size:11.0pt'>Marshall Structures shall also engage a geotechnical engineer on behalf of the client to proform site investigation and determination of soil bearing capacity. Fees for these works are quoted from Home &amp; Industruial Consulting Engineers and listed in section 3, fees and disbursements, below. </span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-indent:1.0cm'><span lang=EN-AU style='font-size:11.0pt'>Excluded from the scope are the following:</span></p>

<p class=MsoListParagraphCxSpFirst style='margin-top:2.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:64.35pt;text-indent:-18.0pt'><span lang=EN-AU style='font-size:11.0pt;font-family:Symbol'><span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-AU style='font-size:11.0pt'>◉ Design of in-ground pool shell and associated footings</span></p>


<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:1.0cm'><span lang=EN-AU style='font-size:11.0pt'>Included in the scope of feels is allocation for three design meetings, site meetings or site inspections. Additional meetings and inspections required in addition this those allocated may be carried our at request for a fixed fee of $450 plus gst.</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:1.0cm'><span lang=EN-AU>&#8194;</span></p>

<p class=Newhdg align=left style='text-align:left'><span lang=EN-AU>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-AU>Documents provided by the Client for the Services</span></p>

<div style='border:none;border-top:solid windowtext 1.0pt;padding:6.0pt 0cm 0cm 0cm;
margin-left:1.0cm;margin-right:0cm'>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;border:none;padding:0cm'><span lang=EN-AU style='font-size:
11.0pt;color:blue'>&nbsp;</span></p>

</div>

<p class=MsoNormal style='margin-left:1.0cm'><span lang=EN-AU style='font-size:
11.0pt'>The Consultant</span><span style='font-size:11.0pt'> will render the Services by relying upon a briefing and all information concerning the Client's requirements in relation to the Project as follows-</span></p>

<p class=MsoNormal style='margin-left:1.0cm'><span lang=EN-AU style='font-size:
11.0pt'>&nbsp;</span></p>

<p class=MsoListParagraph style='margin-left:64.35pt;text-indent:-18.0pt'><span
lang=EN-AU style='font-size:11.0pt;font-family:Symbol'><span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-AU style='font-size:11.0pt'>◉ <?= $feeproposal->documentsprovided ?><br>
<br>
</span></p>

<p class=Newhdg align=left style='text-align:left'><span lang=EN-AU>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-AU>Fees and Disbursements</span></p>

<div style='border:none;border-top:solid windowtext 1.0pt;padding:6.0pt 0cm 0cm 0cm;
margin-left:1.0cm;margin-right:0cm'>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;border:none;padding:0cm'><b><span lang=EN-AU style='font-size:
11.0pt'>Fees</span></b></p>

</div>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:1.0cm'><span lang=EN-AU style='font-size:11.0pt'>Agreed fixed fee of <?= $feeproposal->fixedfee ?> plus GST.</span></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:1.0cm'><span lang=EN-AU style='font-size:11.0pt'>&nbsp;</span></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:1.0cm'><b><span lang=EN-AU style='font-size:11.0pt'>Disbursements</span></b></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:1.0cm'><span lang=EN-AU style='font-size:11.0pt'>In the course of the Services being provided it may be necessary to incur disbursements, which are fees, expenses and charges which will be charged to the Client at cost +10%.</span></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:1.0cm;page-break-after:avoid'><b><span lang=EN-AU style='font-size:
11.0pt'><br> Total professional fees and disbursements</span></b></p>

<p class=J15 align=left style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:1.0cm;text-align:left;line-height:normal'><span lang=EN-AU
style='font-size:11.0pt'>On the Client's present instructions, the estimate total fees and disbursements will be in the order of <b> <?= $feeproposal->fixedfee ?> </b> plus GST. This is broken down to: </span></p>

<p class=J15 align=left style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:72.0pt;text-align:left;line-height:normal'><span lang=EN-AU  style='font-size:11.0pt'> <b> <?= $feeproposal->total ?> </b> for our fees relating to the principal building plus GST</span></p>

<!--<p class=J15 align=left style='margin-top:6.0pt;margin-right:0cm;margin-bottom:-->
<!--6.0pt;margin-left:5.0cm;text-align:left;text-indent:-69.75pt;line-height:normal'><span-->
<!--lang=EN-AU style='font-size:11.0pt'><- insert -> for our fees relating to-->
<!--the design of building stormwater services plus GST; </span></p>-->
<!---->
<!--<p class=J15 align=left style='margin-top:6.0pt;margin-right:0cm;margin-bottom:-->
<!--6.0pt;margin-left:5.0cm;text-align:left;text-indent:-69.75pt;line-height:normal'><span-->
<!--lang=EN-AU style='font-size:11.0pt'>$649�������������� Home and Industrial-->
<!--Consulting Engineers fees relating to the geotechnical site investigation ()-->
<!--plus GST and</span></p>-->

<p class=J15 align=left style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:72.0pt;text-align:left;line-height:normal'><span lang=EN-AU
style='font-size:11.0pt'> <b> <?= $feeproposal->totalgst ?> </b> for disbursements plus GST. </span></p>

<p class=J15 align=left style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:72.0pt;text-align:left;line-height:normal'><span lang=EN-AU style='font-size:11.0pt'> <b> <?= $feeproposal->grandtotal ?> </b> for total plus GST. </span></p>

<p class=MsoNormal style='margin-left:1.0cm;text-indent:-1.0cm;page-break-after:
avoid'><b><span lang=EN-AU style='font-size:11.0pt'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></b><b><span lang=EN-AU style='font-size:11.0pt'>Billing and payment arrangements</span></b></p>

<div style='border:none;border-top:solid windowtext 1.0pt;padding:6.0pt 0cm 0cm 0cm;
margin-left:1.0cm;margin-right:0cm'>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:1.0cm;text-indent:-1.0cm;border:none;padding:0cm'><a
name="_Hlk517776747"></a><a name="_Hlk517773099"></a><a name="_Hlk517772716"><span
lang=EN-AU style='font-size:11.0pt'>(a)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-AU style='font-size:11.0pt'>The Consultant will issue invoices to the Client at delivery of key project milestone documentation as follows:</span></a></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:1.0cm;text-indent:-1.0cm;border:none;padding:0cm'><span lang=EN-AU>(i)<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-AU style='font-size:11.0pt'>10% of principal building design fees upon completion of concept design</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:1.0cm;text-indent:-1.0cm;border:none;padding:0cm'><span lang=EN-AU>(ii)<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-AU style='font-size:11.0pt'>30% of principal building design fees upon completion of detail design coordination</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:1.0cm;text-indent:-1.0cm;border:none;padding:0cm'><span lang=EN-AU>(iii)<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=EN-AU style='font-size:11.0pt'>50% of principal building fees plus and all
fees relating to building stormwater services upon issue of construction issue
documentation &amp; regulation 126 certification of design.</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:1.0cm;text-indent:-1.0cm;border:none;padding:0cm'><span lang=EN-AU>(iv)<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
lang=EN-AU style='font-size:11.0pt'>10% of principal building fees upon
builder's completion of structural elements on site OR until a period of six
months after the date of issue of construction documentation, whichever comes
first.</span></p>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:1.0cm;text-indent:-1.0cm;border:none;padding:0cm'><span lang=EN-AU>(v)<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-AU style='font-size:11.0pt'>Fees relating to
geotechnical site investigation upon issue of site investigation report by Home
and Industrial Consulting Engineers</span></p>

</div>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:2.0cm;text-indent:-1.0cm'><span lang=EN-AU style='font-size:11.0pt'>(b)<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt'>Payment claims are made under the <i>Building
and Construction Industry Security of Payment Act 2002 </i>(<b>Act</b>). All
monies payable to the Consultant by the Client to be paid within 30 days of
date of invoice. </span></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm'><span lang=EN-AU style='font-size:11.0pt'>&nbsp;</span></p>

<p class=Newhdg align=left style='text-align:left'><span lang=EN-AU>5.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-AU>Interest charged</span></p>

<div style='border:none;border-top:solid windowtext 1.0pt;padding:6.0pt 0cm 0cm 0cm;
margin-left:1.0cm;margin-right:0cm'>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;border:none;padding:0cm'><span lang=EN-AU style='font-size:
11.0pt'>In order to avoid further increasing our fees, and penalising to
clients who pay promptly, the Consultant will charge interest on all amounts
outstanding for more than 30 days. This will be calculated on any balance
outstanding 30 days from an account being rendered, on a monthly basis, at the
rate being 2% above the Cash Rate Target fixed by the Reserve Bank of Australia.<br>
<br>
</span></p>

</div>

<p class=Newhdg align=left style='text-align:left'><span lang=EN-AU>6.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-AU>Guarantor</span></p>

<div style='border:none;border-top:solid windowtext 1.0pt;padding:1.0pt 0cm 0cm 0cm;
margin-left:1.0cm;margin-right:0cm'>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;border:none;padding:0cm'><span lang=EN-AU style='font-size:
11.0pt'>&nbsp;</span></p>

</div>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:1.0cm'><span style='font-size:11.0pt'>The Guarantor and their
respective executors and administrators jointly and severally covenant that if
at any time the Client defaults from paying the bills, they will forthwith on demand
indemnify the Consultant against any losses, costs, charges and expenses
whatsoever which we may incur by reason of any default on the Client's part in
complying with the terms and conditions of the agreement. </span></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm'><span lang=EN-AU style='font-size:11.0pt'>&nbsp;</span></p>

<p class=Newhdg align=left style='text-align:left'><span lang=EN-AU>7.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-AU>Briefing other experts</span></p>

<div style='border:none;border-top:solid windowtext 1.0pt;padding:6.0pt 0cm 0cm 0cm;
margin-left:1.0cm;margin-right:0cm'>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;border:none;padding:0cm'><span lang=EN-AU style='font-size:
11.0pt'>It may be necessary for the Consultant to engage, on the Client's
behalf, the services of other experts to provide specialist advice or services.
The Consultant will consult the Client as to the terms of that expert's
engagement, but the Client may be asked to enter into an engagement agreement
directly with the other expert. The Consultant will provide the Client, as soon
as practicable the estimate of the amount payable to the other expert once the
other experts have provided their fees and disbursements which will be charged
by the Consultant to the Client at cost +10%.</span></p>

</div>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm'><span lang=EN-AU style='font-size:11.0pt'>&nbsp;</span></p>

<p class=Newhdg align=left style='text-align:left'><span lang=EN-AU>8.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-AU>General Conditions</span></p>

<div style='border:none;border-top:solid windowtext 1.0pt;padding:1.0pt 0cm 0cm 0cm;
margin-left:1.0cm;margin-right:0cm'>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;border:none;padding:0cm'><span lang=EN-AU style='font-size:
11.0pt'>&nbsp;</span></p>

</div>

<p class=MsoListParagraphCxSpFirst style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:2.0cm;text-indent:-1.0cm'><span lang=EN-AU
style='font-size:11.0pt'>(a)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt'>The Consultant will exercise the
degrees of skill, care and diligence normally exercised by professionals in
similar circumstances in the provision of the Services.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:2.0cm'><span lang=EN-AU style='font-size:11.0pt'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:2.0cm;text-indent:-1.0cm'><span lang=EN-AU
style='font-size:11.0pt'>(b)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt'>All drawings, reports,
specifications, calculations, models, software, source code, object code, bills
of quantities, and other documents produced and provided by us in connection to
the Project (<b>Design</b>) will remain the Consultant's property and
copyright. The Client must not or permit to alter, modify or redistribute our Design
without our prior written consent from the Consultant.<br>
<br>
</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:2.0cm;text-indent:-1.0cm'><span lang=EN-AU
style='font-size:11.0pt'>(c)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt'>If the Consultant agrees to
provide to the Client the Design, at a commercial cost, the Consultant does not
have to provide to the Client any formulas and calculations relating to the
Design.<br>
<br>
<br>
</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:2.0cm;text-indent:-1.0cm'><span lang=EN-AU>(d)<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt'>To the maximum extent permitted by
law </span>the Consultant is discharged from all liability in respect of the
Services provided, whether under contract, in tort (including negligence), in
equity, under statute or otherwise, on the expiration of 6 years from the
completion of the Services provided.</p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:2.0cm'><span lang=EN-AU style='font-size:11.0pt'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:2.0cm;text-indent:-1.0cm'><span lang=EN-AU
style='font-size:11.0pt'>(e)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-AU style='font-size:11.0pt'>The Consultant will </span><span
style='font-size:11.0pt'>hold a professional indemnity insurance in respect to
the provision of the Services under this agreement.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:2.0cm'><span lang=EN-AU style='font-size:11.0pt'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:2.0cm;text-indent:-1.0cm'><span lang=EN-AU
style='font-size:11.0pt'>(f)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt'>The Consultant's liability to the
Client for any loss or damage, including a claim for damages for a breach of
this agreement by the Consultant will be reduced to the extent that an act or
omission of the Client or its employees, agents or sub-consultants contributed
to the loss or damage and shall be limited to the Consultant's insurance cover.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:2.0cm'><span lang=EN-AU style='font-size:11.0pt'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:2.0cm;text-indent:-1.0cm'><span lang=EN-AU
style='font-size:11.0pt'>(g)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt'>The Client will indemnify the
Consultant against all claims, costs, suits and demands by third parties
arising in respect of the Services.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:2.0cm'><span lang=EN-AU style='font-size:11.0pt'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:2.0cm;text-indent:-1.0cm'><span lang=EN-AU
style='font-size:11.0pt'>(h)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt'>To the extent that is reasonably
possible, the Client will make sure that the Consultant's input into the
Project is duly recognized in any publicity material generated by the Client in
respect to the Project.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:2.0cm'><span lang=EN-AU style='font-size:11.0pt'>&nbsp;</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:2.0cm;text-indent:-1.0cm'><span lang=EN-AU
style='font-size:11.0pt'>(i)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt'>Any dispute between the parties
will first be subject of mediation, provided this provision shall not prevent the
Consultant from instituting legal action at the time to recover monies owing to
the Consultant by the Client. <br>
<br>
</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:2.0cm;text-indent:-1.0cm'><span lang=EN-AU
style='font-size:11.0pt'>(j)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt'>Subject to conditions of this
agreement, and payment in full for the Services, the Consultant will grant the
Client a royalty-free license and its successors in title to the site of the Project
to use the drawings and documents prepared by the Consultant for the purpose of
constructing the Project on the site to which the design relates, and for the
subsequent repairs, maintenance or servicing, the supply of replacement parts
or any alterations or additions to the Services free of any Moral Right to the
contrary. <br>
<br>
</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:2.0cm;text-indent:-1.0cm'><span lang=EN-AU
style='font-size:11.0pt'>(k)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt'>Neither party may assign, transfer
or sublet any obligation under this agreement without the written consent of
the other. Unless stated in writing to the contrary, no assignment, transfer or
subletting shall release the assignor from any obligation under this agreement.<br>
<br>
</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:2.0cm;text-indent:-1.0cm'><span lang=EN-AU
style='font-size:11.0pt'>(l)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt'>The Client acknowledges that,
unless agreed otherwise, the provision of Services by the Consultants for the
Project is not given on the exclusive basis.<br>
<br>
</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:2.0cm;text-indent:-1.0cm'><span lang=EN-AU
style='font-size:11.0pt'>(m)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt'>The Consultant will have no
liability, howsoever caused, due to claims, loss or damages associated with
asbestos, toxic mold or terrorism.<br>
<br>
</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:2.0cm;text-indent:-1.0cm'><span lang=EN-AU
style='font-size:11.0pt'>(n)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><i><span style='font-size:11.0pt'>Personal property Securities
Act 2009 </span></i><span style='font-size:11.0pt'>(<b>PPSA</b>)</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:8.0pt;margin-left:72.0pt;text-indent:-18.0pt;line-height:107%'><span
style='font-size:11.0pt;line-height:107%'>a.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt;line-height:107%'>The Client
acknowledges that these terms and conditions constitute a security interest for
the purposes of section 20 of the PPSA and that a security interest exists in
all goods including intellectual property (and their proceeds) previously
supplied by the Consultant to the Client and in all future goods (and their
proceeds).<br>
<br>
</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:8.0pt;margin-left:72.0pt;text-indent:-18.0pt;line-height:107%'><span
style='font-size:11.0pt;line-height:107%'>b.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt;line-height:107%'>The Client will
execute documents and do such further acts as may be required by the Consultant
to register the security interest granted to the Consultant under these terms
and conditions and conditions under the PPSA.<br>
<br>
</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:8.0pt;margin-left:72.0pt;text-indent:-18.0pt;line-height:107%'><span
style='font-size:11.0pt;line-height:107%'>c.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt;line-height:107%'>The Client;</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:8.0pt;margin-left:99.25pt;text-indent:-1.0cm;line-height:107%'><span
style='font-size:11.0pt;line-height:107%'>(i)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt;line-height:107%'>waives the right
under section 157 of the PPSA to receive a copy of the verification statement
verifying the registration of a financial statement or a financial change
statement relating to a security interest created under the contract; and <br>
<br>
</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:8.0pt;margin-left:99.25pt;text-indent:-1.0cm;line-height:107%'><span
style='font-size:11.0pt;line-height:107%'>(ii)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt;line-height:107%'>contracts out its
rights to receive any other notice or statement under any other provision of
the PPSA (including for the avoidance of doubt, any of the provisions specified
in paragraph (d)).<br>
<br>
</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:8.0pt;margin-left:72.0pt;text-indent:-18.0pt;line-height:107%'><span
style='font-size:11.0pt;line-height:107%'>d.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt;line-height:107%'>Until ownership
of the goods passes, the Client waive their rights under the following
provisions of the PPSA. Sections 95, 117, 118, 120, 121(4), 123, 125, the
second sentence of section 126(2), sections 129(2), 129(3), 130, 132(3)(d),
132(4), 135, 142, 143, 157(1) and 157(3).<br>
<br>
</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:8.0pt;margin-left:72.0pt;text-indent:-18.0pt;line-height:107%'><span
style='font-size:11.0pt;line-height:107%'>e.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt;line-height:107%'>The Client agrees
that where the Consultant has rights in addition to those under the PPSA, those
rights will continue to apply. <br>
<br>
</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:8.0pt;margin-left:72.0pt;text-indent:-18.0pt;line-height:107%'><span
style='font-size:11.0pt;line-height:107%'>f.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt;line-height:107%'>Until ownership
of the goods, the Client must not give to the Consultant a written demand or
allow any other person to give to the Consultant a written demand requiring Consultant
to register a financial change statement under the PPSA or enter into or allow
any other person to enter into the register of personal property securities a
financial change statement under the PPSA.<br>
<br>
</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:8.0pt;margin-left:72.0pt;text-indent:-18.0pt;line-height:107%'><span
style='font-size:11.0pt;line-height:107%'>g.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt;line-height:107%'>Wherein a
Schedule of Rates is the basis fee for Services;</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:8.0pt;margin-left:99.25pt;text-indent:-1.0cm;line-height:107%'><span
style='font-size:11.0pt;line-height:107%'>(i)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt;line-height:107%'>Services will be within
normal business hours between 7am to 5:30pm, Monday to Friday, will be
undertaken and invoiced as listed in this Agreement.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:8.0pt;margin-left:99.25pt;text-indent:-1.0cm;line-height:107%'><span
style='font-size:11.0pt;line-height:107%'>(ii)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt;line-height:107%'>Services provided
in relation to VCAT or legal proceedings will be conducted at hourly rates.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:8.0pt;margin-left:99.25pt;text-indent:-1.0cm;line-height:107%'><span
style='font-size:11.0pt;line-height:107%'>(iii)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt;line-height:107%'>Travel time
required to provide the Service will be invoiced at normal hourly rates, unless
undertaken outside normal business hours where it shall be invoiced.</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:8.0pt;margin-left:99.25pt;text-indent:-1.0cm;line-height:107%'><span
style='font-size:11.0pt;line-height:107%'>(iv)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt;line-height:107%'>Services provided
shall be invoiced in fifteen (15) minute increments. </span></p>

<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:8.0pt;margin-left:99.25pt;text-indent:-1.0cm;line-height:107%'><span
style='font-size:11.0pt;line-height:107%'>(v)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span style='font-size:11.0pt;line-height:107%'>Hourly Rates are
to be adjusted annually, with adjusted rates to be applicable as of the 1<sup>st</sup>
of July. Services provided will be invoiced to the rates relevant at time of
the Services being provided. </span></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:1.0cm'><span lang=EN-AU style='font-size:11.0pt'>&nbsp;</span></p>

<p class=Newhdg align=left style='text-align:left'><span lang=EN-AU>9.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-AU>Termination of this agreement</span></p>

<div style='border:none;border-top:solid windowtext 1.0pt;padding:6.0pt 0cm 0cm 0cm;
margin-left:1.0cm;margin-right:0cm'>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:1.0cm;text-indent:-1.0cm;border:none;padding:0cm'><span lang=EN-AU
style='font-size:11.0pt'>(a)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-AU style='font-size:11.0pt'>The Consultant will not
continue to do provide the Services if the Client fails to pay the Consultant
bills, if the Client fails to provide the Consultant with adequate
instructions, or if the Client indicate to the Consultant loss of confidence.</span></p>

</div>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:2.0cm;text-indent:-1.0cm'><span lang=EN-AU style='font-size:11.0pt'>(b)<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-AU style='font-size:11.0pt'>The Consultant will give
the Client at least 14 days' notice of the Consultant's intention to terminate this
agreement, and of the grounds on which the notice is based. The Client will be
required to pay the Consultant charges for the Services provided, and for
expenses incurred, up to the date of termination. The Consultant may terminate
this agreement in writing at any time. If the Consultant does so the Client will
pay the charges and expenses incurred up to the time of termination.</span></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:2.0cm;text-indent:-1.0cm'><span lang=EN-AU style='font-size:11.0pt'>(c)<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-AU style='font-size:11.0pt'>If the Consultant has
to engage a collection agency or law firm to for unpaid bills, the Client will pay
for the costs that the Consultant incurs in taking debt recovery action.<br>
<br>
</span></p>

<p class=Newhdg align=left style='text-align:left'><span lang=EN-AU>10.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-AU>Electronic communication</span></p>

<div style='border:none;border-top:solid windowtext 1.0pt;padding:6.0pt 0cm 0cm 0cm;
margin-left:1.0cm;margin-right:0cm'>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:1.0cm;text-indent:-1.0cm;border:none;padding:0cm'><span lang=EN-AU
style='font-size:11.0pt'>(a)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-AU style='font-size:11.0pt'>The parties may
communicate electronically with the Client and other parties using electronic
mail, both direct and via the Internet, and using data storage devices. If the
parties communicate electronically, the parties acknowledge and agree as
follows:</span></p>

</div>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:3.0cm;text-indent:-1.0cm'><span lang=EN-AU style='font-size:11.0pt'>(i)<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-AU style='font-size:11.0pt'>There are some delivery
risks in using electronic mail and the parties accept the risk of interception
of the email by third parties or of non-receipt or delayed receipt of the
message; and</span></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:3.0cm;text-indent:-1.0cm'><span lang=EN-AU style='font-size:11.0pt'>(ii)<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-AU style='font-size:11.0pt'>Computer viruses and
similar damaging items can be transmitted through emails and by introducing
data storage devices into their system. The parties will use virus-scanning
software to reduce these risks. However, it is not possible to completely
eliminate the risk of introducing viruses.</span></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:2.0cm;text-indent:-1.0cm'><span lang=EN-AU style='font-size:11.0pt'>(b)<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-AU style='font-size:11.0pt'>If the parties
communicate electronically, the parties release each other from all claims,
losses, expenses and liabilities caused by any of the risks referred to above
and arising directly or indirectly out of that communication.</span></p>

<p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm'><span lang=EN-AU style='font-size:11.0pt'>&nbsp;</span></p>

<p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:6.0pt;margin-left:0cm;text-align:center'><span lang=EN-AU
style='font-size:14.0pt'>*** END ***</span></p>

<div style='border:none;border-top:solid windowtext 1.0pt;padding:6.0pt 0cm 0cm 0cm;
margin-left:1.0cm;margin-right:0cm'>

<p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:6.0pt;
margin-left:0cm;text-align:justify;page-break-after:avoid;border:none;
padding:0cm'><b><span lang=EN-AU style='font-size:11.0pt'>EXECUTED AS AN
AGREEMENT</span></b></p>

</div>

<p class=MsoNormal style='margin-top:6.0pt;text-align:justify;page-break-after:
avoid'><a name="_Hlk503877131"></a><a name="_Hlk503864317"></a><a
name="_Hlk503877011"><b><span lang=EN-AU style='font-size:11.0pt;text-transform:
uppercase'>&nbsp;</span></b></a></p>

<p class=MsoNormal style='margin-top:6.0pt;text-align:justify;text-indent:1.0cm;
page-break-after:avoid'><b><span lang=EN-AU style='font-size:11.0pt;text-transform:
uppercase'>Marshall Structures</span></b></p>

<div style='border:solid windowtext 1.0pt;padding:12.0pt 8.0pt 12.0pt 12.0pt;
margin-left:42.55pt;margin-right:0cm'>

<p class=MsoNormal style='margin-top:6.0pt;text-align:justify;page-break-after:
avoid;border:none;padding:0cm'><span lang=EN-AU style='font-size:11.0pt'>I</span><span
lang=EN-AU style='font-size:11.0pt'> accept the above terms:</span></p>

<p class=MsoNormal style='margin-top:6.0pt;text-align:justify;page-break-after:
avoid;border:none;padding:0cm'><span lang=EN-AU style='font-size:11.0pt'>&nbsp;</span></p>

<p class=MsoNormal style='margin-top:6.0pt;text-align:justify;page-break-after:
avoid;border:none;padding:0cm'><span lang=EN-AU style='font-size:11.0pt;
color:white;display:none'>-sign</span><span lang=EN-AU style='font-size:11.0pt;
color:red'> </span></p>

<p class=MsoNormal style='margin-top:6.0pt;text-align:justify;page-break-after:
avoid;border:none;padding:0cm'><span lang=EN-AU style='font-size:11.0pt'>..................................................................................................................... </span></p>

<p class=MsoNormal style='margin-top:6.0pt;text-align:justify;page-break-after:
avoid;border:none;padding:0cm'><b><span lang=EN-AU style='font-size:11.0pt;
text-transform:uppercase'>Benjamin Peter Marshall</span></b><b><span
lang=EN-AU style='font-size:11.0pt;text-transform:uppercase'> </span></b></p>

<p class=MsoNormal style='margin-top:6.0pt;text-align:justify;page-break-after:
avoid;border:none;padding:0cm'><span lang=EN-AU style='font-size:11.0pt'>Date: <span
style='color:white;display:none'>#sDateSigned</span><span style='color:red'> </span></span></p>

<p class=MsoNormal style='margin-top:6.0pt;text-align:justify;page-break-after:
avoid;border:none;padding:0cm'><span lang=EN-AU style='font-size:11.0pt'> <!-- insert today's date --> </span></p>

</div>

<p class=MsoNormal style='margin-top:6.0pt;text-align:justify;page-break-after:
avoid'><span lang=EN-AU style='font-size:11.0pt'><br>
<br>
<br>
</span></p>

<p class=MsoNormal style='margin-top:6.0pt;text-align:justify;text-indent:1.0cm;
page-break-after:avoid'><b><span lang=EN-AU style='font-size:11.0pt;text-transform:
uppercase'>Client</span></b></p>

<div style='border:solid windowtext 1.0pt;padding:12.0pt 8.0pt 12.0pt 12.0pt;
margin-left:42.55pt;margin-right:0cm'>

<p class=MsoNormal style='margin-top:6.0pt;text-align:justify;page-break-after:
avoid;border:none;padding:0cm'><a name="_Hlk503877887"><span lang=EN-AU
style='font-size:11.0pt'>I</span></a><span lang=EN-AU style='font-size:11.0pt'>
accept the above terms:</span></p>

<p class=MsoNormal style='margin-top:6.0pt;text-align:justify;page-break-after:
avoid;border:none;padding:0cm'><span lang=EN-AU style='font-size:11.0pt'>&nbsp;</span></p>

<p class=MsoNormal style='margin-top:6.0pt;text-align:justify;page-break-after:
avoid;border:none;padding:0cm'><span lang=EN-AU style='font-size:11.0pt'></span></p>

<p class=MsoNormal style='margin-top:6.0pt;text-align:justify;page-break-after:
avoid;border:none;padding:0cm'><span lang=EN-AU style='font-size:11.0pt'>..................................................................................................................... </span></p>

<p class=MsoNormal style='margin-top:6.0pt;text-align:justify;page-break-after:
avoid;border:none;padding:0cm'><span lang=EN-AU style='font-size:11.0pt'>Name:</span><span
lang=EN-AU style='font-size:11.0pt'> </span></p>

<p class=MsoNormal style='margin-top:6.0pt;text-align:justify;page-break-after:
avoid;border:none;padding:0cm'><span lang=EN-AU style='font-size:11.0pt'>Date: </span></p>

<p class=MsoNormal style='margin-top:6.0pt;text-align:justify;page-break-after:
avoid;border:none;padding:0cm'><span lang=EN-AU style='font-size:11.0pt;
color:black'> <!-- insert date --> </span></p>

</div>

<p class=MsoNormal><span lang=EN-AU>&nbsp;</span></p>

<p class=MsoNormal><span lang=EN-AU>&nbsp;</span></p>

</div>

</body>

</html>
