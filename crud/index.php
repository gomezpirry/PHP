<?php
    include_once 'dbconfig.php';
    if(isset($_GET['delete_id']))
    {
        $delete_query = "DELETE FROM users WHERE user_id =".$_GET['delete_id'];
        pg_query($delete_query);
        header("Location= $_SERVER[PHP_SELF]");
    }
    
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>CRUD Operations With PHP</title>
            <link rel="stylesheet" href="style.css" type="text/css" />
            <script type="text/javascript">
                
                function edit_id(id)
                {
                    if(confirm('Sure to edit  ?'))
                        window.location.href ='edit_data.php?edit_id='+id;
                }
                
                function delete_id(id)
                {
                    if(confirm('Sure to delete ?'))
                        window.location.href = 'index.php?delete_id='+id
                }
            
            </script>
        </head>

        <body>
            <center>
                <div id="header">
                    <div id="content">
                        <label>CRUD Operations With PHP</label>
                    </div>
                </div>
                <div id="body">
                    <div id="content">
                        <table align="center">
                            <tr>
                                <th colspan="5"><a href="add_data.php">add data here.</a></th>
                            </tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>City Name</th>
                                <th colspan="2">Operations</th>
                            </tr>
    
            <?php
                $sql_query="SELECT * FROM users";
                $result_set = pg_query($sql_query);
                
                        while($row = pg_fetch_row($result_set))
                        {
                            ?>
                            <tr>
                                <td><?php echo $row[1]; ?></td>
                                <td><?php echo $row[2]; ?></td>
                                <td><?php echo $row[3]; ?></td>
                                <td align="center"><a href="javascript:edit_id('<?php echo $row[0]; ?>')">edit</a></td>
                                <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')">delete</a></td>
                            </tr>
                            <?php
                        }
            ?>
                        </table>
                    </div>
                </div>

            </center>
        </body>
</html> 
