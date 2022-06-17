@extends('layouts.default')

@section('content')

<head>
  <title>My Personal Laravel Page</title>

  <style>

  body{

      background-color:#ffffff;
 font-size: 25px
   font-family: Courier New,Monospace;
	   }



     .divText3{
      padding: 1px;
      height: 300px;
  text-align: justify;
  background-color: #FF8AAE;
   background-size:cover;
  color: black;
  font-size: 25px;
	 border: double;



	   }

     .container{
       width: 50%;
       margin: auto;
       border-radius: 90px;

     }




    .divImageBg{
      background-color: #FF8AAE;
      width: 1200px;
      height: auto;
      padding: 200px;
      padding-left: 25px;
      padding-right: 25px;
      margin-top: 100px;
      margin-left: auto;
      margin-right: auto;
      border-bottom: solid 2px #8A8583;
      background-image:url("logo.jpg");
      background-size:cover;
        text-align center;
	  border: double;


    }

    .insertImage{
      background-color: #E8EBB7;
      width: 1250px;
      height: auto;
      margin-left: auto;
      margin-right: auto;
      border-bottom: solid 2px #8A8583;
	    columns: 100px 2;

    }

    .fullImage{
      width: 100%;



    }


	  box-sizing: border-box;



  .fontStyle{
  font-family: Helvetica, sans-serif;

}





    .divText{
      padding: 3px;
      height: 1000px;
  text-align: justify;
  background-color: #A3DDCB;
   background-size:cover;
  color: black;
  font-size: 25px;
	 border: double;



	   }

     .container{
       width: 50%;
       margin: auto;
       border-radius: 90px;

     }




    .divImageBg{
      background-color: #A3DDCB;
      width: 1200px;
      height: auto;
      padding: 200px;
      padding-left: 25px;
      padding-right: 25px;
      margin-top: 100px;
      margin-left: auto;
      margin-right: auto;
      border-bottom: solid 2px #8A8583;
      background-image:url("logo.jpg");
      background-size:cover;
        text-align center;
	  border: double;


    }

    .insertImage{
      background-color: #E8EBB7;
      width: 1250px;
      height: auto;
      margin-left: auto;
      margin-right: auto;
      border-bottom: solid 2px #8A8583;
	    columns: 100px 2;

    }

    .fullImage{
      width: 100%;



    }


	  box-sizing: border-box;



  .fontStyle{
  font-family: Helvetica, sans-serif;

}

.divText1{
  padding: 1px;
  height: 820px;
text-align: justify;
background-color: #FF7171;
background-size:cover;
color: black;
font-size: 25px;
  border-bottom: solid 2px #8A8583;
border: double;



 }

 .container{
   width: 60%;
   margin: auto;
   border-radius: 80px;

 }



.divImageBg{
  background-color: #FF7171;
  width: 1200px;
  height: auto;
  padding: 200px;
  padding-left: 25px;
  padding-right: 25px;
  margin-top: 50px;
  margin-left: auto;
  margin-right: auto;
  border-bottom: solid 2px #8A8583;
  background-image:url("logo.jpg");
  background-size:cover;
    text-align: center;
border: double;


}

.insertImage{
  background-color: #E8EBB7;
  width: 1250px;
  height: auto;
  margin-left: auto;
  margin-right: auto;
  border-bottom: solid 2px #8A8583;
  columns: 100px 2;

}

.fullImage{
  width: 100%;



}


box-sizing: border-box;


.fontStyle{
font-family: Helvetica, sans-serif;

}

.divText2{
padding: 1px;
  height: 1000px;
background-color: #D5A4CF;
background-size:cover;
color: black;
font-size: 25px;
  border-bottom: solid 2px #8A8583;
border: double;


 }

 .container{
   width: 60%;
   margin: auto;
   border-radius: 80px;

 }




.divImageBg{
background-color: #D5A4CF;
  width: 1200px;
  height: auto;
  padding: 200px;
  padding-left: 25px;
  padding-right: 25px;
  margin-top: 50px;
  margin-left: auto;
  margin-right: auto;
  border-bottom: solid 2px #8A8583;
  background-image:url("logo.jpg");
  background-size:cover;
    text-align: center;
border: double;


}

.insertImage{
  background-color: #E8EBB7;
  width: 1250px;
  height: auto;
  margin-left: auto;
  margin-right: auto;
  border-bottom: solid 2px #8A8583;
  columns: 100px 2;

}

.fullImage{
  width: 100%;



}


box-sizing: border-box;



.fontStyle{
font-family: Helvetica, sans-serif;


}


  </style>

</head>

<body>


<div class="divText3">
  <div class="container left">
<h3> Hi there! My Name is</h3>
          <h1 style="color:#E60965;"> JOYLENE JAYNE R. BASCONCILLO </h1>
          <p> BSCS 3-A </p>
        </div>
<br>

<div class="divText">
  <div class="container left">
    <h1 style="color:#4B8673;">✎ One lecture from CS 202</h1>
    <br> </br>
    <p>My favorite lecture from CS 202 is Concurrency Control.In a database management system,concurrency control refersto the process of handling many transactions at the same time while assuring their atomicity, isolation, consistency, and serializability.Concurrency control difficulties are a group of issues that develop when many transactions run at the same time in a random order. Concurrency control is the technique of controlling concurrent database operations that are treated as a transaction in a database management system. Concurrency Control is based on the notion of maintaining the state of a transaction, which might be complete or incomplete.When updating a database in a multi-user environment, concurrency control is critical to ensure data integrity. Concurrency control is used to implement mutual exclusion isolation. It ensures that the system is serialized. During read-write operations, it maintains data consistency and resolves conflicts. </p>
</div>

<br></br>
<br> </br>
<br>


 <div class = "divText1">
   <div class="container left">
  

<h1 style="color:#F32424">✎ One Laravel specific topic</h1>
<br>
<p> Laravel is a strong and easy-to-understand open-source PHP framework. The design pattern is model-view-controller. Laravel reuses existing components from several frameworks to aid in the development of web applications. The resulting web application is more organised and practical.Laravel is a robust PHP MVC framework for developers looking for a simple and attractive toolkit to build full-featured web applications.Taylor Otwell is the creator of Laravel.Laravel aims to make development easier by simplifying typical chores seen in most online applications, such  as authentication, routing, sessions, and caching. Laravel strives to make the <br> development  process enjoyable for developers while  maintaining  application <br> functionality.
</div>

<br></br>
<br>

<div class="divText2">
  <div class="container left">
    <div class="content">
      <br> </br>
      <br> </br>
      <br>
      <h1 style="color:#9772FB">╰┈➤ About Me</h1>
        <br>
      <p> I'm Joylene Jayne R. Basconcillo.I'm 21 years of age. Currently I am studying at Pamantasan ng Lungsod
         ng Pasig.Taking a course of Bachelor of Computer Science
      and I am 3rd year student. In my leisure time, I like listening to music.It is relaxing and enjoyable. </p>
    </div>
    <br>
    <div class="content">
      <p> In the next 6 years, I see myself working on my dream job and
       I have my own coffee shop. I will often trave to other parts of the world.
       I also see myself building my dream house for my family. My expectations in six years is that I see myself well educated and living my life to the fullest.Now is the time in my life when I must decide what I want to do with my future and what will make me happy. My future goals include a great job and a loving family that will support me in both good and terrible times. </p>
    </div>





</body>
</html>



@stop
