

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baseileia</title>


    <link rel="stylesheet" href="form.css">





    <script>
        

        function validateForm() {
            var BASILIA_ID = document.forms["myForm_baseilia"]["BASILIA_ID"].value;
            var PROTEYOUSA = document.forms["myForm_baseilia"]["PROTEYOUSA"].value;
            var GLWSSA_BAS = document.forms["myForm_baseilia"]["GLWSSA_BAS"].value;
            var HMEROMINIA_DIMIOURGIAS = document.forms["myForm_baseilia"]["HMEROMINIA_DIMIOURGIAS"].value;


            if (BASILIA_ID.trim() === "") {
                alert("Συμπληρώστε το πεδίο ID.");
                return false; // Prevent form submission
            }
            if (PROTEYOUSA.trim() === "") {
                alert("Συμπληρώστε το πεδίο Πρωτεύουσα.");
                return false; // Prevent form submission
            }
            if (GLWSSA_BAS.trim() === "") {
                alert("Συμπληρώστε το πεδίο Γλώσσα.");
                return false; // Prevent form submission
            }
            if (HMEROMINIA_DIMIOURGIAS.trim() === "") {
                alert("Συμπληρώστε το πεδίο Ετος Δημιουργία");
                return false; // Prevent form submission
            }


            return true; // Allow form submission
        }
    </script>
</head>

<body>
    <div class="login-box">
        <form id="myForm_baseilia" name="insert_baseilia" action="insert_baseilia_exe.php" method="post" onsubmit="return validateForm()">
            <h1 style="color: #fff;">ΒΑΣΙΛΕΙΟ</h1>

            <div class="user-box">
                <label for="BASILIA_ID">Συμπλήρωσε ένα μοναδικό ID:</label><br>
                <input type="text" name="BASILIA_ID" maxlength="3" pattern="[A-Za-zΑ-Ωα-ωΆ-Ώά-ώ0-9]*" title="Έως 3 χαρακτήρες, μόνο γράμματα και αριθμούς">
            </div>
            <br>
            <div class="user-box">
                <label for="PROTEYOUSA">Η Πρωτεύουσα :</label><br>
                <input type="text" name="PROTEYOUSA" maxlength="30" pattern="[A-Za-zΑ-Ωα-ωΆ-Ώά-ώ]*" title="Έως 30 χαρακτήρες Μόνο γράμματα και όχι αριθμούς">
            </div>
            <br>
            <div class="user-box">
                <label for="GLWSSA_BAS">Η γλώσσα που μιλάει το βασίλειο :</label><br>
                <input type="text" name="GLWSSA_BAS" maxlength="30" pattern="[A-Za-zΑ-Ωα-ωΆ-Ώά-ώ]*" title="Έως 30 χαρακτήρες Μόνο γράμματα και όχι αριθμούς">
            </div>
            <br>
            <div class="user-box">
                <label for="HMEROMINIA_DIMIOURGIAS">Ετος Δημιουργία :</label><br>
                <input type="text" name="HMEROMINIA_DIMIOURGIAS" maxlength="5" pattern="[0-9-]*" title="Μόνο αριθμούς και το (-) ,όχι γράμματα">
            </div>
            <br>
            <div class="user-box">
                <label for="HMEROMINIA_KATASTROFHS">Ετος Καταστροφής:</label><br>
                <input type="text" name="HMEROMINIA_KATASTROFHS" pattern="[0-9-]*" title="Μόνο αριθμούς και το (-) , όχι γράμματα ">
            </div>
            <br>

            <div>
                <a href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>

                    <input id="sub" type="submit" name="insert" value=" Εισαγωγή">
                    <input id="sub" type="reset" value="Καθαρισμός">
                </a>
            </div>
        </form>
    </div>




</body>

</html>
