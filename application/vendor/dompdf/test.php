
<?php
require_once "dompdf_config.inc.php";

$html = '
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
            body {
                font-family: Arial, Helvetica, sans-serif;
                color: #330000;
                min-height: 100%;
                padding-top: 25px;
                padding-bottom: 25px;
            }

        </style>
    </head>
    <body>
        <table style="border:0 0 2px solid 0;border-top:0px;border-left:0px;border-right:0px;width: 670px;padding: 0px;margin: 0px" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td style="width:50%;padding: 5px;border: 0px;border-left: 0px;" colspan="2"><img src="logo.gif"></td>
                <td style="padding: 5px;width:50%;text-align: right;vertical-align: top;border: 0px;border-right: 0px; font-size: 22px; font-weight: 600;letter-spacing: 5px;" colspan="2">SZÁMLA</td>
            </tr>
            <tr>
                <td style="height: 40px" colspan="4"></td>
            </tr>
            <tr>
                <td style="width:50%;border-left: 0px;border-right: 0px; font-size: 12px;font-size: 16px;font-weight: 600;text-align: left;vertical-align: bottom;letter-spacing: 5px;padding-left: 15px;" colspan="2">Szállító</td><td style="width:50%;font-size: 16px;font-weight: 600;text-align: left;vertical-align: bottom;letter-spacing: 5px;padding-left: 15px;" colspan="2">Vevö</td>
            </tr>
            <tr style="padding: 0px">
                <td style="padding: 10px;margin: 0px;width:50%;height: 80px;border-left: 2px solid;border-top: 2px solid;border-right: 2px solid;font-size: 12px;font-weight: 600;letter-spacing: 3px;" colspan="2">
                    Név:	<strong>Web Apps Consult Kft</strong> <br/>
                    Cím:	<strong>1053 Budapest</strong><br/>
                        <strong>Kossuth Lajos utca 7-9.</strong><br/>
                    Adószám: <strong>3456478-3-45</strong><br/>
                    Bankszámla: <strong>56456758-23685749</strong><br/>
                    Telefon: <strong>+36304536738</strong>
                </td>
                <td style="padding: 10px;margin: 0px;width:50%;height: 80px;border-top: 2px solid;border-right: 2px solid;font-size: 12px;font-weight: 600;letter-spacing: 3px;" colspan="2">
                    Név:	<strong>Web Apps Consult Kft</strong> <br/>
                    Cím:	<strong>1053 Budapest</strong><br/>
                        <strong>Kossuth Lajos utca 7-9.</strong><br/>
                    Cégnév:<br/>
                    Adószám:<br/>
                    Telefon: <strong>+36204567912</strong>
                </td>
            </tr>
            <tr style="padding: 0px">
                <td style="border-left: 2px solid;border-bottom: 2px solid;padding: 0px;margin: 0px;width:25%;height: 30px;border-top: 2px solid;border-right: 2px solid;font-size: 10px;font-weight: 800;letter-spacing:2px;text-align: center">Fizetési mód <br/>Átutalás</td>
                <td style="border-bottom: 2px solid;padding: 0px;margin: 0px;width:25%;height: 30px;border-top: 2px solid;border-right: 2px solid;font-size: 10px;font-weight: 800;line-height: 15px;text-align: center;letter-spacing:2px">Számla kelte<br/> 2014/10/15</td>
                <td style="border-bottom: 2px solid;padding: 0px;margin: 0px;width:25%;height: 30px;border-top: 2px solid;border-right: 2px solid;font-size: 10px;font-weight: 800;line-height: 15px;text-align: center;letter-spacing:2px">Teljesítés dátuma<br/> 2014/10/15</td>
                <td style="border-right: 2px solid;border-bottom: 2px solid;padding: 0px;margin: 0px;width:25%;height: 30px;border-top: 2px solid;font-size: 10px;font-weight: 800;line-height: 15px;text-align: center;letter-spacing:2px">Számla sorszáma<br/> 201014</td>
            </tr>
            <tr style="padding: 0px">
                <td colspan="4">
                    <table style="width: 100%;padding: 0px;margin: 0px" cellpadding="0" cellspacing="0">
                        <tr>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 1px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px; border-left: 2px solid;">Termék kód</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 1px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">Termék leírása</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 1px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">Menny.</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 1px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">Menny. egys.</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 1px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">Egységár <br/>(ÁFA nélkül)<br/> Forint</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 1px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">Érték <br/>(ÁFA nélkül)<br/> Forint</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 1px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">ÁFA kulcsa</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 1px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">Áthárított <br/>ÁFA összege Forint</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 1px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px; border-right: 2px solid;">Érték <br/> (ÁFA-val együtt) <br/> Forint</td>
                        </tr>
                        <tr>
                            <td colspan="9" style="height: 15px; border-left: 2px solid; border-right: 2px solid;"></td>
                        </tr>
                        <tr>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px; border-left: 2px solid;">IC01</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">GOODIEBOX Icipi</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">1</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">db</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">8,250.0</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">8,250.0</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">AAM</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px;">0,00</td>
                            <td style="font-size: 10px;font-weight: 600;text-align: center;vertical-align: central;letter-spacing: 2px;padding-top: 15px;padding-left: 3px;padding-right: 0px;line-height: 15px; border-right: 2px solid;">8,250.0</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr style="padding: 0px">
                <td style="padding: 0px;margin: 0px;width:50%;height: 45px;border-left: 2px solid; border-right: 2px solid;" colspan="4"></td>
            </tr>
            <tr style="padding: 0px">
                <td style="border-left: 2px solid;padding: 0px;margin: 0px;width:25%;height: 30px;"></td>
                <td style="margin: 0px;width:25%;height: 30px;"></td>
                <td style="border-top: 2px solid;padding: 0px;padding-top: 5px;padding-bottom: 5px;margin: 0px;width:25%;height: 30px;font-size: 10px;">Kedvezmény:<br/><br/>Házhozszállítás:</td>
                <td style="border-top: 2px solid;padding: 0px;padding-top: 5px;padding-bottom: 5px;margin: 0px;width:13%;height: 30px;font-size: 10px;border-right: 2px solid;">0,00<br/><br/>0,00</td>
            </tr>
            <tr style="padding: 0px">
                <td style="border-left: 2px solid;padding: 0px;margin: 0px;width:25%;height: 30px;"></td>
                <td style="margin: 0px;width:25%;height: 30px;"></td>
                <td style="border-top: 2px solid;padding: 0px;margin: 0px;width:25%;height: 30px;font-size: 14px;">Összesen:</td>
                <td style="border-top: 2px solid;padding: 0px;padding-top: 5px;margin: 0px;width:13%;height: 30px;font-size: 14px;border-right: 2px solid;">8.250,00</td>
            </tr>
            <tr style="padding: 0px">
                <td style="vertical-align: bottom;padding: 0px;margin: 0px;width:50%;height: 65px;border-left: 2px solid;font-size: 10px;border-bottom: 2px solid;border-right: 2px solid;" colspan="4">Az ÁFA kulcs: AAM (alanyi mentes)</td>
            </tr>
            <tr style="padding: 0px">
                <td style="vertical-align: top;padding: 0px;padding-top:5px;padding-left:5px; margin: 0px;width:50%;height: 45px;font-weight: 800" colspan="4">Köszönjük a vásárlást!</td>
            </tr>
            <tr style="padding: 0px">
                <td style="vertical-align: top;padding: 0px;padding-top:5px;padding-left:5px; margin: 0px;width:50%;height: 105px;" colspan="4"></td>
            </tr>
            <tr style="padding: 0px">
                <td style="vertical-align: top;padding: 0px;padding-top:5px;padding-left:5px; margin: 0px;width:50%;font-size: 10px;font-weight: 600" colspan="2">A számla 2 példányban került kinyomtatásra.</td>
                <td style="vertical-align: top;padding: 0px;padding-top:5px;padding-left:5px; margin: 0px;width:50%;text-align: right;font-size: 10px;;font-weight: 600" colspan="2">1/2</td>
            </tr>
        </table>
    </body>
</html>

';

$pdf = new DOMPDF();
$pdf->load_html($html);

$pdf->render();
$pdf->stream("hello.pdf");
