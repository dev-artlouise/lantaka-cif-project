<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" id="">

    <title></title>
</head>
<?php


include_once 'dbconnect.php'; // include l'instance de la class crud.
if(isset($_POST['save'])){ // test sur le bouton. 
	$fname = $_POST['first_name']; // affectation des valeur evoier par la method post.
	$lname = $_POST['last_name'];
	$mname=$_POST['middle_name'];
	if($crud->create($fname,$lname,$mname)){ // test sur l'execution du requete, 
        header("Location: index.php?inserted");    // si tout passe bien returne true, et on recharge la page
    }else{                                            // mais avec "inserted" comme paramétre. 
		header("Location: index.php?failure");     // sinon on recharge la page avec "failure" comme paramétre.
	}}
?>

<?php
if(isset($_GET['inserted'])){ // alors si on a on paramétre "inserted", on mets un message:
	?>
    <div class="container">
	   <div class="alert alert-info">
        Insertion avec success <!-- le message a afficher avec un style de bootstrap de success--> 
	   </div>
	</div>
    <?php
}else if(isset($_GET['failure'])){ // et sinon (on a on paramétre "failure"), on mets u messaga:
	?>
    <div class="container">
	   <div class="alert alert-warning">
        Erreur d'insertion <!--le message-->
	   </div>
	</div>
    <?php
    }
?>

<body>

    <header>
        <div class="header">
            <nav class="navbar navbar-dark bg-dark">
                <a class="navbar-brand" href="#">
                    <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
                    Case Investigation form
                    Coronavirus Disease (COVID 19)
                </a>
            </nav>
        </div>
    </header>

    <div class="container mt-4">
        <form class ="xs-12 sm-12" action="" method="POST">
            <div class="form patient-info-form">
            
                <div class="text-highlight">
                    <div class="patient-info">
                        <div class="row">

                            <div class="col">
                                <div class="form-group">
                                    <label for="last_name"></label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name *">
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="first_name"></label>
                                    <input type="text" class="form-control" id="first_name"
                                        placeholder="First Name (and suffix) *" name="first_name">
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="middle_name"></label>
                                    <input type="text" class="form-control" id="milddle_name" placeholder="Middle Name" name="middle_name">
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <!-- <div class="col">
                                <div class="form-group">
                                    <label for="dob"></label>
                                    <input type="date" class="form-control" id="dob" placeholder="Date of Birth *" name="dob">
                                </div>
                            </div> -->

                            <!-- <div class="col">
                                <div class="form-group">
                                    <label for="age"></label>
                                    <input type="text" class="form-control" id="age" placeholder="Age" name="age">
                                </div>
                            </div> -->

                            <!-- <div class="col">
                                <label for="sex">Sex*</label>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="RadioOptions" id="male" 
                                        value="option1">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                            </div> -->

                            <!-- <div class="col">
                                <div class="form-row align-items-center">
                                    <div class="col-auto my-1">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Civil Status</label>
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option selected>Select Civil Status</option>
                                            <option value="1">Single</option>
                                            <option value="2">Married</option>
                                            <option value="3">Widowed</option>
                                            <option value="4">Annuled</option>
                                            <option value="5">Separated</option>
                                            <option value="6">N/A</option>
                                        </select>
                                    </div>
                                </div>
                            </div> -->


                        </div>


                    </div>

                </div>

            </div>

            <button type="submit" class="btn btn-success" name="save">Submit</button>
        </form>
    </div>    
    
        
    
    



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>

</html>
