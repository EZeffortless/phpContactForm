<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta name="description" content=""/>
    <title>Contact Form</title>
    </head>
    <body>
        <form action="confirmForm.php" method="POST">
            <label for="name">Name: </label>
            <input id="name" type="text" name="name">
            <br>
            <label for="email">Email: </label>
            <input id="email" name="email" type="text">
            <br>
            <select name="userquery" id="userquery">
                <option value="Query">Query</option>
                <option value="Feedback">Feedback</option>
                <option value="Complaint">Complaint</option>
                <option value="Other">Other</option>
            </select>
            <br>
            <textarea id="usertext" name="usertext" row="4" cols="50">Type here...</textarea>
            <br>
            <button id="nextpage">Next page</button>
        </form>
    </body>
</html>