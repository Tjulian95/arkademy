<?php

function validasi($Username,$Password)
{
   if (!preg_match("/^[a-z_]/",$Username)) {
      echo "Username harus diawali huruf kecil"; 
    }
    
    else  if(!preg_match("/./",$Username)) {
      echo "Hanya boleh menggunakan special character . dan _"; 
    }
    
    else if (strlen($Username)<(8) or strlen($Username)>(13)) {
      echo "Minimal 8-12 Karakter";
    }
    else {
      echo "Username Benar"; 
    }
    echo"<br>";
    if (strlen($Password)>(9)) {
      echo " Password harus 9 karakter";
    }
    else  if(preg_match("/[1-9]{1.}/",$Password))  {
      echo " Password minimal 1 karakter angka";
    }else  if(preg_match("/[@#%^&*]{1.}/",$Password))  {
      echo " Password minimal 1 karakter simbol";
    }
    else{echo " Password Benar";
    
    }
  }
  validasi("john.smith","j0hn5m!th");
  
  ?>