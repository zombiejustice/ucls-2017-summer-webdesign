<article class='elite-cadre'>
      <h3>
        Project: Password - Lesson 5: Encryption
      </h3>
      <p>
        We're making our logins more secure by encrypting the plaintext passwords before we put them in the database.
      </p>
      <pre>
/* this is php. */

$pwd = crypt($_POST['pwd']);
/* this line encrypts the new password */

$query = "INSERT INTO accounts VALUES ( DEFAULT, '$user', '$pwd' )";
/* this is the query we use to add new user / password pairs *
      </pre>
      <p>
        The encryption only works one way: there's no way to get the original password back from the encrypted one. So how can we compare them? Well, by encrypting the password the user enters at login using the same seed, and seeing if the <em>encrypted</em> passwords match.
      </p>
      <pre>
/* this is php */

/* after the query is sent and we have the results... */
  if (mysql_num_rows($result) > 0) {
    /* check if the user exists */
    
    $row = mysql_fetch_assoc($result);

    $hashed_password = crypt($_POST['pwd'], $row['password']);
    /* this is the new stuff */
    /* we need both the password attempt and the encrypted pwd stored in the db */
    /* we use the seed from the encrypted one to encrypt the attempt */

    if ($row['password'] == $hashed_password) {
    /* check the #encrypted# input vs user's #encrypted# password */
      
      /* correct user/password pair */
    }
      </pre>
    </article>
<?php include "o3password-l4/index.php"; ?>