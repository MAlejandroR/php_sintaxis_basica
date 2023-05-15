#!/usr/bin/env bash



while IFS=, read -r dir user grupo
do
  echo $dir

  echo  $1 /home/oem/prueba/$dir
  cp -r $1 /home/oem/prueba/$dir
  echo user -$user- grupo -$grupo-
  sudo chown $user:$grupo /home/oem/prueba/$dir -R
done < listado.txt
