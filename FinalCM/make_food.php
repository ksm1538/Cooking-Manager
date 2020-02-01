<?php
session_start();
$userid = $_SESSION['userid'];

$servername='localhost';
$dbname='CM';
$username='cm';
$password='cm';

$Fname=$_GET['Fname'];

 try{
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $oo = $conn->prepare("SELECT COUNT(*) as count FROM food where Fname='$Fname'"); 
            $oo->execute();
            $pp = $oo->fetchAll();
            foreach ($pp as $rs)
            {
                $count=$rs['count'];
            }
            
            $checkcheck=0;
            $stmt = $conn->prepare("SELECT Finame, IMGname, Finum FROM food where Fname='$Fname'"); 
            $stmt->execute();
            $rows = $stmt->fetchAll();
            foreach ($rows as $rs)
            {
                $Finame=$rs['Finame'];
                
                if($rs['IMGname'] != NULL)
                {
                    $IMG=$rs['IMGname']; 
                }
                $Finum=$rs['Finum'];
                
                $super = $conn->prepare("SELECT Iname, Inum FROM ingre where Iid='$userid'");
                $super->execute();
                $power = $super->fetchAll();
                foreach ($power as $rs)
                {
                    $Iname=$rs['Iname'];
                    $Inum=$rs['Inum'];
                    if($Finame==$Iname && $Inum>=$Finum)
                        $checkcheck++;
                }
            }
 }
catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }   
            if($checkcheck==$count)
            {
                try
                {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $ww = $conn->prepare("SELECT Finame,Finum FROM food where Fname='$Fname'"); 
                    $ww->execute();
                    $ee = $ww->fetchAll();
                    foreach ($ee as $rs)
                    {
                        $Finame=$rs['Finame'];
                        $Finum=$rs['Finum'];
                        
                        $tt = $conn->prepare("SELECT Iname, Inum FROM ingre where Iid='$userid'");
                        $tt->execute();
                        $yy = $tt->fetchAll();
                        foreach ($yy as $rs)
                        {
                            $Iname=$rs['Iname'];
                            $Inum=$rs['Inum'];
                            
                            if($Finame==$Iname && $Inum>=$Finum)
                            {
                                $Num=$Inum-$Finum;
                                if($Num==0)
                                {
                                    $sql = "Delete from ingre WHERE Iid='$userid' AND IName='$Iname'";
                                }
                                else
                                {
                                    $sql = "UPDATE ingre SET Inum='$Num' WHERE Iid= '$userid' AND IName='$Iname'"; 
                                }
                                
                                $conn->exec($sql);
                            }
                        }
                    }
                }
                catch(PDOException $e)
                {
                    echo "Error: " . $e->getMessage();
                }
                echo '<script type = "text/javascript">alert("요리하였습니다. 재료가 감소합니다.")</script> ';
                echo "<script>window.location.replace('main.php')</script>"; 
            }
            else 
            {
                    echo '<script type = "text/javascript">alert("재료가 부족합니다.")</script> ';
                    echo "<script>window.location.replace('main.php')</script>"; 
            }
                    
	$conn = null;
        ?>


