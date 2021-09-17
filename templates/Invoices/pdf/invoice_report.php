<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice $invoice
 * @var string[]|\Cake\Collection\CollectionInterface $projects
 * @var string[]|\Cake\Collection\CollectionInterface $feeproposals
 */
?>

</div>

<html>

<head>
    <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
    <meta name=Generator content="Microsoft Word 15 (filtered)">
    <style>
        <!--
        /* Font Definitions */
        @font-face
        {font-family:"Cambria Math";
            panose-1:2 4 5 3 5 4 6 3 2 4;}
        @font-face
        {font-family:Tahoma;
            panose-1:2 11 6 4 3 5 4 4 2 4;}
        @font-face
        {font-family:"Arial Black";
            panose-1:2 11 10 4 2 1 2 2 2 4;}
        /* Style Definitions */
        p.MsoNormal, li.MsoNormal, div.MsoNormal
        {margin:0cm;
            font-size:10.0pt;
            font-family:"Arial",sans-serif;}
        .MsoChpDefault
        {font-size:10.0pt;}
        /* Page Definitions */
        @page WordSection1
        {size:595.3pt 841.9pt;
            margin:36.0pt 53.85pt 13.05pt 53.85pt;}
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

    <p class=MsoNormal><img width=338 height=77 id="Picture 1" src="https://i.imgur.com/M5t7FpO.png">
        <b>
            <span lang=EN-GB style='font-size:18.0pt; margin-left: 9%;'> </span>
        </b>
        <span lang=EN-GB style='font-size:28.0pt;font-family:"Arial Black",sans-serif;color:gray'>INVOICE</span>
    </p>

    <p class=MsoNormal><span lang=EN-GB>&nbsp;</span></p>

    <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=668 style='width:500.8pt;border-collapse:collapse'>
        <tr>
            <td width=481 valign=top style='width:360.4pt;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal><span lang=EN-GB>Suite 263 Queen Street</span></p>
                <p class=MsoNormal><span lang=EN-GB>Melbourne, Australia, 3000</span></p>
                <p class=MsoNormal><span lang=EN-GB>P | 0424 488 649 &nbsp; E | BMarshall@MarshallStructures.com.au</span></p>
            </td>
            <td width=187 valign=top style='width:140.4pt;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='text-indent:.4pt'><b><span lang=EN-GB>JOB NUMBER: <?= $invoice->project->id ?></span></b></p>
                <p class=MsoNormal style='text-indent:.4pt'><b><span lang=EN-GB>INVOICE No: <?= $invoice->id ?></span></b></p>
                <p class=MsoNormal style='text-indent:.4pt'><b><span lang=EN-GB>DATE: </span></b><b><span lang=EN-GB><?= date('d/m/y', strtotime($invoice->datecreated)) ?></span></b></p>
                <p class=MsoNormal style='text-indent:.4pt'><span lang=EN-GB>&nbsp;</span></p>
            </td>
        </tr>
    </table>

    <p class=MsoNormal><span lang=EN-GB>&nbsp;</span></p>

    <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
           style='border-collapse:collapse'>
        <tr style='height:72.0pt'>
            <td width=367 valign=top style='width:275.4pt;padding:0cm 5.4pt 0cm 5.4pt;height:72.0pt'>
                <p class=MsoNormal><span lang=EN-GB>Attn:  <b><?=$invoice['project']['client']['firstname'].' '.$invoice['project']['client']['lastname']?></b></span></p>
                <p class=MsoNormal><span lang=EN-GB>Company: <b> <?=$invoice['project']['client']['company']['companyname']?></b></span></p>
                <p class=MsoNormal><span lang=EN-GB>Address: <b> <?=$invoice['project']['client']['company']['streetname']?></b></span></p>
                <p class=MsoNormal><span lang=EN-GB>Suburb, State: <b><?=$invoice['project']['client']['company']['suburb']?>, <?= $invoice['project']['client']['company']['state'] ?> <?=$invoice['project']['client']['company']['postcode']?></b></span></p>
                <p class=MsoNormal><span lang=EN-GB>Phone Number: <b> <?=$invoice['project']['client']['phonenumber']?></b></span></p>
            </td>
            <td width=367 valign=top style='width:275.4pt;padding:0cm 5.4pt 0cm 5.4pt;height:72.0pt'>
                <p class=MsoNormal><span lang=EN-GB>&nbsp;</span></p>
            </td>
        </tr>
    </table>

    <p class=MsoNormal><span lang=EN-GB>Refer below for invoice relating to the project '<b><?= $invoice->project->projectname ?></b> - <b><?= $invoice->project->streetname ?>&nbsp;<?= $invoice->project->suburb ?></b>'</span></p>

    <p class=MsoNormal><span lang=EN-GB>This invoice relates to <b><span style='color:red'><?= $invoice->completedpercentage ?>% completion</span></b> of total fees </span></p>

    <p class=MsoNormal><span lang=EN-GB>&nbsp;</span></p>

    <p class=MsoNormal><span lang=EN-GB>&nbsp;</span></p>

    <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="98%" style='width:98.16%;border-collapse:collapse;border:none'>
        <tr style='page-break-inside:avoid'>
            <td width="51%" colspan=2 valign=top style='width:51.36%;border:solid windowtext 1.0pt;border-top:solid windowtext 1.5pt;padding:0cm 10.8pt 0cm 10.8pt'>
                <p class=MsoNormal align=center style='text-align:center'><b><span lang=EN-GB>DESCRIPTION</span></b></p>
            </td>
            <td width="34%" valign=top style='width:34.48%;border-top:solid windowtext 1.5pt;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 10.8pt 0cm 10.8pt'>
                <p class=MsoNormal align=center style='text-align:center'><b><span lang=EN-GB>PERCENTAGE COMPLETION</span></b></p>
            </td>
            <td width="14%" valign=top style='width:14.16%;border-top:solid windowtext 1.5pt;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 10.8pt 0cm 10.8pt'>
                <p class=MsoNormal align=center style='text-align:center'><b><span lang=EN-GB>AMOUNT</span></b></p>
            </td>
        </tr>
        <tr style='page-break-inside:avoid'>
            <td width="51%" colspan=2 valign=top style='width:51.36%;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;padding:0cm 10.8pt 0cm 10.8pt'>
                <p class=MsoNormal><span lang=EN-GB><?= $invoice->invdesc ?></span></p>
            </td>
            <td width="34%" valign=top style='width:34.48%;border:none;border-right:solid windowtext 1.0pt;padding:0cm 10.8pt 0cm 10.8pt'>
                <p class=MsoNormal align=right style='text-align:right'><span lang=EN-GB><?= $invoice->completedpercentage ?>%</span></p>
            </td>
            <td width="14%" valign=top style='width:14.16%;border:none;border-right:solid windowtext 1.0pt;padding:0cm 10.8pt 0cm 10.8pt'>
                <p class=MsoNormal align=right style='text-align:right'><span lang=EN-GB><?= $invoice->total ?>$</span></p>
            </td>
        </tr>
        <tr style='page-break-inside:avoid'>
            <td width="51%" colspan=2 valign=top style='width:51.36%;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;padding:0cm 10.8pt 0cm 10.8pt'>
                <p class=MsoNormal><span lang=EN-GB>&nbsp;</span></p>
            </td>
            <td width="34%" valign=top style='width:34.48%;border:none;border-right:solid windowtext 1.0pt;padding:0cm 10.8pt 0cm 10.8pt'>
                <p class=MsoNormal align=right style='text-align:right'><span lang=EN-GB>&nbsp;</span></p>
            </td>
            <td width="14%" valign=top style='width:14.16%;border:none;border-right:solid windowtext 1.0pt;padding:0cm 10.8pt 0cm 10.8pt'>
                <p class=MsoNormal align=right style='text-align:right'><span lang=EN-GB>&nbsp;</span></p>
            </td>
        </tr>
        <tr style='page-break-inside:avoid'>
            <td width="51%" colspan=2 valign=top style='width:51.36%;border:solid windowtext 1.0pt;border-top:none;padding:0cm 10.8pt 0cm 10.8pt'>
                <p class=MsoNormal><span lang=EN-GB>&nbsp;</span></p>
            </td>
            <td width="34%" valign=top style='width:34.48%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 10.8pt 0cm 10.8pt'>
                <p class=MsoNormal align=right style='text-align:right'><span lang=EN-GB>&nbsp;</span></p>
            </td>
            <td width="14%" valign=top style='width:14.16%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 10.8pt 0cm 10.8pt'>
                <p class=MsoNormal align=right style='text-align:right'><span lang=EN-GB>&nbsp;</span></p>
            </td>
        </tr>
        <tr style='page-break-inside:avoid'>
            <td width="40%" valign=top style='width:40.82%;border:none;padding:0cm 10.8pt 0cm 10.8pt'>
                <p class=MsoNormal align=right style='text-align:right'><span lang=EN-GB>&nbsp;</span></p>
            </td>
            <td width="45%" colspan=2 valign=top style='width:45.02%;border:none;border-right:solid windowtext 1.0pt;padding:0cm 10.8pt 0cm 10.8pt'>
                <p class=MsoNormal align=right style='text-align:right'><span lang=EN-GB>SUBTOTAL</span></p>
            </td>
            <td width="14%" valign=top style='width:14.16%;border:none;border-right:solid windowtext 1.0pt;padding:0cm 10.8pt 0cm 10.8pt'>
                <p class=MsoNormal align=right style='text-align:right'><span lang=EN-GB> <?= $invoice->total ?>$ </span></p>
            </td>
        </tr>
        <tr style='page-break-inside:avoid'>
            <td width="40%" valign=top style='width:40.82%;border:none;padding:0cm 10.8pt 0cm 10.8pt'>
                <p class=MsoNormal align=right style='text-align:right'><span lang=EN-GB>&nbsp;</span></p>
            </td>
            <td width="45%" colspan=2 valign=top style='width:45.02%;border:none;border-right:solid windowtext 1.0pt;padding:0cm 10.8pt 0cm 10.8pt'>
                <p class=MsoNormal align=right style='text-align:right'><span lang=EN-GB>GST</span></p>
            </td>
            <td width="14%" valign=top style='width:14.16%;border:none;border-right:solid windowtext 1.0pt;padding:0cm 10.8pt 0cm 10.8pt'>
                <p class=MsoNormal align=right style='text-align:right'><span lang=EN-GB><?= $invoice->totalgst ?>$</span></p>
            </td>
        </tr>
        <tr style='page-break-inside:avoid'>
            <td width="40%" valign=top style='width:40.82%;border:none;padding:0cm 10.8pt 0cm 10.8pt'>
                <p class=MsoNormal align=right style='text-align:right'><span lang=EN-GB>&nbsp;</span></p>
            </td>
            <td width="45%" colspan=2 valign=top style='width:45.02%;border:none;border-right:solid windowtext 1.0pt;padding:0cm 10.8pt 0cm 10.8pt'>
                <p class=MsoNormal align=right style='text-align:right'><b><span lang=EN-GB>TOTALDUE</span></b></p>
            </td>
            <td width="14%" valign=top style='width:14.16%;border:solid windowtext 1.0pt;border-left:none;padding:0cm 10.8pt 0cm 10.8pt'>
                <p class=MsoNormal align=right style='text-align:right'><span lang=EN-GB><?= $invoice->grandtotal ?>$</span></p>
            </td>
        </tr>
        <tr height=0>
            <td width=218 style='border:none'></td>
            <td width=54 style='border:none'></td>
            <td width=184 style='border:none'></td>
            <td width=87 style='border:none'></td>
        </tr>
    </table>

    <p class=MsoNormal><span lang=EN-GB>&nbsp;</span></p>

    <p class=MsoNormal><span lang=EN-GB>&nbsp;</span></p>

    <p class=MsoNormal><span lang=EN-GB>Payments to be made via bank deposit to account information found at bottom of page. </span></p>

    <p class=MsoNormal><span lang=EN-GB>Please quote the job number at top right of page or project description as reference when making the payment.</span></p>

    <p class=MsoNormal><span lang=EN-GB>If you have any questions concerning this invoice, contact Ben Marshall either via phone or email as per the information at the top of this page.</span></p>

    <p class=MsoNormal><span lang=EN-GB>All payments are due within <b><?= $invoice->paywithinday ?></b> days of the issue date of this invoice, as per fee proposal and terms of appointment agreements.</span></p>

    <p class=MsoNormal><span lang=EN-GB>&nbsp;</span></p>

    <p class=MsoNormal><span lang=EN-GB>&nbsp;</span></p>

    <p class=MsoNormal><span lang=EN-GB>&nbsp;</span></p>

    <p class=MsoNormal align=center style='text-align:center'><b><span lang=EN-GB>THANK YOU FOR YOUR BUSINESS!</span></b></p>
    
    <p class=MsoNormal><span lang=EN-GB>&nbsp;</span></p>

    <p class=MsoNormal><span lang=EN-GB>&nbsp;</span></p>

    <p class=MsoNormal><span lang=EN-GB>&nbsp;</span></p>

    <p class=MsoNormal><strong><u>Bank Information</u></strong></p>
    <p class=MsoNormal>Bank West<br>
    Account Name: &nbsp; &nbsp; Marshall Structures
    <br>BSB Number: &nbsp; &nbsp; &nbsp; 302-162
    <br>Account Number: 16 52 478</p>
</div>

</body>

</html>
