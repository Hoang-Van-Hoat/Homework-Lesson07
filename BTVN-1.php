<?php
$userListInput = [
    [
        "username" => "Karl",
        "language" => "en"
    ], [
        "username" => "Tam",
        "language" => "vi"
    ], [
        "username" => "Kazuki",
        "language" => "ja"
    ]
];

// Kiểm tra tên người dùng truyền vào với tên người dùng trong danh sách
// Nếu khớp => trả về thông báo chào mừng theo ngôn ngữ của người dùng đó
// Không khớp => trả về message tùy ý 

// echo getWelcomeMessage("Tam", $userListInput) => "XIn chao Tam"
// echo getWelcomeMes

function getWelcomeMessage ($name, $userListInput) {
    $message = '';
    foreach ($userListInput as $user) {
        if ($name === $user['username']) {
            if ($user['language'] == "en") {
                $message = 'Hello ' . $name;
            } elseif ($user['language'] == "vi") {
                $message = 'Xin chào ' . $name;
            } elseif ($user['language'] == "ja") {
                $message = 'Konichiwa ' . $name;
            } else {
                $message = 'Not found';
            }
        }
    }
    return $message;
}
echo getWelcomeMessage('Karl' , $userListInput);
?>