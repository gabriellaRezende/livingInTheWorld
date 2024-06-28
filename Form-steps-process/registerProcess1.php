<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Cidadania Matos </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./CSS/styles.css">

</head>

<style>


</style>


<body>
    <div class="d-flex mb-5  ms-5 mt-5 gap-5">
        <img src="./images/Logo_name Azul.png" class="img-fluid" />
        <p>Teste teset tetste </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <form id="regForm" action="">

                    <!-- One "tab" for each step in the form: -->
                    <div class="row g-2">
                        <div class="col-sm">
                            <label for="" class="form-label">Nome*</label>
                            <input type="text" class="form-control" placeholder="" aria-label="City">
                        </div>
                        <div class="col-sm">
                            <label for="" class="form-label">Gênero*</label>
                            <select class="form-select " aria-label="Default select example" oninput=>
                                <option selected>--</option>
                                <option value="1">Masculino</option>
                                <option value="2">Feminino</option>
                                <option value="3">Prefiro não</option>
                            </select>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-sm">
                            <label for="" class="form-label">Data de Nascimento*</label>
                            <input type="date" class="form-control" placeholder="" aria-label="City">
                        </div>
                        <div class="col-sm">
                            <label for="" class="form-label">Local de Nascimento*</label>
                            <input type="text" class="form-control" placeholder="" aria-label="State">
                        </div>
                        <div class="col-sm">
                            <label for="" class="form-label">País de Nascimento*</label>
                            <input type="text" class="form-control" placeholder="" aria-label="Zip">
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-sm">
                            <label for="" class="form-label">Nome da Mãe*</label>
                            <input type="text" class="form-control" placeholder="" aria-label="State">
                        </div>
                        <div class="col-sm">
                            <label for="" class="form-label">Nome do Pai*</label>
                            <input type="text" class="form-control" placeholder="" aria-label="Zip">
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-sm">
                            <label for="" class="form-label">Tipo de Documento Nacional*</label>
                            <select class="form-select " aria-label="Default select example" oninput=>
                                <option selected>--</option>
                                <option value="1">CPF</option>
                                <option value="2">Identidade</option>
                                <option value="3">Habilitação</option>
                            </select>
                        </div>

                        <div class="row g-3 mt-0">
                            <div class="col-sm mt-0">
                                <label for="" class="form-label">N° do Passaporte*</label>
                                <input type="text" class="form-control" placeholder="" aria-label="City">
                            </div>
                            <div class="col-sm mt-0">
                                <label for="" class="form-label">Data de Emissão*</label>
                                <input type="date" class="form-control" placeholder="" aria-label="State">
                            </div>
                            <div class="col-sm mt-0">
                                <label for="" class="form-label">Válido até*</label>
                                <input type="date" class="form-control" placeholder="" aria-label="Zip">
                            </div>
                        </div>

                        <div class="col-sm mt-0">
                            <label for="" class="form-label">Atividade Profissional*</label>
                            <input type="date" class="form-control" placeholder="" aria-label="Zip">
                        </div>



                </form>

            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <button type="button" class="btn btn-primary" disabled>Primary button</button>
                <button type="button" class="btn btn-primary">Primary</button>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form ...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            // ... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            // ... and run a function that displays the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form... :
            if (currentTab >= x.length) {
                //...the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false:
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class to the current step:
            x[n].className += " active";
        }
    </script>


</body>

</html>