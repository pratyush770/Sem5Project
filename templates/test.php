<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
</head>
<body>
    <h1 id="displayPrice"></h1>

    <script>
        let sprice = localStorage.getItem("sprice");
        document.getElementById("displayPrice").textContent = sprice;
    </script>
</body>
</html>