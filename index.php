<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>My Contact Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
  <main id="contactform" style="text-align: center;">
    <h1>Contact Me</h1>
    <form action="contactform.php" method="POST">
      <input type="text" name="name" placeholder="Full Name" />
      <br/>
      <input type="email" name="email" placeholder="Email" />
      <br/>
      <input type="text" name="subject" placeholder="Subject" />
      <br/>
      <textArea type="text" name="message" placeholder="Message"></textArea>
      <br/>
      <button style="border-radius: 10px;" type="submit" name="submit">Send</button>
    </form>
  </main>
</body>
</html>