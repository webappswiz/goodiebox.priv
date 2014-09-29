<?php


$data_string = '{"REQUEST": {"flDebug": "true","cdLang": "HU","txEmail": "info@goodiebox.hu","txPassword": "D!ngd0ng","ORDER": {"dtPickup": "2014.09.24.",
      "flCOD": "true",
	  "nmRecipientCOD": "Gipsz Jakab",
	  "nmBankCOD": "GiveMeAllYourMoney Bank",
	  "txBankAccountNumberCOD": "12345678-12345678-12345678",
      "flNothingProhibited": "true",
      "flAgreedToTermsAndConditions": "true",

	  "DESTINATIONADDRESS": {
		"nmCompanyOrPerson": "Gipsz Jakab",
		"cdCountry": "HU",
		"txAddress": "Fő utca",
		"txAddressNumber": "123",
		"txPost": "1234",
		"txCity": "Budapest",
		"nmContact": "Gipsz Jakab",
		"txPhoneContact": "0123456789",
		"txEmailContact": "gipszjakab@gmail.com",
		"txInstruction": "Ha nem vagyok otthon, hagyja a szomszédnál!"
	  },
      "PACKAGES":
	  {
        "PACKAGE":
		[
		{
          "ctPackage": "2",
		  "amContent": "5000",
          "txContent": "Content of package1. The amContent is only mandatory if COD is set to TRUE",
		  "idOrder": "1"
        },
		{
          "ctPackage": "1",
          "amContent": "50000",
          "txContent": "Content of Package2. idOrder is not mandatory, but could be useful to send, as it will get printed on the waybill, and it’s easier to identify when you are printing waybill and taping them on the package. ",
		  "idOrder": "2"
        }
      ]}
    }
  }
}';

$ch = curl_init('http://furgefutar.hu/webservices/webshop2.ashx');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);
$result = curl_exec($ch);
print_r($result);

?>