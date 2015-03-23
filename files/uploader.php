<?php 

if (!empty($_FILES["file"]))
{
    if ($_FILES["file"]["error"] > 0)
       {echo "Error: " . $_FILES["file"]["error"] . "<br>";}
    else
       {echo "Stored file:".$_FILES["file"]["name"]."<br/>Size:".($_FILES["file"]["size"]/1024)." kB<br/>";
       move_uploaded_file($_FILES["file"]["tmp_name"],"encrypted/".$_FILES["file"]["name"]);
       }
}
// open this directory 
    $myDirectory = opendir("./encrypted");
    // get each entry
    while($entryName = readdir($myDirectory)) {$dirArray[] = $entryName;} closedir($myDirectory);
    $indexCount = count($dirArray);
        echo "$indexCount files<br/>";
    sort($dirArray);

    echo "<TABLE border=1 cellpadding=5 cellspacing=0 class=whitelinks><TR><TH>Filename</TH><th>Filetype</th></TR>\n";

        for($index=0; $index < $indexCount; $index++) 
        {
            if (substr("$dirArray[$index]", 0, 1) != ".")
            {
            echo "<TR>
            <td><a href=\"encrypted/$dirArray[$index]\" download >$dirArray[$index]</a></td>
            
            <td><button ><a href=\"encrypted/$dirArray[$index]\" download >download</a></button></td>
                </TR>";
            }
        }
    echo "</TABLE>";
    ?>
