$(document).ready(function () {

    function toString(status) {
        return status == 0 ? 'Kosong' : 'Terisi'
    }

   function getData() {
       $.ajax({
           url: 'https://smartparkingiotntap.firebaseio.com/.json',
           type: "GET",
           success: function (data) {
               let sisaParkir = 3 - (parseInt(data['Parkiran1']) + parseInt(data['Parkiran2']) + parseInt(data['Parkiran3']))
               $('#sisa-parkir').text(sisaParkir)

               $('#parkiran1').text(toString(data['Parkiran1']))
               if(data['Parkiran1'] == 1) {
                   $("#random1").attr('disabled', 'disabled');
               }else{
                   $("#random1").removeAttr('disabled');
               }
               $('#parkiran2').text(toString(data['Parkiran2']))
               if(data['Parkiran2'] == 1) {
                   $("#random2").attr('disabled', 'disabled');
               }else{
                   $("#random2").removeAttr('disabled');
               }
               $('#parkiran3').text(toString(data['Parkiran3']))
               if(data['Parkiran3'] == 1) {
                   $("#random3").attr('disabled', 'disabled');
               }else{
                   $("#random3").removeAttr('disabled');
               }
           },
           error: function(error) {
               // console.log(error);
           }
       });
   }
   setInterval(getData, 1000);

   // Your web app's Firebase configuration
       var firebaseConfig = {
       apiKey: "AIzaSyAanIJYcZxQGeOyERUQm0FcXa6khCWMzDg",
       authDomain: "smartparkingiotntap.firebaseapp.com",
       databaseURL: "https://smartparkingiotntap.firebaseio.com",
       projectId: "smartparkingiotntap",
       storageBucket: "smartparkingiotntap.appspot.com",
       messagingSenderId: "252466639358",
       appId: "1:252466639358:web:b50089cd34c58218"
       };
   // Initialize Firebase
       firebase.initializeApp(firebaseConfig);

       var database = firebase.database();

       $("#simpan1").on("click", function(){
           number1 = $("#number1").html().trim();
           database.ref("/KeyParkiran1").set(number1);
           $.post( "sendchat.php",{ message: $('#number1').val()}, function( data ) {
             $('#number1').val('')
             alert('sukses')
           });
           $('#DataParkiran1').modal('hide')
           return false;
       })

       $("#simpan2").on("click", function(){
           number2 = $("#number2").html().trim();
           database.ref("/KeyParkiran2").set(number2);
           $('#DataParkiran2').modal('hide')
           return false;
       })

       $("#simpan3").on("click", function(){
           number3 = $("#number3").html().trim();
           database.ref("/KeyParkiran3").set(number3);
           $('#DataParkiran3').modal('hide')
           return false;
       })

       $("#confirm").on("click", function(){
       $.ajax({
           url: 'https://smartparkingiotntap.firebaseio.com/.json',
           type: "GET",
           success: function (data) {
               var bookingCode = []
               bookingCode.push(data['KeyParkiran1'])
               bookingCode.push(data['KeyParkiran2'])
               bookingCode.push(data['KeyParkiran3'])
               var input = $('#BookingCode').val()
               let flag = bookingCode.indexOf(input)
               if(flag != -1) {
                   // note: flag = 0 -> booking code parkiran 1
                   // note: flag = 1 -> booking code parkiran 2
                   // note: flag = 2 -> booking code parkiran 3
                   let value = data['Parkiran' + (flag + 1)] == 0 ? 1 : 0
                   database.ref("/Parkiran" + (flag + 1)).set(value);
                   $("#myModalSuccess").modal("toggle")
               }else{
                   $("#myModalInvalid").modal("toggle")
               }
               $('#BookingCode').val('')
           },
           error: function(error) {
               // console.log(error);
           }
       });
   })

   $('#simpan1').on('click', function() {
       $.post( "sendchat.php",{ message: $('#number1').text()}, function( data ) {
         $('#number1').text('')
       });
   })

   $('#simpan2').on('click', function() {
       $.post( "sendchat.php",{ message: $('#number2').text()}, function( data ) {
         $('#number2').text('')
       });
   })

   $('#simpan3').on('click', function() {
       $.post( "sendchat.php",{ message: $('#number3').text()}, function( data ) {
         $('#number3').text('')
       });
   })

 });
