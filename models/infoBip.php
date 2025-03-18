<?php
use Infobip\Configuration;
use Infobip\Api\SmsApi;
use Infobip\Model\SmsDestination;
use Infobip\Model\SmsTextualMessage;
use Infobip\Model\SmsAdvancedTextualRequest;

require __DIR__ . "/vendor/autoload.php";

$number = '22394141804';
$message = 'Bonjour Paul';

if (isset($message)) {

    $base_url = "https://your-base-url.api.infobip.com";
    $api_key = "ddd54cce373df2ecc82d651be18655ae-a77aa3ac-caef-4148-a33d-d1926c8b5500";

    $configuration = new Configuration(host: $base_url, apiKey: $api_key);

    $api = new SmsApi(config: $configuration);

    $destination = new SmsDestination(to: $number);

    $message = new SmsTextualMessage(
        destinations: [$destination],
        text: $message,
        from: "ServiceSMS"
    );

    $request = new SmsAdvancedTextualRequest(messages: [$message]);

    $response = $api->sendSmsMessage($request);

} else {   // Twilio
}

echo "Message sent.";
?>