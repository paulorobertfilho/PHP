<?php

$password = '123@mudar';
$user = 'fluig.sonepar';
$url  = "http://10.4.0.29/apirest.php/initSession?";


$urlCf = 0;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



//buscar o Token
$curl = curl_init();

$headers = array(
    'Content-Type:application/json',
    'Authorization: Basic '. base64_encode("$user:$password") // <---
);

curl_setopt_array($curl, array( 
  CURLOPT_HTTPHEADER => $headers ,                                                                                                                
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
));

$response = curl_exec($curl);

$err = curl_error($curl);

//curl_close($curl);


if ($err) {
    echo " erro1 #:" . $err;
    $token = false;
  } else {
          $respArray = json_decode(utf8_encode($response), true);
         $token = $respArray['session_token'];
  }


  //buscar dados no GLPI


  
  $titre = "Equipamentos | Computador";
  $description = " ";

$fields='{
    "input": {
        "name": "' .$titre. '","requesttypes_id": "1","content": "'.$description.'","type": "1"
    }
}';



  if  ($token){

    $curl2 = curl_init();
    $headers = array(
        "Content-Type:application/json",
        'Session-Token: '. $token ); 

    curl_setopt_array($curl2, array( 
        CURLOPT_HTTPHEADER => $headers , 
       // CURLOPT_POSTFIELDS => $fields,    
       CURLOPT_URL => "http://10.4.0.29/apirest.php/Ticket/?criteria[0][field]=2&criteria[0][id]=2&criteria[0][link]=AND&criteria[0][requesttypes_id]=7",
       //CURLOPT_URL => "http://10.4.0.29/apirest.php/search/Ticket?criteria[0][field]=29&criteria[0][searchtype]=table&criteria[0][value]=7",
       //CURLOPT_URL => "http://10.4.0.29/apirest.php/search/Ticket?criteria[0][link]=AND&criteria[0][itemtype]=Ticket&criteria[0][field]=2&criteria[0][searchtype]=id&criteria[0][value]=240744&forcedisplay[0]=1",
       //CURLOPT_URL => "http://10.4.0.29/apirest.php/listSearchOptions/Ticket?", 
       CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
      ));


    $response = curl_exec($curl2);

    //$respArray = json_decode(utf8_encode($response), true);


    print_r($response  );

   $err = curl_error($curl2);

   //print_r($err  );

   curl_close($curl2);

   die;

  }else{

    echo " token inválido ";
  }





die;



if ($err) {
  echo "cURL Error2 #:" . $err;
  $token = false;
} else {
		$respArray = json_decode(utf8_encode($response), true);
		$token = $respArray['resposta']['token'];
}

unset($curl);

//buscar o ID embarque
//
if($token){
	
//echo $token;
	$notaFiscal = "633691";
	$serie = "005";
	$embarcador = "";

	$curl = curl_init();

  curl_setopt_array($curl, array(
	 CURLOPT_URL => "https://api.confirmafacil.com.br/gko-ms-pcf-remote/filter/advanced/?consulta.auth.token={$token}&consulta.param[1]=numero={$notaFiscal}&consulta.param[2]=serie={$serie}&consulta.param[3]=embarcadores={$embarcador}",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "GET",
	));


	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	$respArray =  json_decode(utf8_encode($response), true);

	$idEmbarque = $respArray['msRetorno']['respostas'][0]['embarque']['idEmbarque'];

	//echo 'id em'.$idEmbarque;

	unset($curl);

		if ($idEmbarque){

				$curl = curl_init();

				//buscar todas a ocorrencias das Notas
				curl_setopt_array($curl, array(
				CURLOPT_URL => "https://api.confirmafacil.com.br/gko-ms-pcf-remote/embarque/timeline?consulta.auth.token={$token}&consulta.param[1]=idEmbarque={$idEmbarque}",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 30,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "GET",
			));


			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);

		//	$resObj  = json_decode(utf8_encode($response), true);

			if ($err) {
				echo "cURL Error #:" . $err;
			} else {
			echo 	$response;
				
			}
	}


}