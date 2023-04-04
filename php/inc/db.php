<?php

function db_get_pdo()
{
    $host = 'localhost';
    $port = '3306';
    $dbname = 'phtw';
    $charset = 'utf8';
    $username = 'root';
    $db_pw = "root506";
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=$charset";
    $pdo = new PDO($dsn, $username, $db_pw);
    $db_option   = array(
        PDO::ATTR_EMULATE_PREPARES    => false //DB의 prepared statement 기능을 사용하도록 설정
        ,PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION //PDO Exception을 Thorws 하도록 설정
        ,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // 연상배열로 Fetch를 하도록 설정  
    );
    $param_conn = new PDO( $db_dns, $db_user, $db_password, $db_option );
    return $pdo;
}

function db_select($query, $param=array()){
    $pdo = db_get_pdo();
    try {
        $st = $pdo->prepare($query);
        $st->execute($param);
        $result =$st->fetchAll(PDO::FETCH_ASSOC);
        $pdo = null;
        return $result;
    } catch (PDOException $ex) {
        return false;
    } finally {
        $pdo = null;
    }
}

function db_insert($query, $param = array())
{
    $pdo = db_get_pdo();
    try {
        $st = $pdo->prepare($query);
        $result = $st->execute($param);
        $last_id = $pdo->lastInsertId();
        $pdo = null;
        if ($result) {
            return $last_id;
        } else {
            return false;
        }
    } catch (PDOException $ex) {
        return false;
    } finally {
        $pdo = null;
    }
}

function db_update_delete($query, $param = array())
{
    $pdo = db_get_pdo();
    try {
        $st = $pdo->prepare($query);
        $result = $st->execute($param);
        $pdo = null;
        return $result;
    } catch (PDOException $ex) {
        return false;
    } finally {
        $pdo = null;
    }
}