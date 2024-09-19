<? 
require_once(__DIR__ ."/../../libs/Database.php");
require_once(__DIR__ ."/../../libs/Modelo.php");
include_once("../../clases/Aprendiz.php");

$database = new Database();
$connection = $database->getConnection();
$aprendiz = new Aprendiz($connection);

$id = $_REQUEST['id'];
$aprendiz->delete($id);
header('location: listar.php');

