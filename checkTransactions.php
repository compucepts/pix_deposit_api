<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.pix.exchange/api/auth/v1/checkTransactions',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "transactionId": "BDE58FA4-009D-00D0-5271-A5424828678C"
}',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNWJhYTg5OWRiYTIxZjQ2NjFhYTUwMjg2MGU0MjAzYzdlMjY2MGY2NjZmMWI0ZjA0NjVhZTE3ZWI1MDRmNWE3ZmY0ZTYxODg4MWFjN2UzOTIiLCJpYXQiOjE2Mzg5NjAwMTUsIm5iZiI6MTYzODk2MDAxNSwiZXhwIjoxNjcwNDk2MDE1LCJzdWIiOiIyODEiLCJzY29wZXMiOltdfQ.KTp_XLNmPeO3K0BosWvlGqI6_gT9tKIThPMMe_pkFip1T3icqd_Zm4Yxl_6BCHKAEMAmDyiVrNcGKdUXQAVxaMiWLG52kODkDXSyfaqpdlwUF_SczFCs7R_4GnvihMNw8hqmEtk_wpVA5IPRliZ7jWoK5e21uiiREtQkKT43HcBcZ-kuVPfJo4zqNutKRyLA414Q9yz-D3W8oemgkN8Un8JGGOuF38UeN4bu_vKnMdCcWGWdcPxxPKIO-cKIldbla-xv7-KicdTYze0fqVknMtOAlYseHhYM1iVYe2OV0VDDuKHPVNVWL4PSyWBsd0M91YZkqC2vyf-AOBRlNIzZGK9kht01XwRvm3PWprkDXe0fEJQ0CZ1_6mk3VjnCSRlpQYmv7eZtki38MkOK9WkSgyEWVmq7-3JhD2VkJv2xWyiG5AF2KTI6TkvqZZ2NdEBNUmqFNMXqIzsFYNaA3xAP0pb_x_Cv7_Skqvh2MUqHlmMYq0x-bKkGxbUZsqK1hJDUaMYxKr6HVBVBnS58NiariKheEpyYpVSlF9OcOOxrbINMZ5gwhKPbLpc9_lB5RM5r_2BjviI4hRYABMyK0zNsaqpNV89SBJzdroln3tXldu_KoZCCnlpzGDJgREp0d3pFQ5G3_9l_lzORz-igSoc7nox8Ba-PXDuyddhbQxd6oaU',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;


Response 1


{
    "transactions": [
        {
            "accountHolderId": "AFDEF7E2-741A-FB7A-A0E1-DCAC9FF82B77",
            "accountId": "A5440C11-00AD-A181-8CBA-854BEFD1C302",
            "transactionId": "F6DA712F-AA62-3A2E-2A19-101AFD2ABC80",
            "transactionDate": "2021-12-09T14:56:13.582-03:00",
            "transactionType": "PaymentInstantPayment",
            "transactionStatus": "CREATED",
            "totalAmount": 50
        }
    ]
}


Response 2

{
    "transactions": [
        {
            "accountHolderId": "AFDEF7E2-741A-FB7A-A0E1-DCAC9FF82B77",
            "accountId": "A5440C11-00AD-A181-8CBA-854BEFD1C302",
            "transactionId": "5ACE9E74-924A-FEB6-ED14-CA920D4A823D",
            "endToEndId": "E18236120202112091731s15759af775",
            "transactionDate": "2021-12-09T14:23:15.96-03:00",
            "transactionType": "PaymentInstantPayment",
            "transactionStatus": "APPROVED",
            "totalAmount": 5,
            "paidAmount": 5,
            "instantPayment": {
                "sender": {
                    "name": "ISAIAS RODRIGUES SANTANA 05418082736",
                    "taxIdentifier": {
                        "taxId": "30098174000108",
                        "country": "BRA",
                        "taxIdMasked": "30.***.***/****-08"
                    },
                    "account": {
                        "branch": "1",
                        "account": "365535896",
                        "accountType": "CC"
                    },
                    "psp": {
                        "id": "18236120",
                        "name": "NU PAGAMENTOS - IP",
                        "country": "BRA"
                    }
                },
                "recipient": {
                    "alias": "b7c5565b-3c33-4fee-83ea-0142baab3619",
                    "name": "Isaias Rodrigues Santana",
                    "taxIdentifier": {
                        "taxId": "30098174000108",
                        "country": "BRA",
                        "taxIdMasked": "30.***.***/****-08"
                    },
                    "account": {
                        "branch": "178",
                        "account": "328480",
                        "accountType": "CC"
                    },
                    "psp": {
                        "id": "23114447",
                        "name": "FLAGSHIP IP LTDA",
                        "country": "BRA"
                    }
                },
                "endToEndId": "E18236120202112091731s15759af775"
            }
        }
    ]
}