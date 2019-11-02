#include <FirebaseCloudMessaging.h>
#include <Firebase.h>
#include <FirebaseHttpClient.h>
#include <FirebaseArduino.h>
#include <FirebaseError.h>
#include <FirebaseObject.h>
#include <ESP8266WiFi.h>

// Set these to run example.
#define FIREBASE_HOST "smartparkingiotntap.firebaseio.com"
#define FIREBASE_AUTH "KkSP7mm6dP2aE2MFoQkj0jhHfNOqWpXvxd2peTWm"
#define WIFI_SSID "ANJJAY"
#define WIFI_PASSWORD "belajarnjing"

int trigPin1 = D1;
int echoPin1 = D0;
int trigPin2 = D3;
int echoPin2 = D2;
int trigPin3 = D6;
int echoPin3 = D5;
const int LED = D4;

int state_1 = 1;
int state_2 = 1;
int state_3 = 1;

void setup() {
  Serial.begin (9600);
  pinMode(trigPin1, OUTPUT);
  pinMode(echoPin1, INPUT);
  pinMode(trigPin2, OUTPUT);
  pinMode(echoPin2, INPUT);
  pinMode(trigPin3, OUTPUT);
  pinMode(echoPin3, INPUT);
  pinMode(LED, OUTPUT);

    // connect to wifi.
  WiFi.begin(WIFI_SSID, WIFI_PASSWORD);
  Serial.print("connecting");
  while (WiFi.status() != WL_CONNECTED) {
    Serial.print(".");
    delay(500);
  }
  Serial.println();
  Serial.print("connected: ");
  Serial.println(WiFi.localIP());
  Firebase.begin(FIREBASE_HOST, FIREBASE_AUTH);
  
}

int n = 0;

void loop() {

  String path = "/";

  FirebaseObject object = Firebase.get(path);

  String Parkiran1 = object.getString("Parkiran1");
  String Parkiran2 = object.getString("Parkiran2");
  String Parkiran3 = object.getString("Parkiran3");
  String KeyParkiran1 = object.getString("KeyParkiran1");
  String KeyParkiran2 = object.getString("KeyParkiran2");
  String KeyParkiran3 = object.getString("KeyParkiran3");
  String BookingCode = object.getString("BookingCode");

  digitalWrite(LED, HIGH);
  delay(100);
  digitalWrite(LED, LOW);
  delay(1000);
  Firebase.setString("BookingCode", "");  
  //Start
  long duration1, distance1;
  long duration2, distance2;
  long duration3, distance3;

  digitalWrite(trigPin1, LOW); 
  delayMicroseconds(2);
  digitalWrite(trigPin1, HIGH);
  delayMicroseconds(10); 
  digitalWrite(trigPin1, LOW);
  duration1 = pulseIn(echoPin1, HIGH);
  distance1 = (duration1/2) / 29.1;

  
  if (distance1 < 5){
    Firebase.setString("Parkiran1", "1");
    Serial.print(Firebase.getString("Parkiran1"));
  }
  else if(distance1 > 5){
     Serial.print(BookingCode);
  Serial.print("Key");
  Serial.print(KeyParkiran1);
Serial.println("");
    if(BookingCode == KeyParkiran1){
    Firebase.setString("Parkiran1","1");
Serial.print("hihi");
Serial.println("");
    }
    else
    {
      Serial.print("NULL");
Serial.println("");
    }
  }
  else if(Firebase.failed()){
    Serial.print("setting /number failed:");
    Serial.println(Firebase.error());
    return;
  }
  

  digitalWrite(trigPin2, LOW); 
  delayMicroseconds(2);
  digitalWrite(trigPin2, HIGH);
  delayMicroseconds(10); 
  digitalWrite(trigPin2, LOW);
  duration2 = pulseIn(echoPin2, HIGH);
  distance2 = (duration2/2) / 29.1;
  
  if (distance2 < 5){
    Firebase.setString("Parkiran2", "1");
    Serial.print(Firebase.getString("Parkiran2"));
  }
  else if(distance2 > 5){
     Serial.print(BookingCode);
  Serial.print("Key");
  Serial.print(KeyParkiran2);
Serial.println("");
    if(BookingCode == KeyParkiran2){
    Firebase.setString("Parkiran2","1");
Serial.print("hihi");
Serial.println("");
    }
    else
    {
      Serial.print("NULL");
Serial.println("");
    }
  }
  else if(Firebase.failed()){
    Serial.print("setting /number failed:");
    Serial.println(Firebase.error());
    return;
  }

  digitalWrite(trigPin3, LOW); 
  delayMicroseconds(2);
  digitalWrite(trigPin3, HIGH);
  delayMicroseconds(10); 
  digitalWrite(trigPin3, LOW);
  duration3 = pulseIn(echoPin3, HIGH);
  distance3 = (duration3/2) / 29.1;
  
  if (distance3 < 5){
    Firebase.setString("Parkiran3", "1");
    Serial.print(Firebase.getString("Parkiran3"));
  }
  else if(distance3 > 5){
     Serial.print(BookingCode);
  Serial.print("Key");
  Serial.print(KeyParkiran3);
Serial.println("");
    if(BookingCode == KeyParkiran3){
    Firebase.setString("Parkiran3","1");
Serial.print("hihi");
Serial.println("");
    }
    else
    {
      Serial.print("NULL");
Serial.println("");
    }
  }
  else if(Firebase.failed()){
    Serial.print("setting /number failed:");
    Serial.println(Firebase.error());
    return;
  }
}
