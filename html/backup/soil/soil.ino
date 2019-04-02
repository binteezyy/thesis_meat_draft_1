int led = 3;

void setup() {
 Serial.begin(9600);
    pinMode(led, OUTPUT);  
}

// the loop routine runs over and over again forever:
void loop() {
  // read the input on analog pin 0:
   int moisture = analogRead(A0);
  int sensorValue = analogRead(A1);
  // print out the value you read:
  Serial.println(sensorValue);
  delay(1);        // delay in between reads for stability
  
    digitalWrite(led, HIGH);   // turn the LED on (HIGH is the voltage level)
  delay(1);               // wait for a second
  digitalWrite(led, LOW);    // turn the LED off by making the voltage LOW
  delay(1);               // wait for a second
}
