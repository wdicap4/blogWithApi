<?php
header("Content-Type:application/json");
include('connection.php');
$request_method = $_SERVER["REQUEST_METHOD"];

function getArticles()
{
    global $con;
    $myfile = "./assets/sample.json";

    $query = "SELECT id, Image, Title, Introduction, LastMod, theme.IdTheme, theme.categorie , article.IdTheme  FROM theme , article WHERE theme.IdTheme=article.IdTheme";
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $id = $row['id'];
    $response["article$id"] = $row;
    $formdata = array();
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        $id = $row['id'];
        $response["article$id"] = $row;
        $formdata = $response;
    }

    
    $arr_data = json_encode($formdata, true);


    file_put_contents($myfile, $arr_data,FILE_APPEND | LOCK_EX);

 
    if ($jasondata= json_encode($arr_data, JSON_PRETTY_PRINT)){
        echo'Bon';
    }else {
        echo 'erreur';

    }

    echo json_encode($jasondata, JSON_PRETTY_PRINT);
}

function getArticle($id=0)
{
    global $con;
    $myfile = "./assets/sample.json";

    $query = "SELECT id, Image, Title, Introduction, LastMod, theme.IdTheme, theme.categorie , article.IdTheme  FROM theme , article WHERE theme.IdTheme=article.IdTheme";
    if($id != 0)
    {
        $query .= " WHERE id=".$id." LIMIT 1";
    }
    $response = array();
    $formdata = array();
    $result = mysqli_query($con, $query);
    
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        $id = $row['id'];
        $response["article$id"] = $row;
        $formdata = $response;
    }

    $jasondata = file_get_contents($myfile);
    $arr_data = json_decode($jasondata, true);

    array_push($arr_data, $formdata );

    file_put_contents($myfile,$jasondata,FILE_APPEND | LOCK_EX);

 
    if ($jasondata= json_encode($arr_data, JSON_PRETTY_PRINT)){
        echo'Bon';
    }else {
        echo 'Pas bonnnnnnnnnnnn';

    }

    header('Content-Type: application/json');

    echo json_encode($jasondata, JSON_PRETTY_PRINT);
}

switch($request_method)
	{
		
		case 'GET':
			// Retrive Articles
			if(!empty($_GET["id"]))
			{
				$id=intval($_GET["id"]);
				getArticle($id);
			}
			else
			{
				getArticles();
			}
			break;
		default:
			// Invalid Request Method
			header("HTTP/1.0 405 Method Not Allowed");
			break;
			


	}