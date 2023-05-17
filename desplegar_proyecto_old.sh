#!/usr/bin/env bash
while IFS=, read -r dir user grupo
do
 sudo rsync -chown=$user:$grupo  -r $1 /home/oem/prueba/$dir
done < listado.txt
