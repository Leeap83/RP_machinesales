<?php

$IMGUR_CLIENT_ID = "a42053e37fd60e5";

$statusMsg = $valErr ='';
$status = 'danger';
$imgurData = array();

if (isset($_POST['submit'])) {
    if (empty($_FILES['image']['name'])){
        $valErr .= 'please select a file to upload.<br/>';
    }

    if (empty($valErr)) {
        $fileName = basename($_FILES["image"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'JPG', 'mov', 'MOV');
        if (in_array($fileType, $allowTypes)) {
            $image_source = file_get_contents($_FILES['image']['tmp_name']);

            $postFields = array('image' => base64_encode($image_source));

            if (!empty($_POST['title'])){
                $postFields['title'] = $_POST['title'];
            }

            if (!empty($_POST['description'])){
                $postFields['description'] = $_POST['description'];
            }

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://api.imgur.com/3/image');
            curl_setopt($ch, CURLOPT_POST, TRUE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Client-ID '.$IMGUR_CLIENT_ID));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
            $response = curl_exec($ch);


            $responseArr = json_decode($response);

            if (!empty($responseArr->data->link)) {
                $imgurData = $responseArr;

                $status = 'success';
                $statusMsg = 'The image has been uploaded successfully.';

            } else {
                $statusMsg = 'The image upload failed.';
            }
        } else {
            $statusMsg = 'Sorry, only an image file is allowed.';

        }

    } else {
        $statusMsg = '<p>Please fill all mandatory fields</p>'.trim($valErr, '<br/>');
    }
}