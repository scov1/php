$connection = mysqli_connect('localhost','root','Qwert12345','lessons');


$query='SELECT * FROM books';
$result =mysqli_query($connection,$query);
$data=mysqli_fetch_all($result);

var_dump($data);

mysqli_close($connection);