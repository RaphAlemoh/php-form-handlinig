<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>message-page</title>
    <link rel="stylesheet" href="task.css">
</head>

<body>
    <form action="form-validation.php" method="post">
        <div class="container" img class="valid">
            <H1>fill the form</H1>

            <input type="text" id="name" placeholder="name" required name="name">

            <input type="text" id="email" placeholder="email" required name="email">

            <input type="password" id="password" placeholder="password" required name="password">

            <textarea name="message" id="message" rows="4" placeholder="message"></textarea>

            <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>