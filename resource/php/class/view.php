<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/classrecord/resource/php/class/core/init.php';
require_once 'config.php';

class view extends config{

        public function collegeSP2(){
            $config = new config;
            $con = $config->con();
            $sql = "SELECT * FROM `collegeschool`";
            $data = $con-> prepare($sql);
            $data ->execute();
            $rows =$data-> fetchAll(PDO::FETCH_OBJ);
                foreach ($rows as $row) {
                  echo '<option data-tokens=".'.$row->college_school.'." value="'.$row->college_school.'">'.$row->college_school.'</option>';
                  echo 'success';
                }
        }

        public function rolesSP2(){
            $config = new config;
            $con = $config->con();
            $sql = "SELECT * FROM `roleschool`";
            $data = $con-> prepare($sql);
            $data ->execute();
            $rows =$data-> fetchAll(PDO::FETCH_OBJ);
                foreach ($rows as $row) {
                  echo '<option data-tokens=".'.$row->roles_school.'." value="'.$row->roles_school.'">'.$row->roles_school.'</option>';
                  echo 'success';
                }
        }

        public function getdpSRA(){
            $user = new user();
            return $user->data()->dp;
        }

        public function getMmSRA(){
            $user = new user();
             return $user->data()->mm;
        }

        public function ShowRoles($id){
            $con = $this->con();
            $id = isset($_GET['id']) ? $_GET['id'] : '';
            $sql = "SELECT * FROM `tbl_accounts` WHERE id = $id";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data;
          // Output the data for the specified ID
          foreach ($result as $data) {
            echo "<div class='jumbotron'>";
              echo "<h2 class='text-center'>Information </h2>";
              echo "<br/>";
              echo profilePicu();

              echo "<div class='mt-3 mx-auto rounded-pill pt-3 pl-1 w-75 hr pb-3 text-light bg-dark'>";
              echo "<h5>Username: </h5>";
              echo $data['username'];
              echo "</div>";

              echo "<div class='mt-3 mx-auto rounded-pill pt-3 pl-1 w-75 hr pb-3 text-light bg-dark'>";
              echo "<h5>Full Name: </h5>";
              echo $data['name'];
              echo "</div>";

              echo "<div class='mt-3 mx-auto rounded-pill pt-3 pl-1 w-75 hr pb-3 text-light bg-dark'>";
              echo "<h5>Course/College: </h5>";
              echo $data['colleges'];
              echo "</div>";

              echo "<div class='mt-3 mx-auto rounded-pill pt-3 pl-1 w-75 hr pb-3 text-light bg-dark'>";
              echo "<h5>Email: </h5>";
              echo $data['email'];
              echo "</div>";

              echo "<div class='mt-3 mx-auto rounded-pill pt-3 pl-1 w-75 hr pb-3 text-light bg-dark'>";
              echo "<h5>Role: </h5>";
              echo $data['role'];
              echo "</div>";

            echo "</div>";
          }
        }

        public function getInfo(){
            $con = $this->con();
            $id = isset($_GET['id']) ? $_GET['id'] : '';
            $sql = "SELECT `id`,`name` FROM `tbl_accounts`";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data;

            while ($row = $result->fetch()) {
              echo "<div class='mt-3 mx-auto rounded-pill pt-3 pl-1 w-100 hr pb-3 text-light bg-dark'>";
              echo "<div class='pill-wrapper'>";
              echo "<div class='profile-wrap'>";
              echo profilePicu();
              echo "</div>";
              echo "<div class='names-text'>";
              echo "<a class='name-link' style='color:white' href='template.php?id={$row['id']}'>";
              echo $row['name'];
              echo "</a>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
            }
          }
}
?>
