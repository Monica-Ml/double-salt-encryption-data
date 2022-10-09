<?php
class hash{
  public function encryption_data($clear_data){
    try {
      $salt_1 = '731dcxs#&@MvBs';
      $salt_2 = 'KQojSd2*&!bgKU';
      $salt_1_md5=md5($salt_1);
      $salt_2_md5=md5($salt_2);
      $encoded_clear_data=base64_encode($clear_data);
      $encoded_clear_data=(string)$encoded_clear_data;
      $mix_data = $salt_1_md5 . $encoded_clear_data . $salt_2_md5;
      $encoded_data=base64_encode($mix_data);
    	return array(true,$encoded_data);
    }catch (Exception $e) {
      //echo 'Caught exception: ',  $e->getMessage(), "\n";
      return array(false,'error 200');
    }
  }
}
