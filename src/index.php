<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action='connect.php?action=<?php echo $con?>' method="post">
            <div>
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter Your Name" value="<?php echo $sql['NAME']?>"> 
            </div>
            <div>
                <label>Date of Birth</label>
                <input type="date" name="date" value="<?php echo $sql['DATE']?>"> 
            </div>
            <div>
                <label>Program Studi</label>
                <input type="text" name="prodi" placeholder="Enter Your Prodi" value="<?php echo $sql['PRODI']?>"> 
            </div>
            <div>
                <label>NIM</label>
                <input type="text" name="nim" placeholder="Enter NIM" value="<?php echo $sql['NIM']?>"> 
            </div>
            <div>
                <input type="submit" name="submit" value="insert_data">
            </div>
        </form>
    </div>
    
</body>
</html>