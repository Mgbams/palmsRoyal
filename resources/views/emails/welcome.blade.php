<DOCTYPE html>
<html lang="fr-US">
     <head>
     <meta charset="utf-8">
     </head>
     <body>
        <h2> Hi {{ $data['name'] }}, we’re glad you’re here! Following are your account details: <br></h2>
        <h3>Email: </h3>
        <p> {{ $data['email'] }} </p>
    </body>
</html>