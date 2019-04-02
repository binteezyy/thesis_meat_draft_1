import serial
import os
import time
counter=0

ser = serial.Serial(
port='/dev/ttyUSB0',
baudrate = 9600,
timeout=1,
writeTimeout=1,
bytesize=serial.EIGHTBITS,
parity=serial.PARITY_NONE,
stopbits=serial.STOPBITS_ONE,
xonxoff=False,
rtscts=False,
dsrdtr=False
)
counter=0
ser.close()
ser.open()
ser.flushInput()
ser.flushOutput()
while True:

        counter=counter+1

        if counter==15:
           # os.system(" fswebcam -S 23 --no-banner /var/www/html/images/test.jpg")
            os.system("fswebcam -r 320x240 --no-banner   /var/www/html/images/test.jpg -S 24")
            
            counter=0
            print("data")


        serdata= ser.readline()
        pos=serdata.find('a')
        if pos>1:
           sensor=open("/var/www/html/gas.txt","w")
           serdata=serdata.replace('a','')
           sensor.write(serdata)
           sensor.close()
           print(serdata)
      
