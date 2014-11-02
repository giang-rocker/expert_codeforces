
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <meta charset="UTF-8">
        <title></title>
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    </head>


    <script>


    </script>

    <body>

        
        <?php
        // put your code here
        echo "<marquee direction='right'><h2><b><font color='red'>Hello, I'm an expert of Codeforces !</b></font></h2></marquee>";
          echo "<center><h2><b><font color='red'>Hello, I'm an expert of Codeforces !</b></font></h2></center>";
      
        echo "<marquee direction='left'><h2><b><font color='red'>Hello, I'm an expert of Codeforces !</b></font></h2></marquee>";
        ?>
        <?php
        
        if (isset($_GET["index"]))
            $index = $_GET["index"];
        else 
            $index = "all";
        
        $jsonurl = "http://codeforces.com/api/problemset.problems";
        $json = file_get_contents($jsonurl, 0, null, null);
        $json_output = json_decode($json, true);
        $listData = $json_output['result']['problems'];
        foreach ($listData as $data) {
            if ($data['index']== $index)
            echo $data['contestId']. $data['index'] . " : "  . $data['name'] ."       Category  : ". $data['tags'].  "</br>";
            
        }
        ?>

    </body>
</html>
