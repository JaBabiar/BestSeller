<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <style>
    /* Optional styling for a basic look */
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 20px;
    }
    .login-form {
      width: 300px;
      margin: auto;
      border: 1px solid #ddd;
      padding: 20px;
    }
    label {
      display: block;
      margin-bottom: 10px;
    }
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
      border: 1px solid #ccc;
    }
    button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="login-form">
    <h1>Login</h1>
    <form action="**" method="post">  <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>