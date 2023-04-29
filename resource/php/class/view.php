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

        public function getnames(){
            $con = $this->con();
            $sql = "SELECT * FROM `tbl_accounts` WHERE id = 8";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $data) {
                echo "<div class='mt-3 mx-auto rounded-pill pt-3 pl-1 w-75 hr pb-3 text-light bg-dark'>";
                echo "<a href='template.php?id=8' name='name-link' method='post'>";
                echo profilePicu();
                echo $data['username'];
                echo "</a>";
                echo "</div>";
            }
        }

        public function getnames2(){
            $con = $this->con();
            $sql = "SELECT * FROM `tbl_accounts` WHERE id = 10";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $data) {
                echo "<div class='mt-3 mx-auto rounded-pill pt-3 pl-1 w-75 hr pb-3 text-light bg-dark'>";
                echo "<a href='template.php?id=10' name='name-link' method='post'>";
                echo profilePicu();
                echo $data['username'];
                echo "</a>";
                echo "</div>";
            }
        }

        public function getnames3(){
            $con = $this->con();
            $sql = "SELECT * FROM `tbl_accounts` WHERE id = 11";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $data) {
                echo "<div class='mt-3 mx-auto rounded-pill pt-3 pl-1 w-75 hr pb-3 text-light bg-dark'>";
                echo "<a href='template.php?id=11' name='name-link' method='post'>";
                echo profilePicu();
                echo $data['username'];
                echo "</a>";
                echo "</div>";
            }
        }

        public function getnames4(){
            $con = $this->con();
            $sql = "SELECT * FROM `tbl_accounts` WHERE id = 12";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $data) {
                echo "<div class='mt-3 mx-auto rounded-pill pt-3 pl-1 w-75 hr pb-3 text-light bg-dark'>";
                echo "<a href='template.php?id=12' name='name-link' method='post'>";
                echo profilePicu();
                echo $data['username'];
                echo "</a>";
                echo "</div>";
            }
        }

        public function getnames5(){
            $con = $this->con();
            $sql = "SELECT * FROM `tbl_accounts` WHERE id = 13";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $data) {
                echo "<div class='mt-3 mx-auto rounded-pill pt-3 pl-1 w-75 hr pb-3 text-light bg-dark'>";
                echo "<a href='template.php?id=13' name='name-link' method='post'>";
                echo profilePicu();
                echo $data['username'];
                echo "</a>";
                echo "</div>";
            }
        }

        public function getnames8(){
            $con = $this->con();
            $sql = "SELECT * FROM `tbl_accounts` WHERE id = 14";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $data) {
                echo "<div class='mt-3 mx-auto rounded-pill pt-3 pl-1 w-75 hr pb-3 text-light bg-dark'>";
                echo "<a href='template.php?id=14' name='name-link' method='post'>";
                echo profilePicu();
                echo $data['username'];
                echo "</a>";
                echo "</div>";
            }
        }
}
?>