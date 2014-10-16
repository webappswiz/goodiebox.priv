
<?php
require_once 'application/vendor/tcpdf_min/tcpdf.php';

$html = '<!DOCTYPE html>
<!--
Author: Viktor Danilchenko
-->
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

        <style>
            body {
                line-height: 1;
            }
            ol, ul {
                list-style: none;
            }
            blockquote, q {
                quotes: none;
            }
            blockquote:before, blockquote:after,
            q:before, q:after {
                content: none;
            }
            table {
                border-collapse: collapse;
                border-spacing: 0;
            }
            
            /*General Styles*/
            html {
                height: 100%
            }
            body {
                background: #7b7a7a;
                font-family: Arial, Helvetica, sans-serif;
                color: #330000;
                min-height: 100%;
                padding-top: 0px;
            }
            p {
                font-size: 14px;
                color: #330000;
            }
            /*Main Table*/
            #main {
                background: #ffffff;
                width: 664px;
                height: 900px;
                margin: 0 auto;
                            
                
            }
            #tbody {
                width: 664px;
                height: 866px;
                
            }
            #r1 {
                width: 100%;
                height: 69px;
                margin-left: 17px;
            }
            #r2 {
                width: 664px;
                height: 63px;
            }
            #r3 {
                width: 664px;
                height: 80px;
            }
            #r4 {
                width: 664px;
                height: 90px;
            }
            #r5 {
                width: 664px;
                height: 45px;
            }
            #r6 {
                width: 664px;
                height: 174px;
            }
            #r7 {
                width: 664px;
                height: 72px;
            }
            #r8 {
                width: 664px;
                height: 153px;
            }
            #r9 {
                width: 664px;
                height: 128px;
            }
            /*Header*/
            #header_top {
                width: 100%;
                height: 69px;
                padding-left: 17px;
                padding-top: 17px;
                
            }
            #logo {
                width: 337px;
                height: 69px;
                background: url(img/logo.gif) no-repeat;
            }
            #logo_right {
                font-size: 22px;
                font-weight: 600;
                text-align: right;
                letter-spacing: 5px;
                width: 327px;
            }
            /*Tables*/
            .row2 {
               font-size: 16px;
               font-weight: 600;
               text-align: left;
               vertical-align: bottom;
               letter-spacing: 5px;
               width: 232px;
               padding-left: 15px;
            }
            .row3_1 {
               font-size: 12px;
               font-weight: 600;
               text-align: left;
               vertical-align: top;
               letter-spacing: 3px;
               width: 30px;
               padding-left: 15px;
               padding-top: 12px;
               padding-right: 0px;
               line-height: 19px;
               border-left: 2px solid black;
               
            }
            .row3_2 {
               font-size: 12px;
               font-weight: 600;
               text-align: left;
               vertical-align: top;
               letter-spacing: 3px;
               width: 282px;
               padding-left: 0px;
               padding-top: 12px;
               line-height: 19px;
            }
            .row4 {
               font-size: 10px;
               font-weight: 600;
               text-align: left;
               vertical-align: top;
               letter-spacing: 3px;
               width: 310px;
               padding-left: 15px;
               padding-top: 12px;
               line-height: 19px;
               border-top: 2px solid white;
            }
            .row4 p {
                font-size: 10px;
                font-weight: 800;
                letter-spacing: 2px;
            }
            .row5 {
               font-size: 10px;
               font-weight: 600;
               text-align: center;
               vertical-align: central;
               letter-spacing: 2px;
               width: 166px;
               padding-top: 5px;
               line-height: 15px;
               border-left: 2px solid black;
            }
            .row5 p {
                font-size: 10px;
                font-weight: 800;
                letter-spacing: 2px;
            }
            .row6 {
               font-size: 10px;
               font-weight: 600;
               text-align: center;
               vertical-align: central;
               letter-spacing: 1px;
               padding-top: 15px;
               padding-left: 3px;
               padding-right: 0px;
               line-height: 15px;
            }
            .row6_1 {
               font-size: 10px;
               font-weight: 600;
               text-align: center;
               vertical-align: central;
               letter-spacing: 2px;
               padding-top: 15px;
               padding-left: 3px;
               padding-right: 0px;
               line-height: 15px;
            }
            .row7 {
               font-size: 10px;
               font-weight: 600;
               text-align: left;
               vertical-align: central;
               letter-spacing: 2px;
               padding-top: 10px;
               padding-left: 0px;
               line-height: 15px;
               width: 224px;
            }
            .row7_1 {
               font-size: 10px;
               font-weight: 600;
               text-align: center;
               vertical-align: central;
               letter-spacing: 2px;
               padding-top: 10px;
               padding-right: 0px;
               line-height: 15px;
               width: 104px;
            }
            .row8 {
               font-size: 10px;
               font-weight: 600;
               text-align: left;
               vertical-align: bottom;
               letter-spacing: 2px;
               padding-top: 10px;
               padding-left: 8px;
               line-height: 15px;
               width: 332px;
            }
            .row8_1 {
               font-size: 12px;
               font-weight: 600;
               text-align: left;
               vertical-align: top;
               letter-spacing: 2px;
               padding-top: 10px;
               padding-left: 0px;
               line-height: 15px;
               width: 224px;
            }
            .row8_2 {
               font-size: 14px;
               font-weight: 600;
               text-align: center;
               vertical-align: top;
               letter-spacing: 2px;
               padding-top: 10px;
               padding-right: 0px;
               line-height: 15px;
               width: 104px;
            }
            .row9 {
               font-size: 17px;
               font-weight: 800;
               text-align: left;
               vertical-align: top;
               letter-spacing: 3px;
               padding-top: 15px;
               padding-left: 8px;
               line-height: 15px;
               width: 332px;
            }
            .row9_1 {
               font-size: 10px;
               font-weight: 600;
               text-align: left;
               vertical-align: bottom;
               letter-spacing: 2px;
               padding-bottom: 17px;
               padding-left: 8px;
               line-height: 15px;
               width: 332px;
            }
            .row9_2 {
               font-size: 10px;
               font-weight: 600;
               text-align: right;
               vertical-align: bottom;
               letter-spacing: 2px;
               padding-bottom: 17px;
               padding-right: 5px;
               line-height: 15px;
               width: 332px;
            }
            
            /*Borders*/
            .borders {
                border-top: 2px solid black;
                border-left: 2px solid black;
                border-right: 2px solid black;
            }
            .borders2 {
                border-left: 2px solid black;
                border-right: 2px solid black;
            }
            .borders3 {
                border-left: 2px solid black;
                border-right: 2px solid black;
                border-bottom: 2px solid black;
                border-top: 2px solid black;
            }
            .borders4 {
                border-bottom: 2px solid black;
                border-left: 2px solid black;
                border-right: 2px solid black;
            }
            
        </style>
    </head>
    <body>
        <table id="main">
                <tr id="r1">
                    <td>
                        <table>
                            <tr id="header_top">
                                <td id="logo">&nbsp;</td>
                                <td id="logo_right">SZÁMLA</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    
                    <td>
                        <table id="r2">
                            <tr>
                                <td class="row2">Szállító</td>
                                <td class="row2">Vevö</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table id="r3">
                            <tr class="borders">
                                <td class="row3_1">Név:</td>
                                <td class="row3_2">Web Apps Consult Kft</td>
                                <td class="row3_1">Név:</td>
                                <td class="row3_2">Tóth Márta</td>
                            </tr>
                            <tr class="borders2">
                                <td class="row3_1">Cím:</td>
                                <td class="row3_2">1053 Budapest<br> Kossuth Lajos utca 7-9.</td>
                                <td class="row3_1">Cím:</td>
                                <td class="row3_2">2356 Dunaújváros<br> Fáy András utca 34 6/3.</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table  id="r4">
                            <tr class="borders3">
                                <td width="0"></td>
                                <td class="row4" style="border-right: 2px solid black;">
                                    <p>Adószám: 3456478-3-45</p>
                                    <p>Bankszámla: 56456758-23685749</p>
                                    <p>Telefon: +36304536738</p>
                                </td>
                                <td class="row4">
                                    <p>Cégnév:</p>
                                    <p>Adószám:</p>
                                    <p>Telefon: +36204567912</p>
                                </td>
                                <td width="1" style="border-top: 2px solid white;"></td>
                                <td width="0"></td>
                            </tr>  
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table id="r5">
                            <tr class="borders4">
                                <td class="row5">
                                    <p>Fizetési mód</p>
                                    <p>Átutalás</p>
                                </td>
                                <td class="row5">
                                    <p>Számla kelte</p>
                                    <p>2014/10/15</p>
                                </td>
                                <td class="row5">
                                    <p>Teljesítés dátuma</p>
                                    <p>2014/10/15</p>
                                </td>
                                <td class="row5">
                                    <p>Számla sorszáma</p>
                                    <p>201014</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    
                    <td>
                        <table id="r6">
                            <tr class="borders2">
                                <td class="row6">Termék<br>kód</td>
                                <td class="row6">Termék leírása</td>
                                <td class="row6">Menny.</td>
                                <td class="row6">Menny.<br>egys.</td>
                                <td class="row6">Egységár<br>(ÁFA nélkül)<br>Forint</td>
                                <td class="row6">Érték<br>(ÁFA nélkül)<br>Forint</td>
                                <td class="row6">ÁFA<br>kulcsa</td>
                                <td class="row6">Áthárított ÁFA<br>összege<br>Forint</td>
                                <td class="row6">Érték<br>(ÁFA-val együtt)<br>Forint</td>
                            </tr>
                            <tr class="borders2">
                                <td style="font-size: 10px;
               font-weight: 600;
               text-align: center;
               vertical-align: central;
               letter-spacing: 2px;
               padding-top: 15px;
               padding-left: 3px;
               padding-right: 0px;
               line-height: 15px;">IC01</td>
                                <td style="font-size: 10px;
               font-weight: 600;
               text-align: center;
               vertical-align: central;
               letter-spacing: 2px;
               padding-top: 15px;
               padding-left: 3px;
               padding-right: 0px;
               line-height: 15px;">GOODIEBOX<br>Icipici</td>
                                <td style="font-size: 10px;
               font-weight: 600;
               text-align: center;
               vertical-align: central;
               letter-spacing: 2px;
               padding-top: 15px;
               padding-left: 3px;
               padding-right: 0px;
               line-height: 15px;">1</td>
                                <td style="font-size: 10px;
               font-weight: 600;
               text-align: center;
               vertical-align: central;
               letter-spacing: 2px;
               padding-top: 15px;
               padding-left: 3px;
               padding-right: 0px;
               line-height: 15px;">db</td>
                                <td style="font-size: 10px;
               font-weight: 600;
               text-align: center;
               vertical-align: central;
               letter-spacing: 2px;
               padding-top: 15px;
               padding-left: 3px;
               padding-right: 0px;
               line-height: 15px;">8.250,00</td>
                                <td style="font-size: 10px;
               font-weight: 600;
               text-align: center;
               vertical-align: central;
               letter-spacing: 2px;
               padding-top: 15px;
               padding-left: 3px;
               padding-right: 0px;
               line-height: 15px;">8.250,00</td>
                                <td style="font-size: 10px;
               font-weight: 600;
               text-align: center;
               vertical-align: central;
               letter-spacing: 2px;
               padding-top: 15px;
               padding-left: 3px;
               padding-right: 0px;
               line-height: 15px;">AAM</td>
                                <td style="font-size: 10px;
               font-weight: 600;
               text-align: center;
               vertical-align: central;
               letter-spacing: 2px;
               padding-top: 15px;
               padding-left: 3px;
               padding-right: 0px;
               line-height: 15px;">0,00</td>
                                <td style="font-size: 10px;
               font-weight: 600;
               text-align: center;
               vertical-align: central;
               letter-spacing: 2px;
               padding-top: 15px;
               padding-left: 3px;
               padding-right: 0px;
               line-height: 15px;">8.250,00</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table id="r7">
                            <tr class="borders2">
                                <td width="0" style="border-top: 2px solid black;"></td>
                                <td width="332">&nbsp;</td>
                                <td class="row7" style="border-top: 2px solid black;">Kedvezmény:</td>
                                <td class="row7_1" style="border-top: 2px solid black;">0,00</td>
                            </tr>
                            <tr class="borders2">
                                <td width="0" style="border-bottom: 2px solid black;"></td>
                                <td width="332">&nbsp;</td>
                                <td class="row7" style="border-bottom: 2px solid black;">Házhozszállítás</td>
                                <td class="row7_1" style="border-bottom: 2px solid black;">0,00</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    
                    <td>
                        <table id="r8">
                            <tr class="borders4">
                                <td class="row8">Az ÁFA kulcs: AAM (alanyi mentes)</td>
                                <td class="row8_1">Összesen:</td>
                                <td class="row8_2">8.250,00</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    
                    <td>
                        <table id="r9">
                            <tr>
                                <td class="row9">Köszönjük a vásárlást!</td>
                                <td class="row9"></td>
                            </tr>
                            <tr>
                                <td class="row9_1">A számla 2 példányban került kinyomtatásra.</td>
                                <td class="row9_2">1/2</td>
                            </tr>
                        </table>
                    </td>
                </tr>
          
        </table>
    </body>
</html>';

$pdf = new TCPDF();
        $pdf->AddPage();
        $pdf->setImageScale(1.53);
        $pdf->writeHTML($html, true, false, false, false, '');
        $pdf->Output('test.pdf', 'F');