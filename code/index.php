<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ΙΣΤΟΡΙΚΗ ΕΓΚΥΚΛΟΠΑΙΔΕΙΑ</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('book1.jpg') center/cover no-repeat; /* Replace 'bookshelf.jpg' with your image */
            margin: 0;
            padding: 0;
            text-align: center;
            color: #fff; /* Set text color to white for better visibility on the background */
            zoom: 150%;
        }

        h1 {
            margin: 20px 0;
        }

        form {
            max-width: 300px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background for better readability */
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        button {
            margin: 10px 0;
            padding: 10px;
            width: 100%;
            background-color:darkblue;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: lightblue;
        }
    </style>
</head>

<body>
    <h1>ΙΣΤΟΡΙΚΗ ΕΓΚΥΚΛΟΠΑΙΔΕΙΑ</h1>
    <form>
        <button type="button" onclick="location.href='insert_istorika_pr.php';">Εισαγωγη Ιστορικου προσωπου</button>
        <button type="button" onclick="location.href='insert_e8nos.php';">Εισαγωγη Έθνος</button>
        <button type="button" onclick="location.href='insert_baseilia.php';">Εισαγωγη Βασίλεια</button>
        <button type="button" onclick="location.href='delete.php';">Διαγραφή</button>
        <button type="button" onclick="location.href='select.php';">Εμφάνιση</button>
    </form>
</body>

</html>
