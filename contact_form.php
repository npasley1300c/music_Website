<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css/contact_form.css">
        
    </head>
    <body>
        <div><img src="images/requests.png" onmouseover=
            "this.src='images/requests_hover.png';" onmouseout=
            "this.src='images/requests.png';" alt="Requests"></div>
        <form method="post" action="insert.php" target="bottom">
            <!--submitting query -->
           <div>
              Name: <input type="text" name="client" size="25" /> <br />
              Email: <input type="text" name="email" size="25" /> <br />
              Availability: 
              <select name="availability">
                  <option>morning(CST)</option>
                  <option>afternoon(CST)</option>
                  <option>evening(CST)</option>
              </select> <br/>
              Request:<input type="text" name="requests" size="25"/><br/>
              <input type="submit"/>
           </div>
        </form>
        
    </body>
</html>
