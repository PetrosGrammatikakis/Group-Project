<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="form.css">


    <script>
        function validateForm() {
            var E8NOS_ID = document.forms["myForm_e8nos"]["E8NOS_ID"].value;
            var GLWSSA_E8 = document.forms["myForm_e8nos"]["GLWSSA_E8"].value;
            var ONOMA_E8NOS = document.forms["myForm_e8nos"]["ONOMA_E8NOS"].value;
            var HMEROMINIA_IDRISIS = document.forms["myForm_e8nos"]["HMEROMINIA_IDRISIS"].value;


            if (E8NOS_ID.trim() === "") {
                alert("Συμπληρώστε το πεδίο ID.");
                return false; // Prevent form submission
            }
            if (GLWSSA_E8.trim() === "") {
                alert("Συμπληρώστε το πεδίο Γλώσσα.");
                return false; // Prevent form submission
            }
            if (ONOMA_E8NOS.trim() === "") {
                alert("Συμπληρώστε το πεδίο Όνομα.");
                return false; // Prevent form submission
            }
            if (HMEROMINIA_IDRISIS.trim() === "") {
                alert("Συμπληρώστε το πεδίο Ετος Ίδρυσης.");
                return false; // Prevent form submission
            }


            return true; // Allow form submission
        }
    </script>
</head>

<body>
    <div class="login-box">
        <form id="myForm_e8nos" name="insert_e8nos" action="insert_e8nos_exe.php" method="post" onsubmit="return validateForm()">
            <h1 style="color: #fff;">ΕΘΝΟΣ</h1>

            <div class="user-box">
                <label for="E8NOS_ID">Συμπλήρωσε ένα μοναδικό ID:</label><br><br>
                <input type="text" name="E8NOS_ID" maxlength="3" pattern="[A-Za-zΑ-Ωα-ωΆ-Ώά-ώ0-9]*" title="Έως 3 χαρακτήρες, μόνο γράμματα και αριθμούς">
            </div>
            <br>
            <div class="user-box">
                <label for="GLWSSA_E8">Η γλώσσα που μιλάει αυτό έθνος:</label><br>
                <input type="text" name="GLWSSA_E8" maxlength="30" pattern="[A-Za-zΑ-Ωα-ωΆ-Ώά-ώ]*" title="Έως 30 χαρακτήρες Μόνο γράμματα και όχι αριθμούς">
            </div>
            <br>
            <div class="user-box">
                <label for="ONOMA_E8NOS">Το όνομα του έθνους:</label><br>
                <input type="text" name="ONOMA_E8NOS" maxlength="30" pattern="[A-Za-zΑ-Ωα-ωΆ-Ώά-ώ]*" title="Έως 30 χαρακτήρες Μόνο γράμματα και όχι αριθμούς">
            </div>
            <br>
            <div class="user-box">
                <label for="HMEROMINIA_IDRISIS">Ετος Ίδρυσης:</label><br>
                <input type="text" name="HMEROMINIA_IDRISIS" maxlength="5" pattern="[0-9-]*" title="Μόνο αριθμούς και το (-), όχι γράμματα">
            </div>
            <br>
            <div class="user-box">
                <label for="HMEROMINIA_KATASTROFIS">Ετος Καταστροφής:</label><br>
                <input type="text" name="HMEROMINIA_KATASTROFIS" maxlength="5" pattern="[0-9-]*" title="Μόνο αριθμούς και το (-), όχι γράμματα">
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
