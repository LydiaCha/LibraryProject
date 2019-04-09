<?php
class DBConnect
{
    private static $dbConn = NULL;
    private static $errorMsg = "";
    
    public static function getConnection()
    {
        if(DBConnect::$dbConn == NULL)
        {
            try
            {
                DBConnect::$dbConn= new PDO('mysql:host=localhost;dbname=lms;charset=utf8','root','');                
            } 
            catch (Exception $ex) 
            {
                echo  "unable to connect to the database <BR>Error:".$ex->getMessage();
                DBConnect::$errorMsg = $ex->getMessage();
            }
        }
        
        return DBConnect::$dbConn;
    }
    
    public static function getError()
    {
        return DBConnect::$errorMsg; 
    }
    
    
}



