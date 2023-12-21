
<?php
$result ;
$number1 =$_GET['number1'];
$number2 =$_GET['number2'];
$op =$_GET['op'];


if (empty($number1)) {
    $result="الرقم الأول فارغ";
}elseif (empty($number2)) {
    $result="الرقم الثاني فارغ";
}elseif (empty($op)) {
    $result="الرجاء اختيار  العملية";
}else {
    if ($op === '+') {
        $result =$_GET['number1']+$_GET['number2'];
    }elseif($op === '-'){
        $result =$_GET['number1']-$_GET['number2'];
    }elseif($op === '*'){
        $result =$_GET['number1']*$_GET['number2'];
    }elseif($op === '/'){
        $result =$_GET['number1']/$_GET['number2'];
    }    
}

function calu($x,$y){
    if (empty($number1)) {
        $result="الرقم الأول فارغ";
    }elseif (empty($number2)) {
        $result="الرقم الثاني فارغ";
    }elseif (empty($op)) {
        $result="الرجاء اختيار  العملية";
    }else {
        if ($op === '+') {
            return $_GET['number1']+$_GET['number2'];
            
        }elseif($op === '-'){
            return $_GET['number1']-$_GET['number2'];
        }elseif($op === '*'){
            return $_GET['number1']*$_GET['number2'];
        }elseif($op === '/'){
            return $_GET['number1']/$_GET['number2'];
        }    
    }
}




?>  
<body>
  <div class="container">
    <form action="cal.php" method="get" class='form'>
        <div>
            <label for="">Enter Number 1:</label>
            <input type="number" name="number1" class="form-control" >
        </div>
        <div>
            <label for="">Enter Number 1:</label>
            <input type="number" name="number2" class="form-control" >
        </div>
        <div>
            <label for="">Operation:</label>
            <input type="text" name="op" class="form-control" >
        </div>
        <div class="alert alert-success">
         <?php echo $result ?>      
        </div>
        <input type="submit" class="btn btn-primary">    

    </form>
  </div>  
</body>