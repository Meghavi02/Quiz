<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>History Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
    <style>
        .container{
         border: 10px solid black;
         background-color: #51b0de;
         background-size: 100%; 
         width: 500px;
         height: 200px;
         position:absolute;
         top:30%;
         left:30%;         
         display: flex;
         align-items: center;
         justify-content: center;
        }

    </style>
</head>

<body>

	<div id="page-wrap">		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "B") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }
        ?>
	
         <section> 
            <div class="container">
                <h1>
                    <?php
                            echo "<div style=\"text-align:center\">";
                            echo "YOUR SCORE:";
                            echo "<div id='results'>$totalCorrect / 5 correct</div>"; 
                    ?>
                </h1>
            </div>
        </section>

	</div>
</body>

</html>