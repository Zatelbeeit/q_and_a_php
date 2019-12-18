<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
    $db = new PDO('mysql:host=localhost;dbname=php', 'root', 'lou');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="style.css">

    <title>php</title>
</head>

<body>
    <div class ="container">
        <h1 class="text-center bg-dark py-5 text-white">An Introduction to PHP</h1>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="variables-tab" data-toggle="tab" href="#variables" role="tab"
                    aria-controls="variables" aria-selected="true">Variables</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="arrays-tab" data-toggle="tab" href="#arrays" role="tab" aria-controls="arrays"
                    aria-selected="false">Arrays</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="loops-tab" data-toggle="tab" href="#loops" role="tab" aria-controls="loops"
                    aria-selected="false">Loops</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="conditions-tab" data-toggle="tab" href="#conditions" role="tab"
                    aria-controls="conditions" aria-selected="false">Conditions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="loops-tab" data-toggle="tab" href="#date" role="tab" aria-controls="date"
                    aria-selected="false">Date</a>
            </li>
        </ul>
        <!-- tab for variables -->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="variables" role="tabpanel" aria-labelledby="variables-tab">
            <div class="accordion" id="accordion1">
                <?php $req = $db->query('SELECT * FROM exo WHERE exo_type = "Variables"');
                    foreach ($req as $row){
                ?>
                <div class="card">
                    <div class="card-header" id="heading<?php echo $row['id'];?>">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapse<?php echo $row['id'];?>" aria-expanded="true" aria-controls="collapse<?php echo $row['id'];?>">
                                    Excercise <?php echo $row['exo-number'];?>
                                </button>
                            </h2>
                        </div>
                        <div id="collapse<?php echo $row['id'];?>" class="collapse" aria-labelledby="heading<?php echo $row['id'];?>"
                            data-parent="#accordion1">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 px-5 consigne"> <?php echo $row['consigne'];?>
                                        
                                        <div class="text-right">

                                            <button class="btn btn-secondary rounded-0 mt-3" type="button" data-toggle="collapse"
                                                data-target="#multiCollapseExample2" aria-expanded="false"
                                                aria-controls="multiCollapseExample2">La réponse</button>
                                        </div>
                                    </div>
                                    <!-- second text -->
                                    <div class="col-6 px-5 reponse">
                                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                                            <div class="card-body">
                                                <p class="code"><?php echo $row['code'];?></p>
                                                <p class="description"><?php echo $row['description'];?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                </div>
                </div>
               
                        
                        <!-- tab for arrays -->
        <div class="tab-pane fade" id="arrays" role="tabpanel" aria-labelledby="arrays-tab">
            <div class="accordion" id="accordion2">
                <?php $req2 = $db->query('SELECT * FROM exo WHERE exo_type = "Arrays"');
                    foreach ($req2 as $row2){
                ?>
                <div class="card">
                    <div class="card-header" id="heading2<?php echo $row2['id'];?>">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                data-target="#collapse2<?php echo $row2['id'];?>" aria-expanded="false" aria-controls="collapse2<?php echo $row2['id'];?>">
                                Excercise <?php echo $row2['exo-number'];?>
                            </button>
                        </h2>
                    </div>
                            
                <div id="collapse2<?php echo $row2['id'];?>" class="collapse" aria-labelledby="heading2<?php echo $row2['id'];?>"
                    data-parent="#accordion2">
                        <div class="card-body">
                            <div class="row">
                                    
                                    
                                <div class="col-6 px-5 consigne"> <?php echo $row2['consigne'];?>
                                    <div class="text-right">

                                        <button class="btn btn-primary" type="button" data-toggle="collapse"
                                            data-target="#multiCollapseExample2" aria-expanded="false"
                                            aria-controls="multiCollapseExample2">La réponse</button>
                                    </div>
                                </div>
                                        <! -- second text -->
                                <div class="col-6 px-5">
                                    <div class="collapse multi-collapse" id="multiCollapseExample2">
                                        <div class="card-body">
                                            <p class="code"><?php echo $row2['code'];?></p>
                                            <p class="description"><?php echo $row2['description'];?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            <?php
                    }
                    ?>
                    </div>
                            
                </div>
                        
                    
                    <div class="tab-pane fade" id="loops" role="tabpanel" aria-labelledby="loops-tab">
                        <div class="accordion" id="accordion3">
                            <?php $req3 = $db->query('SELECT * FROM exo WHERE exo_type = "Loops"');
                            foreach ($req as $row3){
                                ?>
                        
                        <div class="card">
                            <div class="card-header" id="heading3<?php echo $row3['id'];?>">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapse<?php echo $row3['id'];?>" aria-expanded="false" aria-controls="collapse3<?php echo $row3['id'];?>">
                                        Excercise <?php echo $row3['exo-number'];?>
                                    </button>
                                </h2>
                            </div>
                            
                            <div id="collapse3<?php echo $row3['id'];?>" class="collapse" aria-labelledby="heading3<?php echo $row3['id'];?>"
                            data-parent="#accordion3">
                            <div class="card-body">
                                <div class="row">
                                    
                                    
                                    <div class="col-6 px-5 consigne"> <?php echo $row3['consigne'];?>
                                    <div class="text-right">
                                        
                                        <button class="btn btn-primary" type="button" data-toggle="collapse"
                                        data-target="#multiCollapseExample2" aria-expanded="false"
                                        aria-controls="multiCollapseExample2">La réponse</button>
                                    </div>
                                </div>
                                <!-- second text -->
                                <div class="col-6 px-5">
                                    <div class="collapse multi-collapse" id="multiCollapseExample2">
                                        <div class="card-body">
                                            <p class="code"><?php echo $row3['code'];?></p>
                                            <p class="description"><?php echo $row3['description'];?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <?php
                    }
                    ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="tab-pane fade" id="conditions" role="tabpanel" aria-labelledby="conditions-tab">
                <div class="accordion" id="accordion4">
                    <?php $req4 = $db->query('SELECT * FROM exo WHERE exo_type = "Conditions"');
                            foreach ($req4 as $row4){
                                ?>
                    <div class="card">
                        <div class="card-header" id="heading4<?php echo $row4['id'];?>">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                data-target="#collapse4<?php echo $row4['id'];?>" aria-expanded="false" aria-controls="collapse<?php echo $row4['id'];?>">
                                Excercise <?php echo $row4['exo-number'];?>
                            </button>
                        </h2>
                    </div>
                    
                        <div id="collapse4<?php echo $row4['id'];?>" class="collapse" aria-labelledby="heading4<?php echo $row4['id'];?>"
                        data-parent="#accordion4">
                        <div class="card-body">
                            <div class="row">
                                
                                
                                <div class="col-6 px-5 consigne"> <?php echo $row4['consigne'];?>
                                <div class="text-right">
                                    
                                    <button class="btn btn-primary" type="button" data-toggle="collapse"
                                    data-target="#multiCollapseExample2" aria-expanded="false"
                                    aria-controls="multiCollapseExample2">La réponse</button>
                                </div>
                            </div>
                            <!-- second text -->
                            <div class="col-6 px-5">
                                <div class="collapse multi-collapse" id="multiCollapseExample2">
                                    <div class="card-body">
                                        <p class="code"><?php echo $row4['code'];?></p>
                                        <p class="description"><?php echo $row4['description'];?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <?php
                    }
                    ?>
                        
            <div class="tab-pane fade" id="date" role="tabpanel" aria-labelledby="date-tab">
                <div class="accordion" id="accordion5">
                    <?php $req5 = $db->query('SELECT * FROM exo WHERE exo_type = "Date"');
                            foreach ($req5 as $row5){
                                ?>
                    <div class="card">
                        <div class="card-header" id="heading5<?php echo $row5['consigne'];?>">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                data-target="#collapse5<?php echo $row5['consigne'];?>" aria-expanded="false" aria-controls="collapse5<?php echo $row5['consigne'];?>">
                                Excercice <?php echo $row5['exo-number'];?>
                            </button>
                        </h2>
                    </div>
                    
                        <div id="collapse5<?php echo $row5['consigne'];?>" class="collapse" aria-labelledby="heading5<?php echo $row5['consigne'];?>"
                        data-parent="#accordion5">
                        <div class="card-body">
                            <div class="row">
                                
                                
                                <div class="col-6 px-5 consigne"> <?php echo $row5['consigne'];?>
                                <div class="text-right">
                                    
                                    <button class="btn btn-primary" type="button" data-toggle="collapse"
                                    data-target="#multiCollapseExample2" aria-expanded="false"
                                    aria-controls="multiCollapseExample2">Toggle
                                                second element</button>
                                            </div>
                                        </div>
                                        <!-- second text -->
                                        <div class="col-6 px-5">
                                            <div class="collapse multi-collapse" id="multiCollapseExample2">
                                                <div class="card-body">
                                                    <p class="code"><?php echo $row5['code'];?></p>
                                                    <p class="description"><?php echo $row5['description'];?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
               
    
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="node_modules/popper.js/dist/popper.js"></script>
    
    
    
</body>

</html>