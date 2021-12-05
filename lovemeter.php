<html>
  <head>
    <meta charset="utf-8">
    <title>love meter</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  </head>
  <style type="text/css">
    
body {
  background: #577BC1;
  font-family: 'Lato', sans-serif;
  color: #FDFCFB;
  text-align: center;
}


form {
  width: 450px;
  margin: 17% auto;
}


.header {
  font-size: 35px;
  letter-spacing: 5px;
}


.description {
  font-size: 14px;
  letter-spacing: 1px;
  line-height: 1.3em;
  margin: -2px 0 45px;
}


.input {
  display: flex;
  align-items: center;
text-align: center;
  margin-right: 20px;
  padding-right: 10px;
}


.button {
  height: 44px;
  border: 1px solid;
  margin-left: 10px;
}

  
#email {
  width: 75%;
  background: #ffffff;
  font-family: inherit;
  color: #BD1616;
  letter-spacing: 1px;
  text-indent: 5%;
  border-radius: 5px 0 0 5px;
}


#submit {
  width: 25%;
  height: 46px;
  background: #344CB7;
  font-family: inherit;
  font-weight: bold;
  color: black;
  letter-spacing: 1px;
  border-radius: 0 5px 5px 0;
}
  

#submit:hover {
  background: #d45d7d;
}
  
input{
  text-align: center;
}
input:focus {
  outline: none;
  outline: 2px solid #E86C8D;
  box-shadow: 0 0 2px #E86C8D;
  
}
.bk{
    width: 450px;
    height: 350px;
  margin: 17% auto;
  border-radius: 20px;
  background-color:#EBE645;
  width: 50%;
  align-items: center;
  box-shadow: 0 0 2px #E86C8D;
}
.php{
  margin-top: 40px;
  border: 1px solid;
}
  </style>
  <body>
  <div class="bk">
    <form action="" method="post" name="sign up">
      <div class="back">
        
      
      <div class="header">
         <p>LOVE METER</p>
      </div>
      <div class="description">
        <p>The Love meter Algorithm. Love calculation by a love calculator is based on certain algorithm. Once two names are entered, this calculator matches the name of the first person against some love, romance and relationship related parameters.</p>
      </div>
      <div class="input">
        <input type="text" name="boy" class="button" placeholder="NAME ONE" >
              <input type="text" name="boy" class="button" placeholder="NAME TWO" >
        <input type="submit" class="button" id="submit" value="LOVE">
      </div>
      <div class="php"><?php $rand=rand(10,100);
    echo $rand."%"; ?></div>

      </div>
    </form>
  </div>
  </body>
</html>