<?php
include_once "../../connection.php";

if(isset($_GET['getCandidates'])){

    $sql = "SELECT * FROM `contestant` ";
    $result = $con->query($sql);
    
    while($row = $result->fetch_assoc()){
        ?>
            <div class="relative h-[280px] w-[250px]">
                <span class="absolute top-[-15px] left-[-15px] h-[40px] flex items-center font-[900] text-2xl justify-center w-[40px] rounded-full text-white bg-blue-400/90"><?php echo $row['number']?></span>
                <img src="<?php echo $row['image'] ?>" alt="" class="rounded-md shadow-md h-full">
            </div>
        <?php
    }

    // $response = array('status' => true, 'test' => $data);

    // echo json_encode($response);exit();
}

?>