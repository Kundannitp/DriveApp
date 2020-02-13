<!DOCTYPE html>
<html>
<style>
    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }


    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>

<body>

    <h3>Upload</h3>

    <div>
        <form action="fileUpload.php" method="post" enctype="multipart/form-data">
            <label for="name">Your Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name.."><br>
            <label for="NoticeStatement">NoticeStatement</label><br>
            <textarea rows="4" cols="100%" name="noticestm">
            </textarea><br>

            <label for="opendate">Open Date :  </label>
            <input type="date" name="opendate"><br><br>

            <label for="closedate">close Date :  </label>
            <input type="date" name="closedate"><br>

            <label for="msgtype">Type</label>
            <select id="country" name="msgtype">
                <option value="Announcements">Announcements</option>
                <option value="Important">Important</option>
                <option value="Events">Events</option>
            </select>
            <label for="FileChoose">Choose the fileToUpload</label><br><br>
            <input type="file" name="myfile" id="fileToUpload">

            <input type="submit" name="submit" value="Upload File Now">
        </form>
    </div>
    <?php 
        
    ?>
   

</body>

</html>