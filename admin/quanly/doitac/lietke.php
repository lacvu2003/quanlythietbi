<style>
    @media screen and (max-width: 768px){
    table{
      display: block;
      border: 1px solid black;
      overflow-x: auto;
      -webkit-scrollbar{
        height: 12px;
      }
      
    }
}
</style>
<div class="them" style="padding-top: 50px; padding-bottom: 50px; padding-right: 25px;">
    <?php
        if($_SESSION['dangnhap'] == 'user@vd.com'){
            echo "";
        }
        else{
            echo '<a href="index.php?quanly=them_doitac">Thêm đối tác</a>';
        }
    ?>
    
</div>
<table class="lietkenhap" border="1" cellspacing = "0">
            <tr>
                <td>Mã hợp đồng</td>
                <td>Tên đối tác</td>
                <td>Quản lý</td>
            </tr>
            
                    <?php
                        // include ('admin/config/config.php');
                        $sql1 = "select * from hopdong where DoiTac != 'Không'";
                        $query1 = mysqli_query($connect,$sql1);
                        while($row = mysqli_fetch_array($query1)){
                    ?>
                    <tr>
                        <td><?php echo $row['MaHopDong'] ?></td>
                        <td><?php echo $row['DoiTac'] ?></td>
                        <td><a href="index.php?quanly=sua_doitac&dt=<?php echo $row['DoiTac'] ?>">Sửa | </a>
                        <?php 
                            if($_SESSION['dangnhap'] == 'user@vd.com'){
                                echo "";
                            }
                            else{
                        ?>
                            <a href="admin/quanly/doitac/xuly.php?dt=<?php echo $row['DoiTac'] ?>">Xóa</a>
                        <?php
                            }
                        ?>
                        </td>
                        </tr>
                    <?php
                    }
                    ?>
</table>