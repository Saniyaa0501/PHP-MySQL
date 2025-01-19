<html>
    <body>
        <?php
        //Directiory Handling Operations

        //Create a Directory
        if(!is_dir("phpDay3_Directiory")){
            mkdir("phpDay3_Directiory");
            echo "Directiory Created";
        }
        else{
            echo"Directiory already exists !";
        }
          echo "<br>";

        //Check if the directiory exsits
        if(is_dir("phpDay3_Directiory")){
            echo "Directiory Exists";
        }
        else{
            echo "Directiory does not exists !";
        }
echo "<br>";

        //List the files inside the folder
        $files = scandir("phpDay3_Directiory");
        foreach($files as $file){
            echo $file. "<br>";
        }

        echo "<br>";
        //Change the directiory
        echo "Current Directiory :" .getcwd();
        chdir("phpDay3_Directiory");
        echo "<br> New Current Directiory :".getcwd();

        echo "<br>";
        //Delete the files inside the directiory
        $delete_files = scandir(".");
        foreach($delete_files as $file){
            if($file!=="." && $file!==".."){
                unlink($file);
             }
            echo "Files Deleted !";
        }

        echo "<br>";
        //Delete directory
       
         chdir("..");
        echo "<br> Current Directiory :" .getcwd();
        if(is_dir("phpDay3_Directiory")){
            rmdir("phpDay3_Directiory");
            echo "<br> Directiory Removed";
        }
        else{
            echo "<br> Directiory does not exists!";
        }

           
        ?>
        </body>
        </html>