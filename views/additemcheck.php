<?php 
require '../connect.php';
$sql_store = "INSERT INTO store (name, storeType, shortloc, description, phone, facebook, line, site, approve)
            VALUES('$_POST[name]','$_POST[category]','$_POST[basic_location]','$_POST[description]',
                                            '$_POST[tel]','$_POST[fb]','$_POST[line]','$_POST[site]',0)";
            $result_store = $con->query($sql_store);
            if(!$result_store){
                echo "<br><br><br><br><br><br>".$con->error;
            } else {
                $storeId = $con->insert_id;
                $sql_time = "INSERT INTO businesshours (storeID,day,hoursOpen,hoursClose) VALUES ($storeId,'$_POST[day]','$_POST[open]','$_POST[close]')";
                $result_time = $con->query($sql_time);
                if(!$result_time){
                    echo $con->error;
                } else {
                    if($_FILES['photos']['tmp_name']!=''){
                        $imagePath = '../imageStore/'.$_FILES['photos']['name'];
                        move_uploaded_file($_FILES['photos']['tmp_name'], $imagePath);
                        $sql_img = "INSERT INTO photos (photo,storeID) VALUES ('$imagePath',$storeId)";
                        $result_img = $con->query($sql_img);
                        if(!$result_img){
                            echo $con->error;
                        } else {
                            $url = 'store.php?id='.$storeId;
                            echo "<script>
                                    window.location = '$url'
                                </script>";
                        }
                    }
                }

            }

            // header('Location: store?id=$storeId.php');

            // 
            
?>