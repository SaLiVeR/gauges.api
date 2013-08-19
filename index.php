<?php

$headers = array(
    'X-Gauges-Token: {your token goes here}'
);
        // create curl resource
        $ch = curl_init();
        

        // set url
        curl_setopt($ch, CURLOPT_URL, "https://secure.gaug.es/gauges/{site-id-goes-here-to-find-it-go-to-the-dashboard-and-see-it-in-the-URL}".$type);
        
        // headers
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);
        
        echo $output ;

        // close curl resource to free up system resources
        curl_close($ch);     
?>