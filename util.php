<?php
class Util
{
    //Method of input value sanitization
    public function testInput($data)
    {

        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);

        return $data;
    }


    //ethod for displaying Success and error msg
    public function showMessage($type, $message)
    {
        return '<div class="alert alert-' . $type . ' alert-dismissible fade show" role="alert">
  <strong>' . $message . '</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }

}
?>