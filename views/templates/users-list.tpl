<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <ul>
        {foreach $users as $user}
            <li>{$user['username']} {$user['password']}</li>
        {/foreach}
    </ul>
</body>
</html>