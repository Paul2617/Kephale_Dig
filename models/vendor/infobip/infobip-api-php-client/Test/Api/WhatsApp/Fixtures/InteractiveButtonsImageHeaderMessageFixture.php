<?php

declare(strict_types=1);

$requestVars = [
    'from' => '447860099299',
    'to' => '385958000000',
    'content' => [
        'body' => [
            'text' => 'body text',
        ],
        'action' => [
            'buttons' => [
                [
                    'type' => 'REPLY',
                    'id' => '1',
                    'title' => 'Yes',
                ],
                [
                    'type' => 'REPLY',
                    'id' => '2',
                    'title' => 'No',
                ],
            ]
        ],
        'header' => [
            'type' => 'IMAGE',
            'mediaUrl' => 'https://upload.wikimedia.org/wikipedia/commons/b/bd/Test.svg',
        ],
        'footer' => [
            'text' => 'footer text',
        ]
    ],
    'callbackData' => 'some callback data',
    'notifyUrl' => 'https://www.example.com/whatsapp',
];

$responseVars = [
    'messageId'     => '2250be2d4219-3af1-78856-aabe-1362af1edfd2',
    'statusName'    => 'PENDING_ENROUTE',
    'messageCount'  => 1
];

$givenResponse = <<<JSON
        {
            "to": "{$requestVars['to']}",
            "messageCount": {$responseVars['messageCount']},
            "messageId": "{$responseVars['messageId']}",
            "status": {
                "groupId": 1,
                "groupName": "PENDING",
                "id": 7,
                "name": "{$responseVars['statusName']}"
            }
        }
        JSON;

$expectedRequest = \json_encode($requestVars);

return [$requestVars, $responseVars, $givenResponse, $expectedRequest];
