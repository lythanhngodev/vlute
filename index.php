<?php
  $ZERO_PATH = "Mobile_Detect.php";
  require_once($ZERO_PATH);
  $detect = new Mobile_Detect;
   
  if($detect->isMobile())
  {
    if ($detect->isTablet())
    {
      echo "TABLET: ";
      
      if($detect->version("Windows Phone"))
      {
        echo "Windows Phone 8";
      }
      else if($detect->isiOS())
      {
        echo "iOS";
      }
      else if ($detect->isAndroidOS())
      {
        echo "Android";
      }
    }
    else
    {
      echo "PHONE: ";
      
      if($detect->version("Windows Phone"))
      {
        echo "Windows Phone 8";
      }
      else if($detect->isiOS())
      {
        echo "iOS";
      }
      else if ($detect->isAndroidOS())
      {
        echo "Android";
      }
    }
  }
  else
  {
    require_once('index_pc.php'); // Giao diện trên PC
  }
?>