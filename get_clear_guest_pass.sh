#!/bin/sh
file=$(mktemp)
/scratch/linshi/shells/libs/download 'https://gmp.oracle.com/captcha/files/airespace_pwd_apac.txt?_dc=1423537303234' -O $file -q  
grep Password $file | cut -f 2 -d ' '
