<?php
        if(!$_POST['login'] || !$_POST['oldpw'] || !$_POST['newpw'] || $_POST['submit'] != "OK")
        {
                echo"ERROR\n";
                exit;
        }
        else
        {
        $login = $_POST['login'];
        $oldpw = $_POST['oldpw'];
        $oldpw = hash('whirlpool',$oldpw);
        $newpw = $_POST['newpw'];
                if(!file_exists("private/passwd"))
                {
                        echo"ERROR\n";
                        exit;
                }
                else
                {
                        $mytab= unserialize(file_get_contents("private/passwd"));
                        $i = 0;
                        foreach($mytab as $elem)
                        {
                                if($elem['login'] === $login && $elem['passwd'] === $oldpw)
                                {
                                        $newpw = hash('whirlpool',$newpw);
                                        $mytab[$i]['passwd'] = $newpw;
                                        $mytab = serialize($mytab);
                                        file_put_contents("private/passwd",$mytab);
                                        header('location: index.php');
                                        exit;
                                }
                                $i++;
                        }
                }
        echo"ERROR\n";
        }
?>