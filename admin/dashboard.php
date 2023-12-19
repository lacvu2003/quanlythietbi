<style>
    .wrapper {
    width: 100%;
    height: 200px;
    display: flex;
    align-items: center;
    justify-content: start;
    flex-wrap: wrap;
    position: relative;
}
.nd1, .nd2, .nd3 {
    width: 250px;
    height: 100px;
    box-sizing: border-box;
    outline: none;
    margin: 0 40px;
    border-radius: 6px;
    background-color: white;
    box-shadow: 0 2px 4px rgba(0,0,20,.08), 0 1px 2px rgba(0,0,20,.08);;
    padding: 10px 10px;
    z-index: 9999;
    position: relative;
}
.nd1 span p, .nd2 span p, .nd3 span p{
    padding-top: 10px;
    font-size: 40px;
}
.nd1 i, .nd2 i, .nd3 i{
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 30px;
}
.nd1 a, .nd2 a, .nd3 a{
    text-decoration: none;
    color: black;
}
@media screen and (max-width: 768px){
	.wrapper {
        height: 500px;
        flex-direction: column; 
    }
    .nd1, .nd2, .nd3{
        margin-top: 40px;
    }
}
</style>
<div class="wrapper">
		<div class="nd1">
            <a href="index.php?quanly=lietkenhap">
                <p>
                    Tổng số phiếu nhập
                </p>
                <i class='bx bx-file' ></i>
                <span>
                    <?php
                        $sql = "SELECT COUNT(*) as tongnhap FROM phieuthongtinchung";
                        $query = mysqli_query($connect,$sql);
                        $data = mysqli_fetch_assoc($query);
                    ?>
                    <p><?php echo $data['tongnhap'] ?></p>
                </span>
            </a>
        </div>
		<div class="nd2">
            <a href="index.php?quanly=lietkesua">
                <p>
                    Tổng số phiếu sửa
                </p>
                <i class='bx bxs-wrench'></i>
                <span>
                    <?php
                        $sql = "SELECT COUNT(*) as tongsuachua FROM phieusuachua";
                        $query = mysqli_query($connect,$sql);
                        $data = mysqli_fetch_assoc($query);
                    ?>
                    <p><?php echo $data['tongsuachua'] ?></p>
                </span>
            </a>
        </div>
		<div class="nd3">
            <a href="index.php?quanly=doitac">
                <p>
                    Đối tác
                </p>
                <i class='bx bxs-contact' ></i>
                <span>
                    <?php
                        $sql1 = "SELECT COUNT(*) as tongdoitac from hopdong where DoiTac != 'Không'";
                        $query1= mysqli_query($connect,$sql1);
                        $data = mysqli_fetch_array($query1);
                    ?>
                    <p><?php echo $data['tongdoitac'] ?></p>
                </span>
            </a>
        </div>
</div>