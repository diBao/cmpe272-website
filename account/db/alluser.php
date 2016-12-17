<?php
  // Here is the data we will be sending to the service
  $select['select'] = '*';
  $curl1 = curl_init();
  $curl2 = curl_init();
  $curl3 = curl_init();

  curl_setopt($curl2, CURLOPT_POST, 1);
  curl_setopt($curl2, CURLOPT_POST, 1);
  curl_setopt($curl2, CURLOPT_POST, 1);

  curl_setopt($curl1, CURLOPT_URL, 'http://www.starrybookstore.com/account/db/user.php');
  curl_setopt($curl2, CURLOPT_URL, 'http://www.ritaccc.com/user/allUserInfoFromAllCompany/database.php'); 
  curl_setopt($curl3, CURLOPT_URL, 'http://www.magicweaponcompany.com/database.php?type=1');
  // Make it so the data coming back is put into a string
  curl_setopt($curl1, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl3, CURLOPT_RETURNTRANSFER, true);


  // Insert the data
  curl_setopt($curl1, CURLOPT_POSTFIELDS);
  curl_setopt($curl2, CURLOPT_POSTFIELDS);
  curl_setopt($curl3, CURLOPT_POSTFIELDS, $select);
   
  // Send the request
  $result1 = curl_exec($curl1);
  $result2 = curl_exec($curl2);
  $result3 = curl_exec($curl3);
  // Free up the resources $curl is using
  curl_close($curl1);
  curl_close($curl2);
  curl_close($curl3);

  echo $result1, $result2, $result3;
?>
