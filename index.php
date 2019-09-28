<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="getDistance.php" method="POST">
        <input type="text" name="string1">
        <input type="text" name="string2">
        <select name="cal">
            <option value="hamming">hamming</option>
            <option value="levenshtein">levenshtein</option>
        </select>
        <button type="submit">get distance</button>
    </form>
    <textarea name="result" cols="30" rows="10"></textarea>
</body>
</html>