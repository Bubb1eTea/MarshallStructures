<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ntcertificate $ntcertificate
 * @var string[]|\Cake\Collection\CollectionInterface $projects
 * @var string[]|\Cake\Collection\CollectionInterface $designstandards
 */
?>
<br>

<button style='float: right;' onclick="history.go(-1);"> Back </button>
<buttoner style='float: right; margin-right: 25px;padding: 0px;'>
    <?= $this->Html->link(__(' Download to pdf'), ['action' => 'ntcertificatesReport', $ntcertificate->id ], ['class' => 'button']); ?>
</buttoner>

<html>

<head>
    <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
    <meta name=Generator content="Microsoft Word 15 (filtered)">
    <title>Structural Design - Section 40</title>
    <style>
        <!--
        /* Font Definitions */
        @font-face {
            font-family: Wingdings;
            panose-1: 5 0 0 0 0 0 0 0 0 0;
        }

        @font-face {
            font-family: "Cambria Math";
            panose-1: 2 4 5 3 5 4 6 3 2 4;
        }

        @font-face {
            font-family: "Arial Narrow";
            panose-1: 2 11 6 6 2 2 2 3 2 4;
        }

        @font-face {
            font-family: Tahoma;
            panose-1: 2 11 6 4 3 5 4 4 2 4;
        }

        @font-face {
            font-family: "Swis721 Cn BT";
        }

        @font-face {
            font-family: "MV Boli";
            panose-1: 2 0 5 0 3 2 0 9 0 0;
        }

        /* Style Definitions */
        p.MsoNormal,
        li.MsoNormal,
        div.MsoNormal {
            margin: 0cm;
            line-height: 120%;
            font-size: 10.0pt;
            font-family: "Arial", sans-serif;
        }

        h1 {
            mso-style-link: "Heading 1 Char";
            margin-top: 15.0pt;
            margin-right: 0cm;
            margin-bottom: 15.0pt;
            margin-left: 36.0pt;
            text-indent: -36.0pt;
            line-height: 120%;
            page-break-after: avoid;
            font-size: 14.0pt;
            font-family: "Arial Narrow", sans-serif;
            text-transform: uppercase;
            font-weight: bold;
        }

        h2 {
            margin-top: 12.0pt;
            margin-right: 0cm;
            margin-bottom: 12.0pt;
            margin-left: 36.0pt;
            text-indent: -36.0pt;
            line-height: 120%;
            page-break-after: avoid;
            font-size: 12.0pt;
            font-family: "Arial Narrow", sans-serif;
            text-transform: uppercase;
            font-weight: bold;
        }

        h3 {
            margin-top: 9.0pt;
            margin-right: 0cm;
            margin-bottom: 9.0pt;
            margin-left: 36.0pt;
            text-indent: -36.0pt;
            line-height: 120%;
            page-break-after: avoid;
            font-size: 12.0pt;
            font-family: "Arial Narrow", sans-serif;
            font-weight: bold;
        }

        h5 {
            margin-top: 12.0pt;
            margin-right: 0cm;
            margin-bottom: 3.0pt;
            margin-left: 50.4pt;
            text-indent: -50.4pt;
            line-height: 120%;
            font-size: 13.0pt;
            font-family: "Arial", sans-serif;
            font-weight: bold;
            font-style: italic;
        }

        h6 {
            margin-top: 12.0pt;
            margin-right: 0cm;
            margin-bottom: 3.0pt;
            margin-left: 57.6pt;
            text-indent: -57.6pt;
            line-height: 120%;
            font-size: 11.0pt;
            font-family: "Times New Roman", serif;
            font-weight: bold;
        }

        p.MsoHeading7,
        li.MsoHeading7,
        div.MsoHeading7 {
            margin-top: 12.0pt;
            margin-right: 0cm;
            margin-bottom: 3.0pt;
            margin-left: 64.8pt;
            text-indent: -64.8pt;
            line-height: 120%;
            font-size: 12.0pt;
            font-family: "Times New Roman", serif;
        }

        p.MsoHeading8,
        li.MsoHeading8,
        div.MsoHeading8 {
            margin-top: 12.0pt;
            margin-right: 0cm;
            margin-bottom: 3.0pt;
            margin-left: 72.0pt;
            text-indent: -72.0pt;
            line-height: 120%;
            font-size: 12.0pt;
            font-family: "Times New Roman", serif;
            font-style: italic;
        }

        p.MsoHeading9,
        li.MsoHeading9,
        div.MsoHeading9 {
            margin-top: 12.0pt;
            margin-right: 0cm;
            margin-bottom: 3.0pt;
            margin-left: 79.2pt;
            text-indent: -79.2pt;
            line-height: 120%;
            font-size: 11.0pt;
            font-family: "Arial", sans-serif;
        }

        p.MsoHeader,
        li.MsoHeader,
        div.MsoHeader {
            mso-style-link: "Header Char";
            margin: 0cm;
            line-height: 120%;
            font-size: 10.0pt;
            font-family: "Arial", sans-serif;
        }

        p.MsoFooter,
        li.MsoFooter,
        div.MsoFooter {
            margin: 0cm;
            line-height: 120%;
            font-size: 7.0pt;
            font-family: "Arial", sans-serif;
            letter-spacing: .3pt;
        }

        span.MsoPageNumber {
            font-family: "Arial", sans-serif;
            text-decoration: none;
            vertical-align: baseline;
        }

        p.MsoListParagraph,
        li.MsoListParagraph,
        div.MsoListParagraph {
            margin-top: 0cm;
            margin-right: 0cm;
            margin-bottom: 0cm;
            margin-left: 36.0pt;
            line-height: 120%;
            font-size: 10.0pt;
            font-family: "Arial", sans-serif;
        }

        span.HeaderChar {
            mso-style-name: "Header Char";
            mso-style-link: Header;
            font-family: "Arial", sans-serif;
        }

        p.NormalBold,
        li.NormalBold,
        div.NormalBold {
            mso-style-name: "Normal Bold";
            margin: 0cm;
            line-height: 120%;
            font-size: 10.0pt;
            font-family: "Arial", sans-serif;
            font-weight: bold;
        }

        /* Page Definitions */
        @page WordSection1 {
            size: 595.3pt 841.9pt;
            margin: 18.7pt 1.0cm 34.0pt 42.55pt;
        }

        div.WordSection1 {
            page: WordSection1;
        }

        /* List Definitions */
        ol {
            margin-bottom: 0cm;
        }

        ul {
            margin-bottom: 0cm;
        }

        </style></head><body lang=EN-US link=blue vlink=purple style='word-wrap:break-word'><div class=contenter><div class=WordSection1><headerstart style="margin:auto;  width:100%;"align=center><span></headerstart><p class=MsoNormal align=center style='text-align:center'><b><span lang=EN-AU style='color:black; font-size: 18px'>NORTHERN TERRITORY OF AUSTRALIA <br>BUILDING ACT <br>SECTION 40 – CERTIFICATE OF COMPLIANCE – STRUCTURAL DESIGN </span></b></p><br><p class=MsoNormal align=center style='text-align:center'><b><i><span lang=EN-AU style='color:maroon'>All sections must be completed - mark N/A to any question that does not apply</span></i></b></p><p class=MsoNormal><span lang=EN-AU>&nbsp;
        </span></p><table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=698 style='width:523.6pt;margin-left:5.4pt;border-collapse:collapse;border:none;   margin: auto;  padding: 10px;'><tr style='height:15.6pt'><td width=698 colspan=2 style='width:523.6pt;border:solid windowtext 1.0pt;
background:#F3F3F3;
        padding:0cm 5.4pt 0cm 5.4pt;
        height:15.6pt'>
<p class=MsoNormal><b><span lang=EN-AU style='font-size:9.0pt'>PROPERTY<span style='color:black'>/ PROJECT DETAILS</span></span></b></p></td></tr><tr style='height:15.6pt'><td width=698 colspan=2 style='width:523.6pt;border:solid windowtext 1.0pt;
border-top:none;
        padding:0cm 5.4pt 0cm 5.4pt;
        height:15.6pt'>
<p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>Owner (if known): <!-- Insert owner

        -->
        <?=$ntcertificate->name?>

    </span>
    </p>
    </td>
    </tr>
    <tr style='height:15.6pt'>
        <td width=349 style='width:261.8pt;border:solid windowtext 1.0pt;border-top:
                  none;padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
            <p class=MsoNormal>
                <span lang=EN-AU style='font-size:8.0pt'>
                    Lot/Portion
                    Number:
                    <!-- Insert Lot/Portion Number --> <?=$ntcertificate->lotportionnum?>
                </span>
            </p>
        </td>
        <td width=349 style='width:261.8pt;border-top:none;border-left:none;
                  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
            <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>Address:
                    <!-- Insert location --> <?= $ntcertificate->project->streetname ?>,
                    <?= $ntcertificate->project->suburb ?> </span></p>
        </td>
    </tr>
    <tr style='height:15.6pt'>
        <td width=349 style='width:261.8pt;border:solid windowtext 1.0pt;border-top:
                  none;padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
            <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>Location:
                    <!-- Insert location --> <?=$ntcertificate->location?> </span></p>
        </td>
        <td width=349 style='width:261.8pt;border-top:none;border-left:none;
                  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
            <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>Town / Hundred:
                    <!-- Town --><?=$ntcertificate->townhundred?> </span></p>
        </td>
    </tr>
    <tr style='height:15.6pt'>
        <td width=698 colspan=2 style='width:523.6pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
            <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>Description of
                    works :</span>
            </p>
            <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'><?=$ntcertificate->workdesc?> </span></p>
            <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>
                    <!-- Insert Description of work --></span></p>
            <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>&nbsp;</span></p>
            <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>&nbsp;</span></p>
            <p class=MsoNormal><b><span lang=EN-AU style='font-size:8.0pt'>&nbsp;</span></b></p>
        </td>
    </tr>
    </table>
    <p class=MsoNormal><span lang=EN-AU>&nbsp;</span></p>
    <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=698
        style='width:523.6pt;margin-left:5.4pt;border-collapse:collapse;border:none;  margin: auto;  padding: 10px;'>
        <tr style='height:15.6pt'>
            <td width=698 style='width:523.6pt;border:solid windowtext 1.0pt;background:
                  #F3F3F3;padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt; '>
                <p class=NormalBold><span lang=EN-AU style='font-size:9.0pt'>DOCUMENTS
                        ATTACHED</span>
                </p>
            </td>
        </tr>
        <tr style='height:15.6pt'>
            <td width=698 style='width:523.6pt;border:solid windowtext 1.0pt;border-top:
                  none;padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>Drawing Nos:
                        <!-- Insert drawing nos --> <?=$ntcertificate->drawingno?> </span></p>
            </td>
        </tr>
        <tr style='height:15.6pt'>
            <td width=698 style='width:523.6pt;border:solid windowtext 1.0pt;border-top:
                  none;padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>Other:
                        <!-- Insert other notes --> <?=$ntcertificate->other?> </span></p>
            </td>
        </tr>
    </table>
    <p class=MsoNormal><span lang=EN-AU>&nbsp;</span></p>
    <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=698
        style='width:523.6pt;margin-left:5.4pt;border-collapse:collapse;border:none;  margin: auto;  padding: 10px;'>
        <tr style='height:15.6pt'>
            <td width=698 colspan=10 style='width:523.6pt;border:solid windowtext 1.0pt;
                  background:#F3F3F3;padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p class=NormalBold><span lang=EN-AU style='font-size:9.0pt'>DESIGN BASIS: </span><span lang=EN-AU
                        style='font-size:9.0pt;color:black;font-weight:normal'></span><span lang=EN-AU
                        style='font-size:8.0pt;color:black;font-weight:normal'>(please
                        list relevant Standards used in the design)</span><br>
                    <?php
                      for($x=0; $x<count($ntcertificate->designstandards); $x++){?>
                    <p><?=$ntcertificate->designstandards[$x]['designcode']?> -
                        <?=$ntcertificate->designstandards[$x]['designdesc']?></p>
                    <?php }?>
                </p>
                <p class=NormalBold><span lang=EN-AU style='font-size:9.0pt;font-weight:normal'>&nbsp; </span></p>
                <p class=NormalBold><span lang=EN-AU style='font-size:9.0pt;font-weight:normal'>&nbsp;</span></p>
                <p class=NormalBold><span lang=EN-AU style='font-size:9.0pt;font-weight:normal'>&nbsp;</span></p>
                <p class=NormalBold><span lang=EN-AU style='font-size:9.0pt'>&nbsp;</span></p>
            </td>
        </tr>
        <tr style='height:15.6pt'>
            <td width=331 colspan=7 style='width:248.1pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 0cm 0cm 5.4pt;height:15.6pt'>
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>Class of Building
                        (BCA):
                        <!-- Insert BCA --> <?=$ntcertificate->buildingclass?></span>
                </p>
            </td>
            <td width=367 colspan=3 style='width:275.5pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>Type of
                        Construction (BCA volume 1 §C1.1):
                        <!-- Insert BCA volume -->
                </p>

                </p>
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'><?=$ntcertificate->constructiontype?> </p>
                </span>
                <br>
            </td>
        </tr>
        <tr style='height:15.6pt'>
            <td width=331 colspan=7 style='width:248.1pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>Building
                        Importance Level (BCA Table B1.2a):
                        <!-- Insert Building importance level --> <?=$ntcertificate->buildingimportancelevel?></span>
                </p>
            </td>
            <td width=367 colspan=3 style='width:275.5pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>Annual
                        Probability of Exceedance for Wind (BCA Table 1.2b):
                        <!-- Insert annual Probability of excedance --> <br>1 in
                        <!-- Insert probability --> <?=$ntcertificate->windexceedance?></span>
                </p>
            </td>
        </tr>
        <tr style='height:14.8pt'>
            <td width=112 valign=top style='width:84.1pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:14.8pt'>
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>Region:
                        <!-- Insert region --> <br> <?=$ntcertificate->region?> <br> </span></p>
            </td>
            <td width=274 colspan=7 valign=top style='width:205.65pt;border-top:none;
                  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:14.8pt'>
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>Regional ultimate
                        wind speed V<sub>R</sub>(m/s):
                        <!-- Insert regional ultimate wind speed --> <br><?=$ntcertificate->windspeed?> </span>
                </p>
            </td>
            <td width=150 valign=top style='width:112.2pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:14.8pt'>
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>Terrain Category:
                        <!-- Insert terrain category --> <br> <?=$ntcertificate->terraincat?></span></p>
            </td>
            <td width=162 valign=top style='width:121.65pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:14.8pt'>
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>Reference height
                        (m):
                        <!-- Insert reference height --> <?=$ntcertificate->referenceheight?> </span>
                </p>
            </td>
        </tr>
        <tr style='height:15.6pt'>
            <td width=112 style='width:84.1pt;border:solid windowtext 1.0pt;border-top:
                  none;padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>M<sub>z,cat </sub>:
                        <!-- Insert MzCat --> <?=$ntcertificate->mz?> </span></p>
            </td>
            <td width=87 style='width:65.4pt;border-top:none;border-left:none;border-bottom:
                  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
                  height:15.6pt'>
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>M<sub>s </sub>:
                        <!-- Insert ms --> <?=$ntcertificate->ms?> </span></p>
            </td>
            <td width=87 colspan=3 style='width:65.45pt;border-top:none;border-left:none;
                  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>M<sub>t</sub> :
                        <!-- Insert mt --> <?=$ntcertificate->mt?></span></p>
            </td>
            <td width=100 colspan=3 style='width:74.8pt;border-top:none;border-left:none;
                  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'> </span></p>
            </td>
            <td width=312 colspan=2 style='width:233.85pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>V<sub>des
                            <!--HELP I CANT PUT THETA HERE (θ)--> </sub>Design
                        Wind Speed at reference height (m/s): <?=$ntcertificate->windspeedrefheight?> </span>
                </p>
                <!-- Insert wind speed at reference height -->
            </td>
        </tr>
        <tr style='height:15.6pt'>
            <td width=217 colspan=4 style='width:163.05pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p class=NormalBold><span lang=EN-AU style='font-size:8.0pt;font-weight:normal'>Internal
                        Pressure Coefficients (C<sub>p,i</sub>):</span>
                </p>

                <!-- insert Inetrnal pressure Coefficients -->
                <awser style="font-size:8pt"> <?=$ntcertificate->intpressure?> </awser>
            </td>
            <td width=481 colspan=6 style='width:360.55pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p class=NormalBold align=center style='text-align:center'><span lang=EN-AU
                        style='font-size:8.0pt'>&nbsp;</span></p>
            </td>
        </tr>
        <tr style='height:15.6pt'>
            <td width=216 colspan=3 style='width:161.9pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p class=NormalBold><span lang=EN-AU style='font-size:8.0pt;font-weight:normal'>External
                        Pressure Coefficients (C<sub>p,e</sub>)</span>
                </p>
                <!-- Insert external pressure Coefficients -->
            </td>
            <td width=77 colspan=3 style='width:57.85pt;border-top:none;border-left:none;
                  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p class=NormalBold align=right style='text-align:right'><span lang=EN-AU
                        style='font-size:8.0pt;font-weight:normal'>Walls</span></p>
            </td>
            <td width=405 colspan=4 style='width:303.85pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p align=center style='text-align:left'><span lang=EN-AU
                        style='font-size:8.0pt'><?=$ntcertificate->expressurewall?> </span></p>
                <!-- Insert walls -->
            </td>
        </tr>
        <tr style='height:15.6pt'>
            <td width=216 colspan=3 style='width:161.9pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p class=NormalBold><span lang=EN-AU style='font-size:8.0pt;font-weight:normal'>&nbsp;</span></p>
            </td>
            <td width=77 colspan=3 style='width:57.85pt;border-top:none;border-left:none;
                  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p class=NormalBold align=right style='text-align:right'><span lang=EN-AU
                        style='font-size:8.0pt;font-weight:normal'>Roof</span></p>
            </td>
            <td width=405 colspan=4 style='width:303.85pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p align=center style='text-align:left'><span lang=EN-AU
                        style='font-size:8.0pt'><?=$ntcertificate->expressureroof?> </span></p>
                <!-- Insert roof -->
            </td>
        </tr>
        <tr style='height:15.6pt'>
            <td width=216 colspan=3 style='width:161.9pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p class=NormalBold><span lang=EN-AU style='font-size:8.0pt;font-weight:normal'>Net
                        Pressure Coefficients: (C<sub>p,n</sub>)</span>
                </p>
                <!-- Insert net pressure Coefficients -->
            </td>
            <td width=77 colspan=3 style='width:57.85pt;border-top:none;border-left:none;
                  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p class=NormalBold align=right style='text-align:right'><span lang=EN-AU
                        style='font-size:8.0pt;font-weight:normal'>Roof / Walls</span></p>

            </td>
            <td width=405 colspan=4 style='width:303.85pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p align=center style='text-align:left'><span lang=EN-AU
                        style='font-size:8.0pt'><?=$ntcertificate->netpressureroofwall?></span></p>

                <!-- Insert floor/roof -->
            </td>
        </tr>
        <tr style='height:15.6pt'>
            <td width=216 colspan=3 style='width:161.9pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p class=NormalBold><span lang=EN-AU style='font-size:8.0pt;font-weight:normal'>Imposed
                        Loads, kPa </span>
                </p>

                <!-- Insert imposed workload -->
            </td>
            <td width=77 colspan=3 style='width:57.85pt;border-top:none;border-left:none;
                  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p class=NormalBold align=right style='text-align:right'><span lang=EN-AU
                        style='font-size:8.0pt;font-weight:normal'>Floor / Roof</span></p>
            </td>
            <td width=405 colspan=4 style='width:303.85pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p align=center style='text-align:left'><span lang=EN-AU
                        style='font-size:8.0pt'><?=$ntcertificate->imposedloadfloorroof?></span></p>

                <!-- Insert floor/roof -->
            </td>
        </tr>
        <tr style='height:15.6pt'>
            <td width=698 colspan=10 style='width:523.6pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>Earthquake Design
                        Category, EDC (Table 2.1 of AS 1170.4): <?=$ntcertificate->earthquakecat?></span>
                </p>
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>Annual
                        Probability of Exceedance for Earthquake Actions (BCA Table 1.2b):
                        <!-- Insert annual probability --> 1 in
                        <!-- Insert probability --> <?=$ntcertificate->earthexceedance?> </span>
                </p>
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>Importance Level
                        (BCA):
                        <!-- Insert importance level --> <?=$ntcertificate->importancelevel?><br> Hazard Factor, Z
                        (Section
                        3):
                        <!-- Insert Hazard Factor --><?=$ntcertificate->hazardfactor?> <br> Class of Sub-Soil (Section
                        4):
                        <!-- Insert Class of Sub-Soil --> <?=$ntcertificate->subsoilclass?> </span>
                </p>
            </td>
        </tr>
        <tr style='height:15.6pt'>
            <td width=698 colspan=10 style='width:523.6pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>Safe Foundation
                        Bearing Capacity, kPa:
                        <!-- Insert safe foundation bearing capacity --> <?=$ntcertificate->bearingcap?> <br> <b>
                            <!-- Insert site classification -->
                        </b>Site classification (AS2870): <?=$ntcertificate->siteclass?> </span>
                </p>
            </td>
        </tr>
        <tr height=0>
            <td width=112 style='border:none'></td>
            <td width=87 style='border:none'></td>
            <td width=17 style='border:none'></td>
            <td width=2 style='border:none'></td>
            <td width=69 style='border:none'></td>
            <td width=6 style='border:none'></td>
            <td width=38 style='border:none'></td>
            <td width=56 style='border:none'></td>
            <td width=150 style='border:none'></td>
            <td width=162 style='border:none'></td>
        </tr>
    </table>
    <p class=MsoNormal><span lang=EN-AU>&nbsp;</span></p>
    <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=698
        style='width:523.6pt;margin-left:5.4pt;border-collapse:collapse;border:none;  margin: auto;  padding: 10px;'>
        <tr style='height:15.6pt'>
            <td width=698 style='width:523.6pt;border:solid windowtext 1.0pt;background:
                  #F3F3F3;padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p class=MsoNormal><b><span lang=EN-AU style='font-size:9.0pt'>COMMENTS /
                            EXCLUSIONS</span></b><span lang=EN-AU style='font-size:9.0pt;color:black'>
                        (Exclusions to this Certificate must be clearly identified).</span>
                </p>
            </td>
        </tr>
        <tr style='height:15.6pt'>
            <td width=698 style='width:523.6pt;border:solid windowtext 1.0pt;border-top:
                  none;padding:0cm 5.4pt 0cm 5.4pt;height:15.6pt'>
                <p class=MsoNormal style='line-height:400%'><span lang=EN-AU
                        style='font-size:8.0pt;line-height:400%'>The following items are excluded and
                        shall be certified separately: </span>
                </p>
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'> <?=$ntcertificate->exclusion?> </p> <br>
            </td>
        </tr>
        <tr style='height:39.1pt'>
            <td width=698 valign=top style='width:523.6pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:39.1pt'>
                <p class=NormalBold style='line-height:normal'><span lang=EN-AU
                        style='font-size:8.0pt;font-weight:normal'>Comments:</span></p>
                <p class=NormalBold style='margin-left:18.0pt'><span lang=EN-AU style='font-size:8.0pt'>&nbsp;</span>
                </p>
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'> <?=$ntcertificate->comment?> </p>
            </td>
        </tr>
    </table>
    <p class=MsoNormal><span lang=EN-AU>&nbsp;</span></p>
    <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=698
        style='width:523.6pt;margin-left:5.4pt;border-collapse:collapse;border:none;  margin: auto;  padding: 10px;'>
        <tr style='height:24.2pt'>
            <td width=698 colspan=5 valign=bottom style='width:523.6pt;border:solid windowtext 1.0pt;
                  background:#F3F3F3;padding:0cm 5.4pt 0cm 5.4pt;height:24.2pt'>
                <p class=NormalBold align=center style='margin-top:6.0pt;margin-right:0cm;
                     margin-bottom:6.0pt;margin-left:0cm;text-align:center;line-height:normal'><u><span
                            lang=EN-AU>CERTIFICATION BY STRUCTURAL ENGINEER</span></u></p>
            </td>
        </tr>
        <!-- THIS SECTION IS FOR CERIFICATION BY STRUCTURAL ENGINEER-->
        <tr style='page-break-inside:avoid;height:18.0pt'>
            <td width=378 colspan=3 style='width:283.65pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                <p class=NormalBold style='line-height:150%'><span lang=EN-AU
                        style='font-size:8.0pt;line-height:150%'>Company Name </span><span lang=EN-AU
                        style='font-size:6.0pt;line-height:150%'>if certification issued
                        on behalf of a corporation</span><span lang=EN-AU style='font-size:8.0pt;
                        line-height:150%'> </span> <br>
                </p>
                <p class=NormalBold style='line-height:150%'><span lang=EN-AU
                        style='font-size:8.0pt;line-height:150%'>&nbsp;</span></p>

                <!-- insert company name -->
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'> <?=$ntcertificate->compname?> </p>
            </td>
            <td width=320 colspan=2 style='width:239.95pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                <p class=NormalBold style='line-height:150%'><span lang=EN-AU
                        style='font-size:8.0pt;line-height:150%'>Company NT Registration Number</span></p>
                <p class=NormalBold style='line-height:150%'><span lang=EN-AU
                        style='font-size:8.0pt;line-height:150%;font-weight:normal'>&nbsp;</span></p>

                <!-- insert company NT registration number -->
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'> <?=$ntcertificate->compntregnum?> </p>
            </td>
        </tr>
        <tr style='height:23.3pt'>
            <td width=698 colspan=5 valign=top style='width:523.6pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:23.3pt'>
                <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
                     6.0pt;margin-left:0cm;text-align:justify;line-height:normal'><span lang=EN-AU
                        style='font-size:8.0pt'>I certify that reasonable care has been
                        taken to ensure that the structural engineering aspects of the works as
                        described above have been designed in accordance with the requirements of the
                        Building Code of Australia and the Northern Territory Building Regulations.</span>
                </p>
            </td>
        </tr>
        <tr style='height:41.2pt'>
            <td width=212 valign=top style='width:158.95pt;border:solid windowtext 1.0pt;
                  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:41.2pt'>
                <p class=MsoNormal><b><span lang=EN-AU style='font-size:8.0pt'>Name </span></b><b><span lang=EN-AU
                            style='font-size:6.0pt'>(see *below)</span></b></p>
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>&nbsp;</span></p>
                <p class=MsoNormal><b><span lang=EN-AU style='font-size:8.0pt'>&nbsp;</span></b></p>
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'>&nbsp;</span></p>

                <!-- insert name -->
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'> <?=$ntcertificate->name?> </p>
            </td>
            <td width=141 valign=top style='width:106.0pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:41.2pt'>
                <p class=MsoNormal><b><span lang=EN-AU style='font-size:8.0pt'>Nominee/Individual
                        </span></b>
                </p>
                <p class=MsoNormal><b><span lang=EN-AU style='font-size:8.0pt'>NT
                            Registration Number</span></b>
                </p>
                <p class=MsoNormal><b><span lang=EN-AU style='font-size:8.0pt'>&nbsp;</span></b></p>
                <p class=MsoNormal><b><span lang=EN-AU style='font-size:8.0pt'>&nbsp;</span></b></p>

                <!-- insert NT registration number -->
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'> <?=$ntcertificate->ntregnum?> </p>
            </td>
            <td width=195 colspan=2 valign=top style='width:146.5pt;border-top:none;
                  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:41.2pt'>
                <p class=MsoNormal><b><span lang=EN-AU style='font-size:8.0pt'>Signature </span></b></p>

                <!-- insert Signature -->
            </td>
            <td width=150 valign=top style='width:112.15pt;border-top:none;border-left:
                  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                  padding:0cm 5.4pt 0cm 5.4pt;height:41.2pt'>
                <p class=MsoNormal><b><span lang=EN-AU style='font-size:8.0pt'>Date
                            <!-- insert date --></span></b></p>

                <!-- insert date -->
                <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt'> <?=$ntcertificate->date?> </p>
            </td>
        </tr>
        <tr height=0>
            <td width=212 style='border:none'></td>
            <td width=141 style='border:none'></td>
            <td width=25 style='border:none'></td>
            <td width=170 style='border:none'></td>
            <td width=150 style='border:none'></td>
        </tr>
    </table>
    <!-- THIS SECTION IS FOR schedule of structural inspection required -->
    <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt;line-height:120%'>&nbsp;</span></p>
    <p class=MsoNormal><span lang=EN-AU style='font-size:8.0pt;line-height:120%'>*
            Name and registration number of nominee signing on behalf of the company or if
            no company, name of individual issuing certification.</span>
    </p>
    <p class=MsoNormal><span lang=EN-AU>&nbsp;</span></p>
    <p class=MsoNormal><b><u><span lang=EN-AU>SCHEDULE OF STRUCTURAL INSPECTIONS
                    REQUIRED</span></u></b>
    </p>
    <p class=MsoNormal><span lang=EN-AU>&nbsp;</span></p>
    <p class=MsoNormal style='text-align:justify'><span lang=EN-AU>Inspection of
            construction is required at the stages indicated below.</span>
    </p>
    <br>
    <p style="font-size: 11pt">
        [ ]<b> 1.</b> Completion of site preparation/site filling/excavations for footings prior to placement of any
        reinforcement or concrete.
    </p>
    <br>
    <p style="font-size: 11pt">
        [ ]<b> 2.</b> Completion of preparations for placing of concrete strip footings including placement of
        reinforcement.
    </p><br>
    <p style="font-size: 11pt">
        [ ]<b> 3.</b> Completion of preparations for placing concrete slabs including compaction of fill and sand
        blinding, placement of
        <teste style="padding-left: 4%">formwork, reinforcement, starter bars and cast in items.</teste>
    </p><br>
    <p style="font-size: 11pt">
        [ ]<b> 4.</b> Completion of preparations for placing of concrete pier footings including reinforcement (if any).
    </p><br>
    <p style="font-size: 11pt">
        [ ]<b> 5.</b> Starter bars and cast in items after placing of concrete and prior to any covering up work.
    </p> <br>
    <p style="font-size: 11pt">
        [ ]<b> 6.</b> Reinforcement to walls completed prior to core filling (inspection holes and cleanout cores to be
        completed).
    </p><br>
    <p style="font-size: 11pt">
        [ ]<b> 7.</b> Structural steelwork and cold formed steelwork completed and prior to any covering up work. Floor
        framing system
        <teste style="padding-left: 4%">completed before floors are laid or underside is lined. </teste>
    </p><br>
    <p style="font-size: 11pt">
        [ ]<b> 8.</b> Suspended concrete floor slabs with formwork, reinforcement and cast in items completed, prior to
        placing of concrete.
    </p><br>
    <p style="font-size: 11pt">
        [ ]<b> 9.</b> Wall framing or blockwork wall core filling completed (with windows fixed in place) and roof
        framing with connections
        <teste style="padding-left: 4%">completed and prior to sheeting or lining. </teste>
    </p><br>
    <p style="font-size: 11pt; padding-left: 6%">
        Note: [ ] Prior lodgement of truss manufacturer’s drawings, details and certification required. <br>
        <teste style="padding-left: 5.1%">[ ] Prior lodgement of windows manufacturer’s drawings including fixings and
            certification required. </teste>

    </p><br>

    <p style="font-size: 11pt">
        [ ]<b> 10.</b> Structural wall linings completed and prior to any covering up work.
    </p><br>
    <p style="font-size: 11pt">
        [ ]<b> 11.</b> Final inspection upon completion of all structural work including fixings of external roof and
        wall claddings, flashings,
        <teste style="padding-left: 5%">barges & vents.</teste>
    </p><br>
    <p style="font-size: 11pt">
        [ ]<b> 12.</b> Other Inspections as required by the building permit
    </p><br>

    <p class=MsoNormal style='text-align:justify'><b><span lang=EN-AU
                style='line-height:120%;letter-spacing:-.15pt'>&nbsp;</span></b></p>
    <p class=MsoNormal style='text-align:justify'><span lang=EN-AU>&nbsp;</span></p>
    <p class=MsoNormal style='text-align:justify'><span lang=EN-AU>&nbsp;</span></p>
    <p class=MsoNormal style='text-align:justify'><b><span lang=EN-AU>Important
                Information:</span></b>
    </p>
    <p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
            -18.0pt'><span lang=EN-AU>1)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
            </span></span><span lang=EN-AU>The above inspections are required to be carried
            out by either the certifying engineer or the building certifier who issued the
            Building Permit for the work. (If no inspections are indicated refer to the
            certifying engineer for advice).</span>
    </p>
    <p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><span lang=EN-AU>&nbsp;</span></p>
    <p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
            -18.0pt'><span lang=EN-AU>2)<span style='font:7.0pt "Times New Roman"'>&nbsp;
            </span></span><span lang=EN-AU>Where works are prescribed building works under
            the <i>NT Building Act</i>, the building certifier must be provided with a copy
            of the inspection record and no further works must be carried out by the
            builder until the building certifier issues a release to proceed with further
            works.</span>
    </p>
    <p class=MsoListParagraph><span lang=EN-AU>&nbsp;</span></p>
    <p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
            -18.0pt'><span lang=EN-AU>3)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
            </span></span><span lang=EN-AU>Additional non structural inspections may be
            required during the course of construction before the issue of an Occupancy
            Permit (refer to building certifier for requirements).</span>
    </p>
    <p class=MsoListParagraph><span lang=EN-AU>&nbsp;</span></p>
    <p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
            -18.0pt'><span lang=EN-AU>4)<span style='font:7.0pt "Times New Roman"'>&nbsp;
            </span></span><span lang=EN-AU>Failure to obtain inspections may prevent the
            issue of an Occupancy Permit upon completion of the building works. </span>
    </p>
    <p class=MsoNormal style='margin-left:18.7pt;text-align:justify;text-indent:
            -18.7pt'><span lang=EN-AU>&nbsp;</span></p>
    <p class=MsoNormal><span lang=EN-AU>&nbsp;</span></p>
    </div>
    </body>

</html>
