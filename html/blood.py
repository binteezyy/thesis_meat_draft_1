import serial
import os
import time
counter=0

while True:

        counter=counter+1

        if counter==15:
            os.system(" fswebcam -S 23 --no-banner /var/www/html/images/test.jpg")
            
            counter=0
            print("data")


